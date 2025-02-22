@extends('layouts.base')

@section('title', $news->title)

@section('content')
    <section class="px-8 py-12 rounded-md shadow-xl">
        <!-- Ссылка "Назад" -->
        <div class="mb-6">
            <x-back-link href="{{ route('news.index') }}">
                Назад к списку новостей
            </x-back-link>
        </div>

        <!-- Контент новости -->
        <div class="flex justify-center">
            <img src="{{ asset('storage/news_images/' . basename($news->image)) }}"
                 alt="Изображение новости"
                 class="w-[42rem] wh-auto rounded-md mt-2 mb-8"
            >
        </div>
        <h1 class="text-2xl font-bold">{{ $news->title }}</h1>
        <p class="text-grayDarker text-sm mt-2">
            Опубликовано {{ $news->created_at->format('d.m.Y') }}
        </p>
        <div class="mt-6">
            {!! nl2br(e($news->content)) !!}
        </div>
    </section>
@endsection
