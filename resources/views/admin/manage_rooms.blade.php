@extends('admin.layouts.master')
@section('content')
<div class="p-4  rounded-lg  border-2 border-slate-900 border-dashed h-auto">
    <div class="grid grid-cols-3 gap-4 mb-4">
       <div class="flex items-center justify-center h-24 rounded  bg-rose-600">
          <p class="text-2xl text-gray-400 ">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div>
       <div class="flex items-center justify-center h-24 rounded  bg-orange-600">
          <p class="text-2xl text-gray-400 ">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div>
       <div class="flex items-center justify-center h-24 rounded  bg-green-600">
          <p class="text-2xl text-gray-400 ">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div>







    </div>




   <div class="w-full p-4 ">

      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Manage Rooms Here</p>
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
<div class="w-full border-2 border-black p-2">
    {{-- form starts  --}}
    <form action="add_rooms" method="post" class="">
        @csrf
        @method('post')
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2">
            <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Select a Room Category</label>
                <select id="countries" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected value="">Choose a category</option>
                 
                  <option >Single Shared </option>
                  <option >Double Shared </option>
                  <option>Tripple Shared</option>
                </select>
                @if($errors->has('category'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('category') }}</p>
        @endif
              </div>
     
              <div class="mb-2">
                 <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Room Available For</label>
                 <select id="countries" name="available_for" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                   <option selected value="">Choose </option>
                  
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
                <select id="countries" name="parking" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected value="">Choose </option>
                 
                  <option >Available</option>
                  <option >Not Available</option>
                  
                </select>
                @if($errors->has('parking'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('parking') }}</p>
        @endif
              </div>
              <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Food Availability</label>
                <select id="countries" name="food_availability" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected value="">Choose </option>
                 
                  <option >Available</option>
                  <option >Not Available</option>
                  
                </select>
                @if($errors->has('food_availability'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('food_availability') }}</p>
        @endif
              </div>
              <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Tenants Type</label>
                <select id="countries" name="tenants_types" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected value="">Choose </option>
                 
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
                <select id="countries" name="total_beds" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected value="">Choose Beds </option>
                 
                  <option >1 Bed</option>
                  <option >2 Beds</option>
                  <option >3 Bed</option>
                  <option >4 Bed</option>
                  <option >5 Bed</option>
                </select>
                @if($errors->has('total_beds'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('total_beds') }}</p>
        @endif
              </div>
              <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Notice Period</label>
                <select id="countries" name="notice_period" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected value="">Choose Notice Period </option>
                 
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
                <select id="countries" name="maintenance_charges" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected value="">Choose one</option>
                 
                  <option >Available</option>
                  <option >Not Available</option>
                
                
                </select>
                @if($errors->has('maintenance_charges'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('maintenance_charges') }}</p>
        @endif
              </div>
              <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">electercity charges</label>
                <select id="countries" name="electricity_charges" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected value="">Choose one</option>
                 
                  <option >Available</option>
                  <option >Not Available</option>
                
                
                </select>
                @if($errors->has('electricity_charges'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('electricity_charges') }}</p>
        @endif
              </div>
              <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Deposite Amount</label>
                <select id="countries" name="deposite_amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected value="">Choose one</option>
                 
                  <option >required</option>
                  <option >Not required</option>
                f
                
                </select>
                @if($errors->has('deposite_amount'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('deposite_amount') }}</p>
        @endif
              </div>
        </div>


      
        <div class="mb-4">
  
           <label for="message" class="block mb-2 text-lg font-medium text-gray-900 ">Description </label>
           <textarea id="message" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  " placeholder="Write your thoughts here..."></textarea>
           @if($errors->has('description'))
           <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('description') }}</p>
  @endif
                         </div>
        <div class="mb-4">
            <button class="w-auto px-4 py-3  font-bold text-white bg-gradient-to-r from-black to-blue-800 hover:from-black hover:to-blue-400
                                hover:rounded-full rounded-xl focus:outline-none focus:shadow-outline
                                hover:scale-105 duration-500 ease-in-out
                               ">
                          Submit
                       </button>
        </div>
    </form>
    {{-- form ends  --}}
</div>
{{-- add rooms ends here  --}}

 <div class="w-full p-4 ">

    <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Rooms List</p>
    <div class="relative overflow-auto shadow-md sm:rounded-lg">
       <table class="w-full text-sm text-left text-gray-500 ">
           <thead class="text-xs text-gray-100 uppercase bg-gray-700 ">
               <tr>
                   <th scope="col" class="px-3 py-3">
                      Index
                   </th>

                   <th scope="col" class="px-3 py-3">
                      Status
                    </th>

                   <th scope="col" class="px-3 py-3">
                    Category
                   </th>
                   <th scope="col" class="px-3 py-3">
                    Available For
                    </th>
                    <th scope="col" class="px-3 py-3">
                        food
                        </th>
                        <th scope="col" class="px-3 py-3">
                            parking
                            </th>
                        <th scope="col" class="px-3 py-3">
                            tenants
                            </th>
                            <th scope="col" class="px-3 py-3">
                                beds
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    period
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        maintenance
                                        </th>
                                        <th scope="col" class="px-3 py-3">
                                            amount
                                            </th>


            <th scope="col" class="px-3 py-3">
            Action
          </th>
               </tr>
           </thead>
           <tbody>

             @foreach ($data as $i=> $data)

             <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
                <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                   {{$i}}
                </th>

                <td class="px-3 py-4">
                  @if(  $data->status == 1)
                  <p class="text-green-500">Marked Available</p>
                 @else
                 <p class="text-red-500">Marked Not Available</p>


                  @endif
                </td>

                <td class="px-3 py-4">
                   {{$data->category}}
                </td>
                <td class="px-3 py-4">
                    {{$data->available}}
                 </td>
                 <td class="px-3 py-4">
                    {{$data->food}}
                 </td>
                 <td class="px-3 py-4">
                    {{$data->parking}}
                 </td>
                 <td class="px-3 py-4">
                    {{$data->tenants}}
                 </td>
                 <td class="px-3 py-4">
                    {{$data->beds}}
                 </td>
                 <td class="px-3 py-4">
                    {{$data->period}}
                 </td>
                 <td class="px-3 py-4">
                    {{$data->maintenance}}
                 </td>
                 <td class="px-3 py-4">
                    {{$data->amount}}
                 </td>
                <td class="px-1 py-4 text-center">
                    <a href="{{url('delete_r/'.$data->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>

                    <a href="{{url('change_r_status/'.$data->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Activate/Deactivate</a><br>
                    



                </td>
            </tr>
             @endforeach

           </tbody>
       </table>
       <div class="p-2 ">

          {{-- {!! $udata->links() !!} --}}
       </div>
    </div>
</div>



</div>
@stop
