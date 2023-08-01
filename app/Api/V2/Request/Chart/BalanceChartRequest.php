<?php
/*
 * BalanceChartRequest.php
 * Copyright (c) 2023 james@firefly-iii.org
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

namespace FireflyIII\Api\V2\Request\Chart;

use FireflyIII\Support\Request\ChecksLogin;
use FireflyIII\Support\Request\ConvertsDataTypes;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class BalanceChartRequest extends FormRequest
{
    use ConvertsDataTypes;
    use ChecksLogin;

    /**
     * Get all data from the request.
     *
     * @return array
     */
    public function getAll(): array
    {
        return [
            'start'    => $this->getCarbonDate('start'),
            'end'      => $this->getCarbonDate('end'),
            'accounts' => $this->getAccountList(),
            'period'   => $this->string('period'),
        ];
    }

    /**
     * The rules that the incoming request must be matched against.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'start'      => 'required|date|after:1900-01-01|before:2099-12-31',
            'end'        => 'required|date|after_or_equal:start|before:2099-12-31|after:1900-01-01',
            'accounts.*' => 'required|exists:accounts,id',
            'period'     => sprintf('required|in:%s', join(',', config('firefly.valid_view_ranges'))),
        ];
    }

    /**
     * @param Validator $validator
     *
     * @return void
     */
    public function withValidator(Validator $validator): void
    {
        $validator->after(
            function (Validator $validator) {
                // validate transaction query data.
                $data = $validator->getData();
                if (!array_key_exists('accounts', $data)) {
                    $validator->errors()->add('accounts', trans('validation.filled', ['attribute' => 'accounts']));
                    return;
                }
                if (!is_array($data['accounts'])) {
                    $validator->errors()->add('accounts', trans('validation.filled', ['attribute' => 'accounts']));
                }
            }
        );
    }
}
