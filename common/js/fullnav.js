// JavaScript Document

$(document).ready(function() {
            
	var i=0;		
			 
	$('ul.dropdownmenu').hover(
	function() { 
	    $('.bar').fadeTo('slow',1);
		$('ul.dropdownmenu li.menu ul').fadeIn('normal', function(){$(this).stop();});
	    $('#header').animate({height:280},'normal').clearQueue();
    },
    function() {
		$('.bar').fadeTo('fast',0);
        $('ul.dropdownmenu li.menu ul').fadeOut('normal');
	    $('#header').animate({height:129},'normal').clearQueue();
	});
		 
	$('ul.dropdownmenu li.menu').hover(
	function() { 
	    i=$(this).index(); 
		
		$('.bar').animate({left:121*i},'fast').clearQueue();
	    $('.depth1', this).animate({top:-30},'fast').clearQueue();
	},
	function() {
	    $('.depth1', this).animate({top:0},'fast').clearQueue();
	});
	
	//키보드 탭키처리
     $('ul.dropdownmenu li.menu .depth1').bind('focus', function(){        
        $('ul.dropdownmenu li.menu ul').slideDown('normal');
        $('#header').animate({height:280},'normal').clearQueue();
     });

     $('ul.dropdownmenu li.m6 li:last').find('a').bind('blur', function () {        
        $('ul.dropdownmenu li.menu ul').slideUp('fast');
        $('#header').animate({height:129},'fast').clearQueue();
     });
});
