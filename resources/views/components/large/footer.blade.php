<div class="flex justify-between">
    <div>
        <nav class="w-fit">
            <a href="{{ route('home') }}"><h3>{{ request()->getHost() }}</h3></a>
        </nav>
        <div class="w-80 text-grayLighter">
            @php($slogan = App\Models\Slogan::where('is_active', true)->first())
            {{ $slogan->name ?? 'Поставки промышленного оборудования мировых брендов' }}
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
            @php($contactTypes = App\Models\ContactType::where('is_active', true)->get())
            @forelse ($contactTypes as $contactType)
                <ul class="mb-6">
                    @php($contacts = App\Models\Contact::where(['contact_type_id' => $contactType->id, 'is_active' => true])->get())
                    @foreach($contacts as $contact)
                        <li>
                        @if ($contact->contactType->name === 'Email')
                            <a href="mailto:{{ $contact->value }}" target="_blank">{{ $contact->value }}</a>
                        @elseif ($contact->contactType->name === 'Номер телефона')
                            <a href="tel:+{{ str_replace([' ', '(', ')', '-'], '', $contact->value) }}" target="_blank">{{ $contact->value }}</a>
                        @elseif ($contact->contactType->name === 'Адрес')
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
