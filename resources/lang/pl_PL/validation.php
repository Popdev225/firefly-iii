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
    'iban'                           => 'To nie jest prawidłowy IBAN.',
    'zero_or_more'                   => 'Wartość nie może być ujemna.',
    'date_or_time'                   => 'Wartość musi być prawidłową datą lub czasem (ISO 8601).',
    'source_equals_destination'      => 'Konto źródłowe jest równe kontu docelowemu.',
    'unique_account_number_for_user' => 'Wygląda na to, że ten numer konta jest już w użyciu.',
    'unique_iban_for_user'           => 'Wygląda na to, że ten IBAN jest już używany.',
    'deleted_user'                   => 'Ze względu na zabezpieczenia nie możesz się zarejestrować używając tego adresu e-mail.',
    'rule_trigger_value'             => 'Ta wartość jest nieprawidłowa dla wybranego wyzwalacza.',
    'rule_action_value'              => 'Ta wartość jest nieprawidłowa dla wybranej akcji.',
    'file_already_attached'          => 'Przesłany plik ":name" jest już dołączony do tego obiektu.',
    'file_attached'                  => 'Pomyślnie wgrano plik ":name".',
    'must_exist'                     => 'Identyfikator w polu :attribute nie istnieje w bazie danych.',
    'all_accounts_equal'             => 'Wszystkie konta w tym polu muszą być takie same.',
    'group_title_mandatory'          => 'Tytuł grupy jest obowiązkowy, gdy istnieje więcej niż jedna transakcja.',
    'transaction_types_equal'        => 'Wszystkie podziały muszą być tego samego typu.',
    'invalid_transaction_type'       => 'Nieprawidłowy typ transakcji.',
    'invalid_selection'              => 'Twój wybór jest nieprawidłowy.',
    'belongs_user'                   => 'Ta wartość jest nieprawidłowa dla tego pola.',
    'at_least_one_transaction'       => 'Wymaga co najmniej jednej transakcji.',
    'at_least_one_repetition'        => 'Wymaga co najmniej jednego powtórzenia.',
    'require_repeat_until'           => 'Wymagana jest liczba powtórzeń lub data zakończenia (repeat_until), ale nie obie jednocześnie.',
    'require_currency_info'          => 'Treść tego pola jest nieprawidłowa bez informacji o walucie.',
    'not_transfer_account'           => 'To konto nie jest kontem, które może być używane do przelewów.',
    'require_currency_amount'        => 'Treść tego pola jest nieprawidłowa bez informacji o obcej kwocie.',
    'equal_description'              => 'Opis transakcji nie powinien być równy globalnemu opisowi.',
    'file_invalid_mime'              => 'Plik ":name" jest typu ":mime", który nie jest akceptowany jako nowy plik do przekazania.',
    'file_too_large'                 => 'Plik ":name" jest zbyt duży.',
    'belongs_to_user'                => 'Wartość :attribute jest nieznana.',
    'accepted'                       => ':attribute musi zostać zaakceptowany.',
    'bic'                            => 'To nie jest prawidłowy BIC.',
    'at_least_one_trigger'           => 'Reguła powinna mieć co najmniej jeden wyzwalacz.',
    'at_least_one_action'            => 'Reguła powinna mieć co najmniej jedną akcję.',
    'base64'                         => 'To nie są prawidłowe dane zakodowane w base64.',
    'model_id_invalid'               => 'Podane ID wygląda na nieprawidłowe dla tego modelu.',
    'more'                           => ':attribute musi być większy od ":more".',
    'less'                           => ':attribute musi być mniejszy od 10 000 000',
    'active_url'                     => ':attribute nie jest prawidłowym adresem URL.',
    'after'                          => ':attribute musi być datą późniejszą od :date.',
    'alpha'                          => ':attribute może zawierać tylko litery.',
    'alpha_dash'                     => ':attribute może zawierać litery, cyfry oraz myślniki.',
    'alpha_num'                      => ':attribute może zawierać jedynie litery oraz cyfry.',
    'array'                          => ':attribute musi być tablicą.',
    'unique_for_user'                => 'Istnieje już wpis z tym :attribute.',
    'before'                         => ':attribute musi być wcześniejszą datą w stosunku do :date.',
    'unique_object_for_user'         => 'Ta nazwa jest już w użyciu.',
    'unique_account_for_user'        => 'Ta nazwa konta jest już w użyciu.',
    'between.numeric'                => ':attribute musi się mieścić w zakresie pomiędzy :min a :max.',
    'between.file'                   => ':attribute musi się mieścić w zakresie pomiędzy :min oraz :max kilobajtów.',
    'between.string'                 => ':attribute musi zawierać pomiędzy :min a :max znaków.',
    'between.array'                  => ':attribute musi zawierać pomiędzy :min a :max elementów.',
    'boolean'                        => 'Pole :attribute musi być prawdą albo fałszem.',
    'confirmed'                      => 'Pole :attribute i jego potwierdzenie nie pasują do siebie.',
    'date'                           => ':attribute nie jest prawidłową datą.',
    'date_format'                    => ':attribute rożni się od formatu :format.',
    'different'                      => ':attribute oraz :other muszą się różnić.',
    'digits'                         => ':attribute musi składać się z :digits cyfr.',
    'digits_between'                 => ':attribute musi mieć od :min do :max cyfr.',
    'email'                          => ':attribute musi być prawidłowym adresem email.',
    'filled'                         => 'Pole :attribute jest wymagane.',
    'exists'                         => 'Wybrane :attribute są nieprawidłowe.',
    'image'                          => ':attribute musi być obrazkiem.',
    'in'                             => 'Wybrany :attribute jest nieprawidłowy.',
    'integer'                        => ':attribute musi być liczbą całkowitą.',
    'ip'                             => ':attribute musi być poprawnym adresem IP.',
    'json'                           => ':attribute musi być prawidłowym węzłem JSON.',
    'max.numeric'                    => ':attribute nie może być większy niż :max.',
    'max.file'                       => ':attribute nie może być większy niż :max kilobajtów.',
    'max.string'                     => ':attribute nie może być dłuższy od :max znaków.',
    'max.array'                      => ':attribute nie może zawierać więcej niż :max elementów.',
    'mimes'                          => ':attribute musi być plikiem typu :values.',
    'min.numeric'                    => ':attribute musi być przynajmniej :min.',
    'lte.numeric'                    => ':attribute musi być mniejszy lub równy :value.',
    'min.file'                       => ':attribute musi mieć przynajmniej :min kilobajtów.',
    'min.string'                     => ':attribute musi mieć co najmniej :min znaków.',
    'min.array'                      => ':attribute musi zawierać przynajmniej :min elementów.',
    'not_in'                         => 'Wybrany :attribute jest nieprawidłowy.',
    'numeric'                        => ':attribute musi byc liczbą.',
    'numeric_native'                 => 'Kwota źródłowa musi być liczbą.',
    'numeric_destination'            => 'Kwota docelowa musi być liczbą.',
    'numeric_source'                 => 'Kwota źródłowa musi być liczbą.',
    'regex'                          => 'Format :attribute jest nieprawidłowy.',
    'required'                       => 'Pole :attribute jest wymagane.',
    'required_if'                    => 'Pole :attribute jest wymagane gdy :other jest :value.',
    'required_unless'                => 'Pole :attribute jest wymagane, chyba że :other jest w :values.',
    'required_with'                  => 'Pole :attribute jest wymagane gdy :values jest podana.',
    'required_with_all'              => 'Pole :attribute jest wymagane gdy :values jest podana.',
    'required_without'               => 'Pole :attribute jest wymagane gdy :values nie jest podana.',
    'required_without_all'           => ':attribute jest wymagane, gdy żadna z wartości :values nie jest podana.',
    'same'                           => 'Pole :attribute oraz :other muszą się zgadzać.',
    'size.numeric'                   => ':attribute musi być wielkości :size.',
    'amount_min_over_max'            => 'Minimalna kwota nie może być większa niż maksymalna kwota.',
    'size.file'                      => ':attribute musi mieć :size kilobajtów.',
    'size.string'                    => ':attribute musi mieć :size znaków.',
    'size.array'                     => ':attribute musi zawierać :size elementów.',
    'unique'                         => 'Taki :attribute już występuje.',
    'string'                         => ':attribute musi być ciągiem znaków.',
    'url'                            => 'Format :attribute jest nieprawidłowy.',
    'timezone'                       => ':attribute musi być prawidłową strefą.',
    '2fa_code'                       => 'Format :attribute jest nieprawidłowy.',
    'dimensions'                     => ':attribute ma nieprawidłowe wymiary obrazu.',
    'distinct'                       => 'Pole :attribute zawiera zduplikowaną wartość.',
    'file'                           => ':attribute musi być plikiem.',
    'in_array'                       => 'Pole :attribute nie istnieje w :other.',
    'present'                        => 'Pole :attribute musi być obecne.',
    'amount_zero'                    => 'Całkowita kwota nie może wynosić zero.',
    'current_target_amount'          => 'Bieżąca kwota musi być mniejsza niż kwota docelowa.',
    'unique_piggy_bank_for_user'     => 'Nazwa skarbonki musi być unikalna.',

    'secure_password'                => 'To nie jest bezpieczne hasło. Proszę spróbować ponownie. Aby uzyskać więcej informacji odwiedź https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'      => 'Nieprawidłowy typ powtórzeń dla cyklicznych transakcji.',
    'valid_recurrence_rep_moment'    => 'Nieprawidłowy moment powtórzenia dla tego typu powtórzenia.',
    'invalid_account_info'           => 'Nieprawidłowe informacje o koncie.',
    'attributes'                     => [
        'email'                   => 'adres e-mail',
        'description'             => 'opis',
        'amount'                  => 'kwota',
        'name'                    => 'nazwa',
        'piggy_bank_id'           => 'identyfikator skarbonki',
        'targetamount'            => 'kwota docelowa',
        'opening_balance_date'    => 'data salda otwarcia',
        'opening_balance'         => 'saldo otwarcia',
        'match'                   => 'dopasowanie',
        'amount_min'              => 'minimalna kwota',
        'amount_max'              => 'maksymalna kwota',
        'title'                   => 'tytuł',
        'tag'                     => 'tag',
        'transaction_description' => 'opis transakcji',
        'rule-action-value.1'     => 'wartość akcji reguły #1',
        'rule-action-value.2'     => 'wartość akcji reguły #2',
        'rule-action-value.3'     => 'wartość akcji reguły #3',
        'rule-action-value.4'     => 'wartość akcji reguły #4',
        'rule-action-value.5'     => 'wartość akcji reguły #5',
        'rule-action.1'           => 'akcja reguły #1',
        'rule-action.2'           => 'akcja reguły #2',
        'rule-action.3'           => 'akcja reguły #3',
        'rule-action.4'           => 'akcja reguły #4',
        'rule-action.5'           => 'akcja reguły #5',
        'rule-trigger-value.1'    => 'wartość wyzwalacza reguły #1',
        'rule-trigger-value.2'    => 'wartość wyzwalacza reguły #2',
        'rule-trigger-value.3'    => 'wartość wyzwalacza reguły #3',
        'rule-trigger-value.4'    => 'wartość wyzwalacza reguły #4',
        'rule-trigger-value.5'    => 'wartość wyzwalacza reguły #5',
        'rule-trigger.1'          => 'wyzwalacz reguły #1',
        'rule-trigger.2'          => 'wyzwalacz reguły #2',
        'rule-trigger.3'          => 'wyzwalacz reguły #3',
        'rule-trigger.4'          => 'wyzwalacz reguły #4',
        'rule-trigger.5'          => 'wyzwalacz reguły #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'    => 'Aby kontynuować, musisz uzyskać prawidłowy identyfikator konta źródłowego i/lub prawidłową nazwę konta źródłowego.',
    'withdrawal_source_bad_data'     => 'Nie można znaleźć poprawnego konta źródłowego podczas wyszukiwania identyfikatora ":id" lub nazwy ":name".',
    'withdrawal_dest_need_data'      => 'Aby kontynuować, musisz uzyskać prawidłowy identyfikator konta wydatków i/lub prawidłową nazwę konta wydatków.',
    'withdrawal_dest_bad_data'       => 'Nie można znaleźć poprawnego konta wydatków podczas wyszukiwania identyfikatora ":id" lub nazwy ":name".',

    'deposit_source_need_data' => 'Aby kontynuować, musisz uzyskać prawidłowy identyfikator konta źródłowego i/lub prawidłową nazwę konta źródłowego.',
    'deposit_source_bad_data'  => 'Nie można znaleźć poprawnego konta źródłowego podczas wyszukiwania identyfikatora ":id" lub nazwy ":name".',
    'deposit_dest_need_data'   => 'Aby kontynuować, musisz uzyskać prawidłowy identyfikator konta wydatków i/lub prawidłową nazwę konta wydatków.',
    'deposit_dest_bad_data'    => 'Nie można znaleźć poprawnego konta wydatków podczas wyszukiwania identyfikatora ":id" lub nazwy ":name".',
    'deposit_dest_wrong_type'  => 'Konto docelowe nie jest poprawnego typu.',

    'transfer_source_need_data' => 'Aby kontynuować, musisz uzyskać prawidłowy identyfikator konta źródłowego i/lub prawidłową nazwę konta źródłowego.',
    'transfer_source_bad_data'  => 'Nie można znaleźć poprawnego konta źródłowego podczas wyszukiwania identyfikatora ":id" lub nazwy ":name".',
    'transfer_dest_need_data'   => 'Aby kontynuować, musisz uzyskać prawidłowy identyfikator konta wydatków i/lub prawidłową nazwę konta wydatków.',
    'transfer_dest_bad_data'    => 'Nie można znaleźć poprawnego konta wydatków podczas wyszukiwania identyfikatora ":id" lub nazwy ":name".',
    'need_id_in_edit'           => 'Każdy podział musi posiadać transaction_journal_id (poprawny identyfikator lub 0).',

    'ob_source_need_data' => 'Aby kontynuować, musisz uzyskać prawidłowy identyfikator konta źródłowego i/lub prawidłową nazwę konta źródłowego.',
    'ob_dest_need_data'   => 'Aby kontynuować, musisz uzyskać prawidłowy identyfikator konta wydatków i/lub prawidłową nazwę konta wydatków.',
    'ob_dest_bad_data'    => 'Nie można znaleźć poprawnego konta wydatków podczas wyszukiwania identyfikatora ":id" lub nazwy ":name".',

    'generic_invalid_source'      => 'Nie możesz użyć tego konta jako konta źródłowego.',
    'generic_invalid_destination' => 'Nie możesz użyć tego konta jako konta docelowego.',

    'gte.numeric' => ':attribute musi być większy lub równy :value.',
    'gte.file'    => ':attribute musi mieć rozmiar większy niż lub równy :value kilobajtów.',
    'gte.string'  => ':attribute musi mieć :value lub więcej znaków.',
    'gte.array'   => ':attribute musi mieć :value lub więcej elementów.',

    'amount_required_for_auto_budget' => 'Kwota jest wymagana.',
    'auto_budget_amount_positive'     => 'Kwota musi być większa niż zero.',
    'auto_budget_period_mandatory' => 'Okres automatycznego budżetu to pole obowiązkowe.',
];
