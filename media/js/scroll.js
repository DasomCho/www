$(document).ready(function() {
    $(".content1 a").click(function() {
        $('html, body').animate({
            scrollTop: $("#scroll").offset().top
        }, 800);
    });
       
    //scroll 처리
        
    $(window).on('scroll', $.throttle(1000 / 1, function(){ 
        
        var scroll = $(window).scrollTop();
        //변수 scroll에 현재 문서가 스크롤된 거리 저장
        //var scroll = $(window).scrollTop();
        // console.log(scroll);
         
        if(scroll>=400){
            $('#header').addClass('sticky');
        }else{
            $('#header').removeClass('sticky');
        }

    })); 
});

