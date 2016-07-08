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
    $this.parent('.modalWrap').show();
    return false;
}
function modalClose(modal) {
    var $this = $(modal);
    $this.parent().parent('.modalWrap').hide();
    return false;
}
