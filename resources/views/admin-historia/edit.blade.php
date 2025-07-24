@section('titulo')
    Editar historia
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edita la historia') }}
        </h2>
    </x-slot>

    <div class="py-12 sm:px-10 flex justify-center h-full">

        <div class="w-full md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0 ">

            <div class="flex justify-end items-center mb-4">
                <x-link :href="route('historia.index')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Volver a las Publicaciones
                </x-link>
            </div>


            <form action="{{ route('historia.update', $historia->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">

                    <!--from-->

                    <x-input-label for="Año_de_inicio" :value="__('Año de Inicio')"
                        class="mb-2 block uppercase text-gray-500 font-bold" />

                    <x-text-input id="Año_de_inicio" class=" p-3 w-full mb-4 " type="text" name="Año_de_inicio"
                        :value="old('Año_de_inicio', $historia->from_year ?? '')" />

                    <x-input-error :messages="$errors->get('Año_de_inicio')" class="mt-2 mb-3" />

                    <!-- to-->

                    <!-- Año de fin -->
                    <x-input-label for="Año_de_fin" :value="__('Año de Fin')"
                        class="mb-2 block uppercase text-gray-500 font-bold" />
                    <x-text-input id="Año_de_fin" class="p-3 w-full mb-4" type="number" name="Año_de_fin"
                        :value="old('Año_de_fin', $historia->to_year ?? '')" required />
                    <x-input-error :messages="$errors->get('Año_de_fin')" class="mt-2 mb-3" />

                    <!-- empresa -->

                    <x-input-label for="empresa" :value="__('Descripción información general')"
                        class="mb-2 block uppercase text-gray-500 font-bold" />

                    <textarea id="empresa" name="empresa"
                        class="border p-3 w-full rounded-md shadow-sm focus:ring-none focus:ring-yellow-300 dark:focus:ring-yellow-300 focus:border-yellow-300 dark:focus:border-yellow-300"
                        rows="4">{{ old('empresa', $historia->empresa) }}</textarea>

                    <x-input-error :messages="$errors->get('empresa')" class="mt-2 mb-3" />

                    <!-- ubicacion -->

                    <x-input-label for="ubicacion" :value="__('Descripción información general')"
                        class="mb-2 block uppercase text-gray-500 font-bold" />

                    <textarea id="ubicacion" name="ubicacion"
                        class="border p-3 w-full rounded-md shadow-sm focus:ring-none focus:ring-yellow-300 dark:focus:ring-yellow-300 focus:border-yellow-300 dark:focus:border-yellow-300"
                        rows="4">{{ old('ubicacion', $historia->ubicacion) }}</textarea>

                    <x-input-error :messages="$errors->get('ubicacion')" class="mt-2 mb-3" />

                    <!-- descripcion -->

                    <x-input-label for="descripcion_historia" :value="__('Descripción información general')"
                        class="mb-2 block uppercase text-gray-500 font-bold" />

                    <textarea id="descripcion_historia" name="descripcion_historia"
                        class="border p-3 w-full rounded-md shadow-sm focus:ring-none focus:ring-yellow-300 dark:focus:ring-yellow-300 focus:border-yellow-300 dark:focus:border-yellow-300"
                        rows="4">{{ old('descripcion_historia', $historia->descripcion_historia) }}</textarea>

                    <x-input-error :messages="$errors->get('descripcion_historia')" class="mt-2 mb-3" />





                </div>

                <button type="submit"
                    class=" bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300">
                    Guardar Cambios
                </button>
            </form>


        </div>

    </div>

    </div>
</x-app-layout>
