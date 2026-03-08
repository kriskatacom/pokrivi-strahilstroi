<section
    x-data="{ showStickyBar: true }"
    x-show="showStickyBar"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="translate-y-full"
    x-transition:enter-end="translate-y-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="translate-y-0"
    x-transition:leave-end="translate-y-full"
    class="fixed bottom-0 left-0 w-full bg-green-600 text-white z-100 py-4 shadow-[0_-5px_20px_rgba(0,0,0,0.1)] border-t border-green-500/30">
    <div class="container mx-auto px-4 relative flex items-center justify-center">

        <a href="tel:+359 89 481 19 86">
            <div class="text-center px-8">
                <p class="text-sm md:text-base font-bold tracking-wide uppercase">
                    ОБАДЕТЕ СЕ И ВЗЕМЕТЕ 20% ОТСТЪПКА!
                </p>
            </div>
        </a>

        <button
            @click="showStickyBar = false"
            class="absolute right-4 hover:bg-white/20 w-8 h-8 rounded-full flex items-center justify-center transition-colors duration-200"
            title="Затвори">
            <i class="fa-solid fa-xmark text-sm"></i>
        </button>

    </div>
</section>