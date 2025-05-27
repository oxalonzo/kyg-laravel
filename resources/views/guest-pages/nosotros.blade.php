@section('titulo')
    Nosotros
@endsection

<x-guest2-layout>

    <x-header-guest class="relative w-full h-screen text-white overflow-hidden" :picture="'img/nosotros3.png'" :section="'apareceScroll'" />

    <!-- section de nosotros año y descripcion -->
    <section id="apareceScroll"
        class="flex flex-col md:flex-row w-full justify-center items-center max-w-6xl mx-auto gap-4 p-4 min-h-screen opacity-0 translate-y-10 transition-all duration-700 ease-in-out">
        <!-- Div 1: Número, texto, y círculo -->
        <div
            class="relative w-full md:w-[40%] border rounded-3xl p-6 bg-[linear-gradient(50deg,_#f2cd01_0%,_white_15%)] shadow-lg flex flex-col justify-center min-h-[300px]">

            <h3 id="dynamicHeading" class="text-7xl font-bold text-black mb-2"></h3>
            <p class="text-gray-700 font-Raleway text-base">años en el negocio de neumáticos y centros de servicio.</p>

            <!-- Contenedor del nombre + círculo, posición absoluta -->
            <div class="absolute top-4 right-4 flex items-center space-x-3">
                <!-- Texto -->
                <div class="text-right">
                    <p class="font-bold text-sm text-black leading-tight">Yoshiaki Kasahara</p>
                    <p class="text-xs text-gray-600">CEO &amp; FUNDADOR</p>
                </div>
                <!-- Círculo -->
                <div class="w-[60px] h-[60px] rounded-full border-2 border-gray-300 overflow-hidden shadow">
                    <img src="{{ asset('img/ceokyg.jpg') }}" alt="Círculo" class="w-full h-full object-cover">
                </div>
            </div>

        </div>

        <!-- Div 2: Título, descripción, y foto al lado derecho -->
        <div
            class="w-full md:w-[60%] border rounded-3xl bg-white shadow-md flex flex-col md:flex-row min-h-[300px] overflow-hidden">
            <!-- Texto (70%) -->
            <div class="w-full md:w-[70%] p-6 flex flex-col justify-center">
                <h3 class="text-2xl font-bold text-black mb-2 font-Raleway">Estamos <span
                        class="text-[#f2cd01]">comprometidos</span> con la satisfacción de nuestros clientes.</h3>
                <p class="text-gray-700 text-base font-Raleway">
                    Importadora K&G ha estado en el mercado desde el año 1986 ofreciendo productos de calidad en el área
                    de neumáticos para todo tipo de vehículos. Contamos con un equipo de profesionales capacitados
                    disponibles los 365 días del año para brindar la mejor asesoría a nuestros clientes en cuanto al
                    producto más apropiado para cada una de sus operaciones.
                </p>
            </div>
            <!-- Imagen (30%) -->
            <div
                class="w-full md:w-[30%] flex lg:rounded-l-full overflow-hidden lg:border-l-[10px] lg:border-[#f2cd01]">
                <img src="{{ asset('img/kygpuntacana.jpg') }}" alt="Quiénes somos" class="w-full object-cover">
            </div>
        </div>
    </section>

</x-guest2-layout>
