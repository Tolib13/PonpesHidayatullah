<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
     public function index()
    {
        return view('admin.video.index', [
            'videos' => Video::orderBy('id', 'desc')->get(),

        ]);
    }

    public function store(Request $request)
    {
         $rules = [
            'judul' => 'required',
            'youtube_code' => 'required',
        ];

        $massages = [
            'judul.required' => 'Judul harus diisi.',
            'youtube_code.required' => 'Youtube code harus diisi.',
        ];

        $this->validate($request, $rules, $massages);


        Video::create([
            'judul' => $request->judul,
            'youtube_code' => $request->youtube_code,
        ]);

        return redirect()->route('video')->with('success', 'Data Video Berhasil Disimpan.');
    }

    public function update(Request $request, $id)
    {
          $video = Video::find($id);
        $rules = [
            'judul' => 'required',
            'youtube_code' => 'required',
        ];

        $massages = [
            'judul.required' => 'Judul harus diisi.',
            'youtube_code.required' => 'Youtube code harus diisi.',
        ];

        $this->validate($request, $rules, $massages);


        Video::create([
            'judul' => $request->judul,
            'youtube_code' => $request->youtube_code,
        ]);

        return redirect()->route('video')->with('success', 'Data Video Berhasil Disimpan.');

        $video->update([
            'judul' => $request->judul,
            'youtube_code' => $request->youtube_code,
        ]);

        return redirect()->route('video')->with('success', 'Data Berhasil Diupdate.');

    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();

        return redirect()->route('vidio')->with('success', 'Data Berhasil Dihapus.');
    }
}
