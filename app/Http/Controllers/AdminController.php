<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Pendaftaran;
use App\Models\Post;
use App\Models\Testimoni;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        // Menghitung jumlah masing-masing kategori
        $userCount = User::count();
        $blogCount = Post::count();
        $galleryCount = Gallery::count();
        $registrationCount = Pendaftaran::count();
        $testimonialCount = Testimoni::count();

        return view('admin.dashboard', compact('userCount', 'blogCount', 'galleryCount', 'registrationCount', 'testimonialCount'));
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
