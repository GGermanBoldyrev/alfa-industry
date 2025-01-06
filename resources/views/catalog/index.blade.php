@extends('layouts.base')

@section('title', 'Каталог')

@section('content')
<div class="container mx-auto py-6">
    <!-- Заголовок с названием категории -->
    <h1 class="text-3xl font-semibold mb-12 text-center">Каталог</h1>

    <!-- Бренды -->
    <div class="flex justify-center w-full space-x-24">
        <a href="{{ route('products.index') }}">
            <div class="border p-4 rounded shadow h-[400px]  w-[400px]">
                <img src="{{ asset('storage/') }}" alt="" class="w-full h-60 object-cover mb-4">
                <h2 class="text-xl font-medium">Каталог товаров</h2>
            </div>
        </a>

        <a href="{{ route('brands.index') }}">
            <div class="border p-4 rounded shadow h-[400px] w-[400px]">
                <img src="{{ asset('storage/') }}" alt="" class="w-full h-60 object-cover mb-4">
                <h2 class="text-xl font-medium">Каталог брендов</h2>
            </div>
        </a>
    </div>
</div>
@endsection