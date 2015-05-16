<?php
use Carbon\Carbon;
use FireflyIII\Models\Budget;
use FireflyIII\Models\BudgetLimit;
use FireflyIII\Repositories\Budget\BudgetRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use League\FactoryMuffin\Facade as FactoryMuffin;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-05-05 at 19:16:07.
 */
class BudgetRepositoryTest extends TestCase
{
    /**
     * @var BudgetRepository
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function setUp()
    {
        $this->object = new BudgetRepository;
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
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::cleanupBudgets
     */
    public function testCleanupBudgets()
    {
        // create some budgets:
        for ($i = 0; $i < 3; $i++) {
            $budget           = FactoryMuffin::create('FireflyIII\Models\Budget');
            $limit            = FactoryMuffin::create('FireflyIII\Models\BudgetLimit');
            $limit->budget_id = $budget->id;
            $limit->amount    = 0;
            $limit->save();
        }


        $this->object->cleanupBudgets();

        $this->assertCount(0, BudgetLimit::get());

    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::destroy
     * @todo   Implement testDestroy().
     */
    public function testDestroy()
    {
        $budget = FactoryMuffin::create('FireflyIII\Models\Budget');

        $this->object->destroy($budget);

        $this->assertCount(0, Budget::where('id', $budget->id)->whereNull('deleted_at')->get());
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::expensesOnDay
     * @todo   Implement testExpensesOnDay().
     */
    public function testExpensesOnDay()
    {
        $budget = FactoryMuffin::create('FireflyIII\Models\Budget');

        $result = $this->object->expensesOnDay($budget, new Carbon);

        $this->assertEquals(0, $result);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getActiveBudgets
     */
    public function testGetActiveBudgets()
    {
        $budget1          = FactoryMuffin::create('FireflyIII\Models\Budget');
        $budget2          = FactoryMuffin::create('FireflyIII\Models\Budget');
        $budget1->active  = 1;
        $budget2->active  = 0;
        $budget2->user_id = $budget1->user_id;
        $budget1->save();
        $budget2->save();
        $this->be($budget1->user);

        $set = $this->object->getActiveBudgets();

        $this->assertCount(1, $set);
        $this->assertEquals($set->first()->id, $budget1->id);

    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getBudgetLimitRepetitions
     */
    public function testGetBudgetLimitRepetitions()
    {
        $rep              = FactoryMuffin::create('FireflyIII\Models\LimitRepetition');
        $limit            = $rep->budgetlimit;
        $limit->startdate = new Carbon('2015-02-02');
        $rep->startdate   = new Carbon('2015-02-02');
        $rep->enddate     = new Carbon('2015-02-28');
        $limit->save();
        $rep->save();

        $set = $this->object->getBudgetLimitRepetitions($rep->budgetlimit->budget, new Carbon('2015-02-01'), new Carbon('2015-02-28'));
        $this->assertCount(2, $set);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getBudgetLimits
     */
    public function testGetBudgetLimits()
    {
        /** @var Budget $budget */
        $budget = FactoryMuffin::create('FireflyIII\Models\Budget');
        $set    = $this->object->getBudgetLimits($budget);

        $this->assertCount(0, $set);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getBudgets
     */
    public function testGetBudgets()
    {
        $budget1          = FactoryMuffin::create('FireflyIII\Models\Budget');
        $budget2          = FactoryMuffin::create('FireflyIII\Models\Budget');
        $budget1->active  = 1;
        $budget2->active  = 0;
        $budget2->user_id = $budget1->user_id;
        $budget1->save();
        $budget2->save();
        $this->be($budget1->user);

        $set = $this->object->getBudgets();

        $this->assertCount(2, $set);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getCurrentRepetition
     */
    public function testGetCurrentRepetition()
    {
        /** @var Budget $budget */
        $budget = FactoryMuffin::create('FireflyIII\Models\Budget');
        $rep    = $this->object->getCurrentRepetition($budget, new Carbon);
        $this->assertNull($rep);

    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getFirstBudgetLimitDate
     */
    public function testGetFirstBudgetLimitDate()
    {
        /** @var BudgetLimit $budget */
        $limit = FactoryMuffin::create('FireflyIII\Models\BudgetLimit');
        $date  = $this->object->getFirstBudgetLimitDate($limit->budget);
        $this->assertEquals($date->format('Y-m-d'), $limit->startdate->format('Y-m-d'));
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getFirstBudgetLimitDate
     */
    public function testGetFirstBudgetLimitDateNull()
    {
        /** @var Budget $budget */
        $budget  = FactoryMuffin::create('FireflyIII\Models\Budget');
        $date    = $this->object->getFirstBudgetLimitDate($budget);
        $ownDate = Carbon::now()->startOfYear();
        $this->assertEquals($date->format('Y-m-d'), $ownDate->format('Y-m-d'));
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getInactiveBudgets
     */
    public function testGetInactiveBudgets()
    {
        $budget1          = FactoryMuffin::create('FireflyIII\Models\Budget');
        $budget2          = FactoryMuffin::create('FireflyIII\Models\Budget');
        $budget1->active  = 1;
        $budget2->active  = 0;
        $budget2->user_id = $budget1->user_id;
        $budget1->save();
        $budget2->save();
        $this->be($budget1->user);

        $set = $this->object->getInactiveBudgets();

        $this->assertCount(1, $set);
        $this->assertEquals($set->first()->id, $budget2->id);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getJournals
     */
    public function testGetJournals()
    {
        $repetition = FactoryMuffin::create('FireflyIII\Models\LimitRepetition');

        $set = $this->object->getJournals($repetition->budgetlimit->budget, $repetition);
        $this->assertTrue($set instanceof LengthAwarePaginator);
        $this->assertCount(0, $set);
        $this->assertEquals(1, $set->currentPage());
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getLastBudgetLimitDate
     */
    public function testGetLastBudgetLimitDate()
    {
        /** @var BudgetLimit $budget */
        $limit = FactoryMuffin::create('FireflyIII\Models\BudgetLimit');
        $date  = $this->object->getLastBudgetLimitDate($limit->budget);
        $this->assertEquals($date->format('Y-m-d'), $limit->startdate->format('Y-m-d'));
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getLastBudgetLimitDate
     */
    public function testGetLastBudgetLimitDateNull()
    {

        /** @var Budget $budget */
        $budget  = FactoryMuffin::create('FireflyIII\Models\Budget');
        $date    = $this->object->getLastBudgetLimitDate($budget);
        $ownDate = Carbon::now()->startOfYear();
        $this->assertEquals($date->format('Y-m-d'), $ownDate->format('Y-m-d'));
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getLimitAmountOnDate
     */
    public function testGetLimitAmountOnDate()
    {
        $rep = FactoryMuffin::create('FireflyIII\Models\LimitRepetition');

        $amount = $this->object->getLimitAmountOnDate($rep->budgetlimit->budget, $rep->startdate);

        $this->assertEquals($rep->amount, $amount);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getLimitAmountOnDate
     */
    public function testGetLimitAmountOnDateNull()
    {
        $budget = FactoryMuffin::create('FireflyIII\Models\Budget');

        $amount = $this->object->getLimitAmountOnDate($budget, new Carbon);

        $this->assertNull($amount);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getWithoutBudget
     */
    public function testGetWithoutBudget()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        $this->be($user);
        $set = $this->object->getWithoutBudget(new Carbon, new Carbon);
        $this->assertCount(0, $set);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::getWithoutBudgetSum
     */
    public function testGetWithoutBudgetSum()
    {
        $user = FactoryMuffin::create('FireflyIII\User');
        $this->be($user);
        $sum = $this->object->getWithoutBudgetSum(new Carbon, new Carbon);
        $this->assertEquals(0, $sum);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::spentInMonth
     */
    public function testSpentInPeriod()
    {
        $budget = FactoryMuffin::create('FireflyIII\Models\Budget');

        $amount = $this->object->spentInPeriod($budget, new Carbon, new Carbon);
        $this->assertEquals(0, $amount);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::store
     */
    public function testStore()
    {
        $user = FactoryMuffin::create('FireflyIII\User');

        $data   = [
            'name' => 'new budget ' . rand(1, 100),
            'user' => $user->id
        ];
        $result = $this->object->store($data);

        $this->assertTrue($result instanceof Budget);
        $this->assertEquals($result->name, $data['name']);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::sumBudgetExpensesInPeriod
     */
    public function testSumBudgetExpensesInPeriod()
    {
        $budget = FactoryMuffin::create('FireflyIII\Models\Budget');
        $result = $this->object->sumBudgetExpensesInPeriod($budget, new Carbon, new Carbon);
        $this->assertEquals(0, $result);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::update
     */
    public function testUpdate()
    {
        $budget = FactoryMuffin::create('FireflyIII\Models\Budget');

        $data   = [
            'name'   => 'update budget ' . rand(1, 100),
            'active' => true
        ];
        $result = $this->object->update($budget, $data);

        $this->assertTrue($result instanceof Budget);
        $this->assertEquals($result->name, $data['name']);
        $this->assertEquals($result->id, $budget->id);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::updateLimitAmount
     */
    public function testUpdateLimitAmount()
    {
        $budget = FactoryMuffin::create('FireflyIII\Models\Budget');

        $result = $this->object->updateLimitAmount($budget, new Carbon, 100);

        $this->assertTrue($result instanceof BudgetLimit);
        $this->assertEquals($result->amount, 100);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::updateLimitAmount
     */
    public function testUpdateLimitAmountExisting()
    {
        $budgetLimit = FactoryMuffin::create('FireflyIII\Models\BudgetLimit');

        $result = $this->object->updateLimitAmount($budgetLimit->budget, $budgetLimit->startdate, 100);

        $this->assertTrue($result instanceof BudgetLimit);
        $this->assertEquals($result->amount, 100);
    }

    /**
     * @covers FireflyIII\Repositories\Budget\BudgetRepository::updateLimitAmount
     */
    public function testUpdateLimitAmountZero()
    {
        $budgetLimit = FactoryMuffin::create('FireflyIII\Models\BudgetLimit');

        $result = $this->object->updateLimitAmount($budgetLimit->budget, $budgetLimit->startdate, 0);

        $this->assertTrue($result instanceof BudgetLimit);
    }
}
