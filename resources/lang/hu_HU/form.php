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
    'bank_name'                 => 'Bank neve',
    'bank_balance'              => 'Egyenleg',
    'savings_balance'           => 'Megtakarítási egyenleg',
    'credit_card_limit'         => 'Hitelkártya limit',
    'automatch'                 => 'Automatikus egyezés',
    'skip'                      => 'Kihagyás',
    'enabled'                   => 'Engedélyezett',
    'name'                      => 'Név',
    'active'                    => 'Aktív',
    'amount_min'                => 'Minimális összeg',
    'amount_max'                => 'Maximális összeg',
    'match'                     => 'Találatok',
    'strict'                    => 'Szigorú mód',
    'repeat_freq'               => 'Ismétlődések',
    'location'                  => 'Location',
    'update_channel'            => 'Update channel',
    'journal_currency_id'       => 'Pénznem',
    'currency_id'               => 'Pénznem',
    'transaction_currency_id'   => 'Pénznem',
    'auto_budget_currency_id'   => 'Currency',
    'external_ip'               => 'A szervered külső IP címe',
    'attachments'               => 'Mellékletek',
    'journal_amount'            => 'Összeg',
    'journal_source_name'       => 'Jövedelemszámla (forrás)',
    'keep_bill_id'              => 'Számla',
    'journal_source_id'         => 'Költségszámla (forrás)',
    'BIC'                       => 'BIC',
    'verify_password'           => 'Jelszóbiztonság ellenőrzése',
    'source_account'            => 'Forrás bankszámla',
    'destination_account'       => 'Cél bankszámla',
    'journal_destination_id'    => 'Költségszámla (cél)',
    'asset_destination_account' => 'Célszámla',
    'include_net_worth'         => 'Befoglalva a nettó értékbe',
    'asset_source_account'      => 'Forrás számla',
    'journal_description'       => 'Leírás',
    'note'                      => 'Megjegyzések',
    'store_new_transaction'       => 'Új tranzakció letárolása',
    'split_journal'               => 'Tranzakció felosztása',
    'split_journal_explanation'   => 'A tranzakció több részre osztása',
    'currency'                    => 'Pénznem',
    'account_id'                  => 'Eszközszámla',
    'budget_id'                   => 'Költségkeret',
    'opening_balance'             => 'Nyitó egyenleg',
    'tagMode'                     => 'Címke mód',
    'tag_position'                => 'Címke helye',
    'virtual_balance'             => 'Virtuális egyenleg',
    'targetamount'                => 'Cél összeg',
    'account_role'                => 'Bankszámla szerepköre',
    'opening_balance_date'        => 'Nyitó egyenleg dátuma',
    'cc_type'                     => 'Hitelkártya fizetési terv',
    'cc_monthly_payment_date'     => 'Hitelkártya havi fizetés dátuma',
    'piggy_bank_id'               => 'Malacpersely',
    'returnHere'                  => 'Visszatérés ide',
    'returnHereExplanation'       => 'A tárolás után térjen vissza ide új létrehozásához.',
    'returnHereUpdateExplanation' => 'Frissítés után térjen vissza ide.',
    'description'                 => 'Leírás',
    'expense_account'             => 'Költségszámla',
    'revenue_account'             => 'Jövedelemszámla',
    'decimal_places'              => 'Tizedes jel helye',
    'exchange_rate_instruction'   => 'Külföldi pénznemek',
    'source_amount'               => 'Összeg (forrás)',
    'destination_amount'          => 'Összeg (cél)',
    'native_amount'               => 'Natív összeg',
    'new_email_address'           => 'Új email cím',
    'verification'                => 'Ellenőrzés',
    'api_key'                     => 'API-kulcs',
    'remember_me'                 => 'Emlékezzen rám',
    'liability_type_id'           => 'Kötelezettség típusa',
    'interest'                    => 'Kamat',
    'interest_period'             => 'Kamatperiódus',

    'source_account_asset'        => 'Forrásszámla (eszközszámla)',
    'destination_account_expense' => 'Célszámla (költségszámla)',
    'destination_account_asset'   => 'Célszámla (eszközszámla)',
    'source_account_revenue'      => 'Forrásszámla (jövedelemszámla)',
    'type'                        => 'Típus',
    'convert_Withdrawal'          => 'Költség konvertálása',
    'convert_Deposit'             => 'Bevétel konvertálása',
    'convert_Transfer'            => 'Átvezetés konvertálása',

    'amount'                      => 'Összeg',
    'foreign_amount'              => 'Foreign amount',
    'existing_attachments'        => 'Meglévő mellékletek',
    'date'                        => 'Dátum',
    'interest_date'               => 'Kamatfizetési időpont',
    'book_date'                   => 'Könyvelés dátuma',
    'process_date'                => 'Feldolgozás dátuma',
    'category'                    => 'Kategória',
    'tags'                        => 'Címkék',
    'deletePermanently'           => 'Végleges törlés',
    'cancel'                      => 'Mégse',
    'targetdate'                  => 'Céldátum',
    'startdate'                   => 'Kezdő dátum',
    'tag'                         => 'Címke',
    'under'                       => 'Alatt',
    'symbol'                      => 'Szimbólum',
    'code'                        => 'Kód',
    'iban'                        => 'IBAN',
    'account_number'              => 'Számlaszám',
    'creditCardNumber'            => 'Hitelkártyaszám',
    'has_headers'                 => 'Fejlécek',
    'date_format'                 => 'Dátumformátum',
    'specifix'                    => 'Bank- vagy fájlspecifikus javítások',
    'attachments[]'               => 'Mellékletek',
    'store_new_withdrawal'        => 'Új költség tárolása',
    'store_new_deposit'           => 'Új bevétel eltárolása',
    'store_new_transfer'          => 'Új átvezetés létrehozása',
    'add_new_withdrawal'          => 'Új költség hozzáadása',
    'add_new_deposit'             => 'Új bevétel hozzáadása',
    'add_new_transfer'            => 'Egy új átvezetés létrehozása',
    'title'                       => 'Cím',
    'notes'                       => 'Megjegyzések',
    'filename'                    => 'Fájlnév',
    'mime'                        => 'MIME-típus',
    'size'                        => 'Méret',
    'trigger'                     => 'Eseményindító',
    'stop_processing'             => 'Feldolgozás leállítása',
    'start_date'                  => 'Tartomány kezdete',
    'end_date'                    => 'Tartomány vége',
    'include_attachments'         => 'Tartalmazza a feltöltött mellékleteket',
    'include_old_uploads'         => 'Tartalmazza az importált adatot',
    'delete_account'              => '":name" bankszámla törlése',
    'delete_bill'                 => '":name" számla törlése',
    'delete_budget'               => '":name" költségkeret törlése',
    'delete_category'             => '":name" kategória törlése',
    'delete_currency'             => '":name" pénznem törlése',
    'delete_journal'              => '":description" tranzakció törlése',
    'delete_attachment'           => '":name" melléklet törlése',
    'delete_rule'                 => '":title" szabály törlése',
    'delete_rule_group'           => '":title" szabálycsoport törlése',
    'delete_link_type'            => '":name" kapcsolattípus törlése',
    'delete_user'                 => '":email" felhasználó törlése',
    'delete_recurring'            => '":title" ismétlődő tranzakció törlése',
    'user_areYouSure'             => '":email" felhasználó törlésével minden el fog veszni. Nincs visszavonás, helyreállítás vagy ezekhez hasonló. A saját felhasználó törlésével elveszik a hozzáférés a Firefly III ezen példányához.',
    'attachment_areYouSure'       => '":name" melléklet biztosan törölhető?',
    'account_areYouSure'          => '":name" bankszámla biztosan törölhető?',
    'bill_areYouSure'             => '":name" számla biztosan törölhető?',
    'rule_areYouSure'             => '":title" szabály biztosan törölhető?',
    'ruleGroup_areYouSure'        => '":title" szabálycsoportot biztosan törölhető?',
    'budget_areYouSure'           => '":name" költségkeretet biztosan törölhető?',
    'category_areYouSure'         => '":name" kategória biztosan törölhető?',
    'recurring_areYouSure'        => ':title ismétlődő tranzakció biztosan törölhető?',
    'currency_areYouSure'         => '":name" pénznem biztosan törölhető?',
    'piggyBank_areYouSure'        => '":name" malacpersely biztosan törölhető?',
    'journal_areYouSure'          => '":description" tranzakció biztosan törölhető?',
    'mass_journal_are_you_sure'   => 'Ezek a tranzakciók biztosan törölhetőek?',
    'tag_areYouSure'              => '":tag" címke biztosan törölhető?',
    'journal_link_areYouSure'     => '<a href=":source_link">:source</a> és <a href=":destination_link">:destination</a> közötti kapcsolat biztosan törölhető?',
    'linkType_areYouSure'         => '":name" (":inward" / ":outward") kapcsolattípus biztosan törölhető?',
    'permDeleteWarning'           => 'A Firefly III-ból történő törlés végleges és nem vonható vissza.',
    'mass_make_selection'         => 'A jelölőnégyzet eltávolításával megakadályozható az elemek törlése.',
    'delete_all_permanently'      => 'Kijelöltek végleges törlése',
    'update_all_journals'         => 'A tranzakciók frissítése',
    'also_delete_transactions'    => 'A bankszámlához tartozó egyetlen tranzakció is törölve lesz. | Az ehhez a bankszámlához tartozó :count tranzakció is törölve lesz.',
    'also_delete_connections'     => 'A csak ezzel a kapcsolattípussal rendelkező tranzakciók elveszítik az összerendelésüket. | Mind a :count tranzakció, amely ezzel a hivatkozástípussal kapcsolódik elveszíti az összrendelését.',
    'also_delete_rules'           => 'A szabálycsoporthoz tartozó egyetlen szabály is törölve lesz. | Az ezen szabálycsoporthoz tartozó :count szabály is törölve lesz.',
    'also_delete_piggyBanks'      => 'A bankszámlához tartozó egyetlen malacpersely is törölve lesz. | Az ehhez a bankszámlához tartozó :count malacpersely is törölve lesz.',
    'bill_keep_transactions'      => 'A számlához tartozó egyetlen tranzakció nem lesz törölve.|Az ehhez a számlához tartozó :count tranzakció nem lesz törölve.',
    'budget_keep_transactions'    => 'A költségkerethez tartozó egyetlen tranzakció nem lesz törölve.|Az ehhez a költségkerethez tartozó :count tranzakció nem lesz törölve.',
    'category_keep_transactions'  => 'A kategóriához tartozó egyetlen tranzakció nem lesz törölve.|Az ehhez a kategóriához tartozó :count tranzakció nem lesz törölve.',
    'recurring_keep_transactions' => 'Az ismétlődő tranzakció által létrehozott egyetlen tranzakció nem lesz törölve.|Az ismétlődő tranzakció által létrehozott :count tranzakció nem lesz törölve.',
    'tag_keep_transactions'       => 'A címkéhez tartozó egyetlen tranzakció nem lesz törölve.|Az ehhez a címkéhez tartozó :count tranzakció nem lesz törölve.',
    'check_for_updates'           => 'Frissítések ellenőrzése',

    'email'                 => 'Email cím',
    'password'              => 'Jelszó',
    'password_confirmation' => 'Jelszó (ismét)',
    'blocked'               => 'Letiltott?',
    'blocked_code'          => 'Letiltás oka',
    'login_name'            => 'Bejelentkezés',

    // import
    'apply_rules'           => 'Szabályok alkalmazása',
    'artist'                => 'Előadó',
    'album'                 => 'Album',
    'song'                  => 'Dal',


    // admin
    'domain'                => 'Tartomány',
    'single_user_mode'      => 'Regisztráció tiltása',
    'is_demo_site'          => 'Bemutatóoldal',

    // import
    'import_file'           => 'Import fájl',
    'configuration_file'    => 'Beállítás fájl',
    'import_file_type'      => 'Import fájl típusa',
    'csv_comma'             => 'Egy vessző (,)',
    'csv_semicolon'         => 'Egy pontosvessző (;)',
    'csv_tab'               => 'Egy fül (láthatatlan)',
    'csv_delimiter'         => 'CSV mezőhatároló',
    'csv_import_account'    => 'Alapértelmezés szerinti importálási bankszámla',
    'csv_config'            => 'CSV importálás beállítása',
    'client_id'             => 'Ügyfélazonosító',
    'service_secret'        => 'Service secret',
    'app_secret'            => 'App secret',
    'app_id'                => 'Alkalmazás azonosító',
    'secret'                => 'Titkos kód',
    'public_key'            => 'Nyilvános kulcs',
    'country_code'          => 'Országkód',
    'provider_code'         => 'Bank vagy adatszolgáltató',
    'fints_url'             => 'FinTS API URL',
    'fints_port'            => 'Port',
    'fints_bank_code'       => 'Bank kódja',
    'fints_username'        => 'Felhasználónév',
    'fints_password'        => 'PIN / Jelszó',
    'fints_account'         => 'FinTS fiók',
    'local_account'         => 'Firefly III fiók',
    'from_date'             => 'Dátumtól',
    'to_date'               => 'Dátumig',


    'due_date'                => 'Lejárati időpont',
    'payment_date'            => 'Fizetés dátuma',
    'invoice_date'            => 'Számla dátuma',
    'internal_reference'      => 'Belső hivatkozás',
    'inward'                  => 'Belső leírás',
    'outward'                 => 'Külső leírás',
    'rule_group_id'           => 'Szabálycsoport',
    'transaction_description' => 'Tranzakció leírása',
    'first_date'              => 'Első dátum',
    'transaction_type'        => 'Tranzakció típusa',
    'repeat_until'            => 'Ismétlés eddig:',
    'recurring_description'   => 'Ismétlődő tranzakció leírása',
    'repetition_type'         => 'Ismétlődés típusa',
    'foreign_currency_id'     => 'Foreign currency',
    'repetition_end'          => 'Ismétlés vége',
    'repetitions'             => 'Ismétlések',
    'calendar'                => 'Naptár',
    'weekend'                 => 'Hétvége',
    'client_secret'           => 'Ügyfél titkos kódja',

    'withdrawal_destination_id' => 'Destination account',
    'deposit_source_id'         => 'Source account',
    'expected_on'               => 'Expected on',
    'paid'                      => 'Paid',

    'auto_budget_type'            => 'Auto-budget',
    'auto_budget_amount'            => 'Auto-budget amount',
    'auto_budget_period'            => 'Auto-budget period',


];
