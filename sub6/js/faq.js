// JavaScript Document

   $(document).ready(function () {
    var article = $('.article');  //모든 질문과 답변
    
    $('.article .trigger').click(function(){   //각각의 질문을 클릭하면
      var myArticle = $(this).parents('.article'); //클릭한 질문의 조상의 li를 찾아라.
      
      if(myArticle.hasClass('hide')){ //클릭한 li가 닫힌 상태라면
        article.find('.a').slideUp(200);   //모든 li의 답변을 닫아라
        article.removeClass('show').addClass('hide'); //모든 li show -> hide
        article.find('.q').css('background','#fff url(images/content4/q.jpg) 10px center no-repeat');
        article.find('.trigger').css('color','#666')
        
        myArticle.removeClass('hide').addClass('show'); //클릭한 li에서 hide 없애고 show로 클래스 교체
        myArticle.find('.a').slideDown(200); //클릭한 li의 답변만 열림
        $(this).parent('.q').css({'background':'#c95074 url(images/content4/q_on.jpg) 10px center no-repeat'});
        $(this).css('color','#fff')

      }else{  // 클릭한 li가 열린 상태라면
        myArticle.removeClass('show').addClass('hide'); //show -> hide
        myArticle.find('.a').slideUp(200); //클릭한 li의 답변을 닫아라
        $(this).parent('.q').css('background','#fff url(images/content4/q.jpg) 10px center no-repeat');
        $(this).css('color','#666')
      }
    });
    
    //모두 여닫기 기능 추가
     $('.all').toggle(function(){ 
      article.find('.a').slideDown(300);  //모든 답변을 다 열어라
      article.removeClass('hide').addClass('show'); //모든 li hide -> show
      $(this).text('모두닫기');
      $(this).css('background','url(images/content4/close.png) right center no-repeat');
      $('.q').css('background','#c95074 url(images/content4/q_on.jpg) 10px center no-repeat');
      $('.trigger').css('color','#fff');
      },function(){ 
        article.find('.a').slideUp(300);  //모든 li의 답변을 닫아라
        article.removeClass('show').addClass('hide'); //모든 li show -> hide
        $(this).text('모두열기');
        $(this).css('background','url(images/content4/open.png) right center no-repeat');
        $('.q').css('background','url(images/content4/q.jpg) 10px center no-repeat');
        $('.trigger').css('color','#666');
     });

  });