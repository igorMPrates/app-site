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

$response = wp_remote_post(
	$baseUrl . '/formulario/site/vagas/lista',
	array(
		'method'  => 'POST',
		'headers' => array(
			'consumer_key'    => '5488558',
			'consumer_secret' => 'jsjv9n**9899!lklsks)',
		),
	)
);
$vagas    = json_decode( wp_remote_retrieve_body( $response ) );

$list = array();
if ( ! empty( $_GET['f'] ) ) {
	foreach ( $vagas->vagas as $vaga ) {
		$search_param = strtolower( $_GET['f'] );
		$descricao    = strtolower( $vaga->descricao_sem_formato );
		$nomearea     = strtolower( $vaga->nomearea );
		$nomecargo    = strtolower( $vaga->nomecargo );

		if ( strpos( $descricao, $search_param ) !== false || strpos( $nomearea, $search_param ) !== false || strpos( $nomecargo, $search_param ) !== false ) {
			$list[] = $vaga;
		}
	}
}
$list = empty( $list ) ? $vagas->vagas : $list;

$response = wp_remote_post(
	$baseUrl . '/formulario/site/vagas/areas',
	array(
		'method'  => 'POST',
		'headers' => array(
			'consumer_key'    => '5488558',
			'consumer_secret' => 'jsjv9n**9899!lklsks)',
		),
	)
);
$areas    = json_decode( wp_remote_retrieve_body( $response ) );

get_header();

?>

<div class="max-w-4xl mx-auto">
	<div class="text-center mb-64">
		<h1 class="text-3xl lg:text-5xl font-bold mb-20 leading-tight">Faça parte da nossa equipe</h1>
		<p class="font-semibold">Estamos buscando profissionais de excelência para integrar nossa equipe de educadores.<br>Descubra nossas vagas:</p>
	</div>

	<div class="px-20">
		<form method="GET" class="bg-white rounded-full px-20 py-15 mb-48 flex items-center">
			<input name="f" class="w-full focus:outline-none text-sm lg:text-xl" placeholder="Digite a vaga que procura" type="text">
			<button type="submit" class="focus:outline-none flex items-center">
				<span>Buscar</span>
				<svg class="ml-10" width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9.51376 0.999998L16.6328 8.19988C17.1224 8.695 17.1224 9.305 16.6328 9.80012L9.51376 17" stroke="#2C2C2C" stroke-width="1.5" />
					<line x1="17" y1="8.79102" x2="0.559633" y2="8.79101" stroke="#2C2C2C" stroke-width="1.5" />
				</svg>
			</button>
		</form>
	</div>

	<div class="container mx-auto px-20 lg:px-0 mb-80">
		<div class="hidden md:block">
			<table class="bg-white w-full text-center rounded-lg">
				<tr class="border-b border-gray-400">
					<th class="w-1/4 p-10 text-xl font-normal">Ciclo</th>
					<th class="w-1/4 p-10 text-xl font-normal">Cargo</th>
					<th class="w-1/4 p-10 text-xl font-normal">Título</th>
					<th class="w-1/4 p-10 text-xl font-normal"></th>
				</tr>

				<?php
				$index = 0;
				foreach ( $list as $vaga ) :
					$index++;
					?>
					<tr class="hidden border-b border-gray-400 works-items list-works-<?php echo $index; ?>">
						<td class="px-10 py-30 text-sm font-light leading-none font-semibold"><?php echo $vaga->nomearea; ?></td>
						<td class="px-10 py-30 text-md font-light leading-none"><?php echo $vaga->nomecargo; ?></td>
						<td class="px-10 py-30 text-sm font-light leading-none"><?php echo $vaga->descricao_sem_formato; ?></td>
						<td class="px-10 py-30 text-ms font-light leading-none">
							<a class="flex items-center font-normal hover:underline" href="/vaga/?id=<?php echo $vaga->id_vaga; ?>">Saiba mais
								<svg class="ml-10" width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.23642 0.999998L16.3555 8.19988C16.845 8.695 16.845 9.305 16.3555 9.80012L9.23642 17" stroke="#2C2C2C" stroke-width="1.5" />
									<line x1="16.7227" y1="8.79102" x2="0.282289" y2="8.79101" stroke="#2C2C2C" stroke-width="1.5" />
								</svg>
							</a>
						</td>
					</tr>
					<?php
				endforeach;
				?>

			</table>
		</div>
		<div class="md:hidden">
			<div class="bg-white text-center rounded-lg">
				<?php
				$index = 0;
				foreach ( $list as $vaga ) :
					$index++;
					?>
					<div class="hidden list-works-<?php echo $index; ?>">
						<div class="py-10 border-b border-gray-400 text-lg"><?php echo $vaga->nomearea; ?></div>
						<div class="px-10 py-15 text-md text-gray-600 border-b border-gray-400 font-light leading-none"><?php echo $vaga->nomecargo; ?></div>
						<div class="px-10 py-15 text-md text-gray-600 border-b border-gray-400 font-light leading-none"><?php echo $vaga->descricao_sem_formato; ?></div>
						<div class="px-10 py-15 text-md text-gray-600 border-b border-gray-400 font-light leading-none flex justify-center">
							<a class="flex items-center font-normal hover:underline" href="/vaga/?id=<?php echo $vaga->id_vaga; ?>">Saiba mais
								<svg class="ml-10" width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.23642 0.999998L16.3555 8.19988C16.845 8.695 16.845 9.305 16.3555 9.80012L9.23642 17" stroke="currentColor" stroke-width="1.5" />
									<line x1="16.7227" y1="8.79102" x2="0.282289" y2="8.79101" stroke="currentColor" stroke-width="1.5" />
								</svg>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<button class="load-more-works p-25 bg-dark h-80 duration-300 hover:bg-green-100 text-white rounded-full flex items-center mx-auto mt-30">
			<span>Ver Mais</span>
			<svg class="ml-10 transform rotate-90" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M11.9272 1.14923L21.1382 10.4648C21.7716 11.1054 21.7716 11.8947 21.1382 12.5353L11.9272 21.8509" stroke="white" stroke-width="1.94078" />
				<line x1="21.6133" y1="11.2297" x2="0.341818" y2="11.2297" stroke="white" stroke-width="1.94078" />
			</svg>
		</button>
	</div>
