<?php
class style_web{
/************************************************************************/
function menu_header()
{
		wp_nav_menu(array(
                'menu'              => 'Header',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
				);
//	wp_nav_menu(array('menu'=>'Header','menu_class'=> 'nav navbar-nav','container'=> false,));
}
/************************************************************************/
function noticias_home($cat_name)
{
		$cat_id = get_cat_id( $cat_name );
		$cat_ids = get_cat_id("Slider");
		$arr_prensa=array( 
		'posts_per_page' => '3',
		'showposts' => '3',
		'post_type' => 'post',
		'order' => 'DESC',
		'category__and' => array( $cat_id ),
		'category__not_in' => array( $cat_ids ),
		'orderby' => 'DATE'
		 );
			$wp_query_prensa= new WP_Query( $arr_prensa );
		 if ($wp_query_prensa->have_posts()) 
		 {
			 while ($wp_query_prensa->have_posts())
			 {
				 $wp_query_prensa->the_post();
				 if ( has_post_thumbnail() ) 
				 {
					 $imagen_id=get_post_thumbnail_id(); 
					 $img=wp_get_attachment_image_src($imagen_id,'noticias_home'); 
				 }
				  $title=get_the_title();
				  $extracto=excerpt(30);
				  $link=get_permalink();

				  echo '<article class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img src="'.$img[0].'" alt="" class="img-responsive" width="290" height="220">
                    <h4>'.$title.'</h4>
                    <span class="sumario">'.$extracto.'</span></br></br>
                    <a href="'.$link.'"><span class="read-more">LEER</span></a></br></br>
                </article>';
			 }
		 }

}
/************************************************************************/
function slider_home($cat_name)
{
		$cat_id = get_cat_id( $cat_name );
		$arr_prensa=array( 
		'posts_per_page' => '4',
		'showposts' => '4',
		'post_type' => 'post',
		'order' => 'DESC',
		'category__and' => array( $cat_id ),
		'orderby' => 'DATE'
		 );
			$wp_query_prensa= new WP_Query( $arr_prensa );
		 if ($wp_query_prensa->have_posts()) 
		 {
			 while ($wp_query_prensa->have_posts())
			 {
				 $wp_query_prensa->the_post();
				 if ( has_post_thumbnail() ) 
				 {
					 $imagen_id=get_post_thumbnail_id(); 
					 $img=wp_get_attachment_image_src($imagen_id,'slider_home'); 
				 }
				  $title=get_the_title();
				  $link=get_permalink();

				  echo '<li><a href="'.$link.'"><img src="'.$img[0].'" width="930" height="250" title="'.$title.'"/></a></li>';
			 }
		 }

}
/************************************************************************/
function eventos_home($cat_name)
{
		$cat_id = get_cat_id( $cat_name );
		$cat_ids = get_cat_id("Slider");
		$arr_prensa=array( 
		'posts_per_page' => '3',
		'showposts' => '3',
		'post_type' => 'post',
		'order' => 'DESC',
		'category__and' => array( $cat_id ),
		'category__not_in' => array( $cat_ids ),
		'orderby' => 'DATE'
		 );
			$wp_query_prensa= new WP_Query( $arr_prensa );
		 if ($wp_query_prensa->have_posts()) 
		 {
			 while ($wp_query_prensa->have_posts())
			 {
				 $wp_query_prensa->the_post();
				 if ( has_post_thumbnail() ) 
				 {
					 $imagen_id=get_post_thumbnail_id(); 
					 $img=wp_get_attachment_image_src($imagen_id,'eventos_home'); 
				 }
				  $title=get_the_title();
				  $extracto=excerpt(30);
				  $link=get_permalink();

				  echo '<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 article-p">
                        <a href="'.$link.'"><img src="'.$img[0].'" alt="" class="img-responsive img-left" width="90" height="90"></a>
                        <h4>'.$title.'</h4>
                        <span class="sumario">'.$extracto.'</span>
                    </article>';
			 }
		 }

}
/************************************************************************/
function eventos($cat_name)
{
		global $paged;
		$cat_id = get_cat_id( $cat_name );
		$cat_ids = get_cat_id("Slider");
		$arr_prensa=array( 
		'posts_per_page' => '10',
		'showposts' => '10',
		'post_type' => 'post',
		'order' => 'DESC',
		'category__and' => array( $cat_id ),
		'category__not_in' => array( $cat_ids ),
		'orderby' => 'DATE',
		'paged' => $paged
		 );
			$wp_query_prensa= new WP_Query( $arr_prensa );
		 if ($wp_query_prensa->have_posts()) 
		 {
			 while ($wp_query_prensa->have_posts())
			 {
				 $wp_query_prensa->the_post();
				 if ( has_post_thumbnail() ) 
				 {
					 $imagen_id=get_post_thumbnail_id(); 
					 $img=wp_get_attachment_image_src($imagen_id,'eventos_home'); 
				 }
				  $title=get_the_title();
				  $extracto=excerpt(30);
				  $link=get_permalink();

				  echo '<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 article-p">
                        <a href="'.$link.'"><img src="'.$img[0].'" alt="" class="img-responsive img-left" width="90" height="90"></a>
                        <h4>'.$title.'</h4>
                        <span class="sumario">'.$extracto.'</span>
                    </article>';
			 }
		 }
		 if( function_exists( 'wp_pagenavi' ) ){
 		 wp_pagenavi( array( 'query' => $wp_query_prensa ) );
			} 
			wp_reset_postdata();
}
/************************************************************************/
function noticias($cat_name)
{
		$cat_id = get_cat_id( $cat_name );
		global $paged;
		$cat_id1 = get_cat_id("esquema");
		$cat_id2 = get_cat_id("Once Ideal");
		if ( is_home() ) 
		$cat_id3 = get_cat_id("Slider");
		$arr_prensa=array( 
		'posts_per_page' => '20',
		'showposts' => '20',
		'post_type' => 'post',
		'order' => 'DESC',
		'category__and' => array( $cat_id ),
		'category__not_in' => array( $cat_id1, $cat_id2, $cat_id3 ),
		'orderby' => 'DATE',
		'paged' => $paged
		 );
			$wp_query_prensa= new WP_Query( $arr_prensa );
		 if ($wp_query_prensa->have_posts()) 
		 {
			 while ($wp_query_prensa->have_posts())
			 {
				 $wp_query_prensa->the_post();
				 if ( has_post_thumbnail() ) 
				 {
					 $imagen_id=get_post_thumbnail_id(); 
					 $img=wp_get_attachment_image_src($imagen_id,'noticias'); 
				 }
				  else
				  {
					  $post_id=get_the_ID();
					   $args = array(
					   'post_type' => 'attachment',
					   'numberposts' => 1,
					   'post_status' => null,
					   'post_parent' => $post_id
					  );
				  $attachments = get_posts( $args );
					 if ( $attachments ) {
						foreach ( $attachments as $attachment ) {
						   $img=wp_get_attachment_image_src($attachment->ID,'noticias'); 
						  }
					 }
				  }
				  $title=get_the_title();
				  $extracto1=get_the_excerpt();
				  $pos = strpos($extracto1, ".");
				  $extracto = substr($extracto1, 0,$pos); 
				  if($pos === false || $pos<15)
				  $extracto=excerpt(25);
				  $link=get_permalink();
				  $date=get_the_time('d-m-Y'); 
				  $cat=get_the_category();
				  $id=get_cat_id($idgrup[$i]);
			      $url[$i]=get_category_link($id);
				  $estadio[12]=esc_url(get_permalink( get_page_by_title( 'Arena de Sao Paulo ' ) ) );
				  $category_name=$cat[0]->name;
				  $category_id=$cat[0]->cat_ID;
				  $url1=esc_url( get_permalink( get_page_by_title( 'Iframe' ) ) );
				  $datav = get_post_meta(get_the_ID(), "video", true);
				  preg_match('/[\\?\\&]v=([^\\?\\&]+)/',$datav,$matches);
				  $params = array( 'id' => $matches[1] );
				  $urll2 = add_query_arg( $params, $url1 );
				  if($category_name=="Noticias")
				  {
					  	$category_name=$cat[1]->name;
				  		$category_id=$cat[1]->cat_ID;
				  }
				  $category_link=get_category_link($category_id);
				  echo '<article class="lista_noticias">
					<a href="'.$link.'" class="link_img"><img src="'.$img[0].'" alt="'.$title.'"></a>
					<div class="lista_texto">
						<h3><a href="'.$category_link.'">'.$category_name.'</a></h3>
						<h2><a href="'.$link.'">'.$title.'</a></h2>
						<p>'.$extracto.'</p>
					</div>
				</article>';
			 }
		 }
		 if( function_exists( 'wp_pagenavi' ) ){
 		 wp_pagenavi( array( 'query' => $wp_query_prensa ) );
			} 
			wp_reset_postdata();
}

/************************************************************************/
function iframe_video($id)
{
	$video=get_post_meta($id, "video", true);
	echo $this->embed_video($video,640,480);
}
//**********************************************************************
function embed_video($video,$width,$height)
{
	$a=explode('width="',$video);
	$b=explode('" ',$a[1]);
	$i=1;
	while($b[$i])
	{
	$b_r.='" '.$b[$i];
	$i++;
	}
	$c=$a[0].'width="'.$width.$b_r;
	$aa=explode('height="',$c);
	$bb=explode('" ',$aa[1]);
	$i=1;
	while($bb[$i])
	{
	$bb_r.='" '.$bb[$i];
	$i++;
	}
	$video_embed=$aa[0].'height="'.$height.$bb_r;
	$eliframe=explode('</iframe>',$video_embed);
	$video_embed=$eliframe[0].'</iframe>';
    return $video_embed;
}
/************************************************************************/
function sidebar_eventos1()
{
		$cat_id = get_cat_id( "Recientes");
		$arr_prensa=array( 
		'posts_per_page' => '3',
		'showposts' => '3',
		'post_type' => 'post',
		'order' => 'DESC',
		'category__and' => array( $cat_id ),
		'orderby' => 'DATE'
		 );
			$wp_query_prensa= new WP_Query( $arr_prensa );
		 if ($wp_query_prensa->have_posts()) 
		 {
			 while ($wp_query_prensa->have_posts())
			 {
				 $wp_query_prensa->the_post();
				 if ( has_post_thumbnail() ) 
				 {
					 $imagen_id=get_post_thumbnail_id(); 
					 $img=wp_get_attachment_image_src($imagen_id,'eventos_sidebar1'); 
				 }
				  $title=get_the_title();
				  $link=get_permalink();

				  echo '<div>
                    	<img src="'.$img[0].'" class="img-responsive"/>
                    	<h4><a href="'.$link.'">'.$title.'</a></h4>
                        </div>';
			 }
		 }

}
/************************************************************************/
function sidebar_eventos2()
{
		$cat_id = get_cat_id( "Próximos");
		$arr_prensa=array( 
		'posts_per_page' => '3',
		'showposts' => '3',
		'post_type' => 'post',
		'order' => 'DESC',
		'category__and' => array( $cat_id ),
		'orderby' => 'DATE'
		 );
			$wp_query_prensa= new WP_Query( $arr_prensa );
		 if ($wp_query_prensa->have_posts()) 
		 {
			 while ($wp_query_prensa->have_posts())
			 {
				 $wp_query_prensa->the_post();
				 if ( has_post_thumbnail() ) 
				 {
					 $imagen_id=get_post_thumbnail_id(); 
					 $img=wp_get_attachment_image_src($imagen_id,'eventos_sidebar2'); 
				 }
				  $title=get_the_title();
				  $link=get_permalink();

				  echo '<article class="plg-prox-event-int bg-gris">
                    <img src="'.$img[0].'" class="img-responsive" />
                    <time>
                        <span class="dia">21</span>/
                        <span class="mes">05</span>/
                        <span class="ano">2014</span>
                    </time>
                    <h4>'.$title.'</h4>
                </article>';
			 }
		 }

}

/******************************************************************/
}
?>