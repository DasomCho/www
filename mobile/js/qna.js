// JavaScript Document

  $(document).ready(function () {
    var article = $('.article');  //모든 질문과 답변
    
    $('.article .trigger').click(function(){   //각각의 질문을 클릭하면
      var myArticle = $(this).parents('.article'); //클릭한 질문의 조상의 li를 찾아라.
      
      if(myArticle.hasClass('hide')){ //클릭한 li가 닫힌 상태라면
        article.find('.a').slideUp(300);   //모든 li의 답변을 닫아라
        article.removeClass('show').addClass('hide'); //모든 li show -> hide
        article.find('.q').css('background','url(images/qx2.png) left 4px no-repeat');
        article.find('.q').css('background-size','12px 12px');
          
        myArticle.removeClass('hide').addClass('show'); //클릭한 li에서 hide 없애고 show로 클래스 교체
        myArticle.find('.a').slideDown(300); //클릭한 li의 답변만 열림
        $(this).parent('.q').css('background','url(images/qonx2.png) left 4px no-repeat');
        $(this).parent('.q').css('background-size','12px 12px');

      }else{  // 클릭한 li가 열린 상태라면
        myArticle.removeClass('show').addClass('hide'); //show -> hide
        myArticle.find('.a').slideUp(300); //클릭한 li의 답변을 닫아라
        $(this).parent('.q').css('background','url(images/qx2.png) left 4px no-repeat');
        $(this).parent('.q').css('background-size','12px 12px');
      }
    });
    
    //모두 여닫기 기능 추가
     $('.all').toggle(function(){ 
      article.find('.a').slideDown(300);  //모든 답변을 다 열어라
      article.removeClass('hide').addClass('show'); //모든 li hide -> show
      $(this).text('모두닫기');
      $(this).css('background','url(images/minusx2.png) left center no-repeat');
      $(this).css('background-size','15px 15px'); 
      $('.q').css('background','url(images/qonx2.png) left 4px no-repeat');
      $('.q').css('background-size','12px 12px');
      },function(){ 
        article.find('.a').slideUp(300);  //모든 li의 답변을 닫아라
        article.removeClass('show').addClass('hide'); //모든 li show -> hide
        $(this).text('모두열기');
        $(this).css('background','url(images/plusx2.png) left center no-repeat');
        $(this).css('background-size','15px 15px'); 
        $('.q').css('background','url(images/qx2.png) left 4px no-repeat');
        $('.q').css('background-size','12px 12px');
     });

  });