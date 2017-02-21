// JavaScript Document

$(document).ready(function () {
    $(window).on("scroll",function(){ 

        //변수 ht에 현재 브라우저의 높이값 저장
        //var ht = $(window).height();

        //변수 scroll에 현재 문서가 스크롤된 거리 저장
        var scroll = $(window).scrollTop();
       // $(".aa").text(scroll);
        console.log(scroll);

        if(scroll>=0){
            $('.section1 p').css('opacity', '1');
        }if(scroll>=350){

        }if(scroll>=510){

        }if(scroll>=760){

        }if(scroll>=997){

        }if(scroll<510){

        }
    }); 


});

  	
