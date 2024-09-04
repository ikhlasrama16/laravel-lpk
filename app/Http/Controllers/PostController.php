<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return redirect('admin.blog.cfreate')->with('success', 'data berhasil di simpan');
    }



}
