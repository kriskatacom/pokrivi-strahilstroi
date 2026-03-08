<section class="py-20 bg-white">
    <div class="container mx-auto px-4 text-slate-800">
        <div class="flex flex-col lg:flex-row items-center gap-12">

            <div class="lg:w-1/2 space-y-6">
                <div class="inline-block px-4 py-1 bg-primary/10 text-primary font-bold text-sm uppercase tracking-widest rounded-lg">
                    Кои сме ние?
                </div>
                <h2 class="text-3xl md:text-4xl font-black leading-tight text-slate-900">
                    Страхил Строй - Над 15 години професионален опит в <br>
                    <span class="text-primary underline decoration-blue-200">строителството и ремонта</span>
                </h2>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Бърз ремонт на покриви, хидроизолация, вътрешни ремонти. Качество и гаранция. Работим на ниски цени в София и страната.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-medal text-primary"></i>
                        </div>
                        <div>
                            <h4 class="font-bold uppercase text-xs">Доказано качество</h4>
                            <p class="text-xs text-gray-500">100% доволни клиенти</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-handshake text-primary"></i>
                        </div>
                        <div>
                            <h4 class="font-bold uppercase text-xs">Коректност</h4>
                            <p class="text-xs text-gray-500">Писмен договор и гаранция</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 w-full" x-data="{ videoOpen: false }">
                <div @click="videoOpen = true" class="relative group cursor-pointer overflow-hidden rounded-2xl shadow-2xl aspect-video bg-slate-200">
                    <img src="/assets/images/about-us-video-screenshot.webp" alt="Екипът на СтрахлСтрой" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">

                    <div class="absolute inset-0 bg-slate-900/40 group-hover:bg-slate-900/20 transition duration-300 flex items-center justify-center">
                        <div class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition duration-300">
                            <i class="fa-solid fa-play text-2xl ml-1"></i>
                        </div>
                    </div>
                </div>

                <template x-teleport="body">
                    <div x-show="videoOpen"
                        x-cloak
                        class="fixed inset-0 z-100 flex items-center justify-center bg-black/90 backdrop-blur-sm p-4"
                        @keydown.escape.window="videoOpen = false">

                        <button @click="videoOpen = false" class="absolute top-6 right-6 text-white hover:text-primary z-50 p-2">
                            <i class="fa-solid fa-xmark text-3xl"></i>
                        </button>

                        <div class="w-full max-w-5xl shadow-2xl rounded-xl overflow-hidden bg-black" @click.away="videoOpen = false">
                            <video
                                x-ref="player"
                                class="w-full h-auto"
                                controls
                                playsinline
                                :src="videoOpen ? '/assets/video/about-us.mp4' : ''"
                                x-effect="videoOpen ? $refs.player.play() : $refs.player.pause()">
                                Вашият браузър не поддържа видео елемента.
                            </video>
                        </div>
                    </div>
                </template>
            </div>

        </div>
    </div>
</section>