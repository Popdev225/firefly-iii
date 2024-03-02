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
    'greeting'                                => 'Привіт,',
    'closing'                                 => 'Я тут по роботі',
    'signature'                               => 'Поштовий робот Firefly III',
    'footer_ps'                               => 'PS: Це повідомлення було надіслано, оскільки надійшов запит з IP-адреси :ipAddress.',

    // admin test
    'admin_test_subject'                      => 'Тестове повідомлення з вашого додатку Firefly III',
    'admin_test_body'                         => 'Це тестове повідомлення з вашого додатку Firefly III. Воно було надіслано на :email.',

    // Ignore this comment

    // invite
    'invitation_created_subject'              => 'Запрошення створено',
    'invitation_created_body'                 => 'Адміністратор ":email" створив запрошення для користувача з адресою електронної пошти ":invitee. Запрошення буде дійсне протягом 48 годин.',
    'invite_user_subject'                     => 'Вас запросили створити обліковий запис Firefly III.',
    'invitation_introduction'                 => 'Вас запросили створити обліковий запис Firefly III на **:host**. Firefly III — це персональний приватний фінансовий менеджер, який розміщується на власному сервері. Всі круті хлопці ним користуються.',
    'invitation_invited_by'                   => 'Ви були запрошені ":admin" і це запрошення було відправлено ":invitee". Це ви, так?',
    'invitation_url'                          => 'Запрошення дійсне протягом 48 годин і може бути використане на [Firefly III](:url). Насолоджуйтесь!',

    // new IP
    'login_from_new_ip'                       => 'Новий вхід в Firefly III',
    'slack_login_from_new_ip'                 => 'Новий вхід на Firefly III з IP :ip (:host)',
    'new_ip_body'                             => 'Firefly III виявив новий вхід до вашого облікового запису з невідомої IP-адреси. Якщо ви ніколи не входили з IP-адреси, наведеної нижче, або після вашого останнього входу минуло більше шести місяців, Firefly III попередить вас про це.',
    'new_ip_warning'                          => 'Якщо ви впізнаєте цю IP-адресу або логін, ви можете проігнорувати це повідомлення. Якщо ви не ввійшли або не знаєте, про що йдеться, перевірте надійність свого пароля, змініть його та вийдіть із усіх інших сеансів. Для цього перейдіть на сторінку свого профілю. Звичайно, у вас уже ввімкнено двофакторна авторизація, чи не так? Будьте обережними!',
    'ip_address'                              => 'IP-адреса',
    'host_name'                               => 'Хост',
    'date_time'                               => 'Дата + час',

    // access token created
    'access_token_created_subject'            => 'Створено новий токен доступу',
    'access_token_created_body'               => 'Хтось (сподіваюся, ви) щойно створив новий токен доступу Firefly III API для вашого облікового запису.',
    'access_token_created_explanation'        => 'За допомогою цього токена ви можете отримати доступ до **всіх** своїх фінансових записів через Firefly III API.',
    'access_token_created_revoke'             => 'Якщо це не ви, якнайшвидше анулюйте цей токен через :url',

    // registered
    'registered_subject'                      => 'Ласкаво просимо у Firefly III!',
    'registered_subject_admin'                => 'Зареєструвався новий користувач',
    'admin_new_user_registered'               => 'Зареєструвався новий користувач. Користувач **:email** отримав ідентифікатор користувача #:id.',
    'registered_welcome'                      => 'Ласкаво просимо до [Firefly III](:address). Ваша реєстрація пройшла успішно, цей лист надіслано для підтвердження. Ура!',
    'registered_pw'                           => 'Якщо ви забули пароль, то відновіть його за допомогою [засобу скидання пароля](:address/password/reset).',
    'registered_help'                         => 'У верхньому правому куті кожної сторінки є іконка довідки. Якщо вам потрібна допомога, натисніть її!',
    'registered_closing'                      => 'Насолоджуйтесь!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Скидання пароля:',
    'registered_doc_link'                     => 'Документація:',

    // Ignore this comment

    // new version
    'new_version_email_subject'               => 'Доступна нова версія Firefly III',

    // email change
    'email_change_subject'                    => 'Вашу електронну адресу Firefly III було змінено',
    'email_change_body_to_new'                => 'Ви або хтось із доступом до вашого облікового запису Firefly III змінили вашу електронну адресу. Якщо ви очікували це повідомлення, проігноруйте його та видаліть.',
    'email_change_body_to_old'                => 'Ви або хтось із доступом до вашого облікового запису Firefly III змінили вашу електронну адресу. Якщо це не ви або зміни небажані, ви **має** скористатись посиланням «скасувати» нижче, щоб захистити свій обліковий запис!',
    'email_change_ignore'                     => 'Якщо ви ініціювали цю зміну, можете сміливо ігнорувати це повідомлення.',
    'email_change_old'                        => 'Стара електронна адреса: :email',
    'email_change_old_strong'                 => 'Стара електронна адреса: **:email**',
    'email_change_new'                        => 'Нова адреса електронної пошти::email',
    'email_change_new_strong'                 => 'Нова адреса електронної пошти:**:email**',
    'email_change_instructions'               => 'Ви не можете використовувати Firefly III, доки не підтвердите цю зміну. Натисніть посилання нижче, щоб зробити це.',
    'email_change_undo_link'                  => 'Щоб скасувати зміни, натисніть це посилання:',

    // OAuth token created
    'oauth_created_subject'                   => 'Створено новий обліковий запис OAuth',
    'oauth_created_body'                      => 'Хтось (сподіваємось, ви) щойно створив новий клієнт Firefly III OAuth API для вашого облікового запису користувача. Він позначений «:name» і має зворотну URL-адресу «:url».',
    'oauth_created_explanation'               => 'За допомогою цього клієнта ви можете отримати доступ до **всіх** своїх фінансових записів через Firefly III API.',
    'oauth_created_undo'                      => 'Якщо це не ви, відкликайте цей клієнт якомога швидше на `:url`',

    // reset password
    'reset_pw_subject'                        => 'Запит на зміну пароля',
    'reset_pw_instructions'                   => 'Хтось намагався змінити ваш пароль. Якщо це ви, натисніть посилання нижче, щоб зробити це.',
    'reset_pw_warning'                        => '**БУДЬ ЛАСКА** переконайтеся, що посилання справді веде до сервера Firefly III, який ви очікували!',

    // error
    'error_subject'                           => 'Помилка у Firefly III',
    'error_intro'                             => 'Firefly III v:version виявив помилку: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Помилка була типу ":class".',
    'error_timestamp'                         => 'Сталася помилка о :time.',
    'error_location'                          => 'Сталася помилка у файлі "<span style="font-family: monospace;">:file</span>" line :line with :code.',
    'error_user'                              => 'Користувач #:id, <a href="mailto::email">:email</a> виявив помилку.',
    'error_no_user'                           => 'Не знайдено жодного користувача, пов\'язвного з цією помилкою, або ж користувача не виявлено.',
    'error_ip'                                => 'IP-адреса, пов\'язана з цією помилкою: :ip',
    'error_url'                               => 'URL-адреса: :url',
    'error_user_agent'                        => 'Користувач: :userAgent',
    'error_stacktrace'                        => 'Повний опис помилки наведено нижче. Якщо ви вважаєте, що це помилка у Firefly III, ви можете переслати це повідомлення на <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-iii. rg</a>. Це може допомогти вам виправити помилку, з якою ви щойно зіткнулися.',
    'error_github_html'                       => 'За бажанням ви також можете відкрити нове звернення на <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                       => 'Якщо бажаєте, ви також можете відкрити нове звернення на https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                  => 'Повна інформація про помилку нижче:',
    'error_headers'                           => 'Наступні заголовки також можуть бути актуальними:',
    'error_post'                              => 'This was submitted by the user:',

    // Ignore this comment

    // report new journals
    'new_journals_subject'                    => 'Firefly III створив нову транзакцію|Firefly III створив :count нових транзакцій',
    'new_journals_header'                     => 'Firefly III створив для вас транзакцію. Ви можете знайти її у Firefly III:|Firefly III створив :count транзакції для вас. Ви можете знайти їх у Firefly III:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Термін дії вашого рахунку ":name" закінчується через :diff днів',
    'bill_warning_subject_now_end_date'       => 'Термін дії вашого рахунку ":name" закінчується СЬОГОДНІ',
    'bill_warning_subject_extension_date'     => 'Ваш рахунок ":name" буде продовжено або скасовано протягом :diff днів',
    'bill_warning_subject_now_extension_date' => 'Ваш рахунок ":name" буде продовжено або скасовано СЬОГОДНІ',
    'bill_warning_end_date'                   => 'Ваш рахунок **":name"** має дату завершення :date. Цей момент мине приблизно через **:diff days**.',
    'bill_warning_extension_date'             => 'Ваш рахунок **":name"** буде продовжено або скасовано :date. Цей момент мине приблизно через **:diff days**.',
    'bill_warning_end_date_zero'              => 'Ваш рахунок **":name"** має дату завершення :date. Цей момент мине **СЬОГОДНІ!**',
    'bill_warning_extension_date_zero'        => 'Ваш рахунок **":name"** буде продовжено або скасовано :date. Цей момент мине **СЬОГОДНІ!**',
    'bill_warning_please_action'              => 'Будь ласка, вживіть відповідних заходів.',
];
// Ignore this comment
