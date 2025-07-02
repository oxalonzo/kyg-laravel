@section('titulo')
    Servicios
@endsection

<x-guest2-layout>

    <x-header-guest class="relative w-full h-screen text-white overflow-hidden" :picture="'img/nosotros1.png'" :section="'services'" />


    <!-- MAIN -->
    <main class="flex-1 px-0 pb-0 bg-gray-50">

        <!--section our services-->
        <section id="servicesSection"  class="bg-white flex flex-col justify-center items-center">

            <!--title and litle info-->
            <div class="flex flex-col justify-center items-center text-center p-20">
                <h2 class=" font-Raleway text-6xl font-bold mb-7">Nuestros Servicios</h2>
                <p class="text-md font-semibold font-Raleway max-w-[800px] text-gray-400">¡Nuestro equipo de asesores es tu aliado ideal en el mundo automotriz! Con enfoque en el cliente y amplio conocimiento, te brindan la mejor experiencia y asesoramiento para llevar tu vehículo al siguiente nivel.</p>
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

    </main>
   

</x-guest2-layout>
