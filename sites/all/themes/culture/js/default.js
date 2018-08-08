
(function($) {
    Drupal.behaviors.mybehavior = {
        attach: function (context, settings) {

            jQuery( ".page-culturedetails .bef-select-as-radios.form-radio, .page-node-491  .bef-select-as-radios.form-radio" ).each(function( index ) {
                if(jQuery(this).prop("checked")){
                    jQuery(this).parent().find('label').addClass('active');
                }
            });
        }
    };

})(jQuery);

jQuery(document).ready(function () {
    "use strict";
    /*
    * Lazy Load
     */
    var myLazyLoad = new LazyLoad();
    jQuery('.lazy').Lazy();
    /*
    *  Expose filter set active class
    */
    // for Page Culture details
    jQuery( ".page-culturedetails .bef-select-as-radios.form-radio, .page-node-491  .bef-select-as-radios.form-radio" ).each(function( index ) {
        if(jQuery(this).prop("checked")){
            jQuery(this).parent().find('label').addClass('active');
        }
    });

    /*
    * Replace urls   in pages turizm
     */

    if (jQuery('.node-type-turizm').length){
        jQuery(".inline.odd:contains('Экскурсии по Омску')").wrap( "<a href='/turizm-eksursii-omsk'></a>" );
        jQuery(".inline.odd:contains('Туры по Омской области')").wrap( "<a href='/turizm-turi-omskaya-oblast'></a>" );
    }

    /*
    * Replace urls  in page culture details
     */

    if (jQuery('.node-type-culture-detail').length){
        var text = jQuery(".inline.odd").eq(1).html();
        var obg_cd = JSON.parse(culture_data );


        jQuery.each( obg_cd, function( i, val ) {

                if(val.title == text){
                    console.log('true');
                    jQuery(".inline.odd:contains('"+text+"')").wrap( "<a href='/culturedetails?field_categories_tid="+val.tid+"'></a>" );
                }


        });

    }


    /*
    *
     */
    jQuery('.bvi-panel-open').bvi('Init', {
        "BviPanel": "1",
        "BviPanelBg": "white",
        "BviPanelFontSize": "12",
        "BviPanelLetterSpacing": "normal",
        "BviPanelLineHeight": "normal",
        "BviPanelImg": "1",
        "BviPanelImgXY": "1",
        "BviPanelReload": "0",
        "BviCloseClassAndId": ".hide-screen-fixed",
        "BviFixPanel": "1", "BviPlay": "1"
    });
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
    *  Pop UP Contacts Block
     */

    jQuery('.block-contact-popup .close, .block-contact-popup-about .close').click(function (e) {
        e.preventDefault();
        if (jQuery(this).parent().hasClass('block-contact-popup-about')) {
            jQuery('.block-contact-popup-about').fadeOut();
        } else {
            jQuery('.block-contact-popup').fadeOut();
        }
    });

    jQuery('.top-header-menu .menu-contact li a.contact').click(function (e) {
        e.preventDefault();
        jQuery('.block-contact-popup').fadeIn();
    });
    jQuery('.top-header-menu .menu-contact li a.about').click(function (e) {
        e.preventDefault();
        jQuery('.block-contact-popup-about').fadeIn();
    });


    /*
    * Load more place
    */

    jQuery('.cat-place-aside a').click(function (e) {
        if (!jQuery('body').hasClass('node-type-turizm')) {
            e.preventDefault();

        jQuery('.cat-place-aside a').removeClass('current');
        jQuery(this).addClass('current');
        var $id = jQuery(this).data('id');

        jQuery.get("/place/get/ajax/" + $id, function (data, status) {

            if (data != '') {
                var dtat = jQuery.parseJSON(data);

                if (jQuery('body').hasClass('node-type-place')) {
                    jQuery(".breadcrumb.contextual-links-region span").each(function (index) {

                        if (index > 2) {
                            jQuery(".breadcrumb.contextual-links-region span").eq(index).css('display', 'none');
                        }

                    });
                }

                var doom = dtat.data;

                jQuery(".place.home-page").html(' ');

                if (doom != '') {

                    if (doom.length == 1) {
                        window.location.replace('/' + doom[0].path);
                    }
                    jQuery.each(doom, function () {

                        jQuery(".place.home-page").append(' <li style="height: 272.8px;">\n' +
                            '                    <a href="/' + this.path + '">\n' +
                            '                        <div class="place-item">\n' +
                            '                           <img src="' + this.src + '" />\n' +
                            '                            <h3>' + this.title + '</h3>\n' +
                            '                        </div>\n' +
                            '                    </a>\n' +
                            '                </li> ');

                    });
                } else {
                    jQuery(".place.home-page").html('<div class="not-found"  >Записей не найдено</div>');
                    jQuery(".place.home-page .not-found").delay(3000).fadeOut();
                }
                /*
                                var maxHeight = Math.max.apply(null, jQuery(" .place-item").map(function ()
                                {
                                    return jQuery(this).height();
                                }).get());
                                jQuery('.place.home-page li').css('height',maxHeight );*/
            } else {
                jQuery(".place.home-page").html(' ');
                jQuery(".place.home-page").html('<div class="not-found"  >Записей не найдено</div>');
                jQuery(".place.home-page .not-found").delay(3000).fadeOut();
            }

        });

        }
    });
    /*
    * Height for Culture detail
    *
     */
    if (jQuery('.page-culturedetails').length) {

        var maxHeight = Math.max.apply(null, jQuery(".page-culturedetails .culture-detail-item").map(function () {
            return jQuery(this).height();
        }).get());

        jQuery('body').append('<style> .page-culturedetails .culture-detail-item{ height:' + maxHeight + 'px; }</style>');
    }


    /*
    * Sticky Block
     */

    if (jQuery('#stickyblock, .sticky-block-turizm').length) {

        jQuery('#stickyblock, .sticky-block-turizm').goesSticky({scope: jQuery("#main-wrapper"), offest: 0});
    }

    /*
    *  Afisha carousel
     */
    jQuery('.afisha-carousel').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        lazyLoad: 'ondemand',
        dots: false,
        autoplay: true,
        arrows: false,
        speed: 1000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });

    jQuery('.afisha-carousel-holder .slider-arrow-left').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find('.afisha-carousel').slick('slickPrev');
    });

    jQuery('.afisha-carousel-holder .slider-arrow-right').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find('.afisha-carousel').slick('slickNext');
    });

    var countitems =  jQuery('.afisha-carousel .item-afisha').length;

    if(countitems <= 4){
        jQuery('.afisha-carousel-holder .slider-arrow-right, .afisha-carousel-holder .slider-arrow-left').fadeOut();
    }
    /*
    * Lightbox for gallery
     */
    jQuery('.gallery-lists-single').lightGallery({
        download: false,
        selector: '.gallery-col-md-single a',
        thumbnail: true,
        zoom: true,
        exthumbimage: false
    });
    /*
    * Lightbox for News
     */
    jQuery('.article-slider-row').lightGallery({
        download: false,
        selector: '.article-slider-row .ligh-news',
        thumbnail: true,
        zoom: true,
        exthumbimage: false
    });

    /*
    * Load More News
     */

    jQuery('.pager-load-more.news a').click(function (e) {
        if (window.a == undefined) {
            window.a = 1;
        }

        jQuery.get("/article/get/ajax/" + window.a, function (data, status) {

            if (data != '') {
                jQuery(".news.home-page.clearfix.margin-botom-news-custom").append(data);
                var maxHeight = Math.max.apply(null, jQuery(".news.home-page li").map(function () {
                    return jQuery(this).height();
                }).get());
                jQuery('.news.home-page.clearfix.margin-botom-news-custom li').css('height', maxHeight);

                //jQuery(this).attr("data-number", parseInt($datanumber+1));
                var redyval = parseInt(window.a + 1);
                window.a = redyval;

            } else {
                jQuery(".item-list").html(' ');
                jQuery(".item-list").html('<div class="not-found"  >Записей не найдено</div>');
                jQuery(".item-list").delay(3000).fadeOut();
            }

        });
        e.preventDefault();
    });

    /*
    * Calendar Afisha
     */
    //  dateFormat : "yy-mm-dd",
    jQuery('#eventCalendar').datepicker({
        firstDay: 1,
        dateFormat: "yy-mm-dd",
        monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
        onSelect: function (date) {
            //var unix = new Date(date.split("-").reverse().join("-")).getTime();
            // var unix  =   new Date(date).getTime();

            var d = new Date(date);
            //  d.setHours(24,0,0,0);

            var nextday = new Date(d.valueOf() + 24 * 60 * 60 * 1000).getTime();
            //var nextday = new Date(d.valueOf() + 24 * 60 * 60 * 1000).getTime();
            var previoustday = new Date(d.valueOf()).getTime();
            console.log(previoustday.toString().slice(0, 10));
            if (jQuery('.afisha-border-bottom.current').length) {

                var cat = jQuery('.afisha-border-bottom.current').data('id');
            } else {
                var cat = 'all';
            }

            jQuery(".afisha-row-list").html(' ');
            jQuery(".afisha-row-list").html('<div style="display: table; margin: 0 auto;"><svg width="30px"  height="30px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-double-ring" style="background: none;"><circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.c1}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="4" stroke="#1f1b2f" stroke-dasharray="62.83185307179586 62.83185307179586" transform="rotate(210 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle><circle cx="50" cy="50" ng-attr-r="{{config.radius2}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.c2}}" ng-attr-stroke-dasharray="{{config.dasharray2}}" ng-attr-stroke-dashoffset="{{config.dashoffset2}}" fill="none" stroke-linecap="round" r="35" stroke-width="4" stroke="#24838a" stroke-dasharray="54.97787143782138 54.97787143782138" stroke-dashoffset="54.97787143782138" transform="rotate(-210 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;-360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg></div>');
            jQuery.get("/node/get/ajax/" + cat + "/" + previoustday.toString().slice(0, 10) + '/' + nextday.toString().slice(0, 10), function (data, status) {


                jQuery(".afisha-row-list").html(' ');
                if (data != '') {
                    jQuery(".afisha-row-list").html(data);
                    jQuery(".afisha-row-list").css('visibility', 'hidden');

                    var $container = jQuery('.afisha-row-list');
                    $container.imagesLoaded(function () {
                        $container.isotope('reloadItems').isotope({sortBy: 'original-order'});
                    });
                    setTimeout(function () {
                        jQuery(".afisha-row-list").css('visibility', 'visible ');
                    }, 800);

                } else {
                    jQuery(".afisha-row-list").html('<div class="not-found"  >Записей не найдено</div>');
                }


            });

        }
    });

    /*
    *  Afisha change select
     */


    jQuery('.select-afisha-page').on('change', function () {

        if (jQuery('.afisha-border-bottom.current').length) {

            var cat = jQuery('.afisha-border-bottom.current').data('id');
        } else {
            var cat = 'all';
        }

        if (this.value == 'soon') {
            var d = new Date();
            d.setHours(24, 0, 0, 0);

            var firstday = new Date(d.valueOf() - 18 * 60 * 60 * 1000).getTime();
            var lastday = new Date(d.valueOf() + 6 * 59 * 60 * 1000).getTime();
            console.log(d.getTime());
            console.log(lastday);

        } else if (this.value == 'thisweek') {


            var d = new Date();
            var first = d.getDate() - d.getDay(); // First day is the day of the month - the day of the week
            var last = first + 8; // last day is the first day + 6
            var last1 = first + 6; // last day is the first day + 6

            // var firstday = new Date(d.setDate(last1)).getTime();
            //  var firstday = new Date(d.setDate(last1)+24*60*60*1000).getTime();
            //  var lastday = new Date(d.setDate(last)).getTime();
            //  var lastday = new Date(d.setDate(last)+24*60*60*1000).getTime();
            var firstday = new Date(d.setDate(last1) - 5 * 60 * 60 * 1000).getTime();
            var lastday = new Date(d.setDate(last) + 11 * 60 * 60 * 1000).getTime();

            console.log(firstday + ' ' + lastday);

        } else {
            var d = new Date();
            d.setHours(24, 0, 0, 0);
            var firstday = new Date(d.valueOf() + 6 * 60 * 60 * 1000).getTime();
            var lastday = new Date(d.valueOf() + 30 * 60 * 60 * 1000).getTime();

        }

        jQuery(".afisha-row-list").html(' ');
        jQuery(".afisha-row-list").html('<div style="display: table; margin: 0 auto;"><svg width="30px"  height="30px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-double-ring" style="background: none;"><circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.c1}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="4" stroke="#1f1b2f" stroke-dasharray="62.83185307179586 62.83185307179586" transform="rotate(210 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle><circle cx="50" cy="50" ng-attr-r="{{config.radius2}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.c2}}" ng-attr-stroke-dasharray="{{config.dasharray2}}" ng-attr-stroke-dashoffset="{{config.dashoffset2}}" fill="none" stroke-linecap="round" r="35" stroke-width="4" stroke="#24838a" stroke-dasharray="54.97787143782138 54.97787143782138" stroke-dashoffset="54.97787143782138" transform="rotate(-210 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;-360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg></div>');
        jQuery.get("/node/get/ajax/" + cat + "/" + firstday.toString().slice(0, 10) + '/' + lastday.toString().slice(0, 10), function (data, status) {


            jQuery(".afisha-row-list").html(' ');
            if (data != '') {
                jQuery(".afisha-row-list").html(data);
                jQuery(".afisha-row-list").css('visibility', 'hidden');
                var $container = jQuery('.afisha-row-list');
                $container.imagesLoaded(function () {
                    $container.isotope('reloadItems').isotope({sortBy: 'original-order'});
                });
                setTimeout(function () {
                    jQuery(".afisha-row-list").css('visibility', 'visible ');
                }, 800);
            } else {
                jQuery(".afisha-row-list").html('<div class="not-found"  >Записей не найдено</div>');
            }


        });


    });


    /*
    * Match Height
     */
    jQuery('.news.home-page li').matchHeight();
    //jQuery('.culture-detail-row .culture-detail-item').matchHeight();
    jQuery('.culture-detail-rows .culture-detail-item a').matchHeight();
    jQuery('.place.home-page li').matchHeight();


    InitFilterRows();
    InitFitRowsAfisha();
    InitSliderNewsPage();
    InitFilterRowsAfisha();
    backToTop();
    // for block culture dtails inhome page mathch height
    if (jQuery(window).width() < 591) {

        jQuery('.front .culture-detail-item').each(function () {
            var firstheight = jQuery(this).find('.culture-top-block').outerHeight();
            var secondtheight = jQuery(this).find('.culture-bottom-block').outerHeight();

            jQuery(this).css('height', firstheight + secondtheight);
        });

    }






