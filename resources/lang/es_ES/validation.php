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

declare(strict_types=1);

return [
    'iban'                           => 'Este no es un IBAN válido.',
    'zero_or_more'                   => 'El valor no puede ser negativo.',
    'date_or_time'                   => 'El valor debe ser una fecha u hora válido (ISO 8601).',
    'source_equals_destination'      => 'La cuenta origen es igual que la cuenta destino.',
    'unique_account_number_for_user' => 'Parece que este número de cuenta ya está en uso.',
    'unique_iban_for_user'           => 'Parece que este IBAN ya está en uso.',
    'deleted_user'                   => 'Debido a restricciones de seguridad, no se puede registrar utilizando esta dirección de correo electrónico.',
    'rule_trigger_value'             => 'Este valor es incorrecto para el disparador seleccionado.',
    'rule_action_value'              => 'Este valor es incorrecto para la acción seleccionada.',
    'file_already_attached'          => 'El archivo ":name" ya ha sido añadido a este objeto.',
    'file_attached'                  => 'Archivo ":name" subido con éxito.',
    'must_exist'                     => 'El ID introducido en :attribute no existe en la base de datos.',
    'all_accounts_equal'             => 'Todas las cuentas en este campo deben ser iguales.',
    'group_title_mandatory'          => 'Un título de grupo es obligatorio cuando hay más de una transacción.',
    'transaction_types_equal'        => 'Todas las divisiones deben ser del mismo tipo.',
    'invalid_transaction_type'       => 'Tipo de transacción inválido.',
    'invalid_selection'              => 'Tu selección no es válida.',
    'belongs_user'                   => 'Este valor no es válido para este campo.',
    'at_least_one_transaction'       => 'Se necesita al menos una transacción.',
    'at_least_one_repetition'        => 'Se necesita al menos una repetición.',
    'require_repeat_until'           => 'Se precisa un número de repeticiones o una fecha de finalización (repeat_until). No ambas.',
    'require_currency_info'          => 'El contenido de este campo no es válido sin la información montearia.',
    'not_transfer_account'           => 'Esta cuenta no es una cuenta que se pueda utilizar para transferencias.',
    'require_currency_amount'        => 'El contenido de este campo no es válido sin información de cantidad extranjera.',
    'equal_description'              => 'La descripción de la transacción no debería ser igual a la descripción global.',
    'file_invalid_mime'              => 'El archivo ":name" es de tipo ":mime", el cual no se acepta.',
    'file_too_large'                 => 'El archivo ":name" es demasiado grande.',
    'belongs_to_user'                => 'El valor de :attribute es desconocido.',
    'accepted'                       => 'El :attribute debe ser aceptado.',
    'bic'                            => 'Esto no es un BIC válido.',
    'at_least_one_trigger'           => 'La regla debe tener al menos un desencadenante.',
    'at_least_one_action'            => 'La regla debe tener al menos una acción.',
    'base64'                         => 'Esto no es un dato codificado en base64 válido.',
    'model_id_invalid'               => 'El ID dado no parece válido para este modelo.',
    'less'                           => ':attribute debe ser menor que 10.000.000',
    'active_url'                     => 'El campo :attribute no es una URL válida.',
    'after'                          => 'El campo :attribute debe ser una fecha posterior a :date.',
    'date_after'                     => 'La fecha de inicio debe ser anterior a la fecha de finalización.',
    'alpha'                          => 'El campo :attribute sólo puede contener letras.',
    'alpha_dash'                     => 'El campo :attribute sólo puede contener letras, números y guiones.',
    'alpha_num'                      => 'El campo :attribute sólo puede contener letras y números.',
    'array'                          => 'El campo :attribute debe ser un arreglo.',
    'unique_for_user'                => 'Ya hay una entrada con esto :attribute.',
    'before'                         => 'El campo :attribute debe contener una fecha anterior a :date.',
    'unique_object_for_user'         => 'Este nombre ya está en uso.',
    'unique_account_for_user'        => 'Este nombre de cuenta ya está en uso.',
    'between.numeric'                => 'El atributo :attribute debe estar entre :min y :max.',
    'between.file'                   => 'El atributo :attribute debe estar entre :min y :max kilobytes.',
    'between.string'                 => 'El atributo :attribute debe estar entre :min y :max caracteres.',
    'between.array'                  => 'El atributo :attribute debe estar entre :min y :max items.',
    'boolean'                        => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'                      => 'La confirmación de :attribute no coincide.',
    'date'                           => 'El campo :attribute no es una fecha válida.',
    'date_format'                    => 'El campo :attribute no corresponde con el formato :format.',
    'different'                      => 'Los campos :attribute y :other han de ser diferentes.',
    'digits'                         => 'El campo :attribute debe contener un número de :digits dígitos.',
    'digits_between'                 => 'El campo :attribute debe contener entre :min y :max dígitos.',
    'email'                          => 'El campo :attribute no corresponde con una dirección de e-mail válida.',
    'filled'                         => 'El campo :attribute es requerido.',
    'exists'                         => 'El campo :attribute seleccionado no es correcto.',
    'image'                          => 'El campo :attribute debe ser una imagen.',
    'in'                             => 'El campo :attribute seleccionado es inválido.',
    'integer'                        => 'El campo :attribute debe ser un entero.',
    'ip'                             => 'El campo :attribute debe contener una dirección IP válida.',
    'json'                           => 'El campo :attribute debe ser una cadena JSON válida.',
    'max.numeric'                    => 'El campo :attribute no puede ser mayor que :max.',
    'max.file'                       => 'El campo :attribute no puede ser mayor :max de kilobytes.',
    'max.string'                     => 'El campo :attribute debe contener menos de :max caracteres.',
    'max.array'                      => 'El campo :attribute debe contener al menos :max elementos.',
    'mimes'                          => 'El campo :attribute debe ser un archivo de tipo :values.',
    'min.numeric'                    => 'El campo :attribute debe ser al menos :min.',
    'lte.numeric'                    => 'El :attribute debe ser menor o igual :value.',
    'min.file'                       => 'El campo :attribute debe ser al menos :min kilobytes.',
    'min.string'                     => 'El campo :attribute debe contener al menos :min caracteres.',
    'min.array'                      => 'El campo :attribute debe tener al menos :min elementos.',
    'not_in'                         => 'El campo :attribute seleccionado es incorrecto.',
    'numeric'                        => 'El campo :attribute debe ser un número.',
    'numeric_native'                 => 'La cantidad nativa debe ser un número.',
    'numeric_destination'            => 'La cantidad destino debe ser un número.',
    'numeric_source'                 => 'La cantidad origen debe ser un número.',
    'regex'                          => 'El formato del campo :attribute no es válido.',
    'required'                       => 'El campo :attribute es obligatorio.',
    'required_if'                    => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_unless'                => 'El campo :attribute es obligatorio a menos que :other se encuentre en :values.',
    'required_with'                  => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'              => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_without'               => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all'           => 'El campo :attribute es obligatorio cuando ningún campo :values está presente.',
    'same'                           => 'El campo atributo :attribute y :other deben coincidir.',
    'size.numeric'                   => 'El tamaño de :attribute debe ser :size.',
    'amount_min_over_max'            => 'La cantidad mínima no puede ser mayor que la cantidad máxima.',
    'size.file'                      => 'El tamaño de :attribute debe ser :size kilobytes.',
    'size.string'                    => 'El campo :attribute debe tener :size caracteres.',
    'size.array'                     => 'El campo :attribute debe contener :size elementos.',
    'unique'                         => 'El elemento :attribute ya está en uso.',
    'string'                         => 'El :attribute debería ser una cadena de caracteres.',
    'url'                            => 'El formato del campo :attribute no es válido.',
    'timezone'                       => 'El campo :attribute debe contener una zona válida.',
    '2fa_code'                       => 'El campo :attribute no es válido.',
    'dimensions'                     => 'Las dimensiones de la imagen :attribute son incorrectas.',
    'distinct'                       => 'El campo :attribute tiene un valor duplicado.',
    'file'                           => 'El campo :attribute debe ser un fichero.',
    'in_array'                       => 'El campo :attribute no existe en :other.',
    'present'                        => 'El campo :attribute debe estar presente.',
    'amount_zero'                    => 'La cantidad total no puede ser cero.',
    'current_target_amount'          => 'La cantidad actual debe ser menor que la cantidad de destino.',
    'unique_piggy_bank_for_user'     => 'En nombre de la hucha debe ser único.',
    'unique_object_group'            => 'El nombre del grupo debe ser único',
    'starts_with'                    => 'El valor debe comenzar con :values.',
    'unique_webhook'                 => 'Ya tiene un webhook con estos valores.',
    'unique_existing_webhook'        => 'Ya tiene otro webhook con estos valores.',
    'same_account_type'              => 'Both accounts must be of the same account type',
    'same_account_currency'          => 'Both accounts must have the same currency setting',

    'secure_password'             => 'Esta contraseña no es segura. Por favor inténtalo de nuevo. Para más información, visita https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Tipo de repetición no válido para transacciones recurrentes.',
    'valid_recurrence_rep_moment' => 'Momento de repetición no válido para este tipo de repetición.',
    'invalid_account_info'        => 'Información de cuenta no válida.',
    'attributes'                  => [
        'email'                   => 'dirección de correo electrónico',
        'description'             => 'descripcion',
        'amount'                  => 'cantidad',
        'transactions.*.amount'   => 'importe de la transacción',
        'name'                    => 'nombre',
        'piggy_bank_id'           => 'ID de hucha',
        'targetamount'            => 'cantidad objetivo',
        'opening_balance_date'    => 'fecha de balance de apertura',
        'opening_balance'         => 'balance de apertura',
        'match'                   => 'emparejar',
        'amount_min'              => 'cantidad mínima',
        'amount_max'              => 'cantidad máxima',
        'title'                   => 'título',
        'tag'                     => 'etiqueta',
        'transaction_description' => 'Descripción de la transacción',
        'rule-action-value.1'     => 'valor de acción de la regla #1',
        'rule-action-value.2'     => 'valor de acción de regla # 2',
        'rule-action-value.3'     => 'valor de acción de regla # 3',
        'rule-action-value.4'     => 'valor de acción de regla # 4',
        'rule-action-value.5'     => 'valor de accion de regla # 5',
        'rule-action.1'           => 'acción de regla # 1',
        'rule-action.2'           => 'acción de regla # 2',
        'rule-action.3'           => 'acción de regla # 3',
        'rule-action.4'           => 'acción de regla # 4',
        'rule-action.5'           => 'acción de regla # 5',
        'rule-trigger-value.1'    => 'valor de disparo de regla #1',
        'rule-trigger-value.2'    => 'valor de disparo de regla # 2',
        'rule-trigger-value.3'    => 'valor de disparo de regla # 3',
        'rule-trigger-value.4'    => 'valor de disparo de regla # 4',
        'rule-trigger-value.5'    => 'valor de disparo de regla #5',
        'rule-trigger.1'          => 'disparo de regla # 1',
        'rule-trigger.2'          => 'disparo de regla #2',
        'rule-trigger.3'          => 'disparo de regla #3',
        'rule-trigger.4'          => 'disparo de regla #4',
        'rule-trigger.5'          => 'disparo de regla#5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Necesita obtener un ID de cuenta de origen válido y/o nombre de cuenta de origen válido para continuar.',
    'withdrawal_source_bad_data'  => 'No se pudo encontrar una cuenta de origen válida para ID ":id" o nombre ":name".',
    'withdrawal_dest_need_data'   => 'Necesita obtener un ID de cuenta de destino válido y/o nombre de cuenta de destino válido para continuar.',
    'withdrawal_dest_bad_data'    => 'No se pudo encontrar una cuenta de destino válida buscando ID ":id" o nombre ":name".',

    'generic_source_bad_data'  => 'No se pudo encontrar una cuenta de origen válida al buscar el ID ":id" o nombre ":name".',

    'deposit_source_need_data' => 'Necesita obtener un ID de cuenta de origen válido y/o nombre de cuenta de origen válido para continuar.',
    'deposit_source_bad_data'  => 'No se pudo encontrar una cuenta de origen válida para ID ":id" o nombre ":name".',
    'deposit_dest_need_data'   => 'Necesita obtener un ID de cuenta de destino válido y/o nombre de cuenta de destino válido para continuar.',
    'deposit_dest_bad_data'    => 'No se pudo encontrar una cuenta de destino válida buscando ID ":id" o nombre ":name".',
    'deposit_dest_wrong_type'  => 'La cuenta de destino enviada no es del tipo correcto.',

    'transfer_source_need_data' => 'Necesita obtener un ID de cuenta de origen válido y/o nombre de cuenta de origen válido para continuar.',
    'transfer_source_bad_data'  => 'No se pudo encontrar una cuenta de origen válida para ID ":id" o nombre ":name".',
    'transfer_dest_need_data'   => 'Necesita obtener un ID de cuenta de destino válido y/o nombre de cuenta de destino válido para continuar.',
    'transfer_dest_bad_data'    => 'No se pudo encontrar una cuenta de destino válida buscando ID ":id" o nombre ":name".',
    'need_id_in_edit'           => 'Cada división debe tener transaction_journal_id (ID válido o 0).',

    'ob_source_need_data' => 'Necesita obtener un ID de cuenta de origen válido y/o nombre de cuenta de origen válido para continuar.',
    'ob_dest_need_data'   => 'Necesita obtener un ID de cuenta de destino válido y/o nombre de cuenta de destino válido para continuar.',
    'ob_dest_bad_data'    => 'No se pudo encontrar una cuenta de destino válida buscando ID ":id" o nombre ":name".',

    'generic_invalid_source'      => 'No puedes usar esta cuenta como cuenta de origen.',
    'generic_invalid_destination' => 'No puede usar esta cuenta como cuenta de destino.',

    'gte.numeric' => ':attribute debe ser mayor o igual que :value.',
    'gt.numeric'  => 'El :attribute debe ser mayor que :value.',
    'gte.file'    => 'El :attribute debe ser mayor o igual a :value kilobytes.',
    'gte.string'  => ':attribute debe tener :value caracteres o más.',
    'gte.array'   => ':attribute debe tener :value objetos o más.',

    'amount_required_for_auto_budget' => 'Se requiere la cantidad.',
    'auto_budget_amount_positive'     => 'La cantidad debe ser mayor a cero.',
    'auto_budget_period_mandatory'    => 'El período del autopresupuesto es un campo obligatorio.',
];
