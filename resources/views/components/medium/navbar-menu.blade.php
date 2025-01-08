<nav class="navbar-menu grid grid-cols-[1fr_3fr_1fr] items-center py-1">
    <div></div>
    <ul class="flex justify-center items-center text-lg space-x-4">
        <x-navbar-link href="{{ route('home') }}" routeName="home" label="Главная"/>
        <div class="border h-5"></div>

        <x-navbar-link href="{{ route('about') }}" routeName="about" label="О компании"/>
        <div class="border h-5"></div>

        <x-navbar-link href="{{ route('catalog.index') }}" routeName="catalog" label="Каталог"/>
        <div class="border h-5"></div>

       {{-- <x-navbar-link href="{{ route('gallery') }}" routeName="gallery" label="Галерея"/>
        <div class="border h-5"></div>--}}

        <x-navbar-link href="{{ route('news.index') }}" routeName="news" label="Новости"/>
        <div class="border h-5"></div>

        <x-navbar-link href="{{ route('contacts') }}" routeName="contacts" label="Контакты"/>
    </ul>

    <!-- Правая часть: кнопка -->
    <div class="flex justify-center">
        <x-small.button-link class="btn-primary-outlined-white" href="{{ route('order.index') }}">
            Сделать заказ
        </x-small.button-link>
    </div>
</nav>
