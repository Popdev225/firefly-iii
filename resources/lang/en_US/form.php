<?php
declare(strict_types=1);

/**
 * form.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

return [

    // new user:
    'bank_name'                      => 'Bank name',
    'bank_balance'                   => 'Balance',
    'savings_balance'                => 'Savings balance',
    'credit_card_limit'              => 'Credit card limit',
    'automatch'                      => 'Match automatically',
    'skip'                           => 'Skip',
    'name'                           => 'Name',
    'active'                         => 'Active',
    'amount_min'                     => 'Minimum amount',
    'amount_max'                     => 'Maximum amount',
    'match'                          => 'Matches on',
    'repeat_freq'                    => 'Repeats',
    'journal_currency_id'            => 'Currency',
    'currency_id'                    => 'Currency',
    'attachments'                    => 'Attachments',
    'journal_amount'                 => 'Amount',
    'journal_asset_source_account'   => 'Asset account (source)',
    'journal_source_account_name'    => 'Revenue account (source)',
    'journal_source_account_id'      => 'Asset account (source)',
    'BIC'                            => 'BIC',
    'verify_password'                => 'Verify password security',
    'account_from_id'                => 'From account',
    'account_to_id'                  => 'To account',
    'source_account'                 => 'Source account',
    'destination_account'            => 'Destination account',
    'journal_destination_account_id' => 'Asset account (destination)',
    'asset_destination_account'      => 'Asset account (destination)',
    'asset_source_account'           => 'Asset account (source)',
    'journal_description'            => 'Description',
    'note'                           => 'Notes',
    'split_journal'                  => 'Split this transaction',
    'split_journal_explanation'      => 'Split this transaction in multiple parts',
    'currency'                       => 'Currency',
    'account_id'                     => 'Asset account',
    'budget_id'                      => 'Budget',
    'openingBalance'                 => 'Opening balance',
    'tagMode'                        => 'Tag mode',
    'tagPosition'                    => 'Tag location',
    'virtualBalance'                 => 'Virtual balance',
    'longitude_latitude'             => 'Location',
    'targetamount'                   => 'Target amount',
    'accountRole'                    => 'Account role',
    'openingBalanceDate'             => 'Opening balance date',
    'ccType'                         => 'Credit card payment plan',
    'ccMonthlyPaymentDate'           => 'Credit card monthly payment date',
    'piggy_bank_id'                  => 'Piggy bank',
    'returnHere'                     => 'Return here',
    'returnHereExplanation'          => 'After storing, return here to create another one.',
    'returnHereUpdateExplanation'    => 'After updating, return here.',
    'description'                    => 'Description',
    'expense_account'                => 'Expense account',
    'revenue_account'                => 'Revenue account',
    'decimal_places'                 => 'Decimal places',
    'exchange_rate_instruction'      => 'Foreign currencies',
    'exchanged_amount'               => 'Exchanged amount',
    'source_amount'                  => 'Amount (source)',
    'destination_amount'             => 'Amount (destination)',
    'native_amount'                  => 'Native amount',

    'revenue_account_source'      => 'Revenue account (source)',
    'source_account_asset'        => 'Source account (asset account)',
    'destination_account_expense' => 'Destination account (expense account)',
    'destination_account_asset'   => 'Destination account (asset account)',
    'source_account_revenue'      => 'Source account (revenue account)',
    'type'                        => 'Type',
    'convert_Withdrawal'          => 'Convert withdrawal',
    'convert_Deposit'             => 'Convert deposit',
    'convert_Transfer'            => 'Convert transfer',


    'amount'                     => 'Amount',
    'date'                       => 'Date',
    'interest_date'              => 'Interest date',
    'book_date'                  => 'Book date',
    'process_date'               => 'Processing date',
    'category'                   => 'Category',
    'tags'                       => 'Tags',
    'deletePermanently'          => 'Delete permanently',
    'cancel'                     => 'Cancel',
    'targetdate'                 => 'Target date',
    'tag'                        => 'Tag',
    'under'                      => 'Under',
    'symbol'                     => 'Symbol',
    'code'                       => 'Code',
    'iban'                       => 'IBAN',
    'accountNumber'              => 'Account number',
    'has_headers'                => 'Headers',
    'date_format'                => 'Date format',
    'specifix'                   => 'Bank- or file specific fixes',
    'attachments[]'              => 'Attachments',
    'store_new_withdrawal'       => 'Store new withdrawal',
    'store_new_deposit'          => 'Store new deposit',
    'store_new_transfer'         => 'Store new transfer',
    'add_new_withdrawal'         => 'Add a new withdrawal',
    'add_new_deposit'            => 'Add a new deposit',
    'add_new_transfer'           => 'Add a new transfer',
    'noPiggybank'                => '(no piggy bank)',
    'title'                      => 'Title',
    'notes'                      => 'Notes',
    'filename'                   => 'File name',
    'mime'                       => 'Mime type',
    'size'                       => 'Size',
    'trigger'                    => 'Trigger',
    'stop_processing'            => 'Stop processing',
    'start_date'                 => 'Start of range',
    'end_date'                   => 'End of range',
    'export_start_range'         => 'Start of export range',
    'export_end_range'           => 'End of export range',
    'export_format'              => 'File format',
    'include_attachments'        => 'Include uploaded attachments',
    'include_old_uploads'        => 'Include imported data',
    'accounts'                   => 'Export transactions from these accounts',
    'delete_account'             => 'Delete account ":name"',
    'delete_bill'                => 'Delete bill ":name"',
    'delete_budget'              => 'Delete budget ":name"',
    'delete_category'            => 'Delete category ":name"',
    'delete_currency'            => 'Delete currency ":name"',
    'delete_journal'             => 'Delete transaction with description ":description"',
    'delete_attachment'          => 'Delete attachment ":name"',
    'delete_rule'                => 'Delete rule ":title"',
    'delete_rule_group'          => 'Delete rule group ":title"',
    'delete_link_type'           => 'Delete link type ":name"',
    'attachment_areYouSure'      => 'Are you sure you want to delete the attachment named ":name"?',
    'account_areYouSure'         => 'Are you sure you want to delete the account named ":name"?',
    'bill_areYouSure'            => 'Are you sure you want to delete the bill named ":name"?',
    'rule_areYouSure'            => 'Are you sure you want to delete the rule titled ":title"?',
    'ruleGroup_areYouSure'       => 'Are you sure you want to delete the rule group titled ":title"?',
    'budget_areYouSure'          => 'Are you sure you want to delete the budget named ":name"?',
    'category_areYouSure'        => 'Are you sure you want to delete the category named ":name"?',
    'currency_areYouSure'        => 'Are you sure you want to delete the currency named ":name"?',
    'piggyBank_areYouSure'       => 'Are you sure you want to delete the piggy bank named ":name"?',
    'journal_areYouSure'         => 'Are you sure you want to delete the transaction described ":description"?',
    'mass_journal_are_you_sure'  => 'Are you sure you want to delete these transactions?',
    'tag_areYouSure'             => 'Are you sure you want to delete the tag ":tag"?',
    'linkType_areYouSure'        => 'Are you sure you want to delete the link type ":name" (":inward" / ":outward")?',
    'permDeleteWarning'          => 'Deleting stuff from Firely is permanent and cannot be undone.',
    'mass_make_selection'        => 'You can still prevent items from being deleted by removing the checkbox.',
    'delete_all_permanently'     => 'Delete selected permanently',
    'update_all_journals'        => 'Update these transactions',
    'also_delete_transactions'   => 'The only transaction connected to this account will be deleted as well.|All :count transactions connected to this account will be deleted as well.',
    'also_delete_connections'   => 'The only transaction linked with this link type will lose this connection.|All :count transactions linked with this link type will lose their connection.',
    'also_delete_rules'          => 'The only rule connected to this rule group will be deleted as well.|All :count rules connected to this rule group will be deleted as well.',
    'also_delete_piggyBanks'     => 'The only piggy bank connected to this account will be deleted as well.|All :count piggy bank connected to this account will be deleted as well.',
    'bill_keep_transactions'     => 'The only transaction connected to this bill will not be deleted.|All :count transactions connected to this bill will spared deletion.',
    'budget_keep_transactions'   => 'The only transaction connected to this budget will not be deleted.|All :count transactions connected to this budget will spared deletion.',
    'category_keep_transactions' => 'The only transaction connected to this category will not be deleted.|All :count transactions connected to this category will spared deletion.',
    'tag_keep_transactions'      => 'The only transaction connected to this tag will not be deleted.|All :count transactions connected to this tag will spared deletion.',

    'email'                 => 'Email address',
    'password'              => 'Password',
    'password_confirmation' => 'Password (again)',
    'blocked'               => 'Is blocked?',
    'blocked_code'          => 'Reason for block',


    // admin
    'domain'                => 'Domain',
    'single_user_mode'      => 'Single user mode',
    'must_confirm_account'  => 'New users must activate account',
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


    'due_date'           => 'Due date',
    'payment_date'       => 'Payment date',
    'invoice_date'       => 'Invoice date',
    'internal_reference' => 'Internal reference',

    'inward'  => 'Inward description',
    'outward' => 'Outward description',
];
