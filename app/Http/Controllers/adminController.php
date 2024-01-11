<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Querie;
use App\Models\User;
use App\Models\Category;
use App\Models\Facilitycategory;
use App\Models\Room;
use App\Models\Gallery_Room;
use App\Models\Shop_category;
use App\Models\Product;
use App\Models\Product_banner;
use App\Models\Cable_request;
use App\Models\Contact;
use App\Models\Review;
use App\Models\Gallery_product;
use App\Models\About_trader;
use App\Imports\UsersImport;
use Image;
use Excel;
use App\Models\Pack;

class adminController extends Controller
{

    public function admin(){
        try{
            $r_data = DB::table('reviews')
            ->where('status', 0)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
            $c_data = DB::table('contacts')
                    ->where('status', 0)
                    ->orderBy('id', 'desc')
                    ->limit(5)
                    ->get();
            $queries_data = DB::table('queries')
    ->join('services', 'queries.service_id', '=', 'services.id')
    ->select('services.id as service_id' , 'queries.id as q_id', 'service_name' , 'fname' , 'lname' , 'email' , 'queries.description as desc' , 'phone' ,'queries.status as q_status',)
    ->where('queries.status', 0)
    ->orderBy('queries.id', 'desc')
    ->get();
           
            // foreach to increase response time
            $data = [];
            foreach($queries_data as $queries_data_data) {
                $data[] = $queries_data_data;

            }


            $data1 = DB::table('product_banners')

      
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get();
            $data2 = DB::table('products')

      
            ->orderBy('id' , 'asc')
            ->limit(5)
            ->get();
    
                //
            // resppinse time ends
             return view('admin.index' , ['queries_data'=>$data , 'data'=>$data1 , 'p_data'=>$data2 , 'c_data'=>$c_data , 'r_data'=>$r_data]);

        }catch(\Exception $e){
            dd($e);
        }
    }
    //
    public function change_u_status($id , Request  $req){
        try{
            $data=User::find($id);

            if ($data) {
                if ($data->status == 0) {
                    $data->status = 1;
                    $data->save();

                    return redirect()->back()->with('success', 'User Activated');
                } else {
                    $data->status = 0;
                    $data->save();
                    return redirect()->back()->with('message', 'User Rejected');
                }
            } else {
                return redirect()->back()->with('message', 'User not found');
            }
         }catch(\Exception $e){
                    dd($e);
                }
            }
            public function delete_u($id , Request $request){
                try{
                    DB::table('users')->where('id', $id)->delete();

                    return redirect()->back()->with('message', 'User Deleted');

                        // return redirect()->back()->with('message', 'Tourist Place Status Apprved');
                }catch(\Exception $e){
                    dd($e);
                }
            }
    public function get_queries(){
        try{
            $queries_data = DB::table('queries')
    ->join('services', 'queries.service_id', '=', 'services.id')
    ->select('services.id as service_id' , 'queries.id as q_id', 'service_name' , 'fname' , 'lname' , 'email' , 'queries.description as desc' , 'phone' ,'queries.status as q_status',)
    ->where('queries.status', 0)
    ->orderBy('queries.id', 'desc')
    ->get();
            $queries_d=  DB::table('queries')
            ->join('services', 'queries.service_id', '=', 'services.id')
            ->select('services.id as service_id' , 'queries.id as q_id', 'service_name' , 'fname' , 'lname' , 'email' , 'phone' , 'queries.description as desc' ,'queries.status as q_status',)
            ->where('queries.status', 1)
            ->orderBy('queries.id', 'desc')
            ->get();

            // foreach to increase response time
            $data = [];
            foreach($queries_data as $queries_data_data) {
                $data[] = $queries_data_data;

            }
            $data1 = [];
            foreach($queries_d as $queries_d_data) {
                $data1[] = $queries_d_data;

            }
                //
            // resppinse time ends
             return view('admin.queries_inbox' , ['queries_data'=>$data , 'queries_d'=>$data1]);

        }catch(\Exception $e){
            dd($e);
        }
    }


    public function change_status($id , Request  $req){
try{
    $data=Querie::find($id);

    if ($data) {
        if ($data->status == 0) {
            $data->status = 1;
            $data->save();

            return redirect()->back()->with('success', 'Querie Activated');
        } else {
            $data->status = 0;
            $data->save();
            return redirect()->back()->with('message', 'Querie Rejected');
        }
    } else {
        return redirect()->back()->with('message', 'Querie not found');
    }
 }catch(\Exception $e){
            dd($e);
        }
    }
    public function delete_querie($id , Request  $req){
        try{
            DB::table('queries')->where('id', $id)->delete();

            return redirect()->back()->with('message', 'Query Deleted');

                // return redirect()->back()->with('message', 'Tourist Place Status Apprved');
        }catch(\Exception $e){
            dd($e);
        }
            }


            public function create_user($id , Request $request){
                try{
                    $data = Querie::find($id);

if ($data) {
    // Check if a user with the same email exists
    $existingUser = User::where('email', $data->email)->first();

    if (!$existingUser) {
        // User with this email doesn't exist, create a new user
        $user = new User();
        $user->first_name = $data->fname;
         // Assuming 'name' is a field in your User model
        $user->email = $data->email;
        $user->last_name = $data->lname;
        $user->password = $data->phone;
        $user->service=$id;
        $user->role=$id;
        // Set other user attributes as needed
        $user->save();

        // Update the status of the query
        $user->status = 1;
        $data->save();

        return redirect()->back()->with('success', 'User Activated and User Created');
    } else {
        // User with this email already exists
        return redirect()->back()->with('message', 'User Rejected. User with the same email already exists');
    }
} else {
    return redirect()->back()->with('message', 'Query not found');
}

              }catch(\Exception $e){
            dd($e);
        }

            }

