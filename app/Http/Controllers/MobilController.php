<?php

namespace App\Http\Controllers;

use App\Models\mobilBaherIndo;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mobil.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_mobil' => 'required|string',
            'harga_mobil' => 'required|numeric',
            'km_mobil' => 'required|integer',
            'tahun_mobil' => 'required|integer',
            'gambar_mobil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar_mobil')) {
            $path = $request->file('gambar_mobil')->store('mobil_images', 'public');
            $validateData['gambar_mobil'] = $path;
        }

        // Logic to store the mobil data
        mobilBaherIndo::create($validateData);

        return redirect('mobilhome');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mobil = mobilBaherindo::findOrFail($id);
        return view('mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mobil = mobilBaherIndo::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mobil = mobilBaherIndo::findOrFail($id);

        $validateData = $request->validate([
            'nama_mobil' => 'required|string',
            'harga_mobil' => 'required|numeric',
            'km_mobil' => 'required|integer',
            'tahun_mobil' => 'required|integer',
            'gambar_mobil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar_mobil')) {
            if ($mobil->gambar_mobil && \Storage::exists('public/' . $mobil->gambar_mobil)) {
                \Storage::delete('public/' . $mobil->gambar_mobil);
            }
            $path = $request->file('gambar_mobil')->store('mobil_images', 'public');
            $validateData['gambar_mobil'] = $path;
        }

        $mobil->update($validateData);

        return redirect()->route('mobilhome.index')->with('success', 'mobil berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mobil = mobilBaherIndo::findOrFail($id);

        $mobil->delete();

        return redirect()->route('mobilhome.index')->with('success', 'mobil berhasil dihapus');


        if ($mobil->gambar_mobil && file_exists(public_path('storage/mobil_images/' . $mobil->gambar_mobil))) {
            unlink(public_path('storage/mobil_images/' . $mobil->gambar_mobil));
        }
    }
}
