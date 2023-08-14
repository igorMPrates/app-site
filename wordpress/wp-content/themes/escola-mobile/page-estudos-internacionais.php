<?php

/**
 * The default single page template.
 *
 * @author Nucleus LLC
 * @since 1.0.0
 *
 * @package Nucleus
 */

get_header(); ?>

<style>
	.li-hover.active {
		background-color: #DDD1CB;
		color: #2C2C2C;
	}

	.owl-page .owl-nav .owl-prev {
		margin-right: calc(70px * <?php echo count( get_field( 'historias' ) ); ?>) !important;
	}

	@media (max-width: 764px) {
		.owl-page .owl-nav .owl-prev {
			margin-right: calc(55px * <?php echo count( get_field( 'historias' ) ); ?>) !important;
		}
	}
</style>

<?php
$video = explode( '/', get_field( 'video_url' ) );
$video = explode( '?', $video[4] );
?>
<div class="show-video fixed top-0 left-0 w-full h-full p-20 md:p-96 z-50 hidden bg-black bg-opacity-75">
	<iframe class="video-content relative z-10 w-full h-full" autoplay src="https://player.vimeo.com/video/<?php echo $video[0]; ?>?h=0ed708c570&loop=1&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	<button class="absolute z-50 top-0 right-0 m-48 mr-20 close-video border-none outline-none focus:outline-none duration-300">
		<svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" class="w-auto" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.5">
			<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
		</svg>
	</button>
</div>

