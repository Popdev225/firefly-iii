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
    '404_header'              => 'FIrefly III no pot trobar aquesta pàgina.',
    '404_page_does_not_exist' => 'La pàgina que has sol·licitat no existeix. Si us plau, comprova que no has introduït un URL erroni. Has comès un error tipogràfic?',
    '404_send_error'          => 'Si has estat redirigit a aquesta pàgina automàticament, si us plau, accepta les meves disculpes. Hi ha una menció d\'aquest error als fitxers de registre, i t\'agrairia que me l\'enviessis.',
    '404_github_link'         => 'Si n\'estàs segur que aquesta pàgina hauria d\'existir, si us plau, obre un tiquet a <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'whoops'                  => 'Ups',
    'fatal_error'             => 'Hi ha hagut un error crític. Si us plau, comprova els fitxers de registre a "emmagatzematge/registre" o utilitza "docker logs -f [container]" per veure què està passant.',
    'maintenance_mode'        => 'Firefly III està en mode de manteniment.',
    'be_right_back'           => 'Fins ara!',
    'check_back'              => 'Firefly III no està disponible per manteniment. Si us plau, torni en un moment.',
    'error_occurred'          => 'Ups! Hi ha hagut un error.',
    'db_error_occurred'       => 'Ups! Hi ha hagut un error a la base de dades.',
    'error_not_recoverable'   => 'Malauradament, no s\'ha pogut recuperar d\'aquest error :(. Firefly III s\'ha trencat. L\'error és:',
    'error'                   => 'Error',
    'error_location'          => 'L\'error ha succeït a l\'arxiu <span style="font-family: monospace;">:file</span> a la línia :line amb codi :code.',
    'stacktrace'              => 'Traça de la pila',
    'more_info'               => 'Més informació',

    // Ignore this comment

    'collect_info'            => 'Si us plau, recopili més informació al directori <code>emmagatzematge/registre</code> on hi ha els fitxers de registre. Si utilitzes Docker, utilitza <code>docker logs -f [container]</code>.',
    'collect_info_more'       => 'Pots llegir més sobre la recol·lecció d\'errors a <a href="https://docs.firefly-iii.org/how-to/general/debug/">les FAQ</a>.',
    'github_help'             => 'Obtenir ajuda a GitHub',
    'github_instructions'     => 'Ets més que benvingut a obrir un nou issue <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">a GitHub</a></strong>.',
    'use_search'              => 'Utilitza la cerca!',
    'include_info'            => 'Inclou la informació <a href=":link">d\'aquesta pàgina de depuració</a>.',
    'tell_more'               => 'Explica\'ns més que "diu Ups"',
    'include_logs'            => 'Inclou els registres d\'errors (mirar a sobre).',
    'what_did_you_do'         => 'Explica\'ns el que estaves fent.',
    'offline_header'          => 'Probablement estàs desconnectat',
    'offline_unreachable'     => 'Firefly III no es troba accessible. El teu dispositiu està desconnectat o el servidor no funciona.',
    'offline_github'          => 'Si n\'estàs segur que el teu dispositiu i el servidor estan connectats, si us plau, obre un tiquet a <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
];
