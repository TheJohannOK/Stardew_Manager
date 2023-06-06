<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="icon" href="{{ config('app.url') }}/icon.ico">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=arbutus:400|gabriela:400" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-ga text-orange-900 antialiased " >
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-cover " style="background-image: url({{URL::asset('fondo.png')}})">
            <div class="p-4 w-36">
                <a href="/" >
                    <x-application-logo />
                </a>
            </div>
            <div class="text-xl text-black font-ar">
                STARDEW MANAGER
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 border border-amber-700 border-8 bg-amber-200 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