<div class="relative">

	<div class="absolute left-0 right-0 mx-auto bottom-0 mb-20 flex justify-center hidden lg:hidden">
		<div class="template-map-items px-10 py-5 flex items-center bg-white rounded-lg mt-5"></div>
	</div>

	<div class="absolute map-location map-1">
		<svg width="51" height="61" viewBox="0 0 51 61" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M31.9372 1.47048C19.2594 -1.92652 5.20554 4.64183 1.20991 19.5537C-1.34152 29.0758 3.05312 42.2563 14.3556 59.117C15.2379 60.4125 16.9584 60.8735 18.3702 60.1928C36.5587 51.2341 46.9548 42.0167 49.5062 32.4947C53.5018 17.5828 44.615 4.86748 31.9372 1.47048ZM23.9139 31.4141C20.5935 30.5244 18.5989 27.1015 19.4815 23.8077C20.3641 20.5139 23.8028 18.5469 27.1232 19.4366C30.4436 20.3263 32.4381 23.7492 31.5556 27.043C30.673 30.3368 27.2342 32.3037 23.9139 31.4141Z" fill="white" />
		</svg>
		<div class="map-item px-10 py-5 flex items-center bg-white rounded-lg mt-5">
			<span class="text-4xl font-bold text-pink-100">80</span>
			<p class="px-10">Universidades </p>
			<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/dist/images/usa.png">
		</div>
	</div>

	<div class="absolute map-location map-2">
		<svg width="37" height="45" viewBox="0 0 37 45" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M13.7444 0.754182C4.42861 3.25035 -2.10159 12.5938 0.834465 23.5513C2.70929 30.5482 10.3485 37.3212 23.7358 43.8983C24.7733 44.3985 26.0376 44.0598 26.6859 43.1078C34.9689 30.7242 38.1982 21.039 36.3233 14.042C33.3873 3.08454 23.0603 -1.74199 13.7444 0.754182ZM19.6401 22.7572C17.2003 23.411 14.6734 21.9656 14.0249 19.5452C13.3764 17.1249 14.842 14.6097 17.2818 13.956C19.7217 13.3022 22.2486 14.7476 22.8971 17.1679C23.5456 19.5883 22.08 22.1034 19.6401 22.7572Z" fill="white" />
		</svg>
		<div class="map-item px-10 py-5 flex items-center bg-white rounded-lg -ml-96 lg:ml-0 mt-5">
			<span class="text-4xl font-bold text-orange">1</span>
			<p class="px-10">Universidade </p>
			<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/dist/images/united-kingdom.png">
		</div>
	</div>

	<div class="absolute map-location map-3">
		<svg width="37" height="43" viewBox="0 0 37 43" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M27.595 2.90511C19.2046 -1.85057 7.99645 0.227844 2.4027 10.0969C-1.1692 16.3987 -0.475714 26.5846 4.45196 40.6628C4.84042 41.747 5.97912 42.3924 7.10892 42.1687C21.699 39.1531 30.7943 34.5156 34.3662 28.2137C39.9599 18.3447 35.9854 7.66079 27.595 2.90511ZM16.3626 22.7224C14.1651 21.4769 13.3781 18.6742 14.6137 16.4943C15.8492 14.3144 18.6581 13.5499 20.8556 14.7955C23.0531 16.041 23.8401 18.8436 22.6045 21.0235C21.369 23.2034 18.5601 23.9679 16.3626 22.7224Z" fill="white" />
		</svg>
		<div class="map-item px-10 py-5 flex items-center bg-white rounded-lg -ml-96 lg:ml-0 mt-5">
			<span class="text-4xl font-bold text-primary-100">4</span>
			<p class="px-10">Universidades </p>
			<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/dist/images/portugal.png">
		</div>
	</div>

	<div class="absolute map-location map-4">
		<svg width="37" height="43" viewBox="0 0 37 43" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M27.595 2.90511C19.2046 -1.85057 7.99645 0.227844 2.4027 10.0969C-1.1692 16.3987 -0.475714 26.5846 4.45196 40.6628C4.84042 41.747 5.97912 42.3924 7.10892 42.1687C21.699 39.1531 30.7943 34.5156 34.3662 28.2137C39.9599 18.3447 35.9854 7.66079 27.595 2.90511ZM16.3626 22.7224C14.1651 21.4769 13.3781 18.6742 14.6137 16.4943C15.8492 14.3144 18.6581 13.5499 20.8556 14.7955C23.0531 16.041 23.8401 18.8436 22.6045 21.0235C21.369 23.2034 18.5601 23.9679 16.3626 22.7224Z" fill="white" />
		</svg>
		<div class="map-item px-10 py-5 flex items-center bg-white rounded-lg -ml-96 lg:ml-0 mt-5">
			<span class="text-4xl font-bold text-primary-100">99</span>
			<p class="px-10">Universidades </p>
			<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/dist/images/portugal.png">
		</div>
	</div>


	<img class="w-full h-auto hidden sm:block" src="<?php echo get_template_directory_uri(); ?>/dist/images/banner.png">
	<img class="w-full h-auto sm:hidden" src="<?php echo get_template_directory_uri(); ?>/dist/images/international-mobile.png">
</div>

