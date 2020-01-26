<?php
/**
 * Rough minimal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

remove_action('wp_head', 'wp_generator');

function load_scripts() {
	wp_enqueue_style('roughminimal', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

 // Set up the menus.
 register_nav_menus(
	 array(
		'headerMenu' => __( 'Primary', 'roughminimal'),
	 )
 );

add_theme_support('custom-logo', array(
	'height' => 100,
	'width' => 100,
	'flex-height' => true,
));

function get_logo() {
	echo get_template_directory_uri() . '/assets/logo-thumb.jpg';
}

 if ( ! function_exists('write_log')) {
	function write_log ( $log )  {
	   if ( is_array( $log ) || is_object( $log ) ) {
		  error_log( print_r( $log, true ) );
	   } else {
		  error_log( $log );
	   }
	}
 }
