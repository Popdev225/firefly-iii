<?php

/**
 * form.php
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
    // new user:
    'bank_name'                   => 'Naziv banke',
    'bank_balance'                => 'Stanje',
    'savings_balance'             => 'Stanje prihrankov',
    'credit_card_limit'           => 'Limit kreditne kartice',
    'automatch'                   => 'Samodejno poveži',
    'skip'                        => 'Preskoči',
    'enabled'                     => 'Omogočeno',
    'name'                        => 'Ime',
    'active'                      => 'Aktivno',
    'amount_min'                  => 'Najnižji znesek',
    'amount_max'                  => 'Najvišji znesek',
    'match'                       => 'Se ujema z',
    'strict'                      => 'Strogi način',
    'repeat_freq'                 => 'Ponovitve',
    'object_group'                => 'Group',
    'location'                    => 'Lokacija',
    'update_channel'              => 'Kanal posodobitev',
    'currency_id'                 => 'Valuta',
    'transaction_currency_id'     => 'Valuta',
    'auto_budget_currency_id'     => 'Valuta',
    'external_ip'                 => 'Javni IP naslov tvojega strežnika',
    'attachments'                 => 'Priloge',
    'BIC'                         => 'BIC',
    'verify_password'             => 'Preveri varnost gesla',
    'source_account'              => 'Izvorni račun',
    'destination_account'         => 'Ciljni račun',
    'asset_destination_account'   => 'Ciljni račun',
    'include_net_worth'           => 'Vključi v neto vrednost',
    'asset_source_account'        => 'Izvorni račun',
    'journal_description'         => 'Opis',
    'note'                        => 'Opombe',
    'currency'                    => 'Valuta',
    'account_id'                  => 'premoženjski račun',
    'budget_id'                   => 'Proračun',
    'bill_id'                     => 'Bill',
    'opening_balance'             => 'Začetno stanje',
    'tagMode'                     => 'Način oznak',
    'virtual_balance'             => 'Navidezno stanje',
    'targetamount'                => 'Ciljni znesek',
    'account_role'                => 'Vloga računa',
    'opening_balance_date'        => 'Datum začetnega stanja',
    'cc_type'                     => 'Načrt plačila s kreditno kartico',
    'cc_monthly_payment_date'     => 'Datum mesečnega plačila s kreditno kartico',
    'piggy_bank_id'               => 'Hranilnik',
    'returnHere'                  => 'Vrni se sem',
    'returnHereExplanation'       => 'Po shranjevanju se vrni sem in ustvari še eno.',
    'returnHereUpdateExplanation' => 'Po shranjevanju se vrni sem.',
    'description'                 => 'Opis',
    'expense_account'             => 'konto stroškov',
    'revenue_account'             => 'Račun prihodkov',
    'decimal_places'              => 'Decimalke',
    'destination_amount'          => 'Znesek (cilj)',
    'new_email_address'           => 'Nov elektronski naslov',
    'verification'                => 'Potrditev',
    'api_key'                     => 'API ključ',
    'remember_me'                 => 'Zapomni se me',
    'liability_type_id'           => 'Vrsta obveznosti',
    'liability_type'              => 'Liability type',
    'interest'                    => 'Obresti',
    'interest_period'             => 'Obdobje obresti',
    'extension_date'              => 'Extension date',
    'type'                        => 'Vrsta',
    'convert_Withdrawal'          => 'Pretvori odliv',
    'convert_Deposit'             => 'Pretvori polog',
    'convert_Transfer'            => 'Pretvori prenos',
    'amount'                      => 'Znesek',
    'foreign_amount'              => 'Tuj znesek',
    'date'                        => 'Datum',
    'interest_date'               => 'Datum obresti',
    'book_date'                   => 'Datum knjiženja',
    'process_date'                => 'Datum obdelave',
    'category'                    => 'Kategorija',
    'tags'                        => 'Oznake',
    'deletePermanently'           => 'Trajno izbriši',
    'cancel'                      => 'Prekliči',
    'targetdate'                  => 'Ciljni datum',
    'startdate'                   => 'Začetni datum',
    'tag'                         => 'Oznaka',
    'under'                       => 'Pod',
    'symbol'                      => 'Simbol',
    'code'                        => 'Koda',
    'iban'                        => 'IBAN',
    'account_number'              => 'Številka računa',
    'creditCardNumber'            => 'Številka kreditne kartice',
    'has_headers'                 => 'Glave',
    'date_format'                 => 'Format datuma',
    'specifix'                    => 'Specifični popravki za banko ali datoteko',
    'attachments[]'               => 'Priloge',
    'title'                       => 'Naslov',
    'notes'                       => 'Opombe',
    'filename'                    => 'Ime datoteke',
    'mime'                        => 'Vrsta MIME',
    'size'                        => 'Velikost',
    'trigger'                     => 'Sprožilec',
    'stop_processing'             => 'Ustavi izvajanje',
    'start_date'                  => 'Začetek obsega',
    'end_date'                    => 'Konec obsega',
    'enddate'                     => 'End date',
    'start'                       => 'Start of range',
    'end'                         => 'End of range',
    'delete_account'              => 'Izbriši račun ":name"',
    'delete_webhook'              => 'Delete webhook ":title"',
    'delete_bill'                 => 'Izbriši trajnik ":name"',
    'delete_budget'               => 'Izbriši proračun ":name"',
    'delete_category'             => 'Izbriši kategorijo ":name"',
    'delete_currency'             => 'Izbriši valuto ":name"',
    'delete_journal'              => 'Izbriši transakcijo z opisom ":description"',
    'delete_attachment'           => 'Izbruši prilogo ":name"',
    'delete_rule'                 => 'Izbriši pravilo ":title"',
    'delete_rule_group'           => 'Izbriši skupino pravil ":title"',
    'delete_link_type'            => 'Izbriši vrsto povezave ":name"',
    'delete_user'                 => 'Izbriši uporabnika ":email"',
    'delete_recurring'            => 'Izbriši ponavljajočo transakcijo ":title"',
    'user_areYouSure'             => 'Z brisanjem uporabnika ":email", boš izbrisal vse. Dejanja se ne da razveljaviti ali povrniti iz koša. Če izbrišeš samega sebe, boš izgubil dostop do te instance Firefly III.',
    'attachment_areYouSure'       => 'Si prepričan, da želiš zbrisati pripeto datoteko ":name"?',
    'account_areYouSure'          => 'Si prepričan, da želiš zbrisati račun ":name"?',
    'account_areYouSure_js'       => 'Are you sure you want to delete the account named "{name}"?',
    'bill_areYouSure'             => 'Si prepričan, da želiš zbrisati trajnik ":name"?',
    'rule_areYouSure'             => 'Si prepričan, da želiš zbrisati pravilo ":title"?',
    'object_group_areYouSure'     => 'Are you sure you want to delete the group titled ":title"?',
    'ruleGroup_areYouSure'        => 'Si prepričan, da želiš zbrisati skupino pravil ":title"?',
    'budget_areYouSure'           => 'Si prepričan, da želiš zbrisati proračun ":name"?',
    'webhook_areYouSure'           => 'Are you sure you want to delete the webhook named ":title"?',
    'category_areYouSure'         => 'Si prepričan, da želiš zbrisati kategorijo z imenom ":name"?',
    'recurring_areYouSure'        => 'Si prepričan, da želiš zbrisati ponavljajoče pravilo ":title"?',
    'currency_areYouSure'         => 'Si prepričan, da želiš zbrisati valuto ":name"?',
    'piggyBank_areYouSure'        => 'Si prepričan, da želiš zbrisati hranilnik ":name"?',
    'journal_areYouSure'          => 'Si prepričan, da želiš zbrisati transakcijo z opisom ":description"?',
    'mass_journal_are_you_sure'   => 'Si prepričani, da želite izbrisati te transakcije?',
    'tag_areYouSure'              => 'Si prepričan, da želite izbrisati to oznako ":tag"?',
    'journal_link_areYouSure'     => 'Si prepričan, da želiš izbrisati povezavo med <a href=":source_link">:source</a> in <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Si prepričan, da želiš izbrisati vrsto povezave ":name" (":inward"/":outward")?',
    'permDeleteWarning'           => 'Brisanje stvari iz Firefly III je trajno in ga ni mogoče razveljaviti.',
    'mass_make_selection'         => 'Še vedno lahko preprečiš brisanje elementov, tako da počistiš potrditveno polje.',
    'delete_all_permanently'      => 'Označeno trajno izbriši',
    'update_all_journals'         => 'Posodobi te transakcije',
    'also_delete_transactions'    => 'Edina transakcija, ki je povezana s tem računom, bo prav tako izbrisana.|Vseh :count transakcij, povezanih s tem računom, bo izbrisanih.',
    'also_delete_transactions_js' => 'No transactions|The only transaction connected to this account will be deleted as well.|All {count} transactions connected to this account will be deleted as well.',
    'also_delete_connections'     => 'Edina transakcija, povezana s to vrsto povezave, bo izgubila povezavo.|Vseh :count transakcij, povezanih s to vrsto povezave bo izgubilo povezavo.',
    'also_delete_rules'           => 'Edino pravilo, ki je povezano s tem računom, bo prav tako izbrisano.|Vseh :count pravil, povezanih s skupino pravil bo izbrisanih.',
    'also_delete_piggyBanks'      => 'Edini hranilnik, ki je povezan s tem računom, bo prav tako izbrisan.|Vseh :count hranilnikov, povezanih s tem računom, bo izbrisanih.',
    'also_delete_piggyBanks_js'   => 'No piggy banks|The only piggy bank connected to this account will be deleted as well.|All {count} piggy banks connected to this account will be deleted as well.',
    'not_delete_piggy_banks'      => 'The piggy bank connected to this group will not be deleted.|The :count piggy banks connected to this group will not be deleted.',
    'bill_keep_transactions'      => 'Edina transakcija, ki je povezana s tem trajnikom, ne izbrisana.|Vseh :count transakcij, povezanih s tem trajnikom, bo ohranjenih.',
    'budget_keep_transactions'    => 'Edina transakcija, povezana s tem proračunom, ne izbrisana.|Vseh :count transakcij, povezanih s tem proračunom, bo ohranjenih.',
    'category_keep_transactions'  => 'Edina transakcija, povezana s to kategorijo, ne bo izbrisana.|Vseh :count transakcij, povezanih s to kategorijo bo ohranjenih.',
    'recurring_keep_transactions' => 'Edina transakcija, ustvarjeno s to ponavljajočo transakcijo, ne izbrisana.|Vseh :count transakcij, povezanih ustvarjenih s to ponavljajočo transakcijo bo ohranjenih.',
    'tag_keep_transactions'       => 'Edina transakcija, povezana s to oznako, ne bo izbrisana.|Vseh :count transakcij, povezanih s to oznako bo ohranjenih.',
    'check_for_updates'           => 'Preveri za posodobitve',
    'liability_direction'         => 'Liability in/out',
    'delete_object_group'         => 'Delete group ":title"',
    'email'                       => 'E-poštni naslov',
    'password'                    => 'Geslo',
    'password_confirmation'       => 'Geslo (ponovno)',
    'blocked'                     => 'Je blokiran?',
    'blocked_code'                => 'Razlog blokade',
    'login_name'                  => 'Prijava',
    'is_owner'                    => 'Je administrator?',
    'url'                         => 'URL',
    'bill_end_date'               => 'End date',

    // import
    'apply_rules'                 => 'Uporabi pravila',
    'artist'                      => 'Izvajalec',
    'album'                       => 'Album',
    'song'                        => 'Pesem',


    // admin
    'domain'                      => 'Domena',
    'single_user_mode'            => 'Onemogoči prijavo uporabnikov',
    'is_demo_site'                => 'Je demo postavitev',

    // import
    'configuration_file'          => 'Konfiguracijska datoteka',
    'csv_comma'                   => 'Vejica (,)',
    'csv_semicolon'               => 'Podpičje (;)',
    'csv_tab'                     => 'Tabulator (nevidno)',
    'csv_delimiter'               => 'CSV ločilo polj',
    'client_id'                   => 'Client ID',
    'app_id'                      => 'App ID',
    'secret'                      => 'Secret',
    'public_key'                  => 'Public key',
    'country_code'                => 'Šifra države',
    'provider_code'               => 'Bank or data-provider',
    'fints_url'                   => 'FinTS API URL',
    'fints_port'                  => 'Vrata',
    'fints_bank_code'             => 'Bank code',
    'fints_username'              => 'Uporabniško ime',
    'fints_password'              => 'PIN / geslo',
    'fints_account'               => 'FinTS account',
    'local_account'               => 'Račun v Firely III',
    'from_date'                   => 'Datum od',
    'to_date'                     => 'Datum do',
    'due_date'                    => 'Datum zapadlosti',
    'payment_date'                => 'Datum plačila',
    'invoice_date'                => 'Datum računa',
    'internal_reference'          => 'Notranji sklic',
    'inward'                      => 'Interni opis',
    'outward'                     => 'Eksterni opis',
    'rule_group_id'               => 'Skupina pravil',
    'transaction_description'     => 'Opis transakcije',
    'first_date'                  => 'Prvi datum',
    'transaction_type'            => 'Vrsta transakcije',
    'repeat_until'                => 'Ponavljaj do',
    'recurring_description'       => 'Opis ponavljajoče transakcije',
    'repetition_type'             => 'Vrsta ponovitve',
    'foreign_currency_id'         => 'Tuja valuta',
    'repetition_end'              => 'Konec ponovitve',
    'repetitions'                 => 'Ponovitve',
    'calendar'                    => 'Koledar',
    'weekend'                     => 'Vikend',
    'client_secret'               => 'Skrivnost odjemalca',
    'withdrawal_destination_id'   => 'Destination account',
    'deposit_source_id'           => 'Source account',
    'expected_on'                 => 'Expected on',
    'paid'                        => 'Paid',
    'auto_budget_type'            => 'Auto-budget',
    'auto_budget_amount'          => 'Auto-budget amount',
    'auto_budget_period'          => 'Auto-budget period',
    'collected'                   => 'Collected',
    'submitted'                   => 'Submitted',
    'key'                         => 'Key',
    'value'                       => 'Content of record',
    'webhook_delivery'            => 'Delivery',
    'webhook_response'            => 'Response',
    'webhook_trigger'             => 'Trigger',
];
