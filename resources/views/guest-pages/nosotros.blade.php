@section('titulo')
    Nosotros
@endsection

<x-guest2-layout>

    <!-- coomponente header-->
    <x-header-guest class="relative w-full h-screen text-white overflow-hidden" :picture="'img/nosotros3.png'" :section="'apareceScroll'" />


    <!-- section de nosotros año y descripcion -->
    <section id="apareceScroll"
        class="w-full max-w-6xl mx-auto p-4 min-h-screen opacity-0 translate-y-10 transition-all duration-700 ease-in-out flex flex-col items-center justify-center gap-6">

        <!-- Fila con los dos primeros divs -->
        <div class="flex flex-col md:flex-row w-full justify-center items-center gap-4">

            <!-- Div 1 -->
            <div
                class="relative w-full md:w-[40%] border rounded-3xl p-6 bg-[linear-gradient(50deg,_#f2cd01_0%,_white_10%)] shadow-lg flex flex-col justify-center min-h-[300px]">
                <h3 id="dynamicHeading" class="text-7xl font-bold text-black mb-2"></h3>
                <p class="text-gray-700 font-Raleway text-base">años en el negocio de neumáticos y centros de servicio.
                </p>
                <div class="absolute top-4 right-4 flex items-center space-x-3">
                    <div class="text-right">
                        <p class="font-bold text-sm text-black leading-tight">Yoshiaki Kasahara</p>
                        <p class="text-xs text-gray-600">CEO &amp; FUNDADOR</p>
                    </div>
                    <div class="w-[60px] h-[60px] rounded-full border-2 border-gray-300 overflow-hidden shadow">
                        <img src="{{ asset('img/ceokyg.jpg') }}" alt="Círculo" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Div 2 -->
            <div
                class="w-full md:w-[60%] border rounded-3xl bg-white shadow-md flex flex-col md:flex-row min-h-[300px] overflow-hidden">
                <div class="w-full md:w-[70%] p-6 flex flex-col justify-center">
                    <h3 class="text-2xl font-bold text-black mb-2 font-Raleway">
                        Estamos <span class="text-[#f2cd01]">comprometidos</span> con la satisfacción de nuestros
                        clientes.
                    </h3>
                    <p class="text-gray-700 text-base font-Raleway">
                        Importadora K&G ha estado en el mercado desde el año 1986 ofreciendo productos de calidad en el
                        área
                        de neumáticos para todo tipo de vehículos. Contamos con un equipo de profesionales capacitados
                        disponibles los 365 días del año para brindar la mejor asesoría a nuestros clientes en cuanto al
                        producto más apropiado para cada una de sus operaciones.
                    </p>
                </div>
                <div
                    class="w-full md:w-[30%] flex lg:rounded-l-full overflow-hidden lg:border-l-[10px] lg:border-[#f2cd01]">
                    <img src="{{ asset('img/kygpuntacana.jpg') }}" alt="Quiénes somos" class="w-full object-cover">
                </div>
            </div>
        </div>

        <!-- Nueva fila con las 3 tarjetas de ubicación -->
        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">

            <!-- Card 1 -->
            <div
                class="flex flex-col items-center justify-center p-6 bg-white border border-gray-200 rounded-xl shadow-md text-center hover:shadow-lg transition">
                <div
                    class="w-12 h-12 flex items-center justify-center rounded-full border-[#f2cd01] border-2 bg-transparent text-[#f2cd01] mb-4">
                    <!-- Icono -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 22s8-4.5 8-10a8 8 0 10-16 0c0 5.5 8 10 8 10z" />
                    </svg>
                </div>
                <p class="text-sm text-gray-700 font-Raleway">Sucursal Punta Cana, Av. Barceló #45</p>
            </div>

            <!-- Card 2 -->
            <div
                class="flex flex-col items-center justify-center p-6 bg-white border border-gray-200 rounded-xl shadow-md text-center hover:shadow-lg transition">
                <div
                    class="w-12 h-12 flex items-center justify-center rounded-full border-[#f2cd01] border-2 bg-transparent text-[#f2cd01] mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 22s8-4.5 8-10a8 8 0 10-16 0c0 5.5 8 10 8 10z" />
                    </svg>
                </div>
                <p class="text-sm text-gray-700 font-Raleway">Sucursal Santo Domingo, Calle Duarte #101</p>
            </div>

            <!-- Card 3 -->
            <div
                class="flex flex-col items-center justify-center p-6 bg-white border border-gray-200 rounded-xl shadow-md text-center hover:shadow-lg transition">
                <div
                    class="w-12 h-12 flex items-center justify-center rounded-full border-[#f2cd01] border-2 bg-transparent text-[#f2cd01] mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 22s8-4.5 8-10a8 8 0 10-16 0c0 5.5 8 10 8 10z" />
                    </svg>
                </div>
                <p class="text-sm text-gray-700 font-Raleway">Sucursal Santiago, Av. Monumental #12</p>
            </div>

        </div>
        <br>
    </section>


    <!-- section valores -->

    <section id="apareceValores"
        class="w-full min-h-screen relative px-6 py-10 flex flex-col items-center justify-center transition-all duration-1000 ease-out opacity-0 translate-y-10">
        <!-- titulo -->
        <div class="absolute top-10 left-12 flex items-center space-x-4">
            <div class="w-32 h-[2px] bg-[#f2cd01] "></div>
            <h2 class="text-2xl font-bold uppercase text-gray-800 tracking-wider">Cultura y Compromiso</h2>
        </div>

        <!-- contenedor de la tres tarjetas-->
        <div class="flex flex-col md:flex-row items-center justify-center w-full max-w-6xl gap-6 mt-20">

            <!-- card 1 -->
            <div class="group relative w-full md:w-1/3 h-80 lg:h-[450px] md:mt-0 transition-all duration-300">
                <!-- fondo imagen -->
                <div class="absolute inset-0 bg-cover rounded-xl transition-opacity duration-500 group-hover:opacity-0"
                    style="background-image: url('/img/valor1.jpg')"></div>

                <!-- título encima -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <h4
                        class="text-xl font-semibold text-white z-10 transition-opacity duration-500 group-hover:opacity-0 font-Raleway uppercase">
                        Misión</h4>
                </div>

                <div class="absolute inset-0 rounded-xl bg-black/50"></div>

                <!-- capa de descripción -->
                <div
                    class="absolute inset-0 bg-white border border-[#f2cd01] shadow-xl text-black rounded-xl p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center text-center">
                    <p class="text-lg font-Raleway"> Exceder las expectativas del mercado y agregar valor sostenible, combinando alianzas con marcas innovadoras y una cultura de excelencia.</p>
                </div>
            </div>


            <!-- card 2 -->
            <div class="group relative w-full md:w-1/3 h-80 lg:h-[450px] md:mt-24 transition-all duration-300">
                <!-- fondo imagen -->
                <div class="absolute inset-0 bg-cover rounded-xl transition-opacity duration-500 group-hover:opacity-0"
                    style="background-image: url('/img/valor2.jpg')"></div>

                <!-- título encima -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <h4
                        class="text-xl font-semibold text-white z-10 transition-opacity duration-500 group-hover:opacity-0 font-Raleway uppercase">
                        Visión </h4>
                </div>

                <div class="absolute inset-0 rounded-xl bg-black/50"></div>

                <!-- capa de descripción -->
                <div
                    class="absolute inset-0 bg-white border border-[#f2cd01] shadow-xl text-black rounded-xl p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center text-center">
                    <p class="text-lg font-Raleway">Ser la marca distintiva en soluciones y productos para equipos y medios de movilidad.</p>
                </div>
            </div>

            <!-- card 3 -->
            <div class="group relative w-full md:w-1/3 h-80 lg:h-[450px] md:mt-48 transition-all duration-300">
                <!-- fondo imagen -->
                <div class="absolute inset-0 bg-cover rounded-xl transition-opacity duration-500 group-hover:opacity-0"
                    style="background-image: url('/img/valor3.jpg')"></div>

                <!-- título encima -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <h4
                        class="text-xl font-semibold text-white z-10 transition-opacity duration-500 group-hover:opacity-0 font-Raleway uppercase">
                        Nuestros valores</h4>
                </div>

                <div class="absolute inset-0 rounded-xl bg-black/50"></div>

                <!-- capa de descripción -->
                <div
                    class="absolute inset-0 bg-white border border-[#f2cd01] shadow-xl text-black rounded-xl p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center text-center">
                    <p class="text-lg font-Raleway"> <span class="font-bold">C</span>ompromiso Honorable <br>
                        <span class="font-bold">A</span>mbición de excelencia <br>
                        <span class="font-bold">R</span>espeto y empatía <br>
                        <span class="font-bold">S</span>ervicio en equipo <br> </p>
                </div>
            </div>


        </div>
    </section>


</x-guest2-layout>
