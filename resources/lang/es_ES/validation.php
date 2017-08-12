<?php
declare(strict_types=1);

/**
 * validation.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

return [
    'iban'                           => 'This is not a valid CBU.',
    'unique_account_number_for_user' => 'Parece que este número de cuenta ya está en uso.',
    'deleted_user'                   => 'Debido a restricciones de seguridad, no se puede registrar utilizando esta dirección de correo electrónico.',
    'rule_trigger_value'             => 'Este valor es válido para el disparador seleccionado.',
    'rule_action_value'              => 'Este valor es inválido para la acción seleccionado.',
    'invalid_domain'                 => 'Debido a restricciones de seguridad, no se puede registrar utilizando este dominio.',
    'file_already_attached'          => 'Archivo ":name" ya ha sido añadido para este objeto.',
    'file_attached'                  => 'Archivo subido correctamente ": nombre".',
    'file_invalid_mime'              => 'Archivo ":name" es de tipo": mime" que no es aceptado como una nueva carga.',
    'file_too_large'                 => 'Archivo ":name" es demasiado grande.',
    'belongs_to_user'                => 'El valor de :attribute es desconocido',
    'accepted'                       => 'El :attribute debe ser aceptado.',
    'bic'                            => 'Esto no es un BIC válido.',
    'more'                           => ':attribute debe ser mayor que cero.',
    'active_url'                     => 'El campo :attribute no es una URL válida.',
    'after'                          => 'El campo :attribute debe ser una fecha posterior a :date.',
    'alpha'                          => 'El campo :attribute sólo puede contener letras.',
    'alpha_dash'                     => 'El campo :attribute sólo puede contener letras, números y guiones.',
    'alpha_num'                      => 'El campo :attribute sólo puede contener letras y números.',
    'array'                          => 'El campo :attribute debe ser un arreglo.',
    'unique_for_user'                => 'Ya hay una entrada con esto :attribute.',
    'before'                         => 'El campo :attribute debe contener una fecha anterior a :date.',
    'unique_object_for_user'         => 'Este nombre ya está en uso',
    'unique_account_for_user'        => 'Este nombre cuenta ya está en uso',
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
    'max.string'                     => 'The :attribute may not be greater than :max characters.',
    'max.array'                      => 'The :attribute may not have more than :max items.',
    'mimes'                          => 'The :attribute must be a file of type: :values.',
    'min.numeric'                    => 'The :attribute must be at least :min.',
    'min.file'                       => 'The :attribute must be at least :min kilobytes.',
    'min.string'                     => 'The :attribute must be at least :min characters.',
    'min.array'                      => 'The :attribute must have at least :min items.',
    'not_in'                         => 'The selected :attribute is invalid.',
    'numeric'                        => 'The :attribute must be a number.',
    'regex'                          => 'The :attribute format is invalid.',
    'required'                       => 'The :attribute field is required.',
    'required_if'                    => 'The :attribute field is required when :other is :value.',
    'required_unless'                => 'The :attribute field is required unless :other is in :values.',
    'required_with'                  => 'The :attribute field is required when :values is present.',
    'required_with_all'              => 'The :attribute field is required when :values is present.',
    'required_without'               => 'The :attribute field is required when :values is not present.',
    'required_without_all'           => 'The :attribute field is required when none of :values are present.',
    'same'                           => 'The :attribute and :other must match.',
    'size.numeric'                   => 'The :attribute must be :size.',
    'size.file'                      => 'The :attribute must be :size kilobytes.',
    'size.string'                    => 'The :attribute must be :size characters.',
    'size.array'                     => 'The :attribute must contain :size items.',
    'unique'                         => 'The :attribute has already been taken.',
    'string'                         => 'The :attribute must be a string.',
    'url'                            => 'The :attribute format is invalid.',
    'timezone'                       => 'The :attribute must be a valid zone.',
    '2fa_code'                       => 'The :attribute field is invalid.',
    'dimensions'                     => 'The :attribute has invalid image dimensions.',
    'distinct'                       => 'The :attribute field has a duplicate value.',
    'file'                           => 'The :attribute must be a file.',
    'in_array'                       => 'The :attribute field does not exist in :other.',
    'present'                        => 'The :attribute field must be present.',
    'amount_zero'                    => 'The total amount cannot be zero',
    'secure_password'                => 'This is not a secure password. Please try again. For more information, visit https://goo.gl/NCh2tN',
];