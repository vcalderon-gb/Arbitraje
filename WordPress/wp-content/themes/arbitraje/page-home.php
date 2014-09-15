<?php
/**
 * Template Name: Home
 */
?>
<?php 
get_header();
$style_web=new style_web;  
?>
    <!-- row 3: Slider / News -->
    <div class="row tranparencia">
        <!-- Slider Start -->
        <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cont-slider">
        <ul class="bxslider">
        <?php $style_web->slider_home("Slider");?>
        </ul>
        </section>
        <!-- News Start -->
        <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row news-home">
              <?php $style_web->noticias_home("Noticias");?>
                
            </div>
        </section>
    </div>
</div><!-- FIN CONTAINER IMPORTANTE -->
<div class="row line-red"></div>
<div class="bg-white">
    <div class="container"><!-- ABRO DE NUEVO CONTAINER IMPORTANTE -->
        <!-- row 4: Eventos / Calculadora -->
        <div class="row bg-white cont-eventos">
            <section class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="row list-event">
                        <span class="event-act col-lg-6 col-md-6 col-sm-6 hidden-xs">EVENTOS RECIENTES</span>
                        <span class="prox-event col-lg-6 col-md-6 col-sm-6 hidden-xs">PRÓXIMOS EVENTOS</span>
                    </div>
                    <div class="eventos_home">
                    <?php $style_web->eventos_home("Próximos");?>
                    </div>
                    <div class="prox_eventos_home">
                     <?php $style_web->eventos_home("Recientes");?> 
                    </div>
            </section>
            <!-- aside -->
            <aside class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="col-lg 12 col-md-12 col-sm-12 col-xs-12 calculadora">
                        <div class="fs2"><span class="icon-calculator"></span></div>
                        <a href="<?php echo esc_url(get_permalink( get_page_by_title( 'Calculadora' ) ) ); ?>"><h4>CALCULADORA</h4></a>
                    </div>
                    <div class="col-lg 12 col-md-12 col-sm-12 col-xs-12 calendario">
                        <div class="calendario-titulo"><h4>CALENDARIO CACC</h4></div>
                        <div class="plg-calendario"><span class="fl_left"></span><span class="fl_right"></span><?php echo do_shortcode("[availability]"); ?> </div> 
                    </div>
            </aside>    
        </div>

<?php get_footer(); ?>
