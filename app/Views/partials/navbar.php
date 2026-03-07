<nav x-data="{ mobileMenuOpen: false }" class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            <a href="/" class="flex items-center space-x-2">
                <span class="text-2xl font-black text-blue-600 tracking-tighter">Аз съм шаблон</span>
            </a>

            <div class="hidden md:flex items-center space-x-8 text-sm font-medium">
                <a href="/jobs" class="hover:text-blue-600 transition">Работа</a>
                <a href="/tickets" class="hover:text-blue-600 transition">Билети</a>
                <a href="/services" class="hover:text-blue-600 transition">Услуги</a>
                <a href="/contacts" class="bg-blue-600 text-white px-5 py-2.5 rounded-full hover:bg-blue-700 transition">Контакт</a>
            </div>

            <div class="md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-600 focus:outline-none">
                    <i class="fa-solid fa-bars text-2xl" x-show="!mobileMenuOpen"></i>
                    <i class="fa-solid fa-xmark text-2xl" x-show="mobileMenuOpen"></i>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="md:hidden bg-white border-b border-gray-100 px-4 pt-2 pb-6 space-y-4 shadow-xl">
        <a href="/jobs" class="block text-lg font-semibold py-2">Работа в чужбина</a>
        <a href="/tickets" class="block text-lg font-semibold py-2">Самолетни билети</a>
        <a href="/services" class="block text-lg font-semibold py-2">Застраховки и кредити</a>
        <hr>
        <a href="/contacts" class="block w-full text-center bg-blue-600 text-white py-3 rounded-lg">Свържи се с нас</a>
    </div>
</nav>
