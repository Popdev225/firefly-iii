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

declare(strict_types=1);

return [
    // common items
    'greeting'                                => 'Hej,',
    'closing'                                 => 'Beep bop,',
    'signature'                               => 'Firefly III Mail Robotten',
    'footer_ps'                               => 'PS: Denne besked blev sendt, fordi en anmodning fra IP :ipAddress udløste den.',

    // admin test
    'admin_test_subject'                      => 'En testbesked fra din Firefly III-installation',
    'admin_test_body'                         => 'Dette er en test besked fra din Firefly III installation. Den blev sendt til :email.',

    // invite
    'invitation_created_subject'              => 'En invitation er blevet oprettet',
    'invitation_created_body'                 => 'Admin user ":email" created a user invitation which can be used by whoever is behind email address ":invitee". The invite will be valid for 48hrs.',
    'invite_user_subject'                     => 'Du er blevet inviteret til at oprette en Firefly III-konto.',
    'invitation_introduction'                 => 'You\'ve been invited to create a Firefly III account on **:host**. Firefly III  is a personal, self-hosted, private personal finance manager. All the cool kids are using it.',
    'invitation_invited_by'                   => 'You\'ve been invited by ":admin" and this invitation was sent to ":invitee". That\'s you, right?',
    'invitation_url'                          => 'The invitation is valid for 48 hours and can be redeemed by surfing to [Firefly III](:url). Enjoy!',

    // new IP
    'login_from_new_ip'                       => 'Nyt login på Firefly III',
    'slack_login_from_new_ip'                 => 'Nyt Firefly III-login fra IP :ip (:host)',
    'new_ip_body'                             => 'Firefly III har registreret et nyt login på din konto fra en ukendt IP-adresse. Hvis du ikke tidligere har været logget ind fra IP-adressen herunder, eller dit sidste login herfra er sket for mere end 6 måneder siden - vil Firefly III advare dig.',
    'new_ip_warning'                          => 'Hvis du kan genkende IP-adressen eller login-forsøget, kan du trykt ignorere denne besked. Hvis du ikke har forsøgt at logge ind - eller ikke ved hvad det her handler om bør du verificere din password sikkerhed. Skift password og log ud af alle sessioner. For at gøre dette kan du gå til din profil side. Du har selvfølgeligt allerede 2FA slået til, ikke? Stay safe!',
    'ip_address'                              => 'IP-adresse',
    'host_name'                               => 'Host',
    'date_time'                               => 'Dato/Tid',

    // access token created
    'access_token_created_subject'            => 'Et nyt adgangstoken blev oprettet',
    'access_token_created_body'               => 'Nogen (forhåbentlig dig) har netop oprettet en ny Firefly III API Access Token til din brugerkonto.',
    'access_token_created_explanation'        => 'With this token, they can access **all** of your financial records through the Firefly III API.',
    'access_token_created_revoke'             => 'If this wasn\'t you, please revoke this token as soon as possible at :url',

    // registered
    'registered_subject'                      => 'Velkommen til Firefly III!',
    'registered_subject_admin'                => 'A new user has registered',
    'admin_new_user_registered'               => 'A new user has registered. User **:email** was given user ID #:id.',
    'registered_welcome'                      => 'Velkomme til [Firefly III](:address). Dine registrering er gennemført, og denne email tjener til at bekræftige dette. :-)',
    'registered_pw'                           => 'If you have forgotten your password already, please reset it using [the password reset tool](:address/password/reset).',
    'registered_help'                         => 'Der er et hjælpe-ikon i øverste højre hjørne af hver side. Hvis du har brug for hjælp, kan du klikke på det!',
    'registered_doc_html'                     => 'If you haven\'t already, please read the [grand theory](https://docs.firefly-iii.org/about-firefly-iii/personal-finances).',
    'registered_doc_text'                     => 'If you haven\'t already, please also read the first use guide and the full description.',
    'registered_closing'                      => 'God fornøjelse!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Nulstilling af adgangskode:',
    'registered_doc_link'                     => 'Dokumentation:',

    // new version
    'new_version_email_subject'               => 'A new Firefly III version is available',

    // email change
    'email_change_subject'                    => 'Din Firefly III email adresse er ændret',
    'email_change_body_to_new'                => 'Du eller nogen med adgang til din Firefly III-konto har ændret din e-mailadresse. Hvis du ikke forventede denne besked, bedes du ignorere og slette den.',
    'email_change_body_to_old'                => 'You or somebody with access to your Firefly III account has changed your email address. If you did not expect this to happen, you **must** follow the "undo"-link below to protect your account!',
    'email_change_ignore'                     => 'Hvis du har igangsat denne ændring, kan du roligt ignorere denne besked.',
    'email_change_old'                        => 'Den forrige email adresse var: :email',
    'email_change_old_strong'                 => 'The old email address was: **:email**',
    'email_change_new'                        => 'Den nye email adresse er: :email',
    'email_change_new_strong'                 => 'The new email address is: **:email**',
    'email_change_instructions'               => 'Du kan ikke bruge Firefly III, før du bekræfter denne ændring. Følg linket nedenfor for at gøre det.',
    'email_change_undo_link'                  => 'For at fortryde ændringen, følg dette link:',

    // OAuth token created
    'oauth_created_subject'                   => 'En ny OAuth klient er oprettet',
    'oauth_created_body'                      => 'Somebody (hopefully you) just created a new Firefly III API OAuth Client for your user account. It\'s labeled ":name" and has callback URL `:url`.',
    'oauth_created_explanation'               => 'With this client, they can access **all** of your financial records through the Firefly III API.',
    'oauth_created_undo'                      => 'If this wasn\'t you, please revoke this client as soon as possible at `:url`',

    // reset password
    'reset_pw_subject'                        => 'Anmodning om nulstilling af din adgangskode',
    'reset_pw_instructions'                   => 'Nogen forsøgte at nulstille din adgangskode. Hvis det var dig, bedes du følge linket nedenfor for at gøre det.',
    'reset_pw_warning'                        => '**PLEASE** verify that the link actually goes to the Firefly III you expect it to go!',

    // error
    'error_subject'                           => 'Der er opstået en fejl i Firefly III',
    'error_intro'                             => 'Der opstod en fejl i Firefly III v:version: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Fejlen var af typen ":class".',
    'error_timestamp'                         => 'Fejlen opstod ved: :time.',
    'error_location'                          => 'Denne fejl opstod i filen "<span style="font-family: monospace;">:file</span>" på linje :line med koden :code.',
    'error_user'                              => 'Fejlen opstod under brugeren #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Der var ingen bruger logget ind under denne fejl, eller ingen bruger blev fundet.',
    'error_ip'                                => 'IP-adressen relateret til denne fejl er: :ip',
    'error_url'                               => 'URL er: :url',
    'error_user_agent'                        => 'Brugeragent: :userAgent',
    'error_stacktrace'                        => 'Den fulde stacktrace er nedenfor. Hvis du tror, at dette er en fejl i Firefly III, kan du videresende denne meddelelse til <a href="mailto:james@firefly-iii.org?subject=BUG!">james@ firefly-iii. rg</a>. Dette kan være behjælpeligt med at rette den fejl, du lige er stødt på.',
    'error_github_html'                       => 'Hvis du foretrækker det, kan du også rapportere et nyt problem på <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                       => 'Hvis du foretrækker det, kan du også rapportere et nyt problem på https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                  => 'Den fulde stacktrace er nedenfor:',
    'error_headers'                           => 'The following headers may also be relevant:',

    // report new journals
    'new_journals_subject'                    => 'Firefly III har oprettet en ny transaktion|Firefly III har oprettet :count nye transaktioner',
    'new_journals_header'                     => 'Firefly III har oprettet en transaktion for dig. Du kan finde den i din Firefly III installation:|Firefly III har oprettet :count transaktioner for dig. Du kan finde dem i din Firefly III installation:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Your bill ":name" is due to end in :diff days',
    'bill_warning_subject_now_end_date'       => 'Your bill ":name" is due to end TODAY',
    'bill_warning_subject_extension_date'     => 'Your bill ":name" is due to be extended or cancelled in :diff days',
    'bill_warning_subject_now_extension_date' => 'Your bill ":name" is due to be extended or cancelled TODAY',
    'bill_warning_end_date'                   => 'Your bill **":name"** is due to end on :date. This moment will pass in about **:diff days**.',
    'bill_warning_extension_date'             => 'Your bill **":name"** is due to be extended or cancelled on :date. This moment will pass in about **:diff days**.',
    'bill_warning_end_date_zero'              => 'Regningen **":name"** er sat til at stoppe den :date. Denne dato vil blive overskredet **idag!**',
    'bill_warning_extension_date_zero'        => 'Your bill **":name"** is due to be extended or cancelled on :date. This moment will pass **TODAY!**',
    'bill_warning_please_action'              => 'Udfør venligt den krævede handling.',

];
