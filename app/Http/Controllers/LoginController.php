<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login_process(Request $request){
        $request-> validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data =[
            'email'     =>$request->email,
            'password'  =>$request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('homepage.dashboard');
        }else{
            return redirect()->route('homepage.login')->with('failed', 'login credential incorrect');
        }
    }

    public function login(){
        return view('auth.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('homepage.login')->with('success','You logged out');
    }
}
