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

$baseUrl = 'https://webservice.escolamobile.com.br';

if ( empty( $_GET['id'] ) ) {
	wp_redirect( get_home_url() . '/trabalhe-conosco' );
}

$response = wp_remote_post(
	$baseUrl . '/formulario/site/vaga/' . $_GET['id'],
	array(
		'method'  => 'POST',
		'headers' => array(
			'consumer_key'    => '5488558',
			'consumer_secret' => 'jsjv9n**9899!lklsks)',
		),
	)
);
$vaga     = json_decode( wp_remote_retrieve_body( $response ) );

get_header();

?>

<style>
	.li-hover.active {
		background-color: #fff;
		color: #2C2C2C;
	}
</style>

<div class="max-w-4xl mx-auto">
	<div class="text-center mb-64 px-20 lg:px-0">
		<h1 class="text-3xl lg:text-5xl font-bold mb-20">Faça parte da nossa equipe</h1>
		<p class="text-2xl lg:text-3xl font-semibold"><?php echo $vaga->vaga->descricao; ?></p>
	</div>
</div>

<div class="w-full bg-tag-200 rounded-tr-100 lg:rounded-tr-200 py-80">
	<h1 class="text-4xl font-bold lg:font-normal lg:text-5xl text-left lg:text-center leading-none mx-20 lg:mx-0">Conheça a vaga</h1>
	<div class="max-w-4xl mx-auto px-20 lg:px-0 flex w-full items-start mt-48 lg:mt-64">
		<div class="w-full lg:w-1/2">
			<ul class="acordion-wrapper flex flex-col items-start">

				<li class="flex flex-col w-full lg:w-auto">
					<div class="w-full li-hover active flex justify-between items-center mb-15">
						<div class="flex items-center w-full">
							<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="CurrentColor" />
							</svg>
							<span class="mx-20 title-text">Descrição</span>
						</div>
						<svg class="lg:hidden arrow-item min-w-15" width="15" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.8225 1.91592L7.9525 6.73126C7.61761 7.0624 7.205 7.0624 6.8701 6.73126L2.0001 1.91592" stroke="currentColor" stroke-width="3" />
						</svg>
					</div>
					<div class="drop-down-text-container hidden px-20 ml-5 mb-20">
						<p class="font-light"><?php echo $vaga->vaga->resumo_atividade; ?></p>
					</div>
				</li>

				<li class="flex flex-col w-full lg:w-auto">
					<div class="w-full li-hover flex justify-between items-center mb-15">
						<div class="flex items-center w-full">
							<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="CurrentColor" />
							</svg>
							<span class="mx-20 title-text">Pré Requisitos</span>
						</div>
						<svg class="lg:hidden arrow-item min-w-15" width="15" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.8225 1.91592L7.9525 6.73126C7.61761 7.0624 7.205 7.0624 6.8701 6.73126L2.0001 1.91592" stroke="currentColor" stroke-width="3" />
						</svg>
					</div>
					<div class="drop-down-text-container hidden px-20 ml-5 mb-20">
						<p class="font-light"><?php echo $vaga->vaga->pre_requisitos; ?></p>
					</div>
				</li>

				<li class="flex flex-col w-full lg:w-auto">
					<div class="w-full li-hover flex justify-between items-center mb-15">
						<div class="flex items-center w-full">
							<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="CurrentColor" />
							</svg>
							<span class="mx-20 title-text">Perfil Desejado</span>
						</div>
						<svg class="lg:hidden arrow-item min-w-15" width="15" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.8225 1.91592L7.9525 6.73126C7.61761 7.0624 7.205 7.0624 6.8701 6.73126L2.0001 1.91592" stroke="currentColor" stroke-width="3" />
						</svg>
					</div>
					<div class="drop-down-text-container hidden px-20 ml-5 mb-20">
						<p class="font-light"><?php echo $vaga->vaga->perfil_desejado; ?></p>
					</div>
				</li>

				<li class="flex flex-col w-full lg:w-auto">
					<div class="w-full li-hover flex justify-between items-center mb-15">
						<div class="flex items-center w-full">
							<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="CurrentColor" />
							</svg>
							<span class="mx-20 title-text">Carga Horária</span>
						</div>
						<svg class="lg:hidden arrow-item min-w-15" width="15" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.8225 1.91592L7.9525 6.73126C7.61761 7.0624 7.205 7.0624 6.8701 6.73126L2.0001 1.91592" stroke="currentColor" stroke-width="3" />
						</svg>
					</div>
					<div class="drop-down-text-container hidden px-20 ml-5 mb-20">
						<p class="font-light"><?php echo $vaga->vaga->carga_horaria; ?></p>
					</div>
				</li>

			</ul>
		</div>
		<div class="hidden lg:block lg:w-1/2 pl-15">
			<div class="drop-down-text-side"></div>
		</div>
	</div>
</div>

