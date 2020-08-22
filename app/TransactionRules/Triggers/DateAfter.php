<?php
/**
 * DateAfter.php
 * Copyright (c) 2019 james@firefly-iii.org
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
declare(strict_types=1);

namespace FireflyIII\TransactionRules\Triggers;

use Carbon\Carbon;
use FireflyIII\Exceptions\FireflyException;
use FireflyIII\Models\TransactionJournal;
use FireflyIII\Support\ParseDateString;
use Log;

/**
 * Class DateAfter.
 * @deprecated
 */
final class DateAfter extends AbstractTrigger implements TriggerInterface
{
    /**
     * A trigger is said to "match anything", or match any given transaction,
     * when the trigger value is very vague or has no restrictions. Easy examples
     * are the "AmountMore"-trigger combined with an amount of 0: any given transaction
     * has an amount of more than zero! Other examples are all the "Description"-triggers
     * which have hard time handling empty trigger values such as "" or "*" (wild cards).
     *
     * If the user tries to create such a trigger, this method MUST return true so Firefly III
     * can stop the storing / updating the trigger. If the trigger is in any way restrictive
     * (even if it will still include 99.9% of the users transactions), this method MUST return
     * false.
     *
     * @param mixed $value
     *
     * @return bool
     */
    public static function willMatchEverything($value = null): bool
    {
        if (null !== $value) {
            return false;
        }
        Log::error(sprintf('Cannot use %s with a null value.', self::class));

        return true;
    }

    /**
     * Returns true when category is X.
     *
     * @param TransactionJournal $journal
     *
     * @return bool
     */
    public function triggered(TransactionJournal $journal): bool
    {
        /** @var Carbon $date */
        $date = $journal->date;
        Log::debug(sprintf('Found date on journal: %s', $date->format('Y-m-d')));
        $dateParser = new ParseDateString();


        try {
            $ruleDate = $dateParser->parseDate($this->triggerValue);
        } catch (FireflyException $e) {
            Log::error('Cannot execute rule trigger.');
            Log::error($e->getMessage());

            return false;
        }
        $isDateRange = $dateParser->isDateRange($this->triggerValue);
        if (false === $isDateRange && $date->isAfter($ruleDate)) {
            Log::debug(
                sprintf(
                    '%s is after %s, so return true.',
                    $date->format('Y-m-d H:i:s'),
                    $ruleDate->format('Y-m-d H:i:s'),
                )
            );

            return true;
        }
        // could be a date range.
        if ($isDateRange) {
            Log::debug(sprintf('Date value is "%s", representing a range.', $this->triggerValue));
            $range = $dateParser->parseRange($this->triggerValue, $date);
            if ($date->isAfter($range['end'])) {
                Log::debug(
                    sprintf(
                        '%s is after [%s/%s], so return true.',
                        $date->format('Y-m-d H:i:s'),
                        $range['start']->format('Y-m-d H:i:s'),
                        $range['end']->format('Y-m-d H:i:s'),
                    )
                );

                return true;
            }
            Log::debug(
                sprintf(
                    '%s is NOT after [%s/%s], so return false.',
                    $date->format('Y-m-d H:i:s'),
                    $range['start']->format('Y-m-d H:i:s'),
                    $range['end']->format('Y-m-d H:i:s'),
                )
            );
            return false;
        }

        Log::debug(
            sprintf(
                '%s is NOT after %s, so return true.',
                $date->format('Y-m-d H:i:s'),
                $ruleDate->format('Y-m-d H:i:s'),
            )
        );

        return false;
    }
}
