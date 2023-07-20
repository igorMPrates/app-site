<?php

/**
 * The talk with us template
 *
 * @author Nucleus LLC
 * @since 1.0.0
 *
 * @package Nucleus
 */

$title       = get_field( 'title' );
$description = get_field( 'description' );
$cards       = get_field( 'cards' );

?>

<div class="container mx-auto px-30 lg:px-0 pt-64 -mb-96">

	<div class="mb-64">
		<h1 class="text-4x2 font-bold"><?php echo $title; ?></h1>
		<p><?php echo $description; ?></p>
	</div>

	<div id="projetos" class="imprensa-carousel owl-carousel owl-theme">

		<?php
		$projects = new WP_Query(
			array(
				'post_type'     => 'post',
				'category_name' => 'imprensa',
			)
		);
		?>
		<?php if ( $projects->have_posts() ) : ?>
			<?php
			while ( $projects->have_posts() ) :
				$projects->the_post();
				$posttags = wp_get_post_tags( get_the_ID() );
				?>
				<?php if ( has_tag( 'unclick' ) ) : ?>
					<a href="<?php echo get_permalink(); ?>">
					<?php endif; ?>
					<div class="w-280 h-410 bg-white rounded-lg overflow-hidden">
						<div class="h-230 w-full bg-cover bg-center" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>
						<div class="p-15">
							<div class="flex justify-between text-gray-600">
								<div class="font-semibold"><?php echo 'unclick' != $posttags[0]->name ? $posttags[0]->name : $posttags[1]->name; ?></div>
								<div class="text-sm"><?php echo get_the_date( 'd/m/Y' ); ?></div>
							</div>
							<h3 class="font-semibold text-xl my-10"><?php echo the_title(); ?></h3>
							<p class="text-sm font-light"><?php echo str_replace( 'Learn More', '<b class="underline">Ver Mais</b>', strip_tags( get_the_excerpt() ) ); ?></p>
						</div>
					</div>
					<?php if ( has_tag( 'unclick' ) ) : ?>
					</a>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p class="font-sans text-lg text-white">Desculpa, não há projetos ainda!</p>
		<?php endif; ?>

	</div>

</div>
