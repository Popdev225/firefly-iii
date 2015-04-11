<?php namespace FireflyIII\Http\Controllers;

use Amount;
use Auth;
use Carbon\Carbon;
use FireflyIII\Helpers\Report\ReportQueryInterface;
use FireflyIII\Models\Account;
use FireflyIII\Models\Bill;
use FireflyIII\Models\Transaction;
use FireflyIII\Models\TransactionType;
use FireflyIII\Repositories\Account\AccountRepositoryInterface;
use FireflyIII\Repositories\Bill\BillRepositoryInterface;
use Illuminate\Support\Collection;
use Preferences;
use Response;
use Session;
use Steam;

/**
 * Class JsonController
 *
 * @package FireflyIII\Http\Controllers
 */
class JsonController extends Controller
{


    /**
     * @param BillRepositoryInterface $repository
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function boxBillsPaid(BillRepositoryInterface $repository, AccountRepositoryInterface $accountRepository)
    {
        $start  = Session::get('start');
        $end    = Session::get('end');
        $amount = 0;

        // these two functions are the same as the chart TODO
        $bills = Auth::user()->bills()->where('active', 1)->get();

        /** @var Bill $bill */
        foreach ($bills as $bill) {
            $ranges = $repository->getRanges($bill, $start, $end);

            foreach ($ranges as $range) {
                // paid a bill in this range?
                $count = $bill->transactionjournals()->before($range['end'])->after($range['start'])->count();
                if ($count != 0) {
                    // TODO this only gets the first match, may be more than one.
                    $journal = $bill->transactionjournals()->with('transactions')->before($range['end'])->after($range['start'])->first();
                    $amount += $journal->amount;
                }

            }
        }


        /**
         * Find credit card accounts and possibly unpaid credit card bills.
         */
        $creditCards = $accountRepository->getCreditCards();
        // if the balance is not zero, the monthly payment is still underway.
        /** @var Account $creditCard */
        foreach ($creditCards as $creditCard) {
            $balance = Steam::balance($creditCard, null, true);
            if ($balance == 0) {
                // find a transfer TO the credit card which should account for
                // anything paid. If not, the CC is not yet used.
                $transactions = $creditCard->transactions()
                                           ->leftJoin('transaction_journals', 'transaction_journals.id', '=', 'transactions.transaction_journal_id')
                                           ->before($end)->after($start)->get();
                if ($transactions->count() > 0) {
                    /** @var Transaction $transaction */
                    foreach ($transactions as $transaction) {
                        $journal = $transaction->transactionJournal;
                        if ($journal->transactionType->type == 'Transfer') {
                            $amount += floatval($transaction->amount);
                        }
                    }
                }
            }
        }

        return Response::json(['box' => 'bills-paid', 'amount' => Amount::format($amount, false), 'amount_raw' => $amount]);
    }

    /**
     * @param BillRepositoryInterface    $repository
     * @param AccountRepositoryInterface $accountRepository
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function boxBillsUnpaid(BillRepositoryInterface $repository, AccountRepositoryInterface $accountRepository)
    {
        $start  = Session::get('start');
        $end    = Session::get('end');
        $amount = 0;

        $bills  = $repository->getActiveBills();
        $unpaid = new Collection; // bills

        /** @var Bill $bill */
        foreach ($bills as $bill) {
            $ranges = $repository->getRanges($bill, $start, $end);

            foreach ($ranges as $range) {
                // paid a bill in this range?
                $journals = $repository->getJournalsInRange($bill, $range['start'], $range['end']);
                if ($journals->count() == 0) {
                    $unpaid->push([$bill, $range['start']]);
                }
            }
        }
        unset($bill, $range, $ranges);

        $creditCards = $accountRepository->getCreditCards();
        foreach ($creditCards as $creditCard) {
            $balance = Steam::balance($creditCard, null, true);
            $date    = new Carbon($creditCard->getMeta('ccMonthlyPaymentDate'));
            if ($balance < 0) {
                // unpaid! create a fake bill that matches the amount.
                $description = $creditCard->name;
                $fakeAmount  = $balance * -1;
                $fakeBill    = $repository->createFakeBill($description, $date, $fakeAmount);
                $unpaid->push([$fakeBill, $date]);
            }
        }
        // loop unpaid:

        /** @var Bill $entry */
        foreach ($unpaid as $entry) {
            $current = ($entry[0]->amount_max + $entry[0]->amount_min) / 2;
            $amount += $current;
        }

        return Response::json(['box' => 'bills-unpaid', 'amount' => Amount::format($amount, false), 'amount_raw' => $amount]);
    }

    /**
     * @param ReportQueryInterface $reportQuery
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function boxIn(ReportQueryInterface $reportQuery)
    {
        $start  = Session::get('start');
        $end    = Session::get('end');
        $amount = 0;

        $set = $reportQuery->incomeByPeriod($start, $end, true);
        foreach ($set as $entry) {
            $amount += $entry->queryAmount;
        }

        return Response::json(['box' => 'in', 'amount' => Amount::format($amount, false), 'amount_raw' => $amount]);
    }

    /**
     * @param ReportQueryInterface $reportQuery
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function boxOut(ReportQueryInterface $reportQuery)
    {
        $start  = Session::get('start');
        $end    = Session::get('end');
        $amount = 0;

        $set = $reportQuery->journalsByExpenseAccount($start, $end, true);

        foreach ($set as $entry) {
            $amount += $entry->queryAmount;
        }

        return Response::json(['box' => 'out', 'amount' => Amount::format($amount, false), 'amount_raw' => $amount]);
    }

    /**
     * Returns a list of categories.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function categories()
    {
        $list   = Auth::user()->categories()->orderBy('name', 'ASC')->get();
        $return = [];
        foreach ($list as $entry) {
            $return[] = $entry->name;
        }

        return Response::json($return);
    }

    /**
     * Returns a JSON list of all beneficiaries.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function expenseAccounts()
    {
        $list   = Auth::user()->accounts()->orderBy('accounts.name', 'ASC')->accountTypeIn(['Expense account', 'Beneficiary account'])->get();
        $return = [];
        foreach ($list as $entry) {
            $return[] = $entry->name;
        }

        return Response::json($return);

    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function revenueAccounts()
    {
        $list   = Auth::user()->accounts()->accountTypeIn(['Revenue account'])->orderBy('accounts.name', 'ASC')->get(['accounts.*']);
        $return = [];
        foreach ($list as $entry) {
            $return[] = $entry->name;
        }

        return Response::json($return);

    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function setSharedReports()
    {
        $pref = Preferences::get('showSharedReports', false);
        $new  = !$pref->data;
        Preferences::set('showSharedReports', $new);


        return Response::json(['value' => $new]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showSharedReports()
    {
        $pref = Preferences::get('showSharedReports', false);

        return Response::json(['value' => $pref->data]);
    }

    /**
     * @param $what
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function transactionJournals($what)
    {
        $descriptions = [];
        $dbType       = TransactionType::whereType($what)->first();
        $journals     = Auth::user()->transactionjournals()->where('transaction_type_id', $dbType->id)
                            ->orderBy('id', 'DESC')->take(50)
                            ->get();
        foreach ($journals as $j) {
            $descriptions[] = $j->description;
        }

        $descriptions = array_unique($descriptions);
        sort($descriptions);

        return Response::json($descriptions);


    }

}
