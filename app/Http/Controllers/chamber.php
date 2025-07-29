<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chamber extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $contact = [
            ['id' => 1 , 'nama' => 'Helper 1', 'nomor' => '0821 2828 8843'],
            ['id' => 2 , 'nama' => 'Helper 2', 'nomor' => '0892 3237 3234'],
            ['id' => 3 , 'nama' => 'Helper 3', 'nomor' => '0874 8534 7538'],
            ['id' => 4 , 'nama' => 'Helper 4', 'nomor' => '0892 3274 9232'],
            ['id' => 5 , 'nama' => 'Helper 5', 'nomor' => '0845 1274 3245'],
            

        ];
       
        return view(
            'contact',
            [
            ],
            compact('contact')
        );
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
