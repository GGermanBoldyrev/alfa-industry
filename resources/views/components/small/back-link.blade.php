<!-- An unexamined life is not worth living. - Socrates -->
<a href="{{ $href }}" class="inline-flex items-center text-mainBlue hover:text-mainBlueDarker">
    <img src="{{ asset('icons/arrow-long-left-blue.svg') }}" alt="Стрелка назад" class="mr-1 w-[1.125rem]">
    {{ $slot }}
</a>
