<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home - Importadora KYG</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


</head>

<body class="bg-gray-100 min-h-screen flex flex-col items-center scroll-smooth ">



    {{-- PRELOADER con fondo negro, logo y texto --}}
    <div id="preloader"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black transition-opacity duration-1000 overflow-hidden">

        {{-- Contenedor del logo y texto --}}
        <div class="z-10 flex items-center space-x-6 animate-fade-in">
            {{-- Logo --}}
            <img src="{{ asset('/img/logoofi.png') }}" alt="Logo" class="w-[200px] h-[100px] animate-pulse">

            {{-- Texto con contorno --}}
            {{-- <h1 class="text-5xl font-bold uppercase text-transparent"
            style="-webkit-text-stroke: 2px white; text-stroke: 2px white;">
            K&G
        </h1> --}}
        </div>
    </div>

    {{-- main --}}

    <div id="mainContent" class="opacity-0 transition-opacity duration-1000 flex flex-col min-h-screen w-full">

        <!-- BANNER FULLSCREEN -->
        <section class="relative w-full h-screen text-white overflow-hidden">

            <!-- Fondo video o imagen -->
            <div class="absolute inset-0">
                <!-- VIDEO o IMG -->
                <video class="w-full h-full object-cover" autoplay muted loop playsinline>
                    <source src="{{ asset('video/video1.mp4') }}" type="video/mp4">
                </video>

            </div>

            <!-- Capa negra semi-transparente encima del video -->
            <div class="absolute inset-0 bg-black bg-opacity-30"></div>

            <!-- NAVBAR superpuesto -->
            <header class="relative z-10 flex items-center justify-between px-6 py-4">

                <!-- Logo + Enlaces alineados -->
                <div class="flex items-center space-x-6">
                    <!-- Logo -->
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('/img/logoblanco.png') }}" alt="Logo" class="w-12 h-12">
                    </a>

                    <!-- Enlaces (solo visible en pantallas medianas o más grandes) -->
                    <nav class="hidden md:flex space-x-4 text-lg font-semibold">

                        <ul class="flex space-x-4">
                            <li>
                                <a href="{{ route('home') }}"
                                    class=" relative group text-white uppercase text-[14px] font-Raleway mx-[14px] my-0 leading-[1.27em] tracking-wider">
                                    Home
                                    <span
                                        class=" absolute left-0 -bottom-1 h-[2px] w-0 bg-white transition-all duration-300 lg:group-hover:w-full"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('nosotros') }}"
                                    class=" relative group text-white uppercase text-[14px] font-Raleway  mx-[14px] my-0 leading-[1.27em] tracking-wider">
                                    Nosotros
                                    <span
                                        class=" absolute left-0 -bottom-1 h-[2px] w-0 bg-white transition-all duration-300 lg:group-hover:w-full"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('actividades') }}"
                                    class=" relative group text-white uppercase text-[14px] font-Raleway  mx-[14px] my-0 leading-[1.27em] tracking-wider">
                                    Actividades
                                    <span
                                        class=" absolute left-0 -bottom-1 h-[2px] w-0 bg-white transition-all duration-300 lg:group-hover:w-full"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('servicio') }}"
                                    class=" relative group text-white uppercase text-[14px] font-Raleway  mx-[14px] my-0 leading-[1.27em] tracking-wider">
                                    Servicios
                                    <span
                                        class=" absolute left-0 -bottom-1 h-[2px] w-0 bg-white transition-all duration-300 lg:group-hover:w-full"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('politicas') }}"
                                    class=" relative group text-white uppercase text-[14px] font-Raleway  mx-[14px] my-0 leading-[1.27em] tracking-wider">
                                    Políticas
                                    <span
                                        class=" absolute left-0 -bottom-1 h-[2px] w-0 bg-white transition-all duration-300 lg:group-hover:w-full"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contacto') }}"
                                    class=" relative group text-white uppercase text-[14px] font-Raleway  mx-[14px] my-0 leading-[1.27em] tracking-wider">
                                    Contacto
                                    <span
                                        class=" absolute left-0 -bottom-1 h-[2px] w-0 bg-white transition-all duration-300 lg:group-hover:w-full"></span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('login') }}" class=" relative group text-white uppercase text-[14px] font-Raleway  mx-[14px] my-0 leading-[1.27em] tracking-wider">
                                    Login
                                    <span class=" absolute left-0 -bottom-1 h-[2px] w-0 bg-white transition-all duration-300 lg:group-hover:w-full"></span>
                                </a>
                            </li> --}}
                        </ul>
                    </nav>
                </div>

                <!-- Lupa + hamburguesa -->
                <div class="flex items-center space-x-4 md:space-x-6">

                    {{-- icono login --}}
                    <a href="/login">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </a>

                    <!-- Icono lupa -->
                    <button>
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                        </svg>
                    </button>

                    <!-- Icono hamburguesa -->
                    <button class="md:hidden" id="menuToggle">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </header>


            <!-- Menú lateral (solo móviles) -->
            <aside id="mobileMenu"
                class="fixed inset-0 bg-black bg-opacity-90 text-white transform -translate-x-full transition-transform duration-300 z-50 shadow-lg">

                <!-- Header del menú móvil con logo y botón de cerrar -->
                <div class="flex items-center justify-between px-6 py-4 border-b">
                    <div class="w-full flex justify-center">
                        <img src="{{ asset('/img/logoblanco.png') }}" alt="Logo" class="w-12 h-12">
                    </div>
                    <!-- Botón cerrar -->
                    <button id="menuClose" class="absolute right-5 top-6 text-gray-700">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Enlaces del menú -->
                <div class="p-6 space-y-4 text-start ">
                    <a href="{{ route('home') }}" class="block font-semibold">Home</a>
                    <a href="{{ route('nosotros') }}" class="block font-semibold">Nosotros</a>
                    <a href="{{ route('actividades') }}" class="block font-semibold">Actividades</a>
                    <a href="{{ route('servicio') }}" class="block font-semibold">Servicios</a>
                    <a href="{{ route('politicas') }}" class="block font-semibold">Políticas</a>
                    <a href="{{ route('contacto') }}" class="block font-semibold">Contacto</a>
                    <a href="{{ route('login') }}" class="block font-semibold">Login</a>
                </div>
            </aside>
        </section>

        <!-- MAIN -->
        <main class="flex-1 px-4 py-12 bg-gray-50">
            <section class="max-w-4xl mx-auto text-center bg-white p-8 rounded shadow">
                <h2 class="text-3xl font-bold mb-4">Bienvenido</h2>
                <p class="text-gray-600">Este es el contenido principal de tu aplicación.</p>
            </section>
            <!-- Más secciones aquí -->
            
        </main>

        <!-- FOOTER -->
        <footer class="bg-white shadow-inner py-4 text-center text-sm text-gray-500">
            <p>Importadora KYG SAS  &copy; {{ date('Y') }}. Derechos Reservados</p>
        </footer>
    </div>


    {{-- JavaScript para ocultar el preloader tras 2 segundos --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const preloader = document.getElementById("preloader");
            const mainContent = document.getElementById("mainContent");

            setTimeout(() => {
                preloader.classList.add("opacity-0");
                setTimeout(() => {
                    preloader.style.display = "none";
                    mainContent.classList.remove("opacity-0");
                }, 1000);
            }, 2000); // 2 segundos exactos
        });


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

    {{-- Animación personalizada --}}
    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-fade-in {
            animation: fade-in 1.5s ease-out forwards;
        }
    </style>





</body>

</html>
