<?php
/**
 * HomeController.php
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

namespace FireflyIII\Http\Controllers;

use Carbon\Carbon;
use FireflyIII\Events\RequestedVersionCheckStatus;
use FireflyIII\Helpers\Collector\JournalCollectorInterface;
use FireflyIII\Http\Middleware\Installer;
use FireflyIII\Http\Middleware\IsDemoUser;
use FireflyIII\Http\Middleware\IsSandStormUser;
use FireflyIII\Models\AccountType;
use FireflyIII\Repositories\Account\AccountRepositoryInterface;
use FireflyIII\Repositories\Bill\BillRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Log;
use Preferences;
use View;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        app('view')->share('title', 'Firefly III');
        app('view')->share('mainTitleIcon', 'fa-fire');
        $this->middleware(Installer::class);
        $this->middleware(IsDemoUser::class)->except(['dateRange', 'index']);
        $this->middleware(IsSandStormUser::class)->only('routes');

    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function dateRange(Request $request)
    {
        $start         = new Carbon($request->get('start'));
        $end           = new Carbon($request->get('end'));
        $label         = $request->get('label');
        $isCustomRange = false;

        Log::debug('Received dateRange', ['start' => $request->get('start'), 'end' => $request->get('end'), 'label' => $request->get('label')]);

        // check if the label is "everything" or "Custom range" which will betray
        // a possible problem with the budgets.
        if ($label === (string)trans('firefly.everything') || $label === (string)trans('firefly.customRange')) {
            $isCustomRange = true;
            Log::debug('Range is now marked as "custom".');
        }

        $diff = $start->diffInDays($end);

        if ($diff > 50) {
            $request->session()->flash('warning', (string)trans('firefly.warning_much_data', ['days' => $diff]));
        }

        $request->session()->put('is_custom_range', $isCustomRange);
        Log::debug(sprintf('Set is_custom_range to %s', var_export($isCustomRange, true)));
        $request->session()->put('start', $start);
        Log::debug(sprintf('Set start to %s', $start->format('Y-m-d H:i:s')));
        $request->session()->put('end', $end);
        Log::debug(sprintf('Set end to %s', $end->format('Y-m-d H:i:s')));

        return response()->json(['ok' => 'ok']);
    }


    /**
     * @param AccountRepositoryInterface $repository
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|View
     */
    public function index(AccountRepositoryInterface $repository)
    {
        $types = config('firefly.accountTypesByIdentifier.asset');
        $count = $repository->count($types);

        if (0 === $count) {
            return redirect(route('new-user.index'));
        }
        $subTitle     = trans('firefly.welcomeBack');
        $transactions = [];
        $frontPage    = Preferences::get(
            'frontPageAccounts',
            $repository->getAccountsByType([AccountType::DEFAULT, AccountType::ASSET])->pluck('id')->toArray()
        );
        /** @var Carbon $start */
        $start = session('start', Carbon::now()->startOfMonth());
        /** @var Carbon $end */
        $end      = session('end', Carbon::now()->endOfMonth());
        $accounts = $repository->getAccountsById($frontPage->data);
        $today    = new Carbon;

        // zero bills? Hide some elements from view.
        /** @var BillRepositoryInterface $billRepository */
        $billRepository = app(BillRepositoryInterface::class);
        $billCount      = $billRepository->getBills()->count();

        foreach ($accounts as $account) {
            $collector = app(JournalCollectorInterface::class);
            $collector->setAccounts(new Collection([$account]))->setRange($start, $end)->setLimit(10)->setPage(1);
            $set            = $collector->getJournals();
            $transactions[] = [$set, $account];
        }

        // fire check update event:
        event(new RequestedVersionCheckStatus(auth()->user()));

        return view(
            'index',
            compact('count', 'subTitle', 'transactions', 'billCount', 'start', 'end', 'today')
        );
    }

}
