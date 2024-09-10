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
                <h2 class="font-semibold text-3xl lg:text-4xl xl:text-title-xl text-black dark:text-white mb-7.5">
                    Listado de Contenidos
                </h2>
                <h4 class=url"font-medium text-xl text-primary mb-5"><a href="{{route('posts.create')}}">Crear publicación</a></h4>
            </div>
            <div class="mx-auto max-w-1280 px-4 md:px-8 xl:px-0 mt-12.5 lg:mt-17.5">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Id</th>
                                <th scope="col" class="px-6 py-3">Título</th>
                                <th scope="col" class="px-6 py-3">Autor</th>
                                <th scope="col" class="px-6 py-3">URL</th>
                                <th scope="col" class="px-6 py-3">Fecha de Publicación</th>
                                <th scope="col" class="px-6 py-3"><span class="sr-only">Editar</span></th>
                                <th scope="col" class="px-6 py-3"><span class="sr-only">Eliminar</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $post->id }}</th>
                                    <td class="px-6 py-4">{{ $post->title }}</td>
                                    <td class="px-6 py-4">{{ $post->author }}</td>
                                    <td class="px-6 py-4">{{ $post->url }}</td>
                                    <td class="px-6 py-4">{{ $post->date_publication }}</td>
                                    <td class="px-6 py-4 text-right"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a></td>
                                    <td class="px-6 py-4 text-right"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Eliminar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- ===== Contents End ===== -->
      </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.scrolltop')
</body>
</html>
