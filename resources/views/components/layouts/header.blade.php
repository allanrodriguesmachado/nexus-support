<header class="fixed top-0 inset-x-0 z-50 h-[72px] border-b border-zinc-200/80 bg-white/80 backdrop-blur-xl dark:border-zinc-800/80 dark:bg-zinc-950/80 transition-all duration-300">
    <!-- max-w-full ou w-full, mas mantendo um padding generoso -->
    <div class="flex items-center justify-between w-full h-full px-4 sm:px-6 lg:px-8">

        <!-- ========================================== -->
        <!-- LADO ESQUERDO: Menu & Logo                 -->
        <!-- ========================================== -->
        <div class="flex items-center gap-4 lg:w-64">

            <!-- Hamburger Mobile -->
            <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button"
                    class="inline-flex items-center justify-center p-2 -ml-2 text-zinc-500 rounded-lg sm:hidden hover:bg-zinc-100 hover:text-zinc-900 focus:outline-none focus:ring-2 focus:ring-zinc-200 dark:text-zinc-400 dark:hover:bg-zinc-800 dark:hover:text-white transition-colors">
                <span class="sr-only">Abrir menu</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Logo e Marca -->
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 outline-none rounded-lg focus-visible:ring-2 focus-visible:ring-[#FF2D20]">
                <!-- Ícone da Marca -->
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-gradient-to-br from-[#FF2D20] to-[#ff7a59] text-white shadow-sm shadow-[#FF2D20]/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <!-- Nome da Marca (Minimalista) -->
                <div class="hidden sm:flex items-baseline gap-1">
                    <span class="text-lg font-extrabold tracking-tight text-zinc-900 dark:text-white">Nexus</span>
                    <span class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Support</span>
                </div>
            </a>
        </div>



        <!-- ========================================== -->
        <!-- LADO DIREITO: Ações & Perfil               -->
        <!-- ========================================== -->
        <div class="flex items-center justify-end gap-1.5 sm:gap-3 lg:w-64">

            <!-- Notificações -->
            <button type="button" class="relative p-2 text-zinc-400 transition-colors rounded-lg hover:bg-zinc-100 hover:text-zinc-900 dark:hover:bg-zinc-800 dark:hover:text-white outline-none">
                <span class="sr-only">Notificações</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                <span class="absolute top-2 right-2.5 w-2 h-2 rounded-full bg-[#FF2D20] border-2 border-white dark:border-zinc-950"></span>
            </button>

            <!-- Tema (Dark/Light) -->
            <button id="theme-toggle" type="button" class="p-2 text-zinc-400 transition-colors rounded-lg hover:bg-zinc-100 hover:text-zinc-900 dark:hover:bg-zinc-800 dark:hover:text-white outline-none">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </button>

            <!-- Separador -->
            <div class="w-px h-5 mx-1 bg-zinc-200 dark:bg-zinc-800"></div>

            <!-- Perfil do Usuário e Sair -->
            <div class="flex items-center pl-1 gap-1 sm:gap-2">
                <button type="button" class="flex items-center gap-2 p-1 pl-2 transition-colors rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800/50 outline-none">
                    <span class="hidden md:block text-sm font-bold text-zinc-700 dark:text-zinc-200">Admin</span>
                    <div class="flex items-center justify-center w-8 h-8 rounded-md bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 text-xs font-bold shadow-sm">
                        JT
                    </div>
                </button>

                <!-- Botão de Sair (Encerrar Sessão) -->
                <form method="POST" class="m-0 p-0 inline-flex">
                    @csrf
                    <button type="submit" class="group flex items-center justify-center p-2 text-zinc-400 transition-colors rounded-lg hover:bg-red-50 hover:text-[#FF2D20] dark:hover:bg-[#FF2D20]/10 dark:hover:text-[#FF2D20] focus:outline-none" title="Sair do sistema">
                        <span class="sr-only">Sair</span>
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                    </button>
                </form>
            </div>

        </div>
    </div>
</header>
