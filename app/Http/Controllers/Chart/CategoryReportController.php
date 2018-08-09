<?php
/**
 * CategoryReportController.php
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

namespace FireflyIII\Http\Controllers\Chart;

use Carbon\Carbon;
use FireflyIII\Generator\Chart\Basic\GeneratorInterface;
use FireflyIII\Helpers\Chart\MetaPieChartInterface;
use FireflyIII\Helpers\Collector\JournalCollectorInterface;
use FireflyIII\Helpers\Filter\NegativeAmountFilter;
use FireflyIII\Helpers\Filter\OpposingAccountFilter;
use FireflyIII\Helpers\Filter\PositiveAmountFilter;
use FireflyIII\Helpers\Filter\TransferFilter;
use FireflyIII\Http\Controllers\Controller;
use FireflyIII\Models\Category;
use FireflyIII\Models\Transaction;
use FireflyIII\Models\TransactionType;
use FireflyIII\Support\CacheProperties;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

/**
 * Separate controller because many helper functions are shared.
 *
 * Class CategoryReportController
 */
class CategoryReportController extends Controller
{
    /** @var GeneratorInterface Chart generation methods. */
    private $generator;

    /**
     * CategoryReportController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware(
            function ($request, $next) {
                $this->generator = app(GeneratorInterface::class);

                return $next($request);
            }
        );
    }

    /** @noinspection MoreThanThreeArgumentsInspection */
    /**
     * Chart for expenses grouped by expense account.
     *
     * @param Collection $accounts
     * @param Collection $categories
     * @param Carbon     $start
     * @param Carbon     $end
     * @param string     $others
     *
     * @return JsonResponse
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function accountExpense(Collection $accounts, Collection $categories, Carbon $start, Carbon $end, string $others): JsonResponse
    {
        /** @var MetaPieChartInterface $helper */
        $helper = app(MetaPieChartInterface::class);
        $helper->setAccounts($accounts)->setCategories($categories)->setStart($start)->setEnd($end)->setCollectOtherObjects(1 === (int)$others);

        $chartData = $helper->generate('expense', 'account');
        $data      = $this->generator->pieChart($chartData);

