<?php
/**
 * Template Name: Calculadora
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
 if ( has_post_thumbnail() ) 
 {
	 $imagen_id=get_post_thumbnail_id(); 
	 $img=wp_get_attachment_image_src($imagen_id,'single'); 
 }
$cat_name=single_cat_title("",false);
 $style_web=new style_web;
 ?>

<div class="row interno">
        <section class="col-lg-8 col-md-8 col-sm-12">
            <ol class="breadcrumb">
              <li><a href="<?php echo get_option('home'); ?>/">Inicio</a></li>
              <li class="active"><?php the_title(); ?></li>
            </ol>
            <article>
                <h4>Monto de la demanda</h4>
                <?php if($img[0]) { ?>
                <img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive"><?php } ?>
                <p class="texto txt_cal">
                    <?php the_content(); ?>
               <input type="text" name="monto" value="" id="monto" />
                    <input type="button" id="enviar" value="Enviar" />
                    <input type="hidden" name="ut" id="ut" value="<?php echo  get_option('undtundt'); ?>" />
                    <input type="hidden" name="iva" id="iva" value="<?php echo  get_option('undtiva'); ?>" />
                    <table class="tabla_calculadora">
                    <tr>
                    <td><strong>Tarifa Administrativa</strong></td>
                    <td><strong>Iva</strong></td>
                    <td><strong>Total</strong></td>
                    <td><strong>Cada parte</strong></td>
                    </tr>
                    <tr>
                    <td><span id="tar_adm"></span></td>
                    <td><span class="iva"></span></td>
                    <td><span id="iva_tar_adm"></span></td>
                    <td><span id="parte_tar_adm"></span></td>
                    </tr>
                    </table>
                    
                    <table class="tabla_calculadora">
                    <tr>
                    <td><strong>Honorarios de Árbitros</strong></td>
                    <td><strong>Iva</strong></td>
                    <td><strong>Total</strong></td>
                    <td><strong>Cada parte</strong></td>
                    </tr>
                    <tr>
                    <td><span id="hon_arb"></span></td>
                    <td><span class="iva"></span></td>
                    <td><span id="iva_hon_arb"></span></td>
                    <td><span id="parte_hon_arb"></span></td>
                    </tr>
                    </table>
                    
                    <table class="tabla_calculadora">
                    <tr>
                    <td><strong>Total General</strong></td>
                    <td><strong>Total Cada Parte</strong></td>
                    </tr>
                    <tr>
                    <td><span id="total_gen"></span></td>
                    <td><span id="total_parte"></span></td>
                    </tr>
                    </table>
                   </p>            
            </article>
        </section>
        <?php endwhile; endif; ?>
        <?php get_sidebar(); ?>        
    </div>
    

<?php get_footer(); ?>