<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
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
        $artikels = Post::paginate(9);
        return view('homepage.blog', compact('artikels'));
    }

    public function blog_detail($slug) {
        $artikel = Post::where('slug', $slug)->firstOrFail();
        return view('homepage.blogdetail', ['artikel' => $artikel]);

    }

    public function tentang(){
        return view('homepage.aboutus');
    }

    public function program(){
        return view('homepage.program');
    }

    public function gallery(){
        $gallerys = Gallery::paginate(12);
        return view('homepage.gallery', compact('gallerys'));
    }

    public function kontak(){
        return view('homepage.kontak');
    }
}
