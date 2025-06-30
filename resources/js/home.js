

const currentPath = window.location.pathname;

if (currentPath === '/') {




    document.addEventListener("DOMContentLoaded", () => {
        const preloader = document.getElementById("preloader");
        const mainContent = document.getElementById("mainContent");

        setTimeout(() => {
            preloader.classList.add("opacity-0");
            setTimeout(() => {
                preloader.style.display = "none";
                mainContent.classList.remove("opacity-0");
            }, 1000);
        }, 2000); // 2 seg exactos
    });


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


    //barra de progreso 

    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.banner-slide');
        const progressFills = document.querySelectorAll('.progress-fill');
        const duration = 5000; // 🔁 Aquí defines los 10 segundos
        let current = 0;

        function resetProgressBars() {
            progressFills.forEach((fill) => {
                fill.style.width = '0%';
                fill.style.transition = 'none';
            });
        }

        function animateProgressBar(index) {
            const fill = progressFills[index];
            fill.style.transition = `width ${duration}ms linear`; // ⏱ Aquí también
            fill.style.width = '100%';
        }

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.remove('opacity-0', 'invisible');
                    slide.classList.add('opacity-100', 'visible');
                } else {
                    slide.classList.remove('opacity-100', 'visible');
                    slide.classList.add('opacity-0', 'invisible');
                }
            });

            resetProgressBars();
            animateProgressBar(index);
        }

        // Inicializar
        showSlide(current);

        // Loop automático cada 10 segundos
        setInterval(() => {
            current = (current + 1) % slides.length;
            showSlide(current);
        }, duration);
    });


    // js de carousel de centros de servicios 

    let currentslide = 0;
    const slides = document.querySelectorAll('#slider .slide');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('opacity-100', i === index);
            slide.classList.toggle('z-10', i === index);
            slide.classList.toggle('opacity-0', i !== index);
            slide.classList.toggle('z-0', i !== index);
        });
    }

    setInterval(() => {
        currentslide = (currentslide + 1) % totalSlides;
        showSlide(currentslide);
    }, 6000); // cambia cada 6 segundos


    //show service center

    document.addEventListener("DOMContentLoaded", () => {
        const target = document.getElementById("showServiceCenter");

        const observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    target.classList.remove("opacity-0", "translate-y-10");
                    target.classList.add("opacity-100", "translate-y-0");
                }
            }, {
            threshold: 0.4, // show with the 40% of the element visible
        }
        );

        if (target) {
            observer.observe(target);
        }
    });


    //show branches

    document.addEventListener("DOMContentLoaded", () => {
        const target = document.getElementById("showBranches");

        const observe = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    target.classList.remove("opacity-0", "translate-y-10");
                    target.classList.add("opacity-100", "translate-y-0");
                }
            }, {
                threshold: 0.2, 
            }
        );

        if (target) {
            observe.observe(target);
        }
    })

    //show cards of section our process

    document.addEventListener("DOMContentLoaded", () => {
        const target = document.getElementById("showCards");

        const observe = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    target.classList.remove("opacity-0", "translate-y-10");
                    target.classList.add("opacity-100", "translate-y-0");

                       // 👉 Card 1
                const card1 = document.getElementById("card1");
                card1.classList.remove("opacity-0", "translate-y-10");
                card1.classList.add("opacity-100", "translate-y-0");

                // 👉 Card 2
                setTimeout(() => {
                    const card2 = document.getElementById("card2");
                    card2.classList.remove("opacity-0", "translate-y-10");
                    card2.classList.add("opacity-100", "translate-y-0");
                }, 500);

                // 👉 Card 3
                setTimeout(() => {
                    const card3 = document.getElementById("card3");
                    card3.classList.remove("opacity-0", "translate-y-10");
                    card3.classList.add("opacity-100", "translate-y-0");
                }, 1000);

  
                      // Para que solo ocurra una vez:
                      observe.unobserve(target);
                }
            }, {
                threshold: 0.2, 
            }
        );

        if (target) {
            observe.observe(target);
        }
    })

    //hear channge the color when click

    document.addEventListener('DOMContentLoaded', () => {
        const heart = document.querySelectorAll("#heart");

        heart.forEach((heart) => {
            heart.addEventListener('click', () => {
            
                heart.classList.toggle('text-red-500');
            })
        });
       

        




    })


}