@extends('admin.layouts.master')
@section('content')
<div class="p-2  rounded-lg  border-2 border-slate-900 border-dashed h-auto">
   <div class="grid  grid-cols-2 gap-4 mb-4">
      <a   target="_blank" href="/shop" class="flex items-center justify-center h-24 rounded  bg-rose-600">
         <p  class="text-xl text-gray-100 p-1 text-center">
            View Retail Shop
         </p>
      </a>
      <a  target="_blank" href="/luthra_pg" class="flex items-center justify-center h-24 rounded  bg-orange-600">
         <p  class="text-xl text-gray-100 ">
           View Pg Page
         </p>
      </a>
      <a  target="_blank"  href="/luthra_cabletv" class="flex items-center justify-center h-24 rounded  bg-green-600">
         <p  class="text-xl text-gray-100 text-center">
          View Cable Tv Page
         </p>
      </a>
      <a target="_blank" href="/isp" class="flex items-center justify-center h-24 rounded  bg-green-600">
        <p  class="text-xl text-gray-100 text-center">
         View Isp Page
        </p>
     </a>
  
  
  
  
  
  
  
   </div>
   {{-- form starts --}}

   <div class="w-full p-4 ">

      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Add Services</p>
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
       {{-- message Block ends --}}
       {{-- form for add location starts --}}
          <form action="add_service" method="post" class="lg:w-3/4 md:w-3/4 sm:w-3/4 w-full bg-white p-4  rounded-lg shadow-lg  ">
              @csrf
              @method('post')
              <div class="mb-4">
                <label for="name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Add Buisness Services</label>
                <input type="text" name="service_name" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:pg services , cable tv , shop">
                @if($errors->has('service_name'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('service_name') }}</p>
    @endif
              </div>
              <div class="mb-4">

                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Buisness Description</label>
                <textarea id="message" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  " placeholder="Write your thoughts here..."></textarea>
                @if($errors->has('description'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('description') }}</p>
    @endif
                              </div>
                              <div class="mb-4">
                                 <label for="name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Add Page Link</label>
                                 <input type="text" name="page_link" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="/luthra_pg , /shop">
                                 @if($errors->has('page_link'))
                                 <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('page_link') }}</p>
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
          {{-- form for add loc ends --}}
      </div>
  </div>


   {{-- form ends --}}


 <div class="w-full p-4 ">

    <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2"> Services Waiting For Approvals</p>
    <div class="relative overflow-auto shadow-md sm:rounded-lg">
       <table class="w-full text-sm text-left text-gray-500 ">
           <thead class="text-xs text-gray-100 uppercase bg-gray-700 ">
               <tr>
                   <th scope="col" class="px-3 py-3">
                      Index
                   </th>
                   <th scope="col" class="px-3 py-3">
                      Id
                   </th>
                   <th scope="col" class="px-3 py-3">
                      Status
                    </th>

                   <th scope="col" class="px-3 py-3">
                     Category
                   </th>
                   <th scope="col" class="px-3 py-3">
                    Description
                    </th>
                    <th scope="col" class="px-3 py-3">
                     link
                     </th>


            <th scope="col" class="px-3 py-3">
            Action
          </th>
               </tr>
           </thead>
           <tbody>

             @foreach ($un_services as $i=> $d_tata)

             <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
                <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                   {{$i}}
                </th>
                <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                   {{$d_tata->id}}
                </th>
                <td class="px-3 py-4">
                  @if(  $d_tata->status == 1)
                  <p class="text-green-500">Approved</p>
                 @else
                 <p class="text-red-500">Not Approved</p>


                  @endif
                </td>

                <td class="px-3 py-4">
                   {{$d_tata->service_name}}
                </td>
                <td class="px-3 py-4">
                    {{$d_tata->description}}
                 </td>
                 <td class="px-3 py-4">
                  {{$d_tata->link}}
               </td>
                <td class="px-1 py-4 text-center">
                    <a href="{{url('delete_service/'.$d_tata->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>

                    <a href="{{url('change_service_status/'.$d_tata->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Change Status</a><br>




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

<div class="w-full p-4 ">

    <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2"> Approved Services</p>
    <div class="relative overflow-auto shadow-md sm:rounded-lg">
       <table class="w-full text-sm text-left text-gray-500 ">
           <thead class="text-xs text-gray-100 uppercase bg-gray-700 ">
               <tr>
                   <th scope="col" class="px-3 py-3">
                      Index
                   </th>
                   <th scope="col" class="px-3 py-3">
                      Id
                   </th>
                   <th scope="col" class="px-3 py-3">
                      Status
                    </th>

                   <th scope="col" class="px-3 py-3">
                   Service Name
                   </th>
                   <th scope="col" class="px-3 py-3">
                    Description
                    </th>
                    <th scope="col" class="px-3 py-3">
                     Link
                     </th>
 


            <th scope="col" class="px-3 py-3">
            Action
          </th>
               </tr>
           </thead>
           <tbody>

             @foreach ($service_data as $i=> $data)

             <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
                <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                   {{$i}}
                </th>
                <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                   {{$data->id}}
                </th>
                <td class="px-3 py-4">
                  @if(  $data->status == 1)
                  <p class="text-green-500">Approved</p>
                 @else
                 <p class="text-red-500">Not Approved</p>


                  @endif
                </td>

                <td class="px-3 py-4">
                   {{$data->service_name}}
                </td>
                <td class="px-3 py-4">
                    {{$data->description}}
                 </td>
                 <td class="px-3 py-4">
                  {{$data->page_link}}
               </td>
                <td class="px-1 py-4 text-center">
                   <a href="{{url('delete_service/'.$data->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>

                   <a href="{{url('change_service_status/'.$data->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Change Status</a><br>
                   <a href="{{url('edit_service/'.$data->id)}}" class="font-medium text-yellow-400 dark:text-yellow-500 hover:underline">Edit</a><br>






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
