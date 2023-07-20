<?php
/**
 * wl-base
 *
 * WARNING: This file is part of the wl-base theme. DO NOT edit this file
 * under any circumstances, as the changes will be lost in the case of a theme update.
 * Please do all modifications in the form of a child theme.
 *
 * @since   1.0.0
 * @package wl-base\Templates
 * @author  Nucleus
 * @license GPL-2.0+
 * @link    http://nucleus.eti.br/
 */

namespace WL\Theme\Templates;

use WL\Theme\Templates\Partials\Pagination;

/**
 * Archive template.
 *
 * @since  1.0.0
 * @author Nucleus
 */
class Archive {


	/**
	 * Custom loop.
	 *
	 * @since 1.0.0
	 */
	public static function do_loop() {
		static::standard_loop();
	}

	/**
	 * Get categories.
	 *
	 * @since  1.0.0
	 * @return array
	 */
	public static function get_categories() {
		// TODO: add soft cache.
		$terms = get_terms(
			array(
				'taxonomy'   => 'category',
				'hide_empty' => true,
				'exclude'    => 1, // Exclude uncategorized.
			)
		);

		if ( is_wp_error( $terms ) ) {
			return array();
		}

		return $terms;
	}

	/**
	 * Standard loop, meant to be executed without modification
	 * in most circumstances where content needs to be displayed.
	 *
	 * @since  1.0.0
	 * @access private
	 */
	private static function standard_loop() {
		if ( have_posts() ) {

			while ( have_posts() ) {
				the_post();
				echo static::get_post();
			}

			Pagination::render();
		} else {
			printf(
				'<p>%s</p>',
				esc_html__( 'No results', 'wl-base' )
			);
		}
	}
}
