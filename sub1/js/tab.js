// JavaScript Document

$(document).ready(function(){
    var cnt=3; //탭메뉴 개수 ***
    $('.tabs .contlist:eq(0)').show(); //conlist라는 이름을 갖고 있는 컨텐츠 중 첫번째. (loadChild로는 1)
    $('.tabs .tab0').css('background','url(images/content2/tab0on.jpg) no-repeat'); // 첫번째 탭메뉴 버튼 on

    $('.tabs .tab').each(function (index) {     // 각 컨텐츠에 index 번호를 매겨줌
        $(this).click(function(){   //각각의 탭메뉴를 클릭하면, (index:0 1 2 )
            $(".tabs .contlist").hide(); //모든 탭 내용 display:none
            $(".tabs .contlist:eq("+index+")").show(); //클릭한 탭 내용만 활성화 

            for(var i=0;i<=cnt;i++){ //탭메뉴 개수만큼 loop
                $('.tab'+i).css('background','url(images/content2/tab'+i+'.jpg) no-repeat'); //모든 탭메뉴 버튼 off
            }
            $(this).css('background','url(images/content2/tab'+(index)+'on.jpg) no-repeat'); // 클릭한 탭메뉴 버튼 on
        });
    });
});
