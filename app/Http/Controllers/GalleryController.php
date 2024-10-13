<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        return view('admin.gallery.index');
    }

    public function create(){
        return view('admin.gallery.create');
    }

}
