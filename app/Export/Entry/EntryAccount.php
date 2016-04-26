<?php
/**
 * EntryAccount.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace FireflyIII\Export\Entry;

use FireflyIII\Models\Account;

/**
 * Class EntryAccount
 *
 * @package FireflyIII\Export\Entry
 */
class EntryAccount
{
    /** @var  string */
    public $iban;
    /** @var  int */
    public $id;
    /** @var  string */
    public $name;
    /** @var  int */
    public $number;
    /** @var  string */
    public $type;

    /**
     * EntryAccount constructor.
     *
     * @param Account $account
     */
    public function __construct(Account $account)
    {
        $this->id     = $account->id;
        $this->name   = $account->name;
        $this->iban   = $account->iban;
        $this->type   = $account->accountType->type;
        $this->number = $account->getMeta('accountNumber');
    }
}