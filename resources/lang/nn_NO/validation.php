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
    'missing_where'                  => 'Matrise mangler "where"-klausul',
    'missing_update'                 => 'Matrise mangler "update"-klausul',
    'invalid_where_key'              => 'JSON inneheld ein ugyldig nøkkel for "where"-klausulen',
    'invalid_update_key'             => 'JSON inneheld ein ugyldig nøkkel for "update"-klausulen',
    'invalid_query_data'             => 'Det eksisterar ugyldig data i %s:%s -feltet for din spørring.',
    'invalid_query_account_type'     => 'Spørringa inneheld kontoar av ulike typer, det er ikkje tillatt.',
    'invalid_query_currency'         => 'Søket inneheld kontoar som har ulike valuta-innstillingar, det er ikkje tillatt.',
    'iban'                           => 'Dette er ikkje ein gyldig IBAN.',
    'zero_or_more'                   => 'Verdien kan ikkje vera negativ.',
    'date_or_time'                   => 'Verdien må vera eit gyldig dato- eller klokkeslettformat (ISO 8601).',
    'source_equals_destination'      => 'Kjeldekontoen er lik destinasjonskonto.',
    'unique_account_number_for_user' => 'Det ser ut som dette kontonummeret er allereie i bruk.',
    'unique_iban_for_user'           => 'Det ser ut som dette IBAN er allereie i bruk.',
    'deleted_user'                   => 'På grunn av sikkerhetsbegrensninger kan du ikkje registreres med denne e-postadresse.',
    'rule_trigger_value'             => 'Denne verdien er ugyldig for den valde triggeren.',
    'rule_action_value'              => 'Denne verdien er ugyldig for den valde handlinga.',
    'file_already_attached'          => 'Opplastede fil ":name" er allereie knytt til dette objektet.',
    'file_attached'                  => 'Opplasting av fil ":name" var vellukka.',
    'must_exist'                     => 'IDen i feltet :attribute eksisterar ikkje i databasen.',
    'all_accounts_equal'             => 'Alle kontoar i dette feltet må vera like.',
    'group_title_mandatory'          => 'Ein gruppetittel er obligatorisk når det er meir enn ein transaksjon.',
    'transaction_types_equal'        => 'Alle deler må vera av samme type.',
    'invalid_transaction_type'       => 'Ugyldig transaksjonstype.',
    'invalid_selection'              => 'Dine val er ugyldig.',
    'belongs_user'                   => 'This value is linked to an object that does not belong to you.',
    'belongs_user_or_user_group'     => 'This value is linked to an object that does not belong to your current financial administration.',
    'at_least_one_transaction'       => 'Trenger minst ein transaksjon.',
    'recurring_transaction_id'       => 'Need at least one transaction.',
    'need_id_to_match'               => 'You need to submit this entry with an ID for the API to be able to match it.',
    'too_many_unmatched'             => 'Det er for mange sendte transaksjonar som ikkje passar til sine respektive databaseoppføringar. Pass på at eksisterende oppføringer har ein gyldig ID.',
    'id_does_not_match'              => 'Innsendt ID #:id samsvarar ikkje med forventa ID. Kontroller at den samsvarer, eller utelat feltet.',
    'at_least_one_repetition'        => 'Trenge minst ei gjentaking.',
    'require_repeat_until'           => 'Krever enten eit antal repetisjoner eller ein slutt dato (gjentas til). Ikke begge.',
    'require_currency_info'          => 'Innhaldet i dette feltet er ugyldig uten valutainformasjon.',
    'not_transfer_account'           => 'Denne kontoen er ikkje ein konto som kan benyttes for overføringer.',
    'require_currency_amount'        => 'Innhaldet i dette feltet er ugyldig uten utenlandsk beløpsinformasjon.',
    'require_foreign_currency'       => 'Dette feltet krever eit tal',
    'require_foreign_dest'           => 'Denne feltverdien må samsvare med valutaen til målkontoen.',
    'require_foreign_src'            => 'Denne feltverdien må samsvare med valutaen til kildekontoen.',
    'equal_description'              => 'Transaksjonsbeskrivinga bør ikkje vera lik global beskriving.',
    'file_invalid_mime'              => 'Kan ikkje akseptere fil ":name" av typen ":mime" for opplasting.',
    'file_too_large'                 => '":name"-filen er for stor.',
    'belongs_to_user'                => 'Verdien av :attribute er ukjent.',
    'accepted'                       => ':attribute må verta godtatt.',
    'bic'                            => 'Dette er ikkje ein gyldig BIC.',
    'at_least_one_trigger'           => 'Regel må ha minst ein trigger.',
    'at_least_one_active_trigger'    => 'Regel må ha minst ein aktiv trigger.',
    'at_least_one_action'            => 'Regel må ha minst ein aksjon.',
    'at_least_one_active_action'     => 'Regel må ha minst ein aktiv handling.',
    'base64'                         => 'Dette er ikkje godkjent base64 kodet data.',
    'model_id_invalid'               => 'Den angitte ID er ugyldig for denne modellen.',
    'less'                           => ':attribute må vera mindre enn 10,000,000',
    'active_url'                     => ':attribute er ikkje ein gyldig URL.',
    'after'                          => ':attribute må vera ein dato etter :date.',
    'date_after'                     => 'Startdatoen må vera før sluttdato.',
    'alpha'                          => ':attribute kan kun innehalda bokstavar.',
    'alpha_dash'                     => ':attribute kan berre innehalda bokstavar, tal og bindestrekar.',
    'alpha_num'                      => ':attribute kan berre inneholda bokstavar og tal.',
    'array'                          => ':attribute må vera ein liste.',
    'unique_for_user'                => 'Det eksisterar allereie ein førekomst med :attribute.',
    'before'                         => ':attribute må vera ein dato før :date.',
    'unique_object_for_user'         => 'Dette namnet er allereie i bruk.',
    'unique_account_for_user'        => 'Dette konto namnet er allereie i bruk.',

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


    'between.numeric'            => ':attribute må vera ein verdi mellom :min og :max.',
    'between.file'               => ':attribute må vera mellom :min og :max kilobyte.',
    'between.string'             => ':attribute må vera mellom :min og :max teikn.',
    'between.array'              => ':attribute må ha mellom :min og :max element.',
    'boolean'                    => ':attribute må vera sann eller usann.',
    'confirmed'                  => ':attribute bekreftelsen stemmer ikkje overens.',
    'date'                       => ':attribute er ikkje ein gyldig dato.',
    'date_format'                => ':attribute samsvarer ikkje med formatet :format.',
    'different'                  => ':attribute og :other må vera forskjellig.',
    'digits'                     => ':attribute må vera :digits sifre.',
    'digits_between'             => ':attribute må vera mellom :min og :max sifre.',
    'email'                      => ':attribute må vera ein gyldig epostaddresse.',
    'filled'                     => ':attribute må fyllast ut.',
    'exists'                     => 'Den valde :attribute er ikkje gyldig.',
    'image'                      => ':attribute må vera eit bilde.',
    'in'                         => 'Den valde :attribute er ikkje gyldig.',
    'integer'                    => ':attribute må vera eit heltall.',
    'ip'                         => ':attribute må vera ein gyldig IP-addresse.',
    'json'                       => ':attribute må vera ein gyldig JSON streng.',
    'max.numeric'                => ':attribute ikkje kan vera større enn :max.',
    'max.file'                   => ':attribute ikkje kan vera større enn :max kilobytes.',
    'max.string'                 => ':attribute ikkje kan vera større enn :max teikn.',
    'max.array'                  => ':attribute kan ikkje innehalda meir enn :max element.',
    'mimes'                      => ':attribute må vera ein fil av type: :values.',
    'min.numeric'                => ':attribute må vera minst :min.',
    'lte.numeric'                => ':attribute må vera mindre enn eller lik :value.',
    'min.file'                   => ':attribute må vera minst :min kilobytes.',
    'min.string'                 => ':attribute må vera minst :min teikn.',
    'min.array'                  => ':attribute må innehalde minst :min element.',
    'not_in'                     => 'Den valde :attribute er ikkje gyldig.',
    'numeric'                    => ':attribute må vera eit tal.',
    'numeric_native'             => 'Den normale beløpet må vera eit nummer.',
    'numeric_destination'        => 'Destinasjons beløpet må vera eit nummer.',
    'numeric_source'             => 'Kjelde beløpet må vera eit nummer.',
    'regex'                      => ':attribute formatet er ugyldig.',
    'required'                   => ':attribute feltet må fyllast ut.',
    'required_if'                => ':attribute feltet er påkrevd når :other er :value.',
    'required_unless'            => ':attribute feltet er påkrevd om ikkje :other er i :values.',
    'required_with'              => ':attribute feltet er nødvendig når :values er tilstede.',
    'required_with_all'          => ':attribute feltet er nødvendig når :values er tilstede.',
    'required_without'           => ':attribute er påkrevd når :values ikkje er definert.',
    'required_without_all'       => ':attribute er påkrevd når ingen av :values er definert.',
    'same'                       => ':attribute og :other må vera like.',
    'size.numeric'               => ':attribute må vera :size.',
    'amount_min_over_max'        => 'Minimumsbeløpet kan ikkje vera større enn maksimumsbeløpet.',
    'size.file'                  => ':attribute må vera :size kilobyte.',
    'size.string'                => ':attribute må vera :size teikn.',
    'size.array'                 => ':attribute må innehalda :size element.',
    'unique'                     => ':attribute har allereie vorte tatt.',
    'string'                     => ':attribute må vera ein streng.',
    'url'                        => ':attribute formatet er ugyldig.',
    'timezone'                   => ':attribute må vera ein gyldig tidssone.',
    '2fa_code'                   => ':attribute formatet er ugyldig.',
    'dimensions'                 => ':attribute har ugyldig bilde dimensjoner.',
    'distinct'                   => ':attribute feltet har ein duplikatverdi.',
    'file'                       => ':attribute må vera ein fil.',
    'in_array'                   => 'Feltet :attribute eksisterar ikkje i :other.',
    'present'                    => ':attribute feltet må vera definert.',
    'amount_zero'                => 'Totalbeløpet kan ikkje vera null.',
    'current_target_amount'      => 'Det noverande beløpet må vera mindre enn målbeløpet.',
    'unique_piggy_bank_for_user' => 'Namnet på sparegris må vera unik.',
    'unique_object_group'        => 'Gruppenamnet må vera unikt',
    'starts_with'                => 'Verdien må starte med :values.',
    'unique_webhook'             => 'Du har allereie ein webhook med denne kombinasjonen URL, utløser, respons og levering.',
    'unique_existing_webhook'    => 'Du har allereie ein annan webhook med denne kombinasjonen URL, utløser, respons og levering.',
    'same_account_type'          => 'Begge kontoar må vera av samme kontotype',
    'same_account_currency'      => 'Begge kontoar må ha samme valuta-innstilling',

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


    'secure_password'             => 'Dette er ikkje eit sikkert passord. Ver venleg å prøv igjen. For meir informasjon, sjå https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Ugyldig repetisjons type for gjentakande transaksjonar.',
    'valid_recurrence_rep_moment' => 'Ugyldig repetisjons tid for denne type repetisjon.',
    'invalid_account_info'        => 'Ugyldig konto informasjon.',
    'attributes'                  => [
        'email'                   => 'epostadresse',
        'description'             => 'beskriving',
        'amount'                  => 'beløp',
        'transactions.*.amount'   => 'transaksjonsbeløp',
        'name'                    => 'namn',
        'piggy_bank_id'           => 'sparegris ID',
        'targetamount'            => 'målbeløp',
        'opening_balance_date'    => 'åpningssaldo dato',
        'opening_balance'         => 'åpningssaldo',
        'match'                   => 'match',
        'amount_min'              => 'minimumsbeløp',
        'amount_max'              => 'maksimumsbeløp',
        'title'                   => 'tittel',
        'tag'                     => 'nøkkelord',
        'transaction_description' => 'transaksjonsbeskriving',
        'rule-action-value.1'     => 'regel aksjonsverdi #1',
        'rule-action-value.2'     => 'regel aksjonsverdi #2',
        'rule-action-value.3'     => 'regel aksjonsverdi #3',
        'rule-action-value.4'     => 'regel aksjonsverdi #4',
        'rule-action-value.5'     => 'regel aksjonsverdi #5',
        'rule-action.1'           => 'regel aksjon#1',
        'rule-action.2'           => 'regel aksjon#2',
        'rule-action.3'           => 'regel aksjon#3',
        'rule-action.4'           => 'regel aksjon#4',
        'rule-action.5'           => 'regel aksjon#5',
        'rule-trigger-value.1'    => 'regel trigger verdi #1',
        'rule-trigger-value.2'    => 'regel trigger verdi #2',
        'rule-trigger-value.3'    => 'regel trigger verdi #3',
        'rule-trigger-value.4'    => 'regel trigger verdi #4',
        'rule-trigger-value.5'    => 'regel trigger verdi #5',
        'rule-trigger.1'          => 'regel trigger #1',
        'rule-trigger.2'          => 'regel trigger #2',
        'rule-trigger.3'          => 'regel trigger #3',
        'rule-trigger.4'          => 'regel trigger #4',
        'rule-trigger.5'          => 'regel trigger #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Trenger ein gyldig kilde konto-ID og/eller gyldig kilde kontonamn for å fortsetja.',
    'withdrawal_source_bad_data'  => '[a] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'withdrawal_dest_need_data'   => '[a] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'withdrawal_dest_bad_data'    => 'Kunne ikkje finna ein gyldig målkonto ved søk etter ID ":id" eller namn ":name".',

    'withdrawal_dest_iban_exists' => 'This destination account IBAN is already in use by an asset account or a liability and cannot be used as a withdrawal destination.',
    'deposit_src_iban_exists'     => 'This source account IBAN is already in use by an asset account or a liability and cannot be used as a deposit source.',

    'reconciliation_source_bad_data' => 'Kunne ikkje finna ein gyldig avstemmingskonto ved søk etter ID ":id" eller namn ":name".',

    'generic_source_bad_data' => '[e] Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data' => 'Trenger ein gyldig kilde konto-ID og/eller gyldig kilde kontonamn for å fortsetja.',
    'deposit_source_bad_data'  => '[b] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'deposit_dest_need_data'   => '[b] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'deposit_dest_bad_data'    => 'Kunne ikkje finna ein gyldig destinasjons konto ved å søke etter ID ":id" eller namn ":name".',
    'deposit_dest_wrong_type'  => 'Den oppgitte målkontoen er ikkje av rett type.',

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


    'transfer_source_need_data' => 'Trenger ein gyldig kilde konto-ID og/eller gyldig kilde kontonamn for å fortsetja.',
    'transfer_source_bad_data'  => '[c] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'transfer_dest_need_data'   => '[c] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'transfer_dest_bad_data'    => 'Kunne ikkje finna ein gyldig destinasjons konto ved å søke etter ID ":id" eller namn ":name".',
    'need_id_in_edit'           => 'Kvar del må ha transaction_journal_id (enten gyldig ID eller 0).',

    'ob_source_need_data'           => 'Trenger ein gyldig kjeldekonto ID og/eller gyldig kjeldekonto namn for å fortsetja.',
    'lc_source_need_data'           => 'Trenger ein gyldig kjeldekonto ID for å fortsetja.',
    'ob_dest_need_data'             => '[d] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'              => 'Kunne ikkje finna ein gyldig destinasjonskonto ved søk etter ID ":id" eller namn ":name".',
    'reconciliation_either_account' => 'For å utføre ein avstemming, må du enten oppgi ein kilde eller ein målkonto. Ikke begge eller ingen.',

    'generic_invalid_source'      => 'Du kan ikkje bruka denne kontoen som kildekonto.',
    'generic_invalid_destination' => 'Du kan ikkje bruka denne kontoen som destinasjonskonto.',

    'generic_no_source'      => 'Du må sende inn kontoinformasjon eller sende inn transaksjons-journal-ID.',
    'generic_no_destination' => 'Du må sende inn kontoinformasjon om mottakerkontoen, eller sende inn ein transaksjons-journal-ID.',

    'gte.numeric' => ':attribute må vera større enn eller lik :value.',
    'gt.numeric'  => ':attribute må vera større enn :value.',
    'gte.file'    => ':attribute må vera større enn eller lik :value kilobyte.',
    'gte.string'  => ':attribute må vera større enn eller lik :value teikn.',
    'gte.array'   => ':attribute må ha :value element eller meir.',

    'amount_required_for_auto_budget' => 'Beløpet er påkrevd.',
    'auto_budget_amount_positive'     => 'Beløpet må vera meir enn null.',
    'auto_budget_period_mandatory'    => 'Auto budsjett perioden er eit obligatorisk felt.',

    // no access to administration:
    'no_access_user_group'            => 'Du har ikkje rettigheter til denne handlinga.',
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
