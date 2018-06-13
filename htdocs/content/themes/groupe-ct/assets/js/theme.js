import Vue from 'vue/dist/vue.js';
require('./components/filters.js');
window.axios = require('axios');

(function($) {
    $(document).ready(function() {
        // Vue.component('test', require('./components/Test.vue').default);
        // const app = new Vue({
        //     el: '#root',
        // });
        // Scroll to content if hashtag in url
        setTimeout(function () {
            var $elem = $('#_' + window.location.hash.replace('#', ''));
            if($elem.position()) {
                console.log($elem);
                console.log($elem.position().top);
                $('html, body, #app').animate({scrollTop: $elem.position().top}, 'slow');
                var $toggle = $elem.find('.open-toggle-content');
                if ($toggle.length > 0){
                    $toggle.trigger('click');
                }
            }
        }, 25);

        $('.hero-arrow').on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: $('main').position().top - 15}, 'slow');
        });

        $('.scroll-to').on('click', function (e) {
            e.preventDefault();
            var target = $(this).data().target;
            if ($('.menu-mobile-active').length > 0) {
                $('.close-menu-btn').trigger('click');
                $('html, body').animate({scrollTop: $(target).position().top - 15}, 'slow');
            } else {
                $('html, body').animate({scrollTop: $(target).position().top - 15}, 'slow');
            }

            if ($(target).find('.open-toggle-content').length > 0 && $(target).find('.open-toggle-content').prev().hasClass('toggle-triangle') === false) {
                $(target).find('.open-toggle-content').trigger('click');
            }
        });


        if (window.location.hash === '#contact-form') {
            $('.contact-form-container').addClass('slide-in');
        }

        /***** MENU MOBILE **/

        $('#menu-btn').on('click', function () {
            $('.main-nav-mobile-container').addClass('menu-mobile-active');
            $('#global-container').addClass('move-global');
            //$('body').addClass('body-no-scroll');

        });


        $('.close-menu-btn').on('click', function () {
            $('.main-nav-mobile-container').removeClass('menu-mobile-active');
            $('#global-container').removeClass('move-global');
            //$('body').removeClass('body-no-scroll');
        });

        // TOGGLE SUB MENU FIRST LEVEL
        $('#menu-mobile .sub-menu-trigger').on('click', function (e) {
            e.preventDefault();
            $(this).siblings('.sub-menu-container-mobile').toggleClass('open-sub-menu-mobile');
            $(this).toggleClass('hideMe').siblings().removeClass('hideMe');

        });

        // TOGGLE SUB MENU SECOND LEVEL
        $('.sub-sub-menu-trigger').on('click', function (e) {
            e.preventDefault();
            $(this).parent().siblings('.nav-link-container').toggleClass('open-sub-menu-mobile');
            $(this).toggleClass('hideMe').siblings().removeClass('hideMe');
        });


        /***** MENU DESKTOP *******/
        $('.nav-bottom .nav-link').on('click',function(){
            var $navIndex = $(this).attr('class').split(' ')[1];
            $('.sub-menu-container '+ $navIndex).removeClass('hideMe').siblings().addClass('hideMe');
        });

        $( ".nav-content-container.desktop .nav-bottom .nav-link" ).hover(
            function() {
                $('.sub-menu-container').addClass('hide-from-screen');
                $('.show-arrow').removeClass('show-arrow');

                var $navIndex = $(this).attr('class').split(' ')[1];
                $('.sub-menu-main-container').find('.'+ $navIndex).removeClass('hide-from-screen');
                $(this).siblings('.menu-item-triangle').addClass('show-arrow');
                if ($navIndex === 'nl1' || $navIndex === 'nl3' || $navIndex === 'nl4') {
                    var $triangle = jQuery('.menu-item-triangle.show-arrow');
                    var left = $triangle.offset().left - $triangle.position().left;
                    $('.sub-menu-main-container').find('.'+ $navIndex).find('.nav-sub').css('left', left + 'px');
                }


            }, function() {
                var $navIndex = $(this).attr('class').split(' ')[1];
                if ($('.sub-menu-main-container')) {
                    $('.sub-menu-main-container').find('.'+ $navIndex).addClass('hide-from-screen');
                    $(this).siblings('.menu-item-triangle').removeClass('show-arrow');
                }
            }
        );

        $( ".menu-item-triangle" ).hover(
            function() {

                var $navIndex = $(this).siblings('.nav-link').attr('class').split(' ')[1];
                $('.sub-menu-main-container').find('.'+ $navIndex).removeClass('hide-from-screen');
                $(this).addClass('show-arrow');
            }
        );

        $( ".sub-menu-container" ).hover(
            function() {
                var $navIndex = $(this).attr('class').split(' ')[1];
                $(this).removeClass('hide-from-screen');

                $('.nav-link.' + $navIndex).siblings('.menu-item-triangle').addClass('show-arrow');
            }, function() {
                var $navIndex = $(this).attr('class').split(' ')[1];
                $(this).addClass('hide-from-screen');
                $('.nav-link.' + $navIndex).siblings('.menu-item-triangle').removeClass('show-arrow');
            }
        );


        /**** CONTACT FORM ****/


        $(".open-contact-form").on('click', function (e) {
            e.preventDefault();
            $('.contact-form-container').hasClass('slide-in') ? $('.contact-form-container').removeClass('slide-in') : $('.contact-form-container').addClass('slide-in');
            if ($(this).hasClass('mobile-open-contact-form')) {
                $('.close-menu-btn').trigger('click');
            }
        });
        // $('.contact-form-container form').css('height', $('.contact-form-container').height());


        $(".close-contact-form").on('click', function (e) {
            e.preventDefault();
            $('.contact-form-container').removeClass('slide-in');
        });

        if($('.hero-content-container').offset()){

            var distance = $('.hero-content-container').offset().top,
                $window = $(window);

            $window.scroll(function() {
                if ( $window.scrollTop() >= distance ) {
                    $('.contact-form-container').addClass('sticky')
                } else {
                    $('.contact-form-container').removeClass('sticky')
                }
            });
        }



        $('nav-sub-container').css('left', '');

        /**** ECHELLE NUMERIQUE ********/

        $('.hover-zone').hover(function () {
           $($(this).data('target')).addClass('slide-in');
        }, function () {
            $($(this).data('target')).removeClass('slide-in');
        });



        /***** Sliders with dots *******/

        $('body').on('click', '.slider-dot', function (e) {
            var $slideNumber = $(this).attr('class').split(' ')[1] ;
            e.preventDefault();
            if($(this).hasClass('blue-dot')){
                $(this).addClass('active-dot-blue').siblings().removeClass('active-dot-blue');
            }else{
                $(this).addClass('active-dot').siblings().removeClass('active-dot');
            }
            $(this).parent().siblings('.slider-main-container').find('.' + $slideNumber).addClass('active-slide').siblings().removeClass('active-slide');
            $(this).parents('.slider-main-container').find('.' + $slideNumber).addClass('active-slide').siblings().removeClass('active-slide');
        });


        $('.img-plus-text-slider, .testimonials-main-container').each(function(i) {
            var $this = $(this);
            setInterval( function () {
                var $next = $this.find('.active-slide').removeClass('active-slide').next();
                if (!$next.hasClass('slide-container')) {
                    $next = $this.find('.slider-main-container').children().first();
                }

                $next.addClass('active-slide');
                var $navIndex = $next.attr('class').split(' ')[1];
                var dotClass = $this.hasClass('img-plus-text-slider') ? 'active-dot-blue' : 'active-dot' ;
                console.log($next.attr('class').split(' '));
                $this.find('.' + dotClass).removeClass(dotClass);
                console.log('.slider-dot.' + $navIndex);
                $this.find('.slider-dot.' + $navIndex).addClass(dotClass);
            }, 8000);
        });


        setInterval( function () {
            var $next = $('.hero-content-container').find('.active-slide').removeClass('active-slide').next();
            if (!$next.hasClass('slide-container')) {
                $next = $('.hero-content-container').children().first();
            }

            $next.addClass('active-slide');
            $('.active-hero-slide').removeClass('active-hero-slide');
            $('.slider-hero-dot[data-target="' + $next.attr('data-hero-slide') + '"]').addClass('active-hero-slide');

        }, 8000);



        $('.slider-hero-dot').on('click', function (e) {
            e.preventDefault();
            console.log('this');
            $('.active-hero-slide').removeClass('active-hero-slide');
            $(this).addClass('active-hero-slide');
            var slide = $(this).data().target;
            $('.active-slide').removeClass('active-slide');
            console.log($('.hero-content[data-hero-slide="' + slide  +'"]').addClass('active-slide'));
        });

        /***** Toggle content  *******/

        $('body').on('click', '.open-toggle-content', function (e) {

            e.preventDefault();

            $(this).parent().toggleClass('active-header');
            $(this).parent().siblings('.toggle-content').toggleClass('open-content');
            $(this).siblings('.triangle-blue').toggleClass('toggle-triangle');
            $(this).siblings('.toggle-content-carret').toggleClass('toggle-carret');

        });

        /*** NAV PRODUCT **/
        $('.nav-cat-container a:not(".publication-category")').on('click', function (e) {
            e.preventDefault();
            var target = $(this).data().target;
            $('.product-container').fadeOut(300);
            $('.' + target).fadeIn(300);

            if( $(this).parent().hasClass('item-cat-active') ){
                $(this).parent().removeClass('item-cat-active')
                 $('.product-container').fadeIn(300);
            }else {
                $(this).parent().addClass('item-cat-active').siblings().removeClass('item-cat-active');
            }
        });

        $('select').on('change', function() {
            parseInt($(this).selectedIndex) === 1 ? $(this).css('color', 'rgba(255, 255, 255, 0.6)') : $(this).css('color', 'rgba(255, 255, 255, 1)') ;
        });

        $('select.select-support').on('change', function() {
           parseInt($(this).selectedIndex) === 1 ? $(this).css('color', 'rgba(34, 34, 34, 0.6)') : $(this).css('color', 'rgba(34, 34, 34, 1)') ;
        });


        /*** BLOCK 9 - STATISTICS **/

        var data = {
            datasets: [
                {
                    data: [60, 40],
                    backgroundColor: [
                        "red",
                        "blue",
                    ],
                }]
        };

        var options = {
            cutoutPercentage: 80
        };

        var $popup = $('#interstitiel');
        if ($popup.length > 0) {
            setTimeout(function () {
                var instance = lity($popup);
                $('.lity-close').appendTo($popup);
                $('.close-interstitiel').on('click', function() {
                    instance.close();
                });
            }, 100);
        }

        $('.single-product__slider-main').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: '.single-product__slider-thumbnails'
        });
        $('.single-product__slider-thumbnails').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          asNavFor: '.single-product__slider-main',
          dots: false,
          centerMode: false,
          focusOnSelect: true,
          vertical: true,
        });

        $('.single-product__tabs ul a').click( function(e){
            e.preventDefault();

            var target = $(this).data('target');
            var currentActiveLink = $('.single-product__tabs ul').find('.active');
            $(currentActiveLink).removeClass('active');
            $(this).parent().addClass('active');
            if(!target){
                return false;
            }

            var targetTab = $('.single-product__tabs').find('#' + target);
            var currentTab = $('.single-product__tabs .tabs').find('.active');
            if(targetTab){
                if(currentTab){
                    $(currentTab).removeClass('active');
                    $(currentTab).removeClass('in');
                }

                if(!$(targetTab).hasClass('active')){
                    $(targetTab).addClass('active');
                    setTimeout( function(){
                        $(targetTab).addClass('in');
                    }, 25)
                }
            }
        });

  });
}(jQuery));

