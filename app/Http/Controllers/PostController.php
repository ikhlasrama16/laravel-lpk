<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storrage;
use Intervention\Image\ImageManagerStatic as Image;

class PostController extends Controller
{

    public function add_blog(){
        return view('admin.blog.create');
    }

    public function post(Request $request){
        $rules=[
            'title' => 'required',
            'image' => 'required|max:1000|mimes:jpg, png, jpeg',
            'desc' => 'required|min:20'
        ];

        $messages = [
            'title.required' => 'judul wajib di isi',
            'image.required' => 'gambar wajib di upload',
            'desc.required' => 'deskripsi wajib di isi',
        ];

        $this->validate($request, $rules, $messages);


        //image
        $fileName = time().'.'.$request->image->extention();
        $request->file('image')->storeAs('public/artikel', $fileName);

        //artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED|LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach($images as $img){
            $src = $img->getAttribute('src');
            if (preg_match(`/data:image/`, $src)) {
                preg_match(`/data:image\/(?<mime>.*?)\;/`, $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent),6,6).'_'.time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = new Image::make($src)->resize(1200, 1200)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');

            }
        }

        Post::create([
            'title'=> $request->title,
            'image'=> $fileName,
            'desc'=> $dom->saveHTML(),
        ])


        return redirect('admin.blog.cfreate')->with('success', 'data berhasil di simpan');
    }



}
