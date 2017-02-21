// JavaScript Document

$(document).ready(function () {
    $('.fancyBox .fancy').fancybox({
        'padding'       : 7,
        'overlayOpacity': 0.8,
        'overlayColor'  : '#333'
    });

    $('.fancyBox .box').fancybox({
        'transitionIn'	: 'elastic',
        'transitionOut'	: 'elastic',
        'speedIn'		: 400, 
        'speedOut'		: 400, 
        'overlayOpacity': 0.8,
        'overlayColor'  : '#333'
    });
});