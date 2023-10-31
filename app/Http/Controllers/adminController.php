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
use Image;
class adminController extends Controller
{
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
    ->select('services.id as service_id' , 'queries.id as q_id', 'service_name' , 'fname' , 'lname' , 'email' , 'phone' ,'queries.status as q_status',)
    ->where('queries.status', 0)
    ->orderBy('queries.id', 'desc')
    ->get();
            $queries_d=  DB::table('queries')
            ->join('services', 'queries.service_id', '=', 'services.id')
            ->select('services.id as service_id' , 'queries.id as q_id', 'service_name' , 'fname' , 'lname' , 'email' , 'phone' ,'queries.status as q_status',)
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
        $user->service=$data->service_id;
        $user->role=$data->service_id;
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
                    ->select('categories.id as cat_id' , 'facilitycategories.id as f_id', 'facility' , 'category' ,'svg' ,'status'  )
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

            public function add_facility_cat(Request $request){
                try{
                    $data = $request->only('category_name','facility' , 'svg_icon');
            $validator = Validator::make($data, [
                'svg_icon' => 'required|string',
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

                    'svg'=>$request->svg_icon,

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

                            return redirect()->back()->with('success', 'Facilitycategory Marked Available');
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

public function add_rooms(Request $request){
    try{


        $data = $request->only('category','available_for' ,'food_availability' ,
         'parking' , 'tenants_types' ,'total_beds' ,
         'notice_period', 'maintenance_charges', 'electricity_charges' , 'deposite_amount' ,'description' );
        $validator = Validator::make($data, [
            'available_for' => 'required|string',
            'category' => 'required|string',
            'parking' => 'required|string',
            'food_availability' => 'required|string',
            'tenants_types' => 'required|string',
            'total_beds' => 'required|string',
            'notice_period' => 'required|string',
            'maintenance_charges' => 'required|string',
            'electricity_charges' => 'required|string',
            'deposite_amount' => 'required|string',
            'description' => 'required|max:500'
                   ]);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return redirect()->back()->withErrors($messages);
            //return ($messages);
        }else{
            Room::create([
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


                    return Redirect::to('add_room')->with('success', 'Gallery Uploaded Successfully');

                }
            } catch (\Exception $e) {
                dd($e);
            }
        }
}
