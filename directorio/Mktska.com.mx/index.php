<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110399060-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110399060-2');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css">
<?php wp_head(); ?>
</head>

<body >
    <div class="content-tel">
        <div class="tlefonos">
            <ul class="numeros">
                <li class="items-tel"><a href="tel:5583759049">5583759049</a></li>
                <li class="items-tel"><a href="https://www.facebook.com/Marketing.ska/"><i class="fa fa-facebook mr-3"></i></a></li>
                <li class="items-tel"><a href="https://twitter.com/Irving_rangel_p"><i class="fa fa-twitter mr-5"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- 
1 - Navbar with brand left, links on center and right that collapse in the vertical mobile
    menu
-->

    <nav class="navbar navbar-expand-md  navbar-light navmkt">
        <a class="navbar-brand" href="#">
    <img src="<?php bloginfo( 'template_url' ); ?>/logo.svg" width="120"  alt="Logo de la compañia MKTSka">
  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar7">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="navbar-collapse collapse justify-content-stretch" id="navbar7">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item ">
                    <a class="nav-link active" href="index.html">Inicio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="Servicios.html">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Paquetes.html">Paquetes</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="portafolio.html">Portafolio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="Contacto.html">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <header class="container-fluid">
    <div class="imagen-header"><img src="<?php bloginfo( 'template_url' ); ?>/LOGO.png" class="rounded mx-auto d-block logo-header" alt="..."></div>
    </header>

    <footer class="footer">
            <div class="container-fluid">
                <div class="row container">
                    <div class="col-12 col-md-6 skafooter" id="ska2">
                        <ul>
                            <li><a href="https://www.facebook.com/Marketing.ska/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/Irving_rangel_p"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/marketing_ska/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://plus.google.com/106576961941231804129"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/irving-rangel-p/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6 skafooter">
                        <p itemprop="openingHours" content="Mo-Fr 08:00-19:00" style="margin-top:2px; margin-bottom:2px;">Horario de servicios de Lun a Vie de 8:00 a 20 hrs</p><br/>
                        <p itemprop="openingHours" content="Sa-Su 08:00-16:00" style="margin-top:2px;margin-bottom:2px;">Sábado de 8:00 a 17:00hrs Dom de 10:00 a 16:00hr</p><br/>
                        <p itemprop="telephone" content="+5256883430" style="margin-top:2px;margin-bottom:2px;">Teléfono: 5571666346.</p>
                    </div>
                </div>
            </div>
        </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/popper.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/scriptska.js"></script>
    <?php wp_footer(); ?>
</body>

</html>
