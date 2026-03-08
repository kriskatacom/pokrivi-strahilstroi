<?php
$gallery_images = [
    '2016-pokrivi6.jpg',
    '2016-pokrivi5.jpg',
    '2016-pokrivi4.jpg',
    '2016-pokrivi3.jpg',
    '2016-pokrivi2.jpg',
    '2016-pokrivi1.jpg',
    'pokriviremont0.jpg',
    'pokriviremont1.jpg',
    'pokriviremont2.jpg',
    'pokriviremont3.jpg',
    'pokriviremont4.jpg',
    'pokriviremont5.jpg',
    'pokriviremont6.jpg',
    'pokriviremont7.jpg',
    'pokriviremont8.jpg',
    'pokriviremont9.jpg',
    'pokriviremont10.jpg',
    'pokriviremont11.jpg',
    'pokriviremont12.jpg',
    'pokriviremont13.jpg',
    'ceniremontpokrivi1.jpg',
    'ceniremontpokrivi2.jpg',
    'ceniremontpokrivi3.jpg',
    'ceniremontpokrivi4.jpg',
    'ceniremontpokrivi5.jpg',
    'ceniremontpokrivi6.jpg',
    'ceniremontpokrivi7.jpg',
    'ceniremontpokrivi8.jpg'
];
?>

<section class="py-20 bg-[#0f0f0f] overflow-hidden w-full">
    <div class="container mx-auto px-6 mb-12">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
            <div>
                <span class="text-red-600 font-bold uppercase tracking-[0.3em] text-xs">Професионални обекти</span>
                <h2 class="text-4xl md:text-6xl font-black text-white mt-2 uppercase italic">Нашата <span class="text-red-600">Галерия</span></h2>
            </div>
            
            <div class="flex space-x-3">
                <button class="gallery-prev w-14 h-14 rounded-full border border-white/10 text-white flex items-center justify-center hover:bg-red-600 hover:border-red-600 transition-all duration-300">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="gallery-next w-14 h-14 rounded-full border border-white/10 text-white flex items-center justify-center hover:bg-red-600 hover:border-red-600 transition-all duration-300">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="swiper gallerySwiper px-4">
        <div class="swiper-wrapper">
            <?php foreach ($gallery_images as $img): ?>
                <div class="swiper-slide">
                    <a href="/assets/images/<?= $img ?>" data-fancybox="gallery" class="block group">
                        <div class="relative aspect-video md:aspect-16/10 overflow-hidden rounded-2xl shadow-2xl">
                            <img src="/assets/images/<?= $img ?>" alt="Ремонт на покриви - Страхил Строй" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <span class="bg-red-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full">Увеличи снимката</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="gallery-pagination mt-10 text-center lg:hidden"></div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
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
