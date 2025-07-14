const currentPath = window.location.pathname;

if (currentPath === '/actividades') {


    //letters of banner
    const frases = [

        "Aventura",
        "Explorar",
        "Descubrir",
        
    ];

    let index = 0;

    const texto = document.getElementById('rotatingLetters')

    setInterval(() => {


        //oculta el texto suavemente 
        texto.classList.add("opacity-0", "translate-y-10");

        //espera y cambia el texto
        setTimeout(() => {
            index = (index + 1) % frases.length;
            texto.textContent = frases[index];
            texto.classList.remove("opacity-0", "translate-y-10");
        }, 500);


    }, 3000);

     //showboxactiviti

     document.addEventListener("DOMContentLoaded", () => {
        const target = document.querySelector(".actividades");

        

        const observe = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    target.classList.remove("opacity-0", "translate-x-10");
                    target.classList.add("opacity-100", "translate-x-0");


                    const contentImage = document.querySelectorAll(".contentImage");
                    contentImage.forEach((contentImage) => {
                        contentImage.classList.remove("opacity-0", "-translate-x-10");
                        contentImage.classList.add("opacity-100", "translate-x-0");
                    });
                    

                    // 👉 Card 1
                    const titleActiviti = document.querySelectorAll(".titleActiviti");
                    
                    titleActiviti.forEach((titleActiviti) => {
                        titleActiviti.classList.remove("opacity-0", "translate-y-10");
                        titleActiviti.classList.add("opacity-100", "translate-y-0");
                    });
                   
                    // 👉 Card 2
                    setTimeout(() => {
                        const paragraphActiviti = document.querySelectorAll(".paragraphActiviti");

                        paragraphActiviti.forEach((paragraphActiviti) => {
                            paragraphActiviti.classList.remove("opacity-0", "translate-y-10");
                            paragraphActiviti.classList.add("opacity-100", "translate-y-0");
                        });

                    }, 500);

                    // 👉 Card 3
                    setTimeout(() => {
                        const linkActiviti = document.querySelectorAll(".linkActiviti");

                        linkActiviti.forEach((linkActiviti) => {
                            linkActiviti.classList.remove("opacity-0", "translate-x-10");
                            linkActiviti.classList.add("opacity-100", "translate-x-0");
                        });

                    }, 1000);

                    //shadow of banner
                    setTimeout(() => {
                        const shadow = document.querySelectorAll(".shadow");
                       

                        shadow.forEach((shadow) => {
                            shadow.classList.remove("opacity-1", "w-full");
                            shadow.classList.add("opacity-1", "w-0");
                        });
                    }, 500)


                    // Para que solo ocurra una vez:
                    observe.unobserve(target);
                }
            }, {
            threshold: 0.4,
        }
        );

        if (target) {
            observe.observe(target);
        }
    })

    //carousel init Swiper init

    document.addEventListener('DOMContentLoaded', function () {
        const carouselContainers = document.querySelectorAll('.contentImage');

        carouselContainers.forEach((carouselContainer, index) => {
            const swiperElement = carouselContainer.querySelector('.mySwiper');

            const swiper = new Swiper(swiperElement, {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                effect: "fade",
                fadeEffect: {
                    crossFade: true
                },
            });

            let isMouseInside = false;
            let isVideoPlaying = false;

            const checkAutoplay = () => {
                if (isMouseInside || isVideoPlaying) {
                    swiper.autoplay.stop();
                } else {
                    swiper.autoplay.start();
                }
            };

            // 🖱️ Mouse entra/sale
            carouselContainer.addEventListener('mouseenter', () => {
                isMouseInside = true;
                checkAutoplay();
            });

            carouselContainer.addEventListener('mouseleave', () => {
                isMouseInside = false;
                checkAutoplay();
            });

            // 🎥 Manejar eventos de videos
            const videos = carouselContainer.querySelectorAll('video');

            videos.forEach(video => {
                video.addEventListener('play', () => {
                    isVideoPlaying = true;
                    checkAutoplay();
                });

                video.addEventListener('pause', () => {
                    isVideoPlaying = false;
                    checkAutoplay();
                });

                video.addEventListener('ended', () => {
                    isVideoPlaying = false;
                    checkAutoplay();
                });
            });
        });
    });

}