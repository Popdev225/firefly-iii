<?php
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
    'iban'                           => 'Dies ist keine gültige IBAN.',
    'unique_account_number_for_user' => 'Es sieht so aus, als ob diese Kontonummer bereits verwendet würde.',
    'rule_trigger_value'             => 'Dieser Wert ist für den ausgewählten Trigger ungültig.',
    'rule_action_value'              => 'Dieser Wert ist für die gewählte Aktion ungültig.',
    'invalid_domain'                 => 'Aufgrund von Sicherheitsbeschränkungen ist eine Registrierung von dieser Domain nicht zugelassen.',
    'file_already_attached'          => 'Die hochgeladene Datei ":name" ist diesem Objekt bereits angehängt.',
    'file_attached'                  => 'Datei ":name" erfolgreich hochgeladen.',
    'file_invalid_mime'              => 'Die Datei ":name" ist vom Typ ":mime", welcher nicht zum Upload zugelassen ist.',
    'file_too_large'                 => 'Die Datei ":name" ist zu groß.',
    'belongs_to_user'                => 'Der Wert von :attribute ist nicht bekannt',
    'accepted'                       => ':attribute muss akzeptiert werden.',
    'bic'                            => 'This is not a valid BIC.',
    'active_url'                     => ':attribute ist keine gültige URL.',
    'after'                          => ':attribute muss ein Datum nach :date sein.',
    'alpha'                          => ':attribute darf nur Buchstaben enthalten.',
    'alpha_dash'                     => ':attribute darf nur Buchstaben, Zahlen und Bindestrichen enthalten.',
    'alpha_num'                      => ':attribute darf nur Buchzahlen und Zahlen enthalten.',
    'array'                          => ':attribute muss eine Reihe sein.',
    'unique_for_user'                => 'Es gibt bereits einen Eintrag mit diesem :attribute.',
    'before'                         => ':attribute muss ein Datum vor dem :date sein.',
    'unique_object_for_user'         => 'Der Name wird bereits verwendet',
    'unique_account_for_user'        => 'Dieser Kontoname wird bereits verwendet',
    'between.numeric'                => ':attribute muss zwischen :min und :max liegen.',
    'between.file'                   => ':attribute muss zwischen :min und :max Kilobytes groß sein.',
    'between.string'                 => ':attribute muss zwischen :min und :max Zeichen lang sein.',
    'between.array'                  => ':attribute muss zwischen :min und :max Elemente enthalten.',
    'boolean'                        => ':attribute Feld muss wahr oder falsch sein.',
    'confirmed'                      => ':attribute Bestätigung stimmt nicht überein.',
    'date'                           => ':attribute ist kein gültiges Datum.',
    'date_format'                    => ':attribute entspricht nicht dem Format :format.',
    'different'                      => ':attribute und :other müssen sich unterscheiden.',
    'digits'                         => ':attribute muss :digits Stellen haben.',
    'digits_between'                 => ':attribute muss zwischen :min und :max Stellen haben.',
    'email'                          => ':attribute muss eine gültige E-Mailadresse sein.',
    'filled'                         => ':attribute Feld muss ausgefüllt sein.',
    'exists'                         => ':attribute ist ungültig.',
    'image'                          => ':attribute muss ein Bild sein.',
    'in'                             => ':attribute ist ungültig.',
    'integer'                        => ':attribute muss eine ganze Zahl sein.',
    'ip'                             => ':attribute muss eine gültige IP-Adresse sein.',
    'json'                           => ':attribute muss ein gültiger JSON-String sein.',
    'max.numeric'                    => ':attribute darf nicht größer als :max sein.',
    'max.file'                       => ':attribute darf nicht größer als :max Kilobytes sein.',
    'max.string'                     => ':attribute darf nicht mehr als :max Zeichen enthalten.',
    'max.array'                      => ':attribute darf nicht mehr als :max Elemente enthalten.',
    'mimes'                          => ':attribute muss eine Datei des Typ :values sein.',
    'min.numeric'                    => ':attribute muss mindestens :min sein.',
    'min.file'                       => ':attribute muss mindestens :min Kilobytes groß sein.',
    'min.string'                     => ':attribute muss mindestens :min Zeichen enthalten.',
    'min.array'                      => ':attribute muss mindestens :min Elemente enthalten.',
    'not_in'                         => ':attribute ist ungültig.',
    'numeric'                        => ':attribute muss eine Zahl sein.',
    'regex'                          => 'Das Format von :attribute ist ungültig.',
    'required'                       => ':attribute Feld muss ausgefüllt sein.',
    'required_if'                    => ':attribute Feld ist notwendig, wenn :other :value entspricht.',
    'required_unless'                => ':attribute Feld ist notwendig, außer :other ist in :values enthalten.',
    'required_with'                  => ':attribute Feld ist notwendig falls :values vorhanden sind.',
    'required_with_all'              => ':attribute Feld ist notwendig falls :values vorhanden sind.',
    'required_without'               => ':attribute Feld ist notwenidig, falls :values nicht vorhanden ist.',
    'required_without_all'           => ':attribute Feld ist notwenidig, falls kein :values vorhanden ist.',
    'same'                           => ':attribute und :other müssen übereinstimmen.',
    'size.numeric'                   => ':attribute muss :size sein.',
    'size.file'                      => ':attribute muss :size Kilobytes groß sein.',
    'size.string'                    => ':attribute muss :size Zeichen enthalten.',
    'size.array'                     => ':attribute muss :size Elemente enthalten.',
    'unique'                         => ':attribute ist bereits vergeben.',
    'string'                         => ':attribute muss eine Zeichenfolge sein.',
    'url'                            => ':attribute Format ist ungültig.',
    'timezone'                       => ':attribute muss in einem gültigen Bereich liegen.',
    '2fa_code'                       => ':attribute Feld ist ungültig.',
    'dimensions'                     => 'Das :attribute hat ungültige Bilddimensionen.',
    'distinct'                       => ':attribute enthält einen doppelten Wert.',
    'file'                           => 'Das :attribute muss eine Datei sein.',
    'in_array'                       => ':attribute existiert nicht in :other.',
    'present'                        => 'Das :attribute Feld muss vorhanden sein.',
];