$(function() {
    $('.slider__slick').slick({
        prevArrow: '<button type="button" class="cardSlider__arrow--left cardSlider__arrow"><i class=" button--slide fas fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class=" cardSlider__arrow--right cardSlider__arrow"><i class=" button--slide fas fa-angle-right"></i></button>',
        slidesToScroll: 2,
        slidesToShow: 1,
        centerMode: true,
    });
    $(".cardSlider__slider").slick({
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="cardSlider__arrow--left cardSlider__arrow"><i class=" button--slide fas fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class=" cardSlider__arrow--right cardSlider__arrow"><i class=" button--slide fas fa-angle-right"></i></button>',
        responsive: [{
                breakpoint: 960,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    })
});