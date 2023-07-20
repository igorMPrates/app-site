<div id="step-1" class="ingresso-step">
    <div class="w-full rounded-lg px-5 lg:px-30 py-30 bg-white mt-20 student-wrapper">
        <h2 class="text-4xl font-bold mb-15">Estudante</h2>
        <div class="grid grid-cols-12 gap-20">
            <div class="col-span-12">
                <label>Nome do candidato*
                    <input class="form-control w-full nome-candidato" placeholder="Nome completo" type="text">
                </label>
            </div>
            <div class="col-span-6">
                <label>Data de nascimento*
                    <input class="form-control date w-full the-birthdate data-nascimento" placeholder="00/00/0000" type="text">
                </label>
            </div>
            <div class="col-span-6 flex flex-col justify-end">
                <label>Série em 2023*
                    <select class="form-control w-full change-serie the-series serie">
                        <option disabled selected>Selecione</option>
                    </select>
                </label>
            </div>
        </div>

        <div class="flex justify-start">
            <label class="flex items-center mt-20">
                <input class="have-brother" name="have_brother" type="checkbox">
                <span class="ml-10">Tem irmão ou irmã que já estuda na Móbile.</span>
            </label>
        </div>

        <p class="mt-48 font-bold">Escolha a(s) reunião(ões) de apresentação do processo pedagógico de que irá participar.*</p>
        <p class="mt-10 font-light">É necessário responder <span class="underline">ao menos um</span> dos campos abaixo para continuar:</p>

        <div class="grid grid-cols-12 gap-20 mt-20">
            <div class="col-span-12 lg:col-span-6 flex flex-col">
                <label>Data da reunião (Período Parcial)
                    <select class="form-control w-full the-avaible-parcial data-parcial">
                        <option selected disabled value="0">Selecione a opção de sua preferência</option>
                        <option value="PRP">Já participei de uma reunião pedagógica</option>
                        <option value="">Não tenho interesse no período Parcial</option>
                    </select>
                </label>
            </div>
            <div class="col-span-12 lg:col-span-6 flex flex-col">
                <label>Data da reunião (Período Integral)
                    <select class="form-control w-full the-avaible-integral data-integral">
                        <option selected disabled value="0">Selecione a opção de sua preferência</option>
                        <option value="PRI">Já participei de uma reunião pedagógica</option>
                        <option value="">Não tenho interesse no período Integral</option>
                    </select>
                </label>
            </div>
        </div>

        <div class="flex justify-start only-new new-student">
            <div class="flex items-center focus:ouline-none mt-48 cursor-pointer">
                <svg class="mr-10" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="8.41992" width="1.45161" height="18" rx="0.725806" fill="#2C2C2C" />
                    <rect x="18" y="7.95361" width="1.45161" height="18" rx="0.725806" transform="rotate(90 18 7.95361)" fill="#2C2C2C" />
                </svg>
                <span class="text-lg">Incluir outro estudante</span>
            </div>
        </div>
    </div>

    <div class="estudantes-container"></div>
</div>

<div id="template-estudante" class="hidden">
    <div class="w-full rounded-lg px-5 lg:px-30 py-30 bg-white mt-20 student-wrapper">
        <h2 class="text-4xl font-bold mb-15">Estudante</h2>
        <div class="grid grid-cols-12 gap-20">
            <div class="col-span-12">
                <label>Nome do candidato*
                    <input class="form-control w-full nome-candidato" placeholder="Nome completo" type="text">
                </label>
            </div>
            <div class="col-span-6">
                <label>Data de nascimento*
                    <input class="form-control date w-full the-birthdate data-nascimento" placeholder="00/00/0000" type="text">
                </label>
            </div>
            <div class="col-span-6 flex flex-col justify-end">
                <label>Série em 2023*
                    <select class="form-control w-full change-serie the-series serie">
                        <option disabled selected>Selecione</option>
                    </select>
                </label>
            </div>
        </div>

        <div class="flex justify-start">
            <label class="flex items-center mt-20">
                <input class="have-brother" name="have_brother" type="checkbox">
                <span class="ml-10">Possui irmão ou irmã que já estude na Móbile</span>
            </label>
        </div>

        <p class="mt-48 font-bold">Escolha quais reuniões de apresentação do processo pedagógico irá participar*</p>
        <p class="mt-10 font-light">É necessário responder <span class="underline">ao menos um</span> dos campos abaixo para continuar:</p>

        <div class="grid grid-cols-12 gap-20 mt-20">
            <div class="col-span-12 lg:col-span-6 flex flex-col">
                <label for="serie text-xs">Data da reunião (Período Parcial)</label>
                <select class="form-control w-full the-avaible-parcial data-parcial">
                    <option selected value="0">Selecione a opção de sua preferência</option>
                    <option value="PRP">Já participei de uma reunião pedagógica</option>
                    <option value="">Não tenho interesse no período Parcial</option>
                    <option value="SRP">Quero me inscrever no Período Parcial mas não quero participar de reunião</option>
                </select>
            </div>
            <div class="col-span-12 lg:col-span-6 flex flex-col">
                <label for="serie text-xs">Data da reunião (Período Integral)</label>
                <select class="form-control w-full the-avaible-integral data-integral">
                    <option selected value="0">Selecione a opção de sua preferência</option>
                    <option value="PRI">Já participei de uma reunião pedagógica</option>
                    <option value="">Não tenho interesse no período Integral</option>
                    <option value="SRI">Quero me inscrever no Período Integral mas não quero participar de reunião</option>
                </select>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row justify-start">
            <div class="flex items-center focus:ouline-none mt-48 cursor-pointer remove-student">
                <svg class="mr-10" width="18" height="2" viewBox="0 0 18 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="18" y="0.27417" width="1.45161" height="18" rx="0.725806" transform="rotate(90 18 0.27417)" fill="#2C2C2C" />
                </svg>
                <span class="text-lg">Excluir estudante</span>
            </div>
            <div class="flex items-center focus:ouline-none mt-15 lg:mt-48 cursor-pointer lg:ml-30 new-student lg:mt-0">
                <svg class="mr-10" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="8.41992" width="1.45161" height="18" rx="0.725806" fill="#2C2C2C" />
                    <rect x="18" y="7.95361" width="1.45161" height="18" rx="0.725806" transform="rotate(90 18 7.95361)" fill="#2C2C2C" />
                </svg>
                <span class="text-lg">Incluir outro estudante</span>
            </div>
        </div>
    </div>
</div>