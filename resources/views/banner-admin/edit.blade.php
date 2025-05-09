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


                    <x-text-input id="imagen_banner" class="border p-3 w-full" type="file" name="imagen_banner" :value="old('imagen_banner')"  accept="image/*" onchange="previewImage(event)" />

                    <div class="flex gap-2 flex-col sm:flex-row md:flex-row lg:flex-row">

                        <div class="mt-4 w-[300px] h-[200px] relative overflow-hidden rounded-lg  ">
                            <x-input-label  :value="__('Imagen Actual')" class="mb-2 block uppercase text-gray-500 font-bold" />
                            <img src="{{ asset('storage/banners/' . $banner->imagen_banner) }}" alt="Imagen Banner" class="rounded-lg shadow-md w-full h-full object-cover">
                        </div>

                        <div id="preview-container" class="mt-4 w-[300px] h-[200px]  relative overflow-hidden hidden rounded-lg ">
                             <!-- Contenedor del preview -->
                             <x-input-label  :value="__('Imagen Nueva')" class="mb-2 block uppercase text-gray-500 font-bold" />
                            <img id="image-preview" src="" alt="Vista previa de la imagen" class=" max-w-md rounded-lg shadow-md  w-full h-full object-cover" />
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
    function previewImage(event) {
        const input = event.target;
        const previewContainer = document.getElementById('preview-container');
        const preview = document.getElementById('image-preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                previewContainer.classList.remove('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        } else {
            previewContainer.classList.add('hidden');
            preview.src = '';
        }
    }
</script>
