// JavaScript Document

    $(document).ready(function() {
       
        
        var menuopen= false;
        
   		$(".btn").click(function() {
            
            var documentHeight =  $(document).height(); //이 코드를 안쓰면 첫화면에 보이는 100% 높이만큼만 꽉차기때문에 스크롤을 내리면  적용이 안되어있다. (총 컨텐츠의 높이를 계산해서 box의 높이로 넣어주는 코드!!)
            $('header').css('background', '');
            menuopen=true;
            
            
            $(".box").css('height',documentHeight);
            
		    $("#menu").animate({top:0,opacity:1}, '300');
		    $(".box").fadeIn('300');
		});
   
		$(".mclose, .box").click(function() {
			$("#menu").animate({top:'-426px',opacity:0}, '200');
			$(".box").fadeOut('200');
            
            menuopen= false;
		});

  		$("#btn1").toggle(function() {
            $("#content").fadeIn('200');
	   }, function() {
            $("#content").fadeOut('200');
	   });
        
        
       //scroll 처리
        $(window).on("scroll",function(){ 

            //변수 ht에 현재 브라우저의 높이값 저장
            //var ht = $(window).height();

            //변수 scroll에 현재 문서가 스크롤된 거리 저장
            var scroll = $(window).scrollTop();
            // $(".aa").text(scroll);
            console.log(menuopen);

            if(scroll>=65){
                $('.about img').css('margin-left', '0');
                $('.about img').css('opacity', '1');
            }
            if(scroll>=350){
                $('.about p').css('opacity', '1');
            }
           
            if(scroll>=760){
                $('.business img').css('margin-left', '0');
                $('.business img').css('opacity', '1');
            }
            if(scroll>=997){
                $('.business p').css('opacity', '1');
            }if(scroll>=510){
                if(menuopen == false){
                    $('header').css('background', 'rgba(255,255,255,.9)');
                }
            }
            if(scroll<510){
                $('header').css('background', '');
            }
           
        }); 
        
        
        
	});
  	
