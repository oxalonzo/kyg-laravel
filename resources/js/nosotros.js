
const currentPath = window.location.pathname;

if (currentPath === '/nosotros') {

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
                    target.classList.add("opacity-100", "translate-y-0", "visible");



                    // 👉 Agrega aquí las animaciones manualmente al momento de entrar
                    document.getElementById("linea1").classList.add("lg:animate-expand-h1");
                    setTimeout(() => {
                        document.getElementById("linea2").classList.add("lg:animate-expand-h2");
                    }, 800);

                    setTimeout(() => {
                        document.getElementById("linea3").classList.add("lg:animate-expand-h3");
                    }, 1600);

                    setTimeout(() => {
                        document.getElementById("linea4").classList.add("lg:animate-expand-h4");
                    }, 2400);

                    setTimeout(() => {
                        document.getElementById("linea5").classList.add("lg:animate-expand-h5");
                    }, 3200);

                    // Para que solo ocurra una vez:
                    observer.unobserve(target);
                }
            }, {
            threshold: 0.4
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


                    document.getElementById("linea6").classList.add("lg:animate-expand-h6");


                    // Para que solo ocurra una vez:
                    observer.unobserve(target);
                }
            }, {
            threshold: 0.3, // Aparece cuando el 20% del elemento es visible
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

    //el caroousel de nuesstra historia

    document.addEventListener("DOMContentLoaded", () => {
        const carousel = document.getElementById('carousel');
        let scrollPosition = 0;
    
        window.moveCarousel = function(direction) {
            const itemWidth = carousel.children[0].offsetWidth + 24;
            scrollPosition += direction * itemWidth;
    
            const maxScroll = (carousel.children.length - 1) * itemWidth;
            scrollPosition = Math.max(0, Math.min(scrollPosition, maxScroll));
    
            carousel.style.transform = `translateX(-${scrollPosition}px)`;
        }
    });
    


}