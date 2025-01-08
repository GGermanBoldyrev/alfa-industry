@extends('layouts.base')

@section('title', 'Каталог брендов')

@section('content')
<div class="container mx-auto py-6">
    <!-- Заголовок с названием категории -->
    <h1 class="text-3xl font-semibold mb-12 text-center">Каталог брендов</h1>

    <!-- Маршрут -->
    <div class="flex justify-between items-center mb-8 text-lg">
        <div class="flex space-x-2">
            <a href="{{ route('catalog.index') }}">Каталог</a>
            <img src="{{ asset('icons/arrow-long-right-black.svg') }}" alt="Стрелка вправо" class="w-[1.125rem]">
            <a href="{{ route('brands.index') }}">Каталог брендов</a>
        </div>
    </div>

    <!-- Бренды -->
    @if ($brands->isNotEmpty())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($brands as $brand)
                <div class="border p-4 rounded shadow">
                    <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}" class="w-full h-40 object-cover mb-4">
                    <h2 class="text-xl font-medium">{{ $brand->name }}</h2>
                    <p class="text-gray-600 text-sm mt-2">{{ $brand->description }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-500">В этой категории пока нет брендов.</p>
    @endif
</div>
@endsection