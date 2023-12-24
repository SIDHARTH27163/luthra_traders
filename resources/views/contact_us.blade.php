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
  <section
  class="flex items-center xl:h-screen font-Roboto dark:from-gray-900 dark:to-gray-900 top-10">
  <div class="justify-center flex-1 max-w-7xl px-4 py-4 mx-auto lg:py-16 md:px-7">
    
      <div class="flex flex-wrap items-center justify-center -mx-4 py-32 ">
          <div class="w-full px-4 lg:w-1/2">
              <div class="max-w-sm mx-auto ">
                  <div
                      class="p-6 mb-6 text-center bg-white border rounded-md shadow-lg dark:border-gray-800 dark:bg-gray-800">
                      <form action="/send_message" method="post">
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
                                  Please send message for futher information! </h2>
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
                          <input
                              class="w-full px-3 py-2 mb-4 leading-loose bg-gray-100 border rounded-md dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700"
                             name="email" type="email" placeholder="abc@gmail.com" >
                             @if($errors->has('email'))
                             <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('email') }}</p>
                    @endif
                          <textarea rows="4" type="message" placeholder="Write a message..." 
                             name="message" class="block w-full px-4 mb-4 leading-tight text-gray-700 bg-gray-100 border rounded dark:placeholder-gray-400 py-7 dark:text-gray-400 dark:border-gray-800 dark:bg-gray-700 "></textarea>
                             @if($errors->has('message'))
                             <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('message') }}</p>
                    @endif
                             <button
                              class="w-full py-4 text-sm font-bold leading-normal text-white transition-all duration-300 bg-blue-600 rounded-md dark:bg-blue-500 dark:hover:bg-blue-600 hover:bg-blue-700">
                              Send Message
                          </button>
                      </form>
                  </div>
              </div>
          </div>
          <div class="max-w-2xl px-4 mb-16 lg:mb-0 lg:w-1/2 lg:mr-0 lg:ml-auto">
              <h2 class="mb-6 text-3xl font-bold dark:text-gray-400">Get In <span
                      class="text-blue-600 dark:text-blue-400">Touch</span>
              </h2>
              <div class="flex mb-6 text-gray-400 dark:text-gray-400">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="text-gray-600 w-7 h-7 dark:text-gray-400 bi bi-geo-alt" viewBox="0 0 16 16">
                      <path
                          d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                      </path>
                      <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                  </svg>
                  <div class="max-w-xl ml-4 text-lg font-semibold tracking-wide text-gray-500 dark:text-gray-400">
                     First Floor Kacheri Adda Dharamshala
                  </div>
              </div>
              <div class="flex mb-6 text-gray-400 dark:text-gray-400">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="text-gray-600 w-7 h-7 bi bi-telephone dark:text-gray-400" viewBox="0 0 16 16">
                      <path
                          d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                      </path>
                  </svg>
                  <div class="max-w-xl ml-4 text-lg font-semibold tracking-wide text-gray-500 dark:text-gray-400">
                      <span> 9816041187 ,</span> <span> 7018100907</span>
                  </div>
              </div>
              <div class="flex text-gray-400 dark:text-gray-400">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="text-gray-600 w-7 h-7 dark:text-gray-400 bi bi-envelope" viewBox="0 0 16 16">
                      <path
                          d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                      </path>
                  </svg>
                  <div class="max-w-xl ml-4 text-lg font-semibold tracking-wide text-gray-500 dark:text-gray-400">
                      luthratraders@gmail.com
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@include('components/footer')
</body>

  
</html>