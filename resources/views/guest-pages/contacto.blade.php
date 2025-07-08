@section('titulo')
    Contacto
@endsection

<x-guest2-layout>

    <x-header-guest class="relative w-full h-screen text-white overflow-hidden" :picture="'img/nosotros3.png'" :section="'contacto'"   /> 


      <!-- MAIN -->
        <main class="flex-1 px-0 pb-0 bg-gray-50">
    
             <!--informacion general main-->

    <section id="contacto" class="  w-full h-full flex justify-center items-center px-0 py-20 bg-[#1c1c1c] text-white">


        

        <div class="w-[55%] h-[660px]">
            <img class="w-full h-full object-cover img-location opacity-0 -translate-x-20 ease-in-out duration-700 " src="{{ asset('img/centropuntacana.jpg') }}" alt="imagen">
        </div>

        <div class="w-[45%] h-[660px]  flex flex-col items-center">

            <div class=" w-full text-5xl font-Raleway font-semibold uppercase p-16 flex justify-start items-center tracking-wide">
                Contactanos
            </div>

            <div class=" w-full h-full flex justify-center items-center px-10 py-6">

                <div class=" w-[35%] flex flex-col justify-center items-center">
                    <h3 class="titleCity opacity-0 translate-y-20 duration-700 ease-in-out w-full text-2xl font-semibold font-Raleway">ciudad</h3>
                    <p class="infoCity opacity-0 translate-x-20 duration-700 ease-in-out w-full">Santo domingo</p>
                </div>

                <div class="flex w-[65%] flex-col justify-center items-center">
                    <h3 class=" titleStreet opacity-0 translate-y-20 duration-700 ease-in-out w-full text-2xl font-semibold font-Raleway">calle</h3>
                    <p class="infoStreet opacity-0 translate-x-20 duration-700 ease-in-out w-full">Av. Jonh F. Kennedy #59</p>
                </div>

            </div>

            <div class=" w-full h-full flex justify-center items-center px-10 py-6">

                <div class=" w-[50%] flex flex-col justify-center items-center">
                    <h3 class="titleNumber opacity-0 translate-y-20 duration-700 ease-in-out w-full text-2xl font-semibold font-Raleway">Telefono</h3>
                    <p class="infoNumber opacity-0 translate-x-20 duration-700 ease-in-out w-full">809-688-7706</p>
                </div>

                <div class="flex w-[50%] flex-col justify-center items-center  rounded-full">
                    <div class="contentbox w-full ">
                        <div class="loading  w-[80px] h-[80px] rounded-full border-2 border-gray-200 flex justify-center items-center">
                            <div class="contentlink w-[80px] h-[80px] rounded-full  flex justify-center items-center">
                                <a href="#">ver mapa</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class=" w-full flex justify-start items-center px-16 py-6 gap-4">
                
                <a href="mailto:contacto@kyg.com.do?subject=Consulta&body=Hola,%20quiero%20más%20información." target="_blank">
                     <i class="fa-regular fa-envelope text-[20px] sm:text-[19px] lg:text-[30px] text-white font-bold"></i>
                </a>

                <a href="https://www.instagram.com/kygrd/" target="_blank">
                     <i class="fa-brands fa-instagram text-[20px] sm:text-[19px] lg:text-[30px] text-white font-bold"></i>
                </a>

                <a href="https://wa.me/8096887706" target="_blank">
                     <i class="fa-brands fa-whatsapp text-[20px] sm:text-[19px] lg:text-[30px] text-white font-bold"></i>
                </a>


            </div>
        </div>


        
    </section>
            

        </main>
    
    
</x-guest2-layout>
