<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/main.css')
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<style>
     .filled-star {
            fill: gold; /* Change the color of the filled star here */
        }
</style>
<body class="overflow-x-hidden">
  @include('components/header')
  {{-- <section class="bg-white dark:bg-gray-900 ">
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="font-Roboto max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">Building digital <br>products & brands.</h1>
            <p class="max-w-2xl mb-6 font-semibold font-popin text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">This free and open-source landing page template was built using the utility classes from <a href="https://tailwindcss.com" class="hover:underline">Tailwind CSS</a> and based on the components from the <a href="https://flowbite.com/docs/getting-started/introduction/" class="hover:underline">Flowbite Library</a> and the <a href="https://flowbite.com/blocks/" class="hover:underline">Blocks System</a>.</p>
            <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">

            </div>
        </div>
        <div class=" lg:mt-0 lg:col-span-5 lg:flex">
            <div class="relative">
                <img id="rotating-image" src="{{ asset('images/bg.png') }}" alt="hero image" class="image-3d transform rotate-3 scale-105 oval-image">
            </div>
        </div>
    </div>
</section> --}}
<div class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 xl:pt-40 xl:pb-56 overflow-hidden">
    <div
        class="container flex flex-col items-center justify-between h-full max-w-6xl  mx-auto -mt-16 lg:flex-row xl:px-0">
        <div
            class="z-0 flex flex-col items-center w-full max-w-xl pt-40 text-center lg:items-start lg:w-1/2 lg:pt-16 xl:pt-16 lg:text-left">
            <h1 class="relative mb-1 text-3xl font-black leading-tight text-gray-900 sm:text-6xl xl:mb-8">Explore The Next Great Things With Luthra Traders</h1>
            <p class="pr-0 mb-8 text-base text-gray-600 sm:text-lg xl:text-xl lg:pr-20 z-10">Are you ready to start your
                your journey with luthra traders</p>
            <a href="#explore"
                class="relative z-10 self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-sky-600 border-t border-gray-200 rounded-md shadow-xl sm:mt-1 fold-bold lg:mx-0">Start Exploring</a>

            <svg class="absolute left-0 max-w-md mt-24 -ml-64 left-svg z-0" viewBox="0 0 423 423"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <linearGradient x1="100%" y1="0%" x2="4.48%" y2="0%" id="linearGradient-1">
                        <stop stop-color="#5C54DB" offset="0%" />
                        <stop stop-color="#6A82E7" offset="100%" />
                    </linearGradient>
                    <filter x="-9.3%" y="-6.7%" width="118.7%" height="118.7%" filterUnits="objectBoundingBox"
                        id="filter-3">
                        <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                        <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" in="shadowBlurOuter1" />
                    </filter>
                    <rect id="path-2" x="63" y="504" width="300" height="300" rx="40" />
                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity=".9">
                    <g id="Desktop-HD" transform="translate(-39 -531)">
                        <g id="Hero" transform="translate(43 83)">
                            <g id="Rectangle-6" transform="rotate(45 213 654)">
                                <use fill="#000" filter="url(#filter-3)" xlink:href="#path-2" />
                                <use fill="url(#linearGradient-1)" xlink:href="#path-2" />
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="relative  flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-4">
            <div class="container relative left-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen ">
                <img  src="{{ asset('images/bg.png') }}"
                    class="w-full h-full mt-20 ml-0 lg:mt-40 xl:mt-40 lg:mb-0 lg:h-full ">
            </div>
        </div>
    </div>
</div>
<section class="bg-white dark:bg-gray-800">
  <div class="max-w-screen-xl px-4 py-6 mx-auto space-y-2 lg:space-y-20 lg:py-12 lg:px-6">
      <!-- Row -->
      <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
          <div class="text-gray-500 sm:text-lg dark:text-gray-400">
              <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Why to choose us</h2>
              <p class="mb-8 font-light lg:text-xl font-Raleway">it's important to highlight the key features and advantages that set our business or service apart from the competition. </p>
              <!-- List -->
              <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                  <li class="flex space-x-3">
                      <!-- Icon -->
                      <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                      <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Unique Selling Proposition (USP)</span>
                  </li>
                  <li class="flex space-x-3">
                      <!-- Icon -->
                      <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                      <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Quality Assurance</span>
                  </li>
                  <li class="flex space-x-3">
                      <!-- Icon -->
                      <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                      <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Customer-Centric Approach</span>
                  </li>
              </ul>
              <p class="mb-8 font-light lg:text-xl font-Roboto">Sustainability and Social Responsibility</p>
          </div>
          <img class="hidden w-full mb-4 rounded-lg lg:mb-0  shadow-xl lg:flex" src="{{ asset('images/lbg1.png') }}" alt="Luthra rounded feature image">
      </div>

  </div>
</section>

{{-- our services starts --}}

<!-- component -->


