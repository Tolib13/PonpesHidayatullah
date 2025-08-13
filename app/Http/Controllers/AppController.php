<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Photo;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        // Your logic for the index method
        return view('welcome', [
            'artikels' => Blog::orderBy('id', 'desc')->take(3)->get(),
            'photos' => Photo::orderBy('id', 'desc')->take(4)->get()
        ]);
    }

    public function berita()
    {
        return view('berita.berita', [
            'artikels' => Blog::orderBy('id', 'desc')->paginate(5),
        ]);
    }

      public function detail($slug)
    {
        $artikel = Blog::where('slug', $slug)->first();
        return view('berita.detail', [
            'artikel' => $artikel
        ]);
    }

    public function foto()
    {
        return view('foto.foto', [
            'photos' => Photo::orderBy('id', 'desc')->paginate(6),
        ]);
    }
}
