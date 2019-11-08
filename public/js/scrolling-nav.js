$(document).ready(function () {
    //navbar magic
    $(window).scroll(function () {
        var scrollPos = $(window).scrollTop();

        if (scrollPos >= 50) {
            $('nav').removeClass('transparent z-depth-0 mt-1').addClass('white fixed-nav');
            $('a.nav-item').addClass('grey-text text-darken-2');
            $('a.login-btn').removeClass('btn-small').addClass('btn');

        } else {
            $('nav').removeClass('white fixed-nav simple-depth').addClass('transparent z-depth-0 mt-1');
            $('a.nav-item').removeClass('grey-text text-darken-2');
            $('a.login-btn').removeClass('btn').addClass('btn-small');
        }
    });
});