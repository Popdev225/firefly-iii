<?php
/**
 * AccountType.php
 * Copyright (c) 2017 thegrumpydictator@gmail.com
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

namespace FireflyIII\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class AccountType.
 *
 * @property string $type
 * @method whereType(string $type)
 * @property int    $id
 *
 */
class AccountType extends Model
{
    public const DEFAULT         = 'Default account';
    public const CASH            = 'Cash account';
    public const ASSET           = 'Asset account';
    public const EXPENSE         = 'Expense account';
    public const REVENUE         = 'Revenue account';
    public const INITIAL_BALANCE = 'Initial balance account';
    public const BENEFICIARY     = 'Beneficiary account';
    public const IMPORT          = 'Import account';
    public const RECONCILIATION  = 'Reconciliation account';
    public const LOAN            = 'Loan';
    public const DEBT            = 'Debt';
    public const MORTGAGE        = 'Mortgage';
    public const CREDITCARD      = 'Credit card';
    protected $casts
        = [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    /** @var array */
    protected $fillable = ['type'];

    /**
     * @return HasMany
     * @codeCoverageIgnore
     */
    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class);
    }
}
