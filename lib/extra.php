<?php
/**
 * Plugin Name: PBD AJAX Load Posts
 * Plugin URI: http://www.problogdesign.com/
 * Description: Load the next page of posts with AJAX.
 * Version: 0.1
 * Author: Pro Blog Design
 * Author URI: http://www.problogdesign.com/
 */
 
 /**
  * Initialization. Add our script if needed on this page.
  */
//         function pbd_alp_init() {
//            global $wp_query;
         
            // Add code to index pages.
//            if( !is_singular() && !is_search() ) {  
                // Queue JS
//                wp_enqueue_script(
//                    'pbd-alp-load-posts',
                    //plugin_dir_url( __FILE__ ) . 'assets/js/load-posts.js',
//                    get_template_directory_uri() . '/assets/js/custom/load-posts.js',
//                    array('jquery'),
//                    '1.0',
//                    true
//                );
        

                // Queue CSS
//              wp_enqueue_style(
//                  'pbd-alp-style',
//                  plugin_dir_url( __FILE__ ) . 'style.css',
//                  false,
//                  '1.0',
//                  'all'
//              );
        

                // What page are we on? And what is the pages limit?
//                $max = $wp_query->max_num_pages;
//                $paged = ( get_query_var('paged') > 1 ) ? get_query_var('paged') : 1;
                
                // Add some parameters for the JS.
//                wp_localize_script(
//                    'pbd-alp-load-posts',
//                    'pbd_alp',
//                    array(
//                        'startPage' => $paged,
//                        'maxPages' => $max,
//                        'nextLink' => next_posts($max, false)
//                    )
//                );
//            }
//         }
//         add_action('template_redirect', 'pbd_alp_init');




// Event Manager plugins - Use regular post category instead of event categories
// http://wordpress.org/support/topic/events-manager-using-post-categories?replies=8
// Not working for some reason
//add_action('init', 'demo_add_default_boxes');
//function demo_add_default_boxes()
//{
//	register_taxonomy_for_object_type('category', 'event');
//	register_taxonomy_for_object_type('category', 'event-recurring');
//}  
 

// Events Manager plugins - Add events on the home page
// http://wordpress.org/support/topic/plugin-events-manager-show-events-as-regular-posts-articles/page/2?replies=41
add_filter( 'pre_get_posts', 'my_get_posts' );
function my_get_posts( $query ) {
    if ( is_home() && false == $query->query_vars['suppress_filters'] )
        $query->set( 'post_type', array( 'post', 'event' ) );
    return $query;
}
// Uses default category instead of Event Manger plugins category
// http://wordpress.org/support/topic/events-manager-using-post-categories
add_action('init', 'demo_add_default_boxes');
function demo_add_default_boxes()
{
register_taxonomy_for_object_type('category', 'event');
register_taxonomy_for_object_type('category', 'event-recurring');
}




// USP prefix submitted content
// function my_the_content_filter($content) {
// 	global $post;
// 	$usp_author = get_post_meta($post->ID, 'user_submit_name', true);
// 	if (usp_is_public_submission()) {
// 		$content = $usp_author . ' writes: ' . $content;
// 	}
// 	return $content;
// }
// add_filter('the_content', 'my_the_content_filter');




/**
 * Tests if any of a post's assigned categories are descendants of target categories
 *
 * @param int|array $cats The target categories. Integer ID or array of integer IDs
 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Passes $cats
 * @uses in_category() Passes $_post (can be empty)
 * @version 2.7
 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
 */
if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
    function post_is_in_descendant_category( $cats, $_post = null ) {
        foreach ( (array) $cats as $cat ) {
            // get_term_children() accepts integer ID only
            $descendants = get_term_children( (int) $cat, 'category' );
            if ( $descendants && in_category( $descendants, $_post ) )
                return true;
        }
        return false;
    }
}

?>