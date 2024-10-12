<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PendaftaranController extends Controller
{
    public function index(){
        return view('homepage.pendaftaran');
    }

    public function admin_pendaftaran(){
        $data = Pendaftaran::get();
        return view('admin.pendaftaran.index', compact('data'));
    }
    public function create_pendaftaran(){
        return view('admin.pendaftaran.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email',
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

    // Simpan data ke database menggunakan model Pendaftaran
    Pendaftaran::create($validatedData);

    // Hapus atau komentari baris berikut setelah debugging
    // dd($validatedData);

    return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    public function edit_pendaftaran($id){
        $data = Pendaftaran::find($id);
        return view('admin.pendaftaran.edit', compact('data'));
    }


    public function update_pendaftaran(Request $request, $id)
    {
    // Validasi input
    $validator = Validator::make($request->all(), [
        'nama'              => 'required|string|max:255',
        'email'             => 'required|email',
        'phone'             => 'required|string|max:20',
        'tempat_lahir'      => 'required|string|max:255',
        'tanggal_lahir'     => 'required|date',
        'jenis_kelamin'     => 'required|in:Laki-laki,Perempuan',
        'asal_sekolah'      => 'required|string|max:255',
        'alamat'            => 'required|string',
        'kode_pos'          => 'required|string|max:10',
        'provinsi'          => 'required|string|max:100',
        'alasan_ingin_kerja'=> 'required|string',

        // Data Orang Tua
        'nama_orang_tua'    => 'required|string|max:255',
        'pekerjaan_orang_tua'=> 'required|string|max:255',
        'alamat_orang_tua'  => 'required|string',
        'phone_orang_tua'   => 'required|string|max:20',
    ]);

    // Jika validasi gagal, kembalikan ke halaman sebelumnya dengan error
    if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator);
    }

    // Mengisi data yang akan diupdate
    $data = [
        'nama'              => $request->nama,
        'email'             => $request->email,
        'phone'             => $request->phone,
        'tempat_lahir'      => $request->tempat_lahir,
        'tanggal_lahir'     => $request->tanggal_lahir,
        'jenis_kelamin'     => $request->jenis_kelamin,
        'asal_sekolah'      => $request->asal_sekolah,
        'alamat'            => $request->alamat,
        'kode_pos'          => $request->kode_pos,
        'provinsi'          => $request->provinsi,
        'alasan_ingin_kerja'=> $request->alasan_ingin_kerja,

        // Data Orang Tua
        'nama_orang_tua'    => $request->nama_orang_tua,
        'pekerjaan_orang_tua'=> $request->pekerjaan_orang_tua,
        'alamat_orang_tua'  => $request->alamat_orang_tua,
        'phone_orang_tua'   => $request->phone_orang_tua,
    ];
    // Update data pendaftaran berdasarkan ID
    Pendaftaran::whereId($id)->update($data);
    // Redirect ke halaman admin setelah sukses
    return redirect()->route('admin.pendaftaran')->with('success', 'Data pendaftaran berhasil diupdate.');
    }
    public function delete_pendaftaran(Request $request,  $id){
        $data = Pendaftaran::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('admin.pendaftaran');
    }

}
