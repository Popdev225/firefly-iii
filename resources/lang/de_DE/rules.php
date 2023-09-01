<?php

declare(strict_types=1);
/*
 * rules.php
 * Copyright (c) 2023 james@firefly-iii.org
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


return [
    'main_message'                                => 'Aktion ":action", vorhanden in Regel ":rule", konnte nicht auf Transaktion #:group angewendet werden: :error',
    'find_or_create_tag_failed'                   => 'Konnte Schlagwort ":tag" nicht finden oder erstellen',
    'tag_already_added'                           => 'Schlagwort ":tag" ist bereits mit dieser Buchung verknüpft',
    'inspect_transaction'                         => 'Buchung ":title" untersuchen @ Firefly III',
    'inspect_rule'                                => 'Regel ":title" untersuchen @ Firefly III',
    'journal_other_user'                          => 'Diese Buchung gehört nicht zum Benutzer',
    'no_such_journal'                             => 'Diese Buchung existiert nicht',
    'journal_already_no_budget'                   => 'Diese Buchung hat kein Budget, daher kann sie nicht entfernt werden',
    'journal_already_no_category'                 => 'Diese Buchung hatte keine Kategorie, daher kann sie nicht entfernt werden',
    'journal_already_no_notes'                    => 'Diese Buchung hatte keine Notizen, daher können sie nicht entfernt werden',
    'journal_not_found'                           => 'Firefly III kann die angeforderte Buchung nicht finden',
    'split_group'                                 => 'Firefly III kann diese Aktion bei einer Buchung mit mehreren Aufteilungen nicht ausführen',
    'is_already_withdrawal'                       => 'Diese Buchung ist bereits eine Ausgabe',
    'is_already_deposit'                          => 'Diese Buchung ist bereits eine Einnahme',
    'is_already_transfer'                         => 'Diese Buchung ist bereits eine Umbuchung',
    'is_not_transfer'                             => 'Diese Buchung ist keine Überweisung',
    'complex_error'                               => 'Etwas kompliziertes ist schief gelaufen. Bitte die Protokolle von Firefly III überprüfen',
    'no_valid_opposing'                           => 'Conversion failed because there is no valid account named ":account"',
    'new_notes_empty'                             => 'Die zu setzenden Notizen sind leer',
    'unsupported_transaction_type_withdrawal'     => 'Firefly III cannot convert a ":type" to a withdrawal',
    'unsupported_transaction_type_deposit'        => 'Firefly III cannot convert a ":type" to a deposit',
    'unsupported_transaction_type_transfer'       => 'Firefly III cannot convert a ":type" to a transfer',
    'already_has_source_asset'                    => 'This transaction already has ":name" as the source asset account',
    'already_has_destination_asset'               => 'This transaction already has ":name" as the destination asset account',
    'already_has_destination'                     => 'This transaction already has ":name" as the destination account',
    'already_has_source'                          => 'This transaction already has ":name" as the source account',
    'already_linked_to_subscription'              => 'The transaction is already linked to subscription ":name"',
    'cannot_find_subscription'                    => 'Firefly III can\'t find subscription ":name"',
    'no_notes_to_move'                            => 'The transaction has no notes to move to the description field',
    'no_tags_to_remove'                           => 'Die Buchung hat keine Schlagworte zum Entfernen',
    'cannot_find_tag'                             => 'Firefly III kann Schlagwort ":tag" nicht finden',
    'cannot_find_asset'                           => 'Firefly III kann kein Girokonto ":name" finden',
    'cannot_find_accounts'                        => 'Firefly III kann das Quell- oder Zielkonto nicht finden',
    'cannot_find_source_transaction'              => 'Firefly III can\'t find the source transaction',
    'cannot_find_destination_transaction'         => 'Firefly III can\'t find the destination transaction',
    'cannot_find_source_transaction_account'      => 'Firefly III can\'t find the source transaction account',
    'cannot_find_destination_transaction_account' => 'Firefly III can\'t find the destination transaction account',
    'cannot_find_piggy'                           => 'Firefly III kann kein Sparschwein mit dem Namen ":name" finden',
    'no_link_piggy'                               => 'Die Konten dieser Buchung sind nicht mit dem Sparschwein verbunden, daher wird nichts gemacht',
    'cannot_unlink_tag'                           => 'Schlagwort ":tag" ist nicht mit dieser Buchung verknüpft',
    'cannot_find_budget'                          => 'Firefly III kann kein Budget ":name" finden',
    'cannot_find_category'                        => 'Firefly III kann die Kategorie ":name" nicht finden',
    'cannot_set_budget'                           => 'Firefly III kann das Budget ":name" nicht auf eine Buchung vom Typ ":type" setzen',
];