            public function create_user1($id , Request $request){
                try{
                    $data = Cable_request::find($id);

if ($data) {
    // Check if a user with the same email exists
    $existingUser = User::where('email', $data->email)->first();

    if (!$existingUser) {
        // User with this email doesn't exist, create a new user
        $user = new User();
        $user->first_name = $data->fname;
         // Assuming 'name' is a field in your User model
        $user->email = $data->email;
        $user->last_name = $data->lname;
        $user->password = $data->mobile;
        $user->service=$id;
        $user->role=$id;
        // Set other user attributes as needed
        $user->save();

        // Update the status of the query
        $user->status = 1;
        $data->save();

        return redirect()->back()->with('success', 'User Activated and User Created');
    } else {
        // User with this email already exists
        return redirect()->back()->with('message', 'User Rejected. User with the same email already exists');
    }
} else {
    return redirect()->back()->with('message', 'Query not found');
}

              }catch(\Exception $e){
            dd($e);
        }

            }

            public function users_lists(){
                try{
                    $u_users_data = DB::table('users')
                    ->join('services', 'users.service', '=', 'services.id')
                    ->select('services.id as service_id' , 'users.id as u_id', 'service_name' , 'first_name' , 'last_name' , 'email'  ,'users.status as u_status',)
                    ->where('users.status', 0)
                    ->orderBy('users.id', 'desc')
                    ->get();
                    $a_users_data = DB::table('users')
                    ->join('services', 'users.service', '=', 'services.id')
                    ->select('services.id as service_id' , 'users.id as u_id', 'service_name' , 'first_name' , 'last_name' , 'email'  ,'users.status as u_status',)
                    ->where('users.status', 1)
                    ->orderBy('users.id', 'desc')
                    ->get();

                    $data = [];
                    foreach($u_users_data as $un_users_data) {
                        $data[] = $un_users_data;

                    }
                    $data1 = [];
                    foreach($a_users_data as $ap_users_data) {
                        $data1[] = $ap_users_data;

                    }
                    return view('admin.users' , ['users_data'=>$data, 'users_d'=>$data1]);
                }catch(\Exception $e){
            dd($e);
        }
            }



            public function services(){
                try{
                    $service_data=  DB::table('services')->where('status' , 1)->orderBy('service_name')->paginate(4);


                    return view("admin.index" ,  [ 'service_data'=>$service_data ]);

                }catch(\Exception $e){
                    dd($e);
             }

            }


            public function add_facilities(){
                try{
                    $cat=  DB::table('categories')->orderBy('category')->get();

                    $f_data = DB::table('facilitycategories')
                    ->join('categories', 'facilitycategories.category_id', '=', 'categories.id')
                    ->select('categories.id as cat_id' , 'facilitycategories.id as f_id', 'facility' , 'category'  ,'status'  )
                    ->orderBy('facilitycategories.facility')

                    ->get();
                    $data = [];
                    foreach( $f_data as $un_users_data) {
                        $data[] = $un_users_data;

                    }
                    return view("admin.facilities" ,  [ 'cats'=>$cat , 'facility'=>$data ]);

                }catch(\Exception $e){
                    dd($e);
             }
            }




            public function add_category(Request $request){
                try{
                    $data = $request->only('category');
            $validator = Validator::make($data, [

                'category' => 'required|string|unique:categories',


            ]);

            //Send failed response if request is not valid
            if ($validator->fails()) {

                // get the error messages from the validator
                $messages = $validator->messages();

                // redirect our user back to the form with the errors from the validator
                // return Redirect::to('signup')
                //     ->withErrors($messages);
                return redirect()->back()->withErrors($messages);
                //return ($messages);
            }else{
                Category::create([
                    'category'=>$request->category,




                ]);


                return redirect()->back()->with('success', 'Category Added');
            }

                }catch(\Exception $e){
                    dd($e);
             }
            }
public function edit_cat($id){
    try{
        $u_data=  Category::find($id);
return view('admin.edit_cat',['udata'=>$u_data]);
    }catch(\Exception $e){
        dd($e);
    }
}
public function edit_cats($id , Request $request){
    try{
        try{
            $data = $request->only('category');
            DB::table('categories')
            ->where('id', $id)
            ->update([
                'category' => $request->category,
              
    
            ]);
        
        $lid = $id;
        
        return Redirect::to('manage_facilities')->with('success', 'Category Updated Successfully ');
        }catch(\Exception $e){
            dd($e);
        }
    }catch(\Exception $e){
        dd($e);
    }
}
            public function add_facility_cat(Request $request){
                try{
                    $data = $request->only('category_name','facility' );
            $validator = Validator::make($data, [
               
                'category_name' => 'required|string',
                'facility' => 'required|string|unique:facilitycategories',

            ]);

            //Send failed response if request is not valid
            if ($validator->fails()) {

                // get the error messages from the validator
                $messages = $validator->messages();

                // redirect our user back to the form with the errors from the validator
                // return Redirect::to('signup')
                //     ->withErrors($messages);
                return redirect()->back()->withErrors($messages);
                //return ($messages);
            }else{
                Facilitycategory::create([
                    'category_id'=>$request->category_name,
                    'facility'=>$request->facility,

                  

                ]);


                return redirect()->back()->with('success', 'Facility Added to category');
            }

                }catch(\Exception $e){
                    dd($e);
             }
            }

