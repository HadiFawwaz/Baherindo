<?php

namespace App\Http\Controllers;

use App\Models\MobilBaherIndo;

class MobilHomeController extends Controller
{
    public function index()
    {
        $mobil = MobilBaherIndo::all();
        return view('mobilhome', compact('mobil'));
    }
}
