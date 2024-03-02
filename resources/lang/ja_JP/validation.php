<?php

/**
 * validation.php
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
    'bad_type_source'                 => 'Firefly III can\'t determine the transaction type based on this source account.',
    'bad_type_destination'            => 'Firefly III can\'t determine the transaction type based on this destination account.',
    'missing_where'                   => '配列に"where"節がありません',
    'missing_update'                  => '配列に"update"節がありません',
    'invalid_where_key'               => 'JSON の"where"節に無効なキーが含まれています',
    'invalid_update_key'              => 'JSON の"update"節に無効なキーが含まれています',
    'invalid_query_data'              => 'クエリの %s:%s 項目に無効なデータがあります。',
    'invalid_query_account_type'      => 'クエリには異なるタイプの口座を含めることはできません。',
    'invalid_query_currency'          => 'クエリには異なる通貨設定の口座を含めることはできません。',
    'iban'                            => '無効なIBANです。',
    'zero_or_more'                    => '数値はマイナスにできません。',
    'more_than_zero'                  => 'The value must be more than zero.',
    'more_than_zero_correct'          => 'The value must be zero or more.',
    'no_asset_account'                => 'これは資産口座ではありません。',
    'date_or_time'                    => '数値はISO 8601 準拠の有効な日付や時刻である必要があります。',
    'source_equals_destination'       => '引き出し口座と預け入れ口座が同じです。',
    'unique_account_number_for_user'  => 'この口座番号は既に使われているようです。',
    'unique_iban_for_user'            => 'このIBANは既に使われているようです。',
    'reconciled_forbidden_field'      => 'この取引は照合済みです。「:field」は変更できません。',
    'deleted_user'                    => 'セキュリティ上の制約から、このメールアドレスでは登録できません。',
    'rule_trigger_value'              => 'この値は選択されたトリガーには無効です。',
    'rule_action_value'               => 'この値は選択された操作には無効です。',
    'file_already_attached'           => 'アップロードされたファイル ":name"は既に対象に割り当てられています。',
    'file_attached'                   => 'ファイル ":name" のアップロードに成功しました。',
    'must_exist'                      => ':attribute のIDはデータベースに存在しません。',
    'all_accounts_equal'              => 'この欄のすべての口座は一致している必要があります。',
    'group_title_mandatory'           => '一つ以上の取引がある場合、グループ名は必須です。',
    'transaction_types_equal'         => 'すべての分割は同じ種別である必要があります。',
    'invalid_transaction_type'        => '無効な取引種別です。',
    'invalid_selection'               => 'あなたの選択は無効です。',
    'belongs_user'                    => 'この値は存在しないオブジェクトにリンクされています。',
    'belongs_user_or_user_group'      => 'この値は現在の財務管理に属していないオブジェクトにリンクされています。',
    'at_least_one_transaction'        => '最低でも一つの取引が必要です。',
    'recurring_transaction_id'        => '少なくとも 1 つの取引が必要です。',
    'need_id_to_match'                => 'APIを一致させるためにこのエントリをIDで送信する必要があります。',
    'too_many_unmatched'              => '送信された取引がそれぞれのデータベースエントリと一致しません。既存のエントリに有効なIDがあることを確認してください。',
    'id_does_not_match'               => '送信されたID #:id は期待されたIDと一致しません。一致させるか、フィールドを省略してください。',
    'at_least_one_repetition'         => '最低でも一回の繰り返しが必要です。',
    'require_repeat_until'            => '繰り返し回数か、終了日 (繰り返し期限) が必要です。両方は使えません。',
    'require_currency_info'           => 'この項目の内容は通貨情報がなければ無効です。',
    'not_transfer_account'            => 'このアカウントは送金に使用できるアカウントではありません。',
    'require_currency_amount'         => 'この項目の内容は、外部金額情報がなければ無効です。',
    'require_foreign_currency'        => 'このフィールドには数字が必要です',
    'require_foreign_dest'            => 'この項目の値は預け入れ口座の通貨と一致する必要があります。',
    'require_foreign_src'             => 'この項目の値は、引き出し口座の通貨と一致する必要があります。',
    'equal_description'               => '取引の概要は包括的な概要と同じであってはいけません。',
    'file_invalid_mime'               => '「:mime」タイプのファイル ":name" は新しいアップロードとして受け付けられません。',
    'file_too_large'                  => 'ファイル ":name"は大きすぎます。',
    'belongs_to_user'                 => ':attribute の数値が不明です。',
    'accepted'                        => ':attributeを承認してください。',
    'bic'                             => 'これは有効な BIC ではありません。',
    'at_least_one_trigger'            => 'ルールには少なくとも1つのトリガーが必要です。',
    'at_least_one_active_trigger'     => 'ルールには少なくとも1つの有効なトリガーが必要です。',
    'at_least_one_action'             => 'ルールには少なくとも1つのアクションが必要です。',
    'at_least_one_active_action'      => 'ルールには少なくとも1つの有効なアクションが必要です。',
    'base64'                          => 'これは有効な base64 エンコードデータではありません。',
    'model_id_invalid'                => '指定されたIDはこのモデルでは無効です。',
    'less'                            => ':attributeは10,000,000未満にしてください',
    'active_url'                      => ':attributeは、有効なURLではありません。',
    'after'                           => ':attributeには、:dateより後の日付を指定してください。',
    'date_after'                      => '開始日は終了日より前でなければなりません。',
    'alpha'                           => ':attributeには、アルファベッドのみ使用できます。',
    'alpha_dash'                      => ':attributeには、英数字(\'A-Z\',\'a-z\',\'0-9\')とハイフン(-)が使用できます。',
    'alpha_num'                       => ':attributeには、英数字(\'A-Z\',\'a-z\',\'0-9\')が使用できます。',
    'array'                           => ':attributeには、配列を指定してください。',
    'unique_for_user'                 => 'この :attribute のエントリがすでにあります。',
    'before'                          => ':attributeには、:dateより前の日付を指定してください。',
    'unique_object_for_user'          => 'この名称はすでに使われています。',
    'unique_account_for_user'         => 'この口座番号は既に使われているようです。',

    // Ignore this comment

    'between.numeric'                 => ':attributeには、:minから、:maxまでの数字を指定してください。',
    'between.file'                    => ':attributeには、:min KBから:max KBまでのサイズのファイルを指定してください。',
    'between.string'                  => ':attributeは、:min文字から:max文字にしてください。',
    'between.array'                   => ':attributeの項目は、:min個から:max個にしてください。',
    'boolean'                         => ':attributeには、\'true\'か\'false\'を指定してください。',
    'confirmed'                       => ':attribute の確認が一致しません。',
    'date'                            => ':attributeは、正しい日付ではありません。',
    'date_format'                     => ':attribute は :format と一致しません。',
    'different'                       => ':attributeと:otherには、異なるものを指定してください。',
    'digits'                          => ':attribute は :digits 桁にして下さい。',
    'digits_between'                  => ':attribute は :min から :max 桁にして下さい。',
    'email'                           => ':attributeは、有効なメールアドレス形式で指定してください。',
    'filled'                          => ':attribute は必須です。',
    'exists'                          => '選択された:attributeは有効ではありません。',
    'image'                           => ':attributeには、画像を指定してください。',
    'in'                              => '選択された:attributeは有効ではありません。',
    'integer'                         => ':attributeには、整数を指定してください。',
    'ip'                              => ':attribute は有効なIPアドレスにして下さい。',
    'json'                            => ':attribute は有効なJSON文字列にして下さい。',
    'max.numeric'                     => ':attributeには、:max以下の数字を指定してください。',
    'max.file'                        => ':attributeには、:max KB以下のファイルを指定してください。',
    'max.string'                      => ':attributeは、:max文字以下にしてください。',
    'max.array'                       => ':attributeの項目は、:max個以下にしてください。',
    'mimes'                           => ':attributeには、:valuesタイプのファイルを指定してください。',
    'min.numeric'                     => ':attributeには、:min以上の数字を指定してください。',
    'lte.numeric'                     => ':attributeは、:value以下でなければなりません。',
    'min.file'                        => ':attributeには、:min KB以上のファイルを指定してください。',
    'min.string'                      => ':attributeは、:min文字以上にしてください。',
    'min.array'                       => ':attribute は :min 個以上にして下さい。',
    'not_in'                          => '選択された:attributeは有効ではありません。',
    'numeric'                         => ':attributeには、数字を指定してください。',
    'scientific_notation'             => 'The :attribute cannot use the scientific notation.',
    'numeric_native'                  => '国内通貨',
    'numeric_destination'             => '送金先の金額は数値である必要があります。',
    'numeric_source'                  => '送金元の金額は数値である必要があります。',
    'regex'                           => ':attributeには、有効な正規表現を指定してください。',
    'required'                        => ':attribute 項目は必須です。',
    'required_if'                     => ':otherが:valueの場合、:attributeを指定してください。',
    'required_unless'                 => ':other が :values 以外の場合、:attribute フィールドは必須です。',
    'required_with'                   => ':values が存在する場合、:attribute フィールドは必須です。',
    'required_with_all'               => ':attribute 項目は :values が存在する場合は必須です。',
    'required_without'                => ':values が存在しな場合、:attribute は必須です。',
    'required_without_all'            => ':values が一つも存在しない場合、:attribute は必須です。',
    'same'                            => ':attribute は :other 一致する必要があります。',
    'size.numeric'                    => ':attributeには、:sizeを指定してください。',
    'amount_min_over_max'             => '最小金額は最大金額より大きくすることはできません。',
    'size.file'                       => ':attribute は :size キロバイトにして下さい。',
    'size.string'                     => ':attribute は :size 文字にしてください。',
    'size.array'                      => ':attribute は :size 個である必要があります。',
    'unique'                          => ':attributeは既に使用されています。',
    'string'                          => ':attributeには、文字を指定してください。',
    'url'                             => ':attributeは、有効なURL形式で指定してください。',
    'timezone'                        => ':attribute は有効なゾーンにしてください。',
    '2fa_code'                        => 'この欄ではその数値は無効です。',
    'dimensions'                      => ':attribute は無効な画像サイズです。',
    'distinct'                        => ':attribute は重複しています。',
    'file'                            => ':attributeはファイルでなければいけません。',
    'in_array'                        => ':attributeが:otherに存在しません。',
    'present'                         => ':attributeが存在している必要があります。',
    'amount_zero'                     => '合計金額はゼロにすることはできません。',
    'current_target_amount'           => '現在の金額は目標金額より少なくなければなりません。',
    'unique_piggy_bank_for_user'      => '貯金箱の名前は一意である必要があります。',
    'unique_object_group'             => 'グループ名は一意でなければなりません',
    'starts_with'                     => '値は :values で始まる必要があります。',
    'unique_webhook'                  => 'このURL、トリガー、レスポンス、配信の組み合わせのWebhookがすでにあります。',
    'unique_existing_webhook'         => 'このURL、トリガー、レスポンス、配信の組み合わせを持つ別のWebhookがすでにあります。',
    'same_account_type'               => 'これらの口座は同じ口座種別でなければなりません',
    'same_account_currency'           => 'これらの口座には同じ通貨設定でなければいけません',

    // Ignore this comment

    'secure_password'                 => 'これは安全なパスワードではありません。もう一度やり直してください。詳細については、https://bit.ly/FF3-password-security を参照してください。',
    'valid_recurrence_rep_type'       => '繰り返し取引のタイプが無効です。',
    'valid_recurrence_rep_moment'     => '無効な繰り返し設定があります。',
    'invalid_account_info'            => 'アカウント情報が正しくありません。',
    'attributes'                      => [
        'email'                   => 'メールアドレス',
        'description'             => '概要',
        'amount'                  => '金額',
        'transactions.*.amount'   => '取引金額',
        'name'                    => '名称',
        'piggy_bank_id'           => '貯金箱 ID',
        'targetamount'            => '目標金額',
        'opening_balance_date'    => '残高開始日',
        'opening_balance'         => '開始残高',
        'match'                   => '一致',
        'amount_min'              => '最低額',
        'amount_max'              => '上限額',
        'title'                   => 'タイトル',
        'tag'                     => 'タグ',
        'transaction_description' => '取引の説明',
        'rule-action-value.1'     => 'ルールアクション値 #1',
        'rule-action-value.2'     => 'ルールアクション値 #2',
        'rule-action-value.3'     => 'ルールアクション値 #3',
        'rule-action-value.4'     => 'ルールアクション値 #4',
        'rule-action-value.5'     => 'ルールアクション値 #5',
        'rule-action.1'           => 'ルールアクション #1',
        'rule-action.2'           => 'ルールアクション #2',
        'rule-action.3'           => 'ルールアクション #3',
        'rule-action.4'           => 'ルールアクション #4',
        'rule-action.5'           => 'ルールアクション #5',
        'rule-trigger-value.1'    => 'ルールトリガー値 #1',
        'rule-trigger-value.2'    => 'ルールトリガー値 #2',
        'rule-trigger-value.3'    => 'ルールトリガー値 #3',
        'rule-trigger-value.4'    => 'ルールトリガー値 #4',
        'rule-trigger-value.5'    => 'ルールトリガー値 #5',
        'rule-trigger.1'          => 'ルールトリガー #1',
        'rule-trigger.2'          => 'ルールトリガー #2',
        'rule-trigger.3'          => 'ルールトリガー #3',
        'rule-trigger.4'          => 'ルールトリガー #4',
        'rule-trigger.5'          => 'ルールトリガー #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'     => '続行するには有効な引き出し元口座 ID および（または）有効な引き出し元口座名を取得する必要があります。',
    'withdrawal_source_bad_data'      => '[a] ID「:id」、名称「:name」で検索しましたが、有効な引き出し口座が見つかりませんでした。',
    'withdrawal_dest_need_data'       => '[a] 続けるには有効な預け入れ口座IDおよび（または）有効な預け入れ口座名が必要があります。',
    'withdrawal_dest_bad_data'        => 'ID「:id」、名称「:name」で検索した結果、有効な預け入れ口座が見つかりませんでした。',

    'withdrawal_dest_iban_exists'     => 'この預け入れ口座IBANはすでに資産口座または負債で使用されており、引き出し先として使用することはできません。',
    'deposit_src_iban_exists'         => 'この引き出し口座IBANはすでに資産口座または負債で使用されており、引き出し元として使用することはできません。',

    'reconciliation_source_bad_data'  => 'ID「:id」または名称「:name」で検索しましたが、有効な照合口座が見つかりませんでした。',

    'generic_source_bad_data'         => '[e] ID「:id」、名称「:name」で検索しましたが、有効な引き出し口座が見つかりませんでした。',

    'deposit_source_need_data'        => '続行するには、有効な引き出し元口座 ID および（または）有効な引き出し元口座名を取得する必要があります。',
    'deposit_source_bad_data'         => '[b] ID「:id」、名称「:name」で検索しましたが、有効な引き出し口座が見つかりませんでした。',
    'deposit_dest_need_data'          => '[b] 続けるには有効な預け入れ口座IDおよび（または）有効な預け入れ口座名が必要があります。',
    'deposit_dest_bad_data'           => 'ID「:id」、名称「:name」で検索した結果、有効な預け入れ先口座が見つかりませんでした。',
    'deposit_dest_wrong_type'         => '預け入れ先口座が適切なタイプではありません。',

    // Ignore this comment

    'transfer_source_need_data'       => '続行するには、有効な引き出し元口座 ID および（または）有効な引き出し元口座名を取得する必要があります。',
    'transfer_source_bad_data'        => '[c] ID「:id」、名称「:name」で検索しましたが、有効な引き出し口座が見つかりませんでした。',
    'transfer_dest_need_data'         => '[c] 続けるには有効な預け入れ口座IDおよび（または）有効な預け入れ口座名が必要があります。',
    'transfer_dest_bad_data'          => 'ID「:id」、名称「:name」で検索した結果、有効な預け入れ先口座が見つかりませんでした。',
    'need_id_in_edit'                 => '各分割は transaction_journal_id (有効な ID または 0 のいずれか) でなければなりません。',

    'ob_source_need_data'             => '続行するには、有効な引き出し元口座 ID および（または）有効な引き出し元口座名を取得する必要があります。',
    'lc_source_need_data'             => '続行するには有効な引き出し元口座 ID が必要です。',
    'ob_dest_need_data'               => '[d] 続行するには、有効な預け入れ口座IDおよび（または）有効な預け入れ口座名を得る必要があります。',
    'ob_dest_bad_data'                => 'ID「:id」、名称「:name」で検索した結果、有効な預け入れ先口座が見つかりませんでした。',
    'reconciliation_either_account'   => '照合を送信するには、引き出し口座または預け入れ口座を送信する必要があります。両方ではありません。',

    'generic_invalid_source'          => 'この口座を引き出し元口座として使用することはできません。',
    'generic_invalid_destination'     => 'この口座を預け入れ先口座として使用することはできません。',

    'generic_no_source'               => '引き出し口座の情報か取引ジャーナルIDを送信する必要があります。',
    'generic_no_destination'          => '預け入れ口座の情報か取引ジャーナルIDを送信する必要があります。',

    'gte.numeric'                     => ':attribute は :value 以上でなければなりません。',
    'gt.numeric'                      => ':attribute は :value より大きな値でなければいけません。',
    'gte.file'                        => ':attribute は :value キロバイト以上でなければなりません。',
    'gte.string'                      => ':attribute は :value 文字以上でなければなりません。',
    'gte.array'                       => ':attribute は :value 個以上でなければいけません。',

    'amount_required_for_auto_budget' => '金額は必須です。',
    'auto_budget_amount_positive'     => '金額はゼロ以上でなければなりません。',

    'auto_budget_period_mandatory'    => '自動予算期間は必須項目です。',

    // no access to administration:
    'no_access_user_group'            => 'この管理のための適切なアクセス権がありません。',
];

// Ignore this comment
