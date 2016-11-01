<?php
/**
 * ChartJsCategoryChartGenerator.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

declare(strict_types = 1);
namespace FireflyIII\Generator\Chart\Category;

use Illuminate\Support\Collection;


/**
 * Class ChartJsCategoryChartGenerator
 *
 * @package FireflyIII\Generator\Chart\Category
 */
class ChartJsCategoryChartGenerator implements CategoryChartGeneratorInterface
{

    /**
     * @param Collection $entries
     *
     * @return array
     */
    public function all(Collection $entries): array
    {
        $data = [
            'count'    => 2,
            'labels'   => [],
            'datasets' => [
                [
                    'label' => trans('firefly.spent'),
                    'data'  => [],
                ],
                [
                    'label' => trans('firefly.earned'),
                    'data'  => [],
                ],
            ],
        ];

        foreach ($entries as $entry) {
            $data['labels'][] = $entry[1];
            $spent            = $entry[2];
            $earned           = $entry[3];

            $data['datasets'][0]['data'][] = bccomp($spent, '0') === 0 ? null : round(bcmul($spent, '-1'), 4);
            $data['datasets'][1]['data'][] = bccomp($earned, '0') === 0 ? null : round($earned, 4);
        }

        return $data;
    }

    /**
     * @param Collection $categories
     * @param Collection $entries
     *
     * @return array
     */
    public function earnedInPeriod(Collection $categories, Collection $entries): array
    {

        // language:
        $format = (string)trans('config.month');

        $data = [
            'count'    => 0,
            'labels'   => [],
            'datasets' => [],
        ];

        foreach ($categories as $category) {
            $data['labels'][] = $category->name;
        }

        foreach ($entries as $entry) {
            $date = $entry[0]->formatLocalized($format);
            array_shift($entry);
            $data['count']++;
            $data['datasets'][] = ['label' => $date, 'data' => $entry];
        }

        return $data;

    }

    /**
     * @param Collection $entries
     *
     * @return array
     */
    public function frontpage(Collection $entries): array
    {
        $data = [
            'count'    => 1,
            'labels'   => [],
            'datasets' => [
                [
                    'label' => trans('firefly.spent'),
                    'data'  => [],
                ],
            ],
        ];
        foreach ($entries as $entry) {
            if ($entry->spent != 0) {
                $data['labels'][]              = $entry->name;
                $data['datasets'][0]['data'][] = round(bcmul($entry->spent, '-1'), 2);
            }
        }

        return $data;
    }

    /**
     *
     * @param Collection $entries
     *
     * @return array
     */
    public function period(Collection $entries): array
    {
        return $this->all($entries);

    }

    /**
     * @param Collection $categories
     * @param Collection $entries
     *
     * @return array
     */
    public function spentInPeriod(Collection $categories, Collection $entries): array
    {

        // language:
        $format = (string)trans('config.month');

        $data = [
            'count'    => 0,
            'labels'   => [],
            'datasets' => [],
        ];

        foreach ($categories as $category) {
            $data['labels'][] = $category->name;
        }

        foreach ($entries as $entry) {
            $date = $entry[0]->formatLocalized($format);
            array_shift($entry);
            $data['count']++;
            $data['datasets'][] = ['label' => $date, 'data' => $entry];
        }

        return $data;

    }
}
