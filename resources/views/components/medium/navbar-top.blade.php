<div class="grid grid-cols-[1fr_3fr_1fr] items-center my-2">
    <nav>
        <a href="{{ route('home') }}">
            <img src="{{ asset('/images/main/logo.png') }}" alt="Логотип" class="w-28">
        </a>
    </nav>

    <div class="flex justify-center">
        <div class="text-center font-['Raleway'] text-increased4 font-medium w-1/2">
            {{ $activeSloganName ?? 'Поставки промышленного оборудования мировых брендов' }}
        </div>
    </div>

    <nav class="flex justify-center">
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