            public function delete_cats($id , Request $request){
                try{
                    DB::table('categories')->where('id', $id)->delete();
                    DB::table('facilitycategories')->where('category_id', $id)->delete();
                    return redirect()->back()->with('message', 'Category And Facilties  Deleted');

                        // return redirect()->back()->with('message', 'Tourist Place Status Apprved');
                }catch(\Exception $e){
                    dd($e);
                }
            }
            public function delete_cats_facility($id , Request $request){
                try{
                    DB::table('facilitycategories')->where('id', $id)->delete();

                    return redirect()->back()->with('message', 'Facility Deleted');

                        // return redirect()->back()->with('message', 'Tourist Place Status Apprved');
                }catch(\Exception $e){
                    dd($e);
                }
            }

            public function change_f_status($id , Request  $req){
                try{
                    $data=Facilitycategory::find($id);

                    if ($data) {
                        if ($data->status == 0) {
                            $data->status = 1;
                            $data->save();

                            return redirect()->back()->with('success', 'Facility category Marked Available');
                        } else {
                            $data->status = 0;
                            $data->save();
                            return redirect()->back()->with('message', 'Facility category Marked Un-Available');
                        }
                    } else {
                        return redirect()->back()->with('message', 'Facility category not found');
                    }
                 }catch(\Exception $e){
                            dd($e);
                        }
                    }
                    public function edit_fac_pg($id , Request $req){
                        try{
                            $cat=  DB::table('categories')->orderBy('category')->get();
                            $u_data=  Facilitycategory::find($id);
                    return view('admin.edit_facility',['udata'=>$u_data ,'cats'=>$cat]);
                    // return view("admin.facilities" ,  [ 'cats'=>$cat , 'facility'=>$data ]);
                        }catch(\Exception $e){
                            dd($e);
                        }
                    }
                    public function edit_pg_fac($id , Request $request){
                        try{
                            $data = $request->only('category_name','facility' );
                            $validator = Validator::make($data, [
                               
                                'category_name' => 'required|string',
                                'facility' => 'required|string|unique:facilitycategories',
                
                            ]);
                
                            //Send failed response if request is not valid
                            if ($validator->fails()) {
                
                                // get the error messages from the validator
                                $messages = $validator->messages();
                
                                // redirect our user back to the form with the errors from the validator
                                // return Redirect::to('signup')
                                //     ->withErrors($messages);
                                return redirect()->back()->withErrors($messages);
                                //return ($messages);
                            }else{
                            $data = $request->only('category_name',  'facility',);
                            DB::table('facilitycategories')
                            ->where('id', $id)
                            ->update([
                                'category_id' => $request->category_name,
                                'facility' => $request->facility,
                    
                            ]);
                        
                        $lid = $id;
                        
                        return Redirect::to('manage_facilities/')->with('success', 'Facility Category Updated Successfully ');
                      }
                      }catch(\Exception $e){
                            dd($e);
                        }
                    }
public function add_room(Request $request){
    try{
        $r_data = DB::table('rooms')
        // ->where('status' , 0)
        ->orderBy('category')

        ->paginate(10);

        // return view("admin.facilities" ,  [ 'cat'=>$cat , 'facility'=>$f_data ]);

        return view("admin.manage_rooms" ,  [ 'data'=>$r_data ]);
     }catch(\Exception $e){
                            dd($e);
                        }
}

public function edit_room(Request $request , $id){
    try{
        $u_data= Room::find($id);

        // return view("admin.facilities" ,  [ 'cat'=>$cat , 'facility'=>$f_data ]);

        return view("admin.edit_room" ,  [ 'udata'=>$u_data]);
     }catch(\Exception $e){
                            dd($e);
                        }
}
public function edit_rooms($id , Request $request){
    try{
        try{
            $data = $request->only('category','available_for' ,'food_availability' , 'price',
            'parking' , 'tenants_types' ,'total_beds' ,
            'notice_period', 'maintenance_charges', 'electricity_charges' , 'deposite_amount' ,'description' );
            DB::table('rooms')
            ->where('id', $id)
            ->update([
                'price'=>$request->price .''.'Rs /-person',
                'category'=>$request->category,
                 'available'=>$request->available_for,
                   'food'=>$request->food_availability,
                        'parking'=>$request->parking,
                          'tenants'=>$request->tenants_types,
                            'beds'=>$request->total_beds,
                           'period'=>$request->notice_period,
                          'maintenance'=> $request->maintenance_charges,
                           'electrcity'=>$request->electricity_charges,
                          'amount'=>$request->deposite_amount,
                'desc'=>$request->description,
    
            ]);
        
        $lid = $id;
        
        return Redirect::to('manage_rooms/')->with('success', 'Service Updated Successfully ');
        }catch(\Exception $e){
            dd($e);
        }
    }catch(\Exception $e){
        dd($e);
    }
}
public function add_rooms(Request $request){
    try{


        $data = $request->only('category','available_for' ,'food_availability' ,'price',
         'parking' , 'tenants_types' ,'total_beds' ,
         'notice_period', 'maintenance_charges', 'electricity_charges' , 'deposite_amount' ,'description' );
        $validator = Validator::make($data, [
            'available_for' => 'required|string',
            'price' => 'required|string',
            'category' => 'required|string',
            'parking' => 'required|string',
            'food_availability' => 'required|string',
            'tenants_types' => 'required|string',
            'total_beds' => 'required|string',
            'notice_period' => 'required|string',
            'maintenance_charges' => 'required|string',
            'electricity_charges' => 'required|string',
            'deposite_amount' => 'required|string',
            'description' => 'required'
                   ]);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return redirect()->back()->withErrors($messages);
            //return ($messages);
        }else{
            Room::create([
                'price'=>$request->price .''.'Rs /-person',
                'category'=>$request->category,
                 'available'=>$request->available_for,
                   'food'=>$request->food_availability,
                        'parking'=>$request->parking,
                          'tenants'=>$request->tenants_types,
                            'beds'=>$request->total_beds,
                           'period'=>$request->notice_period,
                          'maintenance'=> $request->maintenance_charges,
                           'electrcity'=>$request->electricity_charges,
                          'amount'=>$request->deposite_amount,
                'desc'=>$request->description,



            ]);
            return redirect()->back()->with('success', 'Room Added Successfully');
        }
     }catch(\Exception $e){
                            dd($e);
                        }
}
public function change_r_status($id , Request  $req){
    try{
        $data=Room::find($id);

        if ($data) {
            if ($data->status == 0) {
                $data->status = 1;
                $data->save();

                return redirect()->back()->with('success', 'Room Marked Available');
            } else {
                $data->status = 0;
                $data->save();
                return redirect()->back()->with('message', 'Room Marked Not Available');
            }
        } else {
            return redirect()->back()->with('message', 'Room not found');
        }
     }catch(\Exception $e){
                dd($e);
            }
        }
        public function delete_r($id , Request $request){
            try{
                DB::table('rooms')->where('id', $id)->delete();

                return redirect()->back()->with('message', 'room Deleted');

                    // return redirect()->back()->with('message', 'Tourist Place Status Apprved');
            }catch(\Exception $e){
                dd($e);
            }
        }


      public function cabletv_req(){
        try{
            $data = DB::table('cable_requests')
            ->where('status', 0)
            ->orderBy('id', 'desc')
            ->get();

            $data1 = DB::table('cable_requests')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->get();

            return view('admin.cabletv' , ['data'=>$data , 'data1'=>$data1]);
        }catch(\Exception $e){
            dd($e);
        }
      }



      public function change_cable_req_status($id , Request  $req){
        try{
            $data=Cable_request::find($id);
    
            if ($data) {
                if ($data->status == 0) {
                    $data->status = 1;
                    $data->save();
    
                    return redirect()->back()->with('success', 'Cable Request Marked Available');
                } else {
                    $data->status = 0;
                    $data->save();
                    return redirect()->back()->with('message', 'Cable Request Marked Not Available');
                }
            } else {
                return redirect()->back()->with('message', 'Cable Request not found');
            }
         }catch(\Exception $e){
                    dd($e);
                }
            }
            public function delete_cable_req($id , Request $request){
                try{
                    DB::table('cable_requests')->where('id', $id)->delete();
    
                    return redirect()->back()->with('message', 'Cable Reques6 Deleted');
    
                        // return redirect()->back()->with('message', 'Tourist Place Status Apprved');
                }catch(\Exception $e){
                    dd($e);
                }
            }



        public function get_pg_data(){
            try{
                $data = DB::table('users')

                ->where('service', 6)
                ->orderBy('id', 'desc')
                ->get();



                return view('admin.pg_users' , ['users_data'=>$data]);
            }catch(\Exception $e){
                dd($e);
            }
        }

        public function upload_gallery($id , Request $request){
            return view('admin.upload_gallery' , ['id'=>$id]);
        }
        public function upload_room_gallery($id , Request $request){
            try {
                $data = $request->only('files');
                $validator = Validator::make($data, [
                    'files' => 'required|array|max:6',
                    'files.*' => 'required|image|mimes:jpeg,png,jpg',  // Add allowed mime types and max size as per your requirements
                ]);

                // Send a failed response if the request is not valid
                if ($validator->fails()) {
                    $messages = $validator->messages();
                    return redirect()->back()->withErrors($messages);
                } else {
                    if ($request->hasFile('files')) {
                        foreach ($request->file('files') as $file) {
                            // Generate a unique name for each image
                            $name = uniqid() . '.' . $file->getClientOriginalExtension();
                            $destinationPath = public_path('/rooms_gallery');
                            $img = Image::make($file->getRealPath());
                            $img->resize(500, 400, function ($constraint) {
                                $constraint->aspectRatio();
                            })->save($destinationPath . '/' . $name);

                            // Check if the image already exists in the database
                            $existingImage = Gallery_room::where('image', $name)->where('room_id', $id)->first();

                            if (!$existingImage) {
                                Gallery_room::create([
                                    'image' => $name,
                                    'room_id' => $id
                                ]);
                            }
                        }
                    }


                    return Redirect::to('manage_rooms')->with('success', 'Gallery Uploaded Successfully');

                }
            } catch (\Exception $e) {
                dd($e);
            }
        }
    
        





        public function uploadUsers(Request $request)
{
    $file = $request->file('file');
    
    Excel::import(new UsersImport, $file);

    return Redirect::to('get_pg_data')->with('success', 'Users Data Exported Successfully');
}



