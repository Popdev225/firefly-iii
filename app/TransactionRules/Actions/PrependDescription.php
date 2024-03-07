<?php

/**
 * PrependDescription.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace FireflyIII\TransactionRules\Actions;

use DB;
use FireflyIII\Events\TriggeredAuditLog;
use FireflyIII\Models\RuleAction;
use FireflyIII\Models\TransactionJournal;
use FireflyIII\TransactionRules\Expressions\ActionExpressionEvaluator;

/**
 * Class PrependDescription.
 */
class PrependDescription implements ActionInterface
{
    private RuleAction                $action;
    private ActionExpressionEvaluator $evaluator;

    /**
     * TriggerInterface constructor.
     *
     * @param RuleAction $action
     */
    public function __construct(RuleAction $action, ActionExpressionEvaluator $evaluator)
    {
        $this->action = $action;
        $this->evaluator = $evaluator;
    }

    /**
     * @inheritDoc
     */
    public function actOnArray(array $journal): bool
    {
        $actionValue = $this->evaluator->evaluate($journal);

        $before = $journal['description'];
        $after  = sprintf('%s%s', $actionValue, $journal['description']);
        DB::table('transaction_journals')->where('id', $journal['transaction_journal_id'])->limit(1)->update(['description' => $after]);

        // journal
        /** @var TransactionJournal $object */
        $object = TransactionJournal::where('user_id', $journal['user_id'])->find($journal['transaction_journal_id']);

        // audit log
        event(new TriggeredAuditLog($this->action->rule, $object, 'update_description', $before, $after));

        return true;
    }
}
