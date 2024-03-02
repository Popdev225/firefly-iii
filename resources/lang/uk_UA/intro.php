<?php

/**
 * intro.php
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
    // index
    'index_intro'                                             => 'Вітаємо на головній сторінці Firefly III. Будь ласка, знайдіть час, щоб пройти через цей вступ, та отримати уявлення про те, як працює Firefly II.',
    'index_accounts-chart'                                    => 'Цей графік показує поточний баланс ваших активів. Ви можете вибрати рахунки, видимі тут, у ваших уподобаннях.',
    'index_box_out_holder'                                    => 'Це невеличке віконце та сусідні, дасть вам швидкий огляд вашої фінансової ситуації.',
    'index_help'                                              => 'Якщо вам коли-небудь знадобиться допомога зі сторінкою або формою, натисніть цю кнопку.',
    'index_outro'                                             => 'Більшість сторінок Firefly III починаються з невеличкого огляду як цей. Будь ласка, зв\'яжіться зі мною, коли у вас виникнуть питання або коментарі. Насолоджуйтесь!',
    'index_sidebar-toggle'                                    => 'Для того щоб створити транзакції, рахунки чи інші речі використовуйте меню під цією іконкою.',
    'index_cash_account'                                      => 'Наразі доступні лише ці рахунки. Ви можете використовувати готівковий рахунок для відстеження грошових витрат, але це не обов\'язково.',

    // transactions
    'transactions_create_basic_info'                          => 'Введіть базову інформацію про транзакцію. Джерело, місце призначення, дату і опис.',
    'transactions_create_amount_info'                         => 'Введіть суму транзакції. Якщо потрібно поля будуть автоматично оновлюватися для зовнішньої суми.',
    'transactions_create_optional_info'                       => 'Всі ці поля необов\'язкові. Додавання мета-даних зробить ваші транзакції більш організованими.',
    'transactions_create_split'                               => 'Якщо ви хочете розділити транзакцію, додайте більше розділень з цією кнопкою',

    // create account:
    'accounts_create_iban'                                    => 'Надайте вашим рахункам дійсний IBAN. Це допоможе дуже легко імпортувати дані в майбутньому.',
    'accounts_create_asset_opening_balance'                   => 'Рахунки в активах можуть мати "початковий баланс", що вказує на початок історії цього рахунку в Firefly III.',
    'accounts_create_asset_currency'                          => 'Firefly III підтримує декілька валют. Рахунки активів мають одну основну валюту, яку потрібно встановити тут.',
    'accounts_create_asset_virtual'                           => 'Іноді стане в нагоді встановити вашому рахунку віртуальний баланс: зайва сума яка завжди додається або віднімається з реального балансу.',

    // budgets index
    'budgets_index_intro'                                     => 'Бюджети використовуються для управління вашими фінансами та формування одної з основних функцій Firefly III.',
    'budgets_index_see_expenses_bar'                          => 'Витрати коштів повільно заповнять цю планку.',
    'budgets_index_navigate_periods'                          => 'Змінюйте періоди, щоб легко встановити відповідний бюджет.',
    'budgets_index_new_budget'                                => 'Створюйте новий бюджет за доречності.',
    'budgets_index_list_of_budgets'                           => 'Використовуте цю таблицю для встановлення розміру кожного бюджету і відстеження балансу по них.',
    'budgets_index_outro'                                     => 'Щоб дізнатися більше про бюджет, оберіть іконку довідки у верхньому правому куті.',

    // Ignore this comment

    // reports (index)
    'reports_index_intro'                                     => 'Використовуйте ці звіти, щоб отримати докладне розуміння ваших фінансів.',
    'reports_index_inputReportType'                           => 'Виберіть тип звіту. Перевірте довідку, щоб зрозуміти, що відображає кожен звіт.',
    'reports_index_inputAccountsSelect'                       => 'Ви можете виключити або включити активи, як вважаєте за потрібне.',
    'reports_index_inputDateRange'                            => 'The selected date range is entirely up to you: from one day to 10 years or more.',
    'reports_index_extra-options-box'                         => 'Залежно від обраного звіту, можна вибрати додаткові фільтри та параметри. Зверніть увагу на це поле коли потрібно змінити тип звіту.',

    // reports (reports)
    'reports_report_default_intro'                            => 'Даний звіт швидко і вичерпно надасть вам огляд ваших фінансів. Якщо ви хочете бачити щось інше, будь ласка, не соромтесь - зв\'яжіться зі мною!',
    'reports_report_audit_intro'                              => 'Цей звіт дасть вам детальну інформацію про ваші активів.',
    'reports_report_audit_optionsBox'                         => 'Використовуйте ці прапорці для відображення або приховування запропонованих вам стовпців.',

    'reports_report_category_intro'                           => 'Цей звіт надасть вам уявлення в одній або декількох категоріях.',
    'reports_report_category_pieCharts'                       => 'Ці діаграми дадуть вам розуміння витрат і доходів по категорії або по рахунку.',
    'reports_report_category_incomeAndExpensesChart'          => 'Ця діаграма показує ваші витрати та доходи по кожній категорії.',

    'reports_report_tag_intro'                                => 'Цей звіт надасть вам інформацію по одномі або декількох мітках.',
    'reports_report_tag_pieCharts'                            => 'Ці діаграми дадуть вам розуміння витрат і доходів по мітці, рахунку, категорії чи бюджету.',
    'reports_report_tag_incomeAndExpensesChart'               => 'Ця діаграма показує ваші витрати та доходи по кожній мітці.',

    'reports_report_budget_intro'                             => 'Цей звіт надасть вам інформацію по одному або декількох бюджетах.',
    'reports_report_budget_pieCharts'                         => 'Ці діаграми дадуть вам розуміння витрат і доходів по бюджету або по рахунку.',
    'reports_report_budget_incomeAndExpensesChart'            => 'Ця діаграма показує ваші витрати по кожному бюджету.',

    // create transaction
    'transactions_create_switch_box'                          => 'Використовуйте ці кнопки, щоб швидко змінити тип транзакції, яку ви хочете зберегти.',
    'transactions_create_ffInput_category'                    => 'Ви можете заповнити це поле "від руки". Раніше створені категорії будуть запропоновані.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Прив\'яжіть ваше зняття до бюджету для кращого контролю фінансів.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Використовуйте цей випадаючий список, коли ваше зняття у іншій валюті.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Використовуйте цей випадаючий список, коли ваш депозит у іншій валюті.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Оберіть скарбничку та пов\'яжіть цей переказ зі своїми заощадженнями.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'Це поле показує, скільки ви накопичили у кожній скарбничці.',
    'piggy-banks_index_button'                                => 'Поряд з стовпчиком прогресу є дві кнопки (+ і -) для додавання або зняття грошей з кожної скарбнички.',
    'piggy-banks_index_accountStatus'                         => 'Для кожного активу з хоча б одною скарбничкою, статус відображено в цій табличці.',

    // Ignore this comment

    // create piggy
    'piggy-banks_create_name'                                 => 'Яка ваша мета? Нова диван, камера, гроші на надзвичайні ситуації?',
    'piggy-banks_create_date'                                 => 'Ви можете встановити цільову дату або кінцевий термін для скарбнички.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'Ця діаграма покаже історію цієї скарбнички.',
    'piggy-banks_show_piggyDetails'                           => 'Детальніша інформація про вашу скарбничку',
    'piggy-banks_show_piggyEvents'                            => 'Будь-які прибутки або видатки перераховані також тут.',

    // bill index
    'bills_index_rules'                                       => 'Тут ви бачите, які правила будуть перевірені, якщо цей рахунок натиснути',
    'bills_index_paid_in_period'                              => 'Це поле показує, коли була остання оплата.',
    'bills_index_expected_in_period'                          => 'Це поле показує для кожного рахунку, кому і коли треба буде оплатити наступний рахунок.',

    // show bill
    'bills_show_billInfo'                                     => 'Ця таблиця показує загальну інформацію про цей рахунок.',
    'bills_show_billButtons'                                  => 'Використовуйте цю кнопку, щоб повторно сканувати старі транзакції, щоб повязати їх з цим рахунком.',
    'bills_show_billChart'                                    => 'На цій діаграмі відображаються операції, пов\'язані з цим рахунком.',

    // create bill
    'bills_create_intro'                                      => 'Використовуйте рахунки, щоб відслідковувати кількість грошей у кожен період. Подумайте про такі витрати, як оренда, страхування або іпотечні платежі.',
    'bills_create_name'                                       => 'Використовуйте описове ім\'я на зразок "Оренда" або "Страхування здоров\'я".',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Виберіть мінімальну і максимальну суму для цього рахунку на сплату.',
    'bills_create_repeat_freq_holder'                         => 'Більшість рахунків на сплату повторюються щомісяця, але тут ви можете встановити іншу частоту.',
    'bills_create_skip_holder'                                => 'Якщо рахунок повторюється кожні 2 тижні, "пропуск"-поле слід ставити "1", щоб пропустити кожен інший тиждень.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III дозволяє вам керувати правилами, які будуть "автомагічно" застосовані до будь-яких транзакцій, які Ви створюєте або редагуєте.',
    'rules_index_new_rule_group'                              => 'Для легшого управління ви можете поєднувати правила в групи.',
    'rules_index_new_rule'                                    => 'Створюйте стільки правил скільки вам потрібно.',
    'rules_index_prio_buttons'                                => 'Сортуйте їх так як вам потрібно.',
    'rules_index_test_buttons'                                => 'Ви можете перевірити свої правила або застосувати їх до існуючих транзакцій.',
    'rules_index_rule-triggers'                               => 'Правила мають "тригери" та "дії", які можна розташувати за допомогою перетягування.',
    'rules_index_outro'                                       => 'Впевніться що ознайомились з сторінками довідки, використовуючи (?) у верхньому правому куті!',

    // create rule:
    'rules_create_mandatory'                                  => 'Оберіть відповідну назву, і встановіть випадки, коли правило потрібно запускати.',
    'rules_create_ruletriggerholder'                          => 'Додайте стільки тригерів скільки забажаєте, однак пам\'ятайте, що ВСІ тригери повинні спрацювати щоб виконалась дія.',
    'rules_create_test_rule_triggers'                         => 'Використовуйте цю кнопку, щоб побачити, які транзакції будуть відповідати вашому правилу.',
    'rules_create_actions'                                    => 'Встановіть стільки дій, скільки забажаєте.',

    // Ignore this comment

    // preferences
    'preferences_index_tabs'                                  => 'За цими вкладками доступні додаткові опції.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III підтримує декілька валют, які можна задати на цій сторінці.',
    'currencies_index_default'                                => 'Firefly III має одну типову валюту.',
    'currencies_index_buttons'                                => 'Використовуйте ці кнопки для зміни типової валюти або активації інших валют.',

    // create currency
    'currencies_create_code'                                  => 'Цей код має бути ISO сумісним (загугліть щоб дізнатись код для вашої нової валюти).',
];
// Ignore this comment
