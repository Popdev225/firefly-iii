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
        "html_language": "id",
        "month_and_day_fns": "d MMMM, y"
    },
    "form": {
        "name": "Nama",
        "amount_min": "Jumlah minimal",
        "amount_max": "Jumlah maksimum",
        "url": "URL",
        "title": "Judul",
        "first_date": "Tanggal pertama",
        "repetitions": "Pengulangan",
        "description": "Deskripsi",
        "iban": "IBAN",
        "skip": "Melewatkan",
        "date": "Tanggal"
    },
    "list": {
        "name": "Nama",
        "account_number": "Account number",
        "currentBalance": "Saldo saat ini",
        "lastActivity": "Aktifitas terakhir",
        "active": "Aktif?"
    },
    "breadcrumbs": {
        "placeholder": "[Placeholder]",
        "budgets": "Anggaran",
        "subscriptions": "Langganan",
        "transactions": "Transaksi",
        "title_expenses": "Pengeluaran",
        "title_withdrawal": "Pengeluaran",
        "title_revenue": "Penghasilan \/ pendapatan",
        "title_deposit": "Penghasilan \/ pendapatan",
        "title_transfer": "Transfer",
        "title_transfers": "Transfer",
        "asset_accounts": "Akun aset",
        "expense_accounts": "Akun pengeluaran",
        "revenue_accounts": "Akun pendapatan",
        "liabilities_accounts": "Kewajiban"
    },
    "firefly": {
        "actions": "Tindakan",
        "edit": "Edit",
        "delete": "Menghapus",
        "reconcile": "Reconcile",
        "create_new_asset": "Buat akun aset baru",
        "confirm_action": "Confirm action",
        "new_budget": "Anggaran baru",
        "new_asset_account": "Akun aset baru",
        "newTransfer": "Transfer baru",
        "newDeposit": "Deposit baru",
        "newWithdrawal": "Biaya baru",
        "bills_paid": "Tagihan dibayar",
        "left_to_spend": "Kiri untuk dibelanjakan",
        "no_budget": "(no budget)",
        "budgeted": "Dianggarkan",
        "spent": "Menghabiskan",
        "no_bill": "(no bill)",
        "rule_trigger_source_account_starts_choice": "Source account name starts with..",
        "rule_trigger_source_account_ends_choice": "Source account name ends with..",
        "rule_trigger_source_account_is_choice": "Source account name is..",
        "rule_trigger_source_account_contains_choice": "Source account name contains..",
        "rule_trigger_account_id_choice": "Either account ID is exactly..",
        "rule_trigger_source_account_id_choice": "Source account ID is exactly..",
        "rule_trigger_destination_account_id_choice": "Destination account ID is exactly..",
        "rule_trigger_account_is_cash_choice": "Either account is cash",
        "rule_trigger_source_is_cash_choice": "Source account is (cash) account",
        "rule_trigger_destination_is_cash_choice": "Destination account is (cash) account",
        "rule_trigger_source_account_nr_starts_choice": "Source account number \/ IBAN starts with..",
        "rule_trigger_source_account_nr_ends_choice": "Source account number \/ IBAN ends with..",
        "rule_trigger_source_account_nr_is_choice": "Source account number \/ IBAN is..",
        "rule_trigger_source_account_nr_contains_choice": "Source account number \/ IBAN contains..",
        "rule_trigger_destination_account_starts_choice": "Destination account name starts with..",
        "rule_trigger_destination_account_ends_choice": "Destination account name ends with..",
        "rule_trigger_destination_account_is_choice": "Destination account name is..",
        "rule_trigger_destination_account_contains_choice": "Destination account name contains..",
        "rule_trigger_destination_account_nr_starts_choice": "Destination account number \/ IBAN starts with..",
        "rule_trigger_destination_account_nr_ends_choice": "Destination account number \/ IBAN ends with..",
        "rule_trigger_destination_account_nr_is_choice": "Destination account number \/ IBAN is..",
        "rule_trigger_destination_account_nr_contains_choice": "Destination account number \/ IBAN contains..",
        "rule_trigger_transaction_type_choice": "Transaksi adalah tipe..",
        "rule_trigger_category_is_choice": "Kategori adalah..",
        "rule_trigger_amount_less_choice": "Jumlahnya kurang dari..",
        "rule_trigger_amount_is_choice": "Amount is..",
        "rule_trigger_amount_more_choice": "Jumlahnya lebih dari..",
        "rule_trigger_description_starts_choice": "Deskripsi dimulai dengan..",
        "rule_trigger_description_ends_choice": "Deskripsi diakhiri dengan..",
        "rule_trigger_description_contains_choice": "Deskripsi berisi..",
        "rule_trigger_description_is_choice": "Deskripsi adalah..",
        "rule_trigger_date_on_choice": "Transaction date is..",
        "rule_trigger_date_before_choice": "Transaction date is before..",
        "rule_trigger_date_after_choice": "Transaction date is after..",
        "rule_trigger_created_at_on_choice": "Transaction was made on..",
        "rule_trigger_updated_at_on_choice": "Transaction was last edited on..",
        "rule_trigger_budget_is_choice": "Anggaran adalah..",
        "rule_trigger_tag_is_choice": "Any tag is..",
        "rule_trigger_currency_is_choice": "Transaction currency is..",
        "rule_trigger_foreign_currency_is_choice": "Transaction foreign currency is..",
        "rule_trigger_has_attachments_choice": "Paling tidak banyak keterikatan ini",
        "rule_trigger_has_no_category_choice": "Tidak memiliki kategori",
        "rule_trigger_has_any_category_choice": "Memiliki kategori (apapun)",
        "rule_trigger_has_no_budget_choice": "Tidak memiliki anggaran",
        "rule_trigger_has_any_budget_choice": "Memiliki anggaran (apapun)",
        "rule_trigger_has_no_bill_choice": "Has no bill",
        "rule_trigger_has_any_bill_choice": "Has a (any) bill",
        "rule_trigger_has_no_tag_choice": "Tidak memiliki tag",
        "rule_trigger_has_any_tag_choice": "Memiliki satu atau beberapa tag (apapun)",
        "rule_trigger_any_notes_choice": "Telah ada catatan",
        "rule_trigger_no_notes_choice": "Tidak memiliki catatan",
        "rule_trigger_notes_is_choice": "Notes are..",
        "rule_trigger_notes_contains_choice": "Notes contain..",
        "rule_trigger_notes_starts_choice": "Notes start with..",
        "rule_trigger_notes_ends_choice": "Notes end with..",
        "rule_trigger_bill_is_choice": "Bill is..",
        "rule_trigger_external_id_is_choice": "External ID is..",
        "rule_trigger_internal_reference_is_choice": "Internal reference is..",
        "rule_trigger_journal_id_choice": "Transaction journal ID is..",
        "rule_trigger_any_external_url_choice": "Transaction has an external URL",
        "rule_trigger_no_external_url_choice": "Transaction has no external URL",
        "rule_trigger_id_choice": "Transaction ID is..",
        "rule_action_delete_transaction_choice": "DELETE transaction(!)",
        "rule_action_set_category_choice": "Set category to ..",
        "rule_action_clear_category_choice": "Kosongkan kategori apapun",
        "rule_action_set_budget_choice": "Set budget to ..",
        "rule_action_clear_budget_choice": "Kosongkan anggaran",
        "rule_action_add_tag_choice": "Add tag ..",
        "rule_action_remove_tag_choice": "Remove tag ..",
        "rule_action_remove_all_tags_choice": "Hapus semua tag",
        "rule_action_set_description_choice": "Set description to ..",
        "rule_action_update_piggy_choice": "Add \/ remove transaction amount in piggy bank ..",
        "rule_action_append_description_choice": "Append description with ..",
        "rule_action_prepend_description_choice": "Prepend description with ..",
        "rule_action_set_source_account_choice": "Set source account to ..",
        "rule_action_set_destination_account_choice": "Set destination account to ..",
        "rule_action_append_notes_choice": "Append notes with ..",
        "rule_action_prepend_notes_choice": "Prepend notes with ..",
        "rule_action_clear_notes_choice": "Hapus catatan apapun",
        "rule_action_set_notes_choice": "Set notes to ..",
        "rule_action_link_to_bill_choice": "Link to a bill ..",
        "rule_action_convert_deposit_choice": "Convert the transaction to a deposit",
        "rule_action_convert_withdrawal_choice": "Convert the transaction to a withdrawal",
        "rule_action_convert_transfer_choice": "Convert the transaction to a transfer",
        "placeholder": "[Placeholder]",
        "recurrences": "Recurring transactions",
        "title_expenses": "Beban",
        "title_withdrawal": "Beban",
        "title_revenue": "Pendapatan \/ penghasilan",
        "pref_1D": "Suatu hari",
        "pref_1W": "Satu minggu",
        "pref_1M": "Satu bulan",
        "pref_3M": "Tiga bulan (seperempat)",
        "pref_6M": "Enam bulan",
        "pref_1Y": "Satu tahun",
        "repeat_freq_yearly": "tahunan",
        "repeat_freq_half-year": "setiap setengah tahun",
        "repeat_freq_quarterly": "triwulanan",
        "repeat_freq_monthly": "bulanan",
        "repeat_freq_weekly": "mingguan",
        "single_split": "Pisah",
        "asset_accounts": "Akun aset",
        "expense_accounts": "Rekening pengeluaran",
        "liabilities_accounts": "Liabilities",
        "undefined_accounts": "Accounts",
        "name": "Nama",
        "revenue_accounts": "Akun pendapatan",
        "description": "Deskripsi",
        "category": "Kategori",
        "title_deposit": "Pendapatan \/ penghasilan",
        "title_transfer": "Transfer",
        "title_transfers": "Transfer",
        "piggyBanks": "Celengan babi",
        "rules": "Aturan",
        "accounts": "Akun",
        "categories": "Kategori",
        "tags": "Tag",
        "object_groups_page_title": "Groups",
        "reports": "Laporan",
        "webhooks": "Webhooks",
        "currencies": "Mata uang",
        "administration": "Administrasi",
        "profile": "Profil",
        "source_account": "Akun sumber",
        "destination_account": "Akun tujuan",
        "amount": "Jumlah",
        "date": "Tanggal",
        "time": "Time",
        "preferences": "Preferensi",
        "transactions": "Transaksi",
        "balance": "Keseimbangan",
        "budgets": "Anggaran",
        "subscriptions": "Subscriptions",
        "welcome_back": "Apa yang sedang dimainkan?",
        "bills_to_pay": "Bills untuk membayar",
        "net_worth": "Nilai bersih",
        "pref_last365": "Last year",
        "pref_last90": "Last 90 days",
        "pref_last30": "Last 30 days",
        "pref_last7": "Last 7 days",
        "pref_YTD": "Year to date",
        "pref_QTD": "Quarter to date",
        "pref_MTD": "Month to date"
    }
}
