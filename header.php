<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js"> <![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '| Global Park', true, 'right' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
        <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'> -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>

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
	<body onload="flecha()">
        <!--[if lte IE 8]>
            <div style="width:100%; height:80px; position:absolute; top:0; background-color:white;"><h1 class="browsehappy centered">El navegador que estás utilizando es <strong>MUY viejo</strong>. Por favor <a href="http://browsehappy.com/">actualiza tu navegador</a>.</h1></div>
        <![endif]-->

    <!-- NAV -->
    <nav id="portafolio-nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header navbar-left">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>"><img id="logo-menu" src="<?php echo get_template_directory_uri(); ?>/img/logo_menu.svg"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-navbar-collapse">
          <ul id="nav-links" class="nav navbar-nav">
            <!-- <li><a href="#">Blog</a></li> -->
            <li><a href="<?php echo site_url(); ?>#about">Nosotros</a></li>
            <li><a href="<?php echo site_url(); ?>#servicios">Servicios</a></li>
            <li><a href="<?php echo site_url(); ?>#portafolio" class="active">Portafolio</a></li>
            <li><a href="<?php echo site_url(); ?>#clientes">Clientes</a></li>
            <li><a href="<?php echo site_url(); ?>#contacto">Contacto</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav><!-- /NAV -->