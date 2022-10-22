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
        "html_language": "ru",
        "month_and_day_fns": "MMMM \u0434, \u0433"
    },
    "form": {
        "name": "\u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435",
        "amount_min": "\u041c\u0438\u043d\u0438\u043c\u0430\u043b\u044c\u043d\u0430\u044f \u0441\u0443\u043c\u043c\u0430",
        "amount_max": "\u041c\u0430\u043a\u0441\u0438\u043c\u0430\u043b\u044c\u043d\u0430\u044f \u0441\u0443\u043c\u043c\u0430",
        "url": "\u0421\u0441\u044b\u043b\u043a\u0430",
        "title": "\u0417\u0430\u0433\u043e\u043b\u043e\u0432\u043e\u043a",
        "first_date": "\u041d\u0430\u0447\u0430\u043b\u044c\u043d\u0430\u044f \u0434\u0430\u0442\u0430",
        "repetitions": "\u041f\u043e\u0432\u0442\u043e\u0440\u0435\u043d\u0438\u044f",
        "description": "\u041e\u043f\u0438\u0441\u0430\u043d\u0438\u0435",
        "iban": "IBAN",
        "skip": "\u041f\u0440\u043e\u043f\u0443\u0441\u0442\u0438\u0442\u044c",
        "date": "\u0414\u0430\u0442\u0430"
    },
    "list": {
        "name": "\u0418\u043c\u044f",
        "account_number": "\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0451\u0442\u0430",
        "currentBalance": "\u0422\u0435\u043a\u0443\u0449\u0438\u0439 \u0431\u0430\u043b\u0430\u043d\u0441",
        "lastActivity": "\u041f\u043e\u0441\u043b\u0435\u0434\u043d\u044f\u044f \u0430\u043a\u0442\u0438\u0432\u043d\u043e\u0441\u0442\u044c",
        "active": "\u0410\u043a\u0442\u0438\u0432\u0435\u043d?"
    },
    "breadcrumbs": {
        "placeholder": "\u041d\u0435 \u0441\u0442\u0435\u0441\u043d\u044f\u0439\u0442\u0435\u0441\u044c \u0434\u0435\u0440\u0436\u0430\u0442\u044c \u044d\u0442\u043e\u0442 \u0430\u043d\u0433\u043b\u0438\u0439\u0441\u043a\u0438\u0439.",
        "budgets": "\u043c\u0430\u0441\u0441\u0438\u0432['\u0431\u044e\u0434\u0436\u0435\u0442\u044b']",
        "subscriptions": "\u043c\u0430\u0441\u0441\u0438\u0432['\u043f\u043e\u0434\u043f\u0438\u0441\u043a\u0438']",
        "transactions": "\u043c\u0430\u0441\u0441\u0438\u0432['\u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u0438']",
        "title_expenses": "\u043c\u0430\u0441\u0441\u0438\u0432['\u043d\u0430\u0437\u0432\u0430\u043d\u0438\u0435_\u0440\u0430\u0441\u0445\u043e\u0434\u044b']",
        "title_withdrawal": "\u043c\u0430\u0441\u0441\u0438\u0432['\u043d\u0430\u0437\u0432\u0430\u043d\u0438\u0435_\u0441\u043d\u044f\u0442\u0438\u0435']",
        "title_revenue": "\u043c\u0430\u0441\u0441\u0438\u0432['\u043d\u0430\u0437\u0432\u0430\u043d\u0438\u0435_\u0434\u043e\u0445\u043e\u0434']",
        "title_deposit": "\u043c\u0430\u0441\u0441\u0438\u0432['\u043d\u0430\u0437\u0432\u0430\u043d\u0438\u0435_\u0434\u0435\u043f\u043e\u0437\u0438\u0442']",
        "title_transfer": "\u041f\u0435\u0440\u0435\u0432\u043e\u0434",
        "title_transfers": "\u041f\u0435\u0440\u0435\u0432\u043e\u0434\u044b",
        "asset_accounts": "\u043c\u0430\u0441\u0441\u0438\u0432 ['\u0430\u043a\u0442\u0438\u0432_\u0443\u0447\u0435\u0442\u043d\u044b\u0435 \u0437\u0430\u043f\u0438\u0441\u0438']",
        "expense_accounts": "\u043c\u0430\u0441\u0441\u0438\u0432 ['\u0440\u0430\u0441\u0445\u043e\u0434_\u0441\u0447\u0435\u0442\u043e\u0432']",
        "revenue_accounts": "\u043c\u0430\u0441\u0441\u0438\u0432['\u0434\u043e\u0445\u043e\u0434_\u0441\u0447\u0435\u0442\u043e\u0432']",
        "liabilities_accounts": "\u043c\u0430\u0441\u0441\u0438\u0432 ['\u043f\u0430\u0441\u0441\u0438\u0432\u043d\u044b\u0435_\u0441\u0447\u0435\u0442\u0430']"
    },
    "firefly": {
        "actions": "\u0414\u0435\u0439\u0441\u0442\u0432\u0438\u044f",
        "edit": "\u0418\u0437\u043c\u0435\u043d\u0438\u0442\u044c",
        "delete": "\u0423\u0434\u0430\u043b\u0438\u0442\u044c",
        "reconcile": "\u0421\u0432\u0435\u0440\u0438\u0442\u044c",
        "create_new_asset": "\u0421\u043e\u0437\u0434\u0430\u0442\u044c \u043d\u043e\u0432\u044b\u0439 \u0430\u043a\u0442\u0438\u0432\u043d\u044b\u0439 \u0441\u0447\u0451\u0442",
        "confirm_action": "\u041f\u043e\u0434\u0442\u0432\u0435\u0440\u0434\u0438\u0442\u0435 \u0434\u0435\u0439\u0441\u0442\u0432\u0438\u0435",
        "new_budget": "\u041d\u043e\u0432\u044b\u0439 \u0431\u044e\u0434\u0436\u0435\u0442",
        "new_asset_account": "\u041d\u043e\u0432\u044b\u0439 \u0441\u0447\u0435\u0442 \u0430\u043a\u0442\u0438\u0432\u043e\u0432",
        "newTransfer": "\u041d\u043e\u0432\u044b\u0439 \u043f\u0435\u0440\u0435\u0432\u043e\u0434",
        "submission_options": "Submission options",
        "apply_rules_checkbox": "Apply rules",
        "fire_webhooks_checkbox": "Fire webhooks",
        "newDeposit": "\u041d\u043e\u0432\u044b\u0439 \u0434\u043e\u0445\u043e\u0434",
        "newWithdrawal": "\u041d\u043e\u0432\u044b\u0439 \u0440\u0430\u0441\u0445\u043e\u0434",
        "bills_paid": "\u041e\u043f\u043b\u0430\u0447\u0435\u043d\u043d\u044b\u0435 \u0441\u0447\u0435\u0442\u0430",
        "left_to_spend": "\u041e\u0441\u0442\u0430\u043b\u043e\u0441\u044c \u043f\u043e\u0442\u0440\u0430\u0442\u0438\u0442\u044c",
        "no_budget": "(\u0432\u043d\u0435 \u0431\u044e\u0434\u0436\u0435\u0442\u0430)",
        "budgeted": "\u0417\u0430\u043f\u043b\u0430\u043d\u0438\u0440\u043e\u0432\u0430\u043d\u043e \u0432 \u0431\u044e\u0434\u0436\u0435\u0442\u0435",
        "spent": "\u0420\u0430\u0441\u0445\u043e\u0434",
        "no_bill": "(\u043d\u0435\u0442 \u0441\u0447\u0451\u0442\u0430 \u043d\u0430 \u043e\u043f\u043b\u0430\u0442\u0443)",
        "rule_trigger_source_account_starts_choice": "\u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u0441\u0447\u0451\u0442\u0430-\u0438\u0441\u0442\u043e\u0447\u043d\u0438\u043a\u0430 \u043d\u0430\u0447\u0438\u043d\u0430\u0435\u0442\u0441\u044f \u0441..",
        "rule_trigger_source_account_ends_choice": "\u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u0441\u0447\u0451\u0442\u0430-\u0438\u0441\u0442\u043e\u0447\u043d\u0438\u043a\u0430 \u0437\u0430\u043a\u0430\u043d\u0447\u0438\u0432\u0430\u0435\u0442\u0441\u044f \u043d\u0430..",
        "rule_trigger_source_account_is_choice": "\u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u0441\u0447\u0451\u0442\u0430-\u0438\u0441\u0442\u043e\u0447\u043d\u0438\u043a\u0430..",
        "rule_trigger_source_account_contains_choice": "\u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u0441\u0447\u0451\u0442\u0430-\u0438\u0441\u0442\u043e\u0447\u043d\u0438\u043a\u0430 \u0441\u043e\u0434\u0435\u0440\u0436\u0438\u0442..",
        "rule_trigger_account_id_choice": "Either account ID is exactly..",
        "rule_trigger_source_account_id_choice": "ID \u0441\u0447\u0451\u0442\u0430-\u0438\u0441\u0442\u043e\u0447\u043d\u0438\u043a\u0430 \u0441\u043e\u0432\u043f\u0430\u0434\u0430\u0435\u0442 \u0441..",
        "rule_trigger_destination_account_id_choice": "ID \u0441\u0447\u0451\u0442\u0430 \u043d\u0430\u0437\u043d\u0430\u0447\u0435\u043d\u0438\u044f \u0441\u043e\u0432\u043f\u0430\u0434\u0430\u0435\u0442 \u0441..",
        "rule_trigger_account_is_cash_choice": "\u041b\u044e\u0431\u043e\u0439 \u0441\u0447\u0435\u0442 \u044f\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u043d\u0430\u043b\u0438\u0447\u043d\u044b\u043c\u0438",
        "rule_trigger_source_is_cash_choice": "\u0421\u0447\u0451\u0442-\u0438\u0441\u0442\u043e\u0447\u043d\u0438\u043a - \u044d\u0442\u043e (\u043d\u0430\u043b\u0438\u0447\u043d\u044b\u0439) \u0441\u0447\u0451\u0442",
        "rule_trigger_destination_is_cash_choice": "\u0421\u0447\u0451\u0442 \u043d\u0430\u0437\u043d\u0430\u0447\u0435\u043d\u0438\u044f - \u044d\u0442\u043e (\u043d\u0430\u043b\u0438\u0447\u043d\u044b\u0439) \u0441\u0447\u0451\u0442",
        "rule_trigger_source_account_nr_starts_choice": "\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0451\u0442\u0430-\u0438\u0441\u0442\u043e\u0447\u043d\u0438\u043a\u0430 \/ IBAN \u043d\u0430\u0447\u0438\u043d\u0430\u0435\u0442\u0441\u044f \u0441..",
        "rule_trigger_source_account_nr_ends_choice": "\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0451\u0442\u0430-\u0438\u0441\u0442\u043e\u0447\u043d\u0438\u043a\u0430 \/ IBAN \u0437\u0430\u043a\u0430\u043d\u0447\u0438\u0432\u0430\u0435\u0442\u0441\u044f \u043d\u0430..",
        "rule_trigger_source_account_nr_is_choice": "\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0451\u0442\u0430-\u0438\u0441\u0442\u043e\u0447\u043d\u0438\u043a\u0430 \/ IBAN..",
        "rule_trigger_source_account_nr_contains_choice": "\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0451\u0442\u0430-\u0438\u0441\u0442\u043e\u0447\u043d\u0438\u043a\u0430 \/ IBAN \u0441\u043e\u0434\u0435\u0440\u0436\u0438\u0442..",
        "rule_trigger_destination_account_starts_choice": "\u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u0441\u0447\u0451\u0442\u0430 \u043d\u0430\u0437\u043d\u0430\u0447\u0435\u043d\u0438\u044f \u043d\u0430\u0447\u0438\u043d\u0430\u0435\u0442\u0441\u044f \u0441..",
        "rule_trigger_destination_account_ends_choice": "\u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u0441\u0447\u0451\u0442\u0430 \u043d\u0430\u0437\u043d\u0430\u0447\u0435\u043d\u0438\u044f \u0437\u0430\u043a\u0430\u043d\u0447\u0438\u0432\u0430\u0435\u0442\u0441\u044f \u043d\u0430..",
        "rule_trigger_destination_account_is_choice": "\u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u0441\u0447\u0451\u0442\u0430 \u043d\u0430\u0437\u043d\u0430\u0447\u0435\u043d\u0438\u044f..",
        "rule_trigger_destination_account_contains_choice": "\u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u0441\u0447\u0451\u0442\u0430 \u043d\u0430\u0437\u043d\u0430\u0447\u0435\u043d\u0438\u044f \u0441\u043e\u0434\u0435\u0440\u0436\u0438\u0442..",
        "rule_trigger_destination_account_nr_starts_choice": "\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0451\u0442\u0430 \u043d\u0430\u0437\u043d\u0430\u0447\u0435\u043d\u0438\u0435 \/ IBAN \u043d\u0430\u0447\u0438\u043d\u0430\u0435\u0442\u0441\u044f \u0441..",
        "rule_trigger_destination_account_nr_ends_choice": "\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0451\u0442\u0430 \u043d\u0430\u0437\u043d\u0430\u0447\u0435\u043d\u0438\u044f \/ IBAN \u0437\u0430\u043a\u0430\u043d\u0447\u0438\u0432\u0430\u0435\u0442\u0441\u044f \u043d\u0430..",
        "rule_trigger_destination_account_nr_is_choice": "\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0451\u0442\u0430 \u043d\u0430\u0437\u043d\u0430\u0447\u0435\u043d\u0438\u0435 \/ IBAN..",
        "rule_trigger_destination_account_nr_contains_choice": "\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0451\u0442\u0430 \u043d\u0430\u0437\u043d\u0430\u0447\u0435\u043d\u0438\u044f \/ IBAN \u0441\u043e\u0434\u0435\u0440\u0436\u0438\u0442..",
        "rule_trigger_transaction_type_choice": "\u0422\u0438\u043f \u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u0438 =",
        "rule_trigger_category_is_choice": "\u041a\u0430\u0442\u0435\u0433\u043e\u0440\u0438\u044f =",
        "rule_trigger_amount_less_choice": "\u0421\u0443\u043c\u043c\u0430 \u043c\u0435\u043d\u044c\u0448\u0435, \u0447\u0435\u043c...",
        "rule_trigger_amount_is_choice": "\u0421\u0443\u043c\u043c\u0430..",
        "rule_trigger_amount_more_choice": "\u0421\u0443\u043c\u043c\u0430 \u0431\u043e\u043b\u044c\u0448\u0435, \u0447\u0435\u043c...",
        "rule_trigger_description_starts_choice": "\u041e\u043f\u0438\u0441\u0430\u043d\u0438\u0435 \u043d\u0430\u0447\u0438\u043d\u0430\u0435\u0442\u0441\u044f \u0441...",
        "rule_trigger_description_ends_choice": "\u041e\u043f\u0438\u0441\u0430\u043d\u0438\u0435 \u0437\u0430\u043a\u0430\u043d\u0447\u0438\u0432\u0430\u0435\u0442\u0441\u044f \u043d\u0430...",
        "rule_trigger_description_contains_choice": "\u041e\u043f\u0438\u0441\u0430\u043d\u0438\u0435 \u0441\u043e\u0434\u0435\u0440\u0436\u0438\u0442...",
        "rule_trigger_description_is_choice": "\u041e\u043f\u0438\u0441\u0430\u043d\u0438\u0435 =",
        "rule_trigger_date_on_choice": "\u0414\u0430\u0442\u0430 \u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u0438..",
        "rule_trigger_date_before_choice": "\u0414\u0430\u0442\u0430 \u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u0438 \u0434\u043e...",
        "rule_trigger_date_after_choice": "\u0414\u0430\u0442\u0430 \u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u0438 \u043f\u043e\u0441\u043b\u0435..",
        "rule_trigger_created_at_on_choice": "\u0422\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u044f \u0441\u043e\u0432\u0435\u0440\u0448\u0435\u043d\u0430..",
        "rule_trigger_updated_at_on_choice": "\u041f\u043e\u0441\u043b\u0435\u0434\u043d\u0435\u0435 \u0438\u0437\u043c\u0435\u043d\u0435\u043d\u0438\u0435 \u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u0438..",
        "rule_trigger_budget_is_choice": "\u0411\u044e\u0434\u0436\u0435\u0442 =",
        "rule_trigger_tag_is_choice": "\u041b\u044e\u0431\u043e\u0439 \u0442\u0435\u0433..",
        "rule_trigger_currency_is_choice": "\u0412\u0430\u043b\u044e\u0442\u0430 \u043e\u043f\u0435\u0440\u0430\u0446\u0438\u0438 -",
        "rule_trigger_foreign_currency_is_choice": "\u0412\u0430\u043b\u044e\u0442\u0430 \u043e\u043f\u0435\u0440\u0430\u0446\u0438\u0438 -",
        "rule_trigger_has_attachments_choice": "\u0421\u043e\u0434\u0435\u0440\u0436\u0438\u0442 \u043d\u0435\u0441\u043a\u043e\u043b\u044c\u043a\u043e \u0432\u043b\u043e\u0436\u0435\u043d\u0438\u0439",
        "rule_trigger_has_no_category_choice": "\u041d\u0435\u0442 \u0441\u0432\u044f\u0437\u0430\u043d\u043d\u043e\u0439 \u043a\u0430\u0442\u0435\u0433\u043e\u0440\u0438\u0438",
        "rule_trigger_has_any_category_choice": "\u0421\u0432\u044f\u0437\u0430\u043d\u0430 \u0441 (\u043b\u044e\u0431\u043e\u0439) \u043a\u0430\u0442\u0435\u0433\u043e\u0440\u0438\u0435\u0439",
        "rule_trigger_has_no_budget_choice": "\u041d\u0435\u0442 \u0441\u0432\u044f\u0437\u0430\u043d\u043d\u043e\u0433\u043e \u0431\u044e\u0434\u0436\u0435\u0442\u0430",
        "rule_trigger_has_any_budget_choice": "\u0421\u0432\u044f\u0437\u0430\u043d\u0430 \u0441 (\u043b\u044e\u0431\u044b\u043c) \u0431\u044e\u0434\u0436\u0435\u0442\u043e\u043c",
        "rule_trigger_has_no_bill_choice": "\u041d\u0435 \u0441\u043e\u0434\u0435\u0440\u0436\u0438\u0442 \u0441\u0447\u0435\u0442\u043e\u0432",
        "rule_trigger_has_any_bill_choice": "\u0421\u043e\u0434\u0435\u0440\u0436\u0438\u0442 (\u043b\u044e\u0431\u043e\u0439) \u0441\u0447\u0451\u0442",
        "rule_trigger_has_no_tag_choice": "\u041d\u0435\u0442 \u043c\u0435\u0442\u043e\u043a",
        "rule_trigger_has_any_tag_choice": "\u0415\u0441\u0442\u044c \u043e\u0434\u043d\u0430 \u0438\u043b\u0438 \u043d\u0435\u0441\u043a\u043e\u043b\u044c\u043a\u043e (\u043b\u044e\u0431\u044b\u0445) \u043c\u0435\u0442\u043e\u043a",
        "rule_trigger_any_notes_choice": "\u0421\u043e\u0434\u0435\u0440\u0436\u0438\u0442 (\u043b\u044e\u0431\u044b\u0435) \u0437\u0430\u043c\u0435\u0442\u043a\u0438",
        "rule_trigger_no_notes_choice": "\u041d\u0435 \u0441\u043e\u0434\u0435\u0440\u0436\u0438\u0442 \u0437\u0430\u043c\u0435\u0442\u043e\u043a",
        "rule_trigger_notes_is_choice": "\u041f\u0440\u0438\u043c\u0435\u0447\u0430\u043d\u0438\u044f..",
        "rule_trigger_notes_contains_choice": "\u0417\u0430\u043c\u0435\u0442\u043a\u0438 \u0441\u043e\u0434\u0435\u0440\u0436\u0430\u0442..",
        "rule_trigger_notes_starts_choice": "\u0417\u0430\u043c\u0435\u0442\u043a\u0438 \u043d\u0430\u0447\u0438\u043d\u0430\u044e\u0442\u0441\u044f \u0441..",
        "rule_trigger_notes_ends_choice": "\u0417\u0430\u043c\u0435\u0442\u043a\u0438 \u0437\u0430\u043a\u0430\u043d\u0447\u0438\u0432\u0430\u044e\u0442\u0441\u044f \u043d\u0430..",
        "rule_trigger_bill_is_choice": "\u0421\u0447\u0451\u0442 \u043d\u0430 \u043e\u043f\u043b\u0430\u0442\u0443 = ..",
        "rule_trigger_external_id_is_choice": "\u0412\u043d\u0435\u0448\u043d\u0438\u0439 ID..",
        "rule_trigger_internal_reference_is_choice": "\u0412\u043d\u0443\u0442\u0440\u0435\u043d\u043d\u044f\u044f \u0441\u0441\u044b\u043b\u043a\u0430..",
        "rule_trigger_journal_id_choice": "ID \u0436\u0443\u0440\u043d\u0430\u043b\u0430 \u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u0439..",
        "rule_trigger_any_external_url_choice": "\u0422\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u044f \u0438\u043c\u0435\u0435\u0442 \u0432\u043d\u0435\u0448\u043d\u0438\u0439 URL",
        "rule_trigger_no_external_url_choice": "\u0423 \u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u0438 \u043d\u0435\u0442 \u0432\u043d\u0435\u0448\u043d\u0435\u0433\u043e URL",
        "rule_trigger_id_choice": "ID \u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u0438..",
        "rule_action_delete_transaction_choice": "DELETE transaction(!)",
        "rule_action_set_category_choice": "Set category to ..",
        "rule_action_clear_category_choice": "\u0423\u0434\u0430\u043b\u0438\u0442\u044c \u043b\u044e\u0431\u0443\u044e \u043a\u0430\u0442\u0435\u0433\u043e\u0440\u0438\u044e",
        "rule_action_set_budget_choice": "Set budget to ..",
        "rule_action_clear_budget_choice": "\u0423\u0434\u0430\u043b\u0438\u0442\u044c \u043b\u044e\u0431\u043e\u0439 \u0431\u044e\u0434\u0436\u0435\u0442",
        "rule_action_add_tag_choice": "Add tag ..",
        "rule_action_remove_tag_choice": "Remove tag ..",
        "rule_action_remove_all_tags_choice": "\u0423\u0434\u0430\u043b\u0438\u0442\u044c \u0432\u0441\u0435 \u043c\u0435\u0442\u043a\u0438...",
        "rule_action_set_description_choice": "Set description to ..",
        "rule_action_update_piggy_choice": "Add \/ remove transaction amount in piggy bank ..",
        "rule_action_append_description_choice": "Append description with ..",
        "rule_action_prepend_description_choice": "Prepend description with ..",
        "rule_action_set_source_account_choice": "Set source account to ..",
        "rule_action_set_destination_account_choice": "Set destination account to ..",
        "rule_action_append_notes_choice": "Append notes with ..",
        "rule_action_prepend_notes_choice": "Prepend notes with ..",
        "rule_action_clear_notes_choice": "\u0423\u0434\u0430\u043b\u0438\u0442\u044c \u043b\u044e\u0431\u044b\u0435 \u0437\u0430\u043c\u0435\u0442\u043a\u0438",
        "rule_action_set_notes_choice": "Set notes to ..",
        "rule_action_link_to_bill_choice": "Link to a bill ..",
        "rule_action_convert_deposit_choice": "\u041f\u0440\u0435\u043e\u0431\u0440\u0430\u0437\u043e\u0432\u0430\u0442\u044c \u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u044e \u0432 \u0434\u043e\u0445\u043e\u0434",
        "rule_action_convert_withdrawal_choice": "\u041f\u0440\u0435\u043e\u0431\u0440\u0430\u0437\u043e\u0432\u0430\u0442\u044c \u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u044e \u0432 \u0440\u0430\u0441\u0445\u043e\u0434",
        "rule_action_convert_transfer_choice": "\u041f\u0440\u0435\u043e\u0431\u0440\u0430\u0437\u043e\u0432\u0430\u0442\u044c \u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u044e \u0432 \u043f\u0435\u0440\u0435\u0432\u043e\u0434",
        "placeholder": "[Placeholder]",
        "recurrences": "\u041f\u043e\u0432\u0442\u043e\u0440\u044f\u044e\u0449\u0438\u0435\u0441\u044f \u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u0438",
        "title_expenses": "\u0420\u0430\u0441\u0445\u043e\u0434\u044b",
        "title_withdrawal": "\u0420\u0430\u0441\u0445\u043e\u0434\u044b",
        "title_revenue": "\u0414\u043e\u0445\u043e\u0434",
        "pref_1D": "\u041e\u0434\u0438\u043d \u0434\u0435\u043d\u044c",
        "pref_1W": "\u041e\u0434\u043d\u0430 \u043d\u0435\u0434\u0435\u043b\u044f",
        "pref_1M": "\u041e\u0434\u0438\u043d \u043c\u0435\u0441\u044f\u0446",
        "pref_3M": "\u0422\u0440\u0438 \u043c\u0435\u0441\u044f\u0446\u0430 (\u043a\u0432\u0430\u0440\u0442\u0430\u043b)",
        "pref_6M": "\u0428\u0435\u0441\u0442\u044c \u043c\u0435\u0441\u044f\u0446\u0435\u0432",
        "pref_1Y": "\u041e\u0434\u0438\u043d \u0433\u043e\u0434",
        "repeat_freq_yearly": "\u0435\u0436\u0435\u0433\u043e\u0434\u043d\u043e",
        "repeat_freq_half-year": "\u0440\u0430\u0437 \u0432 \u043f\u043e\u043b\u0433\u043e\u0434\u0430",
        "repeat_freq_quarterly": "\u0440\u0430\u0437 \u0432 \u043a\u0432\u0430\u0440\u0442\u0430\u043b",
        "repeat_freq_monthly": "\u0435\u0436\u0435\u043c\u0435\u0441\u044f\u0447\u043d\u043e",
        "repeat_freq_weekly": "\u0435\u0436\u0435\u043d\u0435\u0434\u0435\u043b\u044c\u043d\u043e",
        "single_split": "\u0420\u0430\u0437\u0434\u0435\u043b\u0451\u043d\u043d\u0430\u044f \u0442\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u044f",
        "asset_accounts": "\u041e\u0441\u043d\u043e\u0432\u043d\u044b\u0435 \u0441\u0447\u0435\u0442\u0430",
        "expense_accounts": "\u0421\u0447\u0435\u0442\u0430 \u0440\u0430\u0441\u0445\u043e\u0434\u043e\u0432",
        "liabilities_accounts": "\u0414\u043e\u043b\u0433\u0438",
        "undefined_accounts": "\u0423\u0447\u0451\u0442\u043d\u044b\u0435 \u0437\u0430\u043f\u0438\u0441\u0438",
        "name": "\u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435",
        "revenue_accounts": "\u0421\u0447\u0435\u0442\u0430 \u0434\u043e\u0445\u043e\u0434\u043e\u0432",
        "description": "\u041e\u043f\u0438\u0441\u0430\u043d\u0438\u0435",
        "category": "\u041a\u0430\u0442\u0435\u0433\u043e\u0440\u0438\u044f",
        "title_deposit": "\u0414\u043e\u0445\u043e\u0434",
        "title_transfer": "\u041f\u0435\u0440\u0435\u0432\u043e\u0434\u044b",
        "title_transfers": "\u041f\u0435\u0440\u0435\u0432\u043e\u0434\u044b",
        "piggyBanks": "\u041a\u043e\u043f\u0438\u043b\u043a\u0438",
        "rules": "\u041f\u0440\u0430\u0432\u0438\u043b\u0430",
        "accounts": "\u0421\u0447\u0435\u0442\u0430",
        "categories": "\u041a\u0430\u0442\u0435\u0433\u043e\u0440\u0438\u0438",
        "tags": "\u041c\u0435\u0442\u043a\u0438",
        "object_groups_page_title": "\u0413\u0440\u0443\u043f\u043f\u044b",
        "reports": "\u041e\u0442\u0447\u0451\u0442\u044b",
        "webhooks": "\u0412\u0435\u0431-\u0445\u0443\u043a\u0438",
        "currencies": "\u0412\u0430\u043b\u044e\u0442\u044b",
        "administration": "\u0410\u0434\u043c\u0438\u043d\u0438\u0441\u0442\u0440\u0438\u0440\u043e\u0432\u0430\u043d\u0438\u0435",
        "profile": "\u041f\u0440\u043e\u0444\u0438\u043b\u044c",
        "source_account": "\u0421\u0447\u0451\u0442-\u0438\u0441\u0442\u043e\u0447\u043d\u0438\u043a",
        "destination_account": "\u0421\u0447\u0451\u0442 \u043d\u0430\u0437\u043d\u0430\u0447\u0435\u043d\u0438\u044f",
        "amount": "\u0421\u0443\u043c\u043c\u0430",
        "date": "\u0414\u0430\u0442\u0430",
        "time": "\u0412\u0440\u0435\u043c\u044f",
        "preferences": "\u041d\u0430\u0441\u0442\u0440\u043e\u0439\u043a\u0438",
        "transactions": "\u0422\u0440\u0430\u043d\u0437\u0430\u043a\u0446\u0438\u0438",
        "balance": "\u0411a\u043ba\u043dc",
        "budgets": "\u0411\u044e\u0434\u0436\u0435\u0442",
        "subscriptions": "\u041f\u043e\u0434\u043f\u0438\u0441\u043a\u0438",
        "welcome_back": "\u0427\u0442\u043e \u043f\u0440\u043e\u0438\u0441\u0445\u043e\u0434\u0438\u0442 \u0441 \u043c\u043e\u0438\u043c\u0438 \u0444\u0438\u043d\u0430\u043d\u0441\u0430\u043c\u0438?",
        "bills_to_pay": "\u0421\u0447\u0435\u0442\u0430 \u043a \u043e\u043f\u043b\u0430\u0442\u0435",
        "net_worth": "\u041c\u043e\u0438 \u0441\u0431\u0435\u0440\u0435\u0436\u0435\u043d\u0438\u044f",
        "pref_last365": "\u041f\u043e\u0441\u043b\u0435\u0434\u043d\u0438\u0439 \u0433\u043e\u0434",
        "pref_last90": "\u041f\u043e\u0441\u043b\u0435\u0434\u043d\u0438\u0435 90 \u0434\u043d\u0435\u0439",
        "pref_last30": "\u041f\u043e\u0441\u043b\u0435\u0434\u043d\u0438\u0435 30 \u0434\u043d\u0435\u0439",
        "pref_last7": "\u041f\u043e\u0441\u043b\u0435\u0434\u043d\u0438\u0435 7 \u0434\u043d\u0435\u0439",
        "pref_YTD": "\u0417\u0430 \u0433\u043e\u0434 \u0434\u043e \u0441\u0435\u0433\u043e\u0434\u043d\u044f",
        "pref_QTD": "\u041a\u0432\u0430\u0440\u0442\u0430\u043b \u0434\u043e \u0441\u0435\u0433\u043e\u0434\u043d\u044f\u0448\u043d\u0435\u0433\u043e \u0434\u043d\u044f",
        "pref_MTD": "\u041c\u0435\u0441\u044f\u0446 \u0434\u043e \u0441\u0435\u0433\u043e\u0434\u043d\u044f\u0448\u043d\u0435\u0433\u043e \u0434\u043d\u044f"
    }
}
