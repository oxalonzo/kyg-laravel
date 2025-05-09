@section('titulo')
    Banner
@endsection


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Banner') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center h-full">


        {{-- {{ print_r($banners) }} --}}

        <div class="md:w-3/4 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0 ">

            <div class="flex justify-end items-center mb-4">
                <x-link :href="route('banner.create')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Crear un banner
                </x-link>
            </div>


            @if (session('success'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
                    class=" rounded-lg bg-green-100 border border-green-400 text-green-700 px-4 py-3 shadow-md"
                    role="alert">
                    <p class="font-semibold">{{ session('success') }}</p>
                </div>
            @endif

            <div class="container flex justify-center items-center flex-col lg:flex-col p-5 h-full  ">

                @if ($banners->isEmpty())
                    <p class="mt-4">No hay banners disponibles aun. Por favor cree un banner</p>
                @else
                    @foreach ($banners as $banner)
                        <!-- Contenedor del banner con imagen y acciones -->
                        <div
                            class="w-full bg-white p-4 rounded-lg shadow-sm shadow-gray-600 flex flex-col lg:flex-row mb-4 ">



                            <!-- Imagen -->
                            <div class="w-full lg:w-3/4 mb-4 lg:mb-0">
                                <img src="{{ asset('storage/banners/' . $banner->imagen_banner) }}" alt="Imagen Banner"
                                    class="w-[300px] h-[200px] lg:w-full lg:h-[300px] rounded-lg shadow-md object-cover mx-auto">
                            </div>

                            <!-- Acciones -->
                            <div class="w-full lg:w-1/4 md:flex-col sm:flex-col flex flex-col justify-center items-center space-x-4">
                                <!-- Botón de editar -->
                                <a href="{{ route('banner.edit', $banner->id) }}"
                                    class="inline-flex items-center text-sm mb-4 lg:w-auto md:w-full sm:w-full w-full bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition duration-300 ">

                                    <!-- Ícono de lápiz -->
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.232 5.232l3.536 3.536M9 13l6.536-6.536a2 2 0 012.828 0l.172.172a2 2 0 010 2.828L12 17H9v-3z">
                                        </path>
                                    </svg>
                                    Editar

                                </a>

                                <!-- Botón de eliminar -->
                                <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" class="md:w-full sm:w-full lg:w-auto w-full !ml-0 sm:!ml-0"
                                    onsubmit="return confirm('¿Estás seguro de que quieres eliminar este banner?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center text-sm md:w-full sm:w-full lg:w-auto w-full bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300">

                                        <!-- Ícono de equis -->
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                        Eliminar


                                    </button>
                                </form>
                            </div>


                        </div>
                    @endforeach

                    <div class="mt-4">
                        {{ $banners->links() }}
                    </div>

                @endif

            </div>



        </div>



    </div>
</x-app-layout>
