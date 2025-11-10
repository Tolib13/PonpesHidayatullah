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
            'gambar' => 'asatid4.jpg',
            'deskripsi' => "&nbsp;&nbsp;&nbsp;&nbsp;Miftaqul Huda, S. Pd
Lahir 15 Oktober 1987 dari keluarga kecil di Kediri. Anak ketiga, dari tiga bersaudara, pasangan Bapak Karwadi dan Ibu Sufarianik. Pendidikan formalnya dimulai dari TK Dharma Wanita, SDN Ketami, kemudian sekolah menengah pertama di SLTPN 8 Kediri, dan menamatkan pendidikan menengah atas di SMA SUNAN GIRI Probolinggo. Melanjutkan pendidikan sarjana program studi Psikologi Islam di UIN Syekh Wasil Kediri (saat itu bernama STAIN Kediri) dan  menyelesaikan program studi Pendidikan Agama Islam di STIT AL-MUSLIHUUN Blitar.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Aktif dalam berbagai forum diskusi tentang isu sosial keagamaan di lingkungan Kampus. Sejak usia SMA hidup dalam lingkungan pendidikan Pesantren. Dari pengalaman hidup di Pesantren inilah tradisi pengetahuannya tumbuh dan berkembang. Metode belajar ala kitab kuning telah membentuk cara pandangnya yang kritis, namun tetap mengedepankan budi pekerti dalam kepribadiannya. Menurutnya, kompleksitas kehidupan Pesantren merupakan laboratorium pendidikan yang selalu menarik untuk diperhatikan dan dikembangkan.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Saat ini Ia bermukim di Plosorejo, Kademangan Kabupaten Blitar, Jawa Timur, bersama seorang istri dan 3 anak. Menekuni dunia Tarekat dan menikmati kehidupan dewasa awal. Selain juga aktif mengajar di Sekolah Dasar IsIam (SDI) yang ada di bawah naungan LP. MA'ARIF NU Kabupaten Blitar. Salah satu kutipan yang paling disukai adalah 'Jika Anda ingin memperbaiki dunia, pulang lah! Cintai keluarga Anda!'<br><br>
            <br><br>Pendidikan Terakhir : S1 - STIT Al Muslihun Blitar<br>Riwayat Pendidikan Keagamaan Islam : Pondok Pesantren Roudhlotul Tholibin",
        ],
        2 => [
            'nama' => 'ZAINAL QOMARI, S.Pd.',
            'tanggal' => 'Blitar 26 / 07 / 1986',
            'gambar' => 'asatid2.jpg',
            'deskripsi' => "&nbsp;&nbsp;&nbsp;&nbsp;Zainul Qomari lahir di Blitar pada tanggal 26 Juli 1986. Ia merupakan anak pertama dari dua bersaudara, buah hati pasangan Bapak Imam Munajad dan Ibu Romukin. Sejak kecil, Zainul tumbuh dalam lingkungan yang sederhana,<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Perjalanan pendidikan formalnya dimulai di MI Nurul Huda Ngadirejo, Kota Blitar, yang ia tempuh dari tahun 1991 hingga 1998. Setelah menamatkan pendidikan dasar, ia melanjutkan ke jenjang menengah pertama di MTsN Kepanjenkidul, Kota Blitar (1998–2001), kemudian ke SMK Islam 1 Kota Blitar dan menyelesaikannya pada tahun 2004. Semangatnya dalam menuntut ilmu terus berlanjut, terbukti dari pilihannya untuk melanjutkan studi ke perguruan tinggi di STIT Al Muslihuun Kabupaten Blitar pada tahun 2010 hingga 2014. Tak berhenti di situ, ia juga menempuh pendidikan lanjutan linier di Universitas Terbuka (UT) pada tahun 2018 hingga 2019.<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Selain pendidikan formal, Zainul juga aktif menimba ilmu agama melalui jalur non-formal. Ia mengikuti pendidikan di Madrasah Diniyah (MADIN) Tanggung dari tahun 1998 hingga 2003, dan kemudian melanjutkan di lembaga Tarbiyatul Muballighin Sukorejo dari 2003 hingga 2008. Latar belakang pendidikan agama yang kuat ini menjadi bekal penting dalam perjalanan karier dan kehidupannya.<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Sejak tahun 2013 hingga saat ini, Zainul Qomari mengabdikan dirinya sebagai pendidik di RA Plus Hidayatullah. Peran sebagai guru tidak hanya menjadi profesi, tetapi juga bentuk nyata kontribusinya dalam membentuk generasi yang cerdas dan berakhlak mulia. Dengan pengalaman yang luas di bidang pendidikan serta dedikasi tinggi terhadap dunia pengajaran, Zainul terus berkomitmen untuk menjadi bagian dari perubahan positif di tengah masyarakat melalui dunia pendidikan.<br><br>
            <br><br>Pendidikan Terakhir : S1 - Universitas Terbuka <br>Riwayat Pendidikan Keagamaan Islam : Madrasah Tarbiyatul Mubalighin Sukorejo",
        ],
        3 => [
            'nama' => 'Dr. MOH. BADRUL MUNIR, S. Pd., M. Pd.',
            'tanggal' => 'Blitar 27 / 01 / 1991',
            'gambar' => 'il-berita-01.png',
            'deskripsi' => "&nbsp;&nbsp;&nbsp;&nbsp;Tenaga pendidik PPMH bernama Dr. Moh. Badrul Munir, M.Pd. , lahir pada tanggal 27 Januari 1991 di Blitar. Tenaga pendidik PPMH  merupakan anak ke-dua dari tiga bersaudara dari pasangan suami-istri bapak H. Moh. Tarsis dan Ibu Hj. Solikah. Tenaga pendidik PPMH  masih bertempat tinggal Bersama kedua orangtuanya di Jl. Randugede, RT/RW: 003/002 Dusun Bendil Putih, Desa Tumpang, Kecamatan Talun, Kabupaten Blitar, Jatim Kode Pos. 66183.<br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Tenaga pendidik PPMH  memulai pendidikan formal pada jenjang sekolah dasar di MI Misbahul Munir  tahun 1998 sampai 2004. Dan dilanjutkan ke jenjang sekolah menengah dan sekolah atasnya di SMP pada tahun 2004-2007 dan SMA pada tahun 2007-2009 di Islamic Boarding School Mamba’us Sholihin-2 Blitar yang diasuh oleh KH. Misbahudin Ahmad Almaghfirullah, juga dibimbing oleh Agus Dr. KH. Zainul Fajri,M.Ag. dan  Agus KH. Al-Amin,M.M sembari mengenyam pendidikan pesantren di lembaga tersebut. Kemudian setelah lulus dari SMA Mamba’us Sholihin-2 , Tenaga pendidik PPMH  mengenyam pendidikan pesantren di Nurul Ummah Kota Gede Yogyakarta di bawah asuhan KH. Azhari Marzuki Almaghfirullah, sempat juga menjadi santri kalong di Pon. Pes. Al-Falah Jeblog yang diasuh oleh KH. Ardani bin Ahmad. Di tahun 2010 sempat kuliah Pendidikan Matematika di STKIP PGRI Blitar, namun hanya 2 semester. Setelah itu Tenaga pendidik PPMH  kembali ke Yogyakarta untuk mengenyam pendidikan pesantren di Nurul Haromain Kulon Progo dalam asuhan KH. Sirodjan Muniron,AR. Baru sepulang dari Yogyakarta Tenaga pendidik PPMH  masuk ke IAIN Kediri yang pada waktu itu masih STAIN pada tahun 2015 dan lulus pada tahun 2019 dengan mengambil  jurusan Tadris Bahasa Inggris sembari mondok di Pon.Pes. Al-Amin menjadi santri KH. Anwar Iskandar. Semenjak tahun 2019 menempuh pendidikan di Institut Agama Islam Negeri (IAIN) Kediri program Pascasarjana jurusan PAI (Pendidikan Agama Islam) yang Alhamdulillah terjaring dalam program beasiswa MADIN dari SK pondok Avissina dari arahan Dr. KH. Masroni Nasir,M.Pd.I yang juga menjadi salah satu pengajar di lembaga tersebut, semoga amanah. Lulus S2 tahun 2021 di lanjutkan mengenyam S3 Doktoral Studi Islam Angkatan Pertama Pascasarjana IAIN Kediri. Dan Alhamdulillah lulus studi doktoral pada tahun 2024 yang sekarang beralih nama menjadi UIN (Universitas Islam Negri) Syekh Wasil Kediri.<br>
            <br><br>Pendidikan Terakhir : S3 - Universitas Islam Negeri Syekh Wasil Kediri <br>Riwayat Pendidikan Keagamaan Islam : Pondok Pesantren Al-Amin Kediri",
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
            'deskripsi' => "&nbsp;&nbsp;&nbsp;&nbsp;RISQY NASHIHUN AMIN, seorang guru Madrasah Diniyah yang berdedikasi dalam bidang Nahwu dan Tahfidzul Qur'an, lahir pada tanggal 4 September 1998 di Blitar. Anak tunggal dari Bapak Muhammad Fawzy, dan Ibu Binti Masruchin. Saat ini ia tinggal bersama anak dan istrinya di Dusun Pakel, Banggle, Kanigoro, Blitar.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Ketika kecil, ia dididik dan dibesarkan di Jepun, Tegalrejo Kec. Selopuro. Menempuh pendidikan Sekolah Dasar di MI Miftahun Najah Tegalrejo (Kelas 1-5) dan MI Al Mubarokah Mayamuk, Salawati, Sorong, Papua Barat (Kelas 6-lulus).<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Dengan didikan kedua orang tuanya di masa kecil yang sederhana, melatih perjuangan, dan agamis, ia dididik untuk tidak selalu bergantung pada orang lain, dan hanya kepada Allah lah tempat bergantung. Setelah lulus SD ia melanjutkan jenjang SMP dan mondok di PP Nurul Ulum 2 Sutojayan (sekarang PP Nurus Salam). Dia menunjukkan minat yang besar dalam pendidikan pesantren. Berkat bimbingan para asatidz dan doa orang tuanya, ia betah di pesantren. Padahal sebelumnya tidak ada fikiran untuk melanjutkan studi di pesantren.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Ia memiliki ketertarikan dalam ilmu agama, khususnya bidang Tahfidz, Tafsir Al-Qur'an, dan Nahwu Shorof.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Dia melanjutkan sekolah formalnya di MTs Maarif NU 2 Sutojayan (2012-2014) kemudian di MA Ma'arif NU Kota Blitar (2015-2017). Setelah lulus SMA, ia melanjutkan pendidikan non-formalnya di PP Mamba`u Syafaatil Quran Ngegong untuk memperdalam ilmu dan hafalan Al-Qurannya.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Namun setelah lulus SMA, ia tidak langsung meneruskan pendidikannya.  ia belajar dan mengajar di MI Miftahun Najah dan menjadi aktivis salah satu Organisasi kepemudaan di daerahnya selama 1 tahun, yaitu IPNU (2017-2018) . <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Setelah berjalan 3 tahun mondok di Ngegong, dengan taufiq dan rahmat Allah yang Maha Agung, Risqy berhasil menyelesaikan setoran tahfidz Al-Qurannya pada akhir Desember 2020 dan diwisuda pada 19 Februari 2023. Setelah itu, ia selalu berusaha menjaga hafalan dan berharap agar Allah selalu membimbing dan memberinya kesempatan untuk selalu membersamai Al-Qur'an. karena iya meyakini dengan itu, dapat memperbanyak bekal di akhirat mendapatkan ilmu yang berkah, bermanfaat. <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Saat ini, Risqy mengajar di PP Modern Hidayatullah dalam bidang Nahwu dan ekstra kurikuler Seni Tilawatil Quran. Selain itu, ia juga mengajar Nahwu di Madin Yanbuul Ulum Ngegong dan bidang Tahfidz di MTs Hidayatullah dan Madin Mujahidin Plosoarang.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Risqy memiliki motivasi yang kuat untuk terus belajar dan berbagi ilmu. Baginya, ilmu Nahwu Shorof merupakan langkah awal untuk memahami ilmu agama melalui Al-Qur'an, Hadits, dan kitab-kitab ulama terdahulu. <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;الالاالاءالاالاءالاله<br>
&nbsp;&nbsp;&nbsp;&nbsp;'Ingatlah! tiada kenikmatan kecuali kenikmatan dari Allah.'<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Nikmat Allah yang sangat besar sering kali dilupakan, padahal tidak akan bisa dihitung jika kita mau menyadari dan bersyukur. Salah satu cara untuk mensyukurinya adalah dengan terus belajar dan berusaha memperbanyak kebaikan. <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Dengan demikian, ia berharap dapat menjadi bagian dari proses penyebaran ilmu dan kebaikan di masyarakat.
            <br><br>Pendidikan Terakhir : Madrasah Aliyah Maarif NU Blitar <br>Riwayat Pendidikan Keagamaan Islam : Pondok Pesantren Manbausyafaatil Quran",
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
            'gambar' => 'asatid1.jpg',
            'deskripsi' => "&nbsp;&nbsp;&nbsp;&nbsp;Khoirul Anwar lahir di Blitar pada tanggal 16 Maret 1994. Ia merupakan anak ke dua dari dua bersaudara, buah hati dari pasangan Alm Bapak Daman Huri dan Ibu Arik Mei Suprapti. Sejak kecil, Khoirul Anwar tumbuh dalam lingkungan yang sederhana di dukuh kecil yang bernama dusun centong RT/RW 01/09 Desa Sawentar kecamatan Kanigoro kabupaten Blitar.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Perjalanan pendidikan formalnya dimulai di MI Miftahul Huda Centong II, yang ia tempuh dari tahun 2001 hingga 2007. Setelah lulus pendidikan dasar, ia melanjutkan ke jenjang menengah pertama di MTs Al-Muslihuun Tlogo sekaligus mondok di pondok pesantren Al-Muslihuun untuk menimba ilmu agama Mulai tahun (2007–2010), karena masih merasa kurang dalam mendalami ilmu agama ia melanjunkan ke jenjang berikutnya MA Al-Muslihuun sampai lulus tahun 2013. Semangatnya dalam menuntut ilmu terus berlanjut, terbukti dari pilihannya untuk melanjutkan studi ke perguruan tinggi di STAIN Kediri mengambil Jurusan Tarbiyah Prodi Pendidikan Agama Islam yang ia tempuh pada tahun 2013 sampai 2017 dan mondok di Pondok pesantren Assa’idiyah Jamsaren Kota Kediri pada tahun 2013 hingga 2019. <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Selain menjadi mahasiswa, Khoirul juga mengabdikan diri di ponpes Assa’idiyah menjadi pendamping pondok serta abdi dalem mulai tahun 2014 sampai 2019, menjadi guru madin di ponpes Assa’idiyah mulai tahun 2015 sampai 2019, setelah selesai ujian skripsi ia berniat untuk mengamalkan ilmunya dengan cara mengabdikan diri di MTs Nurul Islam Kota Kediri mengajar mata pelajaran fikih mulai tahun 2017 sampai 2019 dan menjadi wali kelas 7 c mulai tahun 2018 sampai 2019,  pengalaman yang di dapat dari Kota Kediri ini  menjadi bekal penting dalam perjalanan awal karier dan kehidupannya.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Sejak tahun 2019 hingga saat ini, Khoirul Anwar mengabdikan dirinya sebagai pendidik di MTs Hidayatullah Kota Blitar, ia mengajar mata pelajaran fikih dan akidah akhlak, Peran guru lebih dari sekadar profesi, karena guru memiliki peran penting dalam membentuk generasi yang cerdas dan berakhlak mulia. Guru bukan hanya penyampai informasi, tetapi juga pembimbing, fasilitator, teladan bagi siswa dalam mengembangkan potensi diri, baik secara akademis maupun moral, guru memiliki peran krusial dalam membentuk karakter siswa melalui berbagai cara, seperti memberikan teladan, membimbing, menanamkan nilai-nilai positif, menjadi pribadi yang bertanggung jawab, disiplin, dan memiliki integritas, fondasi utama dalam membangun generasi penerus bangsa yang cerdas, kreatif, dan berakhlak mulia, siap menghadapi tantangan masa depan.
            
            
            <br><br>Pendidikan Terakhir : S1 - STAIN Kediri <br>Riwayat Pendidikan Keagamaan Islam :  -  ",
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
