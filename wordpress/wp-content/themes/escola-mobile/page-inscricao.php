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

<div id="inscricao" class="container mx-auto px-20 lg:px-0 py-20 lg:py-48">
	<div class="text-center max-w-4xl mx-auto">
		<h1 id="subscription-title" class="text-4x2 lg:text-5xl font-bold mb-20 leading-tight">Ficha de Inscrição</h1>
		<p class="disable-text lg:text-lg mb-20 font-semibold">Para participar do processo de ingresso, é indispensável preencher a ficha de inscrição e comparecer à reunião de apresentação do projeto pedagógico. </p>
		<p class="disable-text max-w-xl mx-auto">Caso você já tenha assistido a uma de nossas apresentações,
			é possível apenas preencher a ficha de inscrição a seguir:</p>
	</div>

	<div id="ingress-progress" class="flex items-start justify-between max-w-xl mx-auto my-48 relative">
		<div class="w-full absolute top-0 mt-32 px-48">
			<div class="w-full h-2 bg-dark"></div>
		</div>
		<div class="flex flex-col items-center w-96">
			<div id="ingress-item-1" class="ingress-item active h-60 lg:h-80 w-60 lg:w-80"><span class="number">1</span></div>
			<span class="step-description text-2xl text-center leading-none w-full lg:w-auto absolute lg:relative left-0 top-0 mt-80 lg:mt-15">Dados do <br class="hidden lg:block">estudante</span>
		</div>
		<div class="flex flex-col items-center w-96">
			<div id="ingress-item-2" class="ingress-item h-60 lg:h-80 w-60 lg:w-80"><span class="number">2</span></div>
			<span class="step-description text-2xl text-center leading-none hidden w-full lg:w-auto absolute lg:relative left-0 top-0 mt-80 lg:mt-15">Dados do <br class="hidden lg:block">responsável</span>
		</div>
		<div class="flex flex-col items-center w-96">
			<div id="ingress-item-3" class="ingress-item h-60 lg:h-80 w-60 lg:w-80"><span class="number">3</span></div>
			<span class="step-description text-2xl text-center leading-none hidden w-full lg:w-auto absolute lg:relative left-0 top-0 mt-80 lg:mt-15">Reunião de <br class="hidden lg:block">Apresentação</span>
		</div>
	</div>

	<form class="max-w-5xl mx-auto mt-80 lg:mt-0" action="">
		<?php
		get_template_part( 'template-parts/ingresso/step-1' );
		get_template_part( 'template-parts/ingresso/step-2' );
		get_template_part( 'template-parts/ingresso/step-3' );
		get_template_part( 'template-parts/ingresso/step-4' );
		?>
	</form>

	<div class="max-w-5xl mx-auto px-20">
		<div class="flex items-center justify-start mt-30">
			<button id="prev-button" class="flex items-center focus:outline-none hidden mr-30">
				<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M7.48624 0.999998L0.36717 8.19988C-0.122388 8.695 -0.122387 9.305 0.36717 9.80012L7.48624 17" stroke="#2C2C2C" stroke-width="1.5" />
					<line y1="-0.75" x2="16.4404" y2="-0.75" transform="matrix(1 -2.62268e-07 -2.62268e-07 -1 0 8.04102)" stroke="#2C2C2C" stroke-width="1.5" />
				</svg>
				<div class="ml-15">Voltar</div>
			</button>
			<button id="next-button" type="submit" class="p-25 bg-dark h-80 duration-300 hover:bg-green-100 text-white rounded-full flex items-center">
				<span class="next-button-text">Continuar</span>
				<svg class="ml-10" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M11.9272 1.14923L21.1382 10.4648C21.7716 11.1054 21.7716 11.8947 21.1382 12.5353L11.9272 21.8509" stroke="white" stroke-width="1.94078" />
					<line x1="21.6133" y1="11.2297" x2="0.341818" y2="11.2297" stroke="white" stroke-width="1.94078" />
				</svg>
			</button>
		</div>
	</div>
</div>

<div class="bottom-content hidden">
	<?php get_template_part( 'template-parts/content/acontece-mobile' ); ?>
</div>


<?php

get_footer();
