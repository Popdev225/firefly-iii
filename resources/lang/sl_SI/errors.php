<?php

/**
 * firefly.php
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
    '404_header'              => 'Firefly III ne najde te strani.',
    '404_page_does_not_exist' => 'Stran, ki ste jo zahtevali, ne obstaja. Preverite, ali niste vnesli napačnega URL-ja. Ste se morda zmotili?',
    '404_send_error'          => 'Če ste bili samodejno preusmerjeni na to stran, sprejmite moje opravičilo. Ta napaka je omenjena v vaših dnevniških datotekah in hvaležen vam bom, če mi to napako pošljete.',
    '404_github_link'         => 'Če ste prepričani, da bi ta stran morala obstajati, odprite težavo na <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub-u</a></strong>.',
    'whoops'                  => 'Ups!',
    'fatal_error'             => 'Prišlo je do usodne napake. Preverite dnevniške datoteke v "storage/logs" ali uporabite "docker logs -f [container]", da vidite, kaj se dogaja.',
    'maintenance_mode'        => 'Firefly III je v vzdrževalnem načinu.',
    'be_right_back'           => 'Takoj se vrnem!',
    'check_back'              => 'Firefly III ne deluje zaradi potrebnega vzdrževanja. Preverite znova čez sekundo.',
    'error_occurred'          => 'Ups! Zgodila se je napaka.',
    'db_error_occurred'       => 'Ups! Prišlo je do napake v podatkovni bazi.',
    'error_not_recoverable'   => 'Na žalost te napake ni bilo mogoče obnoviti :(. Firefly III se je pokvaril. Napaka je:',
    'error'                   => 'Napaka',
    'error_location'          => 'Do te napake je prišlo v datoteki <span style="font-family: monospace;">:file</span> v vrstici :line s kodo :code.',
    'stacktrace'              => 'Sled sklada',
    'more_info'               => 'Več informacij',

    // Ignore this comment

    'collect_info'            => 'Zberite več informacij v imeniku <code>storage/logs</code>, kjer boste našli dnevniške datoteke. Če uporabljate Docker, uporabite <code>docker logs -f [container]</code>.',
    'collect_info_more'       => 'Več o zbiranju informacij o napakah lahko preberete v <a href="https://docs.firefly-iii.org/how-to/general/debug/">pogostih vprašanjih</a>.',
    'github_help'             => 'Pridobite pomoč na GitHub-u',
    'github_instructions'     => 'Vabimo vas, da odprete novo težavo <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">na GitHub-u</a></strong>.',
    'use_search'              => 'Uporabite iskanje!',
    'include_info'            => 'Vključite informacije <a href=":link">s te strani za odpravljanje napak</a>.',
    'tell_more'               => 'Povejte nam kaj več kot "pravi Ups!"',
    'include_logs'            => 'Vključite dnevnike napak (glejte zgoraj).',
    'what_did_you_do'         => 'Povejte nam, kaj ste počeli.',
    'offline_header'          => 'Verjetno ste brez povezave',
    'offline_unreachable'     => 'Firefly III je nedosegljiv. Vaša naprava je trenutno brez povezave ali pa strežnik ne deluje.',
    'offline_github'          => 'Če ste prepričani, da sta vaša naprava in strežnik povezana, odprite težavo na <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub-u</a> </strong>.',
];
