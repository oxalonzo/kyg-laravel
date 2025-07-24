@section('titulo')
    Editar servicio
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar servicio->titulo') }}
        </h2>
    </x-slot>

    <div class="py-12 sm:px-10 flex justify-center h-full">

        <div class="w-full md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0 ">

            <div class="flex justify-end items-center mb-4">
                <x-link :href="route('servicios.index')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Ver todos los servicios
                </x-link>
            </div>
            
<form action="{{ route('servicios.update', $servicio->id) }}" method="POST" enctype="multipart/form-data" novalidate>
    @csrf
    @method('PUT')

    <!-- Título -->
    <x-input-label for="titulo" :value="__('Título')" class="mb-2 block uppercase text-gray-500 font-bold" />
    <x-text-input id="titulo" class="p-3 w-full mb-4" type="text" name="titulo" :value="old('titulo', $servicio->titulo)" required />
    <x-input-error :messages="$errors->get('titulo')" class="mt-2 mb-3" />

    <!-- Descripción -->
    <x-input-label for="descripcion" :value="__('Descripción')" class="mb-2 block uppercase text-gray-500 font-bold" />
    <textarea id="descripcion" name="descripcion" class="border focus:ring-yellow-300 dark:focus:ring-yellow-300 focus:border-yellow-300 dark:focus:border-yellow-300 p-3 w-full rounded-md shadow-sm" rows="4" required>{{ old('descripcion', $servicio->descripcion) }}</textarea>
    <x-input-error :messages="$errors->get('descripcion')" class="mt-2 mb-3" />

    <!-- Lista de ítems -->
   <x-input-label for="lista" :value="__('Lista de elementos')" class="mb-2 block uppercase text-gray-500 font-bold" />
<div id="lista-container" class="mb-4 space-y-2">
    @php
        // Decodifica la lista desde la base de datos (json) o lo que venga del formulario (old)
        $items = old('list') ?? json_decode($servicio->list, true) ?? [];
    @endphp

    @foreach ($items as $item)
        <input type="text" name="list[]" class="p-2 w-full border rounded focus:border-yellow-300 dark:focus:border-yellow-300 focus:ring-yellow-300 dark:focus:ring-yellow-300 " value="{{ $item }}" placeholder="Ítem" />
    @endforeach

    <!-- Campo adicional para permitir agregar nuevos ítems con Enter -->
    <input type="text" name="list[]" class="p-2 w-full border rounded focus:border-yellow-300 dark:focus:border-yellow-300 focus:ring-yellow-300 dark:focus:ring-yellow-300" placeholder="Presiona Enter para agregar más" onkeydown="agregarCampoLista(event)">
</div>
<x-input-error :messages="$errors->get('list')" class="mt-2 mb-3" />


    <!-- Imagen actual -->
    @if ($servicio->imagen)
        <div class="mb-4">
            <p class="text-sm font-semibold text-gray-700 mb-2">Imagen actual:</p>
            <img src="{{ asset('storage/servicios/' . $servicio->imagen) }}" alt="Imagen actual" class="w-64 rounded shadow">
        </div>
    @endif

    <!-- Imagen -->
    <x-input-label for="imagen" :value="__('Imagen')" class="mb-2 block uppercase text-gray-500 font-bold" />
    <input type="file" name="imagen" accept="image/*" class="p-3 w-full mb-4 border rounded" onchange="mostrarVistaPrevia(event)"  />
    <x-input-error :messages="$errors->get('imagen')" class="mt-2 mb-3" />

    <!-- Vista previa -->
    <div id="preview" class="mt-4 mb-2 hidden">
       <p class="text-sm font-semibold text-gray-700 mb-2">Imagen nueva:</p>
       <div class="border p-2 rounded shadow">
           <!-- Aquí se mostrará la imagen o video -->
       </div>
    </div>

    <!-- Botón de actualización -->
    <x-primary-button class="w-full justify-center px-4 py-4 text-2xl font-bold uppercase rounded-lg">
        {{ __('Actualizar Servicio') }}
    </x-primary-button>
</form>

        </div>

    </div>
</x-app-layout>

<script>
    function agregarCampoLista(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            const container = document.getElementById('lista-container');
            const input = event.target;

            if (input.value.trim() !== '') {
                const nuevoInput = document.createElement('input');
                nuevoInput.type = 'text';
                nuevoInput.name = 'list[]';
                nuevoInput.className = 'p-2 w-full border rounded focus:border-yellow-300 dark:focus:border-yellow-300 focus:ring-yellow-300 dark:focus:ring-yellow-300';
                nuevoInput.placeholder = 'Escribe un ítem y presiona Enter';
                nuevoInput.onkeydown = agregarCampoLista;

                container.appendChild(nuevoInput);
                input.blur();
                nuevoInput.focus();
            }
        }
    }


    function mostrarVistaPrevia(event) {
        const file = event.target.files[0];
        const previewContainer = document.getElementById('preview');
        const previewBox = previewContainer.querySelector('div');

        previewBox.innerHTML = ''; // limpiar previa anterior

        if (!file) {
            previewContainer.classList.add('hidden');
            return;
        }

        const reader = new FileReader();
        const fileType = file.type;

        reader.onload = function(e) {
            let elemento;

            if (fileType.startsWith('image/')) {
                elemento = document.createElement('img');
                elemento.src = e.target.result;
                elemento.className = 'w-[300px] h-[200px] rounded';
            } else if (fileType.startsWith('video/')) {
                elemento = document.createElement('video');
                elemento.controls = true;
                elemento.className = 'w-full h-auto rounded';
                const source = document.createElement('source');
                source.src = e.target.result;
                source.type = fileType;
                elemento.appendChild(source);
            }

            previewBox.appendChild(elemento);
            previewContainer.classList.remove('hidden');
        };

        reader.readAsDataURL(file);
    }
</script>