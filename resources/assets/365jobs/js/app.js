import jQuery from "jquery";
window.$ = jQuery;

import Swiper from "swiper";
import "swiper/css";

$(document).ready(() => {
    let menuStatus = false;

    //* Open Menu
    const openMenu = () => {
        $("#burger").addClass("burger-animation");
        $("#burger-btn").css("left", "min(60%, 380px)");

        $(".overlay").css("width", "min(60%, 380px)");

        $('#overlay-backdrop').css('display', 'block')

        setTimeout(() => {
            $(".overlay-list").css("display", "flex");
        }, 350);

        setTimeout(() => {
            $('#overlay-backdrop').css('background-color', '#00000040')
        }, 250)

        menuStatus = true;
    };

    //* Close Menu
    const closeMenu = () => {
        $("#burger").removeClass("burger-animation");
        $("#burger-btn").css("left", "0");

        $(".overlay").css("width", "0");

        $('#overlay-backdrop').css('background-color', 'transparent')

        $(".overlay-list").css("display", "none");

        setTimeout(() => {
            $('#overlay-backdrop').css('display', 'none')
        }, 500)

        menuStatus = false;
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
            if ($(window).width() > 991) {
                closeMenu();
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

const newsSwiper = new Swiper('.news-swiper', {
    slidesPerView: 3,
    spaceBetween: 40,
})

// const addSlidePadding = (el, add) => {
//     if(add){
//         el.addClass('slidePadding')
//     }else{
//         el.removeClass('slidePadding')
//     }
// }

// categorySwiper.on('slideChange', function () {
//     const idk = $('.category-swiper > .swiper-wrapper > .swiper-slide:nth-child(even)')
//     console.log(idk);
// });

ScrollReveal().reveal("#welcome-reveal", {
    origin: "left",
    duration: 750,
    distance: "50px",
    easing: "cubic-bezier(.4,0,.5,1)",
});

ScrollReveal().reveal("#welcome-span-reveal", { duration: 500, delay: 750 });

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
