<div class="slider-container">
    <div class="slider-wrapper">
        @foreach ($items as $item)
            <div class="slider-slide">
                <div class="p-6 bg-white rounded-md">
                    @if ($item->image)
                        <img
                            src="{{ asset('storage/news_images/' . basename($item->image)) }}"
                            alt="Изображение новости"
                            class="w-full h-auto max-w-sm object-cover rounded-md mt-2"
                        >
                    @endif
                    <h2 class="text-xl font-semibold mt-2">
                        <a href="{{ route('news.show', $item->id) }}" class="text-mainBlue hover:text-mainBlueDarker">
                            {{ $item->title }}
                        </a>
                    </h2>
                    <p class="text-sm mt-2 text-gray-600">
                        Опубликовано {{ $item->created_at->format('d.m.Y') }}
                    </p>
                    <p class="mt-4">
                        {{ Str::limit($item->content, 150, '...') }}
                    </p>
                    <a
                        href="{{ route('news.show', $item->id) }}"
                        class="text-mainBlue mt-4 block hover:text-mainBlueDarker"
                    >
                        Читать далее
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="slider-dots"></div>
</div>
