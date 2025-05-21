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

{{-- 
         <!-- Mostrar los servicios -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($servicios as $servicio)
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <!-- Título -->
                    <h3 class="text-xl font-semibold mb-2">{{ $servicio->titulo }}</h3>
                    
                    <!-- Descripción -->
                    <p class="text-gray-600 mb-4">{{ $servicio->descripcion }}</p>

                    <!-- Lista de ítems -->
                    <div class="mb-4">
                        <h4 class="font-semibold text-gray-700">Lista de Elementos:</h4>
                        <ul class="list-disc pl-5">
                            @foreach (json_decode($servicio->list) as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Imagen del servicio -->
                    @if ($servicio->imagen)
                        <img src="{{ Storage::url($servicio->imagen) }}" alt="Imagen de {{ $servicio->titulo }}" class="w-full h-48 object-cover rounded-md mb-4">
                    @endif

                    <!-- Mostrar todos los campos del servicio -->
                    <div class="mt-4">
                        <h4 class="font-semibold text-gray-700">Detalles del Servicio:</h4>
                        <ul class="list-none pl-0">
                            <li><strong>Título:</strong> {{ $servicio->titulo }}</li>
                            <li><strong>Descripción:</strong> {{ $servicio->descripcion }}</li>
                            <li><strong>Lista de Elementos:</strong>
                                <ul class="list-disc pl-5">
                                    @foreach (json_decode($servicio->list) as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </li>
                            @if ($servicio->imagen)
                                <li><strong>Imagen:</strong> <img src="{{ Storage::url($servicio->imagen) }}" alt="Imagen de {{ $servicio->titulo }}" class="w-16 h-16 object-cover rounded-md mt-2"></li>
                            @endif
                        </ul>
                    </div>

                    <!-- Enlace para editar o eliminar -->
                    <div class="mt-4 flex justify-between">
                        <a href="{{ route('servicios.edit', $servicio->id) }}" class="text-blue-500 hover:underline">Editar</a>
                        <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este servicio?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Si no hay servicios -->
        @if ($servicios->isEmpty())
            <p class="text-gray-500 mt-4">No tienes servicios creados aún.</p>
        @endif --}}


        </div>

    </div>
</x-app-layout>
