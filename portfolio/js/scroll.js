$(document).ready(function() {
    $(".content1 a").click(function() {
        $('html, body').animate({
            scrollTop: $("#scroll").offset().top
        }, 800);
    });
    
    //scroll 처리
    $(window).on("scroll",function(){ 

        //변수 ht에 현재 브라우저의 높이값 저장
        //var ht = $(window).height();

        //변수 scroll에 현재 문서가 스크롤된 거리 저장
        var scroll = $(window).scrollTop();
        console.log(scroll);

        if(scroll>=400){
            $('#header').css('background-color', '#fff');
            $('#header').css('box-shadow','0 1px 20px -3px rgba(153,153,153,1)');
        }
        if(scroll<400){
            $('header').css('background', '');
            $('#header').css('box-shadow','');
        }

    }); 

});

