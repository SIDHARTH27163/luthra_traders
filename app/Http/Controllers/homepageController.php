<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Querie;
use App\Models\Cable_request;
use App\Models\Product;
class homepageController extends Controller
{
    //

    public  function index(){
        try{
            $service_data=  DB::table('services')->where('status' , 1)->orderBy('id' , 'desc')->get();
                 
            // display  blogs both uproved and un uproved 
          
            // display emnds
             return view('welcome', ['services'=>$service_data]);
           

        }catch(\Exception $e){
            dd($e);
        }
    }
    public function enquire($id){
        try{
           
                 
            // display  blogs both uproved and un uproved 
          
            // display emnds
             return view('enquire' , ['id'=>$id]);
           

        }catch(\Exception $e){
            dd($e);
        }
    }


    public function send_enquiry($id , Request $request){
        try{
            $data = $request->only('first_name','last_name',  'email' , 'phone','description' );
            $validator = Validator::make($data, [
                
                'first_name' => 'required|string',
                'last_name'=>'required|string',
               
                'email' => 'required|email',
              
                'phone'=>'required',
                
                 'description' => 'required'
            ]);
    
    
            // Send a failed response if the request is not valid
            if ($validator->fails()) {
                $messages = $validator->messages();
                return redirect()->back()->withErrors($messages);
            }else{
               Querie::create([
                    'fname'=>$request->first_name,
                    'lname'=>$request->last_name,
                    'phone'=>$request->phone,
                    'email'=>$request->email,
                    'description'=>$request->description,
                    'service_id'=>$id
                    
                  
                  
                   
                ]);
                
    
              
               //dd($lid);
               return redirect()->back()->with('success', 'Query Sent Successfully');

            }
        }catch(\Exception $e){
            dd($e);
        }
    }

    public function get_pg(){
        try{
            $data=  DB::table('rooms')->orderBy('category')->get();
// Return("Get pg" ['services'=>$service_data]);
return view('pg' ,  ['data'=>$data]);
        }catch(\Exception $e){
            dd($e);
        }
    }


