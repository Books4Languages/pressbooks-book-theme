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
 * Prints all the informations about the Resources
**/

function print_chapter_resources_fields(){

	$resources= new Pb_Rc_Chapter('Pressbooks-related-content', '0.1' );
	$resources-> print_chapter_r_fields();
	
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