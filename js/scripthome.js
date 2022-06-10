

$(document).ready(function () {
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnHover: false,

        speed: 700,
        draggable: false,
        swipe: false,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    dots: true,
                    arrows: false,
                }
            },{
                breakpoint: 769,
                settings: {
                    dots: true,
                    arrows: false,
                }
            }
        ]
    });
})

