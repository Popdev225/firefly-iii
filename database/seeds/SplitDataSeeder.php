<?php
/**
 * SplitDataSeeder.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

declare(strict_types = 1);
/**
 * SplitDataSeeder.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

use Carbon\Carbon;
use FireflyIII\Models\Transaction;
use FireflyIII\Models\TransactionJournal;
use FireflyIII\Support\Migration\TestData;
use FireflyIII\User;
use Illuminate\Database\Seeder;

/**
 * Class SplitDataSeeder
 */
class SplitDataSeeder extends Seeder
{
    /**
     * TestDataSeeder constructor.
     */
    public function __construct()
    {
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skipWithdrawal = false;
        $skipDeposit    = true;
        $skipTransfer   = true;
        // start by creating all users:
        // method will return the first user.
        $user = TestData::createUsers();

        // create all kinds of static data:
        $assets = [['name' => 'Checking Account', 'iban' => 'NL11XOLA6707795988', 'meta' => ['accountRole' => 'defaultAsset']],
                   ['name' => 'Alternate Checking Account', 'iban' => 'NL40UKBK3619908726', 'meta' => ['accountRole' => 'defaultAsset']],
                   ['name' => 'Savings Account', 'iban' => 'NL96DZCO4665940223', 'meta' => ['accountRole' => 'savingAsset']],
                   ['name' => 'Shared Checking Account', 'iban' => 'NL81RCQZ7160379858', 'meta' => ['accountRole' => 'sharedAsset']]];

        // some asset accounts
        TestData::createAssetAccounts($user, $assets);

        // budgets, categories and others:
        TestData::createBudgets($user);
        TestData::createCategories($user);
        TestData::createExpenseAccounts($user);
        TestData::createRevenueAccounts($user);
        TestData::createPiggybanks($user, 'Savings Account');
        TestData::createBills($user);
        // some bills

        /*
         * Create splitted expense of 66,-
         */
        $today = new Carbon('2012-03-14');

        if (!$skipWithdrawal) {
            $this->generateWithdrawals($user);
        }

        // create splitted income of 99,-
        $today->addDay();

        if (!$skipDeposit) {
            $this->generateDeposits();
        }
        // create a splitted transfer of 57,- (19)
        // $today->addDay();

        if (!$skipTransfer) {
            $this->generateTransfers();
        }
    }

    private function generateDeposits()
    {
        $journal = TransactionJournal::create(
            [
                'user_id'                 => $user->id,
                'transaction_type_id'     => 2, // expense
                'transaction_currency_id' => 1,
                'description'             => 'Split Income (journal)',
                'completed'               => 1,
                'date'                    => $today->format('Y-m-d'),
            ]
        );

        // split in 6 transactions (multiple destinations). 22,- each
        // source is TestData Checking Account.
        // also attach some budgets and stuff.
        $destinations = ['Checking Account', 'Savings Account', 'Shared Checking Account'];
        $source       = TestData::findAccount($user, 'Belastingdienst');
        $budgets      = ['Groceries', 'Groceries', 'Car'];
        $categories   = ['Bills', 'Bills', 'Car'];
        foreach ($destinations as $index => $dest) {
            $bud         = $budgets[$index];
            $cat         = $categories[$index];
            $destination = TestData::findAccount($user, $dest);

            $one = Transaction::create(
                [
                    'account_id'             => $source->id,
                    'transaction_journal_id' => $journal->id,
                    'amount'                 => '-33',

                ]
            );

            $two = Transaction::create(
                [
                    'account_id'             => $destination->id,
                    'transaction_journal_id' => $journal->id,
                    'amount'                 => '33',

                ]
            );

            $one->budgets()->save(TestData::findBudget($user, $bud));
            $two->budgets()->save(TestData::findBudget($user, $bud));

            $one->categories()->save(TestData::findCategory($user, $cat));
            $two->categories()->save(TestData::findCategory($user, $cat));
        }
    }

