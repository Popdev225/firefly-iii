<?php

/**
 * form.php
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

// Ignore this comment

declare(strict_types=1);

return [
    // new user:
    'bank_name'                   => 'Nome do banco',
    'bank_balance'                => 'Saldo',
    'savings_balance'             => 'Saldo nas poupancas',
    'credit_card_limit'           => 'Limite do cartao de credito',
    'automatch'                   => 'Corresponder automaticamente',
    'skip'                        => 'Pular',
    'enabled'                     => 'Activo',
    'name'                        => 'Nome',
    'active'                      => 'Activo',
    'amount_min'                  => 'Montante minimo',
    'amount_max'                  => 'Montante maximo',
    'match'                       => 'Corresponde em',
    'strict'                      => 'Modo restricto',
    'repeat_freq'                 => 'Repete',
    'object_group'                => 'Grupo',
    'location'                    => 'Localização',
    'update_channel'              => 'Meios de actualização',
    'currency_id'                 => 'Divisa',
    'transaction_currency_id'     => 'Divisa',
    'auto_budget_currency_id'     => 'Moeda',
    'external_ip'                 => 'IP externo do teu servidor',
    'attachments'                 => 'Anexos',
    'BIC'                         => 'BIC',
    'verify_password'             => 'Verificar a seguranca da password',
    'source_account'              => 'Conta de origem',
    'destination_account'         => 'Conta de destino',
    'asset_destination_account'   => 'Conta de destino',
    'include_net_worth'           => 'Incluir no patrimonio liquido',
    'asset_source_account'        => 'Conta de origem',
    'journal_description'         => 'Descricao',
    'note'                        => 'Notas',
    'currency'                    => 'Divisa',
    'account_id'                  => 'Conta de activos',
    'budget_id'                   => 'Orcamento',
    'bill_id'                     => 'Factura',
    'opening_balance'             => 'Saldo inicial',
    'tagMode'                     => 'Modo da etiqueta',
    'virtual_balance'             => 'Saldo virtual',

    // Ignore this comment

    'targetamount'                => 'Montante alvo',
    'account_role'                => 'Tipo de conta',
    'opening_balance_date'        => 'Data do saldo inicial',
    'cc_type'                     => 'Plano de pagamento do cartão de crédito',
    'cc_monthly_payment_date'     => 'Data de pagamento mensal do cartão de crédito',
    'piggy_bank_id'               => 'Mealheiro',
    'returnHere'                  => 'Voltar aqui',
    'returnHereExplanation'       => 'Depois de inserir, voltar aqui para criar outro.',
    'returnHereUpdateExplanation' => 'Depois de actualizar, voltar aqui.',
    'description'                 => 'Descricao',
    'expense_account'             => 'Conta de despesas',
    'revenue_account'             => 'Conta de receitas',
    'decimal_places'              => 'Casas decimais',
    'destination_amount'          => 'Montante (destino)',
    'new_email_address'           => 'Novo email',
    'verification'                => 'Verificacao',
    'api_key'                     => 'Chave API',
    'remember_me'                 => 'Lembrar-me',
    'liability_type_id'           => 'Tipo de responsabilidade',
    'liability_type'              => 'Tipo de responsabilidade',
    'interest'                    => 'Juro',
    'interest_period'             => 'Periodo de juros',
    'extension_date'              => 'Data da extensão',
    'type'                        => 'Tipo',
    'convert_Withdrawal'          => 'Converter levantamento',
    'convert_Deposit'             => 'Converter depósito',
    'convert_Transfer'            => 'Converter transferência',
    'amount'                      => 'Montante',
    'foreign_amount'              => 'Montante estrangeiro',
    'date'                        => 'Data',
    'interest_date'               => 'Data de juros',
    'book_date'                   => 'Data de registo',
    'process_date'                => 'Data de processamento',
    'category'                    => 'Categoria',
    'tags'                        => 'Etiquetas',
    'deletePermanently'           => 'Apagar permanentemente',
    'cancel'                      => 'Cancelar',
    'targetdate'                  => 'Data alvo',
    'startdate'                   => 'Data de inicio',
    'tag'                         => 'Etiqueta',
    'under'                       => 'Sob',
    'symbol'                      => 'Simbolo',
    'code'                        => 'Codigo',
    'iban'                        => 'IBAN',
    'account_number'              => 'Número de conta',
    'creditCardNumber'            => 'Numero do cartao de credito',
    'has_headers'                 => 'Cabecalhos',
    'date_format'                 => 'Formato da data',
    'specifix'                    => 'Banco - ou correccoes especificas do ficheiro',
    'attachments[]'               => 'Anexos',
    'title'                       => 'Titulo',
    'notes'                       => 'Notas',
    'filename'                    => 'Nome do ficheiro',
    'mime'                        => 'Formato do ficheiro',
    'size'                        => 'Tamanho',
    'trigger'                     => 'Disparador',
    'stop_processing'             => 'Parar processamento',
    'start_date'                  => 'Inicio do intervalo',
    'end_date'                    => 'Fim do intervalo',
    'enddate'                     => 'Data do término',
    'start'                       => 'Início do intervalo',
    'end'                         => 'Fim do intervalo',
    'delete_account'              => 'Apagar conta ":name"',
    'delete_webhook'              => 'Delete webhook ":title"',
    'delete_bill'                 => 'Apagar factura ":name"',
    'delete_budget'               => 'Apagar orcamento ":name"',
    'delete_category'             => 'Apagar categoria ":name"',
    'delete_currency'             => 'Apagar divisa ":name"',
    'delete_journal'              => 'Apagar transaccao com a descricao ":description"',
    'delete_attachment'           => 'Apagar anexo ":name"',
    'delete_rule'                 => 'Apagar regra ":title"',
    'delete_rule_group'           => 'Apagar grupo de regras ":title"',
    'delete_link_type'            => 'Apagar tipo de link ":name"',
    'delete_user'                 => 'Apagar utilizador ":email"',
    'delete_recurring'            => 'Apagar transaccao recorrente ":title"',
    'user_areYouSure'             => 'Se apagares o utilizador ":email", tudo em relacao a ele vai desaparecer. Nao existe retorno. Se apagares a tua propria conta, vais perder o acesso a esta instancia do Firefly III.',
    'attachment_areYouSure'       => 'Tens a certeza que pretendes apagar o anexo chamado ":name"?',
    'account_areYouSure'          => 'Tens a certeza que pretendes apagar a conta chamada ":name"?',
    'account_areYouSure_js'       => 'Tem a certeza que deseja eliminar a conta denominada por "{name}?',
    'bill_areYouSure'             => 'Tens a certeza que pretendes apagar a factura chamada ":name"?',
    'rule_areYouSure'             => 'Tens a certeza que pretendes apagar a regra com titulo ":title"?',
    'object_group_areYouSure'     => 'Tem certeza que quer apagar o grupo ":title"?',
    'ruleGroup_areYouSure'        => 'Tens a certeza que pretendes apagar o grupo de regras com titulo ":title"?',
    'budget_areYouSure'           => 'Tens a certeza que pretendes apagar o orcamento chamado ":name"?',
    'webhook_areYouSure'           => 'Are you sure you want to delete the webhook named ":title"?',
    'category_areYouSure'         => 'Tens a certeza que pretendes apagar a categoria chamada ":name"?',
    'recurring_areYouSure'        => 'Tens a certeza que pretendes apagar a transaccao recorrente chamada ":title"?',
    'currency_areYouSure'         => 'Tens a certeza que pretendes apagar a divisa chamada ":name"?',
    'piggyBank_areYouSure'        => 'Tens a certeza que pretendes apagar o mealheiro chamado ":name"?',
    'journal_areYouSure'          => 'Tens a certeza que pretendes apagar a transaccao com descricao ":description"?',
    'mass_journal_are_you_sure'   => 'Tens a certeza que pretendes apagar estas transações?',

    // Ignore this comment

    'tag_areYouSure'              => 'Tem a certeza que pretende apagar a etiqueta ":tag"?',
    'journal_link_areYouSure'     => 'Tens a certeza que pretendes apagar a ligacao entre <a href=":source_link">:source</a> e <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Tens a certeza que pretendes apagar o tipo de link ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Apagar as tuas coisas do Firefly III e permanente e nao pode ser desfeito.',
    'mass_make_selection'         => 'Podes prevenir que itens sejam apagados, se removeres a caixa de seleccao.',
    'delete_all_permanently'      => 'Apagar os seleccionados, permanentemente',
    'update_all_journals'         => 'Atualizar estas transações',
    'also_delete_transactions'    => 'A transação vinculada a esta conta vai ser também apagada.|As :count transações vinculadas a esta conta serão também apagadas.',
    'also_delete_transactions_js' => 'Nenhuma transação| A única transação ligada a esta conta será também excluída.|Todas as {count} transações ligadas a esta conta serão também excluídas.',
    'also_delete_connections'     => 'A transação vinculada a este tipo de ligação irá perder a conexão.|As :count transações vinculadas a este tipo de ligação irão perder as suas conexões.',
    'also_delete_rules'           => 'A unica regra vinculada a este grupo de regras vai ser apagada tambem.|Todas as :count regras vinculadas a este grupo de regras vao ser apagadas tambem.',
    'also_delete_piggyBanks'      => 'O unico mealheiro vinculado a esta conta vai ser apagado tambem.|Todos os :count mealheiros vinculados a esta conta vao ser apagados tambem.',
    'also_delete_piggyBanks_js'   => 'Nenhum mealheiro|O único mealheiro ligado a esta conta será também eliminado.|Todos os {count} mealheiros ligados a esta conta serão também eliminados.',
    'not_delete_piggy_banks'      => 'O mealheiro ligado a este grupo não vai ser apagado. Os :count mealheiros ligados a este grupo não vão ser apagados.',
    'bill_keep_transactions'      => 'A única transação vinculada a esta fatura não vai ser apagada.|Todas as :count transações vinculadas a esta fatura não vão ser apagadas.',
    'budget_keep_transactions'    => 'A única transação vinculada a este orçamento não vai ser apagada.|Todas as :count transações vinculadas a este orçamento não vão ser apagadas.',
    'category_keep_transactions'  => 'A única transação vinculada a esta categoria não vai ser apagada.|Todas as :count transações vinculadas a esta categoria não vão ser apagadas.',
    'recurring_keep_transactions' => 'A única transação criada a partir desta transação recorrente não vai ser apagada.|Todas as :count transações criadas a partir desta transação recorrente não vão ser apagadas.',
    'tag_keep_transactions'       => 'A única transação vinculada a esta etiqueta não vai ser apagada.|Todas as :count transações vinculadas a esta etiqueta não vão ser apagadas.',
    'check_for_updates'           => 'Procurar actualizacoes',
    'liability_direction'         => 'Responsabilidade entrada/saída',
    'delete_object_group'         => 'Apagar grupo ":title"',
    'email'                       => 'Email',
    'password'                    => 'Password',
    'password_confirmation'       => 'Password (novamente)',
    'blocked'                     => 'Bloqueado?',
    'blocked_code'                => 'Razao para o bloqueio',
    'login_name'                  => 'Iniciar sessao',
    'is_owner'                    => 'É administrador?',
    'url'                         => 'URL',
    'bill_end_date'               => 'Data final',

    // import
    'apply_rules'                 => 'Aplicar regras',
    'artist'                      => 'Artista',
    'album'                       => 'Album',
    'song'                        => 'Musica',


    // admin
    'domain'                      => 'Dominio',
    'single_user_mode'            => 'Desactivar registo de utilizadores',
    'is_demo_site'                => 'Site de demonstracao?',

    // import
    'configuration_file'          => 'Ficheiro de configuracao',
    'csv_comma'                   => 'Virgula (,)',
    'csv_semicolon'               => 'Ponto e virgula (;)',
    'csv_tab'                     => 'Paragrafo (invisivel)',
    'csv_delimiter'               => 'Delimitador de campos CSV',
    'client_id'                   => 'ID do cliente',
    'app_id'                      => 'ID da aplicação',
    'secret'                      => 'Codigo secreto',
    'public_key'                  => 'Chave publica',
    'country_code'                => 'Codigo do pais',
    'provider_code'               => 'Banco ou provedor de dados',
    'fints_url'                   => 'URL da API FinTS',
    'fints_port'                  => 'Porta',
    'fints_bank_code'             => 'Codigo do banco',
    'fints_username'              => 'Utilizador',
    'fints_password'              => 'PIN / Password',
    'fints_account'               => 'Conta FinTS',
    'local_account'               => 'Conta Firefly III',

    // Ignore this comment

    'from_date'                   => 'Data desde',
    'to_date'                     => 'Data ate',
    'due_date'                    => 'Data de vencimento',
    'payment_date'                => 'Data de pagamento',
    'invoice_date'                => 'Data da factura',
    'internal_reference'          => 'Referencia interna',
    'inward'                      => 'Descricao interna',
    'outward'                     => 'Descricao externa',
    'rule_group_id'               => 'Grupo de regras',
    'transaction_description'     => 'Descricao da transaccao',
    'first_date'                  => 'Primeira data',
    'transaction_type'            => 'Tipo de transaccao',
    'repeat_until'                => 'Repetir ate',
    'recurring_description'       => 'Descricao da transaccao recorrente',
    'repetition_type'             => 'Tipo de repeticao',
    'foreign_currency_id'         => 'Divisa estrangeira',
    'repetition_end'              => 'Repetica termina',
    'repetitions'                 => 'Repeticoes',
    'calendar'                    => 'Calendario',
    'weekend'                     => 'Fim de semana',
    'client_secret'               => 'Segredo do cliente',
    'withdrawal_destination_id'   => 'Conta de destino',
    'deposit_source_id'           => 'Conta de origem',
    'expected_on'                 => 'Esperado em',
    'paid'                        => 'Pago',
    'auto_budget_type'            => 'Orçamento automático',
    'auto_budget_amount'          => 'Valor do orçamento automático',
    'auto_budget_period'          => 'Período do orçamento automático',
    'collected'                   => 'Recebido',
    'submitted'                   => 'Enviado',
    'key'                         => 'Chave',
    'value'                       => 'Conteúdo do registo',
    'webhook_delivery'            => 'Delivery',
    'webhook_response'            => 'Response',
    'webhook_trigger'             => 'Trigger',
];
// Ignore this comment
