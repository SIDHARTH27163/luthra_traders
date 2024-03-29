<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Luthra Traders">
  <meta name="description" content="Established in 1970, Luthra Traders has gained immense expertise in Retail and Wholesale trading of Watches, Mobiles, computers, laptops and other Electronic Devices and related Services such as Airtel Jio and Vodafone.">
  <meta name="keywords" content="Luthra Traders , luthra girls pg , mobile shop in dharamshala , dharamshala mobile repair">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <meta name="author" content="Luthra Traders">
  <!-- Open Graph / Facebook -->
  
  
  <meta property="og:title" content="Luthra Traders" />
  <meta property="og:description" content="Established in 1970, Luthra Traders has gained immense expertise in Retail and Wholesale trading of Watches, Mobiles, computers, laptops and other Electronic Devices and related Services such as Airtel Jio and Vodafone." />
  <meta property="og:image" content="../images/favicon.ico" />
  <link rel="canonical" href={{ request()->url() }} />
  <!-- Twitter -->
  <meta property="og:locale" content="en_US" />
      <meta property="og:site_name" content="Luthra traders: Luthra traders, Luthra traders , pg in dharamshala , cavble tv in dharamshala , jio dharamshala" />
      <meta property="og:type" content="website" />
  
      <meta property="og:description" content="Established in 1970, Luthra Traders has gained immense expertise in Retail and Wholesale trading of Watches, Mobiles, computers, laptops and other Electronic Devices and related Services such as Airtel Jio and Vodafone." />
      <meta property="og:url" content={{ request()->url() }} />
      <link rel="icon" type="image/x-icon" href="../images/favicon.ico">

  @vite('resources/css/app.css')



  @vite('resources/css/main.css')
  @vite('resources/js/app.js')
</head>
<body class="overflow-x-hidden font-Raleway">


    @include('components/e_header')
    <section class="lg:py-2 md:py-2 sm:py-1 py-1  ">


        <div class=" max-w-7xl mx-auto container py-2  px-4 md:px-6 ">
            <div class="shadow-xl rounded-xl flex items-strech justify-center flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 lg:space-x-8">
              @foreach ($banner as $banner )
              <div class="bg-white flex flex-col md:flex-row items-strech justify-between  dark:bg-gray-800 py-8 px-6  md:w-8/12 lg:w-7/12 xl:w-8/12 2xl:w-9/12">
                <div class="flex flex-col justify-center md:w-1/2">
                    <h1 class="text-xl lg:text-2xl font-semibold text-gray-800 dark:text-white">Best Deal in {{ $banner->p_name }}</h1>
                    <p class="text-base lg:text-xl text-gray-800 dark:text-white mt-2">Save upto <span class="font-bold">{{ $banner->discount }}</span></p>
                </div>
                <div class="md:w-1/2 mt-5 md:mt-0 flex justify-center md:justify-end">
                    <img src="{{ asset('banner_images/'.$banner->image) }}" alt="" class="h-56" />
                </div>
            </div>
              @endforeach
              @foreach ($banner1 as $banner1 )
                <div class="md:w-4/12 lg:w-5/12 xl:w-4/12 2xl:w-3/12 bg-white  dark:bg-gray-800 z-0 py-6 px-6 md:py-0 md:px-4 lg:px-6 flex flex-col justify-center relative">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-lg lg:text-xl font-semibold text-gray-800 dark:text-white text-justify">{{ $banner1->p_name }}</h1>
                        <p class="text-base lg:text-xl text-gray-800 dark:text-white">Save Upto <span class="font-bold">{{ $banner1->discount }}</span></p>
                    </div>
                    <div class="flex justify-end md:absolute md:bottom-4 md:right-4 lg:bottom-0 lg:right-0">
                        <img src="{{ asset('banner_images/'.$banner1->image) }}" alt="" class="w-20 h-24 z-0 object-center" />
                    </div>
                </div>
                @endforeach
            </div>
        </div>

  </section>

{{-- feturedproducts --}}


