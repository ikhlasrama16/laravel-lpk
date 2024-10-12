<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;



class PostController extends Controller
{
    public function add_blog(){
        return view('admin.blog.create');
    }


    public function post(Request $request){
        $rules = [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
            'description' => 'required|min:20',
        ];

        $messages = [
            'title.required' => 'Judul wajib diisi!',
            'image.required' => 'Gambar wajib diisi!',
            'description.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        try {
            // Simpan gambar utama
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/artikel', $fileName);

            // Simpan artikel
            Post::create([
                'title' => $request->title,
                'image' => $fileName,
                'description' => $request->description,
            ]);

            // Flash success message
            return redirect(route('admin.blog'))->with('success', 'Artikel berhasil dibuat!');
        } catch (\Exception $e) {
            // Flash error message
            return redirect()->back()->with('error', 'Terjadi kesalahan saat membuat artikel!');
        }
    }

    public function uploadImage(Request $request) {
        $rules = ['image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000'];
        $this->validate($request, $rules);

        // Proses upload gambar
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $filePath = $request->file('image')->storeAs('public/content-artikel', $fileName);
            $url = Storage::url($filePath);  // Mengembalikan URL gambar yang disimpan

            return response()->json(['url' => asset($url)]);
        }

        return response()->json(['error' => 'Gagal mengupload gambar'], 400);
    }



    public function edit_blog($id)
    {
        $artikel = Post::find($id);
        return view('admin.blog.edit', ['artikel' => $artikel]);
    }

    public function update_blog(Request $request, $id)
    {
        $artikel = Post::findOrFail($id);

        // Validation rules
        $rules = [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:10000', // Gambar opsional
            'description' => 'required|min:20',
        ];

        $messages = [
            'title.required' => 'Judul wajib diisi!',
            'description.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        try {
            // Handle image update if new image uploaded
            if ($request->hasFile('image')) {
                // Hapus gambar lama
                if (\File::exists(public_path('storage/artikel/' . $artikel->image))) {
                    \File::delete(public_path('storage/artikel/' . $artikel->image));
                }

                // Simpan gambar baru
                $fileName = time() . '.' . $request->image->extension();
                $request->file('image')->storeAs('public/artikel', $fileName);
            } else {
                $fileName = $artikel->image;
            }

            // Proses gambar dalam deskripsi Summernote
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true); // Abaikan kesalahan parsing HTML
            $dom->loadHTML($request->description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            libxml_clear_errors();

            // Update artikel
            $artikel->update([
                'title' => $request->title,
                'image' => $fileName,
                'description' => $dom->saveHTML(),
            ]);

            // Flash success message
            return redirect(route('admin.blog'))->with('success', 'Artikel berhasil diupdate!');
        } catch (\Exception $e) {
            // Flash error message
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengupdate artikel!');
        }
    }


    public function delete_blog($id){
        $artikel = Post::find($id);
        if (\File::exists('storage/artikel/' . $artikel->image)) {
            \File::delete('storage/artikel/' . $artikel->image);
        }

        $artikel->delete();

        return redirect(route('admin.blog'))->with('success', 'data berhasil di hapus');

    }



}
