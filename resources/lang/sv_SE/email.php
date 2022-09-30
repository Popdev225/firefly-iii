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
    'closing'                                 => 'Pip boop,',
    'signature'                               => 'Firefly III Epost Robot',
    'footer_ps'                               => 'P.S. Detta meddelande skickades efter en begäran från IP :ipAddress begärde det.',

    // admin test
    'admin_test_subject'                      => 'Ett testmeddelande från din Firefly III-installation',
    'admin_test_body'                         => 'Detta är ett testmeddelande från din Firefly III-instans. Det skickades till :email.',

    // new IP
    'login_from_new_ip'                       => 'Ny inloggning för Firefly III',
    'slack_login_from_new_ip'                 => 'New Firefly III login from IP :ip (:host)',
    'new_ip_body'                             => 'Firefly III upptäckte en ny inloggning på ditt konto från en okänd IP-adress. Om du aldrig loggat in från IP-adressen nedan, eller om det har varit mer än sex månader sedan, kommer Firefly III att varna dig.',
    'new_ip_warning'                          => 'Om du känner igen denna IP-adress eller inloggningen kan du ignorera detta meddelande. Om det inte var du, eller om du inte har någon aning om vad detta handlar om, verifiera din lösenordssäkerhet, ändra den och logga ut alla andra sessioner. För att göra detta, gå till din profilsida. Naturligtvis har du redan 2FA aktiverat, eller hur? Håll dig säker!',
    'ip_address'                              => 'IP-adress',
    'host_name'                               => 'Värd',
    'date_time'                               => 'Datum + tid',

    // access token created
    'access_token_created_subject'            => 'En ny åtkomsttoken skapades',
    'access_token_created_body'               => 'Någon (förhoppningsvis du) har just skapat en ny Firefly III API Access-token för ditt användarkonto.',
    'access_token_created_explanation'        => 'Med denna token, kan de få tillgång till <strong>alla</strong> dina finansiella poster genom Firefly III API.',
    'access_token_created_revoke'             => 'Om detta inte var du, vänligen återkalla denna token så snart som möjligt på :url',

    // registered
    'registered_subject'                      => 'Välkommen till Firefly III!',
    'registered_subject_admin'                => 'A new user has registered',
    'admin_new_user_registered'               => 'A new user has registered. User **:email** was given user ID #:id.',
    'registered_welcome'                      => 'Welcome to [Firefly III](:address). Your registration has made it, and this email is here to confirm it. Yay!',
    'registered_pw'                           => 'If you have forgotten your password already, please reset it using [the password reset tool](:address/password/reset).',
    'registered_help'                         => 'Det finns en hjälp-ikon i det övre högra hörnet av varje sida. Om du behöver hjälp, klicka på den!',
    'registered_doc_html'                     => 'If you haven\'t already, please read the [grand theory](https://docs.firefly-iii.org/about-firefly-iii/personal-finances).',
    'registered_doc_text'                     => 'If you haven\'t already, please also read the first use guide and the full description.',
    'registered_closing'                      => 'Ha det så kul!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Återställ lösenord:',
    'registered_doc_link'                     => 'Dokumentation:',

    // new version
    'new_version_email_subject'               => 'A new Firefly III version is available',

    // email change
    'email_change_subject'                    => 'Din Firefly III e-postadress har ändrats',
    'email_change_body_to_new'                => 'Du eller någon med åtkomst till ditt Firefly III konto har ändrat din e-postadress. Om du inte förväntade dig detta meddelande, vänligen ignorera och ta bort det.',
    'email_change_body_to_old'                => 'You or somebody with access to your Firefly III account has changed your email address. If you did not expect this to happen, you **must** follow the "undo"-link below to protect your account!',
    'email_change_ignore'                     => 'Om du startade denna ändring kan du säkert ignorera detta meddelande.',
    'email_change_old'                        => 'Den gamla e-postadressen var: :email',
    'email_change_old_strong'                 => 'The old email address was: **:email**',
    'email_change_new'                        => 'Den nya e-postadressen är: :email',
    'email_change_new_strong'                 => 'The new email address is: **:email**',
    'email_change_instructions'               => 'Du kan inte använda Firefly III förrän du bekräftar denna ändring. Följ länken nedan för att göra det.',
    'email_change_undo_link'                  => 'För att ångra ändringen, följ denna länk:',

    // OAuth token created
    'oauth_created_subject'                   => 'En ny OAuth klient har skapats',
    'oauth_created_body'                      => 'Somebody (hopefully you) just created a new Firefly III API OAuth Client for your user account. It\'s labeled ":name" and has callback URL `:url`.',
    'oauth_created_explanation'               => 'With this client, they can access **all** of your financial records through the Firefly III API.',
    'oauth_created_undo'                      => 'If this wasn\'t you, please revoke this client as soon as possible at `:url`',

    // reset password
    'reset_pw_subject'                        => 'Begäran om lösenordåterställning',
    'reset_pw_instructions'                   => 'Någon försökte återställa ditt lösenord. Om det var du, följ länken nedan för att göra det.',
    'reset_pw_warning'                        => '**PLEASE** verify that the link actually goes to the Firefly III you expect it to go!',

    // error
    'error_subject'                           => 'Hittade ett fel i Firefly III',
    'error_intro'                             => 'Firefly III v:version stötte på ett fel: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Felet var av typen ":class".',
    'error_timestamp'                         => 'Felet inträffade vid/på: :time.',
    'error_location'                          => 'Detta fel inträffade i filen "<span style="font-family: monospace;">:file</span>" på rad :line med kod :code.',
    'error_user'                              => 'Felet påträffades av användaren #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Det fanns ingen användare inloggad för detta fel eller så upptäcktes ingen användare.',
    'error_ip'                                => 'IP-adressen relaterad till detta fel är: :ip',
    'error_url'                               => 'URL är: :url',
    'error_user_agent'                        => 'Användaragent: :userAgent',
    'error_stacktrace'                        => 'Komplett stacktrace finns nedan. Om du tror att detta är en bugg i Firefly III, kan du vidarebefordra detta meddelande till <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-iii. rg</a>. Detta kan hjälpa till att åtgärda felet du just stött på.',
    'error_github_html'                       => 'Om du föredrar kan du även öppna ett nytt ärende på <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                       => 'Om du föredrar kan du även öppna ett nytt ärende på https://github.com/firefly-ii/firefly-ii/issues.',
    'error_stacktrace_below'                  => 'Komplett stacktrace nedan:',
    'error_headers'                           => 'The following headers may also be relevant:',

    // report new journals
    'new_journals_subject'                    => 'Firefly III har skapat en ny transaktion|Firefly III har skapat :count nya transaktioner',
    'new_journals_header'                     => 'Firefly III har skapat en transaktion åt dig. Du hittar den i din Firefly III-installation:|Firefly III har skapat :count transaktioner åt dig. Du hittar dem i din Firefly III-installation:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Your bill ":name" is due to end in :diff days',
    'bill_warning_subject_now_end_date'       => 'Your bill ":name" is due to end TODAY',
    'bill_warning_subject_extension_date'     => 'Your bill ":name" is due to be extended or cancelled in :diff days',
    'bill_warning_subject_now_extension_date' => 'Your bill ":name" is due to be extended or cancelled TODAY',
    'bill_warning_end_date'                   => 'Din räkning **":name"** förfaller :date. Detta ögonblick kommer att passera om cirka **:diff dagar**.',
    'bill_warning_extension_date'             => 'Din räkning **":name"** kommer att förlängas eller avbrytas den :date. Detta ögonblick kommer att passera om cirka **:diff dagar**.',
    'bill_warning_end_date_zero'              => 'Din räkning **":name"** förfaller :date. Detta ögonblick kommer att passera **IDAG!**',
    'bill_warning_extension_date_zero'        => 'Your bill **":name"** is due to be extended or cancelled on :date. This moment will pass **TODAY!**',
    'bill_warning_please_action'              => 'Please take the appropriate action.',

];
