/**
 * Created by Chris on 11/07/2016.
 */
//Cache reference to window and animation items


jQuery( document ).ready(function ($) {
    var $animation_elements = $('.circleanimation');
    var $window = $(window);

    $window.bind('scroll', check_if_in_view);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {

                circle1.animate(0, function () {
                    circle1.animate(0.28);
                });

                circle2.animate(0, function () {
                    circle2.animate(0.89);
                });

                circle3.animate(0, function () {
                    circle3.animate(0.67);
                });

                $window.unbind('scroll');

            } else {
                return false;
            }
        });
    }



    $(function () {
        $('.clientSlider').bxSlider({
            minSlides: 2,
            maxSlides: 6,
            slideWidth: 170,
            slideMargin: 5,
            ticker: true,
            speed: 24000
        });




        // $('.clientSlider').slick({
        //     // slidesToShow: 6,
        //     // slidesToScroll: 1,
        //     // autoplay: true,
        //     // autoplaySpeed: 0,
        //     // speed: 3000,
        //     // cssEase:'linear',
        //     // slide: 'img'
        //     // responsive: [
        //     //     {
        //     //         breakpoint: 600,
        //     //         settings: {
        //     //             slidesToShow: 3,
        //     //             slidesToScroll: 1,
        //     //             autoplay: true,
        //     //             autoplaySpeed: 0,
        //     //             speed: 4500,
        //     //             cssEase:'linear'
        //     //         }
        //     //     }
        //     // ]
        //
        //
        //     slidesToShow: 7,
        //     slidesToScroll: 1,
        //     autoplay: true,
        //     autoplaySpeed: 0,
        //     speed: 2000,
        //     pauseOnHover: false,
        //     cssEase:'linear',
        //     responsive: [
        //         {
        //             breakpoint: 600,
        //             settings: {
        //                 slidesToShow: 4
        //             }
        //         }
        //     ]
        //
        // });
    });



});
    var circle1 = new ProgressBar.Circle('#circleAnimation28', {
        color: '#6cb5d3',
        strokeWidth: 15,
        trailColor: '#d8ebf3',
        trailWidth: 15,
        duration: 1200,
    text: {
        value: '0',
        style: {
            color: '#02070a',
            fontSize: '35px',
            fontWeight: 'bold'
        }
    },
        step: function (state, bar) {
            bar.setText(Math.round(bar.value() * 100) + ' %');
        }
    });

    var circle2 = new ProgressBar.Circle('#circleAnimation89', {
        color: '#b375bc',
        strokeWidth: 15,
        trailColor: '#D7BFDA',
        trailWidth: 15,
        duration: 1200,
        text: {
            value: '0',
            style: {
                color: '#02070a',
                fontSize: '35px',
                fontWeight: 'bold'
            }
        },
        step: function (state, bar) {
            bar.setText(Math.round(bar.value() * 100) + ' %');
        }
    });

var circle3 = new ProgressBar.Circle('#circleAnimation67', {
    color: '#78d36c',
    strokeWidth: 15,
    trailColor: '#daf3d9',
    trailWidth: 15,
    duration: 1200,
    text: {
        value: '0',
        style: {
            color: '#02070a',
            fontSize: '35px',
            fontWeight: 'bold'
        }
    },
    step: function (state, bar) {
        bar.setText(Math.round(bar.value() * 100) + ' %');
    }
});



    
