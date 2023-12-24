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
                        Luthra Pg
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
<div class="flex items-start  w-full justify-start " id="room">

    @if(session()->has('success'))



   <div id="alert-1" class="flex items-center w-full p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
       <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
         <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
       </svg>
       <span class="sr-only">Info</span>
       <div class="ml-3 text-sm font-medium">
           WOHOO <a href="#" class="font-semibold underline hover:no-underline">{{ session()->get('success') }}</a>.
         </div>
         <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
           <span class="sr-only">Close</span>
           <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
           </svg>
       </button>
     </div>
    @endif
    {{-- add message --}}
    @if(session()->has('message'))
           <div id="alert-1" class="flex items-center w-full p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
       <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
         <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
       </svg>
       <span class="sr-only">Info</span>
       <div class="ml-3 text-sm font-medium">
         Oops <a href="#" class="font-semibold underline hover:no-underline">{{ session()->get('message') }}</a>.
       </div>
         <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
           <span class="sr-only">Close</span>
           <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
           </svg>
       </button>
     </div>

    @endif
    {{-- add message ends --}}
   </div>
<section class="flex items-center py-4 bg-gray-100  font-Raleway  ">
    @foreach ($data as $data )
    <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto bg-white border shadow-md  rounded-md dark:border-gray-900 dark:bg-gray-900 md:py-10 md:px-10">
        <div>
        <h1 class="px-4 mb-8 text-2xl font-semibold tracking-wide text-gray-700 dark:text-gray-300 ">
        Luthra Pg {{ $data->category }} </h1>

        <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cools-3 grid-cols-2 mb-10 border-b border-gray-200 dark:border-gray-700">
        <div class="w-full px-4 mb-4 ">
        <p class="mb-2 text-sm leading-5 text-gray-600 font-Roboto font-bold dark:text-gray-400 ">
        Status: </p>
        <p class="text-base font-semibold leading-4 font-Roboto text-gray-800 dark:text-gray-400">
       {{ $data->status }}</p>
        </div>
        <div class="w-full px-4 mb-4 ">
        <p class="mb-2 text-sm leading-5 text-gray-600 font-Roboto font-bold dark:text-gray-400 ">
        Price: </p>
        <p class="text-base font-semibold leading-4 font-Roboto text-gray-800 dark:text-gray-400">
       Rs.{{ $data->amount }}</p>
        </div>
        <div class="w-full px-4 mb-4 ">
        <p class="mb-2 text-sm font-medium leading-5 text-gray-800 dark:text-gray-400 ">
        Total Beds: </p>
        <p class="text-base font-semibold leading-4 font-Roboto text-red-600 dark:text-gray-400">
            {{ $data->beds }} Beds
        </p>
        </div>
        <div class="w-full px-4 mb-4 ">
        <p class="mb-2 text-sm leading-5 text-gray-600 font-Roboto font-bold dark:text-gray-400 ">
        Parking: </p>
        <p class="text-base font-semibold leading-4 font-Roboto text-gray-800 dark:text-gray-400 ">
         {{ $data->parking }} </p>
        </div>
        <div class="w-full px-4 mb-4 ">
            <p class="mb-2 text-sm leading-5 text-gray-600 font-Roboto font-bold dark:text-gray-400 ">
            Available For: </p>
            <p class="text-base font-semibold leading-4 font-Roboto text-green-800 dark:text-gray-400 ">
             {{ $data->available }} </p>
            </div>
        </div>
        <div class="px-4 mb-10">
        <div class="flex flex-col items-stretch justify-center w-full space-y-4 md:flex-row md:space-y-0 md:space-x-8">
        <div class="flex flex-col w-full space-y-6 ">
        <h2 class="mb-2 text-xl font-semibold text-gray-700 dark:text-gray-400">Other details</h2>
        <div class="flex flex-col items-center justify-center w-full pb-4 space-y-4 border-b border-gray-200 dark:border-gray-700">
        <div class="flex justify-between w-full">
        <p class="text-base leading-4 text-gray-800 dark:text-gray-400">Tenants Type</p>
        <p class="text-base leading-4 text-rose-600  font-Roboto font-semibold">{{ $data->tenants }}</p>
        </div>
        <div class="flex items-center justify-between w-full">
        <p class="text-base leading-4 text-gray-800 ">Notice Peiod
        </p>
        <p class="text-base leading-4 text-rose-600  font-Roboto font-semibold">{{ $data->period }}</p>
        </div>
        <div class="flex items-center justify-between w-full">
        <p class="text-base leading-4 text-gray-800 ">Electercity Charges</p>
        <p class="text-base leading-4 text-rose-600  font-Roboto font-semibold">{{ $data->electrcity }}</p>
        </div>
        <div class="flex items-center justify-between w-full">
            <p class="text-base leading-4 text-gray-800 ">Maintenance Charges</p>
            <p class="text-base leading-4 text-rose-600  font-Roboto font-semibold">{{ $data->maintenance }}</p>
            </div>
            <div class="flex items-center justify-between w-full">
                <p class="text-base leading-4 text-gray-800 ">Food Availability</p>
                <p class="text-base leading-4 text-rose-600  font-Roboto font-semibold">{{ $data->food }}</p>
                </div>
        </div>

        </div>
        <div class="flex flex-col w-full px-2 space-y-4 md:px-8 ">
        <h2 class="mb-2 text-xl font-semibold text-gray-700 dark:text-gray-400">Room Description</h2>
        <div class="flex items-start justify-between w-full">

        <p class="text-md font-popin font-semibold leading-6 text-gray-800 text-justify">{{ $data->desc }}</p>
        </div>
        </div>
        </div>
        </div>

        </div>
        <div class="w-full  p-1 flex  items-start justify-center">
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-rose-700 font-Roboto font-bold hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-blue-300  rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Contact Owner / Send Enquiry
              </button>

        </div>
        </div>
    @endforeach
   {{-- modal starts --}}

   <div id="default-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Contact Owner Or Send Enquiry
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form action="/send_enquiry/2" method="post" class="w-full shadow-lg rounded-lg shadow-sky-200 p-2">
                    @csrf
                    @method('post')
                    <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2">








                        <div class="mb-4">
                            <label for="name" class="block mb-2 text-lg  text-gray-900 dark:text-white font-Roboto font-bold">Add First Name </label>
                            <input type="text" name="first_name" id="text" class="bg-blue-100 border border-blue-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:john">
                            @if($errors->has('first_name'))
                            <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('first_name') }}</p>
                    @endif
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-lg  text-gray-900 dark:text-white font-Roboto font-bold">Add Last Name </label>
                        <input type="text" name="last_name" id="text" class="bg-blue-100 border border-blue-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:doe">
                        @if($errors->has('last_name'))
                        <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('last_name') }}</p>
                @endif
                </div>

                <div class="mb-4">
                    <label for="name" class="block mb-2 text-lg  text-gray-900 dark:text-white font-Roboto font-bold">Enter Email </label>
                    <input type="email" name="email" id="text" class="bg-blue-100 border border-blue-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:johdoe@gmail.com">
                    @if($errors->has('email'))
                    <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('email') }}</p>
            @endif
            </div>
            <div class="mb-4">
                <label for="name" class="block mb-2 text-lg  text-gray-900 dark:text-white font-Roboto font-bold">Enter phone number </label>
                <input type="text" name="phone" id="text" class="bg-blue-100 border border-blue-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:	0000000000">
                @if($errors->has('phone'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('phone') }}</p>
            @endif
            </div>

                    </div>


                    <div class="mb-4">

                       <label for="message" class="block mb-2 text-lg  text-gray-900 ">Add  Description </label>
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
            <!-- Modal footer -->

        </div>
    </div>
