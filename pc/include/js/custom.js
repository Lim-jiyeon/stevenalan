$(document).ready(function() {

    // Header My Page Dropdown
    $(".link-mypage").on("mouseenter", function() {
        $(this).parent(".menu-mypage").addClass("open");
    });
    $(".menu-mypage").on("mouseleave", function() {
        $(this).removeClass("open");
    });


    //$('#open-search, #open-search-pc').on('click', function() {
    //    $('html').toggleClass('search-open');
    //    $('#search').focus();
    //});
    //$('#search').blur(function() {
    //    $('html').toggleClass('search-open');
    //});


    // Main Slick Slider
    $(".main-banner").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        arrows: false
    });


    // Category List Menu
    $(".item-title").on("click", function() {
        $(this).siblings().removeClass("open").next().slideUp();
        $(this).toggleClass("open").next().slideToggle();
        $(this).parent().siblings().children().removeClass("open").next().slideUp();
        return false;
    });


    // Detail slider
    $('.product-images-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        speed: 500,
        arrows: false,
        dots: false,
        fade: true,
        asNavFor: '.thumbnail-nav'
    });
    $('.thumbnail-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        speed: 500,
        arrows: true,
        asNavFor: '.product-images-for',
        focusOnSelect: true
    });
    // Detail Tab
    $(".detail-info-menu li").on("click", function() {
        var index = $(this).index() + 1;
        $(this).siblings("li").removeClass("seleted");
        $(this).addClass("seleted");
        $(".detail-info-content").hide();
        $(".detail-info-box" + index).show();
        return false;
    });


    // Placeholder
    $(".placeholder input").focusin(function() {
        $(this).siblings("label").hide();
    });
    $(".placeholder input").blur(function() {
        if($(this).val() == ''){
            $(this).siblings("label").show();
        }
    });


    // Forgot id, password Input[Radio] Select Tab
    $('.find-box input[name=findId]').change(function () {
        $('.findId-input').hide();
        $('.'+$(this).val()).show();
    });
    $('.find-box input[name=findPassword]').change(function () {
        $('.findPassword-input').hide();
        $('.'+$(this).val()).show();
    });


    // Accordion Table
    $(".folding-table tr.master").click(function(){

        var slaveDisplay = $(this).next("tr.slave").css("display");

        if(slaveDisplay == "none"){
            $(this).parent().find("tr.slave").hide();
            $(this).next("tr.slave").show();
        }else{
            $(this).next("tr.slave").hide();

        }
    });


    // Checkout Final Payment Amount Scroll
    $(".payment-box").sticky({
        topSpacing: 50,
        bottomSpacing: 300
    });


    // Return / Refund / Exchange Tab
    $(".return-button .button").on("click",function(){
        var index = $(this).index() + 1;
        $(".return-content").hide();
        $(".return-list"+ index).show();
        $(".return-button .button").removeClass("button-third").addClass("button-secondary");
        $(this).removeClass("button-secondary").addClass("button-third");
        return false;
    });
    // Return Input[Radio] Select Tab
    $('.return-info input[name=return_type_select]').change(function () {
        $('.return-select-box').hide();
        $('.'+$(this).val()).show();
    });


    // Coupon Tab
    $(".coupon-button .button").on("click",function(){
        var index = $(this).siblings().index() + 1;
        $(".coupon-content").hide();
        $(".coupon-list"+ index).show();
        $(".coupon-button .button").removeClass("button-third").addClass("button-secondary");
        $(this).removeClass("button-secondary").addClass("button-third");
        return false;
    });

});


// Modal
function modalOpen(modal) {
    var $this = $(modal);
    $this.show();
    return false;
}
function modalClose(modal) {
    var $this = $(modal);
    $this.parent().parent('.modalWrap').hide();
    return false;
}


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
    $this.parents("tr").next(".item-option-change").addClass("open").toggle();
    return false;
}
function itemOptionClose(item) {
    var $this = $(item);
    $this.parents(".item-option-change").removeClass("open").hide();
    return false;
}


// Checkout My Coupon View
function couponOpen(coupon) {
    var $this = $(coupon);
    $this.parents(".apply-coupon").next().addClass("open").toggle();
    return false;
}