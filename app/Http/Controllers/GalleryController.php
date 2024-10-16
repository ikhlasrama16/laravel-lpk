<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Storage;

class GalleryController extends Controller
{
    public function index(){
        $gallerys = Gallery::get();
        return view('admin.gallery.index', compact('gallerys'));
    }

    public function create(){
        return view('admin.gallery.create');
    }

    public function upload(Request $request)
    {
        // Validasi agar file wajib di-upload
        $request->validate([
            'image_gallery' => 'required|array|min:1', // Pastikan ada setidaknya satu file
            'image_gallery.*' => 'image|mimes:jpeg,png,svg|max:10000' // Validasi format dan ukuran file
        ]);

        $files = $request->file('image_gallery');

        if ($files) {
            foreach ($files as $file) {
                // Dapatkan ekstensi asli file
                $extension = $file->getClientOriginalExtension();

                // Buat nama file baru yang unik
                $newFileName = 'gallery_' . time() . '_' . uniqid() . '.' . $extension;

                // Simpan file ke storage 'public/gallery' dengan nama baru
                $path = $file->storeAs('gallery', $newFileName, 'public');

                // Simpan path ke database
                Gallery::create([
                    'image_path' => $path, // Menyimpan path file yang diupload
                ]);
            }

            // Jika berhasil, kirimkan pesan sukses ke session
            return redirect()->route('admin.gallery')->with('success', 'Files uploaded and saved to database successfully.');
        }

        // Jika tidak ada file yang diupload, kirimkan pesan error
        return redirect()->route('admin.gallery')->with('error', 'No files uploaded. Please try again.');
    }




    public function destroy($id){
        $gallery = Gallery::findOrFail($id);

        Storage::disk('public')->delete($gallery->image_path);

        $gallery->delete();

        return redirect()->back()->with('Success', 'Gambar berhasil di hapus');
    }





}
