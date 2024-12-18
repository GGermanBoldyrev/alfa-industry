<nav class="navbar-menu">
    <ul class="flex justify-center items-center my-2 space-x-6">
        <x-navbar-link href="{{ route('home') }}" routeName="home" label="Главная"/>
        <x-navbar-link href="{{ route('about') }}" routeName="about" label="О компании"/>
        <x-navbar-link href="{{ route('catalog') }}" routeName="catalog" label="Каталог"/>
        <x-navbar-link href="{{ route('gallery') }}" routeName="gallery" label="Галерея"/>
        <x-navbar-link href="{{ route('news.index') }}" routeName="news" label="Новости"/>
        <x-navbar-link href="{{ route('contacts') }}" routeName="contacts" label="Контакты"/>

        <x-small.button-link class="btn-primary btn-sm mb-1" href="{{ route('order.index') }}">
            Сделать заказ
        </x-small.button-link>
    </ul>
</nav>
