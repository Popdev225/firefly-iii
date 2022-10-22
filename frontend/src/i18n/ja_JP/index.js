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
        "html_language": "ja",
        "month_and_day_fns": "y\u5e74 MMMM d\u65e5"
    },
    "form": {
        "name": "\u540d\u79f0",
        "amount_min": "\u6700\u4f4e\u984d",
        "amount_max": "\u4e0a\u9650\u984d",
        "url": "URL",
        "title": "\u30bf\u30a4\u30c8\u30eb",
        "first_date": "\u6700\u521d\u306e\u65e5\u4ed8",
        "repetitions": "\u30ea\u30d4\u30fc\u30c8",
        "description": "\u8aac\u660e",
        "iban": "IBAN",
        "skip": "\u30b9\u30ad\u30c3\u30d7",
        "date": "\u65e5\u4ed8"
    },
    "list": {
        "name": "\u540d\u79f0",
        "account_number": "\u53e3\u5ea7\u756a\u53f7",
        "currentBalance": "\u73fe\u5728\u306e\u6b8b\u9ad8",
        "lastActivity": "\u6700\u7d42\u30a2\u30af\u30c6\u30a3\u30d3\u30c6\u30a3",
        "active": "\u6709\u52b9"
    },
    "breadcrumbs": {
        "placeholder": "[Placeholder]",
        "budgets": "\u4e88\u7b97",
        "subscriptions": "Subscriptions",
        "transactions": "\u53d6\u5f15",
        "title_expenses": "\u652f\u51fa",
        "title_withdrawal": "\u652f\u51fa",
        "title_revenue": "\u53ce\u76ca \/ \u53ce\u5165",
        "title_deposit": "\u53ce\u76ca \/ \u53ce\u5165",
        "title_transfer": "\u9001\u91d1",
        "title_transfers": "\u9001\u91d1",
        "asset_accounts": "\u8cc7\u7523\u53e3\u5ea7",
        "expense_accounts": "\u652f\u51fa\u53e3\u5ea7",
        "revenue_accounts": "\u53ce\u5165\u53e3\u5ea7",
        "liabilities_accounts": "\u8ca0\u50b5"
    },
    "firefly": {
        "actions": "\u64cd\u4f5c",
        "edit": "\u7de8\u96c6",
        "delete": "\u524a\u9664",
        "reconcile": "\u7167\u5408",
        "create_new_asset": "\u65b0\u3057\u3044\u8cc7\u7523\u53e3\u5ea7\u3092\u4f5c\u6210",
        "confirm_action": "\u64cd\u4f5c\u3092\u78ba\u8a8d",
        "new_budget": "\u65b0\u3057\u3044\u4e88\u7b97",
        "new_asset_account": "\u65b0\u3057\u3044\u8cc7\u7523\u53e3\u5ea7",
        "newTransfer": "\u65b0\u3057\u3044\u9001\u91d1",
        "submission_options": "Submission options",
        "apply_rules_checkbox": "Apply rules",
        "fire_webhooks_checkbox": "Fire webhooks",
        "newDeposit": "\u65b0\u3057\u3044\u5165\u91d1",
        "newWithdrawal": "\u65b0\u3057\u3044\u652f\u51fa",
        "bills_paid": "\u652f\u6255\u3044\u6e08\u307f\u8acb\u6c42",
        "left_to_spend": "\u652f\u51fa\u3067\u304d\u308b\u6b8b\u308a",
        "no_budget": "(\u4e88\u7b97\u306a\u3057)",
        "budgeted": "\u8a08\u4e0a\u4e88\u7b97",
        "spent": "\u652f\u51fa",
        "no_bill": "(\u8acb\u6c42\u306a\u3057)",
        "rule_trigger_source_account_starts_choice": "\u51fa\u91d1\u5143\u53e3\u5ea7\u540d\u304c...\u3067\u59cb\u307e\u308b",
        "rule_trigger_source_account_ends_choice": "\u51fa\u91d1\u5143\u53e3\u5ea7\u540d\u304c\u2026\u3067\u7d42\u308f\u308b",
        "rule_trigger_source_account_is_choice": "\u51fa\u91d1\u5143\u53e3\u5ea7\u540d\u304c...",
        "rule_trigger_source_account_contains_choice": "\u51fa\u91d1\u5143\u53e3\u5ea7\u540d\u304c\u2026\u3092\u542b\u3080",
        "rule_trigger_account_id_choice": "\u3069\u3061\u3089\u304b\u306e\u53e3\u5ea7ID\u304c\u2026",
        "rule_trigger_source_account_id_choice": "\u51fa\u91d1\u5143\u53e3\u5ea7ID\u304c\u2026",
        "rule_trigger_destination_account_id_choice": "\u9001\u91d1\u5148\u53e3\u5ea7ID\u304c\u2026",
        "rule_trigger_account_is_cash_choice": "\u3069\u3061\u3089\u304b\u306e\u53e3\u5ea7\u304c\u73fe\u91d1",
        "rule_trigger_source_is_cash_choice": "\u51fa\u91d1\u5143\u53e3\u5ea7\u304c\u73fe\u91d1\u53e3\u5ea7",
        "rule_trigger_destination_is_cash_choice": "\u9001\u91d1\u5148\u53e3\u5ea7\u304c\u73fe\u91d1\u53e3\u5ea7",
        "rule_trigger_source_account_nr_starts_choice": "\u51fa\u91d1\u5143\u53e3\u5ea7\u756a\u53f7\/IBAN\u304c\u2026\u3067\u59cb\u307e\u308b",
        "rule_trigger_source_account_nr_ends_choice": "\u51fa\u91d1\u5143\u53e3\u5ea7\u756a\u53f7\/IBAN\u304c\u2026\u3067\u7d42\u308f\u308b",
        "rule_trigger_source_account_nr_is_choice": "\u51fa\u91d1\u5143\u53e3\u5ea7\u756a\u53f7\/IBAN\u304c\u2026",
        "rule_trigger_source_account_nr_contains_choice": "\u51fa\u91d1\u5143\u53e3\u5ea7\u756a\u53f7\/IBAN\u304c\u2026\u3092\u542b\u3080",
        "rule_trigger_destination_account_starts_choice": "\u9001\u91d1\u5148\u53e3\u5ea7\u540d\u304c\u6b21\u3067\u59cb\u307e\u308b",
        "rule_trigger_destination_account_ends_choice": "\u9001\u91d1\u5148\u53e3\u5ea7\u540d\u304c\u6b21\u3067\u7d42\u308f\u308b",
        "rule_trigger_destination_account_is_choice": "\u9001\u91d1\u5148\u53e3\u5ea7\u540d\u304c\u2026",
        "rule_trigger_destination_account_contains_choice": "\u9001\u91d1\u5148\u53e3\u5ea7\u540d\u304c\u6b21\u3092\u542b\u3080",
        "rule_trigger_destination_account_nr_starts_choice": "\u9001\u91d1\u5148\u53e3\u5ea7\u756a\u53f7\/IBAN\u304c\u6b21\u3067\u59cb\u307e\u308b",
        "rule_trigger_destination_account_nr_ends_choice": "\u9001\u91d1\u5148\u53e3\u5ea7\u756a\u53f7\uff08IBAN\uff09\u304c\u6b21\u3067\u7d42\u308f\u308b",
        "rule_trigger_destination_account_nr_is_choice": "\u9001\u91d1\u5148\u53e3\u5ea7\u756a\u53f7\/IBAN\u304c\u2026",
        "rule_trigger_destination_account_nr_contains_choice": "\u9001\u91d1\u5148\u53e3\u5ea7\u756a\u53f7\/IBAN\u304c\u6b21\u3092\u542b\u3080",
        "rule_trigger_transaction_type_choice": "\u53d6\u5f15\u7a2e\u5225\u304c\u2026",
        "rule_trigger_category_is_choice": "\u30ab\u30c6\u30b4\u30ea\u304c\u2026",
        "rule_trigger_amount_less_choice": "\u91d1\u984d\u304c\u2026\u3088\u308a\u5c0f\u3055\u3044",
        "rule_trigger_amount_is_choice": "\u91d1\u984d\u304c\u2026",
        "rule_trigger_amount_more_choice": "\u91d1\u984d\u304c\u2026\u3088\u308a\u5927\u304d\u3044",
        "rule_trigger_description_starts_choice": "\u8aac\u660e\u304c\u2026\u3067\u59cb\u307e\u308b",
        "rule_trigger_description_ends_choice": "\u8aac\u660e\u304c\u2026\u3067\u7d42\u308f\u308b",
        "rule_trigger_description_contains_choice": "\u8aac\u660e\u306b\u2026\u3092\u542b\u3080",
        "rule_trigger_description_is_choice": "\u8aac\u660e\u304c\u2026",
        "rule_trigger_date_on_choice": "\u53d6\u5f15\u65e5\u304c\u2026",
        "rule_trigger_date_before_choice": "\u53d6\u5f15\u65e5\u304c\u2026\u3088\u308a\u524d",
        "rule_trigger_date_after_choice": "\u53d6\u5f15\u65e5\u304c\u2026\u3088\u308a\u5f8c",
        "rule_trigger_created_at_on_choice": "\u53d6\u5f15\u304c\u4f5c\u6210\u65e5\u304c",
        "rule_trigger_updated_at_on_choice": "\u53d6\u5f15\u306e\u6700\u7d42\u7de8\u96c6\u65e5\u304c",
        "rule_trigger_budget_is_choice": "\u4e88\u7b97\u304c\u2026",
        "rule_trigger_tag_is_choice": "\u30bf\u30b0\u304c",
        "rule_trigger_currency_is_choice": "\u53d6\u5f15\u901a\u8ca8\u304c\u2026",
        "rule_trigger_foreign_currency_is_choice": "\u53d6\u5f15\u5916\u56fd\u901a\u8ca8\u304c\u2026",
        "rule_trigger_has_attachments_choice": "\u6b21\u306e\u500b\u6570\u4ee5\u4e0a\u306e\u6dfb\u4ed8\u30d5\u30a1\u30a4\u30eb\u304c\u3042\u308b",
        "rule_trigger_has_no_category_choice": "\u30ab\u30c6\u30b4\u30ea\u306a\u3057",
        "rule_trigger_has_any_category_choice": "(\u4efb\u610f\u306e) \u30ab\u30c6\u30b4\u30ea\u304c\u3042\u308b",
        "rule_trigger_has_no_budget_choice": "\u4e88\u7b97\u3092\u3082\u305f\u306a\u3044",
        "rule_trigger_has_any_budget_choice": "\u4e88\u7b97\u304c\u3042\u308b\u53d6\u5f15",
        "rule_trigger_has_no_bill_choice": "\u8acb\u6c42\u304c\u306a\u3044",
        "rule_trigger_has_any_bill_choice": "\u8acb\u6c42\u304c\u3042\u308b",
        "rule_trigger_has_no_tag_choice": "\u30bf\u30b0\u304c\u306a\u3044",
        "rule_trigger_has_any_tag_choice": "\u4e00\u3064\u4ee5\u4e0a\u306e\u30bf\u30b0\u304c\u3042\u308b",
        "rule_trigger_any_notes_choice": "\u5099\u8003\u304c\u3042\u308b",
        "rule_trigger_no_notes_choice": "\u5099\u8003\u304c\u306a\u3044",
        "rule_trigger_notes_is_choice": "\u5099\u8003\u304c",
        "rule_trigger_notes_contains_choice": "\u5099\u8003\u304c\u6b21\u3092\u542b\u3080",
        "rule_trigger_notes_starts_choice": "\u5099\u8003\u304c\u6b21\u3067\u59cb\u307e\u308b",
        "rule_trigger_notes_ends_choice": "\u5099\u8003\u304c\u6b21\u3067\u7d42\u308f\u308b",
        "rule_trigger_bill_is_choice": "\u8acb\u6c42\u304c\u2026",
        "rule_trigger_external_id_is_choice": "\u5916\u90e8 ID \u304c\u2026",
        "rule_trigger_internal_reference_is_choice": "\u5185\u90e8\u53c2\u7167\u304c\u2026",
        "rule_trigger_journal_id_choice": "\u53d6\u5f15ID\u304c\u2026",
        "rule_trigger_any_external_url_choice": "\u53d6\u5f15\u306b\u5916\u90e8 URL \u304c\u3042\u308b",
        "rule_trigger_no_external_url_choice": "\u53d6\u5f15\u306b\u5916\u90e8 URL \u304c\u306a\u3044",
        "rule_trigger_id_choice": "\u53d6\u5f15 ID \u304c\u2026",
        "rule_action_delete_transaction_choice": "DELETE transaction(!)",
        "rule_action_set_category_choice": "Set category to ..",
        "rule_action_clear_category_choice": "\u30ab\u30c6\u30b4\u30ea\u3092\u30af\u30ea\u30a2",
        "rule_action_set_budget_choice": "Set budget to ..",
        "rule_action_clear_budget_choice": "\u4e88\u7b97\u3092\u30af\u30ea\u30a2",
        "rule_action_add_tag_choice": "Add tag ..",
        "rule_action_remove_tag_choice": "Remove tag ..",
        "rule_action_remove_all_tags_choice": "\u3059\u3079\u3066\u306e\u30bf\u30b0\u3092\u524a\u9664",
        "rule_action_set_description_choice": "Set description to ..",
        "rule_action_update_piggy_choice": "Add \/ remove transaction amount in piggy bank ..",
        "rule_action_append_description_choice": "Append description with ..",
        "rule_action_prepend_description_choice": "Prepend description with ..",
        "rule_action_set_source_account_choice": "Set source account to ..",
        "rule_action_set_destination_account_choice": "Set destination account to ..",
        "rule_action_append_notes_choice": "Append notes with ..",
        "rule_action_prepend_notes_choice": "Prepend notes with ..",
        "rule_action_clear_notes_choice": "\u5099\u8003\u3092\u524a\u9664",
        "rule_action_set_notes_choice": "Set notes to ..",
        "rule_action_link_to_bill_choice": "Link to a bill ..",
        "rule_action_convert_deposit_choice": "\u53d6\u5f15\u3092\u5165\u91d1\u306b\u5909\u63db",
        "rule_action_convert_withdrawal_choice": "\u53d6\u5f15\u3092\u51fa\u91d1\u306b\u5909\u63db",
        "rule_action_convert_transfer_choice": "\u53d6\u5f15\u3092\u9001\u91d1\u306b\u5909\u63db",
        "placeholder": "[Placeholder]",
        "recurrences": "\u5b9a\u671f\u7684\u306a\u53d6\u5f15",
        "title_expenses": "\u652f\u51fa",
        "title_withdrawal": "\u652f\u51fa",
        "title_revenue": "\u53ce\u76ca \/ \u53ce\u5165",
        "pref_1D": "1\u65e5",
        "pref_1W": "YYYY\u5e74w[\u9031\u76ee]",
        "pref_1M": "1\u30f5\u6708",
        "pref_3M": "3\u30f6\u6708 (\u56db\u534a\u671f)",
        "pref_6M": "6\u30f6\u6708",
        "pref_1Y": "1\u5e74",
        "repeat_freq_yearly": "\u6bce\u5e74",
        "repeat_freq_half-year": "\u534a\u5e74\u3054\u3068",
        "repeat_freq_quarterly": "\u56db\u534a\u671f\u3054\u3068",
        "repeat_freq_monthly": "\u6bce\u6708",
        "repeat_freq_weekly": "\u9031\u6bce",
        "single_split": "\u5206\u5272",
        "asset_accounts": "\u8cc7\u7523\u52d8\u5b9a",
        "expense_accounts": "\u652f\u51fa\u53e3\u5ea7",
        "liabilities_accounts": "\u50b5\u52d9",
        "undefined_accounts": "\u53e3\u5ea7",
        "name": "\u540d\u79f0",
        "revenue_accounts": "\u53ce\u5165\u53e3\u5ea7",
        "description": "\u8aac\u660e",
        "category": "\u30ab\u30c6\u30b4\u30ea",
        "title_deposit": "\u53ce\u76ca \/ \u53ce\u5165",
        "title_transfer": "\u9001\u91d1",
        "title_transfers": "\u9001\u91d1",
        "piggyBanks": "\u8caf\u91d1\u7bb1",
        "rules": "\u30eb\u30fc\u30eb",
        "accounts": "\u53e3\u5ea7",
        "categories": "\u30ab\u30c6\u30b4\u30ea",
        "tags": "\u30bf\u30b0",
        "object_groups_page_title": "\u30b0\u30eb\u30fc\u30d7",
        "reports": "\u30ec\u30dd\u30fc\u30c8",
        "webhooks": "Webhooks",
        "currencies": "\u901a\u8ca8",
        "administration": "\u7ba1\u7406",
        "profile": "\u30d7\u30ed\u30d5\u30a3\u30fc\u30eb",
        "source_account": "\u652f\u51fa\u5143\u53e3\u5ea7",
        "destination_account": "\u9001\u91d1\u5148\u306e\u53e3\u5ea7",
        "amount": "\u91d1\u984d",
        "date": "\u65e5\u4ed8",
        "time": "\u6642\u523b",
        "preferences": "\u8a2d\u5b9a",
        "transactions": "\u53d6\u5f15",
        "balance": "\u53ce\u652f",
        "budgets": "\u4e88\u7b97",
        "subscriptions": "\u8b1b\u8aad",
        "welcome_back": "\u6982\u8981",
        "bills_to_pay": "\u8acb\u6c42\u66f8",
        "net_worth": "\u7d14\u8cc7\u7523",
        "pref_last365": "\u6628\u5e74",
        "pref_last90": "\u904e\u53bb 90 \u65e5\u9593",
        "pref_last30": "\u904e\u53bb 30 \u65e5\u9593",
        "pref_last7": "\u904e\u53bb 7 \u65e5\u9593",
        "pref_YTD": "\u5e74\u59cb\u304b\u3089\u4eca\u65e5\u307e\u3067",
        "pref_QTD": "\u4eca\u56db\u534a\u671f",
        "pref_MTD": "\u4eca\u6708"
    }
}
