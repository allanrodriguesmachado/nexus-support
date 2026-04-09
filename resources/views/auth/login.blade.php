<x-layouts.app>
    <form class="max-w-sm mx-auto" action="{{route('login')}}" method="POST">
        @csrf

        <div class="flex items-center justify-between  min-h-screen flex-row">
            <div class="">
                <div>
                    <h1 class="text-2xl font-bold mb-5">Faça login na sua conta</h1>
                </div>

                <div class="w-full max-w-sm bg-neutral-primary-soft p-6 border border-default rounded-base shadow-xs">
                    <div class="mb-5">
                        <label for="email-alternative" class="block mb-2.5 text-sm font-medium text-heading">E-mail</label>
                        <input type="email" name="email" id="email-alternative"
                               class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow placeholder:text-body"
                               placeholder="name@flowbite.com" required/>
                    </div>

                    @error('email')
                    <div class="p-4 mb-4 text-sm text-fg-danger-strong rounded-base bg-danger-soft" role="alert">
                        <span class="font-medium">{{$message}}</span>
                    </div>
                    @enderror

                    <div class="mb-5">
                        <label for="password-alternative"
                               class="block mb-2.5 text-sm font-medium text-heading">Senha</label>
                        <input type="password" name="password" id="password-alternative"
                               class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow placeholder:text-body"
                               placeholder="••••••••" required/>
                    </div>

                    @error('password')
                    <div class="p-4 mb-4 text-sm text-fg-danger-strong rounded-base bg-danger-soft" role="alert">
                        <span class="font-medium">{{$message}}</span>
                    </div>
                    @enderror

                    <button type="submit"
                            class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-layouts.app>
