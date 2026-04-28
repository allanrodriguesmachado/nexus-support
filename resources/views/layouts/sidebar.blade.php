<aside id="default-sidebar"
       class="fixed top-0 left-0 z-40 w-64 h-screen pt-18 transition-transform -translate-x-full sm:translate-x-0 border-r border-zinc-200 bg-white dark:border-zinc-800 dark:bg-zinc-950"
       aria-label="Sidebar">
    <div class="h-full px-4 py-6 overflow-y-auto">
        <ul class="space-y-1.5 font-medium">
            @can('manager_admin')
                <li>
                    <a href="{{route('dashboard')}}"
                       class="flex items-center px-3 py-2.5 text-sm font-semibold rounded-xl transition-all group {{ request()->routeIs('dashboard') ? 'bg-red-50 text-[#FF2D20] dark:bg-[#FF2D20]/10 dark:text-[#FF2D20]' : 'text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-800/50 dark:hover:text-white' }}">
                        <svg
                            class="shrink-0 w-5 h-5 transition-transform duration-300 group-hover:scale-110 {{ request()->routeIs('dashboard') ? 'text-[#FF2D20]' : 'text-zinc-400 group-hover:text-zinc-900 dark:text-zinc-500 dark:group-hover:text-white' }}"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2.2"
                                  d="M3 10.8 12 3l9 7.8V20a1 1 0 0 1-1 1h-5v-6a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v6H4a1 1 0 0 1-1-1v-9.2Z"/>
                        </svg>
                        <span class="ms-3 font-bold">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href=""
                       class="flex items-center px-3 py-2.5 text-sm font-semibold rounded-xl transition-all group {{ request()->routeIs('kanban') ? 'bg-red-50 text-[#FF2D20] dark:bg-[#FF2D20]/10 dark:text-[#FF2D20]' : 'text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-800/50 dark:hover:text-white' }}">

                        <svg
                            class="shrink-0 w-5 h-5 transition-transform duration-300 group-hover:scale-110 {{ request()->routeIs('kanban') ? 'text-[#FF2D20]' : 'text-zinc-400 group-hover:text-zinc-900 dark:text-zinc-500 dark:group-hover:text-white' }}"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2.2"
                                  d="M15 5v14M9 5v14M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span
                            class="flex-1 ms-3 whitespace-nowrap {{ request()->routeIs('kanban') ? 'font-bold' : '' }}">Kanban</span>
                        <!-- Badge Premium com Gradiente -->
                        <span
                            class="bg-linear-to-r from-[#FF2D20] to-orange-500 text-white text-2xs uppercase font-black px-2 py-0.5 rounded-full shadow-sm shadow-[#FF2D20]/30">Pro</span>
                    </a>
                </li>

                <li>
                    <a href="#"
                       class="flex items-center px-3 py-2.5 text-sm text-zinc-600 rounded-lg hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-800/50 dark:hover:text-white transition-colors group">
                        <svg
                            class="shrink-0 w-5 h-5 text-zinc-400 group-hover:text-zinc-900 dark:text-zinc-500 dark:group-hover:text-white transition-colors"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 13h3.439a.991.991 0 0 1 .908.6 3.978 3.978 0 0 0 7.306 0 .99.99 0 0 1 .908-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9M9 7h6m-7 3h8"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Inbox de Chamados</span>
                        <span
                            class="inline-flex items-center justify-center w-5 h-5 ms-2 text-xs font-bold text-[#FF2D20] bg-red-100 rounded-full dark:bg-red-500/20 dark:text-red-400">2</span>
                    </a>
                </li>

                <li class="pt-4 pb-2">
                    <div class="text-xs font-bold text-zinc-400 uppercase tracking-wider px-3 dark:text-zinc-500">
                        Gerenciamento tecnicos
                    </div>
                </li>

                <li>
                    <a href="{{route('technical.create')}}"
                       class="flex items-center px-3 py-2.5 text-sm text-zinc-600 rounded-lg hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-800/50 dark:hover:text-white transition-colors group">
                        <svg
                            class="shrink-0 w-5 h-5 text-zinc-400 group-hover:text-zinc-900 dark:text-zinc-500 dark:group-hover:text-white transition-colors"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                  d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Cadastro</span>
                    </a>
                </li>
            @endcan

            @can('manager_client')
                    <li>
                        <a href="{{route('callings.show')}}"
                           class="flex items-center px-3 py-2.5 text-sm font-semibold rounded-xl transition-all group {{ request()->routeIs('callings.show') ? 'bg-red-50 text-[#FF2D20] dark:bg-[#FF2D20]/10 dark:text-[#FF2D20]' : 'text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-800/50 dark:hover:text-white' }}">
                            <svg
                                class="shrink-0 w-5 h-5 text-zinc-400 group-hover:text-zinc-900 dark:text-zinc-500 dark:group-hover:text-white transition-colors"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Solicitar</span>
                        </a>
                    </li>


                    <li>
                    <a href="{{route('callings.create')}}"
                       class="flex items-center px-3 py-2.5 text-sm font-semibold rounded-xl transition-all group {{ request()->routeIs('callings.create') ? 'bg-red-50 text-[#FF2D20] dark:bg-[#FF2D20]/10 dark:text-[#FF2D20]' : 'text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-800/50 dark:hover:text-white' }}">
                        <svg
                            class="shrink-0 w-5 h-5 transition-transform duration-300 group-hover:scale-110 {{ request()->routeIs('callings.create') ? 'text-[#FF2D20]' : 'text-zinc-400 group-hover:text-zinc-900 dark:text-zinc-500 dark:group-hover:text-white' }}"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2.2"
                                  d="M3 10.8 12 3l9 7.8V20a1 1 0 0 1-1 1h-5v-6a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v6H4a1 1 0 0 1-1-1v-9.2Z"/>
                        </svg>
                        <span class="ms-3 font-bold">Solicitar</span>
                    </a>
                </li>

            @endcan
        </ul>
    </div>
</aside>
