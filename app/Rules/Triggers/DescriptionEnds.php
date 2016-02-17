<?php
declare(strict_types = 1);
/**
 * DescriptionEnds.php
 * Copyright (C) 2016 Sander Dorigo
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace FireflyIII\Rules\Triggers;

use FireflyIII\Models\RuleTrigger;
use FireflyIII\Models\TransactionJournal;
use Log;

/**
 * Class DescriptionEnds
 *
 * @package FireflyIII\Rules\Triggers
 */
class DescriptionEnds implements TriggerInterface
{
    /** @var TransactionJournal */
    protected $journal;
    /** @var RuleTrigger */
    protected $trigger;

    /**
     * TriggerInterface constructor.
     *
     * @param RuleTrigger        $trigger
     * @param TransactionJournal $journal
     */
    public function __construct(RuleTrigger $trigger, TransactionJournal $journal)
    {
        $this->trigger = $trigger;
        $this->journal = $journal;
    }

    /**
     * A trigger is said to "match anything", or match any given transaction,
     * when the trigger value is very vague or has no restrictions. Easy examples
     * are the "AmountMore"-trigger combined with an amount of 0: any given transaction
     * has an amount of more than zero! Other examples are all the "Description"-triggers
     * which have hard time handling empty trigger values such as "" or "*" (wild cards).
     *
     * If the user tries to create such a trigger, this method MUST return true so Firefly III
     * can stop the storing / updating the trigger. If the trigger is in any way restrictive
     * (even if it will still include 99.9% of the users transactions), this method MUST return
     * false.
     *
     * @param null $value
     *
     * @return bool
     */
    public static function willMatchEverything($value = null)
    {
        if (!is_null($value)) {
            return strval($value) === "";
        }

        return true;
    }

    /**
     * @{inheritdoc}
     *
     * @see TriggerInterface::matchesAnything
     *
     * @return bool
     */
    public function matchesAnything()
    {
        return $this->trigger->trigger_value === "";
    }

    /**
     * @return bool
     */
    public function triggered()
    {
        $description       = strtolower($this->journal->description);
        $descriptionLength = strlen($description);
        $search            = strtolower($this->trigger->trigger_value);
        $searchLength      = strlen($search);

        // if the string to search for is longer than the description,
        // shorten the search string.
        if ($searchLength > $descriptionLength) {
            Log::debug('Search string "' . $search . '" (' . $searchLength . ') is longer than "' . $description . '" (' . $descriptionLength . '). ');
            $search       = substr($search, ($descriptionLength * -1));
            $searchLength = strlen($search);
            Log::debug('Search string is now "' . $search . '" (' . $searchLength . ') instead.');
        }


        $part = substr($description, $searchLength * -1);

        if ($part == $search) {
            Log::debug('"' . $description . '" ends with "' . $search . '". Return true.');

            return true;
        }
        Log::debug('"' . $description . '" does not end with "' . $search . '". Return false.');

        return false;

    }
}
