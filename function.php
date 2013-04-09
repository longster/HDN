<?php
/**
 * Functions and definitions
 *
 * @author      Longster
 * @package     HDN
 * @since       7.0 - 04-30-2013
 */



$sidebars = array('Tweetr');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<aside id="%1$s" class="large-12 columns widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
}

?>