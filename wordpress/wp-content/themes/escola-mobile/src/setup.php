<?php

namespace WL;

/**
 * Set up theme defaults and registers support for various WordPress features.
 *
 * @author Nucleus LLC
 * @since 1.0.0
 *
 * @package Nucleus
 */
add_action(
	'after_setup_theme',
	function () {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'wl' ),
				'footer'  => __( 'Footer Menu', 'wl' ),
			)
		);

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
	}
);
