<?php
use Carbon\Carbon;
use Illuminate\Support\Collection;

/**
 * Class ReportController
 */
class ReportController extends BaseController
{


    public function budgets($year, $month)
    {
        try {
            $date = new Carbon($year . '-' . $month . '-01');
        } catch (Exception $e) {
            App::abort(500);
        }
        $start         = new Carbon($year . '-' . $month . '-01');
        $end           = clone $start;
        $title         = 'Reports';
        $subTitle      = 'Budgets in ' . $start->format('F Y');
        $mainTitleIcon = 'fa-line-chart';
        $subTitleIcon  = 'fa-bar-chart';

        $end->endOfMonth();


        // get a list of all budgets and expenses.
        /** @var \FireflyIII\Database\Budget $budgetRepository */
        $budgetRepository = App::make('FireflyIII\Database\Budget');

        /** @var \FireflyIII\Database\Account $accountRepository */
        $accountRepository = App::make('FireflyIII\Database\Account');


        $budgets = $budgetRepository->get();

        // calculate some stuff:
        $budgets->each(
            function (Budget $budget) use ($start, $end, $budgetRepository) {
                $limitRepetitions = $budget->limitrepetitions()->where('limit_repetitions.startdate', '>=', $start->format('Y-m-d'))->where(
                    'enddate', '<=', $end->format(
                        'Y-m-d'
                    )
                )->get();
                $repInfo          = [];
                /** @var LimitRepetition $repetition */
                foreach ($limitRepetitions as $repetition) {
                    $spent = $budgetRepository->spentInPeriod($budget, $start, $end);
                    if ($spent > floatval($repetition->amount)) {
                        // overspent!
                        $overspent = true;
                        $pct       = floatval($repetition->amount) / $spent * 100;

                    } else {
                        $overspent = false;
                        $pct       = $spent / floatval($repetition->amount) * 100;
                    }
                    $pctDisplay = $spent / floatval($repetition->amount) * 100;
                    $repInfo[]  = [
                        'date'        => DateKit::periodShow($repetition->startdate, $repetition->limit->repeat_freq),
                        'spent'       => $spent,
                        'budgeted'    => floatval($repetition->amount),
                        'left'        => floatval($repetition->amount) - $spent,
                        'pct'         => ceil($pct),
                        'pct_display' => ceil($pctDisplay),
                        'overspent'   => $overspent,
                    ];
                }
                $budget->repInfo = $repInfo;

            }
        );

        $accounts = $accountRepository->getAssetAccounts();

        $accounts->each(
            function (Account $account) use ($start, $end, $accountRepository) {
                $journals = $accountRepository->getTransactionJournalsInRange($account, $start, $end);
                $budgets  = [];
                /** @var TransactionJournal $journal */
                foreach ($journals as $journal) {
                    $budgetId   = isset($journal->budgets[0]) ? $journal->budgets[0]->id : 0;
                    $budgetName = isset($journal->budgets[0]) ? $journal->budgets[0]->name : '(no budget)';
                    if (!isset($budgets[$budgetId])) {
                        $arr                = [
                            'budget_id'   => $budgetId,
                            'budget_name' => $budgetName,
                            'spent'       => floatval($journal->getAmount()),
                            'budgeted'    => 0,
                        ];
                        $budgets[$budgetId] = $arr;
                    } else {
                        $budgets[$budgetId]['spent'] += floatval($journal->getAmount());
                    }
                }
                foreach ($budgets as $budgetId => $budget) {
                    $budgets[$budgetId]['left'] = $budget['budgeted'] - $budget['spent'];
                }
                $account->budgetInfo = $budgets;
            }
        );


        return View::make('reports.budgets', compact('start', 'end', 'title', 'subTitle', 'subTitleIcon', 'mainTitleIcon', 'budgets', 'accounts'));

    }

    /**
     *
     */
    public function index()
    {
        /** @var \FireflyIII\Database\TransactionJournal $journals */
        $journals = App::make('FireflyIII\Database\TransactionJournal');
        /** @var TransactionJournal $journal */
        $journal = $journals->first();

        $date   = clone $journal->date;
        $years  = [];
        $months = [];
        while ($date <= Carbon::now()) {
            $years[] = $date->format('Y');
            $date->addYear();
        }
        // months
        $date = clone $journal->date;
        while ($date <= Carbon::now()) {
            $months[] = [
                'formatted' => $date->format('F Y'),
                'month'     => intval($date->format('m')),
                'year'      => intval($date->format('Y')),
            ];
            $date->addMonth();
        }


        return View::make('reports.index', compact('years', 'months'))->with('title', 'Reports')->with('mainTitleIcon', 'fa-line-chart');
    }

