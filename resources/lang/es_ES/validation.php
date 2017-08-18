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
    'max.string'                     => 'El campo :attribute debe contener menos de :max caracteres.',
    'max.array'                      => 'El campo :attribute debe contener al menos :max elementos.',
    'mimes'                          => 'El campo :attribute debe ser un archivo de tipo :values.',
    'min.numeric'                    => 'El campo :attribute debe ser al menos :min.',
    'min.file'                       => 'El campo :attribute debe ser al menos :min kilobytes.',
    'min.string'                     => 'El campo :attribute debe contener al menos :min caracteres.',
    'min.array'                      => 'El campo :attribute debe tener al menos :min elementos.',
    'not_in'                         => 'El campo :attribute seleccionado es inválido.',
    'numeric'                        => 'El campo :attribute debe ser un número.',
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
    'size.file'                      => 'El tamaño de :attribute debe ser :size kilobytes.',
    'size.string'                    => 'El campo :attribute debe tener :size caracteres.',
    'size.array'                     => 'El campo :attribute debe contener :size elementos.',
    'unique'                         => 'El elemento :attribute ya está en uso.',
    'string'                         => 'El campo :atribute debe ser un texto.',
    'url'                            => 'El formato del campo :attribute no es válido.',
    'timezone'                       => 'El campo :attribute debe contener una zona válida.',
    '2fa_code'                       => 'El campo :attribute no es válido.',
    'dimensions'                     => 'Las dimensiones de la imagen :attribute son incorrectas.',
    'distinct'                       => 'El campo :attribute tiene un valor duplicado.',
    'file'                           => 'El campo :attribute debe ser un fichero.',
    'in_array'                       => 'El campo :attribute no existe en :other.',
    'present'                        => 'El campo :attribute debe estar presente.',
    'amount_zero'                    => 'La cantidad total no puede ser cero',
    'secure_password'                => 'Esta contraseña no es segura. Por favor inténtalo de nuevo. Para más información, visita https://goo.gl/NCh2tN',
];