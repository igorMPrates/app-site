<?php

/**
 * Custom Fields Permalink 2.
 *
 * @package   WordPress_Custom_Fields_Permalink
 * @author    Your Name
 * @copyright 2016 Your Name or Company Name
 * @license   GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Custom Fields Permalink 2
 * Plugin URI: http://athlan.pl/wordpress-custom-fields-permalink-plugin
 * Description: Plugin allows to use post's custom fields values in permalink structure by adding %field_fieldname%, for posts, pages and custom post types.
 * Author: Piotr Pelczar
 * Version: 1.0.3
 * Author URI: http://athlan.pl/
 */

use WL\Theme;

define( 'WL_VERSION', wp_get_theme()->version );
define( 'WL_DIR', __DIR__ );
define( 'WL_URL', get_template_directory_uri() );

require_once WL_DIR . '/vendor/autoload.php';

function wl_is_dev() {
	return apply_filters( 'wl_is_dev', defined( 'WP_ENV' ) && 'development' === WP_ENV );
}

/**
 * Setup theme.
 *
 * @since 1.0.0
 */
add_action( 'after_setup_theme', 'wl_setup_theme' );

function wl_setup_theme() {
	 // Enable support for post thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	$components = array(
		'assets'               => new WL\Theme\Assets(),
		'customizer'           => new WL\Theme\Customizer(),
		'images'               => new WL\Theme\Images(),
		'scripts'              => new WL\Theme\Scripts(),
		'structure_content'    => new WL\Theme\Structure\Content(),
		'structure_comments'   => new WL\Theme\Structure\Comments(),
		'structure_navigation' => new WL\Theme\Structure\Navigation(),
		'structure_sidebar'    => new WL\Theme\Structure\Sidebar(),
		'styles'               => new WL\Theme\Styles(),
		'blocks'               => new WL\Theme\Blocks(),
		'widgets'              => new WL\Theme\Widgets(),
	);
	/**
	 * Remove/add components.
	 *
	 * Note: if you add a component, make sure it implements a method "ready()".
	 */
	$components = apply_filters( 'wl_starter_components', $components );

	foreach ( $components as $instance ) {
		if ( method_exists( $instance, 'ready' ) ) {
			$instance->ready();
		}
	}
}

function tn_custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

function child_theme_setup() {
	// override parent theme's 'more' text for excerpts
	remove_filter( 'excerpt_more', 'twentyeleven_auto_excerpt_more' );
	remove_filter( 'get_the_excerpt', 'twentyeleven_custom_excerpt_more' );
}
add_action( 'after_setup_theme', 'child_theme_setup' );


if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page(
		array(
			'page_title' => 'Visita Guiada',
			'menu_title' => 'Visita Guiada',
			'menu_slug'  => 'visita-guiada',
			'capability' => 'edit_posts',
			'redirect'   => false,
		)
	);
};
