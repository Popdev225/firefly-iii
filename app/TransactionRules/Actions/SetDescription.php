<?php

/**
 * SetDescription.php
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

use FireflyIII\Events\TriggeredAuditLog;
use FireflyIII\Models\RuleAction;
use FireflyIII\Models\TransactionJournal;
use FireflyIII\TransactionRules\Expressions\ActionExpression;

/**
 * Class SetDescription.
 */
class SetDescription implements ActionInterface
{
    private RuleAction       $action;
    private ActionExpression $expr;

    /**
     * TriggerInterface constructor.
     */
    public function __construct(RuleAction $action, ActionExpression $expr)
    {
        $this->action = $action;
        $this->expr   = $expr;
    }

    public function actOnArray(array $journal): bool
    {
        /** @var TransactionJournal $object */
        $object = TransactionJournal::where('user_id', $journal['user_id'])->find($journal['transaction_journal_id']);
        $before = $journal['description'];
        $after = $this->expr->evaluate($journal);

        \DB::table('transaction_journals')
            ->where('id', '=', $journal['transaction_journal_id'])
            ->update(['description' => $this->action->action_value]);

        app('log')->debug(
            sprintf(
                'RuleAction SetDescription changed the description of journal #%d from "%s" to "%s".',
                $journal['transaction_journal_id'],
                $before,
                $after
            )
        );
        $object->refresh();
        event(new TriggeredAuditLog($this->action->rule, $object, 'update_description', $before, $after));

        return true;
    }
}
