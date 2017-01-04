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
    'iban'                           => 'Dit is niet een geldige IBAN.',
    'unique_account_number_for_user' => 'Het lijkt erop dat dit rekeningnummer al in gebruik is.',
    'deleted_user'                   => 'Je kan je niet registreren met dit e-mailadres.',
    'rule_trigger_value'             => 'Deze waarde is niet geldig voor de geselecteerde trigger.',
    'rule_action_value'              => 'Deze waarde is niet geldig voor de geselecteerde actie.',
    'invalid_domain'                 => 'Kan niet registereren vanaf dit domein.',
    'file_already_attached'          => 'Het geuploade bestand ":name" is al gelinkt aan deze transactie.',
    'file_attached'                  => 'Bestand met naam ":name" is met succes geuploaded.',
    'file_invalid_mime'              => 'Bestand ":name" is van het type ":mime", en die kan je niet uploaden.',
    'file_too_large'                 => 'Bestand ":name" is te groot.',
    'belongs_to_user'                => 'De waarde van :attribute is onbekend',
    'accepted'                       => ':attribute moet geaccepteerd zijn.',
    'bic'                            => 'Dit is geen geldige BIC.',
    'more'                           => ':attribute must be larger than zero.',
    'active_url'                     => ':attribute is geen geldige URL.',
    'after'                          => ':attribute moet een datum na :date zijn.',
    'alpha'                          => ':attribute mag alleen letters bevatten.',
    'alpha_dash'                     => ':attribute mag alleen letters, nummers, onderstreep(_) en strepen(-) bevatten.',
    'alpha_num'                      => ':attribute mag alleen letters en nummers bevatten.',
    'array'                          => ':attribute moet geselecteerde elementen bevatten.',
    'unique_for_user'                => 'Er is al een entry met deze :attribute.',
    'before'                         => ':attribute moet een datum voor :date zijn.',
    'unique_object_for_user'         => 'Deze naam is al in gebruik',
    'unique_account_for_user'        => 'This rekeningnaam is already in use',
    'between.numeric'                => ':attribute moet tussen :min en :max zijn.',
    'between.file'                   => ':attribute moet tussen :min en :max kilobytes zijn.',
    'between.string'                 => ':attribute moet tussen :min en :max karakters zijn.',
    'between.array'                  => ':attribute moet tussen :min en :max items bevatten.',
    'boolean'                        => ':attribute moet true of false zijn.',
    'confirmed'                      => ':attribute bevestiging komt niet overeen.',
    'date'                           => ':attribute moet een datum bevatten.',
    'date_format'                    => ':attribute moet een geldig datum formaat bevatten.',
    'different'                      => ':attribute en :other moeten verschillend zijn.',
    'digits'                         => ':attribute moet bestaan uit :digits cijfers.',
    'digits_between'                 => ':attribute moet bestaan uit minimaal :min en maximaal :max cijfers.',
    'email'                          => ':attribute is geen geldig e-mailadres.',
    'filled'                         => ':attribute is verplicht.',
    'exists'                         => ':attribute bestaat niet.',
    'image'                          => ':attribute moet een afbeelding zijn.',
    'in'                             => ':attribute is ongeldig.',
    'integer'                        => ':attribute moet een getal zijn.',
    'ip'                             => ':attribute moet een geldig IP-adres zijn.',
    'json'                           => 'De :attribute moet een JSON tekst zijn.',
    'max.numeric'                    => ':attribute mag niet hoger dan :max zijn.',
    'max.file'                       => ':attribute mag niet meer dan :max kilobytes zijn.',
    'max.string'                     => ':attribute mag niet uit meer dan :max karakters bestaan.',
    'max.array'                      => ':attribute mag niet meer dan :max items bevatten.',
    'mimes'                          => ':attribute moet een bestand zijn van het bestandstype :values.',
    'min.numeric'                    => ':attribute moet minimaal :min zijn.',
    'min.file'                       => ':attribute moet minimaal :min kilobytes zijn.',
    'min.string'                     => ':attribute moet minimaal :min karakters zijn.',
    'min.array'                      => ':attribute moet minimaal :min items bevatten.',
    'not_in'                         => 'Het formaat van :attribute is ongeldig.',
    'numeric'                        => ':attribute moet een nummer zijn.',
    'regex'                          => ':attribute formaat is ongeldig.',
    'required'                       => ':attribute is verplicht.',
    'required_if'                    => ':attribute is verplicht indien :other gelijk is aan :value.',
    'required_unless'                => ':attribute is verplicht tenzij :other gelijk is aan :values.',
    'required_with'                  => ':attribute is verplicht i.c.m. :values',
    'required_with_all'              => ':attribute is verplicht i.c.m. :values',
    'required_without'               => ':attribute is verplicht als :values niet ingevuld is.',
    'required_without_all'           => ':attribute is verplicht als :values niet ingevuld zijn.',
    'same'                           => ':attribute en :other moeten overeenkomen.',
    'size.numeric'                   => ':attribute moet :size zijn.',
    'size.file'                      => ':attribute moet :size kilobyte zijn.',
    'size.string'                    => ':attribute moet :size karakters zijn.',
    'size.array'                     => ':attribute moet :size items bevatten.',
    'unique'                         => ':attribute is al in gebruik.',
    'string'                         => 'Het :attribute moet een tekenreeks zijn.',
    'url'                            => ':attribute is geen geldige URL.',
    'timezone'                       => 'Het :attribute moet een geldige zone zijn.',
    '2fa_code'                       => 'De waarde in het :attribute-veld is niet geldig.',
    'dimensions'                     => 'Het :attribute heeft het verkeerde afbeeldingsformaat.',
    'distinct'                       => 'Het :attribute veld heeft een dubbele waarde.',
    'file'                           => ':attribute moet een bestand zijn.',
    'in_array'                       => 'Het :attribute veld bestaat niet in :other.',
    'present'                        => 'Het :attribute veld moet aanwezig zijn.',
    'amount_zero'                    => 'Het totaalbedrag kan niet nul zijn',
];