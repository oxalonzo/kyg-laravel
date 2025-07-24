

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
            threshold: 0.4, //wait for 40% of the page
        }
        );

        if (target) {
            observe.observe(target);
        }
    })


    //btns for show more services or less

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


//show the divs with the link your click
 document.addEventListener('DOMContentLoaded', () => {
  const buttons = document.querySelectorAll('[data-target]');
  
  buttons.forEach(button => {
    button.addEventListener('click', () => {
      const divId = button.getAttribute('data-target');
      const contents = document.querySelectorAll('[id^="div"]');
      contents.forEach(div => div.classList.add('hidden'));
      document.getElementById(divId).classList.remove('hidden');
    });
  });
});

//active the btn of category when you click

document.querySelectorAll('.category-btn').forEach(button => {
        button.addEventListener('click', function () {
            // Quitar clase activa a todos
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.classList.remove('border-2', 'border-[#f2cd01]');
                btn.classList.add('border', 'border-transparent');
            });

            // Activar el botón clickeado
            this.classList.remove('border', 'border-transparent');
            this.classList.add('border-2', 'border-[#f2cd01]');
        });
    });

//show tools

document.addEventListener("DOMContentLoaded", () => {
        const target = document.getElementById("productsServicesSection");

        const observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    // target.classList.remove("opacity-0", "translate-y-10");
                    // target.classList.add("opacity-100", "translate-y-0", "visible");


                     const tire =  document.getElementById("tire");
                     tire.classList.remove("opacity-0", "translate-y-10");
                     tire.classList.add("opacity-100", "translate-y-0");

                  
                    setTimeout(() => {
                     const accessory =  document.getElementById("accessory");
                        accessory.classList.remove("opacity-0", "translate-y-10");
                        accessory.classList.add("opacity-100", "translate-y-0");
                    }, 200);

                    setTimeout(() => {
                      const carup =  document.getElementById("carup");
                        carup.classList.remove("opacity-0", "translate-y-10");
                        carup.classList.add("opacity-100", "translate-y-0");
                    }, 400);

                    setTimeout(() => {
                      const oil =  document.getElementById("oil");
                         oil.classList.remove("opacity-0", "translate-y-10");
                         oil.classList.add("opacity-100", "translate-y-0");
                    }, 600);

                    

                    // Para que solo ocurra una vez:
                    observer.unobserve(target);
                }
            }, {
            threshold: 0.3
        }
        );

        if (target) {
            observer.observe(target);
        }
    });



    //show information about services that the admin can edit


document.addEventListener("DOMContentLoaded", () => {
   const targets = document.querySelectorAll(".contentInfoService");

const observer = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {

        const contentImginfo = entry.target.querySelectorAll(".contentImginfo");
        contentImginfo.forEach((el) => {
          el.classList.remove("opacity-0", "translate-y-10");
          el.classList.add("opacity-100", "translate-y-0");
        });

         setTimeout(() => {
             const contentDetinfo = entry.target.querySelectorAll(".contentDetinfo");
           contentDetinfo.forEach((el) => {
             el.classList.remove("opacity-0", "translate-x-10");
             el.classList.add("opacity-100", "translate-x-0");
           });
         }, 600);

          setTimeout(() => {
             const contentTitleinfo = entry.target.querySelectorAll(".contentTitleinfo");
           contentTitleinfo.forEach((el) => {
             el.classList.remove("opacity-0", "translate-x-10");
             el.classList.add("opacity-100", "translate-x-0");
           });
         }, 600);

         setTimeout(() => {
             const textInfo = entry.target.querySelectorAll(".textInfo");
           textInfo.forEach((el) => {
             el.classList.remove("opacity-0", "translate-y-10");
             el.classList.add("opacity-100", "translate-y-0");
           });
         }, 1100);

         setTimeout(() => {
             const listText = entry.target.querySelectorAll(".listText");
           listText.forEach((el) => {
             el.classList.remove("opacity-0", "translate-y-10");
             el.classList.add("opacity-100", "translate-y-0");
           });
         }, 1100);


        // Detener la observación si quieres que ocurra solo una vez
        observer.unobserve(entry.target);


      }
    });
  },
  { threshold: 0.3 }
);

     targets.forEach(target => observer.observe(target));

    });





//tips banner servicio view 

 document.addEventListener("DOMContentLoaded", () => {
        const target = document.getElementById("tips");

        

        const observe = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                   


                   
                    

                  
                    const tipTitle = document.querySelector(".tipTitle");
                    tipTitle.classList.remove("opacity-0", "translate-y-10");
                    tipTitle.classList.add("opacity-100", "translate-y-0");

                    const tip1 = document.querySelector(".tip1");
                    tip1.classList.remove("opacity-0", "translate-x-10");
                    tip1.classList.add("opacity-100", "translate-x-0");
                  



                     //Cards second fase with relantice
                    setTimeout(() => {
                      
                      const tip2 = document.querySelector(".tip2");
                    tip2.classList.remove("opacity-0", "translate-x-10");
                    tip2.classList.add("opacity-100", "translate-x-0");

                    }, 200);

                      //Cards second fase with relantice
                    setTimeout(() => {
                      
                      const tip3 = document.querySelector(".tip3");
                    tip3.classList.remove("opacity-0", "translate-x-10");
                    tip3.classList.add("opacity-100", "translate-x-0");

                    }, 400);

                      //Cards second fase with relantice
                    setTimeout(() => {
                      
                      const tip4 = document.querySelector(".tip4");
                    tip4.classList.remove("opacity-0", "translate-x-10");
                    tip4.classList.add("opacity-100", "translate-x-0");

                    }, 600);

                      //Cards second fase with relantice
                    setTimeout(() => {
                      
                      const tip5 = document.querySelector(".tip5");
                    tip5.classList.remove("opacity-0", "translate-x-10");
                    tip5.classList.add("opacity-100", "translate-x-0");

                    }, 800);

                      //Cards second fase with relantice
                    setTimeout(() => {
                      
                      const tip6 = document.querySelector(".tip6");
                    tip6.classList.remove("opacity-0", "translate-x-10");
                    tip6.classList.add("opacity-100", "translate-x-0");

                    }, 1000);

                      //Cards second fase with relantice
                    setTimeout(() => {
                      
                      const tip7 = document.querySelector(".tip7");
                    tip7.classList.remove("opacity-0", "translate-x-10");
                    tip7.classList.add("opacity-100", "translate-x-0");

                    }, 1200);

                      //Cards second fase with relantice
                    setTimeout(() => {
                      
                      const tip8 = document.querySelector(".tip8");
                    tip8.classList.remove("opacity-0", "translate-x-10");
                    tip8.classList.add("opacity-100", "translate-x-0");

                    }, 1400);

                      //Cards second fase with relantice
                    setTimeout(() => {
                      
                      const tip9 = document.querySelector(".tip9");
                    tip9.classList.remove("opacity-0", "translate-x-10");
                    tip9.classList.add("opacity-100", "translate-x-0");

                    }, 1600);

                      //Cards second fase with relantice
                    setTimeout(() => {
                      
                      const tip10 = document.querySelector(".tip10");
                    tip10.classList.remove("opacity-0", "translate-x-10");
                    tip10.classList.add("opacity-100", "translate-x-0");

                    }, 1800);
                   

                    // Para que solo ocurra una vez:
                    observe.unobserve(target);
                }
            }, {
            threshold: 0.4, //wait for 40% of the page
        }
        );

        if (target) {
            observe.observe(target);
        }
    })





































}