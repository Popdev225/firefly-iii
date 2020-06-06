<?php

/**
 * list.php
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
    'buttons'                 => 'Knappar',
    'icon'                    => 'Ikon',
    'id'                      => 'ID',
    'create_date'             => 'Skapad den',
    'update_date'             => 'Uppdaterad den',
    'updated_at'              => 'Uppdaterad den',
    'balance_before'          => 'Saldo före',
    'balance_after'           => 'Saldo efter',
    'name'                    => 'Namn',
    'role'                    => 'Roll',
    'currentBalance'          => 'Nuvarande saldo',
    'linked_to_rules'         => 'Relevanta regler',
    'active'                  => 'Är aktiv?',
    'percentage'              => 'procent',
    'next_due'                => 'Nästa förfallodag',
    'transaction_type'        => 'Typ',
    'lastActivity'            => 'Senaste aktivitet',
    'balanceDiff'             => 'Saldodifferens',
    'other_meta_data'         => 'Övrigt metadata',
    'account_type'            => 'Kontotyp',
    'created_at'              => 'Skapad den',
    'account'                 => 'Konto',
    'matchingAmount'          => 'Belopp',
    'destination'             => 'Destination',
    'source'                  => 'Källa',
    'next_expected_match'     => 'Nästa förväntade träff',
    'automatch'               => 'Automatisk matchning?',
    'repeat_freq'             => 'Upprepas',
    'description'             => 'Beskrivning',
    'amount'                  => 'Belopp',
    'date'                    => 'Datum',
    'interest_date'           => 'Räntedatum',
    'book_date'               => 'Bokföringsdatum',
    'process_date'            => 'Behandlingsdatum',
    'due_date'                => 'Förfallodatum',
    'payment_date'            => 'Betalningsdatum',
    'invoice_date'            => 'Fakturadatum',
    'internal_reference'      => 'Internal reference',
    'notes'                   => 'Anteckningar',
    'from'                    => 'Från',
    'piggy_bank'              => 'Spargris',
    'to'                      => 'Till',
    'budget'                  => 'Budget',
    'category'                => 'Kategori',
    'bill'                    => 'Räkning',
    'withdrawal'              => 'Uttag',
    'deposit'                 => 'Insättning',
    'transfer'                => 'Överföring',
    'type'                    => 'Typ',
    'completed'               => 'Slutförd',
    'iban'                    => 'IBAN',
    'paid_current_period'     => 'Betalt den här perioden',
    'email'                   => 'E-post',
    'registered_at'           => 'Registrerad den',
    'is_blocked'              => 'Är blockerad',
    'is_admin'                => 'Är admin',
    'has_two_factor'          => 'Har 2FA',
    'blocked_code'            => 'Blockeringskod',
    'source_account'          => 'Källkonto',
    'destination_account'     => 'Destinationskonto',
    'accounts_count'          => 'Antal konton',
    'journals_count'          => 'Antal transaktioner',
    'attachments_count'       => 'Antal bilagor',
    'bills_count'             => 'Antal räkningar',
    'categories_count'        => 'Antal kategorier',
    'import_jobs_count'       => 'Antal importjobb',
    'budget_count'            => 'Antal budgetar',
    'rule_and_groups_count'   => 'Antal regler och regelgrupper',
    'tags_count'              => 'Antal etiketter',
    'tags'                    => 'Etiketter',
    'inward'                  => 'Inkommande beskrivning',
    'outward'                 => 'Utgående beskrivning',
    'number_of_transactions'  => 'Antal transaktioner',
    'total_amount'            => 'Totalt belopp',
    'sum'                     => 'Summa',
    'sum_excluding_transfers' => 'Summa (exkluderande överföringar)',
    'sum_withdrawals'         => 'Summa uttag',
    'sum_deposits'            => 'Summa uttag',
    'sum_transfers'           => 'Summa överföringar',
    'sum_reconciliations'     => 'Sum of reconciliations',
    'reconcile'               => 'Avstämning',
    'account_on_spectre'      => 'Konto (Spectre)',
    'account_on_ynab'         => 'Konto (YNAB)',
    'do_import'               => 'Importera från det här kontot',
    'sepa_ct_id'              => 'SEPA End to End-identifierare',
    'sepa_ct_op'              => 'SEPA Motstående kontoidentifierare',
    'sepa_db'                 => 'SEPA Mandatidentifierare',
    'sepa_country'            => 'SEPA-land',
    'sepa_cc'                 => 'SEPA Clearingkod',
    'sepa_ep'                 => 'SEPA Externt syfte',
    'sepa_ci'                 => 'SEPA Borgenär-identifierare',
    'sepa_batch_id'           => 'SEPA Batch-ID',
    'external_id'             => 'Externt ID',
    'account_at_bunq'         => 'Konto med bunq',
    'file_name'               => 'Filnamn',
    'file_size'               => 'Filstorlek',
    'file_type'               => 'Filtyp',
    'attached_to'             => 'Bifogad till',
    'file_exists'             => 'Fil existerar',
    'spectre_bank'            => 'Bank',
    'spectre_last_use'        => 'Senaste inloggning',
    'spectre_status'          => 'Status',
    'bunq_payment_id'         => 'bunq betalnings-ID',
    'repetitions'             => 'Repetitioner',
    'title'                   => 'Titel',
    'transaction_s'           => 'Transaktion(er)',
    'field'                   => 'Fält',
    'value'                   => 'Värde',
    'interest'                => 'Ränta',
    'interest_period'         => 'ränteperiod',
    'liability_type'          => 'Typ av ansvar',
];
