// JavaScript Document

$(document).ready(function() {
    var position=0;  //최초위치
    var movesize=285; //이미지 하나의 너비

    $('.slide_gallery ul').after($('.slide_gallery ul').clone()); //슬라이드 gallery복제

    $('.button').click(function(event){
        
        var $target=$(event.target);

        if($target.is('.m1')){  //왼쪽 버튼 클릭
            if(position==-1140){
                $('.slide_gallery').css('left',0);
                position=0;
             }

             position-=movesize;  // 285씩 왼쪽으로 이동
             $('.slide_gallery').stop().animate({left:position}, 'fast',
               function(){
                 if(position==-1140){  //-1140까지 움직인 후에 left:0, position=0
                    $('.slide_gallery').css('left',0);
                    position=0;
                 }
             }); 
        }else if($target.is('.m2')){ //오른쪽 버튼 클릭
              if(position==0){
                $('.slide_gallery').css('left',-1140);
                position=-1140;
              }

              position+=movesize; // 150씩 증가
              $('.slide_gallery').stop().animate({left:position}, 'fast',
                function(){							
                    if(position==0){
                        $('.slide_gallery').css('left',-1140);
                        position=-1140;
                    }
                });
        }
    });
});
		  