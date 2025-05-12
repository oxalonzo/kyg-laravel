@section('titulo')
    Crear Historia
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear nueva historia') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center h-full">

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0 ">

            <div class="flex justify-end items-center mb-4">
                <x-link :href="route('historia.index')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Ver todas las historia
                </x-link>
            </div>


            <form action="{{ route('historia.store') }}" method="POST"  novalidate>

                @csrf

                <div class="mb-5">



                    <!-- Año de inicio -->
                    <x-input-label for="Año_de_inicio" :value="__('Año de Inicio')"
                        class="mb-2 block uppercase text-gray-500 font-bold" />
                    <x-text-input id="Año_de_inicio" class="p-3 w-full mb-4" type="number" name="Año_de_inicio"
                        :value="old('Año_de_inicio')" required />
                    <x-input-error :messages="$errors->get('Año_de_inicio')" class="mt-2 mb-3" />

                    <!-- Año de fin -->
                    <x-input-label for="Año_de_fin" :value="__('Año de Fin')"
                        class="mb-2 block uppercase text-gray-500 font-bold" />
                    <x-text-input id="Año_de_fin" class="p-3 w-full mb-4" type="number" name="Año_de_fin" :value="old('Año_de_fin')"
                        required />
                    <x-input-error :messages="$errors->get('Año_de_fin')" class="mt-2 mb-3" />

                    <!-- Empresa -->
                    <x-input-label for="empresa" :value="__('Empresa')"
                        class="mb-2 block uppercase text-gray-500 font-bold" />
                    <x-text-input id="empresa" class="p-3 w-full mb-4" type="text" name="empresa" :value="old('empresa')"
                        required />
                    <x-input-error :messages="$errors->get('empresa')" class="mt-2 mb-3" />

                    <!-- Ubicación -->
                    <x-input-label for="ubicacion" :value="__('Ubicación')"
                        class="mb-2 block uppercase text-gray-500 font-bold" />
                    <x-text-input id="ubicacion" class="p-3 w-full mb-4" type="text" name="ubicacion"
                        :value="old('ubicacion')" required />
                    <x-input-error :messages="$errors->get('ubicacion')" class="mt-2 mb-3" />

                    <!-- Descripción Historia -->
                    <x-input-label for="descripcion_historia" :value="__('Descripción de la Historia')"
                        class="mb-2 block uppercase text-gray-500 font-bold" />
                    <textarea id="descripcion_historia" name="descripcion_historia"
                        class="border p-3 w-full rounded-md shadow-sm focus:ring-none focus:ring-yellow-300 dark:focus:ring-yellow-300 focus:border-yellow-300 dark:focus:border-yellow-300"
                        rows="4" required>{{ old('descripcion_historia') }}</textarea>
                    <x-input-error :messages="$errors->get('descripcion_historia')" class="mt-2 mb-3" />



                </div>


                <x-primary-button
                    class=" justify-center text-2xl transition-colors cursor-pointer uppercase font-bold w-full px-4 py-4  rounded-lg">
                    {{ __('Crear una historia') }}
                </x-primary-button>

            </form>


        </div>

    </div>
</x-app-layout>


<script>
    function previewMedia(event) {
        const input = event.target;
        const file = input.files[0];
        const previewContainer = document.getElementById('preview-container');
        const imagePreview = document.getElementById('image-preview');
        const videoPreview = document.getElementById('video-preview');
        const videoSource = document.getElementById('video-source');

        // Reset
        imagePreview.classList.add('hidden');
        videoPreview.classList.add('hidden');
        imagePreview.src = '';
        videoSource.src = '';
        videoPreview.load();

        if (!file) {
            previewContainer.classList.add('hidden');
            return;
        }

        const reader = new FileReader();
        const fileType = file.type;

        reader.onload = function(e) {

            previewContainer.classList.remove('hidden');

            if (fileType.startsWith('image/')) {
                imagePreview.src = e.target.result;
                imagePreview.classList.remove('hidden');
            } else if (fileType.startsWith('video/')) {
                videoSource.src = e.target.result;
                videoSource.type = fileType;
                videoPreview.load();
                videoPreview.classList.remove('hidden');
            }
        };

        reader.readAsDataURL(file);
    }
</script>
