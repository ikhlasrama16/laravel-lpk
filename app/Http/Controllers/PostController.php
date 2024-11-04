<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;



class PostController extends Controller
{
    public function add_blog(){
        return view('admin.blog.create');
    }


    public function post(Request $request)
    {
        $rules = [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            'description' => 'required|min:20',
        ];

        $messages = [
            'title.required' => 'Judul wajib diisi!',
            'image.required' => 'Gambar wajib diisi!',
            'description.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        try {
            // Simpan gambar utama ke public/storage/artikel
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->move(public_path('storage/artikel'), $fileName);

            // Buat slug dari judul
            $slug = Str::slug($request->title);

            // Simpan artikel
            Post::create([
                'title' => $request->title,
                'slug' => $slug,
                'image' => $fileName,
                'description' => $request->description,
            ]);

            return redirect(route('admin.blog'))->with('success', 'Artikel berhasil dibuat!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat membuat artikel!');
        }
    }

    public function uploadImage(Request $request)
    {
        $rules = ['image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000'];
        $this->validate($request, $rules);

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $filePath = public_path('storage/content-artikel/' . $fileName);
            $request->file('image')->move(public_path('storage/content-artikel'), $fileName);

            $url = asset('storage/content-artikel/' . $fileName);
            return response()->json(['url' => $url]);
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

        $rules = [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5000',
            'description' => 'required|min:20',
        ];

        $messages = [
            'title.required' => 'Judul wajib diisi!',
            'description.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        try {
            if ($request->hasFile('image')) {
                if (File::exists(public_path('storage/artikel/' . $artikel->image))) {
                    File::delete(public_path('storage/artikel/' . $artikel->image));
                }

                $fileName = time() . '.' . $request->image->extension();
                $request->file('image')->move(public_path('storage/artikel'), $fileName);
            } else {
                $fileName = $artikel->image;
            }

            $slug = Str::slug($request->title);

            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($request->description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            libxml_clear_errors();

            $artikel->update([
                'title' => $request->title,
                'slug' => $slug,
                'image' => $fileName,
                'description' => $dom->saveHTML(),
            ]);

            return redirect(route('admin.blog'))->with('success', 'Artikel berhasil diupdate!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengupdate artikel!');
        }
    }

    public function delete_blog($id)
    {
        $artikel = Post::find($id);

        if (File::exists(public_path('storage/artikel/' . $artikel->image))) {
            File::delete(public_path('storage/artikel/' . $artikel->image));
        }

        preg_match_all('/<img.*?src=".*?storage\/content-artikel\/(.*?)"/', $artikel->description, $matches);

        if (!empty($matches[1])) {
            foreach ($matches[1] as $image) {
                $imagePath = public_path('storage/content-artikel/' . $image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
        }

        $artikel->delete();

        return redirect(route('admin.blog'))->with('success', 'Data berhasil dihapus beserta gambar di dalam konten.');
    }




}
