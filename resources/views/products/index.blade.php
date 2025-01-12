@extends('layouts.base')

@section('title', 'Каталог')

@section('content')
    <div class="container mx-auto">
        <!-- Заголовок -->
        <h3 class="text-3xl font-bold text-center mb-12">Каталог продукции</h3>

        <!-- Маршрут -->
        <div class="flex justify-between items-center mb-8 text-lg">
            <div class="flex space-x-2">
                <a href="{{ route('catalog.index') }}">Каталог</a>
                <img src="{{ asset('icons/arrow-long-right-black.svg') }}" alt="Стрелка вправо" class="w-[1.125rem]">
                <a href="{{ route('products.index') }}">Каталог товаров</a>
            </div>
            <!-- Поиск -->
            <form action="{{ route('products.search') }}" method="GET" class="flex items-center border rounded-lg overflow-hidden">
                <input
                    type="text"
                    name="query"
                    placeholder="Найти товар..."
                    class="px-4 py-2 w-64 outline-none"
                >
                <button
                    type="submit"
                    class="bg-blue-500 text-white px-4 py-2 hover:bg-blue-600 transition-colors"
                >
                    Искать
                </button>
            </form>
        </div>

        <div class="flex space-x-8">
            <!-- Список продукции -->
            <main class="w-3/4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
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
                <!-- Пагинация -->
                <div class="mt-6">
                    {{ $products->links('vendor.pagination.custom') }}
                </div>
            </main>

            <!-- Боковая панель фильтров -->
            <aside class="w-1/4 bg-gray-100 p-4 rounded-lg">
                <h2 class="text-xl font-bold mb-4">Фильтры</h2>

                <!-- Форма для фильтров -->
                <form action="{{ route('products.filter') }}" method="GET">
                    <!-- Фильтр по цене -->
                    <div class="mb-6">
                        <h3 class="font-semibold mb-2">Цена</h3>
                        <div class="flex items-center space-x-2">
                            <input type="number" name="price_min" placeholder="от" class="w-1/2 border border-gray-300 rounded-lg p-2">
                            <input type="number" name="price_max" placeholder="до" class="w-1/2 border border-gray-300 rounded-lg p-2">
                        </div>
                    </div>

                    <!-- Фильтр по брендам -->
                    <div class="mb-6">
                        <h3 class="font-semibold mb-2">Бренд</h3>
                        <ul class="space-y-1">
                            <li>
                                <label class="flex items-center">
                                    <input type="checkbox" name="brand[]" value="Samsung" class="mr-2">
                                    Samsung
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center">
                                    <input type="checkbox" name="brand[]" value="Apple" class="mr-2">
                                    Apple
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center">
                                    <input type="checkbox" name="brand[]" value="LG" class="mr-2">
                                    LG
                                </label>
                            </li>
                            <!-- Добавьте больше брендов -->
                        </ul>
                    </div>

                    <!-- Фильтр по характеристикам -->
                    <div class="mb-6">
                        <h3 class="font-semibold mb-2">Характеристики</h3>
                        <label class="flex items-center">
                            <input type="checkbox" name="features[]" value="Wi-Fi" class="mr-2">
                            Wi-Fi
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="features[]" value="Bluetooth" class="mr-2">
                            Bluetooth
                        </label>
                        <!-- Добавьте больше характеристик -->
                    </div>

                    <!-- Кнопка для применения фильтров -->
                    <div class="mt-4">
                        <button
                            type="submit"
                            class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition-colors"
                        >
                            Применить фильтры
                        </button>
                    </div>
                </form>
            </aside>
        </div>
    </div>
@endsection
