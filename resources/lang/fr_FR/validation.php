<?php
/**
 * validation.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

return [
    'iban'                           => 'This is not a valid IBAN.',
    'unique_account_number_for_user' => 'It looks like this account number is already in use.',
    'rule_trigger_value'             => 'This value is invalid for the selected trigger.',
    'rule_action_value'              => 'This value is invalid for the selected action.',
    'invalid_domain'                 => 'Due to security constraints, you cannot register from this domain.',
    'file_already_attached'          => 'Uploaded file ":name" is already attached to this object.',
    'file_attached'                  => 'Succesfully uploaded file ":name".',
    'file_invalid_mime'              => 'File ":name" is of type ":mime" which is not accepted as a new upload.',
    'file_too_large'                 => 'File ":name" is too large.',
    'belongs_to_user'                => 'The value of :attribute is unknown',
    'accepted'                       => 'Le champ :attribute doit être accepté.',
    'active_url'                     => 'Le champ :attribute n\'est pas une URL valide.',
    'after'                          => 'Le champ :attribute doit être une date postérieure au :date.',
    'alpha'                          => 'Le champ :attribute doit seulement contenir des lettres.',
    'alpha_dash'                     => 'Le champ :attribute doit seulement contenir des lettres, des chiffres et des tirets.',
    'alpha_num'                      => 'Le champ :attribute doit seulement contenir des chiffres et des lettres.',
    'array'                          => 'Le champ :attribute doit être un tableau.',
    'unique_for_user'                => 'There already is an entry with this :attribute.',
    'before'                         => 'Le champ :attribute doit être une date antérieure au :date.',
    'unique_object_for_user'         => 'This name is already in use',
    'unique_account_for_user'        => 'This account name is already in use',
    'between.numeric'                => 'La valeur de :attribute doit être comprise entre :min et :max.',
    'between.file'                   => 'Le fichier :attribute doit avoir une taille entre :min et :max kilo-octets.',
    'between.string'                 => 'Le texte :attribute doit avoir entre :min et :max caractères.',
    'between.array'                  => 'Le tableau :attribute doit avoir entre :min et :max éléments.',
    'boolean'                        => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed'                      => 'Le champ de confirmation :attribute ne correspond pas.',
    'date'                           => 'Le champ :attribute n\'est pas une date valide.',
    'date_format'                    => 'Le champ :attribute ne correspond pas au format :format.',
    'different'                      => 'Les champs :attribute et :other doivent être différents.',
    'digits'                         => 'Le champ :attribute doit avoir :digits chiffres.',
    'digits_between'                 => 'Le champ :attribute doit avoir entre :min et :max chiffres.',
    'email'                          => 'Le champ :attribute doit être une adresse email valide.',
    'filled'                         => 'Le champ :attribute est obligatoire.',
    'exists'                         => 'Le champ :attribute sélectionné est invalide.',
    'image'                          => 'Le champ :attribute doit être une image.',
    'in'                             => 'Le champ :attribute est invalide.',
    'integer'                        => 'Le champ :attribute doit être un entier.',
    'ip'                             => 'Le champ :attribute doit être une adresse IP valide.',
    'json'                           => 'Le champ :attribute doit être un document JSON valide.',
    'max.numeric'                    => 'La valeur de :attribute ne peut être supérieure à :max.',
    'max.file'                       => 'Le fichier :attribute ne peut être plus gros que :max kilo-octets.',
    'max.string'                     => 'Le texte de :attribute ne peut contenir plus de :max caractères.',
    'max.array'                      => 'Le tableau :attribute ne peut avoir plus de :max éléments.',
    'mimes'                          => 'Le champ :attribute doit être un fichier de type : :values.',
    'min.numeric'                    => 'La valeur de :attribute doit être supérieure à :min.',
    'min.file'                       => 'Le fichier :attribute doit être plus gros que :min kilo-octets.',
    'min.string'                     => 'Le texte :attribute doit contenir au moins :min caractères.',
    'min.array'                      => 'Le tableau :attribute doit avoir au moins :min éléments.',
    'not_in'                         => 'Le champ :attribute sélectionné n\'est pas valide.',
    'numeric'                        => 'Le champ :attribute doit contenir un nombre.',
    'regex'                          => 'Le format du champ :attribute est invalide.',
    'required'                       => 'Le champ :attribute est obligatoire.',
    'required_if'                    => 'Le champ :attribute est obligatoire quand la valeur de :other est :value.',
    'required_unless'                => 'Le champ :attribute est obligatoire sauf si :other est :values.',
    'required_with'                  => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_with_all'              => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_without'               => 'Le champ :attribute est obligatoire quand :values n\'est pas présent.',
    'required_without_all'           => 'Le champ :attribute est requis quand aucun de :values n\'est présent.',
    'same'                           => 'Les champs :attribute et :other doivent être identiques.',
    'size.numeric'                   => 'La valeur de :attribute doit être :size.',
    'size.file'                      => 'La taille du fichier de :attribute doit être de :size kilo-octets.',
    'size.string'                    => 'Le texte de :attribute doit contenir :size caractères.',
    'size.array'                     => 'Le tableau :attribute doit contenir :size éléments.',
    'unique'                         => 'La valeur du champ :attribute est déjà utilisée.',
    'string'                         => 'Le champ :attribute doit être une chaîne de caractères.',
    'url'                            => 'Le format de l\'URL de :attribute n\'est pas valide.',
    'timezone'                       => 'Le champ :attribute doit être un fuseau horaire valide.',
    '2fa_code'                       => 'The :attribute field is invalid.',
];
