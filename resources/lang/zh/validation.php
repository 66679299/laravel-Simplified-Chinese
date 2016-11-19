<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-12 23:53:33
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    | 验证器语言行
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    | 下列语言行包含了验证器类默认的错误信息。
    | 像长度规则一样，某些规则有着多种验证版本。
    | 你可以随时修改这些提示消息。
    |
    */

    // 'accepted'             => 'The :attribute must be accepted.',
    'accepted'             => ':attribute 必须被接受',
    // 'active_url'           => 'The :attribute is not a valid URL.',
    'active_url'           => ':attribute 不是一个有效的URL',
    // 'after'                => 'The :attribute must be a date after :date.',
    'after'                => ':attribute 必须是一个在 :date 之后的日期',
    // 'alpha'                => 'The :attribute may only contain letters.',
    'alpha'                => ':attribute 只能包含字母',
    // 'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_dash'           => ':attribute 只能包含字母，数字和下划线。',
    // 'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'alpha_num'            => ':attribute 只能包含字母和数字。',
    // 'array'                => 'The :attribute must be an array.',
    'array'                => ':attribute 必须为一个数组',
    // 'before'               => 'The :attribute must be a date before :date.',
    'before'               => ':attribute 必须是一个在 :date 之前的日期',
    // 'between'              => [
    'between'              => [
        // 'numeric' => 'The :attribute must be between :min and :max.',
        'numeric' => ':attribute 必须在 :min 和 :max 之间',
        // 'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'file'    => ':attribute 必须在 :min 和 :max kb之间.',
        // 'string'  => 'The :attribute must be between :min and :max characters.',
        'string'  => ':attribute 字符串长度必须在 :min 和 :max 之间',
        // 'array'   => 'The :attribute must have between :min and :max items.',
        'array'   => ':attribute 的元素个数必须在 :min 和 :max 之间',
    // ],
    ],
    // 'boolean'              => 'The :attribute field must be true or false.',
    'boolean'              => ':attribute 字段必须为真或者假',
    // 'confirmed'            => 'The :attribute confirmation does not match.',
    'confirmed'            => ':attribute 未确认',
    // 'date'                 => 'The :attribute is not a valid date.',
    'date'                 => ':attribute 不是一个有效的日期',
    // 'date_format'          => 'The :attribute does not match the format :format.',
    'date_format'          => ':attribute 格式与 :format 不匹配',
    // 'different'            => 'The :attribute and :other must be different.',
    'different'            => ':attribute 和 :other 必须不同',
    // 'digits'               => 'The :attribute must be :digits digits.',
    'digits'               => ':attribute 必须为 :digits',
    // 'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'digits_between'       => ':attribute 必须在 :min 和 :max 之间',
    // 'dimensions'           => 'The :attribute has invalid image dimensions.',
    'dimensions'           => ':attribute 的图片尺寸无效',
    // 'distinct'             => 'The :attribute field has a duplicate value.',
    'distinct'             => ':attribute 已有相同的值。',
    // 'email'                => 'The :attribute must be a valid email address.',
    'email'                => ':attribute 必须为一个有效的Email地址',
    // 'exists'               => 'The selected :attribute is invalid.',
    'exists'               => '选择项 :attribute 非法',
    // 'file'                 => 'The :attribute must be a file.',
    'file'                 => ':attribute 必须为一个文件',
    // 'filled'               => 'The :attribute field is required.',
    'filled'               => ':attribute 字段必须填写',
    // 'image'                => 'The :attribute must be an image.',
    'image'                => ':attribute 必须为一张图片',
    // 'in'                   => 'The selected :attribute is invalid.',
    'in'                   => '选择项 :attribute 非法',
    // 'in_array'             => 'The :attribute field does not exist in :other.',
    'in_array'             => ':attribute 字段在 :other 中不存在',
    // 'integer'              => 'The :attribute must be an integer.',
    'integer'              => ':attribute 必须为一个整数',
    // 'ip'                   => 'The :attribute must be a valid IP address.',
    'ip'                   => ':attribute 必须为一个有效的IP',
    // 'json'                 => 'The :attribute must be a valid JSON string.',
    'json'                 => ':attribute 必须为一个有效的JSON字符串',
    // 'max'                  => [
    'max'                  => [
        // 'numeric' => 'The :attribute may not be greater than :max.',
        'numeric' => ':attribute 不能大于 :max',
        // 'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'file'    => ':attribute 不能大于 :max kb.',
        // 'string'  => 'The :attribute may not be greater than :max characters.',
        'string'  => ':attribute 不能超过 :max 个字符',
        // 'array'   => 'The :attribute may not have more than :max items.',
        'array'   => ':attribute 不能超过 :max 个条目',
    // ],
    ],
    // 'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimes'                => ':attribute 的文件类型必须为 :values',
    // 'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => ':attribute 必须为 :values 这种类型',
    // 'min'                  => [
    'min'                  => [
        // 'numeric' => 'The :attribute must be at least :min.',
        'numeric' => ':attribute 不能小于 :min',
        // 'file'    => 'The :attribute must be at least :min kilobytes.',
        'file'    => ':attribute 不能小于 :min kb',
        // 'string'  => 'The :attribute must be at least :min characters.',
        'string'  => ':attribute 不能超过 :min 个字符',
        // 'array'   => 'The :attribute must have at least :min items.',
        'array'   => ':attribute 不能少于 :min 个条目',
    // ],
    ],
    // 'not_in'               => 'The selected :attribute is invalid.',
    'not_in'               => '选择项 :attribute 非法',
    // 'numeric'              => 'The :attribute must be a number.',
    'numeric'              => ':attribute 必须为一个数字',
    // 'present'              => 'The :attribute field must be present.',
    'present'              => ':attribute 字段必须存在',
    // 'regex'                => 'The :attribute format is invalid.',
    'regex'                => ':attribute 格式不匹配',
    // 'required'             => 'The :attribute field is required.',
    'required'             => ':attribute 字段必须填写',
    // 'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_if'          => '当 :other 为 :value 时 :attribute 必须填写',
    // 'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_unless'      => ':attribute 必须填写，除非 :other 为 :values.',
    // 'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with'        => '当 :values 存在时 :attribute 必须填写',
    // 'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_with_all'    => '当 :values 存在时 :attribute 必须填写',
    // 'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without'     => '当 :values 不存在时 :attribute 必须填写',
    // 'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'required_without_all' => '当 :values 不存在时 :attribute 必须填写',
    // 'same'                 => 'The :attribute and :other must match.',
    'same'                 => ':attribute 和 :other 必须一模一样',
    // 'size'                 => [
    'size'                 => [
        // 'numeric' => 'The :attribute must be :size.',
        'numeric' => ':attribute 的大小必须为 :size.',
        // 'file'    => 'The :attribute must be :size kilobytes.',
        'file'    => ':attribute 的文件大小必须为 :size kb.',
        // 'string'  => 'The :attribute must be :size characters.',
        'string'  => ':attribute 的字符串大小必须为 :size',
        // 'array'   => 'The :attribute must contain :size items.',
        'array'   => ':attribute 必须包含 :size 数量的条目.',
    // ],
    ],
    // 'string'               => 'The :attribute must be a string.',
    'string'               => ':attribute 必须为一个字符串',
    // 'timezone'             => 'The :attribute must be a valid zone.',
    'timezone'             => ':attribute 必须为一个有效的时区',
    // 'unique'               => 'The :attribute has already been taken.',
    'unique'               => ':attribute 已存在',
    // 'uploaded'             => 'The :attribute failed to upload.',
    'uploaded'             => ':attribute 上传失败',
    // 'url'                  => 'The :attribute format is invalid.',
    'url'                  => ':attribute 格式错误',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    | 自定义验证语言行
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    | 这里你可以使用便捷的"attribute.rule"方式为这些语言行命名，
    | 为这些属性指明自定义验证消息。
    | 这里可以快速为一个属性规则定义一个自定义语言行。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
            '规则名' => '自定义消息',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    | 自定义验证器属性
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    | 就像使用E-Mail代替email一样，
    | 下面列举的语言行将使用一些有好的可读性占位符代替原有的属性。
    | 这帮助我们将提示消息做的更加简洁明了。
    |
    */

    'attributes' => [],

];
