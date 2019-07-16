<?php


/**
 * firefly.php
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

use FireflyIII\Export\Exporter\CsvExporter;
use FireflyIII\Services\Currency\FixerIOv2;
use FireflyIII\Services\Currency\RatesApiIOv1;
use FireflyIII\TransactionRules\Actions\AddTag;
use FireflyIII\TransactionRules\Actions\AppendDescription;
use FireflyIII\TransactionRules\Actions\AppendNotes;
use FireflyIII\TransactionRules\Actions\ClearBudget;
use FireflyIII\TransactionRules\Actions\ClearCategory;
use FireflyIII\TransactionRules\Actions\ClearNotes;
use FireflyIII\TransactionRules\Actions\ConvertToDeposit;
use FireflyIII\TransactionRules\Actions\ConvertToTransfer;
use FireflyIII\TransactionRules\Actions\ConvertToWithdrawal;
use FireflyIII\TransactionRules\Actions\LinkToBill;
use FireflyIII\TransactionRules\Actions\PrependDescription;
use FireflyIII\TransactionRules\Actions\PrependNotes;
use FireflyIII\TransactionRules\Actions\RemoveAllTags;
use FireflyIII\TransactionRules\Actions\RemoveTag;
use FireflyIII\TransactionRules\Actions\SetBudget;
use FireflyIII\TransactionRules\Actions\SetCategory;
use FireflyIII\TransactionRules\Actions\SetDescription;
use FireflyIII\TransactionRules\Actions\SetDestinationAccount;
use FireflyIII\TransactionRules\Actions\SetNotes;
use FireflyIII\TransactionRules\Actions\SetSourceAccount;
use FireflyIII\TransactionRules\Triggers\AmountExactly;
use FireflyIII\TransactionRules\Triggers\AmountLess;
use FireflyIII\TransactionRules\Triggers\AmountMore;
use FireflyIII\TransactionRules\Triggers\BudgetIs;
use FireflyIII\TransactionRules\Triggers\CategoryIs;
use FireflyIII\TransactionRules\Triggers\CurrencyIs;
use FireflyIII\TransactionRules\Triggers\DescriptionContains;
use FireflyIII\TransactionRules\Triggers\DescriptionEnds;
use FireflyIII\TransactionRules\Triggers\DescriptionIs;
use FireflyIII\TransactionRules\Triggers\DescriptionStarts;
use FireflyIII\TransactionRules\Triggers\FromAccountContains;
use FireflyIII\TransactionRules\Triggers\FromAccountEnds;
use FireflyIII\TransactionRules\Triggers\FromAccountIs;
use FireflyIII\TransactionRules\Triggers\FromAccountStarts;
use FireflyIII\TransactionRules\Triggers\HasAnyBudget;
use FireflyIII\TransactionRules\Triggers\HasAnyCategory;
use FireflyIII\TransactionRules\Triggers\HasAnyTag;
use FireflyIII\TransactionRules\Triggers\HasAttachment;
use FireflyIII\TransactionRules\Triggers\HasNoBudget;
use FireflyIII\TransactionRules\Triggers\HasNoCategory;
use FireflyIII\TransactionRules\Triggers\HasNoTag;
use FireflyIII\TransactionRules\Triggers\NotesAny;
use FireflyIII\TransactionRules\Triggers\NotesAre;
use FireflyIII\TransactionRules\Triggers\NotesContain;
use FireflyIII\TransactionRules\Triggers\NotesEmpty;
use FireflyIII\TransactionRules\Triggers\NotesEnd;
use FireflyIII\TransactionRules\Triggers\NotesStart;
use FireflyIII\TransactionRules\Triggers\TagIs;
use FireflyIII\TransactionRules\Triggers\ToAccountContains;
use FireflyIII\TransactionRules\Triggers\ToAccountEnds;
use FireflyIII\TransactionRules\Triggers\ToAccountIs;
use FireflyIII\TransactionRules\Triggers\ToAccountStarts;
use FireflyIII\TransactionRules\Triggers\TransactionType;
use FireflyIII\TransactionRules\Triggers\UserAction;

/*
 * DO NOT EDIT THIS FILE. IT IS AUTO GENERATED.
 *
 * ANY OPTIONS IN THIS FILE YOU CAN SAFELY EDIT CAN BE FOUND IN THE USER INTERFACE OF FIREFLY III.
 */

