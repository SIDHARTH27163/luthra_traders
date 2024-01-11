@extends('admin.layouts.master')
@section('content')
<div class="p-4  rounded-lg  border-2 border-slate-900 border-dashed h-auto">
  
   {{-- form starts --}}

   




<p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Edit Facility To Category</p>
<div class="w-full p-2 flex flex-col items-center justify-center">
  
   <form action="{{url('edit_pg_fac/'.$udata->id)}}" method="post" class="lg:w-3/4 md:w-3/4 sm:w-3/4 w-full bg-white p-4  rounded-lg shadow-lg  ">
      @csrf
      @method('post')
      <div class="mb-4">
         <label for="countries" class="block mb-2 text-lg font-medium text-gray-900 ">Select a Category</label>
         <select id="countries"  name="category_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
           <option selected value="">Choose a category</option>
           @foreach ($cats as $i=> $c_data)
           <option value="{{ $c_data->id }}">{{ $c_data->category }}</option>
          @endforeach
         </select>
         @if($errors->has('category_name'))
         <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('category_name') }}</p>
 @endif
       </div>
      <div class="mb-4">
        <label for="name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Add Facility</label>
        <input type="text"  value="{{ $udata->facility }}" name="facility" id="text" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:	Common Area and Amenities , Food">
        @if($errors->has('facility'))
        <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('facility') }}</p>
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
</div>



</div>
@stop
