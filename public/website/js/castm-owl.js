$(function(){

   // owl slid broject
    $('#Category').owlCarousel({
        rtl:true,
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:5
            }
        }
    });
   // owl slid broject
    $('#Category-2').owlCarousel({
        // rtl:true,
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    $('#academy').owlCarousel({
        // rtl:true,
        smartSpeed: 800,
        dots: false,
        items: 1,
        loop: true,
        center: true,
        // autoplay:true,
        margin: 10,
        URLhashListener: true,
        autoplayHoverPause: true,
        startPosition: 'URLHash'
    });
 

   
})