<?php

/**
 * Copyright (c) 2023 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace Tests\Support\Calendar;

use Carbon\Carbon;
use FireflyIII\Api\V1\Controllers\Insight\Income\PeriodController;
use FireflyIII\Support\Calendar\Calculator;
use FireflyIII\Support\Calendar\Exceptions\IntervalException;
use FireflyIII\Support\Calendar\Periodicity;
use FireflyIII\Support\Navigation;
use Tests\Support\Calendar\Periodicity\BimonthlyTest;
use Tests\Support\Calendar\Periodicity\DailyTest;
use Tests\Support\Calendar\Periodicity\FortnightlyTest;
use Tests\Support\Calendar\Periodicity\HalfYearlyTest;
use Tests\Support\Calendar\Periodicity\IntervalProvider;
use Tests\Support\Calendar\Periodicity\MonthlyTest;
use Tests\Support\Calendar\Periodicity\QuarterlyTest;
use Tests\Support\Calendar\Periodicity\WeeklyTest;
use Tests\Support\Calendar\Periodicity\YearlyTest;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    private static function convert(Periodicity $periodicity, array $intervals): array
    {
        $periodicityIntervals = [];
        /** @var IntervalProvider $interval */
        foreach ($intervals as $index => $interval) {
            $calculator = CalculatorProvider::from($periodicity, $interval);

            $periodicityIntervals["#{$index} {$calculator->label}"] = [$calculator];
        }
        return $periodicityIntervals;
    }

    public static function provideAllPeriodicity(): \Generator
    {
        $intervals = [];
        $intervals = array_merge($intervals, self::convert(Periodicity::Daily, DailyTest::provideIntervals()));
        $intervals = array_merge($intervals, self::convert(Periodicity::Weekly, WeeklyTest::provideIntervals()));
        $intervals = array_merge($intervals, self::convert(Periodicity::Fortnightly, FortnightlyTest::provideIntervals()));
        $intervals = array_merge($intervals, self::convert(Periodicity::Monthly, MonthlyTest::provideIntervals()));
        $intervals = array_merge($intervals, self::convert(Periodicity::Bimonthly, BimonthlyTest::provideIntervals()));
        $intervals = array_merge($intervals, self::convert(Periodicity::Quarterly, QuarterlyTest::provideIntervals()));
        $intervals = array_merge($intervals, self::convert(Periodicity::HalfYearly, HalfYearlyTest::provideIntervals()));
        $intervals = array_merge($intervals, self::convert(Periodicity::Yearly, YearlyTest::provideIntervals()));

        /** @var IntervalProvider $interval */
        foreach ($intervals as $label => $interval) {
            yield $label => $interval;
        }
    }

    /**
     * @dataProvider provideAllPeriodicity
     * @throws IntervalException
     */
    public function testGivenADailyPeriodicityWhenCallTheNextDateByIntervalMethodThenReturnsTheExpectedDateSuccessful(CalculatorProvider $provider)
    {
        $calculator = new Calculator();
        $period     = $calculator->nextDateByInterval($provider->epoch(), $provider->periodicity);
        $this->assertEquals($provider->expected()->toDateString(), $period->toDateString());
    }

    public static function provideSkippedIntervals(): \Generator
    {
        return CalculatorProvider::providePeriodicityWithSkippedIntervals();
    }

    /**
     * @dataProvider provideSkippedIntervals
     * @throws IntervalException
     */
    public function testGivenAnEpochWithSkipIntervalNumberWhenCallTheNextDateBySkippedIntervalMethodThenReturnsTheExpectedDateSuccessful(CalculatorProvider $provider)
    {
        $calculator = new Calculator();
        $period     = $calculator->nextDateByInterval($provider->epoch(), $provider->periodicity, $provider->skip);
        $this->assertEquals($provider->expected()->toDateString(), $period->toDateString());
    }
}
