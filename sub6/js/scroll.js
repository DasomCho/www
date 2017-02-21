// JavaScript Document
 	$(document).ready(function () {
	    $(window).on("scroll",function(){ 
 
		  //변수 ht에 현재 브라우저의 높이값 저장
		  //var ht = $(window).height();
		  
		  //변수 scroll에 현재 문서가 스크롤된 거리 저장
		  var scroll = $(window).scrollTop();
		  $(".aa").text(scroll);
		  console.log(scroll);  //F12 눌러서 console창을 보면 높이값이 찍힘
		
		  if(scroll>=0){      //원하는 높이값 이상일때
		    
		  }else if(scroll>=0){   //그 다음 높이값 이상일때
	
		  }else if(scroll>=0){
		 
		  }else if(scroll>=0){
		
		  }
    }); 
	   
		  
   });
