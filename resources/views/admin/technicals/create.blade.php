<x-app-layout>
    <div class="max-w-5xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

        <form action="{{ route('register.admin.store') }}" method="POST">
            @csrf

            <div class="space-y-10">
                <div>
                    <h2 class="text-3xl font-black text-zinc-900 dark:text-white tracking-tight">Novo Colaborador</h2>
                    <p class="mt-2 text-sm text-zinc-500 dark:text-zinc-400">Configure as permissões e dados de acesso para o novo membro da equipe.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                    <div class="space-y-6">
                        <div>
                            <h3 class="text-sm font-bold uppercase tracking-widest text-zinc-400 dark:text-zinc-500">1. Perfil de Acesso</h3>
                            <p class="mt-1 text-xs text-zinc-500">Selecione o nível de privilégio no sistema.</p>
                        </div>

                        <div class="grid grid-cols-1 gap-4">
                            <label class="relative flex cursor-pointer rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 p-5 shadow-sm has-[:checked]:border-[#FF2D20] has-[:checked]:ring-1 has-[:checked]:ring-[#FF2D20] transition-all hover:bg-zinc-50 dark:hover:bg-zinc-800/50 group">
                                <input type="radio" name="role" value="technical" class="sr-only" checked>
                                <div class="flex items-center gap-4">
                                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-600 dark:text-zinc-400 group-has-[:checked]:bg-[#FF2D20]/10 group-has-[:checked]:text-[#FF2D20] transition-colors">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                                    </div>
                                    <div>
                                        <span class="block text-sm font-bold text-zinc-900 dark:text-white">Técnico</span>
                                        <span class="block text-xs text-zinc-500">Ordens de serviço e clientes.</span>
                                    </div>
                                </div>
                            </label>

                            <label class="relative flex cursor-pointer rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 p-5 shadow-sm has-[:checked]:border-[#FF2D20] has-[:checked]:ring-1 has-[:checked]:ring-[#FF2D20] transition-all hover:bg-zinc-50 dark:hover:bg-zinc-800/50 group">
                                <input type="radio" name="role" value="admin" class="sr-only">
                                <div class="flex items-center gap-4">
                                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-600 dark:text-zinc-400 group-has-[:checked]:bg-[#FF2D20]/10 group-has-[:checked]:text-[#FF2D20] transition-colors">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                    </div>
                                    <div>
                                        <span class="block text-sm font-bold text-zinc-900 dark:text-white">Administrador</span>
                                        <span class="block text-xs text-zinc-500">Acesso total e configurações.</span>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="lg:col-span-2 space-y-6">
                        <div class="bg-white dark:bg-zinc-900 rounded-3xl p-8 border border-zinc-200 dark:border-zinc-800/50">
                            <h3 class="text-sm font-bold uppercase tracking-widest text-zinc-400 dark:text-zinc-500 mb-8">2. Dados Cadastrais</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="md:col-span-2">
                                    <label class="block text-xs font-bold text-zinc-500 dark:text-zinc-400 uppercase mb-2 ml-1">Nome Completo</label>
                                    <input type="text" name="name" id="name" class="w-full rounded-xl border-zinc-200 bg-zinc-50 text-zinc-900 placeholder:text-zinc-400 focus:border-transparent focus:ring-2 focus:ring-[#FF2D20] dark:border-zinc-700 dark:bg-zinc-800 dark:text-white dark:placeholder:text-zinc-500 transition-all py-3 px-4" placeholder="Nome do colaborador">
                                </div>

                                <div class="md:col-span-2">
                                    <label class="block text-xs font-bold text-zinc-500 dark:text-zinc-400 uppercase mb-2 ml-1">E-mail</label>
                                    <input type="email" name="email" id="email" class="w-full rounded-xl border-zinc-200 bg-zinc-50 text-zinc-900 placeholder:text-zinc-400 focus:border-transparent focus:ring-2 focus:ring-[#FF2D20] dark:border-zinc-700 dark:bg-zinc-800 dark:text-white dark:placeholder:text-zinc-500 transition-all py-3 px-4" placeholder="email@empresa.com">
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-zinc-500 dark:text-zinc-400 uppercase mb-2 ml-1">Senha de Acesso</label>
                                    <input type="password" name="password" id="password" class="w-full rounded-xl border-zinc-200 bg-zinc-50 text-zinc-900 placeholder:text-zinc-400 focus:border-transparent focus:ring-2 focus:ring-[#FF2D20] dark:border-zinc-700 dark:bg-zinc-800 dark:text-white dark:placeholder:text-zinc-500 transition-all py-3 px-4" placeholder="••••••••">
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-zinc-500 dark:text-zinc-400 uppercase mb-2 ml-1">Confirmar Senha</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full rounded-xl border-zinc-200 bg-zinc-50 text-zinc-900 placeholder:text-zinc-400 focus:border-transparent focus:ring-2 focus:ring-[#FF2D20] dark:border-zinc-700 dark:bg-zinc-800 dark:text-white dark:placeholder:text-zinc-500 transition-all py-3 px-4" placeholder="••••••••">
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end gap-6 pt-4">
                            <button type="reset" class="text-sm font-bold text-zinc-500 hover:text-zinc-900 dark:hover:text-zinc-200 transition-colors">
                                Cancelar
                            </button>
                            <button type="submit" class="inline-flex items-center gap-2 rounded-xl bg-zinc-900 dark:bg-[#FF2D20] px-10 py-3.5 text-sm font-black text-white shadow-xl hover:opacity-90 transition-all active:scale-95">
                                Finalizar Cadastro
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</x-app-layout>
