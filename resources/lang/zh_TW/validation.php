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
    'bad_type_source'                 => 'Firefly III can\'t determine the transaction type based on this source account.',
    'bad_type_destination'            => 'Firefly III can\'t determine the transaction type based on this destination account.',
    'missing_where'                   => 'Array is missing "where"-clause',
    'missing_update'                  => 'Array is missing "update"-clause',
    'invalid_where_key'               => 'JSON contains an invalid key for the "where"-clause',
    'invalid_update_key'              => 'JSON contains an invalid key for the "update"-clause',
    'invalid_query_data'              => 'There is invalid data in the %s:%s field of your query.',
    'invalid_query_account_type'      => 'Your query contains accounts of different types, which is not allowed.',
    'invalid_query_currency'          => 'Your query contains accounts that have different currency settings, which is not allowed.',
    'iban'                            => '這不是有效的 IBAN。',
    'zero_or_more'                    => '此數值不能為負數。',
    'more_than_zero'                  => 'The value must be more than zero.',
    'more_than_zero_correct'          => 'The value must be zero or more.',
    'no_asset_account'                => 'This is not an asset account.',
    'date_or_time'                    => '此數值須為有效的日期或時間值 (ISO 8601)。',
    'source_equals_destination'       => '來源帳戶與目標帳戶相同。',
    'unique_account_number_for_user'  => '此帳戶號碼似乎已在使用。',
    'unique_iban_for_user'            => '此 IBAN 似乎已在使用。',
    'reconciled_forbidden_field'      => 'This transaction is already reconciled, you cannot change the ":field"',
    'deleted_user'                    => '受安全限制，您無法使用此電子郵件地址註冊。',
    'rule_trigger_value'              => '此值不適用於選取的觸發器。',
    'rule_action_expression'          => 'Invalid expression. :error',
    'rule_action_value'               => '此值不適用於選取的動作。',
    'file_already_attached'           => '上傳的檔案 ":name" 已附加到該物件上。',
    'file_attached'                   => '已成功上傳檔案 ":name"。',
    'file_zero'                       => 'The file is zero bytes in size.',
    'must_exist'                      => '欄位 :attribute 的 ID 不存在於資料庫。',
    'all_accounts_equal'              => '此欄位中的所有帳戶必須相等。',
    'group_title_mandatory'           => '多於一筆交易時，須要群組標題。',
    'transaction_types_equal'         => '所有拆分須為同一類型。',
    'invalid_transaction_type'        => '交易類型無效。',
    'invalid_selection'               => '您的選擇無效。',
    'belongs_user'                    => 'This value is linked to an object that does not seem to exist.',
    'belongs_user_or_user_group'      => 'This value is linked to an object that does not seem to exist in your current financial administration.',
    'at_least_one_transaction'        => '至少需要一個交易。',
    'recurring_transaction_id'        => 'Need at least one transaction.',
    'need_id_to_match'                => 'You need to submit this entry with an ID for the API to be able to match it.',
    'too_many_unmatched'              => 'Too many submitted transactions cannot be matched to their respective database entries. Make sure existing entries have a valid ID.',
    'id_does_not_match'               => 'Submitted ID #:id does not match expected ID. Make sure it matches or omit the field.',
    'at_least_one_repetition'         => '至少需要一次重複。',
    'require_repeat_until'            => '要嘛重複次數，要嘛結束日期 (repeat_until)，須二擇其一。',
    'require_currency_info'           => '此欄位內容須要貨幣資訊。',
    'not_transfer_account'            => 'This account is not an account that can be used for transfers.',
    'require_currency_amount'         => '此欄位內容須要外幣資訊。',
    'require_foreign_currency'        => 'This field requires a number',
    'require_foreign_dest'            => 'This field value must match the currency of the destination account.',
    'require_foreign_src'             => 'This field value must match the currency of the source account.',
    'equal_description'               => '交易描述不應等同全域描述。',
    'file_invalid_mime'               => '檔案 ":name" 類型為 ":mime"，不允許上載。',
    'file_too_large'                  => '檔案 ":name" 過大。',
    'belongs_to_user'                 => ':attribute 的值未知。',
    'accepted'                        => ':attribute 必須被接受。',
    'bic'                             => '這不是有效的 BIC。',
    'at_least_one_trigger'            => '規則必須至少有一個觸發器。',
    'at_least_one_active_trigger'     => 'Rule must have at least one active trigger.',
    'at_least_one_action'             => '規則必須至少有一個動作。',
    'at_least_one_active_action'      => 'Rule must have at least one active action.',
    'base64'                          => '這不是有效的 base64 編碼資料。',
    'model_id_invalid'                => '指定的 ID 對於此模型似乎無效。',
    'less'                            => ':attribute 必須小於 10,000,000。',
    'active_url'                      => ':attribute 不是有效的 URL。',
    'after'                           => ':attribute 必須是一個在 :date 之後的日期。',
    'date_after'                      => 'The start date must be before the end date.',
    'alpha'                           => ':attribute 只能包含字母。',
    'alpha_dash'                      => ':attribute 只能包含字母、數字和破折號。',
    'alpha_num'                       => ':attribute 只能包含數字和字母。',
    'array'                           => ':attribute 必須是一個陣列。',
    'unique_for_user'                 => '包括 :attribute 的紀錄已存在。',
    'before'                          => ':attribute 必須是一個在 :date 之前的日期。',
    'unique_object_for_user'          => '這個名稱已被使用。',
    'unique_account_for_user'         => '這個帳戶名稱已被使用。',

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

    'between.numeric'                 => ':attribute 必須介於 :min 和 :max 之間。',
    'between.file'                    => ':attribute 必須介於 :min kB 到 :max kB 之間。',
    'between.string'                  => ':attribute 必須介於 :min 到 :max 個字元之間。',
    'between.array'                   => ':attribute 必須介於 :min 到 :max 個項目之間。',
    'boolean'                         => ':attribute 欄位必須為 true 或 false。',
    'confirmed'                       => ':attribute 的確認並不相符。',
    'date'                            => ':attribute 不是一個有效的日期。',
    'date_format'                     => ':attribute 不符合 :format 格式。',
    'different'                       => ':attribute 和 :other 不能相同。',
    'digits'                          => ':attribute 必須是 :digits 位數字。',
    'digits_between'                  => ':attribute 必須介於 :min 和 :max 位數字之間。',
    'email'                           => ':attribute 必須是一個有效的電子郵件地址。',
    'filled'                          => ':attribute 欄位是必填的。',
    'exists'                          => '所選的 :attribute 無效。',
    'image'                           => ':attribute 必須是圖片。',
    'in'                              => '所選的 :attribute 無效。',
    'integer'                         => ':attribute 必須是整數。',
    'ip'                              => ':attribute 必須是一個有效的 IP 位址。',
    'json'                            => ':attribute 必須是一個有效的 JSON 字串。',
    'max.numeric'                     => ':attribute 不能大於 :max。',
    'max.file'                        => ':attribute 不能大於 :max kB。',
    'max.string'                      => ':attribute 不能大於 :max 個字元。',
    'max.array'                       => ':attribute 不能多於 :max 個項目。',
    'mimes'                           => ':attribute 的檔案類型必須是 :values 。',
    'min.numeric'                     => ':attribute 至少需要 :min。',
    'lte.numeric'                     => ':attribute 必須小於或等於 :value。',
    'min.file'                        => ':attribute 必須至少為 :min kB。',
    'min.string'                      => ':attribute 最少需要有 :min 個字元。',
    'min.array'                       => ':attribute 至少需要有 :min 個項目。',
    'not_in'                          => '所選的 :attribute 無效。',
    'numeric'                         => ':attribute 必須是數字。',
    'scientific_notation'             => 'The :attribute cannot use the scientific notation.',
    'numeric_native'                  => '本地金額必須是數字。',
    'numeric_destination'             => '目標金額必須是數字。',
    'numeric_source'                  => '來源金額必須是數字。',
    'regex'                           => ':attribute 格式無效。',
    'required'                        => ':attribute 欄位是必填的。',
    'required_if'                     => '當 :other 為 :value 時，欄位 :attribute 是必填的。',
    'required_unless'                 => '除非 :other 為 :values，否則欄位 :attribute 是必填的。',
    'required_with'                   => "當 :values\u{200b}\u{200b} 存在時，欄位 :attribute 是必填的。",
    'required_with_all'               => "當 :values\u{200b}\u{200b} 存在時，欄位 :attribute 是必填的。",
    'required_without'                => "當 :values\u{200b}\u{200b} 不存在時，欄位 :attribute 是必填的。",
    'required_without_all'            => "當沒有任何 :values\u{200b}\u{200b} 存在時，欄位 :attribute 是必填的。",
    'same'                            => ':attribute 和 :other 必須相符。',
    'size.numeric'                    => ':attribute 必須是 :size。',
    'amount_min_over_max'             => '最小金額不能大於最大金額。',
    'size.file'                       => ':attribute 必須為 :size kB。',
    'size.string'                     => ':attribute 必須為 :size 個字元。',
    'size.array'                      => ':attribute 必須包含 :size 個項目。',
    'unique'                          => ':attribute 已被使用。',
    'string'                          => ':attribute 必須是字串。',
    'url'                             => ':attribute 格式無效。',
    'timezone'                        => ':attribute 必須是有效的時區。',
    '2fa_code'                        => '欄位 :attribute 無效。',
    'dimensions'                      => ':attribute 圖片尺寸無效。',
    'distinct'                        => '欄位 :attribute 有重複值。',
    'file'                            => ':attribute 必須是檔案。',
    'in_array'                        => '欄位 :attribute 不存在於 :other。',
    'present'                         => ':attribute 欄位必須存在。',
    'amount_zero'                     => '總金額不能為零。',
    'current_target_amount'           => 'The current amount must be less than the target amount.',
    'unique_piggy_bank_for_user'      => '小豬撲滿的名稱必須是獨一無二的。',
    'unique_object_group'             => 'The group name must be unique',
    'starts_with'                     => 'The value must start with :values.',
    'unique_webhook'                  => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'         => 'You already have another webhook with this combination of URL, trigger, response and delivery.',
    'same_account_type'               => 'Both accounts must be of the same account type',
    'same_account_currency'           => 'Both accounts must have the same currency setting',

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

    'secure_password'                 => 'This is not a secure password. Please try again. For more information, visit https://bit.ly/FF3-password',
    'valid_recurrence_rep_type'       => '定期重複交易的重複類型無效。',
    'valid_recurrence_rep_moment'     => '重複時刻在此重複類型無效。',
    'invalid_account_info'            => '無效的帳戶資訊。',
    'attributes'                      => [
        'email'                   => '電子郵件地址',
        'description'             => '描述',
        'amount'                  => '金額',
        'transactions.*.amount'   => 'transaction amount',
        'name'                    => '名稱',
        'piggy_bank_id'           => '小豬撲滿 ID',
        'targetamount'            => '目標金額',
        'opening_balance_date'    => '初始餘額日期',
        'opening_balance'         => '初始餘額',
        'match'                   => '符合',
        'amount_min'              => '最小金額',
        'amount_max'              => '最大金額',
        'title'                   => '標題',
        'tag'                     => '標籤',
        'transaction_description' => '交易描述',
        'rule-action-value.1'     => '規則動作值 #1',
        'rule-action-value.2'     => '規則動作值 #2',
        'rule-action-value.3'     => '規則動作值 #3',
        'rule-action-value.4'     => '規則動作值 #4',
        'rule-action-value.5'     => '規則動作值 #5',
        'rule-action.1'           => '規則動作 #1',
        'rule-action.2'           => '規則動作 #2',
        'rule-action.3'           => '規則動作 #3',
        'rule-action.4'           => '規則動作 #4',
        'rule-action.5'           => '規則動作 #5',
        'rule-trigger-value.1'    => '規則觸發器值 #1',
        'rule-trigger-value.2'    => '規則觸發器值 #2',
        'rule-trigger-value.3'    => '規則觸發器值 #3',
        'rule-trigger-value.4'    => '規則觸發器值 #4',
        'rule-trigger-value.5'    => '規則觸發器值 #5',
        'rule-trigger.1'          => '規則觸發器 #1',
        'rule-trigger.2'          => '規則觸發器 #2',
        'rule-trigger.3'          => '規則觸發器 #3',
        'rule-trigger.4'          => '規則觸發器 #4',
        'rule-trigger.5'          => '規則觸發器 #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'     => '需要有效的來源帳戶 ID 及/或有效的來源帳戶名稱才能繼續。',
    'withdrawal_source_bad_data'      => '[a] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'withdrawal_dest_need_data'       => '[a] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'withdrawal_dest_bad_data'        => '搜尋 ID ":id" 或名稱 ":name" 都找不到有效的目標帳戶。',

    'withdrawal_dest_iban_exists'     => 'This destination account IBAN is already in use by an asset account or a liability and cannot be used as a withdrawal destination.',
    'deposit_src_iban_exists'         => 'This source account IBAN is already in use by an asset account or a liability and cannot be used as a deposit source.',

    'reconciliation_source_bad_data'  => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data'         => '[e] Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data'        => '需要有效的來源帳戶 ID 及/或有效的來源帳戶名稱才能繼續。',
    'deposit_source_bad_data'         => '[b] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'deposit_dest_need_data'          => '[b] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'deposit_dest_bad_data'           => '搜尋 ID ":id" 或名稱 ":name" 都找不到有效的目標帳戶。',
    'deposit_dest_wrong_type'         => 'The submitted destination account is not of the right type.',

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

    'transfer_source_need_data'       => '需要有效的來源帳戶 ID 及/或有效的來源帳戶名稱才能繼續。',
    'transfer_source_bad_data'        => '[c] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'transfer_dest_need_data'         => '[c] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'transfer_dest_bad_data'          => '搜尋 ID ":id" 或名稱 ":name" 都找不到有效的目標帳戶。',
    'need_id_in_edit'                 => '每筆拆分須有 transaction_journal_id (為有效的 ID 或是 0)。',

    'ob_source_need_data'             => '需要有效的來源帳戶 ID 及/或有效的來源帳戶名稱才能繼續。',
    'lc_source_need_data'             => 'Need to get a valid source account ID to continue.',
    'ob_dest_need_data'               => '[d] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'                => '搜尋 ID ":id" 或名稱 ":name" 都找不到有效的目標帳戶。',
    'reconciliation_either_account'   => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'          => 'You can\'t use this account as the source account.',
    'generic_invalid_destination'     => 'You can\'t use this account as the destination account.',

    'generic_no_source'               => 'You must submit source account information or submit a transaction journal ID.',
    'generic_no_destination'          => 'You must submit destination account information or submit a transaction journal ID.',

    'gte.numeric'                     => 'The :attribute must be greater than or equal to :value.',
    'gt.numeric'                      => 'The :attribute must be greater than :value.',
    'gte.file'                        => 'The :attribute must be greater than or equal to :value kilobytes.',
    'gte.string'                      => 'The :attribute must be greater than or equal to :value characters.',
    'gte.array'                       => 'The :attribute must have :value items or more.',

    'amount_required_for_auto_budget' => 'The amount is required.',
    'auto_budget_amount_positive'     => 'The amount must be more than zero.',

    'auto_budget_period_mandatory'    => 'The auto budget period is a mandatory field.',

    // no access to administration:
    'no_access_user_group'            => 'You do not have the correct access rights for this administration.',
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
