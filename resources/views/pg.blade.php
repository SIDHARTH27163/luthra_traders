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
  @include('components/header')
  <div class="bg-cream">
    <div class="max-w-screen-xl px-8 mx-auto flex flex-col lg:flex-row items-start py-24">
        <!--Left Col-->
        <div class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0">
            <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-white">
                <span class="text-yellow-500">let's start your journey with </span> Luthra pg's
            </h1>
            <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-2xl mb-8 text-gray-200">Success is most important part of life and it is determination of having achieved and
                accomplished
                aim with
                lots of failure
                enthusiam.</p>
            <div   class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5">
            {{-- <a data-modal-target="default-modal" data-modal-toggle="default-modal" class="cursor-pointer"><button  class="lg:mx-0 bg-yellow-500 text-white text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                    Contact Us
                </button></a> --}}

            </div>
        </div>
        <!--Right Col-->
        <div class="w-full lg:w-6/12 lg:-mt-10 relative" id="girl">
            <img data-aos="fade-up" data-aos-once="true" class="w-full mx-auto mt-12" src="{{ asset('images/ph_home.png') }}" alt="luthra pg" />
            <!-- calendar -->
            <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="absolute top-20 -left-6 sm:top-32 sm:left-10 md:top-40 md:left-16 lg:-left-0 lg:top-52 floating-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 text-amber-600  bg-opacity-80 rounded-lg h-20 sm:h-28">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
      </svg>

            </div>
            <!-- red -->
            <div data-aos="fade-up" data-aos-delay="400" data-aos-once="true" class="absolute top-20 right-10 sm:right-24 sm:top-28 md:top-36 md:right-32 lg:top-32 lg:right-16 floating">
                <svg class="h-16 sm:h-24" viewBox="0 0 149 149" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d)"><rect x="40" y="32" width="69" height="69" rx="14" fill="#F3627C"/></g><rect x="51.35" y="44.075" width="47.3" height="44.85" rx="8" fill="white"/><path d="M74.5 54.425V78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round"/><path d="M65.875 58.7375L65.875 78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round"/><path d="M83.125 63.9125V78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round"/><defs><filter id="filter0_d" x="0" y="0" width="149" height="149" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dy="8"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.825 0 0 0 0 0.300438 0 0 0 0 0.396718 0 0 0 0.26 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
            </div>
            <!-- ux class -->
            <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="absolute bottom-14 -left-4 sm:left-2 sm:bottom-20 lg:bottom-5 lg:-left-4 floating">
                {{-- <img class="bg-white bg-opacity-80 rounded-lg h-20 sm:h-28" src="img/ux-class.svg" alt=""> --}}
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-20 text-rose-600  bg-opacity-80 rounded-lg h-20 sm:h-28">
        <path fill-rule="evenodd" d="M1.371 8.143c5.858-5.857 15.356-5.857 21.213 0a.75.75 0 010 1.061l-.53.53a.75.75 0 01-1.06 0c-4.98-4.979-13.053-4.979-18.032 0a.75.75 0 01-1.06 0l-.53-.53a.75.75 0 010-1.06zm3.182 3.182c4.1-4.1 10.749-4.1 14.85 0a.75.75 0 010 1.061l-.53.53a.75.75 0 01-1.062 0 8.25 8.25 0 00-11.667 0 .75.75 0 01-1.06 0l-.53-.53a.75.75 0 010-1.06zm3.204 3.182a6 6 0 018.486 0 .75.75 0 010 1.061l-.53.53a.75.75 0 01-1.061 0 3.75 3.75 0 00-5.304 0 .75.75 0 01-1.06 0l-.53-.53a.75.75 0 010-1.06zm3.182 3.182a1.5 1.5 0 012.122 0 .75.75 0 010 1.061l-.53.53a.75.75 0 01-1.061 0l-.53-.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
      </svg>
            </div>
            <!-- congrats -->
            <div data-aos="fade-up" data-aos-delay="600" data-aos-once="true" class="absolute bottom-20 md:bottom-48 lg:bottom-52 -right-6 lg:right-8 floating-4">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-20 text-teal-600  bg-opacity-80 rounded-lg h-20 sm:h-28">
        <path fill-rule="evenodd" d="M20.03 3.97a.75.75 0 010 1.06L6.31 18.75h9.44a.75.75 0 010 1.5H4.5a.75.75 0 01-.75-.75V8.25a.75.75 0 011.5 0v9.44L18.97 3.97a.75.75 0 011.06 0z" clip-rule="evenodd" />
      </svg>

            </div>
        </div>
    </div>
    <div class="text-white -mt-14 sm:-mt-24 lg:-mt-36 z-40 relative">
        <svg class="xl:h-40 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" fill="currentColor"></path>
        </svg>
        <div class="bg-white w-full h-20 -mt-px"></div>
    </div>
