<?php
use FireflyIII\Exception\NotImplementedException;

/**
 * Class SearchController
 */
class SearchController extends BaseController
{
    /**
     * Results always come in the form of an array [results, count, fullCount]
     */
    public function index()
    {
        throw new NotImplementedException;
        $subTitle = null;
        $rawQuery = null;
        $result   = [];
        if (!is_null(Input::get('q'))) {
            $rawQuery = trim(Input::get('q'));
            $words    = explode(' ', $rawQuery);
            $subTitle = 'Results for "' . e($rawQuery) . '"';

            $transactions = $this->_helper->searchTransactions($words);
            $accounts     = $this->_helper->searchAccounts($words);
            $categories   = $this->_helper->searchCategories($words);
            $budgets      = $this->_helper->searchBudgets($words);
            $tags         = $this->_helper->searchTags($words);
            $result       = ['transactions' => $transactions, 'accounts' => $accounts, 'categories' => $categories, 'budgets' => $budgets, 'tags' => $tags];

        }

        return View::make('search.index')->with('title', 'Search')->with('subTitle', $subTitle)->with(
            'mainTitleIcon', 'fa-search'
        )->with('query', $rawQuery)->with('result', $result);
    }
}