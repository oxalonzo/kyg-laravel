@section('titulo')
    Información
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('información general') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center h-full">
      
        <div class=" w-full lg:w-3/4 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0 h-full ">

            <div class="flex justify-end items-center mb-4">
                <x-link :href="route('informacion.create')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Crear nueva información
                </x-link>
            </div>


            @if (session('success'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
                    class=" rounded-lg bg-green-100 border border-green-400 text-green-700 px-4 py-3 shadow-md"
                    role="alert">
                    <p class="font-semibold">{{ session('success') }}</p>
                </div>
            @endif


                @if ($informaciones->isEmpty())
                    <p class="mt-4 text-center text-gray-600">No hay informaciones aún. Por favor cree una información.</p>
                @else

                <div class="container flex justify-center items-center flex-col sm:flex-col md:flex-col lg:grid lg:grid-cols-2 p-5 h-full gap-6">
                    @foreach ($informaciones as $informacion)
                        <div class="w-full bg-white p-6 rounded-lg shadow-sm shadow-gray-600 flex flex-col lg:flex-row gap-4">
                            <!-- Imagen o video (65%) -->
                            <div class="w-full lg:w-[65%] flex justify-center items-center">
                                @php
                                    $extension = pathinfo($informacion->imagen_info, PATHINFO_EXTENSION);
                                    $isVideo = in_array($extension, ['mp4', 'webm', 'ogg']);
                                @endphp
            
                                @if ($isVideo)
                                    <video controls class="w-full h-[250px] lg:h-[300px] rounded-lg shadow-md object-cover">
                                        <source src="{{ asset('storage/info_img/' . $informacion->imagen_info) }}" type="video/{{ $extension }}">
                                        Tu navegador no soporta la reproducción de video.
                                    </video>
                                @else
                                    <img src="{{ asset('storage/info_img/' . $informacion->imagen_info) }}" alt="Imagen de la info"
                                         class="w-full h-[250px] lg:h-[300px] rounded-lg shadow-md object-cover">
                                @endif
                            </div>
            
                            <!-- Información (35%) -->
                            <div class="w-full lg:w-[35%] flex flex-col justify-around">
                                <!-- Título -->
                                <p class="text-2xl lg:text-xl font-bold text-black mb-2">{{ $informacion->titulo_info_general }}</p>
            
                                <!-- Descripción -->
                                <p class="text-gray-700 mb-4 text-sm leading-relaxed">{{ Str::limit($informacion->descripcion_info, 40) }}</p> 
                                

            
                                <!-- Acciones -->
                                <div class="flex space-x-3 flex-col gap-2">
                                    <!-- Botón de editar -->
                                    <a href="{{ route('informacion.edit', $informacion->id) }}"
                                       class="inline-flex items-center bg-blue-500 w-full justify-center text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300 text-sm">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M15.232 5.232l3.536 3.536M9 13l6.536-6.536a2 2 0 012.828 0l.172.172a2 2 0 010 2.828L12 17H9v-3z"/>
                                        </svg>
                                        Editar
                                    </a>
            
                                    <!-- Botón de eliminar -->
                                    <form action="{{ route('informacion.destroy', $informacion->id) }}" method="POST" class="!ml-0"
                                          onsubmit="return confirm('¿Estás seguro de que quieres eliminar esta información?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="inline-flex items-center bg-red-500 w-full justify-center !ml-0 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300 text-sm">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
            
                    
                @endif
            
            </div>

            <div class=" mt-6 ">
                {{ $informaciones->links() }}
            </div>
            


        </div>

    </div>
</x-app-layout>