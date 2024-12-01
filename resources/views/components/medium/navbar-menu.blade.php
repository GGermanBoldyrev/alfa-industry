<nav class="navbar-menu">
    <ul class="flex justify-center items-center h-12 space-x-6">
        <x-small.nav-item href="{{ route('home') }}" routeName="home" label="Главная" />
        <x-small.nav-item href="{{ route('about') }}" routeName="about" label="О компании" />
        <x-small.nav-item href="{{ route('catalog') }}" routeName="catalog" label="Каталог" />
        <x-small.nav-item href="{{ route('gallery') }}" routeName="gallery" label="Галерея" />
        <x-small.nav-item href="{{ route('news') }}" routeName="news" label="Новости" />
        <x-small.nav-item href="{{ route('contacts') }}" routeName="contacts" label="Контакты" />
        <x-small.button-link class="btn-primary btn-sm mb-1" href="{{ route('order') }}">Сделать заказ</x-small.button-link>
    </ul>
</nav>
