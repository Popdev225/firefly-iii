<?php
declare(strict_types=1);
/**
 * validation.php
 * Copyright (c) 2017 thegrumpydictator@gmail.com
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

return [
    'iban'                           => 'Questo non è un IBAN valido.',
    'source_equals_destination'      => 'The source account equals the destination account',
    'unique_account_number_for_user' => 'Sembra che questo numero di conto sia già in uso.',
    'unique_iban_for_user'           => 'Sembra che questo IBAN sia già in uso.',
    'deleted_user'                   => 'A causa dei vincoli di sicurezza, non è possibile registrarsi utilizzando questo indirizzo email.',
    'rule_trigger_value'             => 'Questo valore non è valido per il trigger selezionato.',
    'rule_action_value'              => 'Questo valore non è valido per l\'azione selezionata.',
    'file_already_attached'          => 'Il file caricato ":name" è già associato a questo oggetto.',
    'file_attached'                  => 'File caricato con successo ":name".',
    'must_exist'                     => 'L\'ID nel campo :attribute non esiste nel database.',
    'all_accounts_equal'             => 'Tutti i conti in questo campo devono essere uguali.',
    'invalid_selection'              => 'La tua selezione non è valida',
    'belongs_user'                   => 'Questo valore non è valido per questo campo.',
    'at_least_one_transaction'       => 'Hai bisogno di almeno una transazione.',
    'require_currency_info'          => 'Il contenuto di questo campo non è valido senza informazioni sulla valuta.',
    'equal_description'              => 'La descrizione della transazione non deve essere uguale alla descrizione globale.',
    'file_invalid_mime'              => 'Il file ":name" è di tipo ":mime" che non è accettato come nuovo caricamento.',
    'file_too_large'                 => 'Il file ":name" è troppo grande.',
    'belongs_to_user'                => 'Il valore di :attribute è sconosciuto',
    'accepted'                       => 'L\' :attribute deve essere accettato.',
    'bic'                            => 'Questo non è un BIC valido.',
    'more'                           => ':attribute deve essere maggiore di zero.',
    'active_url'                     => ':attribute non è un URL valido.',
    'after'                          => ':attribute deve essere una data dopo :date.',
    'alpha'                          => ':attribute può contenere solo lettere.',
    'alpha_dash'                     => ':attribute può contenere solo lettere, numeri e trattini.',
    'alpha_num'                      => ':attribute può contenere solo lettere e numeri.',
    'array'                          => ':attribute deve essere una matrice.',
    'unique_for_user'                => 'C\'è già una voce con questo :attribute.',
    'before'                         => ':attribute deve essere una data prima :date.',
    'unique_object_for_user'         => 'Questo nome è già in uso',
    'unique_account_for_user'        => 'Questo nome conto è già in uso',
    'between.numeric'                => ':attribute con questo nome conto è già in uso :min e :max.',
    'between.file'                   => ':attribute deve essere :min e :max kilobyte.',
    'between.string'                 => ':attribute deve essere tra :min e :max caratteri.',
    'between.array'                  => ':attribute deve essere tra :min e :max voci.',
    'boolean'                        => ':attribute deve essere vero o falso.',
    'confirmed'                      => ':attribute la conferma non corrisponde.',
    'date'                           => ':attribute non è una data valida',
    'date_format'                    => ':attribute non corrisponde al formato :format.',
    'different'                      => ':attribute e :other deve essere diverso.',
    'digits'                         => ':attribute deve essere :digits cifre.',
    'digits_between'                 => ':attribute deve essere :min e :max cifre.',
    'email'                          => ':attribute deve essere un indirizzo email valido.',
    'filled'                         => ':attribute il campo è obbligatiorio.',
    'exists'                         => ':attribute selezionato non è valido.',
    'image'                          => ':attribute deve essere un\'immagine.',
    'in'                             => ':attribute selezionato non è valido.',
    'integer'                        => ':attribute deve essere un numero intero.',
    'ip'                             => ':attribute deve essere un indirizzo IP valido.',
    'json'                           => ':attribute deve essere una stringa JSON.',
    'max.numeric'                    => ':attribute non può essere maggiore di :max.',
    'max.file'                       => ':attribute non può essere maggiore di :max kilobytes.',
    'max.string'                     => ':attribute non può essere maggiore di :max caratteri.',
    'max.array'                      => ':attribute potrebbe non avere più di :max voce.',
    'mimes'                          => ':attribute deve essere un file di tipo: :values.',
    'min.numeric'                    => ':attribute deve essere almeno :min.',
    'min.file'                       => ':attribute deve essere almeno :min kilobytes.',
    'min.string'                     => ':attribute deve essere almeno :min caratteri.',
    'min.array'                      => ':attribute deve avere almeno :min voci.',
    'not_in'                         => ':attribute selezionato è invalido.',
    'numeric'                        => ':attribute deve essere un numero.',
    'regex'                          => ':attribute formato non valido',
    'required'                       => ':attribute il campo è obbligatiorio.',
    'required_if'                    => ':attribute il campo è richiesto quando :other is :value.',
    'required_unless'                => ':attribute il campo è richiesto a meno che :other è in :values.',
    'required_with'                  => ':attribute il campo è richiesto quando :values è presente.',
    'required_with_all'              => ':attribute il campo è richiesto quando :values è presente.',
    'required_without'               => ':attribute il campo è richiesto quando :values non è presente.',
    'required_without_all'           => ':attribute il campo è richiesto quando nessuno di :values sono presenti.',
    'same'                           => ':attribute e :other deve combaciare.',
    'size.numeric'                   => ':attribute deve essere :size.',
    'amount_min_over_max'            => 'L\'importo minimo non può essere maggiore dell\'importo massimo.',
    'size.file'                      => ':attribute deve essere :size kilobytes.',
    'size.string'                    => ':attribute deve essere :size caratteri.',
    'size.array'                     => ':attribute deve contenere :size voci.',
    'unique'                         => ':attribute è già stato preso.',
    'string'                         => ':attribute deve essere una stringa.',
    'url'                            => ':attribute il formato non è valido.',
    'timezone'                       => ':attribute deve essere una zona valida.',
    '2fa_code'                       => ':attribute il campo non è valido.',
    'dimensions'                     => ':attribute ha dimensioni di immagine non valide.',
    'distinct'                       => ':attribute il campo ha un valore doppio.',
    'file'                           => ':attribute deve essere un file.',
    'in_array'                       => ':attribute il campo non esiste in :other.',
    'present'                        => ':attribute il campo deve essere presente.',
    'amount_zero'                    => 'L\'importo totale non può essere zero',
    'secure_password'                => 'Questa non è una password sicura. Per favore riprova. Per ulteriori informazioni, visitare https://goo.gl/NCh2tN',
    'attributes'                     => [
        'email'                   => 'indirizzo email',
        'description'             => 'descrizione',
        'amount'                  => 'importo',
        'name'                    => 'nome',
        'piggy_bank_id'           => 'ID salvadanaio',
        'targetamount'            => 'importo obiettivo',
        'openingBalanceDate'      => 'data bilancio apertura',
        'openingBalance'          => 'saldo apertura',
        'match'                   => 'partita',
        'amount_min'              => 'importo minimo',
        'amount_max'              => 'importo massimo',
        'title'                   => 'titolo',
        'tag'                     => 'etichetta',
        'transaction_description' => 'descrizione transazione',
        'rule-action-value.1'     => 'regola valore azione #1',
        'rule-action-value.2'     => 'regola valore azione #2',
        'rule-action-value.3'     => 'regola valore azione #3',
        'rule-action-value.4'     => 'regola valore azione #4',
        'rule-action-value.5'     => 'regola valore azione #5',
        'rule-action.1'           => 'regola azione #1',
        'rule-action.2'           => 'regola azione #2',
        'rule-action.3'           => 'regola azione #3',
        'rule-action.4'           => 'regola azione #4',
        'rule-action.5'           => 'regola azione #5',
        'rule-trigger-value.1'    => 'regola valore trigger #1',
        'rule-trigger-value.2'    => 'regola valore trigger #2',
        'rule-trigger-value.3'    => 'regola valore trigger #3',
        'rule-trigger-value.4'    => 'regola valore trigger #4',
        'rule-trigger-value.5'    => 'regola valore trigger #5',
        'rule-trigger.1'          => 'esegui regola #1',
        'rule-trigger.2'          => 'esegui regola #2',
        'rule-trigger.3'          => 'esegui regola #3',
        'rule-trigger.4'          => 'esegui regola #4',
        'rule-trigger.5'          => 'esegui regola #5',
    ],
];
