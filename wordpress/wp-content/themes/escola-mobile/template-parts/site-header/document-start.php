<?php

/**
 * The template for the start of the html document.
 *
 * @package WordPress
 * @subpackage WL_Theme
 */

use WL\Theme\Assets;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() . '/assets/images/favicon.png'; ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( ! is_front_page() ) : ?>
		<title>Móbile - <?php the_title(); ?></title>
	<?php endif; ?>
	<?php wp_head(); ?>

	<script>
		(function(i) {
		var ts = document.createElement('script');
		ts.type = 'text/javascript';
		ts.async = true;
		ts.src = ('https:' == document.location.protocol ? 'https://' : 'http://') +
		'tags.t.tailtarget.com/t3m.js?i=' + i;
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ts, s);
		})('TT-15233-1/CT-2330');
	</script>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

	<?php
	// import svg sprite for later use
	Assets::get_svg_sprite();
	?>
