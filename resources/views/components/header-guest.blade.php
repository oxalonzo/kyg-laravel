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

     @php
        $path = request()->path();
    @endphp

    @if ($path === 'contacto')
        <!-- Capa negra encima de la imagen solo par ala pagina de servicio -->
    <div class="absolute inset-0 bg-black bg-opacity-100"></div>
    @endif

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
            class="uppercase text-[70px] sm:text-[95px] lg:text-[150px] font-bold mb-2 drop-shadow-sm tracking-wide font-Raleway leading-relaxed transition-all duration-500 text-center flex gap-1 overflow-hidden"
            style="background-image: url('./img/montaña3.jpg'); background-size: cover; background-position: center; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; color: transparent;">
            Adventura
        </h1>
    </div>
@endif

@if ($path === 'servicio')
    <div class="absolute inset-0 flex justify-around items-center z-0 overflow-hidden">

         {{-- <h2 class=" absolute top-[240px] left-[520px] uppercase text-[30px] sm:text-[45px] lg:text-[50px] font-bold  drop-shadow-sm tracking-wide text-white font-Raleway" >¿Conoces nuestros servicios?</h2> --}}

         <div class="bg-transparent w-[55%] h-full flex justify-center items-center text-center px-0 lg:px-36">
            <h2 class=" uppercase text-[30px] sm:text-[30px] lg:text-[50px] font-bold  drop-shadow-sm tracking-wide text-white font-Raleway" >Conoces nuestros servicios</h2>
         </div>

         <div id="tips" class=" px-5 w-[45%] h-full  bg-white/10 backdrop-blur-md border border-white/20  shadow-md shadow-[#f2cd01]/10 flex flex-col justify-center items-center">
            
            <h2 class="tipTitle opacity-0 translate-y-10 duration-700 ease-in-out sm:text-3xl lg:text-4xl  sm:w-full text-center font-extrabold tracking-wide text-white  mb-5 lg:mb-10 uppercase">tips</h2>

            <div class="w-full tip1 bg-white/20 opacity-0 translate-x-10 duration-700 ease-in-out px-2 sm:px-8 py-3 sm:py-3 rounded-lg text-center mb-2">
                <p class=" text-[11px] sm:text-[14px] lg:text-xl font-semibold tracking-wide">Revisa la presión cada 15 días</p>
            </div>

            <div class="w-full tip2 bg-white/20 opacity-0 translate-x-10 duration-700 ease-in-out px-2 sm:px-8 py-3 sm:py-3 rounded-lg text-center mb-2">
                <p class="  text-[11px] sm:text-[14px] lg:text-xl font-semibold tracking-wide">Consulta la presión recomendada por el fabricante</p>
            </div>

            <div class="w-full tip3 bg-white/20 opacity-0 translate-x-10 duration-700 ease-in-out px-2 sm:px-8 py-3 sm:py-3 rounded-lg text-center mb-2">
                <p class="  text-[11px] sm:text-[14px] lg:text-xl font-semibold tracking-wide">Haz una inspección visual semanal</p>
            </div>

            <div class="w-full tip4 bg-white/20 opacity-0 translate-x-10 duration-700 ease-in-out px-2 sm:px-8 py-3 sm:py-3 rounded-lg text-center mb-2">
                <p class="  text-[11px] sm:text-[14px] lg:text-xl font-semibold tracking-wide">Rota tus neumáticos cada 10.000 km</p>
            </div>

            <div class="w-full tip5 bg-white/20 opacity-0 translate-x-10 duration-700 ease-in-out px-2 sm:px-8 py-3 sm:py-3 rounded-lg text-center mb-2">
                <p class="  text-[11px] sm:text-[14px] lg:text-xl font-semibold tracking-wide">Equilibra las ruedas cada 10.000 km o si notas vibraciones</p>
            </div>

            <div class="w-full tip6 bg-white/20 opacity-0 translate-x-10 duration-700 ease-in-out px-2 sm:px-8 py-3 sm:py-3 rounded-lg text-center mb-2">
                <p class="  text-[11px] sm:text-[14px] lg:text-xl font-semibold tracking-wide">Haz alineación al menor signo de desvío</p>
            </div>

            <div class="w-full tip7 bg-white/20 opacity-0 translate-x-10 duration-700 ease-in-out px-2 sm:px-8 py-3 sm:py-3 rounded-lg text-center mb-2">
                <p class="  text-[11px] sm:text-[14px] lg:text-xl font-semibold tracking-wide">Reemplaza los neumáticos cada 40.000 - 60.000 km</p>
            </div>

            <div class="w-full tip8 bg-white/20 opacity-0 translate-x-10 duration-700 ease-in-out px-2 sm:px-8 py-3 sm:py-3 rounded-lg text-center mb-2">
               <p class="  text-[11px] sm:text-[14px] lg:text-xl font-semibold tracking-wide">Verifica la profundidad del dibujo (mínimo legal: 1.6 mm)</p>
            </div>

            <div class="w-full tip9 bg-white/20 opacity-0 translate-x-10 duration-700 ease-in-out px-2 sm:px-8 py-3 sm:py-3 rounded-lg text-center mb-2">
                 <p class="  text-[11px] sm:text-[14px] lg:text-xl font-semibold tracking-wide">Evita conducir con sobrecarga</p>
            </div>

            <div class="w-full tip10 bg-white/20 opacity-0 translate-x-10 duration-700 ease-in-out px-2 sm:px-8 py-3 sm:py-3 rounded-lg text-center mb-2">
                 <p class="  text-[11px] sm:text-[14px] lg:text-xl font-semibold tracking-wide">Cambia los neumáticos cada 5 a 6 años aunque no estén desgastados</p>
            </div>

            
            
            
            
            
            
           
            
           
            

        </div>
        
        
    </div> 
