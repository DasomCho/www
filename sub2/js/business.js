// JavaScript Document

$(document).ready(function() {
	$('.contentArea h3').hover(function () {
		$(this).stop().animate({left:-332},800);
	}, function () {
		$(this).stop().animate({left:0},800);
	});
});




