<?php

namespace Tests\unit\Support;

use Carbon\Carbon;
use FireflyIII\Support\Calendar\Periodicity;
use FireflyIII\Support\Navigation;
use PHPUnit\Framework\TestCase;

/**
 * @group unit-test
 * @group support
 * @group navigation
 */
class NavigationTest extends TestCase
{
    private Navigation $navigation;

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->navigation = new Navigation();
    }

    public static function providePeriods(): array
    {
        return [
            '1D'        => ['frequency' => '1D', 'from' => Carbon::now(), 'expected' => Carbon::tomorrow()],
            'daily'     => ['frequency' => 'daily', 'from' => Carbon::now(), 'expected' => Carbon::tomorrow()],
            '1W'        => ['frequency' => '1W', 'from' => Carbon::now(), 'expected' => Carbon::now()->addWeeks(1)],
            'weekly'    => ['frequency' => 'weekly', 'from' => Carbon::now(), 'expected' => Carbon::now()->addWeeks(1)],
            'week'      => ['frequency' => 'week', 'from' => Carbon::now(), 'expected' => Carbon::now()->addWeeks(1)],
            '3M'        => ['frequency' => '3M', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(3)],
            'quarter'   => ['frequency' => 'quarter', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(3)],
            'quarterly' => ['frequency' => 'quarterly', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(3)],
            '6M'        => ['frequency' => '6M', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(6)],
            'half-year' => ['frequency' => 'half-year', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(6)],
            'year'      => ['frequency' => 'year', 'from' => Carbon::now(), 'expected' => Carbon::now()->addYears(1)],
            'yearly'    => ['frequency' => 'yearly', 'from' => Carbon::now(), 'expected' => Carbon::now()->addYears(1)],
            '1Y'        => ['frequency' => '1Y', 'from' => Carbon::now(), 'expected' => Carbon::now()->addYears(1)],
            'last7'     => ['frequency' => 'last7', 'from' => Carbon::now(), 'expected' => Carbon::now()->addDays(7)],
            'last30'    => ['frequency' => 'last30', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(1)],
            'last90'    => ['frequency' => 'last90', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(3)],
            'last365'   => ['frequency' => 'last365', 'from' => Carbon::now(), 'expected' => Carbon::now()->addYears(1)],
            'MTD'       => ['frequency' => 'MTD', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(1)],
            'QTD'       => ['frequency' => 'QTD', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(3)],
            'YTD'       => ['frequency' => 'YTD', 'from' => Carbon::now(), 'expected' => Carbon::now()->addYears(1)],
        ];
    }

    /**
     * @dataProvider providePeriods
     */
    public function testGivenAFrequencyWhenCalculateTheDateThenReturnsTheExpectedDateSuccessful(string $frequency, Carbon $from, Carbon $expected)
    {
        $period = $this->navigation->addPeriod($from, $frequency, 0);
        $this->assertEquals($expected->toDateString(), $period->toDateString());
    }

    public static function provideMonthPeriods(): array
    {
        return [
            '1M'                       => ['frequency' => '1M', 'from' => Carbon::parse('2023-06-25'), 'expected' => Carbon::parse('2023-06-25')->addMonths(1)],
            'month'                    => ['frequency' => 'month', 'from' => Carbon::parse('2023-06-25'), 'expected' => Carbon::parse('2023-06-25')->addMonths(1)],
            'monthly'                  => ['frequency' => 'monthly', 'from' => Carbon::parse('2023-06-25'), 'expected' => Carbon::parse('2023-06-25')->addMonths(1)],
            '2019-01-29 to 2019-02-28' => ['frequency' => 'monthly', 'from' => Carbon::parse('2019-01-29'), 'expected' => Carbon::parse('2019-02-28')],
            '2019-01-30 to 2019-02-28' => ['frequency' => 'monthly', 'from' => Carbon::parse('2019-01-30'), 'expected' => Carbon::parse('2019-02-28')],
            '2019-01-31 to 2019-02-28' => ['frequency' => 'monthly', 'from' => Carbon::parse('2019-01-31'), 'expected' => Carbon::parse('2019-02-28')],
            '2023-03-31 to 2023-04-30' => ['frequency' => 'monthly', 'from' => Carbon::parse('2023-03-31'), 'expected' => Carbon::parse('2023-04-30')],
            '2023-05-31 to 2023-06-30' => ['frequency' => 'monthly', 'from' => Carbon::parse('2023-05-31'), 'expected' => Carbon::parse('2023-06-30')],
            '2023-08-31 to 2023-09-30' => ['frequency' => 'monthly', 'from' => Carbon::parse('2023-08-31'), 'expected' => Carbon::parse('2023-09-30')],
            '2023-10-31 to 2023-11-30' => ['frequency' => 'monthly', 'from' => Carbon::parse('2023-10-31'), 'expected' => Carbon::parse('2023-11-30')],
        ];
    }

    /**
     * @dataProvider provideMonthPeriods
     */
    public function testGivenAMonthFrequencyWhenCalculateTheDateThenReturnsTheLastDayOfMonthSuccessful(string $frequency, Carbon $from, Carbon $expected)
    {
        $period = $this->navigation->addPeriod($from, $frequency, 0);
        $this->assertEquals($expected->toDateString(), $period->toDateString());
    }

    public static function providePeriodsWithSkippingParam(): \Generator
    {
        $intervals = [
            '2019-01-31 to 2019-02-11' => ['skip' => 10, 'frequency' => 'daily', 'from' => Carbon::parse('2019-01-31'), 'expected' => Carbon::parse('2019-02-11')],
            '1D'                       => ['skip' => 1, 'frequency' => '1D', 'from' => Carbon::now(), 'expected' => Carbon::now()->addDays(2)],
            'daily'                    => ['skip' => 1, 'frequency' => 'daily', 'from' => Carbon::now(), 'expected' => Carbon::now()->addDays(2)],
            '1W'                       => ['skip' => 1, 'frequency' => '1W', 'from' => Carbon::now(), 'expected' => Carbon::now()->addWeeks(2)],
            'weekly'                   => ['skip' => 1, 'frequency' => 'weekly', 'from' => Carbon::now(), 'expected' => Carbon::now()->addWeeks(2)],
            'week'                     => ['skip' => 1, 'frequency' => 'week', 'from' => Carbon::now(), 'expected' => Carbon::now()->addWeeks(2)],
            '1M'                       => ['skip' => 1, 'frequency' => '1M', 'from' => Carbon::parse('2023-06-25'), 'expected' => Carbon::parse('2023-06-25')->addMonths(2)],
            'month'                    => ['skip' => 1, 'frequency' => 'month', 'from' => Carbon::parse('2023-06-25'), 'expected' => Carbon::parse('2023-06-25')->addMonths(2)],
            'monthly'                  => ['skip' => 1, 'frequency' => 'monthly', 'from' => Carbon::parse('2023-06-25'), 'expected' => Carbon::parse('2023-06-25')->addMonths(2)],
            '2019-01-29 to 2019-03-29' => ['skip' => 1, 'frequency' => 'monthly', 'from' => Carbon::parse('2019-01-29'), 'expected' => Carbon::parse('2019-03-29')],
            '2019-01-30 to 2019-03-30' => ['skip' => 1, 'frequency' => 'monthly', 'from' => Carbon::parse('2019-01-30'), 'expected' => Carbon::parse('2019-03-30')],
            '2019-01-31 to 2019-03-31' => ['skip' => 1, 'frequency' => 'monthly', 'from' => Carbon::parse('2019-01-31'), 'expected' => Carbon::parse('2019-03-31')],
            '2023-03-31 to 2023-05-31' => ['skip' => 1, 'frequency' => 'monthly', 'from' => Carbon::parse('2023-03-31'), 'expected' => Carbon::parse('2023-05-31')],
            '2023-05-31 to 2023-07-31' => ['skip' => 1, 'frequency' => 'monthly', 'from' => Carbon::parse('2023-05-31'), 'expected' => Carbon::parse('2023-07-31')],
            '2023-08-31 to 2023-10-31' => ['skip' => 1, 'frequency' => 'monthly', 'from' => Carbon::parse('2023-08-31'), 'expected' => Carbon::parse('2023-10-31')],
            '2023-10-31 to 2023-12-31' => ['skip' => 1, 'frequency' => 'monthly', 'from' => Carbon::parse('2023-10-31'), 'expected' => Carbon::parse('2023-12-31')],
            '2023-01-31 to 2023-03-30' => ['skip' => 2, 'frequency' => 'monthly', 'from' => Carbon::parse('2023-01-31'), 'expected' => Carbon::parse('2023-04-30')],
            '3M'                       => ['skip' => 1, 'frequency' => '3M', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(6)],
            'quarter'                  => ['skip' => 1, 'frequency' => 'quarter', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(6)],
            'quarterly'                => ['skip' => 1, 'frequency' => 'quarterly', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(6)],
            '6M'                       => ['skip' => 1, 'frequency' => '6M', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(12)],
            'half-year'                => ['skip' => 1, 'frequency' => 'half-year', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(12)],
            'year'                     => ['skip' => 1, 'frequency' => 'year', 'from' => Carbon::now(), 'expected' => Carbon::now()->addYears(2)],
            'yearly'                   => ['skip' => 1, 'frequency' => 'yearly', 'from' => Carbon::now(), 'expected' => Carbon::now()->addYears(2)],
            '1Y'                       => ['skip' => 1, 'frequency' => '1Y', 'from' => Carbon::now(), 'expected' => Carbon::now()->addYears(2)],
            '2023-02-01 to 2023-02-15' => ['skip' => 1, 'frequency' => 'last7', 'from' => Carbon::parse('2023-02-01'), 'expected' => Carbon::parse('2023-02-15')],
            'last7'                    => ['skip' => 1, 'frequency' => 'last7', 'from' => Carbon::now(), 'expected' => Carbon::now()->addDays(14)],
            'last30'                   => ['skip' => 1, 'frequency' => 'last30', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(2)],
            'last90'                   => ['skip' => 1, 'frequency' => 'last90', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(6)],
            'last365'                  => ['skip' => 1, 'frequency' => 'last365', 'from' => Carbon::now(), 'expected' => Carbon::now()->addYears(2)],
            'MTD'                      => ['skip' => 1, 'frequency' => 'MTD', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(2)],
            'QTD'                      => ['skip' => 1, 'frequency' => 'QTD', 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(6)],
            'YTD'                      => ['skip' => 1, 'frequency' => 'YTD', 'from' => Carbon::now(), 'expected' => Carbon::now()->addYears(2)],
        ];
        foreach ($intervals as $interval) {
            yield "{$interval["frequency"]} {$interval["from"]->toDateString()} to {$interval["expected"]->toDateString()}" => $interval;
        }
    }

    /**
     * @dataProvider providePeriodsWithSkippingParam
     */
    public function testGivenAFrequencyAndSkipIntervalWhenCalculateTheDateThenReturnsTheSkippedDateSuccessful(int $skip, string $frequency, Carbon $from, Carbon $expected)
    {
        $period = $this->navigation->addPeriod($from, $frequency, $skip);
        $this->assertEquals($expected->toDateString(), $period->toDateString());
    }

    public static function provideFrequencies(): array
    {
        return [
            Periodicity::Daily->name       => ['periodicity' => Periodicity::Daily, 'from' => Carbon::now(), 'expected' => Carbon::tomorrow()],
            Periodicity::Weekly->name      => ['periodicity' => Periodicity::Weekly, 'from' => Carbon::now(), 'expected' => Carbon::now()->addWeeks(1)],
            Periodicity::Fortnightly->name => ['periodicity' => Periodicity::Fortnightly, 'from' => Carbon::now(), 'expected' => Carbon::now()->addWeeks(2)],
            Periodicity::Monthly->name     => ['periodicity' => Periodicity::Monthly, 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(1)],
            '2019-01-01 to 2019-02-01'     => ['periodicity' => Periodicity::Monthly, 'from' => Carbon::parse('2019-01-01'), 'expected' => Carbon::parse('2019-02-01')],
            '2019-01-29 to 2019-02-28'     => ['periodicity' => Periodicity::Monthly, 'from' => Carbon::parse('2019-01-29'), 'expected' => Carbon::parse('2019-02-28')],
            '2019-01-30 to 2019-02-28'     => ['periodicity' => Periodicity::Monthly, 'from' => Carbon::parse('2019-01-30'), 'expected' => Carbon::parse('2019-02-28')],
            '2019-01-31 to 2019-02-28'     => ['periodicity' => Periodicity::Monthly, 'from' => Carbon::parse('2019-01-31'), 'expected' => Carbon::parse('2019-02-28')],
            '2023-03-31 to 2023-04-30'     => ['periodicity' => Periodicity::Monthly, 'from' => Carbon::parse('2023-03-31'), 'expected' => Carbon::parse('2023-04-30')],
            '2023-05-31 to 2023-06-30'     => ['periodicity' => Periodicity::Monthly, 'from' => Carbon::parse('2023-05-31'), 'expected' => Carbon::parse('2023-06-30')],
            '2023-08-31 to 2023-09-30'     => ['periodicity' => Periodicity::Monthly, 'from' => Carbon::parse('2023-08-31'), 'expected' => Carbon::parse('2023-09-30')],
            '2023-10-31 to 2023-11-30'     => ['periodicity' => Periodicity::Monthly, 'from' => Carbon::parse('2023-10-31'), 'expected' => Carbon::parse('2023-11-30')],
            Periodicity::Quarterly->name   => ['periodicity' => Periodicity::Quarterly, 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(3)],
            '2019-01-29 to 2020-04-29'     => ['periodicity' => Periodicity::Quarterly, 'from' => Carbon::parse('2019-01-29'), 'expected' => Carbon::parse('2019-04-29')],
            '2019-01-30 to 2020-04-30'     => ['periodicity' => Periodicity::Quarterly, 'from' => Carbon::parse('2019-01-30'), 'expected' => Carbon::parse('2019-04-30')],
            '2019-01-31 to 2020-04-30'     => ['periodicity' => Periodicity::Quarterly, 'from' => Carbon::parse('2019-01-31'), 'expected' => Carbon::parse('2019-04-30')],
            Periodicity::HalfYearly->name  => ['periodicity' => Periodicity::HalfYearly, 'from' => Carbon::now(), 'expected' => Carbon::now()->addMonths(6)],
            '2019-01-31 to 2020-07-29'     => ['periodicity' => Periodicity::HalfYearly, 'from' => Carbon::parse('2019-01-29'), 'expected' => Carbon::parse('2019-07-29')],
            '2019-01-31 to 2020-07-30'     => ['periodicity' => Periodicity::HalfYearly, 'from' => Carbon::parse('2019-01-30'), 'expected' => Carbon::parse('2019-07-30')],
            '2019-01-31 to 2020-07-31'     => ['periodicity' => Periodicity::HalfYearly, 'from' => Carbon::parse('2019-01-31'), 'expected' => Carbon::parse('2019-07-31')],
            Periodicity::Yearly->name      => ['periodicity' => Periodicity::Yearly, 'from' => Carbon::now(), 'expected' => Carbon::now()->addYears(1)],
            '2020-02-29 to 2021-02-28'     => ['periodicity' => Periodicity::Yearly, 'from' => Carbon::parse('2020-02-29'), 'expected' => Carbon::parse('2021-02-28')],
        ];
    }

    /**
     * @dataProvider provideFrequencies
     */
    public function testGivenAIntervalWhenCallTheNextDateByIntervalMethodThenReturnsTheExpectedDateSuccessful(Periodicity $periodicity, Carbon $from, Carbon $expected)
    {
        $period = $this->navigation->nextDateByInterval($from, $periodicity);
        $this->assertEquals($expected->toDateString(), $period->toDateString());
    }
}
