<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataPribadiController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:data_pribadis,email',
            'phone' => 'required|string|max:20',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'asal_sekolah' => 'required|string|max:255',
            'alamat' => 'required|string',
            'kode_pos' => 'required|string|max:10',
            'provinsi' => 'required|string|max:100',
            'alasan_ingin_kerja' => 'required|string',

            // Data Orang Tua
            'nama_orang_tua' => 'required|string|max:255',
            'pekerjaan_orang_tua' => 'required|string|max:255',
            'alamat_orang_tua' => 'required|string',
            'phone_orang_tua' => 'required|string|max:20',
        ]);
        DataPribadiController::create($validatedData);

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
