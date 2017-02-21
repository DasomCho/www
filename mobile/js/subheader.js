// JavaScript Document

    $(document).ready(function() {
        
        $('header').css('background', 'rgba(255,255,255,.9)');
        
   		$(".btn").click(function() {
            
            var documentHeight =  $(document).height(); //이 코드를 안쓰면 첫화면에 보이는 100% 높이만큼만 꽉차기때문에 스크롤을 내리면  적용이 안되어있다. (총 컨텐츠의 높이를 계산해서 box의 높이로 넣어주는 코드!!)
            $(".box").css('height',documentHeight);
            
            $('header').css('background', '');
		    $("#menu").animate({top:0,opacity:1}, '300');
		    $(".box").fadeIn('300');
		});
   
		$(".mclose, .box").click(function() {
            $('header').css('background', 'rgba(255,255,255,.9)');
			$("#menu").animate({top:'-426px',opacity:0}, '200');
			$(".box").fadeOut('200');

		});

  		$("#btn1").toggle(function() {
            $("#content").fadeIn('200');
	       }, function() {
            $("#content").fadeOut('200');
	    });
        
   });
