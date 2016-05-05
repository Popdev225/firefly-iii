<?php
/**
 * JsonControllerTest.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */
use Illuminate\Support\Collection;


/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-19 at 15:39:28.
 */
class JsonControllerTest extends TestCase
{

    /**
     * @covers FireflyIII\Http\Controllers\JsonController::action
     * @covers FireflyIII\Http\Controllers\JsonController::__construct
     */
    public function testAction()
    {
        $this->be($this->user());
        $this->call('GET', '/json/action');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers       FireflyIII\Http\Controllers\JsonController::boxBillsPaid
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testBoxBillsPaid($range)
    {
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/json/box/bills-paid');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers       FireflyIII\Http\Controllers\JsonController::boxBillsUnpaid
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testBoxBillsUnpaid($range)
    {
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/json/box/bills-unpaid');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers       FireflyIII\Http\Controllers\JsonController::boxIn
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testBoxIn($range)
    {
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/json/box/in');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers       FireflyIII\Http\Controllers\JsonController::boxOut
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testBoxOut($range)
    {
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/json/box/out');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers       FireflyIII\Http\Controllers\JsonController::categories
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testCategories($range)
    {
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/json/categories');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\JsonController::endTour
     */
    public function testEndTour()
    {
        $this->be($this->user());
        $response = $this->call('POST', '/json/end-tour');
        $this->assertResponseStatus(200);
        $this->assertEquals('"true"', $response->content());
    }

    /**
     * @covers FireflyIII\Http\Controllers\JsonController::expenseAccounts
     */
    public function testExpenseAccounts()
    {
        $this->be($this->user());
        $this->call('GET', '/json/expense-accounts');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\JsonController::revenueAccounts
     */
    public function testRevenueAccounts()
    {
        $this->be($this->user());
        $this->call('GET', '/json/revenue-accounts');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\JsonController::tags
     */
    public function testTags()
    {
        $this->be($this->user());
        $this->call('GET', '/json/tags');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\JsonController::tour
     */
    public function testTour()
    {
        $this->be($this->user());
        $this->call('GET', '/json/tour');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers       FireflyIII\Http\Controllers\JsonController::transactionJournals
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testTransactionJournals($range)
    {
        $repository = $this->mock('FireflyIII\Repositories\Journal\JournalRepositoryInterface');
        $paginator = new \Illuminate\Pagination\LengthAwarePaginator(new Collection, 0, 40);
        $repository->shouldReceive('getJournals')->withAnyArgs()->once()->andReturn($paginator);

        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/json/transaction-journals/deposit');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\JsonController::trigger
     */
    public function testTrigger()
    {
        $this->be($this->user());
        $this->call('GET', '/json/trigger');
        $this->assertResponseStatus(200);
    }
}
