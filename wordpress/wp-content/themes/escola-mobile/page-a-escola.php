<?php

/**
 * The school page
 *
 * @author Nucleus
 * @since 1.0.0
 *
 * @package Nucleus
 */

namespace WL;

get_header();

?>

<style>
	.li-hover.active {
		background-color: #DDD1CB;
		color: #2C2C2C;
	}

	.owl-page .owl-nav .owl-prev {
		margin-right: calc(70px * <?php echo count( get_field( 'slider' ) ); ?>) !important;
	}

	@media (max-width: 764px) {
		.owl-page .owl-nav .owl-prev {
			margin-right: calc(55px * <?php echo count( get_field( 'slider' ) ); ?>) !important;
		}
	}
</style>

<div class="pt-20 pb-48">
	<div class="w-full flex flex-col lg:flex-row justify-center">
		<div class="order-2 lg:order-1 px-20 lg:px-0 w-full lg:w-1/2 flex items-center justify-end">
			<div class="max-w-xl">
				<h1 class="text-5xl leading-none mb-30 max-w-lg">Olá, somos a <strong>Escola Móbile</strong></h1>
				<p class="text-2xl leading-tight max-w-lg">Uma comunidade educacional flexível, que valoriza o conhecimento em todas as suas matizes e que está atenta às diferenças e ciente de sua função na construção de uma sociedade mais democrática, plural e empática.</p>
				<p class="mt-30">Valorizamos uma formação acadêmica consistente e o desenvolvimento de uma “biblioteca cultural” que permita aos estudantes ler criticamente o mundo, reconhecer seus direitos e deveres como cidadãos e sentir-se capazes de atuar na sociedade. Nossa estável e experiente equipe de educadores orienta e acompanha de perto o desenvolvimento social e acadêmico de nossos alunos e alunas, fortalecendo neles valores importantes que balizam suas relações interpessoais e seus projetos de vida.</p>
			</div>
		</div>
		<div class="order-1 lg:order-2 w-full lg:w-1/2 items-center justify-start ml-20 lg:-ml-80">
			<div class="max-w-3xl">
				<img loading="lazy" class="w-full h-auto" src="<?php echo get_template_directory_uri(); ?>/dist/images/the-school.png" alt="">
			</div>
		</div>
	</div>
</div>
<?php if ( have_rows( 'fator_social' ) ) : ?>
	<div class="w-full bg-white rounded-tr-200 py-80">
	<div style="max-width: 1080px; margin: 0 auto;">
		<h1 class="text-4xl font-bold lg:font-normal lg:text-5xl text-left lg:text-center leading-none mx-20 lg:mx-0">Educar é ensinar a mobilizar <br>saberes científicos e artísticos</h1>
	</div>
	<div class="max-w-4xl mx-auto px-20 lg:px-0 flex w-full items-start mt-48 lg:mt-64">
			<div class="w-full lg:w-1/2">
				<ul class="acordion-wrapper flex flex-col items-start">
					<?php
					$first = true;
					while ( have_rows( 'fator_social' ) ) :
						the_row();
						?>
						<li class="flex flex-col w-full lg:w-auto">
							<div class="w-full li-hover <?php echo $first ? 'active' : null; ?> flex justify-between items-center mb-15">
								<div class="flex items-center w-full">
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="CurrentColor" />
									</svg>
									<span class="mx-20 title-text"><?php the_sub_field( 'title' ); ?></span>
								</div>
								<svg class="lg:hidden arrow-item min-w-15" width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.8225 1.91592L7.9525 6.73126C7.61761 7.0624 7.205 7.0624 6.8701 6.73126L2.0001 1.91592" stroke="currentColor" stroke-width="3" />
								</svg>
							</div>
							<div class="drop-down-text-container hidden px-20 ml-5 mb-20">
								<p class="font-light">
									<?php the_sub_field( 'description' ); ?>
								</p>
							</div>
						</li>
						<?php
						$first = false;
					endwhile;
					?>
				</ul>
			</div>
			<div class="hidden lg:block lg:w-1/2 pl-15">
				<div class="drop-down-text-side"></div>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ( have_rows( 'slider' ) ) : ?>
	<div class="owl-page owl-carousel owl-theme min-h-screen">
		<?php
		while ( have_rows( 'slider' ) ) :
			the_row();
			?>
			<div class="w-full h-800 lg:h-auto min-h-screen flex items-center justify-center px-20" style="background-color: <?php the_sub_field( 'cor' ); ?> ;">
				<div class="text-center">
					<h2 class="text-2xl lg:text-4xl leading-none m-0 text-white mb-10"><?php the_sub_field( 'titulo' ); ?></h2>
					<h1 class="text-4xl lg:text-5xl leading-none m-0 font-bold text-yellow"><?php the_sub_field( 'sub-titulo' ); ?></h1>
					<p class="max-w-xl mx-auto mt-48 text-white"><?php the_sub_field( 'text' ); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>

