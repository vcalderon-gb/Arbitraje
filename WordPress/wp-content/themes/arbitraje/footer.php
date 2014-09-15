       <!-- row 5: Banners Partners -->
        <div class="row tranparencia cont-logos">
            <section class="col-lg-12 col-md-12 col-sm-2 hidden-xs">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                   <?php if(function_exists( 'wp_bannerize' ))
          						wp_bannerize('group=Footer1'); ?>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                    <?php if(function_exists( 'wp_bannerize' ))
          						wp_bannerize('group=Footer2'); ?>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs">
                    <?php if(function_exists( 'wp_bannerize' ))
          						wp_bannerize('group=Footer3'); ?>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs">
                    <?php if(function_exists( 'wp_bannerize' ))
          						wp_bannerize('group=Footer4'); ?>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                    <?php if(function_exists( 'wp_bannerize' ))
          						wp_bannerize('group=Footer5'); ?>
                </div>
            </section>
        </div>

    </div><!-- FIN CONTENEDOR-->
</div>
<footer id="footer">
    <div class="row footer-ca">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            DIRECCIÓN </br></br>
            Calle Andrés Eloy Blanco,</br> 
            Edificio Cámara de Comercio,</br> 
            Piso 5, Los Caobos,</br> 
            Caracas, Venezuela.</br>
            Tlfs. + 58 (212) 571.88.31 / 571.91.13</br>
            Fax: + 58 (212) 578.24.56</br>
            centrodearbitraje@arbitrajeccc.org</br>
            eventos@arbitrajeccc.org </br> 
            Solicitud de Información </br>
        </div>
        <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
            CENTRO DE ARBITRAJE  - TWITTER <br><br>
             <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('tweets'))  ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 subs-boletin">
            <h5>SUSCRIBIRSE AL BOLETÍN MENSUAL</h5>
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('newsletter'))  ?>
        </div>
        
    </div>
</footer>
<div class="row container-sign">
    <div class="corp-rights">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 derechos">
            @<?php echo date('Y'); ?> TODOS LOS DERECHOS RESERVADOS - CENTRO DE ARBITRAJE
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sign-aa">
            <a href="http://www.antialias.com.ve" target="_blank"><div class="logo-aa"></div></a>
            <div class="sign-aa-txt">DESARROLLADO POR</div> 
        </div>  
    </div>        
</div>

	<?php wp_footer(); ?>
</body>
</html>