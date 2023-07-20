<div id="step-4" class="ingresso-step w-full text-center mb-30 hidden">
	<p class="text-lg lg:text-2xl max-w-lg mx-auto">Confirme abaixo em sua agenda as opções de reunião escolhidas por você:</p>

	<div id="aluno-wrapper"></div>

	<p class="mx-auto text-lg text-center font-bold mt-30">Você receberá um e-mail de confirmação com todas as datas e informações escolhidas por você acima.</p>
	<p class="max-w-4xl mx-auto text-lg lg:text-xl text-center mt-15">Após a reunião de apresentação, nossa equipe entrará em contato com você para continuar nosso processo seletivo. Fique atento ao seu e-mail, ok?</p>
</div>

<div id="aluno-template" class="hidden">
	<div class="w-full rounded-base px-5 lg:px-30 py-30 bg-white text-left mt-20">
		<div class="flex flex-col lg:flex-row">
			<div class="w-full lg:w-1/3 mb-20 lg:mb-0">
				<h3 class="text-2xl lg:text-3xl font-semibold uppercase leading-none text-black mr-64 candidate-name">Nome do candidato</h3>
				<p class="text-lg lg:text-xl font-semibold candidate-serie mt-5 mr-20">6ª Série em <?php echo gmdate( 'Y' ); ?></p>
			</div>
			<div class="w-full lg:w-2/3">
				<div class="periodo-wrapper"></div>
			</div>
		</div>
	</div>
</div>

<div id="periodo-template" class="hidden">
	<div class="rounded-lg overflow-hidden mb-15 periodo-parcial">
		<div class="bg-dark text-white px-20 py-5">
			<p class="uppercase text-sm periodo-title">Período Parcial</p>
		</div>
		<div class="bg-background flex flex-wrap p-20">
			<div class="w-1/2 lg:w-1/3">
				<p class="text-sm mb-5 uppercase">QUANDO:</p>
				<p class="font-semibold text-lg lg:text-2xl leading-none day-date">31 de maio</p>
				<p class="font-semibold text-sm leading-none mt-5 hour-date">às 8:30am</p>
			</div>
			<div class="w-1/2 lg:w-1/3">
				<p class="underline text-sm mb-5 uppercase meet-type locale-info">Presencialmente:</p>
				<p class="text-sm lg:text-lg font-semibold underline is-online locale-info">Acompanhe online*</p>
				<p class="font-semibold text-lg lg:text-2xl leading-none info-adress locale-info">R. Araguari, 167</p>
				<p class="font-semibold text-sm leading-none mt-5 info-district locale-info">Bairro Moema</p>
			</div>
			<div class="w-full lg:w-1/3 mt-20 lg:mt-0">
				<p class="text-sm text-center">Adicione no seu calendário:</p>
				<div class="flex items-center justify-center space-x-15 mx-auto mt-5">
					<a style="padding: 0 !important; background-color: transparent !important;" href="">
						<svg class="h-48 w-auto" viewBox="0 0 103 104" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="0.5" width="16" height="16" rx="51" fill="none" />
							<path d="M78.1875 52.6562C78.1875 50.9062 77.9688 49.5938 77.75 48.1719H51.9375V57.4688H67.25C66.7031 61.5156 62.6562 69.1719 51.9375 69.1719C42.6406 69.1719 35.0938 61.5156 35.0938 52C35.0938 36.7969 53.0312 29.7969 62.6562 39.0938L70.0938 31.9844C65.3906 27.6094 59.1562 24.875 51.9375 24.875C36.8438 24.875 24.8125 37.0156 24.8125 52C24.8125 67.0938 36.8438 79.125 51.9375 79.125C67.5781 79.125 78.1875 68.1875 78.1875 52.6562Z" fill="#2C2C2C" />
						</svg>
					</a>
					<a style="padding: 0 !important; background-color: transparent !important;" href="">
						<svg class="h-48 w-auto" viewBox="0 0 105 104" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="0.5" width="16" height="16" rx="52" fill="none" />
							<path d="M48.8906 39.5312L42.7656 55.1719L36.6406 39.5312H26.0312L37.625 66.7656L33.4688 76.5H43.75L59.1719 39.5312H48.8906ZM60.4844 54.2969C56.875 54.2969 54.0312 57.1406 54.0312 60.75C54.0312 64.25 56.875 67.0938 60.4844 67.0938C63.9844 67.0938 66.8281 64.25 66.8281 60.75C66.8281 57.1406 63.9844 54.2969 60.4844 54.2969ZM67.5938 27.5L57.4219 52H68.9062L79.0781 27.5H67.5938Z" fill="#2C2C2C" />
						</svg>
					</a>
					<a style="padding: 0 !important; background-color: transparent !important;" href="">
						<svg class="h-48 w-auto" viewBox="0 0 98 104" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="0.5" rx="48.5" fill="none" />
							<path d="M24.5 27.5V51.0156H47.9062V27.5H24.5ZM49.9844 27.5V51.0156H73.5V27.5H49.9844ZM24.5 53.0938V76.5H47.9062V53.0938H24.5ZM49.9844 53.0938V76.5H73.5V53.0938H49.9844Z" fill="#2C2C2C" />
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="not-now-template" class="hidden">
	<div class="rounded-lg overflow-hidden mb-15 periodo-parcial">
		<div class="bg-dark text-white px-20 py-5">
			<p class="uppercase text-sm periodo-title"></p>
		</div>
		<div class="bg-background flex flex-wrap p-20">
			<div>
				<p class="text-sm mb-5 uppercase underline">REUNIÃO DE APRESENTAÇÃO:</p>
				<p class="font-semibold lg:text-lg leading-none underline meet-message"></p>
			</div>
		</div>
	</div>
</div>
