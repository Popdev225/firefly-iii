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
    'iban'                           => 'Il ne s\'agit pas d\'un IBAN valide.',
    'source_equals_destination'      => 'Le compte source est identique au compte de destination.',
    'unique_account_number_for_user' => 'Il semble que ce numéro de compte est déjà utilisé.',
    'unique_iban_for_user'           => 'Il semble que cet IBAN soit déjà utilisé.',
    'deleted_user'                   => 'Compte tenu des contraintes de sécurité, vous ne pouvez pas vous inscrire en utilisant cette adresse e-mail.',
    'rule_trigger_value'             => 'Cette valeur n’est pas valide pour le déclencheur sélectionné.',
    'rule_action_value'              => 'Cette valeur n’est pas valide pour l’action sélectionnée.',
    'file_already_attached'          => 'Le fichier téléchargé ":name" est déjà attaché à cet objet.',
    'file_attached'                  => 'Envoi du fichier ":name" avec succès.',
    'must_exist'                     => 'L\'ID dans le champ :attribute n\'existe pas dans la base de données.',
    'all_accounts_equal'             => 'Tous les comptes dans ce champ doivent être égaux.',
    'invalid_selection'              => 'Votre sélection est invalide.',
    'belongs_user'                   => 'Cette valeur n\'est pas valide pour ce champ.',
    'at_least_one_transaction'       => 'Besoin d\'au moins une transaction.',
    'at_least_one_repetition'        => 'Besoin d\'au moins une répétition.',
    'require_repeat_until'           => 'Besoin d’un certain nombre de répétitions ou d\'une date de fin (repeat_until). Pas les deux.',
    'require_currency_info'          => 'Le contenu de ce champ n\'est pas valide sans informations sur la devise.',
    'equal_description'              => 'La description de la transaction ne doit pas être identique à la description globale.',
    'file_invalid_mime'              => 'Le fichier ":name" est du type ":mime" ce qui n\'est pas accepté pour un nouvel envoi.',
    'file_too_large'                 => 'Le fichier ":name" est trop grand.',
    'belongs_to_user'                => 'La valeur de :attribute est inconnue.',
    'accepted'                       => 'Le champ :attribute doit être accepté.',
    'bic'                            => 'Ce n’est pas un code BIC valide.',
    'at_least_one_trigger'           => 'Une règle doit avoir au moins un déclencheur.',
    'at_least_one_action'            => 'Une règle doit avoir au moins une action.',
    'base64'                         => 'Il ne s\'agit pas de données base64 valides.',
    'model_id_invalid'               => 'L’ID fournit ne semble pas valide pour ce modèle.',
    'more'                           => ':attribute doit être supérieur à zéro.',
    'less'                           => ':attribute doit être inférieur à 10 000 000',
    'active_url'                     => 'Le champ :attribute n\'est pas une URL valide.',
    'after'                          => 'Le champ :attribute doit être une date postérieure à :date.',
    'alpha'                          => 'Le champ :attribute doit seulement contenir des lettres.',
    'alpha_dash'                     => 'Le champ :attribute peut seulement contenir des lettres, des chiffres et des tirets.',
    'alpha_num'                      => 'Le champ :attribute peut seulement contenir des chiffres et des lettres.',
    'array'                          => 'Le champ :attribute doit être un tableau.',
    'unique_for_user'                => 'Il existe déjà une entrée avec ceci :attribute.',
    'before'                         => 'Le champ :attribute doit être une date antérieure à :date.',
    'unique_object_for_user'         => 'Ce nom est déjà utilisé.',
    'unique_account_for_user'        => 'Ce nom de compte est déjà utilisé.',
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
    'lte.numeric'                    => ':attribute doit être inférieur ou égal à :value.',
    'min.file'                       => 'Le fichier :attribute doit être plus gros que :min kilo-octets.',
    'min.string'                     => 'Le texte :attribute doit contenir au moins :min caractères.',
    'min.array'                      => 'Le tableau :attribute doit avoir au moins :min éléments.',
    'not_in'                         => 'Le champ :attribute sélectionné n\'est pas valide.',
    'numeric'                        => 'Le champ :attribute doit contenir un nombre.',
    'numeric_native'                 => 'Le montant natif doit être un nombre.',
    'numeric_destination'            => 'Le montant de destination doit être un nombre.',
    'numeric_source'                 => 'Le montant source doit être un nombre.',
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
    'amount_min_over_max'            => 'Le montant minimum ne peut pas être supérieur au montant maximum.',
    'size.file'                      => 'La taille du fichier de :attribute doit être de :size kilo-octets.',
    'size.string'                    => 'Le texte de :attribute doit contenir :size caractères.',
    'size.array'                     => 'Le tableau :attribute doit contenir :size éléments.',
    'unique'                         => 'La valeur du champ :attribute est déjà utilisée.',
    'string'                         => 'Le champ :attribute doit être une chaîne de caractères.',
    'url'                            => 'Le format de l\'URL de :attribute n\'est pas valide.',
    'timezone'                       => 'Le champ :attribute doit être un fuseau horaire valide.',
    '2fa_code'                       => 'Le champ :attribute est invalide.',
    'dimensions'                     => 'Le :attribute possède des dimensions d’image non valides.',
    'distinct'                       => ':attribute possède une valeur en double.',
    'file'                           => 'Le :attribute doit être un fichier.',
    'in_array'                       => 'Le champ :attribute n\'existe pas dans :other.',
    'present'                        => 'Le champs :attribute doit être rempli.',
    'amount_zero'                    => 'Le montant total ne peut pas être zéro.',
    'unique_piggy_bank_for_user'     => 'Le nom de la tirelire doit être unique.',
    'secure_password'                => 'Ce n’est pas un mot de passe sécurisé. Veuillez essayer à nouveau. Pour plus d’informations, visitez http://bit.ly/FF3-password-security.',
    'valid_recurrence_rep_type'      => 'Type de répétition non valide pour des opérations périodiques.',
    'valid_recurrence_rep_moment'    => 'Période de répétition non valide pour ce type de répétition.',
    'invalid_account_info'           => 'Informations de compte non valides.',
    'attributes'                     => [
        'email'                   => 'adresse email',
        'description'             => 'description',
        'amount'                  => 'montant',
        'name'                    => 'nom',
        'piggy_bank_id'           => 'ID de tirelire',
        'targetamount'            => 'montant cible',
        'openingBalanceDate'      => 'date du solde initial',
        'openingBalance'          => 'solde initial',
        'match'                   => 'correspondance',
        'amount_min'              => 'montant minimum',
        'amount_max'              => 'montant maximum',
        'title'                   => 'titre',
        'tag'                     => 'tag',
        'transaction_description' => 'description de la transaction',
        'rule-action-value.1'     => 'valeur d\'action de la règle #1',
        'rule-action-value.2'     => 'valeur d\'action de la règle #2',
        'rule-action-value.3'     => 'valeur d\'action de la règle #3',
        'rule-action-value.4'     => 'valeur d\'action de la règle #4',
        'rule-action-value.5'     => 'valeur d\'action de la règle #5',
        'rule-action.1'           => 'action de règle #1',
        'rule-action.2'           => 'action de règle #2',
        'rule-action.3'           => 'action de règle #3',
        'rule-action.4'           => 'action de règle #4',
        'rule-action.5'           => 'action de règle #5',
        'rule-trigger-value.1'    => 'valeur seuil de déclenchement de la règle #1',
        'rule-trigger-value.2'    => 'valeur seuil de déclenchement de la règle #2',
        'rule-trigger-value.3'    => 'valeur seuil de déclenchement de la règle #3',
        'rule-trigger-value.4'    => 'valeur seuil de déclenchement de la règle #4',
        'rule-trigger-value.5'    => 'valeur seuil de déclenchement de la règle #5',
        'rule-trigger.1'          => 'déclencheur de règle #1',
        'rule-trigger.2'          => 'déclencheur de règle #2',
        'rule-trigger.3'          => 'déclencheur de règle #3',
        'rule-trigger.4'          => 'déclencheur de règle #4',
        'rule-trigger.5'          => 'déclencheur de règle #4',
    ],
];
