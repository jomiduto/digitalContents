<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Contents - @yield('titulo')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
{{-- <body x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
x-init="
     darkMode = JSON.parse(localStorage.getItem('darkMode'));
     $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
:class="{'dark bg-black': darkMode === true}">



    @include('layouts.partials.main')

    @include('layouts.partials.footer')
    @include('layouts.partials.scrolltop')

</body>--}}
<body class="bg-gray-100">
    {{-- <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between item-center">
            <h1 class="text-3xl font-black">Digital Contents</h1>
            <nav class="flex gap-2 item-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('login') }}">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('register')}}">Crear Cuenta</a>
            </nav>
        </div>
    </header> --}}
    <main class="container mx-auto mt-10">
        {{-- <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2> --}}
        {{-- Include Header --}}
        @include('layouts.partials.header')
        @yield('contenido')
    </main>
    <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
        Digital Contents - Todos los derechos reservados {{ now()->year }}
    </footer>
</body>
</html>
