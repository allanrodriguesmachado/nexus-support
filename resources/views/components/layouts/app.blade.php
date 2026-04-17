<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Nexus Support') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet"/>

    <!-- Script de Tema Seguro no Head (Mantive apenas um para evitar duplicidade) -->
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] antialiased">

@if(request()->routeIs('login') || request()->routeIs('register'))
    {{ $slot }}
@else
    <x-layouts.header/>
    <x-layouts.sidebar/>

    <main class="sm:ml-64 pt-18 min-h-screen">
        <div class="p-4 sm:p-6 lg:p-8 max-w-screen-2xl mx-auto">
            {{ $slot }}
        </div>
    </main>
@endif

</body>
</html>
