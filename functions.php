<?php
/**
 * Child Theme Functions and definitions
 *
 * @author		Long Duong
 * @package 	HDN
 * @since 		7.0 - 04-30-2013
 */

// Remove the Parent widget from WPZurb
function remove_parent_widgets() {
	// Unregister WPZurb sidebars
	unregister_sidebar('footer');
}
add_action( 'init', 'remove_parent_widgets', 11 );

// Footer Area
register_sidebar( array(
	'name' => __( 'Child Footer', '' ),
	'id' => 'footer-override',
	'description' => __( 'Override parent widget', '' ),
	'before_widget' => '<aside id="%1$s" class="large-2 columns widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<span class="lime-text">//</span> <b class="widget-title">',
	'after_title' => '</b>'
) );

// Twitter Area
register_sidebar( array(
	'name' => __( 'Twitter', '' ),
	'id' => 'twitter',
	'description' => __( 'Twitter Area', '' ),
	'before_widget' => '<aside id="%1$s" class="large-12 columns widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>'
) );

?>