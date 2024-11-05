<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Storage;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $testimonis = Testimoni::latest()->paginate(10);
        return view('admin.testimoni.index', compact('testimonis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'pesan' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan gambar jika diupload
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $newFileName = 'testimoni_'. time(). '.' . $gambar->getClientOriginalExtension();

            // pindah ke public/storage/testimoni
            $gambar->move(public_path('storage/testimoni'), $newFileName);

            // save ke database
            $gambarPath = $newFileName;

        } else {
            $gambarPath = null;
        }

        // Simpan data ke database
        Testimoni::create([
            'name' => $request->name,
            'pesan' => $request->pesan,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('admin.testimoni')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimoni = Testimoni::findOrFail($id);
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimoni = Testimoni::findOrFail($id);

        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'pesan' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update gambar jika diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($testimoni->gambar && file_exists(public_path('storage/testimoni/' . $testimoni->gambar))) {
                unlink(public_path('storage/testimoni/' . $testimoni->gambar));
            }

            $gambar = $request->file('gambar');
            $newFileName = 'testimoni_' . time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('storage/testimoni'), $newFileName);

            // Update path gambar
            $testimoni->gambar = $newFileName;
        }

        // Update data lainnya
        $testimoni->name = $request->name;
        $testimoni->pesan = $request->pesan;
        $testimoni->save();

        return redirect()->route('admin.testimoni')->with('success', 'Testimoni berhasil diupdate.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimoni = Testimoni::findOrFail($id);

        // Buat path file lengkap untuk gambar di public/storage
        $filePath = public_path( 'storage/testimoni/' . $testimoni->gambar);

        // Cek dan hapus file jika ada
        if (File::exists($filePath)) {
            File::delete($filePath);
        } else {
            return redirect()->back()->with('error', 'Gambar tidak ditemukan atau sudah dihapus.');
        }

        // Hapus data dari database
        $testimoni->delete();

        return redirect()->route('admin.testimoni')->with('success', 'Testimoni berhasil dihapus.');
    }

}