public function manage_shop_cat(){
    try{
        $data = DB::table('shop_categories')

      
        ->orderBy('id', 'desc')
        ->get();

        // , ['users_data'=>$data]
        return view('admin.manage_shop_cat' , ['data'=>$data] );
    } catch (\Exception $e) {
                dd($e);
            }
}



public function add_shop_cat(Request $request){
    try{
        $data = $request->only('category' , 'image');
        $validator = Validator::make($data, [

            'category' => 'required|string|unique:shop_categories',

            'image' => 'required|image|mimes:png,jpg,jpeg|max:3000'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            // redirect our user back to the form with the errors from the validator
            // return Redirect::to('signup')
            //     ->withErrors($messages);
            return redirect()->back()->withErrors($messages);
            //return ($messages);
        }else{
            $image = $request->file('image');
            $input = time().'.'.$image->getClientOriginalExtension();
            //your directory to upload
            $destinationPath = public_path('/shop_images');
            //save and resize image
            $img = Image::make($image->getRealPath());
            $img->resize(400,400, function ($constraint) {
              $constraint->aspectRatio();
              })->save($destinationPath.'/'.$input);



              $blog=Shop_category::create([
                'category'=>$request->category,
                'image'=>$input,
               
                
            ]);
           
            return redirect()->back()->with('success', 'Category Added Successfully');
        }

        
    }catch(\Exception $e){
        dd($e);
    }
}


public function change_shop_cats(Request $request , $id){

try{
        $data=Shop_category::find($id);

        if ($data) {
            if ($data->status == 0) {
                $data->status = 1;
                $data->save();

                return redirect()->back()->with('success', 'Shop Category Marked Available');
            } else {
                $data->status = 0;
                $data->save();
                return redirect()->back()->with('message', 'Shop Category Marked Not Available');
            }
        } else {
            return redirect()->back()->with('message', 'Shop Category not found');
        }
     }catch(\Exception $e){
                dd($e);
            }
}

public function delete_shop_cats(Request $request , $id){

    try{
        DB::table('shop_categories')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Category Deleted');

            // return redirect()->back()->with('message', 'Tourist Place Status Apprved');
    }catch(\Exception $e){
        dd($e);
    }
    }
public function manage_shop_products(){
    try{
        $data = DB::table('shop_categories')

      
        ->orderBy('id', 'desc')
        ->get();
        $data1 = DB::table('products')

      
        ->orderBy('id' , 'desc')
        ->get();

        // , ['users_data'=>$data]
        return view('admin.manage_products' , ['data'=>$data , 'p_data' =>$data1] );
    } catch (\Exception $e) {
                dd($e);
            }
}

public function add_products(Request $request ){
try{
    $data = $request->only('category' , 'product_name' , 'brand_name' ,
     'model_name' , 'original_price'  , 'warranty_policy' , 'description' , 'image');
    $validator = Validator::make($data, [

        'category' => 'required|string',
        'product_name' => 'required|string',
        'brand_name'=>'required|string',
        'model_name'=>'required|string',
        // 'network_provider'=>'required|string',
        // 'operating_system'=>'required|string',
        // 'cellular_technology'=>'required|string',
        'original_price'=>'required|string',
        // 'discount'=>['required', 'regex:/^\d+(\.\d{1,2})?%$/'],
        // 'emi_cost'=>'required|string',
        // 'replacement_time'=>'required|string',
        'warranty_policy'=>'required|string',
        'description'=>'required|string',
        'image' => 'required|image|mimes:png,jpg,jpeg|max:5000'

        
    ]);

    //Send failed response if request is not valid
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        // return Redirect::to('signup')
        //     ->withErrors($messages);
        return redirect()->back()->withErrors($messages);
        //return ($messages);
    }else{
        $image = $request->file('image');
        $input = time().'.'.$image->getClientOriginalExtension();
        //your directory to upload
        $destinationPath = public_path('/shop_images');
        //save and resize image
        $img = Image::make($image->getRealPath());
        $img->resize(600,600, function ($constraint) {
          $constraint->aspectRatio();
          })->save($destinationPath.'/'.$input);
        Product::create([
            'category'=>$request->category,
            'p_name'=>$request->product_name,
            'b_name'=>$request->brand_name,
            'm_name'=>$request->model_name,
            'image'=>$input,
            // 'os'=>$request->operating_system,
            // 'cellular'=>$request->cellular_technology,
            'price'=>$request->original_price,
            'discount'=>$request->discount,
            'emi_cost'=>$request->emi_cost,
            'r_time'=>$request->replacement_time,
            'w_policy'=>$request->warranty_policy,
            'desc'=>$request->description
           
            
        ]);
       
        return redirect()->back()->with('success', 'Product Added Successfully');

    }
} catch (\Exception $e) {
    dd($e);
}
}

