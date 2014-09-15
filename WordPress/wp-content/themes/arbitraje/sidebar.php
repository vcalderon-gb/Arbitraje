<?php
$style_web=new style_web;
$cat_name=single_cat_title("",false);
$cat_id = get_cat_id( $cat_name );
$id_ances=get_ancestors($cat_id, 'category');
$title_ances=get_cat_name($id_ances[0]);




?>    
        <aside class="col-lg-4 col-md-4 col-sm-12 hidden-xs">
            <div class="eventos-recientes col-lg-12 col-md-12 col-sm-6">
                <div class="event-rec-tit-int"><h4>EVENTOS RECIENTES</h4></div>
                                <article class="plg-event-rec-int">
                    <div class="triangulo triangulo-der"></div>
                    <div class="triangulo triangulo-izq"></div>
                   <div class="sidebar_slider1">
                   <?php $style_web->sidebar_eventos1(); ?>
                    </div>
                </article>
            </div>
            <div class="prox-eventos-int col-lg-12 col-md-12 col-sm-6">
                <div class="prox-event-int">
                <div class="triangulo triangulo-der-gris"></div>
                <div class="triangulo triangulo-izq-gris"></div>
                <h4>PROXIMOS EVENTOS</h4></div>
                <div class="slider_ev2">
                
                <?php $style_web->sidebar_eventos2(); ?>
                </div>
            </div>
            <div class="calculadora-int col-lg-12 col-md-12 col-sm-6">
                <div class="fs2">
                    <span class="icon-calculator"></span>
                </div>.
                <a href="<?php echo esc_url(get_permalink( get_page_by_title( 'Calculadora' ) ) ); ?>"><h4>CALCULADORA</h4></a>
            </div>
            <div class="calendario-int col-lg-12 col-md-12 col-sm-12">
                <div class="calendario-titulo-int"><h4>CALENDARIO CACC</h4></div>
                <div class="plg-calendario"><span class="fl_left"></span><span class="fl_right"></span><?php echo do_shortcode("[availability]"); ?></div> 
            </div>
        </aside>