<?php if ( have_rows( 'diretores_gerais' ) ) : ?>
	<div class="container mx-auto">
		<div class="w-full flex flex-col lg:flex-row items-center lg:space-x-64 py-80 px-20 lg:px-0">
			<div class="w-full w-1/2 mb-48 lg:mb-0">
				<h1 class="text-4xl lg:text-5xl text-left lg:text-right leading-none">Conheça nossos <strong>diretores-gerais</strong></h1>
			</div>
			<div class="w-full w-1/2">
				<p class="text-2xl leading-tight">A Móbile é construída por pessoas com diferentes trajetórias de vida, visões de mundo e experiências acadêmicas e que são responsáveis por um projeto pedagógico humano, empático e contemporâneo.</p>
			</div>
		</div>
		<div class="owl-directors owl-carousel owl-theme max-w-3xl mx-auto w-full mb-80 px-20 lg:px-0">
			<?php
			while ( have_rows( 'diretores_gerais' ) ) :
				the_row();
				?>
				<div class="bg-white w-full h-full p-30 rounded-base flex flex-col sm:flex-row items-center">
					<div class="w-full w-1/3">
						<img loading="lazy" class="w-full h-auto max-w-sm mx-auto" src="<?php the_sub_field( 'imagem' ); ?>">
					</div>
					<div class="w-full w-2/3 ml-30">
						<h2 class="text-2xl font-bold mt-15 sm:mt-0"><?php the_sub_field( 'nome' ); ?></h2>
						<p class="mt-10 text-md leading-none"><?php the_sub_field( 'sub-nome' ); ?></p>
						<p class="my-20 text-xs"><?php the_sub_field( 'texto' ); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php endif; ?>

