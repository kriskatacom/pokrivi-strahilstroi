<?php

namespace App\Controllers;

use App\Core\View;
use App\Services\OpenGraphService;

class HomeController
{
    public function index()
    {
        $seoData = [
            'title'       => 'Професионални Уеб Решения | Начало',
            'description' => 'Ние изграждаме бъдещето на вашия бизнес онлайн.',
            'og_image'    => '/assets/images/hero.webp'
        ];

        $ogService = new OpenGraphService($seoData);

        View::render('index/home/index', [
            'title'   => $seoData['title'],
            'og_tags' => $ogService->renderTags()
        ]);
    }
}
