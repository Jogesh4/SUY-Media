<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\Category;
use App\Models\Package;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if(!empty($request->category_id)){
            $packages = Package::where(['category_id'=>$request->category_id,'status'=>1])->orderBy('id','desc')->get();

             $data['new'] = [
                         'code' => 1,
                         'packages' => $packages,
                     ];

                return json_encode($data);
       }
       else{
              $packages = Package::where('status',1)->orderBy('id','desc')->get();
       }
        $categories = Category::where('status',1)->orderBy('id','asc')->get();

        return view('welcome',compact('packages','categories'));
    }

    public function signup(Request $request){
        
          $user = User::where('email',$request->email)->first();

          if(!$user){
               $user = new User();
               $user->name = $request->username;
               $user->email = $request->email;
               $user->password = Hash::make($request->password);
               $user->save();

               return view('login');

          }
          else{
                 return back()->with('fail','Email already Exist!!!');
          }
    }

    public function login(Request $request){

           $user = User::where('email',$request->email)->where('is_active',1)->first();
      if($user){        
                $user = User::where('email',$request->input('email'))->first();

                if($user){
                    
                    if($user->password == $request->input('password')){
                        $request->session()->put('user_id',$user->id);
                        // return redirect('/supplierdashboard');
                        return redirect('/');
                    }
                    else{
                    return back()->with('fail','password not matched' );
                    }
                }
                else{
                    return back()->with('fail','Email is not registered' );
                }                  
          }
          else{
                    return back()->with('fail','Your Account Suspended!!!');

            } 

    }

    public function dashboard(Request $request){
       
       if(session()->has('user_id')){

            return view('user.dashboard');
        }
        else{
             return redirect()->route('login');
        }
    }

    public function logout(){
        if(session()->has('user_id')){
            session()->pull('user_id');
            return redirect('/');
        }
    }

   
}
