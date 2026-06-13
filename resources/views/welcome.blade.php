<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'RentHouse') }}</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">

    {{-- Подключаем наш header --}}
    <x-header />

    {{-- Здесь будет основной контент страницы --}}
    <main class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-center">Добро пожаловать в RentHouse</h1>
        <p class="text-center mt-4 text-gray-600">Здесь будет главная страница каталога жилья</p>
    </main>

</body>
</html>
