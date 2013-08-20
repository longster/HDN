<?php
/*********************
Enqueue the proper CSS
if you use vanilla CSS.
*********************/
function hdn_css_style()
{	
	// Normalize stylesheet
	//wp_register_style( 'hdn-normalize-stylesheet', get_stylesheet_directory_uri() . '/css/normalize.css', array(), '' );
	
	// Foundation stylesheet
	wp_register_style( 'hdn-foundation-stylesheet', get_stylesheet_directory_uri() . '/css/foundation.css', array(), '' );	
	
	// Main & Custom stylesheet
	wp_register_style( 'hdn-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );
	
	wp_enqueue_style( 'hdn-normalize-stylesheet' );
	wp_enqueue_style( 'hdn-foundation-stylesheet' );
	wp_enqueue_style( 'hdn-stylesheet' );
	
}
add_action( 'wp_enqueue_scripts', 'hdn_css_style' );
?>