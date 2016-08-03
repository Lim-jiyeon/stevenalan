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


// Shopping Bag Option Change
function itemOptionChange(item) {
    var $this = $(item);
    $this.parents("div").next(".item-option-change").addClass("open").toggle();
    return false;
}
function itemOptionClose(item) {
    var $this = $(item);
    $this.parents(".item-option-change").removeClass("open").hide();
    return false;
}