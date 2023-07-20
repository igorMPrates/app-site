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


<!-- 
<div class="popup-main">
	<div class="popup-item">
		<button id="popupCloseBtn" class="my-16 absolute z-50 close-video border-none outline-none focus:outline-none duration-300">
			<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="w-auto" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.5">
				<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
			</svg>
		</button>
		<div class="popup-item_blue">
			<h6>Estude na Móbile</h6>
			<h2>Quer conhecer a escola e <b>nosso projeto pedagógico?</b></h2>
			<div class="info-date">
				<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 55 55" fill="none">
					<path d="M42.9381 9.36768L11.2991 9.36768C8.8029 9.36768 6.7793 11.3913 6.7793 13.8875L6.7793 45.5265C6.7793 48.0227 8.8029 50.0463 11.2991 50.0463L42.9381 50.0463C45.4343 50.0463 47.4579 48.0227 47.4579 45.5265L47.4579 13.8875C47.4579 11.3913 45.4343 9.36768 42.9381 9.36768Z" stroke="#2C2C2C" stroke-width="3.53727" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M36.1582 4.84802L36.1582 13.8877" stroke="#2C2C2C" stroke-width="3.53727" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M18.0801 4.84802L18.0801 13.8877" stroke="#2C2C2C" stroke-width="3.53727" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M6.7793 22.9272L47.4579 22.9272" stroke="#2C2C2C" stroke-width="3.53727" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
				<p>10 de Agosto a 5 de Outubro </p>
			</div> -->
			<!-- <div class="mt-24p flex justify-start">
				<a href="/estude-na-mobile" class="p-25 bg-dark h-40 duration-300 hover:bg-green-100 text-white rounded-full flex items-center">Saiba mais sobre o processo de admissão 2023.</a>
			</div>
		</div>
	</div>
</div> -->


<div class="bg-background h-screen w-full max-h-screen overflow-hidden flex flex-col items-start pt-136 -mt-136">
	<h1 class="text-4xl leading-tight mx-20 lg:mx-0 lg:ml-60 mt-10 mb-20">Uma escola que educa <span class="text-primary-100">pessoas</span> para transformar o mundo <br>em um lugar melhor, <span class="text-primary-100">possível para todos.</span></h1>
	<div class="w-full h-full px-20">
		<div class="relative w-full h-full rounded-bl-200 lg:rounded-bl-300 bg-cover bg-center overflow-hidden">

			<video class="w-full h-full absolute top-0 left-0 navigation-image w-full object-cover hidden md:block" controls="false" autoplay="autoplay" loop="true" muted defaultmuted playsinline>
				<source src="<?php echo the_field( 'video_desktop' ); ?>" type="video/mp4">
			</video>

			<video class="w-full h-full absolute top-0 left-0 navigation-image w-full object-cover md:hidden" controls="false" autoplay="autoplay" loop="true" muted defaultmuted playsinline>
				<source src="<?php echo the_field( 'video_mobile' ); ?>" type="video/mp4">
			</video>

		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/content/ciclos' ); ?>

