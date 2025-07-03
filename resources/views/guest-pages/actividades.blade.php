@section('titulo')
    Actividades
@endsection

<x-guest2-layout>

    <x-header-guest class="relative w-full h-screen  text-white overflow-hidden" :picture="'img/montaña2.jpg'" :section="'actividades'" />


    <main class="flex-1 px-0 pb-0 pt-0 bg-gray-50 flex-col">


        @foreach ($actividades as $actividad)
            <section id="actividades"
                class=" w-full flex flex-col lg:flex-row justify-center items-center bg-[#111111] px-4 sm:px-24 py-20 border-2 border-black shadow-lg ">


                <!-- Carousel container -->
                <div 
                    class=" contentImage relative w-full lg:w-[40%] bg-[#2c2b29] h-[450px] rounded-xl -translate-x-10 opacity-0 transition-all duration-700 ease-in-out">

                    <div 
                        class=" shadow absolute inset-0 bg-black rounded-xl opacity-1 w-full transition-all duration-700 ease-in-out z-10">
                    </div>

                    <!-- Swiper -->
                    <div class="swiper mySwiper h-full rounded-xl">
                        <div class="swiper-wrapper">
                            @foreach ($actividad->medios as $medio)
                                <div class="swiper-slide w-full h-full">
                                    @php
                                        $extension = pathinfo($medio->archivo, PATHINFO_EXTENSION);
                                    @endphp

                                    @if (in_array($extension, ['jpg', 'jpeg', 'png', 'webp', 'gif']))
                                        <img class="object-cover w-full h-full rounded-xl"
                                            src="{{ asset('storage/' . $medio->archivo) }}" alt="">
                                    @elseif(in_array($extension, ['mp4', 'webm', 'ogg']))
                                        <video class="object-cover w-full h-full rounded-xl" controls>
                                            <source src="{{ asset('storage/' . $medio->archivo) }}"
                                                type="video/{{ $extension }}">
                                            Tu navegador no soporta el tag de video.
                                        </video>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <!--content text-->
                <div class=" w-full lg:w-[60%] flex flex-col text-[#e7e7e5] p-0 lg:px-14  py-5 ">
                    <h3
                        class="titleActiviti text-4xl sm:text-5xl text-[#e7e7e5] mb-8 text-start tracking-wide translate-y-10 opacity-0 transition-all duration-700 ease-in-out">
                        {{ $actividad->titulo }}</h3>
                    <p
                        class=" paragraphActiviti text-2xl text-gray-300 mb-24 text-start tracking-wide translate-y-10 opacity-0 transition-all duration-700 ease-in-out">
                        {{ $actividad->descripcion }}
                    </p>
                    <div class="w-full flex justify-end items-center">
                        <a href="{{ $actividad->enlace }}" target="_blank"
                            class=" linkActiviti group flex text-center justify-end items-center gap-2 p-2 text-xl tracking-wide translate-x-10 opacity-0 transition-all duration-700 ease-in-out max-w-40 mr-14">
                            Ver mas
                            <span class="transform transition-transform duration-300 group-hover:translate-x-1">
                                <svg class=" w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 4L16 12L8 20" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>


            </section>
        @endforeach


    </main>





</x-guest2-layout>
