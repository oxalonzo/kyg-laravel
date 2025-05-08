
@section('titulo')
    Serviciós
@endsection


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('servicios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("estoy en el servicios!") }}


                    {{-- <form action="{{ route('') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label>Título:</label>
                        <input type="text" name="titulo" required><br>
                    
                        <label>Descripción:</label>
                        <textarea name="descripcion" required></textarea><br>
                    
                        <label>Lista (una línea por ítem):</label>
                        <textarea name="list" required placeholder="Item 1&#10;Item 2&#10;Item 3"></textarea><br>
                    
                        <label>Imagen:</label>
                        <input type="file" name="imagen" accept="image/*"><br>
                    
                        <button type="submit">Guardar</button>
                    </form> --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
