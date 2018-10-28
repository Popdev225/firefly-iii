<?php

/**
 * validation.php
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

return [
    'iban'                           => 'Este no es un IBAN válido.',
    'zero_or_more'                   => 'The value cannot be negative.',
    'source_equals_destination'      => 'La cuenta origen es igual que la cuenta destino.',
    'unique_account_number_for_user' => 'Parece que este número de cuenta ya está en uso.',
    'unique_iban_for_user'           => 'Parece que este IBAN ya está en uso.',
    'deleted_user'                   => 'Debido a restricciones de seguridad, no se puede registrar utilizando esta dirección de correo electrónico.',
    'rule_trigger_value'             => 'Este valor es incorrecto para el disparador seleccionado.',
    'rule_action_value'              => 'Este valor es incorrecto para la acción seleccionada.',
    'file_already_attached'          => 'El archivo ":name" ya ha sido añadido a este objeto.',
    'file_attached'                  => 'Archivo subido con éxito ":name".',
    'must_exist'                     => 'El ID introducido en :attribute no existe en la base de datos.',
    'all_accounts_equal'             => 'Todas las cuentas en este campo deben ser iguales.',
    'invalid_selection'              => 'Tu selección no es válida.',
    'belongs_user'                   => 'Este valor no es válido para este campo.',
    'at_least_one_transaction'       => 'Se necesita al menos una transacción.',
    'at_least_one_repetition'        => 'Se necesita al menos una repetición.',
    'require_repeat_until'           => 'Se precisa un número de repeticiones o una fecha de finalización (repeat_until). No ambas.',
    'require_currency_info'          => 'El contenido de este campo no es válido sin la información montearia.',
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
    'more'                           => ':attribute debe ser mayor que cero.',
    'less'                           => ':attribute debe ser menor que 10.000.000',
    'active_url'                     => 'El campo :attribute no es una URL válida.',
    'after'                          => 'El campo :attribute debe ser una fecha posterior a :date.',
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
    'lte.numeric'                    => 'The :attribute must be less than or equal :value.',
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
    'unique_piggy_bank_for_user'     => 'En nombre de la hucha debe ser único.',
    'secure_password'                => 'Este contraseña no es segura. Por favor, inténtelo de nuevo. Para obtener más información, visita http://bit.ly/FF3-password-security.',
    'valid_recurrence_rep_type'      => 'Tipo de repetición no válido para transacciones recurrentes.',
    'valid_recurrence_rep_moment'    => 'Momento de repetición no válido para este tipo de repetición.',
    'invalid_account_info'           => 'Información de cuenta no válida.',
    'attributes'                     => [
        'email'                   => 'dirección de correo electrónico',
        'description'             => 'descripcion',
        'amount'                  => 'monto',
        'name'                    => 'nombre',
        'piggy_bank_id'           => 'ID de hucha',
        'targetamount'            => 'monto objetivo',
        'openingBalanceDate'      => 'fecha de balance de apertura',
        'openingBalance'          => 'balance de apertura',
        'match'                   => 'emparejar',
        'amount_min'              => 'monto minimo',
        'amount_max'              => 'monto maximo',
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
];
