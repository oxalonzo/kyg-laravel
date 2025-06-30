<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo') - Importadora KYG</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!--faviicon-->
    <link rel="icon" href="{{ asset('img/logokyg.webp') }}" type="image/png">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&family=Roboto:wght@100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Swiper CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
   



</head>

<body class=" bg-transparent min-h-screen flex flex-col items-center scroll-smooth">


    <!-- Page Heading -->
    {{-- @isset($header)
                <header class="relative w-full h-screen border rounded-lg text-white overflow-hidden">
                   
                        {{ $header }}
                   
                </header>
            @endisset --}}


    <!-- Page Content -->

    <div id="mainContent" class="  flex flex-col min-h-screen w-full">
        {{ $slot }}

        <!-- footer -->
        @include('layouts.footer')
    </div>





    {{-- JavaScript para el menu responsive --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const toggle = document.getElementById('menuToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const closeBtn = document.getElementById('menuClose');

            toggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('-translate-x-full');
            });


            closeBtn.addEventListener('click', () => {
                mobileMenu.classList.add('-translate-x-full');
            });

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>




</body>

</html>
