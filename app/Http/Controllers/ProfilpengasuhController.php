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
            'gambar' => 'pengasuh1.jpg',
            'deskripsi' => "&nbsp;&nbsp;&nbsp;&nbsp;KH. M. Abd. Rouf, Lc, MA.—selanjutnya disebut Ustadz Abd. Rouf—adalah seorang Kiai Muda dan cendekiawan muslim yang lahir di Blitar pada tanggal 3 Juli 1987. Sejak kecil, ia hidup dan dibesarkan dalam tradisi pesantren yang kuat. Pendidikan formalnya hingga jenjang menengah pertama diselesaikan di Blitar. Kemudian, ia melanjutkan studinya di Madrasah Aliyah Keagamaan (MAK) yang sekarang dikenal sebagai Madrasah Aliyah Unggulan Abdul Wahab Hasbullah (MAUWH) di Pon. Pes. Bahrul Ulum, Tambakberas, Jombang pada tahun 2006.<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Setelah menyelesaikan Aliyah, Ustadz Abd. Rouf melanjutkan pendidikannya di Universitas al-Azhar, Kairo, Mesir. Ia mengambil program studi Fakultas Ushuluddin, Jurusan Tafsir dan Ilmu-Ilmu al-Qur’an pada tahun 2010. Kemudian, ia melanjutkan ke Pascasarjana dan meraih Post Graduate Diploma (Grad. Dip) di Institut Islamic Studies, Cairo (IISC), Fakultas Dirasat Islamiyah pada tahun 2012. Ustadz Abd. Rouf juga menyelesaikan gelar Magister nontesis spesialis Syariah Islamiyah pada tahun 2014, dan melanjutkan dengan gelar Magister penuh (MA) di lembaga yang sama pada tahun 2018. Tesisnya berjudul “Maqasyid An-Nas al-Qur'an fi ‘al-‘Ahdi al-Makki (Maqasyid al-Qur’an: Kajian Maqasyidiyah atas ayat-ayat Makkiyah)” dan dibimbing oleh beberapa ulama besar Al-Azhar, antara lain Prof. Dr. Ahmad Umar Hasyim, Prof. Dr. Husein Ibrahim, dan Prof. Dr. Nabil Ghanaim. Ia lulus dengan predikat Mumtaz/Cumlaude.<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Selama berada di Mesir, Ustadz Abd. Rouf aktif di beberapa lembaga kajian seperti al-Mizan Study Club dan Lakpesdam PCINU Mesir. Dia juga terlibat dalam halaqah-halaqah ilmiah di serambi Masjid al-Azhar dan sekitarnya yang diampu oleh para Masayikh al-Azhar, termasuk Grand Syekh Al-Azhar, Prof. Dr. Ahmad Thayib, Maulana Syekh Prof. Dr. Ali Gum’ah, Maulana Syekh Prof. Dr. Fathi Hijazi, Maulana Syekh Usamah, dan ulama-ulama senior al-Azhar lainnya.<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Ustadz Abd. Rouf sering menjadi pembicara dalam berbagai seminar tentang ilmu-ilmu keislaman, pemikiran Islam, bedah tesis, bedah buku, dan pelatihan penerjemahan Arab-Indonesia di lingkungan Mahasiswa Indonesia dan Malaysia di Mesir dari tahun 2010 hingga 2018. Dia telah menjadi pembicara di acara-acara seperti Kekeluargaan Masyarakat Riau (KSMR), Forum Keluarga Madura (Fosgama), Persatuan Pelajar Mahasiswa Indonesia (PPMI), Kedutaan Besar Republik Indonesia (KBRI) Kairo, PCINU-Mesir, PCI-Muhamadiyah Mesir, dan lain-lain. Selain itu, Ustadz Abd. Rouf juga aktif dalam menerjemah dan menyunting buku-buku keislaman yang diterbitkan oleh berbagai penerbit di Indonesia.<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Saat ini, selain menjadi pengasuh Pondok Pesantren Modern Hidayatullah (PPMH) Kota Blitar, juga diamanahi sebagai ketua program studi (KAPRODI) Ilmu al-Quran dan Tafsir di Universitas Nahdlatul Ulama (UNU) Blitar dan pengurus inti Asosiasi Ilmu al-Quran dan Tafsir (AIAT) se-Indonesia, Ustadz Abd. Rouf juga dipercaya sebagai ketua komisi Pengkajian, Penelitian, dan Pelatihan Majelis Ulama Indonesia (MUI) Kota Blitar, Forum Kerukunan Umar Beragama (FKUB) Kota Blitar, Wakil Ketua Ikatan Persaudaraan Haji (IPHI) Kota Blitar dan Wakil Katib Syuriah Pengurus Cabang Nahdlatul Ulama (PCNU) Kota Blitar.  <br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Selain itu, dia juga sering mengisi seminar, workshop, ceramah, dan majelis-majelis ilmu di lingkungan Blitar Raya, Tulungagung, dan Kediri. <br>
                            <br>
                            <b>Riwayat Pendidikan KH. M ABD ROUF, Lc., Grad Dip., MA.</b><br>
                            1-	Madrasah Aliyah Keagamaan (MAK), Pondok Pesantren Bahrul Ulum, Tambakberas Jombang.<br>
                            2-	Sarjana (S1) Jurusan Ilmu al-Quran dan Tafsir, Fakultas Al-Azhar, Mesir.<br>
                            3-	Pascasarjana non Tesis, Fakultas Islamic Studies, Jurusan Jurisprudensi Islam, Islamic Studies Cairo, Mesir<br>
                            4-	Pascasarjana Tesis, Fakultas Islamic Studies, Jurusan Ilmu al-Quran dan Tafsir, Islamic Studies Cairo, Mesir.<br>
                            5-	Progam Doktoral Jurusan Studi Islam, konsetrasi Ilmu al-Quran dan Tafsir di Universitas islam Negeri (UIN) Sayyid Ali Rahmatullah, Tulungagung (2020- sekarang).
                            <br>
                            <br>
                            <b>Pengalaman Ke-Organisasi-an KH. M ABD ROUF, Lc., Grad Dip., MA.></b><br>
                            1.	A’wan Syuriah PCINU-Mesir, 2016-2018 dan 2018-2020.<br>
                            2.	Ketua KISWAH (Kajian Islam Ahlussunah wal Jamaah) Aswaja NU Center Kota Blitar, masa khidmat 2019-2024.<br>
                            3.	Ketua Program Studi (KAPRODI) Ilmu al-Qur’an dan Tafsir, Universitas Nahdlatul Ulama (UNU), Blitar (2021-saat ini).<br>
                            4.	Ketua II Forum Komunikasi Penyuluh Agama Islam (FKPAI) Kemenag Kota Blitar (2019-2023). Dan aktif di bidang Deradikalisasi dan aliran-aliran dalam Islam.<br>
                            5.	Koordinator Dai Kamtibnas Polres Kota Blitar Wilayah Sananwetan (2020- 2025) <br>
                            6.	Rais Syuriah Pengurus Ranting NU Sananwetan Kota Blitar (2021-2026).<br>
                            7.	Wakil Katib Syuriah Pengurus Cabang NU Kota Blitar 2021-2026.<br>
                            8.	Ketua Komisi Pengkajian, Penelitian, dan Pelatihan Majelis Ulama Indonesia (MUI) Kota Blitar 2021- 2026.<br>
                            9.	Wakil Ketua Ikatan Persaudaraan Haji Indonesia (IPHI), Kota Blitar 2020-2025.<br>
                            10.	Anggota Forum Komunikasi Umat Beragama (FKUB) Kota Blitar 2024-2029.<br>
                            11.	Pengasuh Majelis Dzikir dan Taklim Al-Hadadiyah, Wonodadi, Kabupaten Blitar.<br>
