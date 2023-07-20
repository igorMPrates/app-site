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

?>

<div class="hidden md:block my-48">
	<table class="bg-white w-full text-center rounded-lg">
		<tr class="border-b border-gray-400">
			<th class="w-1/2 p-10 text-xl font-normal"><?php echo $title; ?></th>
			<th class="w-1/2 p-10 text-xl font-normal"><?php echo $title_2; ?></th>
		</tr>
		<?php
		if ( get_field( 'items' ) ) :
			foreach ( get_field( 'items' ) as $row ) :
				?>
				<tr class="bg-background bg-opacity-50 border-b border-gray-400">
					<td colspan="2" class="text-center text-sm font-semibold py-10"><?php echo $row['title']; ?></td>
				</tr>
				<?php
				if ( $row['items'] ) :
					foreach ( $row['items'] as $items ) :
						?>
						<tr class="border-b border-gray-400">
							<td class="px-10 py-35 text-md font-light leading-none"><?php echo $items['item']; ?></td>
							<td class="px-10 py-35 text-md font-light leading-none"><?php echo $items['item_2']; ?></td>
						</tr>
						<?php
					endforeach;
				endif;
				?>
				<?php
			endforeach;
		endif;
		?>
	</table>
</div>

<div class="md:hidden my-48">
	<div class="bg-white w-full text-center rounded-lg">
		<div class="py-10 border-b border-gray-400"><?php echo $title; ?></div>
		<?php
		if ( get_field( 'items' ) ) :
			foreach ( get_field( 'items' ) as $row ) :
				?>
				<div class="bg-background py-10 bg-opacity-50 border-b border-gray-400">
					<?php echo $row['title']; ?>
				</div>
				<?php
				if ( $row['items'] ) :
					foreach ( $row['items'] as $items ) :
						?>
						<div class="border-b border-gray-400">
							<div class="py-30 text-md font-light leading-none"><?php echo $items['item']; ?></div>
						</div>
						<?php
					endforeach;
				endif;
			endforeach;
		endif;
		?>
		<div class="py-10 border-b border-gray-400"><?php echo $title_2; ?></div>
		<?php
		if ( get_field( 'items' ) ) :
			foreach ( get_field( 'items' ) as $row ) :
				?>
				<div class="bg-background py-10 bg-opacity-50 border-b border-gray-400">
					<?php echo $row['title']; ?>
				</div>

				<?php
				if ( $row['items'] ) :
					foreach ( $row['items'] as $items ) :
						?>
						<div class="border-b border-gray-400">
							<div class="py-30 text-md font-light leading-none"><?php echo $items['item_2']; ?></div>
						</div>
						<?php
					endforeach;
				endif;
			endforeach;
		endif;
		?>
	</div>
</div>
