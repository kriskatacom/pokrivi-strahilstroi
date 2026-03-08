<?php $currentUri = $_SERVER['REQUEST_URI']; ?>

<div class="bg-red-600 text-white py-2 sticky top-0 z-60 border-b border-red-700/30">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center text-xs md:text-sm font-medium">

            <div class="flex items-center space-x-2">
                <i class="fa-solid fa-envelope opacity-80"></i>
                <a href="mailto:office@strahlstroy.com" class="hover:text-red-100 transition duration-200 tracking-wide">
                    office@strahlstroy.com
                </a>
            </div>

            <div class="flex items-center">
                <a href="tel:+359894811986" class="flex items-center group">
                    <span class="mr-2 hidden sm:inline opacity-90 uppercase text-[10px] tracking-widest font-bold">Свържете се с нас:</span>
                    <div class="bg-white/20 p-1.5 rounded-lg flex items-center justify-center mr-2">
                        <i class="fa-solid fa-phone animate-ring text-white"></i>
                    </div>
                    <span class="font-black tracking-tighter group-hover:text-red-100 transition duration-200">
                        +359 89 481 19 86
                    </span>
                </a>
            </div>

        </div>
    </div>
</div>

<nav x-data="{ mobileMenuOpen: false }" class="bg-white border-b border-gray-100 sticky top-10 z-50 font-sans">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-20">

            <a href="/" class="flex items-center space-x-2 shrink-0">
                <img src="/assets/images/logo.webp" alt="<?= htmlspecialchars($title ?? 'Ремонт на покриви') ?>" class="h-12 w-auto">
            </a>

            <div class="hidden lg:flex items-center text-sm font-semibold uppercase tracking-tight">
                <?php foreach (NAVBAR_ITEMS as $item): ?>
                    <?php
                    $hasChildren = isset($item['children']);
                    $isActive = ($currentUri === $item['url']);
                    ?>

                    <div class="relative group"
                        <?php if ($hasChildren): ?>
                        x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false"
                        <?php endif; ?>>

                        <a href="<?= $item['url'] ?>"
                            class="flex items-center py-3 px-4 transition-all duration-200 rounded-md <?= $isActive ? 'bg-primary text-white' : 'text-primary hover:bg-primary hover:text-white' ?>">
                            <?= $item['title'] ?>
                            <?php if ($hasChildren): ?>
                                <i class="fa-solid fa-chevron-down ml-2 text-[10px] transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                            <?php endif; ?>
                        </a>

                        <?php if ($hasChildren): ?>
                            <div x-show="open"
                                x-cloak
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                class="absolute left-0 mt-0 w-48 bg-white border border-gray-100 shadow-xl rounded-b-md overflow-hidden z-50 p-2">
                                <?php foreach ($item['children'] as $child): ?>
                                    <a href="<?= $child['url'] ?>" class="block px-5 py-3 text-gray-700 hover:bg-primary hover:text-white transition duration-150 lowercase first-letter:uppercase rounded-md">
                                        <?= $child['title'] ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

                <a href="/kontakti" class="block text-center bg-primary hover:bg-transparent text-white hover:text-primary py-3 px-5 rounded-full font-black uppercase tracking-widest shadow-lg duration-300 border-2 border-primary">
                    Контакти
                </a>
            </div>

            <a href="/kontakti" class="hidden xs:block md:hidden text-center bg-primary hover:bg-transparent text-white hover:text-primary py-2 px-5 rounded-full uppercase tracking-widest shadow-lg duration-300 border-2 border-primary text-sm font-normal">
                Контакти
            </a>

            <div class="lg:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="w-12 h-12 bg-gray-200 text-gray-600 focus:outline-none flex justify-center items-center rounded-md hover:text-white hover:bg-primary duration-300 cursor-pointer">
                    <i class="fa-solid fa-bars text-2xl" x-show="!mobileMenuOpen"></i>
                    <i class="fa-solid fa-xmark text-2xl" x-show="mobileMenuOpen" x-cloak></i>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenuOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        @click.away="mobileMenuOpen = false"
        class="lg:hidden bg-white border-t border-gray-100 shadow-2xl absolute w-full left-0 z-40 pb-5 px-5 max-h-[85vh] overflow-y-auto">

        <div class="flex flex-col space-y-1 pt-2">
            <?php foreach (NAVBAR_ITEMS as $item): ?>
                <?php
                $hasChildren = isset($item['children']);
                $isActive = ($currentUri === $item['url']);
                ?>

                <div x-data="{ childOpen: false }">
                    <div class="flex items-center w-full rounded-md border-b border-gray-50 <?= $isActive ? 'bg-primary text-white' : 'text-gray-800' ?>">
                        <a href="<?= $item['url'] ?>" class="grow font-bold py-3 px-5 rounded-md uppercase text-sm hover:text-white hover:bg-primary">
                            <?= $item['title'] ?>
                        </a>
                        <?php if ($hasChildren): ?>
                            <button @click="childOpen = !childOpen" class="px-5 py-3 border-l border-gray-100/20 text-center">
                                <i class="fa-solid fa-chevron-down transition-transform duration-200 text-white bg-primary p-1.5 rounded-md" :class="childOpen ? 'rotate-180' : ''"></i>
                            </button>
                        <?php endif; ?>
                    </div>

                    <?php if ($hasChildren): ?>
                        <div x-cloak x-show="childOpen" x-collapse class="bg-gray-50 rounded-b-md p-2">
                            <?php foreach ($item['children'] as $child): ?>
                                <a href="<?= $child['url'] ?>" class="block py-3 px-10 text-sm font-medium text-gray-600 border-b border-gray-100 last:border-0 rounded-md lowercase first-letter:uppercase hover:text-white hover:bg-primary duration-300">
                                    <?= $child['title'] ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="pt-6">
            <a href="/kontakti" class="block w-full text-center bg-primary hover:bg-transparent text-white hover:text-primary py-4 rounded-xl font-black uppercase tracking-widest shadow-lg duration-300 border-2 border-primary">
                <i class="fa-solid fa-phone-flip mr-2"></i> Контакти
            </a>
        </div>
    </div>
</nav>

<style>
    @keyframes ring {
        0% {
            transform: rotate(0);
        }

        10% {
            transform: rotate(15deg);
        }

        20% {
            transform: rotate(-15deg);
        }

        30% {
            transform: rotate(15deg);
        }

        40% {
            transform: rotate(-15deg);
        }

        50% {
            transform: rotate(0);
        }

        100% {
            transform: rotate(0);
        }
    }

    .animate-ring {
        display: inline-block;
        animation: ring 1.5s infinite ease-in-out;
    }

    [x-cloak] {
        display: none !important;
    }
</style>