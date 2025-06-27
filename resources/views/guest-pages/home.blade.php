<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home - Importadora KYG</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!--faviicon-->
    <link rel="icon" href="{{ asset('img/logokyg.webp') }}" type="image/png">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">





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


            <!-- Carousel de banners -->
            @foreach ($banners as $index => $banner)
                @php
                    $ext = pathinfo($banner->imagen_banner, PATHINFO_EXTENSION);
                    $isVideo = in_array(strtolower($ext), ['mp4', 'webm', 'ogg']);
                @endphp

                <div class="banner-slide absolute inset-0 transition-all duration-700 @if ($index === 0) opacity-100 visible @else opacity-0 invisible @endif"
                    style="z-index: {{ 10 - $index }}">

                    @if ($isVideo)
                        <video class="w-full h-full object-cover" autoplay muted loop playsinline>
                            <source src="{{ asset('storage/banners/' . $banner->imagen_banner) }}"
                                type="video/{{ $ext }}">
                            Tu navegador no soporta video.
                        </video>
                    @else
                        <img src="{{ asset('storage/banners/' . $banner->imagen_banner) }}"
                            alt="Banner {{ $index + 1 }}" class="w-full h-full object-cover">
                    @endif

                    <div class="absolute inset-0 bottom-[100px] flex items-end justify-center z-20 ">
                        <div class=" bg-transparent text-white p-4  mb-4 text-center">

                            <h2
                                class=" text-[26px] lg:text-[36px] font-bold mb-4 uppercase font-Raleway tracking-wider">
                                {{ $banner->titulo }}</h2>

                            @if (!empty($banner->enlace))
                                <a href="{{ $banner->enlace }}" target="_blank"
                                    class=" group flex items-end justify-center hover:text-gray-200 transition">
                                    <span
                                        class=" border-2 border-gray-400 rounded-full text-center p-2 transform transition-transform duration-300 group-hover:translate-x-1">
                                        <svg class="  w-5 h-5 lg:w-6 lg:h-6" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M8 4L16 12L8 20" />
                                        </svg>
                                    </span>
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Capa negra semi-transparente encima del video -->
                    <div class="absolute inset-0 bg-black bg-opacity-20 z-10 pointer-events-none"></div>

                </div>
            @endforeach

            <!-- Progress bars container -->
            <div id="banner-progress"
                class="absolute w-full bottom-[40px]  flex items-end justify-center gap-2 p-4 z-10 ">
                @foreach ($banners as $index => $banner)
                    <div class="w-[30px] h-1 bg-white/30 rounded overflow-hidden relative">
                        <div
                            class="progress-fill absolute top-0 left-0 h-full bg-white w-0 transition-all duration-[5000ms] ease-in-out">
                        </div>
                    </div>
                @endforeach
            </div>


            <!-- NAVBAR superpuesto -->
            <header class="relative z-20 flex items-center justify-between px-6 py-4">

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
                class="fixed inset-0 bg-black bg-opacity-30 text-white transform -translate-x-full transition-transform duration-300 z-50 shadow-lg">

                <!-- Fondo blur -->
                <div class="absolute inset-0 backdrop-blur-md bg-black bg-opacity-60 pointer-events-none"></div>


                <!-- Contenido del menú (sobre el blur) -->
                <div class="relative flex flex-col h-full">
                    <!-- Header del menú móvil con logo y botón de cerrar -->
                    <div class="flex items-center justify-between px-6 py-4 border-b z-10">
                        <div class="w-full flex justify-center">
                            <img src="{{ asset('/img/logoblanco.png') }}" alt="Logo" class="w-12 h-12">
                        </div>
                        <!-- Botón cerrar -->
                        <button id="menuClose" class="absolute right-5 top-6 text-gray-700 z-10">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Enlaces del menú -->
                    <div class="p-6 space-y-4 text-start">
                        <a href="{{ route('home') }}"
                            class="group flex items-center justify-between font-semibold font-Raleway transition-all">
                            Home
                            <span class="transform transition-transform duration-300 group-hover:translate-x-1">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 4L16 12L8 20" />
                                </svg>
                            </span>
                        </a>
                        <a href="{{ route('nosotros') }}"
                            class="group flex items-center justify-between font-semibold font-Raleway transition-all">
                            Nosotros
                            <span class="transform transition-transform duration-300 group-hover:translate-x-1">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 4L16 12L8 20" />
                                </svg>
                            </span>
                        </a>
                        <a href="{{ route('actividades') }}"
                            class="group flex items-center justify-between font-semibold font-Raleway transition-all">
                            Actividades
                            <span class="transform transition-transform duration-300 group-hover:translate-x-1">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 4L16 12L8 20" />
                                </svg>
                            </span>
                        </a>
                        <a href="{{ route('servicio') }}"
                            class="group flex items-center justify-between font-semibold font-Raleway transition-all">
                            Servicios
                            <span class="transform transition-transform duration-300 group-hover:translate-x-1">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 4L16 12L8 20" />
                                </svg>
                            </span>
                        </a>
                        <a href="{{ route('politicas') }}"
                            class="group flex items-center justify-between font-semibold font-Raleway transition-all">
                            Políticas
                            <span class="transform transition-transform duration-300 group-hover:translate-x-1">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 4L16 12L8 20" />
                                </svg>
                            </span>
                        </a>
                        <a href="{{ route('contacto') }}"
                            class="group flex items-center justify-between font-semibold font-Raleway transition-all">
                            Contacto
                            <span class="transform transition-transform duration-300 group-hover:translate-x-1">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 4L16 12L8 20" />
                                </svg>
                            </span>
                        </a>
                        <a href="{{ route('login') }}"
                            class="group flex items-center justify-between font-semibold font-Raleway transition-all">
                            Login
                            <span class="transform transition-transform duration-300 group-hover:translate-x-1">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 4L16 12L8 20" />
                                </svg>
                            </span>
                        </a>
                    </div>

                </div>

            </aside>
        </section>

        <!-- MAIN -->
        <main class="flex justify-center items-center flex-col bg-gray-50">


            <!-- section branches -->
            <section id="showServiceCenter" class=" opacity-0 translate-y-10 transition-all duration-700 ease-in-out lg:h-[800px] flex flex-col lg:flex-row justify-center items-center w-full px-4 py-12">
                <div class=" w-full lg:w-[55%] flex flex-col items-center mb-7 lg:mb-0">
                    <h2 class=" text-2xl sm:text-5xl font-extrabold font-Raleway tracking-wider">Centros de servicios
                    </h2>
                </div>

                <div id="slider"
                    class=" relative flex justify-between items-center w-full lg:w-[45%] h-[420px] rounded-lg shadow-md ">

                    @php

                        $slides = [
                            [
                                'img' => 'img/centrojfk.jpg',
                                'title' => 'Centro de servicios Kenedy',
                                'link' => 'https://www.youtube.com/',
                            ],
                            [
                                'img' => 'img/centroduarte.jpg',
                                'title' => 'Centro de servicios Duarte',
                                'link' => 'https://www.youtube.com/',
                            ],
                            [
                                'img' => 'img/centropuntacana.jpg',
                                'title' => 'Centro de servicios punta cana',
                                'link' => 'https://www.youtube.com/',
                            ],
                        ];

                    @endphp

                    @foreach ($slides as $index => $slide)
                        <div
                            class="slide absolute inset-0 transition-opacity duration-700 {{ $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }} group overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition duration-300 ease-out rounded-lg" src="{{ asset($slide['img']) }}"
                                alt="{{ $slide['title'] }}">
                            <h3
                                class=" absolute bottom-2 left-2 uppercase text-md sm:text-xl text-white font-semibold">
                                {{ $slide['title'] }}</h3>
                            <a href="{{ $slide['link'] }}"
                                class=" absolute bottom-2 right-4 text-sm font-bold bg-[#f2cd01] hover:bg-[#f6d939] p-2 rounded-md border-1 border-black ">Ver
                                centro</a>
                        </div>
                    @endforeach




                </div>
            </section>


            <!-- section price and goal -->


            <section id="showBranches" class=" opacity-0 translate-y-10 transition-all duration-700 ease-in-out flex flex-col lg:flex-row justify-center items-center w-full px-8 py-6 ">

                <div class=" relative w-full lg:w-[40%] h-[800px]">

                    <!--fondo oscuro en la imagen-->
                    <div class=" absolute inset-0 bg-black opacity-20"></div>

                    <!--content-->
                    <img class="w-full h-full object-cover rounded-lg" src="{{ asset('img/backgroundprice.jpg') }}"
                        alt="{{ $slide['title'] }}">

                    <h3 class=" absolute top-[200px] left-[50px]  text-[22px] sm:text-3xl text-white font-bold">¿Estás
                        pensando en cambiar tus neumáticos?</h3>

                    <p class="absolute top-[300px] left-[50px]  text-md sm:text-xl text-white font-semibold">Comunicate
                        con uno de nuestros expertos y solicita tu cotizacion. 829-638-8334</p>

                    <a href="#"
                        class=" absolute bottom-[100px] right-[35px] sm:right-[50px] text-sm text-white font-bold bg-black p-4 rounded-md  group">
                        <span class=" relative z-10 group-hover:text-black duration-300 ease-out">Solicita tu
                            cotización</span>
                        <span
                            class=" absolute inset-0 bg-[#f2cd01] transition-transform duration-300 ease-out transform scale-0 origin-top-left group-hover:scale-[1] z-0 rounded-md border-1 border-[#f2cd01] "></span>
                    </a>

                </div>

                <div class=" relative w-full lg:w-[60%] flex flex-col justify-center items-center py-8 lg:py-0">


                    <!--line divide of number-->
                    <div class=" absolute top-[125px] sm:top-[125px] lg:top-[96px] left-[0px] sm:left-[52px] lg:left-[204px] bg-gray-50 w-[160px] sm:w-[165px] lg:w-[162px] h-[5px] rotate-[160deg]"></div>
                    
                    <!--logic for the number increase-->

                    @php
                        $yearBase = 1986; //year start
                        $numberBase = 0; //start number
                        $currentYear = now()->year; // current year
                        $diferent = $currentYear - $yearBase; //logic
                        $valueFinal = $numberBase + $diferent; 
                    @endphp

                    <!--content-->
                    <div class="flex text-center justify-center items-center mb-[40px] gap-4">
                        <h2 class="text-[120px] font-bold text-[#f2cd01]">{{ $valueFinal }}</h2>
                        <p class=" text-[20px] text-gray-400 font-Raleway font-semibold tracking-wide max-w-96">años comprometidos con la satisfacción y seguridad de nuestros clientes a nivel nacional.</p>
                    </div>

                    <div>
                        <h3 class="max-w-[550px] text-[25px] font-Raleway font-semibold">Nuestra <span class="text-[#f2cd01]">meta</span> es exceder las expectativas del mercado y agregar valor sostenible, combinando alianzas con marcas innovadoras y una cultura de excelencia</h3>
                    </div>

                </div>

            </section>

            <section class="flex flex-col items-center bg-[#161616] w-full h-auto lg:h-screen ">
                
                <!--content-->
                <div class="flex flex-col justify-center items-center text-white mb-28 py-[70px]">
                    <h2 class=" text-2xl sm:text-4xl lg:text-5xl font-Raleway font-bold tracking-wider mb-8">¿Conoces Nuestro Proceso?</h2>
                    <p class=" text-gray-300 max-w-[520px] text-[14px] sm:text-[16px] lg:text-[18px] font-Raleway font-semibold text-center tracking-wide ">Nuestro proceso de mejora de flotillas esta diseñado para reducir costos, tiempo y riezgo a tu personal.</p>
                </div>

                <!--cards-->
                <div id="showCards" class="flex flex-col lg:flex-row justify-center items-center w-full mb-3 gap-8 opacity-0 translate-y-10 transition-all duration-700 ease-in-out ">

                    <div id="card1" class="relative h-[570px] w-full sm:w-[500px] rounded-none sm:rounded-lg lg:rounded-none lg:rounded-tl-lg lg:rounded-tr-lg bg-[#5e5e5e] flex flex-col text-start px-8 py-20 overflow-hidden opacity-0 translate-y-10 transition-all duration-700 ">
                        <h3 class="text-white text-3xl font-Raleway font-bold  tracking-wider mb-5 z-10">Optimización</h3>
                        <p class="text-gray-300 font-Raleway font-semibold z-10">Logística de trabajo optimizada para reducir tiempo de espera en taller, reflejandose en mayor tiempo de productividad en tu negocio.</p>
                        <img class=" absolute left-0 bottom-[40px] w-[350px] h-[350px]" src="{{ asset('img/aceite.png') }}" alt="aceite kyg">
                    </div>

                    <div id="card2" class="relative h-[570px] w-full sm:w-[500px] rounded-none sm:rounded-lg lg:rounded-none lg:rounded-tl-lg lg:rounded-tr-lg bg-black flex flex-col text-start px-8 py-20 overflow-hidden opacity-0 translate-y-10 transition-all duration-700 ">
                        <h3 class="text-white text-3xl font-Raleway font-bold  tracking-wider mb-5">Prevención</h3>
                        <p class="text-gray-300 font-Raleway font-semibold">Logística de trabajo optimizada para reducir tiempo de espera en taller, reflejandose en mayor tiempo de productividad en tu negocio.</p>
                        <img class=" absolute left-[20px] bottom-[0px] w-[450px] h-[350px]" src="{{ asset('img/goma2.jpg') }}" alt="aceite kyg">
                    </div>

                    <div id="card3" class="relative h-[570px] w-full sm:w-[500px] rounded-none sm:rounded-lg lg:rounded-none lg:rounded-tl-lg lg:rounded-tr-lg bg-[#f2cd01] flex flex-col text-start px-8 py-20 overflow-hidden opacity-0 translate-y-10 transition-all duration-700 ">
                        <h3 class="text-white text-3xl font-Raleway font-bold  tracking-wider mb-5">Ahorro</h3>
                        <p class="text-white font-Raleway font-semibold">Logística de trabajo optimizada para reducir tiempo de espera en taller, reflejandose en mayor tiempo de productividad en tu negocio.</p>
                        <img class=" absolute right-[-60px] bottom-[5px] w-[310px] h-[310px]" src="{{ asset('img/bateria.png') }}" alt="aceite kyg">
                    </div>

                </div>

            </section>

            



        </main>


        <!-- FOOTER -->
        @include('layouts.footer')


    </div>

   

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
