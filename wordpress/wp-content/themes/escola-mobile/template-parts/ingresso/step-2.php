<div id="step-2" class="ingresso-step hidden">
    <div class="validate-parent w-full rounded-lg px-5 lg:px-30 py-30 bg-white mt-20">
        <h2 class="text-4xl font-bold mb-15">Responsável</h2>
        <div class="grid grid-cols-12 gap-20">
            <div class="col-span-12">
                <label for="responsavel_name">Nome do responsável*</label>
                <input class="form-control w-full responsavel-name" placeholder="Nome completo" type="text">
            </div>
            <div class="col-span-12 lg:col-span-6">
                <label for="responsavel_tel_1">Telefone*</label>
                <input class="form-control w-full phone responsavel-tel" placeholder="(00) 0000-0000" type="text">
            </div>
            <div class="col-span-12 lg:col-span-6">
                <label for="responsavel_email">E-mail*</label>
                <input class="form-control w-full responsavel-email" placeholder="E-mail" type="text">
            </div>
        </div>

        <div id="add-parent" class="flex items-center justify-start focus:outline-none mt-30 cursor-pointer max-w-sm">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="8.42188" width="1.45161" height="18" rx="0.725806" fill="#2C2C2C" />
                <rect x="18" y="7.95361" width="1.45161" height="18" rx="0.725806" transform="rotate(90 18 7.95361)" fill="#2C2C2C" />
            </svg>
            <div class="text-lg lg:text-xl ml-15">Incluir Responsável Secundário</div>
        </div>
    </div>

    <div id="second_parent" class="w-full rounded-lg px-5 lg:px-30 py-30 bg-white mt-30 hidden">
        <h2 class="text-4xl font-bold mb-15">Responsável</h2>
        <div class="grid grid-cols-12 gap-20">
            <div class="col-span-12">
                <label for="responsavel_name">Nome do responsável*</label>
                <input class="form-control w-full responsavel-name-2" placeholder="Nome completo" type="text">
            </div>
            <div class="col-span-12 lg:col-span-6">
                <label for="responsavel_tel_1">Telefone*</label>
                <input class="form-control w-full phone responsavel-tel-2" placeholder="(00) 0000-0000" type="text">
            </div>
            <div class="col-span-12 lg:col-span-6">
                <label for="responsavel_email">E-mail*</label>
                <input class="form-control w-full responsavel-email-2" placeholder="E-mail" type="text">
            </div>
        </div>

        <div id="remove-parent" class="flex items-center justify-start focus:outline-none mt-30 cursor-pointer max-w-sm">
            <svg width="18" height="2" viewBox="0 0 18 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="18" y="0.27417" width="1.45161" height="18" rx="0.725806" transform="rotate(90 18 0.27417)" fill="#2C2C2C" />
            </svg>
            <div class="text-lg lg:text-xl ml-15">Excluir Responsável Secundário</div>
        </div>
    </div>
</div>