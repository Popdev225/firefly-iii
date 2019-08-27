<?php
/**
 * NoCategoryRepository.php
 * Copyright (c) 2019 thegrumpydictator@gmail.com
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

namespace FireflyIII\Repositories\Category;


use Carbon\Carbon;
use FireflyIII\Helpers\Collector\GroupCollectorInterface;
use FireflyIII\Models\TransactionType;
use FireflyIII\User;
use Illuminate\Support\Collection;
use Log;
use Navigation;

/**
 *
 * Class NoCategoryRepository
 */
class NoCategoryRepository implements NoCategoryRepositoryInterface
{
    /** @var User */
    private $user;

    /**
     * Constructor.
     */
    public function __construct()
    {
        if ('testing' === config('app.env')) {
            Log::warning(sprintf('%s should not be instantiated in the TEST environment!', get_class($this)));
        }
    }

    /**
     * This method returns a list of all the withdrawal transaction journals (as arrays) set in that period
     * which have no category set to them. It's grouped per currency, with as few details in the array
     * as possible. Amounts are always negative.
     *
     * @param Carbon          $start
     * @param Carbon          $end
     * @param Collection|null $accounts
     *
     * @return array
     */
    public function listExpenses(Carbon $start, Carbon $end, ?Collection $accounts = null): array
    {
        /** @var GroupCollectorInterface $collector */
        $collector = app(GroupCollectorInterface::class);
        $collector->setUser($this->user)->setRange($start, $end)->setTypes([TransactionType::WITHDRAWAL])->withoutCategory();
        if (null !== $accounts && $accounts->count() > 0) {
            $collector->setAccounts($accounts);
        }
        $journals = $collector->getExtractedJournals();
        $array    = [];

        foreach ($journals as $journal) {
            $currencyId         = (int)$journal['currency_id'];
            $array[$currencyId] = $array[$currencyId] ?? [
                    'transaction_journals'    => [],
                    'currency_id'             => $currencyId,
                    'currency_name'           => $journal['currency_name'],
                    'currency_symbol'         => $journal['currency_symbol'],
                    'currency_code'           => $journal['currency_code'],
                    'currency_decimal_places' => $journal['currency_decimal_places'],
                ];
            // add journal to array:
            // only a subset of the fields.
            $journalId                                              = (int)$journal['transaction_journal_id'];
            $array[$currencyId]['transaction_journals'][$journalId] = [
                'amount' => app('steam')->negative($journal['amount']),
                'date'   => $journal['date'],
            ];

        }

        return $array;
    }

    /**
     * This method returns a list of all the deposit transaction journals (as arrays) set in that period
     * which have no category set to them. It's grouped per currency, with as few details in the array
     * as possible. Amounts are always positive.
     *
     * @param Carbon          $start
     * @param Carbon          $end
     * @param Collection|null $accounts
     *
     * @return array
     */
    public function listIncome(Carbon $start, Carbon $end, ?Collection $accounts = null): array
    {
        /** @var GroupCollectorInterface $collector */
        $collector = app(GroupCollectorInterface::class);
        $collector->setUser($this->user)->setRange($start, $end)->setTypes([TransactionType::DEPOSIT])->withoutCategory();
        if (null !== $accounts && $accounts->count() > 0) {
            $collector->setAccounts($accounts);
        }
        $journals = $collector->getExtractedJournals();
        $array    = [];

        foreach ($journals as $journal) {
            $currencyId         = (int)$journal['currency_id'];
            $array[$currencyId] = $array[$currencyId] ?? [
                    'transaction_journals'    => [],
                    'currency_id'             => $currencyId,
                    'currency_name'           => $journal['currency_name'],
                    'currency_symbol'         => $journal['currency_symbol'],
                    'currency_code'           => $journal['currency_code'],
                    'currency_decimal_places' => $journal['currency_decimal_places'],
                ];
            // add journal to array:
            // only a subset of the fields.
            $journalId                                              = (int)$journal['transaction_journal_id'];
            $array[$currencyId]['transaction_journals'][$journalId] = [
                'amount' => app('steam')->positive($journal['amount']),
                'date'   => $journal['date'],
            ];

        }

        return $array;
    }

    /**
     * @param Collection $accounts
     * @param Carbon     $start
     * @param Carbon     $end
     *
     * @return array
     */
    public function periodExpensesNoCategory(Collection $accounts, Carbon $start, Carbon $end): array
    {
        $carbonFormat = Navigation::preferredCarbonFormat($start, $end);

        /** @var GroupCollectorInterface $collector */
        $collector = app(GroupCollectorInterface::class);

        $collector->setAccounts($accounts)->setRange($start, $end)->withAccountInformation();
        $collector->setTypes([TransactionType::WITHDRAWAL, TransactionType::TRANSFER]);
        $collector->withoutCategory();
        $journals = $collector->getExtractedJournals();
        $result   = [
            'entries' => [],
            'name'    => (string)trans('firefly.no_category'),
            'sum'     => '0',
        ];

        /** @var array $journal */
        foreach ($journals as $journal) {
            $date = $journal['date']->format($carbonFormat);

            if (!isset($result['entries'][$date])) {
                $result['entries'][$date] = '0';
            }
            $result['entries'][$date] = bcadd($result['entries'][$date], $journal['amount']);
        }

        return $result;
    }

