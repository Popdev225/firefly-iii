<?php
/*
 * translations.php
 * Copyright (c) 2024 james@firefly-iii.org.
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
 * along with this program.  If not, see https://www.gnu.org/licenses/.
 */

declare(strict_types=1);

return [
    'json'      => [
        'v2' => [
            'config'     => [
                'html_language',
                'date_time_fns',
                'month_and_day_fns',
                'does_not_exist', // on purpose
                'date_time_fns_short',
            ],
            'form'       => [
                'title',
            ],
            'list'       => [
                'drag_and_drop',
                'active',
                'name',
                'type',
                'number',
                'liability_type',
                'current_balance',
                'last_activity',
                'amount_due',
                'balance_difference',
                'menu',
            ],
            'validation' => [
                'bad_type_source',
                'bad_type_destination',
            ],
            'firefly'    => [
                'liability_direction_debit_short',
                'liability_direction_credit_short',
                'interest_calc_yearly',
                'interest_calc_',
                'interest_calc_daily',
                'interest_calc_monthly',
                'interest_calc_weekly',
                'interest_calc_half-year',
                'interest_calc_quarterly',
                'spent',
                'administration_owner',
                'administration_you',
                'administration_role_owner',
                'administration_role_ro',
                'administration_role_mng_trx',
                'administration_role_mng_meta',
                'administration_role_mng_budgets',
                'administration_role_mng_piggies',
                'administration_role_mng_subscriptions',
                'administration_role_mng_rules',
                'administration_role_mng_recurring',
                'administration_role_mng_webhooks',
                'administration_role_mng_currencies',
                'administration_role_view_reports',
                'administration_role_full',
                'new_administration_created',
                'left',
                'paid',
                'errors_submission_v2',
                'unpaid',
                'default_group_title_name_plain',
                'subscriptions_in_group',
                'subscr_expected_x_times',
                'overspent',
                'money_flowing_in',
                'money_flowing_out',
                'category',
                'unknown_category_plain',
                'all_money',
                'unknown_source_plain',
                'unknown_dest_plain',
                'unknown_any_plain',
                'unknown_budget_plain',
                'stored_journal_js',
                'wait_loading_transaction',
                'nothing_found',
                'wait_loading_data',
                'Transfer',
                'Withdrawal',
                'Deposit',
                'expense_account',
                'revenue_account',
                'budget',
                'account_type_Asset account',
                'account_type_Expense account',
                'account_type_Revenue account',
                'account_type_Debt',
                'account_type_Loan',
                'account_type_Mortgage',
                'account_role_defaultAsset',
                'account_role_sharedAsset',
                'account_role_savingAsset',
                'account_role_ccAsset',
                'account_role_cashWalletAsset',
                //                'account_column_opt_drag_and_drop',
                //                'account_column_opt_active',
                //                'account_column_opt_name',
                //                'account_column_opt_type',
                //                'account_column_opt_liability_type',
                //                'account_column_opt_liability_direction',
                //                'account_column_opt_liability_interest',
                //                'account_column_opt_number',
                //                'account_column_opt_current_balance',
                //                'account_column_opt_amount_due',
                //                'account_column_opt_last_activity',
                //                'account_column_opt_balance_difference',
                //                'account_column_opt_menu',
            ],
        ],
        'v1' => [
            'firefly' => [
                'welcome_back',
                'flash_error',
                'flash_warning',
                'flash_success',
                'close',
                'select_dest_account',
                'select_source_account',
                'split_transaction_title',
                'errors_submission',
                'split',
                'single_split',
                'transaction_stored_link',
                'webhook_stored_link',
                'webhook_updated_link',
                'transaction_updated_link',
                'transaction_new_stored_link',
                'transaction_journal_information',
                'submission_options',
                'apply_rules_checkbox',
                'fire_webhooks_checkbox',
                'no_budget_pointer',
                'no_bill_pointer',
                'source_account',
                'hidden_fields_preferences',
                'destination_account',
                'add_another_split',
                'submission',
                'stored_journal',
                'create_another',
                'reset_after',
                'submit',
                'amount',
                'date',
                'is_reconciled_fields_dropped',
                'tags',
                'no_budget',
                'no_bill',
                'category',
                'attachments',
                'notes',
                'external_url',
                'update_transaction',
                'after_update_create_another',
                'store_as_new',
                'reset_after',
                'split_title_help',
                'none_in_select_list',
                'no_piggy_bank',
                'description',
                'split_transaction_title_help',
                'destination_account_reconciliation',
                'source_account_reconciliation',
                'budget',
                'bill',
                'you_create_withdrawal',
                'you_create_transfer',
                'you_create_deposit',
                'edit',
                'delete',
                'name',
                'profile_whoops',
                'profile_something_wrong',
                'profile_try_again',
                'profile_oauth_clients',
                'profile_oauth_no_clients',
                'profile_oauth_clients_header',
                'profile_oauth_client_id',
                'profile_oauth_client_name',
                'profile_oauth_client_secret',
                'profile_oauth_create_new_client',
                'profile_oauth_create_client',
                'profile_oauth_edit_client',
                'profile_oauth_name_help',
                'profile_oauth_redirect_url',
                'profile_oauth_clients_external_auth',
                'profile_oauth_redirect_url_help',
                'profile_authorized_apps',
                'profile_authorized_clients',
                'profile_scopes',
                'profile_revoke',
                'profile_personal_access_tokens',
                'profile_personal_access_token',
                'profile_personal_access_token_explanation',
                'profile_no_personal_access_token',
                'profile_create_new_token',
                'profile_create_token',
                'profile_create',
                'profile_save_changes',
                'default_group_title_name',
                'piggy_bank',
                'profile_oauth_client_secret_title',
                'profile_oauth_client_secret_expl',
                'profile_oauth_confidential',
                'profile_oauth_confidential_help',
                'multi_account_warning_unknown',
                'multi_account_warning_withdrawal',
                'multi_account_warning_deposit',
                'multi_account_warning_transfer',
                'webhook_trigger_STORE_TRANSACTION',
                'webhook_trigger_UPDATE_TRANSACTION',
                'webhook_trigger_DESTROY_TRANSACTION',
                'webhook_response_TRANSACTIONS',
                'webhook_response_ACCOUNTS',
                'webhook_response_none_NONE',
                'webhook_delivery_JSON',
                'actions',
                'meta_data',
                'webhook_messages',
                'inactive',
                'no_webhook_messages',
                'inspect',
                'edit',
                'delete',
                'create_new_webhook',
                'webhooks',
                'webhook_trigger_form_help',
                'webhook_response_form_help',
                'webhook_delivery_form_help',
                'webhook_active_form_help',
                'edit_webhook_js',
                'webhook_was_triggered',
                'view_message',
                'view_attempts',
                'message_content_title',
                'message_content_help',
                'attempt_content_title',
                'attempt_content_help',
                'no_attempts',
                'webhook_attempt_at',
                'logs',
                'response',
                'visit_webhook_url',
                'reset_webhook_secret',
            ],
            'form'    => [
                'url',
                'active',
                'interest_date',
                'title',
                'book_date',
                'process_date',
                'due_date',
                'foreign_amount',
                'payment_date',
                'invoice_date',
                'internal_reference',
                'webhook_response',
                'webhook_trigger',
                'webhook_delivery',
            ],
            'list'    => [
                'active',
                'trigger',
                'response',
                'delivery',
                'url',
                'secret',
            ],
            'config'  => [
                'html_language',
                'date_time_fns',
            ],
        ],
    ],

    // TODO duplicate with firefly.php
    'languages' => [
        // currently enabled languages
        'bg_BG',
        'cs_CZ',
        'da_DK',
        'de_DE',
        'el_GR',
        'en_GB',
        'en_US',
        'es_ES',
        'ca_ES',
        'fi_FI',
        'fr_FR',
        'hu_HU',
        'id_ID',
        'it_IT',
        'ja_JP',
        'ko_KR',
        'nb_NO',
        'nn_NO',
        'nl_NL',
        'pl_PL',
        'pt_BR',
        'pt_PT',
        'ro_RO',
        'ru_RU',
        'sk_SK',
        'sl_SI',
        'sv_SE',
        'tr_TR',
        'uk_UA',
        'vi_VN',
        'zh_TW',
        'zh_CN',
    ],
];
