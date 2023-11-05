<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/main.css')
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
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
            <h1 class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-6xl xl:mb-8">Explore The Next Great Things With Luthra Traders</h1>
            <p class="pr-0 mb-8 text-base text-gray-600 sm:text-lg xl:text-xl lg:pr-20">Are you ready to start your
                your journey with luthra traders</p>
            <a href="#explore"
                class="relative z-0 self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-indigo-600 border-t border-gray-200 rounded-md shadow-xl sm:mt-1 fold-bold lg:mx-0">Start Exploring</a>
          
            <svg class="absolute left-0 max-w-md mt-24 -ml-64 left-svg" viewBox="0 0 423 423"
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
<section class="bg-gray-50 dark:bg-gray-800">
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
          <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{ asset('images/logo.png') }}" alt="dashboard feature image">
      </div>
      
  </div>
</section>

{{-- our services starts --}}

<!-- component -->


<!-- ====== Services Section Start -->
<section class="p-1" id="explore">
   <div class="container mx-auto max-w-7xl">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4">
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
                  There are many variations of passages of Lorem Ipsum available
                  but the majority have suffered alteration in some form.
               </p>
            </div>
         </div>
      </div>
      <div class="flex flex-wrap -mx-4">
        @foreach ($services as $services)
          
       
         <a href="{{'enquire_service/'.$services->id}}" class="w-full md:w-1/2 lg:w-1/3 px-4 ">
            <div
               class=" cursor-pointer
               p-10 md:px-7 xl:px-10 rounded-[20px]
               bg-purple-600
               shadow-lg
               shadow-sky-100
               hover:shadow-xl
               hover:bg-rose-100
               text-white
               hover:text-gray-700
               hover:scale-105
               transition duration-500
               mb-8
               "
               >
            
               <h4 class="font-semibold text-2xl  text-dark mb-1 font-Raleway">
                  {{ $services->service_name }}
               </h4>
               <p class="text-base font-semibold text-justify leading-normal font-Roboto ">
                
                {{ Str::limit($services->description,150) }}
               </p>
            </div>
         </a>
         @endforeach
        
         
         
      </div>
   </div>
</section>
<!-- ====== Services Section End -->
<section class="py-6">
    <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
        <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{ asset('images/bg.png') }}" alt="feature image 2">
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
  <div class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
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
@include('components/footer')
</body>

  
</html>