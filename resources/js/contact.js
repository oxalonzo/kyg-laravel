
const currentPath = window.location.pathname;

if (currentPath === '/contacto') {

   
    //show the letter with the relantice between the letter

 document.addEventListener("DOMContentLoaded", () => {
    const target = document.getElementById("contentTextcontac");

    if (!target) return;

    const observer = new IntersectionObserver(
        ([entry]) => {
            if (entry.isIntersecting) {
                const letters = document.querySelectorAll("#contentTextcontac span");

                // Animar la primera frase
                letters.forEach((letter, i) => {
                    setTimeout(() => {
                        letter.classList.remove("opacity-0", "translate-y-10");
                        letter.classList.add("opacity-100", "translate-y-0");
                    }, i * 50);
                });

                // Tiempo total de la animación de la primera frase
                const totalDelay = letters.length * 50 + 500; // +500ms buffer

                // Animar la segunda frase después del retraso
                setTimeout(() => {
                    const secondLetters = document.querySelectorAll("#secondText span");
                    secondLetters.forEach((letter, i) => {
                        setTimeout(() => {
                            letter.classList.remove("opacity-0", "translate-y-10");
                            letter.classList.add("opacity-100", "translate-y-0");
                        }, i * 50);
                    });
                }, totalDelay);


                 setTimeout(() => {
                    const card1 = document.querySelector("#card1");
                        card1.classList.remove("opacity-0", "translate-y-10");
                    card1.classList.add("opacity-100", "translate-y-0");

                    const card2 = document.querySelector("#card2");
                        card2.classList.remove("opacity-0", "translate-y-10");
                    card2.classList.add("opacity-100", "translate-y-0");

                    const card3 = document.querySelector("#card3");
                        card3.classList.remove("opacity-0", "translate-y-10");
                    card3.classList.add("opacity-100", "translate-y-0");
                    }, 1000);



                observer.unobserve(target);
            }
        },
        {
            threshold: 0.3,
        }
    );

    observer.observe(target);
});



    //carousel of branches

   document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".slide");
    let currentIndex = 0;

    const resetAnimationClasses = (slide) => {
        const img = slide.querySelector(".img-location");
        const city = slide.querySelector(".titleCity");
        const street = slide.querySelector(".titleStreet");
        const number = slide.querySelector(".titleNumber");
        const infoCity = slide.querySelector(".infoCity");
        const infoStreet = slide.querySelector(".infoStreet");
        const infoNumber = slide.querySelector(".infoNumber");
        const shadowblack = slide.querySelector(".shadowblack");

        img.classList.add("opacity-0", "-translate-x-20");
        img.classList.remove("opacity-100", "translate-x-0");

        shadowblack.classList.remove("w-0");
        shadowblack.classList.add("w-full");

        [city, street, number].forEach(el => {
            el.classList.add("opacity-0", "translate-y-20");
            el.classList.remove("opacity-100", "translate-y-0");
        });

        [infoCity, infoStreet, infoNumber].forEach(el => {
            el.classList.add("opacity-0", "translate-x-20");
            el.classList.remove("opacity-100", "translate-y-0");
        });
    };

    const animateSlide = (slide) => {
        const img = slide.querySelector(".img-location");
        const city = slide.querySelector(".titleCity");
        const street = slide.querySelector(".titleStreet");
        const number = slide.querySelector(".titleNumber");
        const infoCity = slide.querySelector(".infoCity");
        const infoStreet = slide.querySelector(".infoStreet");
        const infoNumber = slide.querySelector(".infoNumber");
        const shadowblack = slide.querySelector(".shadowblack");

        setTimeout(() => {
            img.classList.remove("opacity-0", "-translate-x-20");
            img.classList.add("opacity-100", "translate-x-0");
        }, 100);

        setTimeout(() => {
            shadowblack.classList.remove("w-full");
            shadowblack.classList.add("w-0");
        }, 300);

        setTimeout(() => {
            city.classList.remove("opacity-0", "translate-y-20");
            city.classList.add("opacity-100", "translate-y-0");
        }, 500);

        setTimeout(() => {
            street.classList.remove("opacity-0", "translate-y-20");
            street.classList.add("opacity-100", "translate-y-0");
        }, 600);

        setTimeout(() => {
            number.classList.remove("opacity-0", "translate-y-20");
            number.classList.add("opacity-100", "translate-y-0");
        }, 700);

        setTimeout(() => {
            infoCity.classList.remove("opacity-0", "translate-x-20");
            infoCity.classList.add("opacity-100", "translate-y-0");
        }, 900);

        setTimeout(() => {
            infoStreet.classList.remove("opacity-0", "translate-x-20");
            infoStreet.classList.add("opacity-100", "translate-y-0");
        }, 1000);

        setTimeout(() => {
            infoNumber.classList.remove("opacity-0", "translate-x-20");
            infoNumber.classList.add("opacity-100", "translate-y-0");
        }, 1100);
    };

    const showSlide = (index) => {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.remove("hidden");
                resetAnimationClasses(slide); // Reiniciar clases de animación
                animateSlide(slide);         // Ejecutar animación
            } else {
                slide.classList.add("hidden");
                resetAnimationClasses(slide);
            }
        });
    };

    showSlide(currentIndex);

    setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }, 7000);
});


//show the form of contact


  document.getElementById('btn-contacto').addEventListener('click', function () {

        const card1 = document.querySelector('.card1');
        card1.classList.remove('translate-x-[0px]');
        card1.classList.add('translate-x-[-251px]');

        const card2 = document.querySelector('.card2');
        card2.classList.remove('translate-x-[0px]');
        card2.classList.add('translate-x-[253px]');

    });


    


}