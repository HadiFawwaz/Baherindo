<?php

namespace App\Http\Controllers;

use App\Models\MotorBaherIndo;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('motor.create');
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
            'nama_motor' => 'required|string',
            'harga_motor' => 'required|numeric',
            'km_motor' => 'required|integer',
            'tahun_motor' => 'required|integer',
            'gambar_motor' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar_motor')) {
            $path = $request->file('gambar_motor')->store('motor_images', 'public');
            $validateData['gambar_motor'] = $path;
        }

        // Logic to store the motor data
        MotorBaherIndo::create($validateData);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $motor = MotorBaherindo::findOrFail($id);
        return view('motor.show', compact('motor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $motor = MotorBaherIndo::findOrFail($id);
        return view('motor.edit', compact('motor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $motor = MotorBaherIndo::findOrFail($id);

        $validateData = $request->validate([
            'nama_motor' => 'required|string',
            'harga_motor' => 'required|numeric',
            'km_motor' => 'required|integer',
            'tahun_motor' => 'required|integer',
            'gambar_motor' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar_motor')) {
            if ($motor->gambar_motor && \Storage::exists('public/' . $motor->gambar_motor)) {
                \Storage::delete('public/' . $motor->gambar_motor);
            }
            $path = $request->file('gambar_motor')->store('motor_images', 'public');
            $validateData['gambar_motor'] = $path;
        }

        $motor->update($validateData);

        return redirect()->route('home.index')->with('success', 'Motor berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $motor = MotorBaherIndo::findOrFail($id);

        $motor->delete();

        return redirect()->route('home.index')->with('success', 'Motor berhasil dihapus');

        
    if ($motor->gambar_motor && file_exists(public_path('storage/motor_images/' . $motor->gambar_motor))) {
        unlink(public_path('storage/motor_images/' . $motor->gambar_motor));
    }
    }
}
