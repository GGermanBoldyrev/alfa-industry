<section class="bg-whiteDarker rounded-md px-8 py-12 shadow-xl">
    <h3 class="font-medium text-center">Направления деятельности</h3>
    <ul class="mt-10 space-y-10">
        <x-home.direction-item title="Поставка промышленного оборудования">
            Мы осуществляем подбор и доставку современного оборудования
            для различных отраслей промышленности. Гарантируем высокое качество
            и надежность продукции.
        </x-home.direction-item>

        <x-home.direction-item title="Комплектующие и запасные части">
            Мы предлагаем широкий ассортимент комплектующих и
            запасных частей от проверенных европейских и ближневосточных производителей.
        </x-home.direction-item>

        <x-home.direction-item title="Подбор оборудования и комплектующих">
            Наша компания поможет вам выбрать подходящее оборудование и комплектующие, учитывая потребности вашего
            бизнеса и специфики работы.
        </x-home.direction-item>
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