    /**
     * @param Collection $accounts
     * @param Carbon     $start
     * @param Carbon     $end
     *
     * @return array
     */
    public function periodIncomeNoCategory(Collection $accounts, Carbon $start, Carbon $end): array
    {
        Log::debug('Now in periodIncomeNoCategory()');
        $carbonFormat = Navigation::preferredCarbonFormat($start, $end);

        /** @var GroupCollectorInterface $collector */
        $collector = app(GroupCollectorInterface::class);

        $collector->setAccounts($accounts)->setRange($start, $end)->withAccountInformation();
        $collector->setTypes([TransactionType::DEPOSIT, TransactionType::TRANSFER]);
        $collector->withoutCategory();
        $journals = $collector->getExtractedJournals();
        $result   = [
            'entries' => [],
            'name'    => (string)trans('firefly.no_category'),
            'sum'     => '0',
        ];
        Log::debug('Looping transactions..');

        foreach ($journals as $journal) {
            $date = $journal['date']->format($carbonFormat);

            if (!isset($result['entries'][$date])) {
                $result['entries'][$date] = '0';
            }
            $result['entries'][$date] = bcadd($result['entries'][$date], bcmul($journal['amount'], '-1'));
        }
        Log::debug('Done looping transactions..');
        Log::debug('Finished periodIncomeNoCategory()');

        return $result;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * A very cryptic method name that means:
     *
     * Get me the amount spent in this period, grouped per currency, where no category was set.
     *
     * @param Collection $accounts
     * @param Carbon     $start
     * @param Carbon     $end
     *
     * @return array
     */
    public function spentInPeriodPcWoCategory(Collection $accounts, Carbon $start, Carbon $end): array
    {
        /** @var GroupCollectorInterface $collector */
        $collector = app(GroupCollectorInterface::class);

        $collector->setUser($this->user);
        $collector->setRange($start, $end)->setTypes([TransactionType::WITHDRAWAL])->withoutCategory();

        if ($accounts->count() > 0) {
            $collector->setAccounts($accounts);
        }

        $set    = $collector->getExtractedJournals();
        $return = [];
        /** @var array $journal */
        foreach ($set as $journal) {
            $currencyId = (int)$journal['currency_id'];
            if (!isset($return[$currencyId])) {
                $return[$currencyId] = [
                    'spent'                   => '0',
                    'currency_id'             => $currencyId,
                    'currency_symbol'         => $journal['currency_symbol'],
                    'currency_code'           => $journal['currency_code'],
                    'currency_decimal_places' => $journal['currency_decimal_places'],
                ];
            }
            $return[$currencyId]['spent'] = bcadd($return[$currencyId]['spent'], $journal['amount']);
        }

        return $return;
    }

    /**
     * Sum of income journals in period without a category, grouped per currency. Amounts are always positive.
     *
     * @param Carbon          $start
     * @param Carbon          $end
     * @param Collection|null $accounts
     *
     * @return array
     */
    public function sumIncome(Carbon $start, Carbon $end, ?Collection $accounts = null): array
    {
        /** @var GroupCollectorInterface $collector */
        $collector = app(GroupCollectorInterface::class);
        $collector->setUser($this->user)->setRange($start, $end)->setTypes([TransactionType::DEPOSIT])->withoutCategory();

        if (null !== $accounts && $accounts->count() > 0) {
            $collector->setAccounts($accounts);
        }
        $journals = $collector->getExtractedJournals();
        $array    = [];

        foreach ($journals as $journal) {
            $currencyId                = (int)$journal['currency_id'];
            $array[$currencyId]        = $array[$currencyId] ?? [
                    'sum'                     => '0',
                    'currency_id'             => $currencyId,
                    'currency_name'           => $journal['currency_name'],
                    'currency_symbol'         => $journal['currency_symbol'],
                    'currency_code'           => $journal['currency_code'],
                    'currency_decimal_places' => $journal['currency_decimal_places'],
                ];
            $array[$currencyId]['sum'] = bcadd($array[$currencyId]['sum'], app('steam')->positive($journal['amount']));
        }

        return $array;
    }

    /**
     * Sum of withdrawal journals in period without a category, grouped per currency. Amounts are always negative.
     *
     * @param Carbon          $start
     * @param Carbon          $end
     * @param Collection|null $accounts
     *
     * @return array
     */
    public function sumExpenses(Carbon $start, Carbon $end, ?Collection $accounts = null): array
    {
        /** @var GroupCollectorInterface $collector */
        $collector = app(GroupCollectorInterface::class);
        $collector->setUser($this->user)->setRange($start, $end)->setTypes([TransactionType::WITHDRAWAL])->withoutCategory();

        if (null !== $accounts && $accounts->count() > 0) {
            $collector->setAccounts($accounts);
        }
        $journals = $collector->getExtractedJournals();
        $array    = [];

        foreach ($journals as $journal) {
            $currencyId                = (int)$journal['currency_id'];
            $array[$currencyId]        = $array[$currencyId] ?? [
                    'sum'                     => '0',
                    'currency_id'             => $currencyId,
                    'currency_name'           => $journal['currency_name'],
                    'currency_symbol'         => $journal['currency_symbol'],
                    'currency_code'           => $journal['currency_code'],
                    'currency_decimal_places' => $journal['currency_decimal_places'],
                ];
            $array[$currencyId]['sum'] = bcadd($array[$currencyId]['sum'], app('steam')->negative($journal['amount']));
        }

        return $array;
    }
}