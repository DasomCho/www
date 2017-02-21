// JavaScript Document

$(document).ready(function() {
    var timeonoff;   //타이머
    var imageCount=4;   //이미지개수
    var cnt=1;   //이미지 순서
	var onoff=true; // true: 타이머 동작중 , false: 동작하지 않을때

    $('.btn1').css('background','url(images/btn_on.png)'); 
    $('.gallery .link1').fadeIn('slow'); 
 
    function moveg(){
      cnt++;  
     for(var i=1;i<=imageCount;i++){  
        $('.gallery .link'+i).hide(); //모든 이미지 hide
     }
     $('.gallery .link'+cnt).fadeIn('slow'); //해당 이미지 fadeIn
	 		                    
     for(var i=1;i<=imageCount;i++){
          $('.btn'+i).css('background','url(images/btn.png)'); //모든 버튼 off
      }
      $('.btn'+cnt).css('background','url(images/btn_on.png)'); //해당 버튼 on          
        if(cnt==imageCount) //카운트 초기화
           cnt=0;
     }
    timeonoff= setInterval( moveg , 4000); //타이머 재생

   $('.mbutton').click(function(event){  //버튼 클릭
	     var $target=$(event.target); //클릭한 버튼 $target
         clearInterval(timeonoff); //타이머 중지     
	 
	     for(var i=1;i<=imageCount;i++){
	         $('.gallery .link'+i).hide(); 
         } 
	 
		  if($target.is('.btn1')){   //클릭한 버튼의 클래스에 따라 변수값 변경
				 cnt=1;
		  }else if($target.is('.btn2')){
				 cnt=2; 
		  }else if($target.is('.btn3')){ 
				 cnt=3; 
		  }else if($target.is('.btn4')){
				 cnt=4; 
		  }
		  $('.gallery .link'+cnt).fadeIn('slow');  
		  
		  for(var i=1;i<=imageCount;i++){
			  $('.btn'+i).css('background','url(images/btn.png)'); 
		  }
          $('.btn'+cnt).css('background','url(images/btn_on.png)');
          if(cnt==imageCount)
              cnt=0;  
          timeonoff= setInterval( moveg , 4000); //타이머의 재생
		  
		  if(onoff==false){ //버튼 클릭시에는 타이머 정지 상태이더라도 재생으로 변경
		  onoff=true;
		  $('.ps').css('background','url(images/pause.png)');
		  }
    });
	
	//pause/play 버튼 클릭시 타이머 재생/정지
	 $('.ps').click(function(){ 
       if(onoff==true){
	       clearInterval(timeonoff);   // pause버튼 클릭시
		   $(this).css('background','url(images/play.png)');
           onoff=false;   
	   }else{
		  timeonoff= setInterval( moveg , 4000 ); //play버튼 클릭시
		   $(this).css('background','url(images/pause.png)');
		   onoff=true; 
	   }
  });	
	
});




