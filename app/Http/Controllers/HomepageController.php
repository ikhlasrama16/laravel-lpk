<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use App\Models\User;
use App\Models\Post;

class HomepageController extends Controller
{

    public function index(){
        $testimonis = Testimoni::get();
        return view('homepage.homepage', compact('testimonis'));
    }

    public function blog(){
        return view('homepage.blog',[
            'artikels' => Post::all()
        ]);
    }

    public function blog_detail($id) {
        $artikel = Post::find($id);
        return view('homepage.blogdetail', ['artikel' => $artikel]);
    }

    public function tentang(){
        return view('homepage.aboutus');
    }

    public function program(){
        return view('homepage.program');
    }

    public function gallery(){
        return view('homepage.gallery');
    }

    public function kontak(){
        return view('homepage.kontak');
    }
}