    public function room_detail(Request $request , $id){
        try{
            $data=  DB::table('rooms')->where('id' , $id)->get();

           
              
                $g_data=  DB::table('gallery_rooms')->where('room_id' , $id)->get();

                $a_data=  DB::table('facilitycategories')->where('category_id' , '3')->get();
                $b_data=  DB::table('facilitycategories')->where('category_id' , '4')->get();
        
                $c_data=  DB::table('facilitycategories')->where('category_id' , '5')->get();
                $d_data=  DB::table('facilitycategories')->where('category_id' , '6')->get();
            return view('pg_detail' , ['data'=>$data, 'gallery'=>$g_data , 'a'=>$a_data , 'b'=>$b_data , 'c'=>$c_data , 'd'=>$d_data]);
        }catch(\Exception $e){
            dd($e);
        }

    }
    public function send_request(Request $request){
        try{

            $data = $request->only('first_name','last_name',  'email' , 'mobile_number','address' );
            $validator = Validator::make($data, [
                
                'first_name' => 'required|string',
                'last_name'=>'required|string',
               
                'email' => 'required|email',
              
                'mobile_number'=>'required',
                
                 'address' => 'required'
            ]);
    
    
            // Send a failed response if the request is not valid
            if ($validator->fails()) {
                $messages = $validator->messages();
                return redirect()->back()->withErrors($messages);
            }else{
                Cable_request::create([
                    'fname'=>$request->first_name,
                    'lname'=>$request->last_name,
                    'mobile'=>$request->mobile_number,
                    'email'=>$request->email,
                    'address'=>$request->address,1
                    
                    
                  
                  
                   
                ]);
                
    
              
               //dd($lid);
               return redirect()->back()->with('success', 'Query Sent Successfully');
            }
        }catch(\Exception $e){
            dd($e);
        }

    }
    public  function shop(){
        try{
            $cat_data=  DB::table('shop_categories')->where('status' , 1)->orderBy('category')->get();
            $prod=  DB::table('products')->where('status' , 1)->orderBy('p_name')->limit(9)->get();
            $catalog=  DB::table('products')->where('status' , 1)->where('catalog', 1) ->orderBy('id' , 'desc')->limit(10)->get();
           $banner=DB::table('product_banners')->where('status' , 1) ->orderBy('id' , 'desc')->limit(1)->get();
            // display  blogs both uproved and un uproved 
            $banner1 = DB::table('product_banners')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->skip(1) // Skip the last record
            ->take(1) // Take one record
            ->get();
            // display emnds
             return view('luthra_shop', ['cats'=>$cat_data , 'products'=>$prod ,'catalog'=>$catalog , 'banner'=>$banner, 'banner1'=>$banner1 ]);
           

        }catch(\Exception $e){
            dd($e);
        }
        
    }

public function view_product(Request $request , $id){
try{
    $banner=DB::table('product_banners')->where('status' , 1) ->orderBy('id' , 'desc')->limit(1)->get();

    // display  blogs both uproved and un uproved 
    $banner1 = DB::table('product_banners')
    ->where('status', 1)
    ->orderBy('id', 'desc')
    ->skip(1) // Skip the last record
    ->take(1) // Take one record
    ->get();
    $data=  Product::find($id);
    $gallery=DB::table('gallery_products')->where('p_id' , $id)->get();
return view('product_view', ['data'=>$data , 'banner'=>$banner, 'banner1'=>$banner1 , 'gallery'=>$gallery ]);
}catch(\Exception $e){
            dd($e);
        }

    }
    public function view_category(Request $request , $text){
        try{
            $s_text=urldecode($text);
            $banner=DB::table('product_banners')->where('status' , 1) ->orderBy('id' , 'desc')->limit(1)->get();
        
            // display  blogs both uproved and un uproved 
            $banner1 = DB::table('product_banners')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->skip(1) // Skip the last record
            ->take(1) // Take one record
            ->get();
            $data=  DB::table('products')->where('category' , $s_text)->get();
        return view('category_view', [ 'banner'=>$banner, 'banner1'=>$banner1 ,'products'=>$data ]);
        }catch(\Exception $e){
                    dd($e);
                }
        
            }


public function products(){
    try{
      
        $banner=DB::table('product_banners')->where('status' , 1) ->orderBy('id' , 'desc')->limit(1)->get();
    
        // display  blogs both uproved and un uproved 
        $banner1 = DB::table('product_banners')
        ->where('status', 1)
        ->orderBy('id', 'desc')
        ->skip(1) // Skip the last record
        ->take(1) // Take one record
        ->get();
        $prod=  DB::table('products')->where('status' , 1)->orderBy('p_name')->get();
    return view('products', [ 'banner'=>$banner, 'banner1'=>$banner1 ,'products'=>$prod ]);
    }catch(\Exception $e){
                dd($e);
            }
}

public function search(Request $request){
    try{
     $q=$request->search;
     // Share button 1
   
     $filter_data = Product::where ( 'p_name', 'LIKE', '%' . $q . '%' )->orWhere ( 'b_name', 'LIKE', '%' . $q . '%' )->orWhere ( 'category', 'LIKE', '%' . $q . '%' )->orWhere ( 'm_name', 'LIKE', '%' . $q . '%' )->get();
     $banner=DB::table('product_banners')->where('status' , 1) ->orderBy('id' , 'desc')->limit(1)->get();
    
        // display  blogs both uproved and un uproved 
        $banner1 = DB::table('product_banners')
        ->where('status', 1)
        ->orderBy('id', 'desc')
        ->skip(1) // Skip the last record
        ->take(1) // Take one record
        ->get();
     if (count ( $filter_data ) > 0)
     return view('search_products', [ 'products'=>$filter_data , 'message'=>'' , 'banner'=>$banner, 'banner1'=>$banner1]);
     else
         //return ( 'No Result found for' .$filter .' try Another filter');
         $message='No Result found for location or category named ' .$q .' Try Another search query ';
         return view('search_products', [ 'message'=>$message ,'products'=>$filter_data, 'banner'=>$banner, 'banner1'=>$banner1]);
 }
         catch(\Exception $e){
             dd($e);
         }
         
   // Load index view
  // return view('blogs.blogs', [ 'share1'=>$shareButtons1]);
}

}
