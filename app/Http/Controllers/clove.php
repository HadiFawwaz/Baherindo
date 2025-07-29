<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clove extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = [
            ['id' => 1, 'nama' => 'Motor Yamaha', 'price' => 10000000, 'tahun' => 2000, 'km' => 10000],
            ['id' => 2, 'nama' => 'Motor Honda', 'price' => 12000000, 'tahun' => 1998, 'km' => 15000],
            ['id' => 3, 'nama' => 'Motor Kawasaki', 'price' => 19000000, 'tahun' => 1989, 'km' => 20000],
            ['id' => 4, 'nama' => 'Motor Suzuki', 'price' => 11000000, 'tahun' => 1995, 'km' => 96050],
            ['id' => 5, 'nama' => 'Motor Ducati', 'price' => 50000000, 'tahun' => 2004, 'km' => 11000],
            ['id' => 4, 'nama' => 'Motor Suzuki', 'price' => 11000000, 'tahun' => 1995, 'km' => 96000],
            ['id' => 5, 'nama' => 'Motor Ducati', 'price' => 50000000, 'tahun' => 2004, 'km' => 11000],
            ['id' => 4, 'nama' => 'Motor Suzuki', 'price' => 11000000, 'tahun' => 1995, 'km' => 96000],
            ['id' => 5, 'nama' => 'Motor Ducati', 'price' => 50000000, 'tahun' => 2004, 'km' => 11000],

        ];

        // Format harga dan km
        foreach ($motor as &$m) {
            $m['price'] = 'Rp ' . number_format($m['price'], 0, ',', '.');
            $m['km'] = number_format($m['km'], 0, ',', '.') . ' km';
        }

        return view('home', compact('motor'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
