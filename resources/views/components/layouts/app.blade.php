<!DOCTYPE html>
<html class='dark' lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class='dark:bg-main dark:text-text_color'>
        <!-- nav bar -->
        <x-layouts.nav_bar />

        <div class="font-sans  antialiased">
            {{ $slot }}
        </div>
        <x-layouts.footer />
        <livewire:registration />
        @livewireScripts
    </body>
</html>
