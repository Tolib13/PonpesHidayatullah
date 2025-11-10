<?php

namespace App\Http\Controllers;

use App\Models\Kalam;
use Illuminate\Http\Request;

class FrontendKalamController extends Controller
{
     public function index()
    {
        $kalams = Kalam::latest()->paginate(6); // tampil 6 per halaman
        return view('kalam.index', compact('kalams'));
    }

    public function show($id)
{
    $kalam = Kalam::findOrFail($id);
    return view('kalam.show', compact('kalam'));
}
}
