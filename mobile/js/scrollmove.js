// JavaScript Document

$(document).ready(function() {
    $('.top').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
    $(".main a").click(function() {
        $('html, body').animate({
            scrollTop: $("#mainCon").offset().top
        }, 800);
    });
});