    private function generateTransfers()
    {
        $journal = TransactionJournal::create(
            [
                'user_id'                 => $user->id,
                'transaction_type_id'     => 3, // transfer
                'transaction_currency_id' => 1,
                'description'             => 'Split Transfer (journal)',
                'completed'               => 1,
                'date'                    => $today->format('Y-m-d'),
            ]
        );


        $source       = TestData::findAccount($user, 'Alternate Checking Account');
        $destinations = ['Checking Account', 'Savings Account', 'Shared Checking Account'];
        $budgets      = ['Groceries', 'Groceries', 'Car'];
        $categories   = ['Bills', 'Bills', 'Car'];
        foreach ($destinations as $index => $dest) {
            $bud         = $budgets[$index];
            $cat         = $categories[$index];
            $destination = TestData::findAccount($user, $dest);

            $one = Transaction::create(
                [
                    'account_id'             => $source->id,
                    'transaction_journal_id' => $journal->id,
                    'amount'                 => '-19',

                ]
            );

            $two = Transaction::create(
                [
                    'account_id'             => $destination->id,
                    'transaction_journal_id' => $journal->id,
                    'amount'                 => '19',

                ]
            );

            $one->budgets()->save(TestData::findBudget($user, $bud));
            $two->budgets()->save(TestData::findBudget($user, $bud));

            $one->categories()->save(TestData::findCategory($user, $cat));
            $two->categories()->save(TestData::findCategory($user, $cat));
        }
    }

    private function generateWithdrawals(User $user)
    {
        /*
         * TRANSACTION ONE
         */
        $date    = new Carbon('2012-03-15');
        $journal = TransactionJournal::create(
            [
                'user_id'                 => $user->id,
                'transaction_type_id'     => 1, // withdrawal
                'transaction_currency_id' => 1,
                'description'             => 'Split Even Expense (journal (50/50))',
                'completed'               => 1,
                'date'                    => $date->format('Y-m-d'),
            ]
        );

        // split in 6 transactions (multiple destinations). 22,- each
        // source is TestData Checking Account.
        // also attach some budgets and stuff.
        $destinations = ['SixtyFive', 'EightyFour'];
        $budgets      = ['Groceries', 'Car'];
        $categories   = ['Bills', 'Bills'];
        $amounts      = [50, 50];
        $source       = TestData::findAccount($user, 'Alternate Checking Account');
        foreach ($destinations as $index => $dest) {
            $bud         = $budgets[$index];
            $cat         = $categories[$index];
            $destination = TestData::findAccount($user, $dest);

            $one = Transaction::create(
                [
                    'account_id'             => $source->id,
                    'transaction_journal_id' => $journal->id,
                    'amount'                 => $amounts[$index] * -1,

                ]
            );

            $two = Transaction::create(
                [
                    'account_id'             => $destination->id,
                    'transaction_journal_id' => $journal->id,
                    'amount'                 => $amounts[$index],

                ]
            );

            $one->budgets()->save(TestData::findBudget($user, $bud));
            $two->budgets()->save(TestData::findBudget($user, $bud));

            $one->categories()->save(TestData::findCategory($user, $cat));
            $two->categories()->save(TestData::findCategory($user, $cat));
        }

        /*
         * GENERATE TRANSACTION TWO.
         */

        $date    = new Carbon;
        $journal = TransactionJournal::create(
            [
                'user_id'                 => $user->id,
                'transaction_type_id'     => 1, // withdrawal
                'transaction_currency_id' => 1,
                'description'             => 'Split Uneven Expense (journal (15/34/51=100))',
                'completed'               => 1,
                'date'                    => $date->format('Y-m-d'),
            ]
        );

        // split in 6 transactions (multiple destinations). 22,- each
        // source is TestData Checking Account.
        // also attach some budgets and stuff.
        $destinations = ['SixtyFive', 'EightyFour', 'Fiftyone'];
        $budgets      = ['Groceries', 'Groceries', 'Car'];
        $categories   = ['Bills', 'Bills', 'Car'];
        $amounts      = [15, 34, 51];
        $source       = TestData::findAccount($user, 'Checking Account');
        foreach ($destinations as $index => $dest) {
            $bud         = $budgets[$index];
            $cat         = $categories[$index];
            $destination = TestData::findAccount($user, $dest);

            $one = Transaction::create(
                [
                    'account_id'             => $source->id,
                    'transaction_journal_id' => $journal->id,
                    'amount'                 => $amounts[$index] * -1,

                ]
            );

            $two = Transaction::create(
                [
                    'account_id'             => $destination->id,
                    'transaction_journal_id' => $journal->id,
                    'amount'                 => $amounts[$index],

                ]
            );

            $one->budgets()->save(TestData::findBudget($user, $bud));
            $two->budgets()->save(TestData::findBudget($user, $bud));

            $one->categories()->save(TestData::findCategory($user, $cat));
            $two->categories()->save(TestData::findCategory($user, $cat));
        }
    }
}
