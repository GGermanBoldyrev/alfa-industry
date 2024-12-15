@props(['icon', 'title'])

<li class="flex flex-col justify-center items-center w-48">
    <img src="{{ asset('icons/' . $icon) }}" alt="{{ $title }}" class="w-16">
    <div class="mt-3">{{ $title }}</div>
</li>
