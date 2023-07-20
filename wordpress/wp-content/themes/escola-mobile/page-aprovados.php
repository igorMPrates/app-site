<?php

/**
 * The aproveds page
 *
 * @author Nucleus
 * @since 1.0.0
 *
 * @package Nucleus
 */

namespace WL;

$international = isset( $_GET['international'] ) ? '?estrangeira=1' : null;
$anoAprovacao = isset( $_GET['anoAprovacao'] ) ? $_GET['anoAprovacao'] : '2022';
$url           = 'http://api.escolamobile.com.br/aprovacoes/' . $anoAprovacao . $international;
$anoAprovacaoStudent = isset( $_GET['anoAprovacaoStudent'] ) ? $_GET['anoAprovacaoStudent'] : $anoAprovacao;
$dateAproved = "http://api.escolamobile.com.br/aprovacoes/porcentagem?anoaprovacao=" . $anoAprovacaoStudent;
$response      = wp_remote_get( $url );
$response      = json_decode( wp_remote_retrieve_body( $response ) );
$responseAproved      = wp_remote_get( $dateAproved );
$responseAproved      = json_decode( wp_remote_retrieve_body( $responseAproved ) );



$list = array();
if ( ! empty( $_GET['p'] ) ) {
	foreach ( $response as $aproved ) {
		$search_param = strtolower( $_GET['p'] );
		$name         = strtolower( $aproved->aluno );
		$ra           = strtolower( $aproved->ra );
		$ano          = strtolower( $aproved->anoformacao );
		$instituicao  = strtolower( $aproved->instituicao );
		$curso        = strtolower( $aproved->curso );

		if ( strpos( $name, $search_param ) !== false || strpos( $ra, $search_param ) !== false || strpos( $ano, $search_param ) !== false || strpos( $instituicao, $search_param ) !== false || strpos( $curso, $search_param ) !== false ) {
			$list[] = $aproved;
		}
	}
}
$list = empty( $list ) ? $response : $list;

get_header();

?>

<?php the_content(); ?>

<?php
/**
 * Static page
 */
