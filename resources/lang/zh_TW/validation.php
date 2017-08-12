<?php
declare(strict_types=1);

/**
 * validation.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

return [
    'iban'                           => '這不是有效的 IBAN。',
    'unique_account_number_for_user' => '此帳號號碼已經存在。',
    'deleted_user'                   => 'Due to security constraints, you cannot register using this email address.',
    'rule_trigger_value'             => '此值不能用於所選擇的事件。',
    'rule_action_value'              => '此值不能用於所選擇的動作。',
    'invalid_domain'                 => '基於安全理由，你無法使用此域名註冊。',
    'file_already_attached'          => '檔案 ":name" 已附加到該物件上。',
    'file_attached'                  => '已成功上傳檔案 ":name"。',
    'file_invalid_mime'              => '檔案 ":name" 的類型為 ":mime"，並不容許上載此類型的檔案。',
    'file_too_large'                 => '檔案 ":name" 過大。',
    'belongs_to_user'                => ':attribute 的值是未知的。',
    'accepted'                       => ':attribute 必須被接受。',
    'bic'                            => 'This is not a valid BIC.',
    'more'                           => ':attribute must be larger than zero.',
    'active_url'                     => ':attribute 不是有效的URL。',
    'after'                          => ':attribute 必須是一個在 :date 之後的日期。',
    'alpha'                          => ':attribute 只允許包含字母。',
    'alpha_dash'                     => ':attribute 只允許數字，字母，和下劃線。',
    'alpha_num'                      => ':attribute 只允許包含數字和字母。',
    'array'                          => ':attribute 必須是一個陣列。',
    'unique_for_user'                => ':attribute 已存在。',
    'before'                         => ':attribute 必須是一個在 :date 之前的日期。',
    'unique_object_for_user'         => '這個名稱已被使用。',
    'unique_account_for_user'        => '這個帳號名稱已被使用。',
    'between.numeric'                => ':attribute 必須在 :min 和 :max 之間。',
    'between.file'                   => ':attribute 必須在 :min kB到 :max kB之間。',
    'between.string'                 => ':attribute 包含的字符數量必須在 :min 到 :max 之間。',
    'between.array'                  => ':attribute 的數目必須在 :min 到 :max 之間。',
    'boolean'                        => ':attribute 必須為 true 或 false。',
    'confirmed'                      => ':attribute 的屬性不相符',
    'date'                           => ':attribute 不是有效的日期。',
    'date_format'                    => ':attribute 不符合格式 :format 。',
    'different'                      => ':attribute 和 :other 不能相同。',
    'digits'                         => ':attribute 必須是 :digits 位數字。',
    'digits_between'                 => ':attribute 必須在 :min 位和 :max 位數字之間。',
    'email'                          => ':attribute 必須是一個有效的電子郵件地址。',
    'filled'                         => ':attribute 欄位是必填的。',
    'exists'                         => '所選的 :attribute 無效。',
    'image'                          => ':attribute 必須是圖片。',
    'in'                             => '所選的 :attribute 無效。',
    'integer'                        => ':attribute 必須是整數。',
    'ip'                             => ':attribute 必須是一個有效的 IP 地址。',
    'json'                           => ':attribute 必須是一個有效的 JSON 字符串。',
    'max.numeric'                    => ':attribute 不能大於 :max。',
    'max.file'                       => ':attribute 不能大於 :max kB。',
    'max.string'                     => ':attribute 不能大於 :max 字元。',
    'max.array'                      => ':attribute 的數量不能超過 :max 個。',
    'mimes'                          => ':attribute 的文件類型必須是 :values 。',
    'min.numeric'                    => ':attribute 至少需要 :min。',
    'min.file'                       => ':attribute 大小至少為 :min KB。',
    'min.string'                     => ':attribute 最少需要有 :min 個字符。',
    'min.array'                      => ':attribute 至少需要有 :min 項。',
    'not_in'                         => '所選的 :attribute 無效。',
    'numeric'                        => ':attribute 必須是數字。',
    'regex'                          => ':attribute 格式無效。',
    'required'                       => ':attribute 欄位是必填的。',
    'required_if'                    => ':attribute 欄位在 :other 是 :value 時是必填的。',
    'required_unless'                => '除非 :other 是 :value ，否則 :attribute 是必填的。',
    'required_with'                  => '當 :values​​ 存在時， :attribute 是必填的。',
    'required_with_all'              => '當 :values​​ 存在時， :attribute 是必填的。',
    'required_without'               => '當 :values​​ 不存在時， :attribute 是必填的。',
    'required_without_all'           => '當沒有任何 :values​​ 存在時， :attribute 為必填項。',
    'same'                           => ':attribute 和 :other 必須匹配。',
    'size.numeric'                   => ':attribute 必須是 :size 位。',
    'size.file'                      => ':attribute 必須為 :size KB。',
    'size.string'                    => ':attribute 必須包含 :size 個字符。',
    'size.array'                     => ':attribute 必須包含 :size 個項目。',
    'unique'                         => ':attribute 已經存在。',
    'string'                         => ':attribute 必須是一個字符串。',
    'url'                            => ':attribute 格式無效。',
    'timezone'                       => ':attribute 必須是有效的區域。',
    '2fa_code'                       => ':attribute 格式無效。',
    'dimensions'                     => 'The :attribute has invalid image dimensions.',
    'distinct'                       => 'The :attribute field has a duplicate value.',
    'file'                           => 'The :attribute must be a file.',
    'in_array'                       => 'The :attribute field does not exist in :other.',
    'present'                        => 'The :attribute field must be present.',
    'amount_zero'                    => 'The total amount cannot be zero',
    'secure_password'                => 'This is not a secure password. Please try again. For more information, visit https://goo.gl/NCh2tN',
];