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
        "html_language": "hu",
        "month_and_day_fns": "MMMM d, y"
    },
    "form": {
        "name": "N\u00e9v",
        "amount_min": "Minim\u00e1lis \u00f6sszeg",
        "amount_max": "Maxim\u00e1lis \u00f6sszeg",
        "url": "URL",
        "title": "C\u00edm",
        "first_date": "Els\u0151 d\u00e1tum",
        "repetitions": "Ism\u00e9tl\u00e9sek",
        "description": "Le\u00edr\u00e1s",
        "iban": "IBAN",
        "skip": "Kihagy\u00e1s",
        "date": "D\u00e1tum"
    },
    "list": {
        "name": "N\u00e9v",
        "account_number": "Account number",
        "currentBalance": "Aktu\u00e1lis egyenleg",
        "lastActivity": "Utols\u00f3 aktivit\u00e1s",
        "active": "Akt\u00edv?"
    },
    "breadcrumbs": {
        "placeholder": "[Placeholder]",
        "budgets": "Budgets",
        "subscriptions": "Subscriptions",
        "transactions": "Transactions",
        "title_expenses": "Expenses",
        "title_withdrawal": "Expenses",
        "title_revenue": "Revenue \/ income",
        "title_deposit": "Revenue \/ income",
        "title_transfer": "Transfers",
        "title_transfers": "Transfers",
        "asset_accounts": "Asset accounts",
        "expense_accounts": "Expense accounts",
        "revenue_accounts": "Revenue accounts",
        "liabilities_accounts": "Liabilities"
    },
    "firefly": {
        "actions": "M\u0171veletek",
        "edit": "Szerkeszt\u00e9s",
        "delete": "T\u00f6rl\u00e9s",
        "reconcile": "Egyeztet\u00e9s",
        "create_new_asset": "\u00daj eszk\u00f6zsz\u00e1mla l\u00e9trehoz\u00e1sa",
        "confirm_action": "Confirm action",
        "new_budget": "\u00daj k\u00f6lts\u00e9gkeret",
        "new_asset_account": "\u00daj eszk\u00f6zsz\u00e1mla",
        "newTransfer": "\u00daj \u00e1tvezet\u00e9s",
        "submission_options": "Submission options",
        "apply_rules_checkbox": "Apply rules",
        "fire_webhooks_checkbox": "Fire webhooks",
        "newDeposit": "\u00daj bev\u00e9tel",
        "newWithdrawal": "\u00daj k\u00f6lts\u00e9g",
        "bills_paid": "Befizetett sz\u00e1ml\u00e1k",
        "left_to_spend": "Elk\u00f6lthet\u0151",
        "no_budget": "(nincs k\u00f6lts\u00e9gkeret)",
        "budgeted": "Betervezett",
        "spent": "Elk\u00f6lt\u00f6tt",
        "no_bill": "(no bill)",
        "rule_trigger_source_account_starts_choice": "Forr\u00e1ssz\u00e1mla nev\u00e9nek eleje..",
        "rule_trigger_source_account_ends_choice": "Forr\u00e1ssz\u00e1mla nev\u00e9nek v\u00e9ge..",
        "rule_trigger_source_account_is_choice": "A forr\u00e1ssz\u00e1mla neve..",
        "rule_trigger_source_account_contains_choice": "Forr\u00e1ssz\u00e1mla neve tartalmazza..",
        "rule_trigger_account_id_choice": "Either account ID is exactly..",
        "rule_trigger_source_account_id_choice": "Forr\u00e1ssz\u00e1mla ID pontosan..",
        "rule_trigger_destination_account_id_choice": "C\u00e9lsz\u00e1mla ID pontosan..",
        "rule_trigger_account_is_cash_choice": "Either account is cash",
        "rule_trigger_source_is_cash_choice": "Forr\u00e1ssz\u00e1mla egy k\u00e9szp\u00e9nz sz\u00e1mla",
        "rule_trigger_destination_is_cash_choice": "C\u00e9lsz\u00e1mla egy k\u00e9szp\u00e9nz sz\u00e1mla",
        "rule_trigger_source_account_nr_starts_choice": "Forr\u00e1ssz\u00e1mla sz\u00e1mlasz\u00e1ma \/ IBAN eleje..",
        "rule_trigger_source_account_nr_ends_choice": "Forr\u00e1ssz\u00e1mla sz\u00e1mlasz\u00e1ma \/ IBAN v\u00e9ge..",
        "rule_trigger_source_account_nr_is_choice": "Forr\u00e1ssz\u00e1mla sz\u00e1ma \/ IBAN..",
        "rule_trigger_source_account_nr_contains_choice": "Forr\u00e1ssz\u00e1mla sz\u00e1ma \/ IBAN tartalmazza..",
        "rule_trigger_destination_account_starts_choice": "C\u00e9lsz\u00e1mla nev\u00e9nek eleje..",
        "rule_trigger_destination_account_ends_choice": "C\u00e9lsz\u00e1mla nev\u00e9nek v\u00e9ge..",
        "rule_trigger_destination_account_is_choice": "A c\u00e9lsz\u00e1mla neve..",
        "rule_trigger_destination_account_contains_choice": "A c\u00e9lsz\u00e1mla neve tartalmazza..",
        "rule_trigger_destination_account_nr_starts_choice": "C\u00e9lsz\u00e1mla sz\u00e1mlasz\u00e1ma \/ IBAN eleje..",
        "rule_trigger_destination_account_nr_ends_choice": "C\u00e9lsz\u00e1mla sz\u00e1mlasz\u00e1ma \/ IBAN eleje..",
        "rule_trigger_destination_account_nr_is_choice": "C\u00e9lsz\u00e1mla sz\u00e1ma \/ IBAN..",
        "rule_trigger_destination_account_nr_contains_choice": "C\u00e9lsz\u00e1mla sz\u00e1ma \/ IBAN tartalmazza..",
        "rule_trigger_transaction_type_choice": "A tranzakci\u00f3 t\u00edpusa..",
        "rule_trigger_category_is_choice": "A kateg\u00f3ria..",
        "rule_trigger_amount_less_choice": "\u00d6sszeg kevesebb mint..",
        "rule_trigger_amount_is_choice": "Amount is..",
        "rule_trigger_amount_more_choice": "\u00d6sszeg t\u00f6bb, mint..",
        "rule_trigger_description_starts_choice": "Le\u00edr\u00e1s eleje..",
        "rule_trigger_description_ends_choice": "Le\u00edr\u00e1s v\u00e9ge..",
        "rule_trigger_description_contains_choice": "A le\u00edr\u00e1s tartalmazza..",
        "rule_trigger_description_is_choice": "A le\u00edr\u00e1s pontosan..",
        "rule_trigger_date_on_choice": "Transaction date is..",
        "rule_trigger_date_before_choice": "Tranzakci\u00f3 d\u00e1tuma kor\u00e1bbi, mint..",
        "rule_trigger_date_after_choice": "Tranzakci\u00f3 d\u00e1tuma k\u00e9s\u0151bbi, mint..",
        "rule_trigger_created_at_on_choice": "Transaction was made on..",
        "rule_trigger_updated_at_on_choice": "Transaction was last edited on..",
        "rule_trigger_budget_is_choice": "A k\u00f6lts\u00e9gkeret..",
        "rule_trigger_tag_is_choice": "Any tag is..",
        "rule_trigger_currency_is_choice": "A tranzakci\u00f3 p\u00e9nzneme..",
        "rule_trigger_foreign_currency_is_choice": "Transaction foreign currency is..",
        "rule_trigger_has_attachments_choice": "Legal\u00e1bb ennyi mell\u00e9klete van",
        "rule_trigger_has_no_category_choice": "Nincs kateg\u00f3ri\u00e1ja",
        "rule_trigger_has_any_category_choice": "Van kateg\u00f3ri\u00e1ja",
        "rule_trigger_has_no_budget_choice": "Nincs k\u00f6lts\u00e9gkerete",
        "rule_trigger_has_any_budget_choice": "Van k\u00f6lts\u00e9gkerete",
        "rule_trigger_has_no_bill_choice": "Has no bill",
        "rule_trigger_has_any_bill_choice": "Has a (any) bill",
        "rule_trigger_has_no_tag_choice": "Nincsenek c\u00edmk\u00e9i",
        "rule_trigger_has_any_tag_choice": "Van legal\u00e1bb egy c\u00edmk\u00e9je",
        "rule_trigger_any_notes_choice": "Van megjegyz\u00e9se",
        "rule_trigger_no_notes_choice": "Nincsenek megjegyz\u00e9sei",
        "rule_trigger_notes_is_choice": "Notes are..",
        "rule_trigger_notes_contains_choice": "Notes contain..",
        "rule_trigger_notes_starts_choice": "Notes start with..",
        "rule_trigger_notes_ends_choice": "Notes end with..",
        "rule_trigger_bill_is_choice": "A sz\u00e1mla..",
        "rule_trigger_external_id_is_choice": "External ID is..",
        "rule_trigger_internal_reference_is_choice": "Internal reference is..",
        "rule_trigger_journal_id_choice": "Transaction journal ID is..",
        "rule_trigger_any_external_url_choice": "Transaction has an external URL",
        "rule_trigger_no_external_url_choice": "Transaction has no external URL",
        "rule_trigger_id_choice": "Transaction ID is..",
        "rule_action_delete_transaction_choice": "DELETE transaction(!)",
        "rule_action_set_category_choice": "Set category to ..",
        "rule_action_clear_category_choice": "Minden kateg\u00f3ria t\u00f6rl\u00e9se",
        "rule_action_set_budget_choice": "Set budget to ..",
        "rule_action_clear_budget_choice": "Minden k\u00f6lts\u00e9gvet\u00e9s t\u00f6rl\u00e9se",
        "rule_action_add_tag_choice": "Add tag ..",
        "rule_action_remove_tag_choice": "Remove tag ..",
        "rule_action_remove_all_tags_choice": "Minden c\u00edmke elt\u00e1vol\u00edt\u00e1sa",
        "rule_action_set_description_choice": "Set description to ..",
        "rule_action_update_piggy_choice": "Add \/ remove transaction amount in piggy bank ..",
        "rule_action_append_description_choice": "Append description with ..",
        "rule_action_prepend_description_choice": "Prepend description with ..",
        "rule_action_set_source_account_choice": "Set source account to ..",
        "rule_action_set_destination_account_choice": "Set destination account to ..",
        "rule_action_append_notes_choice": "Append notes with ..",
        "rule_action_prepend_notes_choice": "Prepend notes with ..",
        "rule_action_clear_notes_choice": "Megjegyz\u00e9sek elt\u00e1vol\u00edt\u00e1sa",
        "rule_action_set_notes_choice": "Set notes to ..",
        "rule_action_link_to_bill_choice": "Link to a bill ..",
        "rule_action_convert_deposit_choice": "A tranzakci\u00f3 bev\u00e9tell\u00e9 konvert\u00e1l\u00e1sa",
        "rule_action_convert_withdrawal_choice": "A tranzakci\u00f3 k\u00f6lts\u00e9gg\u00e9 konvert\u00e1l\u00e1sa",
        "rule_action_convert_transfer_choice": "A tranzakci\u00f3 \u00e1tvezet\u00e9ss\u00e9 konvert\u00e1l\u00e1sa",
        "placeholder": "[Placeholder]",
        "recurrences": "Ism\u00e9tl\u0151d\u0151 tranzakci\u00f3k",
        "title_expenses": "K\u00f6lts\u00e9gek",
        "title_withdrawal": "K\u00f6lts\u00e9gek",
        "title_revenue": "J\u00f6vedelem \/ bev\u00e9tel",
        "pref_1D": "Egy nap",
        "pref_1W": "Egy h\u00e9t",
        "pref_1M": "Egy h\u00f3nap",
        "pref_3M": "H\u00e1rom h\u00f3nap (negyed\u00e9v)",
        "pref_6M": "Hat h\u00f3nap",
        "pref_1Y": "Egy \u00e9v",
        "repeat_freq_yearly": "\u00e9ves",
        "repeat_freq_half-year": "f\u00e9l\u00e9vente",
        "repeat_freq_quarterly": "negyed\u00e9ves",
        "repeat_freq_monthly": "havi",
        "repeat_freq_weekly": "heti",
        "single_split": "Feloszt\u00e1s",
        "asset_accounts": "Eszk\u00f6zsz\u00e1ml\u00e1k",
        "expense_accounts": "K\u00f6lts\u00e9gsz\u00e1ml\u00e1k",
        "liabilities_accounts": "K\u00f6telezetts\u00e9gek",
        "undefined_accounts": "Accounts",
        "name": "N\u00e9v",
        "revenue_accounts": "J\u00f6vedelemsz\u00e1ml\u00e1k",
        "description": "Le\u00edr\u00e1s",
        "category": "Kateg\u00f3ria",
        "title_deposit": "J\u00f6vedelem \/ bev\u00e9tel",
        "title_transfer": "\u00c1tvezet\u00e9sek",
        "title_transfers": "\u00c1tvezet\u00e9sek",
        "piggyBanks": "Malacperselyek",
        "rules": "Szab\u00e1lyok",
        "accounts": "Sz\u00e1ml\u00e1k",
        "categories": "Kateg\u00f3ri\u00e1k",
        "tags": "C\u00edmk\u00e9k",
        "object_groups_page_title": "Csoportok",
        "reports": "Jelent\u00e9sek",
        "webhooks": "Webhooks",
        "currencies": "P\u00e9nznemek",
        "administration": "Adminisztr\u00e1ci\u00f3",
        "profile": "Profil",
        "source_account": "Forr\u00e1s sz\u00e1mla",
        "destination_account": "C\u00e9lsz\u00e1mla",
        "amount": "\u00d6sszeg",
        "date": "D\u00e1tum",
        "time": "Time",
        "preferences": "Be\u00e1ll\u00edt\u00e1sok",
        "transactions": "Tranzakci\u00f3k",
        "balance": "Egyenleg",
        "budgets": "K\u00f6lts\u00e9gkeretek",
        "subscriptions": "Subscriptions",
        "welcome_back": "Mi a helyzet?",
        "bills_to_pay": "Fizetend\u0151 sz\u00e1ml\u00e1k",
        "net_worth": "Nett\u00f3 \u00e9rt\u00e9k",
        "pref_last365": "Last year",
        "pref_last90": "Last 90 days",
        "pref_last30": "Last 30 days",
        "pref_last7": "Last 7 days",
        "pref_YTD": "Year to date",
        "pref_QTD": "Quarter to date",
        "pref_MTD": "Month to date"
    }
}
