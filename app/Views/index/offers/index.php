<section class="py-12 bg-slate-50">
    <div class="container mx-auto px-4 max-w-5xl">
        
        <div class="mb-10 border-l-8 border-red-600 pl-6">
            <h2 class="text-3xl md:text-4xl font-black text-slate-900 uppercase italic">Подробна ценова листа</h2>
            <p class="text-slate-500 font-bold uppercase text-xs tracking-widest mt-2">Всички услуги на едно място</p>
        </div>

        <div class="space-y-6">
            
            <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-md">
                <button onclick="toggleAccordion(1)" class="w-full flex items-center justify-between p-5 bg-slate-900 text-white text-left">
                    <span class="font-black uppercase italic tracking-tight">Ремонт на покриви с керемиди - V1</span>
                    <i id="icon-1" class="fa-solid fa-chevron-up transition-transform duration-300"></i>
                </button>
                <div id="content-1" class="block bg-white">
                    <div class="p-6 overflow-x-auto">
                        <table class="w-full text-sm">
                            <tr class="border-b border-slate-100 italic text-slate-600">
                                <td class="py-3">Разкриване, почистване, полагане на изолация, летви, нареждане на керемиди, измазване на капаци.</td>
                                <td class="py-3 text-right font-black text-red-600 text-lg whitespace-nowrap pl-4">35 лв/м²</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-md">
                <button onclick="toggleAccordion(2)" class="w-full flex items-center justify-between p-5 bg-slate-900 text-white text-left">
                    <span class="font-black uppercase italic tracking-tight">Ремонт на покриви с керемиди - V2</span>
                    <i id="icon-2" class="fa-solid fa-chevron-up transition-transform"></i>
                </button>
                <div id="content-2" class="block bg-white">
                    <div class="p-6">
                        <table class="w-full text-sm">
                            <tr class="border-b border-slate-100 italic text-slate-600">
                                <td class="py-3">Разкриване, почистване, <strong>двойна скара</strong>, мушама, летви, нареждане, измазване.</td>
                                <td class="py-3 text-right font-black text-red-600 text-lg whitespace-nowrap pl-4">45 лв/м²</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-md">
                <button onclick="toggleAccordion(3)" class="w-full flex items-center justify-between p-5 bg-slate-900 text-white text-left border-b border-white/10">
                    <span class="font-black uppercase italic tracking-tight text-red-500">Изграждане на покриви - Нова конструкция</span>
                    <i id="icon-3" class="fa-solid fa-chevron-up transition-transform"></i>
                </button>
                <div id="content-3" class="block bg-white p-6">
                    <div class="flex flex-col md:flex-row justify-between gap-6">
                        <ul class="text-sm space-y-2 text-slate-600">
                            <li>• Демонтаж на съществуваща конструкция</li>
                            <li>• Изграждане на изцяло нова дървена конструкция</li>
                            <li>• Материали: 100 лв (с ДДС)</li>
                            <li>• Труд: 100 лв (с ДДС)</li>
                        </ul>
                        <div class="bg-red-600 text-white p-6 rounded-xl text-center shadow-lg self-center md:self-auto">
                            <p class="text-[10px] uppercase font-bold opacity-80 mb-1 italic">Пакетна цена труд и материали</p>
                            <span class="text-3xl font-black italic">180 лв/м²</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-md">
                <button onclick="toggleAccordion(4)" class="w-full flex items-center justify-between p-5 bg-slate-900 text-white text-left">
                    <span class="font-black uppercase italic tracking-tight">Хидроизолация</span>
                    <i id="icon-4" class="fa-solid fa-chevron-up transition-transform"></i>
                </button>
                <div id="content-4" class="block bg-white p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <ul class="text-sm text-slate-600 space-y-1">
                            <li>1. Почистване на покривната площ</li>
                            <li>2. Махане на съществуващото фолио</li>
                            <li>3. Грундиране с битумен грунд</li>
                            <li>4. Полагане на усилен воалит (4 mm)</li>
                            <li>5. Грундиране на бордови ламарини</li>
                        </ul>
                        <div class="border-4 border-double border-red-600 p-4 flex items-center justify-center rounded-xl">
                            <span class="text-red-600 font-black uppercase text-xl italic tracking-tighter">Цена: Договаряне</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-md">
                    <div class="p-5 bg-slate-800 text-white font-black uppercase italic text-sm">Монтаж на улуци</div>
                    <table class="w-full text-sm">
                        <tr class="border-b border-slate-50"><td class="p-4">Хоризонтални улуци</td><td class="p-4 text-right font-black text-red-600">30 лв/лм</td></tr>
                        <tr class="border-b border-slate-50"><td class="p-4">Вертикални улуци</td><td class="p-4 text-right font-black text-red-600">35 лв/лм</td></tr>
                        <tr class="border-b border-slate-50"><td class="p-4">Американски безшевни</td><td class="p-4 text-right font-black text-red-600">45 лв/лм</td></tr>
                        <tr><td class="p-4">Казанче (по желание)</td><td class="p-4 text-right font-black text-red-600">30 лв/бр</td></tr>
                    </table>
                </div>
                <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-md">
                    <div class="p-5 bg-slate-800 text-white font-black uppercase italic text-sm">Тенекеджийски услуги</div>
                    <table class="w-full text-sm">
                        <tr class="border-b border-slate-50"><td class="p-4">Подмяна на капандури</td><td class="p-4 text-right font-bold text-slate-400 uppercase">Договаряне</td></tr>
                        <tr class="border-b border-slate-50"><td class="p-4">Обшиване на комини</td><td class="p-4 text-right font-bold text-slate-400 uppercase">Договаряне</td></tr>
                        <tr class="border-b border-slate-50"><td class="p-4">Обшиване на бордове</td><td class="p-4 text-right font-bold text-slate-400 uppercase">Договаряне</td></tr>
                        <tr><td class="p-4">Подулучни и надулучни поли</td><td class="p-4 text-right font-bold text-slate-400 uppercase">Договаряне</td></tr>
                    </table>
                </div>
            </div>

            <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-md">
                <button onclick="toggleAccordion(6)" class="w-full flex items-center justify-between p-5 bg-slate-900 text-white text-left">
                    <span class="font-black uppercase italic tracking-tight">Надстройка на тавански стаи</span>
                    <i id="icon-6" class="fa-solid fa-chevron-up transition-transform"></i>
                </button>
                <div id="content-6" class="block bg-white p-6">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                        <p class="text-sm italic text-slate-600">Разкриване, почистване, надзид, греди и наковаване на дъсчена ламперия. Труд: 80 лв (с ДДС).</p>
                        <div class="bg-slate-100 px-6 py-3 rounded-full border-2 border-red-600 whitespace-nowrap">
                            <span class="font-black text-red-600 text-xl">200 лв/м²</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-red-600 border-t-8 rounded-2xl overflow-hidden bg-white shadow-xl">
                <div class="p-5 bg-white text-slate-900 font-black uppercase italic text-lg border-b border-slate-100 flex items-center gap-3">
                    <i class="fa-solid fa-temperature-arrow-down text-red-600"></i> Външна Топлоизолация (5 см дебелина)
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50 text-[10px] text-slate-400 uppercase font-bold">
                            <tr>
                                <th class="p-4">Вид изолация</th>
                                <th class="p-4 text-right uppercase">Цена за м²</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr class="border-b border-slate-50 hover:bg-red-50 transition"><td class="p-4 font-bold">EPS (Стиропор)</td><td class="p-4 text-right font-black text-red-600">29,00 лв</td></tr>
                            <tr class="border-b border-slate-50 hover:bg-red-50 transition"><td class="p-4 font-bold">XPS (Fibran)</td><td class="p-4 text-right font-black text-red-600">36,00 лв</td></tr>
                            <tr class="border-b border-slate-50 hover:bg-red-50 transition"><td class="p-4 font-bold">Графитен EPS (Neopor) 20кг/м³</td><td class="p-4 text-right font-black text-red-600">36,00 лв</td></tr>
                            <tr class="hover:bg-red-50 transition"><td class="p-4 font-bold">Графитен EPS (Neopor) 25кг/м³</td><td class="p-4 text-right font-black text-red-600">41,00 лв</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
function toggleAccordion(id) {
    const content = document.getElementById(`content-${id}`);
    const icon = document.getElementById(`icon-${id}`);
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        content.classList.add('block');
        icon.classList.remove('rotate-180');
    } else {
        content.classList.remove('block');
        content.classList.add('hidden');
        icon.classList.add('rotate-180');
    }
}
</script>