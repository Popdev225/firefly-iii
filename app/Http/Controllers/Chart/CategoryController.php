<?php

namespace FireflyIII\Http\Controllers\Chart;


use Carbon\Carbon;
use FireflyIII\Http\Controllers\Controller;
use FireflyIII\Models\Category;
use FireflyIII\Models\LimitRepetition;
use FireflyIII\Models\Preference;
use FireflyIII\Repositories\Category\CategoryRepositoryInterface;
use Grumpydictator\Gchart\GChart;
use Navigation;
use Preferences;
use Response;
use Session;
use Crypt;

/**
 * Class CategoryController
 *
 * @package FireflyIII\Http\Controllers\Chart
 */
class CategoryController extends Controller
{


    /**
     * Show this month's category overview.
     *
     * @param GChart                      $chart
     * @param CategoryRepositoryInterface $repository
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function home(GChart $chart, CategoryRepositoryInterface $repository)
    {
        $chart->addColumn(trans('firefly.category'), 'string');
        $chart->addColumn(trans('firefly.spent'), 'number');

        $start = Session::get('start', Carbon::now()->startOfMonth());
        $end   = Session::get('end', Carbon::now()->endOfMonth());
        $set   = $repository->getCategoriesAndExpenses($start, $end);

        foreach ($set as $entry) {
            $isEncrypted = intval($entry->encrypted) == 1 ? true : false;
            $name        = strlen($entry->name) == 0 ? trans('firefly.noCategory') : $entry->name;
            $name        = $isEncrypted ? Crypt::decrypt($name) : $name;
            $chart->addRow($name, floatval($entry->sum));
        }

        $chart->generate();

        return Response::json($chart->getData());

    }

    /**
     * Show an overview for a category.
     *
     * @param GChart                      $chart
     * @param CategoryRepositoryInterface $repository
     * @param Category                    $category
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function overview(GChart $chart, CategoryRepositoryInterface $repository, Category $category)
    {
        // oldest transaction in category:
        $start = $repository->getFirstActivityDate($category);

        $range = Preferences::get('viewRange', '1M')->data;
        // jump to start of week / month / year / etc
        $start = Navigation::startOfPeriod($start, $range);

        $chart->addColumn(trans('firefly.period'), 'date');
        $chart->addColumn(trans('firefly.spent'), 'number');

        $end = new Carbon;
        while ($start <= $end) {

            $currentEnd = Navigation::endOfPeriod($start, $range->data);
            $spent      = $repository->spentInPeriod($category, $start, $currentEnd);
            $chart->addRow(clone $start, $spent);

            $start = Navigation::addPeriod($start, $range->data, 0);
        }

        $chart->generate();

        return Response::json($chart->getData());


    }


    /**
     * @param GChart                      $chart
     * @param CategoryRepositoryInterface $repository
     * @param Category                    $category
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function period(GChart $chart, CategoryRepositoryInterface $repository, Category $category)
    {
        $start = clone Session::get('start', Carbon::now()->startOfMonth());
        $chart->addColumn(trans('firefly.period'), 'date');
        $chart->addColumn(trans('firefly.spent'), 'number');

        $end = Session::get('end', Carbon::now()->endOfMonth());
        while ($start <= $end) {
            $spent = $repository->spentOnDaySum($category, $start);
            $chart->addRow(clone $start, $spent);
            $start->addDay();
        }

        $chart->generate();

        return Response::json($chart->getData());


    }


    /**
     * @param GChart                      $chart
     * @param CategoryRepositoryInterface $repository
     * @param                             $year
     * @param bool                        $shared
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function year(GChart $chart, CategoryRepositoryInterface $repository, $year, $shared = false)
    {
        $start      = new Carbon($year . '-01-01');
        $end        = new Carbon($year . '-12-31');
        $shared     = $shared == 'shared' ? true : false;
        $categories = $repository->getCategories();

        // add columns:
        $chart->addColumn(trans('firefly.month'), 'date');
        foreach ($categories as $category) {
            $chart->addColumn($category->name, 'number');
        }

        while ($start < $end) {
            // month is the current end of the period:
            $month = clone $start;
            $month->endOfMonth();
            // make a row:
            $row = [clone $start];

            // each budget, fill the row:
            foreach ($categories as $category) {
                $spent = $repository->spentInPeriod($category, $start, $month, $shared);
                $row[] = $spent;
            }
            $chart->addRowArray($row);

            $start->addMonth();
        }

        $chart->generate();

        return Response::json($chart->getData());
    }
}