<section class="lg:py-2 md:py-2 sm:py-1  py-1 " >

    @foreach ($about as $data )
    <div class=" max-w-7xl mx-auto container lg:py-6 md:py-6 sm:py-1  py-1 px-4">
        <div class="lg:flex items-center justify-between">

            <div class="lg:w-7/12 lg:mt-0 mt-2 ">

               
                    <img src="{{ asset('traders/'.$data->image) }}" class="w-full h-96 object-contain " alt="luthra traders" />
                  
               
            </div>
            <div class="lg:w-1/3">
                <h1 class="text-4xl font-semibold leading-9 text-gray-800 dark:text-white">{{$data->heading}}</h1>
                <p class="text-lg font-Raleway font-semibold leading-6 mt-4 text-gray-600 dark:text-gray-100">{{$data->description}}</p>
              
                    <a href="#catelog" aria-label="view catalogue" class="relative mt-5 inline-flex items-center px-12 py-3 overflow-hidden text-lg font-medium text-indigo-600 border-2 border-indigo-600 rounded-xl hover:text-white group hover:bg-gray-50">
                        <span class="absolute left-0 block w-full h-0 transition-all bg-indigo-600 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                        <span class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </span>
                        <span class="relative">View Catalog</span>
                        </a>
             
            </div>
        </div>
    </div>
@endforeach
</section>


{{-- fetaured products ends --}}
  {{-- product categories --}}


  <section class="flex items-center py-7 font-Raleway  p-2" id="started">
    <div class="container mx-auto max-w-7xl">
        <h1 class="relative mb-4 text-3xl font-black leading-tight text-black sm:text-5xl xl:mb-8">Explore The Next Great Products For Luthra Traders</h1>
        <p class="pr-0 mb-2 text-base text-gray-800 sm:text-lg xl:text-xl lg:pr-20">Are you ready to start your
            your journey with luthra traders</p>
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-2 gap-3">

@foreach ($cats as $cat )
<div class="relative rounded-sm overflow-hidden group">
    <img src="{{ asset('shop_images/'.$cat->image) }}" alt="category 1" class="w-full lg:h-96 md:h-96 sm:h-full h-full">
    <a href="{{url('view_category/'.$cat->category)}}"
        class="absolute inset-0 bg-black bg-opacity-50 flex items-center text-center justify-center text-lg font-Roboto font-bold text-white font-roboto  group-hover:bg-opacity-60 transition">{{ $cat->category }}</a>