</div>

   {{-- modal ends --}}
    </section>
    <section class="flex items-center bg-white  py-5  dark:bg-gray-800 font-poppins">
        <div class="p-4 mx-auto max-w-6xl">
            <h2 class="pb-4  font-bold text-center text-gray-800 text-4xl dark:text-gray-400">
                Room Gallery
            </h2>
            <div class="mx-auto mb-10 border-b border-red-700 w-44 dark:border-gray-400"></div>
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-6 mt-8">
             @foreach ($gallery as $gallery )
             <div class="relative rounded-md shadow-sm overflow-hidden group">
                <img src="{{ asset('rooms_gallery/'.$gallery->image) }}"
                    class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 h-[350px] w-full transition duration-500"
                    alt="luhtra pg's">
                <div class="absolute inset-0 h-[350px] group-hover:bg-black opacity-50 transition duration-500 z-0">
                </div>

            </div>
             @endforeach


            </div>
        </div>
    </section>

    <section class="py-5 bg-gray-100" >
        <div class="p-4 mx-auto max-w-6xl">
           <div class=" bg-white shadow-lg rounded-md">
            <h1 class="px-4 mb-8 text-2xl font-semibold tracking-wide text-gray-700 dark:text-gray-300 ">
                Common Area and Amenities </h1>

                <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cools-3 grid-cols-2 mb-10 border-b border-gray-200 dark:border-gray-700">
               @foreach ($d as $d )
               <div class="w-full px-4 mb-4  flex  items-center justify-center flex-col p-1 gap-1">

                <p class="text-sm font-semibold leading-4 font-Roboto text-red-600 text-center">
               {{ $d->facility }}</p>
            <div class="text-base font-Raleway font-bold">
                @if(  $d->status == 1)
                <p class="text-green-500"> Available</p>
               @else
               <p class="text-red-500"> Un-Available</p>


                @endif
            </div>
                </div>
               @endforeach





                </div>
           </div>
        </div>

        <div class="p-4 mx-auto max-w-6xl">
            <div class=" bg-white shadow-lg rounded-md">
             <h1 class="px-4 mb-8 text-2xl font-semibold tracking-wide text-gray-700 dark:text-gray-300 ">
                Food and Kitchen</h1>

                 <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cools-3 grid-cols-2 mb-10 border-b border-gray-200 dark:border-gray-700">
                @foreach ($a as $d )
                <div class="w-full px-4 mb-4  flex  items-center justify-center flex-col p-1 gap-1">

                 <p class="text-sm font-semibold leading-4 font-Roboto text-red-600 text-center">
                {{ $d->facility }}</p>
             <div class="text-base font-Raleway font-bold">
                 @if(  $d->status == 1)
                 <p class="text-green-500"> Available</p>
                @else
                <p class="text-red-500"> Un-Available</p>


                 @endif
             </div>
                 </div>
                @endforeach





                 </div>
            </div>
         </div>
         <div class="p-4 mx-auto max-w-6xl">
            <div class=" bg-white shadow-lg rounded-md">
             <h1 class="px-4 mb-8 text-2xl font-semibold tracking-wide text-gray-700 dark:text-gray-300 ">
                Other Charges</h1>

                 <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cools-3 grid-cols-2 mb-10 border-b border-gray-200 dark:border-gray-700">
                @foreach ($c as $d )
                <div class="w-full px-4 mb-4  flex  items-center justify-center flex-col p-1 gap-1">

                 <p class="text-sm font-semibold leading-4 font-Roboto text-red-600 text-center">
                {{ $d->facility }}</p>
             <div class="text-base font-Raleway font-bold">
                 @if(  $d->status == 1)
                 <p class="text-green-500"> Available</p>
                @else
                <p class="text-red-500"> Un-Available</p>


                 @endif
             </div>
                 </div>
                @endforeach





                 </div>
            </div>
         </div>
         <div class="p-4 mx-auto max-w-6xl">
            <div class=" bg-white shadow-lg rounded-md">
             <h1 class="px-4 mb-8 text-2xl font-semibold tracking-wide text-gray-700 dark:text-gray-300 ">
                House Rules</h1>

                 <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cools-3 grid-cols-2 mb-10 border-b border-gray-200 dark:border-gray-700">
                @foreach ($b as $d )
                <div class="w-full px-4 mb-4  flex  items-center justify-center flex-col p-1 gap-1">

                 <p class="text-sm font-semibold leading-4 font-Roboto text-red-600 text-center">
                {{ $d->facility }}</p>
             <div class="text-base font-Raleway font-bold">
                 @if(  $d->status == 1)
                 <p class="text-green-500"> Available</p>
                @else
                <p class="text-red-500"> Un-Available</p>


                 @endif
             </div>
                 </div>
                @endforeach





                 </div>
            </div>
         </div>


    </section>
@include('components/footer')
</body>


<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</html>
