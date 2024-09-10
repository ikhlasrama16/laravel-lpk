<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard(){
        return view('admin.dashboard');
    }
    public function blog(){
        return view('admin.blog.index', [
            'artikels' => Post::all()
        ]);

    }

    public function user()
    {
        $data = User::get();
        return view('admin.user.index', compact('data'));
    }

    public function add_user(){
        return view('admin.user.adduser');
    }

    public function index(){
        $data = User::get();

        return view('homepage', compact('data'));
    }

}
