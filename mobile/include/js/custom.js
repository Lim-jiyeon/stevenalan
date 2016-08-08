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

    // My Page Menu
    $(".mypage-menu .mypage-menu-title").on("click", function () {
        $(this).next("ul").slideToggle(400);
    });


    // Forgot id, password Input[Radio] Select Tab
    $(".find-box input[name=findId]").change(function () {
        $(".findId-input").hide();
        $("."+$(this).val()).show();
    });
    $(".find-box input[name=findPassword]").change(function () {
        $(".findPassword-input").hide();
        $("."+$(this).val()).show();
    });


    // Checkout Toggle
    $(".checkout .title-group").on("click", function() {
       $(this).next(".box").toggle();
    });

});


// Sign Up Agree Box View
function agreeOpen(view) {
    var $this = $(view);
    $this.parents(".signup-agree-title").next(".agree-box").addClass("open").toggle();
    return false;
}


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

function guestOrderedCheck() {
    $(".guest-ordered-check").addClass("open").toggle();
    return false;
}