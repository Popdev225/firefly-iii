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
    'greeting'                                => 'Привет,',
    'closing'                                 => 'Бип-бип,',
    'signature'                               => 'Почтовый робот Firefly III',
    'footer_ps'                               => 'PS: Это сообщение было отправлено, потому что его запросили с IP :ipAddress.',

    // admin test
    'admin_test_subject'                      => 'Тестовое сообщение от вашей установки Firefly III',
    'admin_test_body'                         => 'Это тестовое сообщение с вашего сервера Firefly III. Оно было отправлено на :email.',

    // invite
    'invitation_created_subject'              => 'Приглашение было создано',
    'invitation_created_body'                 => 'Admin user ":email" created a user invitation which can be used by whoever is behind email address ":invitee". The invite will be valid for 48hrs.',
    'invite_user_subject'                     => 'You\'ve been invited to create a Firefly III account.',
    'invitation_introduction'                 => 'You\'ve been invited to create a Firefly III account on **:host**. Firefly III  is a personal, self-hosted, private personal finance manager. All the cool kids are using it.',
    'invitation_invited_by'                   => 'You\'ve been invited by ":admin" and this invitation was sent to ":invitee". That\'s you, right?',
    'invitation_url'                          => 'The invitation is valid for 48 hours and can be redeemed by surfing to [Firefly III](:url). Enjoy!',

    // new IP
    'login_from_new_ip'                       => 'Новый вход в Firefly III',
    'slack_login_from_new_ip'                 => 'Новый вход Firefly III с IP :ip (:host)',
    'new_ip_body'                             => 'Firefly III зафиксировал вход в ваш аккаунт с неизвестного IP-адреса. Если вы никогда не входили в систему с IP-адреса, указанного ниже, или это было более шести месяцев назад, Firefly III предупредит вас.',
    'new_ip_warning'                          => 'Если вы узнаёте этот IP адрес или логин, вы можете проигнорировать данное сообщение. Если вы не входили в систему, и не понимаете, что происходит, проверьте безопасность вашего пароля, измените его и выйдите из всех других сессий. Для этого перейдите на страницу своего профиля. Конечно, же у вас уже включена двухфакторная аутентификация, верно? Оставайтесь в безопасности!',
    'ip_address'                              => 'IP-адрес',
    'host_name'                               => 'Сервер',
    'date_time'                               => 'Дата и время',

    // access token created
    'access_token_created_subject'            => 'Создан новый токен доступа',
    'access_token_created_body'               => 'Кто-то (надеемся, что вы) только что создал новый токен доступа к Firefly III API для вашей учетной записи.',
    'access_token_created_explanation'        => 'С помощью этого токена, они смогут получить доступ ко **всем** вашим финансовым записям через Firefly III API.',
    'access_token_created_revoke'             => 'Если это были не вы, пожалуйста отзовите токен как можно скорее по адресу :url',

    // registered
    'registered_subject'                      => 'Добро пожаловать в Firefly III!',
    'registered_subject_admin'                => 'Новый пользователь зарегистрирован',
    'admin_new_user_registered'               => 'Зарегистрирован новый пользователь с электронной почтой: **:email** ему присвое ID #:id.',
    'registered_welcome'                      => 'Добро пожаловать в [Firefly III](:address). Подтверждаем вашу регистрацию этим e-mail. Ура!',
    'registered_pw'                           => 'Если вы забыли ваш пароль, пожалуйста, создайте его повторно используя [оснастку по сбросу пароля](:address/password/reset).',
    'registered_help'                         => 'В верхнем правом углу страницы есть иконка справки. Если вам нужна помощь, нажмите её!',
    'registered_doc_html'                     => 'Если вы еще этого не сделали, прочтите [великую теорию](https://docs.firefly-iii.org/about-firefly-iii/personal-finances).',
    'registered_doc_text'                     => 'Если вы еще этого не сделали, прочтите краткое руководство по использованию и полное описание.',
    'registered_closing'                      => 'Наслаждайтесь!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Сбросить пароль:',
    'registered_doc_link'                     => 'Документация:',

    // new version
    'new_version_email_subject'               => 'Доступна новая версия Firefly III',

    // email change
    'email_change_subject'                    => 'Ваш адрес электронной почты Firefly III был изменен',
    'email_change_body_to_new'                => 'Вы или кто-то, у кого есть доступ к вашей учетной записи Firefly III, изменил адрес вашей электронной почты. Если вы не ожидали этого сообщения, проигнорируйте и удалите его.',
    'email_change_body_to_old'                => 'Вы или кто-то, у кого есть доступ к вашей учетной записи Firefly III, изменили ваш адрес электронной почты. Если это не вы, то **необходимо** пройти по ссылке «отменить» ниже, чтобы защитить свой аккаунт!',
    'email_change_ignore'                     => 'Если вы инициировали это изменение, вы можете спокойно проигнорировать это сообщение.',
    'email_change_old'                        => 'Старый адрес электронной почты: :email',
    'email_change_old_strong'                 => 'Старый адрес электронной почты: **:email**',
    'email_change_new'                        => 'Новый адрес электронной почты: :email',
    'email_change_new_strong'                 => 'Новый адрес электронной почты: **:email**',
    'email_change_instructions'               => 'Вы не можете использовать Firefly III, пока не подтвердите это изменение. Для подтверждения перейдите по ссылке ниже.',
    'email_change_undo_link'                  => 'Чтобы отменить изменения, перейдите по ссылке:',

    // OAuth token created
    'oauth_created_subject'                   => 'Создан новый OAuth клиент',
    'oauth_created_body'                      => 'Кто-то (надеемся, что вы) только что создал новый клиент API OAuth для вашей учетной записи с именем ":name" и обратным URL `:url`.',
    'oauth_created_explanation'               => 'С помощью этого токена, доступны **все** ваши финансовые записи через Firefly III API.',
    'oauth_created_undo'                      => 'Если это были не вы, пожалуйста, отховите этого клиента как можно скорее по адресу `:url`',

    // reset password
    'reset_pw_subject'                        => 'Ваш запрос на сброс пароля',
    'reset_pw_instructions'                   => 'Кто-то пытался сбросить ваш пароль. Если это были Вы, пожалуйста, перейдите по ссылке ниже, чтобы сделать это.',
    'reset_pw_warning'                        => '**ПОЖАЛУЙСТА** проверьте, что ссылка ведёт на Firefly III, как вы ожидаете!',

    // error
    'error_subject'                           => 'Найдена ошибка в Firefly III',
    'error_intro'                             => 'В Firefly III v:version произошла ошибка: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Ошибка типа ":class".',
    'error_timestamp'                         => 'Ошибка произошла в: :time.',
    'error_location'                          => 'Эта ошибка произошла в файле <span style="font-family: monospace;">:file</span> в строке :line с кодом :code.',
    'error_user'                              => 'У пользователя #:id произошла ошибка, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Б процессе этой ошибки пользователь не был авторизован или пользователь не был обнаружен.',
    'error_ip'                                => 'IP адрес, связанный с этой ошибкой: :ip',
    'error_url'                               => 'URL-адрес: :url',
    'error_user_agent'                        => 'User agent: :userAgent',
    'error_stacktrace'                        => 'Полный stacktrace находится ниже. Если вы считаете, что это ошибка в Firefly III, вы можете направить это сообщение по адресу: <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-iii. rg</a>. Это может помочь исправить ошибку, с которой вы столкнулись.',
    'error_github_html'                       => 'Если вы предпочитаете, вы также можете создать новый тикет на <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                       => 'Если вы предпочитаете, вы также можете открыть новый тикет на https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                  => 'Полная трассировка стека:',
    'error_headers'                           => 'Заголовки также могут иметь отношение к следующим темам:',

    // report new journals
    'new_journals_subject'                    => 'Firefly III создал новую транзакцию|Firefly III создал :count новых транзакций',
    'new_journals_header'                     => 'Firefly III создал для вас транзакцию. Вы можете найти её в вашей установке Firefly III: |Firefly III создал для вас :count транзакций. Вы можете найти их в вашей установке Firefly III:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Срок действия вашего счета ":name" истекает через :diff дней',
    'bill_warning_subject_now_end_date'       => 'Ваш счет ":name" заканчивается сегодня',
    'bill_warning_subject_extension_date'     => 'Ваш счет ":name" необходимо продлить или отменить через :diff дней',
    'bill_warning_subject_now_extension_date' => 'Ваш счет ":name" должен быть продлен или отменен сегодня',
    'bill_warning_end_date'                   => 'Срок действия вашего счета **":name"** истекает :date. Этот момент пройдет примерно через **:diff days**.',
    'bill_warning_extension_date'             => 'Ваш счет **":name"** необходимо продлить или отменить :date. Этот момент пройдет примерно через **:diff days**.',
    'bill_warning_end_date_zero'              => 'Срок действия вашего счета **":name"** истекает :date. Это **СЕГОДНЯ!**',
    'bill_warning_extension_date_zero'        => 'Ваш счет **":name"** необходимо продлить или отменить :date. Это **СЕГОДНЯ!**',
    'bill_warning_please_action'              => 'Просим принять соответствующие меры.',

];
