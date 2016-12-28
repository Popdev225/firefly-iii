<?php
/**
 * csv.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

declare(strict_types = 1);

return [

    'import_configure_title' => 'Настройки импорта',
    'import_configure_intro' => 'Есть несколько вариантов для импорта CSV. Пожалуйста, укажите, содержит ли CSV-файл заголовки в первом столбце, и каков формат даты в вашем поле даты. Возможно, придется немного поэкспериментировать. Разделитель полей обычно «,», но также может быть «;». Внимательно проверьте это.',
    'import_configure_form'  => 'Основные параметры импорта CSV',
    'header_help'            => 'Проверьте, если первая строка CSV файла - это заголовки столбцов',
    'date_help'              => 'Формат даты и времени в CSV файле. Следуйте формату, как показывает <a href="https://secure.php.net/manual/en/datetime.createfromformat.php#refsect1-datetime.createfromformat-parameters"> на этой </a> странице. По умолчанию будет анализироваться даты, которые выглядят следующим образом: :dateExample.',
    'delimiter_help'         => 'Выберите разделитель полей, который используется в вашем файле. Если не уверены, запятая - самый безопасный вариант.',
    'import_account_help'    => 'If your CSV file does NOT contain information about your asset account(s), use this dropdown to select to which account the transactions in the CSV belong to.',
    'upload_not_writeable'   => 'The grey box contains a file path. It should be writeable. Please make sure it is.',

    // roles
    'column_roles_title'     => 'Define column roles',
    'column_roles_table'     => 'Table',
    'column_name'            => 'Name of column',
    'column_example'         => 'Column example data',
    'column_role'            => 'Column data meaning',
    'do_map_value'           => 'Map these values',
    'column'                 => 'Column',
    'no_example_data'        => 'No example data available',
    'store_column_roles'     => 'Continue import',
    'do_not_map'             => '(do not map)',
    'map_title'              => 'Connect import data to Firefly III data',
    'map_text'               => 'In the following tables, the left value shows you information found in your uploaded CSV file. It is your task to map this value, if possible, to a value already present in your database. Firefly will stick to this mapping. If there is no value to map to, or you do not wish to map the specific value, select nothing.',

    'field_value'          => 'Field value',
    'field_mapped_to'      => 'Mapped to',
    'store_column_mapping' => 'Store mapping',

    // map things.


    'column__ignore'                => '(ignore this column)',
    'column_account-iban'           => 'Asset account (IBAN)',
    'column_account-id'             => 'Asset account  ID (matching Firefly)',
    'column_account-name'           => 'Asset account (name)',
    'column_amount'                 => 'Amount',
    'column_amount-comma-separated' => 'Amount (comma as decimal separator)',
    'column_bill-id'                => 'Bill ID (matching Firefly)',
    'column_bill-name'              => 'Bill name',
    'column_budget-id'              => 'Budget ID (matching Firefly)',
    'column_budget-name'            => 'Budget name',
    'column_category-id'            => 'Category ID (matching Firefly)',
    'column_category-name'          => 'Category name',
    'column_currency-code'          => 'Currency code (ISO 4217)',
    'column_currency-id'            => 'Currency ID (matching Firefly)',
    'column_currency-name'          => 'Currency name (matching Firefly)',
    'column_currency-symbol'        => 'Currency symbol (matching Firefly)',
    'column_date-interest'          => 'Interest calculation date',
    'column_date-book'              => 'Transaction booking date',
    'column_date-process'           => 'Transaction process date',
    'column_date-transaction'       => 'Date',
    'column_description'            => 'Description',
    'column_opposing-iban'          => 'Opposing account (IBAN)',
    'column_opposing-id'            => 'Opposing account ID (matching Firefly)',
    'column_external-id'            => 'External ID',
    'column_opposing-name'          => 'Opposing account (name)',
    'column_rabo-debet-credit'      => 'Rabobank specific debet/credit indicator',
    'column_ing-debet-credit'       => 'ING specific debet/credit indicator',
    'column_sepa-ct-id'             => 'SEPA Credit Transfer end-to-end ID',
    'column_sepa-ct-op'             => 'SEPA Credit Transfer opposing account',
    'column_sepa-db'                => 'SEPA Direct Debet',
    'column_tags-comma'             => 'Tags (comma separated)',
    'column_tags-space'             => 'Tags (space separated)',
    'column_account-number'         => 'Asset account (account number)',
    'column_opposing-number'        => 'Opposing account (account number)',
];