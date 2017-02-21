// JavaScript Document

$(document).ready(function(){
    var cnt=3; //탭메뉴 개수
    $('.tabs .contlist:eq(0)').show(); //.conlist 중 첫번째 show
    $('.tabs .tab0').css('background','url(images/tab0on.jpg)'); //첫번째 탭 버튼 on
  
    $('.tabs .tab').each(function (index) {  // 각 컨텐츠에 index 번호 부여
        $(this).click(function(){   //각각의 탭 메뉴를 클릭하면,
            $(".tabs .contlist").hide(); //모든 컨텐츠 hide
            $(".tabs .contlist:eq("+index+")").show(); //클릭한 탭 컨텐츠 show

            for(var i=0;i<=cnt;i++){ //탭메뉴 개수만큼 loop
                $('.tab'+i).css('background','url(images/tab'+i+'.jpg)'); //탭 버튼 모두 off
            }
            $(this).css('background','url(images/tab'+(index)+'on.jpg)'); //해당 탭 버튼 on
        });
    });
});
