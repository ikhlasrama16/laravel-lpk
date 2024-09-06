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
        'image' => 'required|mimes:jpg,jpeg,png|max:1000', // Pemisah koma yang benar tanpa spasi
        'description' => 'required|min:20'
    ];

    $messages = [
        'title.required' => 'judul wajib di isi',
        'image.required' => 'gambar wajib di upload',
        'description.required' => 'deskripsi wajib di isi',
    ];

    $this->validate($request, $rules, $messages);

    // Proses gambar utama
    $fileName = time() . '.' . $request->file('image')->extension();
    $request->file('image')->storeAs('public/artikel', $fileName); // Menyimpan gambar utama

    // Manipulasi konten gambar pada Summernote
    $storage = "storage/content-artikel";
    $dom = new \DOMDocument();
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

            // Proses penyimpanan gambar dari summernote
            $image = \Image::make($src)
                ->resize(1200, 1200) // Resize jika diperlukan
                ->encode($mimetype, 100)
                ->save(public_path($filePath));

            $new_src = asset($filePath);
            $img->removeAttribute('src');
            $img->setAttribute('src', $new_src);
            $img->setAttribute('class', 'img-responsive');
        }
    }

    // Penyimpanan data ke dalam database
    Post::create([
        'title' => $request->title,
        'image' => $fileName,
        'description' => $dom->saveHTML(),
    ]);

    return redirect()->route('admin.blog.create')->with('success', 'Data berhasil disimpan');
}

}
