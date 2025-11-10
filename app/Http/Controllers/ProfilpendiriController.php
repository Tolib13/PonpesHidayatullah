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
            'gambar' => 'pendiri1.jpg',
            'deskripsi' => "Pendidikan Terakhir : S2 - Universitas Kediri <br>Riwayat Pendidikan Keagamaan Islam : Pondok Pesantren Miftahul Huda Gading Malang<br><br>
            <b>Riwayat Pendidikan : </b><br>
            •	MIN Rejotangan Tulungagung, tahun 1974<br>
            •	MTsN Aryojeding Tulungagung, tahun 1977<br>
            •	MAN Kota Blitar, tahun 1981<br>
            •	Diploma I, IKIP Jurusan Bahasa dan Sastra Indonesia, tahun 1982<br>
            •	Sarjana (S1), IKIP PGRI Malang, Jurusan Bahasa dan Sastra Indonesia, tahun 1993<br>
            •	Pascasarjana (S2) UNISKA Kediri, tahun 2002<br><br>
            <b>Pengalaman Organisasi</b><br>
            •	Ketua Yayasan Masjid Hidayatullah kota Blitar (Dengan lembaga formal KB, RA, MI, Mts, dan informal Pondok Pesantren dan Masjid Hidayatullah), tahun 2003 – saat ini.<br>
            •	Ketua Takmir Masjid Hidayatullah Kota Blitar tahun 2005 – saat ini.<br>
            •	Ketua PHBI Kecamatan Sananwetan, Kota Blitar, tahun 2008 – saat ini.<br>
            •	Ketua Jamiyatul Qura’ wal Khufadz (JQH-NU) kota Blitar dua periode, tahun 2005-2015<br>
            •	Ketua Ikatan Persaudaraan Haji (IPHI) Kota Blitar dua periode, tahun 2015 – saat ini.<br>
            •	Wakil Ketua Tanfidziyah Pengurus Cabang Nahdlatul Ulama (PCNU) Kota Blitar dua periode, tahun 2015 – saat ini.<br>
            •	Wakil Ketua Majelis Ulama Indonesia (MUI) Kota Blitar tahun 2021- saat ini,<br>
            •	Ketua Forum kerukunan Umat Beragama (FKUB), Kota Blitar dua periode, tahun 2021 – saat ini.<br>
            •	Pengurus Dewan Masjid Indonesia (DMI), Kota Blitar, 2018 – saat ini.<br>
",
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
