<?php

/**
 * Template Name: Cotidiano
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

namespace WL;

get_header();

?>


<!-- POPUP CALENDÁRIO -->
<div class="popupCalendar d-none">
	<div class="popupCalendar__item">
		<div class="popupCalendar__item-close">
			<a href="#" class="popupCalendar__closeButton">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M4 16L16 4M4 4L16 16" stroke="#2C2C2C" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>
		</div>
		<div class="popupCalendar__item-content">
		</div>
	</div>
</div>

<?php
if ( have_rows( 'faq' ) ) :
	?>
	<style>
		.containerCotidiano {
			max-width: 1024px;
			margin: 0 auto;
			margin-top: 24px;
			
			padding-bottom: 48px;
			
			text-align: center;
		}
		.containerCotidiano h1{
			font-size: 64px;
    		font-weight: bold;
		}
		.containerCotidiano p{
	    	font-size: 32px;
		}
		@media screen and (max-width: 568px) {
			.containerCotidiano h1 {
				font-size: 32px;
			}
			.containerCotidiano p {
				font-size: 20px;
			}
		}
	</style>
	<div>
        <div class="containerCotidiano">
            <h1>Cotidiano da Escola Móbile</h1>
        </div>
		<!-- <div id="effectScroll" class="admission-accordion calendario">
			<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
				<div class="max-w-5xl mx-auto">

					<div class="open-admission-accordion flex items-center justify-between py-20 border-b border-tag-200">
						<h3 class="text-xl lg:text-2xl leading-tight font-semibold">Calendário</h3>
						<div class="open-button ml-30">
							<div class="stick"></div>
							<div class="stick"></div>
						</div>
					</div>
					<div class="content pb-30 pt-10">
						<div class="contentMainCalendar">
							<div class="contentMainCalendar__item ckeckboxGroupFilter">
							<div>
									<h2 style="font-weight: 600; font-size: 18px">Selecione abaixo	 o(s) ciclo(s) do seu interesse:</h2>
								</div>
								<div class="display-f">
									<input type="checkbox" value="em" class="checkboxCalendar"></input>
									<h6>Ensino Médio</h6>
								</div>
								<div class="display-f">
									<input type="checkbox" value="eii" class="checkboxCalendar"></input>
									<h6>EI - Integral</h6>
								</div>
								<div class="display-f">
									<input type="checkbox" value="eip" class="checkboxCalendar"></input>
									<h6>EI	- Parcial</h6>
								</div>
								<div class="display-f">
									<input type="checkbox" value="ef1i" class="checkboxCalendar"></input>
									<h6>EF1 - Período Integral</h6>
								</div>
								<div class="display-f">
									<input type="checkbox" value="ef1p" class="checkboxCalendar"></input>
									<h6>EF1 - Período Parcial</h6>
								</div>
								<div class="display-f">
									<input type="checkbox" value="ef2i" class="checkboxCalendar"></input>
									<h6>EF2 - Período Integral</h6>
								</div>
								<div class="display-f">
									<input type="checkbox" value="ef2p" class="checkboxCalendar"></input>
									<h6>EF2 - Período Parcial</h6>
								</div>

							</div>
							<div id="calendar"></div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<?php
		while ( have_rows( 'faq' ) ) :
			the_row();
			?>
			<div class="admission-accordion">
				<div class="w-full admission-container cursor-pointer pl-20 lg:pl-0 pr-30 lg:pr-0">
					<div class="max-w-5xl mx-auto">

						<div class="open-admission-accordion flex items-center justify-between py-20 border-b border-tag-200">
							<h3 class="text-xl lg:text-2xl leading-tight font-semibold"><?php the_sub_field( 'titulo' ); ?></h3>
							<div class="open-button ml-30">
								<div class="stick"></div>
								<div class="stick"></div>
							</div>
						</div>
						

						<div class="content pb-30 pt-10">
							<div class="md:pr-136"><?php the_sub_field( 'texto' ); ?></div>

							<?php if ( have_rows( 'list' ) ) : ?>
								<?php
									while ( have_rows( 'list' ) ) :
										the_row();
										$lists = get_sub_field( 'list' );
								?>
									<h4 class="font-bold text-xl mt-48 mb-20"><?php the_sub_field( 'title' ); ?></h4>
									<div class="w-full grid grid-cols-1 <?php echo sizeof( $lists ) > 1 && get_sub_field( 'tipo_de_lista' ) == '4' > 1 ? 'lg:grid-cols-2' : null; ?> gap-20">
										<?php if ( get_sub_field( 'tipo_de_lista' ) == '4' ) : ?>
											<?php foreach ( $lists as $list ) : ?>
												<table class="table-none bg-white rounded-base w-full">
													<?php if ( ! empty( $list['title'] ) ) : ?>
														<tr>
															<th class="py-10 border-b border-gray-300" colspan="4"><?php echo $list['title']; ?></th>
														</tr>
													<?php endif; ?>
													<tr class="text-xs md:text-sm lg:text-lg border-b border-gray-300">
														<th class="py-5 m-auto font-normal">Empresas</th>
														<th class="py-5 m-auto font-normal">Responsáveis</th>
														<th class="py-5 m-auto font-normal">Telefones</th>
														<th class="py-5 m-auto font-normal">E-mail</th>
														<th class="py-5 m-auto font-normal">Bairros Atendidos</th>
													</tr>
													<?php foreach ( $list['items'] as $item ) : ?>
													<tr class="text-xs md:text-sm border-b border-gray-300">
														<th class="py-15 m-auto"><?php echo $item['empresas']; ?></th>
														<th class="py-15 m-auto font-light"><?php echo $item['responsavel']; ?></th>
														<th class="py-15 m-auto font-light"><?php echo $item['telefones']; ?></th>
														<th class="py-15 m-auto font-light"><?php echo $item['mail']; ?></th>
														<th class="py-15 m-auto font-light"><?php echo $item['bairros_atendidos']; ?></th>
													</tr>
													<?php endforeach; ?>
												</table>

												<div class="table-mobile__estudeMobile">
													<div class="table-mobile__Parcial mt-20">
														<?php foreach ( $list['items'] as $item ) : ?>
															<div>
																<h5 class="bg-month text-center bor-radMonth"><?php echo $item['empresas']; ?></h5>
															</div>

															<div>
																<p class="text-center p-mt24"><?php echo $item['responsavel']; ?></p>
																<p class="text-center p-mt24"><?php echo $item['telefones']; ?></p>
																<p class="text-center p-mt24"><?php echo $item['mail']; ?></p>
																<p class="text-center p-mt24 mb-12"><?php echo $item['bairros_atendidos']; ?></p>
															</div>
														<?php endforeach; ?>
													</div>
												</div>
											<?php endforeach; ?>
										<?php elseif ( get_sub_field( 'tipo_de_lista' ) == '2' ) : ?>
											<?php foreach ( $lists as $list ) : ?>
												<table class="table-none bg-white rounded-base w-full">
													<?php if ( ! empty( $list['title'] ) ) : ?>
														<tr>
															<th class="py-10 border-b border-gray-300" colspan="4"><?php echo $list['title']; ?></th>
														</tr>
													<?php endif; ?>
													<tr class="text-xs md:text-sm lg:text-lg border-b border-gray-300">
													</tr>
													<?php foreach ( $list['coluna_dupla'] as $item ) : ?>
														<tr class="text-xs md:text-sm border-b border-gray-300">
															<th class="py-15 m-auto"><?php echo $item['serie']; ?></th>
															<th class="py-15 m-auto font-light"><?php echo $item['idade']; ?></th>
															<th class="py-15 m-auto font-light"><?php echo $item['teste']; ?></th>
													</tr>
													<?php endforeach; ?>
												</table>
												<div class="table-mobile__estudeMobile">
													<div class="table-mobile__Parcial mt-20">
														<?php foreach ( $list['coluna_dupla'] as $item ) : ?>
															<div>
																<h5 class="bg-month text-center bor-radMonth"><?php echo $item['serie']; ?></h5>
															</div>

															<div>
																<p class="text-center p-mt24"><?php echo $item['idade']; ?></p>
																<p class="text-center p-mt24 mb-12"><?php echo $item['teste']; ?></p>
															</div>
														<?php endforeach; ?>
													</div>
												</div>
											<?php endforeach; ?>
										<?php endif; ?>
			

									</div>
								<?php endwhile; ?>
													
							<?php endif; ?>

	

							<div class="md:pr-136 mt-30"><?php the_sub_field( 'bottom_text' ); ?></div>

							<?php if ( get_sub_field( 'ativar_botao' ) ) : ?>
								<div class="flex justify-start mt-30 text-sm lg:text-md">
									<a href="<?php the_sub_field( 'link_botao' ); ?>" target="_BLANK" class="p-25 bg-dark h-80 duration-300 hover:bg-green-100 text-white rounded-full flex justify-start items-center mt-20">
										<span><?php the_sub_field( 'texto_botao' ); ?></span>
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


<?php

get_footer();
