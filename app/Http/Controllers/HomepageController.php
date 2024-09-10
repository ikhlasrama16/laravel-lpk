<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;

class HomepageController extends Controller
{

    public function index(){
        $data = User::get();

        return view('homepage', compact('data'));
    }

    public function blog(){

        return view('blog',[
            'artikels' => Post::all()
        ]);
    }

}
