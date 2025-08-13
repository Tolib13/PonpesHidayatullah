<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function show($id)
{
    $profils = [
        1 => [
            'nama' => 'MIFTAKUL HUDA, S.Pd.',
            'tanggal' => 'Kediri 15 / 10 / 1987',
            'gambar' => 'il-berita-02.png',
            'deskripsi' => "Pendidikan Terakhir : S1 - STIT Al Muslihun Blitar<br>Riwayat Pendidikan Keagamaan Islam : Pondok Pesantren Roudhlotul Tholibin",
        ],
        2 => [
            'nama' => 'ZAINAL QOMARI, S.Pd.',
            'tanggal' => 'Blitar 26 / 07 / 1986',
            'gambar' => 'il-berita-01.png',
            'deskripsi' => "Pendidikan Terakhir : S1 - Universitas Terbuka <br>Riwayat Pendidikan Keagamaan Islam : Madrasah Tarbiyatul Mubalighin Sukorejo",
        ],
        3 => [
            'nama' => 'Dr. MOH. BADRUL MUNIR, S. Pd., M. Pd.',
            'tanggal' => 'Blitar 27 / 01 / 1991',
            'gambar' => 'il-berita-01.png',
            'deskripsi' => "Pendidikan Terakhir : S3 - Universitas Islam Negeri Syekh Wasil Kediri <br>Riwayat Pendidikan Keagamaan Islam : Pondok Pesantren Al-Amin Kediri",
        ],
        4 => [
            'nama' => 'TASDIQ HASIM',
            'tanggal' => 'Blitar 16 / 03 / 1975',
            'gambar' => 'il-berita-01.png',
            'deskripsi' => "Pendidikan Terakhir : S1 - Madrasah Aliya Negeri Kota blitar<br>Riwayat Pendidikan Keagamaan Islam : Madrasah Tarbiyatul Mubalighin Sukorejo ",
        ],
        5 => [
            'nama' => 'RISQY NASHIHUN AMIN',
            'tanggal' => 'Blitar 04 / 09 / 1998',
            'gambar' => 'il-berita-01.png',
            'deskripsi' => "Pendidikan Terakhir : Madrasah Aliyah Maarif NU Blitar <br>Riwayat Pendidikan Keagamaan Islam : Pondok Pesantren Manbausyafaatil Quran",
        ],
        6 => [
            'nama' => 'MOH. FAHMI AWALUDIN, S.Pd., M.Pd. ',
            'tanggal' => '01 / 10 / 1991',
            'gambar' => 'il-berita-01.png',
            'deskripsi' => "Pendidikan Terakhir : S2 - Universitas Sayyid Ali Rahmatullah <br>Riwayat Pendidikan Keagamaan Islam : Pondok Pesantren Darussalam Gontor",
        ],
        7 => [
            'nama' => 'KHOIRUL ANWAR, S.Pd.',
            'tanggal' => '16 / 03 / 1994',
            'gambar' => 'il-berita-01.png',
            'deskripsi' => "Pendidikan Terakhir : S1 - STAIN Kediri <br>Riwayat Pendidikan Keagamaan Islam :  -  ",
        ],
        8 => [
            'nama' => 'BINTI NURIYAH',
            'tanggal' => '09 / 04 / 2000',
            'gambar' => 'il-berita-01.png',
            'deskripsi' => "Pendidikan Terakhir : MtsN Karangsari <br>Riwayat Pendidikan Keagamaan Islam : Pondok Pesantren Putri Ishlahiyyatul Asroriyyah",
        ],
    ];

    if (!isset($profils[$id])) {
        abort(404);
    }

    return view('profil.detailasatid', [
        'profil' => $profils[$id]
    ]);
}

}
