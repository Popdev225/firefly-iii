<?php

use FireflyIII\Database\Budget as BudgetRepository;
use FireflyIII\Exception\FireflyException;
use Illuminate\Support\MessageBag;

/**
 * Class BudgetController
 */
class BudgetController extends BaseController
{

    /** @var BudgetRepository */
    protected $_repository;

    /**
     * @param BudgetRepository $repository
     */
    public function __construct(BudgetRepository $repository)
    {
        $this->_repository = $repository;
        View::share('title', 'Budgets');
        View::share('mainTitleIcon', 'fa-tasks');
    }

    /**
     * @param Budget $budget
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws Exception
     */
    public function amount(Budget $budget)
    {
        $amount = intval(Input::get('amount'));
        $date   = Session::get('start');
        $limit  = $this->_repository->updateLimitAmount($budget, $date, $amount);

        // try to find the limit repetition for this limit:
        $repetition = $limit->limitrepetitions()->first();
        if ($repetition) {
            return Response::json(['name' => $budget->name, 'repetition' => $repetition->id]);
        } else {
            return Response::json(['name' => $budget->name, 'repetition' => null]);
        }

    }

    /**
     * @return $this
     */
    public function create()
    {
        return View::make('budgets.create')->with('subTitle', 'Create a new budget');
    }

    /**
     * @param Budget $budget
     *
     * @return $this
     */
    public function delete(Budget $budget)
    {
        $subTitle = 'Delete budget "' . e($budget->name) . '"';

        return View::make('budgets.delete', compact('budget', 'subTitle'));
    }

    /**
     * @param Budget $budget
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Budget $budget)
    {
        $this->_repository->destroy($budget);
        Session::flash('success', 'The budget was deleted.');

        return Redirect::route('budgets.index');

    }

    /**
     * @param Budget $budget
     *
     * @return $this
     */
    public function edit(Budget $budget)
    {
        $subTitle = 'Edit budget "' . $budget->name . '"';

        return View::make('budgets.edit', compact('budget', 'subTitle'));

    }

