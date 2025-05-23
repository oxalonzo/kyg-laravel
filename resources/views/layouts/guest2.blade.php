<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('titulo') - Importadora KYG</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!--faviicon-->
        <link rel="icon"  href="{{ asset('img/logok.png') }}" type="image/png">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 min-h-screen flex flex-col items-center ">
        
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            {{-- @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset --}}

            <header>
                
            <div class="flex">
          
                 <!-- Logo -->
            <a href="{{ route('home') }}">
                    <img src="{{ asset('/img/logoblanco.png') }}" alt="Logo" class="w-12 h-12">
            </a>
            

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">

                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('home') }}
                </x-nav-link>

                <x-nav-link :href="route('nosotros')" :active="request()->routeIs('nosotros')">
                    {{ __('nosotros') }}
                </x-nav-link>

                <x-nav-link :href="route('actividades')" :active="request()->routeIs('actividades')">
                    {{ __('actividades') }}
                </x-nav-link>

                <x-nav-link :href="route('servicio')" :active="request()->routeIs('servicio')">
                    {{ __('servicios') }}
                </x-nav-link>

                <x-nav-link :href="route('politicas')" :active="request()->routeIs('politicas')">
                    {{ __('politicas') }}
                </x-nav-link>

                <x-nav-link :href="route('contacto')" :active="request()->routeIs('contacto')">
                    {{ __('contacto') }}
                </x-nav-link>

                <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                    {{ __('login') }}
                </x-nav-link>

                </div>
             </div>

            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            @include('layouts.footer')

        
    </body>
</html>
