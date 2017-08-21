<?php
/**
 * JournalLinkRequest.php
 * Copyright (c) 2017 thegrumpydictator@gmail.com
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

declare(strict_types=1);

namespace FireflyIII\Http\Requests;

/**
 * Class JournalLink
 *
 *
 * @package FireflyIII\Http\Requests
 */
class JournalLinkRequest extends Request
{
    /**
     * @return bool
     */
    public function authorize()
    {
        // Only allow logged in users
        return auth()->check();
    }


    /**
     * @return array
     */
    public function rules()
    {
        return [];
    }
}
