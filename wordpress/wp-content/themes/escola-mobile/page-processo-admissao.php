<?php

/**
 * Template Name: Processo admissão
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

namespace WL;

get_header();

$uri = $_SERVER[REQUEST_URI];
$isInfantil = str_contains($uri, 'infantil');
$isFundamental = str_contains($uri, 'fundamental');
$isMedio = str_contains($uri, 'medio');
?>

<section class="backgroundBlue">
	<div class="w-1280">
		<div class="titleCicles">
			<h2>Estude na <strong>Móbile</strong></h2>
			<p class="mt-12">O processo de ingresso começa com uma reunião de apresentação da escola. Clique no ciclo de
				ensino de seu(sua) filho(a) para agendar.</p>
		</div>
	</div>
</section>

<section class="processo__marginTop64">
	<?php get_template_part('template-parts/content/ciclos'); ?>
</section>

<?php

if (have_rows('faq')) :
?>
	<div>

		<?php
		while (have_rows('faq')) :
			the_row();
		?>
			<div id="effectScroll" class="admission-accordion">
				<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
					<div class="max-w-5xl mx-auto">

						<div class="open-admission-accordion flex items-center justify-between py-20 border-b border-tag-200">
							<h3 class="text-xl lg:text-2xl leading-tight font-semibold"><?php the_sub_field('titulo'); ?></h3>
							<div class="open-button ml-30">
								<div class="stick"></div>
								<div class="stick"></div>
							</div>
						</div>


						<div class="content pb-30 pt-10">
							<div class="md:pr-64"><?php the_sub_field('texto'); ?></div>

							<?php if (have_rows('list')) : ?>

								<?php
								while (have_rows('list')) :
									the_row();
									$lists = get_sub_field('list');
								?>

									<h4 class="font-bold text-xl mt-48 mb-20"><?php the_sub_field('title'); ?></h4>
									<div class="w-full grid grid-cols-1 <?php echo sizeof($lists) > 1 && get_sub_field('tipo_de_lista') == '4' > 1 ? 'lg:grid-cols-2' : null; ?> gap-20">
										<?php if (get_sub_field('tipo_de_lista') == '4') : ?>
											<?php foreach ($lists as $list) : ?>
												<table class="table-none bg-white rounded-base w-full">
													<?php if (!empty($list['title'])) : ?>
														<tr>
															<th class="py-10 border-b border-gray-300" colspan="4"><?php echo $list['title']; ?>
															</th>
														</tr>
													<?php endif; ?>
													<tr class="text-xs md:text-sm lg:text-lg border-b border-gray-300">
														<th class="py-5 m-auto font-normal">Mês</th>
														<th class="py-5 m-auto font-normal">Dia</th>
														<th class="py-5 m-auto font-normal">Horário</th>
														<th class="py-5 m-auto font-normal">Tipo da reunião</th>
													</tr>
													<?php foreach ($list['items'] as $item) : ?>
														<tr class="text-xs md:text-sm border-b border-gray-300">
															<th class="py-15 m-auto"><?php echo $item['month']; ?></th>
															<th class="py-15 m-auto font-light"><?php echo $item['day']; ?></th>
															<th class="py-15 m-auto font-light"><?php echo $item['hour']; ?></th>
															<th class="py-15 m-auto font-light"><?php echo $item['type']; ?></th>
														</tr>
													<?php endforeach; ?>
												</table>
											<?php endforeach; ?>
										<?php elseif (get_sub_field('tipo_de_lista') == '2') : ?>
											<?php foreach ($lists as $list) : ?>
												<table class="table-none bg-white rounded-base w-full">
													<?php if (!empty($list['title'])) : ?>
														<tr>
															<th class="py-10 border-b border-gray-300" colspan="4"><?php echo $list['title']; ?>
															</th>
														</tr>
													<?php endif; ?>
													<tr class="text-xs md:text-sm lg:text-lg border-b border-gray-300">
														<th class="w-1/2 py-5 m-auto font-normal">Série</th>
														<th class="w-1/2 py-5 m-auto font-normal">Idade <?php echo $list['limite_da_idade']; ?>
														</th>
													</tr>
													<?php foreach ($list['coluna_dupla'] as $item) : ?>
														<tr class="text-xs md:text-sm border-b border-gray-300">
															<th class="py-15 m-auto"><?php echo $item['serie']; ?></th>
															<th class="py-15 m-auto font-light"><?php echo $item['idade']; ?></th>
														</tr>
													<?php endforeach; ?>
												</table>
											<?php endforeach; ?>
										<?php endif; ?>

										<?php if (get_sub_field('tipo_de_lista') == '4') : ?>
											<?php foreach ($lists as $list) : ?>
												<div class="table-mobile__estudeMobile">
													<div class="table-mobile__Parcial mt-20">
														<?php foreach ($list['items'] as $item) : ?>
															<div>
																<h5 class="bg-month text-center bor-radMonth"><?php echo $item['month']; ?></h5>
															</div>

															<div>
																<p class="boldFont text-center p-mt16"><?php echo $item['day']; ?></p>
																<p class="text-center p-mt24"><?php echo $item['hour']; ?></p>
																<p class="text-center p-mt24 mb-12"><?php echo $item['type']; ?></p>
															</div>
														<?php endforeach; ?>
													</div>
												</div>
											<?php endforeach; ?>
										<?php endif; ?>
									</div>
								<?php endwhile; ?>

							<?php endif; ?>

							<!-- VAGAS -->
							<?php if (have_rows('vagas_list')) : ?>
								<?php
								while (have_rows('vagas_list')) :
									the_row();
									$lists = get_sub_field('vagas_list');
								?>
									<div class="w-full grid grid-cols-1 <?php echo sizeof($lists) > 1 && get_sub_field('tipo_de_lista') == '4' > 1 ? 'lg:grid-cols-2' : null; ?> gap-20">
										<?php if (get_sub_field('tipo_de_lista') == '4') : ?>
											<?php foreach ($lists as $list) : ?>
												<table class="table-none bg-white rounded-base w-full">
													<?php if (!empty($list['title'])) : ?>
														<tr>
															<th class="py-10 border-b border-gray-300" colspan="4"><?php echo $list['title']; ?>
															</th>
														</tr>
													<?php endif; ?>
													<tr class="text-xs md:text-sm lg:text-lg border-b border-gray-300">
														<th class="py-5 m-auto font-normal w-30">Ano</th>
														<th class="py-5 m-auto font-normal w-35">Vagas</th>
													</tr>
													<?php foreach ($list['items'] as $item) : ?>
														<tr class="text-xs md:text-sm border-b border-gray-300">
															<th class="py-15 py12 m-auto font-light"><?php echo $item['ano_da_vaga']; ?></th>
															<th class="py-15 py12 m-auto font-light"><?php echo $item['vagas']; ?></th>
															</th>
														</tr>
													<?php endforeach; ?>
												</table>
											<?php endforeach; ?>
										<?php elseif (get_sub_field('tipo_de_lista') == '2') : ?>

										<?php endif; ?>
										<?php if (get_sub_field('tipo_de_lista') == '4') : ?>
											<?php foreach ($lists as $list) : ?>
												<div class="table-mobile__estudeMobile">
													<div class="table-mobile__Parcial mt-20">
														<?php foreach ($list['items'] as $item) : ?>
															<div>
																<h5 class="bg-month text-center bor-radMonth">Ano</h5>
																<p class="boldFont text-center p-mt16"><?php echo $item['ano_da_vaga']; ?></p>
																<h5 class="bg-month text-center">Vaga</h5>
																<p class="text-center p-mt24"><?php echo $item['vagas']; ?></p>
															</div>
														<?php endforeach; ?>
													</div>
												</div>
											<?php endforeach; ?>
										<?php endif; ?>


									</div>
								<?php endwhile; ?>

							<?php endif; ?>


							<!-- TABELA INFANTIL E EM -->
							<?php if (have_rows('list_informations')) : ?>
								<?php
								while (have_rows('list_informations')) :
									the_row();
									$lists = get_sub_field('list-information');
								?>
									<h4 class="font-bold text-xl mt-48 mb-20"><?php the_sub_field('title'); ?></h4>
									<div class="w-full grid grid-cols-1 <?php echo sizeof($lists) > 1 && get_sub_field('tipo_de_lista') == '4' > 1 ? 'lg:grid-cols-2' : null; ?> gap-20">
										<?php if (get_sub_field('tipo_de_lista') == '4') : ?>
											<?php foreach ($lists as $list) : ?>
												<table class="table-none bg-white rounded-base w-full">
													<?php if (!empty($list['title'])) : ?>
														<tr>
															<th class="py-10 border-b border-gray-300" colspan="4"><?php echo $list['title']; ?>
															</th>
														</tr>
													<?php endif; ?>
													<tr class="text-xs md:text-sm lg:text-lg border-b border-gray-300">
														<th class="py-5 m-auto font-normal w-30">Datas importantes</th>
														<th class="py-5 m-auto font-normal w-35">Horário</th>
														<th class="py-5 m-auto font-normal w-35">Informação</th>
													</tr>
													<?php foreach ($list['items'] as $item) : ?>
														<tr class="text-xs md:text-sm border-b border-gray-300">
															<th class="py-15 py12 m-auto font-light"><?php echo $item['important_date']; ?></th>
															<th class="py-15 py12 m-auto font-light"><?php echo $item['important_hour']; ?></th>
															<th class="py-15 py12 m-auto font-light"><?php echo $item['important_information']; ?>
															</th>
														</tr>
													<?php endforeach; ?>
												</table>
											<?php endforeach; ?>
										<?php elseif (get_sub_field('tipo_de_lista') == '2') : ?>

										<?php endif; ?>
										<?php if (get_sub_field('tipo_de_lista') == '4') : ?>
											<?php foreach ($lists as $list) : ?>
												<div class="table-mobile__estudeMobile">
													<div class="table-mobile__Parcial mt-20">
														<?php foreach ($list['items'] as $item) : ?>
															<div>
																<h5 class="bg-month text-center bor-radMonth"><?php echo $item['month']; ?></h5>
															</div>

															<div>
																<p class="boldFont text-center p-mt16"><?php echo $item['important_date']; ?></p>
																<p class="text-center p-mt24"><?php echo $item['important_hour']; ?></p>
																<p class="text-center p-mt24 mb-12"><?php echo $item['important_information']; ?>
																</p>
															</div>
														<?php endforeach; ?>
													</div>
												</div>
											<?php endforeach; ?>
										<?php endif; ?>


									</div>
								<?php endwhile; ?>

							<?php endif; ?>

							<?php if (have_rows('list_copiar_fundamental')) : ?>
								<?php
								while (have_rows('list_copiar_fundamental')) :
									the_row();
									$lists = get_sub_field('list-fundamental');
								?>
									<h4 class="font-bold text-xl mt-48 mb-20"><?php the_sub_field('title'); ?></h4>
									<div class="w-full grid grid-cols-1 <?php echo sizeof($lists) > 1 && get_sub_field('tipo_de_lista') == '4' > 1 ? 'lg:grid-cols-2' : null; ?> gap-20">
										<?php if (get_sub_field('tipo_de_lista') == '4') : ?>
											<?php foreach ($lists as $list) : ?>
												<table class="table-none bg-white rounded-base w-full">
													<?php if (!empty($list['title'])) : ?>
														<tr>
															<th class="py-10 border-b border-gray-300" colspan="4"><?php echo $list['title']; ?>
															</th>
														</tr>
													<?php endif; ?>
													<tr class="text-xs md:text-sm lg:text-lg border-b border-gray-300">
														<th class="py-5 m-auto font-normal width-20">Datas importantes</th>
														<th class="py-5 m-auto font-normal w-25">Horário</th>
														<th class="py-5 m-auto font-normal w-25">Candidatos(as)</th>
														<th class="py-5 m-auto font-normal w-30">Informação</th>
													</tr>
													<?php foreach ($list['items'] as $item) : ?>
														<tr class="text-xs md:text-sm border-b border-gray-300">
															<th class="py-15 py12 m-auto"><?php echo $item['date_important_fund']; ?></th>
															<th class="py-15 py12 m-auto font-light"><?php echo $item['hour_important_fund']; ?>
															</th>
															<th class="py-15 py12 m-auto font-light"><?php echo $item['cand_important_fund']; ?>
															</th>
															<th class="py-15 py12 m-auto font-light"><?php echo $item['info_important_fund']; ?>
															</th>
														</tr>
													<?php endforeach; ?>
												</table>
											<?php endforeach; ?>
										<?php elseif (get_sub_field('tipo_de_lista') == '2') : ?>
											<?php foreach ($lists as $list) : ?>
												<table class="table-none bg-white rounded-base w-full">
													<?php if (!empty($list['title'])) : ?>
														<tr>
															<th class="py-10 border-b border-gray-300" colspan="4"><?php echo $list['title']; ?>
															</th>
														</tr>
													<?php endif; ?>
													<tr class="text-xs md:text-sm lg:text-lg border-b border-gray-300">
														<th class="w-1/2 py-5 m-auto font-normal">Série</th>
														<th class="w-1/2 py-5 m-auto font-normal">Idade <?php echo $list['limite_da_idade']; ?>
														</th>
													</tr>
													<?php foreach ($list['coluna_dupla'] as $item) : ?>
														<tr class="text-xs md:text-sm border-b border-gray-300">
															<th class="py-15 m-auto"><?php echo $item['serie']; ?></th>
															<th class="py-15 m-auto font-light"><?php echo $item['idade']; ?></th>
														</tr>
													<?php endforeach; ?>
												</table>
											<?php endforeach; ?>
										<?php endif; ?>

										<?php if (get_sub_field('tipo_de_lista') == '4') : ?>
											<?php foreach ($lists as $list) : ?>
												<div class="table-mobile__estudeMobile">
													<div class="table-mobile__Parcial mt-20">
														<?php foreach ($list['items'] as $item) : ?>
															<div>
																<h5 class="bg-month text-center bor-radMonth"><?php echo $item['']; ?></h5>
															</div>

															<div>
																<p class="boldFont text-center p-mt16"><?php echo $item['date_important_fund']; ?>
																</p>
																<p class="text-center p-mt24"><?php echo $item['hour_important_fund']; ?></p>
																<p class="text-center p-mt24 mb-12"><?php echo $item['cand_important_fund']; ?></p>
																<p class="text-center p-mt24 mb-12"><?php echo $item['info_important_fund']; ?></p>
															</div>
														<?php endforeach; ?>
													</div>
												</div>
											<?php endforeach; ?>
										<?php endif; ?>
									</div>
								<?php endwhile; ?>

							<?php endif; ?>



							<div class="md:pr-136 mt-30"><?php the_sub_field('bottom_text'); ?></div>

							<?php if (get_sub_field('ativar_botao')) : ?>
								<div class="flex justify-start mt-30 text-sm lg:text-md">
									<a href="<?php the_sub_field('link_botao'); ?>" class="p-25 bg-dark h-80 duration-300 hover:bg-green-100 text-white rounded-full flex justify-start items-center mt-20">
										<span><?php the_sub_field('texto_botao'); ?></span>
									</a>
								</div>
							<?php endif; ?>

						</div>

					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>


<?php if ($isFundamental || $isMedio) : ?>
		<!-- Para o médio e fundamental -->
		<div id="effectScroll" class="admission-accordion calendario">
			<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
				<div class="max-w-5xl mx-auto">

					<div class="open-admission-accordion flex items-center justify-between py-20 border-b border-tag-200">
						<h3 class="text-xl lg:text-2xl leading-tight font-semibold">Conteúdos Programáticos</h3>
						<div class="open-button ml-30">
							<div class="stick"></div>
							<div class="stick"></div>
						</div>
					</div>

					<div class="content">
						<p>As avaliações diagnósticas visam conhecer o estágio do desenvolvimento do(a) estudante em relação aos conteúdos
							listados a seguir.</p>
					</div>

					<div class="content pb-30 pt-10">
						<?php if ($isFundamental) : ?>
							<div class="content">
						<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; color: #0B65DA">Ensino Fundamental 1:
						</h4>
						<h4 style="font-size: 16px; font-weight: 400; line-height: 150%; margin-top: 8px">Veja abaixo os conteúdos referentes às avaliações de Leitura, Produção de Texto, Matemática e Inglês para candidatos do Ensino Fundamental 1</h4>
					

						<!-- Fundamental - 3° Ano-->
						<div class="admission-subAccordion calendario" style="padding-left: 12px">
							<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
								<div class="max-w-5xl mx-auto">
									<div class="open-admission-subAccordion flex items-center justify-between py-20 border-b border-tag-200">
										<h3 style="font-weight: 500;" class="text-xl leading-tight">3° Ano</h3>
										<div class="open-button ml-30">
											<div class="stick"></div>
											<div class="stick"></div>
										</div>
									</div>


									<div class="content pb-30 pt-10">
										<!-- LP -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;">
												Leitura e Produção de Texto</h4>
											<p style="padding-left: 20px; margin-top: 8px;">Em relação aos procedimentos de leitura, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												lê com fluência, atribuindo sentido às palavras e frases;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												diferencia letra, sílaba e palavra;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica informações explícitas no texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												infere uma informação implícita no texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica os elementos que constroem a narrativa: personagens, espaço, narrador e enredo;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica o conflito gerador do enredo;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												infere o sentido de uma palavra ou expressão;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												estabelece relação entre partes e elementos do texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												reconhece o efeito de sentido decorrente do uso da pontuação;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												interpreta com base no texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												compreende o enunciado das questões.
											</p>
										</div>

										<div>
											<p style="padding-left: 20px; margin-top: 24px;">Em relação aos procedimentos de produção de texto, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega letra cursiva legível;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												reconhece a palavra como unidade sonora que está entre dois espaços, evitando, assim, possíveis justaposições/aglutinações;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												explora a pontuação final em todas as frases (ponto final, ponto de interrogação e ponto de exclamação);
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega a letra maiúscula em nomes próprios e início de frases;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												apresenta encadeamento lógico das ideias na construção de respostas e textos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												segmenta o parágrafo em frases;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega mecanismos básicos de concordância nominal e verbal.
											</p>
										</div>

										<!-- Mat 3° Ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
												Matemática</h4>
											<p style="padding-left: 20px; margin-top: 8px;">Em relação aos procedimentos de
												resolução de problema, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												elabora estratégias válidas para resolver problemas de diferentes estruturas de
												pensamento matemático;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												registra o raciocínio realizado;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												escreve respostas finais coerentes com a solicitação do problema.
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px;">Em relação às estruturas de pensamento matemático, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												lê, escreve e compara números até a ordem da unidade de milhar;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												resolve, por meio de estratégias não convencionais, problemas envolvendo as diferentes ideias de adição, subtração, multiplicação e divisão com números naturais;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												calcula precisamente adições envolvendo números naturais por meio do algoritmo usual;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												calcula precisamente subtrações sem trocas envolvendo números naturais por meio do algoritmo usual.
											</p>
										</div>

										<!-- Ing 3° ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
												Inglês (somente para candidatos do Período Integral)</h4>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 8px; font-weight: bold;">The learner CAN…
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Recognize the letters of the alphabet in English;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Spell her/his name and simple words: Anna / cat / dog;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Use simple sentences to ask and answer simple questions: This is a chair. / How old are you? / I am six (years old). / How is the weather? / It’s sunny.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Follow very short stories using graded language and visual cues;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Respond to classroom instructions accordingly: Listen and color. / Read the text and circle the correct image. / Answer the questions.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Use very short sentences to describe familiar situations: This is my mother. / I like bananas. / I like dancing. / I am wearing glasses. / I can play outside. / There are four people in my family. / It is raining.
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Topics</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Name and age
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Cardinal numbers
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Likes and dislikes
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Foods and drinks
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Sports and physical activities
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												The weather
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Clothes
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Seasonal activities
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Family members
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Physical appearances
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Adjectives to describe people
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: bold;">Structures
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Be and have for simple descriptions
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Can for abilities
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												There is / are
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Basic pronouns
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Basic present verb forms
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- fund 4° ano -->
						<div class="admission-subAccordion calendario" style="padding-left: 12px">
							<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
								<div class="max-w-5xl mx-auto">
									<div class="open-admission-subAccordion flex items-center justify-between py-20 border-b border-tag-200">
										<h3 style="font-weight: 500;" class="text-xl leading-tight">4° Ano</h3>
										<div class="open-button ml-30">
											<div class="stick"></div>
											<div class="stick"></div>
										</div>
									</div>


									<div class="content pb-30 pt-10">
										<!-- LP -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;">
												Leitura e Produção de Texto</h4>
											<p style="padding-left: 20px; margin-top: 8px;">Em relação aos procedimentos de leitura, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												lê com fluência, atribuindo sentido às palavras e frases;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica informações explícitas no texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												infere uma informação implícita no texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica os elementos que constroem a narrativa: personagens, espaço, narrador e enredo;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica o conflito gerador do enredo;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												infere o sentido de uma palavra ou expressão;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												estabelece relação entre partes e elementos do texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												distingue um fato da opinião relativa a esse fato;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												reconhece o efeito de sentido decorrente do uso da pontuação e de outras notações;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												interpreta textos em histórias em quadrinhos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												interpreta com base no texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica o discurso direto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												compreende o enunciado das questões.
											</p>
										</div>

										<div>
											<p style="padding-left: 20px; margin-top: 24px;">Em relação aos procedimentos de produção de texto, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega letra cursiva legível;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												reconhece a palavra como unidade sonora que está entre dois espaços, evitando, assim, possíveis justaposições/aglutinações;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												explora a pontuação em todas as frases (ponto final, ponto de interrogação e ponto de exclamação, vírgula);
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega a letra maiúscula em nomes próprios e início de frases;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												apresenta encadeamento lógico das ideias na construção de respostas e textos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												segmenta o texto em parágrafo;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												segmenta o parágrafo em frases;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega mecanismos básicos de concordância nominal e verbal.
											</p>
										</div>

										<!-- Mat 4° Ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
												Matemática</h4>
											<p style="padding-left: 20px; margin-top: 8px;">Em relação aos procedimentos de
												resolução de problema, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												elabora estratégias válidas para resolver problemas de diferentes estruturas de
												pensamento matemático;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												registra todas as etapas de sua resolução;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												escreve respostas finais coerentes com a solicitação do problema.
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px;">Em relação às estruturas de pensamento matemático, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												lê, escreve e compara números até a ordem da unidade de milhar;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												resolve problemas envolvendo decomposição e operações com notas e moedas do nosso sistema monetário;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												relaciona informações apresentadas em uma tabela de dupla entrada;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												resolve, por meio de estratégias não convencionais, problemas envolvendo as diferentes ideias de adição, subtração, multiplicação e divisão;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												calcula precisamente adições e subtrações envolvendo números naturais por meio do algoritmo usual;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												calcula precisamente multiplicações por meio do algoritmo usual quando o segundo fator possui apenas um algarismo.
											</p>
										</div>

										<!-- Ing 4° ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
												Inglês (somente para candidatos do Período Integral)</h4>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 8px; font-weight: bold;">The learner CAN…
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Unscramble letters and words to form expressions and sentences in English;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Read simple illustrated stories;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Answer simple, direct questions with complete answers about a text or audio program;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Produce simple sentences to talk about himself/herself: I have (got) a dog. / My mother’s name is Anna. / My favorite school subject is Science. / I have like (playing) soccer. / I live in a house with my parents and sister. / My backpack is in my bedroom.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Produce simple sentences to describe a scene: The computer is next to the lamp. / This is a television. / There is a dog and a cat in the yard. / These books are blue. / She is bouncing the ball.
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Topics</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Ordinal numbers
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Hobbies
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Likes and dislikes
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												School supplies & subjects
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Family members
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Personal belongins
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Toys and gadgets
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Parts of the house and furniture
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Parts of the body and face
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Places and directions
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Key adjectives
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: bold;">Structures
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Be and have for simple descriptions
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Can for abilities
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												May for requests
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Determiners (a, an, the, some)
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Adverbs: now, here, too
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												There is/are for simple descriptions
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Have (got) for possession
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Personal and possessive pronouns
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Present verb forms (simple & continuous)
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Prepositions of place and time
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Conjunctions (and, but, so)
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- fund 5° ano -->
						<div class="admission-subAccordion calendario" style="padding-left: 12px">
							<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
								<div class="max-w-5xl mx-auto">
									<div class="open-admission-subAccordion flex items-center justify-between py-20 border-b border-tag-200">
										<h3 style="font-weight: 500;" class="text-xl leading-tight">5° Ano</h3>
										<div class="open-button ml-30">
											<div class="stick"></div>
											<div class="stick"></div>
										</div>
									</div>


									<div class="content pb-30 pt-10">
										<!-- LP -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;">
												Leitura e Produção de Texto</h4>
											<p style="padding-left: 20px; margin-top: 8px;">Em relação aos procedimentos de leitura, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												lê com fluência, atribuindo sentido às palavras e frases;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica informações explícitas no texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												infere uma informação implícita no texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica os elementos que constroem a narrativa: personagens, espaço, narrador e enredo;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica o conflito gerador do enredo;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												infere o sentido de uma palavra ou expressão;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												reconhece o efeito de sentido decorrente da escolha de uma palavra ou expressão;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												estabelece relação entre partes e elementos do texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												estabelece relações entre partes de um texto, identificando repetições ou substituições que contribuem para a continuidade de um texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												distingue um fato da opinião relativa a esse fato;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												estabelece relações entre textos diversos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												reconhece o efeito de sentido decorrente do uso da pontuação e de outras notações;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												interpreta com base no texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica o discurso direto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												compreende o enunciado das questões.
											</p>
										</div>

										<div>
											<p style="padding-left: 20px; margin-top: 24px;">Em relação aos procedimentos de produção de texto, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega letra cursiva legível;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												reconhece a palavra como unidade sonora que está entre dois espaços, evitando, assim, possíveis justaposições/aglutinações;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												explora a pontuação em todas as frases (ponto final, ponto de interrogação e ponto de exclamação, vírgula);
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega a letra maiúscula em nomes próprios e início de frases;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												apresenta encadeamento lógico das ideias na construção de respostas e textos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												segmenta o texto em parágrafo;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												segmenta o parágrafo em frases;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega mecanismos básicos de concordância nominal e verbal.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												marca, no texto, a separação entre o discurso do narrador e a fala das personagens, utilizando adequadamente as marcas dessa separação (verbos de elocução, dois-pontos, travessão e aspas).
											</p>
										</div>

										<!-- Mat 4° Ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
												Matemática</h4>
											<p style="padding-left: 20px; margin-top: 8px;">Em relação aos procedimentos de
												resolução de problema, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												elabora estratégias válidas para resolver problemas de diferentes estruturas de
												pensamento matemático;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												elabora um registro organizado contendo todas as etapas de resolução do problema;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												escreve respostas finais coerentes com a solicitação do problema.
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px;">Em relação às estruturas de pensamento matemático, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												lê, escreve e compara números até a classe do milhão;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica a quantidade total de unidades, dezenas, centenas etc. de um número (relações de inclusão);
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												resolve problemas envolvendo operações com notas e moedas do nosso sistema monetário;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												relaciona informações apresentadas em uma tabela de dupla entrada;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												calcula precisamente adições, subtrações, multiplicações e divisões envolvendo números naturais por meio do algoritmo usual.
											</p>
										</div>

										<!-- Ing 4° ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
											Inglês (somente para candidatos do Período Integral)</h4>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 8px; font-weight: bold;">The learner CAN…
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Spell words more accurately and promptly;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Answer simple, direct questions with complete answers about a text or audio program, and complete dialogues;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Infer meaning of unknown words or chunks from context;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Spot the main idea in a short text and look for specific information;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Describe their own routines, past experiences, people (physical traits) and their preferences using simple sentences: I always go to the shopping mall with my parents. / I play computer games in my free time. / I enjoy taking pictures. I am Brazilian, but my parents are Chinese. / I went to UK in 2019 and I ate fish and chips there. / I love reading books, but I don’t enjoy going to the museum. / My mom is shorter than me. / She is quiet and a little patient. / She has (got) short straight blonde hair and blue eyes. / I went riding last Saturday, because it was my birthday. / We went to the movies at night.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Write very short descriptive paragraphs involving close people, public places and/or familiar situations.
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Topics</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												School places and subjects
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Free time activities
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Likes and dislikes
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Physical descriptions
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Countries and nationalities
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Holiday destinations
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												City life and transportation
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Entertainment: TV shows, streaming contents, books etc.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Professions and workplaces
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: bold;">Structures
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Verb to be
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Like, enjoy, hate + noun/gerund
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Adjective word order
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Comparative degree of adjectives
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Have (got) for descriptions
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Demonstrative, personal and possessive pronouns
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Present verb forms (simple & continuous)
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Adverbs of frequency
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Past verb forms (simple & continuous)
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Adverbs of time (yesterday, last, ago)
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Can for present abilities
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Could for past abilities
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Will for future events
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Conjunctions (and, but, too, because, so, then, when)
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				

					<div class="content">
						<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; color: #0B65DA">Ensino Fundamental 2:
						</h4>
						<h4 style="font-size: 16px; font-weight: 400; line-height: 150%; margin-top: 8px">Veja abaixo os
							conteúdos referentes às avaliações de Leitura, Produção de Texto, Matemática, Inglês e Espanhol para
							candidatos ao Ensino Fundamental 2</h4>
				

					<!-- Fundamental -->
					<div class="admission-subAccordion calendario" style="padding-left: 12px">
						<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
							<div class="max-w-5xl mx-auto">
								<div class="open-admission-subAccordion flex items-center justify-between py-20 border-b border-tag-200">
									<h3 style="font-weight: 500;" class="text-xl leading-tight">6° Ano</h3>
									<div class="open-button ml-30">
										<div class="stick"></div>
										<div class="stick"></div>
									</div>
								</div>


								<div class="content pb-30 pt-10">
									<!-- LP -->
									<div>
										<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;">
											Leitura e Produção de Texto</h4>
										<p style="padding-left: 20px; margin-top: 8px;">Em relação aos procedimentos de
											leitura, será observado se o(a) aluno(a):</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Selecionar procedimentos de leitura adequados.
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											lê com fluência, atribuindo sentido às palavras e frases;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica informações explícitas no texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											infere uma informação implícita no texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica os elementos que constroem a narrativa: personagens, espaço, tempo,
											tipo de narrador e enredo;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											explica o conflito gerador do enredo;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											infere o sentido de uma palavra ou expressão;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											estabelece relação entre partes e elementos do texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											estabelece relações entre partes de um texto, identificando repetições ou
											substituições que contribuem para a continuidade de um texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica efeitos de humor em textos variados;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											estabelece relações entre textos diversos;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											interpreta com base no texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											interpreta textos em histórias em quadrinhos;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica as formas de discurso relatado (reportado) e suas marcas gráficas e
											linguísticas;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											compreende o enunciado das questões.
										</p>
									</div>

									<div>
										<p style="padding-left: 20px; margin-top: 24px;">Em relação aos procedimentos de
											produção de texto, será observado se o(a) aluno(a):</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											emprega letra cursiva legível;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											utiliza corretamente a pontuação no final e no interior das frases e nas
											enumerações;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											apresenta encadeamento lógico das ideias na construção de respostas e textos;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											segmenta adequadamente o texto em períodos e parágrafos;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											emprega mecanismos de concordância nominal e verbal;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											marca, no texto, a separação entre o discurso do narrador e a fala das
											personagens, utilizando adequadamente as marcas dessa separação (verbos de
											elocução, dois-pontos, travessão e aspas);
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											descreve imagens;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											atende ao gênero de texto proposto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											mantém a coerência textual na atribuição de título, na continuidade temática e
											de sentido geral do texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											utiliza adequadamente os mecanismos de coesão por meio de pronomes, advérbios,
											conjunções e palavras do mesmo campo semântico;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											grafa corretamente as palavras, obedecendo às normas da língua-padrão;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											emprega adequadamente a acentuação gráfica, obedecendo às diferenças de timbre
											(aberto/fechado) e de tonicidade (oxítonas, proparoxítonas e paroxítonas).
										</p>
									</div>

									<!-- Mat 6° Ano -->
									<div>
										<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
											Matemática</h4>
										<p style="padding-left: 20px; margin-top: 8px;">Em relação aos procedimentos de
											resolução de problema, será observado se o(a) aluno(a):</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											elabora estratégias válidas para resolver problemas de diferentes estruturas de
											pensamento matemático;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											elabora um registro de maneira a comunicar de forma organizada o percurso
											completo de sua resolução;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											verifica a compatibilidade do resultado encontrado;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											escreve respostas finais coerentes com a solicitação do problema.
										</p>
										<p style="padding-left: 20px; margin-top: 24px;">Em relação às estruturas de
											pensamento matemático, será observado se o(a) aluno(a):</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											lê, escreve e compara números naturais de qualquer ordem de grandeza,
											compreendendo as características do sistema de numeração decimal;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											apresenta precisão nos cálculos de adição, subtração, multiplicação e divisão de
											números naturais;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											resolve problemas envolvendo relações proporcionais;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											representa graficamente frações e situações-problema envolvendo números
											racionais;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											resolve problemas envolvendo cálculo de fração de quantidade.
										</p>
									</div>

									<!-- Ing 6° ano -->
									<div>
										<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
											Inglês (somente para candidatos do Período Integral)</h4>

										<!--  -->
										<p style="padding-left: 20px; margin-top: 8px; font-weight: bold;">The learner CAN…
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Infer the spelling of short unfamiliar words, such as proper names and
											addresses;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Answer direct questions, using complete answers, about a text or audio program;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Predict expressions to complete dialogues and fill in information gaps;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Infer meaning from context;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Identify personal problems, both simple and related to school life, and make
											suggestions accordingly;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Read short texts for the gist or spot specific information;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Produce, both orally and in writing, reasonable stretches of language to
											describe people’s personality traits;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Narrate simple events using time and sequencing expressions: I was climbing when
											I fell off the tree. / I bought a blue T-shirt when I went to the countryside.
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Describe simple possible conditions and their consequences: If I eat healthy
											food, I will be ready for the sports competition.
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Share personal experiences: I have studied here since 2018. / I have never
											visited an African country. / My mother has already flown a helicopter.
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Make future predictions based on evidence or by simply guessing: Next week, I am
											going to be very busy. / In the future, we will drive around in flying cars.
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Write short descriptive paragraphs, following guidelines and respecting word
											limits.
										</p>

										<!--  -->
										<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Topics</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											School places, subjects and timetables
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Occupations
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Free time activities
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Entertainment (TV, cinema and music)
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Life experiences
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Adventures
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Countries and celebrations
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Clothes and materials
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Numbers 1 – 1000
										</p>

										<!--  -->
										<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Structures</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Telling the time
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Present simple and continuous
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Comparatives and superlatives
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Past simple and continuous
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Plans, intentions and predictions: going to
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Predictions: will
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Present perfect with for, since, still, just, already, ever, never
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Relative clauses with that
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Can for present abilities
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Could for past abilities
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Should for simple advice and suggestions
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Countable and uncountable nouns
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Prepositions of place (behind, between, next to, opposite)
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											Imperative verbs for directions
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 7 ano -->
					<div class="admission-subAccordion calendario" style="padding-left: 12px">
						<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
							<div class="max-w-5xl mx-auto">
								<div class="open-admission-subAccordion flex items-center justify-between py-20 border-b border-tag-200">
									<h3 style="font-weight: 500;" class="text-xl leading-tight">7° Ano</h3>
									<div class="open-button ml-30">
										<div class="stick"></div>
										<div class="stick"></div>
									</div>
								</div>


								<div class="content pb-30 pt-10">
									<div>
										<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;">
											Leitura e Produção de Texto</h4>
										<p style="padding-left: 20px; margin-top: 8px;">Em relação aos procedimentos de
											leitura, será observado se o(a) aluno(a):</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											lê com fluência, atribuindo sentido às palavras e frases;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica informações explícitas no texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											infere uma informação implícita no texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica os elementos que constroem a narrativa: personagens, espaço, tempo,
											tipo de narrador e enredo;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											explica o conflito gerador do enredo;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											infere o sentido de uma palavra ou expressão;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											estreconhece e analisa o valor expressivo de recursos linguísticos e seu papel
											no estabelecimento do estilo (repetições; recursos gráfico-visuais; uso da
											pontuação; retomadas; escolhas lexicais; tratamento expressivo da sonoridade;
											uso de variantes linguísticas; processos de adjetivação; apostos);
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											estabelece relação entre partes e elementos do texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											estabelece relações entre partes de um texto, identificando repetições ou
											substituições que contribuem para a continuidade de um texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica a presença de elementos garantidores da coesão e analisa seu valor
											lógico-semântico na articulação, hierarquização e progressão das ideias do texto
											(constituição de rede semântica; presença de pronomes, advérbios, conjunções e
											sinônimos);
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica efeitos de humor em textos variados;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											estabelece relações entre textos diversos;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											interpreta com base no texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											interpreta textos em histórias em quadrinhos;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											compreende o enunciado das questões.
										</p>

										<!--  -->
										<div>
											<p style="padding-left: 20px; margin-top: 24px;">Em relação aos procedimentos de
												produção de texto, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega letra cursiva legível;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												utiliza corretamente a pontuação no final e no interior das frases e nas
												enumerações;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												apresenta encadeamento lógico das ideias na construção de respostas e
												textos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												segmenta adequadamente o texto em períodos e parágrafos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega mecanismos de concordância nominal e verbal;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												marca, no texto, a separação entre o discurso do narrador e a fala das
												personagens, utilizando adequadamente as marcas dessa separação (verbos de
												elocução, dois-pontos, travessão e aspas);
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												descreve imagens;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												atende ao gênero de texto proposto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												mantém a coerência textual na atribuição de título, na continuidade temática
												e de sentido geral do texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												utiliza adequadamente os mecanismos de coesão por meio de pronomes,
												advérbios, conjunções e palavras do mesmo campo semântico;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												grafa corretamente as palavras, obedecendo às normas da língua-padrão;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega adequadamente a acentuação gráfica, obedecendo às diferenças de
												timbre (aberto/fechado) e de tonicidade (oxítonas, proparoxítonas e
												paroxítonas).
											</p>
										</div>

										<!-- Mat 7° Ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
												Matemática</h4>
											<p style="padding-left: 20px; margin-top: 8px;">Em relação aos procedimentos de
												resolução de problema, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												elabora estratégias válidas para resolver problemas de diferentes estruturas
												de pensamento matemático;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												elabora um registro de maneira a comunicar de forma organizada o percurso
												completo de sua resolução;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												verifica a compatibilidade do resultado encontrado;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												escreve respostas finais coerentes com a solicitação do problema.
											</p>
											<p style="padding-left: 20px; margin-top: 24px;">Em relação às estruturas de
												pensamento matemático, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												lê, escreve e compara números racionais de qualquer ordem de grandeza,
												compreendendo as características do sistema de numeração decimal;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												relaciona as diferentes representações dos números racionais: decimal,
												fracionária, gráfica e percentual;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												resolve operações envolvendo números naturais;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												resolve adição, subtração e multiplicação envolvendo números racionais
												positivos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												resolve problemas envolvendo relações proporcionais;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												resolve problemas envolvendo frações e porcentagens, por meio de diferentes
												recursos (representações gráficas e operações).
											</p>
										</div>

										<!-- Ing 7° ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
												Inglês (somente para candidatos do Período Integral)</h4>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 8px; font-weight: bold;">The learner
												CAN…</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Speak intelligibly, with some control of phonological features such as word
												stress and individual sounds;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Name and identify time, day and dates on written and spoken messages;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Describe people’s appearance, personality traits and the position of objects
												in a picture;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Fill in a form with personal information;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Make suggestions and invitations;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Listen attentively to audio/video recordings to answer questions;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Infer meaning from context;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Read abridged or graded texts for the gist or to spot specific information;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Write coherent and cohesive texts of approximately 120 words.
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Topics</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Family and friends
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												School subjects, people and places
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Occupations and professions
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Appearance and personality traits
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Clothes
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Food
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Travel and transport
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Life experiences
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												The future
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Sports
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Lexical
												Structures</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Invitations and offers: Would you like…? / Let’s…! / How about you? / Shall
												we…?
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Prepositional phrases + verb –ing (be, fond of, be keen on)
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Prepositions of time: in, on, at
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Time expressions: ago, when, while, until, last (week, year, century),
												before/after, as soon as, by (+ past perfect), already, yesterday
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Quantifiers: a/an, a lot of, many, much, some
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Linkers: because, however, as well, also, too
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Grammar
												Structures</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Sentence word order: subject + verb + direct object
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Verb to be
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Has/have got
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Present simple
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Enjoy, like, love, hate + nouns & verbs –ing
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Comparative and Superlative: regular and irregular forms
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Past simple and continuous
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Used to for past habits
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Plans, intentions and predictions: going to
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Predictions: will
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												First conditional
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Present perfect with for, since, still, just, yet, already, ever, never
											</p>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<!-- 8 ano -->
					<div class="admission-subAccordion calendario" style="padding-left: 12px">
						<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
							<div class="max-w-5xl mx-auto">
								<div class="open-admission-subAccordion flex items-center justify-between py-20 border-b border-tag-200">
									<h3 style="font-weight: 500;" class="text-xl leading-tight">8° Ano</h3>
									<div class="open-button ml-30">
										<div class="stick"></div>
										<div class="stick"></div>
									</div>
								</div>

								<div class="content pb-30 pt-10">

									<div>
										<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;">
											Leitura e Produção de Texto</h4>
										<p style="padding-left: 20px; margin-top: 8px;">Em relação aos procedimentos de
											leitura, será observado se o(a) aluno(a):</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											lê com fluência, atribuindo sentido às palavras e frases;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica informações explícitas no texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											infere uma informação implícita no texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica os elementos que constroem a narrativa: personagens, espaço,
											tempo, tipo de narrador e enredo;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											explica o conflito gerador do enredo;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											infere o sentido de uma palavra ou expressão;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											reconhece e analisa o valor expressivo de recursos linguísticos e seu papel
											no estabelecimento do estilo (repetições; recursos gráfico-visuais; uso da
											pontuação; retomadas; escolhas lexicais; tratamento expressivo da
											sonoridade; uso de variantes linguísticas; processos de adjetivação;
											apostos);
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											estabelece relação entre partes e elementos do texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											estabelece relações entre partes de um texto, identificando repetições ou
											substituições que contribuem para a continuidade de um texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica a presença de elementos garantidores da coesão e analisa seu
											valor lógico-semântico na articulação, hierarquização e progressão das
											ideias do texto (constituição de rede semântica; presença de pronomes,
											advérbios, conjunções e sinônimos);
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica efeitos de humor em textos variados;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											estabelece relações entre textos diversos;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											interpreta com base no texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											interpreta textos em histórias em quadrinhos;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica as formas de discurso relatado (reportado) e suas marcas gráficas
											e linguísticas;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											reconhece, distingue e analisa elementos constituintes do gênero de texto
											(quanto ao conteúdo temático, à construção composicional e ao estilo);
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											compara textos pela análise de: referências intertextuais; contexto de
											produção; organização do discurso; características de gêneros e suportes;
											variação linguística/registro; campo lexical; dimensão discursiva/pragmática
											da linguagem.
										</p>

										<!--  -->
										<div>
											<p style="padding-left: 20px; margin-top: 24px;">Em relação aos
												procedimentos de produção de texto, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega letra cursiva legível;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												grafa corretamente as palavras, obedecendo às normas da língua-padrão;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega adequadamente a acentuação gráfica, obedecendo às diferenças de
												timbre (aberto/fechado) e de tonicidade (oxítonas, proparoxítonas e
												paroxítonas);
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												utiliza corretamente a pontuação no final e no interior das frases e nas
												enumerações;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												apresenta encadeamento lógico das ideias na construção de respostas e
												textos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												segmenta adequadamente o texto em períodos e parágrafos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega mecanismos de concordância nominal e verbal;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												marca, no texto, a separação entre o discurso do narrador e a fala das
												personagens, utilizando adequadamente as marcas dessa separação (verbos
												de elocução, dois-pontos, travessão e aspas);
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												descreve imagens;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												mantém a coerência textual na atribuição de título, na continuidade
												temática e de sentido geral do texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												atende ao gênero de texto proposto, distinguindo seus elementos
												constituintes (quanto ao conteúdo temático, à construção composicional e
												ao estilo).
											</p>
										</div>

										<!-- Mat 8° Ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
												Matemática</h4>
											<p style="padding-left: 20px; margin-top: 8px;">Em relação aos procedimentos
												de resolução de problema, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												elabora estratégias válidas para resolver problemas de diferentes
												estruturas de pensamento matemático;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												elabora um registro de maneira a comunicar de forma organizada o
												percurso completo de sua resolução;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												verifica a compatibilidade do resultado encontrado;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												escreve respostas finais coerentes com a solicitação do problema.
											</p>
											<p style="padding-left: 20px; margin-top: 24px;">Em relação às estruturas de
												pensamento matemático, será observado se o(a) aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												relaciona as diferentes representações dos números racionais: decimal,
												fracionária, gráfica e percentual;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												calcula o valor de expressões numéricas envolvendo adição, subtração,
												multiplicação e divisão de números racionais positivos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												calcula o valor de expressões numéricas envolvendo adição e subtração de
												números racionais positivos e negativos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												resolve problemas envolvendo operações com frações e porcentagens;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica relações proporcionais em uma situação e as utiliza na
												resolução de um problema;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												resolve equações de primeiro grau.
											</p>
										</div>

										<!-- Ing 8° ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
												Inglês (somente para candidatos do Período Integral)</h4>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 8px; font-weight: bold;">The
												learner CAN…</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Speak intelligibly, with limited but effective command of phonological
												features such as word stress, individual sounds and intonation;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Talk about familiar and slightly unfamiliar people, places, situations,
												as well as life experiences, emotions, special occasions and the future;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Give opinions;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Report statements, questions, commands and requests;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Talk about present and future imaginary conditions;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Listen to audio-visual materials and read longer texts for detailed
												comprehension, gist and global meaning, as well as speaker’s attitude
												and opinion;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Demonstrate the ability to infer meaning from context;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identify and use different patterns to paraphrase very short sentences;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Analyse and plan for writing short communicative messages and opinion
												and narrative texts;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Write coherent and cohesive paragraphs and texts.
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Topics
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Life events
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Personality
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Emotions
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Science
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Technology
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												The environment
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												The news
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Advertising
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Arts and books
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Discoveries and inventions
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Jobs and professions
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Lexical
												Structures</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Related collocations and phrasal verbs
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Chunks to describe large numbers
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Verbs + dependent prepositions
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Compound nouns
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Make and do collocations -ed & -ing adjectives
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Prepositional phrases with ‘at’ / ‘by’ / ‘in’ / ‘on’
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Linkers: cause + effect / opinion / contrast
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Grammar
												Structures</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Verb tenses: present simple / continuous / perfect simple / perfect
												continuous
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Narrative tenses: past simple and continuous / used to / past perfect
												simple
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Pronouns: subject / object / adjective / reflexive
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Defining and non-defining relative clauses
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Future forms: will / going to / present continuous / present simple
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Conditionals: zero / first / second
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Reported speech
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Passive Voice
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Modal verbs: deduction / obligation / prohibition
											</p>
										</div>

										<!-- Esp 8° ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
												Espanhol (somente para candidatos do Período Integral)</h4>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 8px; font-weight: bold;">En cuanto
												a las habilidades lingüísticas, el candidato al 8° año debe:</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Comprender frases y el vocabulario más habitual relacionado a datos
												personales, el lugar donde vive, familia y compras;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Utilizar expresiones y frases para describir de forma sencilla su
												entorno, rutina escolar y personal;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Leer y escribir textos breves y correos electrónicos de carácter
												personal;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Comunicarse en interacciones sociales breves y habituales que exijan
												intercambio de informaciones sencillo y directo sobre actividades y
												temas cotidianos.
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">
												Funcionales y Comunicativos</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Presentación personal
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Oraciones sencillas en interacciones cotidianas de clase
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Los saludos más usuales de acuerdo con el contexto comunicativo
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Variantes de tratamiento
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												La rutina: estudio, deportes y actividades de tiempo libre
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Instrucciones de una receta
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Gustos y preferencias
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Descripción del espacio público
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Descripción de la vivenda
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">
												Contenidos Lexicales</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Vocabulario relacionado al aula y a los útiles escolares
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Países hispanohablantes y nacionalidades
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Vocabulario relacionado a los medios de transporte y referencias al
												desplazamiento en una ciudad
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												El espacio público y establecimientos
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Muebles, objetos y partes de una vivienda
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Las horas y los días de la semana
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Los alimentos
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Los animales
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Los colores
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Los deportes
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Descripción física y de personalidad
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estados de ánimo y sensaciones físicas
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Partes del cuerpo
											</p>


											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">
												Gramaticales</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Pronombres sujeto
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Usos de los verbos estar, haber y tener para indicar la existencia o
												ubicación de los establecimientos de la ciudad
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Numerales
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Artículos y contracciones
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Numerales
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Usos y morfología del Presente de Indicativo
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Verbos reflexivos
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Género y número de sustantivos y adjetivos
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Operadores argumentativos de causa, consecuencia y finalidad
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Usos y morfología del Pretérito Perfecto
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Posición pronominal: pronombres reflexivos
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 9 ano -->
					<div class="admission-subAccordion calendario" style="padding-left: 12px">
						<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
							<div class="max-w-5xl mx-auto">
								<div class="open-admission-subAccordion flex items-center justify-between py-20 border-b border-tag-200">
									<h3 style="font-weight: 500;" class="text-xl leading-tight">9° Ano</h3>
									<div class="open-button ml-30">
										<div class="stick"></div>
										<div class="stick"></div>
									</div>
								</div>

								<div class="content pb-30 pt-10">

									<div>
										<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;">
											Leitura e Produção de Texto</h4>
										<p style="padding-left: 20px; margin-top: 8px;">Em relação aos procedimentos
											de leitura, será observado se o(a) aluno(a):</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											lê com fluência, atribuindo sentido às palavras e frases;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica informações explícitas no texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											infere uma informação implícita no texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica os elementos que constroem a narrativa: personagens, espaço,
											tempo, tipo de narrador e enredo;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											explica o conflito gerador do enredo;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											infere o sentido de uma palavra ou expressão;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											reconhece e analisa o valor expressivo de recursos linguísticos e seu
											papel no estabelecimento do estilo (repetições; recursos
											gráfico-visuais; uso da pontuação; retomadas; escolhas lexicais;
											tratamento expressivo da sonoridade; uso de variantes linguísticas;
											processos de adjetivação; apostos);
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											estabelece relação entre partes e elementos do texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											estabelece relações entre partes de um texto, identificando repetições
											ou substituições que contribuem para a continuidade de um texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica a presença de elementos garantidores da coesão e analisa seu
											valor lógico-semântico na articulação, hierarquização e progressão das
											ideias do texto (constituição de rede semântica; presença de pronomes,
											advérbios, conjunções e sinônimos);
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica efeitos de humor em textos variados;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											distingue um fato da opinião relativa a esse fato;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											estabelece relações entre textos diversos;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											interpreta com base no texto;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											interpreta textos em histórias em quadrinhos;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											identifica as formas de discurso relatado (reportado) e suas marcas
											gráficas e linguísticas;
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											analisa transformações e outras operações sintáticas, reconhecendo seu
											efeito expressivo (inversões e deslocamentos; frases declarativas,
											interrogativas, exclamativas e imperativas; advérbio por locução
											adverbial; adjetivo por locução adjetiva; masculino/feminino;
											singular/plural);
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											reconhece o papel funcional e os valores (semânticos e discursivos) dos
											elementos na estruturação da sentença (processos: estados,
											acontecimentos, ações; papéis semânticos: agente, paciente, instrumento,
											modo, causa);
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											reconhece, distingue e analisa elementos constituintes do gênero de
											texto (quanto ao conteúdo temático, à construção composicional e ao
											estilo);
										</p>
										<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
												<g clip-path="url(#clip0_1758_48116)">
													<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
												</g>
												<defs>
													<clipPath id="clip0_1758_48116">
														<rect width="16" height="17" fill="white" />
													</clipPath>
												</defs>
											</svg>
											compara textos pela análise de: referências intertextuais; contexto de
											produção; organização do discurso; características de gêneros e
											suportes; variação linguística/registro; campo lexical; dimensão
											discursiva/pragmática da linguagem.
										</p>

										<!--  -->
										<div>
											<p style="padding-left: 20px; margin-top: 24px;">Em relação aos
												procedimentos de produção de texto, será observado se o(a) aluno(a):
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega letra cursiva legível;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												grafa corretamente as palavras, obedecendo às normas da
												língua-padrão;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega adequadamente a acentuação gráfica, obedecendo às diferenças
												de timbre (aberto/fechado) e de tonicidade (oxítonas, proparoxítonas
												e paroxítonas);
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												utiliza corretamente a pontuação no final e no interior das frases e
												nas enumerações;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												utiliza adequadamente os mecanismos de coesão por meio de pronomes, advérbios, conjunções e palavras do mesmo campo semântico;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												apresenta encadeamento lógico das ideias na construção de respostas e textos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												segmenta adequadamente o texto em períodos e parágrafos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												emprega mecanismos de concordância nominal e verbal;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												marca, no texto, a separação entre o discurso do narrador e a fala
												das personagens, utilizando adequadamente as marcas dessa separação
												(verbos de elocução, dois-pontos, travessão e aspas);
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												descreve imagens;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												mantém a coerência textual na atribuição de título, na continuidade
												temática e de sentido geral do texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												atende ao gênero de texto proposto, distinguindo seus elementos
												constituintes (quanto ao conteúdo temático, à construção
												composicional e ao estilo).
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												seleciona e relaciona adequadamente informações, argumentos e outros procedimentos de persuasão.
											</p>
										</div>

										<!-- Mat 9° Ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
												Matemática</h4>
											<p style="padding-left: 20px; margin-top: 8px;">Em relação aos
												procedimentos de resolução de problema, será observado se o(a)
												aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												elabora estratégias válidas para resolver problemas de diferentes
												estruturas de pensamento matemático;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												elabora um registro de maneira a comunicar de forma organizada o
												percurso completo de sua resolução;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												verifica a compatibilidade do resultado encontrado;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												escreve respostas finais coerentes com a solicitação do problema.
											</p>
											<p style="padding-left: 20px; margin-top: 24px;">Em relação às
												estruturas de pensamento matemático, será observado se o(a)
												aluno(a):</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												relaciona as diferentes representações dos números racionais:
												decimal, fracionária, gráfica e percentual;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												resolve problemas envolvendo operações com frações e porcentagens;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												calcula o valor de expressões numéricas envolvendo adição,
												subtração, multiplicação e divisão de números racionais positivos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												calcula o valor de potências com base racional e expoente inteiro;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												identifica relações proporcionais em uma situação e as utiliza na
												resolução de um problema;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												resolve problemas envolvendo operações com frações e porcentagens;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												utiliza recursos algébricos para representar e resolver uma situação apresentada;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												resolve equações de primeiro grau.
											</p>
										</div>

										<!-- Ing 8° ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">
												Inglês (somente para candidatos do Período Integral)</h4>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 8px; font-weight: bold;">The
												learner CAN…</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Speak intelligibly, with limited but effective command of
												phonological features such as word stress, individual sounds and
												intonation;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Narrate an experience (personal or not) while logically sequencing actions and events, and express the feelings that this experience may have given rise to;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Summarize the events of an incident, while sticking to their chronological order;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Convey another person’s statement or question, either by paraphrasing what was said or verbatim, in order to back up a justification or explanation;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Present problems of either personal or wider social interest coherently by providing enough information about its causes and (potential) consequences;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Put forth an opinion or take a stance in relation to an incident or issue (i.e. expressing agreement or disagreement), and support it with logical and concisely expressed justification;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Suggest a solution to a problem and express arguments for that;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Infer meaning from context as well as writer’s/speaker’s attitude and opinion in audiovisual materials and longer texts;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Write short narratives, informal letters/e-mails and short essays.
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">
												Topics</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Consumerism
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Slogans and their targets
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Regional idioms
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Culture shock
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Eating habits
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Medicine and vaccines
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Literal vs. figurative language.
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">
												Lexical Structures</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Linkers of addition
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Linkers of contrast
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Goods and services
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Sales and marketing
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Seem, look and appear
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												So and neither
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Likely to and expected to
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Dwellings and furniture
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Health conditions, symptoms and ailments
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Unless, as long as and in case for conditionals
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Wish and if only
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Feel, have and be
											</p>


											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">
												Grammar Structures</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Causative have
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Relative pronouns
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Prepositional relative clauses
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Noun suffixes: -full, -ment, -ion, -ity, -er, -or, -hood, -ism, -ist, -ness
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Noun prefixes: anti-, dis-, in-, co-, extra-, fore-, mis-, mono-, bi-
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Adjective suffixes: -y, -less, -able, -ible, -ful, -ish
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Indirect questions
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Participle clauses
											</p>
										</div>

										<!-- Esp 9° ano -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px; margin-top: 24px;">Espanhol (somente para candidatos do Período Integral)</h4>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 8px; font-weight: bold;">En cuanto a las habilidades lingüísticas, el candidato al 9° año debe:</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Comprender los principales aspectos de textos orales y escritos sobre temas conocidos, relacionados a estudios, intereses y rutina personal y reaccionar adecuadamente en esos contextos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Producir textos orales y escritos coherentes sobre temas conocidos o de interés personal, tales como relato de planes y experiencias personales, descripción de acontecimientos, personas y lugares y expresión de opiniones y sentimientos;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Interactuar de forma espontánea y sencilla y mantener conversaciones sobre temas cotidianos.
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Funcionales y Comunicativos</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Presentación personal y de personas del entorno
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Interacciones cotidianas de clase
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Los saludos más usuales de acuerdo con el contexto comunicativo
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Variantes de tratamiento: registros formal e informal
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Descripción de la rutina: estudio, deportes y actividades de tiempo libre
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Expresión de gustos, preferencias y opiniones
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Relato de experiencias personales y acontecimientos del pasado
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Comparación de características de distintas épocas
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Contenidos Lexicales</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Espacio público y establecimientos
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Las horas, los días de la semana y los meses
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estaciones del año y tiempo atmosférico
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Viajes: alojamiento, actividades, atracciones, transporte
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estados de ánimo y sensaciones físicas
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Ropas, calzados y complementos
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Actividades de ócio
											</p>

											<!--  -->
											<p style="padding-left: 20px; margin-top: 24px; font-weight: 500;">Gramaticales</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Usos de los verbos estar, haber y tener para indicar la existencia o ubicación
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Artículos y contracciones
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Numerales
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Morfología y usos del Presente de Indicativo
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Morfología y usos de los pretéritos Perfecto, Imperfecto, Pluscuamperfecto e Indefinido del Indicativo
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Verbos reflexivos y posición pronominal
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Operadores argumentativos causales, consecutivos, finales, temporales, adversativos y concesivos
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php elseif ($isMedio) : ?>
						<!-- Médio -->
						<div class="admission-subAccordion calendario">
							<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
								<div class="max-w-5xl mx-auto">
									<div class="open-admission-subAccordion flex items-center justify-between py-20 border-b border-tag-200">
										<h3 style="font-weight: 500;" class="text-xl leading-tight">1º ano Ensino Médio
										</h3>
										<div class="open-button ml-30">
											<div class="stick"></div>
											<div class="stick"></div>
										</div>
									</div>
									<!-- PORTUGUÊS -->
									<div class="content pb-30 pt-10">
										<!-- LP -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;; ">
												Leitura:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Selecionar procedimentos de leitura adequados.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Inferir o sentido de uma palavra ou expressão.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Localizar informações explícitas em um texto.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Inferir uma informação implícita em um texto.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estabelecer relações entre partes de um texto, identificando repetições
												ou substituições que contribuam para sua continuidade.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identificar relações lógico-discursivas presentes no texto, marcadas por
												conjunções, advérbios etc.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Reconhecer o efeito de sentido decorrente do uso da pontuação, da
												escolha de determinadas palavras e expressões, da ordem das informações
												etc.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identificar efeitos de ironia ou humor em textos variados.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Relacionar o texto com suas condições de produção: gênero, formas de
												circulação, objetivos etc.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identificar o tema de um texto.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identificar o conflito gerador do enredo e os elementos que constroem a
												narrativa.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identificar a tese de um texto argumentativo.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estabelecer relação entre a tese e os argumentos oferecidos para
												sustentá-la.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Distinguir um fato da opinião relativa a esse fato.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Reconhecer posições distintas entre duas ou mais opiniões relativas ao
												mesmo fato ou ao mesmo tema.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Interpretar, em poemas, efeitos produzidos pelo uso de recursos sonoros
												(estrofação, rimas, aliterações etc.) e semânticos (figuras de
												linguagem, por exemplo).
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Articular a linguagem verbal com outras linguagens (fotografias,
												ilustrações etc.).
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estabelecer relações entre textos.
											</p>
										</div>
										<!-- PT -->
										<div style="margin-top: 24px">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;">
												Produção de texto:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Atender ao gênero de texto proposto, considerando seus elementos
												constituintes (quanto ao conteúdo temático, à construção composicional e
												ao estilo).
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Ater-se ao tema proposto e desenvolvê-lo.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Selecionar e relacionar adequadamente informações e argumentos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Manter a coerência textual, inclusive na atribuição de título.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Segmentar adequadamente o texto em parágrafos e períodos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estabelecer relações entre as partes do texto, evitando repetições e
												usando adequadamente elementos coesivos que contribuam para a
												continuidade do texto.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Grafar corretamente as palavras, obedecendo às normas da língua padrão.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Utilizar adequadamente a pontuação: no fim e no meio de frases; para
												isolar aposto, vocativo e adjunto adverbial antecipado.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Utilizar adequadamente os mecanismos básicos de concordância verbal e
												nominal.
											</p>
										</div>
									</div>

									<!-- MATEMATICA -->
									<div class="content pb-30 pt-10">
										<!-- Números -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Números:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Resolução de situações-problema envolvendo uma ou mais operações entre
												números reais.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Cálculo e simplificação de radicais.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Resolução de problemas envolvendo grandezas direta e inversamente
												proporcionais.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Cálculo percentual.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Noções de probabilidade de ocorrência de eventos simples.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Produtos notáveis.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Fatoração.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Resolução de equações e sistemas de equações de 1º grau.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Resolução de situações-problema envolvendo equações de 1º grau.
											</p>
										</div>
										<!-- Geometria e medidas -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;">
												Geometria e medidas:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Propriedades angulares: soma dos ângulos internos de polígono, ângulos
												opostos pelo vértice, suplementares e complementares.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Polígonos: classificação, propriedades, áreas e perímetros.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Circunferências e círculos; perímetro e área.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Semelhança de triângulos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Unidades de medida de diferentes grandezas: volume, massa, tempo,
												comprimento e área.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Relações entre medidas de grandezas expressas por razões entre outras
												duas: velocidade, densidade etc.
											</p>
										</div>
										<!-- Noções de estatística -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Noções de estatística:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Leitura, construção e interpretação de gráficos de setores, de barras e
												de segmentos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Cálculo e interpretação do valor médio de um conjunto de dados.
											</p>
										</div>
									</div>

									<!-- INGLêS -->
									<div class="content pb-30 pt-10">
										<!-- Reading Comprehension: -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Reading Comprehension:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Compreensão de ideias principais e de vocabulário contextualizado em
												textos diversos.
											</p>
										</div>
										<!-- Use of English:  -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Use of English:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Reconhecimento e uso comunicativo da gramática da língua inglesa em
												textos que contextualizem os seguintes tópicos:
											</p>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500"> Verb Tenses:</h4>
												<div style="padding-left: 24px">
													<li><span>Simple Present.</span></li>
													<li><span>Present Continuous.</span></li>
													<li><span>Present Perfect.</span></li>
													<li><span>Present Perfect Continuous.</span></li>
													<li><span>Simple Past.</span></li>
													<li><span>Past Continuous.</span></li>
													<li><span>Past Perfect.</span></li>
													<li><span>Past Perfect Continuous.</span></li>
													<li><span>Be used to/get used to.</span></li>
													<li><span>Passive Voice: present and past.</span></li>
													<li><span>Causative Form.</span></li>
													<li><span>Future Tense (will, going to, present continuous as
															future).</span></li>
													<li><span>Modal Verbs.</span></li>
													<li><span>Question Tags.</span></li>
													<li><span>Verbs and prepositions followed by gerund.</span></li>
												</div>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500"> Adjectives:</h4>
												<div style="padding-left: 24px">
													<li><span>Comparative and Superlative Forms</span></li>
												</div>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Indefinite pronouns</h4>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Prepositions</h4>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Conditionals:</h4>
												<div style="padding-left: 24px">
													<li><span>First, Second and Third</span></li>
												</div>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Reported Speech</h4>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Phrasal Verbs</h4>
											</div>
										</div>
										<!-- Writing:  -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Writing:</h4>
											<p style="padding-left: 20px; margin-top: 8px;">
												Produção de texto cujos critérios de avaliação são:
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												ater-se ao tema proposto e desenvolvê-lo;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												atender ao gênero de texto proposto (organização textual e registro);
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												manter a coerência textual no desenvolvimento do texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												utilizar corretamente as estruturas gramaticais e vocabulário, incluindo
												ortografia.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- 2 ANO -->
						<div class="admission-subAccordion calendario">
							<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
								<div class="max-w-5xl mx-auto">
									<div class="open-admission-subAccordion flex items-center justify-between py-20 border-b border-tag-200">
										<h3 style="font-weight: 500;" class="text-xl leading-tight">2º ano Ensino Médio
										</h3>
										<div class="open-button ml-30">
											<div class="stick"></div>
											<div class="stick"></div>
										</div>
									</div>

									<!-- LEI -->
									<div class="content pb-30 pt-10">
										<!-- LP -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;; ">
												Leitura:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Selecionar procedimentos de leitura adequados.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Inferir o sentido de uma palavra ou expressão.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Localizar informações explícitas em um texto.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Inferir uma informação implícita em um texto.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estabelecer relações entre partes de um texto, identificando repetições
												ou substituições que contribuam para sua continuidade.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identificar relações lógico-discursivas presentes no texto, marcadas por
												conjunções, advérbios etc.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Reconhecer o efeito de sentido decorrente do uso da pontuação, da
												escolha de determinadas palavras e expressões, da ordem das informações
												etc.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identificar efeitos de ironia ou humor em textos variados.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Relacionar o texto com suas condições de produção: gênero, formas de
												circulação, objetivos etc.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identificar o tema de um texto.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identificar a tese de um texto argumentativo.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estabelecer relação entre a tese e os argumentos oferecidos para
												sustentá-la.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Distinguir um fato da opinião relativa a esse fato.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Reconhecer posições distintas entre duas ou mais opiniões relativas ao
												mesmo fato ou ao mesmo tema.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Interpretar, em poemas, efeitos produzidos pelo uso de recursos sonoros
												(estrofação, rimas, aliterações etc.) e semânticos (figuras de
												linguagem, por exemplo).
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Articular a linguagem verbal com outras linguagens (fotografias,
												ilustrações etc.).
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estabelecer relações entre textos e entre linguagens artísticas.
											</p>
										</div>
									</div>

									<!-- PT -->
									<div class="content pb-30 pt-10">
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;; ">
												Produção de texto:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Atender ao gênero de texto proposto, considerando seus elementos
												constituintes (quanto ao conteúdo temático, à construção composicional e
												ao estilo).
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Ater-se ao tema proposto e desenvolvê-lo.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Selecionar e relacionar adequadamente informações e argumentos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Utilizar recursos expressivos de forma adequada e articulada levando em
												conta os efeitos de sentido pretendidos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Manter a coerência textual, inclusive na atribuição de título.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Segmentar adequadamente o texto em parágrafos e períodos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estabelecer relações entre as partes do texto, evitando repetições e
												usando adequadamente elementos coesivos que contribuam para sua
												continuidade.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Grafar corretamente as palavras, obedecendo às normas da língua padrão.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Utilizar adequadamente a pontuação: no fim e no meio de frases; para
												isolar aposto, vocativo e adjunto adverbial antecipado.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Utilizar adequadamente os mecanismos básicos de concordância verbal e
												nominal.
											</p>
										</div>
									</div>

									<!-- CE -->
									<div class="content pb-30 pt-10">
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;; ">
												Conteúdo específico:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Linguagem e língua.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Variedades linguísticas.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Teoria da comunicação e funções da linguagem.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Denotação/conotação.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estrutura e formação de palavras.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Noções de fonologia: fonemas, vogal, semivogal, dígrafo etc.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Gêneros literários: épico, lírico e dramático.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Escolas literárias − contexto de produção, temas, recursos expressivos e
												expoentes: Trovadorismo, Humanismo e Classicismo.
											</p>
										</div>
									</div>

									<!-- MATEMATICA -->
									<div class="content pb-30 pt-10">
										<!-- Números -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Números e Funções:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Funções de 1º e de 2º graus: gráficos, raízes, propriedades.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Resolução de situações-problema envolvendo funções de 1º e de 2º graus.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Inequações-produto e inequações-quociente.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Funções definidas por partes.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Equações e inequações modulares.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Funções exponencial e logarítmica.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Resolução de problemas envolvendo funções logarítmicas e/ou
												exponenciais.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Progressões aritmética e geométrica.
											</p>
										</div>
										<!-- Geometria/Trigonometria -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;">
												Geometria/Trigonometria:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Relações métricas nos triângulos retângulos, teorema de Pitágoras.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Razões trigonométricas nos triângulos retângulos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Resolução de triângulos quaisquer, lei dos senos e lei dos cossenos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Inscrição e circunscrição de polígonos regulares.
											</p>
										</div>
										<!-- Noções de estatística -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Noções de estatística:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Construção, leitura e interpretação de dados representados em tabelas
												e/ou gráficos estatísticos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Cálculo e interpretação da média de um conjunto de valores discretos.
											</p>
										</div>
									</div>

									<!-- INGLêS -->
									<div class="content pb-30 pt-10">
										<!-- Reading Comprehension: -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Reading Comprehension:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Compreensão de ideias principais e de vocabulário contextualizado em
												textos diversos;
											</p>
										</div>
										<!-- Use of English:  -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Use of English:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Reconhecimento e uso comunicativo da gramática da língua inglesa em
												textos que contextualizem os seguintes tópicos:
											</p>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500"> Verb Tenses:</h4>
												<div style="padding-left: 24px">
													<li><span>Simple Present.</span></li>
													<li><span>Present Continuous.</span></li>
													<li><span>Present Perfect.</span></li>
													<li><span>Present Perfect Continuous.</span></li>
													<li><span>Simple Past.</span></li>
													<li><span>Past Continuous.</span></li>
													<li><span>Past Perfect.</span></li>
													<li><span>Past Perfect Continuous.</span></li>
													<li><span>Be used to/get used to.</span></li>
													<li><span>Passive Voice: present and past.</span></li>
													<li><span>Causative Form.</span></li>
													<li><span>Future Tense (will, going to, present continuous
															asfuture).</span></li>
													<li><span>Modal Verbs.</span></li>
													<li><span>Question Tags.</span></li>
													<li><span>Verbs and prepositions followed by gerund.</span></li>
												</div>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500"> Adjectives:</h4>
												<div style="padding-left: 24px">
													<li><span>Comparative and Superlative Forms</span></li>
												</div>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Indefinite pronouns</h4>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Prepositions</h4>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Conditionals:</h4>
												<div style="padding-left: 24px">
													<li><span>First, Second and Third</span></li>
												</div>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Reported Speech</h4>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Phrasal Verbs</h4>
											</div>
										</div>
										<!-- Writing:  -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Writing:</h4>
											<p style="padding-left: 20px; margin-top: 8px;">
												Produção de texto cujos critérios de avaliação são:
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												ater-se ao tema proposto e desenvolvê-lo;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												atender ao gênero de texto proposto (organização textual e registro);
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												manter a coerência textual no desenvolvimento do texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												utilizar corretamente as estruturas gramaticais e vocabulário, incluindo
												ortografia.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- 3 ANO -->
						<div class="admission-subAccordion calendario">
							<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
								<div class="max-w-5xl mx-auto">
									<div class="open-admission-subAccordion flex items-center justify-between py-20 border-b border-tag-200">
										<h3 style="font-weight: 500;" class="text-xl leading-tight">3º ano Ensino Médio
										</h3>
										<div class="open-button ml-30">
											<div class="stick"></div>
											<div class="stick"></div>
										</div>
									</div>

									<div class="content pb-30 pt-10">
										<!-- LP -->
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;; ">
												Leitura:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Selecionar procedimentos de leitura adequados.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Inferir o sentido de uma palavra ou expressão.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Localizar informações explícitas em um texto.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Inferir uma informação implícita em um texto.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estabelecer relações entre partes de um texto, identificando repetições
												ou substituições que contribuam para sua continuidade.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identificar relações lógico-discursivas presentes no texto, marcadas por
												conjunções, advérbios etc.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Reconhecer o efeito de sentido decorrente do uso da pontuação, da
												escolha de determinadas palavras e expressões, da ordem das informações
												etc.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identificar efeitos de ironia ou humor em textos variados.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Relacionar o texto com suas condições de produção: gênero, formas de
												circulação, objetivos etc.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identificar o tema de um texto.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Identificar a tese de um texto argumentativo.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estabelecer relação entre a tese e os argumentos oferecidos para
												sustentá-la.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Distinguir um fato da opinião relativa a esse fato.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Reconhecer posições distintas entre duas ou mais opiniões relativas ao
												mesmo fato ou ao mesmo tema.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Interpretar, em poemas, efeitos produzidos pelo uso de recursos sonoros
												(estrofação, rimas, aliterações etc.) e semânticos (figuras de
												linguagem, por exemplo).
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Articular a linguagem verbal com outras linguagens (fotografias,
												ilustrações etc.).
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estabelecer relações entre textos e entre linguagens artísticas.
											</p>
										</div>
									</div>

									<!-- PT -->
									<div class="content pb-30 pt-10">
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;; ">
												Produção de texto:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Atender ao gênero de texto proposto, considerando seus elementos
												constituintes (quanto ao conteúdo temático, à construção composicional e
												ao estilo).
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Ater-se ao tema proposto e desenvolvê-lo.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Selecionar e relacionar adequadamente informações e argumentos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Utilizar recursos expressivos de forma adequada e articulada levando em
												conta os efeitos de sentido pretendidos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Manter a coerência textual, inclusive na atribuição de título.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Segmentar adequadamente o texto em parágrafos e períodos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Estabelecer relações entre as partes do texto, evitando repetições e
												usando adequadamente elementos coesivos que contribuam para sua
												continuidade.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Grafar corretamente as palavras, obedecendo às normas da língua padrão.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Utilizar adequadamente a pontuação: no fim e no meio de frases; para
												isolar aposto, vocativo e adjunto adverbial antecipado.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Utilizar adequadamente os mecanismos básicos de concordância verbal e
												nominal.
											</p>
										</div>
									</div>

									<!-- CE -->
									<div class="content pb-30 pt-10">
										<div>
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;; ">
												Conteúdo específico:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Linguagem e língua.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Variedades linguísticas.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Teoria da comunicação e funções da linguagem.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Classes de palavras: identificação, flexão e emprego.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Gêneros literários: épico, lírico e dramático.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Escolas literárias - contexto de produção, temas e expoentes: Barroco,
												Arcadismo, Romantismo e Realismo-Naturalismo.
											</p>
										</div>
									</div>

									<!-- MATEMATICA -->
									<div class="content pb-30 pt-10">
										<!-- Números -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Números e Funções:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Funções exponencial e logarítmica: definição, propriedades, gráficos,
												equações e inequações.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Resolução de situações-problema envolvendo funções logarítmicas e/ou
												exponenciais.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Progressões aritmética e geométrica.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Matrizes: operações e propriedades.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Cálculo de determinantes de matrizes 2x2 e 3x3.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Resolução e discussão de sistemas lineares 2x2 e 3x3.
											</p>
										</div>
										<!-- Geometria/Trigonometria -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px;">
												Geometria/Trigonometria:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Medida de arcos e ângulos, circunferência trigonométrica.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Funções trigonométricas: seno, cosseno e tangente.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Equações e inequações com seno, cosseno e tangente.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Posições relativas entre retas, retas e planos, planos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Principais poliedros: prismas e pirâmides.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Corpos redondos: cilindros e cones.
											</p>
										</div>
										<!-- Tratamento de informação -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Tratamento de informação</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Probabilidades: simples, condicional e binomial.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Análise combinatória: casos de agrupamentos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Triângulo de Pascal e binômio de Newton.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" '' height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Construção, leitura e interpretação de dados representados em tabelas
												e/ou gráficos estatísticos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Cálculo e interpretação da média, da mediana e da moda de um conjunto de
												valores discretos.
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Cálculo e interpretação de medidas de dispersão: variância e desvio
												padrão.
											</p>
										</div>
									</div>


									<!-- INGLêS -->
									<div class="content pb-30 pt-10">
										<!-- Reading Comprehension: -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Reading Comprehension:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Compreensão de ideias principais e de vocabulário contextualizado em
												textos diversos;
											</p>
										</div>
										<!-- Use of English:  -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Use of English:</h4>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												Reconhecimento e uso comunicativo da gramática da língua inglesa em
												textos que contextualizem os seguintes tópicos:
											</p>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500"> Verb Tenses:</h4>
												<div style="padding-left: 24px">
													<li><span>Simple Present.</span></li>
													<li><span>Present Continuous.</span></li>
													<li><span>Present Perfect.</span></li>
													<li><span>Present Perfect Continuous.</span></li>
													<li><span>Simple Past.</span></li>
													<li><span>Past Continuous.</span></li>
													<li><span>Past Perfect.</span></li>
													<li><span>Past Perfect Continuous.</span></li>
													<li><span>Be used to/get used to.</span></li>
													<li><span>Passive Voice: present and past.</span></li>
													<li><span>Causative Form.</span></li>
													<li><span>Future Tense (will, going to, present continuous as
															future).</span></li>
													<li><span>Modal Verbs.</span></li>
													<li><span>Question Tags.</span></li>
													<li><span>Verbs and prepositions followed by gerund.</span></li>
												</div>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500"> Adjectives:</h4>
												<div style="padding-left: 24px">
													<li><span>Comparative and Superlative Forms</span></li>
												</div>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Indefinite pronouns</h4>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Prepositions</h4>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Conditionals:</h4>
												<div style="padding-left: 24px">
													<li><span>First, Second and Third</span></li>
												</div>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Reported Speech</h4>
											</div>
											<div style="padding-left: 56px; margin-top: 12px">
												<h4 class="fw-500">Phrasal Verbs</h4>
											</div>
										</div>
										<!-- Writing:  -->
										<div style="margin-top: 24px;">
											<h4 style="font-size: 18px; font-weight: 500; line-height: 120%; padding-left: 20px">
												Writing:</h4>
											<p style="padding-left: 20px; margin-top: 8px;">
												Produção de texto cujos critérios de avaliação são:
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												ater-se ao tema proposto e desenvolvê-lo;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												atender ao gênero de texto proposto (organização textual e registro);
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												manter a coerência textual no desenvolvimento do texto;
											</p>
											<p class="itemsFlex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_1758_48116)">
														<path d="M14.6007 16.5C15.4071 16.5 16.0677 15.845 15.9944 15.0419C15.8477 13.4327 15.4587 11.8519 14.8382 10.3538C14.0311 8.40523 12.8481 6.6347 11.3567 5.14332C9.8653 3.65194 8.09477 2.46891 6.14619 1.66178C4.64811 1.04126 3.06734 0.652256 1.45808 0.505553C0.655032 0.432346 -3.52475e-08 1.09293 0 1.8993L5.74395e-07 15.0399C6.09643e-07 15.8463 0.653696 16.5 1.46007 16.5H14.6007Z" fill="black" />
													</g>
													<defs>
														<clipPath id="clip0_1758_48116">
															<rect width="16" height="17" fill="white" />
														</clipPath>
													</defs>
												</svg>
												utilizar corretamente as estruturas gramaticais e vocabulário, incluindo
												ortografia.
											</p>
										</div>
									</div>

								</div>
							</div>
						</div>
					<?php endif; ?>				
					</div>

				</div>
			</div>
		</div>	
	<?php endif; ?>

	<section class="callToActionIngresso" style="background-color: <?php if ($isInfantil) : ?> #FFD200 <?php elseif ($isFundamental) : ?> #FF8600 <?php elseif ($isMedio) : ?> #0EADAD <?php endif; ?>">
		<div class="callToActionIngresso__item">
			<div class="callToActionIngresso__items">
				<h2>Processo de Ingresso</h2>
				<p>Estude na Móbile
					<span>
						<svg class="arrowEffectBottom" xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
							<path d="M10.8929 21L19.5533 12.0001C20.1489 11.3813 20.1489 10.6187 19.5533 9.99985L10.8929 1" stroke="#2C2C2C" stroke-width="1.5" />
							<line y1="-0.75" x2="20" y2="-0.75" transform="matrix(-1 2.69487e-07 2.55243e-07 1 20 12.1987)" stroke="#2C2C2C" stroke-width="1.5" />
						</svg>
					</span>
				</p>
			</div>
			<div class="btnCallToAction flex justify-start text-sm lg:text-md">
				<a href="/inscricao" class="p-lr bg-dark h-60 duration-300 text-white rounded-full flex justify-start items-center">
					<span class="textMobileCallToAction">Inscrições aqui</span>
				</a>
			</div>
		</div>
	</section>
	<?php
	get_footer();