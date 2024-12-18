@extends('layouts.base')

@section('title', 'Сделать заказ')

@section('content')
    <section class="px-8 py-12 bg-white rounded-md shadow-xl">
        <h1 class="text-center text-2xl font-bold mb-8">Сделать заказ</h1>
        <form action="{{ route('order.submit') }}" method="POST" enctype="multipart/form-data" class="max-w-2xl mx-auto space-y-6">
            @csrf

            <x-input-field name="name" label="Имя" required="true" placeholder="Иванов Иван Иванович"/>
            <x-input-field name="phone" label="Телефон" required="true" placeholder="+7-911-111-11-11" />
            <x-input-field type="email" name="email" label="E-mail" required="true" placeholder="my_email@mail.ru"/>
            <x-input-field name="company" label="Название компании и ИНН" />

            <div>
                <label for="note" class="block text-sm font-medium text-gray-700">
                    Примечание
                </label>
                <textarea name="note" id="note" rows="4"
                          class="mt-1 block w-full border-gray-300 shadow-sm rounded py-1 px-2 bg-slate-50 border border-slate-200
                          focus:divide-mainBlue focus:border-mainBlue"></textarea>
            </div>

            <div>
                <label for="file" class="block text-sm font-medium text-gray-700">Добавить файл (PDF)</label>
                <input type="file" name="file" id="file" accept=".pdf"
                       class="mt-1 block w-full border-gray-300 rounded shadow-sm bg-slate-50 border border-slate-200
                       focus:ring-mainBlue focus:border-mainBlue">
            </div>

            <div class="text-center">
                <x-small.button type="submit" class="btn-primary btn-xs mt-2">
                    Сделать заказ
                </x-small.button>
            </div>
        </form>
    </section>

    {{--Сообщение об успехе--}}
    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-md">
            {{ session('success') }}
        </div>
    @endif
@endsection
