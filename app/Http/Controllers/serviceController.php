<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class serviceController extends Controller
{
    //
    public function services(){
        try{
            $service_data=  DB::table('services')->where('status' , 0)->orderBy('service_name')->paginate(4);
            $servicedata=  DB::table('services')->where('status' , 1)->orderBy('service_name')->paginate(4);

            return view("admin.services" ,  ['un_services'=>$service_data  , 'service_data'=>$servicedata ]);

        }catch(\Exception $e){
            dd($e);
     }

    }
    public function add_service(Request $request){
        try{
            $credentials = $request->only('service_name', 'description');
        //valid credential
        $validator = Validator::make($credentials, [
            'service_name' => 'required|string|unique:services',
            'description' => 'required|max:500'
        ]);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return redirect()->back()->withErrors($messages );
        }else{
            $service=Service::create([
                'service_name'=>$request->service_name,


                'description'=>$request->description,



            ]);
            return redirect()->back()->with('success', 'Service Added Successfully');
        }
            // return($request->service_name);

        }catch(\Exception $e){
            dd($e);
     }
    }
    public function change_service_status(Request $request , $id){


        try{
            $data=Service::find($id);

            if($data->status=="0"){
                $data->status="1";
                $data->save();

                return redirect()->back()->with('success', 'Service Marked Activated');
              }else{
                $data->status="0";
                $data->save();
                return redirect()->back()->with('message', 'Service Marked Rejected');
              }

        }catch(\Exception $e){
            dd($e);
     }
    }
    public function delete_service(Request $request , $id){
        try{
            DB::table('services')->where('id', $id)->delete();

            return redirect()->back()->with('message', 'Service Deleted');

                // return redirect()->back()->with('message', 'Tourist Place Status Apprved');
        }catch(\Exception $e){
            dd($e);
        }
    }
}
