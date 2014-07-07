<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js"> <![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Global Park</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
        <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'> -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>

        <script src=<?php get_home_url(); ?>"/wp-content/themes/GlobalPark/js/vendor/modernizr-2.6.2.min.js"></script>

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon" />

        <!-- WP HEAD -->
      <?php wp_enqueue_script('jquery');?>
      <?php wp_head();?>

      <?php

        //response generation function

        $response = "";

        //function to generate response
        function my_contact_form_generate_response($type, $message){

          global $response;

          if($type == "success") $response = "<div class='success'>{$message}</div>";
          else $response = "<div class='error'>{$message}</div>";

        }

        //response messages
        $missing_content = "Falta información.";
        $email_invalid   = "Email no valido.";
        $message_unsent  = "El mensaje no se pudo enviar. Intente de nuevo.";
        $message_sent    = "¡Gracias! Tu mensaje se envió exitosamente.";

        //user posted variables
        $name = "Contacto GlobalPark";
        $email = $_POST['message_email'];
        $message = "Responder a: " . $email;
        $human = $_POST['message_human'];

        //php mailer variables
        $to = "degd86@gmail.com";
        $subject = "Mensaje de contacto de GlobalPark.mx";
        $headers = 'From: '. $email . "\r\n" .
          'Reply-To: ' . $email . "\r\n";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

      ?>


      <style type="text/css">
        .error{
          padding: 5px 9px;
          border: 1px solid red;
          color: white;
          border-radius: 3px;
        }
       
        .success{
          padding: 5px 9px;
          border: 1px solid green;
          color: white;
          border-radius: 3px;
        }
      </style>

      <!-- ICONS -->
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/x-icon" />

    </head>
    <body id="top" data-spy="scroll" data-target=".navbar" data-offset="85">
        <!--[if lte IE 8]>
            <div style="width:100%; height:80px; position:absolute; top:0; background-color:white;"><h1 class="browsehappy centered">El navegador que estás utilizando es <strong>MUY viejo</strong>. Por favor <a href="http://browsehappy.com/">actualiza tu navegador</a>.</h1></div>
        <![endif]-->

    <div id="entrar" class="row" style="width:100%; margin-left:0; "><a href="#about"><img class="img-responsive center-block centered" src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/flecha_entrar.svg" width="40px" /></a></div>

    <div id="site-header">

    <!-- HOME -->
    <section id="home">
      <div class="row">
        <div class="container">
          <div id="logo" class="col-xs-12" style="width:100%"><h1 class="centered"><img id="logo-inicio" class="img-responsive centered" src="<?php echo get_template_directory_uri(); ?>/img/logo_inicio.svg"/></h1></div>
        </div>
      </div>
    </section><!-- /HOME -->
    </div>

    <div id="site-wrapper">
    <!-- NAV -->
    <nav id="affix-nav" class="navbar navbar-default" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header navbar-left">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#top"><img id="logo-menu" src="<?php echo get_template_directory_uri(); ?>/img/logo_menu.svg"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-navbar-collapse">
          <ul id="nav-links" class="nav navbar-nav">
            <!-- <li><a href="#">Blog</a></li> -->
            <li><a href="#about">Nosotros</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#portafolio">Portafolio</a></li>
            <li><a href="#clientes">Clientes</a></li>
            <li><a href="#contacto">Contacto</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav><!-- /NAV -->

    
    <!-- ¿Que Hacemos? -->
    <section id="about">
      <div class="wrap" style="vertical-align:middle;">
        <div class="container" id="contenido-about">
          <div class="row" id="frases-about">
            <div class="col-md-12" style="margin-top:40px; text-align:center;  width:100%; height:100%;">
              <!-- <h2>¿Qué Hacemos?</h2>
              <p class="Roboto">Creamos tu imagen —empresarial o personal— desde el principio, empezando por el logotipo, pasando por sus aplicaciones y sublogotipos, hasta productos promocionales. Nos especializamos en decirte qué mensaje lanzar’.</p>
              <p class="Roboto">Le damos el valor que merece tu trabajo, misión, visión, clientes, producto y mercado  porque nos especializamos en conocerte.</p>
              <h4>El futuro de tu Imagen estará en una empresa de comunicación, capaz de dar soluciones rápidas y efectivas a sus clientes.</h4>
            </div>
            <div class="mobile-clear visible-xs">
            </div> -->
            <div id="tagline1"><h1 style="font-size: 40px;" class="Raleway frase-show">El futuro de tu <strong style="color: #00e7b4" class="Raleway">Imagen</strong> estará en una empresa de comunicación, capaz de dar soluciones rápidas y efectivas a sus <strong style="color: #00e7b4" class="Raleway">clientes</strong>.</h1></div>
            <div id="tagline2" class="hidden"><h1 style="font-size: 40px;" class="Raleway frase-show">La identidad de tu <strong style="color: #00e7b4" class="Raleway">empresa</strong> es quien la define y le da personalidad y carácter.</div>
          </div>
        </div>
      </div>
    </section><!-- /¿Que Hacemos? -->

    <!-- Servicios -->
    <section id="servicios">
      <div class="titulo-servicios">
      </div>
      <div class="container" id="sevicios-contenido">
        <div class="row">
          <div class="container">
            <h1>Servicios</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
              <div class="row" id="servicios-select">
                <a href="#serv1" data-toggle="modal" data-target="#servModal1"><div class="tab-select col-md-4 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/Servicios/01.png" class="img-responsive"></div></a>
                <a href="#serv2" data-toggle="modal" data-target="#servModal2"><div class="tab-select col-md-4 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/Servicios/02.png" class="img-responsive"></div></a>
                <a href="#serv3" data-toggle="modal" data-target="#servModal3"><div class="tab-select col-md-4 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/Servicios/03.png" class="img-responsive"></div></a>
                <a href="#serv4" data-toggle="modal" data-target="#servModal4"><div class="tab-select col-md-4 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/Servicios/04.png" class="img-responsive"></div></a>
                <a href="#serv5" data-toggle="modal" data-target="#servModal5"><div class="tab-select col-md-4 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/Servicios/05.png" class="img-responsive"></div></a>
                <a href="#serv6" data-toggle="modal" data-target="#servModal6"><div class="tab-select col-md-4 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/Servicios/06.png" class="img-responsive"></div></a>
              </div>
          </div>

        </div>
      </div>
    </section><!-- Servicios -->

    <!-- Servicios Personalizados -->
    <section id="personalizados">
      <div class="container" id="personalizados-contenido">
        <div class="row">
          <div class="container">
            <h1>Servicios Personalizados</h1>
          </div>
        </div>
        <div class="row" id="iconos-servicios">
          <div class="col-sm-4 col-xs-4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Iconos Servicios/01.svg" height="150" class="img-responsive">
          </div>
          <div class="col-sm-4 col-xs-4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Iconos Servicios/02.svg" height="150" class="img-responsive">
          </div>
          <div class="col-sm-4 col-xs-4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Iconos Servicios/03.svg" height="150" class="img-responsive">
          </div>
        </div>
        <div class="row">
          <h3 style="text-align:center;" class="Roboto">Contáctanos para más información</h3>
        </div>
        <div id="masinfo" class="row" style="margin-bottom:20px; margin-top:-10px;">
          <h1 style="text-align:center;"><a href="#contacto"><img src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/flecha_down.svg" width="44px"></a></h1>
        </div>
      </div>
    </section><!-- Servicios Personalizados-->

    <section id="portafolio"><!-- Portafolio -->
      <div class="container" style="background-color: #fff;">
        <h1>Portafolio</h1>
      </div>
      <div class="container" id="portafolio-container">

        <div class="row" style="background-color: #e0e0e0" id="portafolioContainer">
          <noscript>
            <a href ="http://globalpark.com.mx/abax"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage1"><div id="caption1" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/01_over.png" class="img-responsive"></div><img id="pic01" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/01.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/arroozz"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage2"><div id="caption2" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/02_over.png" class="img-responsive"></div><img id="pic02" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/02.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/contenido"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage3"><div id="caption3" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/03_over.png" class="img-responsive"></div><img id="pic03" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/03.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/desarrolla"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage4"><div id="caption4" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/04_over.png" class="img-responsive"></div><img id="pic04" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/04.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/dharma"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage5"><div id="caption5" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/05_over.png" class="img-responsive"></div><img id="pic05" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/05.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/drpepper"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage6"><div id="caption6" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/06_over.png" class="img-responsive"></div><img id="pic06" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/06.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/hardrock"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage7"><div id="caption7" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/07_over.png" class="img-responsive"></div><img id="pic07" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/07.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/lacastana"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage8"><div id="caption8" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/08_over.png" class="img-responsive"></div><img id="pic08" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/08.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/neos"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage9"><div id="caption9" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/09_over.png" class="img-responsive"></div><img id="pic09" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/09.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/alegria"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage10"><div id="caption10" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/10_over.png" class="img-responsive"></div><img id="pic10" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/10.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/mint"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage11"><div id="caption11" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/11_over.png" class="img-responsive"></div><img id="pic11" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/11.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/sweet"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage12"><div id="caption12" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/12_over.png" class="img-responsive"></div><img id="pic12" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/12.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/logotipos"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage13"><div id="caption13" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/13_over.png" class="img-responsive"></div><img id="pic13" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/13.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/impresos"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage14"><div id="caption14" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/13_over.png" class="img-responsive"></div><img id="pic14" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/14.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/diseno-web"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage15"><div id="caption15" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/13_over.png" class="img-responsive"></div><img id="pic15" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/15.jpg" class="img-responsive pic"></div></a> 
            <a href ="http://globalpark.com.mx/fotografia"><div class="col-md-3 col-xs-6 col-sm-4 portafolioImage16"><div id="caption16" class="caption col-md-3 col-xs-6 col-sm-4 hidden"><img src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/13_over.png" class="img-responsive"></div><img id="pic16" src="http://107.170.162.246/wp-content/themes/GlobalPark/img/Portafolio/16.jpg" class="img-responsive pic"></div></a>
          </noscript>
        </div>

      </div>
    </section><!-- Portafolio -->

    <section id="clientes"><!-- Clientes -->

      <div id="titulo-clientes" >
        <div class="container">
          <h1>Clientes</h1>
        </div>
      </div>
      

      <div class="container" style="margin-bottom:20px; background-color: #fff;">
        <div class="row">
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/01.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/02.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/03.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/04.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/05.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/06.png" class="img-responsive">
          </div>

          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/07.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/08.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/09.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/10.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/11.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/12.png" class="img-responsive">
          </div>

          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/13.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/14.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/15.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/16.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/17.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/18.png" class="img-responsive">
          </div>

          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/19.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/20.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/21.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/22.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/23.png" class="img-responsive">
          </div>
          <div class="col-md-2 col-xs-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logos Clientes/380px/24.png" class="img-responsive">
          </div>
        </div>
      </div>
      
    </section><!-- Clientes -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <section id="contacto" class="Roboto"><!-- Contacto -->
      <div class="container Roboto">
        <div style="margin-bottom:10px;">

          <div class="row" style="margin-top: 20px;">
            <h1 class="centered"><img class="centered" src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/sobre.svg" height="70px;"></h1>
            <h1 class="centered Roboto">¿Tienes algún proyecto en mente?</h1>
            <h3 class="centered Roboto">Envíanos tu correo y te escribimos</h3>
          </div>

          <div class="row" style="margin: 10px 0 10px 0;">
            <div id="contactForm" class="centered" style="width: 300px;">
              <?php echo $response; ?>
              <form action="<?php the_permalink(); ?>" method="post">
                <div class="input-group input-group-lg">
                  <input id="email" type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>" placeholder="email" class="form-control">
                  <input type="hidden" name="submitted" value="1">
                  <span class="input-group-btn">
                    <button  id="search-btn" type="submit" class="btn btn-primary" style="background-color: #00e7b4; border-color: #00e7b4 ;"><i class="fa fa-angle-right" style="color: #5b5b5b;"></i></button>
                  </span>
                </div>
              </form>
            </div>
          </div>

          <div class="row">
            <div class="centered">
              <div style="height:30px; width: 260px; display:block; margin-top:20px; margin-bottom: 0px;" class="centered">
                <img src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/location.svg" style="float:left; margin-right:3px;" width="20px"><p style="float: right; font-size:20px; margin-bottom: 2px;" class="">Hacienda la Antigua 65</p>
              </div>
            </div>

            <div class="row" style="margin:0 0 0 0;">
            <p class="centered " style="font-size:20px; margin-bottom: 0px;">Huixquilucan</p>
            <p class="centered " style="font-size:20px; margin-bottom: 0px;">Estado de México</p>
            </div>

            <div class="centered">
              <div style="height:30px; width: 280px; display:block; margin-top:20px; margin-bottom:10px;" class="centered">
                <img src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/sobre.svg" style="float:left; margin-right:3px;" height="24px"><p style="float: right; font-size:20px;" class=""><a class="" href="mailto:contacto@globalpark.mx" style="decoration:">contacto@globalpark.mx</a></p>
              </div>
            </div>

            <div class="centered">
              <div style="height:30px; width: 200px; display:block; margin-top:20px; margin-bottom:10px;" class="centered">
                <img src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/phone.svg" style="float:left; margin-right:3px; verticla-align: middle;" height="24px"><a href="tel:+52 (55) 1209 1221"><p style="float: right; font-size:20px;" class="">+52 (55) 1209 1221 </p></a>
              </div>
            </div>

            <div class="centered">
              <div style="height:20px; width: 90px; display:block; margin-top:30px; margin-bottom:10px;" class="centered">
                <a href="https://www.facebook.com/md.globalpark" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/facebook.svg" style="float:left; margin-right:3px;" width="40px"></a>
                <a href="https://twitter.com/GlobalParkMX" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/twitter.svg" style="float:right; margin-right:3px;" width="40px"></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Contacto --> 


      <footer id="footer" style="width:100%;">
        <div class="container" style="margin-top: 37px;">
          <div class="row" style="width:100%;">
            <h1 class="centered"><img src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/logo_pie.png" class="centered img-responsive" width="330px"></h1>
            <h4 class="centered Roboto" style="margin-top: 35px; margin-bottom:10px;">© 2014 Global Park. Todos los derechos reservados.</h4>
          </div>
        </div>
      </footer>

    </div> <!-- /Wrapper -->

    <div class="modal fade" id="servModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="container">
            <div class="row">
              <button href="#" type="button" data-dismiss="modal" style="background: none; border: none; margin: 0 0 0 0; float: right;"><i class="fa fa-times fa-5x" style="color:#fff;"></i></button>
            </div>
            <div class="row">
                <h1 class="centered"><img src="<?php echo get_template_directory_uri(); ?>/img/Servicios/servicios01.png" class="img-responsive centered" style="width:750px;"></h1>
            </div>
      </div>
    </div>

    <div class="modal fade" id="servModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="container">
            <div class="row">
              <button href="#" type="button" data-dismiss="modal" style="background: none; border: none; margin: 0 0 0 0; float: right;"><i class="fa fa-times fa-5x" style="color:#fff;"></i></button>
            </div>
            <div class="row">
                <h1 class="centered"><img src="<?php echo get_template_directory_uri(); ?>/img/Servicios/servicios02.png" class="img-responsive centered" style="width:750px;"></h1>
            </div>
      </div>
    </div>

    <div class="modal fade" id="servModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="container">
            <div class="row">
              <button href="#" type="button" data-dismiss="modal" style="background: none; border: none; margin: 0 0 0 0; float: right;"><i class="fa fa-times fa-5x" style="color:#fff;"></i></button>
            </div>
            <div class="row">
                <h1 class="centered"><img src="<?php echo get_template_directory_uri(); ?>/img/Servicios/servicios03.png" class="img-responsive centered" style="width:750px;"></h1>
            </div>
      </div>
    </div>

    <div class="modal fade" id="servModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="container">
            <div class="row">
              <button href="#" type="button" data-dismiss="modal" style="background: none; border: none; margin: 0 0 0 0; float: right;"><i class="fa fa-times fa-5x" style="color:#fff;"></i></button>
            </div>
            <div class="row">
                <h1 class="centered"><img src="<?php echo get_template_directory_uri(); ?>/img/Servicios/servicios04.png" class="img-responsive centered" style="width:750px;"></h1>
            </div>
      </div>
    </div>

    <div class="modal fade" id="servModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="container">
            <div class="row">
              <button href="#" type="button" data-dismiss="modal" style="background: none; border: none; margin: 0 0 0 0; float: right;"><i class="fa fa-times fa-5x" style="color:#fff;"></i></button>
            </div>
            <div class="row">
                <h1 class="centered"><img src="<?php echo get_template_directory_uri(); ?>/img/Servicios/servicios05.png" class="img-responsive centered" style="width:750px;"></h1>
            </div>
      </div>
    </div>

    <div class="modal fade" id="servModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="container">
            <div class="row">
              <button href="#" type="button" data-dismiss="modal" style="background: none; border: none; margin: 0 0 0 0; float: right;"><i class="fa fa-times fa-5x" style="color:#fff;"></i></button>
            </div>
            <div class="row">
                <h1 class="centered"><img src="<?php echo get_template_directory_uri(); ?>/img/Servicios/servicios06.png" class="img-responsive centered" style="width:750px;"></h1>
            </div>
      </div>
    </div>

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="http://localhost:8888/js/vendor/jquery.min.js"><\/script>')</script>

    <?php 
      wp_footer();
      wpglobal_scripts();
    ?>

    <script type="text/javascript">
          //initiating jQuery
          jQuery(function($) {
            $(document).ready( function() {
              //enabling stickUp on the '.navbar-wrapper' class
              $('#affix-nav').stickUp();
            });
          });
          

    </script>

    </body>
</html>
