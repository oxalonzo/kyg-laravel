
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 lg:py-7 bg-white grid grid-cols-3 gap-5 place-items-center">

           <div class="bg-black text-white w-[300px] h-[300px] flex flex-col justify-center items-center gap-4">

               <h2 class=" uppercase text-2xl font-Raleway font-bold tracking-wide ">Banners</h2>

               <a class="text-lg font-semibold tracking-wide hover:text-[#f2cd01]" href="{{ route('banner.index') }}">ver</a>
               
                
           </div>

           <div class="bg-black text-white w-[300px] h-[300px] flex flex-col justify-center items-center gap-4">

               <h2 class=" uppercase text-2xl font-Raleway font-bold tracking-wide ">Informacion</h2>

               <a class="text-lg font-semibold tracking-wide hover:text-[#f2cd01]" href="{{ route('informacion.index') }}">ver</a>
               
                
           </div>

            <div class="bg-black text-white w-[300px] h-[300px] flex flex-col justify-center items-center gap-4">

                <h2 class=" uppercase text-2xl font-Raleway font-bold tracking-wide ">Redes Sociales</h2>

                <a class="text-lg font-semibold tracking-wide hover:text-[#f2cd01]" href="{{ route('Social.index') }}">ver</a>
               
                
           </div>


            <div class="bg-black text-white w-[300px] h-[300px] flex flex-col justify-center items-center gap-4">

               <h2 class=" uppercase text-2xl font-Raleway font-bold tracking-wide ">Historia</h2>

               <a class="text-lg font-semibold tracking-wide hover:text-[#f2cd01]" href="{{ route('historia.index') }}">ver</a>
               
                
           </div>

           <div class="bg-black text-white w-[300px] h-[300px] flex flex-col justify-center items-center gap-4">

               <h2 class=" uppercase text-2xl font-Raleway font-bold tracking-wide ">Actividades</h2>

               <a class="text-lg font-semibold tracking-wide hover:text-[#f2cd01]" href="{{ route('actividades-admin.index') }}">ver</a>
               
                
           </div>

            <div class="bg-black text-white w-[300px] h-[300px] flex flex-col justify-center items-center gap-4">

                <h2 class=" uppercase text-2xl font-Raleway font-bold tracking-wide ">Servicios</h2>

                <a class="text-lg font-semibold tracking-wide hover:text-[#f2cd01]" href="{{ route('servicios.index') }}">ver</a>
               
                
           </div>
           
        </div>
    </div>
</x-app-layout>
