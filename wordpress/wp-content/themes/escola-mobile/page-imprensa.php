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

<div class="bg-basebg w-full pt-200 pb-350 -mb-200">
	<div class="max-w-4xl mx-auto">
		<div class="text-center mb-80">
			<h1 class="text-4xl">Trabalha na <strong class="text-green-100">imprensa</strong> e quer entrar em <strong>contato</strong>?</h1>
			<p class="text-xl font-light mt-30">Ligue para <strong class="font-bold underline">+55 (11) 5536-4402</strong>  ou preencha o formulário:</p>
		</div>
		<div class="w-full px-40 py-30 rounded-lg bg-white">
			<h2 class="text-4xl">Envie sua solicitação</h2>
			<p>Preencha o formulário abaixo e retornaremos em breve.</p>

			<?php echo do_shortcode( '[contact-form-7 id="291" class="contact-form" title="Contact"]' ); ?>
		</div>
	</div>
</div>

<?php

get_footer();
