@section('titulo')
    Servicios
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __(' Servicios') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center h-full">

        <div class="md:w-3/4 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0 h-full ">

               <!-- Botón Crear Actividad -->
  <div class="flex justify-end items-center mb-4">
                <x-link :href="route('servicios.create')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Crear un nuevo servicio
                </x-link>
 </div>

<!-- Mensaje de éxito -->
@if (session('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
        class="rounded-lg bg-green-100 border border-green-400 text-green-700 px-4 py-3 shadow-md mb-6"
        role="alert">
        <p class="font-semibold">{{ session('success') }}</p>
    </div>
@endif

        @if ($servicios->isEmpty())
    <p class="mt-4 text-center text-gray-600">No hay servicios aún. Por favor crea uno.</p>
@else
    <div class="container flex justify-center items-center flex-col sm:flex-col md:flex-col lg:grid lg:grid-cols-2 p-5 h-full gap-6">
        @foreach ($servicios as $servicio)
            <div class="w-full bg-white p-6 rounded-lg shadow-sm shadow-gray-600 flex flex-col lg:flex-row gap-4">
                
                <!-- Imagen (65%) -->
                <div class="w-full lg:w-[65%] flex justify-center items-center">
                    <img src="{{ asset('storage/servicios/' . $servicio->imagen) }}"
                         alt="Imagen del servicio"
                         class="w-full h-[250px] lg:h-[300px] rounded-lg shadow-md object-cover">
                </div>

                <!-- Información (35%) -->
                <div class="w-full lg:w-[35%] flex flex-col justify-between">
                    
                    <!-- Título -->
                    <p class="text-2xl font-bold text-yellow-400 mb-2">{{ $servicio->titulo }}</p>

                    <!-- Descripción (colapsable si es larga) -->
                    <p x-show="!expand" x-cloak>
                            {{ Str::limit($servicio->descripcion, 40) }}
                    </p>
                    <!-- Lista -->
                    @if (!empty($servicio->list))
                        @php
                             $items = json_decode($servicio->list, true); // Convierte JSON a array
                        @endphp
                        <ul class="list-disc list-inside text-gray-600 text-sm mb-4 space-y-1">
                            @foreach ($items as $item)
                                <li>{{ trim($item) }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <!-- Acciones -->
                    <div class="flex space-x-3 flex-col gap-2">
                        <!-- Editar -->
                        <a href="{{ route('servicios.edit', $servicio->id) }}"
                           class="inline-flex items-center bg-blue-500 w-full justify-center text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300 text-sm">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.232 5.232l3.536 3.536M9 13l6.536-6.536a2 2 0 012.828 0l.172.172a2 2 0 010 2.828L12 17H9v-3z"/>
                            </svg>
                            Editar
                        </a>

                        <!-- Eliminar -->
                        <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" class="!ml-0"
                              onsubmit="return confirm('¿Estás seguro de eliminar este servicio?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="inline-flex items-center bg-red-500 w-full justify-center text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300 text-sm">
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
    </div>

    <!-- Paginación -->
    <div class="mt-6">
        {{ $servicios->links() }}
    </div>
@endif


        </div>

    </div>
</x-app-layout>
