<div class="flex justify-between items-center my-2">
    <nav class="min-w-[210px]">
        <a href="{{ route('home') }}">
            <img src="{{ asset('/images/main/logo.png') }}" alt="Логотип" class="w-28">
        </a>
    </nav>
    <div class="w-80 text-center">
        {{ $activeSloganName ?? 'Поставки промышленного оборудования мировых брендов' }}
    </div>

    <nav>
        <ul class="space-y-1">
            @forelse($activeContacts as $activeType => $contact)
                @if(in_array($activeType, ['Номер телефона', 'Email']))
                    @foreach($contact as $activeContact)
                        <li class="w-fit">
                            <x-navbar-contact :type="$activeType" :value="$activeContact->value" />
                        </li>
                    @endforeach
                @endif
            @empty
                <p>Контакты отсутствуют</p>
            @endforelse
        </ul>
    </nav>
</div>
