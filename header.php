<?php
    /**
     * The template for displaying the header
     */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <!--Iconos font asome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css">
    <title>Crea tu página Web| Mktska</title>
    <!--Scrips de animacion gekko-->
    <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/gekkoo_HTML5_Canvas.js"></script>
<script>
    var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
    function init() {
        canvas = document.getElementById("canvas");
        anim_container = document.getElementById("animation_container");
        dom_overlay_container = document.getElementById("dom_overlay_container");
        var comp=AdobeAn.getComposition("4C741ECC85ED8C4CAB7B03759F67D5C9");
        var lib=comp.getLibrary();
        handleComplete({},comp);
    }
    function handleComplete(evt,comp) {
        //This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
        var lib=comp.getLibrary();
        var ss=comp.getSpriteSheet();
        exportRoot = new lib.gekkoo_HTML5Canvas();
        stage = new lib.Stage(canvas);	
        //Registers the "tick" event listener.
        fnStartAnimation = function() {
            stage.addChild(exportRoot);
            createjs.Ticker.setFPS(lib.properties.fps);
            createjs.Ticker.addEventListener("tick", stage);
        }	    
        //Code to support hidpi screens and responsive scaling.
        function makeResponsive(isResp, respDim, isScale, scaleType) {		
            var lastW, lastH, lastS=1;		
            window.addEventListener('resize', resizeCanvas);		
            resizeCanvas();		
            function resizeCanvas() {			
                var w = lib.properties.width, h = lib.properties.height;			
                var iw = window.innerWidth, ih=window.innerHeight;			
                var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
                if(isResp) {                
                    if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
                        sRatio = lastS;                
                    }				
                    else if(!isScale) {					
                        if(iw<w || ih<h)						
                            sRatio = Math.min(xRatio, yRatio);				
                    }				
                    else if(scaleType==1) {					
                        sRatio = Math.min(xRatio, yRatio);				
                    }				
                    else if(scaleType==2) {					
                        sRatio = Math.max(xRatio, yRatio);				
                    }			
                }			
                canvas.width = w*pRatio*sRatio;			
                canvas.height = h*pRatio*sRatio;
                canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';				
                canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
                stage.scaleX = pRatio*sRatio;			
                stage.scaleY = pRatio*sRatio;			
                lastW = iw; lastH = ih; lastS = sRatio;            
                stage.tickOnUpdate = false;            
                stage.update();            
                stage.tickOnUpdate = true;		
            }
        }
        makeResponsive(true,'both',true,1);	
        AdobeAn.compositionLoaded(lib.properties.id);
        fnStartAnimation();
    }
</script>
<?php wp_head(); ?>
</head>

<body onload="init();">
    <div class="container-fluid heder-telefono">

        <a href="tel:5571666346" class="link-telefono" target="_blank"><i class="fas fa-phone"></i> (55)
            7166-6346</a>

    </div>
    <div class="container-fluid heder-navbar">
        <div class="container">
            <div class="row">
                <div class="col-3 contenedor-logo ">
                    <a href=""><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.svg" alt="Logo mktska " class="img-logo"></a>
                </div>
                <div class="col-9 contenedor-navbar">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                         <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contacto</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
            </div>
        </div>
    </div>
    <!--Fin del header-->