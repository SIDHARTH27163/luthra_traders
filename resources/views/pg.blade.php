<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Luthra Pg">
    <meta name="description"
        content="Established in 1970, Luthra Traders has gained immense expertise in Retail and Wholesale trading of Watches, Mobiles, computers, laptops and other Electronic Devices and related Services such as Airtel Jio and Vodafone.">
    <meta name="keywords" content="pg in dharamshala . pg for girls in dharamshala , dharamshala pg , luthra pg ,luthra girls pg ">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Luthra Pg">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />

    <meta property="og:title" content="Pg in Dharamshala" />
    <meta property="og:description"
        content="We Provide you the best accommodation and food to make your stay Comfortable and Memorable in Dharamshala." />
    <meta property="og:image" content="../images/favicon.ico" />
    <link rel="canonical" href={{ request()->url() }} />
    <meta property="og:url" content={{ request()->url() }} />
    <!-- Twitter -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name"
        content="Luthra pg:  pg in dharamshala , dharamshala pg , dharamshala  , cavble tv in dharamshala , jio dharamshala" />
  



    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    @vite('resources/css/app.css')

    @vite('resources/css/main.css')
    @vite('resources/js/app.js')
</head>
<style>
    .filled-star {
        fill: gold;
        /* Change the color of the filled star here */
    }
</style>