<!-- ====== Services Section Start -->
<section class="p-1" id="explore">
   <div class="container mx-auto max-w-7xl">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-2">
            <div class="text-center mx-auto mb-4 max-w-[510px]">
               <span class="font-semibold text-lg text-primary mb-2 block">
               Our Services
               </span>
               <h2
                  class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[40px]
                  text-dark

                  "
                  >
                  What We Offer
               </h2>
               <p class="text-base text-body-color">
                We offer a wide range of products and services to cater to your diverse needs. Our commitment is to provide you with top-notch quality and exceptional value. Whether you're looking for cutting-edge technology solutions, personalized consulting, or innovative products
               </p>
            </div>
         </div>
      </div>
      <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 grid-cols-1  ">
        @foreach ($services as $services)


         <a href="{{'enquire_service/'.$services->id}}" class="w-full px-5 ">
            <div
               class=" cursor-pointer
               p-5 md:px-7 xl:px-10 rounded-[20px]
               bg-purple-600
               shadow-lg
               shadow-sky-100
               hover:shadow-xl
               hover:bg-indigo-400
               text-white

               hover:scale-105
               transition duration-500
               mb-8
               "
               >

               <h4 class="font-semibold text-2xl  text-dark mb-1 font-Raleway">
                  {{ $services->service_name }}
               </h4>
               <p class="text-xl  text-justify leading-normal font-Roboto ">

                {{ $services->description }}
               </p>
            </div>
         </a>
         @endforeach



      </div>
   </div>
</section>
<!-- ====== Services Section End -->
<section class="py-6 px-2">
    <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16 max-w-7xl mx-auto">
        <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex shadow-lg" src="{{ asset('images/lbg2.png') }}" alt="feature image 2">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">What features we provide with our services</h2>
            <p class="mb-8 font-light lg:text-xl font-Raleway">We take pride in offering a comprehensive range of features and benefits with our services, all designed to enhance your experience and meet your specific needs. </p>
            <!-- List -->
            <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Competitive Pricing</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Satisfaction Guarantee</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Environmental Responsibility</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Easy Access to Resources</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Proven Track Record</span>
                </li>
            </ul>
            <p class="font-light lg:text-xl font-Raleway">Our success stories and satisfied clients speak for themselves. We have a proven track record of delivering results.</p>
        </div>
    </div>
</section>
{{-- our services --}}

<section class="bg-white dark:bg-gray-900">
  <div class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-16 lg:px-6">
      <div class="col-span-2 mb-8">
          <p class="text-lg font-medium text-purple-600 dark:text-purple-500">Trusted by people</p>
          <h2 class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-gray-900 md:text-3xl dark:text-white">Trusted by People for Our Services</h2>
          <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400 font-Raleway">we take immense pride in the trust and confidence our valued customers place in our services. With years of dedicated experience and a commitment to excellence, we have become the go-to choice for countless individuals and businesses alike.</p>

      </div>
      <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
          <div>
              <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path></svg>
              <h3 class="mb-2 text-2xl font-bold dark:text-white">Unparalleled Expertise</h3>
              <p class="font-light text-gray-500 dark:text-gray-400 font-popin"> Our team consists of experts in their respective fields, ensuring that you receive top-notch solutions and guidance.</p>
          </div>
          <div>
              <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
              <h3 class="mb-2 text-2xl font-bold dark:text-white">Satisfied Clients</h3>
              <p class="font-light text-gray-500 dark:text-gray-400 font-popin">Our long list of satisfied clients and their positive feedback stand as a testament to our dedication.</p>
          </div>
          <div>
              <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path></svg>
              <h3 class="mb-2 text-2xl font-bold dark:text-white">Reliability</h3>
              <p class="font-light text-gray-500 dark:text-gray-400 font-popin">Count on us for consistent, dependable service that you can rely on whenever you need us.</p>
          </div>
          <div>
              <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
              <h3 class="mb-2 text-2xl font-bold dark:text-white">Community Engagement</h3>
              <p class="font-light text-gray-500 dark:text-gray-400 font-popin">Our commitment extends beyond business. We actively participate in community initiatives, showing that we care about the world we share.</p>
          </div>
      </div>
  </div>
</section>
{{-- reviews starts --}}
<section class=" bg-gray-50 py-5 font-poppins dark:bg-gray-800">
    <div class="max-w-6xl px-4 py-2 mx-auto lg:py-2 md:px-6">
        <div class="max-w-xl mx-auto">
            <div class="text-center ">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl font-bold dark:text-gray-200"> Customer <span class="text-blue-500"> Reviews
                        </span> </h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2 bg-blue-200">
                        </div>
                        <div class="flex-1 h-2 bg-blue-400">
                        </div>
                        <div class="flex-1 h-2 bg-blue-600">
                        </div>
                    </div>
                </div>
                <p class="mb-6 text-base text-center text-gray-500">
                    What users says about us
                </p>
            </div>
        </div>
        <div class="w-full flex items-center justify-center p-1 ">
            <form action="/review" method="post" class="lg:w-3/4 md:w-3/4 sm:w-full w-full pb-5">
                @csrf
                @method('post')
                  <div class="mb-6">
                    @if(session()->has('success'))
<div id="alert-1" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
<svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
</svg>
<span class="sr-only">Info</span>
<div class="ml-3 text-sm font-medium">
    {{ session()->get('success') }}
