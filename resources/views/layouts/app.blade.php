<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    @yield('meta')
</head>
<body>
    <x-header />

    <main>
        @yield('content')
    </main>

    {{-- <x-footer /> --}}

</body>
</html>
