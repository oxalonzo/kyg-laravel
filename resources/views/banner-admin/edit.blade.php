@section('titulo')
    Editar Banner
@endsection


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Banner') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">


        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">

            <div class="flex justify-end items-center">
                <x-link :href="route('banner.index')"
                    class="border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Volver a los banners
                </x-link>
            </div>

            <form action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    
                    <x-input-label for="imagen_banner" :value="__('Imagen del Banner')" class="mb-2 block uppercase  text-gray-500 font-bold" />


                    <x-text-input id="imagen_banner" class="border p-3 w-full" type="file" name="imagen_banner" :value="old('imagen_banner')"  accept="image/*,video/mp4,video/webm,video/ogg" onchange="previewMedia(event)" />

                    
                    <div class="flex gap-2 flex-col sm:flex-row md:flex-row lg:flex-row">

                        <div class="mt-4 w-[300px] h-[200px] relative overflow-hidden rounded-lg">
                            <x-input-label :value="__('Archivo Actual')" class="mb-2 block uppercase text-gray-500 font-bold" />
                    
                            @php
                                $extension = pathinfo($banner->imagen_banner, PATHINFO_EXTENSION);
                                $isVideo = in_array($extension, ['mp4', 'webm', 'ogg']);
                            @endphp
                    
                            @if ($isVideo)
                                <video controls class="rounded-lg shadow-md w-full h-full object-cover">
                                    <source src="{{ asset('storage/banners/' . $banner->imagen_banner) }}" type="video/{{ $extension }}">
                                    Tu navegador no soporta el video.
                                </video>
                            @else
                                <img src="{{ asset('storage/banners/' . $banner->imagen_banner) }}" alt="Imagen Banner"
                                    class="rounded-lg shadow-md w-full h-full object-cover">
                            @endif
                        </div>
                    
                        <div id="preview-container" class="mt-4 w-[300px] h-[200px] relative overflow-hidden hidden rounded-lg">
                            <x-input-label id="new-media-label" :value="__('Archivo Nuevo')" class="mb-2 block uppercase text-gray-500 font-bold" />
                    
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

                <button type="submit" class=" bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300">
                    Guardar Cambios
                </button>
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

        reader.onload = function (e) {
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

