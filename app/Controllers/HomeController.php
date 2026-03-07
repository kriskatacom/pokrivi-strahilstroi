<?php

namespace App\Controllers;

use App\Core\View;
use App\Services\OpenGraphService;

class HomeController
{
    public function index()
    {
        $seoData = [
            'title'       => 'Бърз ремонт на покриви в София, хидроизолация, вътрешни ремонти - Страхил Строй',
            'description' => 'Предлагаме качествен ремонт на покриви за клиентите от София на конкурентни цени. Опитни строители за ремонт на покрив в София - Страхил Строй',
            'og_image'    => '/assets/images/hero.webp'
        ];

        $ogService = new OpenGraphService($seoData);

        View::render('index/home/index', [
            'title'   => $seoData['title'],
            'og_tags' => $ogService->renderTags()
        ]);
    }
}
