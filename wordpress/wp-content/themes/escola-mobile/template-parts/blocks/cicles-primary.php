<?php

/**
 * The primary content template
 *
 * @author Nucleus LLC
 * @since 1.0.0
 *
 * @package Nucleus
 */

$title       = get_field( 'title' );
$description = get_field( 'description' );
$color       = get_field( 'color' );
$background  = get_field( 'background' );
$video       = explode( '/', get_field( 'play_link' ) );
$video       = explode( '?', $video[4] );

?>

<div class="show-video fixed top-0 left-0 w-full h-full p-20 md:p-96 z-50 hidden bg-black bg-opacity-75">
	<iframe class="video-content relative z-10 w-full h-full" autoplay src="https://player.vimeo.com/video/<?php echo $video[0]; ?>?h=0ed708c570&loop=1&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	<button class="absolute z-50 top-0 right-0 m-48 mr-20 close-video border-none outline-none focus:outline-none duration-300">
		<svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" class="w-auto" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.5">
			<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
		</svg>
	</button>
</div>

<div class="w-full relative mt-5">

	<div class="w-full h-350 lg:h-500 bg-yellow absolute bottom-0 left-0 -mb-30 lg:-mb-64" style="background-color: <?php echo $color; ?> ;"></div>

	<div class="container overflow-hidden ml-30 lg:mx-auto w-full h-500 lg:h-650 lg:mt-48 rounded-tl-200 lg:rounded-tl-300 px-25 py-48 lg:p-136 flex flex-col justify-end bg-cover bg-right relative z-10" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo $background; ?>');">
		<div class="flex flex-col lg:flex-row items-start lg:items-center justify-end lg:justify-between">

			<div id="cicles-info" class="text-white">
				<h1 class="text-3xl lg:text-4x3 font-bold"><?php echo $title; ?></h1>
				<h3 class="text-3xl lg:text-4x2"><?php echo $description; ?></h3>
			</div>

			<button class="play-video-button mb-30 lg:mb-0 mt-20 lg:mt-0 duration-300 focus:outline-none focus:bg-bg-priamry-100 flex items-center">
				<svg class="w-48 lg:w-96" viewBox="0 0 116 116" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M116 58C116 73.3826 109.889 88.1351 99.0122 99.0122C88.1351 109.889 73.3826 116 58 116C42.6174 116 27.8649 109.889 16.9878 99.0122C6.1107 88.1351 0 73.3826 0 58C0 42.6174 6.1107 27.8649 16.9878 16.9878C27.8649 6.1107 42.6174 0 58 0C73.3826 0 88.1351 6.1107 99.0122 16.9878C109.889 27.8649 116 42.6174 116 58ZM49.2275 36.9242C48.6855 36.5383 48.0477 36.309 47.384 36.2615C46.7203 36.214 46.0563 36.35 45.4648 36.6548C44.8733 36.9595 44.3771 37.4212 44.0305 37.9892C43.684 38.5572 43.5004 39.2096 43.5 39.875V76.125C43.5004 76.7904 43.684 77.4428 44.0305 78.0108C44.3771 78.5788 44.8733 79.0405 45.4648 79.3452C46.0563 79.65 46.7203 79.786 47.384 79.7385C48.0477 79.691 48.6855 79.4617 49.2275 79.0757L74.6025 60.9507C75.0724 60.6154 75.4554 60.1727 75.7197 59.6595C75.984 59.1462 76.1219 58.5773 76.1219 58C76.1219 57.4227 75.984 56.8538 75.7197 56.3405C75.4554 55.8273 75.0724 55.3846 74.6025 55.0492L49.2275 36.9242Z" fill="white" />
				</svg>
				<span class="ml-10 text-lg text-white font-semibold">Assista ao vídeo</span>
			</button>

		</div>
	</div>
</div>
