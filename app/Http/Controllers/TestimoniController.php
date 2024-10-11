<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
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
            $gambarPath = $request->file('gambar')->store('testimoni', 'public');
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
            if ($testimoni->gambar && Storage::disk('public')->exists($testimoni->gambar)) {
                Storage::disk('public')->delete($testimoni->gambar);
            }
            $gambarPath = $request->file('gambar')->store('testimoni', 'public');
            $testimoni->gambar = $gambarPath;
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

        // Hapus gambar jika ada
        if ($testimoni->gambar && Storage::disk('public')->exists($testimoni->gambar)) {
            Storage::disk('public')->delete($testimoni->gambar);
        }

        $testimoni->delete();

        return redirect()->route('admin.testimoni')->with('success', 'Testimoni berhasil dihapus.');

    }
}
