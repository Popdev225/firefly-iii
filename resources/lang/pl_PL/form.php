<?php
declare(strict_types=1);

/**
 * form.php
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
    // new user:
    'bank_name'                      => 'Nazwa banku',
    'bank_balance'                   => 'Saldo',
    'savings_balance'                => 'Saldo konta oszczędnościowego',
    'credit_card_limit'              => 'Limit karty kredytowej',
    'automatch'                      => 'Dopasuj automatycznie',
    'skip'                           => 'Pomiń',
    'name'                           => 'Nazwa',
    'active'                         => 'Aktywny',
    'amount_min'                     => 'Minimalna kwota',
    'amount_max'                     => 'Maksymalna kwota',
    'match'                          => 'Dopasowanie',
    'strict'                         => 'Tryb ścisły',
    'repeat_freq'                    => 'Powtarza się',
    'journal_currency_id'            => 'Waluta',
    'currency_id'                    => 'Waluta',
    'transaction_currency_id'        => 'Waluta',
    'external_ip'                    => 'Zewnętrzny adres IP Twojego serwera',
    'attachments'                    => 'Załączniki',
    'journal_amount'                 => 'Kwota',
    'journal_source_account_name'    => 'Konto przychodów (źródło)',
    'journal_source_account_id'      => 'Konto aktywów (źródło)',
    'BIC'                            => 'BIC',
    'verify_password'                => 'Sprawdź bezpieczeństwo hasła',
    'source_account'                 => 'Konto źródłowe',
    'destination_account'            => 'Konto docelowe',
    'journal_destination_account_id' => 'Konto aktywów (przeznaczenie)',
    'asset_destination_account'      => 'Konto aktywów (przeznaczenie)',
    'asset_source_account'           => 'Konto aktywów (źródło)',
    'journal_description'            => 'Opis',
    'note'                           => 'Notatki',
    'split_journal'                  => 'Podziel tę transakcję',
    'split_journal_explanation'      => 'Podziel transakcję na wiele części',
    'currency'                       => 'Waluta',
    'account_id'                     => 'Konto aktywów',
    'budget_id'                      => 'Budżet',
    'openingBalance'                 => 'Bilans otwarcia',
    'tagMode'                        => 'Tryb tagów',
    'tag_position'                   => 'Lokalizacja taga',
    'virtualBalance'                 => 'Wirtualne saldo',
    'targetamount'                   => 'Kwota docelowa',
    'accountRole'                    => 'Rola konta',
    'openingBalanceDate'             => 'Data salda otwarcia',
    'ccType'                         => 'Plan płatności kartą kredytową',
    'ccMonthlyPaymentDate'           => 'Miesięczny termin spłaty karty kredytowej',
    'piggy_bank_id'                  => 'Skarbonka',
    'returnHere'                     => 'Wróć tutaj',
    'returnHereExplanation'          => 'Po zapisaniu, wrócić tutaj.',
    'returnHereUpdateExplanation'    => 'Po aktualizacji, wróć tutaj.',
    'description'                    => 'Opis',
    'expense_account'                => 'Konto wydatków',
    'revenue_account'                => 'Konto przychodów',
    'decimal_places'                 => 'Miejsca dziesiętne',
    'exchange_rate_instruction'      => 'Zagraniczne waluty',
    'source_amount'                  => 'Kwota (źródło)',
    'destination_amount'             => 'Kwota (przeznaczenie)',
    'native_amount'                  => 'Źródłowa kwota',
    'new_email_address'              => 'Nowy adres e-mail',
    'verification'                   => 'Weryfikacja',
    'api_key'                        => 'Klucz API',
    'remember_me'                    => 'Zapamiętaj mnie',

    'source_account_asset'        => 'Konto źródłowe (konto aktywów)',
    'destination_account_expense' => 'Konto docelowe (konto wydatków)',
    'destination_account_asset'   => 'Konto docelowe (konto aktywów)',
    'source_account_revenue'      => 'Konto źródłowe (konto przychodów)',
    'type'                        => 'Typ',
    'convert_Withdrawal'          => 'Konwertuj wypłatę',
    'convert_Deposit'             => 'Konwertuj wpłatę',
    'convert_Transfer'            => 'Konwertuj transfer',

    'amount'                     => 'Kwota',
    'foreign_amount'             => 'Kwota zagraniczna',
    'existing_attachments'       => 'Istniejące załączniki',
    'date'                       => 'Data',
    'interest_date'              => 'Data odsetek',
    'book_date'                  => 'Data księgowania',
    'process_date'               => 'Data przetworzenia',
    'category'                   => 'Kategoria',
    'tags'                       => 'Tagi',
    'deletePermanently'          => 'Usuń trwale',
    'cancel'                     => 'Anuluj',
    'targetdate'                 => 'Data docelowa',
    'startdate'                  => 'Data rozpoczęcia',
    'tag'                        => 'Tag',
    'under'                      => 'Poniżej',
    'symbol'                     => 'Symbol',
    'code'                       => 'Kod',
    'iban'                       => 'IBAN',
    'accountNumber'              => 'Numer konta',
    'creditCardNumber'           => 'Numer karty kredytowej',
    'has_headers'                => 'Nagłówki',
    'date_format'                => 'Format daty',
    'specifix'                   => 'Poprawki dla banku lub pliku',
    'attachments[]'              => 'Załączniki',
    'store_new_withdrawal'       => 'Zapisz nową wypłatę',
    'store_new_deposit'          => 'Zapisz nową wpłatę',
    'store_new_transfer'         => 'Zapisz nowy transfer',
    'add_new_withdrawal'         => 'Dodaj nową wypłatę',
    'add_new_deposit'            => 'Dodaj nową wpłatę',
    'add_new_transfer'           => 'Dodaj nowy transfer',
    'title'                      => 'Tytuł',
    'notes'                      => 'Notatki',
    'filename'                   => 'Nazwa pliku',
    'mime'                       => 'Typ MIME',
    'size'                       => 'Rozmiar',
    'trigger'                    => 'Wyzwalacz',
    'stop_processing'            => 'Zatrzymaj przetwarzanie',
    'start_date'                 => 'Początek zakresu',
    'end_date'                   => 'Koniec zakresu',
    'export_start_range'         => 'Początek okresu eksportu',
    'export_end_range'           => 'Koniec okresu eksportu',
    'export_format'              => 'Format pliku',
    'include_attachments'        => 'Uwzględnij dołączone załączniki',
    'include_old_uploads'        => 'Dołącz zaimportowane dane',
    'accounts'                   => 'Eksportuj transakcje z tych kont',
    'delete_account'             => 'Usuń konto ":name"',
    'delete_bill'                => 'Usuń rachunek ":name"',
    'delete_budget'              => 'Usuń budżet ":name"',
    'delete_category'            => 'Usuń kategorię ":name"',
    'delete_currency'            => 'Usuń walutę ":name"',
    'delete_journal'             => 'Usuń transakcję z opisem ":description"',
    'delete_attachment'          => 'Usuń załącznik ":name"',
    'delete_rule'                => 'Usuń regułę ":title"',
    'delete_rule_group'          => 'Usuń grupę reguł ":title"',
    'delete_link_type'           => 'Usuń typ łącza ":name"',
    'delete_user'                => 'Usuń użytkownika ":email"',
    'user_areYouSure'            => 'Jeśli usuniesz użytkownika ":email", wszystko zniknie. Nie ma cofania, przywracania ani czegokolwiek. Jeśli usuniesz siebie, stracisz dostęp do tej instalacji Firefly III.',
    'attachment_areYouSure'      => 'Czy na pewno chcesz usunąć załącznik o nazwie ":name"?',
    'account_areYouSure'         => 'Czy na pewno chcesz usunąć konto o nazwie ":name"?',
    'bill_areYouSure'            => 'Czy na pewno chcesz usunąć rachunek o nazwie ":name"?',
    'rule_areYouSure'            => 'Czy na pewno chcesz usunąć regułę o nazwie ":name"?',
    'ruleGroup_areYouSure'       => 'Czy na pewno chcesz usunąć grupę reguł o nazwie ":name"?',
    'budget_areYouSure'          => 'Czy na pewno chcesz usunąć budżet o nazwie ":name"?',
    'category_areYouSure'        => 'Czy na pewno chcesz usunąć kategorię o nazwie ":name"?',
    'currency_areYouSure'        => 'Czy na pewno chcesz usunąć walutę o nazwie ":name"?',
    'piggyBank_areYouSure'       => 'Czy na pewno chcesz usunąć skarbonkę o nazwie ":name"?',
    'journal_areYouSure'         => 'Czy na pewno chcesz usunąć transakcję opisaną ":description"?',
    'mass_journal_are_you_sure'  => 'Czy na pewno chcesz usunąć te transakcje?',
    'tag_areYouSure'             => 'Czy na pewno chcesz usunąć tag ":tag"?',
    'journal_link_areYouSure'    => 'Czy na pewno chcesz usunąć powiązanie między <a href=":source_link">:source</a> a <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'        => 'Czy na pewno chcesz usunąć typ łącza ":name" (":inward" / ":outward")?',
    'permDeleteWarning'          => 'Usuwanie rzeczy z Firefly III jest trwałe i nie można tego cofnąć.',
    'mass_make_selection'        => 'Nadal możesz zapobiec usunięciu elementów, odznaczając je.',
    'delete_all_permanently'     => 'Trwale usuń zaznaczone',
    'update_all_journals'        => 'Zmodyfikuj te transakcje',
    'also_delete_transactions'   => 'Jedyna transakcja powiązana z tym kontem zostanie również usunięta.|Wszystkie transakcje (:count) powiązane z tym kontem zostaną również usunięta.',
    'also_delete_connections'    => 'Jedyna transakcja połączona z tym typem łącza utraci to połączenie.|Wszystkie transakcje (:count) połączone tym typem łącza utracą swoje połączenie.',
    'also_delete_rules'          => 'Jedyna reguła połączona z tą grupą reguł zostanie również usunięta.|Wszystkie reguły (:count) połączone tą grupą reguł zostaną również usunięte.',
    'also_delete_piggyBanks'     => 'Jedyna skarbonka połączona z tym kontem zostanie również usunięta.|Wszystkie skarbonki (:count) połączone z tym kontem zostaną również usunięte.',
    'bill_keep_transactions'     => 'Jedyna transakcja związana z tym rachunkiem nie zostanie usunięta. | Wszystkie :count transakcje związane z tym rachunkiem zostaną oszczędzone.',
    'budget_keep_transactions'   => 'Jedyna transakcja związana z tym budżetem nie zostanie usunięta.|Wszystkie transakcje (:count) związane z tym budżetem zostaną oszczędzone.',
    'category_keep_transactions' => 'Jedyna transakcja związana z tą kategorią nie zostanie usunięta.|Wszystkie transakcje (:count) związane z tą kategorią zostaną oszczędzone.',
    'tag_keep_transactions'      => 'Jedyna transakcja związana z tym tagiem nie zostanie usunięta.|Wszystkie transakcje (:count) związane z tym tagiem zostaną oszczędzone.',
    'check_for_updates'          => 'Sprawdź aktualizacje',

    'email'                 => 'Adres email',
    'password'              => 'Hasło',
    'password_confirmation' => 'Hasło (ponownie)',
    'blocked'               => 'Jest zablokowany?',
    'blocked_code'          => 'Powód blokady',

    // admin
    'domain'                => 'Domena',
    'single_user_mode'      => 'Wyłącz rejestrację użytkowników',
    'is_demo_site'          => 'Jest stroną demo',

    // import
    'import_file'           => 'Importuj plik',
    'configuration_file'    => 'Plik konfiguracyjny',
    'import_file_type'      => 'Typ pliku importu',
    'csv_comma'             => 'Przecinek (,)',
    'csv_semicolon'         => 'Średnik (;)',
    'csv_tab'               => 'Tabulator (niewidoczny)',
    'csv_delimiter'         => 'Ogranicznik pola CSV',
    'csv_import_account'    => 'Domyślne konto importu',
    'csv_config'            => 'Konfiguracja importu CSV',
    'client_id'             => 'ID klienta',
    'service_secret'        => 'Sekret usługi',
    'app_secret'            => 'Sekret aplikacji',
    'public_key'            => 'Klucz publiczny',
    'country_code'          => 'Kod kraju',
    'provider_code'         => 'Dostawca banku lub danych',

    'due_date'           => 'Termin realizacji',
    'payment_date'       => 'Data płatności',
    'invoice_date'       => 'Data faktury',
    'internal_reference' => 'Wewnętrzny numer',
    'inward'             => 'Opis wewnętrzny',
    'outward'            => 'Opis zewnętrzny',
    'rule_group_id'      => 'Grupa reguł',
];