<div class="container mx-auto px-20 lg:px-0 text-center py-48">
	<h1 class="text-4xl lg:text-5xl font-bold mb-15 leading-tight">Estudos Internacionais</h1>
	<p class="text-xl lg:text-2xl max-w-3xl mx-auto"><?php the_field( 'sub_titulo' ); ?></p>
	<div class="flex flex-col lg:flex-row items-center mt-64 lg:space-x-48">
		<div class="w-full w-1/3">
			<img loading="lazy" class="w-full h-auto max-w-sm mx-auto mb-20 lg:mb-0" src="<?php the_field( 'imagem' ); ?>">
		</div>
		<div class="w-full w-2/3 text-left">
			<p class="text-lg"><?php the_field( 'texto' ); ?></p>

			<div class="flex flex-col lg:flex-row lg:items-center space-y-30 lg:space-y-0 lg:space-x-48 text-lg mt-48">
				<a class="flex items-center" href="/aprovados?international=1">
					Lista completa de Universidades
					<svg class="ml-10" width="17" height="17" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M11.9272 1.14923L21.1382 10.4648C21.7716 11.1054 21.7716 11.8947 21.1382 12.5353L11.9272 21.8509" stroke="currentColor" stroke-width="1.94078" />
						<line x1="21.6133" y1="11.2297" x2="0.341818" y2="11.2297" stroke="currentColor" stroke-width="1.94078" />
					</svg>
				</a>

				<?php if ( get_field( 'school_profille' ) ) : ?>
					<a class="flex items-center" href="<?php the_field( 'school_profille' ); ?>" download="<?php the_field( 'school_profille' ); ?>">
						<svg class="mr-10" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.20541 8.57921C2.14182 8.644 2.06596 8.69547 1.98226 8.73061C1.89856 8.76574 1.80869 8.78384 1.71791 8.78384C1.62713 8.78384 1.53726 8.76574 1.45355 8.73061C1.36985 8.69547 1.29399 8.644 1.23041 8.57921C1.10099 8.44755 1.02848 8.27032 1.02848 8.0857C1.02848 7.90109 1.10099 7.72387 1.23041 7.59221L7.26141 1.50021C8.62141 0.444205 9.98941 -0.062795 11.3514 0.00620503C13.0674 0.094205 14.4034 0.748205 15.5374 1.82121C16.6934 2.91521 17.4414 4.4762 17.4414 6.36821C17.4414 7.82021 17.0194 9.09821 16.1284 10.2322L7.62541 18.9922C6.76541 19.6972 5.80941 20.0382 4.78541 19.9972C3.48541 19.9432 2.51841 19.5232 1.79941 18.8122C0.957406 17.9812 0.441406 16.9602 0.441406 15.5872C0.441406 14.4952 0.818406 13.4872 1.59641 12.5412L9.08041 4.90021C9.68041 4.26021 10.2674 3.88021 10.8674 3.78821C11.2679 3.72513 11.6777 3.76095 12.0612 3.89254C12.4446 4.02414 12.7901 4.24751 13.0674 4.54321C13.5994 5.10621 13.8274 5.8082 13.7474 6.6072C13.6924 7.1522 13.4694 7.65421 13.0594 8.13521L6.17941 15.1832C6.11624 15.2482 6.04076 15.3001 5.95736 15.3356C5.87397 15.3712 5.78432 15.3898 5.69366 15.3903C5.603 15.3909 5.51314 15.3734 5.42931 15.3389C5.34548 15.3043 5.26937 15.2535 5.20541 15.1892C5.07519 15.0583 5.00159 14.8815 5.00047 14.6969C4.99935 14.5123 5.07079 14.3347 5.19941 14.2022L12.0464 7.19021C12.2464 6.9552 12.3514 6.7182 12.3764 6.46621C12.4164 6.06621 12.3204 5.7712 12.0714 5.5082C11.9457 5.37351 11.7886 5.27199 11.6141 5.21267C11.4396 5.15335 11.2532 5.13808 11.0714 5.16821C10.8284 5.20521 10.4884 5.42621 10.0694 5.87221L2.61641 13.4792C2.07941 14.1342 1.81941 14.8292 1.81941 15.5882C1.81941 16.5422 2.16441 17.2252 2.76141 17.8142C3.23641 18.2842 3.88141 18.5642 4.84141 18.6042C5.52141 18.6312 6.15141 18.4062 6.69941 17.9622L15.0964 9.31221C15.7414 8.48521 16.0634 7.51221 16.0634 6.3692C16.0634 4.88721 15.4864 3.6852 14.5954 2.84121C13.6854 1.97921 12.6454 1.47121 11.2824 1.40121C10.2744 1.34921 9.21741 1.7412 8.16541 2.5472L2.20541 8.5802V8.57921Z" fill="black" />
						</svg>
						Baixe o School Profile
					</a>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>

