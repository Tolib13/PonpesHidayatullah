<?php
namespace App\Http\Controllers;

use App\Models\Kalam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KalamController extends Controller
{
    public function index()
    {
        $kalams = Kalam::latest()->paginate(10);
        return view('admin.kalam.index', compact('kalams'));
    }

    public function create()
    {
        return view('admin.kalam.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('kalams', 'public');
        }

        Kalam::create([
            'judul' => $request->judul,
            'gambar' => $gambar,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.kalam.index')->with('success', 'Kalam berhasil ditambahkan.');
    }

    public function edit(Kalam $kalam)
    {
        return view('admin.kalam.edit', compact('kalam'));
    }

    public function update(Request $request, Kalam $kalam)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $gambar = $kalam->gambar;
        if ($request->hasFile('gambar')) {
            if ($gambar) {
                Storage::disk('public')->delete($gambar);
            }
            $gambar = $request->file('gambar')->store('kalams', 'public');
        }

        $kalam->update([
            'judul' => $request->judul,
            'gambar' => $gambar,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.kalam.index')->with('success', 'Kalam berhasil diperbarui.');
    }

    public function destroy(Kalam $kalam)
    {
        if ($kalam->gambar) {
            Storage::disk('public')->delete($kalam->gambar);
        }
        $kalam->delete();
        return redirect()->route('admin.kalam.index')->with('success', 'Kalam berhasil dihapus.');
    }
}
