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
        <!-- ===== Blog Grid Start ===== -->
        <section class="py-20 lg:py-25 xl:py-30">
            <div class="mx-auto max-w-1280 px-4 md:px-8 xl:px-0 mt-12.5 lg:mt-17.5">
                <h4 class="font-medium text-xl text-primary mb-5">¡Hola, {{ $user->name }}!</h4>
                <h2 class="font-semibold text-3xl lg:text-4xl xl:text-title-xl text-black dark:text-white mb-7.5">
                    Tenemos estos recursos para ti...
                </h2>
            </div>
            <div class="mx-auto max-w-1280 px-4 md:px-8 xl:px-0 mt-12.5 lg:mt-17.5">
                <h1>Este contenido es público</h1>
            </div>
            <div class="mx-auto max-w-1280 px-4 md:px-8 xl:px-0 mt-12.5 lg:mt-17.5">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7.5 xl:gap-10">
                    <!-- Blog Item -->
                    @foreach ($posts as $post)
                        <div class="animate_top rounded-lg shadow-3 dark:bg-blacksection dark:shadow-none">
                            <div class="group block relative z-1 overflow-hidden">
                            <img class="w-full" src="{{ $post->image }}" alt="{{ $post->title }}" />

                            <div
                                class="group-hover:translate-y-0 absolute top-0 left-0 translate-y-full w-full h-full rounded-t-lg flex items-center justify-center backdrop-blur bg-white/20 ease-linear duration-300 z-10"
                            >
                                <a href="./blog-single.html" class="inline-flex font-medium rounded-full text-white bg-primary hover:bg-secondary ease-in-out duration-300 py-3 px-7.5"
                                >Leer Más</a>
                            </div>
                            </div>

                            <div class="p-7.5">
                            <div class="flex flex-wrap items-center gap-2 xl:gap-5">
                                <div class="flex items-center gap-2">
                                <img src="./images/icon/icon-man.svg" alt="User" />
                                <p>{{ $post->author }}</p>
                                </div>
                                <div class="flex items-center gap-2">
                                <img src="./images/icon/icon-calender.svg" alt="Calender" />
                                <p>{{ $post->created_at->format('d M, Y') }}</p>
                                </div>
                            </div>
                            <h4 class="font-medium text-2xl ease-in-out duration-300 text-black dark:text-white hover:text-primary xl:w-[90%] mt-3">
                                <a href="blog-single.html">{{$post->title}}</a>
                            </h4>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-10 lg:mt-15 xl:mt-20 relative z-1">
                <nav>
                    <ul class="flex items-center justify-center gap-3">
                    <li>
                        <a
                        class="group flex items-center justify-center w-7.5 md:w-10 h-7.5 md:h-10 rounded-full text-xs md:text-base shadow-6 dark:shadow-none ease-in-out duration-300 bg-white dark:bg-blacksection hover:bg-primary dark:hover:bg-primary hover:text-white dark:hover:text-white"
                        href="#"
                        >
                        <svg class="fill-body group-hover:fill-white ease-in-out duration-300" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.93884 6.99999L7.88884 11.95L6.47484 13.364L0.11084 6.99999L6.47484 0.635986L7.88884 2.04999L2.93884 6.99999Z" />
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a
                        class="group flex items-center justify-center w-7.5 md:w-10 h-7.5 md:h-10 rounded-full text-xs md:text-base shadow-6 dark:shadow-none ease-in-out duration-300 bg-white dark:bg-blacksection hover:bg-primary dark:hover:bg-primary hover:text-white dark:hover:text-white"
                        href="#"
                        >
                        2
                        </a>
                    </li>
                    <li>
                        <a
                        class="group flex items-center justify-center w-7.5 md:w-10 h-7.5 md:h-10 rounded-full text-xs md:text-base shadow-6 dark:shadow-none ease-in-out duration-300 bg-white dark:bg-blacksection hover:bg-primary dark:hover:bg-primary hover:text-white dark:hover:text-white"
                        href="#"
                        >
                        3
                        </a>
                    </li>
                    <li>
                        <a
                        class="group flex items-center justify-center w-7.5 md:w-10 h-7.5 md:h-10 rounded-full text-xs md:text-base shadow-6 dark:shadow-none ease-in-out duration-300 bg-white dark:bg-blacksection hover:bg-primary dark:hover:bg-primary hover:text-white dark:hover:text-white"
                        href="#"
                        >
                        4
                        </a>
                    </li>
                    <li>
                        <a
                        class="group flex items-center justify-center w-7.5 md:w-10 h-7.5 md:h-10 rounded-full text-xs md:text-base shadow-6 dark:shadow-none ease-in-out duration-300 bg-white dark:bg-blacksection hover:bg-primary dark:hover:bg-primary hover:text-white dark:hover:text-white"
                        href="#"
                        >
                        ...
                        </a>
                    </li>
                    <li>
                        <a
                        class="group flex items-center justify-center w-7.5 md:w-10 h-7.5 md:h-10 rounded-full text-xs md:text-base shadow-6 dark:shadow-none ease-in-out duration-300 bg-white dark:bg-blacksection hover:bg-primary dark:hover:bg-primary hover:text-white dark:hover:text-white"
                        href="#"
                        >
                        12
                        </a>
                    </li>
                    <li>
                        <a
                        class="group flex items-center justify-center w-7.5 md:w-10 h-7.5 md:h-10 rounded-full text-xs md:text-base shadow-6 dark:shadow-none ease-in-out duration-300 bg-white dark:bg-blacksection hover:bg-primary dark:hover:bg-primary hover:text-white dark:hover:text-white"
                        href="#"
                        >
                        <svg class="fill-body group-hover:fill-white ease-in-out duration-300" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.06067 7.00001L0.110671 2.05001L1.52467 0.636014L7.88867 7.00001L1.52467 13.364L0.110672 11.95L5.06067 7.00001Z" fill="#fefdfo" />
                        </svg>
                        </a>
                    </li>
                    </ul>
                </nav>
                </div>
                <!-- Pagination -->
            </div>
        </section>
        <!-- ===== Blog Grid End ===== -->

        <!-- ===== CTA Start ===== -->
        @include('layouts.partials.cta')
        <!-- ===== CTA End ===== -->
      </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.scrolltop')
</body>
</html>
