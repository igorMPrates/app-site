<div id="ciclos" class="w-full flex items-center section bg-background education-wrapper mb-72 mt-0">
	<div class="container mx-auto flex flex-col alignCenterItems lg:flex-row justify-between space-y-30 lg:space-y-0 lg:space-x-20 px-20 text-4xl leading-none">
		<div class="item">
			<?php $link = get_field( 'ensino_infantil_link' ); ?>
			<a class="arrow-hover" href="<?php echo $link ? $link : get_home_url() . '/educacao-infantil'; ?>">
				<div class="flex flex-col items-center justify-start">
					<img class="w-full h-auto max-w-md" src="<?php echo get_field( 'educacao_infantil_image' ); ?>" alt="">
					<div class="flex items-center">
						<p class="hover:underline">Educação<br>Infantil</p>
						<svg class="ml-10" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M22.1188 1.96569L39.0571 19.0962C40.2219 20.2743 40.2219 21.7256 39.0571 22.9037L22.1188 40.0342" stroke="#2C2C2C" stroke-width="3" />
							<line x1="39.9297" y1="20.5316" x2="0.813427" y2="20.5316" stroke="#2C2C2C" stroke-width="3" />
						</svg>
					</div>
				</div>
			</a>
		</div>

		<div class="item">
			<?php $link = get_field( 'ensino_fundamental_link' ); ?>
			<a class="arrow-hover" href="<?php echo $link ? $link : get_home_url() . '/ensino-fundamental'; ?>">
				<div class="flex flex-col items-center justify-start">
					<img class="w-full h-auto max-w-md" src="<?php echo get_field( 'imagem_ensino_fundamental' ); ?>" alt="">
					<div class="flex items-center">
						<p>Ensino<br>Fundamental</p>
						<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M22.1188 1.96569L39.0571 19.0962C40.2219 20.2743 40.2219 21.7256 39.0571 22.9037L22.1188 40.0342" stroke="#2C2C2C" stroke-width="3" />
							<line x1="39.9297" y1="20.5316" x2="0.813427" y2="20.5316" stroke="#2C2C2C" stroke-width="3" />
						</svg>
					</div>
				</div>
			</a>
		</div>

		<div class="item">
			<?php $link = get_field( 'ensino_medio_link' ); ?>
			<a class="arrow-hover" href="<?php echo $link ? $link : get_home_url() . '/ensino-medio'; ?>">
				<div class="flex flex-col items-center justify-start">
					<img class="w-full h-auto max-w-md" src="<?php echo get_field( 'imagem_ensino_medio' ); ?>" alt="">
					<div class="flex items-center">
						<p>Ensino<br>Médio</p>
						<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M22.1188 1.96569L39.0571 19.0962C40.2219 20.2743 40.2219 21.7256 39.0571 22.9037L22.1188 40.0342" stroke="#2C2C2C" stroke-width="3" />
							<line x1="39.9297" y1="20.5316" x2="0.813427" y2="20.5316" stroke="#2C2C2C" stroke-width="3" />
						</svg>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

