// JavaScript Document

$(document).ready(function () {
    $('tbody tr').hover(function () {
            $(this).css('backgroundColor','#e5eaee');
        }, function () {
            $(this).css('backgroundColor','');
        });
    
    $('.fancyBox .fancy').hover(function () {
            $('img', this).stop().animate({ "top": "40px" }, "slow" );
            $('span', this).stop().fadeIn(100);
        }, function () {
            $('img', this).stop().animate({ "top": "101px" }, "slow" );
            $('span', this).stop().fadeOut(100);
        });

    $('.fancyBox .box').hover(function () {
            $('span', this).stop().fadeToggle('slow');
        });

});