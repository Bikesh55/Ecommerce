<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    // function save(Request $request){
    //     // validating requests
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:admins',
    //         'password' => 'required|min:6|max:15'
    //     ]);

    //     // Inserting data into database
    //     $admin = new Admin;
    //     $admin->name = $request->name;
    //     $admin->email = $request->email;
    //     $admin->password = Hash::make($request->password);
    //     $save = $admin->save();


    //     if($save){
    //         return back()->with('success', 'Registered');
    //     }else{
    //         return back()->with('fail', 'Something went wrong. Try again later.');
    //     }

    // }
    // function check(Request $request){
    //     // return $request -> input();
    //     // validating the requests
    //     $request->validate([
    //         'email'=>'required|email',
    //         'password'=>'required|min:6|max:15'
    //     ]);

    //     // $userinfo = Admin::where('email', '=', $request->email)->first();

    //     // if(!$userinfo){
    //     //     return back()->with('fail','Email address not recognized.');
    //     // }else{
    //     //     // Checking password
    //     //     if(Hash::check($request->password, $userinfo->password)){
    //     //         $request->session()->put('LoggedUser', $userinfo->id);
    //     //         return redirect('admin/dashboard');
    //     //     }else{
    //     //         return back()->with('fail', 'Incorrect Password');
    //     //     }
    //     // }
        
    //     $userinfo = User::where('email', '=', $request->email)->first();

    //     if(!$userinfo){
    //         return back()->with('fail','Email address not recognized.');
    //     }else{
    //         // Checking password
    //         if(Hash::check($request->password, $userinfo->password) && auth()->user()->role==1){
    //             $request->session()->put('LoggedUser', $userinfo->id);
    //             return redirect('admin/dashboard');
    //         }else{
    //             return back()->with('fail', 'Incorrect Password');
    //         }
    //     }
    // }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
    // admin dashboard
    function dashboard(){
        return view('admin.dashboard');
    }
}
