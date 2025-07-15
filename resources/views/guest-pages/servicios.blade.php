@section('titulo')
    Servicios
@endsection

<x-guest2-layout>

    <x-header-guest class="relative w-full h-screen text-white overflow-hidden object-cover" :picture="'img/bannerservicio10.avif'" :section="'services'" />


    <!-- MAIN -->
    <main class="flex-1 px-0 pb-0 bg-gray-50">

        <!--section our services-->
        <section id="servicesSection"  class="bg-white flex flex-col justify-center items-center">

            <!--title and litle info-->
            <div class="flex flex-col justify-center items-center text-center px-6 py-20 sm:p-20">
                <h2 class=" font-Raleway text-3xl sm:text-6xl font-extrabold mb-7">Nuestros Servicios</h2>
                <p class=" text-md sm:text-lg lg:text-md font-semibold font-Raleway max-w-[800px] text-gray-400">¡Nuestro equipo de asesores es tu aliado ideal en el mundo automotriz! Con enfoque en el cliente y amplio conocimiento, te brindan la mejor experiencia y asesoramiento para llevar tu vehículo al siguiente nivel.</p>
            </div>

            <!--cardscontent-->
            <div id="services" class="grid grid-cols-4 gap-10 mb-12 ">


                <!--card 1-->
                <div id="service1" class="w-[350px] h-[350px] rounded-3xl shadow-xl opacity-0 translate-x-1/2 z-10 transition-all duration-700 ease-out">
                    <img class="w-full h-full object-cover rounded-3xl" src="{{ asset('img/ourServices/service1.jpg') }}" alt="">
                </div>

                <div id="infoService1" class="w-[350px] h-[350px] bg-gray-300 px-2  rounded-3xl shadow-xl flex flex-col justify-evenly items-start opacity-0 -translate-x-52 transition-all duration-700 ease-out">
                    <h3 class="ml-4 text-black text-2xl max-w-56 font-Raleway font-bold">Montura de neumáticos</h3>
                    <p class="ml-4 text-black text-start font-semibold font-Raleway">Instalación profesional de neumáticos en vehículo de forma eficiente utilizando equipo especializado para montar y desmontar de forma segura.</p>
                </div>

                <!--card 2-->

                <div id="service2" class="w-[350px] h-[350px] rounded-3xl shadow-xl opacity-0 translate-x-1/2 z-10 transition-all duration-700 ease-out">
                    <img class="w-full h-full object-cover rounded-3xl" src="{{ asset('img/ourServices/service2.jpg') }}" alt="">
                </div>

                <div id="infoService2" class="w-[350px] h-[350px] bg-[#f2cd01] px-2 rounded-3xl shadow-xl flex flex-col justify-evenly items-start opacity-0 -translate-x-52 transition-all duration-700 ease-out">
                    <h3 class="ml-4 text-white text-2xl max-w-56 font-Raleway font-bold">Alineacion y balanceo</h3>
                    <p class="ml-4 text-white text-start font-semibold font-Raleway">Ajuste de  los ángulos de las ruedas del vehículo para que sean paralelas entre sí y estén perpendiculares al suelo. Distribución equilibrada del peso del vehículo para eliminar  vibraciones y garantizar un manejo suave y seguro.</p>
                </div>


                <!--card 3-->
                <div id="service3" class="w-[350px] h-[350px] rounded-3xl shadow-xl opacity-0 translate-x-1/2 z-10 transition-all duration-700 ease-out">
                    <img class="w-full h-full object-cover rounded-3xl" src="{{ asset('img/ourServices/service3.jpg') }}" alt="">
                </div>

                <div id="infoService3" class="w-[350px] h-[350px] bg-[#f2cd01] px-2 rounded-3xl shadow-xl flex flex-col justify-evenly items-start opacity-0 -translate-x-52 transition-all duration-700 ease-out">
                    <h3 class="ml-4 text-white text-2xl max-w-56 font-Raleway font-bold">Cambio de fluido automotriz</h3>
                    <p class="ml-4 text-white text-start font-semibold font-Raleway">Extracción y reemplazo del aceite de motor, garantizando una lubricación óptima. Extracción y reemplazo del líquido refrigerante del motor.</p>
                </div>

                <!--card 4-->
                <div id="service4" class="w-[350px] h-[350px] rounded-3xl shadow-xl opacity-0 translate-x-1/2 z-10 transition-all duration-700 ease-out">
                    <img class="w-full h-full object-cover rounded-3xl" src="{{ asset('img/ourServices/service4.jpg') }}" alt="">
                </div>

                <div id="infoService4" class="w-[350px] h-[350px] bg-gray-300 px-2  rounded-3xl shadow-xl flex flex-col justify-evenly items-start opacity-0 -translate-x-52 transition-all duration-700 ease-out">
                    <h3 class="ml-4 text-black text-2xl max-w-56 font-Raleway font-bold">Cambio y Rectificación de discos y bandas de frenos</h3>
                    <p class="ml-4 text-black text-start font-semibold font-Raleway">Cambio de los discos y las bandas de frenos desgastados o dañados del vehículo, y su reemplazo por componentes nuevos o rectificados.</p>
                </div>


                     <!--card 5-->
                 <div id="service5" class=" hidden w-[350px] h-[350px] rounded-3xl shadow-xl opacity-0 translate-x-1/2 z-10 transition-all duration-700 ease-out">
                    <img class="w-full h-full object-cover rounded-3xl" src="{{ asset('img/ourServices/service5.jpg') }}" alt="">
                </div>

                <div id="infoService5" class=" hidden w-[350px] h-[350px] bg-gray-300 px-2  rounded-3xl shadow-xl flex flex-col justify-evenly items-start opacity-0 -translate-x-52 transition-all duration-700 ease-out">
                    <h3 class="ml-4 text-black text-2xl max-w-56 font-Raleway font-bold">Reparación de aros y llenado con nitrogeno</h3>
                    <p class="ml-4 text-black text-start font-semibold font-Raleway">Corrección de daños menores en las llantas del vehículo, como abolladuras, rasguños o agrietamientos. El llenado con nitrógeno implica reemplazar el aire convencional en los neumáticos por nitrógeno, lo que ayuda a mantener una presión más estable.</p>
                </div>


                <!--card 6-->
                <div id="service6" class=" hidden w-[350px] h-[350px] rounded-3xl shadow-xl opacity-0 translate-x-1/2 z-10 transition-all duration-700 ease-out">
                    <img class="w-full h-full object-cover rounded-3xl" src="{{ asset('img/ourServices/service6.jpg') }}" alt="">
                </div>

                <div id="infoService6" class=" hidden w-[350px] h-[350px] bg-[#f2cd01] px-2 rounded-3xl shadow-xl flex flex-col justify-evenly items-start opacity-0 -translate-x-52 transition-all duration-700 ease-out">
                    <h3 class="ml-4 text-white text-2xl max-w-56 font-Raleway font-bold">Taller de Mecánica ligera</h3>
                    <p class="ml-4 text-white text-start font-semibold font-Raleway">Reparaciones y mantenimiento básicos del vehículo, enfocado en resolver problemas y realizar ajustes simples para mantener su funcionamiento seguro y eficiente.</p>
                </div>

                <!--card 7-->
                <div id="service7" class=" hidden w-[350px] h-[350px] rounded-3xl shadow-xl opacity-0 translate-x-1/2 z-10 transition-all duration-700 ease-out">
                    <img class="w-full h-full object-cover rounded-3xl" src="{{ asset('img/ourServices/service8.jpg') }}" alt="">
                </div>

                <div id="infoService7" class=" hidden w-[350px] h-[350px] bg-[#f2cd01] px-2 rounded-3xl shadow-xl flex flex-col justify-evenly items-start opacity-0 -translate-x-52 transition-all duration-700 ease-out">
                    <h3 class="ml-4 text-white text-2xl max-w-56 font-Raleway font-bold">Cambio de baterías y sensores TPMS</h3>
                    <p class="ml-4 text-white text-start font-semibold font-Raleway">Inspección, limpieza y recarga del sistema de aire acondicionado del vehículo para garantizar un funcionamiento óptimo del sistema y un interior del vehículo fresco y confortable.</p>
                </div>

                <!--card 8-->
                <div id="service8" class=" hidden w-[350px] h-[350px] rounded-3xl shadow-xl opacity-0 translate-x-1/2 z-10 transition-all duration-700 ease-out">
                    <img class="w-full h-full object-cover rounded-3xl" src="{{ asset('img/ourServices/service7.jpg') }}" alt="">
                </div>

                <div id="infoService8" class=" hidden w-[350px] h-[350px] bg-gray-300 px-2  rounded-3xl shadow-xl flex flex-col justify-evenly items-start opacity-0 -translate-x-52 transition-all duration-700 ease-out">
                    <h3 class="ml-4 text-black text-2xl max-w-56 font-Raleway font-bold">Mantenimiento de Aire acondicionado</h3>
                    <p class="ml-4 text-black text-start font-semibold font-Raleway">Extracción e instalación de batería  para todo tipo de vehículos. Extracción e instalación de los sensores de monitoreo de presión de los neumáticos del vehículo.</p>
                </div>


                

               

            </div>

            <!-- Botones debajo de las cards -->
