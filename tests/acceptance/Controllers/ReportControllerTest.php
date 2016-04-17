<?php
/**
 * ReportControllerTest.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

use FireflyIII\Helpers\Collection\Account as AccountCollection;
use FireflyIII\Helpers\Collection\Balance;
use FireflyIII\Helpers\Collection\Bill as BillCollection;
use FireflyIII\Helpers\Collection\Budget as BudgetCollection;
use FireflyIII\Helpers\Collection\Category as CategoryCollection;
use FireflyIII\Helpers\Collection\Expense;
use FireflyIII\Helpers\Collection\Income;
use Illuminate\Support\Collection;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-19 at 15:39:28.
 */
class ReportControllerTest extends TestCase
{

    /**
     * @covers       FireflyIII\Http\Controllers\ReportController::index
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testIndex($range)
    {
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/reports');
        $this->assertResponseStatus(200);

    }

    /**
     * @covers       FireflyIII\Http\Controllers\ReportController::__construct
     * @covers       FireflyIII\Http\Controllers\ReportController::report
     * @covers       FireflyIII\Http\Controllers\ReportController::defaultMonth
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testReportDefaultMonth($range)
    {
        // mock some stuff.
        $accountHelper = $this->mock('FireflyIII\Helpers\Report\AccountReportHelperInterface');
        $budgetHelper  = $this->mock('FireflyIII\Helpers\Report\BudgetReportHelperInterface');
        $balanceHelper = $this->mock('FireflyIII\Helpers\Report\BalanceReportHelperInterface');
        $defaultHelper = $this->mock('FireflyIII\Helpers\Report\ReportHelperInterface');


        $accountHelper->shouldReceive('getAccountReport')->once()->andReturn(new AccountCollection);
        $defaultHelper->shouldReceive('getIncomeReport')->once()->andReturn(new Income);
        $defaultHelper->shouldReceive('getExpenseReport')->once()->andReturn(new Expense);
        $budgetHelper->shouldReceive('getBudgetReport')->once()->andReturn(new BudgetCollection);
        $defaultHelper->shouldReceive('getCategoryReport')->once()->andReturn(new CategoryCollection);
        $balanceHelper->shouldReceive('getBalanceReport')->once()->andReturn(new Balance);
        $defaultHelper->shouldReceive('getBillReport')->once()->andReturn(new BillCollection);
        $defaultHelper->shouldReceive('tagReport')->once()->andReturn([]);

        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/reports/report/default/20160101/20160131/1,2');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers       FireflyIII\Http\Controllers\ReportController::report
     * @covers       FireflyIII\Http\Controllers\ReportController::defaultMultiYear
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testReportDefaultMultiYear($range)
    {
        $this->be($this->user());

        // mock some stuff.
        $accountHelper = $this->mock('FireflyIII\Helpers\Report\AccountReportHelperInterface');
        $defaultHelper = $this->mock('FireflyIII\Helpers\Report\ReportHelperInterface');
        $budgetRepos   = $this->mock('FireflyIII\Repositories\Budget\BudgetRepositoryInterface');
        $categoryRepos = $this->mock('FireflyIII\Repositories\Category\CategoryRepositoryInterface');

        $budgetRepos->shouldReceive('getActiveBudgets')->once()->andReturn(new Collection);
        $categoryRepos->shouldReceive('getCategories')->once()->andReturn(new Collection);


        $accountHelper->shouldReceive('getAccountReport')->once()->andReturn(new AccountCollection);
        $defaultHelper->shouldReceive('getIncomeReport')->once()->andReturn(new Income);
        $defaultHelper->shouldReceive('getExpenseReport')->once()->andReturn(new Expense);
        $defaultHelper->shouldReceive('tagReport')->once()->andReturn([]);

        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/reports/report/default/20160101/20171231/1,2');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers       FireflyIII\Http\Controllers\ReportController::report
     * @covers       FireflyIII\Http\Controllers\ReportController::defaultYear
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testReportDefaultYear($range)
    {

        // mock some stuff.
        $accountHelper = $this->mock('FireflyIII\Helpers\Report\AccountReportHelperInterface');
        $defaultHelper = $this->mock('FireflyIII\Helpers\Report\ReportHelperInterface');


        $accountHelper->shouldReceive('getAccountReport')->once()->andReturn(new AccountCollection);
        $defaultHelper->shouldReceive('getIncomeReport')->once()->andReturn(new Income);
        $defaultHelper->shouldReceive('getExpenseReport')->once()->andReturn(new Expense);
        $defaultHelper->shouldReceive('tagReport')->once()->andReturn([]);


        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/reports/report/default/20160101/20161231/1,2');
        $this->assertResponseStatus(200);
    }
}
