@section('titulo')
    Banner
@endsection


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Banner') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">


        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">

            <div class="flex justify-end items-center">
                <x-link :href="route('banner.index')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Ver todos los banners
                </x-link>
            </div>

            <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data" novalidate>

                @csrf

                <div class="mb-5">

                    <x-input-error :messages="$errors->get('imagen_banner')" class="mt-2" />


                    <x-input-label for="imagen_banner" :value="__('Imagen banner')"
                        class="mb-2 block uppercase text-gray-500 font-bold" />

                    <x-text-input id="imagen_banner" class="border p-3 w-full" type="file" name="imagen_banner"
                        :value="old('imagen_banner')"  accept="image/*" onchange="previewImage(event)" />

                    <!-- Contenedor del preview -->
                    <div id="preview-container" class="mt-4 w-[300px] h-[200px]">
                        <img id="image-preview" src="" alt="Vista previa de la imagen"
                            class=" max-w-md rounded-lg shadow hidden w-full h-full object-cove" />
                    </div>


                </div>


                <x-primary-button
                    class=" justify-center text-2xl transition-colors cursor-pointer uppercase font-bold w-full px-4 py-4  rounded-lg">
                    {{ __('Crear banner') }}
                </x-primary-button>

            </form>
        </div>

    </div>

</x-app-layout>


<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('image-preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
