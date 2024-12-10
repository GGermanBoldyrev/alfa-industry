<div class="flex justify-between items-center">
    <nav class="min-w-[210px]">
        <a href="{{ route('home') }}">
            <img src="{{ asset('/images/main/logo.png') }}" alt="Логотип" class="w-28">
        </a>
    </nav>
    <div class="w-80 text-center">
        {{ $slogan ?? 'Поставки промышленного оборудования мировых брендов' }}
    </div>

    <nav>
        <ul class="space-y-1">
            @forelse($activeContacts as $activeType => $contact)
                @if($activeType === 'Номер телефона')
                    @foreach($contact as $activeContact)
                        <li class="w-fit">
                            <a href="tel:+{{ str_replace([' ', '(', ')', '-'], '', $activeContact->value) }}">
                                <div class="flex items-center">
                                    <img src="{{ asset('icons/phone.svg') }}" alt="Телефон" class="w-4">
                                    <div class="ml-2">{{ $activeContact->value }}</div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                @elseif($activeType === 'Email')
                    @foreach($contact as $activeContact)
                        <li class="w-fit">
                            <a href="mailto:{{ $activeContact->value }}" target="_blank">
                                <div class="flex items-center">
                                    <img src="{{ asset('icons/mail.svg') }}" alt="mail" class="w-4">
                                    <div class="ml-2">{{ $activeContact->value }}</div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                @endif
            @empty
                <p>Контакты отсутствуют</p>
            @endforelse
        </ul>
    </nav>
</div>
