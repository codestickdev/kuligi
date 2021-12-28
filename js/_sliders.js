$(document).ready(function(){
    $('.frontSlider__wrap').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 800,
    });
    $('.aboutContent').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        asNavFor: $('.aboutImages'),
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    adaptiveHeight: true,
                }
            }
        ]
    });
    $('.aboutImages').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        fade: true,
        asNavFor: $('.aboutContent'),
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    adaptiveHeight: true,
                }
            }
        ]
    });
    $('.logoSlider').each(function(){
        $(this).slick({
            slidesToShow: 8,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1500,
                    settings: {
                        slidesToShow: 6,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2,
                    }
                },
            ]
        });
    })
    $('.testimonialSlider__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 500,
    })
});

/**
 * Single kuligi
 */
$(document).ready(function(){
    $('.singleContent__gallery').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
    });
});