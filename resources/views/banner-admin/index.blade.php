
@section('titulo')
    Banner
@endsection


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Banner') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">


        {{-- {{ print_r($banners) }} --}}

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">

            <div class="flex justify-end items-center gap-2">
                <x-link :href="route('banner.create')" class=" border border-yellow-300 p-3 text-xs text-gray-600 dark:text-gray-600 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300 dark:focus:ring-offset-2">
                    Crear un banner
                </x-link>
            </div>

            <div class="container flex justify-center items-center flex-col lg:flex-col p-5">

                @foreach($banners as $banner)
                <!-- Contenedor del banner con imagen y acciones -->
                <div class="w-full bg-white p-4 rounded-lg shadow-md flex flex-col lg:flex-row mb-4">
                    
                    
                    
                    <!-- Imagen -->
                    <div class="w-full lg:w-1/2 mb-4 lg:mb-0">
                        <img src="{{ asset('storage/banners/' . $banner->imagen_banner) }}" alt="Imagen Banner" class="w-full h-auto rounded-lg shadow-md">
                    </div>
            
                    <!-- Acciones -->
                    <div class="w-full lg:w-1/2 flex flex-col justify-center items-center space-x-4">
                        <!-- Botón de editar -->
                        <a href="{{ route('banner.edit', $banner->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">
                            Editar
                        </a>
                        
                        <!-- Botón de eliminar -->
                        <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este banner?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300">
                                Eliminar
                            </button>
                        </form>
                    </div>

                    
                </div>

                @endforeach

            </div>
            
    
            
        </div>
      


    </div>
</x-app-layout>

