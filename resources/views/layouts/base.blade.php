<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<header>
    <div class="container mx-auto p-4">
        @include('components.large.navbar')
    </div>
</header>

<main>
    <div class="container mx-auto p-4">
        @yield('content')
    </div>
</main>

<footer>
    <div class="container mx-auto p-4">
        @include('components.large.footer')
    </div>
</footer>
</body>
</html>
