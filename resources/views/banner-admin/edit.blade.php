
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
                <x-link :href="route('banner.index')" class=" border border-yellow-300 p-3 text-xs text-gray-600 dark:text-gray-600 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300 dark:focus:ring-offset-2">
                   Volver a los banners
                </x-link>
            </div>

            <form action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
                <div class="mb-4">
                    <label for="imagen_banner" class="block text-sm font-medium text-gray-700">Imagen del Banner</label>
                    <input type="file" name="imagen_banner" id="imagen_banner" class="mt-1 block w-full">
                    <img src="{{ asset('storage/banners/' . $banner->imagen_banner) }}" alt="Imagen Banner" class="mt-4 w-1/2">
                </div>
            
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">
                    Guardar Cambios
                </button>
            </form>
    
            
        </div>
      


    </div>
</x-app-layout>
