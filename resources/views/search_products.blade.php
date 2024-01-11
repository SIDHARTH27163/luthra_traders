<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')



    @vite('resources/css/main.css')
    @vite('resources/js/app.js')
</head>

<body class="overflow-x-hidden font-Raleway">


    @include('components/e_header')


    {{-- feturedproducts --}}
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

  <section class="flex items-center py-16 font-Roboto bg-white">
    <div class="px-4 mx-auto max-w-7xl">
      <h1 class="relative mb-4 font-black leading-tight text-black sm:text-4xl xl:mb-8">Explore The Next Great Products For Luthra Traders</h1>
      <p class="pr-0 mb-2 text-base text-gray-800 sm:text-lg xl:text-xl lg:pr-20">Are you ready to start your
          your journey with luthra traders</p>
          <div class="w-full p-1 text-xl text-center text-rose-500 font-bold mt-1"> {{ $message }}</div>
        <div class="grid grid-cols-1 gap-4 lg:gap-8 sm:gap-4 sm:grid-cols-2 lg:grid-cols-3 lg:py-12 md:py-12 sm:py-6 py-6">
            @foreach ($products as $product )


            <div class="w-full">
                <div class="p-6 bg-white rounded-lg shadow-xl  dark:bg-gray-700 group">
                    <a class="block mb-2" href="{{url('view_product/'.$product->id)}}">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-auto mx-auto transition-all rounded h-96 group-hover:scale-105"
                                    src="{{ asset('shop_images/'.$product->image) }}"
                                    alt="luthra traders">
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
