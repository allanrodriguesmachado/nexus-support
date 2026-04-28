<x-app-layout>
    <div class="max-w-7xl mx-auto mt-10 p-4 lg:p-8 transition-colors duration-200">

        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6 mb-8">
            <div class="flex items-center gap-4">
                <div class="h-10 w-1.5 bg-[#FF2D20] rounded-full"></div>
                <div>
                    <h1 class="text-2xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Meus Chamados</h1>
                    <p class="text-sm text-zinc-500 dark:text-zinc-400 font-medium">Gerencie o histórico de suporte.</p>
                </div>
            </div>

            <a href="{{ route('callings.create') }}" class="group flex items-center justify-center gap-2 px-5 py-2.5 text-sm font-bold text-white bg-[#FF2D20] rounded-xl shadow-lg shadow-red-500/20 hover:bg-red-700 transition-all active:scale-95">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Novo Chamado
            </a>
        </div>

        <div class="bg-white dark:bg-zinc-900/80 rounded-2xl shadow-sm border border-zinc-200 dark:border-zinc-800 overflow-hidden transition-colors duration-200">

            <div class="p-4 border-b border-zinc-200 dark:border-zinc-800 flex flex-col sm:flex-row gap-4 justify-between bg-zinc-50/50 dark:bg-zinc-900/50">
                <div class="relative w-full sm:w-96">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input type="text" placeholder="Buscar chamados por título..." class="w-full pl-10 pr-4 py-2 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-700 rounded-lg text-sm text-zinc-800 dark:text-zinc-200 focus:outline-none focus:border-[#FF2D20] focus:ring-1 focus:ring-[#FF2D20] transition-colors placeholder-zinc-400 dark:placeholder-zinc-500">
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-zinc-600 dark:text-zinc-400">
                    <thead class="bg-zinc-50 dark:bg-zinc-800/80 text-zinc-500 dark:text-zinc-400 text-[10px] uppercase tracking-wider font-bold">
                    <tr>
                        <th scope="col" class="px-6 py-4">Assunto do Chamado</th>
                        <th scope="col" class="px-6 py-4">Descrição Completa</th>
                        <th scope="col" class="px-6 py-4">Categoria</th>
                        <th scope="col" class="px-6 py-4">Status</th>
                        <th scope="col" class="px-6 py-4">Abertura</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    @forelse($callings as $calling)
                        <tr class="hover:bg-zinc-50/80 dark:hover:bg-zinc-800/30 transition-colors group cursor-default">

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="font-bold text-zinc-900 dark:text-zinc-100">{{ $calling->title }}</div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="max-w-xs xl:max-w-md whitespace-normal text-zinc-600 dark:text-zinc-400 leading-relaxed line-clamp-2 group-hover:line-clamp-none transition-all duration-300">
                                    {{ $calling->description }}
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-zinc-100 dark:bg-zinc-800 text-zinc-500 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700">
                                        {{ ucfirst($calling->category) }}
                                    </span>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($calling->status === 'aberto' || $calling->status === 'pendente')
                                    <div class="inline-flex items-center gap-1.5 px-2 py-1 bg-amber-50 dark:bg-amber-500/10 border border-amber-200/50 dark:border-amber-500/20 rounded-md">
                                            <span class="relative flex h-1.5 w-1.5">
                                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                                              <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-amber-500"></span>
                                            </span>
                                        <span class="text-[10px] font-bold text-amber-700 dark:text-amber-400 uppercase tracking-wider">Em Análise</span>
                                    </div>
                                @elseif($calling->status === 'resolvido')
                                    <div class="inline-flex items-center gap-1.5 px-2 py-1 bg-emerald-50 dark:bg-emerald-500/10 border border-emerald-200/50 dark:border-emerald-500/20 rounded-md">
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                        <span class="text-[10px] font-bold text-emerald-700 dark:text-emerald-400 uppercase tracking-wider">Resolvido</span>
                                    </div>
                                @else
                                    <div class="inline-flex items-center gap-1.5 px-2 py-1 bg-zinc-50 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 rounded-md">
                                        <span class="h-1.5 w-1.5 rounded-full bg-zinc-400"></span>
                                        <span class="text-[10px] font-bold text-zinc-600 dark:text-zinc-400 uppercase tracking-wider">{{ ucfirst($calling->status) }}</span>
                                    </div>
                                @endif
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-xs font-semibold text-zinc-700 dark:text-zinc-300">{{ $calling->created_at->format('d/m/Y') }}</div>
                                <div class="text-[10px] text-zinc-400 dark:text-zinc-500">{{ $calling->created_at->format('H:i') }}</div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center">
                                <svg class="mx-auto h-12 w-12 text-zinc-300 dark:text-zinc-600 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Nenhum chamado registrado até o momento.</p>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            @if(method_exists($callings, 'links') && $callings->hasPages())
                <div class="p-4 border-t border-zinc-200 dark:border-zinc-800 bg-zinc-50/50 dark:bg-zinc-900/50">
                    {{ $callings->links() }}
                </div>
            @endif
        </div>

    </div>
</x-app-layout>
