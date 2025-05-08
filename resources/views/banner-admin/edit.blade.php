
@section('titulo')
    Editar Banner
@endsection


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Banner') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("estoy en el editar banner!") }}
                </div> --}}

                <div class="container">
                    <h2>Crear nuevo Banner</h2>
                
                    @if(session('success'))
                        <div style="color: green;">{{ session('success') }}</div>
                    @endif
                
                    @if ($errors->any())
                        <div style="color: red;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                    <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <div>
                            <label for="imagen_banner">Imagen del banner:</label><br>
                            <input type="file" name="imagen_banner" required>
                        </div>
                
                        <br>
                
                        <button type="submit">Guardar Banner</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
