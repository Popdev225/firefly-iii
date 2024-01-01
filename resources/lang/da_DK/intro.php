<?php

/**
 * intro.php
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
    // index
    'index_intro'                                             => 'Velkommen til forsiden af Firefly III. Tag lidt tid og gå gennem denne intro for at få en fornemmelse af hvordan Firefly III virker.',
    'index_accounts-chart'                                    => 'Dette diagram viser den nuværende saldo på dine forbrugskonti. Du kan vælge de synlige konti i dine indstillinger.',
    'index_box_out_holder'                                    => 'Denne lille boks og boksene ved siden af giver dig et hurtigt overblik over din finansielle situation.',
    'index_help'                                              => 'Hvis du nogensinde har brug for hjælp med en side eller en formular, tryk på denne knap.',
    'index_outro'                                             => 'De fleste sider i Firefly III starter med en lille tour som denne. Kontakt mig venligst, hvis du har spørgsmål eller kommentarer. God fornøjelse!',
    'index_sidebar-toggle'                                    => 'For at oprette nye transaktioner, konti eller andet, brug da menuen under dette ikon.',
    'index_cash_account'                                      => 'Disse er de oprettede konti for nu. Du kan bruge kontantkontoen til at spore dine kontante udgifter, men det er selvfølgelig ikke obligatorisk.',

    // transactions
    'transactions_create_basic_info'                          => 'Indtast de grundlæggende oplysninger for din transaktion. Kilde, destination, dato og beskrivelse.',
    'transactions_create_amount_info'                         => 'Indtast transaktionsbeløbet. Hvis det er nødvendigt, vil felterne automatisk opdatere for fremmedvaluta.',
    'transactions_create_optional_info'                       => 'Alle disse felter er valgfrie. Hvis du tilføjer metadata her, kan du organisere dine transaktioner bedre.',
    'transactions_create_split'                               => 'Hvis du vil opdele en transaktion, så kan dette gøres med denne knap',

    // create account:
    'accounts_create_iban'                                    => 'Giv dine konti en gyldig IBAN. Dette kan gøre en dataimport lettere i fremtiden.',
    'accounts_create_asset_opening_balance'                   => 'Konti for aktiver kan have en "startsaldo", der angiver begyndelsen af kontoens historik i Firefly III.',
    'accounts_create_asset_currency'                          => 'Firefly III understøtter flere valutaer. Konti for aktiver har en primær valuta, som du skal angive her.',
    'accounts_create_asset_virtual'                           => 'Det kan undertiden være en hjælp at give din konto en virtuel saldo: et beløb der altid tilføjes eller trækkes fra den faktiske saldo.',

    // budgets index
    'budgets_index_intro'                                     => 'Budgetter bruges til at styre dine finanser og udgør en af de centrale funktioner i Firefly III.',
    'budgets_index_set_budget'                                => 'Opret dit samlede budget for hver periode, så Firefly III kan fortælle dig, om du har budgetteret alle tilgængelige midler.',
    'budgets_index_see_expenses_bar'                          => 'Efterhånden som penge forbruges, vil denne bjælke langsomt udfyldes.',
    'budgets_index_navigate_periods'                          => 'Naviger gennem perioder for nemt at kunne oprette budgetter fremadrettet.',
    'budgets_index_new_budget'                                => 'Opret nye budgetter, som du finder passende.',
    'budgets_index_list_of_budgets'                           => 'Brug denne tabel til at fastsætte beløbene for hvert budget og se, hvordan du klarer det.',
    'budgets_index_outro'                                     => 'For at lære mere om budgettering, tjek hjælpeikonet i øverste højre hjørne.',

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


    // reports (index)
    'reports_index_intro'                                     => 'Brug disse rapporter til at få detaljeret indsigt i dine finanser.',
    'reports_index_inputReportType'                           => 'Vælg en rapporttype. Tjek hjælpesiderne for at se, hvad hver rapport viser.',
    'reports_index_inputAccountsSelect'                       => 'Du kan udelukke eller inkludere aktiver som du finder passende.',
    'reports_index_inputDateRange'                            => 'Det valgte datointerval er helt op til dig: fra en dag til 10 år.',
    'reports_index_extra-options-box'                         => 'Afhængigt af den rapport du har valgt, kan du vælge ekstra filtre og indstillinger her. Se dette felt når du ændrer rapporttyper.',

    // reports (reports)
    'reports_report_default_intro'                            => 'Denne rapport vil give dig et hurtigt og omfattende overblik over dine finanser. Hvis du har forslag til andre, tøv ikke med at kontakte mig!',
    'reports_report_audit_intro'                              => 'Denne rapport vil give dig et detaljeret overblik over dine aktiver.',
    'reports_report_audit_optionsBox'                         => 'Brug disse afkrydsningsfelter til at vise eller skjule de kolonner, du er interesseret i.',

    'reports_report_category_intro'                           => 'Denne rapport vil give dig overblik over en eller flere kategorier.',
    'reports_report_category_pieCharts'                       => 'Disse diagrammer vil give dig overblik over udgifter og indkomst per kategori eller per konto.',
    'reports_report_category_incomeAndExpensesChart'          => 'Dette diagram viser dine udgifter og indtægter per kategori.',

    'reports_report_tag_intro'                                => 'Denne rapport vil give dig overblik over et eller flere tags.',
    'reports_report_tag_pieCharts'                            => 'Disse diagrammer vil give dig overblik over udgifter og indkomst per tag, konto, kategori eller budget.',
    'reports_report_tag_incomeAndExpensesChart'               => 'Dette diagram viser dine udgifter og indtægter per tag.',

    'reports_report_budget_intro'                             => 'Denne rapport vil give dig overblik over et eller flere budgetter.',
    'reports_report_budget_pieCharts'                         => 'Disse diagrammer vil give dig overblik over udgifterne per budget eller per konto.',
    'reports_report_budget_incomeAndExpensesChart'            => 'Dette diagram viser dine udgifter per budget.',

    // create transaction
    'transactions_create_switch_box'                          => 'Brug disse knapper for hurtigt at skifte til den transaktionstype, du ønsker at gemme.',
    'transactions_create_ffInput_category'                    => 'Du kan frit skrive i dette felt. Tidligere oprettede kategorier vil blive foreslået.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Link din udbetaling til et budget for bedre styring.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Brug denne dropdown når din udbetaling er i en anden valuta.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Brug denne dropdown når din indbetaling er i en anden valuta.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Vælg en "sparegris" og link denne overførsel til dine opsparinger.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'Dette felt viser dig hvor meget du har gemt i hver "sparebøsse".',
    'piggy-banks_index_button'                                => 'Ved siden af denne statuslinje er to knapper (+ og -) for at tilføje eller fjerne penge fra hver "sparebøsse".',
    'piggy-banks_index_accountStatus'                         => 'For hver konto for aktiver med mindst en "sparebøsse" er status angivet i denne tabel.',

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


    // create piggy
    'piggy-banks_create_name'                                 => 'Hvad er dit mål? En ny sofa, et kamera, penge til nødsituationer?',
    'piggy-banks_create_date'                                 => 'Du kan angive en måldato eller en deadline for din "sparebøsse".',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'Dette diagram vil vise historikken for denne "sparegris".',
    'piggy-banks_show_piggyDetails'                           => 'Detaljer vedrørende din "sparegris"',
    'piggy-banks_show_piggyEvents'                            => 'Eventuelle tilføjelser eller udtræk er også anført her.',

    // bill index
    'bills_index_rules'                                       => 'Her kan du se hvilke regler der vil kontrollere om denne regning er nået',
    'bills_index_paid_in_period'                              => 'Dette felt angiver, hvornår regningen sidst blev betalt.',
    'bills_index_expected_in_period'                          => 'Dette felt angiver for hver regning, hvis og når den næste regning forventes at forfalde.',

    // show bill
    'bills_show_billInfo'                                     => 'Denne tabel viser nogle generelle oplysninger om denne regning.',
    'bills_show_billButtons'                                  => 'Brug denne knap til at scanne gamle transaktioner igen, så de vil blive matchet med denne regning.',
    'bills_show_billChart'                                    => 'Dette diagram viser de transaktioner, der er knyttet til denne regning.',

    // create bill
    'bills_create_intro'                                      => 'Brug regninger til at spore det beløb du skylder hver periode. Tænk på udgifter som leje, forsikring eller realkreditbetalinger.',
    'bills_create_name'                                       => 'Brug et beskrivende navn som "Leje" eller "Sundhedsforsikring".',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Vælg et minimum og maksimum beløb for denne regning.',
    'bills_create_repeat_freq_holder'                         => 'De fleste regninger gentages månedligt, men du kan indstille en anden hyppighed her.',
    'bills_create_skip_holder'                                => 'Hvis en regning gentages hver 2. uge, skal "oversprings"-feltet indstilles til "1" for at springe over hver anden uge.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III giver dig mulighed for at administrere regler, der automatisk vil blive anvendt på enhver transaktion, du opretter eller ændrer.',
    'rules_index_new_rule_group'                              => 'Du kan kombinere regler i grupper for lettere administration.',
    'rules_index_new_rule'                                    => 'Opret så mange regler, som du vil.',
    'rules_index_prio_buttons'                                => 'Sorter dem som du finder passende.',
    'rules_index_test_buttons'                                => 'Du kan afprøve dine regler eller anvende dem på eksisterende transaktioner.',
    'rules_index_rule-triggers'                               => 'Regler har "triggers" og "handlinger", som du kan sortere ved "træk og slip".',
    'rules_index_outro'                                       => 'Vær sikker på at tjekke hjælpesiderne ved hjælp af (?) ikonet øverst til højre!',

    // create rule:
    'rules_create_mandatory'                                  => 'Vælg en beskrivende titel, og indstil hvornår reglen skal køres.',
    'rules_create_ruletriggerholder'                          => 'Tilføj så mange udløsere som du vil, men husk at ALLE betingelser skal matche før nogen handlinger bliver udført.',
    'rules_create_test_rule_triggers'                         => 'Brug denne knap til at se, hvilke transaktioner der ville passe til din regel.',
    'rules_create_actions'                                    => 'Angiv så mange handlinger som du ønsker.',

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


    // preferences
    'preferences_index_tabs'                                  => 'Flere indstillinger er tilgængelige bag disse fanerblade.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III understøtter flere valutaer, som du kan ændre på denne side.',
    'currencies_index_default'                                => 'Firefly III har en standard valuta.',
    'currencies_index_buttons'                                => 'Brug disse knapper til at ændre standardvalutaen eller aktivere andre valutaer.',

    // create currency
    'currencies_create_code'                                  => 'Denne kode skal være ISO-kompatibel (Slå den op på Google for din nye valuta).',
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

