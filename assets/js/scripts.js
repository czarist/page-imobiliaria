$(document).ready(function () {



    let owl = $('#carousel-enterprises').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    let counter = 0;

    $('.owl-prev').click(function () {
        if (counter > 0) {
            counter--;
            owl.trigger('prev.owl.carousel');
        }
        updatePrevButton();
    });

    $('.owl-next').click(function () {
        counter++;
        updatePrevButton();
        owl.trigger('next.owl.carousel');
    });

    function updatePrevButton() {
        if (counter <= 0) {
            $('.owl-prev').addClass('disabled');
        } else {
            $('.owl-prev').removeClass('disabled');
        }
    }

    /** Owl Carousel  */

    let $owlCarouselVideo = $(".owl-carousel-video");

    $owlCarouselVideo.on("initialize.owl.carousel", function () {
        $(this).find(".col").removeClass("d-none");
        $(this).find(".owl-loading").remove();
    });

    $owlCarouselVideo.owlCarousel({
        loop: false,
        nav: true,
        margin: 10,
        responsiveClass: true,
        lazyLoad: true,
        dots: false,
        navText: ['<i class="icon icon-arrow-prev text-primary"></i>', '<i class="icon icon-arrow-next text-primary"></i>'],
        responsive: {
            0: {
                items: 1,
                center: true,
                loop: false,
                stagePadding: 40
            },
            600: {
                items: 2
            },
            1000: {
                items: 3,
                margin: 30,
                stagePadding: 0
            }
        }
    });

    /** Fim Owl Carousel  */

    function updateClasses() {
        if ($(window).width() < 991) {
            $('#contact-cols .col-auto a').addClass('btn-mobile-contact');
            $('#contact-cols .col-auto button').addClass('btn-mobile-contact w-100');
            $('#contact-cols .col-auto').addClass('col-4 m-0 p-0').removeClass('col-auto m-auto p-auto');
        } else {
            $('#contact-cols .col-4').addClass('col-auto m-auto p-auto').removeClass('col-4 m-0 p-0');
            $('#contact-cols .col-auto a').removeClass('btn-mobile-contact');
            $('#contact-cols .col-auto button').removeClass('btn-mobile-contact w-100');
        }
    }


    updateClasses();

    $(window).resize(function () {
        updateClasses();
    });

    $('*[data-toggle="menu"]').on("click", function (e) {
        e.preventDefault();
        const target = $(this).attr("data-target");

        if ($(".modal-backdrop").length === 0) {
            $('<div class="modal-backdrop fade show"></div>').appendTo(document.body);
        }

        $(target).addClass("show");

        $(".modal-backdrop").on("click", function () {
            $(this).remove();
            $(target).removeClass("show");
        });

        $(".back-menu").on("click", function () {
            const backTarget = $(this).attr("data-target");
            $(backTarget).removeClass("show");
            $(".modal-backdrop").remove();
        });
    });
});
