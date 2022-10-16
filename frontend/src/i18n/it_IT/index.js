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
        "html_language": "it",
        "month_and_day_fns": "d MMMM y"
    },
    "form": {
        "name": "Nome",
        "amount_min": "Importo minimo",
        "amount_max": "Importo massimo",
        "url": "URL",
        "title": "Titolo",
        "first_date": "Prima volta",
        "repetitions": "Ripetizioni",
        "description": "Descrizione",
        "iban": "IBAN",
        "skip": "Salta ogni",
        "date": "Data"
    },
    "list": {
        "name": "Nome",
        "account_number": "Numero conto",
        "currentBalance": "Saldo corrente",
        "lastActivity": "Ultima attivit\u00e0",
        "active": "Attivo"
    },
    "breadcrumbs": {
        "placeholder": "[Placeholder]",
        "budgets": "Budget",
        "subscriptions": "Abbonamenti",
        "transactions": "Transazioni",
        "title_expenses": "Uscite",
        "title_withdrawal": "Prelievi",
        "title_revenue": "Redditi \/ entrate",
        "title_deposit": "Versamenti",
        "title_transfer": "Trasferimenti",
        "title_transfers": "Trasferimenti",
        "asset_accounts": "Conti attivit\u00e0",
        "expense_accounts": "Conti uscite",
        "revenue_accounts": "Conti entrate",
        "liabilities_accounts": "Passivit\u00e0"
    },
    "firefly": {
        "actions": "Azioni",
        "edit": "Modifica",
        "delete": "Elimina",
        "reconcile": "Riconcilia",
        "create_new_asset": "Crea un nuovo conto attivit\u00e0",
        "confirm_action": "Conferma azione",
        "new_budget": "Nuovo budget",
        "new_asset_account": "Nuovo conto attivit\u00e0",
        "newTransfer": "Nuovo trasferimento",
        "newDeposit": "Nuova entrata",
        "newWithdrawal": "Nuova uscita",
        "bills_paid": "Bollette pagate",
        "left_to_spend": "Altro da spendere",
        "no_budget": "(nessun budget)",
        "budgeted": "Preventivato",
        "spent": "Speso",
        "no_bill": "(nessuna bolletta)",
        "rule_trigger_source_account_starts_choice": "Il nome del conto di origine inizia con..",
        "rule_trigger_source_account_ends_choice": "Il nome del conto di origine termina con..",
        "rule_trigger_source_account_is_choice": "Il nome del conto di origine \u00e8..",
        "rule_trigger_source_account_contains_choice": "Il nome del conto di origine contiene...",
        "rule_trigger_account_id_choice": "Either account ID is exactly..",
        "rule_trigger_source_account_id_choice": "L'ID del conto di origine \u00e8 esattamente...",
        "rule_trigger_destination_account_id_choice": "L'ID del conto di destinazione \u00e8 esattamente...",
        "rule_trigger_account_is_cash_choice": "Either account is cash",
        "rule_trigger_source_is_cash_choice": "Il conte di origine \u00e8 un conto (in contanti)",
        "rule_trigger_destination_is_cash_choice": "Il conto destinazione \u00e8 un conto (in contanti)",
        "rule_trigger_source_account_nr_starts_choice": "Il numero del conto di origine \/ l'IBAN inizia con...",
        "rule_trigger_source_account_nr_ends_choice": "Il numero del conto di origine \/ l'IBAN termina con...",
        "rule_trigger_source_account_nr_is_choice": "Il numero del conto di origine \/ l'IBAN \u00e8...",
        "rule_trigger_source_account_nr_contains_choice": "Il numero del conto di origine \/ l'IBAN contiene...",
        "rule_trigger_destination_account_starts_choice": "Il nome del conto di destinazione inizia con...",
        "rule_trigger_destination_account_ends_choice": "Il nome del conto di destinazione termina con...",
        "rule_trigger_destination_account_is_choice": "Il nome del conto di destinazione \u00e8..",
        "rule_trigger_destination_account_contains_choice": "Il nome del conto di destinazione contiene..",
        "rule_trigger_destination_account_nr_starts_choice": "Il numero del conto di destinazione \/ l'IBAN inizia con..",
        "rule_trigger_destination_account_nr_ends_choice": "Il numero del conto di destinazione \/ l'IBAN termina con..",
        "rule_trigger_destination_account_nr_is_choice": "Il numero del conto di destinazione \/ l'IBAN \u00e8..",
        "rule_trigger_destination_account_nr_contains_choice": "Il numero del conto di destinazione \/ l'IBAN contiene..",
        "rule_trigger_transaction_type_choice": "La transazione \u00e8 di tipo...",
        "rule_trigger_category_is_choice": "La categoria \u00e8...",
        "rule_trigger_amount_less_choice": "L'importo \u00e8 inferiore a...",
        "rule_trigger_amount_is_choice": "Amount is..",
        "rule_trigger_amount_more_choice": "L'importo \u00e8 pi\u00f9 di...",
        "rule_trigger_description_starts_choice": "La descrizione inizia con...",
        "rule_trigger_description_ends_choice": "La descrizione termina con...",
        "rule_trigger_description_contains_choice": "La descrizione contiene...",
        "rule_trigger_description_is_choice": "La descrizione \u00e8...",
        "rule_trigger_date_on_choice": "Transaction date is..",
        "rule_trigger_date_before_choice": "La data della transazione \u00e8 antecedente al...",
        "rule_trigger_date_after_choice": "La data della transazione \u00e8 successiva al...",
        "rule_trigger_created_at_on_choice": "Transaction was made on..",
        "rule_trigger_updated_at_on_choice": "Transaction was last edited on..",
        "rule_trigger_budget_is_choice": "Il budget \u00e8...",
        "rule_trigger_tag_is_choice": "Any tag is..",
        "rule_trigger_currency_is_choice": "La valuta della transazione \u00e8...",
        "rule_trigger_foreign_currency_is_choice": "La valuta estera della transazione \u00e8...",
        "rule_trigger_has_attachments_choice": "Ha almeno cos\u00ec tanti allegati",
        "rule_trigger_has_no_category_choice": "Non ha categoria",
        "rule_trigger_has_any_category_choice": "Ha una (qualsiasi) categoria",
        "rule_trigger_has_no_budget_choice": "Non ha un budget",
        "rule_trigger_has_any_budget_choice": "Ha un (qualsiasi) budget",
        "rule_trigger_has_no_bill_choice": "Non ha bollette",
        "rule_trigger_has_any_bill_choice": "Ha una (qualsiasi) bolletta",
        "rule_trigger_has_no_tag_choice": "Non ha etichette",
        "rule_trigger_has_any_tag_choice": "Ha una o pi\u00f9 etichette (qualsiasi)",
        "rule_trigger_any_notes_choice": "Ha una (qualsiasi) nota",
        "rule_trigger_no_notes_choice": "Non ha note",
        "rule_trigger_notes_is_choice": "Notes are..",
        "rule_trigger_notes_contains_choice": "Notes contain..",
        "rule_trigger_notes_starts_choice": "Notes start with..",
        "rule_trigger_notes_ends_choice": "Notes end with..",
        "rule_trigger_bill_is_choice": "La bollett\u00e0 \u00e8...",
        "rule_trigger_external_id_is_choice": "External ID is..",
        "rule_trigger_internal_reference_is_choice": "Internal reference is..",
        "rule_trigger_journal_id_choice": "L'ID journal della transazione \u00e8...",
        "rule_trigger_any_external_url_choice": "La transazione ha un URL esterno",
        "rule_trigger_no_external_url_choice": "La transazione non ha URL esterno",
        "rule_trigger_id_choice": "L'ID della transazione \u00e8...",
        "rule_action_delete_transaction_choice": "DELETE transaction(!)",
        "rule_action_set_category_choice": "Set category to ..",
        "rule_action_clear_category_choice": "Rimuovi da tutte le categorie",
        "rule_action_set_budget_choice": "Set budget to ..",
        "rule_action_clear_budget_choice": "Rimuovi da tutti i budget",
        "rule_action_add_tag_choice": "Add tag ..",
        "rule_action_remove_tag_choice": "Remove tag ..",
        "rule_action_remove_all_tags_choice": "Rimuovi tutte le etichette",
        "rule_action_set_description_choice": "Set description to ..",
        "rule_action_update_piggy_choice": "Add \/ remove transaction amount in piggy bank ..",
        "rule_action_append_description_choice": "Append description with ..",
        "rule_action_prepend_description_choice": "Prepend description with ..",
        "rule_action_set_source_account_choice": "Set source account to ..",
        "rule_action_set_destination_account_choice": "Set destination account to ..",
        "rule_action_append_notes_choice": "Append notes with ..",
        "rule_action_prepend_notes_choice": "Prepend notes with ..",
        "rule_action_clear_notes_choice": "Rimuovi tutte le note",
        "rule_action_set_notes_choice": "Set notes to ..",
        "rule_action_link_to_bill_choice": "Link to a bill ..",
        "rule_action_convert_deposit_choice": "Converti la transazione in un deposito",
        "rule_action_convert_withdrawal_choice": "Converti la transazione in un prelievo",
        "rule_action_convert_transfer_choice": "Converti la transazione in un trasferimento",
        "placeholder": "[Placeholder]",
        "recurrences": "Transazioni ricorrenti",
        "title_expenses": "Spese",
        "title_withdrawal": "Spese",
        "title_revenue": "Entrate",
        "pref_1D": "Un giorno",
        "pref_1W": "Una settimana",
        "pref_1M": "Un mese",
        "pref_3M": "Tre mesi (trimestre)",
        "pref_6M": "Sei mesi",
        "pref_1Y": "Un anno",
        "repeat_freq_yearly": "annualmente",
        "repeat_freq_half-year": "semestralmente",
        "repeat_freq_quarterly": "trimestralmente",
        "repeat_freq_monthly": "mensilmente",
        "repeat_freq_weekly": "settimanalmente",
        "single_split": "Divisione",
        "asset_accounts": "Conti attivit\u00e0",
        "expense_accounts": "Conti uscite",
        "liabilities_accounts": "Passivit\u00e0",
        "undefined_accounts": "Conti",
        "name": "Nome",
        "revenue_accounts": "Conti entrate",
        "description": "Descrizione",
        "category": "Categoria",
        "title_deposit": "Redditi \/ entrate",
        "title_transfer": "Trasferimenti",
        "title_transfers": "Trasferimenti",
        "piggyBanks": "Salvadanai",
        "rules": "Regole",
        "accounts": "Conti",
        "categories": "Categorie",
        "tags": "Etichette",
        "object_groups_page_title": "Gruppi",
        "reports": "Resoconti",
        "webhooks": "Webhook",
        "currencies": "Valute",
        "administration": "Amministrazione",
        "profile": "Profilo",
        "source_account": "Conto di origine",
        "destination_account": "Conto destinazione",
        "amount": "Importo",
        "date": "Data",
        "time": "Ora",
        "preferences": "Preferenze",
        "transactions": "Transazioni",
        "balance": "Saldo",
        "budgets": "Budget",
        "subscriptions": "Abbonamenti",
        "welcome_back": "La tua situazione finanziaria",
        "bills_to_pay": "Bollette da pagare",
        "net_worth": "Patrimonio",
        "pref_last365": "Anno scorso",
        "pref_last90": "Ultimi 90 giorni",
        "pref_last30": "Ultimi 30 giorni",
        "pref_last7": "Ultimi 7 giorni",
        "pref_YTD": "Ultimo anno",
        "pref_QTD": "Ultimo trimestre",
        "pref_MTD": "Ultimo mese"
    }
}
