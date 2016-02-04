<?php
return [

    // new user:
    'bank_name'                   => 'Nome do banco',
    'bank_balance'                => 'Saldo',
    'savings_balance'             => 'Salda da Poupança',
    'credit_card_limit'           => 'Limite do Cartão de Crédito',
    'automatch'                   => 'Match automatically',
    'skip'                        => 'Pular',
    'name'                        => 'Nome',
    'active'                      => 'Ativar',
    'amount_min'                  => 'Valor Mínimo',
    'amount_max'                  => 'Valor Máximo',
    'match'                       => 'Corresponde em',
    'repeat_freq'                 => 'Repetições',
    'account_from_id'             => 'da conta',
    'account_to_id'               => 'para conta',
    'account_id'                  => 'Asset account',
    'budget_id'                   => 'Orçamento',
    'openingBalance'              => 'Saldo inicial',
    'tagMode'                     => 'Tag mode',
    'tagPosition'                 => 'Tag location',
    'virtualBalance'              => 'Saldo virtual',
    'longitude_latitude'          => 'Localização',
    'targetamount'                => 'Valor alvo',
    'accountRole'                 => 'Account role',
    'openingBalanceDate'          => 'Data do Saldo inicial',
    'ccType'                      => 'Plano de pagamento do Cartão de Crédito',
    'ccMonthlyPaymentDate'        => 'Data do pagamento mensal do Cartão de Crédito',
    'piggy_bank_id'               => 'Cofrinho',
    'returnHere'                  => 'Retornar aqui',
    'returnHereExplanation'       => 'Depois de armazenar, retorne aqui para criar outro.',
    'returnHereUpdateExplanation' => 'Depois da atualização, retorne aqui',
    'description'                 => 'Descrição',
    'expense_account'             => 'Conta de Despesa',
    'revenue_account'             => 'Conta de Receita',
    'amount'                      => 'Valor',
    'date'                        => 'Data',
    'category'                    => 'Categoria',
    'tags'                        => 'Etiquetas',
    'deletePermanently'           => 'Apagar permanentemente',
    'cancel'                      => 'Cancelar',
    'targetdate'                  => 'Data Alvo',
    'tag'                         => 'Etiqueta',
    'under'                       => 'Debaixo',
    'symbol'                      => 'Símbolo',
    'code'                        => 'Código',
    'iban'                        => 'IBAN',
    'csv'                         => 'Arquivo CSV',
    'has_headers'                 => 'Cabeçalhos',
    'date_format'                 => 'Formato da Data',
    'csv_config'                  => 'Importar CSV de configuração',
    'specifix'                    => 'Bank- or file specific fixes',
    'csv_import_account'          => 'Default import account',
    'csv_delimiter'               => 'CSV field delimiter',
    'attachments[]'               => 'Anexos',
    'store_new_withdrawal'        => 'Store new withdrawal',
    'store_new_deposit'           => 'Store new deposit',
    'store_new_transfer'          => 'Store new transfer',
    'add_new_withdrawal'          => 'Add a new withdrawal',
    'add_new_deposit'             => 'Add a new deposit',
    'add_new_transfer'            => 'Add a new transfer',
    'noPiggybank'                 => '(no piggy bank)',
    'noBudget'                    => '(sem orçamento)',
    'title'                       => 'Título',
    'notes'                       => 'Notas',
    'filename'                    => 'Nome do arquivo',
    'mime'                        => 'Mime type',
    'size'                        => 'Tamanho',
    'trigger'                     => 'Trigger',
    'stop_processing'             => 'Stop processing',

    'csv_comma'     => 'A comma (,)',
    'csv_semicolon' => 'A semicolon (;)',
    'csv_tab'       => 'A tab (invisible)',


    'delete_account'    => 'Apagar conta ":name"',
    'delete_bill'       => 'Apagar fatura ":name"',
    'delete_budget'     => 'Delete budget ":name"',
    'delete_category'   => 'Delete category ":name"',
    'delete_currency'   => 'Delete currency ":name"',
    'delete_journal'    => 'Delete transaction with description ":description"',
    'delete_attachment' => 'Apagar anexo ":name"',
    'delete_rule'       => 'Delete rule ":title"',
    'delete_rule_group' => 'Delete rule group ":title"',

    'attachment_areYouSure' => 'Are you sure you want to delete the attachment named ":name"?',
    'account_areYouSure'    => 'Are you sure you want to delete the account named ":name"?',
    'bill_areYouSure'       => 'Você tem certeza que quer apagar a fatura ":name"?',
    'rule_areYouSure'       => 'Are you sure you want to delete the rule titled ":title"?',
    'ruleGroup_areYouSure'  => 'Are you sure you want to delete the rule group titled ":title"?',
    'budget_areYouSure'     => 'Are you sure you want to delete the budget named ":name"?',
    'category_areYouSure'   => 'Are you sure you want to delete the category named ":name"?',
    'currency_areYouSure'   => 'Are you sure you want to delete the currency named ":name"?',
    'piggyBank_areYouSure'  => 'Are you sure you want to delete the piggy bank named ":name"?',
    'journal_areYouSure'    => 'Are you sure you want to delete the transaction described ":description"?',
    'tag_areYouSure'        => 'Você tem certeza que quer apagar a tag ":tag"?',

    'permDeleteWarning'          => 'Deleting stuff from Firely is permanent and cannot be undone.',
    'also_delete_transactions'   => 'The only transaction connected to this account will be deleted as well.|All :count transactions connected to this account will be deleted as well.',
    'also_delete_rules'          => 'The only rule connected to this rule group will be deleted as well.|All :count rules connected to this rule group will be deleted as well.',
    'also_delete_piggyBanks'     => 'The only piggy bank connected to this account will be deleted as well.|All :count piggy bank connected to this account will be deleted as well.',
    'bill_keep_transactions'     => 'The only transaction connected to this bill will not be deleted.|All :count transactions connected to this bill will spared deletion.',
    'budget_keep_transactions'   => 'The only transaction connected to this budget will not be deleted.|All :count transactions connected to this budget will spared deletion.',
    'category_keep_transactions' => 'The only transaction connected to this category will not be deleted.|All :count transactions connected to this category will spared deletion.',
    'tag_keep_transactions'      => 'The only transaction connected to this tag will not be deleted.|All :count transactions connected to this tag will spared deletion.',
];
