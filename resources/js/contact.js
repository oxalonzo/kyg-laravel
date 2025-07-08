
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


 //show the location about the place

 document.addEventListener("DOMContentLoaded", () => {
    const target = document.getElementById("contacto");

    if (!target) return;

    const observer = new IntersectionObserver(
        ([entry]) => {
            if (entry.isIntersecting) {
                const letters = document.querySelector(".img-location");



                observer.unobserve(target);
            }
        },
        {
            threshold: 0.3,
        }
    );

    observer.observe(target);
});


document.addEventListener("DOMContentLoaded", () => {
        const target = document.getElementById("contacto");

        const observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                   

                     const imgLocation = document.querySelector(".img-location");
                    imgLocation.classList.remove("opacity-0", "-translate-x-20");
                    imgLocation.classList.remove("opacity-100", "translate-x-0");

                     setTimeout(() => {

                    const titleCity = document.querySelector(".titleCity");
                    titleCity.classList.remove("opacity-0", "translate-y-20");
                    titleCity.classList.remove("opacity-100", "translate-y-0");

                    }, 200);

                     setTimeout(() => {

                    const titleStreet = document.querySelector(".titleStreet");
                    titleStreet.classList.remove("opacity-0", "translate-y-20");
                    titleStreet.classList.remove("opacity-100", "translate-y-0");

                    }, 200);

                     setTimeout(() => {

                    const titleNumber = document.querySelector(".titleNumber");
                    titleNumber.classList.remove("opacity-0", "translate-y-20");
                    titleNumber.classList.remove("opacity-100", "translate-y-0");

                    }, 200);

                    setTimeout(() => {

                    const infoCity = document.querySelector(".infoCity");
                    infoCity.classList.remove("opacity-0", "translate-x-20");
                    infoCity.classList.remove("opacity-100", "translate-y-0");

                    }, 600);

                    setTimeout(() => {

                    const infoStreet = document.querySelector(".infoStreet");
                    infoStreet.classList.remove("opacity-0", "translate-x-20");
                    infoStreet.classList.remove("opacity-100", "translate-y-0");

                    }, 600);

                    setTimeout(() => {

                    const infoNumber = document.querySelector(".infoNumber");
                    infoNumber.classList.remove("opacity-0", "translate-x-20");
                    infoNumber.classList.remove("opacity-100", "translate-y-0");

                    }, 600);


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
    


}