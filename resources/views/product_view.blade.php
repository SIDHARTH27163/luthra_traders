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


    <section class="py-5 font-Roboto dark:bg-gray-800">
        <div class="max-w-6xl px-4 mx-auto">
            <div class="flex flex-wrap  -mx-4">
                <div class="w-full px-4 mb-8 md:w-1/2 md:mb-0">
                    <div class="sticky top-0 overflow-hidden ">
                        <div class="relative mb-6 lg:mb-10 lg:h-96">

                            <img class="object-contain w-full lg:h-full"
                                src="{{ asset('shop_images/'.$data->image) }}" alt= {{ $data->p_name }}>

                        </div>



                        <div id="controls-carousel" class="relative w-full" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                 <!-- Item 1 -->
                                 @foreach ($gallery as $gallery )
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ asset('p_gallery/'.$gallery->image) }}" class="absolute h-96 px-5 block w-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt={{ $data->p_name }}>
                                </div>
                                <!-- Item 2 -->
                               @endforeach
                            </div>
                            <!-- Slider controls -->
                            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>



                        {{-- <div class="flex-wrap hidden -mx-2 md:flex">
                           @foreach ($gallery as $gallery )
                           <div class="w-1/2 p-2 sm:w-1/4">
                            <a class="block border border-gray-200 hover:border-red-400 dark:border-gray-700 dark:hover:border-red-300"
                                href="#">
                                <img class="object-contain w-full lg:h-28"
                                    src="{{ asset('p_gallery/'.$gallery->image) }}"
                                    alt= {{ $data->p_name }}>
                            </a>
                        </div>
                           @endforeach



                        </div> --}}
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2">
                    <div class="lg:pl-20">
                        <div class="mb-3 ">
                            <span
                                class="px-2.5 py-0.5 text-xs text-red-600 bg-red-100 dark:bg-gray-700 rounded-xl dark:text-gray-200">New
                                Arrival</span>
                            <h2
                                class="max-w-xl mt-6 mb-3 text-xl font-semibold leading-loose tracking-wide text-gray-700 md:text-2xl dark:text-gray-300">
                               {{ $data->p_name }}
                            </h2>
                            <p class="my-2 text-lg text-red-500 dark:text-red-200">Brand Name.
                                <span class="text-gray-900 font-bold dark:text-gray-400">
                                   {{ $data->b_name }}
                                </span>
                            </p>
                            <p class="inline-block text-2xl font-semibold text-gray-700 dark:text-gray-400 ">
                                @php
                                $discountedPrice = $data->price;

                                if (is_numeric($data->price) && is_string($data->discount)) {
                                    // Remove commas from the price
                                    $priceWithoutCommas = str_replace(',', '', $data->price);

                                    // Use regular expression to extract the percentage value
                                    if (preg_match('/([0-9.]+)%/', $data->discount, $matches)) {
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
                                <span>Rs.{{ $formattedDiscountedPrice }}</span>
                                <span
                                    class="ml-3 text-base font-normal text-gray-500 line-through dark:text-gray-400"> Rs.{{ $data->price }}</span>
                            </p>
                            <p class="my-2 text-lg text-red-500 dark:text-red-200">Replacement Time.
                                <span class="text-gray-900 font-bold dark:text-gray-400">
                                   {{ $data->r_time }}
                                </span>
                            </p>
                            <p class="my-2 text-lg text-red-500 dark:text-red-200">Warranty.
                                <span class="text-gray-900 font-bold dark:text-gray-400">
                                   {{ $data->w_policy }}
                                </span>
                            </p>

                        </div>
                        <div class="mb-6">
                            <h2 class="mb-2 text-lg font-bold text-gray-700 dark:text-gray-400">Description :</h2>
                            <div class="bg-gray-100 dark:bg-gray-700 rounded-xl">
                                <div class="p-3 lg:p-5 text-justify text-lg font-Roboto">
                                    {{ $data->desc }}
                                </div>
                            </div>
                        </div>
                        <div class="py-1 mb-6 border-t border-b border-gray-200 dark:border-gray-700">
                            <span class="text-xl font-bold">
                                @if ($data->status == 1)
                                <p class="text-green-600"> Available in store</p>
                            @elseif ($data->status == 0)
                                <p class="text-red-600"> Not Available in store</p>
                            @else
                                <p class="text-blue-600"> Unknown</p>
                            @endif
                            </span>
                            <p class="mt-2 text-sm text-red-500 dark:text-red-200">Product Available.
                                <span class="text-gray-600 dark:text-gray-400">
                                   Only In Store.
                                </span>
                            </p>
                            <p class="mt-2 text-sm text-red-500 dark:text-red-200">Mobel Name.
                                <span class="text-gray-900 font-bold dark:text-gray-400">
                                   {{ $data->m_name }}
                                </span>
                            </p>

                        </div>
                        <div class="mb-6 "></div>

                        {{-- <div class="flex gap-4 mb-6">
                            <a href="#"
                                class="w-full px-4 py-3 text-center text-gray-100 bg-red-600 border border-transparent dark:border-gray-700 hover:border-red-500 hover:text-red-700 hover:bg-red-100 dark:text-gray-400 dark:bg-gray-700 dark:hover:bg-gray-900 rounded-xl">
                                Buy now</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

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
