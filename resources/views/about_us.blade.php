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

  <section class="flex items-center bg-stone-100 xl:h-screen font-poppins dark:bg-gray-800 ">
    <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
        <div class="flex flex-wrap py-32">
            <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                <img src="{{ asset('images/bg.png') }}" alt="Luhtra Traders"
                    class="relative z-0 object-cover w-full h-96 rounded-3xl">
            </div>
            <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0 ">
                <h2 class="mb-4 text-4xl font-semibold text-blue-500 dark:text-gray-300">
                    About Us
                </h2>
                <p class="mb-10 text-justify text-base leading-7 text-gray-500 dark:text-gray-400">
                    We offer a wide range of products and services to cater to your diverse needs. Our commitment is to provide you with top-notch quality and exceptional value. Whether you're looking for cutting-edge technology solutions, personalized consulting, or innovative products.
                    We take pride in offering a comprehensive range of features and benefits with our services, all designed to enhance your experience and meet your specific needs.
                    we take immense pride in the trust and confidence our valued customers place in our services. With years of dedicated experience and a commitment to excellence, we have become the go-to choice for countless individuals and businesses alike.
                </p>
                <a href="/"
                    class="px-4 py-3 text-blue-700 transition-all transform border border-blue-500 rounded-3xl hover:bg-blue-600 dark:border-blue-400 dark:hover:bg-blue-500 dark:hover:text-gray-100 dark:hover:border-blue-500 dark:text-blue-400 hover:text-gray-100">
                    Discover more
                </a>
            </div>
        </div>
    </div>
</section>
@include('components/footer')
</body>

  
</html>