<?php
/**
 * GroupCollector.php
 * Copyright (c) 2019 james@firefly-iii.org
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

namespace FireflyIII\Helpers\Collector;

use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;
use Closure;
use Exception;
use FireflyIII\Exceptions\FireflyException;
use FireflyIII\Helpers\Collector\Extensions\AccountCollection;
use FireflyIII\Helpers\Collector\Extensions\AmountCollection;
use FireflyIII\Helpers\Collector\Extensions\AttachmentCollection;
use FireflyIII\Helpers\Collector\Extensions\CollectorProperties;
use FireflyIII\Helpers\Collector\Extensions\MetaCollection;
use FireflyIII\Helpers\Collector\Extensions\TimeCollection;
use FireflyIII\Models\TransactionCurrency;
use FireflyIII\Models\TransactionGroup;
use FireflyIII\Models\TransactionJournal;
use FireflyIII\Models\TransactionType;
use FireflyIII\Models\UserGroup;
use FireflyIII\User;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

/**
 * Class GroupCollector
 *

 */
class GroupCollector implements GroupCollectorInterface
{
    use CollectorProperties;
    use AccountCollection;
    use AmountCollection;
    use TimeCollection;
    use MetaCollection;
    use AttachmentCollection;

    /**
     * Group collector constructor.
     */
    public function __construct()
    {
        $this->postFilters = [];
        $this->tags        = [];
        $this->user        = null;
        $this->userGroup   = null;
        $this->limit       = null;
        $this->page        = null;

        $this->hasAccountInfo       = false;
        $this->hasCatInformation    = false;
        $this->hasBudgetInformation = false;
        $this->hasBillInformation   = false;
        $this->hasNotesInformation  = false;
        $this->hasJoinedTagTables   = false;
        $this->hasJoinedAttTables   = false;
        $this->expandGroupSearch    = false;
        $this->hasJoinedMetaTables  = false;
        $this->integerFields        = [
            'transaction_group_id',
            'user_id',
            'user_group_id',
            'transaction_journal_id',
            'transaction_type_id',
            'order',
            'source_transaction_id',
            'source_account_id',
            'currency_id',
            'currency_decimal_places',
            'foreign_currency_id',
            'foreign_currency_decimal_places',
            'destination_transaction_id',
            'destination_account_id',
            'category_id',
            'budget_id',
        ];
        $this->stringFields         = ['amount', 'foreign_amount'];
        $this->total                = 0;
        $this->fields               = [
            # group
            'transaction_groups.id as transaction_group_id',
            'transaction_groups.user_id as user_id',
            'transaction_groups.user_group_id as user_group_id',
            'transaction_groups.created_at as created_at',
            'transaction_groups.updated_at as updated_at',
            'transaction_groups.title as transaction_group_title',

            # journal
            'transaction_journals.id as transaction_journal_id',
            'transaction_journals.transaction_type_id',
            'transaction_journals.description',
            'transaction_journals.date',
            'transaction_journals.order',

            # types
            'transaction_types.type as transaction_type_type',

            # source info (always present)
            'source.id as source_transaction_id',
            'source.account_id as source_account_id',
            'source.reconciled',

            # currency info:
            'source.amount as amount',
            'source.transaction_currency_id as currency_id',
            'currency.code as currency_code',
            'currency.name as currency_name',
            'currency.symbol as currency_symbol',
            'currency.decimal_places as currency_decimal_places',

            # foreign currency info
            'source.foreign_amount as foreign_amount',
            'source.foreign_currency_id as foreign_currency_id',
            'foreign_currency.code as foreign_currency_code',
            'foreign_currency.name as foreign_currency_name',
            'foreign_currency.symbol as foreign_currency_symbol',
            'foreign_currency.decimal_places as foreign_currency_decimal_places',

            # destination account info (always present)
            'destination.account_id as destination_account_id',
        ];
    }

