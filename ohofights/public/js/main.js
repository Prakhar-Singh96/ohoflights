/*!Main Css v1.54 by @Prem */
 

            var owl = $("#instructor-slider");
            owl.owlCarousel({
                margin: 20,
                items: 4,
                dots: false,
                loop: true,
                nav: true,
                autoHeight: true,
                responsive: {
                    0: {
                        dots: true,
                        items: 1.3,
                    },
                    600: {
                        dots: true,
                        items: 3,
                    },
                    1000: {
                        dots: true,
                        items: 4,
                    },
                },
            });

            var owl = $("#Top-Destinations");
            owl.owlCarousel({
                margin: 20,
                items: 4,
                dots: false,
                loop: true,
                nav: true,
                autoHeight: true,
                responsive: {
                    0: {
                        dots: true,
                        items: 1,
                    },
                    600: {
                        dots: true,
                        items: 1,
                    },
                    767: {
                        dots: true,
                        items: 2,
                    },
                    1000: {
                        dots: true,
                        items: 2,
                    },
                },
            });



            var owl = $("#Testimonials");
            owl.owlCarousel({
                margin: 30,
                items: 1,
                dots: true,
                loop: true,
                nav: true,
                autoHeight: true,
                responsive: {
                    0: {
                        dots: true,
                        items: 1,
                    },
                    600: {
                        dots: true,
                        items: 2,
                    },
                    1000: {
                        dots: true,
                        items: 3,
                    },
                },
            });



            (function ($) {

                $(".nav-btn.nav-slider").on("click", function () {
                    $(".overlay").show();
                    $(".sidebar").toggleClass("open");
                });

                $(".overlay").on("click", function () {
                    if ($(".sidebar").hasClass("open")) {
                        $(".sidebar").removeClass("open");
                    }
                    $(this).hide();
                });
                $(".overlay-body").on("click", function () {
                    if ($(".sidebar").hasClass("open")) {
                        $(".sidebar").removeClass("open");
                    }
                    $(this).hide();
                });

                $(".filterButoon").on("click", function () {
                    $(".overlay-body").show();
                    $(".Products-Sidebar").toggleClass("open-filter");
                });

                $(".overlay-body").on("click", function () {
                    if ($(".Products-Sidebar").hasClass("open-filter")) {
                        $(".Products-Sidebar").removeClass("open-filter");
                    }
                    $(this).hide();
                });
 
            })(jQuery);