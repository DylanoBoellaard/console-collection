<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'DW Vault')</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>

    <x-navbar />

    <x-model-banner />

    <main class="page-content">
        @yield('content')
    </main>

    @livewireScripts
</body>

</html>