if ( isset( $_GET['international'] ) ) :
	?>
	<div class="container mx-auto px-20 lg:px-0">

		<button class="before-button flex items-center focus:outline-none hover:underline">
			<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M7.48624 0.999998L0.36717 8.19988C-0.122388 8.695 -0.122387 9.305 0.36717 9.80012L7.48624 17" stroke="#2C2C2C" stroke-width="1.5" />
				<line y1="-0.75" x2="16.4404" y2="-0.75" transform="matrix(1 -2.62268e-07 -2.62268e-07 -1 0 8.04102)" stroke="#2C2C2C" stroke-width="1.5" />
			</svg>
			<div class="ml-10">Voltar</div>
		</button>

		<div class="max-w-4xl mx-auto">
			<?php
			$title = isset( $_GET['international'] ) ? 'Estudos Internacionais' : 'Alunos aprovados';
			?>
			<h1 class="text-4xl lg:text-5xl font-bold text-center leading-tight mt-20 mb-48">Universidades onde nossos alunos e alunas foram aprovados</h1>
		</div>

	</div>

	<div>
		<div class="pt-32 px-20 lg:px-0 flex flex-col md:flex-row justify-between max-w-5xl mx-auto">

			<div>
				<div class="pb-8 border-b border-dark">
					<h1 class="text-lg font-light font-semibold">Alemanha</h1>
					<p class="text-lg font-light font-light">Technische Hochschule Nürnberg Georg Simon Ohm</p>
				</div>
				<div class="pb-8 border-b border-dark">
					<h1 class="mt-13 text-lg font-light font-semibold">Canadá</h1>
					<p class="text-lg font-light font-light">McGill University</p>
					<p class="text-lg font-light font-light">The Art Institute of Vancouver</p>
					<p class="text-lg font-light font-light">University of British Columbia</p>
				</div>
				<div class="pb-8">
					<h1 class="mt-13 text-lg font-light font-semibold">França</h1>
					<p class="text-lg font-light font-light">American University of Paris</p>
				</div>
			</div>

			<div class="w-full border-b border-dark bg-dark block md:hidden bm-13"></div>

			<div class="flex flex-col justify-start w-full md:w-1/3 items-start">
				<div class="pb-8">
					<h1 class="text-lg font-light font-semibold">Holanda</h1>
					<p class="text-lg font-light font-light">Delft University of Technology</p>
					<p class="text-lg font-light font-light">University of Amsterdam</p>
					<p class="text-lg font-light font-light">University of Technology Eindhoven</p>
				</div>
				<div class="w-full border-b border-dark bg-dark"></div>
				<div class="pb-8">
					<h1 class="mt-13 text-lg font-light font-semibold">Portugal</h1>
					<p class="text-lg font-light font-light">Universidade de Coimbra</p>
					<p class="text-lg font-light font-light">Universidade de Lisboa</p>
					<p class="text-lg font-light font-light">Universidade do Algarve</p>
					<p class="text-lg font-light font-light">Universidade do Porto</p>
				</div>
				<div class="w-full border-b border-dark bg-dark"></div>
				<div>
					<h1 class="mt-13 text-lg font-light font-semibold">Reino Unido</h1>
					<p class="text-lg font-light font-light">University of the Arts London</p>
				</div>
			</div>
		</div>
		<div class="px-20 lg:px-0">
			<div class="max-w-5xl mx-auto w-full border-b border-dark bg-dark mt-13"></div>
		</div>
		<div class="pb-48 pt-32 px-20 lg:px-0 flex justify-between max-w-5xl mx-auto m-0">
			<div class="flex flex-col md:flex-row w-full justify-between">
				<div>
					<h1 class="text-lg font-light font-semibold">Estados Unidos</h1>
					<p class="mt-13 text-lg font-light font-light">Alfred University</p>
					<p class="text-lg font-light font-light">Babson College</p>
					<p class="text-lg font-light font-light">Barnard College</p>
					<p class="text-lg font-light font-light">Bentley University</p>
					<p class="text-lg font-light font-light">Bentley University</p>
					<p class="text-lg font-light font-light">Berklee College of Music</p>
					<p class="text-lg font-light font-light">Boston College</p>
					<p class="text-lg font-light font-light">Boston University</p>
					<p class="text-lg font-light font-light">Brandeis University</p>
					<p class="text-lg font-light font-light">Briar Cliff University</p>
					<p class="text-lg font-light font-light">Columbia University</p>
					<p class="text-lg font-light font-light">Curry College</p>
					<p class="text-lg font-light font-light">Embry-Riddle Aeronautical University</p>
					<p class="text-lg font-light font-light">Emerson College</p>
					<p class="text-lg font-light font-light">Emory University, Oxford College</p>
					<p class="text-lg font-light font-light">Denver University</p>
					<p class="text-lg font-light font-light">DePaul University</p>
					<p class="text-lg font-light font-light">Doane University</p>
					<p class="text-lg font-light font-light">Duke University</p>
					<p class="text-lg font-light font-light">Florida International University</p>
					<p class="text-lg font-light font-light">Fordham University</p>
					<p class="text-lg font-light font-light">Georgetown University</p>
					<p class="text-lg font-light font-light">Georgia Institute of Technology</p>
					<p class="text-lg font-light font-light">Lee Strasberg Theatre and Film Institute</p>
					<p class="text-lg font-light font-light">Loyola Marymount University</p>
					<p class="text-lg font-light font-light">Miami Dade College</p>
					<p class="text-lg font-light font-light">Michigan State University</p>
					<p class="text-lg font-light font-light">Morningside College</p>
					<p class="text-lg font-light font-light">New England Institute of Technology</p>
					<p class="text-lg font-light font-light">New School of Jazz</p>
					<p class="text-lg font-light font-light">New York University</p>
					<p class="text-lg font-light font-light">North Carolina State University</p>
					<p class="text-lg font-light font-light">Northwestern University</p>
					<p class="text-lg font-light font-light">Pace University</p>
					<p class="text-lg font-light font-light">Pomona College</p>
					<p class="text-lg font-light font-light">Purdue University</p>
					<p class="text-lg font-light font-light">Relativity School</p>
				</div>
				<div class="flex flex-col justify-start w-1/3 items-start">
					<p class="md:mt-40 text-lg font-light font-light">Richmond University</p>
					<p class="text-lg font-light font-light">Saint John's University</p>
					<p class="text-lg font-light font-light">Santa Clara University</p>
					<p class="text-lg font-light font-light">Sarah Lawrence College</p>
					<p class="text-lg font-light font-light">Savannah College of Arts and Design</p>
					<p class="text-lg font-light font-light">School of the Art Institute of Chicago</p>
					<p class="text-lg font-light font-light">Skidmore University</p>
					<p class="text-lg font-light font-light">Suffolk University</p>
					<p class="text-lg font-light font-light">Syracuse University</p>
					<p class="text-lg font-light font-light">The American Academy of Dramatic Arts</p>
					<p class="text-lg font-light font-light">The George Washington University</p>
					<p class="text-lg font-light font-light">The New School</p>
					<p class="text-lg font-light font-light">The Pennsylvania State University</p>
					<p class="text-lg font-light font-light">Tulane University</p>
					<p class="text-lg font-light font-light">University of California, Los Angeles</p>
					<p class="text-lg font-light font-light">University of California, San Diego</p>
					<p class="text-lg font-light font-light">University of California, Santa Barbara</p>
					<p class="text-lg font-light font-light">University of California, Santa Cruz</p>
					<p class="text-lg font-light font-light">University of Chicago</p>
					<p class="text-lg font-light font-light">University of Colorado - Boulder</p>
					<p class="text-lg font-light font-light">University of Dallas</p>
					<p class="text-lg font-light font-light">University of Delaware</p>
					<p class="text-lg font-light font-light">University of Denver</p>
					<p class="text-lg font-light font-light">University of Illinois Chicago</p>
					<p class="text-lg font-light font-light">University of Illinois Urbana - Champaign</p>
					<p class="text-lg font-light font-light">University of Michigan</p>
					<p class="text-lg font-light font-light">University of Minnesota</p>
					<p class="text-lg font-light font-light">University of North Carolina School of the Arts</p>
					<p class="text-lg font-light font-light">University of Notre Dame</p>
					<p class="text-lg font-light font-light">University of Pennsylvania</p>
					<p class="text-lg font-light font-light">University of Rochester</p>
					<p class="text-lg font-light font-light">University of Richmond</p>
					<p class="text-lg font-light font-light">University of Southern California</p>
					<p class="text-lg font-light font-light">University of Virginia</p>
					<p class="text-lg font-light font-light">University of Wisconsin-Platteville</p>
					<p class="text-lg font-light font-light">Virginia Tech</p>
					<p class="text-lg font-light font-light">Worcester Polytechnic Institute</p>
				</div>

			</div>

		</div>
	</div>
	<?php
