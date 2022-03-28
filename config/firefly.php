<?php

/**
 * firefly.php
 * Copyright (c) 2019 james@firefly-iii.org.
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

use FireflyIII\Models\Account;
use FireflyIII\Models\AccountType;
use FireflyIII\Models\Attachment;
use FireflyIII\Models\AvailableBudget;
use FireflyIII\Models\Bill;
use FireflyIII\Models\Budget;
use FireflyIII\Models\BudgetLimit;
use FireflyIII\Models\Category;
use FireflyIII\Models\LinkType;
use FireflyIII\Models\ObjectGroup;
use FireflyIII\Models\PiggyBank;
use FireflyIII\Models\Preference;
use FireflyIII\Models\Recurrence;
use FireflyIII\Models\Rule;
use FireflyIII\Models\RuleGroup;
use FireflyIII\Models\Tag;
use FireflyIII\Models\Transaction;
use FireflyIII\Models\TransactionCurrency;
use FireflyIII\Models\TransactionGroup;
use FireflyIII\Models\TransactionJournal;
use FireflyIII\Models\TransactionJournalLink;
use FireflyIII\Models\TransactionType as TransactionTypeModel;
use FireflyIII\Models\Webhook;
use FireflyIII\Models\WebhookAttempt;
use FireflyIII\Models\WebhookMessage;
use FireflyIII\Support\Binder\AccountList;
use FireflyIII\Support\Binder\BudgetList;
use FireflyIII\Support\Binder\CategoryList;
use FireflyIII\Support\Binder\CLIToken;
use FireflyIII\Support\Binder\CurrencyCode;
use FireflyIII\Support\Binder\Date;
use FireflyIII\Support\Binder\DynamicConfigKey;
use FireflyIII\Support\Binder\EitherConfigKey;
use FireflyIII\Support\Binder\JournalList;
use FireflyIII\Support\Binder\TagList;
use FireflyIII\Support\Binder\TagOrId;
use FireflyIII\TransactionRules\Actions\AddTag;
use FireflyIII\TransactionRules\Actions\AppendDescription;
use FireflyIII\TransactionRules\Actions\AppendNotes;
use FireflyIII\TransactionRules\Actions\ClearBudget;
use FireflyIII\TransactionRules\Actions\ClearCategory;
use FireflyIII\TransactionRules\Actions\ClearNotes;
use FireflyIII\TransactionRules\Actions\ConvertToDeposit;
use FireflyIII\TransactionRules\Actions\ConvertToTransfer;
use FireflyIII\TransactionRules\Actions\ConvertToWithdrawal;
use FireflyIII\TransactionRules\Actions\DeleteTransaction;
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
use FireflyIII\TransactionRules\Actions\UpdatePiggybank;
use FireflyIII\User;

/*
 * DO NOT EDIT THIS FILE. IT IS AUTO GENERATED.
 *
 * ANY OPTIONS IN THIS FILE YOU CAN SAFELY EDIT CAN BE FOUND IN THE USER INTERFACE OF FIREFLY III.
 */

