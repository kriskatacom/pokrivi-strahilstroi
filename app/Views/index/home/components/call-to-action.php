<style>
    /* Анимация за движение на градиента */
    @keyframes gradient-move {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .animated-bg {
        background: linear-gradient(-45deg, #1e40af, #1d4ed8, #3b82f6, #1e3a8a);
        background-size: 400% 400%;
        animation: gradient-move 10s ease infinite;
    }

    /* Сияние и отблясък за бутона (запазваме ги, защото изглеждат премиум) */
    @keyframes shine {
        0% { left: -100%; }
        20% { left: 100%; }
        100% { left: 100%; }
    }

    .button-shine {
        position: relative;
        overflow: hidden;
    }

    .button-shine::after {
        content: "";
        position: absolute;
        top: -50%;
        left: -100%;
        width: 50%;
        height: 200%;
        background: linear-gradient(to right, transparent, rgba(255,255,255,0.4), transparent);
        transform: rotate(30deg);
        animation: shine 4s infinite;
    }
</style>

<section class="relative overflow-hidden">
    <div class="animated-bg px-6 py-20 shadow-2xl relative">
        
        <div class="absolute top-0 left-0 w-full h-full opacity-30 pointer-events-none">
            <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-white rounded-full blur-[120px] opacity-20"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-blue-900 rounded-full blur-[120px] opacity-40"></div>
        </div>

        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between gap-10 relative z-10">
            
            <div class="text-center lg:text-left">
                <h2 class="text-3xl md:text-5xl font-black text-white leading-tight uppercase tracking-tighter mb-4">
                    Обадете ни се на тел: <br class="md:hidden">
                    <a href="tel:+359894811986" class="hover:text-blue-200 transition-colors underline decoration-white/20 underline-offset-8">
                        +359 89 481 19 86
                    </a>
                </h2>
                
                <p class="text-white/90 text-xl md:text-3xl font-medium tracking-tight">
                    За да Ви изготвим оферта и за да получите 
                    <span class="block md:inline font-black text-white uppercase border-b-4 border-white/30 pb-1">
                        БЕЗПЛАТНА КОНСУЛТАЦИЯ!
                    </span>
                </p>
            </div>

            <div class="shrink-0">
                <a href="/contact" 
                   class="button-shine inline-flex items-center justify-center bg-white text-blue-900 px-12 py-6 rounded-2xl font-black uppercase tracking-widest text-lg hover:bg-slate-900 hover:text-white transition-all duration-500 shadow-[0_20px_50px_rgba(0,0,0,0.3)] hover:-translate-y-2 active:scale-95">
                    <i class="fa-solid fa-paper-plane mr-3 text-xl"></i>
                    Към контакти
                </a>
            </div>

        </div>
    </div>
</section>