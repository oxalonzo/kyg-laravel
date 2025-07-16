
@section('titulo')
    Dashboard
@endsection

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-10 lg:px-8 py-4 lg:py-7 sm:gap-16 bg-white grid grid-cols-2 sm:grid-cols-3 gap-5 place-items-center">

           <div class="bg-black text-white rounded-2xl shadow-md shadow-black w-[200px] sm:w-[200px] lg:w-[300px] h-[200px] sm:h-[200px] lg:h-[300px] flex flex-col justify-center items-center gap-4">

               <h2 class=" uppercase text-xl sm:text-xl lg:text-2xl font-Raleway font-bold tracking-wide ">Banners</h2>

               <a class="text-lg font-semibold tracking-wide hover:text-gray-300" href="{{ route('banner.index') }}">Ver</a>
               
                
           </div>

           <div class="bg-black text-white rounded-2xl shadow-md shadow-black w-[200px] sm:w-[200px] lg:w-[300px] h-[200px] sm:h-[200px]  lg:h-[300px] flex flex-col justify-center items-center gap-4">

               <h2 class=" uppercase text-xl sm:text-xl lg:text-2xl font-Raleway font-bold tracking-wide ">Informacion</h2>

               <a class="text-lg font-semibold tracking-wide hover:text-gray-300" href="{{ route('informacion.index') }}">Ver</a>
               
                
           </div>

            <div class="bg-black text-white rounded-2xl shadow-md shadow-black w-[200px] sm:w-[200px] lg:w-[300px] h-[200px] sm:h-[200px]  lg:h-[300px] flex flex-col justify-center items-center gap-4">

                <h2 class=" uppercase text-xl sm:text-xl lg:text-2xl font-Raleway font-bold tracking-wide ">Redes Sociales</h2>

                <a class="text-lg font-semibold tracking-wide hover:text-gray-300" href="{{ route('Social.index') }}">Ver</a>
               
                
           </div>


            <div class="bg-black text-white rounded-2xl shadow-md shadow-black w-[200px] sm:w-[200px] lg:w-[300px] h-[200px] sm:h-[200px]  lg:h-[300px] flex flex-col justify-center items-center gap-4">

               <h2 class=" uppercase text-xl sm:text-xl lg:text-2xl font-Raleway font-bold tracking-wide ">Historia</h2>

               <a class="text-lg font-semibold tracking-wide hover:text-gray-300" href="{{ route('historia.index') }}">Ver</a>
               
                
           </div>

           <div class="bg-black text-white rounded-2xl shadow-md shadow-black w-[200px] sm:w-[200px] lg:w-[300px] h-[200px] sm:h-[200px]  lg:h-[300px] flex flex-col justify-center items-center gap-4">

               <h2 class=" uppercase text-xl sm:text-xl lg:text-2xl font-Raleway font-bold tracking-wide ">Actividades</h2>

               <a class="text-lg font-semibold tracking-wide hover:text-gray-300" href="{{ route('actividades-admin.index') }}">Ver</a>
               
                
           </div>

            <div class="bg-black text-white rounded-2xl shadow-md shadow-black w-[200px] sm:w-[200px] lg:w-[300px] h-[200px] sm:h-[200px]  lg:h-[300px] flex flex-col justify-center items-center gap-4">

                <h2 class=" uppercase text-xl sm:text-xl lg:text-2xl font-Raleway font-bold tracking-wide ">Servicios</h2>

                <a class="text-lg font-semibold tracking-wide hover:text-gray-300" href="{{ route('servicios.index') }}">Ver</a>
               
                
           </div>
           
        </div>
    </div>
</x-app-layout>
