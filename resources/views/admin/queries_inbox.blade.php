@extends('admin.layouts.master')
@section('content')
<div class="p-4  rounded-lg  border-2 border-slate-900 border-dashed h-auto">
 
   {{-- form starts --}}

   <div class="w-full p-4 ">

      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Managae Queries</p>
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
       
          {{-- form for add loc ends --}}
      </div>
  </div>


   {{-- form ends --}}


 <div class="w-full p-4 ">

    <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2"> Queries Waiting For Approvals</p>
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
                     Service Name
                   </th>
                   <th scope="col" class="px-3 py-3">
                    First Name
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Last Name
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Email
                            </th>

                            <th scope="col" class="px-3 py-3">
                                Phone
                                </th>
                                <th scope="col" class="px-3 py-3">
                                 Enquiry Description
                                 </th>


            <th scope="col" class="px-3 py-3">
            Action
          </th>
               </tr>
           </thead>
           <tbody>

             @foreach ($queries_data as $i=> $d_tata)

             <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
                <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                   {{$i}}
                </th>

                <td class="px-3 py-4">
                  @if(  $d_tata->q_status == 1)
                  <p class="text-green-500">Approved</p>
                 @else
                 <p class="text-red-500">Not Approved</p>


                  @endif
                </td>

                <td class="px-3 py-4">
                   {{$d_tata->service_name}}
                </td>
                <td class="px-3 py-4">
                    {{$d_tata->fname}}
                 </td>
                 <td class="px-3 py-4">
                    {{$d_tata->lname}}
                 </td>
                 <td class="px-3 py-4">
                    {{$d_tata->email}}
                 </td>
                 <td class="px-3 py-4">
                    {{$d_tata->phone}}
                 </td>
                 <td class="px-3 py-4">
                  {{$d_tata->desc}}
               </td>
                <td class="px-1 py-4 text-center">
                    <a href="{{url('delete_querie/'.$d_tata->q_id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>

                    <a href="{{url('change_q_status/'.$d_tata->q_id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Activate/Deactivate</a><br>

                    <a href="{{url('create_user/'.$d_tata->q_id)}}" class="font-medium text-blue-400 dark:text-blue-500 hover:underline">Create user</a><br>





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

    <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2"> Approved Queries</p>
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
                   Service Name
                   </th>
                   <th scope="col" class="px-3 py-3">
                    First Name
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Last Name
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Email
                            </th>

                            <th scope="col" class="px-3 py-3">
                                Phone
                                </th>
                                <th scope="col" class="px-3 py-3">
                                 Enquiry Description
                                 </th>

            <th scope="col" class="px-3 py-3">
            Action
          </th>
               </tr>
           </thead>
           <tbody>

             @foreach ($queries_d as $i=> $data)

             <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
                <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                   {{$i}}
                </th>

                <td class="px-3 py-4">
                  @if(  $data->q_status == 1)
                  <p class="text-green-500">Approved</p>
                 @else
                 <p class="text-red-500">Not Approved</p>


                  @endif
                </td>

                <td class="px-3 py-4">
                   {{$data->service_name}}
                </td>
                <td class="px-3 py-4">
                    {{$data->fname}}
                 </td>
                 <td class="px-3 py-4">
                    {{$data->lname}}
                 </td>
                 <td class="px-3 py-4">
                    {{$data->email}}
                 </td>
                 <td class="px-3 py-4">
                    {{$data->phone}}
                 </td>
                 <td class="px-3 py-4">
                  {{$data->desc}}
               </td>
                <td class="px-1 py-4 text-center">
                   <a href="{{url('delete_querie/'.$data->q_id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>

                   <a href="{{url('change_q_status/'.$data->q_id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Activate/Deactivate</a><br>

                   <a href="{{url('create_user/'.$data->q_id)}}" class="font-medium text-blue-400 dark:text-blue-500 hover:underline">Create user</a><br>




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
