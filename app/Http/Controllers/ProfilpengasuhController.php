<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilpengasuhController extends Controller
{
    public function show($id)
{
    $profils = [
        1 => [
            'nama' => 'KH. M ABD ROUF, Lc., Grad Dip., MA.',
            'tanggal' => 'Blitar 03 / 07 / 1987',
            'gambar' => 'il-berita-02.png',
            'deskripsi' => "Pendidikan Terakhir : S2 - Universitas Al Azhar Cairo Mesir <br>Riwayat Pendidikan Keagamaan Islam : Pondok Pesantren Bahrul Ulum Jombang",
        ],
        2 => [
            'nama' => 'Nyai Hj. ULFA FIKRIA PUTRI, S. Ag., S. Farm., M. Farm. Klin., Apt.',
            'tanggal' => 'Tulungagung 12 / 01 / 1992',
            'gambar' => 'il-berita-01.png',
            'deskripsi' => "Pendidikan Terakhir : S2 - Universitas Airlangga - Institut Al Fithrah Surabaya <br>Riwayat Pendidikan Keagamaan Islam : Pondok Pesantren Assalafi Al Fithrah Surabaya",
        ],
    ];

    if (!isset($profils[$id])) {
        abort(404);
    }

    return view('profil.detailpengasuh', [
        'profilpengasuh' => $profils[$id]
    ]);
}
}
