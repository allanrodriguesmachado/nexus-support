<x-app-layout>
    <div class="max-w-6xl mx-auto mt-8 p-4 lg:p-8">

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-zinc-900 dark:text-zinc-50 tracking-tight">Suporte Técnico</h1>
            <p class="text-zinc-500 dark:text-zinc-400 mt-2">Abra um chamado detalhado para que nossa equipe de TI possa ajudar rapidamente.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            <div class="lg:col-span-8">
                <div class="bg-white dark:bg-zinc-800 rounded-xl shadow-sm border border-zinc-200 dark:border-zinc-700/60 overflow-hidden relative transition-colors duration-200">
                    <div class="h-1 w-full bg-[#FF2D20]"></div>

                    <div class="p-6 sm:p-8">
                        <div class="flex items-center space-x-3 mb-6 border-b border-zinc-100 dark:border-zinc-700/50 pb-4">
                            <div class="p-2 bg-red-50 dark:bg-red-500/10 rounded-lg">
                                <svg class="w-6 h-6 text-[#FF2D20]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h2 class="text-xl font-semibold text-zinc-800 dark:text-zinc-100">Novo Chamado</h2>
                        </div>

                        <form action="{{route('callings.store')}}" method="POST" class="space-y-6">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="md:col-span-1">
                                    <label for="categoria" class="block text-sm font-semibold text-zinc-700 dark:text-zinc-300 mb-1.5">
                                        Categoria <span class="text-[#FF2D20]">*</span>
                                    </label>
                                    <select
                                        id="categoria"
                                        name="category"
                                        required
                                        class="block w-full rounded-lg border-zinc-300 dark:border-zinc-600 bg-zinc-50 dark:bg-zinc-900/50 text-zinc-900 dark:text-zinc-100 shadow-sm px-4 py-3 focus:border-[#FF2D20] focus:ring-[#FF2D20] focus:ring-1 sm:text-sm outline-none transition-all duration-200 hover:bg-zinc-100 dark:hover:bg-zinc-900"
                                    >
                                        <option value="" disabled selected>Selecione a área...</option>
                                        <option value="hardware">Hardware (PCs, Monitores)</option>
                                        <option value="software">Software e Sistemas</option>
                                        <option value="redes">Redes e Conectividade</option>
                                        <option value="acessos">Acessos e Permissões</option>
                                        <option value="perifericos">Periféricos (Impressoras)</option>
                                    </select>
                                </div>

                                <div class="md:col-span-1">
                                    <label for="titulo" class="block text-sm font-semibold text-zinc-700 dark:text-zinc-300 mb-1.5">
                                        Título Breve <span class="text-[#FF2D20]">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        id="titulo"
                                        name="title"
                                        placeholder="Ex: Erro no sistema de vendas"
                                        required
                                        class="block w-full rounded-lg border-zinc-300 dark:border-zinc-600 bg-zinc-50 dark:bg-zinc-900/50 text-zinc-900 dark:text-zinc-100 placeholder-zinc-400 dark:placeholder-zinc-500 shadow-sm px-4 py-3 focus:border-[#FF2D20] focus:ring-[#FF2D20] focus:ring-1 sm:text-sm outline-none transition-all duration-200 hover:bg-zinc-100 dark:hover:bg-zinc-900"
                                    >
                                </div>
                            </div>

                            <div>
                                <label for="descricao" class="flex justify-between text-sm font-semibold text-zinc-700 dark:text-zinc-300 mb-1.5">
                                    <span>Descrição Detalhada <span class="text-[#FF2D20]">*</span></span>
                                    <span class="text-zinc-400 font-normal text-xs">Seja o mais específico possível</span>
                                </label>
                                <textarea
                                    id="descricao"
                                    name="description"
                                    rows="6"
                                    placeholder="1. O que você estava tentando fazer?&#10;2. O que aconteceu (qual erro apareceu)?&#10;3. O que você já tentou para resolver?"
                                    required
                                    class="block w-full rounded-lg border-zinc-300 dark:border-zinc-600 bg-zinc-50 dark:bg-zinc-900/50 text-zinc-900 dark:text-zinc-100 placeholder-zinc-400/70 dark:placeholder-zinc-500/70 shadow-sm px-4 py-3 focus:border-[#FF2D20] focus:ring-[#FF2D20] focus:ring-1 sm:text-sm resize-y outline-none transition-all duration-200 hover:bg-zinc-100 dark:hover:bg-zinc-900 leading-relaxed"
                                ></textarea>
                            </div>

                            <div class="flex items-center justify-end space-x-4 pt-6 mt-6 border-t border-zinc-100 dark:border-zinc-700/50">
                                <button
                                    type="button"
                                    class="px-5 py-2.5 text-sm font-medium text-zinc-600 dark:text-zinc-300 bg-transparent hover:text-zinc-900 dark:hover:text-white transition-colors duration-200"
                                >
                                    Cancelar
                                </button>
                                <button
                                    type="submit"
                                    class="flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-white bg-[#FF2D20] rounded-lg shadow-sm hover:bg-red-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-zinc-800 focus:ring-[#FF2D20] transition-all duration-200 transform hover:-translate-y-0.5"
                                >
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    Enviar Solicitação
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 space-y-6">

                <div class="bg-zinc-50 dark:bg-zinc-800/50 rounded-xl p-6 border border-zinc-200 dark:border-zinc-700/60">
                    <h3 class="text-sm font-bold text-zinc-900 dark:text-zinc-100 uppercase tracking-wider mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Boas Práticas
                    </h3>
                    <ul class="space-y-4 text-sm text-zinc-600 dark:text-zinc-400">
                        <li class="flex items-start">
                            <span class="text-[#FF2D20] mr-2 font-bold">•</span>
                            <span>Sempre inclua mensagens de erro exatas, se houver.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-[#FF2D20] mr-2 font-bold">•</span>
                            <span>Selecione a categoria correta para acelerar o direcionamento do seu problema.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-[#FF2D20] mr-2 font-bold">•</span>
                            <span>Evite abrir múltiplos chamados para o mesmo assunto.</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-zinc-100 to-zinc-200 dark:from-zinc-800 dark:to-zinc-900 rounded-xl p-6 border border-zinc-200 dark:border-zinc-700/60">
                    <h3 class="text-sm font-bold text-zinc-900 dark:text-zinc-100 uppercase tracking-wider mb-2">
                        Urgências Críticas
                    </h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 mb-4">
                        Se o sistema inteiro estiver fora do ar ou o impacto for em toda a empresa, não abra um chamado normal.
                    </p>
                    <div class="text-sm font-medium text-zinc-900 dark:text-zinc-100 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-[#FF2D20]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Ramal TI: 4004
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

