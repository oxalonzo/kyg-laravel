

const currentPath = window.location.pathname;

if (currentPath === '/servicio') {



    //showboxactiviti

     document.addEventListener("DOMContentLoaded", () => {
        const target = document.getElementById("services");

        

        const observe = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                   


                   
                    

                  
                    const service1 = document.getElementById("service1");
                    service1.classList.remove("opacity-0", "translate-x-1/2", "z-10");
                    service1.classList.add("opacity-100", "translate-x-0", "z-0");
                  

                     const infoService1 = document.getElementById("infoService1");
                     infoService1.classList.remove("opacity-0", "-translate-x-52");
                     infoService1.classList.add("opacity-100", "translate-x-0");



                     const service2 = document.getElementById("service2");
                    service2.classList.remove("opacity-0", "translate-x-1/2", "z-10");
                    service2.classList.add("opacity-100", "translate-x-0", "z-0");
                  

                     const infoService2 = document.getElementById("infoService2");
                     infoService2.classList.remove("opacity-0", "-translate-x-52");
                     infoService2.classList.add("opacity-100", "translate-x-0");


                     //Cards second fase with relantice
                    setTimeout(() => {
                       

                     const service3 = document.getElementById("service3");
                     service3.classList.remove("opacity-0", "translate-x-1/2", "z-10");
                     service3.classList.add("opacity-100", "translate-x-0", "z-0");
                  

                     const infoService3 = document.getElementById("infoService3");
                     infoService3.classList.remove("opacity-0", "-translate-x-52");
                     infoService3.classList.add("opacity-100", "translate-x-0");



                     const service4 = document.getElementById("service4");
                     service4.classList.remove("opacity-0", "translate-x-1/2", "z-10");
                     service4.classList.add("opacity-100", "translate-x-0", "z-0");
                  

                     const infoService4 = document.getElementById("infoService4");
                     infoService4.classList.remove("opacity-0", "-translate-x-52");
                     infoService4.classList.add("opacity-100", "translate-x-0");



                    }, 500);
                   

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


   document.addEventListener("DOMContentLoaded", () => {
    const showMoreBtn = document.getElementById("showMoreBtn");
    const showLessBtn = document.getElementById("showLessBtn");

    showMoreBtn.addEventListener("click", () => {
        for (let i = 5; i <= 8; i++) {
            const service = document.getElementById(`service${i}`);
            const info = document.getElementById(`infoService${i}`);

            if (service && info) {
                service.classList.remove("hidden");
                info.classList.remove("hidden");

                setTimeout(() => {
                    service.classList.remove("opacity-0", "translate-x-1/2", "z-10");
                    service.classList.add("opacity-100", "translate-x-0", "z-0");

                    info.classList.remove("opacity-0", "-translate-x-52");
                    info.classList.add("opacity-100", "translate-x-0");
                }, (i - 4) * 100);
            }
        }

        // Mostrar botón Ver menos y ocultar Ver más
        showMoreBtn.classList.add("hidden");
        showLessBtn.classList.remove("hidden");
    });

    showLessBtn.addEventListener("click", () => {
    for (let i = 5; i <= 8; i++) {
        const service = document.getElementById(`service${i}`);
        const info = document.getElementById(`infoService${i}`);

        if (service && info) {
            // Animación de salida
            setTimeout(() => {
                service.classList.remove("opacity-100", "translate-x-0", "z-0");
                service.classList.add("opacity-0", "translate-x-1/2", "z-10");

                info.classList.remove("opacity-100", "translate-x-0");
                info.classList.add("opacity-0", "-translate-x-52");
            }, (i - 4) * 100); // Animación escalonada

            // Ocultar después de animación (ajustar según tu duration-700 → 700ms)
            setTimeout(() => {
                service.classList.add("hidden");
                info.classList.add("hidden");
            }, 700 + (i - 4) * 100);
        }
    }

    // Mostrar botón Ver más y ocultar Ver menos después de la animación completa
    setTimeout(() => {
        showLessBtn.classList.add("hidden");
        showMoreBtn.classList.remove("hidden");
    }, 1000);
});



});







}