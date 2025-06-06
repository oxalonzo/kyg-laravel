@section('titulo')
    Actividades
@endsection

<x-guest2-layout>

     <x-header-guest class="relative w-full h-screen  text-white overflow-hidden" :picture="'img/nosotros6.jpg'" :section="'actividades'" /> 

 <!--informacion general main-->
     <section id="actividades">
        <h1>pagina Actividades</h1>
    </section>



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
        class="w-full min-h-screen relative px-6 py-10 flex flex-col items-center justify-center transition-all duration-1000 ease-out opacity-0 translate-y-10" >
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
                    style="background-image: url('/img/fondovalores1.jpg')"></div>

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
                    style="background-image: url('/img/fondovalores1.jpg')"></div>

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
                    style="background-image: url('/img/fondovalores1.jpg')"></div>

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


      <!-- section  -->
    <section  class="w-full h-screen relative bg-black px-6 py-10 flex flex-col lg:flex-row items-center justify-center transition-all duration-1000 ease-out opacity-1 translate-y-10" >
       


 <div class="relative w-full lg:w-[20%] h-auto lg:h-screen flex flex-row lg:flex-col items-center justify-center border-b lg:border-b-0 lg:border-r border-white py-6">
    <div class=" flex items-center justify-center w-1/2 lg:w-full lg:h-[20%]">
         <img src="{{ asset('/img/logoblanco.png') }}" alt="Logo" class=" w-14 h-14">
    </div>

    <div class="flex items-center justify-center w-1/2 lg:w-full lg:h-[80%] relative ">
        <!-- Marca de agua (texto de fondo) -->
    <h1 style="writing-mode: horizontal-tb;"  data-lg-style="writing-mode: vertical-rl; transform: rotate(180deg);" class="absolute font-Raleway font-extrabold text-gray-300 opacity-20 select-none leading-6 text-[60px] md:text-[100px] lg:text-[180px]">
        武士道
    </h1>

    <!-- Texto principal -->
    <h2 style="writing-mode: horizontal-tb;"  data-lg-style="writing-mode: vertical-rl; transform: rotate(180deg);" class="relative font-Raleway font-bold text-white z-10 leading-6 text-[40px] md:text-[60px] lg:text-[80px]">
        BUSHIDO
    </h2>
    </div>
