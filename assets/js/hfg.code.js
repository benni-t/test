$(document).ready(function() {
    $('.dropdown-nav').click(function() {
        if ($(this).next('ul').hasClass('active')) {
            $(this).next('ul').css('opacity', '0');
            $(this).next('ul').css('height', '');
            console.log("asdsad");
        } else {
            $(this).next('ul').css('opacity', '1');
            $(this).next('ul').height($(this).next('ul').children('.measuringWrapper').height());
        }
        $(this).next('ul').toggleClass('active');
    });

    $('.button-collapse').click(function() {
        if ($('.dropdown-nav-mobile').hasClass('active')) {
            $('.navbar-mobile').css('height', '');
        } else {
            $('.navbar-mobile').height($('.dropdown-nav-mobile').height() + $('.navbar-mobile').children('nav').height());
        }
        $('.dropdown-nav-mobile').toggleClass('active');
    });

    $('.owl-carousel').owlCarousel({
        center: true,
        items: 2,
        loop: true,
        dots: true,
        margin: 40,
        responsive: {
            600: {
                items: 3
            }
        }
    });

    $('.header1').css('padding-left', ($('.headerHead').outerWidth(true) - $('.headerHead').width()) / 2);
    $('.header2').css('left', ($('.headerHead').outerWidth(true) - $('.headerHead').width()) / 2);
    $('.brand-logo').css('padding-left', ($('.headerHead').outerWidth(true) - $('.headerHead').width()) / 2);

    $('.materialboxed').lightbox();
});


$(window).resize(function() {

    $('.header1').css('padding-left', ($('.headerHead').outerWidth(true) - $('.headerHead').width()) / 2);
    $('.header2').css('left', ($('.headerHead').outerWidth(true) - $('.headerHead').width()) / 2);
    $('.brand-logo').css('padding-left', ($('.headerHead').outerWidth(true) - $('.headerHead').width()) / 2);
});