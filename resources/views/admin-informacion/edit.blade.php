@section('titulo')
    Editar Información
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edita la información general') }}
        </h2>
    </x-slot>

    <div class="py-12 sm:px-10 flex justify-center h-full">

        <div class="w-full md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0 ">

            <div class="flex justify-end items-center mb-4">
                <x-link :href="route('informacion.index')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Ver las informaciones
                </x-link>
            </div>


            <form action="{{ route('informacion.update', $informacion->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">

                    <!--titulo info general-->

                    <x-input-label for="titulo_info_general" :value="__('Titulo información general')"
                        class="mb-2 block uppercase text-gray-500 font-bold" />

                    <x-text-input id="titulo_info_general" class=" p-3 w-full mb-4 " type="text"
                        name="titulo_info_general" :value="old('titulo_info_general', $informacion->titulo_info_general ?? '' )" />

                    <x-input-error :messages="$errors->get('titulo_info_general')" class="mt-2 mb-3" />

                    <!-- descripcion info general-->

                    <x-input-label for="descripcion_info" :value="__('Descripción información general')"
                        class="mb-2 block uppercase text-gray-500 font-bold" />

                    <textarea id="descripcion_info" name="descripcion_info"
                        class="border p-3 w-full rounded-md shadow-sm focus:ring-none focus:ring-yellow-300 dark:focus:ring-yellow-300 focus:border-yellow-300 dark:focus:border-yellow-300"
                        rows="4">{{ old('descripcion_info', $informacion->descripcion_info) }}</textarea>

                    <x-input-error :messages="$errors->get('descripcion_info')" class="mt-2 mb-3" />

                    <!-- imagen info general-->

                    <x-input-label for="imagen_info" :value="__('Imagen del Banner')"
                        class="mb-2 block uppercase  text-gray-500 font-bold" />


                    <x-text-input id="imagen_info" class="border p-3 w-full" type="file" name="imagen_info"
                        :value="old('imagen_info')" accept="image/*,video/mp4,video/webm,video/ogg"
                        onchange="previewMedia(event)" />


                    <div class="flex gap-2 flex-col sm:flex-row md:flex-row lg:flex-row">

                        <div class="mt-4 w-[300px] h-[200px] relative overflow-hidden rounded-lg">
                            <x-input-label :value="__('Archivo Actual')" class="mb-2 block uppercase text-gray-500 font-bold" />

                            @php
                                $extension = pathinfo($informacion->imagen_info, PATHINFO_EXTENSION);
                                $isVideo = in_array($extension, ['mp4', 'webm', 'ogg']);
                            @endphp

                            @if ($isVideo)
                                <video controls class="rounded-lg shadow-md w-full h-full object-cover">
                                    <source src="{{ asset('storage/info_img/' . $informacion->imagen_info) }}"
                                        type="video/{{ $extension }}">
                                    Tu navegador no soporta el video.
                                </video>
                            @else
                                <img src="{{ asset('storage/info_img/' . $informacion->imagen_info) }}"
                                    alt="Imagen info" class="rounded-lg shadow-md w-full h-full object-cover">
                            @endif
                        </div>

                        <div id="preview-container"
                            class="mt-4 w-[300px] h-[200px] relative overflow-hidden hidden rounded-lg">
                            <x-input-label id="new-media-label" :value="__('Archivo Nuevo')"
                                class="mb-2 block uppercase text-gray-500 font-bold" />

                            <img id="image-preview" src="" alt="Vista previa de imagen"
                                class="max-w-md rounded-lg shadow-md w-full h-full object-cover hidden" />
                            <video id="video-preview" controls
                                class="max-w-md rounded-lg shadow-md w-full h-full object-cover hidden">
                                <source id="video-source" src="" type="">
                                Tu navegador no soporta la reproducción de video.
                            </video>
                        </div>

                    </div>

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


<script>
    function previewMedia(event) {
        const input = event.target;
        const file = input.files[0];
        const previewContainer = document.getElementById('preview-container');
        const imagePreview = document.getElementById('image-preview');
        const videoPreview = document.getElementById('video-preview');
        const videoSource = document.getElementById('video-source');
        const label = document.getElementById('new-media-label');

        // Reset
        imagePreview.classList.add('hidden');
        videoPreview.classList.add('hidden');
        previewContainer.classList.remove('hidden');
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
            if (fileType.startsWith('image/')) {
                imagePreview.src = e.target.result;
                imagePreview.classList.remove('hidden');
                label.textContent = "Nueva Imagen";
            } else if (fileType.startsWith('video/')) {
                videoSource.src = e.target.result;
                videoSource.type = fileType;
                videoPreview.load();
                videoPreview.classList.remove('hidden');
                label.textContent = "Nuevo Video";
            }
        };

        reader.readAsDataURL(file);
    }
</script>
