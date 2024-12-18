<!-- Блок новостей -->
<section class="px-8 py-12 rounded-md shadow-xl">
    <h1 class="text-center text-2xl font-bold mb-8">Последние новости</h1>

    @if ($news->count())
        <div class="space-y-6">
            @foreach ($news as $item)
                <div class="p-6 bg-white shadow rounded-md">
                    @if ($item->image)
                        <img
                            src="{{ asset('storage/news_images/' . basename($item->image)) }}"
                            alt="Изображение новости"
                            class="w-full h-auto max-w-sm object-cover rounded-md mt-2"
                        >
                    @endif
                    <h2 class="text-xl font-semibold mt-2">
                        <a href="{{ route('news.show', $item->id) }}" class="hover:text-blue-500">
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
                        class="text-blue-500 mt-4 block hover:text-blue-700"
                    >
                        Читать далее
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center mt-6">Новостей пока нет.</p>
    @endif
</section>