</div>

<section class="flex flex-col py-5 items-center bg-gray-50  font-poppins  ">
    <h2 class="pb-2 text-xl font-bold my-5 text-center text-gray-800 md:text-3xl ">
       Pg Collection
    </h2>
    <div class="justify-center container px-6 max-w-7xl  py-4 mx-auto lg:py-0" id="room">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2  grid-cols-1  -mx-3 gap-5 px-2 py-4">
            @foreach ($data as $data )
            <div class=" px-3 mb-6 lg:px-2 w-full  transition duration-200 rounded-md shadow bg-white hover:bg-white  hover:shadow-xl">
                <div class="bg-white rounded-md ">
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="inline-block px-2 py-1 text-sm text-rose-500 rounded-full dark:bg-gray-700  bg-blue-50">
                                Available  For :{{ $data->tenants }}
                            </span>
                            <h2 class="text-sm font-medium "> Parking: {{ $data->parking }}</h2>
                        </div>
                        <h2 class="mb-3 text-xl font-semibold lg:text-2xl ">
                            {{ $data->category }}
                        </h2>
                        <h2 class="text-sm font-semibold font-Roboto mb-2"> {{ Str::limit($data->desc,150) }}</h2>
                        <div class="flex items-center justify-between mb-3">
                            <h2 class="text-lg font-medium flex flex-row gap-x-1 ">{{ $data->amount }} <svg xmlns="http://www.w3.org/2000/svg" class="text-green-500 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 8.25H9m6 3H9m3 6l-3-3h1.5a3 3 0 100-6M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                              </h2>

                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <a href="{{'luthra_pg/'.$data->id}}"
                                class="w-full px-4 py-2 text-center text-gray-100 font-Roboto bg-rose-600 rounded-md dark:bg-gray-700  dark:hover:bg-gray-900 hover:bg-blue-400">
                                View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
</section>
<section class="flex items-center py-5 bg-gray-100 dark:bg-gray-800 font-popin">
    <div class="max-w-6xl p-4 mx-auto">
        <h2 class="pb-4 text-4xl font-bold text-center text-gray-800 dark:text-gray-400">
            Our Gallery
        </h2>
        <div class="mx-auto mb-5 border-b border-red-700 w-44 dark:border-gray-400"></div>
        <div class="flex flex-wrap -m-1 md:-m-2">
            <div class="w-full px-4 mb-8 lg:w-2/5 ">
                <div class="relative overflow-hidden shadow-lg group">
                    <img src="{{ asset('images/gallery1.jpg') }}"
                        class="group-hover:origin-center group-hover:scale-105 transition inset-0 object-cover object-center  duration-500 w-full h-[350px]"
                        alt="luthra pg">
                    <div class="absolute inset-0 z-0 group-hover:bg-black opacity-60"></div>
                    <div class="absolute hidden p-4 text-center content left-4 bottom-4 right-4 group-hover:block">
                        <a href="#" class="mb-2 text-2xl font-semibold text-gray-100 dark:text-white ">
                            Terace With Sitting Area</a>
                        <h2 class="mb-0 text-sm font-light text-gray-300 dark:text-gray-300 ">
                            Transform your outdoor space into a haven of relaxation and socialization with a terrace featuring a thoughtfully designed sitting area. Whether you're a homeowner looking to enhance your property or a property manager aiming to attract tenants or guests, a well-crafted terrace with a sitting area can make all the difference. In this article, we will explore the concept of terraces with sitting areas, their benefits, and some tips for creating the perfect one.</h2>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 mb-8 lg:w-3/5 ">
                <div class="relative overflow-hidden shadow-lg group">
                    <img src="{{ asset('images/gallery2.jpg') }}"
                        class="group-hover:origin-center group-hover:scale-105 transition inset-0 object-cover object-center  duration-500 w-full h-[350px]"
                        alt="luthra pg">
                    <div class="absolute inset-0 z-0 group-hover:bg-black opacity-60"></div>
                    <div class="absolute hidden p-4 text-center content left-4 bottom-4 right-4 group-hover:block">
                        <a href="#" class="mb-2 text-2xl font-semibold text-gray-100 dark:text-white ">
                            Dhauladhar View</a>
                        <h2 class="mb-0 text-sm font-light text-gray-300 dark:text-gray-300 ">
                            A well-designed terrace can instantly elevate the overall aesthetics of your property. It provides an elegant and inviting atmosphere that can enhance the curb appeal and increase property value.</h2>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 mb-8 lg:w-3/5 ">
                <div class="relative overflow-hidden shadow-lg group">
                    <img src="{{ asset('images/gallery3.jpg') }}"
                        class="group-hover:origin-center group-hover:scale-105 transition inset-0 object-cover object-center  duration-500 w-full h-[350px]"
                        alt="luthra pg">
                    <div class="absolute inset-0 z-0 group-hover:bg-black opacity-60"></div>
                    <div class="absolute hidden p-4 text-center content left-4 bottom-4 right-4 group-hover:block">
                        <a href="#" class="mb-2 text-2xl font-semibold text-gray-100 dark:text-white ">
                            Well Furnished</a>
                        <h2 class="mb-0 text-sm font-light text-gray-300 dark:text-gray-300 ">
                            we understand the importance of finding the perfect place to call home, especially when you're away from your family. We offer more than just a place to stay; we offer a comfortable, safe, and welcoming environment for you to thrive during your time in </h2>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 mb-8 lg:w-2/5 ">
                <div class="relative overflow-hidden shadow-lg group">
                    <img src="{{ asset('images/gallery4.jpg') }}"
                        class="group-hover:origin-center group-hover:scale-105 transition inset-0 object-cover object-center  duration-500 w-full h-[350px]"
                        alt="luthra pg">
                    <div class="absolute inset-0 z-0 group-hover:bg-black opacity-60"></div>
                    <div class="absolute hidden p-4 text-center content left-4 bottom-4 right-4 group-hover:block">
                        <a href="#" class="mb-2 text-2xl font-semibold text-gray-100 dark:text-white ">
                            Himalyas</a>
                        <h2 class="mb-0 text-sm font-light text-gray-300 dark:text-gray-300 ">
                            we understand the importance of finding the perfect place to call home, especially when you're away from your family. We offer more than just a place to stay; we offer a comfortable, safe, and welcoming environment for you to thrive during your time in</h2>
                    </div>
                </div>
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
        <div class="p-2 flex w-full items-center justify-center mt-5  ">
            {!! $reviews->links() !!}

         </div>
    </div>


