<?php

/**
 * validation.php
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
    'bad_type_source'                 => 'Το Firefly III δεν μπορεί να καθορίσει τον τύπο συναλλαγής με βάση αυτό το λογαριασμό προέλευσης.',
    'bad_type_destination'            => 'Το Firefly III δεν μπορεί να καθορίσει τον τύπο συναλλαγής με βάση αυτό το λογαριασμό προορισμού.',
    'missing_where'                   => 'Από τον πίνακα λείπει η ρήτρα "where"',
    'missing_update'                  => 'Από τον πίνακα λείπει η ρήτρα "update"',
    'invalid_where_key'               => 'Το JSON περιέχει ένα μη έγκυρο κλειδί για την ρήτρα "where"',
    'invalid_update_key'              => 'Το JSON περιέχει ένα μη έγκυρο κλειδί για την ρήτρα "update"',
    'invalid_query_data'              => 'Υπάρχουν μη έγκυρα δεδομένα στο πεδίο %s:%s του ερωτήματός σας.',
    'invalid_query_account_type'      => 'Το ερώτημά σας περιέχει λογαριασμούς διαφορετικών τύπων, κάτι που δεν επιτρέπεται.',
    'invalid_query_currency'          => 'Το ερώτημά σας περιέχει λογαριασμούς που έχουν διαφορετικές ρυθμίσεις νομίσματος, το οποίο δεν επιτρέπεται.',
    'iban'                            => 'Αυτό δεν είναι έγκυρο IBAN.',
    'zero_or_more'                    => 'Αυτή η τιμή δεν μπορεί να είναι αρνητική.',
    'more_than_zero'                  => 'Η τιμή πρέπει να είναι μεγαλύτερη από το μηδέν.',
    'more_than_zero_correct'          => 'Η τιμή πρέπει να είναι μηδέν ή περισσότερο.',
    'no_asset_account'                => 'Αυτός δεν είναι λογαριασμός κεφαλαίου.',
    'date_or_time'                    => 'Αυτή η τιμή πρέπει να είναι έγκυρη ημερομηνία ή τιμή ώρας (ISO 8601).',
    'source_equals_destination'       => 'Ο λογαριασμός προέλευσης ισούται με το λογαριασμό προορισμού.',
    'unique_account_number_for_user'  => 'Φαίνεται πως αυτός ο αριθμός λογαριασμού χρησιμοποιείται ήδη.',
    'unique_iban_for_user'            => 'Φαίνεται πως αυτό το IBAN είναι ήδη σε χρήση.',
    'reconciled_forbidden_field'      => 'Αυτή η συναλλαγή έχει ήδη τακτοποιηθεί, δεν μπορείτε να αλλάξετε το ":field"',
    'deleted_user'                    => 'Για λόγους ασφαλείας, δεν μπορείτε να εγγραφείτε χρησιμοποιώντας αυτή τη διεύθυνση email.',
    'rule_trigger_value'              => 'Αυτή η τιμή δεν είναι έγκυρη για το επιλεγμένο κριτήριο ενεργοποίησης.',
    'rule_action_value'               => 'Αυτή η τιμή δεν είναι έγκυρη για την επιλεγμένη ενέργεια.',
    'file_already_attached'           => 'Το μεταφορτωμένο αρχείο ":name" είναι ήδη συνημμένο σε αυτό το αντικείμενο.',
    'file_attached'                   => 'Επιτυχής μεταφόρτωση του αρχείου ":name".',
    'must_exist'                      => 'Το αναγνωριστικό στο πεδίο :attribute δεν υπάρχει στη βάση δεδομένων.',
    'all_accounts_equal'              => 'Όλοι οι λογαριασμοί σε αυτό το πεδίο πρέπει να είναι ίσοι.',
    'group_title_mandatory'           => 'Ένας τίτλος ομάδας είναι υποχρεωτικός όταν υπάρχουν περισσότερες από μία συναλλαγές.',
    'transaction_types_equal'         => 'Όλοι οι διαχωρισμοί πρέπει να είναι ίδιου τύπου.',
    'invalid_transaction_type'        => 'Μη έγκυρος τύπος συναλλαγής.',
    'invalid_selection'               => 'Η επιλογή σας δεν είναι έγκυρη.',
    'belongs_user'                    => 'Αυτή η τιμή συνδέεται με ένα αντικείμενο που δεν φαίνεται να υπάρχει.',
    'belongs_user_or_user_group'      => 'Αυτή η τιμή συνδέεται με ένα αντικείμενο που δεν φαίνεται να υπάρχει στην τρέχουσα οικονομική σας διαχείριση.',
    'at_least_one_transaction'        => 'Απαιτείται τουλάχιστο μία συναλλαγή.',
    'recurring_transaction_id'        => 'Απαιτείται τουλάχιστον μία συναλλαγή.',
    'need_id_to_match'                => 'Πρέπει να υποβάλετε αυτήν την καταχώρηση με ένα ID για να μπορεί το API να το ταιριάζει.',
    'too_many_unmatched'              => 'Too many submitted transactions cannot be matched to their respective database entries. Make sure existing entries have a valid ID.',
    'id_does_not_match'               => 'Submitted ID #:id does not match expected ID. Make sure it matches or omit the field.',
    'at_least_one_repetition'         => 'Απαιτείται τουλάχιστον μία επανάληψη.',
    'require_repeat_until'            => 'Απαιτείται είτε ένας αριθμός επαναλήψεων, ή μία ημερομηνία λήξης (repeat_until). Όχι και τα δύο.',
    'require_currency_info'           => 'Το περιεχόμενο αυτού του πεδίου δεν είναι έγκυρη χωρίς νομισματικές πληροφορίες.',
    'not_transfer_account'            => 'Αυτός ο λογαριασμός δεν είναι λογαριασμός που μπορεί να χρησιμοποιηθεί για συναλλαγές.',
    'require_currency_amount'         => 'Το περιεχόμενο αυτού του πεδίου δεν είναι έγκυρο χωρίς πληροφορίες ετερόχθονος ποσού.',
    'require_foreign_currency'        => 'Αυτό το πεδίο απαιτεί έναν αριθμό',
    'require_foreign_dest'            => 'Αυτή η τιμή πεδίου πρέπει να ταιριάζει με το νόμισμα του λογαριασμού προορισμού.',
    'require_foreign_src'             => 'Αυτή η τιμή πεδίου πρέπει να ταιριάζει με το νόμισμα του λογαριασμού προέλευσης.',
    'equal_description'               => 'Η περιγραφή της συναλλαγής δεν πρέπει να ισούται με καθολική περιγραφή.',
    'file_invalid_mime'               => 'Το αρχείο ":name" είναι τύπου ":mime" που δεν είναι αποδεκτός ως νέας μεταφόρτωσης.',
    'file_too_large'                  => 'Το αρχείο ":name" είναι πολύ μεγάλο.',
    'belongs_to_user'                 => 'Η τιμή του :attribute είναι άγνωστη.',
    'accepted'                        => 'Το :attribute πρέπει να γίνει αποδεκτό.',
    'bic'                             => 'Αυτό δεν είναι έγκυρο IBAN.',
    'at_least_one_trigger'            => 'Ο κανόνας πρέπει να έχει τουλάχιστον ένα κριτήριο ενεργοποίησης.',
    'at_least_one_active_trigger'     => 'Ο κανόνας πρέπει να έχει τουλάχιστον ένα ενεργό κριτήριο ενεργοποίησης.',
    'at_least_one_action'             => 'Ο κανόνας πρέπει να έχει τουλάχιστον μία λειτουργία.',
    'at_least_one_active_action'      => 'Ο κανόνας πρέπει να έχει τουλάχιστον μία ενεργή λειτουργία.',
    'base64'                          => 'Αυτά δεν είναι έγκυρα base64 κωδικοποιημένα δεδομένα.',
    'model_id_invalid'                => 'Το παραχωρημένο αναγνωριστικό δε φαίνεται έγκυρο για αυτό το μοντέλο.',
    'less'                            => 'Το :attribute πρέπει να είναι μικρότερο από 10,000,000',
    'active_url'                      => 'Το :attribute δεν είναι έγκυρο URL.',
    'after'                           => 'Το :attribute πρέπει να είναι ημερομηνία μετά από :date.',
    'date_after'                      => 'Η ημερομηνία έναρξης πρέπει να είναι πριν την ημερομηνία λήξης.',
    'alpha'                           => 'Το :attribute μπορεί να περιέχει μόνο γράμματα.',
    'alpha_dash'                      => 'Το :attribute μπορεί να περιέχει γράμματα, αριθμοί, και παύλες.',
    'alpha_num'                       => 'Το :attribute μπορεί να περιέχει γράμματα και αριθμούς.',
    'array'                           => 'Το :attribute πρέπει να είναι μία παράταξη.',
    'unique_for_user'                 => 'Υπάρχει ήδη μια εισαγωγή με αυτό το :attribute.',
    'before'                          => 'Αυτό το :attribute πρέπει να είναι μια ημερομηνία πρίν από :date.',
    'unique_object_for_user'          => 'Αυτό το όνομα είναι ήδη σε χρήση.',
    'unique_account_for_user'         => 'Αυτό το όνομα λογαριασμού είναι ήδη σε χρήση.',

    // Ignore this comment

    'between.numeric'                 => 'Το :attribute πρέπει να είναι μεταξύ :min και :max.',
    'between.file'                    => 'Το :attribute πρέπει να είναι μεταξύ :min και :max kilobytes.',
    'between.string'                  => 'To :attribute πρέπει να είναι μεταξύ :min και :max χαρακτήρων.',
    'between.array'                   => 'Το :attribute πρέπει να είναι μεταξύ :min και :max αντικειμένων.',
    'boolean'                         => 'Το πεδίο :attribute πρέπει να είναι αληθές ή ψευδές.',
    'confirmed'                       => 'Η επιβεβαίωση του :attribute δεν ταιριάζει.',
    'date'                            => 'Το :attribute δεν είναι έγκυρη ημερομηνία.',
    'date_format'                     => 'Το :attribute δεν ταιριάζει με τη μορφή :format.',
    'different'                       => 'Το :attribute και :other πρέπει να είναι διαφορετικά.',
    'digits'                          => 'Το :attribute πρέπει να είναι :digits ψηφία.',
    'digits_between'                  => 'Το :attribute πρέπει να είναι μεταξύ :min και :max ψηφίων.',
    'email'                           => 'Το :attribute πρέπει να είναι μία έγκυρη διεύθυνση email.',
    'filled'                          => 'Το πεδίο :attribute είναι απαραίτητο.',
    'exists'                          => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'image'                           => 'Το :attribute πρέπει να είναι εικόνα.',
    'in'                              => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'integer'                         => 'Το :attribute πρέπει να είναι ακέραιος αριθμός.',
    'ip'                              => 'Το :attribute πρέπει να είναι έγκυρη διεύθυνση IP.',
    'json'                            => 'Το :attribute πρέπει να είναι έγκυρο JSON string.',
    'max.numeric'                     => 'Το :attribute δεν μπορεί να είναι μεγαλύτερο του :max.',
    'max.file'                        => 'Το :attribute δεν μπορεί να είναι μεγαλύτερο από :max kilobytes.',
    'max.string'                      => 'Το :attribute δεν μπορεί να είναι μεγαλύτερο από :max χαρακτήρες.',
    'max.array'                       => 'Το :attribute δεν μπορεί να έχει περισσότερα από :max αντικείμενα.',
    'mimes'                           => 'Το :attribute πρέπει να είναι ένα αρχείου τύπου: :values.',
    'min.numeric'                     => 'Το :attribute πρέπει να είναι τουλάχιστον :min.',
    'lte.numeric'                     => 'Το :attribute πρέπει να είναι μικρότερο ή ίσο του :value.',
    'min.file'                        => 'Το :attribute πρέπει είναι τουλάχιστον :min kilobytes.',
    'min.string'                      => 'Το :attribute πρέπει να είναι τουλάχιστον :min χαρακτήρες.',
    'min.array'                       => 'Το :attribute πρέπει να είναι τουλάχιστον :min αντικείμενα.',
    'not_in'                          => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'numeric'                         => 'Το :attribute πρέπει να είναι αριθμός.',
    'scientific_notation'             => 'Στο :attribute δεν μπορεί να χρησιμοποιηθεί η επιστημονική σημειογραφία.',
    'numeric_native'                  => 'Το εγχώριο ποσό πρέπει να είναι αριθμός.',
    'numeric_destination'             => 'Το ποσό προορισμού πρέπει να είναι αριθμός.',
    'numeric_source'                  => 'Το ποσό προέλευσης πρέπει να είναι αριθμός.',
    'regex'                           => 'Η μορφή του :attribute δεν είναι έγκυρη.',
    'required'                        => 'Το πεδίο :attribute είναι απαραίτητο.',
    'required_if'                     => 'Το πεδίο :attribute απαιτείται όταν το :other είναι :value.',
    'required_unless'                 => 'Το πεδίο :attribute είναι απαραίτητο εκτός αν το :other είναι σε :values.',
    'required_with'                   => 'Το πεδίο :attribute είναι απαραίτητο όταν :values είναι παρούσες.',
    'required_with_all'               => 'Το πεδίο :attribute είναι απαραίτητο όταν :values είναι παρούσες.',
    'required_without'                => 'To πεδίο :attribute είναι απαραίτητο όταν :values δεν είναι παρούσες.',
    'required_without_all'            => 'Το πεδίο :attribute είναι απαραίτητο όταν καμία από :values είναι δεν είναι παρούσες.',
    'same'                            => 'Τα :attribute και :other πρέπει να ταιριάζουν.',
    'size.numeric'                    => 'Το :attribute πρέπει να είναι :size.',
    'amount_min_over_max'             => 'Το ελάχιστο ποσό δεν μπορεί να είναι μεγαλύτερο του μέγιστου ποσού.',
    'size.file'                       => 'Το :attribute πρέπει να είναι :size kilobytes.',
    'size.string'                     => 'Το :attribute πρέπει να είναι :size χαρακτήρες.',
    'size.array'                      => 'Το :attribute πρέπει να περιέχει :size αντικείμενα.',
    'unique'                          => 'Το :attribute έχει ληφθεί ήδη.',
    'string'                          => 'Το :attribute πρέπει να είναι string.',
    'url'                             => 'Η μορφή :attribute δεν είναι έγκυρη.',
    'timezone'                        => 'Το :attribute πρέπει να είναι έγκυρη ζώνη.',
    '2fa_code'                        => 'Το πεδίο :attribute δεν είναι έγκυρο.',
    'dimensions'                      => 'Το :attribute δεν έχει έγκυρες διαστάσεις εικόνας.',
    'distinct'                        => 'Το πεδίο :attribute έχει διπλότυπη τιμή.',
    'file'                            => 'Το :attribute πρέπει να είναι ένα αρχείο.',
    'in_array'                        => 'Το πεδίο :attribute δεν υπάρχει σε :other.',
    'present'                         => 'Το πεδίο :attribute πρέπει να είναι παρόν.',
    'amount_zero'                     => 'Το συνολικό ποσό δεν μπορεί να είναι μηδέν.',
    'current_target_amount'           => 'Το τρέχων ποσό πρέπει να είναι μικρότερο από το ποσό προορισμού.',
    'unique_piggy_bank_for_user'      => 'Το όνομα του κουμπαρά πρέπει να είναι μοναδικό.',
    'unique_object_group'             => 'Το όνομα της ομάδας πρέπει να είναι μοναδικό',
    'starts_with'                     => 'Η τιμή πρέπει να ξεκινά με :values.',
    'unique_webhook'                  => 'Έχετε ήδη ένα webhook με αυτόν τον συνδυασμό URL, ενεργοποίησης, απόκρισης και παράδοσης.',
    'unique_existing_webhook'         => 'Έχετε ήδη ένα άλλο webhook με αυτόν τον συνδυασμό URL, ενεργοποίησης, απόκρισης και παράδοσης.',
    'same_account_type'               => 'Και οι δύο λογαριασμοί πρέπει να έχουν τον ίδιο τύπο λογαριασμού',
    'same_account_currency'           => 'Και οι δύο λογαριασμοί πρέπει να έχουν την ίδια ρύθμιση νομίσματος',

    // Ignore this comment

    'secure_password'                 => 'Αυτό δεν είναι ασφαλές συνθηματικό. Παρακαλώ δοκιμάστε ξανά. Για περισσότερες πληροφορίες επισκεφτείτε https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'       => 'Μη έγκυρος τύπος επανάληψης για επαναλαμβανόμενες συναλλαγές.',
    'valid_recurrence_rep_moment'     => 'Μη έγκυρη στιγμή επανάληψης για αυτό τον τύπο επανάληψης.',
    'invalid_account_info'            => 'Μη έγκυρες πληροφορίες λογαριασμού.',
    'attributes'                      => [
        'email'                   => 'διεύθυνση email',
        'description'             => 'περιγραφή',
        'amount'                  => 'ποσό',
        'transactions.*.amount'   => 'ποσό συναλλαγής',
        'name'                    => 'όνομα',
        'piggy_bank_id'           => 'αναγνωριστικό κουμπαρά',
        'targetamount'            => 'ποσό προορισμού',
        'opening_balance_date'    => 'ημερομηνία ισολογισμού έναρξης',
        'opening_balance'         => 'ισολογισμός έναρξης',
        'match'                   => 'αντιστοίχιση',
        'amount_min'              => 'ελάχιστο ποσό',
        'amount_max'              => 'μέγιστο ποσό',
        'title'                   => 'τίτλος',
        'tag'                     => 'ετικέτα',
        'transaction_description' => 'περιγραφή συναλλαγής',
        'rule-action-value.1'     => 'τιμή ενέργειας κανόνα #1',
        'rule-action-value.2'     => 'τιμή ενέργειας κανόνα #2',
        'rule-action-value.3'     => 'τιμή ενέργειας κανόνα #3',
        'rule-action-value.4'     => 'τιμή ενέργειας κανόνα #4',
        'rule-action-value.5'     => 'τιμή ενέργειας κανόνα #5',
        'rule-action.1'           => 'ενέργεια κανόνα #1',
        'rule-action.2'           => 'ενέργεια κανόνα #2',
        'rule-action.3'           => 'ενέργεια κανόνα #3',
        'rule-action.4'           => 'ενέργεια κανόνα #4',
        'rule-action.5'           => 'ενέργεια κανόνα #5',
        'rule-trigger-value.1'    => 'τιμή κριτηρίου κανόνα #1',
        'rule-trigger-value.2'    => 'τιμή κριτηρίου κανόνα #2',
        'rule-trigger-value.3'    => 'τιμή κριτηρίου κανόνα #3',
        'rule-trigger-value.4'    => 'τιμή κριτηρίου κανόνα #4',
        'rule-trigger-value.5'    => 'τιμή κριτηρίου κανόνα #5',
        'rule-trigger.1'          => 'κριτήριο κανόνα #1',
        'rule-trigger.2'          => 'κριτήριο κανόνα #2',
        'rule-trigger.3'          => 'κριτήριο κανόνα #3',
        'rule-trigger.4'          => 'κριτήριο κανόνα #4',
        'rule-trigger.5'          => 'κριτήριο κανόνα #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'     => 'Πρέπει να λάβετε ένα έγκυρο αναγνωριστικό λογαριασμού προέλευσης και/ή ένα έγκυρο όνομα λογαριασμού προέλευσης για να συνεχίσετε.',
    'withdrawal_source_bad_data'      => '[a] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'withdrawal_dest_need_data'       => '[a] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'withdrawal_dest_bad_data'        => 'Δεν ήταν δυνατή η εύρεση ενός έγκυρου λογαριασμού προορισμού κατά την αναζήτηση του αναγνωριστικού ID ":id" ή του ονόματος ":name".',

    'withdrawal_dest_iban_exists'     => 'This destination account IBAN is already in use by an asset account or a liability and cannot be used as a withdrawal destination.',
    'deposit_src_iban_exists'         => 'This source account IBAN is already in use by an asset account or a liability and cannot be used as a deposit source.',

    'reconciliation_source_bad_data'  => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data'         => '[e] Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data'        => 'Πρέπει να λάβετε ένα έγκυρο αναγνωριστικό ID λογαριασμού προέλευσης και/ή ένα έγκυρο όνομα λογαριασμού προέλευσης για να συνεχίσετε.',
    'deposit_source_bad_data'         => '[b] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'deposit_dest_need_data'          => '[b] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'deposit_dest_bad_data'           => 'Δεν ήταν δυνατή η εύρεση ενός έγκυρου λογαριασμού προορισμού κατά την αναζήτηση του αναγνωριστικού ID ":id" ή του ονόματος ":name".',
    'deposit_dest_wrong_type'         => 'O υποβεβλημένος λογαριασμός προέλευσης δεν είναι σωστού τύπου.',

    // Ignore this comment

    'transfer_source_need_data'       => 'Πρέπει να λάβετε ένα έγκυρο αναγνωριστικό λογαριασμού προέλευσης και/ή ένα έγκυρο όνομα λογαριασμού προέλευσης για να συνεχίσετε.',
    'transfer_source_bad_data'        => '[c] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'transfer_dest_need_data'         => '[c] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'transfer_dest_bad_data'          => 'Δεν ήταν δυνατή η εύρεση ενός έγκυρου λογαριασμού προορισμού κατά την αναζήτηση του αναγνωριστικού ID ":id" ή του ονόματος ":name".',
    'need_id_in_edit'                 => 'Κάθε διαχωρισμός πρέπει να έχει transaction_journal_id (είτε έγκυρο αναγνωριστικό ID ή 0).',

    'ob_source_need_data'             => 'Πρέπει να λάβετε ένα έγκυρο αναγνωριστικό λογαριασμού προέλευσης και/ή ένα έγκυρο όνομα λογαριασμού προέλευσης για να συνεχίσετε.',
    'lc_source_need_data'             => 'Πρέπει να λάβετε ένα έγκυρο ID λογαριασμού προέλευσης για να συνεχίσετε.',
    'ob_dest_need_data'               => '[d] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'                => 'Δεν ήταν δυνατή η εύρεση ενός έγκυρου λογαριασμού προορισμού κατά την αναζήτηση του αναγνωριστικού ID ":id" ή του ονόματος ":name".',
    'reconciliation_either_account'   => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'          => 'Δεν μπορείτε να χρησιμοποιήσετε αυτό το λογαριασμό ως λογαριασμό προέλευσης.',
    'generic_invalid_destination'     => 'Δεν μπορείτε να χρησιμοποιήσετε αυτό το λογαριασμό ως λογαριασμό προορισμού.',

    'generic_no_source'               => 'You must submit source account information or submit a transaction journal ID.',
    'generic_no_destination'          => 'You must submit destination account information or submit a transaction journal ID.',

    'gte.numeric'                     => 'Το :attribute πρέπει να είναι μεγαλύτερο ή ίσο με :value.',
    'gt.numeric'                      => 'Το :attribute πρέπει να είναι μεγαλύτερο από :value.',
    'gte.file'                        => 'Το :attribute πρέπει να είναι μεγαλύτερο ή ίσο με :value kilobytes.',
    'gte.string'                      => 'Το :attribute πρέπει να είναι μεγαλύτερο ή ίσο με :value χαρακτήρες.',
    'gte.array'                       => 'Το :attribute πρέπει να έχει :value αντικείμενα ή παραπάνω.',

    'amount_required_for_auto_budget' => 'Πρέπει να συμπληρωθεί το ποσό.',
    'auto_budget_amount_positive'     => 'Το ποσό πρέπει να είναι μεγαλύτερο από το μηδέν.',

    'auto_budget_period_mandatory'    => 'Η περίοδος αυτόματου προϋπολογισμού είναι υποχρεωτικό πεδίο.',

    // no access to administration:
    'no_access_user_group'            => 'Δεν έχετε τα σωστά δικαιώματα πρόσβασης για αυτή τη διαχείριση.',
];

// Ignore this comment
