<?php

/**
 * The text template
 *
 * @author Nucleus LLC
 * @since 1.0.0
 *
 * @package Nucleus
 */

$title       = get_field( 'title' );
$description = get_field( 'description' );

?>

<div class="container mx-auto mb-64 mt-64 lg:mt-136 px-20">
	<div class="max-w-6xl mx-auto">
		<h1 class="text-2xl lg:text-4x2 leading-tight"><?php echo $title; ?></h1>
		<p class="max-w-4xl mt-30 lg:mt-60"><?php echo $description; ?></p>
	</div>
</div>
