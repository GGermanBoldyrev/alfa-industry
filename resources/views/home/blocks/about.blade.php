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
                <x-home.advantage-item icon="global.svg" title="Широкий ассортимент" />
                <x-home.advantage-item icon="user.svg" title="Индивидуальный подход" />
            </div>
            <div class="flex justify-between items-center">
                <x-home.advantage-item icon="truck.svg" title="Оперативная доставка" />
                <x-home.advantage-item icon="dollar.svg" title="Конкурентные цены" />
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
