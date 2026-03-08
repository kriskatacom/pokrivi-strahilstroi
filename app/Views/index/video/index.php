<?php

$youtube_videos = [
    'xAl-qyGLLjk&t',
    '453dPyVVXRs',
    '95nLC6Vup4w',
    'gFd-dIOkxBA&t',
    'wNmUrtfTue4',
];
?>

<section class="py-12 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <div class="lg:w-2/3">
                <div class="mb-6 border-b border-slate-200 pb-4">
                    <h2 class="text-2xl font-black text-slate-800 uppercase italic">
                        Видео <span class="text-red-600">Галерия</span>
                    </h2>
                    <h2 class="text-slate-500 text-sm uppercase font-bold tracking-wider">Вижте работния ни процес на живо</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php foreach ($youtube_videos as $video_id): ?>
                        <a href="https://www.youtube.com/watch?v=<?= $video_id ?>" 
                           data-fancybox="video-gallery" 
                           class="group relative block overflow-hidden rounded-xl shadow-md aspect-video bg-slate-900">
                            
                            <img src="https://img.youtube.com/vi/<?= $video_id ?>/hqdefault.jpg" 
                                 alt="Видео от обект" 
                                 class="w-full h-full object-cover transition duration-500 group-hover:scale-110 opacity-80 group-hover:opacity-100"
                                 loading="lazy">
                            
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center shadow-2xl transition-transform duration-300 group-hover:scale-125">
                                    <i class="fa-solid fa-play text-white text-2xl ml-1"></i>
                                </div>
                            </div>

                            <div class="absolute inset-0 bg-linear-to-t from-black/70 via-transparent to-transparent opacity-60 group-hover:opacity-90 transition-opacity"></div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <aside class="lg:w-1/3 space-y-6">
                
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                    <h3 class="text-lg font-black uppercase italic mb-4 border-l-4 border-red-600 pl-3">Нашият опит</h3>
                    <ul class="space-y-3">
                        <li class="flex justify-between items-center border-b border-slate-50 pb-2">
                            <span class="text-slate-700 font-medium text-sm">Ремонтирани покриви</span>
                            <span class="bg-slate-100 text-red-600 font-black px-2 py-1 rounded text-xs">6550+</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-slate-50 pb-2">
                            <span class="text-slate-700 font-medium text-sm">Нови конструкции</span>
                            <span class="bg-slate-100 text-red-600 font-black px-2 py-1 rounded text-xs">3870+</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-slate-50 pb-2">
                            <span class="text-slate-700 font-medium text-sm">Доволни клиенти</span>
                            <span class="bg-slate-100 text-red-600 font-black px-2 py-1 rounded text-xs">100%</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-slate-900 text-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-lg font-black uppercase italic mb-6 text-red-500">Защо да ни изберете?</h3>
                    <div class="space-y-5">
                        <div class="flex gap-4 group">
                            <div class="bg-red-600 h-10 w-1 shrink-0"></div>
                            <div>
                                <h4 class="text-sm font-bold uppercase leading-tight">Професионална техника</h4>
                                <p class="text-[11px] text-slate-400 font-bold uppercase tracking-tighter">Разполагаме със собствена механизация</p>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div class="bg-red-600 h-10 w-1 shrink-0"></div>
                            <div>
                                <h4 class="text-sm font-bold uppercase leading-tight">Дългогодишна гаранция</h4>
                                <p class="text-[11px] text-slate-400 font-bold uppercase tracking-tighter">Договор и сертификат за качество</p>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="tel:0894811986" class="block w-full bg-red-600 hover:bg-red-700 text-white text-center py-4 rounded-xl font-black uppercase transition-all shadow-md animate-pulse">
                    Безплатен оглед и видео консултация
                </a>
            </aside>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Fancybox !== "undefined") {
            Fancybox.bind("[data-fancybox='video-gallery']", {
                groupAll: true,
                on: {
                    ready: (fancybox) => {
                        console.log("Видео галерията е заредена");
                    }
                }
            });
        }
    });
</script>
