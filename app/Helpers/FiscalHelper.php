<?php
/**
 * FiscalHelper.php
 * Copyright (c) 2017 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

namespace FireflyIII\Helpers;

use Carbon\Carbon;
use Log;

/**
 * Class FiscalHelper.
 */
class FiscalHelper implements FiscalHelperInterface
{
    /** @var bool */
    protected $useCustomFiscalYear;

    /**
     * FiscalHelper constructor.
     */
    public function __construct()
    {
        $this->useCustomFiscalYear = app('preferences')->get('customFiscalYear', false)->data;

        if ('testing' === config('app.env')) {
            Log::warning(sprintf('%s should not be instantiated in the TEST environment!', \get_class($this)));
        }
    }

    /**
     * @param Carbon $date
     *
     * @return Carbon date object
     */
    public function endOfFiscalYear(Carbon $date): Carbon
    {
        Log::debug(sprintf('Now in endOfFiscalYear(%s).', $date->format('Y-m-d')));
        $endDate = $this->startOfFiscalYear($date);
        if (true === $this->useCustomFiscalYear) {
            // add 1 year and sub 1 day
            $endDate->addYear();
            $endDate->subDay();
        }
        if (false === $this->useCustomFiscalYear) {
            $endDate->endOfYear();
        }
        Log::debug(sprintf('Result of endOfFiscalYear(%s) = %s', $date->format('Y-m-d'), $endDate->format('Y-m-d')));

        return $endDate;
    }

    /**
     * @param Carbon $date
     *
     * @return Carbon date object
     */
    public function startOfFiscalYear(Carbon $date): Carbon
    {
        // because PHP is stupid:
        if ($date->day >= 28) {
            $date->day = 28;
            Log::info(sprintf('Corrected date to %s', $date->format('Y-m-d')));
        }

        // get start mm-dd. Then create a start date in the year passed.
        $startDate = clone $date;
        if (true === $this->useCustomFiscalYear) {
            $prefStartStr = app('preferences')->get('fiscalYearStart', '01-01')->data;
            [$mth, $day] = explode('-', $prefStartStr);
            $startDate->month((int)$mth)->day((int)$day);

            // if start date is after passed date, sub 1 year.
            if ($startDate > $date) {
                $startDate->subYear();
            }
        }
        if (false === $this->useCustomFiscalYear) {
            $startDate->startOfYear();
        }

        Log::debug(sprintf('Result of startOfFiscalYear(%s) = %s', $date->format('Y-m-d'), $startDate->format('Y-m-d')));

        return $startDate;
    }
}
