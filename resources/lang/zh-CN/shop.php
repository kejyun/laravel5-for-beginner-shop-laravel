<?php
// 檔案位置：resources/lang/zh-CN/shop.php

return [
    'home'        => '首页',
    'transaction' => [
        'name'   => '交易',
        'list'   => '交易纪录',
        'buy'    => '购买',
        'fields' => [
            'buy-count' => '购买数量',
        ],
    ],
    'merchandise' => [
        'name'             => '商品',
        'create'           => '建立商品',
        'manage'           => '管理商品',
        'edit'             => '编辑商品',
        'list'             => '商品列表',
        'page'             => '商品页',
        'purchase-success' => '购买成功',
        'update'           => '更新商品资讯',
        'fields'           => [
            'id'              => '编号',
            'status-name'     => '商品状态',
            'status'          => [
                'create' => '建立中',
                'sell'   => '可贩售',
            ],
            'name'            => '商品名称',
            'name-en'         => '商品英文名称',
            'introduction'    => '商品介紹',
            'introduction-en' => '商品英文介紹',
            'photo'           => '商品照片',
            'price'           => '商品价格',
            'remain-count'    => '商品剩余数量',
        ],
    ],
    'auth'        => [
        'sign-out'         => '登出',
        'sign-in'          => '登入',
        'sign-up'          => '注册',
        'github-sign-in'   => 'Github 登入',
        'facebook-sign-in' => 'Facebook 登入',
    ],
    'user'        => [
        'fields' => [
            'nickname'         => '昵称',
            'email'            => '电子信箱',
            'password'         => '密码',
            'confirm-password' => '确认密码',
            'type-name'        => '帐号类型',
            'type'             => [
                'general' => '一般用户',
                'admin'   => '管理员',
            ],
        ],
    ],
];