jQuery(function ($) {
    'use strict';


    var $sectionn = $('.slide-right');
    function loadDaNum() {
//        $('.count-num').each(function () {
//            $(this).prop('Counter',0).animate({
//                Counter: $(this).text()
//        }, {
//                duration: 4000,
//                easing: 'swing',
//                step: function (now) {
//                  $(this).text(Math.ceil(now));
//                }
//            });
//        });
        $(window).scroll(function () {
            if ($(window).scrollTop() > 100) {
                $('#scroller').css('top', $(window).scrollTop());
            }
        }
        );
    }
    $(document).bind('scroll', function (ev) {
        var containerOffsett = $sectionn.offset().top - window.innerHeight;
        var scrollOffsett = $(document).scrollTop();
        console.log(containerOffsett);
        console.log(scrollOffsett);
        if (scrollOffsett > containerOffsett) {
            $(window).scroll(function () {
            if (scrollOffsett > containerOffsett) {
                $('#scroller').css('top', $(window).scrollTop());
            }
        }
        );
           
        }
    });

});