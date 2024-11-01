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
        // Validate that at least one image is uploaded
        $request->validate([
            'image_gallery' => 'required|array|min:1',
            'image_gallery.*' => 'image|mimes:jpeg,png,svg|max:5000' // Validate format and file size
        ]);

        $files = $request->file('image_gallery');

        if ($files) {
            foreach ($files as $file) {
                // Get the original file extension
                $extension = $file->getClientOriginalExtension();

                // Generate a unique file name
                $newFileName = 'gallery_' . time() . '_' . uniqid() . '.' . $extension;

                // Save the file to storage/app/public/gallery
                $storagePath = $file->storeAs('gallery', $newFileName, 'public');

                // Save a copy of the file to public/images/gallery
                $publicPath = public_path('images/gallery');
                $file->move($publicPath, $newFileName);

                // Store the path in the database (relative to public/images)
                Gallery::create([
                    'image_path' => 'images/gallery/' . $newFileName, // Save the public path in the database
                ]);
            }

            // Redirect with success message
            return redirect()->route('admin.gallery')->with('success', 'Files uploaded and saved to database successfully.');
        }

        // If no files were uploaded, return an error message
        return redirect()->route('admin.gallery')->with('error', 'No files uploaded. Please try again.');
    }



    public function destroy($id){
        $gallery = Gallery::findOrFail($id);

        Storage::disk('public')->delete($gallery->image_path);

        $gallery->delete();

        return redirect()->back()->with('Success', 'Gambar berhasil di hapus');
    }





}