<div class="container mx-auto flex flex-col lg:flex-row items-center pb-64">
	<div class="w-full lg:w-1/3 max-w-lg px-20 lg:px-0">
		<h1 class="text-4xl lg:text-5xl leading-none uppercase">uma <strong>história<br> maior</strong> que<br> um <strong>sonho</strong></h1>
		<div class="max-w-xs mx-auto px-30 mt-30 flex flex-col items-start">
			<p>Veja como aconteceu a nossa trajetória e quem são as pessoas que nos ajudaram a trilhar nosso caminho</p>
			<a href="/nossa-historia" class="mt-30 p-25 bg-dark h-80 duration-300 hover:bg-green-100 text-white rounded-full flex items-center">
				<span>Conheça</span>
				<svg class="ml-10" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M11.9272 1.14923L21.1382 10.4648C21.7716 11.1054 21.7716 11.8947 21.1382 12.5353L11.9272 21.8509" stroke="white" stroke-width="1.94078" />
					<line x1="21.6133" y1="11.2297" x2="0.341818" y2="11.2297" stroke="white" stroke-width="1.94078" />
				</svg>
			</a>
		</div>
		<img loading="lazy" class="h-auto w-300 mb-30 lg:mb-0 mt-20 lg:-mr-136 lg:-mt-136 lg:float-right relative z-10" src="<?php echo get_template_directory_uri(); ?>/dist/images/history.png">
	</div>
	<div class="w-full lg:w-2/3 relative overflow-x-visible hidden lg:block">
		<div class="h-full flex items-center py-80 rounded-bl-200 bg-tag-200" style="width: 2000px;">
			<div class="pl-200 flex items-center" style="max-height: 550px;">
				<div class="relative w-320">
					<div class="text-8xl leading-none mt-80 -ml-136 font-light absolute left-0 top-0 transform -rotate-90 text-pink-100 opacity-75">1973</div>
					<img loading="lazy" class="w-full h-auto" src="<?php echo get_template_directory_uri(); ?>/dist/images/history/1973.png" alt="">
					<p class="mt-30 text-lg font-semibold leading-tight">O início da história que começou na cabeça e no coração da educadora Maria Helena Bresser.</p>
				</div>

				<div class="relative w-320 ml-48 flex flex-col justify-between">
					<div>
						<h1 class="text-5xl text-pink-100 font-bold mb-10 leading-none">1975</h1>
						<p class="text-xl text-pink-100 mb-10">Nosso primeiro endereço...</p>
						<p class="text-sm mb-15"><strong>Rua Escobar Ortiz</strong>, inspirada na ideia de equilíbrio dinâmico presente nas esculturas cinéticas de Alexander Calder (EUA), a Móbile é fundada com duas turmas: Infantil 3 e 4.</p>
					</div>
					<img loading="lazy" class="w-full h-auto" src="<?php echo get_template_directory_uri(); ?>/dist/images/history/1975.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>


	<!-- Navigation -->
	<?php
	if ( have_rows( 'visits', 'option' ) ) :
		while ( have_rows( 'visits', 'option' ) ) :
			the_row();
			$locals = get_sub_field( 'locals' );
			?>
			<div class="the-school-navigation hidden fixed top-0 left-0 h-full w-full bg-black bg-opacity-75 z-50 flex items-center" data-navigation="<?php echo explode( ' + ', get_sub_field( 'category' ) )[0]; ?>" data-sub="<?php echo explode( ' + ', get_sub_field( 'category' ) )[1]; ?>">
				<div class="z-20">
					<button class="close-school-navigation absolute left-0 top-0 z-20 ml-20 lg:ml-96 mt-30 cursor-pointer bg-white rounded-full p-5 focus:ouline-none">
						<svg class="h-32 lg:h-64 w-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path class="h-80 w-auto" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</button>

					<div class="next-carousel carousel-0 absolute right-0 top-0 z-20 mr-96 mt-30 cursor-pointer hidden lg:block">
						<svg class="h-80 w-auto" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="93" height="93" rx="46.5" fill="white" />
							<path d="M48.3851 22.2393L69.9744 44.0737C71.459 45.5752 71.459 47.4251 69.9744 48.9266L48.3851 70.761" stroke="#2C2C2C" stroke-width="4.92496" />
							<line x1="71.0879" y1="46.6533" x2="21.2307" y2="46.6533" stroke="#2C2C2C" stroke-width="4.92496" />
						</svg>
					</div>
					<div class="prev-carousel carousel-0 absolute left-0 bottom-0 z-20 ml-96 mb-30 cursor-pointer hidden lg:block">
						<svg class="h-80 w-auto transform rotate-180" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="93" height="93" rx="46.5" fill="white" />
							<path d="M48.3851 22.2393L69.9744 44.0737C71.459 45.5752 71.459 47.4251 69.9744 48.9266L48.3851 70.761" stroke="#2C2C2C" stroke-width="4.92496" />
							<line x1="71.0879" y1="46.6533" x2="21.2307" y2="46.6533" stroke="#2C2C2C" stroke-width="4.92496" />
						</svg>
					</div>

					<div class="school-parts part-0 owl-carousel owl-theme">
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

					<div class="absolute bottom-0 left-0 right-0 mb-30 flex items-center justify-center space-x-30 lg:hidden">
						<div class="prev-carousel carousel-0 z-20 cursor-pointer">
							<svg class="h-48 w-auto transform rotate-180" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="93" height="93" rx="46.5" fill="white" />
								<path d="M48.3851 22.2393L69.9744 44.0737C71.459 45.5752 71.459 47.4251 69.9744 48.9266L48.3851 70.761" stroke="#2C2C2C" stroke-width="4.92496" />
								<line x1="71.0879" y1="46.6533" x2="21.2307" y2="46.6533" stroke="#2C2C2C" stroke-width="4.92496" />
							</svg>
						</div>
						<div class="next-carousel carousel-0 z-20 cursor-pointer">
							<svg class="h-48 w-auto" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="93" height="93" rx="46.5" fill="white" />
								<path d="M48.3851 22.2393L69.9744 44.0737C71.459 45.5752 71.459 47.4251 69.9744 48.9266L48.3851 70.761" stroke="#2C2C2C" stroke-width="4.92496" />
								<line x1="71.0879" y1="46.6533" x2="21.2307" y2="46.6533" stroke="#2C2C2C" stroke-width="4.92496" />
							</svg>
						</div>
					</div>

				</div>
			</div>
			<?php
		endwhile;
	endif;
	?>
	<!-- / Navigation -->



</div>

<div class="w-full bg-white pt-20 pb-64 mb-80 hidden">
	<div class="container mx-auto">
		<div class="flex justify-end items-center">
			<p class="mr-20">Gostaria de conhecer<br>
				nossa estrutura de perto?</p>
			<a href="/contato" class="p-25 bg-dark h-80 duration-300 hover:bg-green-100 text-white rounded-full flex items-center">
				<span>Agende uma visita</span>
			</a>
		</div>
	</div>
</div>

<?php

get_footer();
