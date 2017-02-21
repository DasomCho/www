
    $(document).ready(function() {
        var screenSize = $(window).width();
        var current=false;

        if( screenSize > 768){
            $("#videoBG").show();
            $("#imgBG").hide();
        }
        if(screenSize <= 768){
            $("#videoBG").hide();
            $("#videoBG").attr('src','');
            $("#imgBG").show();
        }

        $(window).resize(function(){    //웹브라우저 크기 조절시 반응하는 이벤트 메소드()
            screenSize = $(window).width(); 

            if( screenSize > 768 && current==false){

                $("#videoBG").show();
                $("#videoBG").attr('src','video/videoBG.mp4');
                $("#imgBG").hide();
                current=true;
            }
            if(screenSize <= 768){
                $("#videoBG").hide();
                $("#videoBG").attr('src','');
                $("#imgBG").show();
                current=false;
            }
        }); 
    });