<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'invalid_domain'          => 'Due to security constraints, you cannot register from this domain.',
    'file_already_attached'   => 'Uploaded file ":name" is already attached to this object.',
    'file_attached'           => 'Succesfully uploaded file ":name".',
    'file_invalid_mime'       => 'File ":name" is of type ":mime" which is not accepted as a new upload.',
    'file_too_large'          => 'File ":name" is too large.',
    "accepted"                => "The :attribute must be accepted.",
    "active_url"              => "The :attribute is not a valid URL.",
    "after"                   => "The :attribute must be a date after :date.",
    "alpha"                   => "The :attribute may only contain letters.",
    "alpha_dash"              => "The :attribute may only contain letters, numbers, and dashes.",
    "alpha_num"               => "The :attribute may only contain letters and numbers.",
    "array"                   => "The :attribute must be an array.",
    "unique_for_user"         => "There already is an entry with this :attribute.",
    "before"                  => "The :attribute must be a date before :date.",
    'unique_object_for_user'  => 'This name is already in use',
    'unique_account_for_user' => 'This account name is already in use',
    "between.numeric"         => "The :attribute must be between :min and :max.",
    "between.file"            => "The :attribute must be between :min and :max kilobytes.",
    "between.string"          => "The :attribute must be between :min and :max characters.",
    "between.array"           => "The :attribute must have between :min and :max items.",
    "boolean"                 => "The :attribute field must be true or false.",
    "confirmed"               => "The :attribute confirmation does not match.",
    "date"                    => "The :attribute is not a valid date.",
    "date_format"             => "The :attribute does not match the format :format.",
    "different"               => "The :attribute and :other must be different.",
    "digits"                  => "The :attribute must be :digits digits.",
    "digits_between"          => "The :attribute must be between :min and :max digits.",
    "email"                   => "The :attribute must be a valid email address.",
    "filled"                  => "The :attribute field is required.",
    "exists"                  => "The selected :attribute is invalid.",
    "image"                   => "The :attribute must be an image.",
    "in"                      => "The selected :attribute is invalid.",
    "integer"                 => "The :attribute must be an integer.",
    "ip"                      => "The :attribute must be a valid IP address.",
    "max.numeric"             => "The :attribute may not be greater than :max.",
    "max.file"                => "The :attribute may not be greater than :max kilobytes.",
    "max.string"              => "The :attribute may not be greater than :max characters.",
    "max.array"               => "The :attribute may not have more than :max items.",
    "mimes"                   => "The :attribute must be a file of type: :values.",
    "min.numeric"             => "The :attribute must be at least :min.",
    "min.file"                => "The :attribute must be at least :min kilobytes.",
    "min.string"              => "The :attribute must be at least :min characters.",
    "min.array"               => "The :attribute must have at least :min items.",
    "not_in"                  => "The selected :attribute is invalid.",
    "numeric"                 => "The :attribute must be a number.",
    "regex"                   => "The :attribute format is invalid.",
    "required"                => "The :attribute field is required.",
    "required_if"             => "The :attribute field is required when :other is :value.",
    "required_with"           => "The :attribute field is required when :values is present.",
    "required_with_all"       => "The :attribute field is required when :values is present.",
    "required_without"        => "The :attribute field is required when :values is not present.",
    "required_without_all"    => "The :attribute field is required when none of :values are present.",
    "same"                    => "The :attribute and :other must match.",
    "size.numeric"            => "The :attribute must be :size.",
    "size.file"               => "The :attribute must be :size kilobytes.",
    "size.string"             => "The :attribute must be :size characters.",
    "size.array"              => "The :attribute must contain :size items.",
    "unique"                  => "The :attribute has already been taken.",
    "url"                     => "The :attribute format is invalid.",
    "timezone"                => "The :attribute must be a valid zone.",
    'attributes' => [],

];
