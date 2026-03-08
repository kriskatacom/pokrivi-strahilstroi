<?php
$projects = [
    [
        'title' => 'Ремонт на покрив - кв. Бояна',
        'before' => '/assets/images/projects/hydroisolation-before.webp',
        'after' => '/assets/images/projects/hydroisolation-after.webp',
    ],
    [
        'title' => 'Хидроизолация - гр. Пловдив',
        'before' => '/assets/images/projects/hydro-before.webp',
        'after' => '/assets/images/projects/hydro-after.webp',
    ],
    [
        'title' => 'Нова конструкция - София',
        'before' => '/assets/images/projects/new-before.webp',
        'after' => '/assets/images/projects/new-after.webp',
    ],
];
?>

<style>
    /* Стилизация на Comparison Slider-а */
    .comparison-slider {
        position: relative;
        width: 100%;
        overflow: hidden;
        border-radius: 1.5rem;
    }

    .comparison-slider img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }

    .img-after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .img-before {
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        /* Начално състояние */
        height: 100%;
        overflow: hidden;
        z-index: 2;
        border-right: 3px solid white;
    }

    .img-before img {
        width: auto;
        height: 100%;
        max-width: none;
    }

    /* Плъзгач */
    .slider-handle {
        position: absolute;
        z-index: 3;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 4px;
        background: white;
        cursor: ew-resize;
        transform: translateX(-50%);
    }

    .slider-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 40px;
        height: 40px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        color: #ef4444;
    }
</style>

<section class="py-20 bg-slate-900 text-white overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="mb-16 relative">
            <div class="absolute -top-10 left-1/2 -translate-x-1/2 opacity-[0.03] select-none pointer-events-none">
                <span class="text-8xl md:text-9xl font-black uppercase tracking-widest text-white">PROJECTS</span>
            </div>

            <div class="text-center relative z-10">
                <span class="inline-block bg-red-600/10 text-red-500 border border-red-600/20 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-4">
                    Портфолио
                </span>

                <h2 class="text-4xl md:text-6xl font-black uppercase leading-none tracking-tighter text-white">
                    Нашите Проекти: <br class="md:hidden">
                    <span class="relative inline-block mt-2">
                        <span class="relative z-10 text-red-600">Преди и След</span>
                        <span class="absolute bottom-1 left-0 w-full h-3 bg-red-600/10 -z-10 rounded-sm"></span>
                    </span>
                </h2>

                <div class="mt-8 flex flex-col items-center justify-center">
                    <div class="flex items-center space-x-3 text-gray-400 bg-white/5 border border-white/10 px-6 py-3 rounded-2xl backdrop-blur-sm">
                        <i class="fa-solid fa-left-right animate-pulse text-red-600"></i>
                        <p class="text-sm md:text-base italic font-medium tracking-wide">
                            Хванете белия плъзгач и го движете за сравнение
                        </p>
                    </div>

                    <div class="w-12 h-1 bg-red-600 mt-6 rounded-full"></div>
                </div>
            </div>
        </div>

        <div class="swiper beforeAfterSwiper overflow-visible">
            <div class="swiper-wrapper">
                <?php foreach ($projects as $project): ?>
                    <div class="swiper-slide h-auto">
                        <div class="bg-slate-800 p-4 rounded-[2.5rem] border border-white/5 h-full transition-all duration-500 hover:border-red-600/30">

                            <div class="relative aspect-video overflow-hidden rounded-2xl select-none touch-none bg-slate-700"
                                x-data="{ 
                                position: 50, 
                                active: false,
                                update(e) {
                                    if (!this.active) return;
                                    let container = $el.getBoundingClientRect();
                                    let clientX = e.touches ? e.touches[0].clientX : e.clientX;
                                    let x = clientX - container.left;
                                    this.position = Math.max(0, Math.min(100, (x / container.width) * 100));
                                }
                             }"
                                @mousedown="active = true"
                                @mouseup.window="active = false"
                                @mousemove.window="update($event)"
                                @touchstart="active = true"
                                @touchend.window="active = false"
                                @touchmove.window="update($event)">

                                <div class="absolute inset-0">
                                    <img src="<?= $project['after'] ?>" class="w-full h-full object-cover" alt="След ремонта">
                                    <div class="absolute bottom-4 right-4 bg-green-600 text-[10px] font-black px-3 py-1 rounded-full shadow-xl uppercase tracking-widest">След</div>
                                </div>

                                <div class="absolute inset-0 z-10 w-full h-full pointer-events-none" :style="'clip-path: inset(0 ' + (100 - position) + '% 0 0)'">
                                    <img src="<?= $project['before'] ?>" class="w-full h-full object-cover" alt="Преди ремонта">
                                    <div class="absolute bottom-4 left-4 bg-red-600 text-[10px] font-black px-3 py-1 rounded-full shadow-xl uppercase tracking-widest">Преди</div>
                                </div>

                                <div class="absolute inset-y-0 z-20 w-1 bg-white cursor-ew-resize group shadow-[0_0_15px_rgba(0,0,0,0.5)]"
                                    :style="'left: ' + position + '%'">
                                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 bg-white rounded-full shadow-2xl flex items-center justify-center text-slate-900 group-active:scale-125 transition-transform duration-200">
                                        <i class="fa-solid fa-left-right text-sm"></i>
                                    </div>
                                </div>
                            </div>

                            <h3 class="text-lg font-bold mt-6 text-center uppercase tracking-tight text-slate-200">
                                <?= $project['title'] ?>
                            </h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="flex justify-center gap-6 mt-12">
                <button class="swiper-prev-ba group w-14 h-14 rounded-full border border-white/10 flex items-center justify-center hover:bg-red-600 hover:border-red-600 transition-all duration-300">
                    <i class="fa-solid fa-chevron-left group-hover:-translate-x-1 transition-transform"></i>
                </button>
                <button class="swiper-next-ba group w-14 h-14 rounded-full border border-white/10 flex items-center justify-center hover:bg-red-600 hover:border-red-600 transition-all duration-300">
                    <i class="fa-solid fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const baSwiper = new Swiper('.beforeAfterSwiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            simulateTouch: false,
            navigation: {
                nextEl: '.swiper-next-ba',
                prevEl: '.swiper-prev-ba',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                }
            }
        });
    });
</script>