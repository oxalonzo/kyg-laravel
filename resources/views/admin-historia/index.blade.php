@section('titulo')
    Nuestra Historia
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __(' Nuestra Historia') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center h-full">

        <div class="md:w-3/4 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0 h-full ">

            <div class="flex justify-end items-center mb-4">
                <x-link :href="route('historia.create')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Crear una nueva Historia
                </x-link>
            </div>


            @if (session('success'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
                    class=" rounded-lg bg-green-100 border border-green-400 text-green-700 px-4 py-3 shadow-md"
                    role="alert">
                    <p class="font-semibold">{{ session('success') }}</p>
                </div>
            @endif


                @if ($historias->isEmpty())
                    <p class="mt-4 text-center text-gray-600">No hay historias aún. Por favor cree una información.</p>
                @else

                <div class="container flex justify-center items-center flex-col sm:flex-col md:flex-col lg:grid lg:grid-cols-2 p-5 h-full gap-6">
                    @foreach ($historias as $historia)
                        <div class="w-full bg-white p-6 rounded-lg shadow-sm shadow-gray-600 flex flex-col lg:flex-row gap-4">
            
                            <!-- Información general (40%) -->
                            <div class="w-full lg:w-[40%] flex flex-col justify-start text-sm space-y-2">
                                <div class="flex justify-between text-gray-800 font-semibold text-base">
                                    <span>From:</span>
                                    <span>{{ $historia->from_year }}</span>
                                </div>
                                <div class="flex justify-between text-gray-800 font-semibold text-base">
                                    <span>To:</span>
                                    <span>{{ $historia->to_year }}</span>
                                </div>
                                <div class="text-gray-600 font-medium">
                                    <span class="block text-gray-800 font-bold">Empresa:</span>
                                    {{ $historia->empresa }}
                                </div>
                                <div class="text-gray-600 font-medium">
                                    <span class="block text-gray-800 font-bold">Ubicación:</span>
                                    {{ $historia->ubicacion }}
                                </div>
                            </div>
            
                            <!-- Descripción y acciones (60%) -->
                            <div class="w-full lg:w-[60%] flex flex-col justify-between space-y-4">
                                <!-- Descripción -->
                                <p class="text-gray-700 leading-relaxed">
                                    {{ $historia->descripcion_historia }}
                                </p>
            
                                <!-- Acciones -->
                                <div class="flex flex-col md:flex-row gap-2">
                                    <!-- Botón Editar -->
                                    <a href="{{ route('historia.edit', $historia->id) }}"
                                        class="inline-flex items-center bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300 text-sm w-full md:w-auto justify-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.232 5.232l3.536 3.536M9 13l6.536-6.536a2 2 0 012.828 0l.172.172a2 2 0 010 2.828L12 17H9v-3z" />
                                        </svg>
                                        Editar
                                    </a>
            
                                    <!-- Botón Eliminar -->
                                    <form action="{{ route('historia.destroy', $historia->id) }}" method="POST"
                                        onsubmit="return confirm('¿Estás seguro de que quieres eliminar esta historia?');"
                                        class="w-full md:w-auto">
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
                        </div>
                    @endforeach
                @endif
            </div>

            <div class=" mt-6 ">
                {{ $historias->links() }}
            </div>


        </div>

    </div>
</x-app-layout>
