<?php
/**
 * Child Theme Functions and definitions
 *
 * @author		Long Duong
 * @package 	HDN
 * @since 		7.0 - 04-30-2013
 */


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
	//add_action( 'init', 'wpzurb_child_widgets_init' );

?>