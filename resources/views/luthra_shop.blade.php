<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  @vite('resources/css/app.css')
  

    
  @vite('resources/css/main.css')
  @vite('resources/js/app.js')
</head>
<body class="overflow-x-hidden">
  <section class="shadow-lg font-Roboto bg-transparent top-0 ">
    <div class="max-w-6xl px-4 mx-auto" x-data="{open:false}">
        <nav class="flex items-center justify-between py-4">
            <a href="" class="text-3xl font-semibold leading-none dark:text-gray-400">Logo</a>
            <div class="flex lg:hidden">
                <button
                    class="  px-4 py-2.5 mr-3 bg-blue-600 dark:bg-blue-300 dark:hover:text-blue-700 dark:text-gray-700 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg   transition duration-150 ease-in-out flex items-center"
                    type="button" id="">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                        </path>
                    </svg>
                </button>
                <button
                    class="flex items-center px-3 py-2 text-blue-600 border border-blue-200 rounded dark:text-gray-400 navbar-burger hover:text-blue-800 hover:border-blue-300 lg:hidden"
                    @click="open =true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>
            </div>
            <ul class="hidden lg:w-auto lg:space-x-12 lg:items-center lg:flex ">
                <li><a href="" class="text-sm text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-blue-500">Home</a>
                </li>
                <li><a href="" class="text-sm text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-blue-500">About us</a>
                </li>
                <li><a href="" class="text-sm text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-blue-500">Features</a>
                </li>
                <li><a href="" class="text-sm text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-blue-500">Blog </a>
                </li>
                <li><a href="" class="text-sm text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-blue-500">Testimonials</a>
                </li>
            </ul>
            <div class="hidden lg:flex">
                <a href=""
                    class="inline-block px-4 py-3 mr-3 text-xs font-semibold leading-none text-blue-600 border border-blue-200 rounded dark:hover:text-gray-700 dark:text-gray-400 dark:border-gray-400 hover:text-blue-700 hover:bg-blue-300">
                    Contact Us</a>
                <button
                    class="flex items-center px-4 py-2.5 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-blue-600 rounded shadow-md dark:bg-blue-300 dark:text-gray-700 hover:bg-blue-700 hover:shadow-lg dark:hover:text-blue-700"
                    type="button" id="">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                        </path>
                    </svg>
                </button>
            </div>
        </nav>
        <!-- Mobile Sidebar -->
        <div class="fixed inset-0 w-full bg-gray-800 opacity-25 dark:bg-gray-400 lg:hidden"
            :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
        </div>
        <div class="absolute inset-0 z-10 h-screen p-3 text-gray-700 duration-500 transform bg-gray-700 shadow-md dark:bg-gray-800 w-80 lg:hidden lg:transform-none lg:relative"
            :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
            <div class="flex justify-between lg:">
                <a class="p-2 text-2xl font-bold text-gray-300" href="#">Logo</a>
                <button class="p-2 text-gray-300 rounded-md hover:text-blue-300 lg:hidden " @click="open=false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>
            </div>
            <ul class="px-4 text-left mt-7">
                <li class="pb-3">
                    <a href="" class="text-sm text-gray-100 hover:text-blue-400 dark:text-gray-400">Home</a>
                </li>
                <li class="pb-3">
                    <a href="" class="text-sm text-gray-100 hover:text-blue-400 dark:text-gray-400">About us</a>
                </li>
                <li class="pb-3">
                    <a href="" class="text-sm text-gray-100 hover:text-blue-400 dark:text-gray-400">Features</a>
                </li>
                <li class="pb-3">
                    <a href="" class="text-sm text-gray-100 hover:text-blue-400 dark:text-gray-400">Blog </a>
                </li>
                <li class="pb-3">
                    <a href="" class="text-sm text-gray-100 hover:text-blue-400 dark:text-gray-400">Testimonials</a>
                </li>
            </ul>
            <div class="flex justify-start px-4 mt-2">
                <a href=""
                    class="inline-block px-4 py-3 text-xs font-semibold text-gray-800 bg-blue-300 rounded dark:hover:text-gray-300 dark:text-gray-700 dark:border-gray-400 hover:text-gray-300 hover:bg-blue-600">
                    Contact Us</a>
            </div>
        </div>
    </div>
