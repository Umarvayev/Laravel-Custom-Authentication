<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CostumAuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users,',
            'passwprd'=>'required|min:5|max:12'
        ]);
        $user = new User();
        $user -> name = $request ->name;
        $user -> email = $request ->email;
        $user -> password = $request ->password;
        $res = $user ->save();
        if($res){
            return redirect()->back()->with('succes', 'You have registration successfully') ;
        }else{
            return redirect()->back()->with('fail', 'Something wrong');
        }
    }
}
