<?php
/**
 * RabobankDescription.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

declare(strict_types = 1);

namespace FireflyIII\Import\Specifics;

/**
 * Class RabobankDescription
 *
 * @package FireflyIII\Import\Specifics
 */
class RabobankDescription implements SpecificInterface
{
    /**
     * @return string
     */
    static public function getName(): string
    {
        return 'Rabobank description';
    }

    /**
     * @return string
     */
    static public function getDescription(): string
    {
        return 'Fixes possible problems with Rabobank descriptions.';
    }
}