public function delete_pr($id , Request $request){
    try{
        DB::table('products')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Product Deleted');

            // return redirect()->back()->with('message', 'Tourist Place Status Apprved');
    }catch(\Exception $e){
        dd($e);
    }
}

public function change_pr_status($id , Request  $req){
    try{
        $data=Product::find($id);

        if ($data) {
            if ($data->status == 0) {
                $data->status = 1;
                $data->save();

                return redirect()->back()->with('success', 'Product Marked Available');
            } else {
                $data->status = 0;
                $data->save();
                return redirect()->back()->with('message', 'Facilitycategory Marked Un-Available');
            }
        } else {
            return redirect()->back()->with('message', 'Facilitycategory not found');
        }
     }catch(\Exception $e){
                dd($e);
            }
        }



        public function upload_pr_gallery($id , Request $request){
            return view('admin.upload_pr_gallery' , ['id'=>$id]);
        }
        public function upload_gallery_pr($id , Request $request){
            try {
                $data = $request->only('files');
                $validator = Validator::make($data, [
                    'files' => 'required|array|max:6',
                    'files.*' => 'required|image|mimes:jpeg,png,jpg',  // Add allowed mime types and max size as per your requirements
                ]);

                // Send a failed response if the request is not valid
                if ($validator->fails()) {
                    $messages = $validator->messages();
                    return redirect()->back()->withErrors($messages);
                } else {
                    if ($request->hasFile('files')) {
                        foreach ($request->file('files') as $file) {
                            // Generate a unique name for each image
                            $name = uniqid() . '.' . $file->getClientOriginalExtension();
                            $destinationPath = public_path('/p_gallery');
                            $img = Image::make($file->getRealPath());
                            $img->resize(500, 500, function ($constraint) {
                                $constraint->aspectRatio();
                            })->save($destinationPath . '/' . $name);

                            // Check if the image already exists in the database
                            $existingImage = Gallery_product::where('image', $name)->where('p_id', $id)->first();

                            if (!$existingImage) {
                                Gallery_product::create([
                                    'image' => $name,
                                    'p_id' => $id
                                ]);
                            }
                        }
                    }

                    DB::table('products')
                    ->where('id', $id)
                    ->update(['gallery' => "1"]);
                    return Redirect::to('manage_shop_products')->with('success', 'Gallery Uploaded Successfully');

                }
            } catch (\Exception $e) {
                dd($e);
            }
        }
