<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use DOMDocument;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(Request $request){
        $description = $request->description;

        $dom = new DOMDocument();
        $dom -> loadHTML($description, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/upload/" . time(). $key. 'png';
            file_put_contents(public_path().$image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);

        }
        $description = $dom->saveHTML();

        Post::create([
            'title' => $request->title,
            'description' => $description,
        ]);
        return redirect('/');
    }
}