        return response()->json($data);
    }

    /** @noinspection MoreThanThreeArgumentsInspection */
    /**
     * Chart for income grouped by revenue account.
     *
     * @param Collection $accounts
     * @param Collection $categories
     * @param Carbon     $start
     * @param Carbon     $end
     * @param string     $others
     *
     * @return JsonResponse
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function accountIncome(Collection $accounts, Collection $categories, Carbon $start, Carbon $end, string $others): JsonResponse
    {
        /** @var MetaPieChartInterface $helper */
        $helper = app(MetaPieChartInterface::class);
        $helper->setAccounts($accounts);
        $helper->setCategories($categories);
        $helper->setStart($start);
        $helper->setEnd($end);
        $helper->setCollectOtherObjects(1 === (int)$others);
        $chartData = $helper->generate('income', 'account');
        $data      = $this->generator->pieChart($chartData);

        return response()->json($data);
    }

    /** @noinspection MoreThanThreeArgumentsInspection */
    /**
     * Chart for expenses grouped by expense account.
     *
     * @param Collection $accounts
     * @param Collection $categories
     * @param Carbon     $start
     * @param Carbon     $end
     * @param string     $others
     *
     * @return JsonResponse
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function categoryExpense(Collection $accounts, Collection $categories, Carbon $start, Carbon $end, string $others): JsonResponse
    {
        /** @var MetaPieChartInterface $helper */
        $helper = app(MetaPieChartInterface::class);
        $helper->setAccounts($accounts);
        $helper->setCategories($categories);
        $helper->setStart($start);
        $helper->setEnd($end);
        $helper->setCollectOtherObjects(1 === (int)$others);
        $chartData = $helper->generate('expense', 'category');
        $data      = $this->generator->pieChart($chartData);

        return response()->json($data);
    }

    /** @noinspection MoreThanThreeArgumentsInspection */
    /**
     * Piechart for income grouped by account.
     *
     * @param Collection $accounts
     * @param Collection $categories
     * @param Carbon     $start
     * @param Carbon     $end
     * @param string     $others
     *
     * @return JsonResponse
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function categoryIncome(Collection $accounts, Collection $categories, Carbon $start, Carbon $end, string $others): JsonResponse
    {
        /** @var MetaPieChartInterface $helper */
        $helper = app(MetaPieChartInterface::class);
        $helper->setAccounts($accounts);
        $helper->setCategories($categories);
        $helper->setStart($start);
        $helper->setEnd($end);
        $helper->setCollectOtherObjects(1 === (int)$others);
        $chartData = $helper->generate('income', 'category');
        $data      = $this->generator->pieChart($chartData);

        return response()->json($data);
    }


    /** @noinspection MoreThanThreeArgumentsInspection */
    /**
     * Main report category chart.
     *
     * @param Collection $accounts
     * @param Collection $categories
     * @param Carbon     $start
     * @param Carbon     $end
     *
     * @return JsonResponse
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function mainChart(Collection $accounts, Collection $categories, Carbon $start, Carbon $end): JsonResponse
    {
        $cache = new CacheProperties;
        $cache->addProperty('chart.category.report.main');
        $cache->addProperty($accounts);
        $cache->addProperty($categories);
        $cache->addProperty($start);
        $cache->addProperty($end);
        if ($cache->has()) {
            return response()->json($cache->get()); // @codeCoverageIgnore
        }

        $format       = app('navigation')->preferredCarbonLocalizedFormat($start, $end);
        $function     = app('navigation')->preferredEndOfPeriod($start, $end);
        $chartData    = [];
        $currentStart = clone $start;

        // prep chart data:
        foreach ($categories as $category) {
            $chartData[$category->id . '-in']  = [
                'label'   => $category->name . ' (' . strtolower((string)trans('firefly.income')) . ')',
                'type'    => 'bar',
                'yAxisID' => 'y-axis-0',
                'entries' => [],
            ];
            $chartData[$category->id . '-out'] = [
                'label'   => $category->name . ' (' . strtolower((string)trans('firefly.expenses')) . ')',
                'type'    => 'bar',
                'yAxisID' => 'y-axis-0',
                'entries' => [],
            ];
            // total in, total out:
            $chartData[$category->id . '-total-in']  = [
                'label'   => $category->name . ' (' . strtolower((string)trans('firefly.sum_of_income')) . ')',
                'type'    => 'line',
                'fill'    => false,
                'yAxisID' => 'y-axis-1',
                'entries' => [],
            ];
            $chartData[$category->id . '-total-out'] = [
                'label'   => $category->name . ' (' . strtolower((string)trans('firefly.sum_of_expenses')) . ')',
                'type'    => 'line',
                'fill'    => false,
                'yAxisID' => 'y-axis-1',
                'entries' => [],
            ];
        }
        $sumOfIncome  = [];
        $sumOfExpense = [];

        while ($currentStart < $end) {
            $currentEnd = clone $currentStart;
            $currentEnd = $currentEnd->$function();
            $expenses   = $this->groupByCategory($this->getExpenses($accounts, $categories, $currentStart, $currentEnd));
            $income     = $this->groupByCategory($this->getIncome($accounts, $categories, $currentStart, $currentEnd));
            $label      = $currentStart->formatLocalized($format);

            /** @var Category $category */
            foreach ($categories as $category) {
                $labelIn        = $category->id . '-in';
                $labelOut       = $category->id . '-out';
                $labelSumIn     = $category->id . '-total-in';
                $labelSumOut    = $category->id . '-total-out';
                $currentIncome  = $income[$category->id] ?? '0';
                $currentExpense = $expenses[$category->id] ?? '0';

                // add to sum:
                $sumOfIncome[$category->id]  = $sumOfIncome[$category->id] ?? '0';
                $sumOfExpense[$category->id] = $sumOfExpense[$category->id] ?? '0';
                $sumOfIncome[$category->id]  = bcadd($sumOfIncome[$category->id], $currentIncome);
                $sumOfExpense[$category->id] = bcadd($sumOfExpense[$category->id], $currentExpense);

                // add to chart:
                $chartData[$labelIn]['entries'][$label]     = $currentIncome;
                $chartData[$labelOut]['entries'][$label]    = $currentExpense;
                $chartData[$labelSumIn]['entries'][$label]  = $sumOfIncome[$category->id];
                $chartData[$labelSumOut]['entries'][$label] = $sumOfExpense[$category->id];
            }
            /** @var Carbon $currentStart */
            $currentStart = clone $currentEnd;
            $currentStart->addDay();
        }
        // remove all empty entries to prevent cluttering:
        $newSet = [];
        foreach ($chartData as $key => $entry) {
            if (0 === !array_sum($entry['entries'])) {
                $newSet[$key] = $chartData[$key];
            }
        }
        if (0 === \count($newSet)) {
            $newSet = $chartData;
        }
        $data = $this->generator->multiSet($newSet);
        $cache->store($data);

        return response()->json($data);
    }

    /** @noinspection MoreThanThreeArgumentsInspection */
    /**
     * Get all expenses in a period for categories.
     *
     * @param Collection $accounts
     * @param Collection $categories
     * @param Carbon     $start
     * @param Carbon     $end
     *
     * @return Collection
     *
     *
     */
    protected function getExpenses(Collection $accounts, Collection $categories, Carbon $start, Carbon $end): Collection // get data + augument
    {
        /** @var JournalCollectorInterface $collector */
        $collector = app(JournalCollectorInterface::class);
        $collector->setAccounts($accounts)->setRange($start, $end)->setTypes([TransactionType::WITHDRAWAL, TransactionType::TRANSFER])
                  ->setCategories($categories)->withOpposingAccount();
        $collector->removeFilter(TransferFilter::class);

        $collector->addFilter(OpposingAccountFilter::class);
        $collector->addFilter(PositiveAmountFilter::class);

        return $collector->getJournals();
    }

    /** @noinspection MoreThanThreeArgumentsInspection */
    /**
     * Get all income for a period and a bunch of categories.
     *
     * @param Collection $accounts
     * @param Collection $categories
     * @param Carbon     $start
     * @param Carbon     $end
     *
     * @return Collection
     */
    protected function getIncome(Collection $accounts, Collection $categories, Carbon $start, Carbon $end): Collection // get data + augument
    {
        /** @var JournalCollectorInterface $collector */
        $collector = app(JournalCollectorInterface::class);
        $collector->setAccounts($accounts)->setRange($start, $end)->setTypes([TransactionType::DEPOSIT, TransactionType::TRANSFER])
                  ->setCategories($categories)->withOpposingAccount();

        $collector->addFilter(OpposingAccountFilter::class);
        $collector->addFilter(NegativeAmountFilter::class);

        return $collector->getJournals();
    }

    /**
     * Group transactions by category.
     *
     * @param Collection $set
     *
     * @return array
     */
    protected function groupByCategory(Collection $set): array // filter + group data
    {
        // group by category ID:
        $grouped = [];
        /** @var Transaction $transaction */
        foreach ($set as $transaction) {
            $jrnlCatId            = (int)$transaction->transaction_journal_category_id;
            $transCatId           = (int)$transaction->transaction_category_id;
            $categoryId           = max($jrnlCatId, $transCatId);
            $grouped[$categoryId] = $grouped[$categoryId] ?? '0';
            $grouped[$categoryId] = bcadd($transaction->transaction_amount, $grouped[$categoryId]);
        }

        return $grouped;
    }
}
