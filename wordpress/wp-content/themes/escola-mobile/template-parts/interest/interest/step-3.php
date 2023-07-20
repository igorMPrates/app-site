<?php

$response = wp_remote_get( 'http://api.escolamobile.com.br/ingresso/pesquisa' );
$response = json_decode( wp_remote_retrieve_body( $response ) );

?>

<div id="step-3" class="ingresso-step hidden">
	<div class=" w-full rounded-lg px-5 lg:px-30 py-30 bg-white mt-20">
		<h2 class="text-4xl font-bold mb-15">Perguntas de Interesse</h2>
		<p class="text-md lg:text-lg mb-20">Queremos saber mais sobre você e suas opiniões a respeito de caracteristicas relevantes para a rotina escolar.</p>
	</div>

	<?php
	$i = 0;
	foreach ( $response as $questions ) :
		$i++;
		?>
		<div class="w-full rounded-lg px-5 lg:px-30 py-30 bg-white mt-20">
			<p class="text-md lg:text-xl mb-15"><?php echo $i; ?>. <?php echo $questions->nome; ?></p>
			<div class="grid grid-cols-12 gap-20">
				<div class="col-span-12 flex flex-col">
					<label>Resposta
						<select class="quiz-opts brother-serie brother-new-serie form-control w-full">
							<option disabled selected>Selecione</option>
							<?php foreach ( $questions->questoes as $question ) : ?>
								<option value="<?php echo $question->id; ?>"><?php echo $question->questao; ?></option>
							<?php endforeach; ?>
						</select>
					</label>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

	<div class="w-full rounded-lg px-5 lg:px-30 py-30 bg-white mt-20">
		<p class="text-md lg:text-xl">Nos conte qual seu nível de concordância ou discordância sobre os temas elencados a seguir:</p>
		<div class="mt-20">
			<h3 class="text-md lg:text-xl font-bold mb-20">Ampliação do universo cultural</h3>
			<div class="flex items-center justify-between mt-20">
				<div class="text-lg text-gray-500 leading-tight">Discordo<br>Totalmente</div>
				<div class="flex w-full mx-64 items-center justify-between">
					<?php for ( $i = 0; $i < 5; $i++ ) : ?>
						<div class="input-radio">
							<p><?php echo $i + 1; ?></p>
							<label class="radio">
								<input value="<?php echo $i + 1; ?>" <?php echo $i == 2 ? 'checked' : null; ?> name="8.1" type="radio">
								<span></span>
							</label>
						</div>
					<?php endfor; ?>
				</div>
				<div class="text-lg text-gray-500 leading-tight text-right">Concordo<br>Totalmente</div>
			</div>
		</div>

		<div class="mt-20">
			<h3 class="text-md lg:text-xl font-bold mb-20">Incentivo ao esporte</h3>
			<div class="flex items-center justify-between mt-20">
				<div class="text-lg text-gray-500 leading-tight">Discordo<br>Totalmente</div>
				<div class="flex w-full mx-64 items-center justify-between">
					<?php for ( $i = 0; $i < 5; $i++ ) : ?>
						<div class="input-radio">
							<p><?php echo $i + 1; ?></p>
							<label class="radio">
								<input value="<?php echo $i + 1; ?>" <?php echo $i == 2 ? 'checked' : null; ?> name="8.2" type="radio">
								<span></span>
							</label>
						</div>
					<?php endfor; ?>
				</div>
				<div class="text-lg text-gray-500 leading-tight text-right">Concordo<br>Totalmente</div>
			</div>
		</div>

		<div class="mt-20">
			<h3 class="text-md lg:text-xl font-bold mb-20">Base acadêmica solida e bons resultados em avaliação externa (vestibular, ENEM, etc)</h3>
			<div class="flex items-center justify-between mt-20">
				<div class="text-lg text-gray-500 leading-tight">Discordo<br>Totalmente</div>
				<div class="flex w-full mx-64 items-center justify-between">
					<?php for ( $i = 0; $i < 5; $i++ ) : ?>
						<div class="input-radio">
							<p><?php echo $i + 1; ?></p>
							<label class="radio">
								<input value="<?php echo $i + 1; ?>" <?php echo $i == 2 ? 'checked' : null; ?> name="8.3" type="radio">
								<span></span>
							</label>
						</div>
					<?php endfor; ?>
				</div>
				<div class="text-lg text-gray-500 leading-tight text-right">Concordo<br>Totalmente</div>
			</div>
		</div>

		<div class="mt-20">
			<h3 class="text-md lg:text-xl font-bold mb-20">Desenvolvimento de competências socioemocionais</h3>
			<div class="flex items-center justify-between mt-20">
				<div class="text-lg text-gray-500 leading-tight">Discordo<br>Totalmente</div>
				<div class="flex w-full mx-64 items-center justify-between">
					<?php for ( $i = 0; $i < 5; $i++ ) : ?>
						<div class="input-radio">
							<p><?php echo $i + 1; ?></p>
							<label class="radio">
								<input value="<?php echo $i + 1; ?>" <?php echo $i == 2 ? 'checked' : null; ?> name="8.4" type="radio">
								<span></span>
							</label>
						</div>
					<?php endfor; ?>
				</div>
				<div class="text-lg text-gray-500 leading-tight text-right">Concordo<br>Totalmente</div>
			</div>
		</div>

		<div class="mt-20">
			<h3 class="text-md lg:text-xl font-bold mb-20">Formação laica</h3>
			<div class="flex items-center justify-between mt-20">
				<div class="text-lg text-gray-500 leading-tight">Discordo<br>Totalmente</div>
				<div class="flex w-full mx-64 items-center justify-between">
					<?php for ( $i = 0; $i < 5; $i++ ) : ?>
						<div class="input-radio">
							<p><?php echo $i + 1; ?></p>
							<label class="radio">
								<input value="<?php echo $i + 1; ?>" <?php echo $i == 2 ? 'checked' : null; ?> name="8.5" type="radio">
								<span></span>
							</label>
						</div>
					<?php endfor; ?>
				</div>
				<div class="text-lg text-gray-500 leading-tight text-right">Concordo<br>Totalmente</div>
			</div>
		</div>

		<div class="mt-20">
			<h3 class="text-md lg:text-xl font-bold mb-20">Ação comunitária e trabalho voluntário</h3>
			<div class="flex items-center justify-between mt-20">
				<div class="text-lg text-gray-500 leading-tight">Discordo<br>Totalmente</div>
				<div class="flex w-full mx-64 items-center justify-between">
					<?php for ( $i = 0; $i < 5; $i++ ) : ?>
						<div class="input-radio">
							<p><?php echo $i + 1; ?></p>
							<label class="radio">
								<input value="<?php echo $i + 1; ?>" <?php echo $i == 2 ? 'checked' : null; ?> name="8.6" type="radio">
								<span></span>
							</label>
						</div>
					<?php endfor; ?>
				</div>
				<div class="text-lg text-gray-500 leading-tight text-right">Concordo<br>Totalmente</div>
			</div>
		</div>

		<div class="mt-20">
			<h3 class="text-md lg:text-xl font-bold mb-20">Desenvolvimento do pensamento crítico e formação ética</h3>
			<div class="flex items-center justify-between mt-20">
				<div class="text-lg text-gray-500 leading-tight">Discordo<br>Totalmente</div>
				<div class="flex w-full mx-64 items-center justify-between">
					<?php for ( $i = 0; $i < 5; $i++ ) : ?>
						<div class="input-radio">
							<p><?php echo $i + 1; ?></p>
							<label class="radio">
								<input value="<?php echo $i + 1; ?>" <?php echo $i == 2 ? 'checked' : null; ?> name="8.7" type="radio">
								<span></span>
							</label>
						</div>
					<?php endfor; ?>
				</div>
				<div class="text-lg text-gray-500 leading-tight text-right">Concordo<br>Totalmente</div>
			</div>
		</div>

		<div class="mt-20">
			<h3 class="text-md lg:text-xl font-bold mb-20">Preparação para a vida profissional</h3>
			<div class="flex items-center justify-between mt-20">
				<div class="text-lg text-gray-500 leading-tight">Discordo<br>Totalmente</div>
				<div class="flex w-full mx-64 items-center justify-between">
					<?php for ( $i = 0; $i < 5; $i++ ) : ?>
						<div class="input-radio">
							<p><?php echo $i + 1; ?></p>
							<label class="radio">
								<input value="<?php echo $i + 1; ?>" <?php echo $i == 2 ? 'checked' : null; ?> name="8.8" type="radio">
								<span></span>
							</label>
						</div>
					<?php endfor; ?>
				</div>
				<div class="text-lg text-gray-500 leading-tight text-right">Concordo<br>Totalmente</div>
			</div>
		</div>

		<div class="mt-20">
			<h3 class="text-md lg:text-xl font-bold mb-20">Localização urbana</h3>
			<div class="flex items-center justify-between mt-20">
				<div class="text-lg text-gray-500 leading-tight">Discordo<br>Totalmente</div>
				<div class="flex w-full mx-64 items-center justify-between">
					<?php for ( $i = 0; $i < 5; $i++ ) : ?>
						<div class="input-radio">
							<p><?php echo $i + 1; ?></p>
							<label class="radio">
								<input value="<?php echo $i + 1; ?>" <?php echo $i == 2 ? 'checked' : null; ?> name="8.9" type="radio">
								<span></span>
							</label>
						</div>
					<?php endfor; ?>
				</div>
				<div class="text-lg text-gray-500 leading-tight text-right">Concordo<br>Totalmente</div>
			</div>
		</div>
	</div>

	<div class="w-full rounded-lg px-5 lg:px-30 py-30 bg-white mt-20">
		<p class="text-md lg:text-xl mb-15">Faltou algum tema que acha relevante para o desenvolvimento escolar do seu filho e/ou filha?</p>
		<div class="grid grid-cols-12 gap-20">
			<div class="col-span-12">
				<label for="quiz_9">Resposta</label>
				<input class="form-control w-full" id="quiz_9" placeholder="Sua mensagem" type="text">
			</div>
		</div>
	</div>

</div>
