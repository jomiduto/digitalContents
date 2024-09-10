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
                <h4 class="font-medium text-xl text-primary mb-5"><a href="{{route('posts.create')}}">Crear publicación</a></h4>
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
                                    <td class="px-6 py-4">{{ $post->created_at->format('d/m/y') }}</td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </a>
                                    </td>
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
