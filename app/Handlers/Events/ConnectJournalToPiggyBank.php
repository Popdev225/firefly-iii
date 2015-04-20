<?php namespace FireflyIII\Handlers\Events;

use Auth;
use FireflyIII\Events\JournalCreated;
use FireflyIII\Models\PiggyBank;
use FireflyIII\Models\PiggyBankEvent;
use FireflyIII\Models\Transaction;
use FireflyIII\Models\TransactionJournal;
use Log;

/**
 * Class ConnectJournalToPiggyBank
 *
 * @package FireflyIII\Handlers\Events
 */
class ConnectJournalToPiggyBank
{

    /**
     * Create the event handler.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event when journal is saved.
     *
     * @param  JournalCreated $event
     *
     * @return void
     */
    public function handle(JournalCreated $event)
    {
        /** @var TransactionJournal $journal */
        $journal     = $event->journal;
        $piggyBankId = $event->piggyBankId;
        if (intval($piggyBankId) < 1) {
            return;
        }

        Log::debug('JournalCreated event: ' . $journal->id . ', ' . $piggyBankId);

        /** @var PiggyBank $piggyBank */
        $piggyBank = Auth::user()->piggybanks()->where('piggy_banks.id', $piggyBankId)->first(['piggy_banks.*']);

        if (is_null($piggyBank) || $journal->transactionType->type != 'Transfer') {
            return;
        }
        Log::debug('Found a piggy bank');
        $amount = $journal->amount;
        Log::debug('Amount: ' . $amount);
        if ($amount == 0) {
            return;
        }
        // update piggy bank rep for date of transaction journal.
        $repetition = $piggyBank->piggyBankRepetitions()->relevantOnDate($journal->date)->first();
        if (is_null($repetition)) {
            Log::debug('Found no repetition for piggy bank for date ' . $journal->date->format('Y M d'));

            return;
        }

        Log::debug('Found rep! ' . $repetition->id);
        $repetition->currentamount += $amount;
        $repetition->save();

        PiggyBankEvent::create(
            [
                'piggy_bank_id'          => $piggyBank->id,
                'transaction_journal_id' => $journal->id,
                'date'                   => $journal->date,
                'amount'                 => $amount
            ]
        );

    }


}
