<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{
     public function index()
    {
        // Menampilkan halaman kurikulum pesantren
        return view('kurikulum.index');
    }
}
