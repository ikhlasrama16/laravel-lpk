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

    public function upload(Request $request)
{
    $files = $request->file('image_gallery');
    if ($files) {
        foreach ($files as $file) {
            $file->store('gallery', 'public'); // Save to storage/app/public/gallery
        }
    }
    return redirect()->back()->with('success', 'Files uploaded successfully.');
}


}
