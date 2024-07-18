<main>
    <section class="pt-35 md:pt-40 xl:pt-52 pb-20 lg:pb-30 xl:pb-59 relative overflow-hidden">
        <!-- Hero Images -->
        <div class="hidden md:block w-1/2 2xl:w-187.5 h-auto 2xl:h-171.5 absolute right-0 top-0">
          <img src="./images/shape/shape-01.svg" alt="shape" class="hidden 2xl:block absolute top-[40%] -left-[10%] z-1" />
          <img src="./images/shape/shape-02.svg" alt="shape" class="hidden 2xl:block absolute right-[20%] bottom-0 z-10" />
          <img src="./images/shape/shape-03.svg" alt="shape" class="hidden 2xl:block absolute left-[15%] bottom-[10%] z-10" />
          <img src="./images/shape/shape-04.svg" alt="shape" class="absolute right-0 top-0" />
          <img src="./images/hero/hero.png" alt="Woman" class="absolute right-0 top-0 z-1" />
        </div>

        <!-- Hero Content -->
        <div class="mx-auto max-w-1390 px-4 md:px-8 2xl:px-0">
          <div class="flex lg:items-center">
            <div class="animate_left md:w-1/2">
              <h1 class="font-semibold text-3xl lg:text-4xl xl:text-title-xxl text-black dark:text-white mb-6">We specialize in UI/UX, Web Development, Digital Marketing.</h1>
              <p class="xl:w-[79%]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla magna mauris. Nulla fermentum viverra sem eu rhoncus consequat varius nisi quis, posuere magna.
              </p>

              <div class="flex flex-col-reverse lg:flex-row gap-7.5 mt-10">
                <a href="#" class="font-medium leading-7 text-white bg-primary py-3 px-7.5 rounded-full ease-in-out duration-300 inline-flex w-fit hover:shadow-1"
                  >Get Started Now</a
                >

                <span class="flex flex-col">
                  <a href="#" class="inline-block font-medium text-lg text-black dark:text-white"> Call us (0123) 456 – 789 </a>
                  <span class="inline-block">For any question or concern</span>
                </span>
              </div>
            </div>
          </div>
        </div>
    </section>

    {{-- Section features --}}
    <section id="features">
        <div class="mx-auto max-w-1390 px-4 md:px-7.5 2xl:px-12.5">
          <div class="flex flex-wrap lg:flex-nowrap justify-center lg:justify-between gap-7.5 lg:gap-5 xl:gap-22.5">
            <!-- Small Features Item -->
            <div class="animate_top md:w-[45%] lg:w-1/3 flex gap-5 xl:gap-7.5">
              <div class="flex items-center justify-center shrink-0 w-21 h-21 rounded-full bg-secondary">
                <img src="./images/icon/icon-01.svg" alt="Icon" />
              </div>
              <div>
                <h4 class="font-medium text-xl md:text-title-sm text-black dark:text-white mb-2.5">24/7 Support</h4>
                <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
              </div>
            </div>

            <!-- Small Features Item -->
            <div class="animate_top md:w-[45%] lg:w-1/3 flex gap-5 xl:gap-7.5">
              <div class="flex items-center justify-center shrink-0 w-21 h-21 rounded-full bg-meta-green">
                <img src="./images/icon/icon-02.svg" alt="Icon" />
              </div>
              <div>
                <h4 class="font-medium text-xl md:text-title-sm text-black dark:text-white mb-2.5">Take Ownership</h4>
                <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
              </div>
            </div>

            <!-- Small Features Item -->
            <div class="animate_top md:w-[45%] lg:w-1/3 flex gap-5 xl:gap-7.5">
              <div class="flex items-center justify-center shrink-0 w-21 h-21 rounded-full bg-meta-orange">
                <img src="./images/icon/icon-03.svg" alt="Icon" />
              </div>
              <div>
                <h4 class="font-medium text-xl md:text-title-sm text-black dark:text-white mb-2.5">Team Work</h4>
                <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
              </div>
            </div>
          </div>
        </div>
    </section>
    {{-- End section features --}}

    {{-- Section about --}}
    <section class="py-20 lg:py-25 xl:py-30 2xl:py-35 overflow-hidden">
        <div class="mx-auto max-w-1390 px-4 md:px-8 xl:px-9">
          <div class="flex items-center gap-8 xl:gap-30">
            <!-- About Images -->
            <div class="animate_left hidden md:flex gap-8 md:w-1/2 relative">
              <div>
                <img src="./images/shape/shape-05.svg" alt="Shape" class="absolute -left-5 top-5" />
                <img src="./images/about/about-01.png" alt="About" class="mb-8" />
                <img src="./images/about/about-02.png" alt="About" />
              </div>
              <div>
                <img src="./images/shape/shape-06.svg" alt="Shape" />
                <img src="./images/about/about-03.png" alt="About" class="mt-7.5 mb-5" />
                <img src="./images/shape/shape-07.svg" alt="Shape" class="mx-auto" />
              </div>
            </div>

            <!-- About Content -->
            <div class="animate_right md:w-1/2">
              <h4 class="font-medium text-xl text-primary mb-5">Why Choose Us</h4>
              <h2 class="font-semibold text-3xl lg:text-4xl xl:text-title-xl text-black dark:text-white mb-7.5">We Make Our customers happy by giving Best services.</h2>
              <p class="lg:w-[95%]">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>

              <a href="https://www.youtube.com/watch?v=xcJtL7QggTI" data-fslightbox class="inline-flex items-center gap-6.5 mt-10">
                <span class="flex items-center justify-center w-12.5 h-12.5 rounded-full relative bg-primary z-1">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75 -z-1"></span>
                  <img src="./images/icon/icon-play.svg" alt="Play" />
                </span>
                <span class="text-black">SEE HOW WE WORK</span>
              </a>
            </div>
          </div>
        </div>
    </section>
    {{-- End section about --}}

    {{-- Section counter --}}
    <section class="relative overflow-hidden bg-whiten dark:bg-blacksection py-20 lg:py-22.5">
        <img src="./images/shape/shape-11.svg" alt="Shape" class="animate-rotating absolute left-[3%] bottom-[3%] w-14.5" />
        <img src="./images/shape/shape-07.svg" alt="Shape" class="absolute top-[6%] right-[2%] w-21 rotate-90" />
        <img src="./images/shape/shape-14.svg" alt="Shape" class="absolute left-[35%] top-[1%]" />
        <img src="./images/shape/shape-15.svg" alt="Shape" class="absolute right-0 bottom-0" />

        <div class="mx-auto max-w-1390 relative z-10 px-4 md:px-8 xl:px-36.5">
          <div class="flex flex-wrap md:flex-nowrap md:items-center justify-center md:justify-between gap-8">
            <div class="animate_top w-2/5 md:w-auto text-center">
              <h2 class="font-bold text-3xl lg:text-4xl xl:text-title-xxl text-black dark:text-white mb-0.5">785</h2>
              <p class="font-medium text-base lg:text-title-xsm2">Global Brands</p>
            </div>
            <div class="animate_top w-2/5 md:w-auto text-center">
              <h2 class="font-bold text-3xl lg:text-4xl xl:text-title-xxl text-black dark:text-white mb-0.5">533</h2>
              <p class="font-medium text-base lg:text-title-xsm2">Happy Clients</p>
            </div>
            <div class="animate_top w-2/5 md:w-auto text-center">
              <h2 class="font-bold text-3xl lg:text-4xl xl:text-title-xxl text-black dark:text-white mb-0.5">865</h2>
              <p class="font-medium text-base lg:text-title-xsm2">Winning Award</p>
            </div>
            <div class="animate_top w-2/5 md:w-auto text-center">
              <h2 class="font-bold text-3xl lg:text-4xl xl:text-title-xxl text-black dark:text-white mb-0.5">346</h2>
              <p class="font-medium text-base lg:text-title-xsm2">Happy Clients</p>
            </div>
          </div>
        </div>
    </section>
    {{-- End section counter --}}

    {{-- Section blog --}}
    <section class="py-20 lg:py-25 xl:py-30">
        <!-- Section Title Start -->
        <div class="animate_top mx-auto max-w-1390 text-center px-4 md:px-8 xl:px-0">
            <h2 x-text="sectionTitle" class="font-semibold text-3xl xl:text-title-xl text-black dark:text-white md:w-4/5 xl:w-1/2 mx-auto mb-4.5">Latest Blogs & News</h2>
            <p class="mx-auto md:w-4/5 lg:w-3/5 xl:w-[46%]" x-text="sectionTitleText">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
        </div>
        <!-- Section Title End -->

        <div class="mx-auto max-w-1280 px-4 md:px-8 xl:px-0 mt-12.5 lg:mt-17.5">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7.5 xl:gap-10">
            <!-- Blog Item -->
            <div class="animate_top rounded-lg shadow-3 dark:bg-blacksection dark:shadow-none">
              <div class="group block relative z-1 overflow-hidden">
                <img class="w-full" src="./images/blog/blog-01.png" alt="Blog" />

                <div
                  class="group-hover:translate-y-0 absolute top-0 left-0 translate-y-full w-full h-full rounded-t-lg flex items-center justify-center backdrop-blur bg-white/20 ease-linear duration-300 z-10"
                >
                  <a href="./blog-single.html" class="inline-flex font-medium rounded-full text-white bg-primary hover:bg-secondary ease-in-out duration-300 py-3 px-7.5"
                    >Read More</a
                  >
                </div>
              </div>

              <div class="p-7.5">
                <div class="flex flex-wrap items-center gap-2 xl:gap-5">
                  <div class="flex items-center gap-2">
                    <img src="./images/icon/icon-man.svg" alt="User" />
                    <p>Musharof Chy</p>
                  </div>
                  <div class="flex items-center gap-2">
                    <img src="./images/icon/icon-calender.svg" alt="Calender" />
                    <p>25 Dec, 2025</p>
                  </div>
                </div>
                <h4 class="font-medium text-2xl ease-in-out duration-300 text-black dark:text-white hover:text-primary xl:w-[90%] mt-3">
                  <a href="blog-single.html">Free advertising for your online business</a>
                </h4>
              </div>
            </div>

            <!-- Blog Item -->
            <div class="animate_top rounded-lg shadow-3 dark:bg-blacksection dark:shadow-none">
              <div class="group block relative z-1 overflow-hidden">
                <img class="w-full" src="./images/blog/blog-02.png" alt="Blog" />

                <div
                  class="group-hover:translate-y-0 absolute top-0 left-0 translate-y-full w-full h-full rounded-t-lg flex items-center justify-center backdrop-blur bg-white/20 ease-linear duration-300 z-10"
                >
                  <a href="./blog-single.html" class="inline-flex font-medium rounded-full text-white bg-primary hover:bg-secondary ease-in-out duration-300 py-3 px-7.5"
                    >Read More</a
                  >
                </div>
              </div>

              <div class="p-7.5">
                <div class="flex flex-wrap items-center gap-2 xl:gap-5">
                  <div class="flex items-center gap-2">
                    <img src="./images/icon/icon-man.svg" alt="User" />
                    <p>Musharof Chy</p>
                  </div>
                  <div class="flex items-center gap-2">
                    <img src="./images/icon/icon-calender.svg" alt="Calender" />
                    <p>25 Dec, 2025</p>
                  </div>
                </div>
                <h4 class="font-medium text-2xl ease-in-out duration-300 text-black dark:text-white hover:text-primary xl:w-[90%] mt-3">
                  <a href="blog-single.html">9 simple ways to improve your design skills</a>
                </h4>
              </div>
            </div>

            <!-- Blog Item -->
            <div class="animate_top rounded-lg shadow-3 dark:bg-blacksection dark:shadow-none">
              <div class="group block relative z-1 overflow-hidden">
                <img class="w-full" src="./images/blog/blog-03.png" alt="Blog" />

                <div
                  class="group-hover:translate-y-0 absolute top-0 left-0 translate-y-full w-full h-full rounded-t-lg flex items-center justify-center backdrop-blur bg-white/20 ease-linear duration-300 z-10"
                >
                  <a href="./blog-single.html" class="inline-flex font-medium rounded-full text-white bg-primary hover:bg-secondary ease-in-out duration-300 py-3 px-7.5"
                    >Read More</a
                  >
                </div>
              </div>

              <div class="p-7.5">
                <div class="flex flex-wrap items-center gap-2 xl:gap-5">
                  <div class="flex items-center gap-2">
                    <img src="./images/icon/icon-man.svg" alt="User" />
                    <p>Musharof Chy</p>
                  </div>
                  <div class="flex items-center gap-2">
                    <img src="./images/icon/icon-calender.svg" alt="Calender" />
                    <p>25 Dec, 2025</p>
                  </div>
                </div>
                <h4 class="font-medium text-2xl ease-in-out duration-300 text-black dark:text-white hover:text-primary xl:w-[90%] mt-3">
                  <a href="blog-single.html">Tips to quickly improve your coding speed.</a>
                </h4>
              </div>
            </div>
          </div>
        </div>
    </section>
    {{-- End section blog --}}

    {{-- CTA --}}
    @include('layouts.partials.cta')

</main>
