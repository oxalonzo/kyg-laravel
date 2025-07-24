<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Politicas - Importadora KYG</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!--faviicon-->
    <link rel="icon" href="{{ asset('img/logokyg.webp') }}" type="image/png">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&family=Roboto:wght@100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>

<body class="bg-gray-100 min-h-screen flex flex-col items-center scroll-smooth">



    <div id="mainContent" class="  flex flex-col min-h-screen w-full">

        <!-- BANNER FITSCREEN -->
        <x-header-guest2 />

        <!-- MAIN -->
        <main class="flex-1 px-0 pb-0 bg-gray-50">




            <!-- section codigo -->
            <section id="sectionpolitic" class=" w-full h-full flex flex-col justify-center items-center px-3 sm:px-20">

                <div class="text-center flex justify-center items-center text-black p-8">
                    <H2 class="font-bold font-Raleway text-3xl tracking-wide uppercase">nuestras politicas</H2>
                </div>

                <div class="w-full h-full flex flex-col lg:flex-row justify-center items-center gap-3 mb-6">

                    <div id="principalbox" class=" opacity-0 -translate-x-10 duration-700 ease-in-out w-full lg:w-[50%] h-auto lg:h-[552px] flex flex-col items-center px-20 py-10 rounded border-gray-50 shadow-xl">
                        <div class=" text-center border-b-2 border-b-[#f2cd01] w-full mb-4">
                            <h3 class="text-2xl font-bold font-Raleway tracking-wide">Politica de Control & Seguridad</h3>
                            <p class=" text-gray-500 font-semibold">Importadora K&G SAS</p>
                        </div>
    
                        <div >
                            <p class=" text-start text-xl text-gray-500 font-semibold ">Importadora K&G cuenta con una política de control y seguridad definida, documentada, respaldada y publicada visiblemente en diferentes puntos de la empresa.  La misma es la manifestación de la organización en contra de actividades ilícitas y en ella la Alta dirección establece el compromiso para el mejoramiento continuo del SGCS. A continuación, se describe la política de seguridad.</p>
                        </div>
                    </div>
    
                    <div class=" w-full lg:w-[50%] flex flex-col items-center px-0 lg:px-20 py-2 lg:py-10">
                        <div id="box1" class=" opacity-0 translate-x-10 duration-700 ease-in-out rounded border-gray-50  mb-3 shadow-xl text-start p-4 text-gray-500 font-semibold">

                            Importadora K&G es una empresa dedicada a la importación y distribución de neumáticos, baterías, aceites, lubricantes, repuestos
                            
                            en general para todo tipo de vehículos, así como también servicios de mantenimiento y reparaciones para todo tipo de vehículos, y la importación y distribución de equipos y maquinarias para el sector automotriz.
                        </div>

                        <div id="box2" class=" opacity-0 translate-x-10 duration-700 ease-in-out rounded border-gray-50  mb-3 shadow-xl text-start p-4 text-gray-500 font-semibold">
                            Estamos comprometidos con mantener la integridad de los procesos, cumplir con estándares de categoría mundial y con todos los requisitos legales aplicables al sector; en generar y ofrecer productos seguros y de clase mundial para los consumidores; mejorando continuamente y desempeñando actividades que validen nuestro compromiso de responsabilidad social, gestión ambiental y con seguridad en la cadena de suministro. 
                        </div>
                        
                        <div id="box3" class=" opacity-0 translate-x-10 duration-700 ease-in-out rounded border-gray-50   shadow-xl text-start p-4 text-gray-500 font-semibold">
                            Promovemos: la mitigación de riesgos inherentes a la operación; un ambiente seguro, de respeto, de desarrollo, de igualdad de oportunidades y de pago justo para nuestros colaboradores; la prevención de acciones o actividades ilícitas, soborno, corrupción, lavado de activo, discriminación y conductas delictivas. No toleramos, ni nos asociamos con partes interesadas que inciten, efectúen o apoyen el irrespeto a los derechos humanos, abuso o acoso sexual, ni labor forzada o de menores de edad.
                        </div>
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
