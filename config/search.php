<?php

return [
    'operators' => [
        'user_action'                     => ['alias' => false, 'needs_context' => true,],
        'account_id'                      => ['alias' => false, 'needs_context' => true,],
        'source_account_id'               => ['alias' => false, 'needs_context' => true,],
        'destination_account_id'          => ['alias' => false, 'needs_context' => true,],
        'transaction_type'                => ['alias' => false, 'needs_context' => true,],
        'type'                            => ['alias' => true, 'alias_for' => 'transaction_type', 'needs_context' => true,],
        'tag_is'                          => ['alias' => false, 'needs_context' => true,],
        'tag_is_not'                      => ['alias' => false, 'needs_context' => true,],
        'tag'                             => ['alias' => true, 'alias_for' => 'tag_is', 'needs_context' => true,],
        'description_is'                  => ['alias' => false, 'needs_context' => true,],
        'description'                     => ['alias' => true, 'alias_for' => 'description_is', 'needs_context' => true,],
        'description_contains'            => ['alias' => false, 'needs_context' => true,],
        'description_ends'                => ['alias' => false, 'needs_context' => true,],
        'description_starts'              => ['alias' => false, 'needs_context' => true,],
        'notes_is'                        => ['alias' => false, 'needs_context' => true,],
        'notes_contains'                  => ['alias' => false, 'needs_context' => true,],
        'notes'                           => ['alias' => true, 'alias_for' => 'notes_contains', 'needs_context' => true,],
        'notes_ends'                      => ['alias' => false, 'needs_context' => true,],
        'notes_starts'                    => ['alias' => false, 'needs_context' => true,],
        'source_account_is'               => ['alias' => false, 'needs_context' => true,],
        'from_account_is'                 => ['alias' => true, 'alias_for' => 'source_account_is', 'needs_context' => true,],
        'source_account_contains'         => ['alias' => false, 'needs_context' => true,],
        'source'                          => ['alias' => true, 'alias_for' => 'source_account_contains', 'needs_context' => true,],
        'from'                            => ['alias' => true, 'alias_for' => 'source_account_contains', 'needs_context' => true,],
        'from_account_contains'           => ['alias' => true, 'alias_for' => 'source_account_contains', 'needs_context' => true,],
        'source_account_ends'             => ['alias' => false, 'needs_context' => true,],
        'from_account_ends'               => ['alias' => true, 'alias_for' => 'source_account_ends', 'needs_context' => true,],
        'source_account_starts'           => ['alias' => false, 'needs_context' => true,],
        'from_account_starts'             => ['alias' => true, 'alias_for' => 'source_account_starts', 'needs_context' => true,],
        'source_account_nr_is'            => ['alias' => false, 'needs_context' => true,],
        'from_account_nr_is'              => ['alias' => true, 'alias_for' => 'source_account_nr_is', 'needs_context' => true,],
        'source_account_nr_contains'      => ['alias' => false, 'needs_context' => true,],
        'from_account_nr_contains'        => ['alias' => true, 'alias_for' => 'source_account_nr_contains', 'needs_context' => true,],
        'source_account_nr_ends'          => ['alias' => false, 'needs_context' => true,],
        'from_account_nr_ends'            => ['alias' => true, 'alias_for' => 'source_account_nr_ends', 'needs_context' => true,],
        'source_account_nr_starts'        => ['alias' => false, 'needs_context' => true,],
        'from_account_nr_starts'          => ['alias' => true, 'alias_for' => 'source_account_nr_starts', 'needs_context' => true,],
        'destination_account_is'          => ['alias' => false, 'needs_context' => true,],
        'to_account_is'                   => ['alias' => true, 'alias_for' => 'destination_account_is', 'needs_context' => true,],
        'destination_account_contains'    => ['alias' => false, 'needs_context' => true,],
        'destination'                     => ['alias' => true, 'alias_for' => 'destination_account_contains', 'needs_context' => true,],
        'to'                              => ['alias' => true, 'alias_for' => 'destination_account_contains', 'needs_context' => true,],
        'to_account_contains'             => ['alias' => true, 'alias_for' => 'destination_account_contains', 'needs_context' => true,],
        'destination_account_ends'        => ['alias' => false, 'needs_context' => true,],
        'to_account_ends'                 => ['alias' => true, 'alias_for' => 'destination_account_ends', 'needs_context' => true,],
        'destination_account_starts'      => ['alias' => false, 'needs_context' => true,],
        'to_account_starts'               => ['alias' => true, 'alias_for' => 'destination_account_starts', 'needs_context' => true,],
        'destination_account_nr_is'       => ['alias' => false, 'needs_context' => true,],
        'to_account_nr_is'                => ['alias' => true, 'alias_for' => 'destination_account_nr_is', 'needs_context' => true,],
        'destination_account_nr_contains' => ['alias' => false, 'needs_context' => true,],
        'to_account_nr_contains'          => ['alias' => true, 'alias_for' => 'destination_account_nr_contains', 'needs_context' => true,],
        'destination_account_nr_ends'     => ['alias' => false, 'needs_context' => true,],
        'to_account_nr_ends'              => ['alias' => true, 'alias_for' => 'destination_account_nr_ends', 'needs_context' => true,],
        'destination_account_nr_starts'   => ['alias' => false, 'needs_context' => true,],
        'to_account_nr_starts'            => ['alias' => true, 'alias_for' => 'destination_account_nr_starts', 'needs_context' => true,],
        'account_is'                      => ['alias' => false, 'needs_context' => true,],
        'account_contains'                => ['alias' => false, 'needs_context' => true,],
        'account_ends'                    => ['alias' => false, 'needs_context' => true,],
        'account_starts'                  => ['alias' => false, 'needs_context' => true,],
        'account_nr_is'                   => ['alias' => false, 'needs_context' => true,],
        'account_nr_contains'             => ['alias' => false, 'needs_context' => true,],
        'account_nr_ends'                 => ['alias' => false, 'needs_context' => true,],
        'account_nr_starts'               => ['alias' => false, 'needs_context' => true,],
        'category_is'                     => ['alias' => false, 'needs_context' => true,],
        'category_contains'               => ['alias' => false, 'needs_context' => true,],
        'category'                        => ['alias' => true, 'alias_for' => 'category_contains', 'needs_context' => true,],
        'category_ends'                   => ['alias' => false, 'needs_context' => true,],
        'category_starts'                 => ['alias' => false, 'needs_context' => true,],
        'budget_is'                       => ['alias' => false, 'needs_context' => true,],
        'budget_contains'                 => ['alias' => false, 'needs_context' => true,],
        'budget'                          => ['alias' => true, 'alias_for' => 'budget_contains', 'needs_context' => true,],
        'budget_ends'                     => ['alias' => false, 'needs_context' => true,],
        'budget_starts'                   => ['alias' => false, 'needs_context' => true,],
        'bill_is'                         => ['alias' => false, 'needs_context' => true,],
        'bill_contains'                   => ['alias' => false, 'needs_context' => true,],
        'bill'                            => ['alias' => true, 'alias_for' => 'bill_contains', 'needs_context' => true,],
        'bill_ends'                       => ['alias' => false, 'needs_context' => true,],
        'bill_starts'                     => ['alias' => false, 'needs_context' => true,],
        'external_id_is'                  => ['alias' => false, 'needs_context' => true,],
        'external_id_contains'            => ['alias' => false, 'needs_context' => true,],
        'external_id'                     => ['alias' => true, 'alias_for' => 'external_id_contains', 'needs_context' => true,],
        'external_id_ends'                => ['alias' => false, 'needs_context' => true,],
        'external_id_starts'              => ['alias' => false, 'needs_context' => true,],

        'internal_reference_is'           => ['alias' => false, 'needs_context' => true,],
        'internal_reference_contains'     => ['alias' => false, 'needs_context' => true,],
        'internal_reference'              => ['alias' => true, 'alias_for' => 'internal_reference_contains', 'needs_context' => true,],
        'internal_reference_ends'         => ['alias' => false, 'needs_context' => true,],
        'internal_reference_starts'       => ['alias' => false, 'needs_context' => true,],

        // TODO here we are.
        'external_url_is'                 => ['alias' => false, 'needs_context' => true,],
        'external_url_contains'           => ['alias' => false, 'needs_context' => true,],
        'external_url'                    => ['alias' => true, 'alias_for' => 'external_url_contains', 'needs_context' => true,],
        'external_url_ends'               => ['alias' => false, 'needs_context' => true,],
        'external_url_starts'             => ['alias' => false, 'needs_context' => true,],
        'has_attachments'                 => ['alias' => false, 'needs_context' => false,],
        'has_any_category'                => ['alias' => false, 'needs_context' => false,],
        'has_any_budget'                  => ['alias' => false, 'needs_context' => false,],
        'has_any_bill'                    => ['alias' => false, 'needs_context' => false,],
        'has_any_tag'                     => ['alias' => false, 'needs_context' => false,],
        'any_notes'                       => ['alias' => false, 'needs_context' => false,],
        'any_external_url'                => ['alias' => false, 'needs_context' => false,],
        'has_no_attachments'              => ['alias' => false, 'needs_context' => false,],
        'has_no_category'                 => ['alias' => false, 'needs_context' => false,],
        'has_no_budget'                   => ['alias' => false, 'needs_context' => false,],
        'has_no_bill'                     => ['alias' => false, 'needs_context' => false,],
        'has_no_tag'                      => ['alias' => false, 'needs_context' => false,],
        'no_notes'                        => ['alias' => false, 'needs_context' => false,],
        'no_external_url'                 => ['alias' => false, 'needs_context' => false,],
        'source_is_cash'                  => ['alias' => false, 'needs_context' => false,],
        'destination_is_cash'             => ['alias' => false, 'needs_context' => false,],
        'account_is_cash'                 => ['alias' => false, 'needs_context' => false,],
        'currency_is'                     => ['alias' => false, 'needs_context' => true,],
        'foreign_currency_is'             => ['alias' => false, 'needs_context' => true,],
        'id'                              => ['alias' => false, 'trigger_class' => '', 'needs_context' => true,],
        'journal_id'                      => ['alias' => false, 'trigger_class' => '', 'needs_context' => true,],
        'recurrence_id'                   => ['alias' => false, 'trigger_class' => '', 'needs_context' => true,],
        'date_on'                         => ['alias' => false, 'needs_context' => true,],
        'date'                            => ['alias' => true, 'alias_for' => 'date_on', 'needs_context' => true,],
        'date_is'                         => ['alias' => true, 'alias_for' => 'date_on', 'needs_context' => true,],
        'on'                              => ['alias' => true, 'alias_for' => 'date_on', 'needs_context' => true,],
        'date_before'                     => ['alias' => false, 'needs_context' => true,],
        'before'                          => ['alias' => true, 'alias_for' => 'date_before', 'needs_context' => true,],
        'date_after'                      => ['alias' => false, 'needs_context' => true,],
        'after'                           => ['alias' => true, 'alias_for' => 'date_after', 'needs_context' => true,],
        'interest_date_on'                => ['alias' => false, 'needs_context' => true,],
        'interest_date'                   => ['alias' => true, 'alias_for' => 'interest_date_on', 'needs_context' => true,],
        'interest_date_is'                => ['alias' => true, 'alias_for' => 'interest_date_on', 'needs_context' => true,],
        'interest_date_before'            => ['alias' => false, 'needs_context' => true,],
        'interest_date_after'             => ['alias' => false, 'needs_context' => true,],
        'book_date_on'                    => ['alias' => false, 'needs_context' => true,],
        'book_date'                       => ['alias' => true, 'alias_for' => 'book_date_on', 'needs_context' => true,],
        'book_date_is'                    => ['alias' => true, 'alias_for' => 'book_date_on', 'needs_context' => true,],
        'book_date_before'                => ['alias' => false, 'needs_context' => true,],
        'book_date_after'                 => ['alias' => false, 'needs_context' => true,],
        'process_date_on'                 => ['alias' => false, 'needs_context' => true,],
        'process_date'                    => ['alias' => true, 'alias_for' => 'process_date_on', 'needs_context' => true,],
        'process_date_is'                 => ['alias' => true, 'alias_for' => 'process_date_on', 'needs_context' => true,],
        'process_date_before'             => ['alias' => false, 'needs_context' => true,],
        'process_date_after'              => ['alias' => false, 'needs_context' => true,],
        'due_date_on'                     => ['alias' => false, 'needs_context' => true,],
        'due_date'                        => ['alias' => true, 'alias_for' => 'due_date_on', 'needs_context' => true,],
        'due_date_is'                     => ['alias' => true, 'alias_for' => 'due_date_on', 'needs_context' => true,],
        'due_date_before'                 => ['alias' => false, 'needs_context' => true,],
        'due_date_after'                  => ['alias' => false, 'needs_context' => true,],
        'payment_date_on'                 => ['alias' => false, 'needs_context' => true,],
        'payment_date'                    => ['alias' => true, 'alias_for' => 'payment_date_on', 'needs_context' => true,],
        'payment_date_is'                 => ['alias' => true, 'alias_for' => 'payment_date_on', 'needs_context' => true,],
        'payment_date_before'             => ['alias' => false, 'needs_context' => true,],
        'payment_date_after'              => ['alias' => false, 'needs_context' => true,],
        'invoice_date_on'                 => ['alias' => false, 'needs_context' => true,],
        'invoice_date'                    => ['alias' => true, 'alias_for' => 'invoice_date_on', 'needs_context' => true,],
        'invoice_date_is'                 => ['alias' => true, 'alias_for' => 'invoice_date_on', 'needs_context' => true,],
        'invoice_date_before'             => ['alias' => false, 'needs_context' => true,],
        'invoice_date_after'              => ['alias' => false, 'needs_context' => true,],
        'created_at_on'                   => ['alias' => false, 'needs_context' => true,],
        'created_at'                      => ['alias' => true, 'alias_for' => 'created_at_on', 'needs_context' => true,],
        'created_at_is'                   => ['alias' => true, 'alias_for' => 'created_at_on', 'needs_context' => true,],
        'created_at_before'               => ['alias' => false, 'needs_context' => true,],
        'created_at_after'                => ['alias' => false, 'needs_context' => true,],
        'updated_at_on'                   => ['alias' => false, 'needs_context' => true,],
        'updated_at'                      => ['alias' => true, 'alias_for' => 'updated_at_on', 'needs_context' => true,],
        'updated_at_is'                   => ['alias' => true, 'alias_for' => 'updated_at_on', 'needs_context' => true,],
        'updated_at_before'               => ['alias' => false, 'needs_context' => true,],
        'updated_at_after'                => ['alias' => false, 'needs_context' => true,],
        'created_on_on'                   => ['alias' => true, 'alias_for' => 'created_at_on', 'needs_context' => true,],
        'created_on'                      => ['alias' => true, 'alias_for' => 'created_at', 'needs_context' => true,],
        'created_on_before'               => ['alias' => true, 'alias_for' => 'created_at_before', 'needs_context' => true,],
        'created_on_after'                => ['alias' => true, 'alias_for' => 'created_at_after', 'needs_context' => true,],
        'updated_on_on'                   => ['alias' => true, 'alias_for' => 'updated_at_on', 'needs_context' => true,],
        'updated_on'                      => ['alias' => true, 'alias_for' => 'updated_at', 'needs_context' => true,],
        'updated_on_before'               => ['alias' => true, 'alias_for' => 'updated_at_before', 'needs_context' => true,],
        'updated_on_after'                => ['alias' => true, 'alias_for' => 'updated_at_after', 'needs_context' => true,],
        'amount_is'                       => ['alias' => false, 'needs_context' => true,],
        'amount'                          => ['alias' => true, 'alias_for' => 'amount_is', 'needs_context' => true,],
        'amount_exactly'                  => ['alias' => true, 'alias_for' => 'amount_is', 'needs_context' => true,],
        'amount_less'                     => ['alias' => false, 'needs_context' => true,],
        'amount_max'                      => ['alias' => true, 'alias_for' => 'amount_less', 'needs_context' => true,],
        'amount_more'                     => ['alias' => false, 'needs_context' => true,],
        'amount_min'                      => ['alias' => true, 'alias_for' => 'amount_more', 'needs_context' => true,],
        'foreign_amount_is'               => ['alias' => false, 'needs_context' => true,],
        'foreign_amount'                  => ['alias' => true, 'alias_for' => 'foreign_amount_is', 'needs_context' => true,],
        'foreign_amount_less'             => ['alias' => false, 'needs_context' => true,],
        'foreign_amount_max'              => ['alias' => true, 'alias_for' => 'foreign_amount_less', 'needs_context' => true,],
        'foreign_amount_more'             => ['alias' => false, 'needs_context' => true,],
        'foreign_amount_min'              => ['alias' => true, 'alias_for' => 'foreign_amount_more', 'needs_context' => true,],
    ],
];