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
            'description' => 'Страхил Строй - Бърз ремонт на покриви, хидроизолация, вътрешни ремонти. Качество и гаранция. Работим на ниски цени.',
            'keywords'    => 'Ремонт на покриви София, цени за ремонт, хидроизолация, изграждане на покриви, улуци, покрина обшивка, битумна хидроизолация',
        ];

        $ogService = new OpenGraphService($seoData);

        View::render('index/home/index', [
            'title'   => $seoData['title'],
            'og_tags' => $ogService->renderTags()
        ]);
    }

    public function contacts()
    {
        $seoData = [
            'title'       => 'Контакти със Страхил Строй - Оглед и Оферта за Ремонт на Покрив',
            'description' => 'Свържете се със Страхил Строй за безплатен оглед и оферта за ремонт на покриви в София и страната. Телефон: +359 89 481 19 86.',
            'keywords'    => 'контакти ремонт на покриви, телефон строителна фирма, оферта за покрив',
        ];

        $ogService = new OpenGraphService($seoData);

        View::render('index/contacts/index', [
            'title'   => $seoData['title'],
            'og_tags' => $ogService->renderTags()
        ]);
    }

    public function reviews()
    {
        $seoData = [
            'title'       => 'Мнения на клиенти от услуги за ремонт на покриви Страхил Строй',
            'description' => 'Може да прочетете мнения на наши клиенти относно работата по техните имоти.',
            'keywords'    => 'Мнения на клиенти',
        ];

        $ogService = new OpenGraphService($seoData);

        View::render('index/reviews/index', [
            'title'   => $seoData['title'],
            'og_tags' => $ogService->renderTags()
        ]);
    }

    public function gallery()
    {
        $seoData = [
            'title'       => 'Галерия снимки от обекти за ремонт на покриви от Страхил Строй',
            'description' => 'Галерия – тук може да видите снимки на проекти на Страхил Строй фирма за изработка и ремонт на покриви.',
            'keywords'    => 'Галерия',
        ];

        $ogService = new OpenGraphService($seoData);

        View::render('index/gallery/index', [
            'title'   => $seoData['title'],
            'og_tags' => $ogService->renderTags()
        ]);
    }

    public function video()
    {
        $seoData = [
            'title'       => 'Видео Галерия - Страхил Строй',
            'description' => 'Видео Галерия  тук може да откриете нашите видеа за предлаганите от нас видеа.',
            'keywords'    => 'Видео',
        ];

        $ogService = new OpenGraphService($seoData);

        View::render('index/video/index', [
            'title'   => $seoData['title'],
            'og_tags' => $ogService->renderTags()
        ]);
    }

    public function offers()
    {
        $seoData = [
            'title'       => 'Цени за ремонт на покриви от фирма Страхил Строй',
            'description' => 'Оферти и цени за ремонт от Страхил Строй - тук може да намерите информация за цените на предлаганите от нас услуги',
        ];

        $ogService = new OpenGraphService($seoData);

        View::render('index/offers/index', [
            'title'   => $seoData['title'],
            'og_tags' => $ogService->renderTags()
        ]);
    }

    public function vutreshniRemonti()
    {
        $seoData = [
            'title'       => 'Вътрешни ремонти - Замазки, Боядисване, Мазилки - Страхил Строй',
            'description' => 'Ние извършваме и всички видове вътрешни ремонти: Замазки ⭐ Мазилки ⭐ Ръчно и машинно боядисване ⭐ Сухо строителство ⭐Ниски цени.',
            'keywords'    => 'Вътрешни ремонти,ЗАМАЗКИ, МАЗИЛКИ, ШПАКЛОВКИ, РЪЧНО И МАШИННО БОЯДИСВАНЕ, СУХО СТРОИТЕЛСТВО'
        ];

        $ogService = new OpenGraphService($seoData);

        View::render('index/vutreshni-remonti/index', [
            'title'   => $seoData['title'],
            'og_tags' => $ogService->renderTags()
        ]);
    }

    public function services()
    {
        $seoData = [
            'title'       => 'Ремонт на покриви и изграждане на покриви, хидроизолация, улуци',
            'description' => 'Ниски цени за ремонт на покриви, изграждане на нов покрив и полагане на хидроизолация. Работим в услугите за ремонт на покрив от 2000 година',
            'keywords'    => 'ремонт на покриви, хидроизолация, изграждане на покриви, улуци, ремонт на покрив'
        ];

        $ogService = new OpenGraphService($seoData);

        View::render('index/services/index', [
            'title'   => $seoData['title'],
            'og_tags' => $ogService->renderTags()
        ]);
    }

    public function staraZagora()
    {
        $seoData = [
            'title'       => 'Ремонт на покриви в Стара Загора на ниски цени от Страхил Строй',
            'description' => 'Бърз и качествен ремонт на покриви в Стара Загора на ниски цени. Опитни бригади за ремонт на покрив в Ст. Загора - Страхил Строй',
        ];
        $this->renderCityView('index/stara-zagora/index', $seoData);
    }

    public function sofia()
    {
        $seoData = [
            'title'       => 'Ремонт на покриви в София на ниски цени от Страхил Строй',
            'description' => 'Бърз и качествен ремонт на покриви в София на ниски цени. Професионални услуги за Вашия покрив в София от Страхил Строй.',
        ];
        $this->renderCityView('index/sofia/index', $seoData);
    }

    public function plovdiv()
    {
        $seoData = [
            'title'       => 'Ремонт на покриви в Пловдив на ниски цени от Страхил Строй',
            'description' => 'Търсите ремонт на покриви в Пловдив? Страхил Строй предлага качество, бързина и дългогодишна гаранция на достъпни цени.',
        ];
        $this->renderCityView('index/plovdiv/index', $seoData);
    }

    public function varna()
    {
        $seoData = [
            'title'       => 'Ремонт на покриви във Варна на ниски цени от Страхил Строй',
            'description' => 'Качествен ремонт на покриви във Варна и региона. Поправка на течове, керемиди и хидроизолация от Страхил Строй.',
        ];
        $this->renderCityView('index/varna/index', $seoData);
    }

    public function pernik()
    {
        $seoData = [
            'title'       => 'Ремонт на покриви в Перник на ниски цени от Страхил Строй',
            'description' => 'Експертен ремонт на покриви в Перник. Ниски цени, качествени материали и гарантиран резултат от Страхил Строй.',
        ];
        $this->renderCityView('index/pernik/index', $seoData);
    }

    public function burgas()
    {
        $seoData = [
            'title'       => 'Ремонт на покриви в Бургас на ниски цени от Страхил Строй',
            'description' => 'Бързи и надеждни ремонтни дейности за покриви в Бургас. Страхил Строй - Вашият партньор за здрави покриви край морето.',
        ];
        $this->renderCityView('index/burgas/index', $seoData);
    }

    public function pazarjik()
    {
        $seoData = [
            'title'       => 'Ремонт на покриви в Пазарджик на ниски цени от Страхил Строй',
            'description' => 'Ремонт на покриви в Пазарджик от професионалисти. Смяна на керемиди, улуци и изграждане на нови конструкции.',
        ];
        $this->renderCityView('index/pazarjik/index', $seoData);
    }

    public function ihtiman()
    {
        $seoData = [
            'title'       => 'Ремонт на покриви в Ихтиман на ниски цени от Страхил Строй',
            'description' => 'Професионален ремонт на покриви в Ихтиман. Гарантирано качество и коректност на цени без конкуренция от Страхил Строй.',
        ];
        $this->renderCityView('index/ihtiman/index', $seoData);
    }

    public function lovech()
    {
        $seoData = [
            'title'       => 'Ремонт на покриви в Ловеч на ниски цени от Страхил Строй',
            'description' => 'Ремонт и изграждане на покриви в град Ловеч. Страхил Строй предлага цялостни решения с до 15 години гаранция.',
        ];
        $this->renderCityView('index/lovech/index', $seoData);
    }

    private function renderCityView($viewPath, $seoData)
    {
        $ogService = new OpenGraphService($seoData);

        View::render($viewPath, [
            'title'   => $seoData['title'],
            'og_tags' => $ogService->renderTags()
        ]);
    }
}