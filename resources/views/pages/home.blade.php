@extends('layouts.base')

@section('title', 'Добро пожаловать!')

@section('content')
    <div class="flex justify-between">
        <main class="w-7/12">
            @include('blocks.home.about')
        </main>
        <aside class="w-4/12">
            @include('blocks.home.news')
            @include('blocks.home.photos')
        </aside>
    </div>
@endsection
