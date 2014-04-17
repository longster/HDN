<?php
/**********************
Add theme supports
**********************/
function hdn_theme_support() {
	// Add language supports.
	load_theme_textdomain('hdn', get_template_directory() . '/lang');
	
	// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');
	// set_post_thumbnail_size(150, 150, false);
	
	// rss thingy
	add_theme_support('automatic-feed-links');
	
	// Add post formarts supports. http://codex.wordpress.org/Post_Formats
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
	
	// Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
	add_theme_support('menus');
	register_nav_menus(array(
		'primary' => __('Primary Nav', 'hdn'),
		'utility' => __('Utility Nav', 'hdn'),
		'footer' => __('Footer Nav', 'hdn')
	));
	
	// Add custom background support
	add_theme_support( 'custom-background',
	    array(
	    'default-image' => '',  // background image default
	    'default-color' => '', // background color default (dont add the #)
	    'wp-head-callback' => '_custom_background_cb',
	    'admin-head-callback' => '',
	    'admin-preview-callback' => ''
	    )
	);
}
add_action('after_setup_theme', 'hdn_theme_support'); /* end hdn theme support */




// extend contact info in admin profile
function hdn_contactmethods( $contactmethods ) {
    // Add Twitter
    $contactmethods['twitter'] = 'Twitter';
    //add Facebook
    $contactmethods['facebook'] = 'Facebook';
    return $contactmethods;
}
add_filter('user_contactmethods','hdn_contactmethods',10,1);




// create widget areas: sidebar, footer
$sidebars = array('Sidebar-Single');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
$sidebars = array('Sidebar-Forums');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
$sidebars = array('Sidebar-Page');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
$sidebars = array('Footer');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<aside id="%1$s" class="widget %2$s col-md-2">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>'
	));
}
$sidebars = array('Footer-Company');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>'
	));
}




// return entry meta information for posts, used by multiple loops.
if ( ! function_exists( 'hdn_entry_meta' ) ) :
function hdn_entry_meta() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'hdn' ) );

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'hdn' ) );

	$date = sprintf( '<time class="entry-date" datetime="%3$s">%4$s</time>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'hdn' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 (%1$s) is category, 2 (%2$s) is tag, 3 (%3$s) is the date and 4 (%4$s) is the author's name.
	if ( $tag_list ) {
		$utility_text = __( '%3$s / <span class="by-author"> by %4$s</span>', 'hdn' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'Published: %3$s <span class="by-author">by %4$s</span>', 'hdn' );
	} else {
		$utility_text = __( '%1$s / %3$s / <span class="by-author">by %4$s</span>', 'hdn' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif; // Post Meta information




// Search Results Highlight - Keyword search term
function hdn_highlight_results($text){
     if(is_search()){
     $sr = get_query_var('s');
     $keys = explode(" ",$sr);
     $text = preg_replace('/('.implode('|', $keys) .')/iu', '<span class="search-highlight">'.$sr.'</span>', $text);
     }
     return $text;
}
//add_filter('the_content', 'hdn_highlight_results');
add_filter('the_excerpt', 'hdn_highlight_results');
add_filter('the_title', 'hdn_highlight_results');




//// exclude all pages from search filter
// function hdn_search_filter($query) {
// if ($query->is_search) {
// $query->set('post_type', 'post');
// }
// return $query;
// }
// add_filter('pre_get_posts','hdn_search_filter');

// exclude these specific pages from search filter ()
function hdn_search_filter( $query ) {
if ( $query->is_search && $query->is_main_query() ) {
$query->set( ‘post__not_in’, array( 2,14356,12661,13232,45,13133,25750,14958,7,12,12658,224,16,18,20 ) );
}
}
add_filter( ‘pre_get_posts’, ‘hdn_search_filter’ );



// customize the length of excerpt
function hdn_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'hdn_excerpt_length', 999 );




// add more link
function hdn_excerpt_more( $more ) {
	return ' <a href="'.get_permalink($post->ID).'" title="'.get_the_title().'">&raquo; Read More</a>';
}
add_filter('excerpt_more', 'hdn_excerpt_more');




// add credits
if ( !function_exists( 'hdn_credits' ) ) :
function hdn_credits() {
	printf(
		__('<a href="http://echode.com">ECHODE</a> Copyright &copy; %1$s - All Rights Reserved.', 'hdn'),
		date( 'Y' ),
		home_url( '/' ),
		get_bloginfo( 'name' )
	);
}
endif; // Output credit information
?>