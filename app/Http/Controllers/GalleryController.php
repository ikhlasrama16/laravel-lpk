<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

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
        // Validasi agar file wajib di-upload
        $request->validate([
            'image_gallery' => 'required', // Memastikan file di-upload
            'image_gallery.*' => 'image|mimes:jpeg,png,svg|max:10000' // Validasi format dan ukuran file
        ]);

        $files = $request->file('image_gallery');

        if ($files) {
            foreach ($files as $file) {
                // Simpan file ke storage 'public/gallery' dan ambil path-nya
                $path = $file->store('gallery', 'public');

                // Simpan path ke database
                Gallery::create([
                    'image_path' => $path, // Menyimpan path file yang diupload
                ]);
            }
        }

        return redirect()->back()->with('success', 'Files uploaded and saved to database successfully.');
    }





}
