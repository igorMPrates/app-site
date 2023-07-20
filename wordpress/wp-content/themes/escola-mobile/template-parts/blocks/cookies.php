<?php

/**
 * The cookies template
 *
 * @author Nucleus LLC
 * @since 1.0.0
 *
 * @package Nucleus
 */

$title   = get_field( 'title' );
$title_2 = get_field( 'title_2' );
$title_3 = get_field( 'title_3' );
$items   = get_field( 'items' );

?>

<div class="hidden md:block">
	<table class="bg-white w-full text-center rounded-lg">
		<tr class="border-b border-gray-400">
			<th class="w-1/3 p-10 text-xl font-normal"><?php echo $title; ?></th>
			<th class="w-1/3 p-10 text-xl font-normal"><?php echo $title_2; ?></th>
			<th class="w-1/3 p-10 text-xl font-normal"><?php echo $title_3; ?></th>
		</tr>
		<?php
		if ( $items ) :
			foreach ( $items as $row ) :
				?>
				<tr class="border-b border-gray-400">
					<td class="px-10 py-30 text-md font-light leading-none font-semibold"><?php echo $row['text']; ?></td>
					<td class="px-10 py-30 text-sm font-light leading-none"><?php echo $row['text_2']; ?></td>
					<td class="px-10 py-30 text-md font-light leading-none"><?php echo $row['text_3']; ?></td>
				</tr>
				<?php
			endforeach;
		endif;
		?>
	</table>
</div>

<div class="md:hidden">
	<?php
	if ( $items ) :
		?>
		<div class="cookie-carousel owl-carousel owl-theme">
			<?php
			foreach ( $items as $row ) :
				?>
				<div class="bg-white text-center rounded-lg">
					<div>
						<div class="py-10 border-b border-gray-400"><?php echo $title; ?></div>
						<div class="px-10 py-30 text-md text-gray-600 font-light leading-none"><?php echo $row['text']; ?></div>
					</div>
					<div>
						<div class="py-10 border-t border-b border-gray-400"><?php echo $title_2; ?></div>
						<div class="px-10 py-30 text-sm text-gray-600 font-light leading-none"><?php echo $row['text_2']; ?></div>
					</div>
					<div>
						<div class="py-10 border-t border-b border-gray-400"><?php echo $title_3; ?></div>
						<div class="px-10 py-30 text-md text-gray-600 font-light leading-none"><?php echo $row['text_3']; ?></div>
					</div>
				</div>
				<?php
			endforeach;
			?>
		</div>
		<?php
	endif;
	?>
</div>
