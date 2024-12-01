<div class="flex justify-between">
    <div>
        <nav class="w-fit">
            <a href="{{ route('home') }}"><h3>{{ request()->getHost() }}</h3></a>
        </nav>
        <div class="w-80 text-grayLighter">
            {{ $slogan ?? 'Поставки промышленного оборудования мировых брендов' }}
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
            @forelse ($activeContactsGroupedByType as $type => $contacts)
                <ul class="mb-6">
                    @foreach($contacts as $contact)
                        <li>
                            @if ($type === 'Email')
                                <a href="mailto:{{ $contact->value }}" target="_blank">{{ $contact->value }}</a>
                            @elseif ($type === 'Номер телефона')
                                <a href="tel:+{{ str_replace([' ', '(', ')', '-'], '', $contact->value) }}" target="_blank">{{ $contact->value }}</a>
                            @elseif ($type === 'Адрес')
                                @php($mapUrl = app(App\Services\YandexMapsService::class)->generateUrl($contact->value))
                                <a href="{{ $mapUrl }}" target="_blank">{{ $contact->value }}</a>
                            @else
                                {{ $contact->value }}
                            @endif
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
