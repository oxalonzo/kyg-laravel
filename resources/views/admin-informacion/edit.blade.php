@section('titulo')
    Editar Información
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear nueva información general') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center h-full">
      
        <div class="md:w-1/2p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0 ">

            <div class="flex justify-end items-center mb-4">
                <x-link :href="route('informacion.create')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Ver las informaciones
                </x-link>
            </div>


            <div class="container flex justify-center items-center flex-col lg:flex-col p-5 h-full  ">

               

            </div>


        </div>

    </div>
</x-app-layout>