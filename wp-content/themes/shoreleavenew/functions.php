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


function get_section_menubar() {

	$menuLocations = get_nav_menu_locations();
	$menu = wp_get_nav_menu_object( $menuLocations['infoMenu']);

	$menuArr = wp_get_nav_menu_items($menu);

	if($menuArr) {

		echo '<div id="tabmenu"><ul>';
		foreach( (array) $menuArr as $menuEntry) {
			echo '<li><a href="' . $menuEntry->url . '">' . $menuEntry->title . '</a></li>';
		}
		echo '</ul></div>';
	}
}

/**
 * This registers slots for menus. It doesn't actually populate anything.
 * That has to be done manually.
 */
function create_menu_slots() {

 // Set up the various section menus.
 register_nav_menus(
	 array(
		'charityMenu' => __( 'Charities', 'Charity-related pages'),
		'contactsMenu' => __( 'Contacts', 'Contact pages'),
		'guestMenu' => __( 'Guests', 'All guest-related pages'),
		'infoMenu' => __( 'Information', 'Information pages'),
		'locationMenu' => __( 'Location', 'Hotel and related pages'),
		'masqueradeMenu' => __( 'Masquearde', 'Masquerade-specific pages'),
		'programmingMenu' => __( 'Programming', 'Main programming pages'),
		'registrationMenu' => __( 'Registration', 'Registration pages'),
		'vendorMenu' => __( 'Vendors', 'Vendor section pages'),
	 )
 );
}
add_action('init', 'create_menu_slots');

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

function page_meta_description() {
	$text = get_the_excerpt();
	$tag = '';
	if( isset($text)) {
		$tag = '<meta name="description" content="' . $text . '" />';
	}
	return $tag;
 }

function page_twitter_description() {
	$text = get_the_excerpt();
	$tag = '';
	if( isset($text)) {
	   $tag = '<meta name="twitter:description" content="' . $text . '" />';
	}
	return $tag;
}

function page_og_description() {
	$text = get_the_excerpt();
	$tag = '';
	if( isset($text)) {
	   $tag = '<meta name="og:description" content="' . $text . '" />';
	}
	return $tag;
}
