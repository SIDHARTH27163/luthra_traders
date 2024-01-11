@extends('admin.layouts.master')
@section('content')
<div class="p-4  rounded-lg  border-2 border-slate-900 border-dashed h-auto">
    

   {{-- form starts --}}

   <div class="w-full p-4 ">

      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Edit Product Price and  Discount<span class="text-lg text-red-600">{{$udata->p_name}}</span> For Shop</p>
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
       <form action="{{url('edit_product/'.$udata->id)}}" enctype="multipart/form-data" method="post" class="w-full font-Roboto">
        @csrf
        @method('post')
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2">
          
            
          <div class="mb-2">
            <label for="countries" class="block mb-2 text-lg font-bold text-gray-900 ">Select a Product Category</label>
            <select id="countries" name="category" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected >{{ $udata->category }}</option>
             @foreach ($data as $data )
             <option >{{ $data->category }}</option>
             @endforeach
              
             
            </select>
            @if($errors->has('category'))
            <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('category') }}</p>
    @endif
          </div>
 
         
          <div class="mb-4">
  
            <label for="message" class="block mb-2 text-lg font-medium text-gray-900 ">Description </label>
            <textarea id="message" type="text" name="product_name" value="{{ $udata->p_name }}" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  " placeholder="Write your thoughts here...">{{ $udata->p_name }}</textarea>
           
                          </div>
          <div class="mb-2">
            <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Add Brand Name</label>
            <input type="text" name="brand_name" id="text"  value="{{ $udata->b_name }}" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:Apple , Samsung , Oppo , Vivo , etc">
            @if($errors->has('brand_name'))
            <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('brand_name') }}</p>
@endif
          </div>

          <div class="mb-2">
            <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Add Model Name</label>
            <input type="text" name="model_name" value="{{ $udata->m_name }}" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:Apple Iphone , Realme Narzo , etc">
            @if($errors->has('model_name'))
            <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('model_name') }}</p>
@endif
          </div>
           
             
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Add original price</label>
                <input type="text" name="original_price" id="text" value="{{ $udata->price }}" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:57,000 , etc">
                @if($errors->has('original_price'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('original_price') }}</p>
    @endif
              </div>
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Discount Of</label>
                <input type="text" name="discount" id="text" value="{{$udata->discount}}" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:15%">
                @if($errors->has('discount'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('discount') }}</p>
    @endif
              </div>
            
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Warranty Policy</label>
                <select id="countries" name="warranty_policy" class="bg-blue-100 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>{{ $udata->w_policy }}</option>
                   
                    <option >Available</option>
                    <option >Not Available</option>
                  
                  
                  </select>
                @if($errors->has('warranty_policy'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('warranty_policy') }}</p>
    @endif
              </div>
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Emi Cost</label>
                <input type="text" name="emi_cost" value="{{ $udata->emi_cost }}" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:2700/month, etc">
                @if($errors->has('emi_cost'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('emi_cost') }}</p>
    @endif
              </div>
              <div class="mb-2">
                <label for="name" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white">Replacement Time</label>
                <input type="text" name="replacement_time" value="{{ $udata->r_time }}" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:1Month ,  1 week">
                @if($errors->has('replacement_time'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('replacement_time') }}</p>
    @endif
              </div>
             
        </div>
        <div class="mb-4">
  
          <label for="message" class="block mb-2 text-lg font-medium text-gray-900 ">Description </label>
          <textarea id="message" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  " placeholder="Write your thoughts here...">{{ $udata->desc }}</textarea>
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
          {{-- form for add loc ends --}}
      </div>
  </div>


   {{-- form ends --}}



{{-- table --}}


{{-- table ends --}}

</div>
@stop
