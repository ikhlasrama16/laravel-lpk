<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validasi form input
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email|unique:users,email', // validasi email unik
            'name'      => 'required|string|max:255', // validasi nama
            'password'  => 'required|string|min:8|confirmed', // validasi password dan konfirmasinya
        ]);

        // Jika validasi gagal, redirect kembali dengan error message
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        // Simpan data user baru ke database
        $data = [
            'email'    => $request->email,
            'name'     => $request->name,
            'password' => Hash::make($request->password), // encrypt password
        ];

        // Buat user baru
        User::create($data);

        // Redirect ke halaman daftar user setelah berhasil
        return redirect()->route('admin.user');
    }


    public function add_user(){
        return view('admin.user.create');
    }

    public function edit_user(Request $request, $id){
        $data = User::find($id);
        return view('admin.user.edit', compact('data'));
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
            $data['password']      = Hash::make($request->password);
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
