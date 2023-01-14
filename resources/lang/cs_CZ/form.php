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
    // new user:
    'bank_name'                   => 'Název banky',
    'bank_balance'                => 'Zůstatek',
    'savings_balance'             => 'Zůstatek úspor',
    'credit_card_limit'           => 'Limit kreditní karty',
    'automatch'                   => 'Hledat shodu automaticky',
    'skip'                        => 'Přeskočit',
    'enabled'                     => 'Zapnuto',
    'name'                        => 'Název',
    'active'                      => 'Aktivní',
    'amount_min'                  => 'Minimální částka',
    'amount_max'                  => 'Maximální částka',
    'match'                       => 'Shody',
    'strict'                      => 'Striktní režim',
    'repeat_freq'                 => 'Opakuje se',
    'object_group'                => 'Skupina',
    'location'                    => 'Údaje o poloze',
    'update_channel'              => 'Kanál aktualizací',
    'currency_id'                 => 'Měna',
    'transaction_currency_id'     => 'Měna',
    'auto_budget_currency_id'     => 'Měna',
    'external_ip'                 => 'Externí IP adresa vašeho serveru',
    'attachments'                 => 'Přílohy',
    'BIC'                         => 'BIC',
    'verify_password'             => 'Ověřit odolnost hesla',
    'source_account'              => 'Zdrojový účet',
    'destination_account'         => 'Cílový účet',
    'asset_destination_account'   => 'Cílový účet',
    'include_net_worth'           => 'Zahrnout do čistého jmění',
    'asset_source_account'        => 'Zdrojový účet',
    'journal_description'         => 'Popis',
    'note'                        => 'Poznámky',
    'currency'                    => 'Měna',
    'account_id'                  => 'Účet aktiv',
    'budget_id'                   => 'Rozpočet',
    'bill_id'                     => 'Účet',
    'opening_balance'             => 'Počáteční zůstatek',
    'tagMode'                     => 'Režim štítku',
    'virtual_balance'             => 'Virtuální zůstatek',

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


    'targetamount'                => 'Cílová částka',
    'account_role'                => 'Role účtu',
    'opening_balance_date'        => 'Datum počátečního zůstatku',
    'cc_type'                     => 'Zúčtovací období kreditní karty',
    'cc_monthly_payment_date'     => 'Datum měsíční úhrady kreditní karty',
    'piggy_bank_id'               => 'Pokladnička',
    'returnHere'                  => 'Vrátit sem',
    'returnHereExplanation'       => 'Po uložení, vrátit se sem pro vytvoření další.',
    'returnHereUpdateExplanation' => 'Po aktualizaci se vrátit sem.',
    'description'                 => 'Popis',
    'expense_account'             => 'Výdajový účet',
    'revenue_account'             => 'Příjmový účet',
    'decimal_places'              => 'Desetinná místa',
    'destination_amount'          => 'Částka (cíl)',
    'new_email_address'           => 'Nová e-mailová adresa',
    'verification'                => 'Ověření',
    'api_key'                     => 'Klíč k API',
    'remember_me'                 => 'Zapamatovat si mě',
    'liability_type_id'           => 'Typ závazku',
    'liability_type'              => 'Typ závazku',
    'interest'                    => 'Úrok',
    'interest_period'             => 'Úrokové období',
    'extension_date'              => 'Datum rozšíření',
    'type'                        => 'Typ',
    'convert_Withdrawal'          => 'Přeměnit výběr',
    'convert_Deposit'             => 'Přeměnit vklad',
    'convert_Transfer'            => 'Přeměnit převod',
    'amount'                      => 'Částka',
    'foreign_amount'              => 'Částka v cizí měně',
    'date'                        => 'Datum',
    'interest_date'               => 'Úrokové datum',
    'book_date'                   => 'Datum rezervace',
    'process_date'                => 'Datum zpracování',
    'category'                    => 'Kategorie',
    'tags'                        => 'Štítky',
    'deletePermanently'           => 'Nadobro smazat',
    'cancel'                      => 'Storno',
    'targetdate'                  => 'Cílové datum',
    'startdate'                   => 'Datum zahájení',
    'tag'                         => 'Štítek',
    'under'                       => 'Pod',
    'symbol'                      => 'Symbol',
    'code'                        => 'Kód',
    'iban'                        => 'IBAN',
    'account_number'              => 'Číslo účtu',
    'creditCardNumber'            => 'Číslo kreditní karty',
    'has_headers'                 => 'Hlavičky',
    'date_format'                 => 'Formát data',
    'specifix'                    => 'Opravy pro konkrétní soubor či banku',
    'attachments[]'               => 'Přílohy',
    'title'                       => 'Název',
    'notes'                       => 'Poznámky',
    'filename'                    => 'Název souboru',
    'mime'                        => 'Mime typ',
    'size'                        => 'Velikost',
    'trigger'                     => 'Spouštěč',
    'stop_processing'             => 'Zastavit zpracování',
    'start_date'                  => 'Začátek rozsahu',
    'end_date'                    => 'Konec rozsahu',
    'enddate'                     => 'Datum ukončení',
    'start'                       => 'Začátek rozsahu',
    'end'                         => 'Konec rozsahu',
    'delete_account'              => 'Smazat účet „:name“',
    'delete_webhook'              => 'Delete webhook ":title"',
    'delete_bill'                 => 'Smazán účet „:name“',
    'delete_budget'               => 'Smazat rozpočet „:name“',
    'delete_category'             => 'Smazat kategorii „:name“',
    'delete_currency'             => 'Odstranit měnu „:name“',
    'delete_journal'              => 'Smazat transakci, která má popis „:description“',
    'delete_attachment'           => 'Smazat přílohu „:name“',
    'delete_rule'                 => 'Smazat pravidlo „:title“',
    'delete_rule_group'           => 'Smazat skupinu pravidel „:title“',
    'delete_link_type'            => 'Smazat odkaz typu „:name“',
    'delete_user'                 => 'Smazat uživatele „:email“',
    'delete_recurring'            => 'Smazat opakovanou transakci „:title“',
    'user_areYouSure'             => 'Pokud odstraníte uživatele „:email“, vše bude pryč. Neexistuje žádná možnost vrácení, obnovení nebo cokoli dalšího. Pokud smažete sami sebe, ztratíte přístup k této instanci Firefly III.',
    'attachment_areYouSure'       => 'Jste si jisti, že chcete odstranit přílohu s názvem „:name“?',
    'account_areYouSure'          => 'Jste si jisti, že chcete odstranit účet s názvem „:name“?',
    'account_areYouSure_js'       => 'Jste si jisti, že chcete odstranit účet s názvem "{name}"?',
    'bill_areYouSure'             => 'Jste si jisti, že chcete odstranit účet s názvem ":name"?',
    'rule_areYouSure'             => 'Opravdu chcete odstranit pravidlo s názvem „:title“?',
    'object_group_areYouSure'     => 'Jste si jisti, že chcete odstranit skupinu s názvem „:title“?',
    'ruleGroup_areYouSure'        => 'Opravdu chcete odstranit skupinu pravidel s názvem „:title“?',
    'budget_areYouSure'           => 'Jste si jisti, že chcete odstranit rozpočet s názvem „:name“?',
    'webhook_areYouSure'           => 'Are you sure you want to delete the webhook named ":title"?',
    'category_areYouSure'         => 'Jste si jisti, že chcete odstranit kategorii s názvem „:name“?',
    'recurring_areYouSure'        => 'Jste si jisti, že chcete odstranit opakovanou transakci s názvem „:title“?',
    'currency_areYouSure'         => 'Jste si jisti, že chcete odstranit měnu s názvem „:name“?',
    'piggyBank_areYouSure'        => 'Opravdu smazat pokladničku se jménem ":name"?',
    'journal_areYouSure'          => 'Jste si jisti, že chcete odstranit transakci popsanou „:description“?',
    'mass_journal_are_you_sure'   => 'Jste si jisti, že chcete odstranit tyto transakce?',

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


    'tag_areYouSure'              => 'Jste si jisti, že chcete odstranit štítek „:tag“?',
    'journal_link_areYouSure'     => 'Jste si jisti, že chcete odstranit provázání mezi <a href=":source_link">:source</a> a <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Jste si jisti, že chcete odstranit typ provázání „:name“ (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Odstranění věcí z Firefly III je trvalé a nelze vrátit zpět.',
    'mass_make_selection'         => 'Můžete stále zabránit odstranění položek odškrtnutím zaškrtávacího políčka.',
    'delete_all_permanently'      => 'Označené trvale smazat',
    'update_all_journals'         => 'Aktualizovat tyto transakce',
    'also_delete_transactions'    => 'Jediná transakce připojená k tomuto účtu bude také odstraněna.|Všech :count transakcí připojených k tomuto účtu bude také odstraněno.',
    'also_delete_transactions_js' => 'Žádné transakce|Jediná transakce připojená k tomuto účtu bude také smazána.|Všech {count} transakcí připojených k tomuto účtu bude také odstraněno.',
    'also_delete_connections'     => 'Jediná transakce propojená s tímto typem odkazu ztratí toto spojení.|Všech :count transakcí propojených s tímto typem odkazu ztratí své spojení.',
    'also_delete_rules'           => 'Jediné pravidlo připojené k této skupině pravidel bude také smazáno.|Všech :count pravidel připojených k této skupině pravidel bude také odstraněno.',
    'also_delete_piggyBanks'      => 'Jediná pokladnička připojená k tomuto účtu bude také odstraněna.|Všech :count pokladniček připojených k tomuto účtu bude také odstraněno.',
    'also_delete_piggyBanks_js'   => 'Žádné pokladničky|Jediná pokladnička připojená k tomuto účtu bude také odstraněna. Všech {count} pokladniček, které jsou připojeny k tomuto účtu, bude také odstraněno.',
    'not_delete_piggy_banks'      => 'Pokladnička připojená k této skupině nebude smazána.|:count pokladniček připojených k této skupině nebude smazáno.',
    'bill_keep_transactions'      => 'Jediná transakce připojená k tomuto účtu nebude smazána.|Všech :count transakcí připojených k tomuto účtu nebude odstraněno.',
    'budget_keep_transactions'    => 'Jediná transakce připojená k tomuto rozpočtu nebude smazána.|Všech :count transakcí připojených k tomuto rozpočtu nebude odstraněno.',
    'category_keep_transactions'  => 'Jediná transakce připojená k této kategorii nebude smazána.|Všech :count transakcí připojených k této kategorii nebudou odstraněno.',
    'recurring_keep_transactions' => 'Jediná transakce vytvořená touto opakující se transakcí nebude smazána.|Všech :count transakcí vytvořených touto opakující se transakcí nebude odstraněno.',
    'tag_keep_transactions'       => 'Jediná transakce připojená k tomuto štítku nebude smazána.|Všech :count transakcí připojených k tomuto štítku nebudou odstraněno.',
    'check_for_updates'           => 'Zjistit dostupnost případných aktualizací',
    'liability_direction'         => 'Směr závazku',
    'delete_object_group'         => 'Odstranit skupinu „:title“',
    'email'                       => 'E-mailová adresa',
    'password'                    => 'Heslo',
    'password_confirmation'       => 'Heslo (zopakování)',
    'blocked'                     => 'Je blokován?',
    'blocked_code'                => 'Důvod blokování',
    'login_name'                  => 'Přihlašovací jméno',
    'is_owner'                    => 'Je správce?',
    'url'                         => 'URL',
    'bill_end_date'               => 'End date',

    // import
    'apply_rules'                 => 'Uplatnit pravidla',
    'artist'                      => 'Umělec',
    'album'                       => 'Album',
    'song'                        => 'Skladba',


    // admin
    'domain'                      => 'Doména',
    'single_user_mode'            => 'Vypnout možnost registrace uživatelů',
    'is_demo_site'                => 'Je demostránka',

    // import
    'configuration_file'          => 'Soubor s nastaveními',
    'csv_comma'                   => 'Čárka (,)',
    'csv_semicolon'               => 'Středník (;)',
    'csv_tab'                     => 'Tabulátor (neviditelný)',
    'csv_delimiter'               => 'Oddělovač kolonek v CSV',
    'client_id'                   => 'Identif. klienta',
    'app_id'                      => 'Identif. aplikace',
    'secret'                      => 'Tajný klíč',
    'public_key'                  => 'Veřejná část klíče',
    'country_code'                => 'Kód země',
    'provider_code'               => 'Banka nebo poskytovatel dat',
    'fints_url'                   => 'URL adresa FinTS API',
    'fints_port'                  => 'Port',
    'fints_bank_code'             => 'Kód banky',
    'fints_username'              => 'Uživatelské jméno',
    'fints_password'              => 'PIN kód / heslo',
    'fints_account'               => 'FinTS účet',
    'local_account'               => 'Účet Firefly III',

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


    'from_date'                   => 'Od data',
    'to_date'                     => 'Do data',
    'due_date'                    => 'Datum splatnosti',
    'payment_date'                => 'Datum zaplacení',
    'invoice_date'                => 'Datum vystavení',
    'internal_reference'          => 'Interní reference',
    'inward'                      => 'Vnitřní popis',
    'outward'                     => 'Vnější popis',
    'rule_group_id'               => 'Skupina pravidel',
    'transaction_description'     => 'Popis transakce',
    'first_date'                  => 'První datum',
    'transaction_type'            => 'Typ transakce',
    'repeat_until'                => 'Opakovat do data',
    'recurring_description'       => 'Popis opakující se transakce',
    'repetition_type'             => 'Typ opakování',
    'foreign_currency_id'         => 'Zahraniční měna',
    'repetition_end'              => 'Opakování končí',
    'repetitions'                 => 'Opakování',
    'calendar'                    => 'Kalendář',
    'weekend'                     => 'Víkend',
    'client_secret'               => 'Tajný klíč klienta',
    'withdrawal_destination_id'   => 'Cílový účet',
    'deposit_source_id'           => 'Zdrojový účet',
    'expected_on'                 => 'Očekáváno v',
    'paid'                        => 'Zaplaceno',
    'auto_budget_type'            => 'Automatický rozpočet',
    'auto_budget_amount'          => 'Částka automatického rozpočtu',
    'auto_budget_period'          => 'Období automatického rozpočtu',
    'collected'                   => 'Shromážděno',
    'submitted'                   => 'Odesláno',
    'key'                         => 'Klíč',
    'value'                       => 'Obsah záznamu',
    'webhook_delivery'            => 'Delivery',
    'webhook_response'            => 'Response',
    'webhook_trigger'             => 'Trigger',
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

