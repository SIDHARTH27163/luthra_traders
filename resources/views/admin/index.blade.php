@extends('admin.layouts.master')
@section('content')
<div class="p-2  rounded-lg  border-2 border-slate-900 border-dashed h-auto">
    <div class="grid grid-cols-3 gap-4 mb-4">
       <a href="manage_shop_products" class="flex items-center justify-center h-24 rounded  bg-rose-600">
          <p  class="text-2xl text-gray-400 ">
            Shop
          </p>
       </a>
       <a href="manage_rooms" class="flex items-center justify-center h-24 rounded  bg-orange-600">
          <p  class="text-2xl text-gray-400 ">
            Pg
          </p>
       </a>
       <a href="cabletv_req" class="flex items-center justify-center h-24 rounded  bg-green-600">
          <p  class="text-2xl text-gray-400 ">
            Cable Tv
          </p>
       </a>







    </div>

    <div class="w-full p-4 ">

   
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



  <div class="w-full p-4 ">

   <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2"> Review Request Waiting For Approvals</p>
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
                    Name
                   </th>
                  
                    
                      

                          
                               <th scope="col" class="px-3 py-3">
                               Review
                                </th>


           <th scope="col" class="px-3 py-3">
           Action
         </th>
              </tr>
          </thead>
          <tbody>

            @foreach ($r_data as $i=> $r_tata)

            <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
               <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                  {{$i}}
               </th>

               <td class="px-3 py-4">
                 @if(  $r_tata->status == 1)
                 <p class="text-green-500">Approved</p>
                @else
                <p class="text-red-500">Not Approved</p>


                 @endif
               </td>

              
               <td class="px-3 py-4">
                   {{$r_tata->name}}
                </td>
               
               
                <td class="px-3 py-4">
                 {{$r_tata->review}}
              </td>
               <td class="px-1 py-4 text-center">
                   <a href="{{url('delete_review/'.$r_tata->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>

                   <a href="{{url('change_review_status/'.$r_tata->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Activate/Deactivate</a><br>

              
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

      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2"> New Contact Requests</p>
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
                      First Name
                      </th>
                      <th scope="col" class="px-3 py-3">
                          Last Name
                          </th>
                          <th scope="col" class="px-3 py-3">
                              Email
                              </th>
  
                          
                                  <th scope="col" class="px-3 py-3">
                               message
                                   </th>
  
              <th scope="col" class="px-3 py-3">
              Action
            </th>
                 </tr>
             </thead>
             <tbody>
  
               @foreach ($c_data as $i=> $c_data)
  
               <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
                  <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                     {{$i}}
                  </th>
  
                  <td class="px-3 py-4">
                    @if(  $c_data->status == 1)
                    <p class="text-green-500">Approved</p>
                   @else
                   <p class="text-red-500">Not Approved</p>
  
  
                    @endif
                  </td>
  
                
                  <td class="px-3 py-4">
                      {{$c_data->fname}}
                   </td>
                   <td class="px-3 py-4">
                      {{$c_data->lname}}
                   </td>
                   <td class="px-3 py-4">
                      {{$c_data->email}}
                   </td>
                  
                   <td class="px-3 py-4">
                    {{$c_data->message}}
                 </td>
                  <td class="px-1 py-4 text-center">
                     <a href="{{url('delete_contact_req/'.$c_data->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>
  
                     <a href="{{url('change_contact_req_status/'.$c_data->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Activate/Deactivate</a><br>
  
                    
  
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

    <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2"> Banners</p>
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
                   Product Name
                   </th>
                   <th scope="col" class="px-3 py-3">
                    Discount
                    </th>
                    <th scope="col" class="px-3 py-3">
                      Image
                        </th>


            <th scope="col" class="px-3 py-3">
            Action
          </th>
               </tr>
           </thead>
           <tbody>

            @foreach ($data as $data )
            <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
                
                <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                   {{$data->id}}
                </th>
                <td class="px-3 py-4">
                  @if(  $data->status == 1)
                  <p class="text-green-500">Active</p>
                 @else
                 <p class="text-red-500">Not Active</p>


                  @endif
                </td>

                <td class="px-3 py-4">
                   {{$data->p_name}}
                </td>
                <td class="px-3 py-4">
                    {{$data->discount}}
                 </td>
                 <td>
                    <img src="{{ asset('banner_images/'.$data->image) }}" style="height: 50px;width:50px;">
                 </td>
                <td class="px-1 py-4 text-center">
                   <a href="{{url('delete_banner/'.$data->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>

                   <a href="{{url('change_banner_status/'.$data->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Change Status</a><br>




                </td>
            </tr>
            @endforeach

             {{-- @foreach ($service_data as $i=> $data)

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

                <td class="px-1 py-4 text-center">
                   <a href="{{url('delete_service/'.$data->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>

                   <a href="{{url('change_service_status/'.$data->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Change Status</a><br>




                </td>
            </tr>
             @endforeach --}}

           </tbody>
       </table>
       <div class="p-2 ">

          {{-- {!! $udata->links() !!} --}}
         </div>
       </div>
    </div>
    <div class="w-full p-4 ">

      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Products List</p>
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
                    Catalog
                  </th>
                   <th scope="col" class="px-3 py-3">
                   Gallery Status
                 </th>
  
  
  
              <th scope="col" class="px-3 py-3">
              Category
            </th>
            <th scope="col" class="px-3 py-3">
              Product Name
           </th>
  <th scope="col" class="px-3 py-2">
    Image
  </th>
            <th scope="col" class="px-3 py-3">
              Price
            </th>
            <th scope="col" class="px-3 py-3">
              Discount
            </th>
            <th scope="col" class="px-3 py-3 text-center">
              Action
            </th>
                 </tr>
             </thead>
             <tbody>
              @foreach ($p_data as $i=> $data)
  
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
                  @if(  $data->catalog == 1)
                  <p class="text-green-500">Added</p>
                 @else
                 <p class="text-red-500"> Not Added</p>
  
  
                  @endif
                </td>
                 <td class="px-3 py-4">
                 @if(  $data->gallery == 1)
                 <p class="text-green-500">Uploaded</p>
                @else
                <p class="text-red-500">Not Uploaded</p>
  
  
                 @endif
               </td>
  
                 <td class="px-3 py-4">
                    {{$data->category}}
                 </td>
              
                 
                 
                  
                  <td class="px-3 py-4">
                     {{$data->p_name}}
                  </td>
                  <td>
                    <img src="{{ asset('shop_images/'.$data->image) }}" style="height: 50px;width:50px;">
                                         
                   </td>
                  <td class="px-3 py-4">
                      {{$data->price}}
                   </td>
                  <td class="px-3 py-4">
                      {{$data->discount}}
                   </td>
                  
                 <td class="px-1 py-4 text-center">
                     <a href="{{url('delete_pr/'.$data->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>
  
                     <a href="{{url('change_pr_status/'.$data->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Activate/Deactivate</a><br>
                     
                     <a href="{{url('upload_pr_gallery/'.$data->id)}}" class="font-medium text-blue-400 dark:text-blue-500 hover:underline">Upload galllery</a><br>
                     
                     <a href="{{url('change_c_status/'.$data->id)}}" class="font-medium text-green-400 dark:text-green-500 hover:underline">Change Catalog Status</a><br>
                     
  
  
  
                 </td>
             </tr>
              @endforeach
              
             </tbody>
         </table>
       
      </div>
  </div>
</div>
@stop