    public function unbalanced($year, $month)
    {
        try {
            $date = new Carbon($year . '-' . $month . '-01');
        } catch (Exception $e) {
            App::abort(500);
        }
        $start         = new Carbon($year . '-' . $month . '-01');
        $end           = clone $start;
        $title         = 'Reports';
        $subTitle      = 'Unbalanced transactions in ' . $start->format('F Y');
        $mainTitleIcon = 'fa-line-chart';
        $subTitleIcon  = 'fa-bar-chart';
        $end->endOfMonth();

        /** @var \FireflyIII\Database\TransactionJournal $journalRepository */
        $journalRepository = App::make('FireflyIII\Database\TransactionJournal');

        $journals    = $journalRepository->getInDateRange($start, $end);
        $withdrawals = $journals->filter(
            function (TransactionJournal $journal) {
                if ($journal->transactionType->type == 'Withdrawal' && count($journal->budgets) == 0) {
                    return $journal;
                }
            }
        );

        // filter again for transfers
        $transfers = $journals->filter(
            function (TransactionJournal $journal) {
                if ($journal->transactionType->type == 'Transfer') {
                    return $journal;
                }
            }
        );

        $withdrawals->each(
            function (TransactionJournal $journal) {
                $collection = new Collection;
                /** @var Transaction $transaction */
                foreach ($journal->transactions as $transaction) {
                    if (floatval($transaction->amount) < 0) {
                        $account = $transaction->account;
                        // find counter transfer:
                        $counters = $account->transactions()->where('amount', floatval($transaction->amount) * -1)
                                            ->leftJoin('transaction_journals', 'transaction_journals.id', '=', 'transactions.transaction_journal_id')
                                            ->where('transaction_journals.description', 'LIKE', '%' . e($journal->description) . '%')
                                            ->get(['transactions.*']);
                        /** @var Transaction $ct */
                        foreach ($counters as $ct) {
                            $collection->push($ct->transactionjournal);
                        }
                    }
                }
                $journal->counters = $collection;
            }
        );

        // same for transfers but the other way around! Yay!
        $transfers->each(
            function (TransactionJournal $journal) {
                $collection = new Collection;
                /** @var Transaction $transaction */
                foreach ($journal->transactions as $transaction) {
                    if (floatval($transaction->amount) < 0) {
                        $account = $transaction->account;
                        // TODO this has to be the most lame way of filtering ever.
                        $descr = trim(str_replace('Geld voor','',$journal->description));
                        // find counter transfer:
                        $counters = $account->transactions()->where('amount', floatval($transaction->amount))
                                            ->leftJoin('transaction_journals', 'transaction_journals.id', '=', 'transactions.transaction_journal_id')
                                            ->where('transaction_journals.description', 'LIKE', '%' . $descr . '%')
                                            ->get(['transactions.*']);
                        /** @var Transaction $ct */
                        foreach ($counters as $ct) {
                            $collection->push($ct->transactionjournal);
                        }
                    }
                }
                $journal->counters = $collection;
            }
        );

        return View::make('reports.unbalanced', compact('start','transfers', 'end', 'title', 'subTitle', 'subTitleIcon', 'mainTitleIcon', 'withdrawals'));
    }

    /**
     * @param $year
     *
     * @return $this
     */
    public function year($year)
    {
        try {
            $date = new Carbon('01-01-' . $year);
        } catch (Exception $e) {
            App::abort(500);
        }
        $date = new Carbon('01-01-' . $year);
        /** @var \FireflyIII\Database\TransactionJournal $tj */
        $tj = App::make('FireflyIII\Database\TransactionJournal');

        // get some sums going
        $summary = [];


        $end = clone $date;
        $end->endOfYear();
        while ($date < $end) {
            $summary[] = ['month' => $date->format('F'), 'income' => $tj->getSumOfIncomesByMonth($date), 'expense' => $tj->getSumOfExpensesByMonth($date),];
            $date->addMonth();
        }


        // draw some charts etc.
        return View::make('reports.year', compact('summary'))->with('title', 'Reports')->with('mainTitleIcon', 'fa-line-chart')->with('subTitle', $year)->with(
            'subTitleIcon', 'fa-bar-chart'
        )->with('year', $year);
    }

}