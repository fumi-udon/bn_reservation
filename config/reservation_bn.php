<?php

return [
    /*
    |--------------------------------------------------------------------------
    | 予約システムの基本設定
    |--------------------------------------------------------------------------
    */

    // 管理者メールアドレス

    // 本番
    'admin_emails' => explode(',', env('ADMIN_EMAILS', 'hanabishinippon@gmail.com')),

    // TEST用
    //'admin_emails' => explode(',', env('ADMIN_EMAILS', 'fuminippon@outlook.com')),

    // 予約可能時間
    'available_times' => [
        '12:00',
        '12:30',
        '13:00',
        '13:30',
        '14:00',
        '14:30',
        '14:45',        
        '18:30',
        '19:00',
        '19:30',
        '20:00',
        '20:30',
        '21:00',
        '21:30',
        '21:45',
    ],

    // 予約人数の制限
    'min_guests' => 1,
    'max_guests' => 8,

    // 予約受付開始日（何日前から予約可能か）
    'booking_start_days' => 0,  // 1:翌日から

    // 予約受付終了日（何日先まで予約可能か）
    'booking_end_days' => 8,   // x 日先まで

    // ブラックリストメールアドレス
    'blocked_emails' => [
        'blocked2@example.com',
    ],

    // 店舗情報
    'restaurant_info' => [
        'name' => 'Bistro Nippon',
        'address' => '29 Rue Tahar Ben Achour, Marsa',
        'phone' => '+216 24 986 077',
        'business_hours' => 'Mon - Sat: 12:00 PM – 3:00 PM / 6:30 PM – 10:30 PM (Last order: 10:00 PM)',
        // 'open_hours' => '12:00 - 15:00 / 18:30 - 22:30 (Last order: 22:00)',
        'open_hours' => 'Ramadan hours: 18:00 - 22:00 (Last order: 21:30)',
        'closed_days' => ['Sunday'],
    ],
];
