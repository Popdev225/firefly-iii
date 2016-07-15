<?php
/**
 * AssetAccountIban.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

declare(strict_types = 1);

namespace FireflyIII\Import\Converter;

use FireflyIII\Crud\Account\AccountCrudInterface;
use Log;

/**
 * Class AssetAccountIban
 *
 * @package FireflyIII\Import\Converter
 */
class AssetAccountIban extends BasicConverter implements ConverterInterface
{

    /**
     * @param $value
     *
     */
    public function convert($value)
    {
        Log::debug('Going to convert value ' . $value);

        /** @var AccountCrudInterface $repository */
        $repository = app(AccountCrudInterface::class, [$this->user]);


        if (isset($this->mapping[$value])) {
            Log::debug('Found account in mapping. Should exist.',['value' => $value]);
            $account = $repository->find(intval($value));
            Log::debug('Found account ', ['id' => $account->id]);

        }

        Log::debug('Given map is ', $this->mapping);

        exit;
    }
}