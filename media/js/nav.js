$(document).ready(function(){
    $("#nav-icon").click(function() {
        $(this).toggleClass('open');
        if($(this).hasClass('open')){
            $("nav").animate({right:0,opacity:1}, 'fast');
            $(".box").show();
            //$("body").css({overflow:'hidden'}).bind('touchmove', function(e){e.preventDefault()});
        } 
        else{
            $("nav").animate({right:'-100%',opacity:0}, 'fast');
            $(".box").hide();
            //$("body").css({ overflow: '' }).unbind('touchmove');
        } 
    });
    
    $(".box, .open").click(function() {
        $("#nav-icon").removeClass('open');
        $("nav").animate({right:'-100%',opacity:0}, 'fast');
        $(".box").hide();
    });


    var current=0;
    $(window).resize(function(){    //웹브라우저 크기 조절시 반응하는 이벤트 메소드()
        var screenSize = $(window).width(); 
        if( screenSize > 1007){
            current=1;
            $("nav").css({right:0,opacity:1});
            $(".box").hide();
        }
        if(current==1 && screenSize < 1007){
            $("#nav-icon").removeClass('open');
            $("nav").css({right:'-100%',opacity:0});
            $(".box").hide();
            current=0;
        }
    }); 

});


