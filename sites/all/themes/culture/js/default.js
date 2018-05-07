jQuery(document).ready(function () {
    "use strict";
/*
*  Main Slider
 */
    jQuery('.main-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        arrows: false,
        speed: 1000

    });

    jQuery('.sldier-main-holder .slider-arrow-left').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find('.main-slider').slick('slickPrev');
    });

    jQuery('.sldier-main-holder .slider-arrow-right').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find('.main-slider').slick('slickNext');
    });
/*
*  Afisha carousel
 */
    jQuery('.afisha-carousel').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        arrows: false,
        speed: 1000

    });

    jQuery('.afisha-carousel-holder .slider-arrow-left').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find('.afisha-carousel').slick('slickPrev');
    });

    jQuery('.afisha-carousel-holder .slider-arrow-right').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find('.afisha-carousel').slick('slickNext');
    });

/*
    jQuery('a').click(function (e) {
        e.preventDefault();
    });*/
    /*
    * Lightbox for gallery
     */
    jQuery('.gallery-lists-single').lightGallery({
        download: false,
        selector: '.gallery-col-md-single a',
        thumbnail: true,
        exthumbimage: false
    });



    InitFitRows();
    InitFilterRows();

// end redy function
});
/*
*  Culture Details  Rows
 */
function InitFitRows(){
    "use strict";

    if(jQuery('.culture-detail-row').length){


        var $container = jQuery('.culture-detail-row');
        $container.imagesLoaded(function () {
            $container.slideDown(1000).isotope({
                itemSelector: '.culture-detail-item',
                layoutMode: 'masonry'
            });
        });

    }
}

//------------------
//    Filterable Portfolio
//-------------------
function InitFilterRows(){
    "use strict";

    jQuery('.list-terms-culture-details li').click(function(){
       // var $this = jQuery(this).parent('li');
        var $this = jQuery(this);
        if ( $this.hasClass('current') ) {
            return;
        }

        var $optionSet = $this.parents('.list-terms-culture-details');
        $optionSet.find('.current').removeClass('current');
        $this.addClass('current');

        var selector = jQuery(this).attr('data-filter');
        jQuery('.culture-detail-row').isotope({ filter: selector });


        return false;
    });
}