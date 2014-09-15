<?php
		echo  get_option('arbitraje_undt');
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	/*if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
/*	function my_init() {
	if (!is_admin()) {
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'my_init');*/
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'newsletter',
    		'id'   => 'newsletter',
    		'description'   => 'Newsletter',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		    	register_sidebar(array(
    		'name' => 'tweets',
    		'id'   => 'tweets',
    		'description'   => 'Tweets',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		    	register_sidebar(array(
    		'name' => 'eventosr',
    		'id'   => 'eventosr',
    		'description'   => 'Eventos Recientes',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		    	register_sidebar(array(
    		'name' => 'eventosp',
    		'id'   => 'eventosp',
    		'description'   => 'Proximos Eventos',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
//-----------------------------------------------------------------------------------//
//	Images
//-----------------------------------------------------------------------------------//
if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'noticias_home', 290, 220, true );	
	add_image_size( 'eventos_home', 90, 90, true );
	add_image_size( 'slider_home', 930, 250, true );
	add_image_size( 'eventos_sidebar1', 290, 300, true );
	add_image_size( 'eventos_sidebar1', 145, 165, true );
}
/****************************************************************/  
function my_wp_enqueue_scripts()
{
	wp_enqueue_script('jquery1', get_template_directory_uri() . '/js/jquery.js');
	wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.js');
	wp_enqueue_script('event_move', get_template_directory_uri() . '/js/jquery.event.move.js');
	wp_enqueue_script('responsive', get_template_directory_uri() . '/js/responsive-slider.js');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('base', get_template_directory_uri() . '/js/base.js');
	wp_enqueue_script('jquerymin1', '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');		
	wp_enqueue_script('slider1', get_template_directory_uri() . '/js/jquery.bxslider.min.js');
	if(is_page_template('page-home.php'))
	{
		wp_enqueue_script('home', get_template_directory_uri() . '/js/home.js');
	}
		if(is_page_template('page-calculadora.php'))
	{		
		wp_enqueue_script('calculadora', get_template_directory_uri() .'/js/calculadora.js');		
	}

	
}
add_action('wp_enqueue_scripts','my_wp_enqueue_scripts');

function my_wp_enqueue_style()
{
	wp_enqueue_style('bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css', 'style');
	wp_enqueue_style('desktop', get_template_directory_uri() . '/css/desktop.css', 'style');
	wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', 'style');
	wp_enqueue_style('style', get_template_directory_uri() . '/img/icomoon/style.css', 'style');
	wp_enqueue_style('gfont','http://fonts.googleapis.com/css?family=Montserrat|Roboto', 'style');
	wp_enqueue_style('stylec', get_template_directory_uri() . '/css/style.css', 'style');
		if(is_page_template('page-home.php'))
	{
		wp_enqueue_style('slider', get_template_directory_uri() . '/css/slider.css', 'style');
	}
	else
	wp_enqueue_style('interno', get_template_directory_uri() . '/css/interno.css', 'style');
}
add_action('wp_enqueue_scripts','my_wp_enqueue_style');
/*****************************Limitar excerpt***********************************/  
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }     
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
/*********************************************************************/

include_once("functions_style.php");


include("themeoptions.php");

require_once('wp_bootstrap_navwalker.php');
?>