<?php

/**
 * list.php
 * Copyright (c) 2019 thegrumpydictator@gmail.com
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
    'buttons'                 => 'Schaltflächen',
    'icon'                    => 'Symbol',
    'id'                      => 'Id',
    'create_date'             => 'Erstellt am',
    'update_date'             => 'Aktualisiert am',
    'updated_at'              => 'Aktualisiert am',
    'balance_before'          => 'Kontostand vorher',
    'balance_after'           => 'Kontostand nachher',
    'name'                    => 'Name',
    'role'                    => 'Rolle',
    'currentBalance'          => 'Aktueller Kontostand',
    'linked_to_rules'         => 'Verlinkte Regeln',
    'active'                  => 'Aktiv?',
    'percentage'              => '%',
    'next_due'                => 'Nächste Fälligkeit',
    'transaction_type'        => 'Typ',
    'lastActivity'            => 'Letzte Aktivität',
    'balanceDiff'             => 'Saldendifferenz',
    'matchesOn'               => 'Zusammengeführt am',
    'other_meta_data'         => 'Weitere Metadaten',
    'account_type'            => 'Kontotyp',
    'created_at'              => 'Erstellt am',
    'account'                 => 'Konto',
    'matchingAmount'          => 'Betrag',
    'split_number'            => 'Geteilt #',
    'destination'             => 'Empfänger',
    'source'                  => 'Quelle',
    'next_expected_match'     => 'Nächste erwartete Übereinstimmung',
    'automatch'               => 'Automatisch erkennen?',
    'repeat_freq'             => 'Wiederholungen',
    'description'             => 'Beschreibung',
    'amount'                  => 'Betrag',
    'internal_reference'      => 'Interne Referenz',
    'date'                    => 'Datum',
    'interest_date'           => 'Zinstermin',
    'book_date'               => 'Buchungsdatum',
    'process_date'            => 'Bearbeitungsdatum',
    'due_date'                => 'Fälligkeitstermin',
    'payment_date'            => 'Zahlungsdatum',
    'invoice_date'            => 'Rechnungsdatum',
    'interal_reference'       => 'Interner Verweis',
    'notes'                   => 'Notizen',
    'from'                    => 'Von',
    'piggy_bank'              => 'Sparschwein',
    'to'                      => 'An',
    'budget'                  => 'Budget',
    'category'                => 'Kategorie',
    'bill'                    => 'Rechnung',
    'withdrawal'              => 'Ausgabe',
    'deposit'                 => 'Einlage',
    'transfer'                => 'Überweisung',
    'type'                    => 'Typ',
    'completed'               => 'Abgeschlossen',
    'iban'                    => 'IBAN',
    'paid_current_period'     => 'Diese Periode bezahlt',
    'email'                   => 'E-Mail',
    'registered_at'           => 'Registriert am',
    'is_blocked'              => 'Ist blockiert',
    'is_admin'                => 'Ist Admin',
    'has_two_factor'          => 'Nutzt 2FA',
    'blocked_code'            => 'Blockcode',
    'source_account'          => 'Quellkonto',
    'destination_account'     => 'Zielkonto',
    'accounts_count'          => 'Anzahl Konten',
    'journals_count'          => 'Anzahl der Zahlungsvorgänge',
    'attachments_count'       => 'Anzahl Anhänge',
    'bills_count'             => 'Anzahl Rechnungen',
    'categories_count'        => 'Anzahl Kategorien',
    'import_jobs_count'       => 'Anzahl importierter Jobs',
    'budget_count'            => 'Anzahl Kostenpläne',
    'rule_and_groups_count'   => 'Anzahl Regeln und Regelgruppen',
    'tags_count'              => 'Anzahl Schlagwörter',
    'tags'                    => 'Schlagwörter',
    'inward'                  => 'Beschreibung der Eingänge',
    'outward'                 => 'Beschreibung der Ausgänge',
    'number_of_transactions'  => 'Anzahl der Zahlungsvorgänge',
    'total_amount'            => 'Gesamtbetrag',
    'sum'                     => 'Summe',
    'sum_excluding_transfers' => 'Summe (ohne Umbuchungen)',
    'sum_withdrawals'         => 'Summe der Ausgaben',
    'sum_deposits'            => 'Summe der Einzahlungen',
    'sum_transfers'           => 'Summe der Umbuchungen',
    'reconcile'               => 'Abgleichen',
    'account_on_spectre'      => 'Konto (Spectre)',
    'account_on_ynab'         => 'Konto (YNAB)',
    'do_import'               => 'Von diesem Konto importieren',
    'sepa_ct_id'              => 'SEPA • Ende-zu-Ende-Identifikationsnummer',
    'sepa_ct_op'              => 'SEPA-Gläubiger-Identifikationsnummer',
    'sepa_db'                 => 'SEPA • Mandatskennung',
    'sepa_country'            => 'SEPA • Land',
    'sepa_cc'                 => 'SEPA • Verrechnungsschlüssel',
    'sepa_ep'                 => 'SEPA • Externer Verwendungszweck',
    'sepa_ci'                 => 'SEPA • Identifikationsnummer des Zahlungsempfängers',
    'sepa_batch_id'           => 'SEPA • Stapel-Kennung',
    'external_id'             => 'Externe Kennung',
    'account_at_bunq'         => 'Konto bei „bunq”',
    'file_name'               => 'Dateiname',
    'file_size'               => 'Dateigröße',
    'file_type'               => 'Dateityp',
    'attached_to'             => 'Zugewiesen zu',
    'file_exists'             => 'Datei existiert',
    'spectre_bank'            => 'Bank',
    'spectre_last_use'        => 'Letzte Anmeldung',
    'spectre_status'          => 'Status',
    'bunq_payment_id'         => 'bunq-Zahlungskennung',
    'repetitions'             => 'Wiederholungen',
    'title'                   => 'Titel',
    'transaction_s'           => 'Buchung(en)',
    'field'                   => 'Feld',
    'value'                   => 'Wert',
    'interest'                => 'Zinsen',
    'interest_period'         => 'Verzinsungszeitraum',
    'liability_type'          => 'Verbindlichkeitsart',
];
