<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo') - Importadora KYG</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!--faviicon-->
    <link rel="icon" href="{{ asset('img/logokyg.webp') }}" type="image/png">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&family=Roboto:wght@100..900&display=swap" rel="stylesheet">

</head>

<body class=" bg-transparent min-h-screen flex flex-col items-center scroll-smooth">


    <!-- Page Heading -->
    {{-- @isset($header)
                <header class="relative w-full h-screen border rounded-lg text-white overflow-hidden">
                   
                        {{ $header }}
                   
                </header>
            @endisset --}}


    <!-- Page Content -->
    <main class="w-full flex-1 px-0 py-10">
        {{ $slot }}
    </main>

    <!-- footer -->
    @include('layouts.footer')



    {{-- JavaScript para ocultar el preloader tras 2 segundos --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const toggle = document.getElementById('menuToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const closeBtn = document.getElementById('menuClose');

            toggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('-translate-x-full');
            });


            closeBtn.addEventListener('click', () => {
                mobileMenu.classList.add('-translate-x-full');
            });

        });


        const currentPath = window.location.pathname;

        if (currentPath === '/nosotros') {

            //para las frases 
            const frases = [
                "En K&G, transformamos el cuidado de tu vehículo en una experiencia confiable y sin complicaciones.",
                "En K&G, tu seguridad en la carretera comienza con productos de calidad y un servicio que responde.",
                "En K&G, nos movemos contigo: gomas, baterías, aceite y mantenimiento en un solo lugar.",
                "En K&G, cuidamos tu carro como si fuera nuestro, porque sabemos lo que significa para ti."
            ];

            let index = 0;

            const texto = document.getElementById('rotatingText')

            setInterval(() => {


                //oculta el texto suavemente 
                texto.classList.add('opacity-0');

                //espera y cambia el texto
                setTimeout(() => {
                    index = (index + 1) % frases.length;
                    texto.textContent = frases[index];
                    texto.classList.remove("opacity-0");
                }, 500);


            }, 4000);


            //para el 38 que aumente cada año
            const baseYear = 2024; // El año base (cuando el número es 38)
            const baseNumber = 38;

            const currentYear = new Date().getFullYear();
            const dynamicNumber = baseNumber + (currentYear - baseYear);

            document.getElementById('dynamicHeading').textContent = dynamicNumber;


            //para que aparezca el elemento cuando vaya por ahi en la pagina en la parte historia y foto

            document.addEventListener("DOMContentLoaded", () => {
                const target = document.getElementById("apareceScroll");

                const observer = new IntersectionObserver(
                    ([entry]) => {
                        if (entry.isIntersecting) {
                            target.classList.remove("opacity-0", "translate-y-10");
                            target.classList.add("opacity-100", "translate-y-0");
                        }
                    }, {
                        threshold: 0.4, // Aparece cuando el 20% del elemento es visible
                    }
                );

                if (target) {
                    observer.observe(target);
                }
            });

            //para que aparezca el elemento cuando vaya por ahi en la pagina en la parte de valores

            document.addEventListener("DOMContentLoaded", () => {
                const target = document.getElementById("apareceValores");

                const observer = new IntersectionObserver(
                    ([entry]) => {
                        if (entry.isIntersecting) {
                            target.classList.remove("opacity-0", "translate-y-10");
                            target.classList.add("opacity-100", "translate-y-0");
                        }
                    }, {
                        threshold: 0.5, // Aparece cuando el 20% del elemento es visible
                    }
                );

                if (target) {
                    observer.observe(target);
                }
            });


            //para el div de la filosofia bushido
             document.addEventListener("DOMContentLoaded", () => {
                const target = document.getElementById("aparecebushido");

                const observer = new IntersectionObserver(
                    ([entry]) => {
                        if (entry.isIntersecting) {
                            target.classList.remove("opacity-0", "translate-y-10");
                            target.classList.add("opacity-100", "translate-y-0");
                        }
                    }, {
                        threshold: 0.5, // Aparece cuando el 20% del elemento es visible
                    }
                );

                if (target) {
                    observer.observe(target);
                }
            });

            //para la rotacion de bushido depediendo la pantalla 
            function applyResponsiveStyles() {
    const elements = document.querySelectorAll('[data-lg-style]');

    elements.forEach(el => {
      if (window.innerWidth >= 1024) {
        el.style.cssText = el.getAttribute('data-lg-style');
      } else {
        el.style.cssText = 'writing-mode: horizontal-tb;';
      }
    });
  }

  applyResponsiveStyles();
  window.addEventListener('resize', applyResponsiveStyles);

        } //final del path de la pagina nosotros



    </script>




</body>

</html>
