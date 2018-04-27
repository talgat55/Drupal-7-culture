jQuery(document).ready(function () {
    "use strict";
/*
*  Main Slider
 */
    jQuery('.main-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        speed: 1000,
        prevArrow: jQuery('.slider-nav .slider-arrow-left'),
        nextArrow: jQuery('.slider-nav .slider-arrow-right')

    });


// end redy function
});