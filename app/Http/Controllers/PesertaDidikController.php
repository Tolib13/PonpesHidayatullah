<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaDidikController extends Controller
{
     public function index()
    {
        // Menampilkan halaman peserta didik
        return view('pesertadidik.index');
    }
}
