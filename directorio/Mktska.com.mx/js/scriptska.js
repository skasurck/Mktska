// JavaScript Document

//Mostar el menu en celular
$(document).ready(function(){
	$(".menu-icon").on("click",function(){
		$("nav ul").toggleClass("showing");
	});
});
//Efecto scroll
$(window).on("scroll", function(){
	if($(window).scrollTop()) {
		$("nav").addClass("black");
		$("nav").addClass("white");

	}
	else{
		$("nav").removeClass("black");
		$("nav").removeClass("white");

	}

});
