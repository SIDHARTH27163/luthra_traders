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
  <div class="bg-cover bg-white" style="background-image: url('{{ asset('images/bg2.jpg') }}');">
  
    <div class="py-28 dark:bg-gray-700 ">
        <div class="max-w-6xl px-4 mx-auto md:px-0 font-poppins">
            <div class="flex flex-wrap items-center px-4">
                <div class="w-full px-4 mb-16 md:w-1/2 md:mb-0">
                    <span
                        class="inline-block mb-4 text-sm font-semibold leading-none text-red-500 capitalize dark:text-red-200">
                       let's start your journey with Luthra Traders
                    </span>
                    <h2
                        class="mb-6 text-3xl font-semibold leading-tight tracking-tight text-gray-900 dark:text-gray-300 md:text-5xl lg:text-6xl">
                        Luthra Pg For 
                    </h2>
                    <p class="mb-6 font-medium tracking-wide text-gray-600  md:text-lg">
                        Success is most important part of life and it is determination of having achieved and
                        accomplished
                        aim with
                        lots of failure
                        enthusiam.
                    </p>
                    <a href="#room"
                        class="inline-flex items-center justify-center px-8 py-3 text-gray-100 bg-blue-600 rounded-md shadow hover:text-gray-100 hover:bg-blue-500 ">
                        Get started</a>
                </div>
                <div class="w-full px-4 md:w-1/2">
                    <div class="relative mx-auto md:mr-0 max-w-max">
                       
                        <div class="relative overflow-hidden rounded-7xl">
                            <img src="{{ asset('images/main_pg.jpg') }}" alt=""
                                class="relative h-96 object-cover w-full  rounded-md">
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        alt="">
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
                        alt="">
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
                        alt="">
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
                        alt="">
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