<?php
/**
 * Template Name: Politicas
 *
 * @author Nucleus
 * @since 1.0.0
 *
 * @package Nucleus
 */

namespace WL;

get_header();

?>

<div id="policy-page" class="max-w-4xl mx-auto px-20 lg:px-0 pt-48 py-80">

	<h1 class="text-4xl text-secondary-100 leading-none"><?php the_title(); ?></h1>
	<p class="text-sm mt-5 mb-20">Atualizada em <?php echo get_the_date( 'd' ); ?> de <?php echo get_the_date( 'F' ); ?> de  <?php echo get_the_date( 'Y' ); ?></p>

	<?php the_content(); ?>

</div>

<?php

get_footer();
