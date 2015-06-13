<?php
use Carbon\Carbon;
use FireflyIII\Models\Tag;
use FireflyIII\Repositories\Tag\TagRepository;
use League\FactoryMuffin\Facade as FactoryMuffin;

/**
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * Generated by PHPUnit_SkeletonGenerator on 2015-05-05 at 19:19:32.
 */
class TagRepositoryTest extends TestCase
{
    /**
     * @var TagRepository
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function setUp()
    {
        $this->object = new TagRepository;
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
     * Already connected tag and transaction journal returns FALSE.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::connect
     */
    public function testConnectAlreadyConnected()
    {
        $journal = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $tag     = FactoryMuffin::create('FireflyIII\Models\Tag');
        $journal->tags()->save($tag);

        $result = $this->object->connect($journal, $tag);
        $this->assertFalse($result);

    }

    /**
     * A deposit cannot be connected to a balancing act.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::connect
     * @covers FireflyIII\Repositories\Tag\TagRepository::connectBalancingAct
     */
    public function testConnectBalancingOneDeposit()
    {
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $deposit = FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');

        $journal = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $tag     = FactoryMuffin::create('FireflyIII\Models\Tag');

        $journal->transaction_type_id = $deposit->id;
        $tag->tagMode                 = 'balancingAct';

        $tag->save();
        $journal->save();

        $result = $this->object->connect($journal, $tag);
        $this->assertFalse($result);

    }

    /**
     * Connecting a single transfer to a balancing act is possible if there are no
     * other transfers already connected.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::connect
     * @covers FireflyIII\Repositories\Tag\TagRepository::connectBalancingAct
     */
    public function testConnectBalancingOneTransfer()
    {
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $transfer = FactoryMuffin::create('FireflyIII\Models\TransactionType');

        $journal = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $tag     = FactoryMuffin::create('FireflyIII\Models\Tag');

        $journal->transaction_type_id = $transfer->id;
        $tag->tagMode                 = 'balancingAct';

        $tag->save();
        $journal->save();

        $result = $this->object->connect($journal, $tag);
        $this->assertTrue($result);

    }

    /**
     * Connecting a single withdrawal to a balancing act is possible if there are
     * not other withdrawals already connected.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::connect
     * @covers FireflyIII\Repositories\Tag\TagRepository::connectBalancingAct
     */
    public function testConnectBalancingOneWithdrawal()
    {
        $withdrawal = FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');

        $journal = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $tag     = FactoryMuffin::create('FireflyIII\Models\Tag');

        $journal->transaction_type_id = $withdrawal->id;
        $tag->tagMode                 = 'balancingAct';

        $tag->save();
        $journal->save();

        $result = $this->object->connect($journal, $tag);
        $this->assertTrue($result);

    }

    /**
     * Default connection between a journal and a tag.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::connect
     */
    public function testConnectDefault()
    {
        $journal      = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $tag          = FactoryMuffin::create('FireflyIII\Models\Tag');
        $tag->tagMode = 'nothing';
        $tag->save();

        $result = $this->object->connect($journal, $tag);
        $this->assertTrue($result);

    }

    /**
     * Fallback for connect then the tag mode is unknown
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::connect
     */
    public function testConnectInvalidType()
    {
        $journal      = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $tag          = FactoryMuffin::create('FireflyIII\Models\Tag');
        $tag->tagMode = 'Idontknow';
        $tag->save();

        $result = $this->object->connect($journal, $tag);
        $this->assertFalse($result);

    }

    /**
     * Once one or more journals have been accepted by the tag, others must match the asset account
     * id. For this to work, we must also create an asset account, and a transaction.
     *
     * Connecting a deposit to a tag that already has a withdrawal.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::connect
     * @covers FireflyIII\Repositories\Tag\TagRepository::connectAdvancePayment
     * @covers FireflyIII\Repositories\Tag\TagRepository::matchAll
     */
    public function testConnectPaymentMultipleMatch()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        $this->be($user);

        $withdrawal = FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $deposit    = FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');

        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        $asset = FactoryMuffin::create('FireflyIII\Models\AccountType');

        $account = FactoryMuffin::create('FireflyIII\Models\Account');


        $journal1 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $journal2 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');

        // transactions for both:
        $journal1->transactions[0]->account_id = $account->id;
        $journal2->transactions[0]->account_id = $account->id;
        $journal1->transactions[1]->account_id = $account->id;
        $journal2->transactions[1]->account_id = $account->id;
        $journal1->transactions[0]->save();
        $journal2->transactions[0]->save();
        $journal1->transactions[1]->save();
        $journal2->transactions[1]->save();

