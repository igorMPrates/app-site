<?php

/**
 * The contact page
 *
 * @author Nucleus
 * @since 1.0.0
 *
 * @package Nucleus
 */

namespace WL;

get_header();

?>

<?php the_content(); ?>

<style>
	.bgContainer {
		background: #DDD1CB;

		width: 100%;
	}
	.hoursContainer{
		max-width: 1280px;
		margin: 0 auto;

		padding: 24px 0px;
	}
	@media screen and (max-width: 568px) {
		.hoursContainer {
			padding: 24px 32px;
		}
	}
	.hoursContainer__flex {
		display: flex;
		justify-content: space-between;

		margin-top: 24px;
	}
	@media screen and (max-width: 568px) {
		.hoursContainer__flex {
			flex-direction: column;
		}

		.mt-12-mobile {
			margin-top: 12px;
		}
	}
	.StyFontH2 {
		font-size: 24px;
		font-weight: bold;
		font-family: "Rubik";
	}
</style>

<div class="bgContainer">
	<div class="hoursContainer">
		<div>
			<h4 class="StyFontH2">Horários:</h4>
		</div>
		<div class="hoursContainer__flex">
			<div>
				<h2 class="StyFontH2">Secretarias</h2>
				<p>Período Parcial: das 7h00 às 19h00</p>
				<p>Período Integral: das 7h00 às 18h00 (2ª a 5ª-feira) | das 7h00 às 17h00 (6ª-feira)</p>
			</div>
			<div class="mt-12-mobile">
				<h2 class="StyFontH2">Tesouraria</h2>
				<p>Rua Diogo Jácome, 818, das 8h00 às 16h30</p>
			</div>
		</div>
	</div>
</div>

<div class="bg-secondary-100 w-full pt-80 pb-350 -mb-200">
	<div class="max-w-4xl mx-auto">

		<div id="contact-form" class="w-full px-40 py-30 rounded-lg bg-white">
			<h1 class="text-4xl">Formulário de contato</h1>
			<p>Preencha o formulário abaixo e retornaremos em breve.</p>

			<?php echo do_shortcode( '[contact-form-7 id="291" class="contact-form" title="Contact"]' ); ?>
		</div>

	</div>
</div>

<?php

get_footer();
