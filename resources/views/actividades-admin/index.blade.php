@section('titulo')
    Actividades
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __(' Actividades') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center h-full">

        <div class="md:w-3/4 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0 h-full ">

               <!-- Botón Crear Actividad -->
  <div class="flex justify-end items-center mb-4">
                <x-link :href="route('actividades-admin.create')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Crear una nueva actividad
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

<!-- Si no hay actividades -->
@if ($actividads->isEmpty())
    <p class="text-center text-gray-600 mt-6">No hay actividades aún. Por favor crea una.</p>
@else
    <!-- Grid de actividades -->
    <div class="container mx-auto p-4 space-y-8">

        @foreach ($actividads as $actividad)
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col gap-6">

                <!-- Título de la actividad -->
                <h3 class="text-2xl font-bold text-yellow-400">{{ $actividad->titulo }}</h3>

                <!-- Descripción -->
                <p class="text-gray-700 text-base leading-relaxed">{{ $actividad->descripcion }}</p>

                <!-- Enlace de la actividad (si existe) -->
                @if ($actividad->enlace)
                    <a href="{{ $actividad->enlace }}" target="_blank"
                        class="text-blue-600 hover:underline text-sm inline-block">
                        🔗 Ver actividad
                    </a>
                @endif

                <!-- Multimedia (fotos/videos en fila) -->
                <div class="flex gap-4 overflow-x-auto py-4">
                    @foreach ($actividad->medios as $media)
                        @php
                            $extension = pathinfo($media->archivo, PATHINFO_EXTENSION);
                            $isVideo = $media->tipo === 'video';
                        @endphp

                        @if ($isVideo)
                            <video controls class="w-[280px] h-[200px] rounded-lg object-cover shadow-md">
                                <source src="{{ asset('storage/' . $media->archivo) }}" type="video/{{ $extension }}">
                                Tu navegador no soporta la reproducción de video.
                            </video>
                        @else
                            <img src="{{ asset('storage/' . $media->archivo) }}" alt="Imagen"
                                class="w-[280px] h-[200px] rounded-lg object-cover shadow-md" />
                        @endif
                    @endforeach
                </div>

                <!-- Acciones (editar y eliminar) -->
                <div class="flex gap-4">
                    <a href="{{ route('actividades-admin.edit', $actividad->id) }}"
                        class="inline-flex items-center bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300 text-sm w-full md:w-auto justify-center">
                         <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.232 5.232l3.536 3.536M9 13l6.536-6.536a2 2 0 012.828 0l.172.172a2 2 0 010 2.828L12 17H9v-3z" />
                                        </svg>
                         Editar
                    </a>

                    <form action="{{ route('actividades-admin.destroy', $actividad->id) }}" method="POST"
                        onsubmit="return confirm('¿Estás seguro de eliminar esta actividad?');" class="w-full sm:w-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-flex items-center bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300 text-sm w-full justify-center">
                             <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                             Eliminar
                        </button>
                    </form>
                </div>

            </div>
        @endforeach

    </div>

    <!-- Paginación -->
    <div class="mt-6">
        {{ $actividads->links() }}
    </div>
@endif



        </div>

    </div>
</x-app-layout>
