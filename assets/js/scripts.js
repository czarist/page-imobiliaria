$(document).ready(function () {

    /** Carousel  */

    $(".owl-carousel").owlCarousel();

    let owl = $('#carousel-enterprises').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
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

    /** Fim Carousel  */

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