        $tag = FactoryMuffin::create('FireflyIII\Models\Tag');

        $journal1->transaction_type_id = $withdrawal->id;
        $journal2->transaction_type_id = $deposit->id;
        $tag->tagMode                  = 'advancePayment';
        $account->account_type_id      = $asset->id;

        $tag->save();
        $journal1->save();
        $journal2->save();
        $account->save();
        // connect journal1:

        $journal1->tags()->save($tag);

        echo "\nMark 1 start.\n";
        $result = $this->object->connect($journal2, $tag);
        echo "\nMark 2 end.\n";

        $this->assertTrue($result);

    }

    /**
     * Once one or more journals have been accepted by the tag, others must match the asset account
     * id. For this to work, we must also create an asset account, and a transaction.
     *
     * This covers the advance payment
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @covers FireflyIII\Repositories\Tag\TagRepository::connect
     * @covers FireflyIII\Repositories\Tag\TagRepository::connectAdvancePayment
     * @covers FireflyIII\Repositories\Tag\TagRepository::matchAll
     */
    public function testConnectPaymentNoMatch()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        $this->be($user);

        $withdrawal = FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $deposit    = FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');

        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        $asset = FactoryMuffin::create('FireflyIII\Models\AccountType');

        $account1 = FactoryMuffin::create('FireflyIII\Models\Account');
        $account2 = FactoryMuffin::create('FireflyIII\Models\Account');


        $journal1 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $journal2 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');

        // transactions for both:
        $journal1->transactions[0]->account_id = $account1->id;
        $journal2->transactions[0]->account_id = $account2->id;
        $journal1->transactions[1]->account_id = $account1->id;
        $journal2->transactions[1]->account_id = $account2->id;
        $journal1->transactions[0]->save();
        $journal2->transactions[0]->save();
        $journal1->transactions[1]->save();
        $journal2->transactions[1]->save();


        $tag = FactoryMuffin::create('FireflyIII\Models\Tag');

        $journal1->transaction_type_id = $withdrawal->id;
        $journal2->transaction_type_id = $deposit->id;
        $tag->tagMode                  = 'advancePayment';
        $account1->account_type_id     = $asset->id;
        $account2->account_type_id     = $asset->id;

        $tag->save();
        $journal1->save();
        $journal2->save();
        $account1->save();
        $account2->save();
        // connect journal1:
        $journal1->tags()->save($tag);

        $result = $this->object->connect($journal2, $tag);
        // account1 and account2 are different, so false:
        $this->assertFalse($result);

    }

    /**
     * Once one or more journals have been accepted by the tag, others must match the asset account
     * id. For this to work, we must also create an asset account, and a transaction.
     *
     * This covers the advance payment
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @covers FireflyIII\Repositories\Tag\TagRepository::connect
     * @covers FireflyIII\Repositories\Tag\TagRepository::connectAdvancePayment
     * @covers FireflyIII\Repositories\Tag\TagRepository::matchAll
     */
    public function testConnectPaymentNoMatchDeposit()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        $this->be($user);

        $withdrawal = FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $deposit    = FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');

        FactoryMuffin::create('FireflyIII\Models\AccountType');
        FactoryMuffin::create('FireflyIII\Models\AccountType');
        $asset = FactoryMuffin::create('FireflyIII\Models\AccountType');

        $account1 = FactoryMuffin::create('FireflyIII\Models\Account');
        $account2 = FactoryMuffin::create('FireflyIII\Models\Account');


        $journal1 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $journal2 = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');

        // transactions for both:
        $journal1->transactions[0]->account_id = $account1->id;
        $journal2->transactions[0]->account_id = $account2->id;
        $journal1->transactions[1]->account_id = $account1->id;
        $journal2->transactions[1]->account_id = $account2->id;
        $journal1->transactions[0]->save();
        $journal2->transactions[0]->save();
        $journal1->transactions[1]->save();
        $journal2->transactions[1]->save();


        $tag = FactoryMuffin::create('FireflyIII\Models\Tag');

        $journal1->transaction_type_id = $withdrawal->id;
        $journal2->transaction_type_id = $deposit->id;
        $tag->tagMode                  = 'advancePayment';
        $account1->account_type_id     = $asset->id;
        $account2->account_type_id     = $asset->id;

        $tag->save();
        $journal1->save();
        $journal2->save();
        $account1->save();
        $account2->save();
        // connect journal1:
        $journal2->tags()->save($tag);

        $result = $this->object->connect($journal1, $tag);
        // account1 and account2 are different, so false:
        $this->assertFalse($result);

    }

    /**
     * An advance payment accepts no transfers.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::connect
     * @covers FireflyIII\Repositories\Tag\TagRepository::connectAdvancePayment
     * @covers FireflyIII\Repositories\Tag\TagRepository::matchAll
     */
    public function testConnectPaymentOneTransfer()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        $this->be($user);

        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $transfer = FactoryMuffin::create('FireflyIII\Models\TransactionType');

        $journal = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $tag     = FactoryMuffin::create('FireflyIII\Models\Tag');

        $journal->transaction_type_id = $transfer->id;
        $tag->tagMode                 = 'advancePayment';

        $tag->save();
        $journal->save();

        $result = $this->object->connect($journal, $tag);
        $this->assertFalse($result);

    }

    /**
     * An advance payment accepts only one withdrawal, not two.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::connect
     * @covers FireflyIII\Repositories\Tag\TagRepository::connectAdvancePayment
     * @covers FireflyIII\Repositories\Tag\TagRepository::matchAll
     */
    public function testConnectPaymentOneWithdrawal()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        $this->be($user);

        $withdrawal = FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');

        $journal = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $tag     = FactoryMuffin::create('FireflyIII\Models\Tag');

        $journal->transaction_type_id = $withdrawal->id;
        $tag->tagMode                 = 'advancePayment';

        $tag->save();
        $journal->save();

        $result = $this->object->connect($journal, $tag);
        $this->assertTrue($result);

    }

    /**
     * An advance payment accepts only one withdrawal, not two.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::connect
     * @covers FireflyIII\Repositories\Tag\TagRepository::connectAdvancePayment
     * @covers FireflyIII\Repositories\Tag\TagRepository::matchAll
     */
    public function testConnectPaymentTwoWithdrawals()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        $this->be($user);

        $withdrawal = FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');

        $journal      = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $otherJournal = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $tag          = FactoryMuffin::create('FireflyIII\Models\Tag');

        $journal->transaction_type_id      = $withdrawal->id;
        $otherJournal->transaction_type_id = $withdrawal->id;
        $tag->tagMode                      = 'advancePayment';

        $tag->save();
        $journal->save();
        $otherJournal->save();
        $otherJournal->tags()->save($tag);

        $result = $this->object->connect($journal, $tag);
        $this->assertFalse($result);

    }

    /**
     * An advance payment accepts only one withdrawal, not two, even not
     * if the accounts are the same
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::connect
     * @covers FireflyIII\Repositories\Tag\TagRepository::connectAdvancePayment
     * @covers FireflyIII\Repositories\Tag\TagRepository::matchAll
     */
    public function testConnectPaymentTwoWithdrawalsSameAccounts()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        $this->be($user);

        $withdrawal = FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');
        FactoryMuffin::create('FireflyIII\Models\TransactionType');

        $journal      = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $otherJournal = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $tag          = FactoryMuffin::create('FireflyIII\Models\Tag');

        $journal->transaction_type_id      = $withdrawal->id;
        $otherJournal->transaction_type_id = $withdrawal->id;

        // match up accounts:
        $otherJournal->transactions[0]->account_id = $journal->transactions[0]->account_id;
        $otherJournal->transactions[1]->account_id = $journal->transactions[1]->account_id;
        $otherJournal->transactions[0]->save();
        $otherJournal->transactions[1]->save();


        $tag->tagMode = 'advancePayment';

        $tag->save();
        $journal->save();
        $otherJournal->save();
        $otherJournal->tags()->save($tag);

        $result = $this->object->connect($journal, $tag);
        $this->assertFalse($result);
    }


    /**
     * By default, any tag can become an advancePayment
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::tagAllowAdvance
     */
    public function testTagAllowAdvance()
    {
        // create a tag
        $user         = FactoryMuffin::create('FireflyIII\User');
        $tag          = FactoryMuffin::create('FireflyIII\Models\Tag');
        $tag->tagMode = 'nothing';
        $tag->user_id = $user->id;
        $tag->save();

        $result = $this->object->tagAllowAdvance($tag);
        $this->assertTrue($result);
    }

    /**
     * If the tag has one transfer, it can NOT become an advance payment.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::tagAllowAdvance
     */
    public function testTagAllowAdvanceWithTransfer()
    {
        // create a tag
        $user = FactoryMuffin::create('FireflyIII\User');
        $tag  = FactoryMuffin::create('FireflyIII\Models\Tag');
        FactoryMuffin::create('FireflyIII\Models\TransactionType'); // withdrawal
        FactoryMuffin::create('FireflyIII\Models\TransactionType'); // deposit
        $transfer     = FactoryMuffin::create('FireflyIII\Models\TransactionType'); // transfer
        $tag->tagMode = 'nothing';
        $tag->user_id = $user->id;
        $tag->save();

        // create withdrawal:
        $journal                      = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $journal->transaction_type_id = $transfer->id;
        $journal->save();
        $journal->tags()->save($tag);

        $result = $this->object->tagAllowAdvance($tag);
        $this->assertFalse($result);
    }

    /**
     * If the tag has one withdrawal, it can still become an advance payment.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::tagAllowAdvance
     */
    public function testTagAllowAdvanceWithWithdrawal()
    {
        // create a tag
        $user         = FactoryMuffin::create('FireflyIII\User');
        $tag          = FactoryMuffin::create('FireflyIII\Models\Tag');
        $tag->tagMode = 'nothing';
        $tag->user_id = $user->id;
        $tag->save();

        // create withdrawal:
        $journal = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
        $journal->tags()->save($tag);

        $result = $this->object->tagAllowAdvance($tag);
        $this->assertTrue($result);
    }

    /**
     * If the tag has two withdrawals, it CANNOT become an advance payment.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::tagAllowAdvance
     */
    public function testTagAllowAdvanceWithWithdrawals()
    {
        // create a tag
        $user         = FactoryMuffin::create('FireflyIII\User');
        $tag          = FactoryMuffin::create('FireflyIII\Models\Tag');
        $withdrawal   = FactoryMuffin::create('FireflyIII\Models\TransactionType');
        $tag->tagMode = 'nothing';
        $tag->user_id = $user->id;
        $tag->save();

        // create withdrawals
        for ($i = 0; $i < 2; $i++) {
            $journal                      = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
            $journal->transaction_type_id = $withdrawal->id;
            $journal->save();
            $journal->tags()->save($tag);
        }

        $result = $this->object->tagAllowAdvance($tag);
        $this->assertFalse($result);
    }

    /**
     * By default, an empty tag can become a balancing act.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::tagAllowBalancing
     */
    public function testTagAllowBalancing()
    {
        // create a tag
        $user         = FactoryMuffin::create('FireflyIII\User');
        $tag          = FactoryMuffin::create('FireflyIII\Models\Tag');
        $tag->tagMode = 'nothing';
        $tag->user_id = $user->id;
        $tag->save();

        $result = $this->object->tagAllowBalancing($tag);
        $this->assertTrue($result);
    }

    /**
     * When the tag has one deposit, it can NOT become a balancing act.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::tagAllowBalancing
     */
    public function testTagAllowBalancingDeposit()
    {

        // create a tag
        FactoryMuffin::create('FireflyIII\Models\TransactionType'); // withdrawal
        $deposit      = FactoryMuffin::create('FireflyIII\Models\TransactionType'); // deposit
        $user         = FactoryMuffin::create('FireflyIII\User');
        $tag          = FactoryMuffin::create('FireflyIII\Models\Tag');
        $tag->tagMode = 'nothing';
        $tag->user_id = $user->id;
        $tag->save();

        // create three journals and connect them:
        for ($i = 0; $i < 1; $i++) {
            $journal                      = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
            $journal->transaction_type_id = $deposit->id;
            $journal->save();
            $journal->tags()->save($tag);
        }

        $result = $this->object->tagAllowBalancing($tag);
        $this->assertFalse($result);
    }

    /**
     * When the tag has more than 2 transactions connected to it, it cannot become abalancing act.
     *
     * @covers FireflyIII\Repositories\Tag\TagRepository::tagAllowBalancing
     */
    public function testTagAllowBalancingManyJournals()
    {
        // create a tag
        $user         = FactoryMuffin::create('FireflyIII\User');
        $tag          = FactoryMuffin::create('FireflyIII\Models\Tag');
        $tag->tagMode = 'nothing';
        $tag->user_id = $user->id;
        $tag->save();

        // create three journals and connect them:
        for ($i = 0; $i < 3; $i++) {
            $journal = FactoryMuffin::create('FireflyIII\Models\TransactionJournal');
            $journal->tags()->save($tag);
        }

        $result = $this->object->tagAllowBalancing($tag);
        $this->assertFalse($result);
    }
}
