<?php
// Автоматично взимане на всички снимки от папката
$dir = "assets/images/2021/";
$gallery_images = glob($dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
// Сортираме ги по име (1, 2, 3...)
sort($gallery_images, SORT_NATURAL);
?>

<section class="py-12 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <div class="lg:w-2/3">
                <div class="mb-6 border-b border-slate-200 pb-4">
                    <h2 class="text-2xl font-black text-slate-800 uppercase italic">
                        Нашите <span class="text-red-600">Обекти</span>
                    </h2>
                    <p class="text-slate-500 text-sm uppercase font-bold tracking-wider">Реализирани проекти 2020 - 2021</p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                    <?php foreach ($gallery_images as $img): ?>
                        <a href="/<?= $img ?>" data-fancybox="main-gallery" class="group relative block overflow-hidden rounded-lg shadow-sm aspect-square bg-slate-200">
                            <img src="/<?= $img ?>" alt="Ремонт на покрив" 
                                 class="w-full h-full object-cover transition duration-500 group-hover:scale-110"
                                 loading="lazy">
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <i class="fa-solid fa-magnifying-glass-plus text-white text-2xl"></i>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <aside class="lg:w-1/3 space-y-6">
                
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                    <h3 class="text-lg font-black uppercase italic mb-4 border-l-4 border-red-600 pl-3">Услуги / Брой обекти</h3>
                    <ul class="space-y-3">
                        <li class="flex justify-between items-center border-b border-slate-50 pb-2">
                            <span class="text-slate-700 font-medium text-sm">Ремонт на стари покриви</span>
                            <span class="bg-slate-100 text-red-600 font-black px-2 py-1 rounded text-xs">6554</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-slate-50 pb-2">
                            <span class="text-slate-700 font-medium text-sm">Изграждане на нови покриви</span>
                            <span class="bg-slate-100 text-red-600 font-black px-2 py-1 rounded text-xs">3875</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-slate-50 pb-2">
                            <span class="text-slate-700 font-medium text-sm">Външна топлоизолация</span>
                            <span class="bg-slate-100 text-red-600 font-black px-2 py-1 rounded text-xs">4522</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-slate-50 pb-2">
                            <span class="text-slate-700 font-medium text-sm">Хидроизолация на покриви</span>
                            <span class="bg-slate-100 text-red-600 font-black px-2 py-1 rounded text-xs">5654</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span class="text-slate-700 font-medium text-sm">Поставяне на улуци и обшивки</span>
                            <span class="bg-slate-100 text-red-600 font-black px-2 py-1 rounded text-xs">6845</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-slate-900 text-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-lg font-black uppercase italic mb-6 text-red-500">Последно завършени:</h3>
                    <div class="space-y-5">
                        <div class="flex gap-4 group">
                            <div class="bg-red-600 h-10 w-1 shrink-0"></div>
                            <div>
                                <p class="text-[11px] text-slate-400 font-bold uppercase tracking-tighter">14.02.2021, гр. София</p>
                                <h4 class="text-sm font-bold uppercase leading-tight">Пренареждане на керемиди</h4>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div class="bg-red-600 h-10 w-1 shrink-0"></div>
                            <div>
                                <p class="text-[11px] text-slate-400 font-bold uppercase tracking-tighter">29.10.2020, гр. Драгоман</p>
                                <h4 class="text-sm font-bold uppercase leading-tight">Хидроизолация на покрив</h4>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div class="bg-red-600 h-10 w-1 shrink-0"></div>
                            <div>
                                <p class="text-[11px] text-slate-400 font-bold uppercase tracking-tighter">20.11.2020, гр. Сливница</p>
                                <h4 class="text-sm font-bold uppercase leading-tight">Асфалтиране на двор</h4>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div class="bg-red-600 h-10 w-1 shrink-0"></div>
                            <div>
                                <p class="text-[11px] text-slate-400 font-bold uppercase tracking-tighter">16.10.2020, гр. София</p>
                                <h4 class="text-sm font-bold uppercase leading-tight">Поставяне улуци на сграда</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="tel:0894811986" class="block w-full bg-red-600 hover:bg-red-700 text-white text-center py-4 rounded-xl font-black uppercase transition-all shadow-md">
                    Позвънете за оглед
                </a>
            </aside>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Инициализация на Fancybox
        if (typeof Fancybox !== "undefined") {
            Fancybox.bind("[data-fancybox]", {
                dragToClose: true,
                Toolbar: {
                    display: {
                        left: ["infobar"],
                        right: ["zoomIn", "zoomOut", "fullScreen", "close"],
                    },
                },
                Images: {
                    initialSize: "fit",
                }
            });
        }

        // Инициализация на Swiper
        const gallerySwiper = new Swiper('.gallerySwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            observer: true,
            observeParents: true,
            watchSlidesProgress: true,
            
            navigation: {
                nextEl: '.gallery-next',
                prevEl: '.gallery-prev',
            },
            pagination: {
                el: '.gallery-pagination',
                clickable: true,
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
                1440: { slidesPerView: 4 }
            }
        });
    });
</script>