</section>
{{-- reviews --}}
{{-- <div class="bg-cover bg-white" style="background-image: url('{{ asset('images/bg2.jpg') }}');"> --}}
<section class="flex items-center bg-white font-Roboto " style="background-image: url('{{ asset('images/bg3.png') }}');">
    <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto lg:py-6 md:px-6">
        <h2 class="pb-2 text-2xl font-bold text-center text-gray-100 md:text-3xl ">
            Our Features
        </h2>
        <div class="w-20 mx-auto mb-8 border-b border-red-700 dark:border-gray-400"></div>
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4 mb-6 md:w-1/2 lg:w-1/3">
                <div
                    class="h-full p-6 text-center transition duration-200 rounded-md shadow bg-gray-50 hover:bg-white  hover:shadow-xl">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 mx-auto mb-6 bg-red-500 rounded-lg dark:bg-gray-600  text-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="w-5 h-5 bi bi-bank2" viewBox="0 0 16 16">
                            <path
                                d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                        </svg>
                    </div>
                    <h2 class="mb-4 text-xl font-bold leading-tight md:text-2xl ">Stunning Himalayan Views</h2>
                    <p class="font-medium text-gray-600 dark:text-gray-500 font-Raleway">Wake up to breathtaking views of the majestic Himalayan mountain range right from your room.</p>
                </div>
            </div>
            <div class="w-full px-4 mb-6 md:w-1/2 lg:w-1/3">
                <div
                    class="h-full p-6 text-center transition duration-200 rounded-md shadow bg-gray-50 hover:bg-white  hover:shadow-xl">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 mx-auto mb-6 bg-red-500 rounded-lg text-gray-50 dark:bg-gray-600 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="w-5 h-5 bi bi-bar-chart" viewBox="0 0 16 16">
                            <path
                                d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z" />
                        </svg>
                    </div>
                    <h2 class="mb-4 text-xl font-bold leading-tight md:text-2xl ">Privacy and Seclusion
                    </h2>
                    <p class="font-medium text-gray-600 dark:text-gray-500">Enjoy the privacy and seclusion you deserve. Our location is designed to give you an exclusive experience in the lap of nature.</p>
                </div>
            </div>
            <div class="w-full px-4 mb-6 md:w-1/2 lg:w-1/3">
                <div
                    class="h-full p-6 text-center transition duration-200 rounded-md shadow bg-gray-50  hover:bg-white hover:shadow-xl">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 mx-auto mb-6 bg-red-500 rounded-lg text-gray-50 dark:bg-gray-600 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="w-5 h-5 bi bi-map" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                        </svg>
                    </div>
                    <h2 class="mb-4 text-xl font-bold leading-tight md:text-2xl ">Enhanced Security</h2>
                    <p class="font-medium text-gray-600 dark:text-gray-500">Your safety is our utmost priority. We've implemented state-of-the-art security measures to ensure your peace of mind during your stay.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components/footer')
</body>


</html>
