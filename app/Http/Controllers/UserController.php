<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    public function userProfile(){
        return view('user.userProfile');
    }

    public function save(Request $request){
        // validating data
        // $request->validate([
        //     'name' => 'requried',
        //     'email' => 'requried|email',
        //     'password' => 'requried|min:6|max:15',
        // ]);

        // saving the data
        $user = new  User;
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->role = $request->role;
        $user->password = Hash::make($request->password);
        // $user->password = $request->password;
        $save = $user->save();

        if($save){
            return back()->with('success', 'Registered');
        }else{
            return back()->with('fail', 'Invalid credentials');
        }
    }

    public function check(Request $request){
        // validating
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:15'
        ]);

        // 
        $userinfo = User::where('email', '=', $request->email)->first();
        if(!$userinfo){
            return back()->with('fail','Email address not recognized.');
        }else{
            // Checking password
            if(Hash::check($request->password, $userinfo->password) && $userinfo->role == 1){
                $request->session()->put('LoggedUser', $userinfo->id);
                return redirect('admin/dashboard');
            }elseif(Hash::check($request->password, $userinfo->password) && $userinfo->role==0){
                $request->session()->put('LoggedUser', $userinfo->id);
                return redirect('user/profile');
            }
            else{
                return back()->with('fail', 'Incorrect Password');
            }
        }


    }
}
