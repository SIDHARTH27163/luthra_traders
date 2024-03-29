<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Querie;
use App\Models\Cable_request;
use App\Models\Product;
use App\Models\Contact;
use Mail;
use App\Mail\WelcomeEmail;
use App\Models\Review;
use Illuminate\Pagination\Paginator;

class homepageController extends Controller
{
    //

    public  function index(){
        try {
            $serviceData = DB::table('services')->where('status', 1)->orderBy('id')->get();
    
            $selectedReviews = Review::where('priority', 1)->where('status', 1)->get(); // Fetch selected reviews with priority 1 and status = 1
            $otherReviews = Review::where('priority', '!=', 1)->where('status', 1)->get(); // Fetch other reviews with status = 1
    
            $reviews = $selectedReviews->merge($otherReviews); // Merge selected and other reviews
    
            $limitedReviews = $reviews->take(4); // Limit to 4 reviews
    
            return view('welcome', ['services' => $serviceData, 'reviews' => $limitedReviews]);
        } catch (\Exception $e) {
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
               Mail::to("luthratraders@gmail.com")->send(new WelcomeEmail());
            }
        }catch(\Exception $e){
            dd($e);
        }
    }

    public function get_pg(){
        try {
            $data = DB::table('rooms')->orderBy('category')->get();
    
            $priorityReviews = DB::table('reviews')
                ->where('status', 1)
                ->where('priority', 1)
                
                ->paginate(4, ['*'], 'priority_reviews');
    
            $otherReviews = DB::table('reviews')
                ->where('status', 1)
                ->where('priority', '!=', 1)
                
                ->paginate(4, ['*'], 'other_reviews');
    
     
    
            return view('pg', [
                'data' => $data,
                'priority_reviews' => $priorityReviews,
                'other_reviews' => $otherReviews,
                
            ]);
        } catch (\Exception $e) {
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
                    'address'=>$request->address,





                ]);

                Mail::to("luthratraders@gmail.com")->send(new WelcomeEmail());

               //dd($lid);
               return redirect()->back()->with('success', 'Query Sent Successfully');
            }
        }catch(\Exception $e){
            dd($e);
        }

    }
    public  function shop(){
        try{
            $trader=  DB::table('about_traders')->get();
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
             return view('luthra_shop', ['about'=>$trader,'cats'=>$cat_data , 'products'=>$prod ,'catalog'=>$catalog , 'banner'=>$banner, 'banner1'=>$banner1 ]);


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
public function send_message(Request $request){
    try{

        $data = $request->only('first_name','last_name',  'email' ,'message' );
        $validator = Validator::make($data, [

            'first_name' => 'required|string',
            'last_name'=>'required|string',

            'email' => 'required|email',



             'message' => 'required'
        ]);


        // Send a failed response if the request is not valid
        if ($validator->fails()) {
            $messages = $validator->messages();
            return redirect()->back()->withErrors($messages);
        }else{
            Contact::create([
                'fname'=>$request->first_name,
                'lname'=>$request->last_name,

                'email'=>$request->email,
                'message'=>$request->message





            ]);

            Mail::to("luthratraders@gmail.com")->send(new WelcomeEmail());

           //dd($lid);
           return redirect()->back()->with('success', 'Request Sent Successfully');
        }
    }catch(\Exception $e){
        dd($e);
    }

}
public function review(Request $request){
    try{
        $user = auth()->user();
        $data = $request->only('review' , 'rating' , 'first_name' , 'last_name');
        $validator = Validator::make($data, [

        'review' => 'required',
        'rating'=>'required',
        'first_name' => 'required',
        'last_name'=>'required'
    ]);
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        // return Redirect::to('signup')
        //     ->withErrors($messages);
            return redirect()->back()->withErrors($messages);
            //return ($messages);
    }else{
        // Tourist_location::create([

        //     'location'=>$request->location,
        // ]);

            $name = $request->first_name . " " . $request->last_name;
            $date=Review::create([
                'name'=>$name,


                'review'=>$request->review,
                'rating'=>$request->rating,

                'date'=>date('d-m-Y')


            ]);
            Mail::to("luthratraders@gmail.com")->send(new WelcomeEmail());
            return redirect()->back()->with('success', 'Thankyou For Your Valuable Review|| Review will  be refelected shortly');

        // return redirect()->back()->with('message', 'Location Successfully Added For Tourist Places ');
    }
    }catch(\Exception $e){
        dd($e);
 }
 }
 public function luthra_cabletv(){
    try{
        $data1 = DB::table('packs')->where('status', 1)->where('category', 'FASTWAY SD+ BOX')->orderBy('name')->get();
        $data2 = DB::table('packs')->where('status', 1)->where('category', 'FASTWAY HD+ BOX')->orderBy('name')->get();
return view('cable_tv' ,['data'=>$data1 , 'data1'=>$data2]);
    }catch(\Exception){
        dd($e);
    }
 }
}
