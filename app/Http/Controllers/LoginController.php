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

        Auth::attempt($data);
    }

    public function login(){
        return view('auth.login');
    }
}
