<?php

/**
 * The cicles content
 *
 * @author Nucleus LLC
 * @since 1.0.0
 *
 * @package Nucleus
 */

$double    = get_field( 'double_blocks' );
$list_type = get_field( 'list_type' );
$list_icon = get_field( 'list_icon' );
$group     = get_field( 'group' );
$group_2   = get_field( 'group_2' );
$group_3   = get_field( 'group_3' );

$item = 0;
?>

<style>
	.li-hover.active {
		background-color: <?php echo $double ? $group['base_color'] : $group_3['base_color']; ?> !important;
		<?php echo '#ffd200' == $group['base_color'] ? 'color: ' . $group['primary_color'] . ' !important' : null; ?>
	}
</style>


<?php
if ( ! $double ) :
	?>
	<div class="max-w-6xl mx-auto px-20 lg:px-0 flex items-center mt-20 periodo text-dark mb-60">
		<svg class="mr-10" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M21 38.5C30.665 38.5 38.5 30.665 38.5 21C38.5 11.335 30.665 3.5 21 3.5C11.335 3.5 3.5 11.335 3.5 21C3.5 30.665 11.335 38.5 21 38.5Z" stroke="CurrentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
			<path d="M21 10.5V21L28 24.5" stroke="CurrentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
		</svg>
		<div class="flex flex-col lg:flex-row lg:space-x-20">
			<?php
			if ( $group_3['show_times'] ) :
				foreach ( $group_3['show_times'] as $row ) {
					echo '<p class="mb-4 leading-none text-lg lg:text-xl"> ' . $row['time'] . '</p>';
				}
			endif;
			?>
		</div>
	</div>
<?php else : ?>
	<h2 class="max-w-6xl mx-auto px-20 text-2xl lg:text-4xl lg:text-center mb-60">Escolha o formato que <strong>mais dialoga</strong> com seu projeto de Educação:</h2>
<?PHP endif; ?>


