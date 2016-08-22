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

    // Category Menu
    $(".category-menu .category-menu-title").on("click", function () {
        $(this).toggleClass("open").next(".category-menu-box").slideToggle(400);
    });


    // Detail slider
    $('.product-images').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        speed: 500,
        arrows: false,
        dots: true
    });

    // Detail Contents
    $(".detail-info-title").on("click", function() {
        $(this).siblings().removeClass("open").next().slideUp();
        $(this).toggleClass("open").next().slideToggle();
        $(this).parent().siblings().children().removeClass("open").next().slideUp();
        return false;
    });

    // You May Also Like
    $('.you-like-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        speed: 500,
        arrows: false,
        dots: true
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


    // My Page Personal Support View
    $(".question-title").on("click", function() {
        $(this).siblings().removeClass("open").next().slideUp();
        $(this).toggleClass("open").next().slideToggle();
        $(this).parent().siblings().children().removeClass("open").next().slideUp();
        return false;
    });

});


// Select Box
function selectboxEvent(target){
    var $this = $(target),
        str = $this.val();
    $this.parent().children(".selectbox-value").text(str);
}


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