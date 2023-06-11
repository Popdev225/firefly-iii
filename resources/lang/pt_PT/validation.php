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
    'missing_where'                  => 'A matriz tem em falta a cláusula-"onde"',
    'missing_update'                 => 'A matriz tem em falta a cláusula-"atualizar"',
    'invalid_where_key'              => 'JSON contém uma chave inválida para a cláusula "onde"',
    'invalid_update_key'             => 'JSON contém uma chave inválida para a cláusula "atualizar"',
    'invalid_query_data'             => 'Existem dados inválidos no campo %s:%s do seu inquérito.',
    'invalid_query_account_type'     => 'O seu inquérito contém contas de tipos diferentes, o que não é permitido.',
    'invalid_query_currency'         => 'O seu inquérito contém contas com configurações de moeda diferentes, o que não é permitido.',
    'iban'                           => 'Este IBAN não é valido.',
    'zero_or_more'                   => 'O valor não pode ser negativo.',
    'date_or_time'                   => 'O valor deve ser uma data ou hora válida (ISO 8601).',
    'source_equals_destination'      => 'A conta de origem é igual à conta de destino.',
    'unique_account_number_for_user' => 'Parece que este número de conta já está em uso.',
    'unique_iban_for_user'           => 'Parece que este IBAN já está em uso.',
    'deleted_user'                   => 'Devido a motivos de segurança, não se pode registar com este email.',
    'rule_trigger_value'             => 'Este valor é inválido para o gatilho selecionado.',
    'rule_action_value'              => 'Este valor é inválido para a ação selecionada.',
    'file_already_attached'          => 'O ficheiro ":name" carregado já está anexado a este objeto.',
    'file_attached'                  => 'Ficheiro carregado com sucesso ":name".',
    'must_exist'                     => 'O ID no campo :attribute não existe na base de dados.',
    'all_accounts_equal'             => 'Todas as contas neste campo têm de ser iguais.',
    'group_title_mandatory'          => 'Um título de grupo é obrigatório quando existe mais de uma transação.',
    'transaction_types_equal'        => 'Todas as divisões devem ser do mesmo tipo.',
    'invalid_transaction_type'       => 'Tipo de transação inválido.',
    'invalid_selection'              => 'A sua seleção é invalida.',
    'belongs_user'                   => 'Este valor é inválido para este campo.',
    'at_least_one_transaction'       => 'Necessita pelo menos de uma transação.',
    'recurring_transaction_id'       => 'Need at least one transaction.',
    'need_id_to_match'               => 'You need to submit this entry with an ID for the API to be able to match it.',
    'too_many_unmatched'             => 'Too many submitted transactions cannot be matched to their respective database entries. Make sure existing entries have a valid ID.',
    'id_does_not_match'              => 'Submitted ID #:id does not match expected ID. Make sure it matches or omit the field.',
    'at_least_one_repetition'        => 'Necessita pelo menos de uma repetição.',
    'require_repeat_until'           => 'Preencher um número de repetições, ou uma data de fim (repetir_até). Não ambos.',
    'require_currency_info'          => 'O conteúdo deste campo é inválido sem a informação da moeda.',
    'not_transfer_account'           => 'Esta conta não pode ser utilizada para transferências.',
    'require_currency_amount'        => 'O conteúdo deste campo é inválido sem o montante da moeda estrangeira.',
    'require_foreign_currency'       => 'Este campo requer um número',
    'require_foreign_dest'           => 'O valor deste campo deve utilizar a mesma moeda da conta de destino.',
    'require_foreign_src'            => 'O valor deste campo deve utilizar a mesma moeda da conta de origem.',
    'equal_description'              => 'A descrição da transação não deve ser igual à descrição global.',
    'file_invalid_mime'              => 'O ficheiro ":name" é do tipo ":mime" que não é aceite para carregamento.',
    'file_too_large'                 => 'O ficheiro ":name" é demasiado grande.',
    'belongs_to_user'                => 'O valor de :attribute é desconhecido.',
    'accepted'                       => 'O :attribute tem de ser aceite.',
    'bic'                            => 'Este BIC não é válido.',
    'at_least_one_trigger'           => 'A regra tem de ter pelo menos um gatilho.',
    'at_least_one_active_trigger'    => 'A regra deve ter pelo menos um gatilho ativo.',
    'at_least_one_action'            => 'A regra tem de ter pelo menos uma ação.',
    'at_least_one_active_action'     => 'A regra deve ter pelo menos uma ação ativa.',
    'base64'                         => 'Isto não é um valor base64 válido.',
    'model_id_invalid'               => 'O ID inserido é inválido para este modelo.',
    'less'                           => ':attribute tem de ser menor que 10.000.000',
    'active_url'                     => 'O :attribute não é um URL válido.',
    'after'                          => 'A data :attribute tem de ser posterior a :date.',
    'date_after'                     => 'A data de início deve ser anterior à data de fim.',
    'alpha'                          => 'O :attribute apenas pode conter letras.',
    'alpha_dash'                     => 'O :attribute apenas pode conter letras, números e traços.',
    'alpha_num'                      => 'O :attribute apenas pode conter letras e números.',
    'array'                          => 'O :attribute tem de ser uma matriz.',
    'unique_for_user'                => 'Já existe um registo com este :attribute.',
    'before'                         => 'A data :attribute tem de ser anterior a :date.',
    'unique_object_for_user'         => 'Este nome já está em uso.',
    'unique_account_for_user'        => 'Este nome de conta já está em uso.',

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


    'between.numeric'            => 'O :attribute tem de estar entre :min e :max.',
    'between.file'               => 'O :attribute tem de estar entre :min e :max kilobytes.',
    'between.string'             => 'O :attribute tem de ter entre :min e :max carateres.',
    'between.array'              => 'O :attribute tem de ter entre :min e :max itens.',
    'boolean'                    => 'O campo :attribute tem de ser verdadeiro ou falso.',
    'confirmed'                  => 'A confirmação de :attribute não coincide.',
    'date'                       => 'A data :attribute não é válida.',
    'date_format'                => 'O valor :attribute não corresponde ao formato :format.',
    'different'                  => 'O :attribute e :other têm de ser diferentes.',
    'digits'                     => 'O :attribute tem de ter :digits dígitos.',
    'digits_between'             => 'O :attribute tem de ter entre :min e :max dígitos.',
    'email'                      => 'O :attribute tem de ser um endereço de email válido.',
    'filled'                     => 'O campo :attribute é obrigatório.',
    'exists'                     => 'O :attribute selecionado é inválido.',
    'image'                      => 'O :attribute tem de ser uma imagem.',
    'in'                         => 'O :attribute selecionado é inválido.',
    'integer'                    => 'O :attribute tem de ser um inteiro.',
    'ip'                         => 'O :attribute tem de ser um endereço IP válido.',
    'json'                       => 'O :attribute tem de ser uma string JSON valida.',
    'max.numeric'                => 'O :attribute nao pode ser maior que :max.',
    'max.file'                   => 'O :attribute não pode ter mais que :max kilobytes.',
    'max.string'                 => 'O :attribute não pode ter mais que :max carateres.',
    'max.array'                  => 'O :attribute não pode ter mais que :max itens.',
    'mimes'                      => 'O :attribute tem de ser um ficheiro do tipo :values.',
    'min.numeric'                => 'O :attribute tem de ser pelo menos :min.',
    'lte.numeric'                => 'O :attribute tem de ser menor ou igual a :value.',
    'min.file'                   => 'O :attribute tem de ter, pelo menos, :min kilobytes.',
    'min.string'                 => 'O :attribute tem de ter, pelo menos, :min carateres.',
    'min.array'                  => 'O :attribute tem de ter, pelo menos, :min itens.',
    'not_in'                     => 'O :attribute selecionado é inválido.',
    'numeric'                    => 'O :attribute tem de ser um número.',
    'numeric_native'             => 'O montante nativo tem de ser um número.',
    'numeric_destination'        => 'O montante de destino tem de ser um número.',
    'numeric_source'             => 'O montante de origem tem de ser um número.',
    'regex'                      => 'O formato do :attribute é inválido.',
    'required'                   => 'O campo :attribute é obrigatório.',
    'required_if'                => 'O campo :attribute é obrigatório quando :other e :value.',
    'required_unless'            => 'O campo :attribute é obrigatório, a menos que :other esteja em :values.',
    'required_with'              => 'O campo :attribute é obrigatório quando o :values está presente.',
    'required_with_all'          => 'O campo :attribute é obrigatório quando o :values está presente.',
    'required_without'           => 'O campo :attribute é obrigatório quando o :values não está presente.',
    'required_without_all'       => 'O campo :attribute é obrigatório quando nenhum dos :values estão presentes.',
    'same'                       => 'O :attribute e o :other têm de ser iguais.',
    'size.numeric'               => 'O :attribute tem de ter :size.',
    'amount_min_over_max'        => 'O montante mínimo não pode ser maior que o montante máximo.',
    'size.file'                  => 'O :attribute tem de ter :size kilobytes.',
    'size.string'                => 'O :attribute tem e ter :size carateres.',
    'size.array'                 => 'O :attribute tem de conter :size itens.',
    'unique'                     => 'O :attribute já foi usado.',
    'string'                     => 'O :attribute tem de ser um texto.',
    'url'                        => 'O formato do :attribute é inválido.',
    'timezone'                   => 'O :attribute tem de ser uma zona válida.',
    '2fa_code'                   => 'O campo :attribute é inválido.',
    'dimensions'                 => 'O :attribute tem dimensões de imagens incorretas.',
    'distinct'                   => 'O campo :attribute tem um valor duplicado.',
    'file'                       => 'O :attribute tem de ser um ficheiro.',
    'in_array'                   => 'O campo :attribute não existe em :other.',
    'present'                    => 'O campo :attribute tem de estar presente.',
    'amount_zero'                => 'O montante total não pode ser 0.',
    'current_target_amount'      => 'O valor atual deve ser inferior ao valor pretendido.',
    'unique_piggy_bank_for_user' => 'O nome do mealheiro tem de ser único.',
    'unique_object_group'        => 'O nome do grupo tem de ser único',
    'starts_with'                => 'O valor deve começar com :values.',
    'unique_webhook'             => 'Já existe um webhook com esta combinação de URL, gatilho, resposta e entrega.',
    'unique_existing_webhook'    => 'Já existe outro webhook com esta combinação de URL, gatilho, resposta e entrega.',
    'same_account_type'          => 'Ambas as contas devem ser do mesmo tipo',
    'same_account_currency'      => 'Ambas as contas devem ter a mesma moeda configurada',

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


    'secure_password'             => 'Esta não é uma palavra-passe segura. Tente de novo por favor. Para mais informações visite https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Tipo de repetição inválido para transações recorrentes.',
    'valid_recurrence_rep_moment' => 'Momento inválido para este tipo de repetição.',
    'invalid_account_info'        => 'Informação de conta inválida.',
    'attributes'                  => [
        'email'                   => 'endereço de email',
        'description'             => 'descrição',
        'amount'                  => 'montante',
        'transactions.*.amount'   => 'montante da transação',
        'name'                    => 'nome',
        'piggy_bank_id'           => 'ID do mealheiro',
        'targetamount'            => 'montante alvo',
        'opening_balance_date'    => 'data do saldo inicial',
        'opening_balance'         => 'saldo inicial',
        'match'                   => 'corresponder',
        'amount_min'              => 'montante mínimo',
        'amount_max'              => 'montante máximo',
        'title'                   => 'título',
        'tag'                     => 'etiqueta',
        'transaction_description' => 'descrição da transação',
        'rule-action-value.1'     => 'valor #1 da ação da regra',
        'rule-action-value.2'     => 'valor #2 da ação da regra',
        'rule-action-value.3'     => 'valor #3 da ação da regra',
        'rule-action-value.4'     => 'valor #4 da ação da regra',
        'rule-action-value.5'     => 'valor #5 da ação da regra',
        'rule-action.1'           => 'ação #1 da regra',
        'rule-action.2'           => 'ação #2 da regra',
        'rule-action.3'           => 'ação #3 da regra',
        'rule-action.4'           => 'ação #4 da regra',
        'rule-action.5'           => 'ação #5 da regra',
        'rule-trigger-value.1'    => 'valor #1 do gatilho da regra',
        'rule-trigger-value.2'    => 'valor #2 do gatilho da regra',
        'rule-trigger-value.3'    => 'valor #3 do gatilho da regra',
        'rule-trigger-value.4'    => 'valor #4 do gatilho da regra',
        'rule-trigger-value.5'    => 'valor #5 do gatilho da regra',
        'rule-trigger.1'          => 'gatilho #1 da regra',
        'rule-trigger.2'          => 'gatilho #2 da regra',
        'rule-trigger.3'          => 'gatilho #3 da regra',
        'rule-trigger.4'          => 'gatilho #4 da regra',
        'rule-trigger.5'          => 'gatilho #5 da regra',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'É preciso ter um ID de uma conta de origem válida e/ou um nome de uma conta de origem válida para continuar.',
    'withdrawal_source_bad_data'  => 'Não foi possível encontrar uma conta de origem válida ao pesquisar pelo ID ":id" ou nome ":name".',
    'withdrawal_dest_need_data'   => 'É necessário ter um ID de conta de destino válido e/ou um nome de conta de destino válido para continuar.',
    'withdrawal_dest_bad_data'    => 'Não foi possível encontrar uma conta de destino válida ao pesquisar pelo ID ":id" ou nome ":name".',

    'reconciliation_source_bad_data' => 'Não foi possível encontrar uma conta de reconciliação válida ao procurar pela ID ":id" ou pelo nome ":name".',

    'generic_source_bad_data' => 'Não foi possível encontrar uma conta de origem válida ao pesquisar pelo ID ":id" ou nome ":name".',

    'deposit_source_need_data' => 'É preciso ter um ID de uma conta de origem válida e/ou um nome de uma conta de origem válida para continuar.',
    'deposit_source_bad_data'  => 'Não foi possível encontrar uma conta de origem válida ao pesquisar pelo ID ":id" ou nome ":name".',
    'deposit_dest_need_data'   => 'É necessário ter um ID de conta de destino válido e/ou um nome de conta de destino válido para continuar.',
    'deposit_dest_bad_data'    => 'Não foi possível encontrar uma conta de destino válida ao pesquisar pelo ID ":id" ou nome ":name".',
    'deposit_dest_wrong_type'  => 'A conta de destino enviada não é do tipo correto.',

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


    'transfer_source_need_data' => 'É preciso ter um ID de uma conta de origem válida e/ou um nome de uma conta de origem válida para continuar.',
    'transfer_source_bad_data'  => 'Não foi possível encontrar uma conta de origem válida ao pesquisar pelo ID ":id" ou nome ":name".',
    'transfer_dest_need_data'   => 'É preciso ter um ID de conta de destino válido e/ou um nome de conta de destino válido para continuar.',
    'transfer_dest_bad_data'    => 'Não foi possível encontrar uma conta de destino válida ao pesquisar por ID ":id" ou nome ":name".',
    'need_id_in_edit'           => 'Cada divisão deve ter transaction_journal_id (ID válido ou 0).',

    'ob_source_need_data'           => 'É preciso ter um ID de uma conta de origem válida e/ou um nome de uma conta de origem válida para continuar.',
    'lc_source_need_data'           => 'É necessário obter um ID de uma conta de origem válida para continuar.',
    'ob_dest_need_data'             => 'É necessário ter um ID de conta de destino válido e/ou um nome de conta de destino válido para continuar.',
    'ob_dest_bad_data'              => 'Não foi possível encontrar uma conta de destino válida ao pesquisar pelo ID ":id" ou nome ":name".',
    'reconciliation_either_account' => 'Ao submeter a reconciliação, tem de submeter a conta de origem ou a conta de destino. Não ambas ou nenhuma.',

    'generic_invalid_source'      => 'Não pode utilizar esta conta como conta de origem.',
    'generic_invalid_destination' => 'Não pode utilizar esta conta como conta de destino.',

    'generic_no_source'      => 'Tem de submeter a informação de uma conta de origem ou uma ID de diário de transações.',
    'generic_no_destination' => 'Tem de submeter a informação de uma conta de destino ou uma ID de diário de transações.',

    'gte.numeric' => 'O :attribute deve ser maior ou igual a :value.',
    'gt.numeric'  => 'O :attribute deve ser superior a :value.',
    'gte.file'    => 'O :attribute deve ser maior ou igual a :value kilobytes.',
    'gte.string'  => 'O :attribute deve ser maior ou igual a :value carateres.',
    'gte.array'   => 'O :attribute deve ter :value items ou mais.',

    'amount_required_for_auto_budget' => 'O montante é obrigatório.',
    'auto_budget_amount_positive'     => 'O montante deve ser maior que zero.',
    'auto_budget_period_mandatory'    => 'O período de orçamento automático é um campo obrigatório.',

    // no access to administration:
    'no_access_user_group'            => 'Não tem as permissões de acesso necessárias para esta administração.',
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