return [
    'configuration'                => [
        'single_user_mode' => true,
        'is_demo_site'     => false,
    ],
    'encryption'                   => null === env('USE_ENCRYPTION') || env('USE_ENCRYPTION') === true,
    'version'                      => '4.7.17.3',
    'api_version'                  => '0.9.2',
    'db_version'                   => 10,
    'maxUploadSize'                => 15242880,
    'send_error_message'           => env('SEND_ERROR_MESSAGE', true),
    'site_owner'                   => env('SITE_OWNER', ''),
    'send_registration_mail'       => env('SEND_REGISTRATION_MAIL', true),
    'demo_username'                => env('DEMO_USERNAME', ''),
    'demo_password'                => env('DEMO_PASSWORD', ''),
    'is_sandstorm'                 => env('IS_SANDSTORM', 'unknown'),
    'is_docker'                    => env('IS_DOCKER', 'unknown'),
    'bunq_use_sandbox'             => env('BUNQ_USE_SANDBOX', false),
    'fixer_api_key'                => env('FIXER_API_KEY', ''),
    'mapbox_api_key'               => env('MAPBOX_API_KEY', ''),
    'trusted_proxies'              => env('TRUSTED_PROXIES', ''),
    'search_result_limit'          => env('SEARCH_RESULT_LIMIT', 50),
    'send_report_journals'         => envNonEmpty('SEND_REPORT_JOURNALS', true),
    'analytics_id'                 => env('ANALYTICS_ID', ''),
    'disable_frame_header'         => env('DISABLE_FRAME_HEADER', false),
    'login_provider'               => envNonEmpty('LOGIN_PROVIDER', 'eloquent'),
    'cer_provider'                 => envNonEmpty('CER_PROVIDER', 'fixer'),
    'allowedMimes'                 => [
        /* plain files */
        'text/plain',

        /* images */
        'image/jpeg',
        'image/svg+xml',
        'image/png',
        'image/heic',
        'image/heic-sequence',

        /* PDF */
        'application/pdf',


        /* MS word */
        'application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
        /* MS excel */
        'application/vnd.ms-excel',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.template',
        /* MS powerpoint */
        'application/vnd.ms-powerpoint',
        'application/vnd.openxmlformats-officedocument.presentationml.presentation',
        'application/vnd.openxmlformats-officedocument.presentationml.template',
        'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
        /* iWork */
        'application/x-iwork-pages-sffpages',
        /* open office */
        'application/vnd.sun.xml.writer',
        'application/vnd.sun.xml.writer.template',
        'application/vnd.sun.xml.writer.global',
        'application/vnd.stardivision.writer',
        'application/vnd.stardivision.writer-global',
        'application/vnd.sun.xml.calc',
        'application/vnd.sun.xml.calc.template',
        'application/vnd.stardivision.calc',
        'application/vnd.sun.xml.impress',
        'application/vnd.sun.xml.impress.template',
        'application/vnd.stardivision.impress',
        'application/vnd.sun.xml.draw',
        'application/vnd.sun.xml.draw.template',
        'application/vnd.stardivision.draw',
        'application/vnd.sun.xml.math',
        'application/vnd.stardivision.math',
        'application/vnd.oasis.opendocument.text',
        'application/vnd.oasis.opendocument.text-template',
        'application/vnd.oasis.opendocument.text-web',
        'application/vnd.oasis.opendocument.text-master',
        'application/vnd.oasis.opendocument.graphics',
        'application/vnd.oasis.opendocument.graphics-template',
        'application/vnd.oasis.opendocument.presentation',
        'application/vnd.oasis.opendocument.presentation-template',
        'application/vnd.oasis.opendocument.spreadsheet',
        'application/vnd.oasis.opendocument.spreadsheet-template',
        'application/vnd.oasis.opendocument.chart',
        'application/vnd.oasis.opendocument.formula',
        'application/vnd.oasis.opendocument.database',
        'application/vnd.oasis.opendocument.image',
    ],
    'list_length'                  => 10,
    'export_formats'               => [
        'csv' => CsvExporter::class,
    ],
    'default_export_format'        => 'csv',
    'default_import_format'        => 'csv',
    'bill_periods'                 => ['weekly', 'monthly', 'quarterly', 'half-year', 'yearly'],
    'accountRoles'                 => ['defaultAsset', 'sharedAsset', 'savingAsset', 'ccAsset', 'cashWalletAsset'],
    'ccTypes'                      => [
        'monthlyFull' => 'Full payment every month',
    ],
    'range_to_repeat_freq'         => [
        '1D'     => 'weekly',
        '1W'     => 'weekly',
        '1M'     => 'monthly',
        '3M'     => 'quarterly',
        '6M'     => 'half-year',
        '1Y'     => 'yearly',
        'custom' => 'custom',
    ],
    'subTitlesByIdentifier'        =>
        [
            'asset'       => 'Asset accounts',
            'expense'     => 'Expense accounts',
            'revenue'     => 'Revenue accounts',
            'cash'        => 'Cash accounts',
            'liabilities' => 'Liabilities',
            'liability'   => 'Liabilities',
        ],
    'subIconsByIdentifier'         =>
        [
            'asset'               => 'fa-money',
            'Asset account'       => 'fa-money',
            'Default account'     => 'fa-money',
            'Cash account'        => 'fa-money',
            'expense'             => 'fa-shopping-cart',
            'Expense account'     => 'fa-shopping-cart',
            'Beneficiary account' => 'fa-shopping-cart',
            'revenue'             => 'fa-download',
            'Revenue account'     => 'fa-download',
            'import'              => 'fa-download',
            'Import account'      => 'fa-download',
            'liabilities'         => 'fa-ticket',
        ],
    'accountTypesByIdentifier'     =>
        [
            'asset'       => ['Default account', 'Asset account'],
            'expense'     => ['Expense account', 'Beneficiary account'],
            'revenue'     => ['Revenue account'],
            'import'      => ['Import account'],
            'liabilities' => ['Loan', 'Debt', 'Credit card', 'Mortgage'],
        ],
    'accountTypeByIdentifier'      =>
        [
            'asset'       => ['Asset account'],
            'expense'     => ['Expense account'],
            'revenue'     => ['Revenue account'],
            'opening'     => ['Initial balance account'],
            'initial'     => ['Initial balance account'],
            'import'      => ['Import account'],
            'reconcile'   => ['Reconciliation account'],
            'liabilities' => ['Loan', 'Debt', 'Mortgage', 'Credit card'],
            'liability'   => ['Loan', 'Debt', 'Mortgage', 'Credit card'],
        ],
    'shortNamesByFullName'         =>
        [
            'Default account'         => 'asset',
            'Asset account'           => 'asset',
            'Import account'          => 'import',
            'Expense account'         => 'expense',
            'Beneficiary account'     => 'expense',
            'Revenue account'         => 'revenue',
            'Cash account'            => 'cash',
            'Initial balance account' => 'initial-balance',
            'Reconciliation account'  => 'reconciliation',
            'Credit card'             => 'liabilities',
            'Loan'                    => 'liabilities',
            'Debt'                    => 'liabilities',
            'Mortgage'                => 'liabilities',
        ],
    'shortLiabilityNameByFullName' => [
        'Credit card' => 'creditcard',
        'Loan'        => 'loan',
        'Debt'        => 'debt',
        'Mortgage'    => 'mortgage',
    ],
    'languages'                    => [
        'en_US' => ['name_locale' => 'English', 'name_english' => 'English'],
        'es_ES' => ['name_locale' => 'Español', 'name_english' => 'Spanish'], // 92%
        'de_DE' => ['name_locale' => 'Deutsch', 'name_english' => 'German'],  // 100%
        'fr_FR' => ['name_locale' => 'Français', 'name_english' => 'French'], // 100%
        //'id_ID' => ['name_locale' => 'Bahasa Indonesia', 'name_english' => 'Indonesian'], // 65%
        'it_IT' => ['name_locale' => 'Italiano', 'name_english' => 'Italian'], // 100%
        'nl_NL' => ['name_locale' => 'Nederlands', 'name_english' => 'Dutch'], // 100%
        'pl_PL' => ['name_locale' => 'Polski', 'name_english' => 'Polish '], // 87%
        'pt_BR' => ['name_locale' => 'Português do Brasil', 'name_english' => 'Portuguese (Brazil)'], // 80%
        'ru_RU' => ['name_locale' => 'Русский', 'name_english' => 'Russian'], // 83%
        'zh_TW' => ['name_locale' => 'Chinese Traditional', 'name_english' => 'Chinese Traditional'], // 100%
        'zh_CN' => ['name_locale' => 'Chinese Simplified', 'name_english' => 'Chinese Simplified'], // 99%
        //'tr_TR' => ['name_locale' => 'Türkçe', 'name_english' => 'Turkish'], // 71%
        'nb_NO' => ['name_locale' => 'Norsk', 'name_english' => 'Norwegian'],
        //'ca_ES' => ['name_locale' => 'Catalan', 'name_english' => 'Catalan'], // 0%
        //'ja_JA' => ['name_locale' => 'Japanese', 'name_english' => 'Japanese'], // 0%
        //'cs_CZ' => ['name_locale' => 'Czech', 'name_english' => 'Czech'], // 35%
        //'he_IL' => ['name_locale' => 'Hebrew', 'name_english' => 'Hebrew'], // 2%
        //'hu_HU' => ['name_locale' => 'Hungarian', 'name_english' => 'Hungarian'], // 40%
        //'sv_SE' => ['name_locale' => 'Svenska', 'name_english' => 'Swedish'], // 1%
        //'sr_CS' => ['name_locale' => 'Serbian (Latin)', 'name_english' => 'Serbian (Latin)'], // 0%
        //'sl_SI' => ['name_locale' => 'Slovenian', 'name_english' => 'Slovenian'], // 10%
        //'uk_UA' => ['name_locale' => 'Ukranian', 'name_english' => 'Ukranian'], // 4%


    ],
    'transactionTypesByWhat'       => [
        'expenses'   => ['Withdrawal'],
        'withdrawal' => ['Withdrawal'],
        'revenue'    => ['Deposit'],
        'deposit'    => ['Deposit'],
        'transfer'   => ['Transfer'],
        'transfers'  => ['Transfer'],
    ],
    'transactionTypesToShort'      => [
        'Withdrawal'      => 'withdrawal',
        'Deposit'         => 'deposit',
        'Transfer'        => 'transfer',
        'Opening balance' => 'opening-balance',
        'Reconciliation'  => 'reconciliation',
    ],
    'transactionIconsByWhat'       => [
        'expenses'   => 'fa-long-arrow-left',
        'withdrawal' => 'fa-long-arrow-left',
        'revenue'    => 'fa-long-arrow-right',
        'deposit'    => 'fa-long-arrow-right',
        'transfer'   => 'fa-exchange',
        'transfers'  => 'fa-exchange',

    ],
    'bindables'                    => [
        // models
        'account'           => \FireflyIII\Models\Account::class,
        'attachment'        => \FireflyIII\Models\Attachment::class,
        'availableBudget'   => \FireflyIII\Models\AvailableBudget::class,
        'bill'              => \FireflyIII\Models\Bill::class,
        'budget'            => \FireflyIII\Models\Budget::class,
        'budgetLimit'       => \FireflyIII\Models\BudgetLimit::class,
        'category'          => \FireflyIII\Models\Category::class,
        'linkType'          => \FireflyIII\Models\LinkType::class,
        'transactionType'   => \FireflyIII\Models\TransactionType::class,
        'journalLink'       => \FireflyIII\Models\TransactionJournalLink::class,
        'currency'          => \FireflyIII\Models\TransactionCurrency::class,
        'piggyBank'         => \FireflyIII\Models\PiggyBank::class,
        'preference'        => \FireflyIII\Models\Preference::class,
        'tj'                => \FireflyIII\Models\TransactionJournal::class,
        'tag'               => \FireflyIII\Models\Tag::class,
        'recurrence'        => \FireflyIII\Models\Recurrence::class,
        'rule'              => \FireflyIII\Models\Rule::class,
        'ruleGroup'         => \FireflyIII\Models\RuleGroup::class,
        'exportJob'         => \FireflyIII\Models\ExportJob::class,
        'importJob'         => \FireflyIII\Models\ImportJob::class,
        'transaction'       => \FireflyIII\Models\Transaction::class,
        'user'              => \FireflyIII\User::class,

        // strings
        'import_provider'   => \FireflyIII\Support\Binder\ImportProvider::class,
        'currency_code'     => \FireflyIII\Support\Binder\CurrencyCode::class,

        // dates
        'start_date'        => \FireflyIII\Support\Binder\Date::class,
        'end_date'          => \FireflyIII\Support\Binder\Date::class,
        'date'              => \FireflyIII\Support\Binder\Date::class,

        // lists
        'accountList'       => \FireflyIII\Support\Binder\AccountList::class,
        'expenseList'       => \FireflyIII\Support\Binder\AccountList::class,
        'budgetList'        => \FireflyIII\Support\Binder\BudgetList::class,
        'journalList'       => \FireflyIII\Support\Binder\JournalList::class,
        'categoryList'      => \FireflyIII\Support\Binder\CategoryList::class,
        'tagList'           => \FireflyIII\Support\Binder\TagList::class,
        'simpleJournalList' => \FireflyIII\Support\Binder\SimpleJournalList::class,

        // others
        'fromCurrencyCode'  => \FireflyIII\Support\Binder\CurrencyCode::class,
        'toCurrencyCode'    => \FireflyIII\Support\Binder\CurrencyCode::class,
        'unfinishedJournal' => \FireflyIII\Support\Binder\UnfinishedJournal::class,
        'cliToken'          => \FireflyIII\Support\Binder\CLIToken::class,
        'tagOrId'           => \FireflyIII\Support\Binder\TagOrId::class,
        'configName'        => \FireflyIII\Support\Binder\ConfigurationName::class,


    ],
    'rule-triggers'                => [
        'user_action'           => UserAction::class,
        'from_account_starts'   => FromAccountStarts::class,
        'from_account_ends'     => FromAccountEnds::class,
        'from_account_is'       => FromAccountIs::class,
        'from_account_contains' => FromAccountContains::class,
        'to_account_starts'     => ToAccountStarts::class,
        'to_account_ends'       => ToAccountEnds::class,
        'to_account_is'         => ToAccountIs::class,
        'to_account_contains'   => ToAccountContains::class,
        'amount_less'           => AmountLess::class,
        'amount_exactly'        => AmountExactly::class,
        'amount_more'           => AmountMore::class,
        'description_starts'    => DescriptionStarts::class,
        'description_ends'      => DescriptionEnds::class,
        'description_contains'  => DescriptionContains::class,
        'description_is'        => DescriptionIs::class,
        'transaction_type'      => TransactionType::class,
        'category_is'           => CategoryIs::class,
        'budget_is'             => BudgetIs::class,
        'tag_is'                => TagIs::class,
        'currency_is'           => CurrencyIs::class,
        'has_attachments'       => HasAttachment::class,
        'has_no_category'       => HasNoCategory::class,
        'has_any_category'      => HasAnyCategory::class,
        'has_no_budget'         => HasNoBudget::class,
        'has_any_budget'        => HasAnyBudget::class,
        'has_no_tag'            => HasNoTag::class,
        'has_any_tag'           => HasAnyTag::class,
        'notes_contain'         => NotesContain::class,
        'notes_start'           => NotesStart::class,
        'notes_end'             => NotesEnd::class,
        'notes_are'             => NotesAre::class,
        'no_notes'              => NotesEmpty::class,
        'any_notes'             => NotesAny::class,
    ],
    'rule-actions'                 => [
        'set_category'            => SetCategory::class,
        'clear_category'          => ClearCategory::class,
        'set_budget'              => SetBudget::class,
        'clear_budget'            => ClearBudget::class,
        'add_tag'                 => AddTag::class,
        'remove_tag'              => RemoveTag::class,
        'remove_all_tags'         => RemoveAllTags::class,
        'set_description'         => SetDescription::class,
        'append_description'      => AppendDescription::class,
        'prepend_description'     => PrependDescription::class,
        'set_source_account'      => SetSourceAccount::class,
        'set_destination_account' => SetDestinationAccount::class,
        'set_notes'               => SetNotes::class,
        'append_notes'            => AppendNotes::class,
        'prepend_notes'           => PrependNotes::class,
        'clear_notes'             => ClearNotes::class,
        'link_to_bill'            => LinkToBill::class,
        'convert_withdrawal'      => ConvertToWithdrawal::class,
        'convert_deposit'         => ConvertToDeposit::class,
        'convert_transfer'        => ConvertToTransfer::class,
    ],
    'context-rule-actions'         => [
        'set_category',
        'set_budget',
        'add_tag',
        'remove_tag',
        'set_description',
        'append_description',
        'prepend_description',
        'set_source_account',
        'set_destination_account',
        'set_notes',
        'append_notes',
        'prepend_notes',
        'link_to_bill',
        'convert_withdrawal',
        'convert_deposit',
        'convert_transfer',
    ],
    'context-rule-triggers'        => [
        'from_account_starts',
        'from_account_ends',
        'from_account_is',
        'from_account_contains',
        'to_account_starts',
        'to_account_ends',
        'to_account_is',
        'to_account_contains',
        'amount_less',
        'amount_exactly',
        'amount_more',
        'description_starts',
        'description_ends',
        'description_contains',
        'description_is',
        'transaction_type',
        'category_is',
        'budget_is',
        'tag_is',
        'currency_is',
        'notes_contain',
        'notes_start',
        'notes_end',
        'notes_are',
    ],


    'test-triggers'    => [
        'limit' => 10,
        'range' => 200,
    ],
    'default_currency' => 'EUR',
    'default_language' => 'en_US',
    'search_modifiers' => ['amount_is', 'amount', 'amount_max', 'amount_min', 'amount_less', 'amount_more', 'source', 'destination', 'category',
                           'budget', 'bill', 'type', 'date', 'date_before', 'date_after', 'on', 'before', 'after'],
    // tag notes has_attachments
    'cer_providers'    => [
        'fixer'    => FixerIOv2::class,
        'ratesapi' => RatesApiIOv1::class,
    ],
];
