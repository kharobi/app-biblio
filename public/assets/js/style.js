$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        center:true,
        nav:true,
        autoplay: true, // Activer le défilement automatique
        autoplayTimeout: 2000,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        responsive:{
            0:{
                items:1,
            
            },
            600:{
                items:3,

            },
            1000:{
                items:5,
            }
        }
    })
})