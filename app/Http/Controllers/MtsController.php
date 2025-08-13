<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MtsController extends Controller
{
    public function index()
    {
        return view('jurnal.mts');
    }
}
