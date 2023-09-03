/*
 * index.js
 * Copyright (c) 2022 james@firefly-iii.org
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

export default {
    "config": {
        "html_language": "sl",
        "month_and_day_fns": "MMMM d, y"
    },
    "form": {
        "name": "Ime",
        "amount_min": "Najni\u017eji znesek",
        "amount_max": "Najvi\u0161ji znesek",
        "url": "URL",
        "title": "Naslov",
        "first_date": "Prvi datum",
        "repetitions": "Ponovitve",
        "description": "Opis",
        "iban": "IBAN",
        "skip": "Presko\u010di",
        "date": "Datum"
    },
    "list": {
        "name": "ime",
        "account_number": "\u0160tevilka ra\u010duna",
        "currentBalance": "trenutno stanje",
        "lastActivity": "zadnja aktivnost",
        "active": "Aktiviran?"
    },
    "breadcrumbs": {
        "placeholder": "[Placeholder]",
        "budgets": "Prora\u010duni",
        "subscriptions": "Naro\u010dnine",
        "transactions": "Transakcije",
        "title_expenses": "Stro\u0161ki",
        "title_withdrawal": "Stro\u0161ki",
        "title_revenue": "Dohodki prihodki",
        "title_deposit": "Dohodki\/prihodki",
        "title_transfer": "Prenosi",
        "title_transfers": "Prenosi",
        "asset_accounts": "Premo\u017eenjski ra\u010duni",
        "expense_accounts": "Ra\u010duni stro\u0161kov",
        "revenue_accounts": "Ra\u010dun prihodkov",
        "liabilities_accounts": "Obveznosti"
    },
    "firefly": {
        "administration_index": "Finan\u010dna administracija",
        "actions": "Dejanja",
        "edit": "uredi",
        "delete": "izbri\u0161i",
        "reconcile": "Poravnaj",
        "create_new_asset": "ustvari nov premo\u017eenjski ra\u010dun",
        "confirm_action": "Potrdi dejanje",
        "new_budget": "nov bud\u017eet",
        "new_asset_account": "nov premo\u017eenjski ra\u010dun",
        "newTransfer": "Nov prenos",
        "submission_options": "Submission options",
        "apply_rules_checkbox": "Uporabi pravila",
        "fire_webhooks_checkbox": "Fire webhooks",
        "newDeposit": "Nov polog",
        "newWithdrawal": "Nov stro\u0161ek",
        "bills_paid": "Pla\u010dani trajniki",
        "left_to_spend": "Preostala poraba",
        "no_budget": "(brez prora\u010duna)",
        "budgeted": "Prora\u010dun",
        "spent": "Porabljeno",
        "no_bill": "(ni ra\u010duna)",
        "rule_trigger_source_account_starts_choice": "Ime izvornega ra\u010duna se za\u010dne z ...",
        "rule_trigger_source_account_ends_choice": "Ime izvornega ra\u010duna se kon\u010da s\/z ...",
        "rule_trigger_source_account_is_choice": "Ime izvornega ra\u010duna je ...",
        "rule_trigger_source_account_contains_choice": "Ime izvornega ra\u010duna vsebuje ...",
        "rule_trigger_account_id_choice": "ID ra\u010duna je natan\u010dno ...",
        "rule_trigger_source_account_id_choice": "ID izvornega ra\u010duna je to\u010dno ...",
        "rule_trigger_destination_account_id_choice": "ID ciljnega ra\u010duna je to\u010dno ...",
        "rule_trigger_account_is_cash_choice": "Kateri koli ra\u010dun je gotovina",
        "rule_trigger_source_is_cash_choice": "Izvorni ra\u010dun je gotovinski ra\u010dun",
        "rule_trigger_destination_is_cash_choice": "Ciljni ra\u010dun je (gotovinski) ra\u010dun",
        "rule_trigger_source_account_nr_starts_choice": "Izvorna \u0161tevilka ra\u010duna \/ IBAN se za\u010dne z ...",
        "rule_trigger_source_account_nr_ends_choice": "Izvorna \u0161tevilka ra\u010duna \/ IBAN se kon\u010da z ...",
        "rule_trigger_source_account_nr_is_choice": "Izvorna \u0161tevilka ra\u010duna \/ IBAN je ...",
        "rule_trigger_source_account_nr_contains_choice": "Izvorna \u0161tevilka ra\u010duna \/ IBAN vsebuje ...",
        "rule_trigger_destination_account_starts_choice": "Ime ciljnega ra\u010duna se za\u010dne z ...",
        "rule_trigger_destination_account_ends_choice": "Ime ciljnega ra\u010duna se kon\u010da z ...",
        "rule_trigger_destination_account_is_choice": "Ime ciljnega ra\u010duna je ...",
        "rule_trigger_destination_account_contains_choice": "Ime ciljnega ra\u010duna vsebuje ...",
        "rule_trigger_destination_account_nr_starts_choice": "\u0160tevilka ciljnega ra\u010duna \/ IBAN se za\u010dne s\/z ...",
        "rule_trigger_destination_account_nr_ends_choice": "\u0160tevilka ciljnega ra\u010duna \/ IBAN se kon\u010da s\/z ...",
        "rule_trigger_destination_account_nr_is_choice": "\u0160tevilka ciljnega ra\u010duna \/ IBAN je ...",
        "rule_trigger_destination_account_nr_contains_choice": "\u0160tevilka ciljnega ra\u010duna \/ IBAN vsebuje ...",
        "rule_trigger_transaction_type_choice": "Tip transakcije je..",
        "rule_trigger_category_is_choice": "Kategorija je..",
        "rule_trigger_amount_less_choice": "Znesek je manj\u0161i ali enak ...",
        "rule_trigger_amount_is_choice": "Znesek je..",
        "rule_trigger_amount_more_choice": "Znesek je ve\u010dji ali enak ...",
        "rule_trigger_description_starts_choice": "Opis se za\u010dne s\/z..",
        "rule_trigger_description_ends_choice": "Opis se kon\u010da z..",
        "rule_trigger_description_contains_choice": "Opis vsebuje..",
        "rule_trigger_description_is_choice": "Opis je..",
        "rule_trigger_date_on_choice": "Datum transakcije je ...",
        "rule_trigger_date_before_choice": "Datum transakcije je pred ...",
        "rule_trigger_date_after_choice": "Datum transakcije je po ...",
        "rule_trigger_created_at_on_choice": "Transakcija je bila izvedena dne ...",
        "rule_trigger_updated_at_on_choice": "Transakcija je bila nazadnje urejena ...",
        "rule_trigger_budget_is_choice": "Prora\u010dun je..",
        "rule_trigger_tag_is_choice": "Vsaka oznaka je ...",
        "rule_trigger_currency_is_choice": "Valuta transakcije je..",
        "rule_trigger_foreign_currency_is_choice": "Tuja valuta transakcije je ...",
        "rule_trigger_has_attachments_choice": "Ima vsaj toliko priponk",
        "rule_trigger_has_no_category_choice": "Nima kategorije",
        "rule_trigger_has_any_category_choice": "Ima kategorijo",
        "rule_trigger_has_no_budget_choice": "Nima prora\u010duna",
        "rule_trigger_has_any_budget_choice": "Ima (katerikoli) prora\u010dun",
        "rule_trigger_has_no_bill_choice": "Nima ra\u010duna",
        "rule_trigger_has_any_bill_choice": "Ima (kateri koli) trajnik",
        "rule_trigger_has_no_tag_choice": "Nima oznak",
        "rule_trigger_has_any_tag_choice": "Ima eno ali ve\u010d oznak",
        "rule_trigger_any_notes_choice": "Ima zaznamke",
        "rule_trigger_no_notes_choice": "Nima zaznamkov",
        "rule_trigger_notes_is_choice": "Opombe so..",
        "rule_trigger_notes_contains_choice": "Opombe vsebujejo ...",
        "rule_trigger_notes_starts_choice": "Opombe se za\u010dnejo s\/z ...",
        "rule_trigger_notes_ends_choice": "Opombe se kon\u010dajo s\/z ...",
        "rule_trigger_bill_is_choice": "Ra\u010dun je..",
        "rule_trigger_external_id_is_choice": "Zunanji ID je ...",
        "rule_trigger_internal_reference_is_choice": "Notranja referenca je ..",
        "rule_trigger_journal_id_choice": "ID dnevnika transakcij je ...",
        "rule_trigger_any_external_url_choice": "Transakcija ima (kateri koli) zunanji URL",
        "rule_trigger_no_external_url_choice": "Transakcija nima zunanjega URL-ja",
        "rule_trigger_id_choice": "ID transakcije je ...",
        "rule_action_delete_transaction_choice": "IZBRI\u0160ITE transakcijo (!)",
        "rule_action_set_category_choice": "Nastavi kategorijo na ...",
        "rule_action_clear_category_choice": "Po\u010disti kategorijo",
        "rule_action_set_budget_choice": "Nastavi prora\u010dun na ...",
        "rule_action_clear_budget_choice": "Po\u010disti prora\u010dun",
        "rule_action_add_tag_choice": "Dodaj oznako ..",
        "rule_action_remove_tag_choice": "Odstrani oznako ...",
        "rule_action_remove_all_tags_choice": "Odstrani vse oznake",
        "rule_action_set_description_choice": "Nastavi opis na ...",
        "rule_action_update_piggy_choice": "Dodaj\/odstrani znesek transakcije v hranilniku ...",
        "rule_action_append_description_choice": "Za opis dodaj ...",
        "rule_action_prepend_description_choice": "Pred opis dodaj ...",
        "rule_action_set_source_account_choice": "Nastavi izvorni ra\u010dun na ...",
        "rule_action_set_destination_account_choice": "Nastavi ciljni ra\u010dun na ...",
        "rule_action_append_notes_choice": "Za opombo dodaj ...",
        "rule_action_prepend_notes_choice": "Pred opombo dodaj ...",
        "rule_action_clear_notes_choice": "Odstrani opombe",
        "rule_action_set_notes_choice": "Nastavi opombe na ...",
        "rule_action_link_to_bill_choice": "Pove\u017ei s trajnikom ...",
        "rule_action_convert_deposit_choice": "Pretvori transakcijo v polog",
        "rule_action_convert_withdrawal_choice": "Pretvori transakcijo v odliv",
        "rule_action_convert_transfer_choice": "Pretvori transakcijo v prenos",
        "placeholder": "[Placeholder]",
        "recurrences": "Ponavljajo\u010de transakcije",
        "title_expenses": "stro\u0161ki",
        "title_withdrawal": "stro\u0161ki",
        "title_revenue": "Dohodki \/ prihodki",
        "pref_1D": "En dan",
        "pref_1W": "En teden",
        "pref_1M": "En mesec",
        "pref_3M": "Trije meseci (\u010detrtletje)",
        "pref_6M": "\u0160est mesecev",
        "pref_1Y": "Eno leto",
        "repeat_freq_yearly": "letno",
        "repeat_freq_half-year": "polletno",
        "repeat_freq_quarterly": "\u010detrtletno",
        "repeat_freq_monthly": "mese\u010dno",
        "repeat_freq_weekly": "tedensko",
        "single_split": "Razdeli",
        "asset_accounts": "premo\u017eenjski ra\u010duni",
        "expense_accounts": "Ra\u010duni stro\u0161kov",
        "liabilities_accounts": "Obveznosti",
        "undefined_accounts": "Ra\u010duni",
        "name": "Ime",
        "revenue_accounts": "Ra\u010dun prihodkov",
        "description": "Opis",
        "category": "Kategorija",
        "title_deposit": "Dohodki \/ prihodki",
        "title_transfer": "Prenosi",
        "title_transfers": "Prenosi",
        "piggyBanks": "Hranilniki",
        "rules": "Pravila",
        "accounts": "Ra\u010duni",
        "categories": "Kategorije",
        "tags": "Oznake",
        "object_groups_page_title": "Skupine",
        "reports": "Poro\u010dila",
        "webhooks": "Spletne kljuke (Webhooks)",
        "currencies": "Valute",
        "administration": "Administracija",
        "profile": "Profil",
        "source_account": "Izvorni ra\u010dun",
        "destination_account": "Ciljni ra\u010dun",
        "amount": "Znesek",
        "date": "Datum",
        "time": "\u010cas",
        "preferences": "Mo\u017enosti",
        "transactions": "Transakcije",
        "balance": "Stanje",
        "budgets": "Prora\u010duni",
        "subscriptions": "Naro\u010dnine",
        "welcome_back": "Kaj dogaja?",
        "bills_to_pay": "Trajnik za pla\u010dilo",
        "net_worth": "Neto vrednost",
        "pref_last365": "Zadnje leto",
        "pref_last90": "Zadnjih 90 dni",
        "pref_last30": "Zadnjih 30 dni",
        "pref_last7": "Zadnjih 7 dni",
        "pref_YTD": "Leto do datuma",
        "pref_QTD": "Quarter to date",
        "pref_MTD": "Month to date"
    }
}
