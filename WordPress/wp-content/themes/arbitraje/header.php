<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_search()) {
		         echo 'B&uacute;squeda para &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title('');
				   }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
				  if(is_page_template('page-home.php')) 
				  {
		          bloginfo('name'); echo " - "; bloginfo('description');
				  }
				  else
		          {echo ' - '; bloginfo('name'); }
			  }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<?php wp_head(); ?>

</head>

<body>
<?php 
/*echo get_option('home'); 
 bloginfo('template_url'); */
$style_web=new style_web;  
?>

<div class="container">
    <!-- row 1: navigation -->
    <div class="row">
                <nav class="navbar navbar-default navbar-inverse nav-justified navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
<?php $style_web=new style_web; $style_web->menu_header(); ?>

    </div>
</nav>

		</div>

    <!-- row 2: Header -->
    <header class="row cont-cabecero">
        <div class="cabecero tranparencia">
            <div class="row redes-search">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mnu-redes">
                    <div class="fs1">
                      <div>
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-instagram"></span></a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 hidden-xs">
                    <div class="search-header">
                          <form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get" class="form_buscador">
      <input type="text" id="s" name="s" placeholder="Buscar"  />
      <input type="image" src="<?php bloginfo('template_url'); ?>/img/btn-search.png"  alt="Buscar" />
      </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 cont-logo">
                    <span class="logo"><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url');?>/img/Logo-Arbitraje.png" alt="" class="img-responsive" border="0"></a></span>
                </div>
                <div class="col-lg-9 col-md-9 hidden-sm hidden-xs banner-top-right">
                  <?php if(function_exists( 'wp_bannerize' ))
          						wp_bannerize('group=header'); ?>
                </div>
            </div>
        </div>
    </header>