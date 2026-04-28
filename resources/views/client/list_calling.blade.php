<x-app-layout>
    <div class="max-w-6xl mx-auto mt-10 p-4 lg:p-8 transition-colors duration-200">

        <div class="flex items-center gap-4 mb-10">
            <div class="h-12 w-1.5 bg-[#FF2D20] rounded-full"></div>
            <div>
                <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Abertura de Chamado</h1>
                <p class="text-zinc-500 dark:text-zinc-400 font-medium">Siga os passos abaixo para reportar um incidente à equipe de TI.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

            <div class="lg:col-span-8">
                <form action="{{ route('callings.store') }}" method="POST" class="space-y-10">
                    @csrf

                    <div>
                        <label class="block text-sm font-bold text-zinc-400 uppercase tracking-widest mb-6">01. Selecione a Categoria</label>
                        <div class="grid grid-cols-2 md:grid-cols-5 gap-3">
                            <label class="relative group cursor-pointer">
                                <input type="radio" name="category" value="hardware" class="peer sr-only" required>
                                <div class="p-4 flex flex-col items-center justify-center border-2 border-zinc-200 dark:border-zinc-700/50 rounded-2xl bg-white dark:bg-zinc-800 transition-all peer-checked:border-[#FF2D20] peer-checked:bg-red-50/50 dark:peer-checked:bg-red-500/5 group-hover:bg-zinc-50 dark:group-hover:bg-zinc-700/50">
                                    <svg class="w-6 h-6 mb-2 text-zinc-400 group-hover:text-zinc-600 dark:text-zinc-500 dark:group-hover:text-zinc-300 peer-checked:text-[#FF2D20] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    <span class="text-[10px] font-bold uppercase text-zinc-600 dark:text-zinc-300 peer-checked:text-[#FF2D20]">Hardware</span>
                                </div>
                            </label>

                            <label class="relative group cursor-pointer">
                                <input type="radio" name="category" value="software" class="peer sr-only">
                                <div class="p-4 flex flex-col items-center justify-center border-2 border-zinc-200 dark:border-zinc-700/50 rounded-2xl bg-white dark:bg-zinc-800 transition-all peer-checked:border-[#FF2D20] peer-checked:bg-red-50/50 dark:peer-checked:bg-red-500/5 group-hover:bg-zinc-50 dark:group-hover:bg-zinc-700/50">
                                    <svg class="w-6 h-6 mb-2 text-zinc-400 group-hover:text-zinc-600 dark:text-zinc-500 dark:group-hover:text-zinc-300 peer-checked:text-[#FF2D20] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                    <span class="text-[10px] font-bold uppercase text-zinc-600 dark:text-zinc-300 peer-checked:text-[#FF2D20]">Software</span>
                                </div>
                            </label>

                            <label class="relative group cursor-pointer">
                                <input type="radio" name="category" value="redes" class="peer sr-only">
                                <div class="p-4 flex flex-col items-center justify-center border-2 border-zinc-200 dark:border-zinc-700/50 rounded-2xl bg-white dark:bg-zinc-800 transition-all peer-checked:border-[#FF2D20] peer-checked:bg-red-50/50 dark:peer-checked:bg-red-500/5 group-hover:bg-zinc-50 dark:group-hover:bg-zinc-700/50">
                                    <svg class="w-6 h-6 mb-2 text-zinc-400 group-hover:text-zinc-600 dark:text-zinc-500 dark:group-hover:text-zinc-300 peer-checked:text-[#FF2D20] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a9.5 9.5 0 0114.142 0M6.27 6.27a14.5 14.5 0 0111.46 0"></path></svg>
                                    <span class="text-[10px] font-bold uppercase text-zinc-600 dark:text-zinc-300 peer-checked:text-[#FF2D20]">Redes</span>
                                </div>
                            </label>

                            <label class="relative group cursor-pointer">
                                <input type="radio" name="category" value="acessos" class="peer sr-only">
                                <div class="p-4 flex flex-col items-center justify-center border-2 border-zinc-200 dark:border-zinc-700/50 rounded-2xl bg-white dark:bg-zinc-800 transition-all peer-checked:border-[#FF2D20] peer-checked:bg-red-50/50 dark:peer-checked:bg-red-500/5 group-hover:bg-zinc-50 dark:group-hover:bg-zinc-700/50">
                                    <svg class="w-6 h-6 mb-2 text-zinc-400 group-hover:text-zinc-600 dark:text-zinc-500 dark:group-hover:text-zinc-300 peer-checked:text-[#FF2D20] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17.001l-2 1v2H7v2H5a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path></svg>
                                    <span class="text-[10px] font-bold uppercase text-zinc-600 dark:text-zinc-300 peer-checked:text-[#FF2D20]">Acessos</span>
                                </div>
                            </label>

                            <label class="relative group cursor-pointer">
                                <input type="radio" name="category" value="perifericos" class="peer sr-only">
                                <div class="p-4 flex flex-col items-center justify-center border-2 border-zinc-200 dark:border-zinc-700/50 rounded-2xl bg-white dark:bg-zinc-800 transition-all peer-checked:border-[#FF2D20] peer-checked:bg-red-50/50 dark:peer-checked:bg-red-500/5 group-hover:bg-zinc-50 dark:group-hover:bg-zinc-700/50">
                                    <svg class="w-6 h-6 mb-2 text-zinc-400 group-hover:text-zinc-600 dark:text-zinc-500 dark:group-hover:text-zinc-300 peer-checked:text-[#FF2D20] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m12 4a2 2 0 100-4m0 4a2 2 0 110-4m-6 0a2 2 0 100-4m0 4a2 2 0 110-4m-6 0V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m12 0V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4"></path></svg>
                                    <span class="text-[10px] font-bold uppercase text-zinc-600 dark:text-zinc-300 peer-checked:text-[#FF2D20]">Outros</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <label class="block text-sm font-bold text-zinc-400 uppercase tracking-widest">02. Detalhes do Problema</label>

                        <div class="relative">
                            <label for="title" class="sr-only">Resumo do problema</label>
                            <input
                                type="text"
                                id="title"
                                name="title"
                                required
                                class="w-full bg-zinc-50 dark:bg-zinc-900/40 border-2 border-zinc-200 dark:border-zinc-700/50 rounded-2xl px-5 py-4 text-lg text-zinc-800 dark:text-zinc-200 outline-none focus:border-[#FF2D20] focus:ring-4 focus:ring-[#FF2D20]/10 transition-all font-medium placeholder-zinc-400 dark:placeholder-zinc-500"
                                placeholder="Resumo do problema (Ex: Monitor piscando)"
                            >
                        </div>

                        <div class="group relative">
                            <label for="description" class="sr-only">Descrição detalhada</label>
                            <textarea
                                id="description"
                                name="description"
                                rows="4"
                                required
                                class="w-full bg-zinc-50 dark:bg-zinc-900/40 border-2 border-zinc-200 dark:border-zinc-700/50 rounded-2xl p-5 text-zinc-800 dark:text-zinc-200 outline-none focus:border-[#FF2D20] focus:ring-4 focus:ring-[#FF2D20]/10 transition-all resize-none placeholder-zinc-400 dark:placeholder-zinc-500"
                                placeholder="Descreva aqui os detalhes, mensagens de erro ou o que já foi tentado..."
                            ></textarea>
                            <div class="absolute bottom-4 right-4 text-[10px] uppercase font-bold text-zinc-400 tracking-tighter">
                                Mínimo 20 caracteres
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 pt-4">
                        <button type="submit" class="flex-1 lg:flex-none px-10 py-4 bg-[#FF2D20] text-white font-bold rounded-2xl shadow-lg shadow-red-500/20 hover:bg-red-700 hover:-translate-y-1 transition-all active:scale-95">
                            Enviar Solicitação
                        </button>
                        <a href="{{ route('callings.show') }}" class="px-6 py-4 text-zinc-500 font-bold hover:text-zinc-800 dark:hover:text-zinc-200 transition-colors">
                            Voltar
                        </a>
                    </div>
                </form>
            </div>

            <div class="lg:col-span-4 flex flex-col gap-6">
                <div class="bg-white dark:bg-zinc-900 text-zinc-800 dark:text-white p-8 rounded-[2rem] shadow-xl border border-zinc-100 dark:border-zinc-800 relative overflow-hidden transition-colors duration-200">

                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-[#FF2D20] rounded-full blur-3xl opacity-10 dark:opacity-20"></div>

                    <h3 class="text-xl font-bold mb-6 relative z-10">Como funciona?</h3>

                    <div class="space-y-8 relative z-10">
                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <div class="w-8 h-8 rounded-full bg-[#FF2D20] flex items-center justify-center text-xs font-black text-white shadow-md shadow-red-500/30">1</div>
                                <div class="w-0.5 h-10 bg-zinc-200 dark:bg-zinc-700 my-1"></div>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-zinc-900 dark:text-zinc-100">Registro</h4>
                                <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed mt-0.5">Seu chamado é protocolado em nossa fila de triagem imediata.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <div class="w-8 h-8 rounded-full bg-zinc-100 dark:bg-zinc-800 border-2 border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-xs font-black text-zinc-700 dark:text-white transition-colors">2</div>
                                <div class="w-0.5 h-10 bg-zinc-200 dark:bg-zinc-700 my-1 transition-colors"></div>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-zinc-900 dark:text-zinc-100">Diagnóstico</h4>
                                <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed mt-0.5">Um técnico especializado assume o caso para análise técnica.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <div class="w-8 h-8 rounded-full bg-zinc-50 dark:bg-zinc-800/50 border-2 border-zinc-200 dark:border-zinc-700/50 flex items-center justify-center text-xs font-black text-zinc-400 dark:text-zinc-500 transition-colors">3</div>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-zinc-400 dark:text-zinc-500">Resolução</h4>
                                <p class="text-xs text-zinc-400 dark:text-zinc-600 leading-relaxed mt-0.5">O problema é resolvido e você recebe uma notificação.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-6 border-2 border-dashed border-zinc-200 dark:border-zinc-800 rounded-[2rem] bg-zinc-50/50 dark:bg-transparent transition-colors duration-200">
                    <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed italic text-center">
                        "O tempo médio de resposta para chamados de Hardware é de 4 horas úteis."
                    </p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
