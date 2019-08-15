$(function () {

    // $('.navbar li a').click(function(e){
    //     e.preventDefault();
    //     $('thml, body').animate({
    //         scrollTop:$('#' + $(this).data('scroll')).offset().top - 100
    //     },1000)
    // });

    //
    $(window).scroll(function () {
        $('.bloc').each(function () {
            if ($(window).scrollTop() > $(this).offset().top) {
                var blocdID = ($(this).attr('id'));
                $('.navbar a').removeClass('active')
                $('.navbar li a[data-scroll="' + blocdID + '"]').addClass('active');
            }
        })
    })
    //navbar sticky
    $(window).on('scroll', function () {
        if ($(window).scrollTop()) {

            $('nav').addClass('sticky');
            $('.navbar-light .navbar-nav .nav-link ').addClass('stickylinks ');
            $('.navbar .navbar-brand  ').addClass('stickylinks-img ');

        } else {
            $('nav').removeClass('sticky');
            $('.navbar-light .navbar-nav .nav-link ').removeClass('stickylinks ');
            $('.navbar .navbar-brand ').removeClass('stickylinks-img  ');
        }

        if ($(window).scrollTop() > 300) {
            $('.to-top').fadeIn(500);
        } else {
            $('.to-top').fadeOut(500);
        }
    })

    $('.to-top').click(function () {
        $('body, html').animate({
            scrollTop: 0
        }, 1000)
    })

    new WOW().init();


    //company-slid
    $('#owl-products').owlCarousel({
        rtl: true,
        autoplay: true,
        loop: true,
        smartSpeed: 1000,
        margin: 10,
        nav: false,
        autoplayHoverPause: true,
        dots: false,
        dotsData: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // slider-about
    $('#slider-about').owlCarousel({
        rtl: true,
        autoplay: true,
        loop: true,
        smartSpeed: 1000,
        margin: 10,
        nav: true,
        dots: false,
        dotsData: false,
        // autoplayHoverPause:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });



$(document).ready(function(){
    $('#myRotator').bannerRotator({
        width: 1000,
        height: 400,
        cpanelPosition: 'center bottom',
        navButtons: 'large',
        navThumbs: true,
        tooltip: 'image',
        depth: 'auto',
        kbEffect: 'push',
        tooltip: 'none'


    });
});



})