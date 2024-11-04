<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use File;

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
            'image_gallery.*' => 'image|mimes:jpeg,png,svg|max:5000' // Validasi format dan ukuran file
        ]);

        $files = $request->file('image_gallery');

        if ($files) {
            foreach ($files as $file) {
                // Dapatkan ekstensi asli file
                $extension = $file->getClientOriginalExtension();

                // Buat nama file baru yang unik
                $newFileName = 'gallery_' . time() . '_' . uniqid() . '.' . $extension;

                // Tentukan path di 'public/storage/gallery'
                $publicPath = 'storage/gallery/' . $newFileName;

                // Simpan file langsung ke public/storage/gallery
                $file->move(public_path('storage/gallery'), $newFileName);

                // Simpan path public ke database
                Gallery::create([
                    'image_path' => $publicPath, // Menyimpan path file yang diupload
                ]);
            }

            // Jika berhasil, kirimkan pesan sukses ke session
            return redirect()->route('admin.gallery')->with('success', 'Files uploaded and saved to database successfully.');
        }

        // Jika tidak ada file yang diupload, kirimkan pesan error
        return redirect()->route('admin.gallery')->with('error', 'No files uploaded. Please try again.');
    }


    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Buat path file lengkap untuk gambar di public/storage/gallery
        $filePath = public_path( $gallery->image_path);

        // Cek dan hapus file jika ada
        if (File::exists($filePath)) {
            File::delete($filePath);
        } else {
            return redirect()->back()->with('error', 'Gambar tidak ditemukan atau sudah dihapus.');
        }

        // Hapus data dari database
        $gallery->delete();

        return redirect()->back()->with('success', 'Gambar berhasil dihapus');
    }






}
