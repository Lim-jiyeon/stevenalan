$(document).ready(function() {

    // Placeholder
    $(".placeholder input").focusin(function() {
        $(this).siblings("label").hide();
    });
    $(".placeholder input").blur(function() {
        if($(this).val() == ''){
            $(this).siblings("label").show();
        }
    });


    // Header My Page Dropdown
    $(".link-mypage").on("mouseenter", function() {
        $(this).parent(".menu-mypage").addClass("open");
    });
    $(".menu-mypage").on("mouseleave", function() {
        $(this).removeClass("open");
    });


    // Forgot id, password Select Tab
    $('.find-box input[name=findId]').change(function () {
        $('.findId-input').hide();
        $('.'+$(this).val()).show();
    });
    $('.find-box input[name=findPassword]').change(function () {
        $('.findPassword-input').hide();
        $('.'+$(this).val()).show();
    });


    // Checkout Final Payment Amount Scroll
    $(".payment-box").sticky({ topSpacing: 50 });

});


// Select Box
function selectboxEvent(target){
    var $this = $(target),
        str = $this.val();
    $this.parent().children(".selectbox-value").text(str);
}


// Shopping Bag Option Change
function itemOptionChange(item) {
    var $this = $(item);
    $this.parents("tr").next(".item-option-change").addClass("open").toggle();
    return false;
}


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


// Shopping Bag Option Change
function couponOpen(coupon) {
    var $this = $(coupon);
    $this.parents(".apply-coupon").next().addClass("open").toggle();
    return false;
}