<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    //

    public function signup(Request $request){

        try{
            $data = $request->only('first_name','last_name', 'email'  , 'password' ,);
            $validator = Validator::make($data, [
                
                'first_name' => 'required|string',
                'last_name' => 'required|string',
               
                'email' => 'required|email|unique:users',
                'password'=>'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                // 'phone'=>'required|numeric|digits:10',
               
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
               // dd($request->all());
               User::create([
                    'first_name'=>$request->first_name,
                  
                    'last_name'=>$request->last_name,
                    'role'=>0,
                    'status'=>0,
                    'service'=>0,
                    'email'=>$request->email,
                                       
                    'password'=> bcrypt($request->password),
    
    
                ]);
                
                
                return Redirect::to('signin')->with('message', 'Register Success Please Login Now With Your Credentials');
            }
            
        }catch(\Exception $e){
           dd($e);
    }

    }
    public function signin(Request $request){
        $credentials = $request->only('email', 'password');
        //valid credential
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return redirect()->back()->withErrors($messages );
        }
        try{
            if(Auth::attempt($credentials)){
               
                $user_role=Auth::user()->role; 
                $user=Auth::user();
                $request->session()->put('user', $user);

                    switch($user_role){
                case 0:
                    return redirect('/admin');
                    case 1:
                        return redirect('/admin');
                case 2:
                    return redirect('/');
                //     break;
          
               
                default:
                   Auth::logout();
                   return view('auth.signin');
                }
            }else{
            
                return redirect()->back()->with('msg' ,'Invalid login credentials.');
         //dd($messages1);
            }
        } catch(\Exception $e){
           dd($e);
    }

    }

    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
        $request->session()->forget('user');
        return redirect('/');
    }
}
