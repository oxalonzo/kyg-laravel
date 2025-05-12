@section('titulo')
    Redes Sociales
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Redes Sociales') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center h-full">

        <div class="md:w-3/4 p-10 bg-[url(https://i.pinimg.com/736x/bc/5a/98/bc5a986fae1696fd97ebb08f33493d89.jpg)] bg-no-repeat bg-cover brightness-90 rounded-lg shadow-xl mt-10 md:mt-0 h-full ">

            <div class="flex justify-end items-center mb-4">
                <x-link :href="route('Social.create')"
                    class=" border border-yellow-300 p-3 text-xs text-gray-900 dark:text-gray-900 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none bg-yellow-300 hover:bg-transparent">
                    Crear nueva Publicación
                </x-link>
            </div>


            @if (session('success'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
                    class=" rounded-lg bg-green-100 border border-green-400 text-green-700 px-4 py-3 shadow-md"
                    role="alert">
                    <p class="font-semibold">{{ session('success') }}</p>
                </div>
            @endif


                @if ($publicaciones->isEmpty())
                    <p class="mt-4  text-center text-gray-600">No hay publicaciones aún. Por favor cree una información.</p>
                @else

                <div class="container flex justify-center items-center flex-col sm:flex-col md:flex-col lg:grid lg:grid-cols-2 p-5 h-full gap-6">
                    @foreach ($publicaciones as $publicacion)

                    
                        <div
                            class="w-full bg-white/30 border border-white/40 backdrop-blur-xl p-6 rounded-lg shadow-md shadow-gray-600 flex flex-col lg:flex-row gap-4">
                            <!-- Imagen o video (65%) -->
                            <div class="w-full lg:w-[65%] flex justify-center items-center">
                                @php
                                    $extension = pathinfo($publicacion->imagen_social, PATHINFO_EXTENSION);
                                    $isVideo = in_array($extension, ['mp4', 'webm', 'ogg']);
                                @endphp

                                @if ($isVideo)
                                    <video controls
                                        class="w-full h-[250px] lg:h-[300px] rounded-lg shadow-md object-cover">
                                        <source src="{{ asset('storage/social_img/' . $publicacion->imagen_social) }}"
                                            type="video/{{ $extension }}">
                                        Tu navegador no soporta la reproducción de video.
                                    </video>
                                @else
                                    <img src="{{ asset('storage/social_img/' . $publicacion->imagen_social) }}"
                                        alt="Imagen de la publicacion"
                                        class="w-full h-[250px] lg:h-[300px] rounded-lg shadow-md object-cover">
                                @endif
                            </div>

                            <!-- Información (35%) -->
                            <div class="w-full lg:w-[35%] flex flex-col justify-between">
                                <!-- enlace -->
                                <a href="{{ $publicacion->enlace_social }}" target="_blank" class="text-2xl font-bold text-white hover:text-yellow-300 mb-2">Ver publicacion</a>

                                <!-- Descripción -->
                                <p class="text-white mb-4 text-sm leading-relaxed">
                                    {{ $publicacion->descripcion_social }}</p>

                                <!-- Acciones -->
                                <div class="flex space-x-3 flex-col gap-2">
                                    <!-- Botón de editar -->
                                    <a href="{{ route('Social.edit', $publicacion->id) }}"
                                        class="inline-flex items-center bg-blue-500 w-full justify-center text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300 text-sm">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.232 5.232l3.536 3.536M9 13l6.536-6.536a2 2 0 012.828 0l.172.172a2 2 0 010 2.828L12 17H9v-3z" />
                                        </svg>
                                        Editar
                                    </a>

                                    <!-- Botón de eliminar -->
                                    <form action="{{ route('Social.destroy', $publicacion->id) }}" method="POST"
                                        class="!ml-0"
                                        onsubmit="return confirm('¿Estás seguro de que quieres eliminar esta Publicación?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center bg-red-500 w-full justify-center !ml-0 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300 text-sm">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach


                @endif


            </div>

            <div class=" mt-6">
                {{ $publicaciones->links() }}
            </div>



        </div>

    </div>
</x-app-layout>