<div class="w-full h-450 ml-30 rounded-tl-200 rounded-tl-none lg:rounded-bl-300 bg-black flex items-center justify-center my-64 relative z-10 bg-cover bg-center overflow-hidden" style="background-image: url('<?php the_field( 'video_imagem' ); ?>');">
	<button class="play-video-button order-1 lg:order-2 mb-15 lg:mb-0 duration-300 focus:outline-none">
		<svg class="w-60 lg:w-80" viewBox="0 0 116 116" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M116 58C116 73.3826 109.889 88.1351 99.0122 99.0122C88.1351 109.889 73.3826 116 58 116C42.6174 116 27.8649 109.889 16.9878 99.0122C6.1107 88.1351 0 73.3826 0 58C0 42.6174 6.1107 27.8649 16.9878 16.9878C27.8649 6.1107 42.6174 0 58 0C73.3826 0 88.1351 6.1107 99.0122 16.9878C109.889 27.8649 116 42.6174 116 58ZM49.2275 36.9242C48.6855 36.5383 48.0477 36.309 47.384 36.2615C46.7203 36.214 46.0563 36.35 45.4648 36.6548C44.8733 36.9595 44.3771 37.4212 44.0305 37.9892C43.684 38.5572 43.5004 39.2096 43.5 39.875V76.125C43.5004 76.7904 43.684 77.4428 44.0305 78.0108C44.3771 78.5788 44.8733 79.0405 45.4648 79.3452C46.0563 79.65 46.7203 79.786 47.384 79.7385C48.0477 79.691 48.6855 79.4617 49.2275 79.0757L74.6025 60.9507C75.0724 60.6154 75.4554 60.1727 75.7197 59.6595C75.984 59.1462 76.1219 58.5773 76.1219 58C76.1219 57.4227 75.984 56.8538 75.7197 56.3405C75.4554 55.8273 75.0724 55.3846 74.6025 55.0492L49.2275 36.9242Z" fill="white" />
		</svg>
	</button>
</div>

<div class="bg-white pt-350 pb-96 -mt-350">
	<div class="container mx-auto px-20 lg:px-0 grid grid-cols-1 lg:grid-cols-3 gap-64 mb-80">
		<?php
		if ( have_rows( 'logos' ) ) :
			while ( have_rows( 'logos' ) ) :
				the_row();
				?>
				<img loading="lazy" class="w-full h-auto m-auto max-w-xs mx-auto px-48 lg:px-0" src="<?php the_sub_field( 'imagem' ); ?>">
				<?php
			endwhile;
		endif;
		?>
	</div>

	<div class="lg:text-center max-w-6xl mx-auto">
		<h1 class="text-4xl lg:text-5xl font-bold mb-15 leading-tight px-20 lg:px-0">Como acompanhamos e preparamos nossos alunos e alunas?</h1>
		<?php
		if ( have_rows( 'opcoes' ) ) :
			?>
			<div class="max-w-4xl mx-auto px-20 lg:px-0 flex w-full items-start mt-48 lg:mt-64">
				<div class="w-full lg:w-1/2">
					<ul class="acordion-wrapper flex flex-col items-start">
						<?php
						$active = true;
						while ( have_rows( 'opcoes' ) ) :
							the_row();
							?>
							<li class="flex flex-col w-full lg:w-auto">
								<div class="w-full li-hover <?php echo $active ? 'active' : null; ?> flex justify-between items-center mb-15">
									<div class="flex items-center w-full">
										<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="CurrentColor" />
										</svg>
										<span class="mx-20 title-text"><?php the_sub_field( 'titulo' ); ?></span>
									</div>
									<svg class="lg:hidden arrow-item min-w-15" width="15" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.8225 1.91592L7.9525 6.73126C7.61761 7.0624 7.205 7.0624 6.8701 6.73126L2.0001 1.91592" stroke="currentColor" stroke-width="3" />
									</svg>
								</div>
								<div class="drop-down-text-container hidden px-20 ml-5 mb-20">
									<p class="font-light text-left">
										<?php the_sub_field( 'texto' ); ?>
									</p>
								</div>
							</li>
							<?php
							$active = false;
						endwhile;
						?>
					</ul>
				</div>
				<div class="hidden lg:block lg:w-1/2 pl-15">
					<div class="drop-down-text-side"></div>
				</div>
			</div>
			<?php
		endif;
		?>
	</div>
</div>

