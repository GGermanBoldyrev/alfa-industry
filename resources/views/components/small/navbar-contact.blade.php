@if(!empty($getLink()))
    <a href="{{ $getLink() }}" class="block hover:bg-gray-100 rounded-lg">
        <div class="flex items-center">
            @switch($type)
                @case('Номер телефона')
                    <span class="text-lg">📞</span>
                    @break

                @case('Email')
                    <span class="text-lg">📧</span>
                    @break

                @case('Адрес')
                    <span class="text-lg">📍</span>
                    @break

                @case('Режим работы')
                    <span class="text-lg">🕒</span>
                    @break

                @default
                    <span class="text-lg">❓</span>
            @endswitch
            <div class="ml-3 text-gray-700">
                {{ $value ?: 'Информация недоступна' }}
            </div>
        </div>
    </a>
@else
    <p class="text-gray-500 italic">Ссылка недоступна</p>
@endif

