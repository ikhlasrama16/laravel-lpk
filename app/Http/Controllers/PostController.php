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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|min:20',
        ];

        $messages = [
            'title.required' => 'Judul wajib diisi!',
            'image.required' => 'Gambar wajib diisi!',
            'description.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/artikel', $fileName);

        # Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();

        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();

        # Baca di https://dosenit.com/php/fungsi-libxml-php
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        Post::create([
            'title' => $request->title,
            'image' => $fileName,
            'description' => $dom->saveHTML(),
        ]);

        return redirect(route('admin.blog'))->with('success', 'data berhasil di simpan');

    }

    public function edit_blog($id)
    {
        $artikel = Post::find($id);
        return view('admin.blog.edit', ['artikel' => $artikel]);
    }

    public function update_blog(Request $request, $id)
    {
        $artikel = Post::find($id);

        if ($request->hasFile('image')) {
            $fileCheck = 'required|image|mimes:jpeg,png,jpg|max:2048';
        } else {
            $fileCheck = 'image|mimes:jpeg,png,jpg|max:2048';
        }

        $rules = [
            'title' => 'required',
            'image' => $fileCheck,
            'description' => 'required|min:20',
        ];

        $messages = [
            'title.required' => 'Judul wajib diisi!',
            'image.required' => 'Gambar wajib diisi!',
            'description.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        if ($request->hasFile('image')) {
            if (\File::exists('storage/artikel/'.$artikel->image)) {
                \File::delete('storage/artikel/'.$artikel->image);
            }
            $file = $request->file('image');
            if ($file) {
                $fileName = time() . '.' . $file->extension();
                $file->storeAs('public/artikel', $fileName);
            }
        } else {
            $fileName = $artikel->image;
        }

        // Image handling
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();

        // Enable user error handling for libxml
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        $artikel->update([
            'title' => $request->title,
            'image' => $fileName,
            'description' => $dom->saveHTML(),
        ]);

        return redirect(route('admin.blog'))->with('success', 'Data berhasil disimpan');
    }



}
