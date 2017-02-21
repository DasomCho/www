// JavaScript Document

   $(document).ready(function () {
    
    $('.more .btn').click(function(){   //각각의 더보기 버튼을 클릭하면
      var myMore = $(this).parents('.more'); //클릭한 질문의 조상의 div를 찾아라.
      
      if(myMore.hasClass('hide')){ //클릭한 div가 닫힌 상태라면
        myMore.removeClass('hide').addClass('show'); //클릭한 div에서 hide 없애고 show로 클래스 교체
        myMore.find('.content').slideDown(400); //클릭한 div의 내용만 열림

      }else{  // 클릭한 div가 열린 상태라면
        myMore.removeClass('show').addClass('hide'); //show -> hide
        myMore.find('.content').slideUp(400); //클릭한 div의 내용을 닫아라
      }
    });
    

  });