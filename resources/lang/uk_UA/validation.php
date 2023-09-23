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

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    'missing_where'                  => 'Array is missing "where"-clause',
    'missing_update'                 => 'Array is missing "update"-clause',
    'invalid_where_key'              => 'JSON contains an invalid key for the "where"-clause',
    'invalid_update_key'             => 'JSON contains an invalid key for the "update"-clause',
    'invalid_query_data'             => 'There is invalid data in the %s:%s field of your query.',
    'invalid_query_account_type'     => 'Your query contains accounts of different types, which is not allowed.',
    'invalid_query_currency'         => 'Your query contains accounts that have different currency settings, which is not allowed.',
    'iban'                           => 'Це не коректний IBAN.',
    'zero_or_more'                   => 'Це значення не може бути від’ємним.',
    'date_or_time'                   => 'Значення має бути правильним датою або часом (ISO 8601).',
    'source_equals_destination'      => 'Початковий рахунок дорівнює рахунку призначення.',
    'unique_account_number_for_user' => 'Схоже, цей номер рахунку вже використовується.',
    'unique_iban_for_user'           => 'Схоже, цей номер рахунку (IBAN) вже використовується.',
    'deleted_user'                   => 'Через обмеження безпеки ви не можете зареєструвати цю електронну адресу.',
    'rule_trigger_value'             => 'Це значення неправильне для вибраного тригера.',
    'rule_action_value'              => 'Це значення є неприпустимим для вибраної дії.',
    'file_already_attached'          => 'Файл ":name" вже прикріплено до цього об\'єкта.',
    'file_attached'                  => 'Успішно завантажено файл ":name".',
    'must_exist'                     => 'ID в полі :attribute не існує в базі даних.',
    'all_accounts_equal'             => 'Всі рахунки в цьому полі повинні бути рівні.',
    'group_title_mandatory'          => 'Назва групи є обов\'язковою при наявності більше однієї транзакції.',
    'transaction_types_equal'        => 'Всі розділи повинні мати однаковий тип.',
    'invalid_transaction_type'       => 'Некоректний тип транзакції.',
    'invalid_selection'              => 'Ваш вибір є неприпустимим.',
    'belongs_user'                   => 'This value is linked to an object that does not belong to you.',
    'belongs_user_or_user_group'     => 'This value is linked to an object that does not belong to your current financial administration.',
    'at_least_one_transaction'       => 'Потрібна хоча б одна транзакція.',
    'recurring_transaction_id'       => 'Need at least one transaction.',
    'need_id_to_match'               => 'You need to submit this entry with an ID for the API to be able to match it.',
    'too_many_unmatched'             => 'Too many submitted transactions cannot be matched to their respective database entries. Make sure existing entries have a valid ID.',
    'id_does_not_match'              => 'Submitted ID #:id does not match expected ID. Make sure it matches or omit the field.',
    'at_least_one_repetition'        => 'Потрібно принаймні одне повторення.',
    'require_repeat_until'           => 'Потрібно вказати або кількість повторювань, або кінцеву дату (repeat_until). Але не обидва параметри разом.',
    'require_currency_info'          => 'Вміст цього поля є недійсним без інформації про валюту.',
    'not_transfer_account'           => 'Цей рахунок не є рахунком, який може бути використаний для переказу.',
    'require_currency_amount'        => 'Вміст цього поля є недійсним без інформації про валюту.',
    'require_foreign_currency'       => 'Це поле має бути числом',
    'require_foreign_dest'           => 'Це значення поля повинне відповідати валюті рахунку призначення.',
    'require_foreign_src'            => 'Це значення поля повинне відповідати валюті вихідного рахунку.',
    'equal_description'              => 'Опис транзакції має відрізнятися від глобального опису.',
    'file_invalid_mime'              => 'Файл ":name" має заборонений для завантаження тип ":mime".',
    'file_too_large'                 => 'Файл ":name" надто великий.',
    'belongs_to_user'                => 'Значення поля :attribute невідоме.',
    'accepted'                       => ':attribute має бути прийнятий.',
    'bic'                            => 'Це не коректний BIC.',
    'at_least_one_trigger'           => 'Правило має мати принаймні одну умову.',
    'at_least_one_active_trigger'    => 'Правило має мати принаймні одну умову.',
    'at_least_one_action'            => 'Правило має мати принаймні одну дію.',
    'at_least_one_active_action'     => 'Правило має мати принаймні одну дію.',
    'base64'                         => 'Base64 будьласка! Помилка розпізнавання.',
    'model_id_invalid'               => 'Вказаний ID здається недійсним для цієї моделі.',
    'less'                           => 'Поле :attribute має бути менше 10,000,000',
    'active_url'                     => ':attribute є не допустимою URL-адресою.',
    'after'                          => ':attribute має бути після :date.',
    'date_after'                     => 'Дата початку має бути раніше дати завершення.',
    'alpha'                          => ':attribute має містити лише літери.',
    'alpha_dash'                     => ':attribute має містити лише букви, цифри та тире.',
    'alpha_num'                      => ':attribute має містити лише літери та цифри.',
    'array'                          => ':attribute має бути масивом.',
    'unique_for_user'                => 'Запис :attribute уже існує.',
    'before'                         => ':attribute має бути датою до :date.',
    'unique_object_for_user'         => 'Ім\'я вже використовується.',
    'unique_account_for_user'        => 'Така назва рахунку вже існує.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'between.numeric'            => ':attribute повинен бути між :min і :max.',
    'between.file'               => 'Розмір :attribute має бути в межах між :min і :max кілобайтів.',
    'between.string'             => 'Довжина :attribute має бути в межах від :min до :max символів.',
    'between.array'              => ':attribute має містити від :min до :max елементів.',
    'boolean'                    => 'Поле :attribute має бути true або false.',
    'confirmed'                  => 'Підтвердження для :attribute не збігається.',
    'date'                       => ':attribute не є коректною датою.',
    'date_format'                => 'Значення :attribute не відповідає формату :format.',
    'different'                  => ':attribute має відрізнятися від :other.',
    'digits'                     => 'Довжина цифрового поля :attribute повинна бути :digits.',
    'digits_between'             => ':attribute має містити від :min до :max цифр.',
    'email'                      => ':attribute має бути дійсною адресою e-mail.',
    'filled'                     => 'Поле :attribute обов\'язкове.',
    'exists'                     => 'Обраний :attribute недійсний.',
    'image'                      => ':attribute має бути зображенням.',
    'in'                         => 'Обраний :attribute недійсний.',
    'integer'                    => ':attribute має бути цілим числом.',
    'ip'                         => 'Значення :attribute повинно бути дійсною IP-адресою.',
    'json'                       => 'Значення поля :attribute має бути коректним JSON рядком.',
    'max.numeric'                => 'Значення :attribute не може перевищувати :max.',
    'max.file'                   => 'Значення :attribute не може перевищувати :max кілобайт.',
    'max.string'                 => 'Значення :attribute не може перевищувати :max символів.',
    'max.array'                  => 'Поле :attribute повинне містити не більше :max елементів.',
    'mimes'                      => 'Поле :attribute повинне містити файл одного з типів: :values.',
    'min.numeric'                => 'Поле :attribute має бути принаймні :min.',
    'lte.numeric'                => 'Поле :attribute повинно бути меньше або дорівнювати :value.',
    'min.file'                   => ':attribute має становити щонайменше :min кілобайт.',
    'min.string'                 => 'Поле :attribute має бути принаймні :min символів.',
    'min.array'                  => 'Поле :attribute має містити принаймні :min елементів.',
    'not_in'                     => 'Обраний :attribute недійсний.',
    'numeric'                    => ':attribute має бути числом.',
    'numeric_native'             => 'Сума повинна бути числом.',
    'numeric_destination'        => 'Сума призначення повинна бути числом.',
    'numeric_source'             => 'Вихідна сума повинна бути числом.',
    'regex'                      => 'Неприпустимий формат поля :attribute.',
    'required'                   => 'Поле :attribute обов\'язкове.',
    'required_if'                => 'Поле :attribute є обов\'язковим для заповнення, коли :other є рівним :value.',
    'required_unless'            => 'Поле :attribute є обов\'язковим для заповнення, коли :other відрізняється від :values.',
    'required_with'              => 'Поле :attribute є обов\'язковим для заповнення, коли є :values.',
    'required_with_all'          => 'Поле :attribute є обов\'язковим для заповнення, коли є :values.',
    'required_without'           => 'Поле :attribute обов\'язкове коли :values відсутнє.',
    'required_without_all'       => 'Поле :attribute обов\'язкове коли жодне зі значень :values не існує.',
    'same'                       => ':attribute i :other мають спiвпадати.',
    'size.numeric'               => ':attribute має бути довжиною :size.',
    'amount_min_over_max'        => 'Мінімальна сума не може бути більшою за максимальну суму.',
    'size.file'                  => ':attribute має бути :size кілобайт.',
    'size.string'                => ':attribute має бути довжиною :size символів.',
    'size.array'                 => 'Поле :attribute повинно мати :size елементів.',
    'unique'                     => ':attribute вже зайнятий.',
    'string'                     => 'Поле :attribute повинне містити текст.',
    'url'                        => 'Неприпустимий формат поля :attribute.',
    'timezone'                   => ':attribute має знаходитися у відповідних межах.',
    '2fa_code'                   => 'Поле :attribute неправильне.',
    'dimensions'                 => ':attribute містить неприпустимі розміри зображення.',
    'distinct'                   => ':attribute містить дубльоване значення.',
    'file'                       => ':attribute повинен бути файлом.',
    'in_array'                   => 'Поле :attribute не існує в :other.',
    'present'                    => ':attribute обов\'язкоове.',
    'amount_zero'                => 'Загальна сума не може бути нульовою.',
    'current_target_amount'      => 'Поточна сума повинна бути меншою, ніж цільова сума.',
    'unique_piggy_bank_for_user' => 'Назва скарбнички має бути унікальною.',
    'unique_object_group'        => 'Назва групи повинна бути унікальною',
    'starts_with'                => 'Значення має починатися з :values.',
    'unique_webhook'             => 'У вас вже є веб хук з цією комбінацією URL, тригера, відповіді та доставкою.',
    'unique_existing_webhook'    => 'У вас вже є інший веб хук з цією комбінацією URL, тригера, відповіді та доставкою.',
    'same_account_type'          => 'Обидва рахунки повинні бути того самого типу',
    'same_account_currency'      => 'Обидва рахунки повинні мати однакові налаштування валюти',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'secure_password'             => 'Це не надійний пароль. Будь ласка, спробуйте інший. Для отримання додаткової інформації, відвідайте https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Неприпустимий тип для повторюваних транзакцій.',
    'valid_recurrence_rep_moment' => 'Невірний період повторення для цого типу повторення.',
    'invalid_account_info'        => 'Невірні дані рахунка.',
    'attributes'                  => [
        'email'                   => 'eлектронна адреса',
        'description'             => 'опис',
        'amount'                  => 'сума',
        'transactions.*.amount'   => 'сума платежу',
        'name'                    => 'назва',
        'piggy_bank_id'           => 'iD скарбнички',
        'targetamount'            => 'сума накопичення',
        'opening_balance_date'    => 'дата початкового балансу',
        'opening_balance'         => 'початковий баланс',
        'match'                   => 'відповідає',
        'amount_min'              => 'мінімальна сума',
        'amount_max'              => 'максимальна сума',
        'title'                   => 'назва',
        'tag'                     => 'тег',
        'transaction_description' => 'опис транзакції',
        'rule-action-value.1'     => '"Значення дії #1"',
        'rule-action-value.2'     => '"Значення дії #2"',
        'rule-action-value.3'     => '"Значення дії #3"',
        'rule-action-value.4'     => '"Значення дії #4"',
        'rule-action-value.5'     => '"Значення дії #5"',
        'rule-action.1'           => '"Дія #1"',
        'rule-action.2'           => '"Дія #2"',
        'rule-action.3'           => '"Дія #3"',
        'rule-action.4'           => '"Дія #4"',
        'rule-action.5'           => '"Дія #5"',
        'rule-trigger-value.1'    => '"значення умови #1"',
        'rule-trigger-value.2'    => '"значення умови #2"',
        'rule-trigger-value.3'    => '"значення умови #3"',
        'rule-trigger-value.4'    => 'значення умови #4',
        'rule-trigger-value.5'    => 'значення умови #5',
        'rule-trigger.1'          => 'умова #1',
        'rule-trigger.2'          => 'умова #2',
        'rule-trigger.3'          => 'умова #3',
        'rule-trigger.4'          => 'умова #4',
        'rule-trigger.5'          => 'умова #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Щоб продовжити, необхідно вказати дійсний ID рахунку і/або його назву.',
    'withdrawal_source_bad_data'  => '[a] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'withdrawal_dest_need_data'   => '[a] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'withdrawal_dest_bad_data'    => 'Не вдалося знайти дійсний рахунок з ID ":id" або іменем ":name".',

    'withdrawal_dest_iban_exists' => 'This destination account IBAN is already in use by an asset account or a liability and cannot be used as a withdrawal destination.',
    'deposit_src_iban_exists'     => 'This source account IBAN is already in use by an asset account or a liability and cannot be used as a deposit source.',

    'reconciliation_source_bad_data' => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data' => '[e] Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data' => 'Щоб продовжити, необхідно вказати дійсний ID вихідного рахунку і/або його назву.',
    'deposit_source_bad_data'  => '[b] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'deposit_dest_need_data'   => '[b] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'deposit_dest_bad_data'    => 'Не вдалося знайти дійсний рахунок призначення з ID ":id" або іменем ":name".',
    'deposit_dest_wrong_type'  => 'Збережений рахунок призначення - некоректний.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'transfer_source_need_data' => 'Щоб продовжити, необхідно вказати дійсний ID вихідного рахунку і/або його назву.',
    'transfer_source_bad_data'  => '[c] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'transfer_dest_need_data'   => '[c] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'transfer_dest_bad_data'    => 'Не вдалося знайти дійсний рахунок призначення з ID ":id" або іменем ":name".',
    'need_id_in_edit'           => 'Кожна розділена транзакція повинна мати transaction_journal_id (дійсний ID або 0).',

    'ob_source_need_data'           => 'Щоб продовжити, необхідно вказати дійсний ID вихідного рахунку і/або його назву.',
    'lc_source_need_data'           => 'Need to get a valid source account ID to continue.',
    'ob_dest_need_data'             => '[d] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'              => 'Не вдалося знайти дійсний рахунок призначення з ID ":id" або іменем ":name".',
    'reconciliation_either_account' => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'      => 'Ви не можете використовувати цей рахунок як вихідний.',
    'generic_invalid_destination' => 'Ви не можете використовувати цей рахунок як призначення.',

    'generic_no_source'      => 'You must submit source account information or submit a transaction journal ID.',
    'generic_no_destination' => 'You must submit destination account information or submit a transaction journal ID.',

    'gte.numeric' => 'Поле :attribute має дорівнювати чи бути більше ніж :value.',
    'gt.numeric'  => 'Значення :attribute має бути більше за :value.',
    'gte.file'    => 'Поле :attribute має дорівнювати чи бути більше ніж :value кілобайт.',
    'gte.string'  => 'Кількість символів поля :attribute повинно бути більше або дорівнювати :value.',
    'gte.array'   => 'Поле :attribute має містити :value чи більше елементів.',

    'amount_required_for_auto_budget' => 'Необхідно вказати суму.',
    'auto_budget_amount_positive'     => 'Сума має бути більше нуля.',
    'auto_budget_period_mandatory'    => 'Автоматичний період бюджета - обов\'язкове поле.',

    // no access to administration:
    'no_access_user_group'            => 'У Вас немає необхідних прав доступу для цих налаштувань.',
];

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */
