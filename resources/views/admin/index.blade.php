@extends('layouts.admin')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">Панель администратора</h1>
        <div class="grid grid-cols-3 gap-6">
            <a href="{{ route('admin.products.index') }}" class="bg-blue-500 text-white p-4 rounded-lg shadow">
                Управление товарами
            </a>
            <a href="{{ route('admin.users.index') }}" class="bg-green-500 text-white p-4 rounded-lg shadow">
                Управление пользователями
            </a>
            <a href="{{ route('admin.orders.index') }}" class="bg-yellow-500 text-white p-4 rounded-lg shadow">
                Заказы
            </a>
        </div>
    </div>
@endsection