return [
    // default values for certain things:
    'configuration'                => [
        'single_user_mode' => true,
        'is_demo_site'     => false,
    ],
    // some feature flags:
    'feature_flags'                => [
        'export'       => true,
        'telemetry'    => false,
        'webhooks'     => false,
        'handle_debts' => true,
    ],
    'version'                      => '5.7.0',
    'api_version'                  => '1.5.6',
    'db_version'                   => 18,

    // generic settings
    'maxUploadSize'                => 1073741824, // 1 GB
    'send_error_message'           => env('SEND_ERROR_MESSAGE', true),
    'site_owner'                   => env('SITE_OWNER', ''),

    // tokens and keys
    'fixer_api_key'                => env('FIXER_API_KEY', ''),
    'mapbox_api_key'               => env('MAPBOX_API_KEY', ''),
    'ipinfo_token'                 => env('IPINFO_TOKEN', ''),
    'static_cron_token'            => envNonEmpty('STATIC_CRON_TOKEN'),

    // flags
    'enable_external_map'          => env('ENABLE_EXTERNAL_MAP', false),
    'disable_frame_header'         => env('DISABLE_FRAME_HEADER', false),
    'disable_csp_header'           => env('DISABLE_CSP_HEADER', false),
    'allow_webhooks'               => env('ALLOW_WEBHOOKS', false),

    // email flags
    'send_registration_mail'       => env('SEND_REGISTRATION_MAIL', true),
    'warn_new_ip'                  => env('SEND_LOGIN_NEW_IP_WARNING', true),
    'send_report_journals'         => envNonEmpty('SEND_REPORT_JOURNALS', true),

    // info for demo site
    'demo_username'                => env('DEMO_USERNAME', ''),
    'demo_password'                => env('DEMO_PASSWORD', ''),
    'tracker_site_id'              => env('TRACKER_SITE_ID', ''),
    'tracker_url'                  => env('TRACKER_URL', ''),

    // authentication settings
    'login_provider'               => envNonEmpty('LOGIN_PROVIDER', 'eloquent'),
    'authentication_guard'         => envNonEmpty('AUTHENTICATION_GUARD', 'web'),
    'custom_logout_url'            => envNonEmpty('CUSTOM_LOGOUT_URL', ''),

    // static config (cannot be changed by user)
    'update_endpoint'              => 'https://version.firefly-iii.org/index.json',
    'update_minimum_age'           => 7,

    // enabled languages
    'languages'                    => [
        // currently enabled languages
        'bg_BG' => ['name_locale' => 'Български', 'name_english' => 'Bulgarian'],
        // 'ca_ES' => ['name_locale' => 'Catalan', 'name_english' => 'Catalan'],
        'cs_CZ' => ['name_locale' => 'Czech', 'name_english' => 'Czech'],
        // 'da_DK' => ['name_locale' => 'Danish', 'name_english' => 'Danish'],
        'de_DE' => ['name_locale' => 'Deutsch', 'name_english' => 'German'],
        'el_GR' => ['name_locale' => 'Ελληνικά', 'name_english' => 'Greek'],
        'en_GB' => ['name_locale' => 'English (GB)', 'name_english' => 'English (GB)'],
        'en_US' => ['name_locale' => 'English (US)', 'name_english' => 'English (US)'],
        'es_ES' => ['name_locale' => 'Español', 'name_english' => 'Spanish'],
        // 'et_EE' => ['name_locale' => 'Estonian', 'name_english' => 'Estonian'],
        // 'fa_IR' => ['name_locale' => 'فارسی', 'name_english' => 'Persian'],
        'fi_FI' => ['name_locale' => 'Suomi', 'name_english' => 'Finnish'],
        'fr_FR' => ['name_locale' => 'Français', 'name_english' => 'French'],
        // 'he_IL' => ['name_locale' => 'Hebrew', 'name_english' => 'Hebrew'],
        'hu_HU' => ['name_locale' => 'Hungarian', 'name_english' => 'Hungarian'],
        // 'id_ID' => ['name_locale' => 'Bahasa Indonesia', 'name_english' => 'Indonesian'],
        // 'is_IS' => ['name_locale' => 'Icelandic', 'name_english' => 'Icelandic'],
        'it_IT' => ['name_locale' => 'Italiano', 'name_english' => 'Italian'],
        'ja_JP' => ['name_locale' => 'Japanese', 'name_english' => 'Japanese'],
        // 'lt_LT' => ['name_locale' => 'Lietuvių', 'name_english' => 'Lithuanian'],
        'nb_NO' => ['name_locale' => 'Norsk', 'name_english' => 'Norwegian'],
        'nl_NL' => ['name_locale' => 'Nederlands', 'name_english' => 'Dutch'],
        'pl_PL' => ['name_locale' => 'Polski', 'name_english' => 'Polish'],
        'pt_BR' => ['name_locale' => 'Português do Brasil', 'name_english' => 'Portuguese (Brazil)'],
        'pt_PT' => ['name_locale' => 'Português', 'name_english' => 'Portuguese'],
        'ro_RO' => ['name_locale' => 'Română', 'name_english' => 'Romanian'],
        'ru_RU' => ['name_locale' => 'Русский', 'name_english' => 'Russian'],
        // 'si_LK' => ['name_locale' => 'සිංහල', 'name_english' => 'Sinhala (Sri Lanka)'],
        'sk_SK' => ['name_locale' => 'Slovenčina', 'name_english' => 'Slovak'],
        // 'sl_SI' => ['name_locale' => 'Slovenian', 'name_english' => 'Slovenian'],
        // 'sr_CS' => ['name_locale' => 'Serbian (Latin)', 'name_english' => 'Serbian (Latin)'],
        'sv_SE' => ['name_locale' => 'Svenska', 'name_english' => 'Swedish'],
        // 'tlh_AA' => ['name_locale' => 'tlhIngan Hol', 'name_english' => 'Klingon'],
        // 'tr_TR' => ['name_locale' => 'Türkçe', 'name_english' => 'Turkish'],
        // 'uk_UA' => ['name_locale' => 'Ukranian', 'name_english' => 'Ukranian'],
        'vi_VN' => ['name_locale' => 'Tiếng Việt', 'name_english' => 'Vietnamese'],
        'zh_TW' => ['name_locale' => 'Chinese Traditional', 'name_english' => 'Chinese Traditional'],
        'zh_CN' => ['name_locale' => 'Chinese Simplified', 'name_english' => 'Chinese Simplified'],
    ],

    // web configuration:
    'trusted_proxies'              => env('TRUSTED_PROXIES', ''),
    'layout'                       => envNonEmpty('FIREFLY_III_LAYOUT', 'v1'),

    // map configuration
    'default_location'             => [
        'longitude'  => env('MAP_DEFAULT_LONG', '5.916667'),
        'latitude'   => env('MAP_DEFAULT_LAT', '51.983333'),
        'zoom_level' => env('MAP_DEFAULT_ZOOM', '6'),
    ],

    // default user-related values
    'list_length'                  => 10, // to be removed if v1 is cancelled.
    'default_preferences'          => [
        'frontPageAccounts'  => [],
        'listPageSize'       => 50,
        'currencyPreference' => 'EUR',
        'language'           => 'en_US',
        'locale'             => 'equal',
    ],
    'default_currency'             => 'EUR',
    'default_language'             => envNonEmpty('DEFAULT_LANGUAGE', 'en_US'),
    'default_locale'               => envNonEmpty('DEFAULT_LOCALE', 'equal'),

    // "value must be in this list" values
    'valid_attachment_models'      => [
        Account::class,
        Bill::class,
        Budget::class,
        Category::class,
        PiggyBank::class,
        Tag::class,
        Transaction::class,
        TransactionJournal::class,
        Recurrence::class,
    ],
    'bill_reminder_periods'        => [90, 30, 14, 7, 0],
    'valid_view_ranges'            => ['1D', '1W', '1M', '3M', '6M', '1Y',],
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
    'accountRoles'                 => ['defaultAsset', 'sharedAsset', 'savingAsset', 'ccAsset', 'cashWalletAsset'],
    'valid_liabilities'            => [AccountType::DEBT, AccountType::LOAN, AccountType::MORTGAGE],
    'ccTypes'                      => ['monthlyFull' => 'Full payment every month',],
    'credit_card_types'            => ['monthlyFull'],

    // "period must be in this list" values
    'bill_periods'                 => ['daily', 'weekly', 'monthly', 'quarterly', 'half-year', 'yearly'],
    'interest_periods'             => ['weekly', 'monthly', 'quarterly', 'half-year', 'yearly'],

    // settings to translate X to Y
    'range_to_repeat_freq'         => [
        '1D'     => 'weekly',
        '1W'     => 'weekly',
        '1M'     => 'monthly',
        '3M'     => 'quarterly',
        '6M'     => 'half-year',
        '1Y'     => 'yearly',
        'custom' => 'custom',
    ],
    'subTitlesByIdentifier'        => [
        'asset'       => 'Asset accounts',
        'expense'     => 'Expense accounts',
        'revenue'     => 'Revenue accounts',
        'cash'        => 'Cash accounts',
        'liabilities' => 'Liabilities',
        'liability'   => 'Liabilities',
    ],
    'subIconsByIdentifier'         => [
        'asset'                  => 'fa-money',
        AccountType::ASSET       => 'fa-money',
        AccountType::DEFAULT     => 'fa-money',
        AccountType::CASH        => 'fa-money',
        'expense'                => 'fa-shopping-cart',
        AccountType::EXPENSE     => 'fa-shopping-cart',
        AccountType::BENEFICIARY => 'fa-shopping-cart',
        'revenue'                => 'fa-download',
        AccountType::REVENUE     => 'fa-download',
        'import'                 => 'fa-download',
        AccountType::IMPORT      => 'fa-download',
        'liabilities'            => 'fa-ticket',
    ],
    'accountTypesByIdentifier'     => [
        'asset'       => [AccountType::DEFAULT, AccountType::ASSET],
        'expense'     => [AccountType::EXPENSE, AccountType::BENEFICIARY],
        'revenue'     => [AccountType::REVENUE],
        'import'      => [AccountType::IMPORT],
        'liabilities' => [AccountType::LOAN, AccountType::DEBT, AccountType::CREDITCARD, AccountType::MORTGAGE],
    ],
    'accountTypeByIdentifier'      => [
        'asset'       => [AccountType::ASSET],
        'expense'     => [AccountType::EXPENSE],
        'revenue'     => [AccountType::REVENUE],
        'opening'     => [AccountType::INITIAL_BALANCE],
        'initial'     => [AccountType::INITIAL_BALANCE],
        'import'      => [AccountType::IMPORT],
        'reconcile'   => [AccountType::RECONCILIATION],
        'loan'        => [AccountType::LOAN],
        'debt'        => [AccountType::DEBT],
        'mortgage'    => [AccountType::MORTGAGE],
        'liabilities' => [AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE, AccountType::CREDITCARD],
        'liability'   => [AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE, AccountType::CREDITCARD],
    ],
    'shortNamesByFullName'         => [
        AccountType::DEFAULT         => 'asset',
        AccountType::ASSET           => 'asset',
        AccountType::IMPORT          => 'import',
        AccountType::EXPENSE         => 'expense',
        AccountType::BENEFICIARY     => 'expense',
        AccountType::REVENUE         => 'revenue',
        AccountType::CASH            => 'cash',
        AccountType::INITIAL_BALANCE => 'initial-balance',
        AccountType::RECONCILIATION  => 'reconciliation',
        AccountType::CREDITCARD      => 'liabilities',
        AccountType::LOAN            => 'liabilities',
        AccountType::DEBT            => 'liabilities',
        AccountType::MORTGAGE        => 'liabilities',
    ],
    'shortLiabilityNameByFullName' => [
        AccountType::CREDITCARD => 'creditcard',
        AccountType::LOAN       => AccountType::LOAN,
        AccountType::DEBT       => AccountType::DEBT,
        AccountType::MORTGAGE   => AccountType::MORTGAGE,
    ],
    'transactionTypesByType'       => [
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
    'transactionIconsByType'       => [
        'expenses'   => 'fa-long-arrow-left',
        'withdrawal' => 'fa-long-arrow-left',
        'revenue'    => 'fa-long-arrow-right',
        'deposit'    => 'fa-long-arrow-right',
        'transfer'   => 'fa-exchange',
        'transfers'  => 'fa-exchange',
    ],

    'bindables'            => [
        // models
        'account'          => Account::class,
        'attachment'       => Attachment::class,
        'availableBudget'  => AvailableBudget::class,
        'bill'             => Bill::class,
        'budget'           => Budget::class,
        'budgetLimit'      => BudgetLimit::class,
        'category'         => Category::class,
        'linkType'         => LinkType::class,
        'transactionType'  => TransactionTypeModel::class,
        'journalLink'      => TransactionJournalLink::class,
        'currency'         => TransactionCurrency::class,
        'objectGroup'      => ObjectGroup::class,
        'piggyBank'        => PiggyBank::class,
        'preference'       => Preference::class,
        'tj'               => TransactionJournal::class,
        'tag'              => Tag::class,
        'recurrence'       => Recurrence::class,
        'rule'             => Rule::class,
        'ruleGroup'        => RuleGroup::class,
        'transactionGroup' => TransactionGroup::class,
        'user'             => User::class,
        'webhook'          => Webhook::class,
        'webhookMessage'   => WebhookMessage::class,
        'webhookAttempt'   => WebhookAttempt::class,

        // strings
        'currency_code'    => CurrencyCode::class,

        // dates
        'start_date'       => Date::class,
        'end_date'         => Date::class,
        'date'             => Date::class,

        // lists
        'accountList'      => AccountList::class,
        'doubleList'       => AccountList::class,
        'budgetList'       => BudgetList::class,
        'journalList'      => JournalList::class,
        'categoryList'     => CategoryList::class,
        'tagList'          => TagList::class,

        // others
        'fromCurrencyCode' => CurrencyCode::class,
        'toCurrencyCode'   => CurrencyCode::class,
        'cliToken'         => CLIToken::class,
        'tagOrId'          => TagOrId::class,
        'dynamicConfigKey' => DynamicConfigKey::class,
        'eitherConfigKey'  => EitherConfigKey::class,

    ],
    'rule-actions'         => [
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
        'update_piggy'            => UpdatePiggybank::class,
        'delete_transaction'      => DeleteTransaction::class,
    ],
    'context-rule-actions' => [
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
        //        'convert_withdrawal',
        //        'convert_deposit',
        'convert_transfer',
    ],

    'test-triggers'             => [
        'limit' => 10,
        'range' => 200,
    ],


    // expected source types for each transaction type, in order of preference.
    'expected_source_types'     => [
        'source'      => [
            TransactionTypeModel::WITHDRAWAL       => [AccountType::ASSET, AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
            TransactionTypeModel::DEPOSIT          => [AccountType::REVENUE, AccountType::CASH, AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
            TransactionTypeModel::TRANSFER         => [AccountType::ASSET, AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
            TransactionTypeModel::OPENING_BALANCE  => [AccountType::INITIAL_BALANCE, AccountType::ASSET, AccountType::LOAN, AccountType::DEBT,
                                                       AccountType::MORTGAGE,],
            TransactionTypeModel::RECONCILIATION   => [AccountType::RECONCILIATION, AccountType::ASSET],
            TransactionTypeModel::LIABILITY_CREDIT => [AccountType::LIABILITY_CREDIT, AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
            // in case no transaction type is known yet, it could be anything.
            'none'                                 => [
                AccountType::ASSET,
                AccountType::EXPENSE,
                AccountType::REVENUE,
                AccountType::LOAN,
                AccountType::DEBT,
                AccountType::MORTGAGE,
            ],
        ],
        'destination' => [
            TransactionTypeModel::WITHDRAWAL       => [AccountType::EXPENSE, AccountType::CASH, AccountType::LOAN, AccountType::DEBT,
                                                       AccountType::MORTGAGE,],
            TransactionTypeModel::DEPOSIT          => [AccountType::ASSET, AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
            TransactionTypeModel::TRANSFER         => [AccountType::ASSET, AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
            TransactionTypeModel::OPENING_BALANCE  => [AccountType::INITIAL_BALANCE, AccountType::ASSET, AccountType::LOAN, AccountType::DEBT,
                                                       AccountType::MORTGAGE,],
            TransactionTypeModel::RECONCILIATION   => [AccountType::RECONCILIATION, AccountType::ASSET],
            TransactionTypeModel::LIABILITY_CREDIT => [AccountType::LIABILITY_CREDIT, AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
        ],
    ],
    'allowed_opposing_types'    => [
        'source'      => [
            AccountType::ASSET            => [AccountType::ASSET, AccountType::CASH, AccountType::DEBT, AccountType::EXPENSE, AccountType::INITIAL_BALANCE,
                                              AccountType::LOAN, AccountType::RECONCILIATION, AccountType::MORTGAGE],
            AccountType::CASH             => [AccountType::ASSET],
            AccountType::DEBT             => [AccountType::ASSET, AccountType::DEBT, AccountType::EXPENSE, AccountType::INITIAL_BALANCE, AccountType::LOAN,
                                              AccountType::MORTGAGE, AccountType::LIABILITY_CREDIT],
            AccountType::EXPENSE          => [], // is not allowed as a source.
            AccountType::INITIAL_BALANCE  => [AccountType::ASSET, AccountType::DEBT, AccountType::LOAN, AccountType::MORTGAGE],
            AccountType::LOAN             => [AccountType::ASSET, AccountType::DEBT, AccountType::EXPENSE, AccountType::INITIAL_BALANCE, AccountType::LOAN,
                                              AccountType::MORTGAGE, AccountType::LIABILITY_CREDIT],
            AccountType::MORTGAGE         => [AccountType::ASSET, AccountType::DEBT, AccountType::EXPENSE, AccountType::INITIAL_BALANCE, AccountType::LOAN,
                                              AccountType::MORTGAGE, AccountType::LIABILITY_CREDIT],
            AccountType::RECONCILIATION   => [AccountType::ASSET],
            AccountType::REVENUE          => [AccountType::ASSET, AccountType::DEBT, AccountType::LOAN, AccountType::MORTGAGE],
            AccountType::LIABILITY_CREDIT => [AccountType::DEBT, AccountType::LOAN, AccountType::MORTGAGE],

        ],
        'destination' => [
            AccountType::ASSET            => [AccountType::ASSET, AccountType::CASH, AccountType::DEBT, AccountType::INITIAL_BALANCE, AccountType::LOAN,
                                              AccountType::MORTGAGE, AccountType::RECONCILIATION, AccountType::REVENUE,],
            AccountType::CASH             => [AccountType::ASSET],
            AccountType::DEBT             => [AccountType::ASSET, AccountType::DEBT, AccountType::INITIAL_BALANCE, AccountType::LOAN, AccountType::MORTGAGE,
                                              AccountType::REVENUE,],
            AccountType::EXPENSE          => [AccountType::ASSET, AccountType::DEBT, AccountType::LOAN, AccountType::MORTGAGE],
            AccountType::INITIAL_BALANCE  => [AccountType::ASSET, AccountType::DEBT, AccountType::LOAN, AccountType::MORTGAGE],
            AccountType::LOAN             => [AccountType::ASSET, AccountType::DEBT, AccountType::INITIAL_BALANCE, AccountType::LOAN, AccountType::MORTGAGE,
                                              AccountType::REVENUE,],
            AccountType::MORTGAGE         => [AccountType::ASSET, AccountType::DEBT, AccountType::INITIAL_BALANCE, AccountType::LOAN, AccountType::MORTGAGE,
                                              AccountType::REVENUE,],
            AccountType::RECONCILIATION   => [AccountType::ASSET],
            AccountType::REVENUE          => [], // is not allowed as a destination
            AccountType::LIABILITY_CREDIT => [],// is not allowed as a destination
        ],
    ],
    // depending on the account type, return the allowed transaction types:
    'allowed_transaction_types' => [
        'source'      => [
            AccountType::ASSET            => [TransactionTypeModel::WITHDRAWAL, TransactionTypeModel::TRANSFER, TransactionTypeModel::OPENING_BALANCE,
                                              TransactionTypeModel::RECONCILIATION,],
            AccountType::EXPENSE          => [], // is not allowed as a source.
            AccountType::REVENUE          => [TransactionTypeModel::DEPOSIT],
            AccountType::LOAN             => [TransactionTypeModel::WITHDRAWAL, TransactionTypeModel::DEPOSIT, TransactionTypeModel::TRANSFER,
                                              TransactionTypeModel::OPENING_BALANCE, TransactionTypeModel::LIABILITY_CREDIT],
            AccountType::DEBT             => [TransactionTypeModel::WITHDRAWAL, TransactionTypeModel::DEPOSIT, TransactionTypeModel::TRANSFER,
                                              TransactionTypeModel::OPENING_BALANCE, TransactionTypeModel::LIABILITY_CREDIT],
            AccountType::MORTGAGE         => [TransactionTypeModel::WITHDRAWAL, TransactionTypeModel::DEPOSIT, TransactionTypeModel::TRANSFER,
                                              TransactionTypeModel::OPENING_BALANCE, TransactionTypeModel::LIABILITY_CREDIT],
            AccountType::INITIAL_BALANCE  => [TransactionTypeModel::OPENING_BALANCE],
            AccountType::RECONCILIATION   => [TransactionTypeModel::RECONCILIATION],
            AccountType::LIABILITY_CREDIT => [TransactionTypeModel::LIABILITY_CREDIT],
        ],
        'destination' => [
            AccountType::ASSET            => [TransactionTypeModel::DEPOSIT, TransactionTypeModel::TRANSFER, TransactionTypeModel::OPENING_BALANCE,
                                              TransactionTypeModel::RECONCILIATION,],
            AccountType::EXPENSE          => [TransactionTypeModel::WITHDRAWAL],
            AccountType::REVENUE          => [], // is not allowed as destination.
            AccountType::LOAN             => [TransactionTypeModel::WITHDRAWAL, TransactionTypeModel::DEPOSIT, TransactionTypeModel::TRANSFER,
                                              TransactionTypeModel::OPENING_BALANCE,],
            AccountType::DEBT             => [TransactionTypeModel::WITHDRAWAL, TransactionTypeModel::DEPOSIT, TransactionTypeModel::TRANSFER,
                                              TransactionTypeModel::OPENING_BALANCE,],
            AccountType::MORTGAGE         => [TransactionTypeModel::WITHDRAWAL, TransactionTypeModel::DEPOSIT, TransactionTypeModel::TRANSFER,
                                              TransactionTypeModel::OPENING_BALANCE,],
            AccountType::INITIAL_BALANCE  => [TransactionTypeModel::OPENING_BALANCE],
            AccountType::RECONCILIATION   => [TransactionTypeModel::RECONCILIATION],
            AccountType::LIABILITY_CREDIT => [], // is not allowed as a destination
        ],

    ],

    // having the source + dest will tell you the transaction type.
    'account_to_transaction'    => [
        AccountType::ASSET            => [
            AccountType::ASSET           => TransactionTypeModel::TRANSFER,
            AccountType::CASH            => TransactionTypeModel::WITHDRAWAL,
            AccountType::DEBT            => TransactionTypeModel::WITHDRAWAL,
            AccountType::EXPENSE         => TransactionTypeModel::WITHDRAWAL,
            AccountType::INITIAL_BALANCE => TransactionTypeModel::OPENING_BALANCE,
            AccountType::LOAN            => TransactionTypeModel::WITHDRAWAL,
            AccountType::MORTGAGE        => TransactionTypeModel::WITHDRAWAL,
            AccountType::RECONCILIATION  => TransactionTypeModel::RECONCILIATION,
        ],
        AccountType::CASH             => [
            AccountType::ASSET => TransactionTypeModel::DEPOSIT,
        ],
        AccountType::DEBT             => [
            AccountType::ASSET           => TransactionTypeModel::DEPOSIT,
            AccountType::DEBT            => TransactionTypeModel::TRANSFER,
            AccountType::EXPENSE         => TransactionTypeModel::WITHDRAWAL,
            AccountType::INITIAL_BALANCE => TransactionTypeModel::OPENING_BALANCE,
            AccountType::LOAN            => TransactionTypeModel::TRANSFER,
            AccountType::MORTGAGE        => TransactionTypeModel::TRANSFER,
        ],
        AccountType::INITIAL_BALANCE  => [
            AccountType::ASSET    => TransactionTypeModel::OPENING_BALANCE,
            AccountType::DEBT     => TransactionTypeModel::OPENING_BALANCE,
            AccountType::LOAN     => TransactionTypeModel::OPENING_BALANCE,
            AccountType::MORTGAGE => TransactionTypeModel::OPENING_BALANCE,
        ],
        AccountType::LOAN             => [
            AccountType::ASSET           => TransactionTypeModel::DEPOSIT,
            AccountType::DEBT            => TransactionTypeModel::TRANSFER,
            AccountType::EXPENSE         => TransactionTypeModel::WITHDRAWAL,
            AccountType::INITIAL_BALANCE => TransactionTypeModel::OPENING_BALANCE,
            AccountType::LOAN            => TransactionTypeModel::TRANSFER,
            AccountType::MORTGAGE        => TransactionTypeModel::TRANSFER,
        ],
        AccountType::MORTGAGE         => [
            AccountType::ASSET           => TransactionTypeModel::DEPOSIT,
            AccountType::DEBT            => TransactionTypeModel::TRANSFER,
            AccountType::EXPENSE         => TransactionTypeModel::WITHDRAWAL,
            AccountType::INITIAL_BALANCE => TransactionTypeModel::OPENING_BALANCE,
            AccountType::LOAN            => TransactionTypeModel::TRANSFER,
            AccountType::MORTGAGE        => TransactionTypeModel::TRANSFER,
        ],
        AccountType::RECONCILIATION   => [
            AccountType::ASSET => TransactionTypeModel::RECONCILIATION,
        ],
        AccountType::REVENUE          => [
            AccountType::ASSET    => TransactionTypeModel::DEPOSIT,
            AccountType::DEBT     => TransactionTypeModel::DEPOSIT,
            AccountType::LOAN     => TransactionTypeModel::DEPOSIT,
            AccountType::MORTGAGE => TransactionTypeModel::DEPOSIT,
        ],
        AccountType::LIABILITY_CREDIT => [
            AccountType::DEBT     => TransactionTypeModel::LIABILITY_CREDIT,
            AccountType::LOAN     => TransactionTypeModel::LIABILITY_CREDIT,
            AccountType::MORTGAGE => TransactionTypeModel::LIABILITY_CREDIT,
        ],
        // AccountType::EXPENSE unlisted because it cant be a source
    ],

    // allowed source -> destination accounts.
    'source_dests'              => [
        TransactionTypeModel::WITHDRAWAL       => [
            AccountType::ASSET    => [AccountType::EXPENSE, AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE, AccountType::CASH],
            AccountType::LOAN     => [AccountType::EXPENSE, AccountType::CASH],
            AccountType::DEBT     => [AccountType::EXPENSE, AccountType::CASH],
            AccountType::MORTGAGE => [AccountType::EXPENSE, AccountType::CASH],
        ],
        TransactionTypeModel::DEPOSIT          => [
            AccountType::REVENUE  => [AccountType::ASSET, AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
            AccountType::CASH     => [AccountType::ASSET, AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
            AccountType::LOAN     => [AccountType::ASSET],
            AccountType::DEBT     => [AccountType::ASSET],
            AccountType::MORTGAGE => [AccountType::ASSET],
        ],
        TransactionTypeModel::TRANSFER         => [
            AccountType::ASSET    => [AccountType::ASSET],
            AccountType::LOAN     => [AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
            AccountType::DEBT     => [AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
            AccountType::MORTGAGE => [AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
        ],
        TransactionTypeModel::OPENING_BALANCE  => [
            AccountType::ASSET           => [AccountType::INITIAL_BALANCE],
            AccountType::LOAN            => [AccountType::INITIAL_BALANCE],
            AccountType::DEBT            => [AccountType::INITIAL_BALANCE],
            AccountType::MORTGAGE        => [AccountType::INITIAL_BALANCE],
            AccountType::INITIAL_BALANCE => [AccountType::ASSET, AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
        ],
        TransactionTypeModel::RECONCILIATION   => [
            AccountType::RECONCILIATION => [AccountType::ASSET],
            AccountType::ASSET          => [AccountType::RECONCILIATION],
        ],
        TransactionTypeModel::LIABILITY_CREDIT => [
            AccountType::LOAN     => [AccountType::LIABILITY_CREDIT],
            AccountType::DEBT     => [AccountType::LIABILITY_CREDIT],
            AccountType::MORTGAGE => [AccountType::LIABILITY_CREDIT],
        ],
    ],
    // if you add fields to this array, dont forget to update the export routine (ExportDataGenerator).
    'journal_meta_fields'       => [
        // sepa
        'sepa_cc', 'sepa_ct_op', 'sepa_ct_id',
        'sepa_db', 'sepa_country', 'sepa_ep',
        'sepa_ci', 'sepa_batch_id', 'external_url',

        // dates
        'interest_date', 'book_date', 'process_date',
        'due_date', 'payment_date', 'invoice_date',

        // others
        'recurrence_id', 'internal_reference', 'bunq_payment_id',
        'import_hash', 'import_hash_v2', 'external_id', 'original_source',

        // recurring transactions
        'recurrence_total', 'recurrence_count',
    ],
    'webhooks'                  => [
        'max_attempts' => env('WEBHOOK_MAX_ATTEMPTS', 3),
        'triggers'     => [
            Webhook::TRIGGER_STORE_TRANSACTION   => 'TRIGGER_STORE_TRANSACTION',
            Webhook::TRIGGER_UPDATE_TRANSACTION  => 'TRIGGER_UPDATE_TRANSACTION',
            Webhook::TRIGGER_DESTROY_TRANSACTION => 'TRIGGER_DESTROY_TRANSACTION',
        ],
        'responses'    => [
            Webhook::RESPONSE_TRANSACTIONS => 'RESPONSE_TRANSACTIONS',
            Webhook::RESPONSE_ACCOUNTS     => 'RESPONSE_ACCOUNTS',
            Webhook::RESPONSE_NONE         => 'RESPONSE_NONE',
        ],
        'deliveries'   => [
            Webhook::DELIVERY_JSON => 'DELIVERY_JSON',
        ],
    ],
    'can_have_virtual_amounts'  => [AccountType::ASSET],
    'can_have_opening_balance'  => [AccountType::ASSET, AccountType::DEBT, AccountType::LOAN, AccountType::MORTGAGE, AccountType::CREDITCARD],
    'valid_asset_fields'        => ['account_role', 'account_number', 'currency_id', 'BIC', 'include_net_worth'],
    'valid_cc_fields'           => ['account_role', 'cc_monthly_payment_date', 'cc_type', 'account_number', 'currency_id', 'BIC', 'include_net_worth'],
    'valid_account_fields'      => ['account_number', 'currency_id', 'BIC', 'interest', 'interest_period', 'include_net_worth', 'liability_direction'],

    // only used in v1
    'allowed_sort_parameters'   => ['order', 'name', 'iban'],
];
