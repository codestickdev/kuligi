$(document).ready(function(){
    $('.frontSlider__wrap').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        dots: true,
    });
    $('.logoSlider').each(function(){
        $(this).slick({
            slidesToShow: 8,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrows: true,
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
    })
});