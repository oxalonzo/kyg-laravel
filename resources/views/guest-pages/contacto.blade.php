@section('titulo')
    Contacto
@endsection

<x-guest2-layout>

    <x-header-guest class="relative w-full h-screen text-white overflow-hidden" :picture="'img/nosotros3.png'" :section="'contacto'"   /> 


      <!-- MAIN -->
        <main class="flex-1 px-0 pb-0 bg-white">
    
             <!--informacion general main-->

    <section id="contacto" class="  w-full h-full flex justify-center items-center px-0 py-20 bg-[#1c1c1c] text-white">


        

       <div id="carousel" class="w-full h-auto lg:h-[660px] flex flex-col lg:flex-row overflow-hidden relative">

    <!-- Slide (se aplica a los 3) -->
    <div class="slide w-full h-auto lg:h-full flex flex-col lg:flex-row transition-all duration-700 ease-in-out">

        <!-- Imagen -->
        <div class="relative w-full lg:w-[55%] h-[300px] lg:h-full">
            <div class="shadowblack w-full absolute inset-0 bg-black z-10 transition-all duration-700 ease-in-out"></div>
            <img class="w-full h-full object-cover img-location opacity-0 -translate-x-20 transition-all ease-in-out duration-700"
                 src="{{ asset('img/centropuntacana.jpg') }}" alt="imagen">
        </div>

        <!-- Info -->
        <div class="w-full lg:w-[45%] h-auto flex flex-col items-center bg-transparent text-white">
            <div class="w-full text-3xl md:text-4xl lg:text-5xl font-Raleway font-semibold uppercase p-8 lg:py-16 lg:px-[39px] flex justify-center sm:justify-center lg:justify-start items-center tracking-wide">
                Contactanos
            </div>

            <!-- Ciudad y Calle -->
            <div class="w-full flex flex-col md:flex-row justify-center items-center px-6 lg:px-10 py-4 lg:py-6 gap-4">
                <div class="w-full md:w-[35%] text-center">
                    <h3 class="titleCity opacity-0 translate-y-20 duration-700 ease-in-out text-xl md:text-2xl font-semibold font-Raleway lg:flex lg:justify-start lg:items-center">Ciudad</h3>
                    <p class="infoCity opacity-0 translate-x-20 duration-700 ease-in-out lg:flex lg:justify-start lg:items-center">Punta Cana</p>
                </div>
                <div class="w-full md:w-[65%] text-center">
                    <h3 class="titleStreet opacity-0 translate-y-20 duration-700 ease-in-out text-xl md:text-2xl font-semibold font-Raleway lg:flex lg:justify-start lg:items-center">Calle</h3>
                    <p class="infoStreet opacity-0 translate-x-20 duration-700 ease-in-out lg:flex lg:justify-start lg:items-center">Boulevard Turistico del Este KM3.5 Bavaro, Punta Cana</p>
                </div>
            </div>

            <!-- Teléfono y Mapa -->
            <div class="w-full flex flex-col md:flex-row justify-center items-center px-6 lg:px-10 py-4 lg:py-6 gap-4">
                <div class="w-full md:w-[35%] text-center">
                    <h3 class="titleNumber opacity-0 translate-y-20 duration-700 ease-in-out text-xl md:text-2xl font-semibold font-Raleway lg:flex lg:justify-start lg:items-center">Teléfono</h3>
                    <p class="infoNumber opacity-0 translate-x-20 duration-700 ease-in-out lg:flex lg:justify-start lg:items-center">809-455-0000</p>
                </div>
                <div class="w-full md:w-[65%] flex justify-center lg:justify-start group">
                    <a href="https://maps.app.goo.gl/SaKZcgwxD9xVygYk7" target="_blank" class="loading w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-full border-2 border-gray-200 group-hover:border-[#f2cd01] transition-all duration-500 ease-in-out flex justify-center items-center">
                        <div class="contentlink w-[60px] h-[60px] md:w-[80px] md:h-[80px] rounded-full flex justify-center items-center">
                            <p class="map-link text-sm md:text-base" >ver mapa</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Social -->
            <div class="w-full flex justify-center lg:justify-start items-center px-8 lg:px-[45px] py-6 lg:py-20 gap-6">
                <a href="mailto:contacto@kyg.com.do?subject=Consulta&body=Hola,%20quiero%20más%20información." target="_blank" title="Correo">
                    <i class="fa-regular fa-envelope text-[24px] md:text-[26px] lg:text-[30px] text-white font-bold"></i>
                </a>
                <a href="https://www.instagram.com/kygrd/" target="_blank" title="Instagram">
                    <i class="fa-brands fa-instagram text-[24px] md:text-[26px] lg:text-[30px] text-white font-bold"></i>
                </a>
                <a href="https://wa.me/8096887706" target="_blank" title="Whatsapp">
                    <i class="fa-brands fa-whatsapp text-[24px] md:text-[26px] lg:text-[30px] text-white font-bold"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Slide 2 y 3 -->
   <!-- Slide (se aplica a los 3) -->
    <div class="slide w-full h-auto lg:h-full flex flex-col lg:flex-row transition-all duration-700 ease-in-out">

        <!-- Imagen -->
        <div class="relative w-full lg:w-[55%] h-[300px] lg:h-full">
            <div class="shadowblack w-full absolute inset-0 bg-black z-10 transition-all duration-700 ease-in-out"></div>
            <img class="w-full h-full object-cover img-location opacity-0 -translate-x-20 transition-all ease-in-out duration-700"
                 src="{{ asset('img/centrojfk.jpg') }}" alt="imagen">
        </div>

        <!-- Info -->
        <div class="w-full lg:w-[45%] h-auto flex flex-col items-center bg-transparent text-white">
            <div class="w-full text-3xl md:text-4xl lg:text-5xl font-Raleway font-semibold uppercase p-8 lg:py-16 lg:px-[39px] flex justify-center sm:justify-center lg:justify-start items-center tracking-wide">
                Contactanos
            </div>

            <!-- Ciudad y Calle -->
            <div class="w-full flex flex-col md:flex-row justify-center items-center px-6 lg:px-10 py-4 lg:py-6 gap-4">
                <div class="w-full md:w-[35%] text-center">
                    <h3 class="titleCity opacity-0 translate-y-20 duration-700 ease-in-out text-xl md:text-2xl font-semibold font-Raleway lg:flex lg:justify-start lg:items-center">Ciudad</h3>
                    <p class="infoCity opacity-0 translate-x-20 duration-700 ease-in-out lg:flex lg:justify-start lg:items-center">Santo Domingo</p>
                </div>
                <div class="w-full md:w-[65%] text-center">
                    <h3 class="titleStreet opacity-0 translate-y-20 duration-700 ease-in-out text-xl md:text-2xl font-semibold font-Raleway lg:flex lg:justify-start lg:items-center">Calle</h3>
                    <p class="infoStreet opacity-0 translate-x-20 duration-700 ease-in-out lg:flex lg:justify-start lg:items-center">Av. John F. Kennedy #59</p>
                </div>
            </div>

            <!-- Teléfono y Mapa -->
            <div class="w-full flex flex-col md:flex-row justify-center items-center px-6 lg:px-10 py-4 lg:py-6 gap-4">
                <div class="w-full md:w-[35%] text-center">
                    <h3 class="titleNumber opacity-0 translate-y-20 duration-700 ease-in-out text-xl md:text-2xl font-semibold font-Raleway lg:flex lg:justify-start lg:items-center">Teléfono</h3>
                    <p class="infoNumber opacity-0 translate-x-20 duration-700 ease-in-out lg:flex lg:justify-start lg:items-center">809-688-7706</p>
                </div>
                <div class="w-full md:w-[65%] flex justify-center lg:justify-start group">
                    <a href="https://maps.app.goo.gl/AtHxD8gfGmMJ7D3H6" target="_blank" class="loading w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-full border-2 border-gray-200 group-hover:border-[#f2cd01] transition-all duration-500 ease-in-out flex justify-center items-center">
                        <div class="contentlink w-[60px] h-[60px] md:w-[80px] md:h-[80px] rounded-full flex justify-center items-center">
                            <p class="map-link text-sm md:text-base">ver mapa</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Social -->
            <div class="w-full flex justify-center lg:justify-start items-center px-8 lg:px-[45px] py-6 lg:py-20  gap-6">
                <a href="mailto:contacto@kyg.com.do?subject=Consulta&body=Hola,%20quiero%20más%20información." target="_blank" title="Correo">
                    <i class="fa-regular fa-envelope text-[24px] md:text-[26px] lg:text-[30px] text-white font-bold"></i>
                </a>
                <a href="https://www.instagram.com/kygrd/" target="_blank" title="Instagram">
                    <i class="fa-brands fa-instagram text-[24px] md:text-[26px] lg:text-[30px] text-white font-bold"></i>
                </a>
                <a href="https://wa.me/8096887706" target="_blank" title="Whatsapp">
                    <i class="fa-brands fa-whatsapp text-[24px] md:text-[26px] lg:text-[30px] text-white font-bold"></i>
                </a>
            </div>
        </div>
    </div>

     <div class="slide w-full h-auto lg:h-full flex flex-col lg:flex-row transition-all duration-700 ease-in-out">

        <!-- Imagen -->
        <div class="relative w-full lg:w-[55%] h-[300px] lg:h-full">
            <div class="shadowblack w-full absolute inset-0 bg-black z-10 transition-all duration-700 ease-in-out"></div>
            <img class="w-full h-full object-cover img-location opacity-0 -translate-x-20 transition-all ease-in-out duration-700"
                 src="{{ asset('img/centroduarte.jpg') }}" alt="imagen">
        </div>

        <!-- Info -->
        <div class="w-full lg:w-[45%] h-auto flex flex-col items-center bg-transparent text-white">
            <div class="w-full text-3xl md:text-4xl lg:text-5xl font-Raleway font-semibold uppercase p-8 lg:py-16 lg:px-[39px] flex justify-center sm:justify-center lg:justify-start items-center tracking-wide">
                Contactanos
            </div>

            <!-- Ciudad y Calle -->
            <div class="w-full flex flex-col md:flex-row justify-center items-center px-6 lg:px-10 py-4 lg:py-6 gap-4">
                <div class="w-full md:w-[35%] text-center">
                    <h3 class="titleCity opacity-0 translate-y-20 duration-700 ease-in-out text-xl md:text-2xl font-semibold font-Raleway lg:flex lg:justify-start lg:items-center">Ciudad</h3>
                    <p class="infoCity opacity-0 translate-x-20 duration-700 ease-in-out lg:flex lg:justify-start lg:items-center">Santo Domingo</p>
                </div>
                <div class="w-full md:w-[65%] text-center">
                    <h3 class="titleStreet opacity-0 translate-y-20 duration-700 ease-in-out text-xl md:text-2xl font-semibold font-Raleway lg:flex lg:justify-start lg:items-center">Calle</h3>
                    <p class="infoStreet opacity-0 translate-x-20 duration-700 ease-in-out lg:flex lg:justify-start lg:items-center">Aut. Duarte KM14(Tiendas Garrido), Santo Domingo D.N.</p>
                </div>
            </div>

            <!-- Teléfono y Mapa -->
            <div class="w-full flex flex-col md:flex-row justify-center items-center px-6 lg:px-10 py-4 lg:py-6 gap-4">
                <div class="w-full md:w-[35%] text-center">
                    <h3 class="titleNumber opacity-0 translate-y-20 duration-700 ease-in-out text-xl md:text-2xl font-semibold font-Raleway lg:flex lg:justify-start lg:items-center">Teléfono</h3>
                    <p class="infoNumber opacity-0 translate-x-20 duration-700 ease-in-out lg:flex lg:justify-start lg:items-center">809-231-2846</p>
                </div>
                <div class="w-full md:w-[65%] flex justify-center lg:justify-start group">
                    <a  href="https://maps.app.goo.gl/3Nc4XVhyv5fZRdmZ6" target="_blank" class="loading w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-full border-2 border-gray-200 group-hover:border-[#f2cd01] transition-all duration-500 ease-in-out flex justify-center items-center">
                        <div class="contentlink w-[60px] h-[60px] md:w-[80px] md:h-[80px] rounded-full flex justify-center items-center">
                            <p class="map-link text-sm md:text-base">ver mapa</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Social -->
            <div class="w-full flex justify-center lg:justify-start items-center px-8 lg:px-[45px] py-6 lg:py-20  gap-6">
                <a href="mailto:contacto@kyg.com.do?subject=Consulta&body=Hola,%20quiero%20más%20información." target="_blank" title="Correo">
                    <i class="fa-regular fa-envelope text-[24px] md:text-[26px] lg:text-[30px] text-white font-bold"></i>
                </a>
                <a href="https://www.instagram.com/kygrd/" target="_blank" title="Instagram">
                    <i class="fa-brands fa-instagram text-[24px] md:text-[26px] lg:text-[30px] text-white font-bold"></i>
                </a>
                <a href="https://wa.me/8096887706" target="_blank" title="Whatsapp">
                    <i class="fa-brands fa-whatsapp text-[24px] md:text-[26px] lg:text-[30px] text-white font-bold"></i>
                </a>
            </div>
        </div>
    </div>