endif;
/**
 * / Static page
 */
?>

<?php
/**
 * Dinamic page
 */
if ( ! isset( $_GET['international'] ) ) :
	?>
	<div class="container mx-auto px-20 lg:px-0">

		<button class="before-button flex items-center focus:outline-none hover:underline">
			<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M7.48624 0.999998L0.36717 8.19988C-0.122388 8.695 -0.122387 9.305 0.36717 9.80012L7.48624 17" stroke="#2C2C2C" stroke-width="1.5" />
				<line y1="-0.75" x2="16.4404" y2="-0.75" transform="matrix(1 -2.62268e-07 -2.62268e-07 -1 0 8.04102)" stroke="#2C2C2C" stroke-width="1.5" />
			</svg>
			<div class="ml-10">Voltar</div>
		</button>

		<!-- FIXME: AJUSTAR FILTRO DE BUSCA -->
		<div style="max-width: 1024px; margin: 0 auto;">
			<?php
			$title = isset( $_GET['international'] ) ? 'Estudos Internacionais' : 'Alunos aprovados';
			?>
			<h1 class="text-4xl lg:text-5xl font-bold text-center leading-tight mt-20 mb-48">Alunos aprovados</h1>

			<div class="form-item">
				<label>
					Filtrar por ano de formação:
					<br>
					<span class="wpcf7-form-control-wrap assunto">
						<select name="filtroAnoAprovados" class=" form-control" aria-required="true" aria-invalid="false">
							<?php
								for($i = 0; $i <= 20; $i++) :
								$ano = 2022 - $i;
							?>
								<option value="<?php echo $ano; ?>" <?php if($anoAprovacao == $ano) echo 'selected'; ?>><?php echo $ano; ?></option>
							<?php endfor; ?>
						</select>
						<!-- <h4 style="margin-top: 12px; font-weight: bold;">*ingresso após 1º semestre</h4> -->
					</span>
					<br>
				</label>
			</div>
		</div>

		<div class="max-w-5xl mx-auto w-full" style="margin-top: 48px">
			<table id="approved-table" class="w-full hidden md:block">
				<thead>
					<tr class="border-b border-dark">
						<td class="px-20 py-20 text-lg font-light leading-none font-semibold w-3/12">Nome do aluno</td>
						<td class="px-20 py-20 text-lg font-light leading-none font-semibold w-2/12">Ano de Formação<br>na Mobile</td>
						<!-- <td class="px-20 py-20 text-lg font-light leading-none font-semibold w-1/12">Ano de<br>Aprovação</td> -->
						<td class="px-20 py-20 text-lg font-light leading-none font-semibold w-2/12">Curso escolhido</td>
						<td class="px-20 py-20 text-lg font-light leading-none font-semibold w-2/12">Faculdade</td>
					</tr>
				</thead>
				<tbody>
					<?php
					$index = 0;
					foreach ( $list as $aproved ) :
						$index++;
						?>
						<tr class="border-b border-gray-400 works-items list-works-<?php echo $index; ?>">
							<td class="px-20 py-20 font-light leading-none"><?php echo $aproved->aluno; ?></td>
							<td class="px-20 py-20 font-light leading-none"><?php echo $aproved->anoformacao; ?></td>
							<!-- <td class="px-20 py-20 font-light leading-none"><?php echo $aproved->anoingressouniversiadade; ?></td> -->
							<td class="px-20 py-20 text-sm font-light leading-none font-semibold"><?php echo $aproved->curso; ?></td>
							<td class="px-20 py-20 font-light leading-none"><?php echo $aproved->instituicao; ?></td>
						</tr>
						<?php
					endforeach;
					?>
				</tbody>
			</table>

			<div class="md:hidden">
				<?php
				$index = 0;
				foreach ( $list as $aproved ) :
					$index++;
					?>
					<div class="list-works-<?php echo $index; ?>">
						<div class="border-b border-gray-400 py-10">
							<p class=""><?php echo $aproved->aluno; ?></p>
							<p class="">Ano de formação: <?php echo $aproved->anoformacao; ?></p>
							<p class="">Ano de aprovação: <?php echo $aproved->anoingressouniversiadade; ?></p>
							<p class="font-semibold"><?php echo $aproved->curso; ?></p>
							<p class=""><?php echo $aproved->instituicao; ?></p>
						</div>
					</div>
					<?php
				endforeach;
				?>
			</div>
			
		</div>

		<div class="studentAprove" style=" max-width: 1024px; margin: 0 auto; padding: 48px 0px">
			<div class="student-item" style="background: #F0F0F0; border-left: 4px solid #050505; padding: 24px 32px; max-width: 72%">
				<div style="display: flex; justify-content: center; flex-direction: column">
					<h3 style="color: #050505; font-weight: bold; font-size: 22px; line-height: 110%">Porcentagem total de aprovados em <?php echo $responseAproved[0]->anoformacao; ?>: <?php echo $responseAproved[0]->porcentagemdeaprovados; ?>%</h3>
					<p style="font-size: 16px; font-weight: 400; line-height: 140%; color: #2c2b2d; margin-top: 8px">Total de alunos(as) na turma: <?php echo $responseAproved[0]->totalalunos; ?></p>
					<p style="font-size: 16px; font-weight: 400; line-height: 140%; color: #2c2b2d; margin-top: 4px">Total de alunos(as) aprovados(as): <?php echo $responseAproved[0]->totalalunosingressantes; ?></p>
					<span style="margin-top: 12px; font-size: 18px; font-weight: 500; color: #1D4ED8;">*Ingresso após 1º semestre de <?php echo $responseAproved[0]->anoformacao; ?></span>
				</div>
			</div>
		</div>

	</div>
	<?php
endif;
/**
 * / Dinamic page
 */
?>

<?php

get_footer();
