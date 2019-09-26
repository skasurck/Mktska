$(document).ready(function(){
    //código a ejecutar cuando el DOM está listo para recibir instrucciones.
    $('#quehacemos').waypoint(function(direction) {
		quehacemos_bounce(this.element, direction); //when using waypoint, this refers to the waypoint object
    },{offset:'55%'});

    $('#tarjetaInicioDiseño').waypoint(function(direction) {
		tarjetaInicioDiseño(this.element, direction); //when using waypoint, this refers to the waypoint object
    },{offset:'55%'});
    
    
	$('#tarjetaInicioMDigital').waypoint(function(direction) {
		tarjetaInicioMDigital(this.element, direction); //when using waypoint, this refers to the waypoint object
    },{offset:'55%'});
    
    
    
    $('#tarjetaInicioPosicionamiento').waypoint(function(direction) {
		tarjetaInicioPosicionamiento(this.element, direction);
	},{offset:'55%'});

    function quehacemos_bounce(target, direction){
        if(direction === "down"){
            $(target).addClass("animated bounceInDown");
      
            setTimeout(function(){
            $(target).removeClass("animated bounceInDown");
            $(target).removeClass("hidden");
        }, 500);
        }
    }
    
    $('#imgsomos').waypoint(function(direction) {
		imgsomos(this.element, direction); //when using waypoint, this refers to the waypoint object
    },{offset:'55%'});

 function tarjetaInicioDiseño(target, direction){
    if(direction === "down"){
        $(target).addClass("animated fadeInLeft");
  
        setTimeout(function(){
        $(target).removeClass("animated fadeInLeft");
        $(target).removeClass("hidden");
    }, 2000);
    }
}

function tarjetaInicioMDigital(target, direction){
    if(direction === "down"){
        $(target).addClass("animated fadeInRight");
  
        setTimeout(function(){
        $(target).removeClass("animated fadeInRight");
        $(target).removeClass("hidden");
    }, 2000);
    }
}


function tarjetaInicioPosicionamiento(target, direction){
    if(direction === "down"){
        $(target).removeClass("hidden");
        $(target).addClass("animated zoomIn");
        setTimeout(function(){
            $(target).removeClass("animated zoomIn");
    }, 2000);
    }
}
function imgsomos(target, direction){
    if(direction === "down"){
        $(target).addClass("animated fadeInRight");
  
        setTimeout(function(){
        $(target).removeClass("animated fadeInRight");
        $(target).removeClass("hidden");
    }, 1000);
    }
}
});