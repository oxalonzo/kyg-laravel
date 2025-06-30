
const currentPath = window.location.pathname;

if (currentPath === '/politicas') {


    //menuburguer

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



    //showboxspolitics

    document.addEventListener("DOMContentLoaded", () => {
        const target = document.getElementById("sectionpolitic");

        const observe = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    target.classList.remove("opacity-0", "translate-x-10");
                    target.classList.add("opacity-100", "translate-x-0");

                    const principalbox = document.getElementById("principalbox");
                    principalbox.classList.remove("opacity-0", "-translate-x-10");
                    principalbox.classList.add("opacity-100", "translate-x-0");

                    // 👉 Card 1
                    const box1 = document.getElementById("box1");
                    box1.classList.remove("opacity-0", "translate-x-10");
                    box1.classList.add("opacity-100", "translate-x-0");

                    // 👉 Card 2
                    setTimeout(() => {
                        const box2 = document.getElementById("box2");
                        box2.classList.remove("opacity-0", "translate-x-10");
                        box2.classList.add("opacity-100", "translate-x-0");
                    }, 500);

                    // 👉 Card 3
                    setTimeout(() => {
                        const box3 = document.getElementById("box3");
                        box3.classList.remove("opacity-0", "translate-x-10");
                        box3.classList.add("opacity-100", "translate-x-0");
                    }, 1000);



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



}