</div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
    </svg>
</button>
</div>



@endif
                      <h2 class="text-xl font-bold text-gray-700 dark:text-gray-400">
                          Please add your valuable review here </h2>
                  </div>
                  <div class="flex flex-wrap mb-4 -mx-2">
                      <div class="w-full px-2 mb-4 lg:mb-0 lg:w-1/2">
                          <input
                              class="w-full px-3 py-2 leading-loose bg-gray-100 border rounded-md dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700"
                             name="first_name" type="text" placeholder="First Name.." >
                             @if($errors->has('first_name'))
                             <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('first_name') }}</p>
                    @endif
                      </div>
                      <div class="w-full px-2 lg:w-1/2">
                          <input
                              class="w-full px-3 py-2 leading-loose bg-gray-100 border rounded-md dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700"
                             name="last_name" type="text" placeholder="Last Name.." >
                             @if($errors->has('last_name'))
                             <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('last_name') }}</p>
                    @endif
                      </div>
                  </div>
                  <div class="px-2 mb-6 ">
                    <div class="p-1">
                        <label for="rating" class="text-lg font-semibold text-black">Rate Us *</label>
                        <div class="flex items-center justify-center space-x-2">
                            <input type="radio" value="1" name="rating" id="star5" class="hidden" />
                            <label for="star5" class="text-2xl cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 star text-yellow-600">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.21 18.18 21.02 12 17.77 5.82 21.02 7 14.21 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg>
                            </label>
                            <input type="radio" value="2" name="rating" id="star4" class="hidden" />
                            <label for="star4" class="text-2xl cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 star text-yellow-600">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.21 18.18 21.02 12 17.77 5.82 21.02 7 14.21 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg>
                            </label>
                            <input type="radio" value="3" name="rating" id="star3" class="hidden" />
                            <label for="star3" class="text-2xl cursor-pointer">
                                <svg xmlns="http://w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 star text-yellow-600">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.21 18.18 21.02 12 17.77 5.82 21.02 7 14.21 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg>
                            </label>
                            <input type="radio" value="4" name="rating" id="star2" class="hidden" />
                            <label for="star2" class="text-2xl cursor-pointer">
                                <svg xmlns="http://w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 star text-yellow-600">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.21 18.18 21.02 12 17.77 5.82 21.02 7 14.21 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg>
                            </label>
                            <input type="radio" value="5" name="rating" id="star1" class="hidden" />
                            <label for="star1" class="text-2xl cursor-pointer">
                                <svg xmlns="http://w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 star text-yellow-600">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.21 18.18 21.02 12 17.77 5.82 21.02 7 14.21 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg>
                            </label>
                        </div>
                    </div>
                    @if($errors->has('rating'))
            <p class="text-xs italic text-red-500 text-start">{{ $errors->first('rating') }}</p>
            @endif
                </div>
                  <textarea rows="3" type="message" placeholder="Write a review..."
                     name="review" class="block w-full px-4 mb-4 leading-tight text-gray-700 bg-gray-100 border rounded dark:placeholder-gray-400 py-7 dark:text-gray-400 dark:border-gray-800 dark:bg-gray-700 "></textarea>
                     @if($errors->has('review'))
                     <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('review') }}</p>
            @endif
                     <button
                      class="w-full py-4 text-sm font-bold leading-normal text-white transition-all duration-300 bg-blue-600 rounded-md dark:bg-blue-500 dark:hover:bg-blue-600 hover:bg-blue-700">
                      Send Review
                  </button>
              </form>
        </div>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 ">
           @foreach ($reviews as $review )
           <div class="py-6 bg-white rounded-lg shadow-lg dark:bg-gray-900">
            <div
                class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
                <div class="flex items-center px-6 mb-2 md:mb-0 ">
                    <div class="flex mr-2 rounded-full">

                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                            {{ $review->name }}</h2>

                    </div>
                </div>
                <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Date:{{ $review->date }}
                </p>
            </div>
            <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
                {{ $review->review }}
            </p>
            <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
                <div class="flex px-6 mb-2 md:mb-0">
                    <ul class="flex items-center justify-start mr-4">
                        <li>


                            @for ($i = 1; $i <= 5; $i++)
                            <span class="star text-2xl {{ $i <= $review->rating ? 'text-yellow-600' : '' }}">&#9733;</span>


                        @endfor
                        </li>

                    </ul>
                    <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span
                            class="font-semibold text-gray-600 dark:text-gray-300">
                            {{ $review->rating }}</span>
                    </h2>
                </div>

            </div>
        </div>

           @endforeach





        </div>

    </div>


</section>
{{-- reviews --}}
@include('components/footer')
</body>

<script>
    const stars = document.querySelectorAll('.star');

    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            // Remove filled-star class from all stars
            stars.forEach((s) => s.classList.remove('filled-star'));

            // Add filled-star class to the clicked star and stars before it
            for (let i = 0; i <= index; i++) {
                stars[i].classList.add('filled-star');
            }
        });
    });
</script>
</html>
