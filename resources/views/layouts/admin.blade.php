<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<header class="bg-white shadow py-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Админ-панель</h1>
        <nav>
            <a href="{{ route('home') }}" class="text-blue-500">На сайт</a>
            {{--<a href="{{ route('logout') }}" class="text-red-500 ml-4">Выйти</a>--}}
        </nav>
    </div>
</header>
<main class="py-6">
    @yield('content')
</main>
</body>
</html>
