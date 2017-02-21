// JavaScript Document

$(document).ready(function() {
    var timeonoff;
    var imageCount=2;  
    var cnt=1;  

    $('.gallery .link1').fadeIn('slow');
 
    function moveg(){
      cnt++;
     for(var i=1;i<=imageCount;i++){
            $('.gallery .link'+i).hide();
     }
     $('.gallery .link'+cnt).fadeIn('slow');		                    
      if(cnt==imageCount)cnt=0;
     }
    timeonoff= setInterval( moveg , 4000);
});