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
    'iban'                           => 'This is not a valid IBAN.',
    'zero_or_more'                   => 'The value cannot be negative.',
    'date_or_time'                   => 'The value must be a valid date or time value (ISO 8601).',
    'source_equals_destination'      => 'The source account equals the destination account.',
    'unique_account_number_for_user' => 'It looks like this account number is already in use.',
    'unique_iban_for_user'           => 'It looks like this IBAN is already in use.',
    'deleted_user'                   => 'Due to security constraints, you cannot register using this email address.',
    'rule_trigger_value'             => 'This value is invalid for the selected trigger.',
    'rule_action_value'              => 'This value is invalid for the selected action.',
    'file_already_attached'          => 'Uploaded file ":name" is already attached to this object.',
    'file_attached'                  => 'Successfully uploaded file ":name".',
    'must_exist'                     => 'The ID in field :attribute does not exist in the database.',
    'all_accounts_equal'             => 'All accounts in this field must be equal.',
    'group_title_mandatory'          => 'A group title is mandatory when there is more than one transaction.',
    'transaction_types_equal'        => 'All splits must be of the same type.',
    'invalid_transaction_type'       => 'Invalid transaction type.',
    'invalid_selection'              => 'Your selection is invalid.',
    'belongs_user'                   => 'This value is linked to an object that does not belong to you.',
    'belongs_user_or_user_group'     => 'This value is linked to an object that does not belong to your current financial administration.',
    'at_least_one_transaction'       => 'Need at least one transaction.',
    'recurring_transaction_id'       => 'Need at least one transaction.',
    'need_id_to_match'               => 'You need to submit this entry with an ID for the API to be able to match it.',
    'too_many_unmatched'             => 'Too many submitted transactions cannot be matched to their respective database entries. Make sure existing entries have a valid ID.',
    'id_does_not_match'              => 'Submitted ID #:id does not match expected ID. Make sure it matches or omit the field.',
    'at_least_one_repetition'        => 'Need at least one repetition.',
    'require_repeat_until'           => 'Require either a number of repetitions, or an end date (repeat_until). Not both.',
    'require_currency_info'          => 'The content of this field is invalid without currency information.',
    'not_transfer_account'           => 'This account is not an account that can be used for transfers.',
    'require_currency_amount'        => 'The content of this field is invalid without foreign amount information.',
    'require_foreign_currency'       => 'This field requires a number',
    'require_foreign_dest'           => 'This field value must match the currency of the destination account.',
    'require_foreign_src'            => 'This field value must match the currency of the source account.',
    'equal_description'              => 'Transaction description should not equal global description.',
    'file_invalid_mime'              => 'File ":name" is of type ":mime" which is not accepted as a new upload.',
    'file_too_large'                 => 'File ":name" is too large.',
    'belongs_to_user'                => 'The value of :attribute is unknown.',
    'accepted'                       => 'The :attribute must be accepted.',
    'bic'                            => 'This is not a valid BIC.',
    'at_least_one_trigger'           => 'Rule must have at least one trigger.',
    'at_least_one_active_trigger'    => 'Rule must have at least one active trigger.',
    'at_least_one_action'            => 'Rule must have at least one action.',
    'at_least_one_active_action'     => 'Rule must have at least one active action.',
    'base64'                         => 'This is not valid base64 encoded data.',
    'model_id_invalid'               => 'The given ID seems invalid for this model.',
    'less'                           => ':attribute must be less than 10,000,000',
    'active_url'                     => 'The :attribute is not a valid URL.',
    'after'                          => 'The :attribute must be a date after :date.',
    'date_after'                     => 'The start date must be before the end date.',
    'alpha'                          => 'The :attribute may only contain letters.',
    'alpha_dash'                     => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'                      => 'The :attribute may only contain letters and numbers.',
    'array'                          => 'The :attribute must be an array.',
    'unique_for_user'                => 'There already is an entry with this :attribute.',
    'before'                         => 'The :attribute must be a date before :date.',
    'unique_object_for_user'         => 'This name is already in use.',
    'unique_account_for_user'        => 'This account name is already in use.',

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


    'between.numeric'            => 'The :attribute must be between :min and :max.',
    'between.file'               => 'The :attribute must be between :min and :max kilobytes.',
    'between.string'             => 'The :attribute must be between :min and :max characters.',
    'between.array'              => 'The :attribute must have between :min and :max items.',
    'boolean'                    => 'The :attribute field must be true or false.',
    'confirmed'                  => 'The :attribute confirmation does not match.',
    'date'                       => 'The :attribute is not a valid date.',
    'date_format'                => 'The :attribute does not match the format :format.',
    'different'                  => 'The :attribute and :other must be different.',
    'digits'                     => 'The :attribute must be :digits digits.',
    'digits_between'             => 'The :attribute must be between :min and :max digits.',
    'email'                      => 'The :attribute must be a valid email address.',
    'filled'                     => 'The :attribute field is required.',
    'exists'                     => 'The selected :attribute is invalid.',
    'image'                      => 'The :attribute must be an image.',
    'in'                         => 'The selected :attribute is invalid.',
    'integer'                    => 'The :attribute must be an integer.',
    'ip'                         => 'The :attribute must be a valid IP address.',
    'json'                       => 'The :attribute must be a valid JSON string.',
    'max.numeric'                => 'The :attribute may not be greater than :max.',
    'max.file'                   => 'The :attribute may not be greater than :max kilobytes.',
    'max.string'                 => 'The :attribute may not be greater than :max characters.',
    'max.array'                  => 'The :attribute may not have more than :max items.',
    'mimes'                      => 'The :attribute must be a file of type: :values.',
    'min.numeric'                => 'The :attribute must be at least :min.',
    'lte.numeric'                => 'The :attribute must be less than or equal :value.',
    'min.file'                   => 'The :attribute must be at least :min kilobytes.',
    'min.string'                 => 'The :attribute must be at least :min characters.',
    'min.array'                  => 'The :attribute must have at least :min items.',
    'not_in'                     => 'The selected :attribute is invalid.',
    'numeric'                    => 'The :attribute must be a number.',
    'numeric_native'             => 'The native amount must be a number.',
    'numeric_destination'        => 'The destination amount must be a number.',
    'numeric_source'             => 'The source amount must be a number.',
    'regex'                      => 'The :attribute format is invalid.',
    'required'                   => 'The :attribute field is required.',
    'required_if'                => 'The :attribute field is required when :other is :value.',
    'required_unless'            => 'The :attribute field is required unless :other is in :values.',
    'required_with'              => 'The :attribute field is required when :values is present.',
    'required_with_all'          => 'The :attribute field is required when :values is present.',
    'required_without'           => 'The :attribute field is required when :values is not present.',
    'required_without_all'       => 'The :attribute field is required when none of :values are present.',
    'same'                       => 'The :attribute and :other must match.',
    'size.numeric'               => 'The :attribute must be :size.',
    'amount_min_over_max'        => 'The minimum amount cannot be larger than the maximum amount.',
    'size.file'                  => 'The :attribute must be :size kilobytes.',
    'size.string'                => 'The :attribute must be :size characters.',
    'size.array'                 => 'The :attribute must contain :size items.',
    'unique'                     => 'The :attribute has already been taken.',
    'string'                     => 'The :attribute must be a string.',
    'url'                        => 'The :attribute format is invalid.',
    'timezone'                   => 'The :attribute must be a valid zone.',
    '2fa_code'                   => 'The :attribute field is invalid.',
    'dimensions'                 => 'The :attribute has invalid image dimensions.',
    'distinct'                   => 'The :attribute field has a duplicate value.',
    'file'                       => 'The :attribute must be a file.',
    'in_array'                   => 'The :attribute field does not exist in :other.',
    'present'                    => 'The :attribute field must be present.',
    'amount_zero'                => 'The total amount cannot be zero.',
    'current_target_amount'      => 'The current amount must be less than the target amount.',
    'unique_piggy_bank_for_user' => 'The name of the piggy bank must be unique.',
    'unique_object_group'        => 'The group name must be unique',
    'starts_with'                => 'The value must start with :values.',
    'unique_webhook'             => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'    => 'You already have another webhook with this combination of URL, trigger, response and delivery.',
    'same_account_type'          => 'Both accounts must be of the same account type',
    'same_account_currency'      => 'Both accounts must have the same currency setting',

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


    'secure_password'             => 'This is not a secure password. Please try again. For more information, visit https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Invalid repetition type for recurring transactions.',
    'valid_recurrence_rep_moment' => 'Invalid repetition moment for this type of repetition.',
    'invalid_account_info'        => 'Invalid account information.',
    'attributes'                  => [
        'email'                   => 'email address',
        'description'             => 'description',
        'amount'                  => 'amount',
        'transactions.*.amount'   => 'transaction amount',
        'name'                    => 'name',
        'piggy_bank_id'           => 'piggy bank ID',
        'targetamount'            => 'target amount',
        'opening_balance_date'    => 'opening balance date',
        'opening_balance'         => 'opening balance',
        'match'                   => 'match',
        'amount_min'              => 'minimum amount',
        'amount_max'              => 'maximum amount',
        'title'                   => 'title',
        'tag'                     => 'tag',
        'transaction_description' => 'transaction description',
        'rule-action-value.1'     => 'rule action value #1',
        'rule-action-value.2'     => 'rule action value #2',
        'rule-action-value.3'     => 'rule action value #3',
        'rule-action-value.4'     => 'rule action value #4',
        'rule-action-value.5'     => 'rule action value #5',
        'rule-action.1'           => 'rule action #1',
        'rule-action.2'           => 'rule action #2',
        'rule-action.3'           => 'rule action #3',
        'rule-action.4'           => 'rule action #4',
        'rule-action.5'           => 'rule action #5',
        'rule-trigger-value.1'    => 'rule trigger value #1',
        'rule-trigger-value.2'    => 'rule trigger value #2',
        'rule-trigger-value.3'    => 'rule trigger value #3',
        'rule-trigger-value.4'    => 'rule trigger value #4',
        'rule-trigger-value.5'    => 'rule trigger value #5',
        'rule-trigger.1'          => 'rule trigger #1',
        'rule-trigger.2'          => 'rule trigger #2',
        'rule-trigger.3'          => 'rule trigger #3',
        'rule-trigger.4'          => 'rule trigger #4',
        'rule-trigger.5'          => 'rule trigger #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'withdrawal_source_bad_data'  => '[a] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'withdrawal_dest_need_data'   => '[a] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'withdrawal_dest_bad_data'    => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',

    'withdrawal_dest_iban_exists' => 'This destination account IBAN is already in use by an asset account or a liability and cannot be used as a withdrawal destination.',
    'deposit_src_iban_exists'     => 'This source account IBAN is already in use by an asset account or a liability and cannot be used as a deposit source.',

    'reconciliation_source_bad_data' => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data' => '[e] Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data' => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'deposit_source_bad_data'  => '[b] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'deposit_dest_need_data'   => '[b] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'deposit_dest_bad_data'    => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',
    'deposit_dest_wrong_type'  => 'The submitted destination account is not of the right type.',

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


    'transfer_source_need_data' => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'transfer_source_bad_data'  => '[c] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'transfer_dest_need_data'   => '[c] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'transfer_dest_bad_data'    => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',
    'need_id_in_edit'           => 'Each split must have transaction_journal_id (either valid ID or 0).',

    'ob_source_need_data'           => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'lc_source_need_data'           => 'Need to get a valid source account ID to continue.',
    'ob_dest_need_data'             => '[d] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'              => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',
    'reconciliation_either_account' => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'      => 'You can\'t use this account as the source account.',
    'generic_invalid_destination' => 'You can\'t use this account as the destination account.',

    'generic_no_source'      => 'You must submit source account information or submit a transaction journal ID.',
    'generic_no_destination' => 'You must submit destination account information or submit a transaction journal ID.',

    'gte.numeric' => 'The :attribute must be greater than or equal to :value.',
    'gt.numeric'  => 'The :attribute must be greater than :value.',
    'gte.file'    => 'The :attribute must be greater than or equal to :value kilobytes.',
    'gte.string'  => 'The :attribute must be greater than or equal to :value characters.',
    'gte.array'   => 'The :attribute must have :value items or more.',

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
