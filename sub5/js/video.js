// JavaScript Document

	$(document).ready(function() {
	   var position=0;  //최초위치
	   var movesize=206; //이미지 하나의 너비
	   var indexcnt=0;
	   
		$('.slide_gallery ul').after($('.slide_gallery ul').clone());
		   //슬라이드 겔러리를 한번 복제해서 ul 뒤에.. =>ul이 두개가됨
	
		 $('.button').click(function(event){
			var $target=$(event.target); //클릭한 버튼 = this
			
			if($target.is('.m1')){  //클릭한 버튼이 .m1이라는 클래스를 가지고 있다면(왼쪽 이동 버튼을 클릭했다면),
				if(position==-1648){
					$('.slide_gallery').css('left',0);
					position=0;
				 }
			
				 position-=movesize;  // 150씩 감소
				 $('.slide_gallery').stop().animate({left:position}, 'fast',
				   function(){      //animate 메소드에 callback함수 사용: 앞의 animate를 다 계산한 후에 동작.
					 if(position==-1648){  //-750까지 움직인 후에 left값 0으로 바꾸고 position도 0
						$('.slide_gallery').css('left',0);
						position=0;
					 }
				 });
			}else if($target.is('.m2')){ //클릭한 버튼이 .m2라는 클래스를 가지고 있다면(오른쪽 이동 버튼을 클릭했다면),
				  if(position==0){
					$('.slide_gallery').css('left',-1648);
					position=-1648;
				  }
	
				  position+=movesize; // 150씩 증가
				  $('.slide_gallery').stop().animate({left:position}, 'fast',
					function(){							
						if(position==0){
							$('.slide_gallery').css('left',-1648);
							position=-1648;
						}
			   });
			 }
		   });


            $('.videoList .slide_gallery li').click(function(){
                  indexcnt = $(this).index(); // 0~15

                  if(indexcnt==0 || indexcnt==8){
                  	$('.videoTitle').text('여행 잘하는 습관_박보검X김성주 편');
                  }else if(indexcnt==1 || indexcnt==9){
                   	$('.videoTitle').text('하나투어HanaTour CF Ver 2');
                  }else if(indexcnt==2 || indexcnt==10){
                   	$('.videoTitle').text('박보검 X 김성주와 함께하는 하나투어 TV 광고 On Air!');
                  }else if(indexcnt==3 || indexcnt==11){
                   	$('.videoTitle').text('하나투어 앱 CF_온라인박람회 론칭_박보검 편(15초)');
                  }else if(indexcnt==4 || indexcnt==12){
                   	$('.videoTitle').text('2016 하나투어 여행박람회 / Full ver. Video');
                  }else if(indexcnt==5 || indexcnt==13){
                   	$('.videoTitle').text('하나투어 제우스월드 CF');
                  }else if(indexcnt==6 || indexcnt==14){
                   	$('.videoTitle').text('HANATOUR CF 60s_South East Asia / 동남아시아편');
                  }else if(indexcnt==7 || indexcnt==15){
                   	$('.videoTitle').text('Hanatour CF 30s / The story of Time 편');
                  }
            });

		});
		  