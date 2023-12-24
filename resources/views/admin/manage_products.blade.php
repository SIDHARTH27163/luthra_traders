@extends('admin.layouts.master')
@section('content')
<div class="p-4  rounded-lg  border-2 border-slate-900 border-dashed h-auto">
    

   {{-- form starts --}}

   <div class="w-full p-4 ">

      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Manage Products For Shop</p>
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
       <form action="add_product" enctype="multipart/form-data" method="post" class="w-full font-Roboto">
        @csrf
        @method('post')
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2">
            <div class="mb-2">
                <label for="countries" class="block mb-2 text-lg font-bold text-gray-900 ">Select a Product Category</label>
                <select id="countries" name="category" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected value="">Choose a category</option>
                 @foreach ($data as $data )
                 <option >{{ $data->category }}</option>
                 @endforeach
                  
                 
                </select>
                @if($errors->has('category'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('category') }}</p>
        @endif
              </div>
     
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Add Product Name</label>
                <input type="text" name="product_name" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:Iphone , Samsung s21 , etc">
                @if($errors->has('product_name'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('product_name') }}</p>
    @endif
              </div>
             
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Add Brand Name</label>
                <input type="text" name="brand_name" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:Apple , Samssung , Oppo , Vivo , etc">
                @if($errors->has('brand_name'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('brand_name') }}</p>
    @endif
              </div>

              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Add Model Name</label>
                <input type="text" name="model_name" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:Apple Iphone , Realme Narzo , etc">
                @if($errors->has('model_name'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('model_name') }}</p>
    @endif
              </div>
              {{-- <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Add Network Provider</label>
                <input type="text" name="network_provider" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:Unlocked for All Carriers ">
                @if($errors->has('network_provider'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('network_provider') }}</p>
    @endif
              </div>
             
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Add Operating system</label>
                <input type="text" name="operating_system" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:Android 13.0">
                @if($errors->has('operating_system'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('operating_system') }}</p>
    @endif
              </div>
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Add Celllular Technology</label>
                <input type="text" name="cellular_technology" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:4G">
                @if($errors->has('cellular_technology'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('cellular_technology') }}</p>
    @endif
              </div> --}}
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Add original price</label>
                <input type="text" name="original_price" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:57,000 , etc">
                @if($errors->has('original_price'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('original_price') }}</p>
    @endif
              </div>
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Discount Of</label>
                <input type="text" name="discount" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:15%">
                @if($errors->has('discount'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('discount') }}</p>
    @endif
              </div>
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Emi Cost</label>
                <input type="text" name="emi_cost" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:2700/month, etc">
                @if($errors->has('emi_cost'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('emi_cost') }}</p>
    @endif
              </div>
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Replacement Time</label>
                <input type="text" name="replacement_time" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:1Month ,  1 week">
                @if($errors->has('replacement_time'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('replacement_time') }}</p>
    @endif
              </div>
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Product Image</label>
                <input type="file" name="image" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:1Month ,  1 week">
                @if($errors->has('image'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('image') }}</p>
    @endif
              </div>
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Warranty Policy</label>
                <select id="countries" name="warranty_policy" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Choose one</option>
                   
                    <option >Available</option>
                    <option >Not Available</option>
                  
                  
                  </select>
                @if($errors->has('warranty_policy'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('warranty_policy') }}</p>
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
                          Add Room
                       </button>
        </div>
    </form>
          {{-- form for add loc ends --}}
      </div>
  </div>


   {{-- form ends --}}



{{-- table --}}

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
                  <img src="{{ asset('shop_images/'.$data->image) }}" style="height: 50px;width:40px;">
                                       
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
                   
                   <a href="{{url('edit_pr/'.$data->id)}}" class="font-medium text-yellow-400 dark:text-yellow-500 hover:underline">Edit Product</a><br>
                   



               </td>
           </tr>
            @endforeach
            
           </tbody>
       </table>
     
    </div>
</div>
{{-- table ends --}}

</div>
@stop
