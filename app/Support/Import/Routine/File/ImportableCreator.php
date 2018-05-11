<?php
/**
 * ImportableCreator.php
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

namespace FireflyIII\Support\Import\Routine\File;

use FireflyIII\Support\Import\Placeholder\ColumnValue;
use FireflyIII\Support\Import\Placeholder\ImportTransaction;

/**
 * Takes an array of arrays of ColumnValue objects and returns one (1) ImportTransaction
 * for each line.
 *
 * Class ImportableCreator
 */
class ImportableCreator
{
    /**
     * @param array $sets
     *
     * @return array
     * @throws \FireflyIII\Exceptions\FireflyException
     */
    public function convertSets(array $sets): array
    {
        $return = [];
        foreach ($sets as $set) {
            $return[] = $this->convertSet($set);
        }

        return $return;
    }

    /**
     * @param array $set
     *
     * @return ImportTransaction
     * @throws \FireflyIII\Exceptions\FireflyException
     */
    private function convertSet(array $set): ImportTransaction
    {
        $transaction = new ImportTransaction;
        /** @var ColumnValue $entry */
        foreach ($set as $entry) {
            $transaction->addColumnValue($entry);
        }

        return $transaction;
    }

}