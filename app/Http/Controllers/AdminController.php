<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{


    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
            'name'      => 'required',
            'password'  => 'required'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email']         = $request->email;
        $data['name']          = $request->name;
        $data['password']      = Hash::make($request->passwordl);

        User::create($data);
        return redirect()->route('admin.user');

    }

    public function add_user(){
        return view('admin.adduser');
    }

    public function edit_user(Request $request, $id){
        $data = User::find($id);
        return view('admin.edituser', compact('data'));
    }

    public function update_user(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
            'name'      => 'required',
            'password'  => 'nullable'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email']         = $request->email;
        $data['name']          = $request->name;

        if ($request->password) {
            $data['password']      = Hash::make($request->passwordl);
        }


        User::whereId($id)->update($data);
        return redirect()->route('admin.user');
    }

    public function delete_user(Request $request,  $id){
        $data = User::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('admin.user');
    }
}
