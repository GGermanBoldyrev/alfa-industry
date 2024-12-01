<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfa Industry. @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/main/logoSimple.png') }}">
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<header>
    @include('components.large.header')
</header>

<main>
    <div class="container mx-auto p-4 mt-10">
        @yield('content')
    </div>
</main>

<footer>
    <div class="container mx-auto p-4 mt-48">
        @include('components.large.footer')
    </div>
</footer>
</body>
</html>
