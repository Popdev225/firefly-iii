<?php
/**
 * TransactionJournal.php
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

use Carbon\Carbon;
use Crypt;
use FireflyIII\Support\Models\TransactionJournalTrait;
use FireflyIII\User;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class TransactionJournal.
 *
 * @property User                $user
 * @property int                 $bill_id
 * @property Collection          $categories
 * @property bool                $completed
 * @property string              $description
 * @property int                 $transaction_type_id
 * @property int                 transaction_currency_id
 * @property TransactionCurrency $transactionCurrency
 * @property Collection          $tags
 * @property mixed               user_id
 * @property mixed               transactions
 * @property int                 transaction_count
 * @property Carbon              interest_date
 * @property Carbon              book_date
 * @property Carbon              process_date
 * @property bool                encrypted
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class TransactionJournal extends Model
{
    use SoftDeletes, TransactionJournalTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts
        = [
            'created_at'    => 'datetime',
            'updated_at'    => 'datetime',
            'deleted_at'    => 'datetime',
            'date'          => 'date',
            'interest_date' => 'date',
            'book_date'     => 'date',
            'process_date'  => 'date',
            'order'         => 'int',
            'tag_count'     => 'int',
            'encrypted'     => 'boolean',
            'completed'     => 'boolean',
        ];

    /** @var array */
    protected $fillable
        = ['user_id', 'transaction_type_id', 'bill_id', 'interest_date', 'book_date', 'process_date',
           'transaction_currency_id', 'description', 'completed',
           'date', 'rent_date', 'encrypted', 'tag_count',];
    /** @var array */
    protected $hidden = ['encrypted'];

    /**
     * @param string $value
     *
     * @return TransactionJournal
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public static function routeBinder(string $value): TransactionJournal
    {
        if (auth()->check()) {
            $journalId = (int)$value;
            /** @var User $user */
            $user = auth()->user();
            /** @var TransactionJournal $journal */
            $journal = $user->transactionJournals()->where('transaction_journals.id', $journalId)
                            ->first(['transaction_journals.*']);
            if (null !== $journal) {
                return $journal;
            }
        }

        throw new NotFoundHttpException;
    }

    /**
     * @codeCoverageIgnore
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function attachments(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }

    /**
     * @codeCoverageIgnore
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bill(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Bill::class);
    }

    /**
     * @codeCoverageIgnore
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function budgets(): BelongsToMany
    {
        return $this->belongsToMany(Budget::class);
    }

    /**
     * @codeCoverageIgnore
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * @codeCoverageIgnore
     *
     * @param $value
     *
     * @return string|null
     * @throws \Illuminate\Contracts\Encryption\DecryptException
     */
    public function getDescriptionAttribute($value): ?string
    {
        if ($this->encrypted) {
            return Crypt::decrypt($value);
        }

        return $value;
    }

    /**
     * @codeCoverageIgnore
     * @return bool
     */
    public function isDeposit(): bool
    {
        if (null !== $this->transaction_type_type) {
            return TransactionType::DEPOSIT === $this->transaction_type_type;
        }

        return $this->transactionType->isDeposit();
    }

    /**
     * @codeCoverageIgnore
     * @return bool
     */
    public function isOpeningBalance(): bool
    {
        if (null !== $this->transaction_type_type) {
            return TransactionType::OPENING_BALANCE === $this->transaction_type_type;
        }

        return $this->transactionType->isOpeningBalance();
    }

    /**
     * @codeCoverageIgnore
     * @return bool
     */
    public function isTransfer(): bool
    {
        if (null !== $this->transaction_type_type) {
            return TransactionType::TRANSFER === $this->transaction_type_type;
        }

        return $this->transactionType->isTransfer();
    }

    /**
     * @codeCoverageIgnore
     * @return bool
     */
    public function isWithdrawal(): bool
    {
        if (null !== $this->transaction_type_type) {
            return TransactionType::WITHDRAWAL === $this->transaction_type_type;
        }

        return $this->transactionType->isWithdrawal();
    }

    /**
     * @codeCoverageIgnore
     * Get all of the notes.
     */
    public function notes()
    {
        return $this->morphMany(Note::class, 'noteable');
    }

    /**
     * @codeCoverageIgnore
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function piggyBankEvents(): HasMany
    {
        return $this->hasMany(PiggyBankEvent::class);
    }

    /**
     * @codeCoverageIgnore
     *
     * @param EloquentBuilder $query
     * @param Carbon          $date
     *
     * @return EloquentBuilder
     */
    public function scopeAfter(EloquentBuilder $query, Carbon $date): EloquentBuilder
    {
        return $query->where('transaction_journals.date', '>=', $date->format('Y-m-d 00:00:00'));
    }

    /**
     * @codeCoverageIgnore
     *
     * @param EloquentBuilder $query
     * @param Carbon          $date
     *
     * @return EloquentBuilder
     */
    public function scopeBefore(EloquentBuilder $query, Carbon $date): EloquentBuilder
    {
        return $query->where('transaction_journals.date', '<=', $date->format('Y-m-d 00:00:00'));
    }

    /**
     * @codeCoverageIgnore
     *
     * @param EloquentBuilder $query
     * @param array           $types
     */
    public function scopeTransactionTypes(EloquentBuilder $query, array $types): void
    {
        if (!self::isJoined($query, 'transaction_types')) {
            $query->leftJoin('transaction_types', 'transaction_types.id', '=', 'transaction_journals.transaction_type_id');
        }
        if (\count($types) > 0) {
            $query->whereIn('transaction_types.type', $types);
        }
    }

    /**
     * @codeCoverageIgnore
     *
     * @param $value
     *
     * @throws \Illuminate\Contracts\Encryption\EncryptException
     */
    public function setDescriptionAttribute($value): void
    {
        $encrypt                         = config('firefly.encryption');
        $this->attributes['description'] = $encrypt ? Crypt::encrypt($value) : $value;
        $this->attributes['encrypted']   = $encrypt;
    }

    /**
     * @codeCoverageIgnore
     * @return HasMany
     */
    public function sourceJournalLinks(): HasMany
    {
        return $this->hasMany(TransactionJournalLink::class, 'source_id');
    }

    /**
     * @codeCoverageIgnore
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * @codeCoverageIgnore
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transactionCurrency(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TransactionCurrency::class);
    }

    /**
     * @codeCoverageIgnore
     * @return HasMany
     */
    public function transactionJournalMeta(): HasMany
    {
        return $this->hasMany(TransactionJournalMeta::class);
    }

    /**
     * @codeCoverageIgnore
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transactionType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TransactionType::class);
    }

    /**
     * @codeCoverageIgnore
     * @return HasMany
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    /**
     * @codeCoverageIgnore
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
