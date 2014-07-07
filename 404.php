<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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

        <!-- WP HEAD -->
      <?php wp_enqueue_script('jquery');?>
      <?php wp_head();?>

      <!-- ICONS -->
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/x-icon" />

    </head>
	<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
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
            <li><a href="<?php echo site_url(); ?>#about">¿Qué Hacemos?</a></li>
            <li><a href="<?php echo site_url(); ?>#servicios">Servicios</a></li>
            <li><a href="<?php echo site_url(); ?>#portafolio" class="">Portafolio</a></li>
            <li><a href="<?php echo site_url(); ?>#clientes">Clientes</a></li>
            <li><a href="<?php echo site_url(); ?>#contacto">Contacto</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav><!-- /NAV -->

		<section style="margin-top: 100px; height:400px;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>La página que está buscando no existe.</h1>
					</div>
				</div>
			</div>
		</section>
		<!-- /BLOG -->


    <section id="contactoP" class="Roboto"><!-- Contacto -->
      <div class="container Roboto">

          <div class="row" style="margin-top: 20px; margin-bottom:40px;">

            <div class="visible-xs col-xs-12">
              <h1 class="centered"><img class="centered" src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/sobre.svg" height="70px;"></h1>
            </div>

            <div class="col-sm-6">

              <h1 class="centered Roboto">¿Tienes algún proyecto en mente?</h1>
              <h3 class="centered Roboto" style="margin-top:5px;">Envíanos tu correo y te escribimos</h3>

              <div class="centered" style="width: 300px; margin-top:20px;">
                <form role="search" class="nomargin nopadding">
                  <div class="input-group input-group-lg">
                    <input type="text" class="form-control" placeholder="email">
                    <span class="input-group-btn">
                      <button  id="search-btn" type="submit" class="btn btn-primary" style="background-color: #b5b5b5; border-color: #b5b5b5;"><i class="fa fa-angle-right" style="color: #5b5b5b;"></i></button>
                    </span>
                  </div>
                </form>
              </div>

            </div>

            <div class="col-sm-6">
              <div class="row">

                <div class="centered">
                  <div style="height:30px; width: 290px; display:block; margin-top:20px; margin-bottom:10px;" class="centered">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/sobre.svg" style="float:left; margin-right:3px;" height="24px"><p style="float: right; font-size:20px;" class=""><a class="" href="mailto:contacto@globalpark.mx" style="decoration:">contacto@globalpark.mx</a></p>
                  </div>
                </div>

                <div class="centered">
                  <div style="height:30px; width: 200px; display:block; margin-top:20px; margin-bottom:10px;" class="centered">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/phone.svg" style="float:left; margin-right:3px; verticla-align: middle;" height="24px"><p style="float: right; font-size:20px;" class="">+52 (55) 1209 1221 </p>
                  </div>
                </div>

                <div class="centered">
                  <div style="height:20px; width: 90px; display:block; margin-top:30px; margin-bottom:10px;" class="centered">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/facebook.svg" style="float:left; margin-right:3px;" width="40px"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/PiezasPagina/twitter.svg" style="float:right; margin-right:3px;" width="40px"></a>
                  </div>
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