<body class="overflow-x-hidden">
    @include('components/header')
    <div class="bg-cream">
        <div class="max-w-screen-xl px-8 mx-auto flex flex-col lg:flex-row items-start py-24">
            <!--Left Col-->
            <div
                class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0">
                <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-white">
                    <span class="text-yellow-500">let's start your journey with </span> Luthra pg
                </h1>
                <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300"
                    class="leading-normal text-2xl mb-8 text-gray-200">We Provide you the best accommodation and food to
                    make your stay Comfortable and Memorable in Dharamshala.</p>
                <div class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5">
                    {{-- <a data-modal-target="default-modal" data-modal-toggle="default-modal" class="cursor-pointer"><button  class="lg:mx-0 bg-yellow-500 text-white text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                    Contact Us
                </button></a> --}}

                </div>
            </div>
            <!--Right Col-->
            <div class="w-full lg:w-6/12 lg:-mt-10 relative" id="girl">
                <img data-aos="fade-up" data-aos-once="true" class="w-full mx-auto mt-12 rounded-2xl"
                    src="{{ asset('images/main_pg.jpg') }}" alt="luthra pg" />
                <!-- calendar -->
               
                </div>
                <!-- red -->
                
                <!-- ux class -->
               
                <!-- congrats -->
               
            </div>
        </div>
        <div class="text-white -mt-14 sm:-mt-24 lg:-mt-36 z-40 relative">
            <svg class="xl:h-40 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
                    fill="currentColor"></path>
            </svg>
            <div class="bg-white w-full h-20 -mt-px"></div>
        </div>
    </div>

    <section class="flex flex-col py-5 items-center bg-gray-50  font-poppins  ">
        <h2 class="pb-2 text-xl font-bold my-5 text-center text-gray-800 md:text-3xl ">
           Rooms Category
        </h2>
        <div class="justify-center container px-6 max-w-7xl  py-4 mx-auto lg:py-0" id="room">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2  grid-cols-1  -mx-3 gap-5 px-2 py-4">
                @foreach ($data as $data)
                    <div
                        class=" px-3 mb-6 lg:px-2 w-full  transition duration-200 rounded-md shadow bg-white hover:bg-white  hover:shadow-xl">
                        <div class="bg-white rounded-md ">
                            <div class="p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <span
                                        class="inline-block px-2 py-1 font-bold text-sm text-rose-500 rounded-full dark:bg-gray-700  bg-blue-50">
                                        @if(  $data->status == 1)
            <p class="text-green-500"> Available</p>
           @else
           <p class="text-red-500"> Not-Available</p>


            @endif
                                    </span>
                                    <h2 class="text-sm font-medium "> Parking: {{ $data->parking }}</h2>
                                </div>
                                <h2 class="mb-3 text-xl font-semibold lg:text-2xl ">
                                    {{ $data->category }}
                                </h2>
                                <h2 class="text-sm font-semibold font-Roboto mb-2"> {{ Str::limit($data->desc, 150) }}
                                </h2>
                                <div class="flex items-center justify-between mb-3">
                                    

                                </div>

                                <div class="flex items-center justify-center mt-4">
                                    <a href="{{ 'luthra_pg/' . $data->id }}"
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
                                Transform your outdoor space into a haven of relaxation and socialization with a terrace
                                featuring a thoughtfully designed sitting area. Whether you're a homeowner looking to
                                enhance your property or a property manager aiming to attract tenants or guests, a
                                well-crafted terrace with a sitting area can make all the difference. In this article,
                                we will explore the concept of terraces with sitting areas, their benefits, and some
                                tips for creating the perfect one.</h2>
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
                                A well-designed terrace can instantly elevate the overall aesthetics of your property.
                                It provides an elegant and inviting atmosphere that can enhance the curb appeal and
                                increase property value.</h2>
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
                                we understand the importance of finding the perfect place to call home, especially when
                                you're away from your family. We offer more than just a place to stay; we offer a
                                comfortable, safe, and welcoming environment for you to thrive during your time in </h2>
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
                                we understand the importance of finding the perfect place to call home, especially when
                                you're away from your family. We offer more than just a place to stay; we offer a
                                comfortable, safe, and welcoming environment for you to thrive during your time in</h2>
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
                        <h1 class="text-5xl font-bold dark:text-gray-200"> Customer <span class="text-blue-500">
                                Reviews
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
                        @if (session()->has('success'))
                            <div id="alert-1"
                                class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                                role="alert">
                                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium">
                                    {{ session()->get('success') }}
                                </div>
                                <button type="button"
                                    class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                                    data-dismiss-target="#alert-1" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                                name="first_name" type="text" placeholder="First Name..">
                            @if ($errors->has('first_name'))
                                <p class="text-sm italic text-red-500 text-start font-semibold">
                                    {{ $errors->first('first_name') }}</p>
                            @endif
                        </div>
                        <div class="w-full px-2 lg:w-1/2">
                            <input
                                class="w-full px-3 py-2 leading-loose bg-gray-100 border rounded-md dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700"
                                name="last_name" type="text" placeholder="Last Name..">
                            @if ($errors->has('last_name'))
                                <p class="text-sm italic text-red-500 text-start font-semibold">
                                    {{ $errors->first('last_name') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="px-2 mb-6 ">
                        <div class="p-1">
                            <label for="rating" class="text-lg font-semibold text-black">Rate Us *</label>
                            <div class="flex items-center justify-center space-x-2">
                                <input type="radio" value="1" name="rating" id="star5"
                                    class="hidden" />
                                <label for="star5" class="text-2xl cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 star text-yellow-600">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.21 18.18 21.02 12 17.77 5.82 21.02 7 14.21 2 9.27 8.91 8.26 12 2">
                                        </polygon>
                                    </svg>
                                </label>
                                <input type="radio" value="2" name="rating" id="star4"
                                    class="hidden" />
                                <label for="star4" class="text-2xl cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 star text-yellow-600">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.21 18.18 21.02 12 17.77 5.82 21.02 7 14.21 2 9.27 8.91 8.26 12 2">
                                        </polygon>
                                    </svg>
                                </label>
                                <input type="radio" value="3" name="rating" id="star3"
                                    class="hidden" />
                                <label for="star3" class="text-2xl cursor-pointer">
                                    <svg xmlns="http://w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 star text-yellow-600">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.21 18.18 21.02 12 17.77 5.82 21.02 7 14.21 2 9.27 8.91 8.26 12 2">
                                        </polygon>
                                    </svg>
                                </label>
                                <input type="radio" value="4" name="rating" id="star2"
                                    class="hidden" />
                                <label for="star2" class="text-2xl cursor-pointer">
                                    <svg xmlns="http://w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 star text-yellow-600">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.21 18.18 21.02 12 17.77 5.82 21.02 7 14.21 2 9.27 8.91 8.26 12 2">
                                        </polygon>
                                    </svg>
                                </label>
                                <input type="radio" value="5" name="rating" id="star1"
                                    class="hidden" />
                                <label for="star1" class="text-2xl cursor-pointer">
                                    <svg xmlns="http://w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 star text-yellow-600">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.21 18.18 21.02 12 17.77 5.82 21.02 7 14.21 2 9.27 8.91 8.26 12 2">
                                        </polygon>
                                    </svg>
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('rating'))
                            <p class="text-xs italic text-red-500 text-start">{{ $errors->first('rating') }}</p>
                        @endif
                    </div>
                    <textarea rows="3" type="message" placeholder="Write a review..." name="review"
                        class="block w-full px-4 mb-4 leading-tight text-gray-700 bg-gray-100 border rounded dark:placeholder-gray-400 py-7 dark:text-gray-400 dark:border-gray-800 dark:bg-gray-700 "></textarea>
                    @if ($errors->has('review'))
                        <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('review') }}
                        </p>
                    @endif
                    <button
                        class="w-full py-4 text-sm font-bold leading-normal text-white transition-all duration-300 bg-blue-600 rounded-md dark:bg-blue-500 dark:hover:bg-blue-600 hover:bg-blue-700">
                        Send Review
                    </button>
                </form>
            </div>

            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mt-8">
                @foreach ($priority_reviews as $review )
                <div class="py-6 bg-white rounded-lg shadow-lg h-72 overflow-y-auto ">
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
                {{$priority_reviews->links()}}

            </div>
 {{-- other reviews --}}


 <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mt-8">
    @foreach ($other_reviews as $review )
    <div class="py-6 bg-white rounded-lg shadow-lg h-72 overflow-y-auto ">
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
    {{$other_reviews->links()}}

