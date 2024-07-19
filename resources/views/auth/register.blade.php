
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Digital Contents - Crear Cuenta</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
  </head>
  <body
    x-data="{ page: 'signup', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-black': darkMode === true}"
  >
    <!-- Include header -->
    @include('layouts.partials.header')

    <main>
        <!-- ===== SignUp Form Start ===== -->
        <section class="relative overflow-hidden bg-whiter dark:bg-blacksection px-4 md:px-8 xl:px-0 pt-35 lg:pt-45 xl:pt-50 pb-20 lg:pb-25 xl:pb-30">
          <!-- Bg Shapes -->
          <img src="./images/shape/shape-06.svg" alt="Shape" class="absolute top-[30%] left-[2%]" />
          <img src="./images/shape/shape-03.svg" alt="Shape" class="absolute bottom-[40%] right-[15%]" />
          <img src="./images/shape/shape-17.svg" alt="Shape" class="absolute bottom-[5%] right-[2%]" />
          <img src="./images/shape/shape-18.svg" alt="Shape" class="absolute bottom-0 right-0" />

          <div class="animate_top mx-auto max-w-550 relative z-10 rounded-lg bg-white dark:bg-black shadow-3 dark:shadow-none py-9 md:py-11.5 lg:py-16.5 px-7.5 md:px-12.5 lg:px-17.5">
            <!-- Bg Border -->
            <span class="block absolute top-0 left-0 w-1/2 h-1.5 rounded-tl-lg bg-primary"></span>
            <span class="block absolute top-0 right-0 w-1/2 h-1.5 rounded-tr-lg bg-secondary"></span>

            <div class="text-center">
              <h2 class="font-medium text-title-lg2 text-black dark:text-white mb-2.5">Crea tu cuenta</h2>

              <span class="relative block font-outfit font-light text-lg">
                <span class="block absolute left-0 top-1/2 h-[1px] w-22.5 bg-strokedark dark:bg-stroke"></span>
                <span class="block absolute right-0 top-1/2 h-[1px] w-22.5 bg-strokedark dark:bg-stroke"></span>

                Completa el formulario
              </span>
            </div>

            <form class="mt-9" action="{{route('register')}}" method="POST" autocomplete="off" novalidate>
            @csrf
              <div class="mb-6">
                <label class="block text-black dark:text-white mb-3" for="name">Nombre</label>
                <input
                  type="text"
                  name="name"
                  id="name"
                  placeholder="Jose Dueñas"
                  class="w-full bg-white rounded-full shadow-4 border border-strokedark focus-visible:outline-none focus:border-primary focus:shadow-4 placeholder:text-body/50 py-3.5 px-6 dark:bg-black dark:shadow-none dark:border-stroke dark:focus:border-primary/40"
                />
                @error('name')
                    <p class="bg-secondary rounded-full text-white text-center text-sm p-2">{{ $message }}</p>
                @enderror
              </div>


              <div class="mb-6">
                <label class="block text-black dark:text-white mb-3" for="username">Usuario</label>
                <input
                  type="text"
                  name="username"
                  id="username"
                  placeholder="jomiduto"
                  class="w-full bg-white rounded-full shadow-4 border border-strokedark focus-visible:outline-none focus:border-primary focus:shadow-4 placeholder:text-body/50 py-3.5 px-6 dark:bg-black dark:shadow-none dark:border-stroke dark:focus:border-primary/40"
                />
                @error('username')
                    <p class="bg-secondary rounded-full text-white text-center text-sm p-2">{{ $message }}</p>
                @enderror
              </div>

              <div class="mb-6">
                <label class="block text-black dark:text-white mb-3" for="email">Email</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  placeholder="example@gmail.com"
                  class="w-full bg-white rounded-full shadow-4 border border-strokedark focus-visible:outline-none focus:border-primary focus:shadow-4 placeholder:text-body/50 py-3.5 px-6 dark:bg-black dark:shadow-none dark:border-stroke dark:focus:border-primary/40"
                />
                @error('email')
                    <p class="bg-secondary rounded-full text-white text-center text-sm p-2">{{ $message }}</p>
                @enderror
              </div>

              <div class="mb-6">
                <label class="block text-black dark:text-white mb-3" for="birthdate">Fecha de nacimiento</label>
                <input
                  type="date"
                  name="birthdate"
                  id="birthdate"
                  class="w-full bg-white rounded-full shadow-4 border border-strokedark focus-visible:outline-none focus:border-primary focus:shadow-4 placeholder:text-body/50 py-3.5 px-6 dark:bg-black dark:shadow-none dark:border-stroke dark:focus:border-primary/40"
                />
                @error('birthdate')
                    <p class="bg-secondary rounded-full text-white text-center text-sm p-2">{{ $message }}</p>
                @enderror
              </div>

              <div class="mb-6">
                <label class="block text-black dark:text-white mb-3" for="password">Contraseña</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  placeholder="**************"
                  class="w-full bg-white rounded-full shadow-4 border border-strokedark focus-visible:outline-none focus:border-primary focus:shadow-4 placeholder:text-body/50 py-3.5 px-6 dark:bg-black dark:shadow-none dark:border-stroke dark:focus:border-primary/40"
                />
                @error('password')
                    <p class="bg-secondary rounded-full text-white text-center text-sm p-2">{{ $message }}</p>
                @enderror
              </div>

              <div class="mb-6">
                <label class="block text-black dark:text-white mb-3" for="password_confirmation">Repite la contraseña</label>
                <input
                  type="password"
                  name="password_confirmation"
                  id="password_confirmation"
                  placeholder="**************"
                  class="w-full bg-white rounded-full shadow-4 border border-strokedark focus-visible:outline-none focus:border-primary focus:shadow-4 placeholder:text-body/50 py-3.5 px-6 dark:bg-black dark:shadow-none dark:border-stroke dark:focus:border-primary/40"
                />
                @error('password_confirmation')
                    <p class="bg-secondary rounded-full text-white text-center text-sm p-2">{{ $message }}</p>
                @enderror
              </div>

              <button class="w-full text-center font-medium block rounded-full bg-primary text-white ease-in-out duration-300 hover:shadow-1 py-3 px-7.5">
                Crear Cuenta
              </button>

              <p class="font-outfit font-light text-lg text-center mt-7.5">
                ¿Ya tienes una cuenta?
                <a class="text-primary" href="{{route('login')}}"> Inicia Sesión </a>
              </p>
            </form>
          </div>
        </section>
        <!-- ===== SignUp Form End ===== -->
    </main>
    {{-- Include footer --}}
    @include('layouts.partials.footer')
    {{-- Include scrolltop --}}
    @include('layouts.partials.scrolltop')
  </body>
</html>
