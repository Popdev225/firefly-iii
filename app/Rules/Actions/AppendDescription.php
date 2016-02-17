<?php
declare(strict_types = 1);
/**
 * AppendDescription.php
 * Copyright (C) 2016 Sander Dorigo
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace FireflyIII\Rules\Actions;

use FireflyIII\Models\RuleAction;
use FireflyIII\Models\TransactionJournal;

/**
 * Class AppendDescription
 *
 * @package FireflyIII\Rules\Actions
 */
class AppendDescription implements ActionInterface
{

    private $action;


    /**
     * TriggerInterface constructor.
     *
     * @param RuleAction         $action
     */
    public function __construct(RuleAction $action)
    {
        $this->action  = $action;
    }

    /**
     * @param TransactionJournal $journal
     *
     * @return bool
     */
    public function act(TransactionJournal $journal)
    {
        $journal->description = $journal->description . $this->action->action_value;
        $journal->save();

        return true;
    }
}
