window.$ = require('jquery');

window.Swiper = require('swiper')

window.ScrollReveal = require('scrollreveal')

window.Animate = require('animate.css')

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

    $("#burger-btn").click((e) => {

        e.preventDefault()
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

const navLinksAnimations = 'animate__animated animate__headShake animate__faster'

$('li.nav-link').on('mouseenter', function(){
    $(this).addClass(navLinksAnimations)
})

$('li.nav-link').on('mouseleave', function(){
    $(this).removeClass(navLinksAnimations)
})
