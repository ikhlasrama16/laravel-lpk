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
    }
}
