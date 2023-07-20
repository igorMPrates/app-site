<?php

$response = wp_remote_get( 'http://api.escolamobile.com.br/ingresso/pesquisa' );
$response = json_decode( wp_remote_retrieve_body( $response ) );

?>

<div id="step-3" class="ingresso-step w-full rounded-lg px-5 lg:px-30 py-30 bg-white mt-20 hidden">
	<div class="validate-parent w-full rounded-lg px-5 lg:px-30 pb-30 bg-white mt-20">
		<?php
		$index = 0;
		foreach ( $response as $question ) :
			$index++;
			?>
			<h2 class="text-xl lg:text-2xl font-bold mb-15 mt-48"><?php echo $question->nome; ?></h2>
			<p>Escolha uma ou mais opções conforme preferir:</p>
			<div class="select-item-<?php echo $index; ?> grid grid-cols-1 lg:grid-cols-2 gap-x-20 gap-y-15 mt-20">
				<?php foreach ( $question->questoes as $option ) : ?>
					<label class="flex items-center">
						<input class="select-option" data-id="<?php echo $option->idpesquisa; ?>" value="<?php echo $option->id; ?>" type="checkbox">
						<span class="ml-10"><?php echo $option->questao; ?></span>
					</label>
				<?php endforeach; ?>
			</div>
			<div class="alert-item text-danger mt-10 hidden">Selecione pelo menos uma opção</div>
		<?php endforeach; ?>
	</div>
</div>