</div>


 <div class="relative w-full lg:w-[80%] h-auto lg:h-screen">

   <div class="flex flex-col h-auto lg:h-screen w-full">
    
    <!-- Parte superior: 20% del alto -->
    <div class="h-[20%] flex flex-col justify-center items-center py-3 px-6 lg:py-0">
        <h1 class="text-2xl lg:text-4xl font-bold text-white mb-2 font-Raleway tracking-wider">Una Filosofia Inquebrantable</h1>
        <p class=" text-md lg:text-lg text-gray-200 font-Playfair tracking-wider">En KYG tenemos siempre presente el codigo del samurai, el codigo</p>
    </div>

    <!-- Parte inferior: 80% del alto con grid -->
   <div id="aparecebushido" class="h-auto lg:h-[80%] grid grid-cols-1 md:grid-cols-2 gap-4 p-6 opacity-0 transition-opacity duration-1000 translate-y-10 ease-out">

    <!-- Elemento 1 -->
    <div  class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl shadow-md  shadow-[#f2cd01]/10 p-6 flex justify-center items-center ">
        
         <!-- Marca de agua (texto de fondo) -->
    <h1  class="absolute  text-xl uppercase md:text-5xl font-Playfair font-extrabold text-gray-300 opacity-20 select-none tracking-widest">
        義 Gi
    </h1>

    <!-- Texto principal -->
    <h2  class="relative text-sm md:text-md  uppercase font-Playfair font-bold text-white z-10 tracking-widest">
        INTEGRIDAD
    </h2>

    </div>

    <!-- Elemento 2 -->
    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl shadow-md shadow-[#f2cd01]/10 p-6 bg-gray-400  flex justify-center items-center">
      
             <!-- Marca de agua (texto de fondo) -->
    <h1  class="absolute  text-xl uppercase font-Playfair md:text-5xl font-extrabold text-gray-300 opacity-20 select-none tracking-widest">
        勇 Yu
    </h1>

    <!-- Texto principal -->
    <h2  class="relative text-sm md:text-md uppercase font-Playfair font-bold text-white z-10 tracking-widest">
        CORAJE
    </h2>

    </div>

    <!-- Elemento 3 (ocupa las 2 columnas) -->
    <div class="col-span-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl shadow-md shadow-[#f2cd01]/10 p-6 bg-gray-400  flex justify-center items-center">
        
             <!-- Marca de agua (texto de fondo) -->
    <h1  class="absolute  text-xl uppercase font-Playfair md:text-5xl font-extrabold text-gray-300 opacity-20 select-none tracking-widest">
         仁 Jin
    </h1>

    <!-- Texto principal -->
    <h2  class="relative text-sm md:text-md uppercase font-Playfair font-bold text-white z-10 tracking-widest">
        Benevolencia
    </h2>

    </div>

    <!-- Elemento 4 -->
    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl shadow-md shadow-[#f2cd01]/10 p-6 bg-gray-400  flex justify-center items-center">
        
             <!-- Marca de agua (texto de fondo) -->
    <h1  class="absolute  text-xl uppercase font-Playfair md:text-5xl font-extrabold text-gray-300 opacity-20 select-none tracking-widest">
        礼 Rei
    </h1>

    <!-- Texto principal -->
    <h2  class="relative text-sm md:text-md uppercase font-Playfair font-bold text-white z-10 tracking-widest">
        Respeto
    </h2>

    </div>

    <!-- Elemento 6 (ocupa altura de elemento 4 + 5) -->
    <div class="row-span-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl shadow-md shadow-[#f2cd01]/10 p-6 bg-gray-400  flex justify-center items-center">
        
             <!-- Marca de agua (texto de fondo) -->
    <h1  class="absolute  text-xl uppercase font-Playfair md:text-5xl font-extrabold text-gray-300 opacity-20 select-none tracking-widest">
        誠 Makoto
    </h1>

    <!-- Texto principal -->
    <h2  class="relative text-sm md:text-md uppercase font-Playfair font-bold text-white z-10 tracking-widest">
        Honestidad
    </h2>

    </div>

    <!-- Elemento 5 (debajo de Elemento 4) -->
    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl shadow-md shadow-[#f2cd01]/10 p-6 bg-gray-400  flex justify-center items-center">
        
             <!-- Marca de agua (texto de fondo) -->
    <h1  class="absolute  text-xl uppercase font-Playfair md:text-5xl font-extrabold text-gray-300 opacity-20 select-none tracking-widest">
        名誉 Meiyo
    </h1>

    <!-- Texto principal -->
    <h2  class="relative text-sm md:text-md uppercase font-Playfair font-bold text-white z-10 tracking-widest">
        Honor
    </h2>

    </div>

    <!-- Elemento 7 (ocupa ambas columnas abajo de 4/5/6) -->
    <div class="col-span-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl shadow-md shadow-[#f2cd01]/10 p-6 bg-gray-400  flex justify-center items-center">
        
             <!-- Marca de agua (texto de fondo) -->
    <h1  class="absolute  text-xl uppercase font-Playfair md:text-5xl font-extrabold text-gray-300 opacity-20 select-none tracking-widest">
        忠義 Chuugi
    </h1>

    <!-- Texto principal -->
    <h2  class="relative text-sm md:text-md uppercase font-Playfair font-bold text-white z-10 tracking-widest">
        Lealtad
    </h2>

    </div>

</div>

</div>

   
</div>

    </section>

    
</x-guest2-layout>
