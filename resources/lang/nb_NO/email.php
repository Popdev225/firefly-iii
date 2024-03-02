<?php

/**
 * email.php
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
    // common items
    'greeting'                                => 'Hei der,',
    'closing'                                 => 'Biip Boop,',
    'signature'                               => 'Fra din vennlige Firefly III epost robot',
    'footer_ps'                               => 'PS: Denne meldingen ble sendt fordi en forespørsel fra IP :ipAddress utløste den.',

    // admin test
    'admin_test_subject'                      => 'En testmelding fra Firefly III-installasjonen',
    'admin_test_body'                         => 'Dette er en testmelding fra din Firefly III-instans. Den ble sendt til :email.',

    // Ignore this comment

    // invite
    'invitation_created_subject'              => 'En invitasjon har blitt opprettet',
    'invitation_created_body'                 => 'Admin bruker ":email" opprettet en brukerinvitasjon til ":invitee. Invitasjonen vil være gyldig i 48 timer.',
    'invite_user_subject'                     => 'Du har blitt invitert til å lage en Firefly III-konto.',
    'invitation_introduction'                 => 'Du har blitt invitert til å lage en Firefly III konto på **:host**. Firefly III er en personlig, "self-hosted" privat finansforvalter. Alle de kule barna bruker den.',
    'invitation_invited_by'                   => 'Du har blitt invitert av ":admin" og denne invitasjonen ble sendt til ":invitee. Det er deg, ikke sant?',
    'invitation_url'                          => 'Invitasjonen er gyldig i 48 timer og kan løses inn ved å gå til [Firefly III](:url. Nyt!',

    // new IP
    'login_from_new_ip'                       => 'Ny pålogging på Firefly III',
    'slack_login_from_new_ip'                 => 'Ny Firefly III innlogging fra IP :ip (:host)',
    'new_ip_body'                             => 'Firefly III oppdaget en ny pålogging på kontoen fra en ukjent IP-adresse. Hvis du aldri har logget inn fra IP-adressen under, eller det har vært mer enn et halvt år siden, vil Firefly III advare deg.',
    'new_ip_warning'                          => 'Hvis du gjenkjenner denne IP-adressen eller påloggingen, kan du ignorere denne meldingen. Hvis du ikke har logget inn, så har du ikke peiling på hva dette gjelder, bekreft passordsikkerhet, endre det, og logg ut alle økter. For å gjøre dette, gå til profilsiden. Selvsagt har du 2FA aktivert allerede, ikke sant? Vær trygg!',
    'ip_address'                              => 'IP-adresse',
    'host_name'                               => 'Vert',
    'date_time'                               => 'Dato + klokkeslett',

    // access token created
    'access_token_created_subject'            => 'En ny tilgangstoken ble opprettet',
    'access_token_created_body'               => 'Noen (forhåpentligvis du) har nettopp opprettet en ny Firefly III API Access Token for brukerkontoen din.',
    'access_token_created_explanation'        => 'Med denne token, kan de få tilgang til **alle** av dine finansielle poster gjennom Firefly III API.',
    'access_token_created_revoke'             => 'Hvis dette ikke var deg, vennligst fjern dette tokenet så snart som mulig på :url',

    // registered
    'registered_subject'                      => 'Velkommen til Firefly III!',
    'registered_subject_admin'                => 'En ny bruker har registrert seg',
    'admin_new_user_registered'               => 'En ny bruker har registrert seg. Bruker **:email har fått ID #:id.',
    'registered_welcome'                      => 'Velkommen til [Firefly III](:address). Din registrering er fullført, og denne e-posten er her for å bekrefte det. Kanon!',
    'registered_pw'                           => 'Hvis du har glemt passordet ditt allerede, kan du tilbakestille det ved å bruke [passord reset tool](:address/password/reset).',
    'registered_help'                         => 'Det er et hjelp-ikon i hjørnet øverst til høyre på hver side. Hvis du trenger hjelp, kan du klikke på den!',
    'registered_closing'                      => 'Kos deg!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Tilbakestill passord:',
    'registered_doc_link'                     => 'Dokumentasjon:',

    // Ignore this comment

    // new version
    'new_version_email_subject'               => 'En ny Firefly III versjon er tilgjengelig',

    // email change
    'email_change_subject'                    => 'Din Firefly III e-postadresse er endret',
    'email_change_body_to_new'                => 'Du eller noen med tilgang til din Firefly III konto har endret e-postadressen din. Hvis du ikke forventet denne meldingen, kan du se bort fra og slette den.',
    'email_change_body_to_old'                => 'Du eller noen med tilgang til din Firefly III konto har endret e-postadressen din. Hvis du ikke forventet dette, så må du **må** følge "angre"-koblingen nedenfor for å beskytte kontoen din!',
    'email_change_ignore'                     => 'Hvis du initierte denne endringen, kan du trygt ignorere denne meldingen.',
    'email_change_old'                        => 'Den gamle e-postadressen var: :email',
    'email_change_old_strong'                 => 'Den gamle e-postadressen var: **:email',
    'email_change_new'                        => 'Den nye e-postadressen er: :email',
    'email_change_new_strong'                 => 'Den nye e-postadressen er: **:email',
    'email_change_instructions'               => 'Du kan ikke bruke Firefly III før du bekrefter denne endringen. Følg linken nedenfor for å gjøre det.',
    'email_change_undo_link'                  => 'For å angre endringen, følg denne linken:',

    // OAuth token created
    'oauth_created_subject'                   => 'En ny OAuth-klient er opprettet',
    'oauth_created_body'                      => 'Noen (forhåpentligvis du) har nettopp opprettet en ny Firefly III API OAuth Client for din brukerkonto. Den er merket ":name" og har tilbakeringing URL `:url`.',
    'oauth_created_explanation'               => 'Med denne kunden, får de tilgang til **alle** av dine finansielle poster gjennom Firefly III API.',
    'oauth_created_undo'                      => 'Hvis dette ikke var deg, vennligst slette denne klienten så snart som mulig ved `:url',

    // reset password
    'reset_pw_subject'                        => 'Din forespørsel om tilbakestilling av passord',
    'reset_pw_instructions'                   => 'Noen prøvde å tilbakestille passordet ditt. Hvis det var deg, vennligst følg linken nedenfor for å fullføre.',
    'reset_pw_warning'                        => '**PLEASE** bekrefter at lenken faktisk går til Firefly III slik du forventer at den skal gå!',

    // error
    'error_subject'                           => 'Rett en feil i Firefly III',
    'error_intro'                             => 'Firefly III v:version fikk en feil: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Feilen var av typen ":class.',
    'error_timestamp'                         => 'Feilen oppstod på: :time.',
    'error_location'                          => 'Denne feilen oppstod i filen "<span style="font-family: monospace;">:file</span>" på linje :line med kode :code.',
    'error_user'                              => 'Feilen oppstod på av brukeren #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Det var ingen bruker som var pålogget for denne feilen, eller ingen bruker ble oppdaget.',
    'error_ip'                                => 'IP-adressen relatert til denne feilen er: :ip',
    'error_url'                               => 'URL er: :url',
    'error_user_agent'                        => 'Brukeragent: :userAgent',
    'error_stacktrace'                        => 'Hele informasjonen er under. Hvis du tror dette er en feil i Firefly III, kan du videresende denne meldingen til <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-ii. rg</a>. Dette kan hjelpe med å rette opp feilen du nettopp har funnet.',
    'error_github_html'                       => 'Hvis du foretrekker, kan du også åpne et nytt problem på <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                       => 'Hvis du foretrekker, kan du også åpne et nytt problem på https://github.com/firefly-ii/firefly-ii/issues.',
    'error_stacktrace_below'                  => 'Hele informasjonen er:',
    'error_headers'                           => 'Følgende headers kan også være relevant:',
    'error_post'                              => 'This was submitted by the user:',

    // Ignore this comment

    // report new journals
    'new_journals_subject'                    => 'Firefly III har opprettet en ny transaksjon|Firefly III har skapt :count nye transaksjoner',
    'new_journals_header'                     => 'Firefly III har opprettet en transaksjon for deg. Du finner den i din Firefly III installasjon|:Firefly III har laget :count transaksjoner for deg. Du kan finne dem i Firefly III installasjonen:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Regningen din ":name" har forfallsdato om :diff dager',
    'bill_warning_subject_now_end_date'       => 'Regningen din ":name" har forfallsdato I DAG',
    'bill_warning_subject_extension_date'     => 'Regningen din ":name vil bli forlenget eller kansellert om :diff dager',
    'bill_warning_subject_now_extension_date' => 'Regningen din ":name vil bli forlenget eller kansellert I DAG',
    'bill_warning_end_date'                   => 'Regningen din **":name"** avsluttes :date. Dette er om **:diff dager**.',
    'bill_warning_extension_date'             => 'Regningen din **":name"** vil bli forlenget eller annullert :date. Dette er om **:diff dager**.',
    'bill_warning_end_date_zero'              => 'Regningen din **":name"** avsluttes :date. Dette er **I DAG!**',
    'bill_warning_extension_date_zero'        => 'Regningen din **":name"** skal forlenges eller annulleres :date. Dette er **I DAG!**',
    'bill_warning_please_action'              => 'Vennligst gjør de rette tiltakene.',
];
// Ignore this comment
