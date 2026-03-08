<?php
$services = [
    [
        'title' => 'Ремонт на покриви',
        'image' => '/assets/images/services/remont-na-pokrivi.webp',
        'url'   => '/uslugi/remont-na-pokrivi'
    ],
    [
        'title' => 'Хидроизолация',
        'image' => '/assets/images/services/hydroisolation.webp',
        'url'   => ''
    ],
    [
        'title' => 'Асфалтиране',
        'image' => '/assets/images/services/asphalting.webp',
        'url'   => ''
    ],
    [
        'title' => 'Събаряне на сгради',
        'image' => '/assets/images/services/house-deconstruction.webp',
        'url'   => '/uslugi/remont-na-pokrivi'
    ],
    [
        'title' => 'Груб строеж',
        'image' => '/assets/images/services/rough-construction.webp',
        'url'   => ''
    ],
];
?>

<section class="py-10 bg-slate-50 overflow-hidden">
    <div class="container mx-auto px-4">

        <div class="flex items-end justify-between mb-12">
            <div>
                <span class="text-primary font-bold uppercase tracking-widest text-sm">Какво предлагаме</span>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mt-2 uppercase">Нашите <span class="text-red-600">Услуги</span></h2>
            </div>
            <div class="hidden md:flex space-x-2">
                <div class="swiper-button-prev-custom w-12 h-12 rounded-full border-2 border-primary text-primary flex items-center justify-center cursor-pointer hover:bg-primary hover:text-white transition duration-300">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <div class="swiper-button-next-custom w-12 h-12 rounded-full border-2 border-primary text-primary flex items-center justify-center cursor-pointer hover:bg-primary hover:text-white transition duration-300">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
        </div>

        <div class="swiper servicesSwiper">
            <div class="swiper-wrapper">
                <?php foreach ($services as $service): ?>
                    <div class="swiper-slide h-auto">
                        <a href="<?= $service['url'] ?>">
                            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 group border border-slate-100 h-full flex flex-col">
                                <div class="relative aspect-4/3 overflow-hidden">
                                    <img src="<?= $service['image'] ?>" alt="<?= $service['title'] ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                                        <span class="text-white text-xs font-bold uppercase tracking-widest">Виж детайли</span>
                                    </div>
                                </div>
                                <div class="p-6 grow flex items-center justify-center text-center">
                                    <h3 class="text-lg font-black text-slate-800 uppercase tracking-tight group-hover:text-primary transition-colors">
                                        <?= $service['title'] ?>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination relative! mt-10! lg:hidden"></div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.servicesSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            // Навигация
            navigation: {
                nextEl: '.swiper-button-next-custom',
                prevEl: '.swiper-button-prev-custom',
            },
            // Пагинация
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // Адаптивност
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    });
</script>