</div>

 


        
    </section>


    <!--section form-->
    <section class=" relative w-full h-screen flex justify-center items-center bg-white gap-6">

         <div class=" absolute sm:right-0 lg:right-[400px] top-2 grid grid-cols-5">

             <x-input-error :messages="$errors->get('nombre_completo')" class="mt-1 mb-1 text-[10px]" />

             <x-input-error :messages="$errors->get('Whatsapp')" class="mt-1 mb-1 text-[10px]" />

             <x-input-error :messages="$errors->get('email')" class="mt-1 mb-1 text-[10px]" />

             <x-input-error :messages="$errors->get('empresa')" class="mt-1 mb-1 text-[10px]" />

             <x-input-error :messages="$errors->get('marca_vehiculo')" class="mt-1 mb-1 text-[10px]" />

             <x-input-error :messages="$errors->get('modelo_vehiculo')" class="mt-1 mb-1 text-[10px]" />

             <x-input-error :messages="$errors->get('year_vehiculo')" class="mt-1 mb-1 text-[10px]" />

             <x-input-error :messages="$errors->get('nota')" class="mt-1 mb-1 text-[10px]" />

             <x-input-error :messages="$errors->get('sucursal')" class="mt-1 mb-1 text-[10px]" />

             <x-input-error :messages="$errors->get('fecha_servicio')" class="mt-1 mb-1 text-[10px]" />


         </div>

       

         <div class=" card1 absolute translate-x-[-276px] transition-all duration-700 ease-in-out rounded-3xl  w-[520px] h-[720px] bg-blue-300 z-10 shadow-md shadow-black">
            <div class=" absolute inset-0 bg-black/40 rounded-3xl flex justify-center items-center">
                <label for="nombre_completo" id="btn-contacto" class=" text-center cursor-pointer text-white font-Raleway font-bold text-xl w-40 bg-[#f2cd01] hover:bg-[#f6d939] rounded-md px-2 py-1 shadow-md shadow-black" >Contactanos</label>
            </div>
            <img class="w-full h-full object-cover rounded-3xl" src="{{ asset('img/fondoTarjetaCont.jpg') }}" alt="img contacto">
            <h2 class="absolute top-[200px] left-[0px] text-white text-center font-Raleway font-bold text-3xl w-full">"¿Tienes dudas? ¡Aquí y te ayudamos!"</h2>
         </div>

         <div id="form" class=" card2 absolute translate-x-[276px] transition-all duration-700 ease-in-out  rounded-3xl  w-[520px] h-[720px]  px-6 py-6 border-2 border-[#c1c1c1] shadow-sm shadow-black">


            @if ($errors->any())
             <script>
               window.location.hash = '#form';
            </script>
            @endif
            
            @if(session('success'))
                  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-2">
                    {{ session('success') }}
                  </div>
            @endif


                    <h2 class="mb-10 text-4xl font-Raleway font-bold">Formulario de Contacto</h2>
            
             <form action="{{ route('contacto.store') }}" method="POST"  novalidate class=" w-full h-full rounded-3xl">

                @csrf

                <div class=" grid grid-cols-2 gap-2">


                     <!--campo form-->

                  <div class="mb-3">

                    

                    <x-input-label for="nombre_completo" :value="__('Nombre Completo')"
                    class="mb-1 block uppercase text-gray-500 font-bold" />
    
                    <x-text-input id="nombre_completo" class=" p-2 w-full mb-2 " type="text" name="nombre_completo"
                    :value="old('nombre_completo')"  />
    
                   

                  </div>

                   <!--campo form-->

                   <div class="mb-3">
                    
                    

                    <x-input-label for="Whatsapp" :value="__('Whatsapp')"
                    class="mb-1 block uppercase text-gray-500 font-bold" />
    
                    <x-text-input id="Whatsapp" class=" p-2 w-full mb-2 " type="number" name="Whatsapp"
                    :value="old('Whatsapp')"  />
    
                    

                  </div>

                   <!--campo form-->

                   <div class="mb-3">
                    
                    

                    <x-input-label for="email" :value="__('Email')"
                    class="mb-1 block uppercase text-gray-500 font-bold" />
    
                    <x-text-input id="email" class=" p-2 w-full mb-2 " type="text" name="email"
                    :value="old('email')"  />
    
                   

                  </div>

                   <!--campo form-->

                   <div class="mb-3">
                    
                    

                    <x-input-label for="empresa" :value="__('Empresa')"
                    class="mb-1 block uppercase text-gray-500 font-bold" />
    
                    <x-text-input id="empresa" class=" p-2 w-full mb-2 " type="text" name="empresa"
                    :value="old('empresa')"  />
    
                   

                  </div>

                   <!--campo form-->

                   <div class="mb-3">
                    
                    

                    <x-input-label for="marca_vehiculo" :value="__('Marca del Vehículo')"
                    class="mb-1 block uppercase text-gray-500 font-bold" />
    
                    <x-text-input id="marca_vehiculo" class=" p-2 w-full mb-2 " type="text" name="marca_vehiculo"
                    :value="old('marca_vehiculo')"  />
    
                    

                  </div>

                   <!--campo form-->

                   <div class="mb-3">
                    
                    

                    <x-input-label for="modelo_vehiculo" :value="__('Modelo del Vehículo')"
                    class="mb-1 block uppercase text-gray-500 font-bold" />
    
                    <x-text-input id="modelo_vehiculo" class=" p-2 w-full mb-2 " type="text" name="modelo_vehiculo"
                    :value="old('modelo_vehiculo')"  />
    
                   

                  </div>

                   <!--campo form-->

                   <div class="mb-3">
                    
                    

                    <x-input-label for="year_vehiculo" :value="__('Año del vehículo')"
                    class="mb-1 block uppercase text-gray-500 font-bold" />
    
                    <x-text-input id="year_vehiculo" class=" p-2 w-full mb-2 " type="number" name="year_vehiculo"
                    :value="old('year_vehiculo')"  />
    
                    

                  </div>

                   <!--campo form-->

                   <div class="mb-3">
                    
                    

                    <x-input-label for="nota" :value="__('Nota')"
                    class="mb-1 block uppercase text-gray-500 font-bold" />
    
                    <x-text-input id="nota" class=" p-2 w-full mb-2 " type="text" name="nota"
                    :value="old('nota')"  />
    
                    

                  </div>

                   <!--campo form-->

                   <div class="mb-5">
                    
                    

                    <x-input-label for="sucursal" :value="__('Sucursal para el servicio')"
                    class="mb-1 block uppercase text-gray-500 font-bold" />
    
                    <x-text-input id="sucursal" class=" p-2 w-full mb-2 " type="text" name="sucursal"
                    :value="old('sucursal')"  />
    
                    

                  </div>

                   <!--campo form-->

                   <div class="mb-5">
                    
                    

                    <x-input-label for="fecha_servicio" :value="__('Fecha que desea el servicio')"
                    class="mb-1 block uppercase text-gray-500 font-bold" />
    
                    <x-text-input id="fecha_servicio" class=" p-2 w-full mb-2 " type="date" name="fecha_servicio"
                    :value="old('fecha_servicio')"  />
    
                   
                  </div>

                        

                   
        
                        

                </div>


                

                  <button id="btn-contacto" class=" w-full text-white font-Raleway font-bold text-xl bg-[#f2cd01] hover:bg-[#f6d939] rounded-md px-2 py-2 shadow-sm shadow-black" >Enviar Formulario</button>

            </form>
         </div>

         <div class=" absolute bottom-0 text-center mb-6 text-lg font-bold tracking-wide">
            Trabajamos de Lunes a Viernes de 8:00AM a 6:00PM y los Sábados de 8:00AM a 3:00PM
         </div>

        

    </section>

            
     

        </main>
    
    
</x-guest2-layout>