public function edit_pr($id , Request $req){
    try{
        $data = DB::table('shop_categories')

      
        ->orderBy('id', 'desc')
        ->get();
        $u_data=  Product::find($id);
return view('admin.edit_product',['udata'=>$u_data , 'data'=>$data]);
    }catch(\Exception $e){
        dd($e);
    }
}

public function edit_product($id , Request $request){
    try{
        $data = $request->only('category' , 'product_name' , 'brand_name' ,
        'model_name' , 'original_price' , 'discount' , 'emi_cost' , 'replacement_time' , 'warranty_policy' , 'description' );
        DB::table('products')
        ->where('id', $id)
        ->update([
            'category'=>$request->category,
            'p_name'=>$request->product_name,
            'b_name'=>$request->brand_name,
            'm_name'=>$request->model_name,
           
            // 'os'=>$request->operating_system,
            // 'cellular'=>$request->cellular_technology,
            'price'=>$request->original_price,
            'discount'=>$request->discount,
            'emi_cost'=>$request->emi_cost,
            'r_time'=>$request->replacement_time,
            'w_policy'=>$request->warranty_policy,
            'desc'=>$request->description

        ]);
    
    $lid = $id;
    
    return Redirect::to('manage_shop_products/')->with('success', 'Product Updated Successfully ');
    }catch(\Exception $e){
        dd($e);
    }
}
        public function change_c_status($id , Request  $req){
            try{
                $data=Product::find($id);
        
                if ($data) {
                    if ($data->status == 0) {

                        return redirect()->back()->with('message', 'Product Must Be Avaiable First');
                    } else{
                        if ($data->catalog == 0) {
                            $data->catalog = 1;
                            $data->save();
            
                            return redirect()->back()->with('success', 'Product Added To Catalog');
                        } else {
                            $data->catalog = 0;
                            $data->save();
                            return redirect()->back()->with('message', 'Product Removed From Catalog');
                        }
                    }
                } else {
                    return redirect()->back()->with('message', 'Product not found');
                }
             }catch(\Exception $e){
                        dd($e);
                    }
                }
public function manage_shop_banner(Request $request ){

try{
    $data = DB::table('product_banners')

      
    ->orderBy('id', 'desc')
    ->get();
    // , ['data'=>$data , 'p_data' =>$data1]
    return view('admin.manage_banner', ['data'=>$data]  );
}catch(\Exception $e){
    dd($e);
}


}
public function add_banner(Request $request ){

    try{
        // , ['data'=>$data , 'p_data' =>$data1]
        $data = $request->only('product_discount' , 'product_name'  ,
        'image');
       $validator = Validator::make($data, [
   
           'product_discount' => ['required', 'regex:/^\d+(\.\d{1,2})?%$/'],
           'product_name' => 'required|string',
           
           // 'network_provider'=>'required|string',
           // 'operating_system'=>'required|string',
           // 'cellular_technology'=>'required|string',
        
           'image' => 'required|image|mimes:png,jpg,jpeg|max:5000'
   
           
       ]);
   
       //Send failed response if request is not valid
       if ($validator->fails()) {
   
           // get the error messages from the validator
           $messages = $validator->messages();
   
           // redirect our user back to the form with the errors from the validator
           // return Redirect::to('signup')
           //     ->withErrors($messages);
           return redirect()->back()->withErrors($messages);
           //return ($messages);
       }else{
        $image = $request->file('image');
        $input = time().'.'.$image->getClientOriginalExtension();
        //your directory to upload
        $destinationPath = public_path('/banner_images');
        //save and resize image
        $img = Image::make($image->getRealPath());
        $img->resize(300,300, function ($constraint) {
          $constraint->aspectRatio();
          })->save($destinationPath.'/'.$input);



          Product_banner::create([
            'p_name'=>$request->product_name,
            'discount'=>$request->product_discount,
            'image'=>$input,
           
            
        ]);
       
        return redirect()->back()->with('success', 'Product Added Successfully');
       }
    }catch(\Exception $e){
        dd($e);
    }
    
    
    }

    public function delete_banner($id , Request $request){
        try{
            DB::table('product_banners')->where('id', $id)->delete();
    
            return redirect()->back()->with('message', 'Product Deleted');
    
                // return redirect()->back()->with('message', 'Tourist Place Status Apprved');
        }catch(\Exception $e){
            dd($e);
        }
    }
    
    public function change_banner_status($id , Request  $req){
        try{
            $data=Product_banner::find($id);
    
            if ($data) {
                if ($data->status == 0) {
                    $data->status = 1;
                    $data->save();
    
                    return redirect()->back()->with('success', 'Product Banner Marked Active');
                } else {
                    $data->status = 0;
                    $data->save();
                    return redirect()->back()->with('message', 'Product Banner Marked Un-Active');
                }
            } else {
                return redirect()->back()->with('message', 'Product Banner not found');
            }
         }catch(\Exception $e){
                    dd($e);
                }
            }
    
