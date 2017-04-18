

jQuery(document).ready(function ($) {
    var $size = 0;
    if (window.matchMedia("(min-width: 768px)").matches) {
        $size = 3;
    } else {
        $size = 1;
    }


    $('.slick-slider').slick({
        slidesToShow: $size,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,


    } );
});



