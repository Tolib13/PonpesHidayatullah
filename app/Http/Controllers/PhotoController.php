<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        return view('admin.photo.index', [
            'photos' => Photo::orderBy('id', 'desc')->get(),

        ]);
    }

    public function store(Request $request)
    {
         $rules = [
            'judul' => 'required',
            'image' => 'required|image|file|max:3000|mimes:jpg,jpeg,png,webp',
        ];

        $massages = [
            'judul.required' => 'Judul harus diisi.',
            'image.required' => 'Gambar harus diupload.',
        ];

        $this->validate($request, $rules, $massages);

        // image
        $fileName = time() . '-' . $request->image->extension();
        $request->file('image')->storeAs('public/photo', $fileName);

        Photo::create([
            'judul' => $request->judul,
            'image' => $fileName,
        ]);

        return redirect()->route('photo')->with('success', 'Data Berhasil Disimpan.');
    }

    public function update(Request $request, $id)
    {
          $photo = Photo::find($id);

        if ($request->hasFile('image')){
            $fileCheck = 'required|max:3000|mimes:jpg,jpeg,png,webp';
        }else {
            $fileCheck = 'nullable';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
        ];

        $massages = [
            'judul.required' => 'Judul harus diisi.',
            'image.required' => 'Gambar harus diupload.',
        ];

        $this->validate($request, $rules, $massages);

        // image
        if ($request->hasFile('image')) {
            if (File::exists('storage/photo/' . $photo->image)) {
                File::delete('storage/photo/' . $photo->image);
            }
            $fileName = time() . '-' . $request->image->extension();
            $request->file('image')->storeAs('public/photo', $fileName);
        }
        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        $photo->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
        ]);

        return redirect()->route('photo')->with('success', 'Data Berhasil Diupdate.');

    }

    public function destroy($id)
    {
        $photo = Photo::find($id);
        if (File::exists('storage/photo/' . $photo->image)) {
            File::delete('storage/photo/' . $photo->image);
        }
        $photo->delete();

        return redirect()->route('photo')->with('success', 'Data Berhasil Dihapus.');
    }
}
