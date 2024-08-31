<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function blog(){
        return view('admin.blog.blog');
    }

    public function user()
    {
        $data = User::get();
        return view('admin.user.user', compact('data'));
    }

    public function add_user(){
        return view('admin.user.adduser');
    }

    public function index(){
        $data = User::get();

        return view('homepage', compact('data'));
    }

}