@endif

  @if ($path === 'contacto')
    <div class="absolute inset-0 flex flex-col items-center z-0 overflow-hidden ">

        <!--card-->
        <div id="card1" class=" opacity-0 translate-y-10 transition-all duration-500 ease-in-out backface-hidden absolute top-[352px] sm:top-[370px] lg:top-[388px] left-[40px] sm:left-[80px] lg:left-[176px] w-[160px] sm:w-[200px] lg:w-[250px] h-[70px] sm:h-[100px] lg:h-[150px] p-2 bg-white/10 backdrop-blur-md border border-white/10 rounded-2xl shadow-md shadow-white/20 animate-rotation" >
            <div class="w-full h-full bg-black rounded-2xl flex flex-col justify-center items-center p-2">
               
                         <div class=" w-full h-full flex justify-between items-center px-3">

                            <div class=" w-[20px] sm:w-[25px] lg:w-[30px] h-[20px] sm:h-[25px] lg:h-[30px] rounded-full ">
                                <img class="w-full h-full object-cover rounded-full" src="{{ asset('img/perfil1.jpg') }}" alt="">
                            </div>

                            <a href="#form" class=" w-[20px] sm:w-[25px] lg:w-[30px] h-[20px] sm:h-[25px] lg:h-[30px] rounded-full border-2 border-gray-300 flex justify-center items-center  p-2">
                                <span class="transform transition-transform duration-300 ">
                                <svg class=" w-1 sm:w-2 lg:w-3 h-1 sm:h-2 lg:h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 4L16 12L8 20" />
                                </svg>
                            </span>
                            </a>

                         </div>

                         <div class=" w-full h-full text-start font-Raleway font-semibold flex justify-start items-center px-3 text-[6px] sm:text-[11px] lg:text-[15px]">
                            <p>¿Qué marcas de aceite tienen disponible?</p>
                         </div>
               
            </div>
        </div>

        <!--card-->

        <div id="card2" class=" opacity-0 translate-y-10 transition-all duration-500 ease-in-out absolute bottom-[250px] sm:bottom-[200px] lg:bottom-[66px] left-[50px] sm:left-[50px] lg:left-[256px] w-[280px] sm:w-[380px] lg:w-[450px] h-[130px] sm:h-[180px] lg:h-[250px] p-2  bg-white/10 backdrop-blur-md border border-white/10 rounded-2xl shadow-md shadow-white/20 animate-rotation z-10">
        
             <div class="w-full h-full bg-black rounded-2xl flex flex-col justify-center items-center p-2">
               
                         <div class=" w-full h-full flex justify-between items-center px-3">

                            <div class=" w-[40px] sm:w-[50px] lg:w-[60px] h-[40px] sm:h-[50px] lg:h-[60px] rounded-full ">
                                <img class="w-full h-full object-cover rounded-full" src="{{ asset('img/perfil3.jpg') }}" alt="">
                            </div>

                            <a href="#form" class=" w-[45px] sm:w-[50px] lg:w-[55px] h-[45px] sm:h-[50px] lg:h-[55px] rounded-full border-2 border-gray-300 flex justify-center items-center  p-2">
                                <span class="transform transition-transform duration-300 ">
                                <svg class=" w-3 sm:w-4 lg:w-5 h-3 sm:h-4 lg:h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 4L16 12L8 20" />
                                </svg>
                            </span>
                            </a>

                         </div>

                         <div class=" w-full h-full text-start font-Raleway font-semibold flex justify-start items-center px-3 text-[11px] sm:text-[16px]">
                            <p>¿Ofrecen algún tipo de garantía en las gomas, baterías o servicios que brindan?</p>
                         </div>
               
            </div>

        </div>
        

        <!--card-->
        <div id="card3" class=" opacity-0 translate-y-10 transition-all duration-500 ease-in-out absolute top-[390px] sm:top-[370px] lg:top-[350px] right-[30px] sm:right-[30px] lg:right-[250px] w-[200px] sm:w-[300px] lg:w-[400px] h-[100px] sm:h-[150px] lg:h-[200px] p-2  bg-white/10 backdrop-blur-md border border-white/10 rounded-2xl shadow-md shadow-white/20 animate-rotation z-10">
        
             <div class="w-full h-full bg-black rounded-2xl flex flex-col justify-center items-center p-2">
               
                         <div class=" w-full h-full flex justify-between items-center px-3">

                            <div class=" w-[30px] sm:w-[40px] lg:w-[50px] h-[30px] sm:h-[40px] lg:h-[50px] rounded-full ">
                                <img class="w-full h-full object-cover rounded-full" src="{{ asset('img/perfil2.jpg') }}" alt="">
                            </div>

                            <a href="#form" class=" w-[30px] sm:w-[40px] lg:w-[50px] h-[30px] sm:h-[40px] lg:h-[50px] rounded-full border-2 border-gray-300 flex justify-center items-center  p-2">
                                <span class="transform transition-transform duration-300 ">
                                <svg class=" w-3 sm:w-4 lg:w-5 h-3 sm:h-4 lg:h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 4L16 12L8 20" />
                                </svg>
                            </span>
                            </a>

                         </div>

                         <div class=" w-full h-full text-start font-Raleway font-semibold flex justify-start items-center px-3 text-[8px] sm:text-sm lg:text-md">
                            <p>¿Qué tipo de aceite recomiendan según el kilometraje o el uso que le doy a mi vehículo?</p>
                         </div>
               
            </div>

        </div>



         <h2 id="contentTextcontac" class=" mt-56 z-10 uppercase  flex justify-center items-center font-bold drop-shadow-sm text-white font-Raleway mb-4" >
        
            <span class="letter1 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">¿</span>
            <span class="letter2 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">C</span>
            <span class="letter3 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">o</span>
            <span class="letter4 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">n</span>
            <span class="letter5 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">o</span>
            <span class="letter6 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">c</span>
            <span class="letter7 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">e</span>
            <span class="letter8 mr-2 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">s</span>

            <span class="letter9 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">n</span>
            <span class="letter10 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">u</span>
            <span class="letter11 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">e</span>
            <span class="letter12 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">s</span>
            <span class="letter13 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">t</span>
            <span class="letter14 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">r</span>
            <span class="letter15 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">o</span>
            <span class="letter16 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl mr-2">s</span>

            <span class="letter17 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">s</span>
            <span class="letter18 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">e</span>
            <span class="letter19 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">r</span>
            <span class="letter20 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">v</span>
            <span class="letter21 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">i</span>
            <span class="letter22 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">c</span>
            <span class="letter23 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">i</span>
            <span class="letter24 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">o</span>
            <span class="letter25 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">s</span>
            <span class="letter26 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">?</span>
            
        
        </h2>

        <!-- Segunda frase oculta por defecto -->
<h2 id="secondText" class=" z-10 uppercase   flex justify-center items-center font-bold drop-shadow-sm text-white font-Raleway">
    <span class="letterB1 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">C</span>
    <span class="letterB2 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">o</span>
    <span class="letterB3 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">n</span>
    <span class="letterB4 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">t</span>
    <span class="letterB5 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">á</span>
    <span class="letterB6 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">c</span>
    <span class="letterB7 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">t</span>
    <span class="letterB8 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">a</span>
    <span class="letterB9 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">n</span>
    <span class="letterB10 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">o</span>
    <span class="letterB11 opacity-0 translate-y-10 transition-all duration-500 ease-in-out text-2xl sm:text-4xl lg:text-6xl">s</span>
</h2>

        <div class=" absolute bg-black w-[1800px] h-[1800px] rounded-full translate-y-[544px] animate-sombra-amarilla"></div>

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
