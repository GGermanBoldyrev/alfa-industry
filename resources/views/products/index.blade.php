@extends('layouts.base')

@section('title', 'Каталог')

@section('content')
<div class="container mx-auto">
    <!-- Заголовок -->
    <h3 class="text-3xl font-bold text-center mb-12">Каталог продукции</h1>

    <!-- Маршрут -->
    <div class="flex justify-between items-center mb-8 text-lg">
        <div class="flex space-x-2">
            <a href="{{ route('catalog.index') }}">Каталог</a>
            <img src="{{ asset('icons/arrow-long-right-black.svg') }}" alt="Стрелка вправо" class="w-[1.125rem]">
            <a href="{{ route('catalog.index') }}">Каталог товаров</a>
        </div>
    </div>

    <!-- Список категорий -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($products as $product)
            <a href="{{ route('products.index', $product->slug) }}" class="border rounded-lg p-4 shadow hover:shadow-lg">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-40 object-cover mb-4">
                @endif
                <h3 class="text-lg font-semibold mb-2">{{ $product->name }}</h3>
                <p class="text-gray-600">{{ $product->description }}</p>
            </a>
        @endforeach
    </div>
</div>
@endsection