$(document).ready(function () {

    // Footer Accordion Menu
    $(".footer-menu > li h3").on("click", function () {
        if ($(this).hasClass("on")) {
            slideUp();
        } else {
            slideUp();
            $(this).addClass("on").next().slideDown();
        }
        function slideUp() {
            $(".footer-menu > li h3").removeClass("on").next().slideUp();
        }
    });


    // Checkout Toggle
    $(".checkout .title-group").on("click", function() {
       $(this).next(".box").toggle();
    });

});