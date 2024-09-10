<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class HomepageController extends Controller
{

    public function index(){
        $data = User::get();

        return view('homepage', compact('data'));
    }

}
