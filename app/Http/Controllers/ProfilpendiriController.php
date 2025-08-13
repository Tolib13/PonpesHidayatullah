<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilpendiriController extends Controller
{
    public function show($id)
{
    $profils = [
        1 => [
            'nama' => 'KH. Drs. SUKRI ALFI, MM.',
            'tanggal' => 'Tulungagung 29 / 04 / 1962',
            'gambar' => 'il-berita-02.png',
            'deskripsi' => "Pendidikan Terakhir : S2 - Universitas Kediri <br>Riwayat Pendidikan Keagamaan Islam : Pondok Pesantren Miftahul Huda Gading Malang",
        ],
    ];

    if (!isset($profils[$id])) {
        abort(404);
    }

    return view('profil.detailpendiri', [
        'profilpendiri' => $profils[$id]
    ]);
}
}
