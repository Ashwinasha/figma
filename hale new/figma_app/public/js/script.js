
$(document).ready(function() {
    $("#product-carousel").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        },
        navText: ["&#10094;", "&#10095;"], // Use your custom arrows
    });
});
