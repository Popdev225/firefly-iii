<?php

/**
 * ValidateExpressionRequest.php
 * Copyright (c) 2024 Michael Thomas
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

namespace FireflyIII\Api\V1\Requests\Models\Rule;

use FireflyIII\Rules\IsValidActionExpression;
use FireflyIII\Support\Request\ChecksLogin;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

/**
 * Class ValidateExpressionRequest
 */
class ValidateExpressionRequest extends FormRequest
{
    use ChecksLogin;

    public function rules(): array
    {
        return ['expression' => ['required', new IsValidActionExpression()]];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @throws ValidationException
     */
    protected function failedValidation(Validator $validator): void
    {
        $error = $validator->errors()->first('expression');

        throw new ValidationException(
            $validator,
            response()->json([
                'valid' => false,
                'error' => $error,
            ], 200)
        );
    }
}
