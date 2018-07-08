<?php
// 檔案位置：resources/lang/zh-TW/shop.php

return [
    'home'        => '首頁',
    'transaction' => [
        'name'   => '交易',
        'list'   => '交易紀錄',
        'buy'    => '購買',
        'fields' => [
            'buy-count' => '購買數量',
        ],
    ],
    'merchandise' => [
        'name'             => '商品',
        'create'           => '建立商品',
        'manage'           => '管理商品',
        'edit'             => '編輯商品',
        'list'             => '商品列表',
        'page'             => '商品頁',
        'purchase-success' => '購買成功',
        'update'           => '更新商品資訊',
        'fields'           => [
            'id'              => '編號',
            'status-name'     => '商品狀態',
            'status'          => [
                'create' => '建立中',
                'sell'   => '可販售',
            ],
            'name'            => '商品名稱',
            'name-en'         => '商品英文名稱',
            'introduction'    => '商品介紹',
            'introduction-en' => '商品英文介紹',
            'photo'           => '商品照片',
            'price'           => '商品價格',
            'remain-count'    => '商品剩餘數量',
        ],
    ],
    'auth'        => [
        'sign-out'         => '登出',
        'sign-in'          => '登入',
        'sign-up'          => '註冊',
        'github-sign-in'   => 'Github 登入',
        'facebook-sign-in' => 'Facebook 登入',
    ],
    'user'        => [
        'fields' => [
            'nickname'         => '暱稱',
            'email'            => '電子信箱',
            'password'         => '密碼',
            'confirm-password' => '確認密碼',
            'type-name'        => '帳號類型',
            'type'             => [
                'general' => '一般會員',
                'admin'   => '管理者',
            ],
        ],
    ],
];