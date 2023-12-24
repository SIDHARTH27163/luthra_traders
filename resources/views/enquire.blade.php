<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/main.css')
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>
  @include('components/header')
  <div class="bg-cream">
    <div class="max-w-screen-xl px-8 mx-auto flex flex-col lg:flex-row items-start py-24">
        <!--Left Col-->
        <div class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0">
            <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-darken">
                <span class="text-yellow-500">Connect</span> to Luthra Traders
            </h1>
            <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-2xl mb-8">it's important to highlight the key features and advantages that set our business or service apart from the competition.</p>
            <div   class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5">
            <a href="#cont"  class="lg:mx-0 bg-yellow-500 text-white text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                    Contact Us 
                </a>
                
            </div>
        </div>
        <!--Right Col-->
        <div class="w-full lg:w-6/12 lg:-mt-10 relative" id="girl">
            <img data-aos="fade-up" data-aos-once="true" class="w-full mx-auto mt-12" src="{{ asset('images/bg.png') }}" />
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


{{-- our services starts --}}

<!-- component -->


<!-- ====== Services Section Start -->
<section class="p-3" id="cont">
   <div class="container mx-auto flex items-center justify-center flex-col">
    <h2 class="mt-3  text-3xl font-extrabold tracking-tight text-gray-900 md:text-3xl dark:text-white font-Raleway mb-3">Send Your Enquiry </h2>
    <form action="{{url('send_enquiry/'.$id)}}" method="post" class="lg:W-3/4 md:w-3/4 sm:w-full w-full shadow-lg rounded-lg shadow-sky-200 p-2">
        @csrf
        @method('post')
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2">
           
            
            
            
             
             
            
              
            <div class="mb-4">
                <label for="name" class="block mb-2 text-lg  text-gray-900 dark:text-white font-Roboto font-bold">Add First Name </label>
                <input type="text" name="first_name" id="text" class="bg-blue-100 border border-blue-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:	Common Area and Amenities , Food">
                @if($errors->has('first_name'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('first_name') }}</p>
        @endif
        </div>
        <div class="mb-4">
            <label for="name" class="block mb-2 text-lg  text-gray-900 dark:text-white font-Roboto font-bold">Add Last Name </label>
            <input type="text" name="last_name" id="text" class="bg-blue-100 border border-blue-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:	Common Area and Amenities , Food">
            @if($errors->has('last_name'))
            <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('last_name') }}</p>
    @endif
    </div>

    <div class="mb-4">
        <label for="name" class="block mb-2 text-lg  text-gray-900 dark:text-white font-Roboto font-bold">Enter Email </label>
        <input type="email" name="email" id="text" class="bg-blue-100 border border-blue-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:	Common Area and Amenities , Food">
        @if($errors->has('email'))
        <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('email') }}</p>
@endif
</div>
<div class="mb-4">
    <label for="name" class="block mb-2 text-lg  text-gray-900 dark:text-white font-Roboto font-bold">Enter phone number </label>
    <input type="text" name="phone" id="text" class="bg-blue-100 border border-blue-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:	Common Area and Amenities , Food">
    @if($errors->has('phone'))
    <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('phone') }}</p>
@endif
</div>

        </div>

      
        <div class="mb-4">
  
           <label for="message" class="block mb-2 text-lg  text-gray-900 ">Add Enquiry Description </label>
           <textarea id="message" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-blue-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  " placeholder="Write your thoughts here..."></textarea>
           @if($errors->has('description'))
           <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('description') }}</p>
  @endif
                         </div>
        <div class="mb-4">
            <button class="w-auto px-4 py-3  font-bold text-white bg-gradient-to-r from-black to-blue-800 hover:from-black hover:to-blue-400
                                hover:rounded-full rounded-xl focus:outline-none focus:shadow-outline
                                hover:scale-105 duration-500 ease-in-out
                               ">
                          Send Enquiry
                       </button>
        </div>
    </form>
   </div>
</section>
<!-- ====== Services Section End -->

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