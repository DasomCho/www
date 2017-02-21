// JavaScript Document

$(document).ready(function () {
    var pcnt=1;  // 카운터
    var totalcnt=6; // 총 개수
		 
    $('.RightBtn').click(function () {
        pcnt++;  
        if(pcnt>totalcnt){  
            pcnt=1;  
        }
        $('.num strong').text(pcnt);  //해당 카운터 표시
        $('.news li').first().appendTo('.news .news_box_container'); //카운터 증가할때마다 첫번째 li가 맨뒤로
    });

    $('.leftBtn').click(function () {
        pcnt--;	 
        if(pcnt<1){  
            pcnt=totalcnt;  
        }
        $('.num strong').text(pcnt);   
        $('.news li').last().prependTo('.news .news_box_container');  //카운터 증가할때마다 마지막 li가 맨앞으로
    });
		 
    //버튼 hover효과
    $('.RightBtn').hover(function () {  
        $(this).css('background','url(images/righton.png)');
    }, function () {
        $(this).css('background','url(images/right.png)');
    });

    $('.leftBtn').hover(function () {
        $(this).css('background','url(images/lefton.png)');
    }, function () {
        $(this).css('background','url(images/left.png)');
    });
});