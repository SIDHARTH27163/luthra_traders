<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Querie;
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
}
