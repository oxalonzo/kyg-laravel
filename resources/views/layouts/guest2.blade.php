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
        <link rel="icon"  href="{{ asset('img/logokyg.webp') }}" type="image/png">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">



    </head>
    <body class="bg-gray-100 min-h-screen flex flex-col items-center ">


         <!-- Page Heading -->
            {{-- @isset($header)
                <header class="relative w-full h-screen border rounded-lg text-white overflow-hidden">
                   
                        {{ $header }}
                   
                </header>
            @endisset --}}
    

            <!-- Page Content -->
            <main class="w-full flex flex-col min-h-screen ">
                {{ $slot }}
            </main>

             <!-- footer -->
            @include('layouts.footer')

        

{{-- JavaScript para ocultar el preloader tras 2 segundos --}}
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


    const currentPath = window.location.pathname;

    if (currentPath === '/nosotros') {
        const frases = [
            "En KYG, transformamos el cuidado de tu vehículo en una experiencia confiable y sin complicaciones.",
            "En KYG, tu seguridad en la carretera comienza con productos de calidad y un servicio que responde.",
            "En KYG, nos movemos contigo: gomas, baterías, aceite y mantenimiento en un solo lugar.",
            "En KYG, cuidamos tu carro como si fuera nuestro, porque sabemos lo que significa para ti."
        ];

        let index = 0;

        const texto = document.getElementById('rotatingText')

        setInterval(() => {
            
            
            //oculta el texto suavemente 
            texto.classList.add('opacity-0');

            //espera y cambia el texto
            setTimeout(() => {
                index = (index + 1) % frases.length;
                texto.textContent = frases[index];
                texto.classList.remove("opacity-0");
            }, 500);


        }, 4000);

    }


     
</script>




    </body>
</html>
