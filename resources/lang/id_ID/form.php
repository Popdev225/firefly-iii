<?php
declare(strict_types=1);

/**
 * form.php
 * Copyright (c) 2017 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */

return [
    // new user:
    'bank_name'                      => 'Nama Bank',
    'bank_balance'                   => 'Keseimbangan',
    'savings_balance'                => 'Saldo tabungan',
    'credit_card_limit'              => 'Batas kartu kredit',
    'automatch'                      => 'Cocokkan secara otomatis',
    'skip'                           => 'Melewatkan',
    'name'                           => 'Nama',
    'active'                         => 'Aktif',
    'amount_min'                     => 'Jumlah minimal',
    'amount_max'                     => 'Jumlah maksimum',
    'match'                          => 'Cocok di',
    'strict'                         => 'Strict mode',
    'repeat_freq'                    => 'Berulang',
    'journal_currency_id'            => 'Mata uang',
    'currency_id'                    => 'Mata uang',
    'transaction_currency_id'        => 'Currency',
    'external_ip'                    => 'Your server\'s external IP',
    'attachments'                    => 'Lampiran',
    'journal_amount'                 => 'Jumlah',
    'journal_source_account_name'    => 'Akun pendapatan (sumber)',
    'journal_source_account_id'      => 'Akun aset (sumber)',
    'BIC'                            => 'BIC',
    'verify_password'                => 'Verifikasi keamanan kata sandi',
    'source_account'                 => 'Akun sumber',
    'destination_account'            => 'Akun tujuan',
    'journal_destination_account_id' => 'Akun aset (tujuan)',
    'asset_destination_account'      => 'Akun aset (tujuan)',
    'asset_source_account'           => 'Akun aset (sumber)',
    'journal_description'            => 'Deskripsi',
    'note'                           => 'Catatan',
    'split_journal'                  => 'Pisahkan transaksi ini',
    'split_journal_explanation'      => 'Split transaksi ini di banyak bagian',
    'currency'                       => 'Mata uang',
    'account_id'                     => 'Akun aset',
    'budget_id'                      => 'Anggaran',
    'openingBalance'                 => 'Saldo awal',
    'tagMode'                        => 'Mode Tag',
    'tag_position'                   => 'Lokasi tag',
    'virtualBalance'                 => 'Saldo virtual',
    'targetamount'                   => 'Jumlah target',
    'accountRole'                    => 'Peran akun',
    'openingBalanceDate'             => 'Membuka tanggal saldo',
    'ccType'                         => 'Rencana pembayaran kartu kredit',
    'ccMonthlyPaymentDate'           => 'Credit card monthly payment date',
    'piggy_bank_id'                  => 'Celengan',
    'returnHere'                     => 'Kembali ke sini',
    'returnHereExplanation'          => 'Setelah menyimpan, kembali ke sini untuk membuat yang lain.',
    'returnHereUpdateExplanation'    => 'Setelah update, kembali ke sini.',
    'description'                    => 'Deskripsi',
    'expense_account'                => 'Rekening pengeluaran',
    'revenue_account'                => 'Akun pendapatan',
    'decimal_places'                 => 'Tempat desimal',
    'exchange_rate_instruction'      => 'Mata uang asing',
    'source_amount'                  => 'Jumlah (sumber)',
    'destination_amount'             => 'Jumlah (tujuan)',
    'native_amount'                  => 'Jumlah asli',
    'new_email_address'              => 'Alamat email baru',
    'verification'                   => 'Verifikasi',
    'api_key'                        => 'Kunci API',
    'remember_me'                    => 'Remember me',

    'source_account_asset'        => 'Akun sumber (akun aset)',
    'destination_account_expense' => 'Akun tujuan (akun pengeluaran)',
    'destination_account_asset'   => 'Akun tujuan (akun aset)',
    'source_account_revenue'      => 'Akun sumber (akun pendapatan)',
    'type'                        => 'Mengetik',
    'convert_Withdrawal'          => 'Mengkonversi penarikan',
    'convert_Deposit'             => 'Convert deposit',
    'convert_Transfer'            => 'Mengkonversi transfer',

    'amount'                     => 'Jumlah',
    'date'                       => 'Tanggal',
    'interest_date'              => 'Tanggal bunga',
    'book_date'                  => 'Tanggal buku',
    'process_date'               => 'Tanggal pemrosesan',
    'category'                   => 'Kategori',
    'tags'                       => 'Tag',
    'deletePermanently'          => 'Hapus secara permanen',
    'cancel'                     => 'Membatalkan',
    'targetdate'                 => 'Tanggal target',
    'startdate'                  => 'Mulai tanggal',
    'tag'                        => 'Menandai',
    'under'                      => 'Dibawah',
    'symbol'                     => 'Simbol',
    'code'                       => 'Kode',
    'iban'                       => 'IBAN',
    'accountNumber'              => 'Nomor akun',
    'creditCardNumber'           => 'Nomor kartu kredit',
    'has_headers'                => 'Judul',
    'date_format'                => 'Format tanggal',
    'specifix'                   => 'Perbaikan spesifik bank atau berkas',
    'attachments[]'              => 'Lampiran',
    'store_new_withdrawal'       => 'Simpan penarikan baru',
    'store_new_deposit'          => 'Simpan deposit baru',
    'store_new_transfer'         => 'Simpan transfer baru',
    'add_new_withdrawal'         => 'Tambahkan penarikan baru',
    'add_new_deposit'            => 'Tambahkan deposit baru',
    'add_new_transfer'           => 'Tambahkan transfer baru',
    'title'                      => 'Judul',
    'notes'                      => 'Catatan',
    'filename'                   => 'Nama file',
    'mime'                       => 'Tipe mime',
    'size'                       => 'Ukuran',
    'trigger'                    => 'Pelatuk',
    'stop_processing'            => 'Berhenti memproses',
    'start_date'                 => 'Mulai dari jangkauan',
    'end_date'                   => 'Akhir rentang',
    'export_start_range'         => 'Mulai dari rentang ekspor',
    'export_end_range'           => 'Akhir rentang ekspor',
    'export_format'              => 'Format file',
    'include_attachments'        => 'Sertakan lampiran yang diunggah',
    'include_old_uploads'        => 'Sertakan data yang diimpor',
    'accounts'                   => 'Mengekspor transaksi dari akun ini',
    'delete_account'             => 'Delete account ":name"',
    'delete_bill'                => 'Hapus tagihan ":name"',
    'delete_budget'              => 'Hapus anggaran ":name"',
    'delete_category'            => 'Hapus kategori ":name"',
    'delete_currency'            => 'Hapus mata uang ":name"',
    'delete_journal'             => 'Hapus transaksi dengan deskripsi ":description"',
    'delete_attachment'          => 'Hapus lampiran ":name"',
    'delete_rule'                => 'Hapus aturan ":title"',
    'delete_rule_group'          => 'Hapus grup aturan ":title"',
    'delete_link_type'           => 'Hapus jenis tautan ":name"',
    'delete_user'                => 'Hapus pengguna ":email"',
    'user_areYouSure'            => 'Jika Anda menghapus pengguna ":email", semuanya akan hilang. Tidak ada undo, undelete atau apapun. Jika Anda menghapus diri Anda sendiri, Anda akan kehilangan akses ke Firefly III ini.',
    'attachment_areYouSure'      => 'Yakin ingin menghapus lampiran yang bernama ":name"?',
    'account_areYouSure'         => 'Yakin ingin menghapus akun dengan nama ":name"?',
    'bill_areYouSure'            => 'Yakin ingin menghapus tagihan yang bernama ":name"?',
    'rule_areYouSure'            => 'Yakin ingin menghapus aturan yang berjudul ":title"?',
    'ruleGroup_areYouSure'       => 'Yakin ingin menghapus grup aturan yang berjudul ":title"?',
    'budget_areYouSure'          => 'Yakin ingin menghapus anggaran dengan nama ":name"?',
    'category_areYouSure'        => 'Yakin ingin menghapus kategori yang bernama ":name"?',
    'currency_areYouSure'        => 'Yakin ingin menghapus mata uang dengan nama ":name"?',
    'piggyBank_areYouSure'       => 'Yakin ingin menghapus piggy bank yang bernama ":name"?',
    'journal_areYouSure'         => 'Yakin ingin menghapus transaksi yang dijelaskan ":description"?',
    'mass_journal_are_you_sure'  => 'Yakin ingin menghapus transaksi ini?',
    'tag_areYouSure'             => 'Yakin ingin menghapus tag ":tag"?',
    'journal_link_areYouSure'    => 'Yakin ingin menghapus tautan antara <a href=":source_link">:source</a> and <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'        => 'Yakin ingin menghapus jenis tautan ":name" (":inward" / ":outward")?',
    'permDeleteWarning'          => 'Deleting stuff from Firefly III is permanent and cannot be undone.',
    'mass_make_selection'        => 'Anda masih dapat mencegah agar item dihapus dengan menghapus kotak centang.',
    'delete_all_permanently'     => 'Hapus yang dipilih secara permanen',
    'update_all_journals'        => 'Perbarui transaksi ini',
    'also_delete_transactions'   => 'Satu-satunya transaksi yang terhubung ke akun ini akan dihapus juga. | Semua :count transaksi yang terhubung ke akun ini akan dihapus juga.',
    'also_delete_connections'    => 'Satu-satunya transaksi yang terkait dengan jenis link ini akan kehilangan koneksi ini. Semua :count transaksi yang terkait dengan jenis link ini akan kehilangan koneksi mereka.',
    'also_delete_rules'          => 'Aturan satu-satunya yang terhubung ke grup aturan ini akan dihapus juga. Aturan All :count yang terhubung ke grup aturan ini akan dihapus juga.',
    'also_delete_piggyBanks'     => 'Satu-satunya piggy bank yang terhubung ke akun ini akan dihapus juga. Semua :count piggy bank yang terhubung ke akun ini akan dihapus juga.',
    'bill_keep_transactions'     => 'Satu-satunya transaksi yang terhubung dengan tagihan ini tidak akan dihapus. Semua :count transaksi yang terhubung ke tagihan ini akan terhindar dari penghapusan.',
    'budget_keep_transactions'   => 'Satu-satunya transaksi yang terhubung dengan anggaran ini tidak akan dihapus. Semua :count transaksi yang terhubung dengan anggaran ini akan terhindar dari penghapusan.',
    'category_keep_transactions' => 'Satu-satunya transaksi yang terhubung ke kategori ini tidak akan dihapus. Semua :count transaksi yang terhubung ke kategori ini akan terhindar dari penghapusan.',
    'tag_keep_transactions'      => 'Satu-satunya transaksi yang terhubung ke tag ini tidak akan dihapus. Semua :count transaksi yang terhubung ke tag ini akan terhindar dari penghapusan.',
    'check_for_updates'          => 'Check for updates',

    'email'                 => 'Alamat email',
    'password'              => 'Kata sandi',
    'password_confirmation' => 'Password (lagi)',
    'blocked'               => 'Apakah diblokir?',
    'blocked_code'          => 'Alasan untuk blok',

    // admin
    'domain'                => 'Domain',
    'single_user_mode'      => 'Nonaktifkan pendaftaran pengguna',
    'is_demo_site'          => 'Apakah situs demo',

    // import
    'import_file'           => 'Impor file',
    'configuration_file'    => 'File konfigurasi',
    'import_file_type'      => 'Impor jenis file',
    'csv_comma'             => 'Koma (,)',
    'csv_semicolon'         => 'Titik koma (;)',
    'csv_tab'               => 'Tab (tak terlihat)',
    'csv_delimiter'         => 'Pembatas lapangan CSV',
    'csv_import_account'    => 'Akun impor default',
    'csv_config'            => 'Konfigurasi impor CSV',
    'client_id'             => 'ID klien',
    'service_secret'        => 'Rahasia layanan',
    'app_secret'            => 'Rahasia app',
    'public_key'            => 'Kunci publik',
    'country_code'          => 'Kode negara',
    'provider_code'         => 'Bank atau penyedia data',

    'due_date'           => 'Batas tanggal terakhir',
    'payment_date'       => 'Tanggal pembayaran',
    'invoice_date'       => 'Tanggal faktur',
    'internal_reference' => 'Referensi internal',
    'inward'             => 'Deskripsi dalam',
    'outward'            => 'Deskripsi luar',
    'rule_group_id'      => 'Kelompok aturan',
];
