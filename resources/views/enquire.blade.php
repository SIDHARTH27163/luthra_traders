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
  <section class="bg-white dark:bg-gray-900 ">
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="font-Roboto max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">Building digital <br>products & brands.</h1>
            <p class="max-w-2xl mb-6 font-semibold font-popin text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">This free and open-source landing page template was built using the utility classes from <a href="https://tailwindcss.com" class="hover:underline">Tailwind CSS</a> and based on the components from the <a href="https://flowbite.com/docs/getting-started/introduction/" class="hover:underline">Flowbite Library</a> and the <a href="https://flowbite.com/blocks/" class="hover:underline">Blocks System</a>.</p>
            <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
              
            </div>
        </div>
        <div class="lg:mt-0 lg:col-span-5 lg:flex">
            <div class="relative">
                <img id="rotating-image" src="{{ asset('images/bg.png') }}" alt="hero image" class="image-3d transform rotate-3 scale-105 oval-image">
            </div>
        </div>                
    </div>
</section>


{{-- our services starts --}}

<!-- component -->


<!-- ====== Services Section Start -->
<section class="p-3">
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
          <p class="text-lg  text-purple-600 dark:text-purple-500">Trusted Worldwide</p>
          <h2 class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-gray-900 md:text-3xl dark:text-white">Trusted by over 600 million users and 10,000 teams</h2>
          <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Our rigorous security and compliance standards are at the heart of all we do. We work tirelessly to protect you and your customers.</p>
          <div class="pt-6 mt-6 space-y-4 border-t border-gray-200 dark:border-gray-700">
              <div>
                <a href="#" class="inline-flex items-center text-base  text-purple-600 hover:text-purple-800 dark:text-purple-500 dark:hover:text-purple-700">
                  Explore Legality Guide
                  <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
              </div>
              <div>
                <a href="#" class="inline-flex items-center text-base  text-purple-600 hover:text-purple-800 dark:text-purple-500 dark:hover:text-purple-700">
                    Visit the Trust Center
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                </div>
          </div>
      </div>
      <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
          <div>
              <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path></svg>
              <h3 class="mb-2 text-2xl font-bold dark:text-white">99.99% uptime</h3>
              <p class="font-light text-gray-500 dark:text-gray-400">For Landwind, with zero maintenance downtime</p>
          </div>
          <div>
              <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
              <h3 class="mb-2 text-2xl font-bold dark:text-white">600M+ Users</h3>
              <p class="font-light text-gray-500 dark:text-gray-400">Trusted by over 600 milion users around the world</p>
          </div>
          <div>
              <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path></svg>
              <h3 class="mb-2 text-2xl font-bold dark:text-white">100+ countries</h3>
              <p class="font-light text-gray-500 dark:text-gray-400">Have used Landwind to create functional websites</p>
          </div>
          <div>
              <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
              <h3 class="mb-2 text-2xl font-bold dark:text-white">5+ Million</h3>
              <p class="font-light text-gray-500 dark:text-gray-400">Transactions per day</p>
          </div>
      </div>
  </div>
</section>
@include('components/footer')
</body>
</html>