<?php


function wpglobal_scripts()
{


	wp_register_script( 'jqueryLocal', get_template_directory_uri() . '/js/vendor/jquery.min.js', array() );
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array() );
	wp_register_script( 'stickUp', get_template_directory_uri() . '/js/vendor/stickUp.min.js', array() );
	wp_register_script( 'scrollTo', get_template_directory_uri() . '/js/vendor/jquery.scrollTo.min.js', array() );
	wp_register_script( 'localScroll', get_template_directory_uri() . '/js/vendor/jquery.localScroll.min.js', array() );
	wp_register_script( 'random', get_template_directory_uri() . '/js/random.js', array() );
	wp_register_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array() );
	wp_register_script( 'fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.js', array() );
	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array() );
	
	wp_enqueue_script( 'jqueryLocal' );
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'stickUp' );
	wp_enqueue_script( 'scrollTo' );
	wp_enqueue_script( 'localScroll' );
	wp_enqueue_script( 'random' );
	wp_enqueue_script( 'owl' );
	wp_enqueue_script( 'fancybox' );
	wp_enqueue_script( 'main' );
	
}

add_action( 'wp_footer', 'wpglobal_scripts');

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name'         => __( 'Main Sidebar' ),
		'id'           => 'sidebar-1',
    	'before_widget' => '<div class="widget">',
    	'after_widget' => '</div>',
    	'before_title' => '<h3 class="widgettitle">',
    	'after_title' => '</h3>',
    ));
    
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name'         => __( 'Contact Sidebar' ),
		'id'           => 'sidebar2',
    	'before_widget' => '<article>',
    	'after_widget' => '</article>',
    	'before_title' => '<h3 class="widgettitle">',
    	'after_title' => '</h3>',
    ));

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $excerpt ) {
	return str_replace( '[...]', '...', $excerpt );
}
add_filter( 'wp_trim_excerpt', 'new_excerpt_more' );

add_theme_support( 'post-thumbnails' ); 
add_image_size( 'Blog', 820, 500, true );
add_image_size( 'Slider', 820, 300, true );
add_image_size( 'Preview', 250, 250, true );

add_filter( 'widget_tag_cloud_args', 'my_widget_tag_cloud_args' );

function my_widget_tag_cloud_args( $args ) {
	$args['number'] = 20; // show less tags
	$args['largest'] = 9.75; // make largest and smallest the same - i don't like the varying font-size look
	$args['smallest'] = 9.75;
	$args['unit'] = 'px';
	return $args;
}

add_filter( 'the_content','bootstrap_responsive_images',10 );
add_filter( 'post_thumbnail_html', 'bootstrap_responsive_images', 10 );

function bootstrap_responsive_images( $html ){
  $classes = 'img-responsive'; // separated by spaces, e.g. 'img image-link'

  // check if there are already classes assigned to the anchor
  if ( preg_match('/<img.*? class="/', $html) ) {
    $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
  } else {
    $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
  }
  // remove dimensions from images,, does not need it!
  //$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}

//PAGINATION
function page_navi($before = '', $after = '') {
	global $wpdb, $wp_query;
	$request = $wp_query->request;
	$posts_per_page = intval(get_query_var('posts_per_page'));
	$paged = intval(get_query_var('paged'));
	$numposts = $wp_query->found_posts;
	$max_page = $wp_query->max_num_pages;
	if ( $numposts <= $posts_per_page ) { return; }
	if(empty($paged) || $paged == 0) {
		$paged = 1;
	}
	$pages_to_show = 7;
	$pages_to_show_minus_1 = $pages_to_show-1;
	$half_page_start = floor($pages_to_show_minus_1/2);
	$half_page_end = ceil($pages_to_show_minus_1/2);
	$start_page = $paged - $half_page_start;
	if($start_page <= 0) {
		$start_page = 1;
	}
	$end_page = $paged + $half_page_end;
	if(($end_page - $start_page) != $pages_to_show_minus_1) {
		$end_page = $start_page + $pages_to_show_minus_1;
	}
	if($end_page > $max_page) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = $max_page;
	}
	if($start_page <= 0) {
		$start_page = 1;
	}
		
	echo $before.'<ul class="pagination">'."";
	if ($paged > 1) {
		$first_page_text = "&laquo";
		echo '<li class="prev"><a href="'.get_pagenum_link().'" title="First">'.$first_page_text.'</a></li>';
	}
		
	$prevposts = get_previous_posts_link('&larr; Previous');
	if($prevposts) { echo '<li>' . $prevposts  . '</li>'; }
	else { echo '<li class="disabled"><a href="#">&larr; Previous</a></li>'; }
	
	for($i = $start_page; $i  <= $end_page; $i++) {
		if($i == $paged) {
			echo '<li class="active"><a href="#">'.$i.'</a></li>';
		} else {
			echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
		}
	}
	echo '<li class="">';
	next_posts_link('Next &rarr;');
	echo '</li>';
	if ($end_page < $max_page) {
		$last_page_text = "&raquo;";
		echo '<li class="next"><a href="'.get_pagenum_link($max_page).'" title="Last">'.$last_page_text.'</a></li>';
	}
	echo '</ul>'.$after."";
}

function page_navi2($before = '', $after = '', $myquery) {
	global $wpdb, $wp_query;
	$request = $myquery->request;
	$posts_per_page = intval(get_query_var('posts_per_page'));
	$paged = intval(get_query_var('paged'));
	$numposts = $myquery->found_posts;
	$max_page = $myquery->max_num_pages;
	if ( $numposts <= $posts_per_page ) { return; }
	if(empty($paged) || $paged == 0) {
		$paged = 1;
	}
	$pages_to_show = 7;
	$pages_to_show_minus_1 = $pages_to_show-1;
	$half_page_start = floor($pages_to_show_minus_1/2);
	$half_page_end = ceil($pages_to_show_minus_1/2);
	$start_page = $paged - $half_page_start;
	if($start_page <= 0) {
		$start_page = 1;
	}
	$end_page = $paged + $half_page_end;
	if(($end_page - $start_page) != $pages_to_show_minus_1) {
		$end_page = $start_page + $pages_to_show_minus_1;
	}
	if($end_page > $max_page) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = $max_page;
	}
	if($start_page <= 0) {
		$start_page = 1;
	}
		
	echo $before.'<ul class="pagination">'."";
	if ($paged > 1) {
		$first_page_text = "&laquo";
		echo '<li class="prev"><a href="'.get_pagenum_link().'" title="First">'.$first_page_text.'</a></li>';
	}
		
	$prevposts = get_previous_posts_link('&larr; Previous');
	if($prevposts) { echo '<li>' . $prevposts  . '</li>'; }
	else { echo '<li class="disabled"><a href="#">&larr; Previous</a></li>'; }
	
	for($i = $start_page; $i  <= $end_page; $i++) {
		if($i == $paged) {
			echo '<li class="active"><a href="#">'.$i.'</a></li>';
		} else {
			echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
		}
	}
	echo '<li class="">';
	next_posts_link('Next &rarr;');
	echo '</li>';
	if ($end_page < $max_page) {
		$last_page_text = "&raquo;";
		echo '<li class="next"><a href="'.get_pagenum_link($max_page).'" title="Last">'.$last_page_text.'</a></li>';
	}
	echo '</ul>'.$after."";
}



?>