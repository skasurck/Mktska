
    <?php
    /*se muestra el footer */ get_header(); ?>
    <!--INICIO slider
    <section class="container-fluid slider">
        <div id="carouselExampleInterval" class="slider-home carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active " >
                    <div id="animation_container" class="contenedor-animacion">
                    <canvas id="canvas" width="1600" height="400" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
                    <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:1600px; height:400px; position: absolute; left: 0px; top: 0px; display: block;">
                    </div>
                </div>  
            </div>
                    
                    <div class="carousel-caption">
                        <div class="row">
                            
                            <div class="col-12 texto-slider1">
                                <h1>DISEÑO DE PAGINAS WEB</h1>
                                <p>Página adaptable a todos los dispositivos.</p>
                            </div>
                          
                        </div>
                           
                    </div>  
               
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    Fin de Slider-->
    <!-- Inicio de div de información-->
        <section class="container-fluid cuadro-info" >
            <div class="row justify-content-md-center">
                <div class="col-md-auto titulo-info">
                    <h1>Diseñamos páginas web exitosas para llegar a más clientes. <br>
                    Nos especializamos en el diseño creativo posicionamiento web y Marketing Digital</h1>
                </div>
            </div>
            
            <div class="row justify-content-md-center tarjetas-info">
                <div class="col-12 col-md-3">
                    <h2><i class="fas fa-desktop icono-tarjetas"></i> Diseño Web Creativo</h2>
                    <p class="texto-tarjetas primer-texto-tarjetas">Nuestros diseñadores tienen una extensa experiencia en paginas creativas. Contamos con diseño de páginas web personalizadas.</p>
                </div>
                <div class="col-12 col-md-3">
                    <h2><i class="fas fa-chart-line icono-tarjetas"></i> Posicionamiento SEO</h2>
                    <p class="texto-tarjetas primer-texto-tarjetas">Con un posicionamiento en buscadores, su 
                        sitio aparece cuando y donde sus cliente
                        potenciales lo están buscando, mejorando 
                        sus ventas.</p>
                </div>
                <div class="col-12 col-md-3">
                    <h2><i class="fas fa-bullhorn icono-tarjetas"></i> Marketing Digital</h2>
                    <p class="texto-tarjetas primer-texto-tarjetas">El marketing digital es la aplicación
                        de las estrategias de comercialización 
                        llevadas a cabo en los medios digitales.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto boton-info ">
                    <a  class="btn btn-light btn-lg btn-tarjeta-info">Cotiza tu Página web ¡Gratis!</a>
                </div>
            </div>
        </section>
        <section class="container-fluid cuadro-info-2">
            <div class="row justify-content-md-center">
                <div class="col-auto col-md-6">
                    <h1 class="titulo-info-2">Somos la mejor opcion de Diseño web y Marketing Digital en CDMX</h1>
                    <p class="texto-info-2">Diseñamos páginas web  creativas que se adaptan todos los dispositivos, enfocadas a vender por Internet ya sea productos o servicios.Contamos con las mejores estrategias de Marketing Digital, para que tu página web 
                        sea la mejor entre la competencia.</p>
                    <a  class="btn btn-light btn-lg btn-info-2 mx-auto d-block">¡Incrementa tus ventas!</a> 
                </div>
                <div class="col-auto col-md-6">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/responsive-1166833.svg" class="img-info-2" alt="">
                </div>
            </div>
        </section>
        <section class="container-fluid baner">
            <h1>¡LLEGASTE AL LUGAR CORRECTO! <br>Con el marketing digital y nuestros diseños web usted hará crecer su negocio de manera Rápida y Efectiva</h1>
        </section>
        <section class="contaiener-fluid cuadro-clientes">
            <div class="row justify-content-center">
                <div class="col-auto titulos-clientes">
                    <h2>NUESTROS CLIENTES</h2>
                </div>
            </div>
            <div class="row  justify-content-center img-clientes">
                <div class="col-12 col-md-2 align-self-center ">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/LOGOBLUECLEANERokCURVAS.svg" class="logo-bluecleaner mx-auto d-block" alt="">
                </div>
                <div class="col-12 col-md-2 align-self-center ">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/logocanalava.svg" class="logo-canalava mx-auto d-block" alt="">
                </div>
                <div class="col-12 col-md-2 align-self-center ">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/logo1.svg" class="logo-estours mx-auto d-block" alt="">
                </div> 
                <div class="col-12 col-md-2 align-self-center ">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/elcuartodelavado_logo.svg" class="logo-cuarto-lavado mx-auto d-block" alt="">
                </div>
                <div class="col-12 col-md-2 align-self-center">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/blaanco.webp" class="logo-armored mx-auto d-block" alt="">
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-auto titulos-clientes-2">
                    <h2>CERTIFICACIONES</h2>
                </div>
            </div>
            <div class="row justify-content-center img-clientes">
                <div class="col-12 col-md-2 align-self-center ">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/Google_Analytics_Logo_2015.png" class="logo-analitics mx-auto d-block" alt="">
                </div>
                <div class="col-12 col-md-2 align-self-center ">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/822px-Google_Ads_logo.svg.png" class="logo-ads mx-auto d-block" alt="">
                </div>
                <div class="col-12 col-md-2 align-self-center ">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/1_rrRcaZKZsjerUveQqTSx7A.png" class="logo-platzi mx-auto d-block" alt="">
                </div> 
                <div class="col-12 col-md-2 align-self-center">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/HubSpot-Logo-PNG.png" class="logo-hubspot mx-auto d-block" alt="">
                </div>
                <div class="col-12 col-md-2 align-self-center">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/fBlue.png" class="logo-face mx-auto d-block" alt="">
                </div>
            </div>
        </section>

    <!-- Fin de div de información-->
    <!--Inicio del mapa-->
    <section class="container-fuild mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5900468153554!2d-99.10786968459993!3d19.4301110457939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fb77d30804ed%3A0xe8825d39841822d7!2sMKTSKA!5e0!3m2!1ses-419!2smx!4v1556540389972!5m2!1ses-419!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <?php 
    /* se va mostrar el footer*/
    get_footer(); ?>