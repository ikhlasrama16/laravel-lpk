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

    public function user()
    {
        $data = User::get();
        return view('admin.user', compact('data'));
    }

    public function index(){
        $data = User::get();

        return view('homepage', compact('data'));
    }
}