    /**
     * @return $this
     */
    public function index()
    {

        /** @var \FireflyIII\Shared\Preferences\PreferencesInterface $preferences */
        $preferences = App::make('FireflyIII\Shared\Preferences\PreferencesInterface');

        /** @var \FireflyIII\Database\Budget $repos */
        $repos   = App::make('FireflyIII\Database\Budget');
        $budgets = $repos->get();

        // get the limits for the current month.
        $date  = \Session::get('start');
        $spent = 0;
        /** @var \Budget $budget */
        foreach ($budgets as $budget) {

            $budget->spent = $repos->spentInMonth($budget, $date);
            $spent += $budget->spent;
            $budget->pct   = 0;
            $budget->limit = 0;

            /** @var \Limit $limit */
            foreach ($budget->limits as $limit) {
                /** @var \LimitRepetition $repetition */
                foreach ($limit->limitrepetitions as $repetition) {
                    if ($repetition->startdate == $date) {
                        $budget->currentRep = $repetition;
                        $budget->limit      = floatval($repetition->amount);
                        if ($budget->limit > $budget->spent) {
                            // not overspent:
                            $budget->pct = 30;
                        } else {
                            $budget->pct = 50;
                        }

                    }
                }
            }
        }

        $budgetAmount = $preferences->get('budgetIncomeTotal' . $date->format('FY'), 1000);
        $amount       = floatval($budgetAmount->data);
        $overspent    = $spent > $amount;
        if ($overspent) {
            // overspent on total amount
            $spentPCT = ceil($amount / $spent * 100);
        } else {
            // not overspent on total amount.
            $spentPCT = ceil($spent / $amount * 100);
        }

        return View::make('budgets.index', compact('budgets', 'spent', 'spentPCT', 'overspent'))->with('budgetAmount', $budgetAmount);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdateIncome()
    {
        /** @var \FireflyIII\Shared\Preferences\PreferencesInterface $preferences */
        $preferences = App::make('FireflyIII\Shared\Preferences\PreferencesInterface');
        $date        = Session::get('start');

        $value = intval(Input::get('amount'));
        $preferences->set('budgetIncomeTotal' . $date->format('FY'), $value);

        return Redirect::route('budgets.index');
    }

    /**
     * @param Budget          $budget
     * @param LimitRepetition $repetition
     *
     * @return \Illuminate\View\View
     */
    public function show(Budget $budget, LimitRepetition $repetition = null)
    {
        if (!is_null($repetition) && $repetition->limit->budget->id != $budget->id) {
            App::abort(500);
        }
        /** @var \FireflyIII\Database\Budget $repos */
        $repos = App::make('FireflyIII\Database\Budget');

        if (is_null($repetition)) {
            // get all other repetitions:
            $limits = $budget->limits()->orderBy('startdate', 'DESC')->get();
            // get all transaction journals for this budget.
            $journals = $repos->getTransactionJournals($budget, 50);

            $subTitle = $budget->name;
        } else {
            // get nothing? i dunno
            $limits = [$repetition->limit];
            // get all transaction journals for this budget and limit repetition.
            $subTitle = $budget->name . ' in ' . $repetition->startdate->format('F Y');
            $journals = $repos->getTransactionJournalsInRepetition($budget, $repetition, 50);
        }
        $hideBudget = true;


        return View::make('budgets.show', compact('limits', 'budget', 'repetition', 'journals', 'subTitle', 'hideBudget'));
    }

    /**
     * @return $this
     * @throws FireflyException
     */
    public function store()
    {
        /** @var \FireflyIII\Database\Budget $repos */
        $repos = App::make('FireflyIII\Database\Budget');
        $data  = Input::except('_token');

        switch ($data['post_submit_action']) {
            default:
                throw new FireflyException('Cannot handle post_submit_action "' . e($data['post_submit_action']) . '"');
                break;
            case 'create_another':
            case 'store':
                $messages = $repos->validate($data);
                /** @var MessageBag $messages ['errors'] */
                if ($messages['errors']->count() > 0) {
                    Session::flash('warnings', $messages['warnings']);
                    Session::flash('successes', $messages['successes']);
                    Session::flash('error', 'Could not save budget: ' . $messages['errors']->first());

                    return Redirect::route('budgets.create')->withInput()->withErrors($messages['errors']);
                }
                // store!
                $repos->store($data);
                Session::flash('success', 'New budget stored!');

                if ($data['post_submit_action'] == 'create_another') {
                    return Redirect::route('budgets.create');
                } else {
                    return Redirect::route('budgets.index');
                }
                break;
            case 'validate_only':
                $messageBags = $repos->validate($data);
                Session::flash('warnings', $messageBags['warnings']);
                Session::flash('successes', $messageBags['successes']);
                Session::flash('errors', $messageBags['errors']);

                return Redirect::route('budgets.create')->withInput();
                break;
        }
    }

    /**
     * @param Budget $budget
     *
     * @return $this
     * @throws FireflyException
     */
    public function update(Budget $budget)
    {

        /** @var \FireflyIII\Database\Budget $repos */
        $repos = App::make('FireflyIII\Database\Budget');
        $data  = Input::except('_token');

        switch (Input::get('post_submit_action')) {
            default:
                throw new FireflyException('Cannot handle post_submit_action "' . e(Input::get('post_submit_action')) . '"');
                break;
            case 'return_to_edit':
            case 'update':
                $messages = $repos->validate($data);
                /** @var MessageBag $messages ['errors'] */
                if ($messages['errors']->count() > 0) {
                    Session::flash('warnings', $messages['warnings']);
                    Session::flash('successes', $messages['successes']);
                    Session::flash('error', 'Could not save budget: ' . $messages['errors']->first());

                    return Redirect::route('budgets.edit', $budget->id)->withInput()->withErrors($messages['errors']);
                }
                // store!
                $repos->update($budget, $data);
                Session::flash('success', 'Budget updated!');

                if ($data['post_submit_action'] == 'return_to_edit') {
                    return Redirect::route('budgets.edit', $budget->id);
                } else {
                    return Redirect::route('budgets.index');
                }
            case 'validate_only':
                $messageBags = $repos->validate($data);
                Session::flash('warnings', $messageBags['warnings']);
                Session::flash('successes', $messageBags['successes']);
                Session::flash('errors', $messageBags['errors']);

                return Redirect::route('budgets.edit', $budget->id)->withInput();
                break;
        }
    }

    /**
     * @return $this
     */
    public function updateIncome()
    {
        $date = Session::get('start');
        /** @var \FireflyIII\Shared\Preferences\PreferencesInterface $preferences */
        $preferences  = App::make('FireflyIII\Shared\Preferences\PreferencesInterface');
        $budgetAmount = $preferences->get('budgetIncomeTotal' . $date->format('FY'), 1000);

        return View::make('budgets.income')->with('amount', $budgetAmount)->with('date', $date);
    }
}