$(document).ready(function () {

    // Header My Page Dropdown
    $(".link-mypage").on("click", function() {
        $(this).toggleClass("open");
        return false;
    });

    // Mobile Side Bar Menu Open
    $(".mobile-menu > a").click(function(e) {
        e.preventDefault();
        $("html").addClass("menu-open");
    });
    $(".sidebar-menu .child-item").append("<i class='collapse'></i>");
    // Mobile Side Bar Menu Accordion
    (function($) {
        $.fn.sideMenu = function(option) {
            var obj,
                item;
            var options = $.extend({
                    Speed: 300,
                    autostart: false,
                    autohide: 1
                },
                option);
            obj = $(this);

            item = obj.find("ul").parent("li").children("i");
            item.attr("data-option", "off");

            item.unbind('click').on("click", function() {
                var a = $(this);
                if (options.autohide) {
                    a.parent().parent().find("i[data-option='on']").parent("li").children("ul").slideUp(options.Speed / 1.2,
                        function() {
                            $(this).parent("li").removeClass("active").children("i").attr("data-option", "off");
                        })
                }
                if (a.attr("data-option") == "off") {
                    a.parent("li").children("ul").slideDown(options.Speed,
                        function() {
                            a.attr("data-option", "on");
                            a.parent("li").addClass("active");
                        });
                }
                if (a.attr("data-option") == "on") {
                    a.attr("data-option", "off");
                    a.parent("li").removeClass("active").children("ul").slideUp(options.Speed);
                }
            });
            if (options.autostart) {
                obj.find("a").each(function() {

                    $(this).parent("li").parent("ul").slideDown(options.Speed,
                        function() {
                            $(this).parent("li").addClass("active").children("i").attr("data-option", "on");
                        })
                })
            }

        }
    })(window.jQuery || window.Zepto);
    $(".sidebar-menu").sideMenu();
    // Mobile Side Bar Menu Close
    $(".menu-close, .menu-overlay").on("click", function() {
        $("html").removeClass("menu-open");
    });

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

    // Main - Main Banner Slick Slider
    $(".main-banner").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        arrows: false
    });

    // Main - Second Banner Slick Slider
    $(".second-banner").slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        arrows: false,
        centerMode: true,
        centerPadding: '37px'
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
    // Detail Contents - Size Guide
    $(".size-button-toggle input[name=size_switch]").change(function () {
        $(".size-guide-content").hide();
        $("."+$(this).val()).show();
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


    // My Page Coupon Input[Radio] Select Tab
    $(".coupon-box input[name=couponList]").change(function () {
        $(".coupon-content").hide();
        $("."+$(this).val()).show();
    });


    // Brand Banner
    $(".brand-banner").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        arrows: false
    });


    // News List
    $(".news-title").on("click", function() {
        $(this).siblings().removeClass("open").next().slideUp();
        $(this).toggleClass("open").next().slideToggle();
        $(this).parent().siblings().children().removeClass("open").next().slideUp();
        return false;
    });


    // Mobile Side Bar Filter Open
    $(".filter-button").click(function(e) {
        e.preventDefault();
        $("body").addClass("search-filter-open");
    });
    // Mobile Side Bar Filter Close
    $(".filter-close, .filter-overlay").on("click", function() {
        $("body").removeClass("search-filter-open");
    });
    //$(".filter-title").on("click", function() {
    //    $(this).siblings().removeClass("open").next().slideUp();
    //    $(this).toggleClass("open").next().slideToggle();
    //    $(this).parent().siblings().children().removeClass("open").next().slideUp();
    //    return false;
    //});
    $(".category-all").on("click", function() {
        $(this).parent().siblings().find(".item-title").addClass("open").next().slideDown();
        return false;
    });
    // Category View More Button
    var sizeItem = $(".filter-category-list .item-list > li").size();
    var item = 6;
    $('.filter-category-list .item-list > li:lt('+item+')').show();
    $('.filter-category-list .view-more').click(function () {
        var x = (item+20 <= sizeItem) ? item+20 : sizeItem;
        $('.filter-category-list .item-list > li:lt('+x+')').show();
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


    // 체크아웃 배송지버튼 클릭시 버튼 컬러 변경
    $(".shipping-button-group a").on("click", function() {
        $(this).parent().siblings().children("a").addClass("button-secondary");
        return false;
    });
    $(".shipping-button-group a.select-address").on("click", function() {
        $(this).parent().siblings().children("a").addClass("button-secondary");
        $(this).removeClass("button-secondary");
        return false;
    });

});


// Layer
function layerOpen(target) {
    var $this = $(target);
    $this.show();
}
function layerClose(target) {
    var $this = $(target);
    $this.hide();
}
// 레이어 띄울 시 body 스크롤 안되도록 막음
function addLock() {
    $("html").addClass("scroll-lock");
}
function removeLock() {
    $("html").removeClass("scroll-lock");
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