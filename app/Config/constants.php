<?php

define('NAVBAR_ITEMS', [
    ['title' => 'Начало', 'url' => '/'],
    ['title' => 'Ремонт на покриви', 'url' => '/remont-na-pokrivi'],
    [
        'title' => 'Градове', 
        'url' => '/gradove',
        'children' => [
            ['title' => 'София', 'url' => '/sofia'],
            ['title' => 'Пловдив', 'url' => '/plovdiv'],
            ['title' => 'Варна', 'url' => '/varna'],
            ['title' => 'Перник', 'url' => '/pernik'],
            ['title' => 'Бургас', 'url' => '/burgas'],
            ['title' => 'Пазарджик', 'url' => '/pazardvik'],
            ['title' => 'Ихтиман', 'url' => '/ihtiman'],
            ['title' => 'Ловеч', 'url' => '/lovech'],
            ['title' => 'Вътрешни ремонти', 'url' => '/vutreshni-remonti'],
        ]
    ],
    ['title' => 'Цени', 'url' => '/oferti'],
    ['title' => 'Галерия', 'url' => '/galeriya'],
    ['title' => 'От клиенти', 'url' => '/otzyvi'],
]);