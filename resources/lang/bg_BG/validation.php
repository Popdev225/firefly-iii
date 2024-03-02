<?php

/**
 * validation.php
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

// Ignore this comment

declare(strict_types=1);

return [
    'bad_type_source'                 => 'Firefly III can\'t determine the transaction type based on this source account.',
    'bad_type_destination'            => 'Firefly III can\'t determine the transaction type based on this destination account.',
    'missing_where'                   => 'Array is missing "where"-clause',
    'missing_update'                  => 'Array is missing "update"-clause',
    'invalid_where_key'               => 'JSON contains an invalid key for the "where"-clause',
    'invalid_update_key'              => 'JSON contains an invalid key for the "update"-clause',
    'invalid_query_data'              => 'There is invalid data in the %s:%s field of your query.',
    'invalid_query_account_type'      => 'Your query contains accounts of different types, which is not allowed.',
    'invalid_query_currency'          => 'Your query contains accounts that have different currency settings, which is not allowed.',
    'iban'                            => 'Това е невалиден IBAN.',
    'zero_or_more'                    => 'Стойността не може да бъде отрицателна.',
    'more_than_zero'                  => 'The value must be more than zero.',
    'more_than_zero_correct'          => 'The value must be zero or more.',
    'no_asset_account'                => 'This is not an asset account.',
    'date_or_time'                    => 'Стойността трябва да е валидна дата и време (ISO 8601).',
    'source_equals_destination'       => 'Разходната сметка е еднаква на приходната сметка.',
    'unique_account_number_for_user'  => 'Изглежда, че този номер на сметка вече се използва.',
    'unique_iban_for_user'            => 'Изглежда, че този IBAN вече се използва.',
    'reconciled_forbidden_field'      => 'This transaction is already reconciled, you cannot change the ":field"',
    'deleted_user'                    => 'Поради съображения за сигурност не можете да се регистрирате, като използвате този имейл адрес.',
    'rule_trigger_value'              => 'Тази стойност е невалидна за избраното задействане.',
    'rule_action_value'               => 'Тази стойност е невалидна за избраното действие.',
    'file_already_attached'           => 'Каченият файл ":name" вече е прикачен към този обект.',
    'file_attached'                   => 'Успешно качен файл ":name".',
    'must_exist'                      => 'Идентификаторът в поле :attribute не съществува в базата данни.',
    'all_accounts_equal'              => 'Всички сметки в това поле трябва да са еднакви.',
    'group_title_mandatory'           => 'Заглавието на групата е задължително, когато има повече от една транзакция.',
    'transaction_types_equal'         => 'Всички разделяния трябва да са от един и същи тип.',
    'invalid_transaction_type'        => 'Невалиден тип транзакция.',
    'invalid_selection'               => 'Изборът ви е невалиден.',
    'belongs_user'                    => 'This value is linked to an object that does not seem to exist.',
    'belongs_user_or_user_group'      => 'This value is linked to an object that does not seem to exist in your current financial administration.',
    'at_least_one_transaction'        => 'Нужна е поне една транзакция.',
    'recurring_transaction_id'        => 'Need at least one transaction.',
    'need_id_to_match'                => 'You need to submit this entry with an ID for the API to be able to match it.',
    'too_many_unmatched'              => 'Too many submitted transactions cannot be matched to their respective database entries. Make sure existing entries have a valid ID.',
    'id_does_not_match'               => 'Submitted ID #:id does not match expected ID. Make sure it matches or omit the field.',
    'at_least_one_repetition'         => 'Нужно е поне едно повторение.',
    'require_repeat_until'            => 'Изисква се или брой повторения, или крайна дата (повтори_до). Не и двете.',
    'require_currency_info'           => 'Съдържанието на това поле е невалидно без информация за валута.',
    'not_transfer_account'            => 'Този акаунт не е акаунт, който може да се използва за прехвърляния.',
    'require_currency_amount'         => 'Съдържанието на това поле е невалидно без стойност в другата валута.',
    'require_foreign_currency'        => 'This field requires a number',
    'require_foreign_dest'            => 'This field value must match the currency of the destination account.',
    'require_foreign_src'             => 'This field value must match the currency of the source account.',
    'equal_description'               => 'Описанието на транзакцията не трябва да е равно на общото описание.',
    'file_invalid_mime'               => 'Файлът ":name" е от тип ":mime", който не се приема за качване.',
    'file_too_large'                  => 'Файлът ":name" е твърде голям.',
    'belongs_to_user'                 => 'Стойността на :attribute не е известна.',
    'accepted'                        => ':attribute трябва да бъде приет.',
    'bic'                             => 'Това е невалиден BIC.',
    'at_least_one_trigger'            => 'Правилото трябва да има поне еднo задействане.',
    'at_least_one_active_trigger'     => 'Rule must have at least one active trigger.',
    'at_least_one_action'             => 'Правилото трябва да има поне еднo действие.',
    'at_least_one_active_action'      => 'Rule must have at least one active action.',
    'base64'                          => 'Това не са валидни base64 кодирани данни.',
    'model_id_invalid'                => 'Даденото ID изглежда невалидно за този модел.',
    'less'                            => ':attribute трябва да е по-малко от 10 000 000',
    'active_url'                      => ':attribute не е валиден URL адрес.',
    'after'                           => ':attribute трябва да бъде дата след :date.',
    'date_after'                      => 'The start date must be before the end date.',
    'alpha'                           => ':attribute може да съдържа единствено букви.',
    'alpha_dash'                      => ':attribute може да съдържа само букви, числа и тирета.',
    'alpha_num'                       => ':attribute може да съдържа само букви и числа.',
    'array'                           => ':attribute трябва да бъде масив.',
    'unique_for_user'                 => 'Вече има запис с :attribute.',
    'before'                          => ':attribute трябва да бъде дата преди :date.',
    'unique_object_for_user'          => 'Това име вече се използва.',
    'unique_account_for_user'         => 'Това име на потребител вече се използва.',

    // Ignore this comment

    'between.numeric'                 => ':attribute трябва да бъде между :min и :max.',
    'between.file'                    => ':attribute трябва да бъде с големина между :min и :max Kb.',
    'between.string'                  => ':attribute трябва да бъде с дължина между :min и :max символа.',
    'between.array'                   => ':attribute трябва да има между :min и :max елемента.',
    'boolean'                         => ':attribute трябва да бъде вярно или невярно.',
    'confirmed'                       => 'Потвържденито на :attribute не съвпада.',
    'date'                            => ':attribute не е валидна дата.',
    'date_format'                     => ':attribute не е в посоченият формат - :format.',
    'different'                       => ':attribute и :other трябва да са различни.',
    'digits'                          => ':attribute трябва да бъде с дължина :digits цифри.',
    'digits_between'                  => ':attribute трябва да бъде с дължина между :min и :max цифри.',
    'email'                           => ':attribute трябва да бъде валиден имейл адрес.',
    'filled'                          => 'Полето :attribute е задължително.',
    'exists'                          => 'Избраният :attribute е невалиден.',
    'image'                           => ':attribute трябва да е изображение.',
    'in'                              => 'Избраният :attribute е невалиден.',
    'integer'                         => ':attribute трябва да бъде цяло число.',
    'ip'                              => ':attribute трябва да бъде валиден IP адрес.',
    'json'                            => ':attribute трябва да е валиден JSON низ.',
    'max.numeric'                     => ':attribute не трябва да бъде по-голям от :max.',
    'max.file'                        => ':attribute не може да бъде по-голям от :max Kb.',
    'max.string'                      => ':attribute не може да бъде по-дълъг от :max символа.',
    'max.array'                       => ':attribute не трябва да има повече от :max елемента.',
    'mimes'                           => ':attribute трябва да бъде файл от следните типове: :values.',
    'min.numeric'                     => ':attribute трябва да бъде минимум :min.',
    'lte.numeric'                     => ':attribute трябва да е по-малко или равно на :value.',
    'min.file'                        => ':attribute трябва да бъде с големина минимум :min Kb.',
    'min.string'                      => ':attribute трябва да бъде минимум :min символа.',
    'min.array'                       => ':attribute трябва да има поне :min елемента.',
    'not_in'                          => 'Избраният :attribute е невалиден.',
    'numeric'                         => ':attribute трябва да бъде число.',
    'scientific_notation'             => 'The :attribute cannot use the scientific notation.',
    'numeric_native'                  => 'Сумата в основна валута трябва да бъде число.',
    'numeric_destination'             => 'Сумата в приходната сметка трябва да е число.',
    'numeric_source'                  => 'Сумата в разходната сметка трябва да е число.',
    'regex'                           => 'Форматът на :attribute е невалиден.',
    'required'                        => 'Полето :attribute е задължително.',
    'required_if'                     => 'Полето :attribute е задължително, когато :other е :value.',
    'required_unless'                 => 'Полето :attribute е задължително, освен когато :other е в :values.',
    'required_with'                   => 'Полето :attribute е задължително, когато присъства :values.',
    'required_with_all'               => 'Полето :attribute е задължително, когато присъства :values.',
    'required_without'                => 'Полето :attribute е задължително, когато не присъства :values.',
    'required_without_all'            => 'Полето :attribute е задължително, когато не са избрано нищо от :values.',
    'same'                            => ':attribute и :other трябва да съвпадат.',
    'size.numeric'                    => ':attribute трябва да бъде :size.',
    'amount_min_over_max'             => 'Минималната сума не може да бъде по-голяма от максималната.',
    'size.file'                       => ':attribute трябва да бъде с големина :size Kb.',
    'size.string'                     => ':attribute трябва да бъде с дължина :size символа.',
    'size.array'                      => ':attribute трябва да съдържа :size елемента.',
    'unique'                          => ':attribute вече е зает.',
    'string'                          => ':attribute трябва да бъде низ.',
    'url'                             => 'Форматът на :attribute е невалиден.',
    'timezone'                        => ':attribute трябва да бъде валидна зона.',
    '2fa_code'                        => 'Форматът на полето :attribute е невалиден.',
    'dimensions'                      => 'Изображението :attribute има невалидни размери.',
    'distinct'                        => 'Полето :attribute има дублираща се стойност.',
    'file'                            => ':attribute трябва да е файл.',
    'in_array'                        => 'Полето :attribute не съществува в :other.',
    'present'                         => 'Полето :attribute е задължително.',
    'amount_zero'                     => 'Общата сума не може да е нула.',
    'current_target_amount'           => 'Текущата сума трябва да бъде по-малка от планираната сума.',
    'unique_piggy_bank_for_user'      => 'Името на касичката трябва да е уникално.',
    'unique_object_group'             => 'Името на групата трябва да е уникално',
    'starts_with'                     => 'Стойността трябва да започва с :values.',
    'unique_webhook'                  => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'         => 'You already have another webhook with this combination of URL, trigger, response and delivery.',
    'same_account_type'               => 'Both accounts must be of the same account type',
    'same_account_currency'           => 'Both accounts must have the same currency setting',

    // Ignore this comment

    'secure_password'                 => 'Това не е сигурна парола. Моля, опитайте отново. За повече информация посетете https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'       => 'Невалиден тип повторение за повтарящи се транзакции.',
    'valid_recurrence_rep_moment'     => 'Невалиден момент на повторение за този тип повторение.',
    'invalid_account_info'            => 'Невалидна информация за сметка.',
    'attributes'                      => [
        'email'                   => 'имейл адрес',
        'description'             => 'описание',
        'amount'                  => 'сума',
        'transactions.*.amount'   => 'сума на транзакцията',
        'name'                    => 'име',
        'piggy_bank_id'           => 'ID касичка',
        'targetamount'            => 'планирана сума',
        'opening_balance_date'    => 'начална дата на баланса',
        'opening_balance'         => 'начално салдо',
        'match'                   => 'съвпадение',
        'amount_min'              => 'минимална сума',
        'amount_max'              => 'максимална сума',
        'title'                   => 'заглавие',
        'tag'                     => 'етикет',
        'transaction_description' => 'описание на транзакция',
        'rule-action-value.1'     => 'правило действие стойност #1',
        'rule-action-value.2'     => 'правило действие стойност #2',
        'rule-action-value.3'     => 'правило действие стойност #3',
        'rule-action-value.4'     => 'правило действие стойност #4',
        'rule-action-value.5'     => 'правило действие стойност #5',
        'rule-action.1'           => 'правило действие #1',
        'rule-action.2'           => 'правило действие #2',
        'rule-action.3'           => 'правило действие #3',
        'rule-action.4'           => 'правило действие #4',
        'rule-action.5'           => 'правило действие #5',
        'rule-trigger-value.1'    => 'правило задействане стойност #1',
        'rule-trigger-value.2'    => 'правило задействане стойност #2',
        'rule-trigger-value.3'    => 'правило задействане стойност #3',
        'rule-trigger-value.4'    => 'правило задействане стойност #4',
        'rule-trigger-value.5'    => 'правило задействане стойност #5',
        'rule-trigger.1'          => 'правило задействане #1',
        'rule-trigger.2'          => 'правило задействане #2',
        'rule-trigger.3'          => 'правило задействане #3',
        'rule-trigger.4'          => 'правило задействане #4',
        'rule-trigger.5'          => 'правило задействане #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'     => 'Трябва да използвате валидно ID на разходната сметка и / или валидно име на разходната сметка, за да продължите.',
    'withdrawal_source_bad_data'      => '[a] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'withdrawal_dest_need_data'       => '[a] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'withdrawal_dest_bad_data'        => 'Не може да се намери валидна приходна сметка при търсене на ID ":id" или име ":name".',

    'withdrawal_dest_iban_exists'     => 'This destination account IBAN is already in use by an asset account or a liability and cannot be used as a withdrawal destination.',
    'deposit_src_iban_exists'         => 'This source account IBAN is already in use by an asset account or a liability and cannot be used as a deposit source.',

    'reconciliation_source_bad_data'  => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data'         => '[e] Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data'        => 'Трябва да използвате валидно ID на разходната сметка и / или валидно име на разходната сметка, за да продължите.',
    'deposit_source_bad_data'         => '[b] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'deposit_dest_need_data'          => '[b] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'deposit_dest_bad_data'           => 'Не може да се намери валидна приходна сметка при търсене на ID ":id" или име ":name".',
    'deposit_dest_wrong_type'         => 'Използваната приходна сметка не е от правилния тип.',

    // Ignore this comment

    'transfer_source_need_data'       => 'Трябва да използвате валидно ID на разходната сметка и / или валидно име на разходната сметка, за да продължите.',
    'transfer_source_bad_data'        => '[c] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'transfer_dest_need_data'         => '[c] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'transfer_dest_bad_data'          => 'Не може да се намери валидна приходна сметка при търсене на ID ":id" или име ":name".',
    'need_id_in_edit'                 => 'Всяко разделяне трябва да има transaction_journal_id (или валидно ID или 0).',

    'ob_source_need_data'             => 'Трябва да използвате валидно ID на разходната сметка и / или валидно име на разходната сметка, за да продължите.',
    'lc_source_need_data'             => 'Need to get a valid source account ID to continue.',
    'ob_dest_need_data'               => '[d] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'                => 'Не може да се намери валидна приходна сметка при търсене на ID ":id" или име ":name".',
    'reconciliation_either_account'   => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'          => 'Не може да използвате тази сметка като разходна сметка.',
    'generic_invalid_destination'     => 'Не може да използвате тази сметка като приходна сметка.',

    'generic_no_source'               => 'You must submit source account information or submit a transaction journal ID.',
    'generic_no_destination'          => 'You must submit destination account information or submit a transaction journal ID.',

    'gte.numeric'                     => ':attribute трябва да е по-голямо или равно на :value.',
    'gt.numeric'                      => ':attribute трябва да бъде по-голям от :value.',
    'gte.file'                        => ':attribute трябва да е по-голямо или равно на :value Kb.',
    'gte.string'                      => ':attribute трябва да е по-голямо или равно на :value символа.',
    'gte.array'                       => ':attribute трябва да има :value елемента или повече.',

    'amount_required_for_auto_budget' => 'Необходима е сума.',
    'auto_budget_amount_positive'     => 'Сумата трябва да е по-голяма от нула.',

    'auto_budget_period_mandatory'    => 'Периодът на автоматичния бюджет е задължително поле.',

    // no access to administration:
    'no_access_user_group'            => 'You do not have the correct access rights for this administration.',
];

// Ignore this comment
