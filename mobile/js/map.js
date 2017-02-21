// JavaScript Document

 function initialize() {
  var myLatlng = new google.maps.LatLng(37.571822, 126.984140);
  var myOptions = {
   zoom: 15,
   center: myLatlng

  }
  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
 
  var marker = new google.maps.Marker({
   position: myLatlng, 
   map: map, 
   title:"하나투어 빌딩"
  });   
  
 
  var infowindow = new google.maps.InfoWindow({
   content: "(주)하나투어 빌딩 서울특별시 종로구 인사동 5길 41"
  });
 
  infowindow.open(map,marker);
 }
 
 
 window.onload=function(){
  initialize();
 }