</div>
@endforeach



        </div>
        <div class=" p-4 flex justify-center items-center">
            <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 ">
                <a href="#" class=""><img src="{{ asset('images/re.png') }}"
                        alt="" class="object-center w-full h-96 rounded-t-lg"></a>
                <div class="p-5">
                    <a href="#" class="">
                        <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-700 dark:text-gray-400">Mobile And Watch Repair</h2>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">we provide best repair and parts replacement for your mobile handsets and watches</p>
                    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                        Query For Repair
                      </button>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- modal starts --}}
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Mobile Repair Request
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                  <form action="/send_enquiry/1" method="post" class="w-full shadow-lg rounded-lg shadow-sky-200 p-2">
                  @csrf
                  @method('post')
                  <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2">








                      <div class="mb-4">
                          <label for="name" class="block mb-2 text-lg  text-gray-900 dark:text-white font-Roboto font-bold">Add First Name </label>
                          <input type="text" name="first_name" id="text" class="bg-blue-100 border border-blue-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:john">
                          @if($errors->has('first_name'))
                          <p class="text-sm italic text-red-500 text-start font-semibold my-1">{{ $errors->first('first_name') }}</p>
                  @endif
                  </div>
                  <div class="mb-4">
                      <label for="name" class="block mb-2 text-lg  text-gray-900 dark:text-white font-Roboto font-bold">Add Last Name </label>
                      <input type="text" name="last_name" id="text" class="bg-blue-100 border border-blue-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:doe">
                      @if($errors->has('last_name'))
                      <p class="text-sm italic text-red-500 text-start font-semibold my-1">{{ $errors->first('last_name') }}</p>
              @endif
              </div>

              <div class="mb-4">
                  <label for="name" class="block mb-2 text-lg  text-gray-900 dark:text-white font-Roboto font-bold">Enter Email </label>
                  <input type="email" name="email" id="text" class="bg-blue-100 border border-blue-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:johdoe@gmail.com">
                  @if($errors->has('email'))
                  <p class="text-sm italic text-red-500 text-start font-semibold my-1">{{ $errors->first('email') }}</p>
          @endif
          </div>
          <div class="mb-4">
              <label for="name" class="block mb-2 text-lg  text-gray-900 dark:text-white font-Roboto font-bold">Enter phone number </label>
              <input type="text" name="phone" id="text" class="bg-blue-100 border border-blue-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:	0000000000">
              @if($errors->has('phone'))
              <p class="text-sm italic text-red-500 text-start font-semibold my-1">{{ $errors->first('phone') }}</p>
          @endif
          </div>

                  </div>


                  <div class="mb-4">

                     <label for="message" class="block mb-2 text-lg  text-gray-900 ">Add Complete Product Description </label>
                     <textarea id="message" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-blue-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  " placeholder="Write Phone Model Number And Other Description"></textarea>
                     @if($errors->has('description'))
                     <p class="text-sm italic text-red-500 text-start font-semibold my-1">{{ $errors->first('description') }}</p>
            @endif
                                   </div>
                  <div class="mb-4">
                      <button class="w-auto px-4 py-3  font-bold text-white bg-gradient-to-r from-black to-blue-800 hover:from-black hover:to-blue-400
                                          hover:rounded-full rounded-xl focus:outline-none focus:shadow-outline
                                          hover:scale-105 duration-500 ease-in-out
                                         ">
                                  Send
                                 </button>
                  </div>
              </form>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                <button data-modal-hide="default-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>
{{-- modal ends --}}
  {{-- product categories --}}


{{-- crousel --}}
<section class="bg-gray-100">

    <div class="max-w-7xl container mx-auto " id="catelog">

        <div class="flex flex-col items-center justify-center w-full h-full py-8 sm:py-8 px-4 ">
            <h1 class="relative mb-4 text-3xl font-black leading-tight text-black sm:text-5xl xl:mb-8">Explore The Catalog Of Luthra Traders</h1>
            <p class="pr-0 mb-2 text-base text-gray-800 sm:text-lg xl:text-xl lg:pr-20">Are you ready to start your
                your journey with luthra traders</p>
            <div class="w-full relative flex items-center justify-center">
                <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="prev">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                    <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                       @foreach ($catalog as $catalog )
                       <a href="{{url('view_product/'.$catalog->id)}}" class="flex flex-shrink-0 relative w-full sm:w-auto cursor-pointer">
                        <img src="{{ asset('shop_images/'.$catalog->image) }}" alt={{ $catalog->p_name }} class="object-contain object-center w-96 h-96" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">{{ $catalog->m_name }}</h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">{{ $catalog->p_name }}</h3>
                            </div>
                        </div>
                    </a>
                       @endforeach











                    </div>
                </div>
                <button aria-label="slide forward" class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="next">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>




    </div>
</section>


