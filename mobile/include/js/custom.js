$(document).ready(function () {
    $('#footer_accordion > li.enable h3').on('click', function () {

        if ($(this).hasClass('on')) {
            slideUp();
        } else {
            slideUp();
            $(this).addClass('on').next().slideDown();
        }
        function slideUp() {
            $('#footer_accordion > li h3').removeClass('on').next().slideUp();
        };
    })
})