</section>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <section>
     
  
      <div class="relative py-12 bg-gray-900 sm:py-16 lg:py-20 xl:pt-32 xl:pb-44">
          <div class="absolute inset-0 hidden lg:block">
              <img class="object-cover object-right-bottom w-full h-full" src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/hero/1/background.png" alt="" />
          </div>
  
          <div class="relative px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
              <div class="max-w-xl mx-auto text-center lg:max-w-md xl:max-w-lg lg:text-left lg:mx-0">
                  <h1 class="text-3xl font-bold text-white sm:text-4xl xl:text-5xl xl:leading-tight">HEading text</h1>
                  <p class="mt-8 text-base font-normal leading-7 text-gray-400 lg:max-w-md xl:pr-0 lg:pr-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nunc nisl eu consectetur. Mi massa elementum odio eu viverra amet.</p>
  
                  <div class="flex items-center justify-center mt-8 space-x-5 xl:mt-16 lg:justify-start">
                      <a
                          href="#"
                          title=""
                          class="
                              inline-flex
                              items-center
                              justify-center
                              px-3
                              py-3
                              text-base
                              font-bold
                              leading-7
                              text-gray-900
                              transition-all
                              duration-200
                              bg-white
                              border border-transparent
                              rounded-md
                              sm:px-6
                              focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-white
                              hover:bg-gray-200
                          "
                          role="button"
                      >
                        Start
                      </a>
  
                      <a
                          href="#"
                          title=""
                          class="
                              inline-flex
                              items-center
                              justify-center
                              px-2
                              py-3
                              text-base
                              font-bold
                              leading-7
                              text-white
                              transition-all
                              duration-200
                              bg-transparent
                              border border-transparent
                              rounded-md
                              sm:px-4
                              focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-gray-700
                              hover:bg-gray-700
                          "
                          role="button"
                      >
                          Login
                      </a>
                  </div>
              </div>
          </div>
  
          <div class="mt-8 lg:hidden">
              <img class="object-cover w-full h-full" src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/hero/1/bg.png" alt="" />
          </div>
      </div>
  </section>

{{-- crousel --}}
<section class="">
    <div class="slider max-w-7xl mx-auto">
        <input type="radio" name="toggle" id="btn-1" checked>
        <input type="radio" name="toggle" id="btn-2">
        <input type="radio" name="toggle" id="btn-3">
      
        <div class="slider-controls">
          <label for="btn-1"></label>
          <label for="btn-2"></label>
          <label for="btn-3"></label>
        </div>
      
        <ul class="slides">
          <li class="slide ">
            <div class="slide-content p-4">
              <h2 class="slide-title">Slide #1</h2>
              <p class="slide-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat dignissimos commodi eos totam perferendis possimus dolorem, deleniti vitae harum? Enim.</p>
              <a href="#" class="slide-link">Learn more</a>
            </div>
            <p class="slide-image py-2">
              <img src="{{ asset('images/gallery2.jpg') }} " alt="stuff" width="320" height="240">
            </p>
          </li>
          <li class="slide ">
            <div class="slide-content p-4">
              <h2 class="slide-title">Slide #2</h2>
              <p class="slide-text">Nisi ratione magni ea quis animi incidunt velit voluptate dolorem enim possimus, nam provident excepturi ipsam nihil molestiae minus delectus!</p>
              <a href="#" class="slide-link">Amazing deal</a>
            </div>
            <p class="slide-image py-2">
              <img src="{{ asset('images/gallery2.jpg') }}" alt="stuff" width="320" height="240">
            </p>
          </li>
          <li class="slide ">
            <div class="slide-content p-4">
              <h2 class="slide-title">Slide #3</h2>
              <p class="slide-text">Quisquam quod ut quasi, vero obcaecati laudantium asperiores corporis ad atque. Expedita fugit dicta maxime vel doloribus sequi, facilis dignissimos.</p>
              <a href="#" class="slide-link">Get started</a>
            </div>
            <p class="slide-image py-2">
              <img src="{{ asset('images/gallery2.jpg') }} " alt="stuff" width="320" height="240">
            </p>
          </li>
        </ul>
      </div>
</section>
{{-- crousel ends --}}

  {{-- product categories --}}


  <section class="flex items-center py-7 font-Raleway bg-slate-950 bg-cover bg-transparent "  >
    <div class="container mx-auto max-w-7xl">
        <h1 class="relative mb-4 text-3xl font-black leading-tight text-black sm:text-6xl xl:mb-8">Explore The Next Great Products For Luthra Traders</h1>
        <p class="pr-0 mb-8 text-base text-gray-800 sm:text-lg xl:text-xl lg:pr-20">Are you ready to start your
            your journey with luthra traders</p>
        <div class="grid grid-cols-3 gap-3">
            <div class="relative rounded-sm overflow-hidden group">
                <img src="{{ asset('images/gallery2.jpg') }}" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Bedroom</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="{{ asset('images/gallery2.jpg') }}" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Mattrass</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="{{ asset('images/gallery2.jpg') }}" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Outdoor
                </a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="{{ asset('images/gallery2.jpg') }}" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Sofa</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="{{ asset('images/gallery2.jpg') }}" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Living
                    Room</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="{{ asset('images/gallery2.jpg') }}" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Kitchen</a>
            </div>
        </div>
    </div>