<div id="trabalhe-conosco" class="bg-tag-200 w-full pt-80 pb-350 -mb-200">
	<div class="max-w-4xl mx-auto px-20 lg:px-0">

		<div class="w-full px-15 lg:px-40 py-30 rounded-lg bg-white">
			<h1 class="text-4xl">Formulário de Candidatura</h1>
			<p><?php echo $vaga->vaga->descricao; ?></p>
			<div class="flex flex-wrap mt-30">
				<div class="form-item">
					<label>Nome
						<input id="trabalhe-conosco__nome" class="form-control" type="text" name="nome" placeholder="Nome Completo">
					</label>
				</div>
				<div class="form-item">
					<label>Cpf
						<input id="trabalhe-conosco__cpf" class="form-control" type="text" name="cpf" placeholder="000.000.000-00">
					</label>
				</div>
				<div class="form-item">
					<label>Data de nascimento
						<input id="trabalhe-conosco__dataNascimento" class="form-control date" type="text" name="nome" placeholder="00/00/0000">
					</label>
				</div>
				<div class="form-item">
					<label>Telefone
						<input id="trabalhe-conosco__telefone" class="form-control phone" type="tel" name="nome" placeholder="(00) 0000-0000">
					</label>
				</div>
				<div class="form-item">
					<label>E-mail
						<input id="trabalhe-conosco__email" class="form-control" type="text" name="nome" placeholder="seunome@email.com">
					</label>
				</div>
				<div class="form-item col-span-12 lg:col-span-4">
					<label for="file">Arquivo</label>
					<div class="file-input">
						<div class="form-control w-full h-full">
							<label class="w-full h-full flex items-center justify-between overflow-hidden" for="file">
								<span class="item-text text-gray-500">Selecionar arquivo</span>
								<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.53698 6.3745C5.3656 6.20269 5.26935 5.96992 5.26935 5.72725C5.26935 5.48458 5.3656 5.25181 5.53698 5.08001L10.3484 0.268635C10.5221 0.0965423 10.7568 0 11.0013 0C11.2459 0 11.4805 0.0965423 11.6543 0.268635L16.4657 5.08001C16.6371 5.25181 16.7333 5.48458 16.7333 5.72725C16.7333 5.96992 16.6371 6.20269 16.4657 6.3745C16.3804 6.46109 16.2788 6.52985 16.1667 6.57679C16.0545 6.62373 15.9342 6.6479 15.8127 6.6479C15.6912 6.6479 15.5709 6.62373 15.4588 6.57679C15.3467 6.52985 15.245 6.46109 15.1597 6.3745L11.9178 3.13255V13.7519C11.9178 13.995 11.8212 14.2281 11.6494 14.4C11.4775 14.5718 11.2444 14.6684 11.0013 14.6684C10.7583 14.6684 10.5252 14.5718 10.3533 14.4C10.1814 14.2281 10.0849 13.995 10.0849 13.7519V3.13255L6.84293 6.3745C6.75765 6.46109 6.65601 6.52985 6.54391 6.57679C6.4318 6.62373 6.31149 6.6479 6.18996 6.6479C6.06843 6.6479 5.94811 6.62373 5.83601 6.57679C5.72391 6.52985 5.62226 6.46109 5.53698 6.3745ZM21.0823 12.8355C20.8392 12.8355 20.6061 12.932 20.4343 13.1039C20.2624 13.2758 20.1658 13.5089 20.1658 13.7519V20.1671H1.83681V13.7519C1.83681 13.5089 1.74026 13.2758 1.56839 13.1039C1.39652 12.932 1.16342 12.8355 0.920358 12.8355C0.6773 12.8355 0.444197 12.932 0.272329 13.1039C0.100461 13.2758 0.00390625 13.5089 0.00390625 13.7519V20.1671C0.00390625 20.6532 0.197015 21.1194 0.540751 21.4632C0.884487 21.8069 1.35069 22 1.83681 22H20.1658C20.652 22 21.1182 21.8069 21.4619 21.4632C21.8056 21.1194 21.9988 20.6532 21.9988 20.1671V13.7519C21.9988 13.5089 21.9022 13.2758 21.7303 13.1039C21.5585 12.932 21.3254 12.8355 21.0823 12.8355Z" fill="black" />
								</svg>
							</label>
						</div>
						<input type="file" id="file" class="file form-control" accept="application/pdf">
						<small>Formatos: pdf</small>
					</div>
				</div>
				<div class="flex justify-end ali-cen w-full mt-30">
					<div id="trabalhe-conosco__feedback" class="ingresso-step w-full hidden">
						<p class="text-lg lg:text-2xl green">Seu currículo foi <strong>cadastrado.</strong></p>
						<p>Obrigada pelo seu interesse em trabalhar conosco!</p>
					</div>
					<button id="trabalhe-conosco__botaoEnviar" class="submit-button">
						<div>Enviar</div>
					</button>
				</div>
			</div>
		</div>

	</div>
</div>

<?php

get_footer();