{{-- crousel ends --}}

  {{-- products --}}

  <section class="flex items-center py-16 font-Roboto bg-white">
    <div class="px-4 mx-auto max-w-7xl">
      <h1 class="relative mb-4 font-black leading-tight text-black sm:text-4xl xl:mb-8">Explore The Next Great Products For Luthra Traders</h1>
      <p class="pr-0 mb-2 text-base text-gray-800 sm:text-lg xl:text-xl lg:pr-20">Are you ready to start your
          your journey with luthra traders</p>
          <div class="flex flex-col justify-center">
            <div class="relative">
                <img class="hidden sm:block  w-full object-cover h-96" src="{{ asset('images/bnn.png') }}" alt="Luthra" />
                <img class="sm:hidden w-full" src="{{ asset('images/bnn.png') }}" alt="Luthra" />
                <div class="absolute sm:bottom-8 bottom-4 pr-10 sm:pr-0 left-4 sm:left-8 flex justify-start items-start">
                    <p class="text-3xl sm:text-4xl font-semibold leading-9 text-black">Explore the Products</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 lg:gap-8 sm:gap-4 sm:grid-cols-2 lg:grid-cols-3 lg:py-12 md:py-12 sm:py-6 py-6">
            @foreach ($products as $product )


            <div class="w-full">
                <div class="p-6 bg-white rounded-lg shadow-xl  dark:bg-gray-700 group">
                    <a class="block mb-2" href="{{url('view_product/'.$product->id)}}">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-auto mx-auto transition-all rounded h-96 group-hover:scale-105"
                                    src="{{ asset('shop_images/'.$product->image) }}"
                                    alt="">
                            </div>
                            {{-- <div class="absolute flex flex-col top-4 right-4">
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
                            </div> --}}
                        </div>
                        <a href="{{url('view_product/'.$product->id)}}">
                            <h3 class="mb-2 text-2xl font-bold dark:text-white text-center">{{ $product->m_name }}</h3>
                        </a>
                        <p class="text-lg font-bold text-slate-900 dark:text-red-300 ">

                            @php
                            $discountedPrice = $product->price;

                            if (is_numeric($product->price) && is_string($product->discount)) {
                                // Remove commas from the price
                                $priceWithoutCommas = str_replace(',', '', $product->price);

                                // Use regular expression to extract the percentage value
                                if (preg_match('/([0-9.]+)%/', $product->discount, $matches)) {
                                    $discountPercentage = floatval($matches[1]);

                                    // Calculate the discounted price
                                    $discountedPrice = $priceWithoutCommas - ($priceWithoutCommas * ($discountPercentage / 100));
                                }
                            }

                            // Ensure $discountedPrice is of float type
                            $discountedPrice = is_numeric($discountedPrice) ? floatval($discountedPrice) : 0.00;

                            // Format the discounted price with commas
                            $formattedDiscountedPrice = number_format($discountedPrice, 2);
                        @endphp

                        <span class="flex flex-row justify-center"> Price:<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM9 7.5A.75.75 0 009 9h1.5c.98 0 1.813.626 2.122 1.5H9A.75.75 0 009 12h3.622a2.251 2.251 0 01-2.122 1.5H9a.75.75 0 00-.53 1.28l3 3a.75.75 0 101.06-1.06L10.8 14.988A3.752 3.752 0 0014.175 12H15a.75.75 0 000-1.5h-.825A3.733 3.733 0 0013.5 9H15a.75.75 0 000-1.5H9z" clip-rule="evenodd" />
                        </svg>
                        {{ $formattedDiscountedPrice }}
                        </span>




                           <div class="flex  flex-row justify-between">
                            <span class="text-md font-semibold text-red-400 line-through flex flex-row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM9 7.5A.75.75 0 009 9h1.5c.98 0 1.813.626 2.122 1.5H9A.75.75 0 009 12h3.622a2.251 2.251 0 01-2.122 1.5H9a.75.75 0 00-.53 1.28l3 3a.75.75 0 101.06-1.06L10.8 14.988A3.752 3.752 0 0014.175 12H15a.75.75 0 000-1.5h-.825A3.733 3.733 0 0013.5 9H15a.75.75 0 000-1.5H9z" clip-rule="evenodd" />
                              </svg>
                              {{ $product->price }}</span>
                              <span class="text-md font-semibold text-green-600 flex flex-row">
                              {{ $product->discount }} Off</span>
                           </div>
                        </p>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>



</section>


  {{-- products ends --}}
    @include('components/footer')
</body>



<script>
    let defaultTransform = 0;
function goNext() {
    defaultTransform = defaultTransform - 398;
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);
function goPrev() {
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 398;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);

</script>
</html>
