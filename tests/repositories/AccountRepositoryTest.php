<?php
use Carbon\Carbon;
use FireflyIII\Models\Account;
use FireflyIII\Models\AccountMeta;
use FireflyIII\Models\AccountType;
use FireflyIII\Models\PiggyBankRepetition;
use FireflyIII\Models\Preference;
use FireflyIII\Models\Transaction;
use FireflyIII\Repositories\Account\AccountRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use League\FactoryMuffin\Facade as FactoryMuffin;

/**
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * Generated by PHPUnit_SkeletonGenerator on 2015-05-05 at 16:33:55.
 */
class AccountRepositoryTest extends TestCase
{
    /**
     * @var AccountRepository
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function setUp()
    {
        $this->object = new AccountRepository;
        parent::setUp();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    public function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::countAccounts
     */
    public function testCountAccounts()
    {
        $account = FactoryMuffin::create('FireflyIII\Models\Account');
        $type    = $account->accountType->type;
        $this->be($account->user);

        $this->assertEquals(1, $this->object->countAccounts([$type]));
    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::destroy
     */
    public function testDestroy()
    {
        // create account:
        $account = FactoryMuffin::create('FireflyIII\Models\Account');
        $accountId      = $account->id;
        $this->be($account->user);


        $this->object->destroy($account);

        // cannot find account:
        $this->assertCount(0, Account::whereId($accountId)->whereNotNull('deleted_at')->get());
    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::getAccounts
     */
    public function testGetAccounts()
    {
        $account = FactoryMuffin::create('FireflyIII\Models\Account');
        $type    = $account->accountType->type;
        $this->be($account->user);

        $this->assertCount(1, $this->object->getAccounts([$type]));
    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::getCreditCards
     */
    public function testGetCreditCards()
    {
        $account = FactoryMuffin::create('FireflyIII\Models\Account');

        // create account meta object:
        $meta             = new  AccountMeta;
        $meta->name       = 'accountRole';
        $meta->data       = 'ccAsset';
        $meta->account_id = $account->id;
        $meta->save();

        // meta account type
        $meta             = new  AccountMeta;
        $meta->name       = 'ccType';
        $meta->data       = 'monthlyFull';
        $meta->account_id = $account->id;
        $meta->save();

        // login
        $this->be($account->user);

        // test!
        $this->assertCount(1, $this->object->getCreditCards());

    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::getFirstTransaction
     */
    public function testGetFirstTransaction()
    {
        $account = FactoryMuffin::create('FireflyIII\Models\Account');
        $journal = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');

        // two matching transactions:
        $first = Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal->id,
                'amount'                 => 100,
            ]
        );
        Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal->id,
                'amount'                 => -100,
            ]
        );

        // login
        $this->be($account->user);

        $oldest = $this->object->getFirstTransaction($journal, $account);

        $this->assertEquals($oldest->amount, $first->amount);
        $this->assertEquals($oldest->id, $first->id);

    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::getFrontpageAccounts
     */
    public function testGetFrontpageAccounts()
    {
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');


        // making two account types is kind of cheating but it works.
        $account = FactoryMuffin::create('FireflyIII\Models\Account');
        /** @var Preference $preference */
        $preference       = FactoryMuffin::create('FireflyIII\Models\Preference');
        $preference->data = [];
        $preference->save();
        $this->be($account->user);

        $set = $this->object->getFrontpageAccounts($preference);

        $this->assertEquals($account->id, $set->first()->id);

    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::getFrontpageAccounts
     */
    public function testGetFrontpageAccountsWithPreference()
    {
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');


        // making two account types is kind of cheating but it works.
        $account = FactoryMuffin::create('FireflyIII\Models\Account');
        /** @var Preference $preference */
        $preference       = FactoryMuffin::create('FireflyIII\Models\Preference');
        $preference->data = [$account->id];
        $preference->save();
        $this->be($account->user);

        $set = $this->object->getFrontpageAccounts($preference);

        $this->assertEquals($account->id, $set->first()->id);
    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::getFrontpageTransactions
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testGetFrontpageTransactions()
    {
        // three journals
        /** @var Account $account */
        $account  = FactoryMuffin::create('FireflyIII\Models\Account');
        $journal1 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $journal2 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $journal3 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');

        // three dates (one is out of bounds)
        $journal1->date    = new Carbon('2012-01-02');
        $journal1->user_id = $account->user_id;
        $journal2->date    = new Carbon('2012-01-09');
        $journal2->user_id = $account->user_id;
        $journal3->date    = new Carbon('2012-02-02');
        $journal3->user_id = $account->user_id;

        // save all
        $journal1->save();
        $journal2->save();
        $journal3->save();

        // transactions to match the dates (one per journal will do)
        Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal1->id,
                'amount'                 => 100
            ]
        );
        Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal2->id,
                'amount'                 => 100
            ]
        );
        Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal3->id,
                'amount'                 => 100
            ]
        );

        // be user
        $this->be($journal1->user);

        // get set:

        $set = $this->object->getFrontpageTransactions($account, new Carbon('2012-01-01'), new Carbon('2012-01-31'));

        // should have two left.
        $this->assertCount(2, $set);

    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::getJournals
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testGetJournals()
    {
        $date = new Carbon;
        // three journals
        /** @var Account $account */
        $account  = FactoryMuffin::create('FireflyIII\Models\Account');
        $journal1 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $journal2 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $journal3 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');

        // three dates (one is out of bounds)
        $journal1->date    = $date;
        $journal1->user_id = $account->user_id;
        $journal2->date    = $date;
        $journal2->user_id = $account->user_id;
        $journal3->date    = $date;
        $journal3->user_id = $account->user_id;

        // save all
        $journal1->save();
        $journal2->save();
        $journal3->save();

        // transactions to match the dates (one per journal will do)
        Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal1->id,
                'amount'                 => 100
            ]
        );
        Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal2->id,
                'amount'                 => 100
            ]
        );
        Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal3->id,
                'amount'                 => 100
            ]
        );

        // be user
        $this->be($journal1->user);

        // get paginator:
        /** @var LengthAwarePaginator $paginator */
        $paginator = $this->object->getJournals($account, 1);

        // should have three entries:
        $this->assertEquals(3, $paginator->count());
        $this->assertEquals(1, $paginator->currentPage());
        $this->assertFalse($paginator->isEmpty());


    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::getLastActivity
     */
    public function testGetLastActivity()
    {
        $date = new Carbon('2012-02-02');
        // one journal
        /** @var Account $account */
        $account          = FactoryMuffin::create('FireflyIII\Models\Account');
        $journal          = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $journal->date    = $date;
        $journal->user_id = $account->user_id;
        $journal->save();

        // transaction to match the date (one will do)
        Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal->id,
                'amount'                 => 100
            ]
        );

        // be user
        $this->be($journal->user);

        $latest = $this->object->getLastActivity($account);
        $this->assertEquals($date->format('Y-m-d'), $latest->format('Y-m-d'));

    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::getLastActivity
     */
    public function testGetLastActivityNoActivity()
    {
        /** @var Account $account */
        $account = FactoryMuffin::create('FireflyIII\Models\Account');
        $this->be($account->user);

        $latest = $this->object->getLastActivity($account);
        $this->assertnull($latest);

    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::getPiggyBankAccounts
     */
    public function testGetPiggyBankAccounts()
    {
        $date = Carbon::now()->startOfMonth()->addDays(3);
        /*
         * Quite the collection of objects for this one.
         */
        $piggyBank           = FactoryMuffin::create('FireflyIII\Models\PiggyBank');
        $account             = FactoryMuffin::create('FireflyIII\Models\Account');
        $piggyBankRepetition = $piggyBank->piggybankRepetitions()->first();
        /*
         * Update id's to match each other:
         */
        $piggyBankRepetition->currentamount = rand(1, 100);
        $piggyBankRepetition->startdate     = $date;
        $piggyBankRepetition->targetdate    = $date;
        $piggyBank->account_id              = $account->id;
        $piggyBankRepetition->save();
        $piggyBank->save();

        /*
         * Put dates in session:
         */
        $this->session(['start' => Carbon::now()->startOfMonth(), 'end' => Carbon::now()->endOfMonth()]);

        /*
         * Run method:
         */
        $this->be($account->user);
        $collection = $this->object->getPiggyBankAccounts();

        $this->assertCount(1, $collection);
        $this->assertEquals($collection->first()->id, $account->id);
        $this->assertEquals($collection->first()->piggyBalance, $piggyBankRepetition->currentamount);
        $this->assertEquals(0, $collection->first()->startBalance);
        $this->assertEquals(0, $collection->first()->endBalance);
    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::getSavingsAccounts
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testGetSavingsAccounts()
    {
        // create three accounts:
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        $type                      = FactoryMuffin::create('FireflyIII\Models\AccountType');
        $account1                  = FactoryMuffin::create('FireflyIII\Models\Account');
        $account1->account_type_id = $type->id;
        $account2                  = FactoryMuffin::create('FireflyIII\Models\Account');
        $account2->account_type_id = $type->id;
        $account3                  = FactoryMuffin::create('FireflyIII\Models\Account');
        $account3->account_type_id = $type->id;

        // make them savings accounts:
        $meta             = new  AccountMeta;
        $meta->name       = 'accountRole';
        $meta->data       = 'savingAsset';
        $meta->account_id = $account1->id;
        $meta->save();

        $meta             = new  AccountMeta;
        $meta->name       = 'accountRole';
        $meta->data       = 'savingAsset';
        $meta->account_id = $account2->id;
        $meta->save();

        $meta             = new  AccountMeta;
        $meta->name       = 'accountRole';
        $meta->data       = 'savingAsset';
        $meta->account_id = $account3->id;
        $meta->save();

        // assign to the same user:
        $account2->user_id = $account1->user_id;
        $account3->user_id = $account1->user_id;
        $account1->save();
        $account2->save();
        $account3->save();
        $this->be($account1->user);

        // mock steam balance:
        Steam::shouldReceive('balance')->andReturn(0, 0, 1, 2, 4, 3);

        // get the result from the method:
        $result = $this->object->getSavingsAccounts();

        $this->assertEquals(0, $result->get(0)->difference);
        $this->assertEquals(1, $result->get(1)->difference);
        $this->assertEquals(-1, $result->get(2)->difference);

        $this->assertEquals(100, $result->get(0)->percentage);
        $this->assertEquals(100, $result->get(1)->percentage);
        $this->assertEquals(25, $result->get(2)->percentage);
    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::getTransfersInRange
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testGetTransfersInRange()
    {
        FactoryMuffin::create('FireflyIII\Models\Account');


        // three transfers, two out of range:
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $journal1                      = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $journal2                      = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $journal3                      = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $account                       = FactoryMuffin::create('FireflyIII\Models\Account');
        $journal2->transaction_type_id = $journal1->transaction_type_id;
        $journal3->transaction_type_id = $journal1->transaction_type_id;

        // three transactions:
        Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal1->id,
                'amount'                 => 100
            ]
        );
        Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal2->id,
                'amount'                 => 100
            ]
        );
        Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal3->id,
                'amount'                 => 100
            ]
        );

        // check date:
        $start   = new Carbon('2014-01-01');
        $end     = new Carbon('2014-01-31');
        $inRange = new Carbon('2014-01-15');
        $before  = new Carbon('2013-01-15');
        $after   = new Carbon('2015-01-15');

        // journal 1 will match:
        $journal1->date    = $inRange;
        $journal1->user_id = $account->user_id;
        $journal2->date    = $before;
        $journal2->user_id = $account->user_id;
        $journal3->date    = $after;
        $journal3->user_id = $account->user_id;
        $journal1->save();
        $journal2->save();
        $journal3->save();
        $this->be($account->user);

        $set = $this->object->getTransfersInRange($account, $start, $end);


        $this->assertEquals(1, $set->count());
        $this->assertEquals(100, $set->first()->amount);
        $this->assertEquals($journal1->description, $set->first()->description);

    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::leftOnAccount
     */
    public function testLeftOnAccount()
    {
        $piggyBank                          = FactoryMuffin::create('FireflyIII\Models\PiggyBank');
        $piggyBankRepetition                = $piggyBank->piggybankRepetitions()->first();
        $piggyBankRepetition->currentamount = rand(1, 100);
        $piggyBankRepetition->save();
        $this->be($piggyBank->account->user);


        $result = $this->object->leftOnAccount($piggyBank->account, new Carbon);

        $this->assertEquals($piggyBankRepetition->currentamount * -1, $result);


    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::openingBalanceTransaction
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testOpeningBalanceTransaction()
    {
        $account  = FactoryMuffin::create('FireflyIII\Models\Account');
        $journal1 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $journal2 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        // two transactions:
        Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal1->id,
                'amount'                 => 100
            ]
        );
        Transaction::create(
            [
                'account_id'             => $account->id,
                'transaction_journal_id' => $journal2->id,
                'amount'                 => 100
            ]
        );

        // dates
        $one = new Carbon('2013-01-15');
        $two = new Carbon('2015-01-15');

        // journal 1 will match:
        $journal1->date    = $one;
        $journal1->user_id = $account->user_id;
        $journal2->date    = $two;
        $journal2->user_id = $account->user_id;
        $journal1->save();
        $journal2->save();


        $this->be($account->user);

        $result = $this->object->openingBalanceTransaction($account);
        $this->assertEquals($journal1->id, $result->id);
        $this->assertEquals($journal1->description, $result->description);
        $this->assertEquals(100, $result->amount);
    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::openingBalanceTransaction
     */
    public function testOpeningBalanceTransactionNull()
    {
        $account = FactoryMuffin::create('FireflyIII\Models\Account');
        $this->be($account->user);

        $result = $this->object->openingBalanceTransaction($account);
        $this->assertNull($result);
    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::store
     * @covers FireflyIII\Repositories\Account\AccountRepository::storeAccount
     * @covers FireflyIII\Repositories\Account\AccountRepository::storeMetadata
     * @covers FireflyIII\Repositories\Account\AccountRepository::storeInitialBalance
     *
     */
    public function testStore()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $currency = FactoryMuffin::create('FireflyIII\Models\TransactionCurrency');
        $this->be($user);

        $data = [
            'accountType'            => 'expense',
            'user'                   => $user->id,
            'name'                   => 'Test account #' . rand(1, 100),
            'active'                 => true,
            'accountRole'            => 'testAccount',
            'openingBalance'         => 100,
            'virtualBalance'         => 0,
            'openingBalanceCurrency' => $currency->id,
            'openingBalanceDate'     => '2015-01-01',
        ];


        $account = $this->object->store($data);

        $this->assertEquals($data['name'], $account->name);

    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::store
     * @covers FireflyIII\Repositories\Account\AccountRepository::storeAccount
     * @covers FireflyIII\Repositories\Account\AccountRepository::storeMetadata
     * @covers FireflyIII\Repositories\Account\AccountRepository::storeInitialBalance
     */
    public function testStoreWithExistingAccount()
    {
        $account = FactoryMuffin::create('FireflyIII\Models\Account');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $currency = FactoryMuffin::create('FireflyIII\Models\TransactionCurrency');
        $this->be($account->user);


        $data = [
            'accountType'            => 'expense',
            'user'                   => $account->user->id,
            'name'                   => $account->name,
            'active'                 => $account->active,
            'accountRole'            => 'testAccount',
            'openingBalance'         => 0,
            'virtualBalance'         => 0,
            'openingBalanceCurrency' => $currency->id,
            'openingBalanceDate'     => '2015-01-01',
        ];


        $newAccount = $this->object->store($data);

        $this->assertEquals($account->name, $newAccount->name);
        $this->assertEquals($account->id, $newAccount->id);

    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::store
     * @covers FireflyIII\Repositories\Account\AccountRepository::storeAccount
     * @covers FireflyIII\Repositories\Account\AccountRepository::storeMetadata
     * @covers FireflyIII\Repositories\Account\AccountRepository::storeInitialBalance
     * @expectedException Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function testStoreWithInvalidAccountData()
    {
        $account = FactoryMuffin::create('FireflyIII\Models\Account');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $currency = FactoryMuffin::create('FireflyIII\Models\TransactionCurrency');
        $this->be($account->user);


        $data = [
            'accountType'            => 'expense',
            'user'                   => $account->user->id + 12,
            'name'                   => $account->name,
            'active'                 => $account->active,
            'accountRole'            => 'testAccount',
            'openingBalance'         => 0,
            'virtualBalance'         => 0,
            'openingBalanceCurrency' => $currency->id,
            'openingBalanceDate'     => '2015-01-01',
        ];

        $this->object->store($data);

    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::store
     * @covers FireflyIII\Repositories\Account\AccountRepository::storeAccount
     * @covers FireflyIII\Repositories\Account\AccountRepository::storeMetadata
     * @covers FireflyIII\Repositories\Account\AccountRepository::storeInitialBalance
     */
    public function testStoreWithNegativeInitialBalance()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $currency = FactoryMuffin::create('FireflyIII\Models\TransactionCurrency');
        $this->be($user);

        $data = [
            'accountType'            => 'expense',
            'user'                   => $user->id,
            'name'                   => 'Test account #' . rand(1, 100),
            'active'                 => true,
            'accountRole'            => 'testAccount',
            'openingBalance'         => -100,
            'virtualBalance'         => 0,
            'openingBalanceCurrency' => $currency->id,
            'openingBalanceDate'     => '2015-01-01',
        ];


        $account = $this->object->store($data);

        $this->assertEquals($data['name'], $account->name);
        $this->assertEquals(-100, $account->transactions()->first()->amount);

    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::sumOfEverything
     */
    public function testSumOfEverything()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        $this->be($user);

        $this->assertEquals(0, $this->object->sumOfEverything());
    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::update
     * @covers FireflyIII\Repositories\Account\AccountRepository::updateMetadata
     * @covers FireflyIII\Repositories\Account\AccountRepository::updateInitialBalance
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testUpdate()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $currency = FactoryMuffin::create('FireflyIII\Models\TransactionCurrency');
        $this->be($user);

        $data = [
            'accountType'            => 'expense',
            'user'                   => $user->id,
            'name'                   => 'Test account #' . rand(1, 100),
            'active'                 => true,
            'accountRole'            => 'testAccount',
            'openingBalance'         => 100,
            'virtualBalance'         => 0,
            'openingBalanceCurrency' => $currency->id,
            'openingBalanceDate'     => '2015-01-01',
        ];


        $account = $this->object->store($data);

        // now update that same account:
        $data = [
            'name'                   => 'New account name' . rand(0, 100),
            'active'                 => 1,
            'virtualBalance'         => 0,
            'openingBalance'         => 50,
            'openingBalanceCurrency' => $currency->id,
            'openingBalanceDate'     => '2015-02-02',
        ];

        $newAccount = $this->object->update($account, $data);

        $this->assertEquals($data['name'], $newAccount->name);
        $this->assertEquals(50, $account->transactions()->first()->amount);


    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::update
     * @covers FireflyIII\Repositories\Account\AccountRepository::updateMetadata
     * @covers FireflyIII\Repositories\Account\AccountRepository::updateInitialBalance
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testUpdateDeleteOpeningBalance()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $currency = FactoryMuffin::create('FireflyIII\Models\TransactionCurrency');
        $this->be($user);

        $data = [
            'accountType'            => 'expense',
            'user'                   => $user->id,
            'name'                   => 'Test account #' . rand(1, 100),
            'active'                 => true,
            'accountRole'            => 'testAccount',
            'openingBalance'         => 100,
            'virtualBalance'         => 0,
            'openingBalanceCurrency' => $currency->id,
            'openingBalanceDate'     => '2015-01-01',
        ];


        $account = $this->object->store($data);

        // now update that same account:
        $data = [
            'name'           => 'New account name' . rand(0, 100),
            'active'         => 1,
            'user'           => $user->id,
            'accountRole'    => 'testAccount',
            'virtualBalance' => 0,
            'openingBalance' => 0,
        ];

        $newAccount = $this->object->update($account, $data);

        $this->assertEquals($data['name'], $newAccount->name);
        $this->assertEquals(0, $newAccount->transactions()->whereNull('deleted_at')->count());


    }

    /**
     * @covers FireflyIII\Repositories\Account\AccountRepository::update
     * @covers FireflyIII\Repositories\Account\AccountRepository::updateMetadata
     * @covers FireflyIII\Repositories\Account\AccountRepository::updateInitialBalance
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testUpdateNewOpeningBalance()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $currency = FactoryMuffin::create('FireflyIII\Models\TransactionCurrency');
        $this->be($user);

        $data = [
            'accountType'    => 'expense',
            'user'           => $user->id,
            'name'           => 'Test account #' . rand(1, 100),
            'active'         => true,
            'accountRole'    => 'testAccount',
            'openingBalance' => 0,
            'virtualBalance' => 0,
        ];


        $account = $this->object->store($data);

        // now update that same account:
        $data = [
            'name'                   => 'New account name' . rand(0, 100),
            'active'                 => 1,
            'user'                   => $user->id,
            'virtualBalance'         => 0,
            'accountRole'            => 'testAccount',
            'ccMonthlyPaymentDate'   => '2015-01-01',
            'openingBalance'         => 51,
            'openingBalanceCurrency' => $currency->id,
            'openingBalanceDate'     => '2015-02-02',
        ];

        $newAccount = $this->object->update($account, $data);

        $this->assertEquals($data['name'], $newAccount->name);
        $this->assertEquals(51, $account->transactions()->first()->amount);


    }
}