",
        ],
        2 => [
            'nama' => 'Nyai Hj. ULFA FIKRIA PUTRI, S. Ag., S. Farm., M. Farm. Klin., Apt.',
            'tanggal' => 'Tulungagung 12 / 01 / 1992',
            'gambar' => 'pengasuh2.jpg',
            'deskripsi' => "&nbsp;&nbsp;&nbsp;&nbsp;Nyai Hj Ulfa Fikria Putri, S.Ag., S. Farm., M. Farm. Klin., Apt.  yang selanjutnya disebut dengan ustadzah Ulfa adalah istri dari KH. Abd Rouf. Kepiawannya dalam membantu sang suami mengelola pesantren, berakhir pada  kesibukan yang luar biasa sebagai pengasuh Pondok Pesantren Modern Hidayatullah kota Blitar. Beliau lahir di Tulungagung pada tanggal 12 Januari 1992. Sejak kecil beliau sangat tekun dalam belajar. Tumbuh dan besar di lingkungan pesantren dan akademisi, menginspirasi beliau untuk mengenyam Pendidikan tinggi. <br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Pada tahun 2007, beliau meninggalkan kota Blitar untuk meneruskan Pendidikan di MAN 3 Malang, mengambil program akselerasi, program pendidikan yang dirancang untuk siswa dengan kemampuan istimewa, memungkinkan mereka menyelesaikan studi lebih cepat dari waktu normal, sehingga bangku sekolah menengah atas beliau selesaikan dalam waktu 2 tahun. Selain itu, beliau juga nyantri di Pondok Pesantren Sabilur Rosyad, di bawah asuhan Dr. KH. Marzuqi Mustamar, M.Ag. <br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Setelah menamatkan Pendidikan di kota Malang, beliau hijrah ke kota Surabaya. Atas saran Kyai Marzuqi, beliau mengambil program Profesi Apoteker di Universitas Airlangga Surabaya. Selain kuliah, beliau juga nyantri di Pondok Pesantren At-Tauhid Sidoresmo Surabaya. <br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Tahun 2013, beliau memutuskan untuk mengambil Program Studi Al-Qur’an dan Tafsir di Sekolah Tinggi Agama Islam Al-Fithrah Surabaya, dan selanjutnya beliau melanjutkan dan menamatkan pendidikan Madrasah Diniyah Takmiliyah (MDT) di Pondok Pesantren As-Salafiy Al-Fithrah Kedinding Surabaya.<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Tahun 2015, Ustadzah Ulfa telah lulus program sarjana dari Universitas Airlangga dan mengambil sumpah profesi Apoteker. Selanjutnya beliau masih melanjutkan studi di kota Pahlawan tersebut dan mengambil Program Studi Magister Farmasi Klinis di Universitas yang sama. <br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Pada tahun 2018 beliau menamatkan pendidikan Magister Farmasi Klinis sekaligus Sarjana Agama takhasus Ilmu Al-Qur’an dan Tafsir. Beliau menaruh minat sangat tinggi dalam bidang keilmuan. Di sela waktu luang, beliau sering updating softskill untuk meningkatkan kemampuan berbahasa asing, leadership, parenting, dsb. Saat ini kesibukan beliau selain menjadi pengasuh Pondok Pesantren Modern Hidayatullah, juga aktif mengabdi sebagai Aparatur Sipil Negara (ASN) di Dinas Kesehatan Kabupaten Blitar.<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Dari perjalanan pendidikan beliau, terdapat poin penting yang dapat kita maknai bersama, bahwa Pendidikan tinggi bukan sekadar pilihan, melainkan hak. Wanita berhak mendapatkan pendidikan setinggi-tingginya untuk meraih kemandirian, menginspirasi generasi, dan membangun peradaban yang lebih maju, karena 'Al-ummu madrasatul ula' pendidikan pertama dan paling mendasar bagi seorang anak diberikan oleh ibunya. Ibu berperan penting dalam membentuk karakter, nilai-nilai, dan kepribadian anak sejak usia dini. Ibu tidak hanya mengajarkan hal-hal praktis, tetapi juga memberikan cinta, kasih sayang, dan nilai-nilai moral yang membentuk dasar kepribadian anak.<br><br>
                            <b>Riwayat Pendidikan Nyai Hj. ULFA FIKRIA PUTRI, S. Ag., S. Farm., M. Farm. Klin., Apt.></b><br>
                            1-	2007- 2009 Program Akselerasi MAN 3 Malang<br>
                            2-	2010-2015 Program Profesi Apoteker di Fakultas Farmasi Universitas Airlangga Surabaya<br>
                            3-	2013-2018 Program Studi Ilmu Al-Qur’an dan Tafsir di Sekolah Tinggi Agama Islam Al-Fithrah Surabaya<br>
                            4-	2016-2018 Program Studi Magister Farmasi Klinis di Fakultas Farmasi Universitas Airlangga Surabaya<br>
                            5-	2004- 2007 Madrasah Diniyah Tarbiyatul Mubalighin Sukorejo Blitar<br>
                            6-	2007-2009 Pondok Pesantren Sabilur Rosyad Malang <br>
                            7-	2009-2013 Pondok Pesantren Islam At-Tauhid Surabaya <br>
                            8-	2013-2018 Pondok Pesantren As-Salafiy Al-Fithrah Kedinding Surabaya <br><br>
                            <b>Pengalaman Ke-Organisasi-an Nyai Hj. ULFA FIKRIA PUTRI, S. Ag., S. Farm., M. Farm. Klin., Apt.></b><br>
                            1.	Pengasuh Pondok Pesantren Modern Hidayatullah (PPMH) Kota Blitar<br>
                            2.	Penanggungjawab Instalasi Farmasi Dinas Kesehatan Kabupaten Blitar<br>
                            3.	Sekretaris Organisasi Profesi Ikatan Apoteker Indonesia (IAI) Kabupaten Blitar periode 2023-2027<br>
                            4.	Tim Kesehatan Pengurus Cabang NU Kota Blitar 2021-2026<br>


",
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