<?php
if ( have_rows( 'historias' ) ) :
	?>
	<div class="owl-page owl-carousel owl-theme min-h-screen">
		<?php
		while ( have_rows( 'historias' ) ) :
			the_row();
			?>
			<div class="w-full h-800 lg:h-auto min-h-screen flex items-center justify-center px-20 pt-48 pb-136 bg-opacity-25 bg-cover bg-center" style="background-image: url('<?php the_sub_field( 'imagem_fundo' ); ?>');">
				<div class="text-center">
					<h2 class="text-2xl lg:text-4xl leading-none m-0 text-white mb-10"><?php the_sub_field( 'titulo' ); ?></h2>
					<h1 class="text-4xl lg:text-5xl leading-none m-0 font-bold text-yellow"><?php the_sub_field( 'sub_titulo' ); ?></h1>
					<div class="max-w-4xl bg-white mt-48 rounded-lg flex flex-col lg:flex-row items-center overflow-hidden">
						<img loading="lazy" class="h-200 lg:h-270 w-280 object-cover rounded-b-full lg:rounded-b-none lg:rounded-r-full" src="<?php the_sub_field( 'foto' ); ?>">
						<div class="px-20 lg:px-48 py-30 text-left">
							<p class="text-2xl"><?php the_sub_field( 'nome' ); ?></p>
							<p class="text-lg lg:text-2xl font-bold"><?php the_sub_field( 'universidade' ); ?></p>
							<p class="text-sm lg:text-lg mt-30"><?php the_sub_field( 'texto' ); ?></p>
						</div>
					</div>
					<div style="margin-top: 24px;">
						<h6 style="color: #fff;"><a class="duration-300 hover:underline" href="https://www.youtube.com/playlist?list=PLQKDsuneBerviJi0jakiDNjeAWmHSx7EP" target="_BLANK">Conheça mais historias de sucesso em nosso <strong>canal no youtube</strong> clicando aqui</a></h6>
					</div>	
				</div>
			</div>
			<?php
		endwhile;
		?>

	</div>
	
	<?php
endif;
?>

<div class="relative mt-48 mb-30">
	<div class="absolute right-0 top-0 w-full h-full bg-dark md:mr-136 rounded-tr-100 lg:rounded-tr-200"></div>
	<div class="lg:ml-64 flex flex-col lg:flex-row items-start justify-start relative z-10 py-64 mx-20">
		<h1 class="text-4x3 lg:text-6xl leading-none text-white -mt-15 mr-80 mb-30 lg:mb-0 fade-left duration-700 pr-48">Projetos</h1>
		<p class="max-w-xs lg:max-w-md text-sm lg:text-xl leading-tight font-light text-white font-sans fade-left duration-700">Nosso objetivo é proporcionar vivências inovadoras e imaginativas, com foco na boa convivência, percepção artístico-cultural e competências acadêmicas individuais.</p>
	</div>
	<div class="container mx-auto">
		<div class="carousel-one-column owl-carousel owl-theme">
			<?php
			$projects = new WP_Query(
				array(
					'post_type'     => 'post',
					'category_name' => 'home',
				)
			);
			?>
			<?php if ( $projects->have_posts() ) : ?>
				<?php
				while ( $projects->have_posts() ) :
					$projects->the_post();
					?>
					<div class="item module h-410 w-280 <?php echo has_tag( 'unclick' ) ? 'unclick' : null; ?>">
						<a class="w-full h-full flex flex-col" <?php echo ! has_tag( 'unclick' ) ? 'href="' . get_permalink() . '"' : null; ?>>
							<div class="h-full w-full bg-primary-100 bg-cover bg-center" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')"></div>
							<div class="text-area bg-white p-20">
								<h2 class="font-bold text-2xl leading-none mb-10"><?php echo the_title(); ?></h2>
								<svg class="h-0 float-right" width="97" height="95" viewBox="0 0 97 95" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M52.0116 1.12292L92.8916 42.4669C95.7028 45.31 95.7028 48.8129 92.8916 51.656L52.0116 93" stroke="#F5F5F1" stroke-width="3" />
									<line x1="94.998" y1="47.3724" x2="0.592239" y2="47.3724" stroke="#F5F5F1" stroke-width="3" />
								</svg>
								<p class="font-sans text-sm"><?php echo str_replace( 'Learn More', '<b class="underline">Ver Mais</b>', strip_tags( get_the_excerpt() ) ); ?></p>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p class="font-sans text-lg text-white">Desculpa, não há projetos ainda!</p>
			<?php endif; ?>
		</div>
	</div>
	<div class="absolute w-full h-200 bg-background left-0 bottom-0"></div>
