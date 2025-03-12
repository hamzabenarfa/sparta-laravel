<header class="bg-[#1e1010] p-4 h-40 flex items-center justify-between">
    <div class="flex items-center">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-fit">

    </div>

    <div class="hidden lg:flex items-start gap-4 ">
        <div class="flex gap-2">
            <input
                type="text"
                placeholder="Nom d'utilisateur"
                class="w-48 h-11 bg-white border rounded-md px-3 py-2 text-black"
            />

            <div class="relative" x-data="{ showPassword: false }">
                <div class="flex flex-col gap-1">
                    <input
                        :type="showPassword ? 'text' : 'password'"
                        placeholder="Mot de Passe"
                        class="w-48 bg-white border rounded-md px-3 py-2 pr-10 text-black"
                    />
                    <p class="text-xs ml-auto text-white">Mot de passe oublié ?</p>
                </div>

            </div>
        </div>

        <button class="bg-red-700 text-white px-4 py-2 font-semibold rounded-md">S'IDENTIFIER</button>
        <button class="bg-red-700 text-white px-4 py-2 font-semibold rounded-md">S'INSCRIRE</button>
    </div>
</header>