</div>

<div id="trabalhe-conosco" class="bg-tag-200 w-full pt-80 pb-350 -mb-200 px-20 lg:px-0">
	<div class="max-w-4xl mx-auto">
		<div id="contact-form" class="w-full px-15 lg:px-40 py-30 rounded-lg bg-white">
			<h1 class="text-4xl">Não encontrou a vaga desejada?</h1>
			<p>Preencha o formulário abaixo e nos envie seu currículo:</p>

			<div class="flex flex-wrap mt-30">
				<div class="form-item">
					<label>Nome
						<input class="form-control" type="text" name="nome" placeholder="Nome Completo" id="trabalhe-conosco__nome">
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
					<label>
						Área desejada
						<select id="trabalhe-conosco__selectArea" class="form-control" name="select">
							<option value="" selected disabled>Selecione</option>
							<?php foreach ( $areas->areas as $area ) : ?>
								<option value="<?php echo $area->id_area; ?>"><?php echo $area->nome; ?></option>
							<?php endforeach; ?>
						</select>
					</label>
				</div>
				<div class="form-item">
					<label>
						Cargo desejado
						<select id="trabalhe-conosco__selectCargo" class="form-control" name="select" id="trabalhe-conosco__cargoDesejado">
							<option value="" selected disabled>Selecione</option>
						</select>
					</label>
				</div>
				<div class="form-item">
					<label>Telefone
						<input class="form-control phone" type="tel" name="nome" placeholder="(00) 0000-0000" id="trabalhe-conosco__telefone">
					</label>
				</div>
				<div class="form-item">
					<label>E-mail
						<input class="form-control" type="text" name="nome" placeholder="seunome@email.com" id="trabalhe-conosco__email">
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
