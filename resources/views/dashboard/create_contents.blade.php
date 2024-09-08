<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Contents - Dashboard</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body x-data="{ page: 'blog-grid', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
x-init="
     darkMode = JSON.parse(localStorage.getItem('darkMode'));
     $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
:class="{'dark bg-black': darkMode === true}">

    @include('layouts.partials.header-dashboard')

    <main>
        <!-- ===== Contents Start ===== -->
        <section class="py-20 lg:py-25 xl:py-30">
            <div class="mx-auto max-w-1280 px-4 md:px-8 xl:px-0 mt-12.5 lg:mt-17.5">
                <h4 class="font-medium text-xl text-primary mb-5">¡Hola!</h4>
                <h2 class="font-semibold text-3xl lg:text-4xl xl:text-title-xl text-black dark:text-white mb-7.5">
                    Listado de Contenidos
                </h2>
            </div>
            <div class="mx-auto max-w-1280 px-4 md:px-8 xl:px-0 mt-12.5 lg:mt-17.5">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>URL</th>
                            <th>Fecha de Publicación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th>{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->author }}</td>
                                <td>{{ $post->url }}</td>
                                <td>{{ $post->date_publication }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        <!-- ===== Contents End ===== -->
      </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.scrolltop')
</body>
</html>
