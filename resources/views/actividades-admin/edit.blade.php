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



<!-- Mensaje de éxito -->
@if (session('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
        class="rounded-lg bg-green-100 border border-green-400 text-green-700 px-4 py-3 shadow-md mb-6"
        role="alert">
        <p class="font-semibold">{{ session('success') }}</p>
    </div>
@endif

            {{-- FORMULARIO PRINCIPAL DE ACTUALIZACIÓN --}}
            <form action="{{ route('actividades-admin.update', $actividad->id) }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')

                <x-input-label for="titulo" :value="__('Título')" class="mb-2 block uppercase text-gray-500 font-bold" />
                <x-text-input id="titulo" class="p-3 w-full mb-4" type="text" name="titulo"
                    :value="old('titulo', $actividad->titulo)" required />

                <x-input-label for="descripcion" :value="__('Descripción')" class="mb-2 block uppercase text-gray-500 font-bold" />
                <textarea id="descripcion" name="descripcion" class="border p-3 w-full rounded-md shadow-sm focus:ring-yellow-300 dark:focus:ring-yellow-300 focus:border-yellow-300 dark:focus:border-yellow-300" rows="4" required>{{ old('descripcion', $actividad->descripcion) }}</textarea>

                <x-input-label for="enlace" :value="__('Enlace')" class="mb-2 block uppercase text-gray-500 font-bold" />
                <x-text-input id="enlace" class="p-3 w-full mb-4" type="url" name="enlace"
                    :value="old('enlace', $actividad->enlace)" />

                {{-- ARCHIVOS NUEVOS --}}
                <x-input-label for="medios" :value="__('Subir nuevos archivos multimedia')" />
                <input type="file" name="medios[]" multiple accept="image/*,video/*"
                    class="p-3 w-full mb-4 border rounded" onchange="previewMedia(event)" />

                <div id="nuevos-medios" class="mb-6 hidden">
                    <h3 class="text-lg font-bold mb-2 text-gray-700">Fotos y videos nuevos</h3>
                    <div id="preview-container" class="grid grid-cols-1 sm:grid-cols-2 gap-4"></div>
                </div>

                {{-- BOTÓN ACTUALIZAR --}}
                <x-primary-button class="w-full justify-center px-4 py-4 text-2xl font-bold uppercase rounded-lg">
                    {{ __('Actualizar actividad') }}
                </x-primary-button>
            </form>

            {{-- MEDIOS ACTUALES --}}
            @if ($actividad->medios && $actividad->medios->count())
                <div class="mt-8">
                    <h3 class="text-lg font-bold mb-2 text-gray-700">Fotos y videos actuales</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach ($actividad->medios as $media)
                            <div class="relative w-full h-48 rounded shadow overflow-hidden group">
                                {{-- Botón Eliminar (en formulario separado) --}}
                                <div class="absolute top-2 right-2 z-10">
                                    <form action="{{ route('actividades-admin.media.destroy', $media->id) }}" method="POST"
                                        onsubmit="return confirm('¿Seguro que quieres eliminar este archivo?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-600 text-white px-2 py-1 text-xs rounded hover:bg-red-800">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>

                                {{-- Contenido --}}
                                @if(Str::endsWith($media->archivo, ['.mp4', '.mov', '.avi', '.webm']))
                                    <video controls class="object-cover w-full h-full">
                                        <source src="{{ asset('storage/' . $media->archivo) }}" type="video/mp4">
                                        Tu navegador no soporta el video.
                                    </video>
                                @else
                                    <img src="{{ asset('storage/' . $media->archivo) }}"
                                        class="object-cover w-full h-full" alt="Media actual">
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </div>

</x-app-layout>

<script>
    function previewMedia(event) {
        const files = event.target.files;
        const container = document.getElementById('preview-container');
        const previewSection = document.getElementById('nuevos-medios');
        container.innerHTML = ''; // limpiar previews anteriores

        if (!files.length) {
            previewSection.classList.add('hidden');
            return;
        }

        previewSection.classList.remove('hidden'); // mostrar título y contenedor

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
