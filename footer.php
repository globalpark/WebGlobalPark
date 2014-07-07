      

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
            $(window).resize( function() {
              mainHeight = $('.mainProyecto').height();
              $('.flecha').offset({ top: mainHeight });
            } );
        </script>

    </body>
</html>
