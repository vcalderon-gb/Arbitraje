<?php
/**
 * Template Name: Quienes somos
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
              <li><a href="<?php echo $cat_name; ?>">Eventos</a></li>
              <li class="active">Recientes</li>
            </ol>
            <article>
                <h4><?php the_title(); ?></h4>
                <?php if($img[0]) { ?>
                <img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive"><?php } ?>
                <p class="texto">
                    <?php the_content(); ?>
                   </p>                    
            </article>
        </section>
        <?php endwhile; endif; ?>
        <?php get_sidebar(); ?>

        
    </div>
    
    

<?php get_footer(); ?>