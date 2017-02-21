// JavaScript Document

$(document).ready(function(){
  var cnt=2;
  $('.tabs .mainCon:eq(0)').show(); 
    $('.tabs .tab1').css('border-bottom','2px solid #97b2c8');
  
  $('.tabs .tab').each(function (index) {
    $(this).click(function(){    
        $(".tabs .mainCon").hide(); 
        $(".tabs .mainCon:eq("+index+")").show();
	  for(var i=1;i<=cnt;i++){
          $('.tab'+i).css('border-bottom','');
      }
        $(this).css('border-bottom','2px solid #97b2c8'); 
   });
  });
});

