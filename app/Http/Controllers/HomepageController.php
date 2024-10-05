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

    public function blog_detail($id) {
        $artikel = Post::find($id);
        return view('blogdetail', ['artikel' => $artikel]);
    }

    public function tentang(){
        return view('about');
    }
    public function tentang1(){
        return view('aboutus');
    }

    public function program(){
        return view('program');
    }

    public function gallery(){
        return view('gallery');
    }

    public function kontak(){
        return view('kontak');
    }
}
