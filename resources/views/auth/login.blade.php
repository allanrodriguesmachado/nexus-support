<x-layouts.app>
    <!-- Container Principal - Fundo escuro profundo inspirado no Laravel -->
    <div class="flex min-h-screen w-full bg-zinc-950 font-sans text-zinc-100 selection:bg-[#FF2D20] selection:text-white">

        <!-- LADO ESQUERDO: Área Visual (Estética Laravel Dark) -->
        <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden items-center justify-center p-12 border-r border-zinc-800/50">

            <!-- Efeito Glow Vermelho (Laravel Signature) -->
            <div class="absolute top-1/4 -left-32 w-96 h-96 bg-[#FF2D20] rounded-full mix-blend-screen filter blur-[150px] opacity-20 pointer-events-none"></div>
            <div class="absolute bottom-1/4 -right-32 w-[500px] h-[500px] bg-[#FF2D20] rounded-full mix-blend-screen filter blur-[150px] opacity-10 pointer-events-none"></div>

            <!-- Grid Background Sutil -->
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgMGgyNHYyNEgwem0xIDF2MjJoMjJWMXptMSAxaDIwdjIwSDJ6IiBmaWxsPSJyZ2JhKDI1NSwyNTUsMjU1LDAuMDMpIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48L3N2Zz4=')] opacity-50"></div>

            <!-- Conteúdo Decorativo -->
            <div class="relative z-10 max-w-lg">
                <!-- Badge superior -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-zinc-900 border border-zinc-800 mb-6 shadow-sm">
                    <svg class="w-4 h-4 text-[#FF2D20]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    <span class="text-xs font-semibold text-zinc-300 uppercase tracking-wider">Nexus Support</span>
                </div>

                <h2 class="text-5xl font-black text-white mb-6 tracking-tight leading-tight">
                    Suporte <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF2D20] to-orange-500">
                        Descomplicado.
                    </span>
                </h2>

                <p class="text-zinc-400 text-lg leading-relaxed mb-10 font-medium">
                    Plataforma unificada para clientes, técnicos e administradores.
                    Abra chamados, acompanhe o progresso e resolva problemas com a velocidade que seu negócio exige.
                </p>

                <!-- Cards de Features (Inspirado no ecossistema Laravel) -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-zinc-900/50 backdrop-blur-sm border border-zinc-800/80 p-4 rounded-2xl">
                        <svg class="w-6 h-6 text-[#FF2D20] mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        <h4 class="text-zinc-200 font-bold text-sm">Resolução Ágil</h4>
                        <p class="text-zinc-500 text-xs mt-1">SLA otimizado para chamados críticos.</p>
                    </div>
                    <div class="bg-zinc-900/50 backdrop-blur-sm border border-zinc-800/80 p-4 rounded-2xl">
                        <svg class="w-6 h-6 text-[#FF2D20] mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        <h4 class="text-zinc-200 font-bold text-sm">Ambiente Seguro</h4>
                        <p class="text-zinc-500 text-xs mt-1">Dados protegidos de ponta a ponta.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- LADO DIREITO: Formulário de Login (Clean/Light UI para alto contraste e leitura) -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6 sm:p-12 lg:p-24 bg-white text-zinc-900 relative">

            <!-- Detalhe superior vermelho (Laravel touch) -->
            <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-[#FF2D20] to-orange-500"></div>

            <div class="w-full max-w-md">

                <!-- Header do Form -->
                <div class="mb-10 text-center sm:text-left">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-red-50 text-[#FF2D20] mb-6 border border-red-100">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                    </div>
                    <h1 class="text-3xl font-black text-zinc-900 tracking-tight">Entrar no sistema</h1>
                    <p class="text-zinc-500 mt-2 text-sm font-medium">Informe suas credenciais de cliente ou colaborador.</p>
                </div>

                <!-- Formulário -->
                <form action="{{route('auth')}}" method="POST" class="space-y-5">
                    @csrf

                    <!-- Grupo de E-mail -->
                    <div class="space-y-1.5">
                        <label for="email" class="text-sm font-bold text-zinc-700">E-mail de acesso</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                            </div>
                            <input type="email" name="email" id="email"
                                   class="pl-10 w-full text-zinc-900 bg-white border border-zinc-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#FF2D20]/20 focus:border-[#FF2D20] transition-colors outline-none placeholder:text-zinc-400 text-sm font-medium shadow-sm"
                                   placeholder="voce@empresa.com" required/>
                        </div>
                        @error('email')
                        <p class="text-sm text-[#FF2D20] font-medium mt-1 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <!-- Grupo de Senha -->
                    <div class="space-y-1.5">
                        <div class="flex items-center justify-between">
                            <label for="password" class="text-sm font-bold text-zinc-700">Senha</label>
                            <a href="#" class="text-sm font-semibold text-[#FF2D20] hover:text-[#e0241b] transition-colors">Esqueceu a senha?</a>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            </div>
                            <input type="password" name="password" id="password"
                                   class="pl-10 w-full text-zinc-900 bg-white border border-zinc-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#FF2D20]/20 focus:border-[#FF2D20] transition-colors outline-none placeholder:text-zinc-400 text-sm font-medium shadow-sm"
                                   placeholder="••••••••" required/>
                        </div>
                        @error('password')
                        <p class="text-sm text-[#FF2D20] font-medium mt-1 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <!-- Lembre-me -->
                    <div class="flex items-center pt-2">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-[#FF2D20] focus:ring-[#FF2D20] border-zinc-300 rounded cursor-pointer">
                        <label for="remember" class="ml-2 block text-sm text-zinc-600 font-medium cursor-pointer">
                            Manter conectado
                        </label>
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                                class="w-full flex justify-center items-center gap-2 text-white bg-[#FF2D20] hover:bg-[#e0241b] focus:ring-4 focus:ring-[#FF2D20]/30 active:scale-[0.98] font-bold rounded-lg text-sm px-4 py-3.5 transition-all duration-200 outline-none shadow-md shadow-[#FF2D20]/20">
                            Acessar Painel
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>
                </form>

                <div class="mt-10 pt-6 border-t border-zinc-100 text-center">
                    <p class="text-zinc-500 font-medium text-sm">
                        Ainda não possui acesso ao suporte? <br/>
                        <a href="{{route('register')}}" class="text-zinc-900 font-bold hover:text-[#FF2D20] transition-colors inline-block mt-1">Solicite sua conta aqui &rarr;</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
