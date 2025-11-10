<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
use Illuminate\Http\Request;

class KritikController extends Controller
{
     public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);

        Kritik::create($request->all());

        return back()->with('success', 'Terima kasih! Kritik & saran Anda sudah terkirim 🙏');
    }

      // ✅ Tambahkan: Tampilkan semua data untuk admin
    public function index()
    {
        $data = Kritik::latest()->paginate(10); // bisa pakai paginate
        return view('admin.kritik.index', compact('data'));
    }

    // ✅ Tambahkan: Hapus data
    public function destroy($id)
    {
        $kritik = Kritik::findOrFail($id);
        $kritik->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }

    
}
