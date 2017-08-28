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
    'bank_name'                      => 'Banco',
    'bank_balance'                   => 'Saldo',
    'savings_balance'                => 'Salgo de ahorro',
    'credit_card_limit'              => 'Límite de la tarjeta de crédito',
    'automatch'                      => 'Coinciden automáticamente',
    'skip'                           => 'Saltar',
    'name'                           => 'Nombre',
    'active'                         => 'Activo',
    'amount_min'                     => 'Importe mínimo',
    'amount_max'                     => 'Importe máximo',
    'match'                          => 'Matches on',
    'repeat_freq'                    => 'Repetición',
    'journal_currency_id'            => 'Divisa',
    'currency_id'                    => 'Divisa',
    'attachments'                    => 'Adjuntos',
    'journal_amount'                 => 'Importe',
    'journal_asset_source_account'   => 'Asset account (source)',
    'journal_source_account_name'    => 'Revenue account (source)',
    'journal_source_account_id'      => 'Asset account (source)',
    'BIC'                            => 'BIC',
    'verify_password'                => 'Verificar la seguridad de contraseña',
    'account_from_id'                => 'Cuenta origen',
    'account_to_id'                  => 'Cuenta destino',
    'source_account'                 => 'Cuenta origen',
    'destination_account'            => 'Cuenta destino',
    'journal_destination_account_id' => 'Asset account (destination)',
    'asset_destination_account'      => 'Asset account (destination)',
    'asset_source_account'           => 'Asset account (source)',
    'journal_description'            => 'Descripción',
    'note'                           => 'Notas',
    'split_journal'                  => 'Split this transaction',
    'split_journal_explanation'      => 'Split this transaction in multiple parts',
    'currency'                       => 'Divisa',
    'account_id'                     => 'Asset account',
    'budget_id'                      => 'Presupuesto',
    'openingBalance'                 => 'Saldo inicial',
    'tagMode'                        => 'Tag mode',
    'tagPosition'                    => 'Tag location',
    'virtualBalance'                 => 'Saldo virtual',
    'longitude_latitude'             => 'Ubicación',
    'targetamount'                   => 'Cantidad objetivo',
    'accountRole'                    => 'Tipo de cuenta',
    'openingBalanceDate'             => 'Fecha del saldo inicial',
    'ccType'                         => 'Credit card payment plan',
    'ccMonthlyPaymentDate'           => 'Credit card monthly payment date',
    'piggy_bank_id'                  => 'Piggy bank',
    'returnHere'                     => 'Return here',
    'returnHereExplanation'          => 'After storing, return here to create another one.',
    'returnHereUpdateExplanation'    => 'After updating, return here.',
    'description'                    => 'Descripción',
    'expense_account'                => 'Cuenta de gastos',
    'revenue_account'                => 'Cuenta de ingresos',
    'decimal_places'                 => 'Lugares decimales',
    'exchange_rate_instruction'      => 'Monedas extranjeras',
    'exchanged_amount'               => 'Exchanged amount',
    'source_amount'                  => 'Importe (origen)',
    'destination_amount'             => 'Importe (destino)',
    'native_amount'                  => 'Native amount',

    'revenue_account_source'      => 'Revenue account (source)',
    'source_account_asset'        => 'Source account (asset account)',
    'destination_account_expense' => 'Destination account (expense account)',
    'destination_account_asset'   => 'Destination account (asset account)',
    'source_account_revenue'      => 'Source account (revenue account)',
    'type'                        => 'Tipo',
    'convert_Withdrawal'          => 'Convert withdrawal',
    'convert_Deposit'             => 'Convertir depósito',
    'convert_Transfer'            => 'Convertir transferencia',


    'amount'                     => 'Importe',
    'date'                       => 'Fecha',
    'interest_date'              => 'Fecha de interés',
    'book_date'                  => 'Book date',
    'process_date'               => 'Fecha de procesamiento',
    'category'                   => 'Categoría',
    'tags'                       => 'Etiquetas',
    'deletePermanently'          => 'Borrar permanentemente',
    'cancel'                     => 'Cancelar',
    'targetdate'                 => 'Target date',
    'tag'                        => 'Etiqueta',
    'under'                      => 'Under',
    'symbol'                     => 'Símbolo',
    'code'                       => 'Código',
    'iban'                       => 'IBAN',
    'accountNumber'              => 'Número de cuenta',
    'has_headers'                => 'Encabezados',
    'date_format'                => 'Formato de fecha',
    'specifix'                   => 'Bank- or file specific fixes',
    'attachments[]'              => 'Adjuntos',
    'store_new_withdrawal'       => 'Store new withdrawal',
    'store_new_deposit'          => 'Store new deposit',
    'store_new_transfer'         => 'Store new transfer',
    'add_new_withdrawal'         => 'Add a new withdrawal',
    'add_new_deposit'            => 'Add a new deposit',
    'add_new_transfer'           => 'Add a new transfer',
    'noPiggybank'                => '(no piggy bank)',
    'title'                      => 'Título',
    'notes'                      => 'Notas',
    'filename'                   => 'Nombre de fichero',
    'mime'                       => 'Tipo Mime',
    'size'                       => 'Tamaño',
    'trigger'                    => 'Disparador',
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
    'delete_currency'            => 'Eliminar divisa ":name"',
    'delete_journal'             => 'Eliminar la transacción con descripción ":description"',
    'delete_attachment'          => 'Eliminar adjunto ":name"',
    'delete_rule'                => 'Eliminar regla ":title"',
    'delete_rule_group'          => 'Eliminar grupo de reglas ":title"',
    'delete_link_type'           => 'Eliminar tipo de enlace ":name"',
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
    'journal_link_areYouSure'    => 'Are you sure you want to delete the link between <a href=":source_link">:source</a> and <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'        => 'Are you sure you want to delete the link type ":name" (":inward" / ":outward")?',
    'permDeleteWarning'          => 'Deleting stuff from Firely is permanent and cannot be undone.',
    'mass_make_selection'        => 'You can still prevent items from being deleted by removing the checkbox.',
    'delete_all_permanently'     => 'Delete selected permanently',
    'update_all_journals'        => 'Update these transactions',
    'also_delete_transactions'   => 'The only transaction connected to this account will be deleted as well.|All :count transactions connected to this account will be deleted as well.',
    'also_delete_connections'    => 'The only transaction linked with this link type will lose this connection.|All :count transactions linked with this link type will lose their connection.',
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