</div>

 {{-- other reviews ends --}}
        </div>


    </section>
    {{-- reviews --}}
    {{-- <div class="bg-cover bg-white" style="background-image: url('{{ asset('images/bg2.jpg') }}');"> --}}
    <section class="flex items-center bg-white font-Roboto "
        style="background-image: url('{{ asset('images/bg3.png') }}');">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="w-5 h-5 bi bi-bank2" viewBox="0 0 16 16">
                                <path
                                    d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                            </svg>
                        </div>
                        <h2 class="mb-4 text-xl font-bold leading-tight md:text-2xl ">Stunning Himalayan Views</h2>
                        <p class="font-medium text-gray-600 dark:text-gray-500 font-Raleway">Wake up to breathtaking
                            views of the majestic Himalayan mountain range right from your room.</p>
                    </div>
                </div>
                <div class="w-full px-4 mb-6 md:w-1/2 lg:w-1/3">
                    <div
                        class="h-full p-6 text-center transition duration-200 rounded-md shadow bg-gray-50 hover:bg-white  hover:shadow-xl">
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 mx-auto mb-6 bg-red-500 rounded-lg text-gray-50 dark:bg-gray-600 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="w-5 h-5 bi bi-bar-chart" viewBox="0 0 16 16">
                                <path
                                    d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z" />
                            </svg>
                        </div>
                        <h2 class="mb-4 text-xl font-bold leading-tight md:text-2xl ">Privacy and Seclusion
                        </h2>
                        <p class="font-medium text-gray-600 dark:text-gray-500">Enjoy the privacy and seclusion you
                            deserve. Our location is designed to give you an exclusive experience in the lap of nature.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 mb-6 md:w-1/2 lg:w-1/3">
                    <div
                        class="h-full p-6 text-center transition duration-200 rounded-md shadow bg-gray-50  hover:bg-white hover:shadow-xl">
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 mx-auto mb-6 bg-red-500 rounded-lg text-gray-50 dark:bg-gray-600 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="w-5 h-5 bi bi-map" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                            </svg>
                        </div>
                        <h2 class="mb-4 text-xl font-bold leading-tight md:text-2xl ">Enhanced Security</h2>
                        <p class="font-medium text-gray-600 dark:text-gray-500">Your safety is our utmost priority.
                            We've implemented state-of-the-art security measures to ensure your peace of mind during
                            your stay.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
