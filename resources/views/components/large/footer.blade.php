<div class="flex justify-between">
    <div>
        <nav class="w-fit">
            <a href="{{ route('home') }}"><h3>{{ request()->getHost() }}</h3></a>
        </nav>
        <div class="w-80 text-grayLighter">
            {{ $active_slogan ?? 'Поставки промышленного оборудования мировых брендов' }}
        </div>
    </div>
    <div>
        <h3>Категории товаров</h3>
        <nav>
            <ul>
                <li>Двигатели</li>
            </ul>
        </nav>
    </div>
    <div>
        <h3>Меню</h3>
        <nav>
            <ul>
                <li class="mb-1"><a href="{{ route('home') }}">Главная</a></li>
                <li class="mb-1"><a href="{{ route('about') }}">О компании</a></li>
                <li class="mb-1"><a href="{{ route('catalog') }}">Каталог</a></li>
                <li class="mb-1"><a href="{{ route('gallery') }}">Галерея</a></li>
                <li class="mb-1"><a href="{{ route('news') }}">Новости</a></li>
                <li class="mb-1"><a href="{{ route('contacts') }}">Контакты</a></li>
                <li class="mb-1"><a href="{{ route('order') }}">Сделать заказ</a></li>
            </ul>
        </nav>
    </div>
    <div>
        <h3>Наши контакты</h3>
        <nav class="w-80">
            @forelse ($activeContacts as $type => $contacts)
                <ul class="mb-6">
                    @foreach ($contacts as $contact)
                        <li>
                            <x-contact-link :type="$type" :value="$contact->value" />
                        </li>
                    @endforeach
                </ul>
            @empty
                <p>Контакты отсутствуют</p>
            @endforelse
        </nav>
    </div>
</div>
<p class="mt-20">© {{ date('Y') }} {{ request()->getHost() }}</p>
