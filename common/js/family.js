// JavaScript Document

$(document).ready(function() {
    $('.family .arrow').click(function(){
        $('.family .aList').show();		
        $('.family').css('background','#B60050 url(../common/images/down.png) 80px 10px no-repeat');	  
    });
    $('.family .aList').mouseleave(function(){
        $(this).hide();		
        $('.family').css('background','#B60050 url(../common/images/up.png) 80px 10px no-repeat');	  
    });
//tab키 처리
    $('.family .arrow').bind('focus', function () {        
        $('.family .aList').show();	
    }); 
    $('.family .aList li:last').find('a').bind('blur', function () {        
        $('.family .aList').hide();
    });  
});
