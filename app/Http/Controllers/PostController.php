<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Log;

class PostController extends Controller
{
    public function add_blog(){
        return view('admin.blog.create');
    }

    public function post(Request $request){
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Judul wajib diisi!',
            'desc.required' => 'Judul wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // // Image
        // $fileName = time() . '.' . $request->image->extension();
        // $request->file('image')->storeAs('public/artikel', $fileName);

        // # Artikel
        // $storage = "storage/content-artikel";
        // $dom = new \DOMDocument();

        // # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        // libxml_use_internal_errors(true);
        // $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        // # Menghapus buffer kesalahan libxml
        // libxml_clear_errors();

        // # Baca di https://dosenit.com/php/fungsi-libxml-php
        // $images = $dom->getElementsByTagName('img');

        // foreach ($images as $img) {
        //     $src = $img->getAttribute('src');
        //     if (preg_match('/data:image/', $src)) {
        //         preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
        //         $mimetype = $groups['mime'];
        //         $fileNameContent = uniqid();
        //         $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
        //         $filePath = ("$storage/$fileNameContentRand.$mimetype");
        //         $image = Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));
        //         $new_src = asset($filePath);
        //         $img->removeAttribute('src');
        //         $img->setAttribute('src', $new_src);
        //         $img->setAttribute('class', 'img-responsive');
        //     }
        // }

        // Post::create([
        //     'judul' => $request->judul,
        //     'image' => $fileName,
        //     'desc' => $dom->saveHTML(),
        // ]);

        // return redirect(route('admin.blog'))->with('success', 'data berhasil di simpan');

        Log::info('Data: ', $request->all());

    }


}
