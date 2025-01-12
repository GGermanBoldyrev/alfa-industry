@extends('layouts.base')

@section('title', 'Добро пожаловать!')

@section('content')
    <div class="flex justify-between">
        <main class="w-7/12 space-y-10">
            @include('home.blocks.about')
            @include('home.blocks.activity')
        </main>
        <aside class="w-4/12">
            @include('home.blocks.news')
           {{-- @include('home.blocks.photos')--}}
        </aside>
    </div>
@endsection
