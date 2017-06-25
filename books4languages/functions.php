<?php
/*
 * Twenty Seventeen child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_Child
 * @since 0.1
 */


/*Take the css of the original theme*/

 function theme_enqueue_styles() {
 $parent_style = 'parent-style';
 wp_enqueue_style($parent_style, get_template_directory_uri().'/style.css');
 wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css', array($parent_style));
 }
 add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

/**
 * Returns true if $ type is a post type part and if the function 
 *are_related_books_enabled($post->ID) return true
 */

function is_post_type($type){
    global $wp_query;
    global $post;
    $RBF= new Pb_Rc_Books('Pressbooks-related-content', '0.1' );
    if($type == get_post_type($wp_query->post->ID ))
    	$res=$RBF->are_related_books_enabled($post->ID);
    if($res==true)
    	return true;
    return false;
}
/**
 * Fixes pop-out for extra sidebar buttons.
 */
function pm_enqueue_scripts() {

	// TOC pop-out JS code without conflicts with Page Info's one
	wp_dequeue_script( 'pb-pop-out-toc' );
	wp_enqueue_script( 'pb-pop-out-toc', get_stylesheet_directory_uri() . '/js/pop-out.js', array( 'jquery' ), '1.0', false );

}

add_action( 'wp_enqueue_scripts', 'pm_enqueue_scripts' );