</div>

<div class="w-full bg-white rounded-r-full pl-30 lg:pl-80 py-30 flex flex-col items-start justify-start max-w-3xl mb-48">
	<h1 class="text-4xl lg:text-5xl font-bold mb-15 leading-tight">Fale conosco</h1>
	<p class="text-lg">Está com alguma dúvida ou precisa solicitar um documento?</p>
	<p class="text-lg">+55 (11) 5536-4402</p>
	<div class="border border-black rounded-full py-10 lg:py-5 px-20 items-center flex my-15">
		<svg class="mr-10 w-30 lg:w-48 h-auto" viewBox="0 0 51 53" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g clip-path="url(#clip0_360_19042)">
				<path d="M45.1354 23.7667C45.0666 18.9123 43.1159 14.2761 39.6977 10.8435C36.2795 7.41038 31.6629 5.4515 26.8287 5.38254C25.8749 5.37381 24.9982 4.85416 24.5291 4.02018C24.0597 3.18624 24.0692 2.16401 24.554 1.33879C25.0387 0.513575 25.9247 0.0109162 26.8789 0.0196431C33.1093 0.108609 39.0601 2.6341 43.4667 7.05874C47.873 11.4837 50.3876 17.4594 50.4758 23.7165C50.4828 24.4278 50.2079 25.1129 49.7116 25.6206C49.2156 26.1282 48.5388 26.4167 47.8305 26.4225H47.8048C47.101 26.4225 46.4258 26.1435 45.9261 25.6463C45.426 25.1487 45.142 24.4732 45.1358 23.7669L45.1354 23.7667ZM26.853 1.88241C26.4047 1.88324 26.0408 2.24742 26.0387 2.69765C26.0367 3.14789 26.3968 3.5158 26.8456 3.52038C32.1644 3.59604 37.2447 5.75159 41.0064 9.52885C44.7678 13.3061 46.9143 18.4075 46.9901 23.7495C46.9938 24.1989 47.3577 24.561 47.8052 24.5605H47.8131C48.0292 24.5589 48.2361 24.4712 48.3877 24.3161C48.5392 24.161 48.6232 23.9519 48.6207 23.7349C48.5392 17.965 46.2208 12.4548 42.1577 8.37342C38.0945 4.29306 32.6073 1.96457 26.8619 1.88231L26.853 1.88241Z" fill="#2C2C2C" />
				<path d="M40.6843 27.7717H40.6814C39.9735 27.7717 39.2946 27.4894 38.7941 26.9864C38.2936 26.4834 38.0129 25.8015 38.0137 25.0903C38.0087 21.8319 36.7176 18.7085 34.4228 16.4046C32.1278 14.101 29.0167 12.8053 25.7719 12.8019H25.7694C24.8165 12.7994 23.9372 12.2876 23.4615 11.4582C22.9863 10.6289 22.9867 9.60824 23.4632 8.77972C23.9397 7.95119 24.8198 7.44024 25.7724 7.43896C30.4341 7.44104 34.9043 9.30099 38.2005 12.611C41.4969 15.9207 43.3504 20.4092 43.3532 25.0905C43.3537 25.8018 43.0726 26.4841 42.5721 26.987C42.0712 27.4901 41.3922 27.7723 40.684 27.7719L40.6843 27.7717ZM40.6831 25.9092H40.6835C40.8996 25.9097 41.107 25.8236 41.2602 25.6698C41.4129 25.5164 41.499 25.3081 41.499 25.0907C41.4957 20.9035 39.8377 16.8889 36.889 13.9277C33.9402 10.9673 29.942 9.30317 25.7718 9.30104H25.7714C25.3235 9.30437 24.9621 9.66979 24.9621 10.1196C24.9617 10.5694 25.3231 10.9353 25.771 10.939C29.5076 10.9427 33.0901 12.4348 35.733 15.0875C38.3759 17.7407 39.8629 21.3375 39.8683 25.0898C39.8679 25.3072 39.9535 25.5155 40.1063 25.6689C40.2591 25.8227 40.466 25.9088 40.6826 25.9088L40.6831 25.9092Z" fill="#2C2C2C" />
				<path d="M32.5796 28.6113C31.8725 28.5764 31.2085 28.2613 30.7324 27.7354C30.2563 27.2095 30.0075 26.5156 30.0398 25.8056C30.1532 24.3843 29.6399 22.984 28.6352 21.9764C27.6309 20.9682 26.2366 20.4535 24.8212 20.5687C24.0698 20.6024 23.3388 20.3184 22.8055 19.7859C22.317 19.2924 22.038 18.6281 22.0276 17.9326C22.0173 17.2371 22.2764 16.5645 22.75 16.0568C23.2236 15.5492 23.8752 15.2462 24.567 15.2117C27.4864 15.0225 30.3453 16.1046 32.414 18.1816C34.483 20.2586 35.5615 23.1291 35.3744 26.0604C35.3413 26.7713 35.0279 27.4393 34.5038 27.9178C33.9797 28.3967 33.2872 28.6462 32.5797 28.6112L32.5796 28.6113ZM31.8928 25.8938C31.882 26.1108 31.9578 26.3232 32.1031 26.4845C32.2488 26.6454 32.4517 26.7418 32.6682 26.7518C32.8843 26.7622 33.0958 26.6861 33.2556 26.5398C33.4158 26.3935 33.5115 26.1893 33.5214 25.9719C33.6833 23.5649 32.8011 21.2048 31.1017 19.4995C29.4028 17.7938 27.0526 16.9087 24.6552 17.0721C24.3336 17.0883 24.0508 17.2932 23.9345 17.595C23.8182 17.8969 23.8898 18.2394 24.1171 18.4689L24.1175 18.4693C24.2785 18.6344 24.5029 18.7217 24.7327 18.7084C26.6705 18.5678 28.5731 19.2796 29.9475 20.6585C31.3216 22.0375 32.0315 23.9477 31.8928 25.8937L31.8928 25.8938Z" fill="#2C2C2C" />
				<path d="M47.2679 39.193C43.4647 37.4998 39.1035 35.2848 35.2987 33.5957H35.2983C35.0052 33.4705 34.6802 33.441 34.3693 33.5109C34.0584 33.5807 33.7769 33.7466 33.5646 33.9848L29.041 39.4038L29.0414 39.4042C25.6696 38.3312 22.5746 36.5248 19.9778 34.1137C16.3758 30.7076 13.778 26.3708 12.4703 21.5788L17.2849 16.3182H17.2845C17.5047 16.0759 17.6459 15.7724 17.6902 15.4473C17.7345 15.1226 17.679 14.7921 17.532 14.4994L12.5601 2.50526L12.5109 2.40424C12.3018 2.01345 11.9326 1.73492 11.5008 1.64221C8.95644 1.22067 6.34756 1.77773 4.19408 3.20156C-0.997171 7.35429 -0.796448 16.5803 1.58648 23.3937C4.52696 31.8038 10.5541 39.7577 18.5579 45.791C26.072 51.4549 35.4742 55.9605 43.129 50.5457C46.0467 48.4824 47.8422 45.0174 48.1808 40.8232L48.1812 40.8236C48.2201 40.4897 48.1531 40.1522 47.9887 39.8591C47.8248 39.566 47.5722 39.3328 47.268 39.1931L47.2679 39.193ZM46.3212 40.8086H46.3208C46.2636 41.396 46.1709 41.9797 46.043 42.5555L33.6626 36.7631L34.7936 35.4079C38.461 37.0483 42.6173 39.1511 46.3208 40.8086H46.3212ZM10.936 3.43187L15.806 15.1823L14.5193 16.5883L8.97497 3.42346C9.62615 3.34074 10.2852 3.34365 10.936 3.43178V3.43187ZM42.0619 49.0236C36.5415 52.9281 29.0085 51.3392 19.6718 44.3014C11.9582 38.4879 6.15742 30.8438 3.33628 22.7778C1.16372 16.5652 0.867293 8.2454 5.34987 4.65885C5.88349 4.26765 6.48331 3.97707 7.12003 3.8008L13.1406 18.0948L11.011 20.4212V20.4216C10.6351 20.8224 10.4944 21.3911 10.6405 21.922C12.0278 27.1074 14.8254 31.8026 18.7193 35.4817C21.5865 38.1436 25.0159 40.1204 28.7508 41.2632C29.3084 41.4203 29.9061 41.2428 30.2887 40.8063L32.4298 38.2412L45.5235 44.3677L45.523 44.3673C44.8644 46.2352 43.6576 47.8586 42.0618 49.0238L42.0619 49.0236Z" fill="#2C2C2C" />
			</g>
			<defs>
				<clipPath id="clip0_360_19042">
					<rect width="50.4458" height="53" fill="white" />
				</clipPath>
			</defs>
		</svg>
		<div class="text-xl lg:text-4x2 lg:font-semibold"><?php the_field( 'numero' ); ?></div>
	</div>
	<p class="text-lg">Será um prazer atendê-lo(la)!</p>
