$(document).ready(function() {

    //waypoint 처리
    $('.wp1').waypoint(function() {    //스크롤링시 효과가 발생할 요소의 클래스나 아이디명.
        $('.wp1').addClass('animated fadeInUp');
    }, {
        offset: '60%'            //스크롤과의 거리
    });
    
    $('.wp2').waypoint(function() {
        $('.wp2').addClass('animated fadeInUp');
    }, {
        offset: '60%'
    });    
    
    $('.wp3').waypoint(function() {
        $('.wp3').addClass('animated fadeInUp');
    }, {
        offset: '60%'
    }); 
    
});

