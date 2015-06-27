<?php

namespace FireflyIII\Generator\Chart\Account;

use Carbon\Carbon;
use Grumpydictator\Gchart\GChart;
use Illuminate\Support\Collection;
use Steam;


/**
 * Class GoogleAccountChartGenerator
 *
 * @package FireflyIII\Generator\Chart\Account
 */
class GoogleAccountChartGenerator implements AccountChartGenerator
{


    /**
     * @param Collection $accounts
     * @param Carbon     $start
     * @param Carbon     $end
     *
     * @return array
     */
    public function all(Collection $accounts, Carbon $start, Carbon $end)
    {
        // make chart (original code):
        $chart = new GChart;
        $chart->addColumn(trans('firefly.dayOfMonth'), 'date');
        $index = 1;
        /** @var Account $account */
        foreach ($accounts as $account) {
            $chart->addColumn(trans('firefly.balanceFor', ['name' => $account->name]), 'number');
            $chart->addCertainty($index);
            $index++;
        }
        $current = clone $start;
        $current->subDay();
        $today = Carbon::now();
        while ($end >= $current) {
            $row     = [clone $current];
            $certain = $current < $today;
            foreach ($accounts as $account) {
                $row[] = Steam::balance($account, $current);
                $row[] = $certain;
            }
            $chart->addRowArray($row);
            $current->addDay();
        }
        $chart->generate();

        return $chart->getData();
    }
}