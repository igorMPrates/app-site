<?php
/**
 * wl-base.
 *
 * WARNING: This file is part of the wl-base theme. DO NOT edit this file
 * under any circumstances, as the changes will be lost in the case of a theme update.
 * Please do all modifications in the form of a child theme.
 *
 * @since   1.0.0
 * @package wl-base\Templates\Partials
 * @author  Nucleus
 * @license GPL-2.0+
 * @link    http://nucleus.eti.br/
 */

namespace WL\Theme\Templates\Partials;

use WL\Theme\Assets;
use WL\Theme\Options;

/**
 * Social partials.
 *
 * @since  1.0.0
 * @author Nucleus
 */
class Social {


	/**
	 * Site links.
	 *
	 * @since 1.0.0
	 * @param string|array $css_classes for adding extra styling classes.
	 */
	public static function site_links( $css_classes = array(), $return = false ) {

		$networks = self::get_networks();

		$networks_markup = static::get_links( $networks );
		if ( empty( $networks_markup ) ) {
			return;
		}

		if ( ! is_array( $css_classes ) ) {
			$css_classes = array( $css_classes );
		}

		$css_classes = array_merge(
			array(
				'social-share',
			),
			$css_classes
		);
		if ( $return ) {
			return $networks_markup;
		}
		printf(
			'<div class="%1$s">
				%2$s
			</div>',
			esc_attr( implode( ' ', $css_classes ) ),
			$networks_markup
		);
	}

	/**
	 * Post links.
	 *
	 * @since  1.0.0
	 * @param  int\WP_Post $post The \WP_Post object, or the post ID.
	 * @return string
	 */
	public static function post_links( $post ) {

		if ( empty( $post ) ) {
			return '';
		}

		if ( is_integer( $post ) ) {
			$post = get_post( $post );
		}

		if ( empty( $post ) ) {
			return '';
		}

		$post_networks = get_post_meta( $post->ID, "{$post->post_type}_social_networks", true );
		if ( empty( $post_networks ) ) {
			return '';
		}

		$networks = array();
		foreach ( $post_networks as $post_network ) {
			$networks[ $post_network[ "{$post->post_type}_social_type" ] ] = array(
				'url'   => $post_network[ "{$post->post_type}_social_url" ],
				'title' => $post->post_title,
			);
		}

		return self::get_links( $networks, true );
	}

	/**
	 * Post share links.
	 *
	 * @since  1.0.0
	 * @param  int\WP_Post $post The \WP_Post object, or the post ID.
	 * @return string
	 */
	public static function post_share_links( $post ) {

		if ( empty( $post ) ) {
			return '';
		}

		if ( is_integer( $post ) ) {
			$post = get_post( $post );
		}

		if ( empty( $post ) ) {
			return '';
		}

		$post_url = get_the_permalink( $post->ID );

		$share_networks = array(
			'facebook'   => array(
				'url'   => sprintf(
					'http://www.facebook.com/sharer.php?u=%s',
					$post_url
				),
				'title' => $post->post_title,
			),
			'linkedin'   => array(
				'url'   => sprintf(
					'http://www.linkedin.com/shareArticle?mini=true&amp;url=%s',
					$post_url
				),
				'title' => $post->post_title,
			),
			'twitter'    => array(
				'url'   => sprintf(
					'https://twitter.com/share?url=%s&amp;text=%s',
					$post_url,
					urlencode( $post->post_title )
				),
				'title' => $post->post_title,
			),
			// TODO: [IN-416] Add Whatsapp and pinterest as social media - Remove googleplus
			'googleplus' => array(
				'url'   => sprintf(
					'https://plus.google.com/share?url=%s',
					$post_url
				),
				'title' => $post->post_title,
			),
		);

		return sprintf(
			'<div class="social-share social-share--articles">
				<span class="social__text-element">%1$s</span>
				<span class="social__line-element"></span>
				%2$s
			</div>',
			esc_html__( 'Share', 'wl-base' ),
			static::get_links( $share_networks, true )
		);
	}

	/**
	 * Get the social links markup.
	 *
	 * @since  1.0.0
	 * @access private
	 * @param  array $networks A list of social networks.
	 * @param  bool  $share    True if the links are share links. False, otherwise.
	 * @return string
	 */
	public static function get_links( $networks, $share = false ) {

		if ( empty( $networks ) ) {
			return '';
		}

		if ( ! is_array( $networks ) ) {
			$networks = array( $networks );
		}

		$shapes = Assets::get_svg_shapes();

		$networks_markup = '';
		foreach ( $networks as $key => $network ) {

			if ( ! array_key_exists( $key, $shapes ) ) {
				continue;
			}

			if ( empty( $network['url'] ) ) {
				continue;
			}

			$title = sprintf(
				_x( 'Follow %1$s on %2$s', 'Social Networks', 'wl-base' ),
				$network['title'],
				$shapes[ $key ]['title']
			);

			if ( $share ) {
				$title = sprintf(
					_x( 'Share %1$s on %2$s', 'Social Networks', 'wl-base' ),
					$network['title'],
					$shapes[ $key ]['title']
				);
			}

			$networks_markup .= sprintf(
				'<li class="social__item social__item--%1$s">
					<a class="social__link %1$s" href="%2$s" title="%3$s" target="_blank">
						<svg class="social__icon social__icon--%1$s svg-sprite" role="img">
							<use xlink:href="#shape-s-%4$s"></use>
						</svg>
					</a>
				</li>',
				esc_attr( $key ),
				esc_url( $network['url'] ),
				esc_attr( $title ),
				esc_attr( $shapes[ $key ]['svg'] )
			);
		}

		if ( empty( $networks_markup ) ) {
			return '';
		}

		return sprintf( '<ul class="social">%s</ul>', $networks_markup );
	}

	/**
	 * Get the social links.
	 *
	 * @since  1.0.0
	 * @return Array
	 */
	public static function get_networks() {
		$networks = array(
			'facebook'   => array(
				'url'   => '',
				'title' => esc_html_x( 'Facebook', 'Social Networks', 'wl-base' ),
			),
			'googleplus' => array(
				'url'   => '',
				'title' => esc_html_x( 'Google+', 'Social Networks', 'wl-base' ),
			),
			'instagram'  => array(
				'url'   => '',
				'title' => esc_html_x( 'Instagram', 'Social Networks', 'wl-base' ),
			),
			'linkedin'   => array(
				'url'   => '',
				'title' => esc_html_x( 'LinkedIn', 'Social Networks', 'wl-base' ),
			),
			'pinterest'  => array(
				'url'   => '',
				'title' => esc_html_x( 'Pinterest', 'Social Networks', 'wl-base' ),
			),
			'twitter'    => array(
				'url'   => '',
				'title' => esc_html_x( 'Twitter', 'Social Networks', 'wl-base' ),
			),
			'youtube'    => array(
				'url'   => '',
				'title' => esc_html_x( 'Youtube', 'Social Networks', 'wl-base' ),
			),
		);

		foreach ( $networks as $network => $url ) {

			$url = Options::get_option( $network );
			if ( empty( $url ) ) {
				unset( $networks[ $network ] );
				continue;
			}

			$networks[ $network ]['url'] = $url;
		}

		return $networks;
	}
}
