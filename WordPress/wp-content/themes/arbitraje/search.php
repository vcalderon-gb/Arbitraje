<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		

<div class="row interno">
        <section class="col-lg-8 col-md-8 col-sm-12">
            <h2>Resultados de la b&uacute;squeda</h2>
<?php while (have_posts()) : the_post(); 
$extracto=excerpt(30);
if ( has_post_thumbnail() ) 
{
	$imagen_id=get_post_thumbnail_id(); 
	$img=wp_get_attachment_image_src($imagen_id,'eventos_home'); 
}
?>
<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 article-p">
<a href="'.$link.'"><img src="<?php echo $img[0] ?>" alt="" class="img-responsive img-left" width="90" height="90"></a>
<h4><?php the_title();?></h4>
<span class="sumario"><?php echo $extracto ?></span>
</article>
            <?php endwhile; ?>
        </section>
        
        <?php get_sidebar(); ?>

        
    </div>
<?php endif; ?>

<?php get_footer(); ?>