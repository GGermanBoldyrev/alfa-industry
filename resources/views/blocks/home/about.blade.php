<section class="bg-whiteDarker rounded-md px-8 py-12 shadow-xl">
    <h3 class="font-medium text-center mb-10">О нашей компании</h3>
    <x-highlight-box>
        Мы представляем полный комплекс услуг по подбору и доставке промышленного оборудования и
        комплектующих с Европы и стран ближнего Востока. При поступлении Вашей заявки, заказ сразу же попадает в работу,
        а наши поставщики обеспечивают минимальные сроки доставки по всей России.
    </x-highlight-box>
    <h3 class="text-center my-12">Наши преимущества</h3>
    <ul class="flex justify-center items-center">
        <div class="w-8/12 space-y-10">
            <div class="flex justify-between items-center">
                <li class="flex flex-col justify-center items-center w-48">
                    <img src="{{ asset('icons/global.svg') }}" alt="Глобус" class="w-16">
                    <div class="mt-3">Широкий ассортимент</div>
                </li>
                <li class="flex flex-col justify-center items-center w-48">
                    <img src="{{ asset('icons/user.svg') }}" alt="Пользователь" class="w-16">
                    <div class="mt-3">Индивидуальный подход</div>
                </li>
            </div>
            <div class="flex justify-between items-center">
                <li class="flex flex-col justify-center items-center w-48">
                    <img src="{{ asset('icons/truck.svg') }}" alt="Машина" class="w-16">
                    <div class="mt-3">Оперативная доставка</div>
                </li>
                <li class="flex flex-col justify-center items-center w-48">
                    <img src="{{ asset('icons/dollar.svg') }}" alt="Доллар" class="w-16">
                    <div class="mt-3">Конкурентные цены</div>
                </li>
            </div>
        </div>
    </ul>
    <div class="mt-16 text-right">
        <x-small.button-link
            class="btn-primary-outlined btn-xs"
            href="{{ route('about') }}"
        >
            Узнать подробнее
        </x-small.button-link>
    </div>
</section>
