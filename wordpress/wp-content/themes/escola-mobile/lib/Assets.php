<?php
/**
 * WL Assets
 *
 * WARNING: This file is part of the WL Base theme. DO NOT edit this file
 * under any circumstances, as the changes will be lost in the case of a theme update.
 * Please do all modifications in the form of a child theme.
 *
 * @since   1.0.0
 * @package WL\Theme\Base
 * @author  Nucleus
 * @license GPL-2.0+
 * @link    http://nucleus.eti.br/
 */

namespace WL\Theme;

/**
 * Theme assets.
 *
 * @since  1.0.0
 * @author Nucleus
 */
class Assets {


	/**
	 * Base URL for public assets.
	 *
	 * @since 1.0.0
	 * @var   string
	 */
	private $base_uri;

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		 $this->base_uri = get_stylesheet_directory_uri() . '/dist/images/';
	}

	/**
	 * Setup hooks.
	 *
	 * @since 1.0.0
	 */
	public function ready() {
		add_action( 'wp_head', array( $this, 'favicon' ) );
		add_action( 'login_head', array( $this, 'admin_favicon' ) );
		add_action( 'admin_head', array( $this, 'admin_favicon' ) );
		add_filter( 'login_headerurl', array( $this, 'custom_loginlogo_url' ) );
		add_action( 'login_enqueue_scripts', array( $this, 'custom_login_logo' ) );
	}


	/**
	 * Replace Login Page WordPress logo.
	 *
	 * @since 1.0.0
	 */
	public function custom_login_logo() {
		printf(
			'<style type="text/css">
				.login {
					background-color: #ddd;
				}
				#login h1 a,
				.login h1 a {
					background-image: url( %s );
					height: 100px;
					width: auto;
					background-size: contain;
					background-repeat: no-repeat;
				}
				.login #loginform {
					border-radius: 5px;
					box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 0px 4px 0 rgba(0, 0, 0, 0.1);
				}
				#login #backtoblog a,
				#login #nav a {
					color: #00aca6;
				}
				#login #backtoblog a:hover,
				#login #nav a:hover {
					color: #333745;
				}
				#wp-submit {
					background-color: #287d7d;
					border-color: #165d5d;
					box-shadow: 0 1px 0 #287d7d;
				}
			</style>',
			esc_url( $this->base_uri . 'logo-admin.png' )
		);
	}

	/**
	 * Replace Login Page logo link.
	 *
	 * @since 1.0.0
	 */
	public function custom_loginlogo_url() {
		return get_home_url();
	}

	/**
	 * Add admin favicon.
	 *
	 * @since 1.0.0
	 */
	public function admin_favicon() {
		printf(
			'<link rel="shortcut icon" href="%s">',
			esc_url( $this->base_uri . 'favicon-admin.ico' )
		);
	}

	/**
	 * Add favicon.
	 *
	 * @since 1.0.0
	 */
	public function favicon() {
		printf(
			'<link rel="shortcut icon" href="%s">',
			esc_url( $this->base_uri . 'favicon.ico' )
		);
	}

	/**
	 * Get SVG file.
	 *
	 * @since 1.0.0
	 * @param string $svg_url The file URL starting after `/assets/images/`.
	 * @param bool   $return   If the svg is to be retruned instead of echoed.
	 * @return string          Div with file contents
	 */
	public static function get_svg( $svg_url, $return = false ) {
		$svg_file = dirname( __DIR__ ) . '/dist/images/svg/' . $svg_url . '.svg';

		if ( ! file_exists( $svg_file ) ) {
			$svg = sprintf(
				'<svg width="40" height="40" viewBox="0 0 40 40">
					<use xlink:href="#shape-s-%1$s"></use>
				</svg>',
				$svg_url
			);

			if ( $return ) {
				return $svg;
			}

			echo $svg;
		}

		if ( $return ) {
			return file_get_contents( $svg_file );
		}

		echo file_get_contents( $svg_file );
	}

	/**
	 * Get SVG sprite.
	 *
	 * @since 1.0.0
	 */
	public static function get_svg_sprite() {
		$svg_sprite_file = get_template_directory() . '/dist/images/sprite.svg';
		if ( ! file_exists( $svg_sprite_file ) ) {
			return;
		}
		echo file_get_contents( $svg_sprite_file );
	}

	/**
	 * Get supported SVG shapes by "group".
	 *
	 * @since  1.0.0
	 * @param  string $group   The shape "group" name.
	 * @param  string $context The shape "group" context. E.g. Social, footer.
	 * @return array           The SVG shapes.
	 */
	public static function get_svg_shapes( $group = '', $context = '' ) {
		switch ( $group ) {
			default:
				return array(
					'facebook'   => array(
						'title' => __( 'Facebook', 'wl-base' ),
						'svg'   => $context . 'facebook',
					),
					'googleplus' => array(
						'title' => __( 'Google+', 'wl-base' ),
						'svg'   => $context . 'googleplus',
					),
					'instagram'  => array(
						'title' => __( 'Instagram', 'wl-base' ),
						'svg'   => $context . 'instagram',
					),
					'linkedin'   => array(
						'title' => __( 'LinkedIn', 'wl-base' ),
						'svg'   => $context . 'linkedin',
					),
					'pinterest'  => array(
						'title' => __( 'Pinterest', 'wl-base' ),
						'svg'   => $context . 'pinterest',
					),
					'twitter'    => array(
						'title' => __( 'Twitter', 'wl-base' ),
						'svg'   => $context . 'twitter',
					),
					'vimeo'      => array(
						'title' => __( 'Vimeo', 'wl-base' ),
						'svg'   => $context . 'vimeo',
					),
					'youtube'    => array(
						'title' => __( 'Youtube', 'wl-base' ),
						'svg'   => $context . 'youtube',
					),
				);
		}

		return array();
	}
}