</div>

<div class="flex flex-col lg:flex-row items-center container mx-auto px-20 lg:px-0">
	<div class="order-2 lg:order-1 w-full w-1/2">
		<h1 class="text-3xl lg:text-4x3 font-light lg:mb-15 leading-tight"><?php echo get_field( 'estudos_internacionais' )['titulo']; ?></h1>
		<h2 class="text-3xl lg:text-4xl font-bold mb-15 leading-tight"><?php echo get_field( 'estudos_internacionais' )['sub_titulo']; ?></h2>
		<p class="mb-48 text-sm lg:text-lg"><?php echo get_field( 'estudos_internacionais' )['texto']; ?></p>
	</div>
	<div class="order-1 lg:order-2 w-full w-1/2 lg:pl-64 mb-20 lg:mb-0">
		<img loading="lazy" class="w-full h-auto max-w-md mx-auto" src="<?php echo get_field( 'estudos_internacionais' )['imagem']; ?>">
	</div>
</div>

<div class="py-64 container mx-auto px-20 lg:px-0">
	<div class="flex flex-col lg:flex-row lg:items-end lg:justify-start pb-20 space-y-48 lg:space-y-0 lg:space-x-80 border-b border-gray-400">
		<?php
		if ( have_rows( 'cargos' ) ) :
			while ( have_rows( 'cargos' ) ) :
				the_row();
				?>
				<div style="max-width: 316px !important;">
					<h2 class="text-3xl leading-tight mb-5"><?php the_sub_field( 'titulo' ); ?></h2>
					<p class="text-lg font-bold"><?php the_sub_field( 'nome' ); ?></p>
				</div>
				<?php
			endwhile;
		endif;
		?>
	</div>
	<div class="mt-25"><?php the_field( 'adress' ); ?></div>
</div>

<div class="max-w-4xl mx-auto px-20 lg:px-0 mb-136">
	<div class="w-full px-40 py-30 rounded-lg bg-white">
		<h1 class="text-4xl">Formulário de contato</h1>
		<p>Preencha o formulário abaixo e retornaremos em breve.</p>
		<?php echo do_shortcode( '[contact-form-7 id="1223" title="Estudos Internacionais"]' ); ?>
	</div>
</div>

<?php
get_footer();