<div class="flex gap-4 mb-10">
    <button id="showMoreBtn"
     class="px-6 py-3 bg-[#f2cd01] hover:bg-[#f2cd01] text-white font-semibold rounded-lg transition duration-300">
      Ver más servicios
    </button>

    <button id="showLessBtn"
     class="hidden px-6 py-3 bg-[#f2cd01] hover:bg-[#f2cd01] text-white font-semibold rounded-lg transition duration-300">
      Ver menos servicios
    </button>
</div>


        </section>



        <!--our produts services section-->
        <section id="productsServicesSection"  class="bg-white flex flex-col items-center h-[1000px]">

     <div class="flex flex-col justify-center items-center text-center p-20">
                <h2 class=" font-Raleway text-3xl sm:text-5xl lg:text-6xl font-extrabold mb-7 tracking-wide">Nuestras Líneas de productos</h2>
                <p class=" text-md sm:text-lg lg:text-md font-semibold font-Raleway mb-7 max-w-[800px] text-gray-400">Aqui te dejamos un desglose de todas las marcas que distribuimos y nuestras marcas aliadas.</p>
                 {{-- <p class=" text-md sm:text-lg lg:text-md font-semibold font-Raleway max-w-[800px] text-gray-400">Da clic en una categoría para explorar sus detalles.</p> --}}
    </div>

     <div  class=" w-full flex flex-col justify-center items-center px-8 sm:px-8 lg:px-56 mb-8">
                <!-- links -->
  <div class="mb-16 flex justify-center items-center gap-6 sm:gap-3 lg:gap-20">

    <button title="cliquea para ver los detalles" id="tire" class="category-btn w-[90px] sm:w-[160px] h-[90px] sm:h-[160px] flex items-center justify-center rounded-full border-2 border-[#f2cd01] opacity-0 translate-y-10 duration-200 ease-in text-black text-md sm:text-2xl font-Raleway font-bold tracking-wide uppercase" title="Neumáticos" data-target="div1">
        <img class="  w-[60px] sm:w-[80px] lg:w-[110px] h-[60px] sm:h-[80px] lg:h-[110px]"
                                src="{{ asset('img/iconproducts/tire.png') }}" alt="tire">
    </button>
    
    <button title="cliquea para ver los detalles" id="accessory" class="category-btn w-[90px] sm:w-[160px] h-[90px] sm:h-[160px] flex items-center justify-center rounded-full border border-transparent opacity-0 translate-y-10 duration-200 ease-in text-black text-md sm:text-2xl font-Raleway font-bold tracking-wide uppercase" title="Accesorios" data-target="div2">
        <img class="w-[60px] sm:w-[80px] lg:w-[110px] h-[60px] sm:h-[80px] lg:h-[110px]"
                                src="{{ asset('img/iconproducts/batery.png') }}" alt="accessory">
    </button>

    <button title="cliquea para ver los detalles" id="carup" class="category-btn w-[90px] sm:w-[160px] h-[90px] sm:h-[160px] flex items-center justify-center rounded-full border border-transparent opacity-0 translate-y-10 duration-200 ease-in text-black text-md sm:text-2xl font-Raleway font-bold tracking-wide uppercase" title="Equipos" data-target="div3">
         <img class="w-[60px] sm:w-[80px] lg:w-[110px] h-[60px] sm:h-[80px] lg:h-[110px]"
                                src="{{ asset('img/iconproducts/carup.png') }}" alt="carup">
    </button>

    <button title="cliquea para ver los detalles" id="oil" class="category-btn w-[90px] sm:w-[160px] h-[90px] sm:h-[160px] flex items-center justify-center rounded-full border border-transparent opacity-0 translate-y-10 duration-200 ease-in text-black text-md sm:text-2xl font-Raleway font-bold tracking-wide uppercase" title="Aceite" data-target="div4">
          <img class="w-[60px] sm:w-[80px] lg:w-[110px] h-[60px] sm:h-[80px] lg:h-[110px]"
                                src="{{ asset('img/iconproducts/oil.png') }}" alt="oil">
    </button>

  </div>

  <!-- Divs rela -->

  <!--tire-->
  <div id="div1" class=" serviceProduct  relative w-full h-[400px] p-6 bg-white rounded-3xl shadow-md flex flex-col justify-center items-center">

    <img class=" absolute inset-0 w-full h-full object-cover rounded-3xl" src="{{ asset('/img/ourProductsServices/ourproductsservices1.jpg') }}" alt="tire">

    <p  class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2 mt-2">Giti</p>
    <p  class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">Ling long</p>
    <p  class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">Forerunner</p>
    <p  class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">Mirage</p>
    <p  class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">GT Radial</p>
    <p  class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">JK Tyre</p>
    <p  class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">Galaxy</p>
    <p  class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">MRF</p>
    <p  class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">Windforce</p>

  </div>

  <!--others-->
  <div id="div2" class=" serviceProduct  relative hidden pointer-events-none w-full h-[400px] p-6 bg-white rounded-3xl shadow-md flex flex-col justify-center items-center">

     <img class=" absolute inset-0 w-full h-full object-cover rounded-3xl" src="{{ asset('/img/ourProductsServices/ourproductsservices2.jpg') }}" alt="other">

    <p class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">Aditivos Bizol</p>
    <p class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">Baterías Gonher</p>
    <p class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">Ambientadores Little Tree</p>
    <p class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">Maletero y Porta bicicletas Thule</p>
    <p class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">Luces LED Dualled</p>

  </div>

  <!--teams-->
  <div id="div3" class=" serviceProduct  relative hidden pointer-events-none w-full h-[400px] p-6 bg-white rounded-3xl shadow-md flex flex-col justify-center items-center">

     <img class=" absolute inset-0 w-full h-full object-cover rounded-3xl" src="{{ asset('/img/ourProductsServices/ourproductsservices3.jpg') }}" alt="teams">

    <p class="z-10 text-white font-Raleway font-bold  text-[13px] sm:text-xl lg:text-2xl tracking-wide mb-2">Cambio de aceite de la transmisión automática (ATF)</p>
    <p class="z-10 text-white font-Raleway font-bold  sm:text-xl lg:text-2xl tracking-wide mb-2">Inflado de neumáticos con Nitrógeno</p>
    <p class="z-10 text-white font-Raleway font-bold  sm:text-xl lg:text-2xl tracking-wide mb-2">Alineadoras 3D</p>
    <p class="z-10 text-white font-Raleway font-bold  sm:text-xl lg:text-2xl tracking-wide mb-2">Balanceadora de neumaticos</p>
    <p class="z-10 text-white font-Raleway font-bold  sm:text-xl lg:text-2xl tracking-wide mb-2">Elevadores</p>
    <p class="z-10 text-white font-Raleway font-bold  sm:text-xl lg:text-2xl tracking-wide mb-2">Intercambiador de liquido de frenos</p>
    <p class="z-10 text-white font-Raleway font-bold  sm:text-xl lg:text-2xl tracking-wide mb-2">Intercambiador para coolant</p>
    <p class="z-10 text-white font-Raleway font-bold  sm:text-xl lg:text-2xl tracking-wide mb-2">Escáner de neumáticos</p>

  </div>

  <!--oils-->
  <div id="div4" class=" serviceProduct  relative hidden pointer-events-none w-full h-[400px] p-6 bg-white rounded-3xl shadow-md flex flex-col justify-center items-center">

     <img class=" absolute inset-0 w-full h-full object-cover rounded-3xl" src="{{ asset('/img/ourProductsServices/ourproductsservices4.jpg') }}" alt="oils">

    <p class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">Lubricantes MOL </p>
    <p class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">Aceites Bizol</p>
    <p class="z-10 text-white font-Raleway font-bold sm:text-xl lg:text-2xl tracking-wide mb-2">Lubricantes BEX</p>

  </div>
     </div>

 
        </section>


        <!--general information section -->

        <section class="flex flex-col items-center sm:px-4 lg:px-32 lg:py-20 bg-white">

            <div class="flex flex-col justify-center items-center text-center sm:px-0 sm:py-12 lg:p-20">
                <h2 class=" font-Raleway text-3xl sm:text-4xl lg:text-6xl font-extrabold mb-7 tracking-wide ">Información sobre nuestros servicios</h2>
            </div>

            @foreach ($servicios as $servicio)
                
           

           <div class=" contentInfoService w-full h-[500px] flex flex-col justify-center items-start mb-16 px-2 sm:px-0 lg:p-5">

                <div class=" contentImginfo opacity-0 translate-y-10 transition-all duration-700 ease-in-out relative w-full h-[450px] rounded-3xl flex justify-end items-center mb-">

                    <img class="w-full h-full rounded-3xl object-cover" src="{{ asset('storage/servicios/' . $servicio->imagen) }}" alt="img info service">

                   <div class=" absolute inset-0 w-full bg-black/20 rounded-3xl mr-10 flex justify-end items-center py-14 px-6">

                        <div class=" contentDetinfo opacity-0 translate-x-10 transition-all duration-700 ease-in-out w-[50%] sm:w-[50%] lg:w-[40%] h-full bg-white/10 backdrop-blur-md border border-white/20 rounded-xl shadow-md shadow-[#f2cd01]/10 flex flex-col justify-evenly items-start px-2">

                            <p class=" textInfo opacity-0 translate-y-10 transition-all duration-700 ease-in-out tracking-wide text-gray-100 text-[12px] sm:text-sm lg:text-lg font-Raleway font-semibold">{{ $servicio->descripcion }}</p>
                            
                            <ul class=" listText opacity-0 translate-y-10 transition-all duration-700 ease-in-out ml-5 list-disc">
                                <!--decode the json string-->
                                @foreach (json_decode($servicio->list) as $list)
                                    <li class="text-[11px] sm:text-sm lg:text-[17px] text-gray-100 font-semibold  tracking-wide ">{{ $list }}</li>
                                @endforeach
                                
                            </ul>

                        </div>

                   </div>

                </div>

                <h2 class=" contentTitleinfo opacity-0 translate-y-10 transition-all duration-700 ease-in-out text-2xl sm:text-2xl lg:text-3xl font-Raleway font-extrabold tracking-wide " >{{ $servicio->titulo }}</h2>

          </div>

           @endforeach

           

          

        </section>


    </main>
   

</x-guest2-layout>
