@extends('admin.layouts.master')
@section('content')
<div class="p-4  rounded-lg  border-2 border-slate-900 border-dashed h-auto">
    



   <div class="w-full p-4 ">

      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Edit Room Here</p>
      <div class="h-full  w-full  flex flex-col  items-center justify-center ">
        {{-- message block starts --}}
        <div class="flex items-start  w-full justify-start">

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

      </div>
  </div>



{{-- add roooms starts here --}}
<div class="w-full  p-2">
    {{-- form starts  --}}
    <form action="{{url('edit_rooms/'.$udata->id)}}" method="post" class="">
        @csrf
        @method('post')
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2">
            <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Select a Room Category</label>
                <select id="countries" name="category" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected >{{$udata->category}}</option>
                 
                  <option >Single Shared </option>
                  <option >Double Shared </option>
                  <option>Tripple Shared</option>
                  <option>Four Shared</option>
                </select>
                @if($errors->has('category'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('category') }}</p>
        @endif
              </div>
     
              <div class="mb-2">
                 <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Room Available For</label>
                 <select id="countries" name="available_for" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected >{{$udata->available}}</option>
                  
                   <option >Boys</option>
                   <option >Girls</option>
                   <option>Both Boys And Girls</option>
                 </select>
                 @if($errors->has('available_for'))
                 <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('available_for') }}</p>
         @endif
               </div>
               <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Parking</label>
                <select id="countries" name="parking" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected >{{$udata->parking}}</option>
                 
                  <option >Available</option>
                  <option >Not Available</option>
                  
                </select>
                @if($errors->has('parking'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('parking') }}</p>
        @endif
              </div>
              <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Food Availability</label>
                <select id="countries" name="food_availability" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected >{{$udata->food}}</option>
                 
                  <option >Available</option>
                  <option >Not Available</option>
                  
                </select>
                @if($errors->has('food_availability'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('food_availability') }}</p>
        @endif
              </div>
              <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Tenants Type</label>
                <select id="countries" name="tenants_types" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected >{{$udata->tenants}}</option>
                 
                  <option >Students</option>
                  <option >Working Proffesionals</option>
                  <option >For All</option>
                </select>
                @if($errors->has('tenants_types'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('tenants_types') }}</p>
        @endif
              </div>
              <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">No Of Beds Available</label>
                <select id="countries" name="total_beds" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected >{{$udata->beds}}</option>
                 
                  <option >1 Bed</option>
                  <option >2 Beds</option>
                  <option >3 Beds</option>
                  <option >4 Beds</option>
                  <option >5 Beds</option>
                </select>
                @if($errors->has('total_beds'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('total_beds') }}</p>
        @endif
              </div>
              <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Notice Period</label>
                <select id="countries" name="notice_period" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected >{{$udata->period}}</option>
                 
                  <option >1 week</option>
                  <option >2 weeks</option>
                  <option >3 weeks</option>
                  <option >1 month</option>
                
                </select>
                @if($errors->has('notice_period'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('notice_period') }}</p>
        @endif
              </div>
              <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">maintenance charges</label>
                <select id="countries" name="maintenance_charges" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected >{{$udata->maintenance}}</option>
                 
                    <option >Included</option>
                    <option >Not Included</option>
                
                
                </select>
                @if($errors->has('maintenance_charges'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('maintenance_charges') }}</p>
        @endif
              </div>
              <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">electercity charges</label>
                <select id="countries" name="electricity_charges" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected >{{$udata->electrcity}}</option>
                 
                  <option >Included</option>
                  <option >Not Included</option>
                
                
                </select>
                @if($errors->has('electricity_charges'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('electricity_charges') }}</p>
        @endif
              </div>
              <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Deposite Amount</label>
                <select id="countries" name="deposite_amount" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected >{{$udata->amount}}</option>
                 
                  <option >required</option>
                  <option >Not required</option>
                
                
                </select>
                @if($errors->has('deposite_amount'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('deposite_amount') }}</p>
        @endif
              </div>
        </div>


        <div class="mb-4">
  
          <label for="message" class="block mb-2 text-lg font-medium text-gray-900 ">Price Per Person </label>
          <input  type="text" value="{{$udata->price}}" name="price" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:1500 , 2000 , 4000 /- person">
          <p class="text-sm italic text-rose-500 text-start font-semibold">Dont user Rs or -/ type price  like '1500 , 2000'</p>
                        </div>
        <div class="mb-4">
  
           <label for="message" class="block mb-2 text-lg font-medium text-gray-900 ">Description </label>
           <textarea id="message" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  " placeholder="Write your thoughts here...">{{$udata->desc}}</textarea>
           @if($errors->has('description'))
           <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('description') }}</p>
  @endif
                         </div>
        <div class="mb-4">
            <button class="w-auto px-4 py-3  font-bold text-white bg-gradient-to-r from-black to-blue-800 hover:from-black hover:to-blue-400
                                hover:rounded-full rounded-xl focus:outline-none focus:shadow-outline
                                hover:scale-105 duration-500 ease-in-out
                               ">
                          Update Room
                       </button>
        </div>
    </form>
    {{-- form ends  --}}
</div>
{{-- add rooms ends here  --}}





</div>
@stop
