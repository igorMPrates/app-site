<div id="step-2" class="ingresso-step hidden">

    <div class="w-full rounded-lg px-5 lg:px-30 py-30 bg-white mt-20">
        <p class="text-md lg:text-xl mb-20">1. Tem irmão(s) ou irmã(s) que pretende(m) estudar no Período Integral da Móbile em 2022 e que ainda não estuda(m) nela em 2021?
        <p>
        <div class="grid grid-cols-12 gap-20">
            <div class="col-span-12 lg:col-span-8">
                <label for="user_name">Nome do candidato</label>
                <input class="form-control w-full" id="user_name" placeholder="Nome completo" type="text">
            </div>
            <div class="col-span-6 lg:col-span-4 flex flex-col">
                <label for="genero">Gênero</label>
                <select class="form-control w-full" id="genero">
                    <option disabled selected>Selecione</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                    <option>Outro</option>
                </select>
            </div>


            <div class="col-span-6 lg:col-span-4 flex flex-col">
                <label for="nascimento">Data de nascimento</label>
                <input class="the-birthdate form-control w-full date" id="nascimento" placeholder="00/00/0000" type="text">
            </div>
            <div class="col-span-6 lg:col-span-4 flex flex-col">
                <label for="user_serie">Série em 2022</label>
                <select class="the-series form-control w-full" id="user_serie">
                    <option disabled selected>Selecione</option>
                </select>
            </div>
            <div class="col-span-6 lg:col-span-4 flex flex-col">
                <label for="periodo">Período</label>
                <select class="form-control w-full" id="periodo">
                    <option disabled selected>Selecione</option>
                    <option value="">Parcial</option>
                    <option value="">Integral</option>
                </select>
            </div>




        </div>
        <div id="add-brother" class="flex items-center justify-start focus:outline-none mt-30 cursor-pointer max-w-sm">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="8.42188" width="1.45161" height="18" rx="0.725806" fill="#2C2C2C" />
                <rect x="18" y="7.95361" width="1.45161" height="18" rx="0.725806" transform="rotate(90 18 7.95361)" fill="#2C2C2C" />
            </svg>
            <div class="text-lg lg:text-xl ml-15">Incluir Responsável Secundário</div>
        </div>
    </div>

    <div class="w-full rounded-lg px-5 lg:px-30 py-30 bg-white mt-20">
        <p class="text-md lg:text-xl mb-20">2. Selecione uma das opções abaixo relacionadas:
        <p>
        <div class="grid grid-cols-12 gap-20">
            <div class="col-span-6 lg:col-span-4 flex flex-col justify-end">
                <label for="select_op">Agendamento:</label>
                <select class="the-avaible-dates form-control w-full" id="select_op">
                    <option disabled selected>Selecione</option>
                </select>
            </div>
        </div>
    </div>

    <div class="news-parents">
    </div>
</div>

<div id="new-brother-template" class="hidden">
    <div id="brother" class="w-full rounded-lg px-5 lg:px-30 py-30 bg-white mt-20">
        <div class="grid grid-cols-12 gap-20">
            <div class="col-span-12 lg:col-span-3 flex flex-col">
                <label>Relação
                    <input class="relacao relacao-new-relacao form-control w-full" placeholder="Ex: Irmão" type="text">
                </label>
            </div>
            <div class="col-span-12 lg:col-span-3 flex flex-col">
                <label>Nome
                    <input class="brother-name brother-new-nome form-control w-full" placeholder="Nome completo" type="text">
                </label>
            </div>
            <div class="col-span-12 lg:col-span-3 flex flex-col">
                <label>Ano
                    <input class="brother-ano brother-new-ano form-control w-full" placeholder="Ex: 2021" type="text">
                </label>
            </div>
            <div class="col-span-12 lg:col-span-3 flex flex-col">
                <label>Série
                    <select class="brother-serie brother-new-serie form-control w-full">
                        <option disabled selected>Selecione</option>
                        <option>Infantil 4</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="remove-brother flex items-center justify-start focus:outline-none mt-30 cursor-pointer max-w-sm">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="8.42188" width="1.45161" height="18" rx="0.725806" fill="#2C2C2C" />
                <rect x="18" y="7.95361" width="1.45161" height="18" rx="0.725806" transform="rotate(90 18 7.95361)" fill="#2C2C2C" />
            </svg>
            <div class="text-lg lg:text-xl ml-15">Incluir irmão(s) ou irmã(s)</div>
        </div>
    </div>
</div>