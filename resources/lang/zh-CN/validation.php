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
    
    'accepted'             => '必须接受 :attribute。',
    'active_url'           => ':attribute 并非一个有效的网址。',
    'after'                => ':attribute 必须要在 :date 之后。',
    'alpha'                => ':attribute 只能以字母组成。',
    'alpha_dash'           => ':attribute 只能以字母、整数及斜线组成。',
    'alpha_num'            => ':attribute 只能以字母及整数组成。',
    'array'                => ':attribute 必须为数组。',
    'before'               => ':attribute 必须要在 :date 之前。',
    'between'              => [
        'numeric' => ':attribute 必须介于 :min 至 :max 之间。',
        'file'    => ':attribute 必须介于 :min 至 :max kb 之间。 ',
        'string'  => ':attribute 必须介于 :min 至 :max 个字元之间。',
        'array'   => ':attribute: 必须有 :min - :max 个元素。',
    ],
    'boolean'              => ':attribute 必须为 bool 值。',
    'confirmed'            => ':attribute 确认栏位的输入并不相符。',
    'date'                 => ':attribute 并非一个有效的日期。',
    'date_format'          => ':attribute 与 :format 格式不相符。',
    'different'            => ':attribute 与 :other 必须不同。',
    'digits'               => ':attribute 必须是 :digits 位数字。',
    'digits_between'       => ':attribute 必须介于 :min 至 :max 位数字。',
    'before_or_equal'      => ':attribute 必须小于 :date 。',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => ':attribute 已经存在。',
    'email'                => ':attribute 的格式无效。',
    'exists'               => '所选择的 :attribute 选项无效。',
    'filled'               => ':attribute 不能留空。',
    'image'                => ':attribute 必须是一张图片。',
    'in'                   => '所选择的 :attribute 选项无效。',
    'in_array'             => ':attribute 沒有在 :other 中。',
    'integer'              => ':attribute 必须是一个整數。',
    'ip'                   => ':attribute 必须是一个有效的 IP 地址。',
    'json'                 => ':attribute 必须是正确的 JSON 字符串。',
    'max'                  => [
        'numeric' => ':attribute 不能大于 :max。',
        'file'    => ':attribute 不能大于 :max kb。',
        'string'  => ':attribute 不能多于 :max 个字元。',
        'array'   => ':attribute 最多有 :max 个元素。',
    ],
    'mimes'                => ':attribute 必须为 :values 的档案。',
    'min'                  => [
        'numeric' => ':attribute 不能小于 :min。',
        'file'    => ':attribute 不能小于 :min kb。',
        'string'  => ':attribute 不能小于 :min 个字元。',
        'array'   => ':attribute 至少有 :min 个元素。',
    ],
    'not_in'               => '所选择的 :attribute 选项无效。',
    'numeric'              => ':attribute 必须为一个数字。',
    'present'              => ':attribute 必须存在。',
    'regex'                => ':attribute 的格式错误。',
    'required'             => ':attribute 不能留空。',
    'required_if'          => '当 :other 是 :value 時 :attribute 不能留空。',
    'required_unless'      => '当 :other 不是 :value 時 :attribute 不能留空。',
    'required_with'        => '当 :values 出现时 :attribute 不能留空。',
    'required_with_all'    => '当 :values 都出现时 :attribute 不能为空。',
    'required_without'     => '当 :values 留空時 :attribute field 不能留空。',
    'required_without_all' => '当 :values 都不出现时 :attribute 不能留空。',
    'same'                 => ':attribute 与 :other 必须相同。',
    'size'                 => [
        'numeric' => ':attribute 的大小必须是 :size。',
        'file'    => ':attribute 的大小必须是 :size kb。',
        'string'  => ':attribute 必须是 :size 个字元。',
        'array'   => ':attribute 必须是 :size 个元素。',
    ],
    'string'               => ':attribute 必须是一个字符串。',
    'timezone'             => ':attribute 必须是一个正确的时区值。',
    'unique'               => ':attribute 已经存在。',
    'url'                  => ':attribute 的格式错误。',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention 'attribute.rule' to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of 'email'. This simply helps us make messages a little cleaner.
    |
    */
    'attributes'           => [
        // 會員
        'nickname'              => '昵称',
        'email'                 => '电子信箱',
        'password'              => '密码',
        'password_confirmation' => '确认密码',
        // 商品
        'name'            => '商品名称',
        'name_en'         => '商品英文名称',
        'introduction'    => '商品介绍',
        'introduction_en' => '商品英文介绍',
        'price'           => '商品价格',
        'remain_count'    => '商品剩余数量',
    ],
];
