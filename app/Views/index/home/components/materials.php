<?php
$materials = [
    ['image' => '/assets/images/materials/gemeral-membrane.webp', 'alt' => 'Gemeral Membrane'],
    ['image' => '/assets/images/materials/Isomax.webp', 'alt' => 'Isomax'],
    ['image' => '/assets/images/materials/salambo.webp', 'alt' => 'Salambo'],
    ['image' => '/assets/images/materials/tondach.webp', 'alt' => 'Tondach'],
];
?>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">

        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-black text-slate-900 uppercase tracking-tight">
                Работим със следните <span class="text-red-600">материали</span>
            </h2>
            <div class="w-20 h-1.5 bg-red-600 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="swiper materialsSwiper">
            <div class="swiper-wrapper items-center">
                <?php foreach ($materials as $material): ?>
                    <div class="swiper-slide px-4">
                        <div class="grayscale hover:grayscale-0 transition-all duration-500 transform hover:scale-110 flex justify-center items-center">
                            <img src="<?= $material['image'] ?>"
                                alt="<?= $material['alt'] ?>"
                                class="max-h-20 w-auto object-contain pointer-events-none">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-pagination-materials relative mt-10 flex justify-center"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const materialsSwiper = new Swiper('.materialsSwiper', {
            slidesPerView: 2,
            spaceBetween: 30,
            loop: true,
            // Добавяме това, за да не "замръзва", ако логата са малко
            watchOverflow: true, 
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination-materials',
                clickable: true,
            },
            breakpoints: {
                480: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3, // Намалено на 3 за таблет
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4, // Тъй като имаш 4 лога, това е лимитът ти за добър loop
                    spaceBetween: 50,
                }
            },
        });
    });
</script>