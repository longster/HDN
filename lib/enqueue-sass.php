<?php
/*********************
Enqueue the proper CSS
if you use Sass.
*********************/
function hdn_sass_style()
{
	// Normalize stylesheet
	//wp_register_style( 'hdn-normalize-stylesheet', get_stylesheet_directory_uri() . '/css/normalize.css', array(), '');
	
	// Foundation stylesheet
	wp_register_style( 'hdn-app-stylesheet', get_stylesheet_directory_uri() . '/css/app.css', array(), '');
	
	// Main & Custom stylesheet
	wp_register_style( 'hdn-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '');
	
	// wp_enqueue_style( 'hdn-normalize-stylesheet' );
	wp_enqueue_style( 'hdn-app-stylesheet' );
	wp_enqueue_style( 'hdn-stylesheet' );

}	
add_action( 'wp_enqueue_scripts', 'hdn_sass_style' );
?>