<?php namespace FireflyIII\Providers;

use FireflyIII\Models\Account;
use FireflyIII\Models\BudgetLimit;
use FireflyIII\Models\LimitRepetition;
use FireflyIII\Models\PiggyBank;
use FireflyIII\Models\PiggyBankRepetition;
use FireflyIII\Models\Transaction;
use FireflyIII\Models\TransactionJournal;
use FireflyIII\Support\Facades\Navigation;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Log;

/**
 * Class EventServiceProvider
 *
 * @package FireflyIII\Providers
 */
class EventServiceProvider extends ServiceProvider
{

    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen
        = [
            'FireflyIII\Events\JournalSaved' => [
                'FireflyIII\Handlers\Events\RescanJournal',
                'FireflyIII\Handlers\Events\UpdateJournalConnection',

            ],
            'FireflyIII\Events\JournalCreated' => [
                'FireflyIII\Handlers\Events\ConnectJournalToPiggyBank',
            ]
        ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher $events
     *
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        TransactionJournal::deleted(
            function (TransactionJournal $journal) {

                /** @var Transaction $transaction */
                foreach ($journal->transactions()->get() as $transaction) {
                    $transaction->delete();
                }
            }
        );



        Account::deleted(
            function (Account $account) {

                /** @var Transaction $transaction */
                foreach ($account->transactions()->get() as $transaction) {
                    $journal = $transaction->transactionJournal()->first();
                    $journal->delete();
                }
            }
        );

        // move this routine to a filter
        // in case of repeated piggy banks and/or other problems.
        PiggyBank::created(
            function (PiggyBank $piggyBank) {
                $repetition = new PiggyBankRepetition;
                $repetition->piggyBank()->associate($piggyBank);
                $repetition->startdate     = is_null($piggyBank->startdate) ? null : $piggyBank->startdate;
                $repetition->targetdate    = is_null($piggyBank->targetdate) ? null : $piggyBank->targetdate;
                $repetition->currentamount = 0;
                $repetition->save();
            }
        );

        BudgetLimit::saved(
            function (BudgetLimit $budgetLimit) {

                $end = Navigation::addPeriod(clone $budgetLimit->startdate, $budgetLimit->repeat_freq, 0);
                $end->subDay();

                $set = $budgetLimit->limitrepetitions()->where('startdate', $budgetLimit->startdate->format('Y-m-d'))->where('enddate', $end->format('Y-m-d'))
                                   ->get();
                /*
                 * Create new LimitRepetition:
                 */
                if ($set->count() == 0) {

                    $repetition            = new LimitRepetition;
                    $repetition->startdate = $budgetLimit->startdate;
                    $repetition->enddate   = $end;
                    $repetition->amount    = $budgetLimit->amount;
                    $repetition->budgetLimit()->associate($budgetLimit);

                    try {
                        $repetition->save();
                    } catch (QueryException $e) {
                        \Log::error('Trying to save new LimitRepetition failed!');
                        \Log::error($e->getMessage());
                    }
                } else {
                    if ($set->count() == 1) {
                        /*
                         * Update existing one.
                         */
                        $repetition         = $set->first();
                        $repetition->amount = $budgetLimit->amount;
                        $repetition->save();

                    }
                }
            }
        );


    }

}