    /**
     * @inheritDoc
     */
    public function descriptionDoesNotEnd(array $array): GroupCollectorInterface
    {
        $this->query->where(
            static function (EloquentBuilder $q) use ($array) {
                $q->where(
                    static function (EloquentBuilder $q1) use ($array) {
                        foreach ($array as $word) {
                            $keyword = sprintf('%%%s', $word);
                            $q1->where('transaction_journals.description', 'NOT LIKE', $keyword);
                        }
                    }
                );
                $q->where(
                    static function (EloquentBuilder $q2) use ($array) {
                        foreach ($array as $word) {
                            $keyword = sprintf('%%%s', $word);
                            $q2->where('transaction_groups.title', 'NOT LIKE', $keyword);
                            $q2->orWhereNull('transaction_groups.title');
                        }
                    }
                );
            }
        );

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function descriptionDoesNotStart(array $array): GroupCollectorInterface
    {
        $this->query->where(
            static function (EloquentBuilder $q) use ($array) {
                $q->where(
                    static function (EloquentBuilder $q1) use ($array) {
                        foreach ($array as $word) {
                            $keyword = sprintf('%s%%', $word);
                            $q1->where('transaction_journals.description', 'NOT LIKE', $keyword);
                        }
                    }
                );
                $q->where(
                    static function (EloquentBuilder $q2) use ($array) {
                        foreach ($array as $word) {
                            $keyword = sprintf('%s%%', $word);
                            $q2->where('transaction_groups.title', 'NOT LIKE', $keyword);
                            $q2->orWhereNull('transaction_groups.title');
                        }
                    }
                );
            }
        );

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function descriptionEnds(array $array): GroupCollectorInterface
    {
        $this->query->where(
            static function (EloquentBuilder $q) use ($array) {
                $q->where(
                    static function (EloquentBuilder $q1) use ($array) {
                        foreach ($array as $word) {
                            $keyword = sprintf('%%%s', $word);
                            $q1->where('transaction_journals.description', 'LIKE', $keyword);
                        }
                    }
                );
                $q->orWhere(
                    static function (EloquentBuilder $q2) use ($array) {
                        foreach ($array as $word) {
                            $keyword = sprintf('%%%s', $word);
                            $q2->where('transaction_groups.title', 'LIKE', $keyword);
                        }
                    }
                );
            }
        );

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function descriptionIs(string $value): GroupCollectorInterface
    {
        $this->query->where(
            static function (EloquentBuilder $q) use ($value) {
                $q->where('transaction_journals.description', '=', $value);
                $q->orWhere('transaction_groups.title', '=', $value);
            }
        );

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function descriptionIsNot(string $value): GroupCollectorInterface
    {
        $this->query->where(
            static function (EloquentBuilder $q) use ($value) {
                $q->where('transaction_journals.description', '!=', $value);
                $q->where(
                    static function (EloquentBuilder $q2) use ($value) {
                        $q2->where('transaction_groups.title', '!=', $value);
                        $q2->orWhereNull('transaction_groups.title');
                    }
                );
            }
        );

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function descriptionStarts(array $array): GroupCollectorInterface
    {
        $this->query->where(
            static function (EloquentBuilder $q) use ($array) {
                $q->where(
                    static function (EloquentBuilder $q1) use ($array) {
                        foreach ($array as $word) {
                            $keyword = sprintf('%s%%', $word);
                            $q1->where('transaction_journals.description', 'LIKE', $keyword);
                        }
                    }
                );
                $q->orWhere(
                    static function (EloquentBuilder $q2) use ($array) {
                        foreach ($array as $word) {
                            $keyword = sprintf('%s%%', $word);
                            $q2->where('transaction_groups.title', 'LIKE', $keyword);
                        }
                    }
                );
            }
        );

        return $this;
    }

    /**
     *
     */
    public function dumpQuery(): void
    {
        $query  = $this->query->select($this->fields)->toSql();
        $params = $this->query->getBindings();
        foreach ($params as $param) {
            $replace = sprintf('"%s"', $param);
            if (is_int($param)) {
                $replace = (string)$param;
            }
            $pos = strpos($query, '?');
            if ($pos !== false) {
                $query = substr_replace($query, $replace, $pos, 1);
            }
        }
        echo $query;

        echo '<pre>';
        print_r($this->query->getBindings());
        echo '</pre>';
    }

    /**
     *
     */
    public function dumpQueryInLogs(): void
    {
        app('log')->debug($this->query->select($this->fields)->toSql());
        app('log')->debug('Bindings', $this->query->getBindings());
    }

    /**
     * Limit results to NOT a specific currency, either foreign or normal one.
     *
     * @param TransactionCurrency $currency
     *
     * @return GroupCollectorInterface
     */
    public function excludeCurrency(TransactionCurrency $currency): GroupCollectorInterface
    {
        $this->query->where(
            static function (EloquentBuilder $q) use ($currency) {
                $q->where('source.transaction_currency_id', '!=', $currency->id);
                $q->where(
                    static function (EloquentBuilder $q2) use ($currency) {
                        $q2->where('source.foreign_currency_id', '!=', $currency->id);
                        $q2->orWhereNull('source.foreign_currency_id');
                    }
                );
            }
        );

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function excludeForeignCurrency(TransactionCurrency $currency): GroupCollectorInterface
    {
        $this->query->where(static function (EloquentBuilder $q2) use ($currency) {
            $q2->where('source.foreign_currency_id', '!=', $currency->id);
            $q2->orWhereNull('source.foreign_currency_id');
        });

        return $this;
    }

    /**
     * Limit the result to NOT a set of specific transaction groups.
     *
     * @param array $groupIds
     *
     * @return GroupCollectorInterface
     */
    public function excludeIds(array $groupIds): GroupCollectorInterface
    {
        $this->query->whereNotIn('transaction_groups.id', $groupIds);

        return $this;
    }

    /**
     * Limit the result to NOT a set of specific journals.
     *
     * @param array $journalIds
     *
     * @return GroupCollectorInterface
     */
    public function excludeJournalIds(array $journalIds): GroupCollectorInterface
    {
        if (0 !== count($journalIds)) {
            // make all integers.
            $integerIDs = array_map('intval', $journalIds);


            $this->query->whereNotIn('transaction_journals.id', $integerIDs);
        }

        return $this;
    }

    /**
     * Search for words in descriptions.
     *
     * @param array $array
     *
     * @return GroupCollectorInterface
     */
    public function excludeSearchWords(array $array): GroupCollectorInterface
    {
        if (0 === count($array)) {
            return $this;
        }
        $this->query->where(
            static function (EloquentBuilder $q) use ($array) {
                $q->where(
                    static function (EloquentBuilder $q1) use ($array) {
                        foreach ($array as $word) {
                            $keyword = sprintf('%%%s%%', $word);
                            $q1->where('transaction_journals.description', 'NOT LIKE', $keyword);
                        }
                    }
                );
                $q->where(
                    static function (EloquentBuilder $q2) use ($array) {
                        foreach ($array as $word) {
                            $keyword = sprintf('%%%s%%', $word);
                            $q2->where('transaction_groups.title', 'NOT LIKE', $keyword);
                            $q2->orWhereNull('transaction_groups.title');
                        }
                    }
                );
            }
        );

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function excludeTypes(array $types): GroupCollectorInterface
    {
        $this->query->whereNotIn('transaction_types.type', $types);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function exists(): GroupCollectorInterface
    {
        $this->query->whereNull('transaction_groups.deleted_at');
        $this->query->whereNotIn(
            'transaction_types.type',
            [TransactionType::LIABILITY_CREDIT, TransactionType::OPENING_BALANCE, TransactionType::RECONCILIATION]
        );
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function findNothing(): GroupCollectorInterface
    {
        $this->query->where('transaction_groups.id', -1);

        return $this;
    }

    /**
     * @return bool
     */
    public function getExpandGroupSearch(): bool
    {
        return $this->expandGroupSearch;
    }

    /**
     * Return the transaction journals without group information. Is useful in some instances.
     *
     * @return array
     */
    public function getExtractedJournals(): array
    {
        $selection = $this->getGroups();
        $return    = [];
        /** @var array $group */
        foreach ($selection as $group) {
            $count = count($group['transactions']);
            foreach ($group['transactions'] as $journalId => $journal) {
                $journal['group_title']       = $group['title'];
                $journal['journals_in_group'] = $count;
                $return[$journalId]           = $journal;
            }
        }

        return $return;
    }

    /**
     * Return the groups.
     *
     * @return Collection
     */
    public function getGroups(): Collection
    {
        if ($this->expandGroupSearch) {
            // get group ID's for the query:
            $groupIds = $this->getCollectedGroupIds();
            // add to query:
            $this->query->orWhereIn('transaction_journals.transaction_group_id', $groupIds);
        }

        $result = $this->query->get($this->fields);

        // now to parse this into an array.
        $collection = $this->parseArray($result);

        // filter the array using all available post filters:
        $collection = $this->postFilterCollection($collection);

        // count it and continue:
        $this->total = $collection->count();

        // now filter the array according to the page and the limit (if necessary)
        if (null !== $this->limit && null !== $this->page) {
            $offset = ($this->page - 1) * $this->limit;

            return $collection->slice($offset, $this->limit);
        }

        return $collection;
    }

    /**
     * @return array
     */
    private function getCollectedGroupIds(): array
    {
        return $this->query->get(['transaction_journals.transaction_group_id'])->pluck('transaction_group_id')->toArray();
    }

    /**
     * @param Collection $collection
     *
     * @return Collection
     * @throws FireflyException
     */
    private function parseArray(Collection $collection): Collection
    {
        $groups = [];
        /** @var TransactionJournal $augumentedJournal */
        foreach ($collection as $augumentedJournal) {
            $groupId = (int)$augumentedJournal->transaction_group_id;

            if (!array_key_exists($groupId, $groups)) {
                // make new array
                $parsedGroup = $this->parseAugmentedJournal($augumentedJournal);
                $groupArray  = [
                    'id'               => (int)$augumentedJournal->transaction_group_id,
                    'user_id'          => (int)$augumentedJournal->user_id,
                    'user_group_id'    => (int)$augumentedJournal->user_group_id,
                    // Field transaction_group_title was added by the query.
                    'title'            => $augumentedJournal->transaction_group_title, // @phpstan-ignore-line
                    'transaction_type' => $parsedGroup['transaction_type_type'],
                    'count'            => 1,
                    'sums'             => [],
                    'transactions'     => [],
                ];
                // Field transaction_journal_id was added by the query.
                $journalId                              = (int)$augumentedJournal->transaction_journal_id; // @phpstan-ignore-line
                $groupArray['transactions'][$journalId] = $parsedGroup;
                $groups[$groupId]                       = $groupArray;
                continue;
            }
            // or parse the rest.
            // Field transaction_journal_id was added by the query.
            $journalId = (int)$augumentedJournal->transaction_journal_id; // @phpstan-ignore-line
            if (array_key_exists($journalId, $groups[$groupId]['transactions'])) {
                // append data to existing group + journal (for multiple tags or multiple attachments)
                $groups[$groupId]['transactions'][$journalId] = $this->mergeTags($groups[$groupId]['transactions'][$journalId], $augumentedJournal);
                $groups[$groupId]['transactions'][$journalId] = $this->mergeAttachments($groups[$groupId]['transactions'][$journalId], $augumentedJournal);
            }

            if (!array_key_exists($journalId, $groups[$groupId]['transactions'])) {
                // create second, third, fourth split:
                $groups[$groupId]['count']++;
                $groups[$groupId]['transactions'][$journalId] = $this->parseAugmentedJournal($augumentedJournal);
            }
        }

        $groups = $this->parseSums($groups);

        return new Collection($groups);
    }

    /**
     * @param TransactionJournal $augumentedJournal
     *
     * @return array
     * @throws FireflyException
     */
    private function parseAugmentedJournal(TransactionJournal $augumentedJournal): array
    {
        $result                  = $augumentedJournal->toArray();
        $result['tags']          = [];
        $result['attachments']   = [];
        $result['interest_date'] = null;
        $result['payment_date']  = null;
        $result['invoice_date']  = null;
        $result['book_date']     = null;
        $result['due_date']      = null;
        $result['process_date']  = null;
        try {
            $result['date']       = new Carbon($result['date'], 'UTC');
            $result['created_at'] = new Carbon($result['created_at'], 'UTC');
            $result['updated_at'] = new Carbon($result['updated_at'], 'UTC');

            // this is going to happen a lot:
            $result['date']->setTimezone(config('app.timezone'));
            $result['created_at']->setTimezone(config('app.timezone'));
            $result['updated_at']->setTimezone(config('app.timezone'));
        } catch (Exception $e) { // intentional generic exception
            app('log')->error($e->getMessage());
            throw new FireflyException($e->getMessage(), 0, $e);
        }

        // try to process meta date value (if present)
        $dates = ['interest_date', 'payment_date', 'invoice_date', 'book_date', 'due_date', 'process_date'];
        if (array_key_exists('meta_name', $result) && in_array($result['meta_name'], $dates, true)) {
            $name = $result['meta_name'];
            if (array_key_exists('meta_data', $result) && '' !== (string)$result['meta_data']) {
                $result[$name] = Carbon::createFromFormat('!Y-m-d', substr(json_decode($result['meta_data']), 0, 10));
            }
        }

        // convert values to integers:
        $result = $this->convertToInteger($result);

        // convert back to strings because SQLite is dumb like that.
        $result = $this->convertToStrings($result);

        $result['reconciled'] = 1 === (int)$result['reconciled'];
        if (array_key_exists('tag_id', $result) && null !== $result['tag_id']) { // assume the other fields are present as well.
            $tagId   = (int)$augumentedJournal['tag_id'];
            $tagDate = null;
            try {
                $tagDate = Carbon::parse($augumentedJournal['tag_date']);
            } catch (InvalidFormatException $e) {
                app('log')->debug(sprintf('Could not parse date: %s', $e->getMessage()));
            }

            $result['tags'][$tagId] = [
                'id'          => (int)$result['tag_id'],
                'name'        => $result['tag_name'],
                'date'        => $tagDate,
                'description' => $result['tag_description'],
            ];
        }

        // also merge attachments:
        if (array_key_exists('attachment_id', $result)) {
            $uploaded     = 1 === (int)$result['attachment_uploaded'];
            $attachmentId = (int)$augumentedJournal['attachment_id'];
            if (0 !== $attachmentId && $uploaded) {
                $result['attachments'][$attachmentId] = [
                    'id'       => $attachmentId,
                    'filename' => $augumentedJournal['attachment_filename'],
                    'title'    => $augumentedJournal['attachment_title'],
                ];
            }
        }
        // unset various fields:
        unset(
            $result['tag_id'], $result['meta_data'], $result['meta_name'],
            $result['tag_name'], $result['tag_date'], $result['tag_description'],
            $result['tag_latitude'], $result['tag_longitude'], $result['tag_zoom_level'],
            $result['attachment_filename'], $result['attachment_id']

        );

        return $result;
    }

    /**
     * Convert a selected set of fields to arrays.
     *
     * @param array $array
     *
     * @return array
     */
    private function convertToInteger(array $array): array
    {
        foreach ($this->integerFields as $field) {
            $array[$field] = array_key_exists($field, $array) ? (int)$array[$field] : null;
        }

        return $array;
    }

    /**
     * @param array $array
     *
     * @return array
     */
    private function convertToStrings(array $array): array
    {
        foreach ($this->stringFields as $field) {
            $array[$field] = array_key_exists($field, $array) && null !== $array[$field] ? (string)$array[$field] : null;
        }

        return $array;
    }

    /**
     * @param array              $existingJournal
     * @param TransactionJournal $newJournal
     *
     * @return array
     */
    private function mergeTags(array $existingJournal, TransactionJournal $newJournal): array
    {
        $newArray = $newJournal->toArray();
        if (array_key_exists('tag_id', $newArray)) { // assume the other fields are present as well.
            $tagId = (int)$newJournal['tag_id'];

            $tagDate = null;
            try {
                $tagDate = Carbon::parse($newArray['tag_date']);
            } catch (InvalidFormatException $e) {
                app('log')->debug(sprintf('Could not parse date: %s', $e->getMessage()));
            }

            $existingJournal['tags'][$tagId] = [
                'id'          => (int)$newArray['tag_id'],
                'name'        => $newArray['tag_name'],
                'date'        => $tagDate,
                'description' => $newArray['tag_description'],
            ];
        }

        return $existingJournal;
    }

    /**
     * @param array              $existingJournal
     * @param TransactionJournal $newJournal
     *
     * @return array
     */
    private function mergeAttachments(array $existingJournal, TransactionJournal $newJournal): array
    {
        $newArray = $newJournal->toArray();
        if (array_key_exists('attachment_id', $newArray)) {
            $attachmentId = (int)$newJournal['attachment_id'];

            $existingJournal['attachments'][$attachmentId] = [
                'id' => $attachmentId,
            ];
        }

        return $existingJournal;
    }

    /**
     * @param array $groups
     *
     * @return array
     */
    private function parseSums(array $groups): array
    {
        /**
         * @var int   $groudId
         * @var array $group
         */
        foreach ($groups as $groudId => $group) {
            /** @var array $transaction */
            foreach ($group['transactions'] as $transaction) {
                $currencyId = (int)$transaction['currency_id'];

                // set default:
                if (!array_key_exists($currencyId, $groups[$groudId]['sums'])) {
                    $groups[$groudId]['sums'][$currencyId]['currency_id']             = $currencyId;
                    $groups[$groudId]['sums'][$currencyId]['currency_code']           = $transaction['currency_code'];
                    $groups[$groudId]['sums'][$currencyId]['currency_symbol']         = $transaction['currency_symbol'];
                    $groups[$groudId]['sums'][$currencyId]['currency_decimal_places'] = $transaction['currency_decimal_places'];
                    $groups[$groudId]['sums'][$currencyId]['amount']                  = '0';
                }
                $groups[$groudId]['sums'][$currencyId]['amount'] = bcadd($groups[$groudId]['sums'][$currencyId]['amount'], $transaction['amount']);

                if (null !== $transaction['foreign_amount'] && null !== $transaction['foreign_currency_id']) {
                    $currencyId = (int)$transaction['foreign_currency_id'];

                    // set default:
                    if (!array_key_exists($currencyId, $groups[$groudId]['sums'])) {
                        $groups[$groudId]['sums'][$currencyId]['currency_id']             = $currencyId;
                        $groups[$groudId]['sums'][$currencyId]['currency_code']           = $transaction['foreign_currency_code'];
                        $groups[$groudId]['sums'][$currencyId]['currency_symbol']         = $transaction['foreign_currency_symbol'];
                        $groups[$groudId]['sums'][$currencyId]['currency_decimal_places'] = $transaction['foreign_currency_decimal_places'];
                        $groups[$groudId]['sums'][$currencyId]['amount']                  = '0';
                    }
                    $groups[$groudId]['sums'][$currencyId]['amount'] = bcadd($groups[$groudId]['sums'][$currencyId]['amount'], $transaction['foreign_amount']);
                }
            }
        }

        return $groups;
    }

    /**
     * @param Collection $collection
     *
     * @return Collection
     */
    private function postFilterCollection(Collection $collection): Collection
    {
        $currentCollection = $collection;
        /**
         * @var Closure $function
         */
        foreach ($this->postFilters as $function) {
            $nextCollection = new Collection();
            // loop everything in the current collection
            // and save it (or not) in the new collection.
            // that new collection is the next current collection
            /**
             * @var int   $ii
             * @var array $item
             */
            foreach ($currentCollection as $ii => $item) {
                $result = $function($ii, $item);
                if (false === $result) {
                    // skip other filters, continue to next item.
                    continue;
                }
                $nextCollection->push($item);
            }
            $currentCollection = $nextCollection;
        }
        return $currentCollection;
    }

    /**
     * Same as getGroups but everything is in a paginator.
     *
     * @return LengthAwarePaginator
     */
    public function getPaginatedGroups(): LengthAwarePaginator
    {
        $set = $this->getGroups();
        if (0 === $this->limit) {
            $this->setLimit(50);
        }

        return new LengthAwarePaginator($set, $this->total, $this->limit, $this->page);
    }

    /**
     * Limit the number of returned entries.
     *
     * @param int $limit
     *
     * @return GroupCollectorInterface
     */
    public function setLimit(int $limit): GroupCollectorInterface
    {
        $this->limit = $limit;
        //app('log')->debug(sprintf('GroupCollector: The limit is now %d', $limit));

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isNotReconciled(): GroupCollectorInterface
    {
        $this->query->where('source.reconciled', 0)->where('destination.reconciled', 0);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isReconciled(): GroupCollectorInterface
    {
        $this->query->where('source.reconciled', 1)->where('destination.reconciled', 1);
        return $this;
    }

    /**
     * Limit results to a specific currency, either foreign or normal one.
     *
     * @param TransactionCurrency $currency
     *
     * @return GroupCollectorInterface
     */
    public function setCurrency(TransactionCurrency $currency): GroupCollectorInterface
    {
        $this->query->where(
            static function (EloquentBuilder $q) use ($currency) {
                $q->where('source.transaction_currency_id', $currency->id);
                $q->orWhere('source.foreign_currency_id', $currency->id);
            }
        );

        return $this;
    }

    /**
     * @param bool $expandGroupSearch
     */
    public function setExpandGroupSearch(bool $expandGroupSearch): void
    {
        $this->expandGroupSearch = $expandGroupSearch;
    }

    /**
     * @inheritDoc
     */
    public function setForeignCurrency(TransactionCurrency $currency): GroupCollectorInterface
    {
        $this->query->where('source.foreign_currency_id', $currency->id);

        return $this;
    }

    /**
     * Limit the result to a set of specific transaction groups.
     *
     * @param array $groupIds
     *
     * @return GroupCollectorInterface
     */
    public function setIds(array $groupIds): GroupCollectorInterface
    {
        $this->query->whereIn('transaction_groups.id', $groupIds);

        return $this;
    }

    /**
     * Limit the result to a set of specific journals.
     *
     * @param array $journalIds
     *
     * @return GroupCollectorInterface
     */
    public function setJournalIds(array $journalIds): GroupCollectorInterface
    {
        if (0 !== count($journalIds)) {
            // make all integers.
            $integerIDs = array_map('intval', $journalIds);


            $this->query->whereIn('transaction_journals.id', $integerIDs);
        }

        return $this;
    }

    /**
     * Set the page to get.
     *
     * @param int $page
     *
     * @return GroupCollectorInterface
     */
    public function setPage(int $page): GroupCollectorInterface
    {
        $page       = 0 === $page ? 1 : $page;
        $this->page = $page;
        //app('log')->debug(sprintf('GroupCollector: page is now %d', $page));

        return $this;
    }

    /**
     * Search for words in descriptions.
     *
     * @param array $array
     *
     * @return GroupCollectorInterface
     */
    public function setSearchWords(array $array): GroupCollectorInterface
    {
        if (0 === count($array)) {
            return $this;
        }
        $this->query->where(
            static function (EloquentBuilder $q) use ($array) {
                $q->where(
                    static function (EloquentBuilder $q1) use ($array) {
                        foreach ($array as $word) {
                            $keyword = sprintf('%%%s%%', $word);
                            $q1->where('transaction_journals.description', 'LIKE', $keyword);
                        }
                    }
                );
                $q->orWhere(
                    static function (EloquentBuilder $q2) use ($array) {
                        foreach ($array as $word) {
                            $keyword = sprintf('%%%s%%', $word);
                            $q2->where('transaction_groups.title', 'LIKE', $keyword);
                        }
                    }
                );
            }
        );

        return $this;
    }

    /**
     * Limit the search to one specific transaction group.
     *
     * @param TransactionGroup $transactionGroup
     *
     * @return GroupCollectorInterface
     */
    public function setTransactionGroup(TransactionGroup $transactionGroup): GroupCollectorInterface
    {
        $this->query->where('transaction_groups.id', $transactionGroup->id);

        return $this;
    }

    /**
     * Limit the included transaction types.
     *
     * @param array $types
     *
     * @return GroupCollectorInterface
     */
    public function setTypes(array $types): GroupCollectorInterface
    {
        $this->query->whereIn('transaction_types.type', $types);

        return $this;
    }

    /**
     * Set the user object and start the query.
     *
     * @param User $user
     *
     * @return GroupCollectorInterface
     */
    public function setUser(User $user): GroupCollectorInterface
    {
        if (null === $this->user) {
            $this->user = $user;
            $this->startQuery();
        }

        return $this;
    }

    /**
     * Build the query.
     */
    private function startQuery(): void
    {
        //app('log')->debug('GroupCollector::startQuery');
        $this->query = $this->user
            //->transactionGroups()
            //->leftJoin('transaction_journals', 'transaction_journals.transaction_group_id', 'transaction_groups.id')
            ->transactionJournals()
            ->leftJoin('transaction_groups', 'transaction_journals.transaction_group_id', 'transaction_groups.id')

            // join source transaction.
            ->leftJoin(
                'transactions as source',
                function (JoinClause $join) {
                    $join->on('source.transaction_journal_id', '=', 'transaction_journals.id')
                         ->where('source.amount', '<', 0);
                }
            )
            // join destination transaction
            ->leftJoin(
                'transactions as destination',
                function (JoinClause $join) {
                    $join->on('destination.transaction_journal_id', '=', 'transaction_journals.id')
                         ->where('destination.amount', '>', 0);
                }
            )
            // left join transaction type.
            ->leftJoin('transaction_types', 'transaction_types.id', '=', 'transaction_journals.transaction_type_id')
            ->leftJoin('transaction_currencies as currency', 'currency.id', '=', 'source.transaction_currency_id')
            ->leftJoin('transaction_currencies as foreign_currency', 'foreign_currency.id', '=', 'source.foreign_currency_id')
            ->whereNull('transaction_groups.deleted_at')
            ->whereNull('transaction_journals.deleted_at')
            ->whereNull('source.deleted_at')
            ->whereNull('destination.deleted_at')
            ->orderBy('transaction_journals.date', 'DESC')
            ->orderBy('transaction_journals.order', 'ASC')
            ->orderBy('transaction_journals.id', 'DESC')
            ->orderBy('transaction_journals.description', 'DESC')
            ->orderBy('source.amount', 'DESC');
    }

    /**
     * Set the user object and start the query.
     *
     * @param UserGroup $userGroup
     *
     * @return GroupCollectorInterface
     */
    public function setUserGroup(UserGroup $userGroup): GroupCollectorInterface
    {
        if (null === $this->userGroup) {
            $this->userGroup = $userGroup;
            $this->startQueryForGroup();
        }

        return $this;
    }

    /**
     * Build the query.
     */
    private function startQueryForGroup(): void
    {
        //app('log')->debug('GroupCollector::startQuery');
        $this->query = $this->userGroup
            ->transactionJournals()
            ->leftJoin('transaction_groups', 'transaction_journals.transaction_group_id', 'transaction_groups.id')

            // join source transaction.
            ->leftJoin(
                'transactions as source',
                function (JoinClause $join) {
                    $join->on('source.transaction_journal_id', '=', 'transaction_journals.id')
                         ->where('source.amount', '<', 0);
                }
            )
            // join destination transaction
            ->leftJoin(
                'transactions as destination',
                function (JoinClause $join) {
                    $join->on('destination.transaction_journal_id', '=', 'transaction_journals.id')
                         ->where('destination.amount', '>', 0);
                }
            )
            // left join transaction type.
            ->leftJoin('transaction_types', 'transaction_types.id', '=', 'transaction_journals.transaction_type_id')
            ->leftJoin('transaction_currencies as currency', 'currency.id', '=', 'source.transaction_currency_id')
            ->leftJoin('transaction_currencies as foreign_currency', 'foreign_currency.id', '=', 'source.foreign_currency_id')
            ->whereNull('transaction_groups.deleted_at')
            ->whereNull('transaction_journals.deleted_at')
            ->whereNull('source.deleted_at')
            ->whereNull('destination.deleted_at')
            ->orderBy('transaction_journals.date', 'DESC')
            ->orderBy('transaction_journals.order', 'ASC')
            ->orderBy('transaction_journals.id', 'DESC')
            ->orderBy('transaction_journals.description', 'DESC')
            ->orderBy('source.amount', 'DESC');
    }

    /**
     * Automatically include all stuff required to make API calls work.
     *
     * @return GroupCollectorInterface
     */
    public function withAPIInformation(): GroupCollectorInterface
    {
        // include source + destination account name and type.
        $this->withAccountInformation()
            // include category ID + name (if any)
             ->withCategoryInformation()
            // include budget ID + name (if any)
             ->withBudgetInformation()
            // include bill ID + name (if any)
             ->withBillInformation();

        return $this;
    }
}