</section>

  {{-- product categories --}}
  {{-- products --}}

  <section class="flex items-center py-16 font-Roboto bg-slate-950">
    <div class="px-4 mx-auto max-w-7xl">
      <h1 class="relative mb-4 text-3xl font-black leading-tight text-white sm:text-6xl xl:mb-8">Explore The Next Great Products For Luthra Traders</h1>
      <p class="pr-0 mb-8 text-base text-gray-200 sm:text-lg xl:text-xl lg:pr-20">Are you ready to start your
          your journey with luthra traders</p>
        <div class="grid grid-cols-1 gap-4 lg:gap-8 sm:gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <div class="w-full">
                <div class="p-6 bg-white rounded shadow dark:bg-gray-700 group">
                    <div class="block mb-2" href="#">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-full mx-auto transition-all rounded h-72 group-hover:scale-110"
                                    src="https://images.unsplash.com/photo-1530389912609-9a007b3c38a4?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80"
                                    alt="">
                            </div>
                            <div class="absolute flex flex-col top-4 right-4">
                                <a href="#" class="flex items-center">
                                    <div
                                        class="relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded dark:bg-gray-700 dark:text-white group-hover:translate-x-0 wishlist hover:bg-red-200 dark:hover:bg-red-600 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path
                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="flex items-center">
                                    <div
                                        class="relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded dark:bg-gray-700 dark:text-white group-hover:translate-x-0 wishlist hover:bg-red-200 dark:hover:bg-red-600 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                            <path
                                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h3 class="mb-2 text-xl font-bold dark:text-white">Nike Basketball</h3>
                        </a>
                        <p class="text-lg font-bold text-red-500 dark:text-red-300 ">
                            <span>$29.89</span>
                            <span class="text-xs font-semibold text-gray-400 line-through ">$33.69</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="p-6 bg-white rounded shadow dark:bg-gray-700 group">
                    <div class="block mb-2" href="#">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-full mx-auto transition-all rounded h-72 group-hover:scale-110"
                                    src="https://images.unsplash.com/photo-1530389912609-9a007b3c38a4?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80"
                                    alt="">
                            </div>
                            <div class="absolute flex flex-col top-4 right-4">
                                <a href="#" class="flex items-center">
                                    <div
                                        class="relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded dark:bg-gray-700 dark:text-white group-hover:translate-x-0 wishlist hover:bg-red-200 dark:hover:bg-red-600 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path
                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="flex items-center">
                                    <div
                                        class="relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded dark:bg-gray-700 dark:text-white group-hover:translate-x-0 wishlist hover:bg-red-200 dark:hover:bg-red-600 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                            <path
                                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h3 class="mb-2 text-xl font-bold dark:text-white">Nike Basketball</h3>
                        </a>
                        <p class="text-lg font-bold text-red-500 dark:text-red-300 ">
                            <span>$29.89</span>
                            <span class="text-xs font-semibold text-gray-400 line-through ">$33.69</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="p-6 bg-white rounded shadow dark:bg-gray-700 group">
                    <div class="block mb-2" href="#">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-full mx-auto transition-all rounded h-72 group-hover:scale-110"
                                    src="https://images.unsplash.com/photo-1530389912609-9a007b3c38a4?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80"
                                    alt="">
                            </div>
                            <div class="absolute flex flex-col top-4 right-4">
                                <a href="#" class="flex items-center">
                                    <div
                                        class="relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded dark:bg-gray-700 dark:text-white group-hover:translate-x-0 wishlist hover:bg-red-200 dark:hover:bg-red-600 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path
                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="flex items-center">
                                    <div
                                        class="relative flex items-center justify-center p-3 mb-3 transition-all translate-x-20 bg-white rounded dark:bg-gray-700 dark:text-white group-hover:translate-x-0 wishlist hover:bg-red-200 dark:hover:bg-red-600 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                            <path
                                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h3 class="mb-2 text-xl font-bold dark:text-white">Nike Basketball</h3>
                        </a>
                        <p class="text-lg font-bold text-red-500 dark:text-red-300 ">
                            <span>$29.89</span>
                            <span class="text-xs font-semibold text-gray-400 line-through ">$33.69</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  {{-- products ends --}}
    @include('components/footer')
</body>

  
  

</html>