// end redy function
});

// ---------------------------------------------------------
// Back To Top
// ---------------------------------------------------------
function backToTop() {
    "use strict";
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#back_to_top').addClass('backactive');
        } else {
            jQuery('#back_to_top').removeClass('backactive');
        }
    });
    jQuery(document).on('click', '#back_to_top', function (e) {
        e.preventDefault();

        jQuery('body,html').animate({scrollTop: 0}, jQuery(window).scrollTop() / 3, 'linear');
    });

}
/*
*    Afisha  Rows
 */
function InitFitRowsAfisha() {
    "use strict";

    if (jQuery('.afisha-row-list').length) {


        var $container = jQuery('.afisha-row-list');

        $container.imagesLoaded(function () {
            $container.isotope({
                itemSelector: '.culture-detail-item',
                layoutMode: 'masonry'
            });
        });

    }
}



//------------------
//    Filterable in Culture detail page
//-------------------
function InitFilterRows() {
    "use strict";

    jQuery('.list-terms-culture-details li').click(function () {
        // var $this = jQuery(this).parent('li');
        var $this = jQuery(this);
        if ($this.hasClass('current')) {
            return;
        }

        var $optionSet = $this.parents('.list-terms-culture-details');
        $optionSet.find('.current').removeClass('current');
        $this.addClass('current');

        var selector = jQuery(this).attr('data-filter');
        jQuery('.culture-detail-row').isotope({filter: selector});


        return false;
    });
}

//------------------
//    Filterable afisha page
//-------------------
function InitFilterRowsAfisha() {
    "use strict";

    jQuery('.list-terms-afisha li').click(function () {
        // var $this = jQuery(this).parent('li');
        var $this = jQuery(this);
        if ($this.hasClass('current')) {
            return;
        }

        var $optionSet = $this.parents('.list-terms-afisha');
        $optionSet.find('.current').removeClass('current');
        $this.addClass('current');


        var selector = jQuery(this).attr('data-filter');
        jQuery('.afisha-row-list').isotope({filter: selector});


        return false;
    });
}

//------------------
//    Sldier News Detail Page
//-------------------
function InitSliderNewsPage() {
    "use strict";

    jQuery('.article-slider').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        //  autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: jQuery('.article-slider-row .slider-arrow-left'),
        nextArrow: jQuery('.article-slider-row .slider-arrow-right'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
}

jQuery(window).on('load', function () {
    var height = jQuery('.turism-news  li').height();
    jQuery('.turism-news-content').append('<style>.turism-news  li{ height:' + height + 'px; }</style>');

});
