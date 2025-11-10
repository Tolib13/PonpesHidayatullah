<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Whoops\Run;

class BlogController extends Controller
{
    //Fungsi Index
    public function index()
    {
        return view('admin.blog.index', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    //Fungsi Create
    public function create()
    {
        return view('admin.blog.create');
    }

    //Fungsi store
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'image' => 'required|image|file|max:3000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ];

        $massages = [
            'judul.required' => 'Judul harus diisi.',
            'image.required' => 'Gambar harus diupload.',
            'desc.required' => 'Deskripsi harus diisi.',
        ];

        $this->validate($request, $rules, $massages);

        // image
        $fileName = time() . '-' . $request->image->extension();
        $request->file('image')->storeAs('public/artikel', $fileName);

        // Artikel
        $storage = "storage/content-artikel";
        $dom = new \DomDocument();

        libxml_use_internal_errors(true);
        $dom->loadHtml($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

    foreach ($images as $img) {
    $src = $img->getAttribute('src');
    if (preg_match('/data:image/', $src)) {
        preg_match('/data:image\/(?<mime>.*?);/', $src, $groups);
        $mimeType = $groups['mime'];
        $fileNameContent = uniqid();
        $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '-' . time();
        $filePath = "$storage/$fileNameContentRand.$mimeType";
        $image = Image::make($src)->resize(1440, 720)->encode($mimeType, 100)->save(public_path($filePath));
        $new_src = asset($filePath);
        $img->removeAttribute('src');
        $img->setAttribute('src', $new_src);
        $img->setAttribute('class', 'img-responsive');
    }
}

Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'image' => $fileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect()->route('blog')->with('success', 'Data Berhasil Disimpan.');

    }

    //Fungsi Edit
    public function edit($id)
    {
        $artikel = Blog::find($id);
        return view('admin.blog.edit', [
            'artikel' => $artikel
        ]);
    }

    //Fungsi update
    public function update(Request $request, $id)
    {
        $artikel = Blog::find($id);

        if ($request->hasFile('image')){
            $fileCheck = 'required|max:3000|mimes:jpg,jpeg,png,webp';
        }else {
            $fileCheck = 'nullable';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
            'desc' => 'required|min:20',
        ];

        $massages = [
            'judul.required' => 'Judul harus diisi.',
            'image.required' => 'Gambar harus diupload.',
            'desc.required' => 'Deskripsi harus diisi.',
        ];

        $this->validate($request, $rules, $massages);

        // image
        if ($request->hasFile('image')) {
            if (File::exists('storage/artikel/'). $artikel->image) {
                File::delete('storage/artikel/' . $request->old_image);
            }
            $fileName = time() . '-' . $request->image->extension();
            $request->file('image')->storeAs('public/artikel', $fileName);
        }
        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // Artikel
        $storage = "storage/content-artikel";
        $dom = new \DomDocument();
        libxml_use_internal_errors(true);
        $dom->loadHtml($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?);/', $src, $groups);
                $mimeType = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '-' . time();
                $filePath = "$storage/$fileNameContentRand.$mimeType";
                $image = Image::make($src)->resize(1440, 720)->encode($mimeType, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        $artikel->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect()->route('blog')->with('success', 'Data Berhasil Diupdate.');
    }

    //Fungsi delete
    public function destroy($id)
    {
        $artikel = Blog::find($id);
        if (File::exists('storage/artikel/' . $artikel->image)) {
            File::delete('storage/artikel/' . $artikel->image);
        }
        $artikel->delete();

        return redirect()->route('blog')->with('success', 'Data Berhasil Dihapus.');
    }
}
