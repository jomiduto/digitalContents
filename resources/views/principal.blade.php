<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Contents</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body
    x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-black': darkMode === true}"
  >

    @include('layouts.partials.header')

    @include('layouts.partials.main')

    @include('layouts.partials.footer')
    @include('layouts.partials.scrolltop')
</body>
</html>
