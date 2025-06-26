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

   <div
    class="banner-slide absolute inset-0 transition-all duration-700 @if($index === 0) opacity-100 visible @else opacity-0 invisible @endif"
    style="z-index: {{ 10 - $index }}"
>

        @if ($isVideo)
            <video class="w-full h-full object-cover" autoplay muted loop playsinline>
                <source src="{{ asset('storage/banners/' . $banner->imagen_banner) }}" type="video/{{ $ext }}">
                Tu navegador no soporta video.
            </video>
        @else
            <img src="{{ asset('storage/banners/' . $banner->imagen_banner) }}" alt="Banner {{ $index + 1 }}" class="w-full h-full object-cover">
        @endif

        <div class="absolute inset-0 bottom-[100px] flex items-end justify-center z-20 ">
           <div class=" bg-transparent text-white p-4  mb-4 text-center">
             
            <h2 class=" text-[26px] lg:text-[36px] font-bold mb-4 uppercase font-Raleway tracking-wider">{{ $banner->titulo }}</h2>
            
            @if (!empty($banner->enlace))
                <a href="{{ $banner->enlace }}" target="_blank" class=" group flex items-end justify-center hover:text-gray-200 transition">
               <span class=" border-2 border-gray-400 rounded-full text-center p-2 transform transition-transform duration-300 group-hover:translate-x-1">
                  <svg class="  w-5 h-5 lg:w-6 lg:h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                   stroke-linecap="round" stroke-linejoin="round">
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
<div id="banner-progress" class="absolute w-full bottom-[40px]  flex items-end justify-center gap-2 p-4 z-10 ">
    @foreach ($banners as $index => $banner)
        <div class="w-[30px] h-1 bg-white/30 rounded overflow-hidden relative">
            <div class="progress-fill absolute top-0 left-0 h-full bg-white w-0 transition-all duration-[5000ms] ease-in-out"></div>
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
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Enlaces del menú -->
         <div class="p-6 space-y-4 text-start">
    <a href="{{ route('home') }}" class="group flex items-center justify-between font-semibold font-Raleway transition-all">
        Home
        <span class="transform transition-transform duration-300 group-hover:translate-x-1">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M8 4L16 12L8 20" />
            </svg>
        </span>
    </a>
    <a href="{{ route('nosotros') }}" class="group flex items-center justify-between font-semibold font-Raleway transition-all">
        Nosotros
        <span class="transform transition-transform duration-300 group-hover:translate-x-1">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M8 4L16 12L8 20" />
            </svg>
        </span>
    </a>
    <a href="{{ route('actividades') }}" class="group flex items-center justify-between font-semibold font-Raleway transition-all">
        Actividades
        <span class="transform transition-transform duration-300 group-hover:translate-x-1">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M8 4L16 12L8 20" />
            </svg>
        </span>
    </a>
    <a href="{{ route('servicio') }}" class="group flex items-center justify-between font-semibold font-Raleway transition-all">
        Servicios
        <span class="transform transition-transform duration-300 group-hover:translate-x-1">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M8 4L16 12L8 20" />
            </svg>
        </span>
    </a>
    <a href="{{ route('politicas') }}" class="group flex items-center justify-between font-semibold font-Raleway transition-all">
        Políticas
        <span class="transform transition-transform duration-300 group-hover:translate-x-1">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M8 4L16 12L8 20" />
            </svg>
        </span>
    </a>
    <a href="{{ route('contacto') }}" class="group flex items-center justify-between font-semibold font-Raleway transition-all">
        Contacto
        <span class="transform transition-transform duration-300 group-hover:translate-x-1">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M8 4L16 12L8 20" />
            </svg>
        </span>
    </a>
    <a href="{{ route('login') }}" class="group flex items-center justify-between font-semibold font-Raleway transition-all">
        Login
        <span class="transform transition-transform duration-300 group-hover:translate-x-1">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
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
            <section class=" flex flex-col lg:flex-row justify-center items-center w-full px-4 py-12">
                <div class=" w-full lg:w-[55%] flex flex-col items-center">
                    <h2 class=" text-2xl sm:text-4xl font-extrabold font-Raleway tracking-wider">Centros de servicios</h2>
                </div>

                <div id="slider" class=" relative flex justify-between items-center w-full lg:w-[45%] h-[420px] rounded-lg shadow-md ">

                    @php
                    
                    $slides = [
                        ['img' => 'img/centrojfk.jpg', 'title' => 'Centro de servicios Kenedy', 'link' => 'https://www.youtube.com/'],
                        ['img' => 'img/centroduarte.jpg', 'title' => 'Centro de servicios Duarte', 'link' => 'https://www.youtube.com/'],
                        ['img' => 'img/centropuntacana.jpg', 'title' => 'Centro de servicios punta cana', 'link' => 'https://www.youtube.com/'],
                    ]

                    @endphp

                    @foreach ($slides as $index => $slide)
                    
                        <div class="slide absolute inset-0 transition-opacity duration-700 {{ $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0'}}">
                            <img class="w-full h-full object-cover rounded-lg" src="{{ asset($slide['img']) }}" alt="{{ $slide['title'] }}">
                            <h3 class=" absolute bottom-2 left-2 uppercase text-md sm:text-xl text-white font-semibold">{{ $slide['title'] }}</h3>
                            <a href="{{ $slide['link'] }}" class=" absolute bottom-2 right-4 text-sm font-bold bg-[#f2cd01] hover:bg-[#f6d939] p-2 rounded-md border-1 border-black ">Ver centro</a>
                        </div>
                    
                    @endforeach

                      
                      
                      
                </div>
            </section>
            
            
            <!-- section price and goal -->


            <section class=" flex flex-col lg:flex-row justify-center items-center w-full px-8 py-4 ">

                <div class=" relative w-full lg:w-[40%] h-[800px]">

                    <!--fondo oscuro en la imagen-->
                    <div class=" absolute inset-0 bg-black opacity-10"></div>

                    <!--content-->
                     <img class="w-full h-full object-cover rounded-lg" src="{{ asset('img/backgroundprice.jpg') }}" alt="{{ $slide['title'] }}">

                     <h3 class=" absolute top-[200px] left-[50px] uppercase text-md sm:text-3xl text-white font-bold">¿Estós pensando en cambiar tus neumáticos?</h3>

                     <p class="absolute top-[300px] left-[50px] uppercase text-md sm:text-xl text-white font-semibold">Comunicate con uno de nuestros expertos y solicita tu cotizacion. 829-638-8334</p>
                     
                     <a href="#" class=" absolute bottom-[100px] right-[50px] text-sm text-[#f2cd01] font-bold bg-black p-2 rounded-md border-1 border-black ">Cotiza con nosotros</a>
                
                </div>

                <div class=" relative w-full lg:w-[60%] flex flex-col justify-center items-center">
                    <!--lines-->
                    {{-- <div class=" absolute top-1 w-[1300px] h-[6px] bg-[#f2cd01] rotate-[140deg]"></div>
                    <div class=" absolute top-5 w-[1280px] h-[6px] bg-[#f2cd01] rotate-[140deg]"></div> --}}

                     <!--content-->
                    <h2 class=" text-2xl sm:text-4xl font-extrabold font-Raleway tracking-wider z-10">texto</h2>
                </div>

            </section>

          
            
        </main>
        

        <!-- FOOTER -->
        @include('layouts.footer')


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


    //barra de progreso 

   document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.banner-slide');
    const progressFills = document.querySelectorAll('.progress-fill');
    const duration = 5000; // 🔁 Aquí defines los 10 segundos
    let current = 0;

    function resetProgressBars() {
        progressFills.forEach((fill) => {
            fill.style.width = '0%';
            fill.style.transition = 'none';
        });
    }

    function animateProgressBar(index) {
        const fill = progressFills[index];
        fill.style.transition = `width ${duration}ms linear`; // ⏱ Aquí también
        fill.style.width = '100%';
    }

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.remove('opacity-0', 'invisible');
                slide.classList.add('opacity-100', 'visible');
            } else {
                slide.classList.remove('opacity-100', 'visible');
                slide.classList.add('opacity-0', 'invisible');
            }
        });

        resetProgressBars();
        animateProgressBar(index);
    }

    // Inicializar
    showSlide(current);

    // Loop automático cada 10 segundos
    setInterval(() => {
        current = (current + 1) % slides.length;
        showSlide(current);
    }, duration);
});


        // js de carousel de centros de servicios 

        let currentslide = 0;
        const slides = document.querySelectorAll('#slider .slide');
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('opacity-100', i === index);
                slide.classList.toggle('z-10', i === index);
                slide.classList.toggle('opacity-0', i !== index);
                slide.classList.toggle('z-0', i !== index);
            });
        }

        setInterval(() => {
            currentslide = (currentslide + 1) % totalSlides;
            showSlide(currentslide);
        }, 6000); // cambia cada 6 segundos


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
