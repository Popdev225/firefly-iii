<?php
/**
 * validation.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

return [
    'iban'                           => 'Este não é um válido IBAN.',
    'unique_account_number_for_user' => 'Parece que este número de conta já está em uso.',
    'rule_trigger_value'             => 'Este valor é inválido para o disparo selecionado.',
    'rule_action_value'              => 'Este valor é inválido para a ação selecionada.',
    'invalid_domain'                 => 'Devido a restrições de segurança, você não pode registrar deste domínio.',
    'file_already_attached'          => 'Arquivo ":name" carregado já está anexado para este objeto.',
    'file_attached'                  => 'Arquivo carregado com sucesso ":name".',
    'file_invalid_mime'              => 'Arquivo ":name" é do tipo ":mime" que não é aceito como um novo upload.',
    'file_too_large'                 => 'Arquivo ":name" é muito grande.',
    'accepted'                       => 'O campo :attribute deve ser aceito.',
    'active_url'                     => 'O campo :attribute não contém um URL válido.',
    'after'                          => 'O campo :attribute deverá conter uma data posterior a :date.',
    'alpha'                          => 'O campo :attribute deverá conter apenas letras.',
    'alpha_dash'                     => 'O campo :attribute deverá conter apenas letras, números e traços.',
    'alpha_num'                      => 'O campo :attribute deverá conter apenas letras e números .',
    'array'                          => 'O campo :attribute precisa ser um conjunto.',
    'unique_for_user'                => 'Já existe uma entrada com este :attribute.',
    'before'                         => 'O campo :attribute deverá conter uma data anterior a :date.',
    'unique_object_for_user'         => 'Este nome já está em uso',
    'unique_account_for_user'        => 'Este nome de conta já está em uso',
    'between.numeric'                => 'O campo :attribute deverá ter um valor entre :min - :max.',
    'between.file'                   => 'O campo :attribute deverá ter um tamanho entre :min - :max kilobytes.',
    'between.string'                 => 'O campo :attribute deverá conter entre :min - :max caracteres.',
    'between.array'                  => 'O campo :attribute precisar ter entre :min - :max itens.',
    'boolean'                        => 'O campo :attribute deverá ter o valor verdadeiro ou falso.',
    'confirmed'                      => 'A confirmação para o campo :attribute não coincide.',
    'date'                           => 'O campo :attribute não contém uma data válida.',
    'date_format'                    => 'A data indicada para o campo :attribute não respeita o formato :format.',
    'different'                      => 'Os campos :attribute e :other deverão conter valores diferentes.',
    'digits'                         => 'O campo :attribute deverá conter :digits dígitos.',
    'digits_between'                 => 'O campo :attribute deverá conter entre :min a :max dígitos.',
    'email'                          => 'O campo :attribute não contém um endereço de email válido.',
    'filled'                         => 'O campo :attribute é obrigatório.',
    'exists'                         => 'O valor selecionado para o campo :attribute é inválido.',
    'image'                          => 'O campo :attribute deverá conter uma imagem.',
    'in'                             => 'O campo :attribute não contém um valor válido.',
    'integer'                        => 'O campo :attribute deverá conter um número inteiro.',
    'ip'                             => 'O campo :attribute deverá conter um IP válido.',
    'json'                           => 'O campo :attribute deverá conter uma string JSON válida.',
    'max.numeric'                    => 'O campo :attribute não deverá conter um valor superior a :max.',
    'max.file'                       => 'O campo :attribute não deverá ter um tamanho superior a :max kilobytes.',
    'max.string'                     => 'O campo :attribute não deverá conter mais de :max caracteres.',
    'max.array'                      => 'O campo :attribute deve ter no máximo :max itens.',
    'mimes'                          => 'O campo :attribute deverá conter um arquivo do tipo: :values.',
    'min.numeric'                    => 'O campo :attribute deverá ter um valor superior ou igual a :min.',
    'min.file'                       => 'O campo :attribute deverá ter no mínimo :min kilobytes.',
    'min.string'                     => 'O campo :attribute deverá conter no mínimo :min caracteres.',
    'min.array'                      => 'O campo :attribute deve ter no mínimo :min itens.',
    'not_in'                         => 'O campo :attribute contém um valor inválido.',
    'numeric'                        => 'O campo :attribute deverá conter um valor numérico.',
    'regex'                          => 'O formato do valor para o campo :attribute é inválido.',
    'required'                       => 'O campo :attribute é obrigatório.',
    'required_if'                    => 'O campo :attribute é obrigatório quando o valor do campo :other é igual a :value.',
    'required_unless'                => 'O campo :attribute é obrigatório a menos que :other esteja presente em :values.',
    'required_with'                  => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'              => 'O campo :attribute é obrigatório quando um dos :values está presente.',
    'required_without'               => 'O campo :attribute é obrigatório quanto :values não está presente.',
    'required_without_all'           => 'O campo :attribute é obrigatório quando nenhum dos :values está presente.',
    'same'                           => 'Os campos :attribute e :other deverão conter valores iguais.',
    'size.numeric'                   => 'O campo :attribute deverá conter o valor :size.',
    'size.file'                      => 'O campo :attribute deverá ter o tamanho de :size kilobytes.',
    'size.string'                    => 'O campo :attribute deverá conter :size caracteres.',
    'size.array'                     => 'O campo :attribute deve ter :size itens.',
    'unique'                         => 'O valor indicado para o campo :attribute já se encontra utilizado.',
    'string'                         => 'O campo :attribute deve ser uma string.',
    'url'                            => 'O formato do URL indicado para o campo :attribute é inválido.',
    'timezone'                       => 'O campo :attribute deverá ter um fuso horário válido.',
    '2fa_code'                       => 'O campo :attribute é inválido.',
];
