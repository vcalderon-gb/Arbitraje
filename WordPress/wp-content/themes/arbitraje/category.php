<?php
/**
 * Template Name: Grupos
 */
$style_web=new style_web;
?>
<?php get_header(); ?>
<section class="container">	
    
    
    <section class="contenido_izq">
    	<?php  $style_web->noticias(single_cat_title("",false)); ?>
    </section>
    
   <?php get_sidebar(); ?>

</section>


<?php get_footer(); ?>