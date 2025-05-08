
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
            <x-link :href="route('banner.index')" class=" border border-yellow-300 p-3 text-xs text-gray-600 dark:text-gray-600 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300 dark:focus:ring-offset-2">
                Ver todos los banners
            </x-link>
        </div>

        <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data" novalidate>

            @csrf

            <div class="mb-5">
              

                <x-input-label for="imagen_banner" :value="__('Imagen banner')" class="mb-2 block uppercase text-gray-500 font-bold"/>

                <x-text-input id="imagen_banner" class="border p-3 w-full" type="file" name="imagen_banner" :value="old('imagen_banner')"
                autofocus  />
                <x-input-error :messages="$errors->get('imagen_banner')" class="mt-2" />

            </div>

            
            <x-primary-button class=" justify-center text-2xl transition-colors cursor-pointer uppercase font-bold w-full px-4 py-4  rounded-lg">
                {{ __('Crear banner') }}
            </x-primary-button>

        </form>
    </div>


                

    </div>
</x-app-layout>
