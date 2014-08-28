<?php

use Carbon\Carbon;
use Firefly\Helper\Controllers\BudgetInterface as BI;
use Firefly\Storage\Budget\BudgetRepositoryInterface as BRI;

/**
 * Class BudgetController
 */
class BudgetController extends BaseController
{

    protected $_budgets;
    protected $_repository;

    /**
     * @param BI  $budgets
     * @param BRI $repository
     */
    public function __construct(BI $budgets, BRI $repository)
    {
        $this->_budgets = $budgets;
        $this->_repository = $repository;
    }

    /**
     * @return $this|\Illuminate\View\View
     */
    public function create()
    {
        $periods = \Config::get('firefly.periods_to_text');

        return View::make('budgets.create')->with('periods', $periods);
    }

    /**
     * @param Budget $budget
     *
     * @return $this
     */
    public function delete(Budget $budget)
    {
        return View::make('budgets.delete')->with('budget', $budget);
    }

    /**
     * @param Budget $budget
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Budget $budget)
    {
        Event::fire('budgets.destroy', [$budget]); // just before deletion.
        $result = $this->_repository->destroy($budget);
        if ($result === true) {
            Session::flash('success', 'The budget was deleted.');
            if (Input::get('from') == 'date') {
                return Redirect::route('budgets.index');
            } else {
                return Redirect::route('budgets.index.budget');
            }
        } else {
            Session::flash('error', 'Could not delete the budget. Check the logs to be sure.');
        }

        return Redirect::route('budgets.index');

    }

    /**
     * @param Budget $budget
     *
     * @return $this
     */
    public function edit(Budget $budget)
    {
        return View::make('budgets.edit')->with('budget', $budget);

    }

    /**
     * @return $this|\Illuminate\View\View
     */
    public function indexByBudget()
    {
        $budgets = $this->_repository->get();
        $today = new Carbon;


        return View::make('budgets.indexByBudget')->with('budgets', $budgets)->with('today', $today);

    }

    /**
     * @return $this|\Illuminate\View\View
     * @throws Firefly\Exception\FireflyException
     */
    public function indexByDate()
    {
        // get a list of dates by getting all repetitions:
        $set = $this->_repository->get();
        $budgets = $this->_budgets->organizeByDate($set);


        return View::make('budgets.indexByDate')->with('budgets', $budgets);


    }

    /**
     * @param Budget $budget
     *
     * @return int
     */
    public function show(Budget $budget)
    {
        /**
         * Use the
         */
        $useSessionDates = Input::get('useSession') == 'true' ? true : false;


        $filters = [];

        if (!is_null(Input::get('rep'))) {
            $repetitionId = intval(Input::get('rep'));
            $repetitions = $this->_budgets->organizeRepetition($repetitionId);
            $filters[] = $repetitions[0]['limit'];
            $filters[] = $repetitions[0]['limitrepetition'];
        } else {
            if (Input::get('noenvelope') == 'true') {
                $repetitions = $this->_budgets->outsideRepetitions($budget);
                $filters[] = 'no_envelope';
            } else {
                // grab all limit repetitions, order them, show them:
                $repetitions = $this->_budgets->organizeRepetitions($budget, $useSessionDates);
            }
        }

        return View::make('budgets.show')->with('budget', $budget)->with('repetitions', $repetitions)->with(
            'filters', $filters
        )->with('highlight', Input::get('highlight'))->with('useSessionDates', $useSessionDates);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {

        $budget = $this->_repository->store(Input::all());
        if ($budget->validate()) {
            Event::fire('budgets.store', [$budget]);
            Session::flash('success', 'Budget created!');

            if (Input::get('create') == '1') {
                return Redirect::route('budgets.create', ['from' => Input::get('from')]);
            }

            if (Input::get('from') == 'date') {
                return Redirect::route('budgets.index');
            } else {
                return Redirect::route('budgets.index.budget');
            }
        } else {
            Session::flash('error', 'Could not save the new budget');

            return Redirect::route('budgets.create')->withInput()->withErrors($budget->errors());
        }

    }

    /**
     * @param Budget $budget
     *
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function update(Budget $budget)
    {
        $budget = $this->_repository->update($budget, Input::all());
        if ($budget->validate()) {
            Event::fire('budgets.update', [$budget]);
            Session::flash('success', 'Budget "' . $budget->name . '" updated.');

            if (Input::get('from') == 'date') {
                return Redirect::route('budgets.index');
            } else {
                return Redirect::route('budgets.index.budget');
            }
        } else {
            Session::flash('error', 'Could not update budget: ' . $budget->errors()->first());

            return Redirect::route('budgets.edit', $budget->id)->withInput()->withErrors($budget->errors());
        }

    }


} 