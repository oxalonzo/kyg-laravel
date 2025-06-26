
 <footer class="relative lg:h-[500px] h-[400px] bg-black w-full shadow-inner py-4 text-center text-sm text-white flex flex-col justify-center items-center overflow-hidden">

  <!-- Marca de agua -->
  <div class="absolute lg:top-[200px] top-[130px] lg:left-1/2 left-[45%] -translate-x-1/2 -translate-y-1/2 flex items-center  opacity-20 z-0">
    <p class="mr-2 text-[100px] sm:text-[160px] lg:text-[300px] font-bold">K&amp;G</p>
    <img src="img/logoblanco.png" alt="Logo de K&G" class=" w-[100px] sm:w-[200px] h-auto">
  </div>




  <!-- Contenido frontal -->
  <div class="relative z-10 bg-[#0A0A0A] text-[#919191] lg:w-2/3 w-[80%]  h-[234px] lg:translate-y-[96px] translate-y-[75px] rounded-lg flex flex-col items-center shadow-[0_-35px_40px_rgba(0,0,0,1)]">

    <div class=" flex justify-end mb-3 p-3">
       {{-- icono login --}}
        <a href="/login">
            <svg class=" w-7 lg:w-8 h-7 lg:h-8 text-white font-bold" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        </a>
    </div>

    <div class="mb-3 p-3 border-b-2 border-[#919191] w-[95%] border-opacity-30">
      <ul class="flex justify-around items-center">
        <li class="cursor-pointer"><a href="{{ route('home') }}" class=" font-Raleway text-white font-bold text-[11px] sm:text-[14px] lg:text-[17px]">Home</a></li>
        <li class="cursor-pointer"><a href="{{ route('nosotros') }}" class=" font-Raleway text-white font-bold text-[11px] sm:text-[14px] lg:text-[17px]">Nosotros</a></li>
        <li class="cursor-pointer"><a href="{{ route('actividades') }}" class=" font-Raleway text-white font-bold text-[11px] sm:text-[14px] lg:text-[17px]">Actividades</a></li>
        <li class="cursor-pointer"><a href="{{ route('servicio') }}" class=" font-Raleway text-white font-bold text-[11px] sm:text-[14px] lg:text-[17px]">Servicios</a></li>
        <li class="cursor-pointer"><a href="{{ route('politicas') }}" class=" font-Raleway text-white font-bold text-[11px] sm:text-[14px] lg:text-[17px]">Políticas</a></li>
        <li class="cursor-pointer"><a href="{{ route('contacto') }}" class=" font-Raleway text-white font-bold text-[11px] sm:text-[14px] lg:text-[17px]">Contacto</a></li>
      </ul>
    </div>

    <div class="p-5 ">
      <ul class="flex justify-center items-center gap-[80px]">

        <li>
          <a href="https://www.facebook.com/importadorakyg" target="_blank">
             <i class="fa-brands fa-facebook-f text-[20px] sm:text-[19px] lg:text-[30px] text-white font-bold"></i>
          </a>
        </li>

        <li>
          <a href="https://www.instagram.com/kygrd/" target="_blank">
           <i class="fa-brands fa-instagram text-[20px] sm:text-[19px] lg:text-[30px] text-white font-bold"></i>
          </a>
        </li>

        <li>
          <a href="https://www.linkedin.com/company/importadora-k-g/" target="_blank">
             <i class="fa-brands fa-linkedin-in text-[20px] sm:text-[19px] lg:text-[30px] text-white font-bold"></i>
          </a>
        </li>

      </ul>
  </div>

  <div class=" pb-2">
     <p class=" text-[13px] sm:text-[14px]">Importadora <span class="text-[#f2cd01]">KYG</span> SAS  &copy; {{ date('Y') }}. Derechos Reservados</p>
  </div>



  </div>

  
</footer>


       {{-- <p>Importadora KYG SAS  &copy; {{ date('Y') }}. Derechos Reservados</p> --}}