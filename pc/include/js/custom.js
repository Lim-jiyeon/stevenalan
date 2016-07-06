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

});


// Select Box
function selectboxEvent(target){
    var $this = $(target),
        str = $this.val();
    $this.parent().children(".selectbox-value").text(str);
}

// Shopping Bag Option Change
//function itemOptionChange() {
//    var $this = $(".item-info .button");
//    $this.parents("tr").next().addClass("open").toggle();
//    return false;
//}

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
