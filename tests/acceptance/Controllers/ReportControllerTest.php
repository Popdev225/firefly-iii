<?php
/**
 * ReportControllerTest.php
 * Copyright (C) 2016 Sander Dorigo
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

use FireflyIII\Helpers\Collection\Bill as BillCollection;
use FireflyIII\Helpers\Collection\Category as CategoryCollection;
use FireflyIII\Helpers\Collection\Expense;
use FireflyIII\Helpers\Collection\Income;

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
        $repository = $this->mock('FireflyIII\Helpers\Report\ReportHelperInterface');
        $repository->shouldReceive('getCategoryReport')->once()->andReturn(new CategoryCollection);
        $repository->shouldReceive('getIncomeReport')->once()->andReturn(new Income);
        $repository->shouldReceive('getExpenseReport')->once()->andReturn(new Expense);
        $repository->shouldReceive('getBillReport')->once()->andReturn(new BillCollection);


        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/reports/report/default/20160101/20160131/1,2');
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
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/reports/report/default/20160101/20161231/1,2');
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
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/reports/report/default/20160101/20171231/1,2');
        $this->assertResponseStatus(200);
    }
}
