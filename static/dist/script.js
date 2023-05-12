const btop = document.querySelector(".backtotop");
window.addEventListener("scroll", () => {
    console.log(window.pageYOffset);
    if (window.pageYOffset >= 200) {
    btop.classList.add("show");
    } else {
    btop.classList.remove("show");
    }
});



const menu = document.querySelector(".toggle__menu");
const headernav = document.querySelector(".header__nav");
const malabo = document.querySelector(".joshuaulaga")

menu.addEventListener("click", () =>{
    menu.classList.toggle("open");
    headernav.classList.toggle("open");
    headernav.style=("transition: .5s ease")
    malabo.classList.toggle("blur");
})


const links = document.querySelectorAll(".links__item h4")
links.forEach((go) => {
    go.addEventListener("click", () => {
        go.nextElementSibling.classList.toggle("open");
        go.querySelector("i").classList.toggle("open");
    })
})



// documunetation

// const togglemenu = document.querySelector(".doc__toggle__menu");
// const navi = document.querySelector(".doc__nav ul");
// // const bg = document.querySelector(".joshuaulaga")

// togglemenu.addEventListener("click", () =>{
//     togglemenu.classList.toggle("open");
//     navi.classList.toggle("open");
//     navi.style=("transition: .5s ease")
//     // malabo.classList.toggle("show");
// })






// swiper

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    centeredSlides: true,
    loop: true,
    effect: 'coverflow',
    grabCursor: true,
    coverflowEffect: {
        rotate: 4,
        stretch: 10,
        depth: 70,
        modifier: 10,
        slideShadows: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination:{
        el:'.swiper-pagination',
        clickable: true,
    },
    breakpoints:{
        400:{
            slidesPerView:1,
        },
        1880:{
            slidesPerView:'2',
        }
    }

    });

