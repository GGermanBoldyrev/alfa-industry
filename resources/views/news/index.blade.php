@extends('layouts.base')

@section('title', 'Новости')

@section('content')
    <section class="px-8 py-12 bg-whiteDarker rounded-md shadow-xl">
        <h1 class="text-center text-2xl font-bold mb-8">Новости</h1>

        @if ($news->count())
            <div class="space-y-6">
                @foreach ($news as $item)
                    <div class="p-6 bg-white shadow rounded-md">
                        <h2 class="text-xl font-semibold">
                            <a href="{{ route('news.show', $item->id) }}" class="text-mainBlue hover:text-mainBlueDarker">
                                {{ $item->title }}
                            </a>
                        </h2>
                        <p class="text-sm mt-2 text-grayDarker">
                            Опубликовано {{ $item->created_at->format('d.m.Y') }}
                        </p>
                        <p class="mt-4">
                            {{ Str::limit($item->content, 150, '...') }}
                        </p>
                        <a href="{{ route('news.show', $item->id) }}"
                           class="text-mainBlue text-sm mt-4 block hover:text-mainBlueDarker">
                            Читать далее
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $news->links() }} <!-- Пагинация -->
            </div>
        @else
            <p class="text-center">Новостей пока нет.</p>
        @endif
    </section>
@endsection
