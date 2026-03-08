<?php

define('NAVBAR_ITEMS', [
    ['title' => 'Начало', 'url' => '/'],
    ['title' => 'Ремонт на покриви', 'url' => '/services'],
    [
        'title' => 'Градове',
        'url' => '#',
        'children' => [
            ['title' => 'София', 'url' => '/sofia'],
            ['title' => 'Стара Загора', 'url' => '/stara-zagora'],
            ['title' => 'Пловдив', 'url' => '/plovdiv'],
            ['title' => 'Варна', 'url' => '/varna'],
            ['title' => 'Перник', 'url' => '/pernik'],
            ['title' => 'Бургас', 'url' => '/burgas'],
            ['title' => 'Пазарджик', 'url' => '/pazarjik'],
            ['title' => 'Ихтиман', 'url' => '/ihtiman'],
            ['title' => 'Ловеч', 'url' => '/lovech'],
            ['title' => 'Вътрешни ремонти', 'url' => '/vutreshni-remonti'],
        ]
    ],
    ['title' => 'Цени', 'url' => '/offers'],
    ['title' => 'Галерия', 'url' => '#', 'children' => [
        ['title' => 'Снимки', 'url' => '/gallery'],
        ['title' => 'Видео', 'url' => '/video'],
    ]],
    ['title' => 'От клиенти', 'url' => '/reviews'],
]);
