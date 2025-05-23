@section('titulo')
    Crear Actividad
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear nueva actividad') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center h-full">

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0 ">

            <div class="flex justify-end items-center mb-4">
                <x-link :href="route('actividades-admin.index')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Ver todas las actividad
                </x-link>
            </div>


            <form action="{{ route('actividades-admin.store') }}" method="POST" enctype="multipart/form-data" novalidate>
    @csrf

    <!-- Título -->
    <x-input-label for="titulo" :value="__('Título')" class="mb-2 block uppercase text-gray-500 font-bold" />
    <x-text-input id="titulo" class="p-3 w-full mb-4" type="text" name="titulo" :value="old('titulo')" required />
    <x-input-error :messages="$errors->get('titulo')" class="mt-2 mb-3" />

    <!-- Descripción -->
    <x-input-label for="descripcion" :value="__('Descripción')" class="mb-2 block uppercase text-gray-500 font-bold" />
    <textarea id="descripcion" name="descripcion"
        class="border p-3 w-full rounded-md shadow-sm focus:ring-yellow-300 dark:focus:ring-yellow-300 focus:border-yellow-300 dark:focus:border-yellow-300"
        rows="4" required>{{ old('descripcion') }}</textarea>
    <x-input-error :messages="$errors->get('descripcion')" class="mt-2 mb-3" />

    <!-- Enlace -->
    <x-input-label for="enlace" :value="__('Enlace')" class="mb-2 block uppercase text-gray-500 font-bold" />
    <x-text-input id="enlace" class="p-3 w-full mb-4" type="url" name="enlace" :value="old('enlace')" required />
    <x-input-error :messages="$errors->get('enlace')" class="mt-2 mb-3" />

    <!-- Archivos multimedia -->
    <x-input-label for="medios" :value="__('Archivos Multimedia')" class="mb-2 block uppercase text-gray-500 font-bold" />
    <input type="file" name="medios[]" multiple accept="image/*,video/*"
        class="p-3 w-full mb-4 border rounded" onchange="previewMedia(event)" />
    <x-input-error :messages="$errors->get('medios')" class="mt-2 mb-3" />
    <!-- Contenedor dinámico de previews -->
    <div id="preview-container" class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4 mb-3"></div>

    <x-primary-button class="w-full justify-center px-4 py-4 text-2xl font-bold uppercase rounded-lg">
        {{ __('Crear actividad') }}
    </x-primary-button>
</form>

            

        </div>

    </div>
</x-app-layout>

<script>
    function previewMedia(event) {
        const files = event.target.files;
        const container = document.getElementById('preview-container');
        container.innerHTML = ''; // limpiar previews anteriores

        if (!files.length) return;

        Array.from(files).forEach(file => {
            const reader = new FileReader();
            const fileType = file.type;

            reader.onload = function (e) {
                const wrapper = document.createElement('div');
                wrapper.className = 'relative w-full h-48 rounded shadow overflow-hidden';

                if (fileType.startsWith('image/')) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'object-cover w-full h-full';
                    wrapper.appendChild(img);
                } else if (fileType.startsWith('video/')) {
                    const video = document.createElement('video');
                    video.controls = true;
                    video.className = 'object-cover w-full h-full';
                    const source = document.createElement('source');
                    source.src = e.target.result;
                    source.type = fileType;
                    video.appendChild(source);
                    wrapper.appendChild(video);
                }

                container.appendChild(wrapper);
            };

            reader.readAsDataURL(file);
        });
    }
</script>
