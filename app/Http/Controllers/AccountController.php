<?php namespace FireflyIII\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Config;
use FireflyIII\Http\Requests;
use FireflyIII\Http\Requests\AccountFormRequest;
use FireflyIII\Models\Account;
use FireflyIII\Repositories\Account\AccountRepositoryInterface;
use Input;
use Redirect;
use Session;
use Steam;
use URL;
use View;

/**
 * Class AccountController
 *
 * @package FireflyIII\Http\Controllers
 */
class AccountController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
        View::share('mainTitleIcon', 'fa-credit-card');
        View::share('title', 'Accounts');
    }

    /**
     * @param string $what
     *
     * @return \Illuminate\View\View
     */
    public function create($what = 'asset')
    {
        $subTitleIcon = Config::get('firefly.subIconsByIdentifier.' . $what);
        $subTitle     = 'Create a new ' . e($what) . ' account';

        // put previous url in session if not redirect from store (not "create another").
        if (Session::get('accounts.create.fromStore') !== true) {
            Session::put('accounts.create.url', URL::previous());
        }
        Session::forget('accounts.create.fromStore');

        return view('accounts.create', compact('subTitleIcon', 'what', 'subTitle'));

    }

    /**
     * @param Account $account
     *
     * @return \Illuminate\View\View
     */
    public function delete(Account $account)
    {
        $subTitle = 'Delete ' . strtolower(e($account->accountType->type)) . ' "' . e($account->name) . '"';

        // put previous url in session
        Session::put('accounts.delete.url', URL::previous());

        return view('accounts.delete', compact('account', 'subTitle'));
    }

    /**
     * @param Account $account
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Account $account, AccountRepositoryInterface $repository)
    {

        $type     = $account->accountType->type;
        $typeName = Config::get('firefly.shortNamesByFullName.' . $type);
        $name     = $account->name;

        $repository->destroy($account);

        Session::flash('success', 'The ' . e($typeName) . ' account "' . e($name) . '" was deleted.');

        return Redirect::to(Session::get('accounts.delete.url'));
    }

    /**
     * @param Account                    $account
     * @param AccountRepositoryInterface $repository
     *
     * @return View
     */
    public function edit(Account $account, AccountRepositoryInterface $repository)
    {

        $what           = Config::get('firefly.shortNamesByFullName')[$account->accountType->type];
        $subTitle       = 'Edit ' . strtolower(e($account->accountType->type)) . ' "' . e($account->name) . '"';
        $subTitleIcon   = Config::get('firefly.subIconsByIdentifier.' . $what);
        $openingBalance = $repository->openingBalanceTransaction($account);

        // put previous url in session if not redirect from store (not "return_to_edit").
        if (Session::get('accounts.edit.fromUpdate') !== true) {
            Session::put('accounts.edit.url', URL::previous());
        }
        Session::forget('accounts.edit.fromUpdate');

        // pre fill some useful values.

        // the opening balance is tricky:
        $openingBalanceAmount = null;

        if ($openingBalance) {
            $transaction          = $repository->getFirstTransaction($openingBalance, $account);
            $openingBalanceAmount = $transaction->amount;
        }

        $preFilled = [
            'accountRole'          => $account->getMeta('accountRole'),
            'ccType'               => $account->getMeta('ccType'),
            'ccMonthlyPaymentDate' => $account->getMeta('ccMonthlyPaymentDate'),
            'openingBalanceDate'   => $openingBalance ? $openingBalance->date->format('Y-m-d') : null,
            'openingBalance'       => $openingBalanceAmount,
            'virtualBalance'       => floatval($account->virtual_balance)
        ];
        Session::flash('preFilled', $preFilled);

        return view('accounts.edit', compact('account', 'subTitle', 'subTitleIcon', 'openingBalance', 'what'));
    }

    /**
     * @param                            $what
     * @param AccountRepositoryInterface $repository
     *
     * @return View
     */
    public function index($what, AccountRepositoryInterface $repository)
    {
        $subTitle     = Config::get('firefly.subTitlesByIdentifier.' . $what);
        $subTitleIcon = Config::get('firefly.subIconsByIdentifier.' . $what);
        $types        = Config::get('firefly.accountTypesByIdentifier.' . $what);
        $accounts     = $repository->getAccounts($types);
        // last activity:
        /**
         * HERE WE ARE
         */
        $start = clone Session::get('start', Carbon::now()->startOfMonth());
        $start->subDay();
        $accounts->each(
            function (Account $account) use ($start, $repository) {
                $account->lastActivityDate = $repository->getLastActivity($account);
                $account->startBalance     = Steam::balance($account, $start);
                $account->endBalance       = Steam::balance($account, clone Session::get('end', Carbon::now()->endOfMonth()));
            }
        );

        return view('accounts.index', compact('what', 'subTitleIcon', 'subTitle', 'accounts'));
    }

    /**
     * @param Account                    $account
     * @param AccountRepositoryInterface $repository
     *
     * @return View
     */
    public function show(Account $account, AccountRepositoryInterface $repository)
    {
        $page         = intval(Input::get('page')) == 0 ? 1 : intval(Input::get('page'));
        $subTitleIcon = Config::get('firefly.subTitlesByIdentifier.' . $account->accountType->type);
        $what         = Config::get('firefly.shortNamesByFullName.' . $account->accountType->type);
        $journals     = $repository->getJournals($account, $page);
        $subTitle     = 'Details for ' . strtolower(e($account->accountType->type)) . ' "' . e($account->name) . '"';
        $journals->setPath('accounts/show/' . $account->id);


        return view('accounts.show', compact('account', 'what', 'subTitleIcon', 'journals', 'subTitle'));
    }

    /**
     * @param AccountFormRequest         $request
     * @param AccountRepositoryInterface $repository
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AccountFormRequest $request, AccountRepositoryInterface $repository)
    {
        $accountData = [
            'name'                   => $request->input('name'),
            'accountType'            => $request->input('what'),
            'virtualBalance'         => floatval($request->input('virtualBalance')),
            'active'                 => true,
            'user'                   => Auth::user()->id,
            'accountRole'            => $request->input('accountRole'),
            'openingBalance'         => floatval($request->input('openingBalance')),
            'openingBalanceDate'     => new Carbon($request->input('openingBalanceDate')),
            'openingBalanceCurrency' => intval($request->input('balance_currency_id')),

        ];
        $account     = $repository->store($accountData);

        Session::flash('success', 'New account "' . $account->name . '" stored!');

        if (intval(Input::get('create_another')) === 1) {
            // set value so create routine will not overwrite URL:
            Session::put('accounts.create.fromStore', true);

            return Redirect::route('accounts.create')->withInput();
        }

        // redirect to previous URL.
        return Redirect::to(Session::get('accounts.create.url'));


    }

    /**
     * @param Account                    $account
     * @param AccountFormRequest         $request
     * @param AccountRepositoryInterface $repository
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Account $account, AccountFormRequest $request, AccountRepositoryInterface $repository)
    {

        $accountData = [
            'name'                   => $request->input('name'),
            'active'                 => $request->input('active'),
            'user'                   => Auth::user()->id,
            'accountRole'            => $request->input('accountRole'),
            'virtualBalance'         => floatval($request->input('virtualBalance')),
            'openingBalance'         => floatval($request->input('openingBalance')),
            'openingBalanceDate'     => new Carbon($request->input('openingBalanceDate')),
            'openingBalanceCurrency' => intval($request->input('balance_currency_id')),
            'ccType'                 => $request->input('ccType'),
            'ccMonthlyPaymentDate'   => $request->input('ccMonthlyPaymentDate'),
        ];

        $repository->update($account, $accountData);

        Session::flash('success', 'Account "' . $account->name . '" updated.');

        if (intval(Input::get('return_to_edit')) === 1) {
            // set value so edit routine will not overwrite URL:
            Session::put('accounts.edit.fromUpdate', true);

            return Redirect::route('accounts.edit', $account->id)->withInput(['return_to_edit' => 1]);
        }

        // redirect to previous URL.
        return Redirect::to(Session::get('accounts.edit.url'));

    }

}
