<?php

/**
 * form.php
 * Copyright (c) 2018 thegrumpydictator@gmail.com
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

return [
    // new user:
    'bank_name'                   => 'Bank name',
    'bank_balance'                => 'Balance',
    'savings_balance'             => 'Savings balance',
    'credit_card_limit'           => 'Credit card limit',
    'automatch'                   => 'Match automatically',
    'skip'                        => 'Skip',
    'enabled'                     => 'Enabled',
    'name'                        => 'Name',
    'active'                      => 'Active',
    'amount_min'                  => 'Minimum amount',
    'amount_max'                  => 'Maximum amount',
    'match'                       => 'Matches on',
    'strict'                      => 'Strict mode',
    'repeat_freq'                 => 'Repeats',
    'journal_currency_id'         => 'Currency',
    'currency_id'                 => 'Currency',
    'transaction_currency_id'     => 'Currency',
    'external_ip'                 => 'Your server\'s external IP',
    'attachments'                 => 'Attachments',
    'journal_amount'              => 'Amount',
    'journal_source_name'         => 'Revenue account (source)',
    'keep_bill_id'                => 'Bill',
    'journal_source_id'           => 'Asset account (source)',
    'BIC'                         => 'BIC',
    'verify_password'             => 'Verify password security',
    'source_account'              => 'Source account',
    'destination_account'         => 'Destination account',
    'journal_destination_id'      => 'Asset account (destination)',
    'asset_destination_account'   => 'Destination account',
    'include_net_worth'           => 'Include in net worth',
    'asset_source_account'        => 'Source account',
    'journal_description'         => 'Description',
    'note'                        => 'Notes',
    'store_new_transaction'       => 'Store new transaction',
    'split_journal'               => 'Split this transaction',
    'split_journal_explanation'   => 'Split this transaction in multiple parts',
    'currency'                    => 'Currency',
    'account_id'                  => 'Asset account',
    'budget_id'                   => 'Budget',
    'opening_balance'              => 'Opening balance',
    'tagMode'                     => 'Tag mode',
    'tag_position'                => 'Tag location',
    'virtualBalance'              => 'Virtual balance',
    'targetamount'                => 'Target amount',
    'accountRole'                 => 'Account role',
    'opening_balance_date'          => 'Opening balance date',
    'ccType'                      => 'Credit card payment plan',
    'ccMonthlyPaymentDate'        => 'Credit card monthly payment date',
    'piggy_bank_id'               => 'Piggy bank',
    'returnHere'                  => 'Return here',
    'returnHereExplanation'       => 'After storing, return here to create another one.',
    'returnHereUpdateExplanation' => 'After updating, return here.',
    'description'                 => 'Description',
    'expense_account'             => 'Expense account',
    'revenue_account'             => 'Revenue account',
    'decimal_places'              => 'Decimal places',
    'exchange_rate_instruction'   => 'Foreign currencies',
    'source_amount'               => 'Amount (source)',
    'destination_amount'          => 'Amount (destination)',
    'native_amount'               => 'Native amount',
    'new_email_address'           => 'New email address',
    'verification'                => 'Verification',
    'api_key'                     => 'API key',
    'remember_me'                 => 'Remember me',
    'liability_type_id'           => 'Liability type',
    'interest'                    => 'Interest',
    'interest_period'             => 'Interest period',

    'source_account_asset'        => 'Source account (asset account)',
    'destination_account_expense' => 'Destination account (expense account)',
    'destination_account_asset'   => 'Destination account (asset account)',
    'source_account_revenue'      => 'Source account (revenue account)',
    'type'                        => 'Type',
    'convert_Withdrawal'          => 'Convert withdrawal',
    'convert_Deposit'             => 'Convert deposit',
    'convert_Transfer'            => 'Convert transfer',

    'amount'                      => 'Amount',
    'foreign_amount'              => 'Foreign amount',
    'existing_attachments'        => 'Existing attachments',
    'date'                        => 'Date',
    'interest_date'               => 'Interest date',
    'book_date'                   => 'Book date',
    'process_date'                => 'Processing date',
    'category'                    => 'Category',
    'tags'                        => 'Tags',
    'deletePermanently'           => 'Delete permanently',
    'cancel'                      => 'Cancel',
    'targetdate'                  => 'Target date',
    'startdate'                   => 'Start date',
    'tag'                         => 'Tag',
    'under'                       => 'Under',
    'symbol'                      => 'Symbol',
    'code'                        => 'Code',
    'iban'                        => 'IBAN',
    'accountNumber'               => 'Account number',
    'creditCardNumber'            => 'Credit card number',
    'has_headers'                 => 'Headers',
    'date_format'                 => 'Date format',
    'specifix'                    => 'Bank- or file specific fixes',
    'attachments[]'               => 'Attachments',
    'store_new_withdrawal'        => 'Store new withdrawal',
    'store_new_deposit'           => 'Store new deposit',
    'store_new_transfer'          => 'Store new transfer',
    'add_new_withdrawal'          => 'Add a new withdrawal',
    'add_new_deposit'             => 'Add a new deposit',
    'add_new_transfer'            => 'Add a new transfer',
    'title'                       => 'Title',
    'notes'                       => 'Notes',
    'filename'                    => 'File name',
    'mime'                        => 'Mime type',
    'size'                        => 'Size',
    'trigger'                     => 'Trigger',
    'stop_processing'             => 'Stop processing',
    'start_date'                  => 'Start of range',
    'end_date'                    => 'End of range',
    'include_attachments'         => 'Include uploaded attachments',
    'include_old_uploads'         => 'Include imported data',
    'delete_account'              => 'Delete account ":name"',
    'delete_bill'                 => 'Delete bill ":name"',
    'delete_budget'               => 'Delete budget ":name"',
    'delete_category'             => 'Delete category ":name"',
    'delete_currency'             => 'Delete currency ":name"',
    'delete_journal'              => 'Delete transaction with description ":description"',
    'delete_attachment'           => 'Delete attachment ":name"',
    'delete_rule'                 => 'Delete rule ":title"',
    'delete_rule_group'           => 'Delete rule group ":title"',
    'delete_link_type'            => 'Delete link type ":name"',
    'delete_user'                 => 'Delete user ":email"',
    'delete_recurring'            => 'Delete recurring transaction ":title"',
    'user_areYouSure'             => 'If you delete user ":email", everything will be gone. There is no undo, undelete or anything. If you delete yourself, you will lose access to this instance of Firefly III.',
    'attachment_areYouSure'       => 'Are you sure you want to delete the attachment named ":name"?',
    'account_areYouSure'          => 'Are you sure you want to delete the account named ":name"?',
    'bill_areYouSure'             => 'Are you sure you want to delete the bill named ":name"?',
    'rule_areYouSure'             => 'Are you sure you want to delete the rule titled ":title"?',
    'ruleGroup_areYouSure'        => 'Are you sure you want to delete the rule group titled ":title"?',
    'budget_areYouSure'           => 'Are you sure you want to delete the budget named ":name"?',
    'category_areYouSure'         => 'Are you sure you want to delete the category named ":name"?',
    'recurring_areYouSure'        => 'Are you sure you want to delete the recurring transaction titled ":title"?',
    'currency_areYouSure'         => 'Are you sure you want to delete the currency named ":name"?',
    'piggyBank_areYouSure'        => 'Are you sure you want to delete the piggy bank named ":name"?',
    'journal_areYouSure'          => 'Are you sure you want to delete the transaction described ":description"?',
    'mass_journal_are_you_sure'   => 'Are you sure you want to delete these transactions?',
    'tag_areYouSure'              => 'Are you sure you want to delete the tag ":tag"?',
    'journal_link_areYouSure'     => 'Are you sure you want to delete the link between <a href=":source_link">:source</a> and <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Are you sure you want to delete the link type ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Deleting stuff from Firefly III is permanent and cannot be undone.',
    'mass_make_selection'         => 'You can still prevent items from being deleted by removing the checkbox.',
    'delete_all_permanently'      => 'Delete selected permanently',
    'update_all_journals'         => 'Update these transactions',
    'also_delete_transactions'    => 'The only transaction connected to this account will be deleted as well.|All :count transactions connected to this account will be deleted as well.',
    'also_delete_connections'     => 'The only transaction linked with this link type will lose this connection.|All :count transactions linked with this link type will lose their connection.',
    'also_delete_rules'           => 'The only rule connected to this rule group will be deleted as well.|All :count rules connected to this rule group will be deleted as well.',
    'also_delete_piggyBanks'      => 'The only piggy bank connected to this account will be deleted as well.|All :count piggy bank connected to this account will be deleted as well.',
    'bill_keep_transactions'      => 'The only transaction connected to this bill will not be deleted.|All :count transactions connected to this bill will be spared deletion.',
    'budget_keep_transactions'    => 'The only transaction connected to this budget will not be deleted.|All :count transactions connected to this budget will be spared deletion.',
    'category_keep_transactions'  => 'The only transaction connected to this category will not be deleted.|All :count transactions connected to this category will be spared deletion.',
    'recurring_keep_transactions' => 'The only transaction created by this recurring transaction will not be deleted.|All :count transactions created by this recurring transaction will be spared deletion.',
    'tag_keep_transactions'       => 'The only transaction connected to this tag will not be deleted.|All :count transactions connected to this tag will be spared deletion.',
    'check_for_updates'           => 'Check for updates',

    'email'                 => 'Email address',
    'password'              => 'Password',
    'password_confirmation' => 'Password (again)',
    'blocked'               => 'Is blocked?',
    'blocked_code'          => 'Reason for block',
    'login_name'            => 'Login',

    // import
    'apply_rules'           => 'Apply rules',
    'artist'                => 'Artist',
    'album'                 => 'Album',
    'song'                  => 'Song',


    // admin
    'domain'                => 'Domain',
    'single_user_mode'      => 'Disable user registration',
    'is_demo_site'          => 'Is demo site',

    // import
    'import_file'           => 'Import file',
    'configuration_file'    => 'Configuration file',
    'import_file_type'      => 'Import file type',
    'csv_comma'             => 'A comma (,)',
    'csv_semicolon'         => 'A semicolon (;)',
    'csv_tab'               => 'A tab (invisible)',
    'csv_delimiter'         => 'CSV field delimiter',
    'csv_import_account'    => 'Default import account',
    'csv_config'            => 'CSV import configuration',
    'client_id'             => 'Client ID',
    'service_secret'        => 'Service secret',
    'app_secret'            => 'App secret',
    'app_id'                => 'App ID',
    'secret'                => 'Secret',
    'public_key'            => 'Public key',
    'country_code'          => 'Country code',
    'provider_code'         => 'Bank or data-provider',
    'fints_url'             => 'FinTS API URL',
    'fints_port'            => 'Port',
    'fints_bank_code'       => 'Bank code',
    'fints_username'        => 'Username',
    'fints_password'        => 'PIN / Password',
    'fints_account'         => 'FinTS account',
    'local_account'         => 'Firefly III account',
    'from_date'             => 'Date from',
    'to_date'               => 'Date to',


    'due_date'                => 'Due date',
    'payment_date'            => 'Payment date',
    'invoice_date'            => 'Invoice date',
    'internal_reference'      => 'Internal reference',
    'inward'                  => 'Inward description',
    'outward'                 => 'Outward description',
    'rule_group_id'           => 'Rule group',
    'transaction_description' => 'Transaction description',
    'first_date'              => 'First date',
    'transaction_type'        => 'Transaction type',
    'repeat_until'            => 'Repeat until',
    'recurring_description'   => 'Recurring transaction description',
    'repetition_type'         => 'Type of repetition',
    'foreign_currency_id'     => 'Foreign currency',
    'repetition_end'          => 'Repetition ends',
    'repetitions'             => 'Repetitions',
    'calendar'                => 'Calendar',
    'weekend'                 => 'Weekend',
    'client_secret'           => 'Client secret',

];