<div id="projetos" class="relative">
	<div class="absolute right-0 top-0 w-full h-full bg-secondary-100 md:mr-136 rounded-tr-100 lg:rounded-tr-200"></div>
	<div class="lg:ml-64 flex flex-col lg:flex-row items-start justify-start relative z-10 py-64 mx-20">
		<h1 class="text-4x3 lg:text-6xl leading-none text-white -mt-15 mr-80 mb-30 lg:mb-0 fade-left duration-700 pr-48">Projetos</h1>
		<p class="max-w-xs lg:max-w-md text-sm lg:text-xl leading-tight font-light text-white font-sans fade-left duration-700">Nosso objetivo é proporcionar vivências inovadoras e imaginativas, com foco na boa convivência, percepção artístico-cultural e competências acadêmicas individuais.</p>
	</div>
	<div class="container mx-auto">
		<div class="carousel-one-column owl-carousel owl-theme">
			<?php
			$projects = new WP_Query(
				array(
					'post_type'      => 'post',
					'category_name'  => 'home',
					'posts_per_page' => -1,
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
							<div class="cardProjetos text-area bg-white p-20">
								<h2 class="font-bold fontCard leading-none mb-10"><?php echo the_title(); ?></h2>
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
	<div class="absolute w-full h-200 bg-primary-100 left-0 bottom-0"></div>
</div>

<div class="w-full section bg-primary-100 periodo pt-10 pb-48">
	<div class="mx-auto flex flex-col lg:flex-row items-center justify-center">
		<div class="w-full max-w-3xl duration-700 ">
			<img loading="lazy" class="w-full h-auto" src="<?php echo get_template_directory_uri(); ?>/dist/images/parcial-integral.png">
		</div>
		<div class="w-full px-20 max-w-2xl text-white max-w-lg flex duration-1000">
			<div class="max-w-lg">
				<h1 class="text-5xl lg:text-6xl leading-none">Períodos Parcial e Integral</h1>
				<h2 class="text-4xl leading-none my-30"><b>Um ensino em harmonia com seu tempo.</b></h2>
				<p class="text-xl leading-tight font-light font-sans">Ambos os modelos estimulam nossos alunos e alunas - cada uma à sua maneira - a desenvolver habilidades acadêmicas, capacidades criativas e competências socioemocionais, favorecendo o trabalho colaborativo e as descobertas individuais.</p>
			</div>
		</div>
	</div>
</div>


<div style="background: #fff !important; max-width: 1440px !important; margin: 0 auto;" class="">
	<?php if ( have_rows( 'caminhos_de_sucesso' ) ) : ?>
		<div class="w-full section caminhos-de-sucesso">
			<div class="container mx-auto pt-64 px-20 mb-48">
				<div class="relative flex items-center justify-center mb-20 lg:-mb-300 z-10">
					<div class="w-0 lg:w-1/2"></div>
					<div class="w-full lg:w-1/2 duration-700 fade-right">
						<h1 class="text-5xl lg:text-6xl leading-none mb-20">Caminhos<br> para o futuro</h1>
						<p class="text-xl leading-tight font-light font-sans">Aqui na Móbile, desenvolvemos um conjunto de ações estruturadas que dão autonomia e permitem aos estudantes o planejamento de seus projetos de vida. Além disso, nós nos orgulhamos de estar entre as instituições brasileiras com maior índice de aprovação nas universidades mais prestigiadas. Confira algumas histórias contadas por nossos ex-alunos e alunas.</p>
					</div>
				</div>
				<div class="owl-tree owl-carousel owl-theme duration-700 fade-left">

					<?php
					while ( have_rows( 'caminhos_de_sucesso' ) ) :
						the_row();
						?>
						<div class="flex flex-col md:flex-row pt-20">
							<div class="w-full lg:w-1/2">
								<img loading="lazy" class="w-full h-auto px-20 sm:px-80" src="<?php the_sub_field( 'imagem' ); ?>">
							</div>
							<div class="w-full lg:w-1/2 flex items-center lg:mt-300">
								<div class="max-w-lg">
									<div class="mt-35">
										<svg width="65" height="48" viewBox="0 0 65 48" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M49.8704 46C44.6403 46 40.8512 44.1535 38.503 40.4604C37.4356 38.8777 36.5817 36.9257 35.9413 34.6043C35.3009 32.283 34.9806 29.8561 34.9806 27.3237C34.9806 21.8369 36.3682 16.8777 39.1434 12.446C42.0253 8.01439 46.2414 4.53238 51.7917 2L53.2326 4.84892C50.1373 6.11511 47.4155 8.06715 45.0673 10.705C42.8258 13.3429 41.4916 16.0336 41.0646 18.777C40.7444 20.0432 40.5843 21.2566 40.5843 22.4173C40.5843 23.4724 40.7444 24.4748 41.0646 25.4245C43.4128 22.8921 46.5082 21.6259 50.3507 21.6259C54.0865 21.6259 57.1285 22.7338 59.4767 24.9496C61.8249 27.06 62.999 30.0144 62.999 33.813C62.999 37.4005 61.7715 40.3549 59.3166 42.6763C56.8617 44.8921 53.7129 46 49.8704 46ZM16.8888 46C11.6587 46 7.86954 44.1535 5.52133 40.4604C4.45397 38.8777 3.60007 36.9257 2.95965 34.6043C2.31923 32.283 1.99902 29.8561 1.99902 27.3237C1.99902 21.8369 3.3866 16.8777 6.16175 12.446C9.04364 8.01439 13.2597 4.53238 18.81 2L20.251 4.84892C17.1556 6.11511 14.4338 8.06715 12.0856 10.705C9.84417 13.3429 8.50996 16.0336 8.08301 18.777C7.7628 20.0432 7.6027 21.2566 7.6027 22.4173C7.6027 23.4724 7.7628 24.4748 8.08301 25.4245C10.4312 22.8921 13.5266 21.6259 17.3691 21.6259C21.1049 21.6259 24.1469 22.7338 26.4951 24.9496C28.8433 27.06 30.0174 30.0144 30.0174 33.813C30.0174 37.4005 28.7899 40.3549 26.335 42.6763C23.88 44.8921 20.7313 46 16.8888 46Z" fill="#FFD200" stroke="#FFD200" stroke-width="3" />
										</svg>
										<div class="m-20">
											<cite class="font-sans"><?php the_sub_field( 'comentario' ); ?></cite>
										</div>
										<div class="flex items-center">
											<div class="w-96 h-2 bg-dark mr-20 hidden md:block"></div>
											<p class="leading-tight mb-30 m-20 md:m-0"><?php the_sub_field( 'nome_e_curriculo' ); ?></p>
										</div>
										<a class="hidden lg:block" target="_blank" href="https://youtube.com/playlist?list=PLQKDsuneBerviJi0jakiDNjeAWmHSx7EP">
											<div class="flex items-center mt-30">
												<p class="leading-tight hover:underline">Conheça mais histórias de sucesso<br> em nosso <strong>canal no Youtube</strong></p>
												<svg class="ml-15 h-20 w-auto" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.95316 0.999998L16.0722 8.19988C16.5618 8.695 16.5618 9.305 16.0722 9.80012L8.95315 17" stroke="#2C2C2C" stroke-width="1.5" />
													<line x1="16.4394" y1="8.79102" x2="-0.000974852" y2="8.79101" stroke="#2C2C2C" stroke-width="1.5" />
												</svg>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>

				</div>
				<a class="lg:hidden" target="_blank" href="https://www.youtube.com/channel/UCkuHlOmpey9772Ma50EIaNQ">
					<div class="flex items-center mt-30">
						<p class="leading-tight hover:underline">Conheça mais histórias de sucesso<br> em nosso </p>
						<svg class="ml-15 h-20 w-auto" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.95316 0.999998L16.0722 8.19988C16.5618 8.695 16.5618 9.305 16.0722 9.80012L8.95315 17" stroke="#2C2C2C" stroke-width="1.5" />
							<line x1="16.4394" y1="8.79102" x2="-0.000974852" y2="8.79101" stroke="#2C2C2C" stroke-width="1.5" />
						</svg>
					</div>
				</a>
			</div>
		</div>
	<?php endif; ?>


	<div class="lg:text-center max-w-6xl mx-auto pb-48">
			<?php
			if ( have_rows( 'links' ) ) :
				?>
				<div style="max-width: 1220px !important; margin: 0 auto; background: #514F5433; color: #514F5433; height: 1px;"></div>

				<div class="max-w-4xl mx-auto px-20 lg:px-0 flex w-full items-start mt-48 lg:mt-64">
					<div class="w-full lg:w-1/2">
						<ul class="acordion-wrapper flex flex-col items-start">
							<?php
							$active = true;
							while ( have_rows( 'links' ) ) :
								the_row();
								?>
								<li class="flex flex-col w-full lg:w-auto">
									<div class="w-full hover-text li-hover <?php echo $active ? 'active' : null; ?> flex justify-between items-center mb-15">
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

<div id="estudos-internacionais" class="w-full section bg-background estudos-internacionais mb-80">
	<div class="container mx-auto pt-64 px-20 mb-48 flex flex-col lg:flex-row items-center justify-center">
		<div class="w-full lg:w-1/2 lg:pl-60 order-2 lg:order-1">
			<div class="max-w-md mx-auto">
				<h1 class="text-4x3 lg:text-6xl leading-none mb-30">Estudos Internacionais</h1>
				<p class="text-2xl leading-tight font-light mb-60 font-sans">Oferecemos orientação qualificada para os alunos e alunas que desejam seguir seus estudos mundo afora. Proporcionamos oficinas, preparação e simulação para exames acadêmicos, emissão de documentos específicos, cartas de recomendação, intercâmbios e outras ferramentas que contribuem para que os(as) estudantes se capacitem para viver e estudar fora do país, se esse for seu projeto de vida. </p>
				<div class="flex justify-start">
					<a href="/estudos-internacionais" class="p-25 bg-dark h-80 duration-300 hover:bg-green-100 text-white rounded-full flex items-center">Quero saber mais</a>
				</div>
			</div>
		</div>
		<div class="w-full lg:w-1/2 order-1 lg:order-2 mb-60 lg:mb-0">
			<img loading="lazy" class="max-w-md lg:max-w-full mx-auto w-full h-auto px-0 lg:px-64" src="<?php echo get_template_directory_uri(); ?>/dist/images/international.png">
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/content/acontece-mobile' ); ?>

<?php
get_footer();
