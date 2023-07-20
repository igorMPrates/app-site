<?php

/**
 * The text template
 *
 * @author Nucleus LLC
 * @since 1.0.0
 *
 * @package Nucleus
 */

$image = get_field( 'image' );
$text  = get_field( 'text' );

?>

<div class="h-500 my-30"></div>

<div class="w-full h-500 -mt-500 absolute left-0">
	<div class=" mx-auto w-full h-500 md:pr-48">
		<img class="w-full h-500 object-cover rounded-tr-100 lg:rounded-tr-300" src="<?php echo $image; ?>">
	</div>
</div>

<div class="flex justify-end mt-80 mb-64 lg:mb-136">
	<p class="text-left max-w-2xl text-xl"><?php echo $text; ?></p>
</div>
