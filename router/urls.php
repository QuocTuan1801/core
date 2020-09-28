<?php

/**
 * Mặc định file nằm trong thư mục pages
 * ! folder: pages
 */
$pages = [
    // Controller trang chủ
    'index' => [
        // Method index
        'index' => [
            'title' => 'Trang chủ',
            'view' => 'main/index/index.php',
            'handle' => 'main/index.handle.php'
        ]
    ],
    // Controller shop
    'shop' => [
        // Method
        'index' => [
            'title' => 'Danh sách sản phẩm',
            'view' => 'main/shop/list.php',
            'handle' => 'main/product.handle.php'
        ],
        'detail' => [
            'title' => 'Chi tiết sản phẩm',
            'view' => 'main/shop/detail.php',
            'handle' => 'main/product.handle.php'
        ]
    ]
];