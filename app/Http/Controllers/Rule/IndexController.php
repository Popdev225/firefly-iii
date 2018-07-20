<?php
/**
 * RuleController.php
 * Copyright (c) 2018 thegrumpydictator@gmail.com
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

namespace FireflyIII\Http\Controllers\Rule;

use FireflyIII\Http\Controllers\Controller;
use FireflyIII\Models\Rule;
use FireflyIII\Repositories\Rule\RuleRepositoryInterface;
use FireflyIII\Repositories\RuleGroup\RuleGroupRepositoryInterface;
use FireflyIII\Support\Http\Controllers\RuleManagement;
use FireflyIII\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class IndexController
 */
class IndexController extends Controller
{
    use RuleManagement;
    /** @var RuleGroupRepositoryInterface */
    private $ruleGroupRepos;
    /** @var RuleRepositoryInterface */
    private $ruleRepos;

    /**
     * RuleController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware(
            function ($request, $next) {
                app('view')->share('title', (string)trans('firefly.rules'));
                app('view')->share('mainTitleIcon', 'fa-random');
                $this->ruleGroupRepos = app(RuleGroupRepositoryInterface::class);
                $this->ruleRepos      = app(RuleRepositoryInterface::class);

                return $next($request);
            }
        );
    }

    /**
     * @param Rule $rule
     *
     * @return RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function down(Rule $rule)
    {
        $this->ruleRepos->moveDown($rule);

        return redirect(route('rules.index'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        /** @var User $user */
        $user = auth()->user();
        $this->createDefaultRuleGroup();
        $this->createDefaultRule();
        $ruleGroups = $this->ruleGroupRepos->getRuleGroupsWithRules($user);

        return view('rules.index', compact('ruleGroups'));
    }

    /**
     * @param Request $request
     * @param Rule    $rule
     *
     * @return JsonResponse
     */
    public function reorderRuleActions(Request $request, Rule $rule): JsonResponse
    {
        $ids = $request->get('actions');
        if (\is_array($ids)) {
            $this->ruleRepos->reorderRuleActions($rule, $ids);
        }

        return response()->json('true');
    }

    /**
     * @param Request $request
     * @param Rule    $rule
     *
     * @return JsonResponse
     */
    public function reorderRuleTriggers(Request $request, Rule $rule): JsonResponse
    {
        $ids = $request->get('triggers');
        if (\is_array($ids)) {
            $this->ruleRepos->reorderRuleTriggers($rule, $ids);
        }

        return response()->json('true');
    }


    /**
     * @param Rule $rule
     *
     * @return RedirectResponse|\Illuminate\Routing\Redirector
     * @SuppressWarnings(PHPMD.ShortMethodName)
     */
    public function up(Rule $rule)
    {
        $this->ruleRepos->moveUp($rule);

        return redirect(route('rules.index'));
    }

}
