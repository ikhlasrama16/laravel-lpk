<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DOMDocument;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request){
        $description = $request->description;
        $dom = new DOMDocument();
        $dom->loadHTML($description, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',',explode(';', $img->getAttribute('src'))[1])[1]);
            $images_name = "/upload/" . time(). $key.'png';
            file_put_contents(public_path().$images_name, $data);
        }
    }
}
