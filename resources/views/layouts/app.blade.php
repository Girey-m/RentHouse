<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    {{-- Livewire Styles --}}
    @livewireStyles

    @yield('meta')
</head>
<body>
    <livewire:header />

    <main>
        @yield('content')
    </main>

    {{-- Livewire Scripts (обязательно перед закрытием body) --}}
    @livewireScripts

    {{-- <x-footer /> --}}
</body>
</html>
