@section('titulo')
    Crear Publicación
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear nueva información general') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center h-full">
      
        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0 ">

            <div class="flex justify-end items-center mb-4">
                <x-link :href="route('Social.index')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Ver todas las publicaciones
                </x-link>
            </div>

            
            <form action="{{ route('Social.store') }}" method="POST" enctype="multipart/form-data" novalidate>

                @csrf

                <div class="mb-5">


                    <!--enlace social publicacion-->

                    <x-input-label for="enlace_social" :value="__('Enlace Publicación')"
                    class="mb-2 block uppercase text-gray-500 font-bold" />
    
                    <x-text-input id="enlace_social" class=" p-3 w-full mb-4 " type="text" name="enlace_social"
                    :value="old('enlace_social')"  />
    
                    <x-input-error :messages="$errors->get('enlace_social')" class="mt-2 mb-3" />

                    <!-- descripcion social -->

                    <x-input-label for="descripcion_social" :value="__('Descripción Publicación')"
                    class="mb-2 block uppercase text-gray-500 font-bold" />
                
                    <textarea id="descripcion_social" name="descripcion_social"
                    class="border p-3 w-full rounded-md shadow-sm focus:ring-none focus:ring-yellow-300 dark:focus:ring-yellow-300 focus:border-yellow-300 dark:focus:border-yellow-300"
                    rows="4">{{ old('descripcion_social') }}</textarea>
                
                    <x-input-error :messages="$errors->get('descripcion_social')" class="mt-2 mb-3" />

                     <!-- imagen social -->

                     <x-input-label for="imagen_social" :value="__('Imagen Publicación')"
                     class="mb-2 block uppercase text-gray-500 font-bold" />
        
                    <x-text-input id="imagen_social" class="border- p-3 w-full " type="file" name="imagen_social"
                    :value="old('imagen_social')"  accept="image/*,video/mp4,video/webm,video/ogg" onchange="previewMedia(event)" />
                        
                    <x-input-error :messages="$errors->get('imagen_social')" class="mt-2" />

                        <!-- Contenedor del preview -->
                        <div id="preview-container" class="mt-4  w-[300px] h-[200px] relative hidden">
                            <img id="image-preview" src="" alt="Vista previa de la imagen"
                              class="max-w-md rounded-lg shadow hidden w-full h-full object-cover" />
            
                            <video id="video-preview" controls
                            class="max-w-md rounded-lg shadow hidden w-full h-full object-cover">
                            <source id="video-source" src="" type="">
                             Tu navegador no soporta la reproducción de video.
                            </video>
                        </div>
        
                        

                </div>


                <x-primary-button
                    class=" justify-center text-2xl transition-colors cursor-pointer uppercase font-bold w-full px-4 py-4  rounded-lg">
                    {{ __('Crear una Publicación') }}
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

        reader.onload = function (e) {

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
