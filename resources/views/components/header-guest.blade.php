<section {{ $attributes->merge(['class' => 'relative w-full h-screen text-white overflow-hidden ']) }}>

    <!-- Fondo video o imagen -->
    <div class="absolute inset-0">

        @php
            $extensiones_video = ['mp4', 'avi', 'mov', 'mkv', 'flv', 'wmv', 'webm'];
            $extension = strtolower(pathinfo($picture, PATHINFO_EXTENSION));
        @endphp

        @if (in_array($extension, $extensiones_video))
            <!-- Es un video -->
            <video class="w-full h-full object-cover" autoplay muted loop playsinline>
                <source src="{{ asset($picture) }}" type="video/{{ $extension }}">
                Tu navegador no soporta el video.
            </video>
        @else
            <!-- Es una imagen -->
            <img src="{{ asset($picture) }}" alt="imagen fondo" class="w-full h-full object-cover" />
        @endif

    </div>

    <!-- Capa negra semi-transparente encima del video -->
    <div class="absolute inset-0 bg-black bg-opacity-30"></div>

    <!-- NAVBAR superpuesto -->
    <header class="relative z-10 flex items-center justify-between px-6 py-4">

        <!-- Logo + Enlaces alineados -->
        <div class="flex items-center space-x-6">
            <!-- Logo -->
            <a href="{{ route('home') }}" title="Home">
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


    @php
        $path = request()->path();
    @endphp

    @if ($path === 'nosotros')
        <!-- texto flotante -->
        <div
            class="absolute font-Roboto bottom-52 left-10  lg:bottom-80 lg:left-40 text-white max-w-md opacity-0 animate-slide-in-left">
            <h1 class=" text-4xl lg:text-6xl font-bold mb-2 drop-shadow-sm">Sobre Nosotros</h1>
            <p id="rotatingText"
                class="text-sm font-semibold lg:text-lg leading-relaxed drop-shadow-sm transition-opacity duration-500 ">
                En K&G, transformamos el cuidado de tu vehículo en una experiencia confiable y sin complicaciones.</p>
        </div>
    @endif


   @if ($path === 'actividades')
    <div class="absolute inset-0 flex flex-col justify-center items-center z-0">
        <h2 class="uppercase text-[30px] sm:text-[45px] lg:text-[50px] font-bold mb-2 drop-shadow-sm tracking-wide text-white font-Raleway" >Somos</h2>
        <h1 id="rotatingLetters"
            class="uppercase text-[70px] sm:text-[95px] lg:text-[150px] font-bold mb-2 drop-shadow-sm tracking-wide font-Raleway leading-relaxed transition-all duration-500 text-center"
            style="background-image: url('./img/montaña3.jpg'); background-size: cover; background-position: center; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; color: transparent;">
            Adventura
        </h1>
    </div>
@endif


    <a class="absolute bottom-24 left-1/2  lg:bottom-70 lg:left-1/2  " href="#{{ $section }}">
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full border-2 border-white hover:scale-105 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </span>
    </a>


    <aside id="mobileMenu"
        class="fixed inset-0 bg-black bg-opacity-30 text-white transform -translate-x-full transition-transform duration-300 z-50 shadow-lg overflow-hidden">

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
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
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