<?php
if ( ! is_admin() ) :
	if ( $double ) :
		?>
		<div id="periodos" class="container lg:h-300 mx-auto flex flex-col lg:flex-row items-center overflow-hidden lg:rounded-lg" style="background-color: <?php echo $group['primary_color']; ?>;">
			<div class="pt-2rem priodo-parcial first-color card-hover mobile-active h-full w-full text-white flex flex-col justify-start px-48 lg:px-80 py-64" style="background-color: <?php echo $group['primary_color']; ?>;">
				<h4 class="text-2xl lg:text-2xl"><?php echo $group['type']; ?></h4>
				<h3 class="text-3xl lg:text-4x2 font-bold"><?php echo $group['name']; ?></h3>
				<div class="flex lg:hidden items-center mt-20">
					<svg class="mr-10" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21 38.5C30.665 38.5 38.5 30.665 38.5 21C38.5 11.335 30.665 3.5 21 3.5C11.335 3.5 3.5 11.335 3.5 21C3.5 30.665 11.335 38.5 21 38.5Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M21 10.5V21L28 24.5" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<div class="text-white">

						<?php
						if ( $group['times'] ) :
							foreach ( $group['times'] as $row ) {
								echo '<p class="mb-4 leading-none text-lg"> ' . $row['time'] . '</p>';
							}
						endif;
						?>

					</div>
				</div>
				<div class="hidden lg:flex items-center mt-20 periodo">
					<svg class="mr-10" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21 38.5C30.665 38.5 38.5 30.665 38.5 21C38.5 11.335 30.665 3.5 21 3.5C11.335 3.5 3.5 11.335 3.5 21C3.5 30.665 11.335 38.5 21 38.5Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M21 10.5V21L28 24.5" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<div class="text-white">
			
						<?php
						if ( $group['times'] ) :
							foreach ( $group['times'] as $row ) {
								echo '<p class="mb-4 leading-none text-lg"> ' . $row['time'] . '</p>';
							}
						endif;
						?>

					</div>
				</div>
				<div class="mobile-know flex lg:hidden items-center mt-20">
					<div class="text-white">
						<p class="mb-4 leading-none text-lg underline">Conheça</p>
					</div>
					<p>olá</p>
					<svg class="ml-20 transform -rotate-90" width="42" height="41" viewBox="0 0 42 41" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M40.0684 21.3058L22.9378 38.2441C21.7598 39.4089 20.3084 39.4089 19.1304 38.2441L1.99986 21.3058" stroke="white" stroke-width="3" />
						<line x1="21.502" y1="39.1162" x2="21.502" y2="-5.005e-05" stroke="white" stroke-width="3" />
					</svg>
				</div>
				<div class="hidden lg:flex items-center mt-20 conheca">
					<div class="text-white">
						<p class="mb-4 leading-none text-lg underline">Conheça nossa estrutura</p>
					</div>
					<svg class="ml-20" width="42" height="41" viewBox="0 0 42 41" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M40.0684 21.3058L22.9378 38.2441C21.7598 39.4089 20.3084 39.4089 19.1304 38.2441L1.99986 21.3058" stroke="white" stroke-width="3" />
						<line x1="21.502" y1="39.1162" x2="21.502" y2="-5.005e-05" stroke="white" stroke-width="3" />
					</svg>
				</div>
			</div>

			<div class="pt-2rem priodo-integral second-color card-hover mobile-active h-full w-full text-white flex flex-col justify-start px-48 lg:px-80 py-64" style="background-color: <?php echo $group_2['primary_color']; ?>;">
				<h4 class="text-2xl lg:text-2xl"><?php echo $group_2['type']; ?></h4>
				<h3 class="text-3xl lg:text-4x2 font-bold" style="line-height: 120%;"><?php echo $group_2['name']; ?></h3>
				<div class="flex lg:hidden items-center mt-20">
					<svg class="mr-10" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21 38.5C30.665 38.5 38.5 30.665 38.5 21C38.5 11.335 30.665 3.5 21 3.5C11.335 3.5 3.5 11.335 3.5 21C3.5 30.665 11.335 38.5 21 38.5Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M21 10.5V21L28 24.5" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<div class="text-white">

						<?php
						if ( $group_2['times'] ) :
							foreach ( $group_2['times'] as $row ) {
								echo '<p class="mb-4 leading-none text-lg"> ' . $row['time'] . '</p>';
							}
						endif;
						?>

					</div>
				</div>
				<div class="hidden lg:flex items-center mt-20 periodo">
					<svg class="mr-10" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21 38.5C30.665 38.5 38.5 30.665 38.5 21C38.5 11.335 30.665 3.5 21 3.5C11.335 3.5 3.5 11.335 3.5 21C3.5 30.665 11.335 38.5 21 38.5Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M21 10.5V21L28 24.5" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<div class="text-white">

						<?php
						if ( $group_2['times'] ) :
							foreach ( $group_2['times'] as $row ) {
								echo '<p class="mb-4 leading-none text-lg"> ' . $row['time'] . '</p>';
							}
						endif;
						?>

					</div>
				</div>
				<div class="mobile-know flex lg:hidden items-center mt-20">
					<div class="text-white">
						<p class="mb-4 leading-none text-lg underline">Conheça</p>
					</div>
					<svg class="ml-20 transform -rotate-90" width="42" height="41" viewBox="0 0 42 41" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M40.0684 21.3058L22.9378 38.2441C21.7598 39.4089 20.3084 39.4089 19.1304 38.2441L1.99986 21.3058" stroke="white" stroke-width="3" />
						<line x1="21.502" y1="39.1162" x2="21.502" y2="-5.005e-05" stroke="white" stroke-width="3" />
					</svg>
				</div>
				<div class="hidden lg:flex items-center mt-20 conheca">
					<div class="text-white">
						<p class="mb-4 leading-none text-lg underline">Conheça nossa estrutura</p>
					</div>
					<svg class="ml-20" width="42" height="41" viewBox="0 0 42 41" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M40.0684 21.3058L22.9378 38.2441C21.7598 39.4089 20.3084 39.4089 19.1304 38.2441L1.99986 21.3058" stroke="white" stroke-width="3" />
						<line x1="21.502" y1="39.1162" x2="21.502" y2="-5.005e-05" stroke="white" stroke-width="3" />
					</svg>
				</div>
			</div>
		</div>
	<?php endif; ?>


	<?php

	function get_the_cicles_content( $double, $group, $secondary, $list_type, $list_icon, $index ) {
		ob_start();
		?>

		<div class="
		<?php
		if ( $double ) {
			echo 0 == $index ? 'priodo-parcial-content' : 'priodo-integral-content';
		}
		?>
	">
			<div class="container mx-auto -mt-2" style="background-color: <?php echo $group['primary_color']; ?>;">
				<div class="w-full px-15 lg:px-136 py-30 lg:py-136 lg:pt-80">
				<p style="color: #fff;"><?php echo $group['sub_title']; ?></p>
					<div class="flex w-full items-start lg:mt-64 <?php echo $index < 2 ? 'text-white' : null; ?>">
						<div class="w-full <?php echo $double ? 'lg:w-1/1' : 'lg:w-1/3'; ?>">
							<?php if ( 'unique column' == $list_type ) : ?>
								<ul class="acordion-wrapper font-semibold flex flex-col items-start">
								<?php else : ?>
									<ul class="acordion-wrapper grid grid-cols-1 lg:grid-cols-2">
									<?php endif; ?>
									<?php
									if ( $group['options'] ) :
										$fist = true;
										foreach ( $group['options'] as $row ) :
											?>
											<li class="flex flex-col w-full lg:w-auto">
												<div class="w-full li-hover <?php echo $fist ? 'active' : null; ?> flex justify-between items-center mb-15">
													<div class="flex items-center w-full">
														<?php if ( 1 == $list_icon ) : ?>
															<svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M9.59079 0.737877C10.1534 0.420708 10.8466 0.420708 11.4092 0.737877L19.5908 5.35011C20.1534 5.66728 20.5 6.25343 20.5 6.88777V16.1122C20.5 16.7466 20.1534 17.3327 19.5908 17.6499L11.4092 22.2621C10.8466 22.5793 10.1534 22.5793 9.59079 22.2621L1.40921 17.6499C0.84659 17.3327 0.5 16.7466 0.5 16.1122V6.88777C0.5 6.25343 0.84659 5.66728 1.40921 5.35011L9.59079 0.737877Z" fill="CurrentColor" />
															</svg>
														<?php elseif ( 2 == $list_icon ) : ?>
															<svg width="20" height="20" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M15.6141 1.00539C15.6141 0.43174 15.1486 -0.037 14.5763 0.00230537C12.9422 0.114529 11.3349 0.491203 9.81747 1.11974C7.9797 1.88097 6.30986 2.99672 4.90329 4.40329C3.49672 5.80986 2.38097 7.4797 1.61974 9.31747C0.991202 10.8349 0.614527 12.4422 0.502304 14.0763C0.462999 14.6486 0.93174 15.1141 1.50539 15.1141L4.18087 15.1141C4.75452 15.1141 5.21417 14.648 5.2714 14.0772C5.3726 13.0679 5.62118 12.0769 6.01079 11.1363C6.53317 9.87517 7.29883 8.72928 8.26405 7.76405C9.22928 6.79883 10.3752 6.03317 11.6363 5.51079C12.5769 5.12118 13.5679 4.8726 14.5772 4.7714C15.148 4.71417 15.6141 4.25452 15.6141 3.68087L15.6141 1.00539Z" fill="CurrentColor" />
																<path d="M21.5 6.89125C21.5 6.3176 21.0344 5.84886 20.4621 5.88816C18.8281 6.00039 17.2207 6.37706 15.7033 7.0056C13.8656 7.76683 12.1957 8.88258 10.7891 10.2891C9.38258 11.6957 8.26683 13.3656 7.5056 15.2033C6.87706 16.7207 6.50039 18.3281 6.38816 19.9621C6.34886 20.5344 6.8176 21 7.39125 21L10.0667 21C10.6404 21 11.1 20.5338 11.1573 19.963C11.2585 18.9537 11.507 17.9628 11.8967 17.0222C12.419 15.761 13.1847 14.6151 14.1499 13.6499C15.1151 12.6847 16.261 11.919 17.5222 11.3967C18.4628 11.007 19.4537 10.7585 20.463 10.6573C21.0338 10.6 21.5 10.1404 21.5 9.56673L21.5 6.89125Z" fill="CurrentColor" />
															</svg>
														<?php elseif ( 3 == $list_icon ) : ?>
															<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M17.0631 6.90724e-07C17.2708 6.90724e-07 17.3746 6.91271e-07 17.4722 0.0271832C17.7238 0.0972483 17.9468 0.340585 17.991 0.593222C18.0081 0.691235 17.9988 0.776626 17.98 0.94741C17.888 1.78442 17.6744 2.60594 17.3444 3.38669C16.8905 4.46041 16.2252 5.43601 15.3865 6.25779C14.5478 7.07958 13.5522 7.73145 12.4564 8.1762C11.3606 8.62095 10.1861 8.84986 9.00001 8.84986C7.81392 8.84986 6.63945 8.62095 5.54365 8.1762C4.44785 7.73145 3.45219 7.07958 2.6135 6.25779C1.77481 5.43601 1.10953 4.46041 0.655633 3.38669C0.325581 2.60594 0.112002 1.78442 0.020025 0.947409C0.00125807 0.776626 -0.0081254 0.691234 0.00900612 0.593221C0.053164 0.340584 0.276201 0.0972476 0.527826 0.0271825C0.625446 -2.76508e-08 0.729252 -1.77556e-08 0.936865 0L17.0631 6.90724e-07Z" fill="CurrentColor" />
																<path d="M0.936853 18C0.729241 18 0.625434 18 0.527814 17.9728C0.27619 17.9028 0.0531527 17.6594 0.0089948 17.4068C-0.00813671 17.3088 0.00124678 17.2234 0.0200138 17.0526C0.111991 16.2156 0.32557 15.3941 0.655622 14.6133C1.10952 13.5396 1.7748 12.564 2.61349 11.7422C3.45218 10.9204 4.44784 10.2685 5.54364 9.8238C6.63944 9.37905 7.81391 9.15014 9 9.15014C10.1861 9.15014 11.3606 9.37905 12.4563 9.8238C13.5521 10.2685 14.5478 10.9204 15.3865 11.7422C16.2252 12.564 16.8905 13.5396 17.3444 14.6133C17.6744 15.3941 17.888 16.2156 17.98 17.0526C17.9987 17.2234 18.0081 17.3088 17.991 17.4068C17.9468 17.6594 17.7238 17.9028 17.4722 17.9728C17.3746 18 17.2707 18 17.0631 18L0.936853 18Z" fill="CurrentColor" />
															</svg>
														<?php endif; ?>
														<span class="mx-20 title-text"><?php echo $row['title']; ?></span>
													</div>
													<svg class="arrow-item lg:hidden min-w-15" width="15" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12.8225 1.91592L7.9525 6.73126C7.61761 7.0624 7.205 7.0624 6.8701 6.73126L2.0001 1.91592" stroke="currentColor" stroke-width="3" />
													</svg>
												</div>
												<div class="drop-down-text-container hidden px-20 ml-5 mb-20">
													<p class="<?php echo $index < 2 ? 'text-white' : null; ?> font-light">
														<?php echo $row['text']; ?>
													</p>
												</div>
											</li>
											<?php
											$fist = false;
										endforeach;
									endif;
									?>
									</ul>
						</div>
						<div class="hidden lg:block <?php echo $double ? 'lg:w-1/2' : 'lg:w-2/3'; ?> pl-15">
							<div class="drop-down-text-side hidden lg:block"></div>
						</div>
					</div>
				</div>
			</div>

			<?php
			$projects = new WP_Query(
				array(
					'post_type'      => 'post',
					'category_name'  => $group['category'],
					'posts_per_page' => -1,
				)
			);
			?>
			<?php if ( $projects->have_posts() ) : ?>
				<div id="#projetos" class="container mx-auto relative" style="background-color: <?php echo $group['primary_color']; ?>;">
					<div class="absolute right-0 top-0 w-full md:mr-136 rounded-tr-100 lg:rounded-tr-200" style="background-color: <?php echo $group['base_color']; ?>; height: calc(100% - 200px);"></div>
					<div class="lg:ml-64 flex flex-col lg:flex-row items-start justify-start relative z-10 py-64 mx-20">
						<div>
							<h1 class="max-w-xs pr-48 lg:max-w-md text-4x3 lg:text-6xl leading-none text-white -mt-15 mr-80 mb-30 lg:mb-0 fade-left duration-700 pr-48 <?php echo $double ? 'text-dark' : null; ?>"><?php echo $group['list_title']; ?></h1>
						</div>
						<div>
							<p class="max-w-xs lg:max-w-xl text-sm lg:text-xl leading-tight font-light text-white font-sans fade-left duration-700 lg:pr-48 <?php echo $double ? 'text-dark' : null; ?>"><?php echo $group['list_desc']; ?></p>
							
								<div class="hourFlex">
									<img src="<?php echo $group['list_img']['url']; ?>" alt=""></img>
									<h6 style="font-size: 18px; margin-left: 12px"><?php?><?php echo $group['list_hour']; ?></h6>
								</div>
						</div>
					</div>
					<div class="carousel-one-column owl-carousel owl-theme">
						<?php
						$count = 0;
						while ( $projects->have_posts() ) :
							$projects->the_post();
							$count++;
							if ( /*!$group['double_columns']*/true ) :
								?>
								<div class="item module h-410 w-280 <?php echo has_tag( 'unclick' ) ? 'unclick' : null; ?>">
									<a class="w-full h-full flex flex-col" <?php echo ! has_tag( 'unclick' ) ? 'href="' . get_permalink() . '"' : null; ?>>
										<div class="h-full w-full bg-cover bg-center" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>
										<div class="cardProjetosOpcionais text-area bg-white p-20">
											<h2 class="font-bold fontCard leading-none mb-10"><?php echo the_title(); ?></h2>
											<svg class="h-0 float-right" width="97" height="95" viewBox="0 0 97 95" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M52.0116 1.12292L92.8916 42.4669C95.7028 45.31 95.7028 48.8129 92.8916 51.656L52.0116 93" stroke="#F5F5F1" stroke-width="3" />
												<line x1="94.998" y1="47.3724" x2="0.592239" y2="47.3724" stroke="#F5F5F1" stroke-width="3" />
											</svg>
											<p class="font-sans text-sm"><?php echo str_replace( 'Learn More', '<b class="underline">Ver Mais</b>', strip_tags( get_the_excerpt() ) ); ?></p>
										</div>
									</a>
								</div>
								<?php
							endif;
						endwhile;
						?>
						<?php wp_reset_postdata(); ?>
					</div>
					<div class="container mx-auto absolute w-full h-200 left-0 right-0 bottom-0 lg:pl-48">
						<div class="w-full h-full <?php echo $group['extra_curricular'] ? 'bg-dark' : 'bg-white'; ?>"></div>
					</div>
				</div>
			<?php else : ?>
				<p class="font-sans text-lg text-white">Desculpa, não há projetos ainda!</p>
			<?php endif; ?>

			<?php if ( $group['extra_curricular'] ) : ?>
				<div id="mobile-card-wrapper" class="fixed flex items-center justify-center bg-black bg-opacity-50 w-full h-full top-0 left-0 z-50 p-20" style="display: none;"></div>
				<div class="relative -mt-2">
					<div class="container left-0 right-0 top-0 mx-auto absolute h-full w-full" style="background-color: <?php echo $group['primary_color']; ?>;"></div>
					<div class="container mx-auto right-0 lg:pl-48 w-full">
						<div class="container mx-auto absolute w-full h-full left-0 right-0 bottom-0 lg:pl-48">
							<div class="w-full h-full bg-dark"></div>
						</div>
						<div class="container mx-auto absolute w-full h-136 left-0 right-0 bottom-0 lg:pl-48">
							<div class="w-full h-full bg-white"></div>
						</div>
						<div class="courses relative w-full h-full pt-48 pb-30">
							<div class="text-white mx-20 lg:mx-96">
								<h1 class="text-3xl lg:text-5xl pb-20">Cursos <strong>Extracurriculares</strong></h1>
								<p class="lg:text-lg mb-48 font-light">Atividades que podem ser escolhidas sem custo adicional e que <br> acontecem em horário diferente das aulas regulares.</p>
							</div>
							<div class="courses-carousel owl-carousel owl-theme">
								<?php
								if ( $group['extra_curricular_items'] ) :
									foreach ( $group['extra_curricular_items'] as $row ) :
										?>
										<div class="item bg-white text-dark h-410 w-full max-w-4xl rounded-lg overflow-hidden shadow-xl z-10">
											<div class="extracurricular-card w-full h-full flex flex-col lg:flex-row">
												<div class="min-w-300 h-full bg-cover bg-center" style="background-image: url('<?php echo $row['image']; ?>')"></div>
												<div class="w-full p-30 flex flex-col justify-center">
													<h2 class="text-2xl lg:text-xl font-bold mb-20 leading-none"><?php echo $row['title']; ?></h2>
													<span class="know-more-button flex items-center lg:hidden">
														Saiba mais
														<svg class="ml-15" width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M8.95419 1.40295L16.0733 8.60284C16.5628 9.09795 16.5628 9.70796 16.0733 10.2031L8.95419 17.403" stroke="#2C2C2C" stroke-width="1.5" />
															<line x1="16.4404" y1="9.19397" x2="6.27458e-05" y2="9.19396" stroke="#2C2C2C" stroke-width="1.5" />
														</svg>
													</span>
													<p class="mb-20 hidden lg:block"><?php echo $row['description']; ?></p>
													<?php if ( $row['categories'] ) : ?>
														<div class="flex items-center flex-wrap">
															<?php
															foreach ( $row['categories'] as $name ) :
																?>
																<div class="py-4 px-10 bg-gray-200 rounded-full font-bold uppercase text-md hidden lg:block mr-5"><?php echo $name['name']; ?></div>
															<?php endforeach; ?>
														</div>
													<?php endif; ?>
												</div>
												<div class="modal-mobile-content hidden">
													<div class="relative bg-white max-w-2xl w-full rounded-lg z-10">
														<div class="absolute top-0 right-0 -mt-60">
															<svg xmlns="http://www.w3.org/2000/svg" class="h-48 w-48 close-mobile-card" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
																<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
															</svg>
														</div>
														<div class="w-full h-180 bg-cover bg-center rounded-t-lg" style="background-image: url('<?php echo $row['image']; ?>')"></div>
														<div class="p-20">
															<h1 class="font-bold text-xl"><?php echo $row['title']; ?></h1>
															<p class="text-sm"><?php echo $row['description']; ?></p>
															<?php if ( $row['categories'] ) : ?>
																<div class="flex items-center flex-wrap mt-20">
																	<?php
																	foreach ( $row['categories'] as $name ) :
																		?>
																		<div class="py-4 px-10 bg-gray-200 rounded-full font-bold uppercase text-xs mr-5"><?php echo $name['name']; ?></div>
																	<?php endforeach; ?>
																</div>
															<?php endif; ?>
														</div>
													</div>
													<div class="absolute w-full h-full top-0 left-0 close-mobile-card"></div>
												</div>
											</div>
										</div>
										<?php
									endforeach;
								endif;
								?>
							</div>
						</div>
					</div>
				</div>
			<?php endif ?>


			<div class="relative">
				<div class="container left-0 right-0 top-0 mx-auto absolute h-full w-full rounded-b-lg" style="background-color: <?php echo $group['primary_color']; ?>;"></div>
				<div class="container mx-auto right-0 lg:pl-48 w-full">
					<div class="relative bg-white w-full flex justify-center items-center py-30 rounded-br-200 lg:rounded-br-none lg:rounded-bl-300 lg:pl-200">
						<div class="mt-80 mb-96 px-10">
							<div class="flex flex-col lg:flex-row items-center justify-between">
								<div class="mx-auto mx-autolg:w-1/2 h-300 lg:h-auto lg:w-550 lg:mr-48 mb-80 lg:mb-35 relative">
									<img class="z-10 relative h-300 w-auto lg:w-full lg:h-auto" src="<?php echo $group['direcao_pedagogica']['image']; ?>">
								</div>
								<div class="w-full lg:w-1/2 max-w-md mx-20 lg:mr-80">
									<h2 class="text-2xl lg:text-4x3 leading-none mb-10 lg:mb-15">Direção Pedagógica</h2>
									<h4 class="text-xl lg:text-3xl leading-none font-bold mb-15"><?php echo $group['direcao_pedagogica']['name']; ?></h4>
									<p class="text-md mb-35"><?php echo $group['direcao_pedagogica']['sub_name']; ?></p>
									<p class="text-sm lg:text-base"><?php echo $group['direcao_pedagogica']['description']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="relative container mx-auto text-center lg:rounded-b-lg -mt-2" style="background-color: <?php echo $group['primary_color']; ?>;">
					<div class="py-136 px-20 lg:py-96 max-w-4xl mx-auto text-white" 
					<?php
					if ( ! empty( $group['text_color'] ) ) :
						?>
																					 style="color: <?php echo $group['text_color']; ?>;" <?php endif ?>>

						<p class="text-lg lg:text-4xl">"<?php echo $group['user_comment']; ?>"</p>
						<p class="text-lg lg:text-2xl italic font-light mt-25"><?php echo $group['user_name']; ?></p>
					</div>

					<?php
					if ( have_rows( 'visits', 'option' ) ) :
						while ( have_rows( 'visits', 'option' ) ) :
							the_row();
							$categories = explode( ' + ', get_sub_field( 'category' ) );
							if ( $double ) {
								$viwn_type = $group['type'];
								$viwn_name = $group['name'];
							} else {
								$viwn_type = get_the_title();
								$viwn_name = null;
							}
							if ( $viwn_type === $categories[0] ) :
								if ( empty( $viwn_name ) || $viwn_name === $categories[1] ) :
									?>
									<div class="w-full pr-60">
										<div class="w-full rounded-tr-100 lg:rounded-tr-600 pl-20 lg:pl-96 pr-300 pb-80" style="background-color: <?php echo $group['detail_color']; ?>;">
											<div class="flex justify-between items-center py-48">
												<div class="text-left">
													<h3 class="text-4xl font-light"><strong class="font-bold"><?php echo the_title(); ?></strong></h3>

													<div class="flex flex-col lg:flex-row items-start lg:items-center">
														<p class="text-md font-bold leading-none p-0 m-0">Você está vendo:</p>
														<div class="text-4x2 font-light ml-10 leading-none p-0 -mb-5 atual-screen">entrada</div>
													</div>
												</div>

											</div>
										</div>
									</div>
									<?php
								endif;
							endif;
						endwhile;
					endif;
					?>

				</div>

				<?php
				if ( have_rows( 'visits', 'option' ) ) :
					while ( have_rows( 'visits', 'option' ) ) :
						the_row();
						$categories = explode( ' + ', get_sub_field( 'category' ) );
						if ( $double ) {
							$viwn_type = $group['type'];
							$viwn_name = $group['name'];
						} else {
							$viwn_type = get_the_title();
							$viwn_name = null;
						}
						if ( $viwn_type === $categories[0] ) :
							if ( empty( $viwn_name ) || $viwn_name === $categories[1] ) :
								$locals = get_sub_field( 'locals' );
								?>
								<div class="w-full relative -mt-80 z-20">
									<div class="next-carousel carousel-<?php echo $index; ?> absolute right-0 top-0 z-20 mr-96 mt-30 cursor-pointer hidden lg:block">
										<svg class="h-80 w-auto" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect width="93" height="93" rx="46.5" fill="white" />
											<path d="M48.3851 22.2393L69.9744 44.0737C71.459 45.5752 71.459 47.4251 69.9744 48.9266L48.3851 70.761" stroke="#2C2C2C" stroke-width="4.92496" />
											<line x1="71.0879" y1="46.6533" x2="21.2307" y2="46.6533" stroke="#2C2C2C" stroke-width="4.92496" />
										</svg>
									</div>
									<div class="prev-carousel carousel-<?php echo $index; ?> absolute left-0 bottom-0 z-20 ml-96 mb-30 cursor-pointer hidden lg:block">
										<svg class="h-80 w-auto transform rotate-180" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect width="93" height="93" rx="46.5" fill="white" />
											<path d="M48.3851 22.2393L69.9744 44.0737C71.459 45.5752 71.459 47.4251 69.9744 48.9266L48.3851 70.761" stroke="#2C2C2C" stroke-width="4.92496" />
											<line x1="71.0879" y1="46.6533" x2="21.2307" y2="46.6533" stroke="#2C2C2C" stroke-width="4.92496" />
										</svg>
									</div>
									<div class="school-parts part-<?php echo $index; ?> owl-carousel owl-theme">
										<?php foreach ( $locals as $local ) : ?>
											<div class="item slider-content" data-item="<?php echo $local['title']; ?>">
												<div class="absolute z-10 h-full w-full">
													<?php
													if ( $local['tags'] ) :
														foreach ( $local['tags'] as $row ) :
															switch ( $row['posicao'] ) {
																case 0:
																	$pos = 'top: 35%; left: 35%;';
																	break;
																case 1:
																	$pos = 'top: 10%; left: 10%;';
																	break;
																case 2:
																	$pos = 'top: 60%; left: 10%;';
																	break;
																case 3:
																	$pos = 'top: 60%; left: 10%;';
																	break;
																case 4:
																	$pos = 'top: 60%; left: 50%;';
																	break;
															}
															?>
															<div class="item-map absolute" style="<?php echo $pos; ?>">
																<svg class="item-map-icon" width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M0 27.5C0 12.3122 12.3122 0 27.5 0C42.6878 0 55 12.3122 55 27.5C55 42.6878 42.6878 55 27.5 55C12.3122 55 0 42.6878 0 27.5Z" fill="#2C2C2C" />
																	<path d="M27.4999 43.3654C36.2621 43.3654 43.3653 36.2622 43.3653 27.5C43.3653 18.7378 36.2621 11.6346 27.4999 11.6346C18.7377 11.6346 11.6345 18.7378 11.6345 27.5C11.6345 36.2622 18.7377 43.3654 27.4999 43.3654Z" stroke="#F5F5F1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
																	<path d="M27.5 33.8462V27.5" stroke="#F5F5F1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
																	<path d="M27.5 21.1538H27.5159" stroke="#F5F5F1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
																</svg>
																<div class="p-20 shadow-lg item-map-text bg-white mx-auto rounded-lg max-w-exs mt-20 hidden">
																	<h4 class="text-lg font-bold mb-10"><?php echo $row['title']; ?></h4>
																	<p><?php echo $row['texto']; ?></p>
																</div>
															</div>
															<?php
														endforeach;
													endif;
													?>

												</div>
												<video class="navigation-image w-full object-cover" muted autoplay loop>
													<source src="<?php echo $local['video']; ?>" type="video/mp4">
												</video>
											</div>
										<?php endforeach; ?>
									</div>
									<div class="py-15 flex items-center justify-center space-x-30 lg:hidden">
										<div class="prev-carousel carousel-<?php echo $index; ?> z-20 cursor-pointer">
											<svg class="h-48 w-auto transform rotate-180" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="93" height="93" rx="46.5" fill="white" />
												<path d="M48.3851 22.2393L69.9744 44.0737C71.459 45.5752 71.459 47.4251 69.9744 48.9266L48.3851 70.761" stroke="#2C2C2C" stroke-width="4.92496" />
												<line x1="71.0879" y1="46.6533" x2="21.2307" y2="46.6533" stroke="#2C2C2C" stroke-width="4.92496" />
											</svg>
										</div>
										<div class="next-carousel carousel-<?php echo $index; ?> z-20 cursor-pointer">
											<svg class="h-48 w-auto" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="93" height="93" rx="46.5" fill="white" />
												<path d="M48.3851 22.2393L69.9744 44.0737C71.459 45.5752 71.459 47.4251 69.9744 48.9266L48.3851 70.761" stroke="#2C2C2C" stroke-width="4.92496" />
												<line x1="71.0879" y1="46.6533" x2="21.2307" y2="46.6533" stroke="#2C2C2C" stroke-width="4.92496" />
											</svg>
										</div>
									</div>
								</div>
								<?php
							endif;
						endif;
					endwhile;
				endif;
				?>


				<?php if ( $double ) : ?>
					<div class="
					<?php
					echo 0 == $index ? 'footer-integral priodo-integral-footer' : 'footer-integral priodo-parcial-footer';
					?>
					 
				relative z-10 container mx-auto text-white flex flex-col lg:flex-row lg:items-center justify-between py-35 lg:rounded-b-lg px-35 lg:px-136 cursor-pointer" style="background-color: <?php echo $secondary['primary_color']; ?>;">
						<div class="relative z-10">
							<h4 class="text-2xl lg:text-3xl leading-none font-light mb-10"><?php echo $secondary['type']; ?></h4>
							<h2 class="text-4xl lg:text-5xl leading-none font-bold"><?php echo $secondary['name']; ?></h2>
							<div class="flex text-lg items-center my-30 lg:hidden">
								<svg class="mr-15" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.2538 21.5783C17.6633 21.5783 22.0485 17.1931 22.0485 11.7835C22.0485 6.37404 17.6633 1.98877 12.2538 1.98877C6.84425 1.98877 2.45898 6.37404 2.45898 11.7835C2.45898 17.1931 6.84425 21.5783 12.2538 21.5783Z" stroke="white" stroke-width="1.6791" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M12.2537 5.90662V11.7835L16.1716 13.7424" stroke="white" stroke-width="1.6791" stroke-linecap="round" stroke-linejoin="round" />
								</svg>

								<?php
								if ( $group['times'] ) :
									foreach ( $group['times'] as $row ) {
										echo '<span> ' . $row['time'] . '</span>';
									}
								endif;
								?>

							</div>
						</div>
						<div class="relative z-10">
							<button class="lg:hidden text-2xl underline leading-none flex items-center">
								Conheça
								<svg class="ml-20" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M29.2864 16.1781L16.7827 28.5414C15.9228 29.3916 14.8635 29.3916 14.0036 28.5414L1.49992 16.1781" stroke="white" stroke-width="3" />
									<line x1="15.3293" y1="29.1781" x2="15.3294" y2="0.626873" stroke="white" stroke-width="3" />
								</svg>
							</button>
							<button class="desktop text-3xl leading-none hidden lg:flex items-center focus:outline-none">
								Conheça também
								<svg class="ml-20" width="42" height="41" viewBox="0 0 42 41" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21.7462 1.46569L38.6845 18.5962C39.8493 19.7743 39.8493 21.2256 38.6845 22.4037L21.7462 39.5342" stroke="white" stroke-width="3" />
									<line x1="39.5581" y1="20.0316" x2="0.441845" y2="20.0316" stroke="white" stroke-width="3" />
								</svg>
							</button>
						</div>
					</div>
				<?php endif; ?>
			
			</div>
		</div>
		<?php
		$content = ob_get_clean();
		return $content;
	}

	if ( $double ) {
		echo get_the_cicles_content( $double, $group, $group_2, $list_type, $list_icon, 0 );
		echo get_the_cicles_content( $double, $group_2, $group, $list_type, $list_icon, 1 );
	} else {
		echo get_the_cicles_content( $double, $group_3, $group, $list_type, $list_icon, 2 );
	}
	
endif;
	
?>