// manage shop about us
public function about(){
try{
    $data = DB::table('about_traders')

      
   
    ->get();
    // , ['data'=>$data , 'p_data' =>$data1]
    return view('admin.manage_about', ['data'=>$data]  );
}catch(\Exception $e){
    dd($e);
}
}

public function edit_about($id , Request $req){
    try{
      
        $u_data=  About_trader::find($id);
return view('admin.edit_about' , ['udata'=>$u_data]);
    }catch(\Exception $e){
        dd($e);
    }
}
public function edit_abouts($id , Request $request){
    try {
        $data = $request->only('heading', 'description', 'image');
        
        // Handle the file upload separately
        if ($request->file('image')) {
            $image = $request->file('image');
        $input = time().'.'.$image->getClientOriginalExtension();
        //your directory to upload
        $destinationPath = public_path('/traders');
        //save and resize image
        $img = Image::make($image->getRealPath());
        $img->resize(300,300, function ($constraint) {
          $constraint->aspectRatio();
          })->save($destinationPath.'/'.$input);
            // Update database record with new PDF file name
            DB::table('about_traders')
                ->where('id', $id)
                ->update([
                    'heading' => $request->heading,
                    'description' => $request->description,
                   
                    'image' => $input,
                ]);
        } else {
            // Update database record without changing the PDF file
            DB::table('about_traders')
                ->where('id', $id)
                ->update([
                   'heading' => $request->heading,
                    'description' => $request->description,
                ]);
        }
        
        return redirect('manage_about')->with('success', 'About Updated Successfully');
    } catch (\Exception $e) {
        dd($e); // Handle or log the exception as needed
    }
}
// end about us

            public function contact_req(){
                try{
                    $data = DB::table('contacts')
                    ->where('status', 0)
                    ->orderBy('id', 'desc')
                    ->get();
        
                    $data1 = DB::table('contacts')
                    ->where('status', 1)
                    ->orderBy('id', 'desc')
                    ->get();
        
                    return view('admin.contact' , ['data'=>$data , 'data1'=>$data1]);
                }catch(\Exception $e){
                    dd($e);
                }
              }
        
        
        
              public function change_contact_req_status($id , Request  $req){
                try{
                    $data=Contact::find($id);
            
                    if ($data) {
                        if ($data->status == 0) {
                            $data->status = 1;
                            $data->save();
            
                            return redirect()->back()->with('success', 'Contact Marked Available');
                        } else {
                            $data->status = 0;
                            $data->save();
                            return redirect()->back()->with('message', 'Contact Marked Not Available');
                        }
                    } else {
                        return redirect()->back()->with('message', 'Contact not found');
                    }
                 }catch(\Exception $e){
                            dd($e);
                        }
                    }
                    public function delete_contact_req($id , Request $request){
                        try{
                            DB::table('contacts')->where('id', $id)->delete();
            
                            return redirect()->back()->with('message', 'Conntact Request Deleted');
            
                                // return redirect()->back()->with('message', 'Tourist Place Status Apprved');
                        }catch(\Exception $e){
                            dd($e);
                        }
                    }
        
                    public function m_review(){
                        try{
                            $data = DB::table('reviews')
                            ->where('status', 0)
                            ->orderBy('id', 'desc')
                            ->get();
                
                            $data1 = DB::table('reviews')
                            ->where('status', 1)
                            ->orderBy('id', 'desc')
                            ->get();
                
                            return view('admin.reviews' , ['data'=>$data , 'data1'=>$data1]);
                        }catch(\Exception $e){
                            dd($e);
                        }
                      }
                      public function change_review_status($id , Request  $req){
                        try{
                            $data=Review::find($id);
                    
                            if ($data) {
                                if ($data->status == 0) {
                                    $data->status = 1;
                                    $data->save();
                    
                                    return redirect()->back()->with('success', 'Review Marked Available');
                                } else {
                                    $data->status = 0;
                                    $data->save();
                                    return redirect()->back()->with('message', 'Review Marked Not Available');
                                }
                            } else {
                                return redirect()->back()->with('message', 'Review not found');
                            }
                         }catch(\Exception $e){
                                    dd($e);
                                }
                            }
                            public function change_review_priority($id , Request $req){  try{
                                $data=Review::find($id);
                        
                                if ($data) {
                                    if ($data->priority == 0) {
                                        $data->priority = 1;
                                        $data->save();
                        
                                        return redirect()->back()->with('success', 'Review  Available to Top');
                                    } else {
                                        $data->priority = 0;
                                        $data->save();
                                        return redirect()->back()->with('message', 'Review  Removed from Top');
                                    }
                                } else {
                                    return redirect()->back()->with('message', 'Review not found');
                                }
                             }catch(\Exception $e){
                                        dd($e);
                                    }

                            }
                            public function delete_review($id , Request $request){
                                try{
                                    DB::table('reviews')->where('id', $id)->delete();
                    
                                    return redirect()->back()->with('message', 'Review Request Deleted');
                    
                                        // return redirect()->back()->with('message', 'Tourist Place Status Apprved');
                                }catch(\Exception $e){
                                    dd($e);
                                }
                            }


                            public function manage_packs(){
                                try{
                                    $data = DB::table('packs')
                             
                                    ->orderBy('id', 'desc')
                                    ->get();
                                    return view('admin.manage_packs' ,['packs'=>$data]);
                                }catch(\Exception $e){
                                    dd($e);
                                }
                            }
                            public function add_pack(Request $request){
                                try {
                                    $data = $request->only('pack_name' , 'total_channels' ,'category' ,'pack_price',
        'pdf');
       $validator = Validator::make($data, [
   
           'pack_name' => ['required'],
           'total_channels' => 'required|string',
           'pack_price' => 'required|string',
           'category' => 'required|string',
        
           'pdf' => 'required|mimes:pdf'
   
           
       ]);
   
       //Send failed response if request is not valid
       if ($validator->fails()) {
   
           // get the error messages from the validator
           $messages = $validator->messages();
   
           // redirect our user back to the form with the errors from the validator
           // return Redirect::to('signup')
           //     ->withErrors($messages);
           return redirect()->back()->withErrors($messages);
           //return ($messages);
       }else{
                            
                                    $pdf = $request->file('pdf');
                                    $fileName = time() . '.' . $pdf->getClientOriginalExtension();
                                    // Your directory to upload
                                    $destinationPath = public_path('/pdfs'); // Change 'pdfs' to the desired directory name
                                    // Move the uploaded PDF file to the destination path
                                    $pdf->move($destinationPath, $fileName);

                                    Pack::create([
                                        'name' => $request->pack_name,
                                        'category' => $request->category,
                                        // Other fields you want to save
                                        'channels'=>$request->total_channels,
                                        'price'=>$request->pack_price,
                                        'pdf' => $fileName 
                                    ]);
                        
                                    return redirect()->back()->with('success', 'Pack Added');
                                }
                                } catch (\Exception $e) {
                                    // Handle any exceptions or errors
                                    dd($e);
                                }

                            }

                            public function change_packs_status($id , Request $req){
                                try{
                                    $data=Pack::find($id);
                            
                                    if ($data) {
                                        if ($data->status == 0) {
                                            $data->status = 1;
                                            $data->save();
                            
                                            return redirect()->back()->with('success', 'Pack  Activated');
                                        } else {
                                            $data->status = 0;
                                            $data->save();
                                            return redirect()->back()->with('message', 'Pack  Deactivated');
                                        }
                                    } else {
                                        return redirect()->back()->with('message', 'Pack not found');
                                    }
                                 }catch(\Exception $e){
                                            dd($e);
                                        }
                            }


                            public function delete_pack($id , Request $request){
                                try{
                                    DB::table('packs')->where('id', $id)->delete();
                    
                                    return redirect()->back()->with('message', 'pack  Deleted');
                    
                                        // return redirect()->back()->with('message', 'Tourist Place Status Apprved');
                                }catch(\Exception $e){
                                    dd($e);
                                }
                            }

                            public function edit_pack($id , Request $req){
                                try{
                                  
                                    $u_data=  Pack::find($id);
                            return view('admin.edit_pack' , ['udata'=>$u_data]);
                                }catch(\Exception $e){
                                    dd($e);
                                }
                            }
                            
                            public function edit_packs($id , Request $request){
                                try {
                                    $data = $request->only('pack_name', 'total_channels', 'pack_price', 'pdf' , 'category');
                                    
                                    // Handle the file upload separately
                                    if ($request->hasFile('pdf')) {
                                        $pdfFile = $request->file('pdf');
                                        $fileName = time() . '.' . $pdfFile->getClientOriginalExtension();
                                        $filePath = $pdfFile->storeAs('pdfs', $fileName, 'public');
                                        
                                        // Update database record with new PDF file name
                                        DB::table('packs')
                                            ->where('id', $id)
                                            ->update([
                                                'name' => $request->pack_name,
                                                'channels' => $request->total_channels,
                                                'price' => $request->pack_price,
                                                'category' => $request->category,
                                                'pdf' => $fileName,
                                            ]);
                                    } else {
                                        // Update database record without changing the PDF file
                                        DB::table('packs')
                                            ->where('id', $id)
                                            ->update([
                                                'name' => $request->pack_name,
                                                'channels' => $request->total_channels,
                                                'price' => $request->pack_price,
                                                'category' => $request->category,
                                            ]);
                                    }
                                    
                                    return redirect('manage_packs')->with('success', 'Pack Updated Successfully');
                                } catch (\Exception $e) {
                                    dd($e); // Handle or log the exception as needed
                                }
                            }


}
