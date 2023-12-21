import jQuery from "jquery";
window.$ = jQuery;

import Swiper from "swiper";
import "swiper/css";

$(document).ready(() => {
    let menuStatus = false;

    //* Open Menu
    const openMenu = () => {
        setTimeout(() => {
            menuStatus = true;
        }, 500);


        $('body').css('overflow-y', 'hidden')

        $("#burger").addClass("burger-animation");

        if($(window).width() < 450){
            $(".overlay").css("width", "100%");
            $(".overlay").css("border-bottom-right-radius", "unset");
        }else{
            $("#burger-btn").css("left", "min(60%, 380px)");
            $(".overlay").css("width", "min(60%, 380px)");
        }


        $('#overlay-backdrop').css('display', 'block')

        setTimeout(() => {
            $(".overlay-list").css("display", "flex");
        }, 350);

        setTimeout(() => {
            $('#overlay-backdrop').css('background-color', '#00000040')
        }, 250)

    };

    //* Close Menu
    const closeMenu = () => {
        setTimeout(() => {
            menuStatus = false;
        }, 500);

        $('body').css('overflow-y', 'unset')

        $("#burger").removeClass("burger-animation");
        $("#burger-btn").css("left", "0");

        $(".overlay").css("width", "0");

        $('#overlay-backdrop').css('background-color', 'transparent')

        $(".overlay-list").css("display", "none");

        setTimeout(() => {
            $('#overlay-backdrop').css('display', 'none')
        }, 500)
    };

    const debounce = (func) => {
        var timer;
        return function (event) {
            if (timer) clearTimeout(timer);
            timer = setTimeout(func, 50, event);
        };
    };

    $("#burger-btn").click(() => {
        if (!menuStatus) {
            openMenu();
        } else {
            closeMenu();
        }
    });

    $(document).click(function (event) {
        if (
            menuStatus &&
            !$(event.target).closest(".overlay, #burger-btn").length
        ) {
            closeMenu();
        }
    });

    window.addEventListener(
        "resize",
        debounce(function (e) {
            if(menuStatus){
                closeMenu()
            }
        })
    );
});

const categorySwiper = new Swiper(".category-swiper", {
    breakpoints: {
        0: {
            spaceBetween: 20,
            slidesPerView: 1.5,
            centeredSlides: true,
        },
        576: {
            spaceBetween: 20,
            slidesPerView: 2,
            centeredSlides: true,
        },
        768: {
            spaceBetween: 25,
            slidesPerView: 2.5,
            centeredSlides: true,
        },
        992: {
            spaceBetween: 25,
            slidesPerView: 3,
            centeredSlides: false,
        },
        1200: {
            spaceBetween: 30,
            slidesPerView: 3.5,
            centeredSlides: false,
        },
        1400: {
            spaceBetween: 35,
            slidesPerView: 4,
            centeredSlides: false,
        },
    },
});

categorySwiper.on('beforeSlideChangeStart', ()=>{
    console.log(categorySwiper.activeIndex)
})

const newsSwiper = new Swiper('.news-swiper', {
    breakpoints: {
        0: {
            spaceBetween: 30,
            slidesPerView: 1,
        },
        576: {
            spaceBetween: 30,
            slidesPerView: 1.3,
        },
        768: {
            spaceBetween: 30,
            slidesPerView: 1.65,
        },
        992: {
            spaceBetween: 30,
            slidesPerView: 2.3,
        },
        1200: {
            spaceBetween: 40,
            slidesPerView: 2.65,
        },
        1400: {
            spaceBetween: 40,
            slidesPerView: 3,
        },
    },
})

// const addSlidePadding = (el, add) => {
//     if(add){
//         el.addClass('slidePadding')
//     }else{
//         el.removeClass('slidePadding')
//     }
// }

ScrollReveal().reveal("#welcome-reveal", {
    origin: "left",
    duration: 750,
    distance: "50px",
    easing: "cubic-bezier(.4,0,.5,1)",
});

ScrollReveal().reveal("#welcome-reveal > strong", { duration: 500, delay: 750 });

ScrollReveal().reveal("#category-reveal", {
    origin: "top",
    duration: 750,
    distance: "10px",
});

ScrollReveal().reveal("#about-image-reveal", {
    origin: "left",
    duration: 750,
    distance: "10px",
    mobile: false,
});

ScrollReveal().reveal("#about-reveal", {
    origin: "right",
    duration: 750,
    distance: "10px",
});

ScrollReveal().reveal("#news-reveal", {
    origin: "top",
    duration: 750,
    distance: "20px",
});

ScrollReveal().reveal("#contact-reveal", {
    origin: "top",
    duration: 750,
    scale: 0.5,
    distance: "20px",
});
