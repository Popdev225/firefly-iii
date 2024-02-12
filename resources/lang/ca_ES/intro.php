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

// Ignore this comment

declare(strict_types=1);

return [
    // index
    'index_intro'                                             => 'Benvingut a la pàgina d\'inici de Firefly III. Si us plau, pren-te el teu temps per seguir aquesta guia per fer-te una idea de com funciona Firefly III.',
    'index_accounts-chart'                                    => 'Aquesta gràfica mostra el saldo actual dels teus comptes. Pots seleccionar els comptes que es mostren des de les preferències.',
    'index_box_out_holder'                                    => 'Aquesta caixeta i les que es troben a continuació, et donaran una vista general de la teva situació financera.',
    'index_help'                                              => 'Si mai necessites ajuda amb una pàgina o formulari, prem aquest botó.',
    'index_outro'                                             => 'La majoria de pàgines de Firefly III començaran amb una petita introducció com aquesta. Si us plau, posa\'t en contacte amb mi si tens preguntes o comentaris. Gaudeix!',
    'index_sidebar-toggle'                                    => 'Per crear noves transaccions, comptes o altres coses, fes servir el menú sota aquesta icona.',
    'index_cash_account'                                      => 'Aquests són els comptes creats fins ara. Pots fer servir el compte d\'efectiu per fer el seguiment de les despeses d\'efectiu, però, evidentment, no és obligatori.',

    // transactions
    'transactions_create_basic_info'                          => 'Introdueix la informació bàsica de la transacció. Origen, destí, data i descripció.',
    'transactions_create_amount_info'                         => 'Introdueix la quantitat de la transacció. Si és necessari, els camps s\'actualitzaran automàticament per la informació en quantitat estrangera.',
    'transactions_create_optional_info'                       => 'Tots aquests camps són opcionals. Afegir metadades aquí farà que les transaccions estiguin organitzades millor.',
    'transactions_create_split'                               => 'Si vols dividir una transacció, afegeix més divisions amb aquest botó',

    // create account:
    'accounts_create_iban'                                    => 'Indica un IBAN vàlid pel teu compte. Això pot facilitar la importació de dades en un futur.',
    'accounts_create_asset_opening_balance'                   => 'Els comptes d\'actius poden tenir un "saldo d\'obertura", indicant l\'inici de l\'historial del compte a Firefly III.',
    'accounts_create_asset_currency'                          => 'Firefly III admet diverses monedes. Els comptes d\'actius tenen una moneda principal, la qual has d\'indicar aquí.',
    'accounts_create_asset_virtual'                           => 'A vegades et podria ser d\'ajuda donar al teu compte un saldo virtual: una quantitat addicional que s\'afegeix o resta sempre del saldo real.',

    // budgets index
    'budgets_index_intro'                                     => 'Els pressupostos s\'usen per gestionar les teves finances i són una de les funcions principals de Firefly III.',
    'budgets_index_see_expenses_bar'                          => 'Gastar diners anirà omplint a poc a poc aquesta barra.',
    'budgets_index_navigate_periods'                          => 'Navega a través dels períodes per configurar fàcilment els pressupostos amb antelació.',
    'budgets_index_new_budget'                                => 'Crea nous pressupostos tal com et sigui convenient.',
    'budgets_index_list_of_budgets'                           => 'Fes servir aquesta taula per establir les quantitats per cada pressupost i veure com t\'està anant.',
    'budgets_index_outro'                                     => 'Per aprendre més coses sobre pressupostar, dóna un cop d\'ull a la icona d\'ajuda de la cantonada superior dreta.',

    // Ignore this comment

    // reports (index)
    'reports_index_intro'                                     => 'Fes servir aquests informes per obtenir detalls de les teves finances.',
    'reports_index_inputReportType'                           => 'Escull un tipus d\'informe. Dóna un cop d\'ull a les pàgines d\'ajuda per veure el que mostra cada informe.',
    'reports_index_inputAccountsSelect'                       => 'Pots excloure o incloure comptes d\'actius com et vagi millor.',
    'reports_index_inputDateRange'                            => 'El rang de dates seleccionat el determines tú: des d\'un dia fins a 10 anys o més.',
    'reports_index_extra-options-box'                         => 'Depenent de l\'informe que hagis seleccionat, pots seleccionar filtres i opcions addicionals. Mira aquesta capsa quan canviïs el tipus d\'informe.',

    // reports (reports)
    'reports_report_default_intro'                            => 'Aquest informe et donarà una vista general ràpida i exhaustiva de les teves finances. Si vols veure alguna cosa més, si us plau, no dubtis en contactar amb mi!',
    'reports_report_audit_intro'                              => 'Aquest informe et donarà informació detallada dels teus comptes d\'actius.',
    'reports_report_audit_optionsBox'                         => 'Fes servir aquestes caselles per mostrar o ocultar les columnes que t\'interessin.',

    'reports_report_category_intro'                           => 'Aquest informe et donarà detalls d\'una o múltiples categories.',
    'reports_report_category_pieCharts'                       => 'Aquestes gràfiques et donaran detalls de les despeses i ingressos per categoria o per compte.',
    'reports_report_category_incomeAndExpensesChart'          => 'Aquesta gràfica mostra les despeses i ingressos per categoria.',

    'reports_report_tag_intro'                                => 'Aquest informe et donarà detalls d\'una o més etiquetes.',
    'reports_report_tag_pieCharts'                            => 'Aquestes gràfiques et donaran detalls de les despeses i ingressos per etiqueta, compte, categoria o pressupost.',
    'reports_report_tag_incomeAndExpensesChart'               => 'Aquesta gràfica mostra les teves despeses i ingressos per etiqueta.',

    'reports_report_budget_intro'                             => 'Aquest informe et donarà detalls d\'un o més pressupostos.',
    'reports_report_budget_pieCharts'                         => 'Aquestes gràfiques et donaran detalls de les despeses per pressupost o per compte.',
    'reports_report_budget_incomeAndExpensesChart'            => 'Aquesta gràfica mostra les despeses per pressupost.',

    // create transaction
    'transactions_create_switch_box'                          => 'Fes servir aquests botons per canviar ràpidament el tipus de transacció que vols guardar.',
    'transactions_create_ffInput_category'                    => 'Pots escriure el que vulguis en aquest camp. Se\'t suggeriran categories fetes servir anteriorment.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Enllaça la retirada a un pressupost per un millor control financer.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Fes servir aquest desplegable quan la retirada sigui en una altra moneda.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Fes servir aquest desplegable quan el dipòsit sigui en una altra moneda.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Selecciona una guardiola i enllaça aquesta transferència amb els teus estalvis.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'Aquest camp mostra quant has estalviat en cada guardiola.',
    'piggy-banks_index_button'                                => 'Al costat d\'aquesta barra de progrés hi ha dos botons (+ i -) per afegir o treure diners de cada guardiola.',
    'piggy-banks_index_accountStatus'                         => 'Per cada compte d\'actius amb una guardiola com a mínim, el seu estat es llista en aquesta taula.',

    // Ignore this comment

    // create piggy
    'piggy-banks_create_name'                                 => 'Quin és el teu objectiu? Un nou sofà, una càmera, diners per emergències?',
    'piggy-banks_create_date'                                 => 'Pots establir una data objectiu o una data límit per la teva guardiola.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'Aquesta gràfica mostra l\'històric d\'aquesta guardiola.',
    'piggy-banks_show_piggyDetails'                           => 'Alguns detalls sobre la guardiola',
    'piggy-banks_show_piggyEvents'                            => 'Qualsevol addició o eliminació també es llista aquí.',

    // bill index
    'bills_index_rules'                                       => 'Aquí pots veure quines regles s\'aplicaran si aquesta factura es paga',
    'bills_index_paid_in_period'                              => 'Aquest camp indica quan es va pagar la factura per últim cop.',
    'bills_index_expected_in_period'                          => 'Aquest camp indica per cada factura, si i com s\'espera que arribi la pròxima factura.',

    // show bill
    'bills_show_billInfo'                                     => 'Aquesta taula mostra informació general sobre aquesta factura.',
    'bills_show_billButtons'                                  => 'Fes servir aquest botó per escanejar de nou transaccions antigues per correspondre-les a aquesta factura.',
    'bills_show_billChart'                                    => 'Aquesta gràfica mostra les transaccions enllaçades a aquesta factura.',

    // create bill
    'bills_create_intro'                                      => 'Fes servir les factures per fer el seguiment als diners que deguis a cada període. Pensa en despeses com el lloguer, assegurança o el pagament de la hipoteca.',
    'bills_create_name'                                       => 'Usa noms descriptius com "Lloguer" o "Assegurança de salut".',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Selecciona una quantitat mínima i màxima per aquesta factura.',
    'bills_create_repeat_freq_holder'                         => 'La majoria de factures es repeteixen mensualment, però pots establir una altra freqüència aquí.',
    'bills_create_skip_holder'                                => 'Si una factura es repeteix cada 2 setmanes, el camp "ometre" s\'ha d\'establir a "1" per saltar cada altra setmana.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III et permet gestionar regles que s\'aplicaran màgicament a qualsevol transacció que creïs o editis.',
    'rules_index_new_rule_group'                              => 'Pots combinar regles en grups per a gestionar-les més fàcilment.',
    'rules_index_new_rule'                                    => 'Crea tantes regles com et faci falta.',
    'rules_index_prio_buttons'                                => 'Ordena-les de la manera que et vagi millor.',
    'rules_index_test_buttons'                                => 'Pots provar les regles o aplicar-les a transaccions existents.',
    'rules_index_rule-triggers'                               => 'Les regles tenen "activadors" i "accions" que pots ordenar arrossegant-los i deixant-los anar.',
    'rules_index_outro'                                       => 'Assegura\'t de donar un cop d\'ull les pàgines d\'ajuda fent servir (?) la icona de la cantonada superior dreta!',

    // create rule:
    'rules_create_mandatory'                                  => 'Escull un títol descriptiu, i estableix quan s\'ha d\'activar una regla.',
    'rules_create_ruletriggerholder'                          => 'Afegeix tants activadors com et calguin, però recorda que TOTS els activadors han d\'activar-se per executar les accions.',
    'rules_create_test_rule_triggers'                         => 'Fes servir aquest botó per veure quines transaccions coincideixen amb la regla.',
    'rules_create_actions'                                    => 'Estableix tantes accions com vulguis.',

    // Ignore this comment

    // preferences
    'preferences_index_tabs'                                  => 'Hi ha més opcions disponibles sota aquestes pestanyes.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III admet diverses monedes, les quals pots canviar en aquesta pàgina.',
    'currencies_index_default'                                => 'Firefly III té una moneda per defecte.',
    'currencies_index_buttons'                                => 'Fes servir aquests botons per canviar la moneda per defecte o habilitar altres monedes.',

    // create currency
    'currencies_create_code'                                  => 'Aquest codi ha de complir amb l\'ISO (Cerca-ho a Google per la moneda nova).',
];
// Ignore this comment
