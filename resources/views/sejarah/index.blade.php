@extends('layouts.layouts')

@section('content')

<section id="berita" style="margin-top: 50px;" class="py-5 sejarah-section">
<div class="container py-5">

    <!-- Judul Halaman -->
    <div class="text-center mb-5">
        <h2 class="fw-bold section-title" style=" text-shadow: 0 0 5px rgb(0, 0, 0), 0 0 10px rgb(17, 215, 47),0 0 15px rgb(6, 10, 6);"><b>Sejarah Pondok Pesantren<br> Modern Hidayatullah</b></h2>
        <p class="text-black">Profil Pondok Pesantren Modern Hidayatullah</p>
    </div>

    <!-- Sejarah Berdiri -->
    <div class="card sejarah-card mb-5 p-4">
        <h3 class="fw-bold mb-3 text-center">Profil Pondok Pesantren</h3>
        <p style="text-align: justify; text-indent:30px;">
           Pondok Pesantren merupakan sebuah institusi pendidikan keagamaan paling tua yang tumbuh secara swadaya dan berkembang di kalangan masyarakat Islam di Indonesia. Dalam catatan sejarah, sejak abad ke 16 telah diketahui adanya ratusan pondok pesantren yang mengajarkan al-Qur’an, kitab kuning, dan berbagai ilmu agama. Sedangkan pola pendidikan pondok pesantren sangat menekankan pada nilai- nilai kesederhanaan, keikhlasan, kemandirian dan pengendalian diri. Orientasi belajarnya pun bukan demi kepentingan kekuasaan, uang dan keagungan duniawi, tetapi ditanamkan semata-mata kewajiban dan pengabdian kepada Allah Swt.
            Jika mengacu pada hasil keputusan lokakarya yang diadakan oleh Departemen Agama tahun 1981, tujuan umum pondok pesantren adalah membina warga negara agar berkepribadian muslim, sesuai dengan ajaran Islam. Dan menanamkan rasa keagamaan pada semua lini kehidupannya. Serta menjadikannya sebagai orang yang berguna bagi agama, masyarakat dan negara.
            </p>
            <p style="text-align: justify; text-indent:30px;">
                Oleh sebab itu, amatlah wajar apabila keberadaan pondok pesantren sangatlah penting dalam mendidik para santri menjadi seorang muslim yang bertakwa kepada Allah Swt., berakhlaq mulia, memiliki kecerdasan, keterampilan, dan sehat lahir batin sebagai warga negara yang ber-Pancasila. Tidak hanya itu, pondok pesantren selain mendidik para santrinya untuk menjadi kader-kader ulama dan mubaligh berjiwa ikhlas, tabah, tangguh dalam mengamalkan syariat Islam secara utuh dan dinamis, tetapi juga mendidik para santri untuk memperoleh kepribadian
serta mempertebal semangat kebangsaan, keindonesiaan, dan keislaman, agar dapat menumbuhkan manusia pembangunan bagi dirinya serta bertanggungjawab terhadap pembangunan bangsa dan negara.
            </p>
         <p style="text-align: justify; text-indent:30px;">
            Mengacu pada tujuan mulia tersebut, Pondok Pesantren Modern Hidayatullah (PPMH) ini didirikan pada tanggal 4 April 2022. Dan secara lebih spesifik, Pondok ini—selain pengajaran kitab kuning—juga menfokuskan diri pada tahfidz al-Qur’an dan pendalaman bahasa Arab, sebagai bahasa al-Qur’an. Dengan harapan, dengan memadukan antara pengajaran kitab kuning, bahasa Arab, dan tahfidz al-Qur’an, akan menciptakan dan membentuk generasi muslim yang mampu memahami, mengamalkan, dan mentransformasikan ajaran-ajaran agama Islam secara benar, moderat, dan humanis serta jauh dari pemahaman yang menyimpang dari pemahaman dan pengamalan ulama-ulama madzhab Ahlussunah wal Jamaah.
        </p>
        <p style="text-align: justify; text-indent:30px;">Dalam perkembangannya, Pondok Pesantren ini tidak hanya dikhususkan untuk anak setingkat MI, maupun jenjang Mts—yang kebetulan kedua lembaga tersebut berada di bawah naungan Hidayatullah—tetapi juga untuk mahasantri/mahasiswa. Terbukti ada beberapa mahasiswa yang ikut muqim di Pesantren, dan ada pula yang ngalong. Lantaran saat ini, masih keterbatasan sarana dan prasarana untuk asrama Mahasantri.
Bila dilihat secara geografis maupun peta akademik di lingkungan Blitar Raya, Pondok Pesantren Modern Hidayatullah ini terbilang sangat strategis. Ia berada di tengah-tengah pusat kota sekaligus di kelilingi oleh berbagai Perguruan Tinggi di Blitar, semisal Universitas Nahdlatul Ulama Blitar, Universitas Balitar, STIT al-Muslihun, Universitas PGRI Blitar dan lain sebagainya. Sehingga kedepan, pelan tapi pasti, Insyallah ia akan menjadi pondok pesantren yang dapat menjadi ‘sentra intelektual’ bagi akademisi maupun masyarakat muslim secara umum.
</p>
    </div>

    <!-- Visi -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6 mb-3 mb-md-0">
            <img src="{{ asset('assets/icons/logoppmh.jpg') }}" class="img-fluid rounded shadow" style="width: 200px; height: 200px; margin-left: 100px;" alt="Visi Pondok">
        </div>
        <div class="col-md-6">
            <h3 class="fw-bold">Visi</h3>
            <p>
                Menjadi pondok pesantren yang mencetak generasi Qur’ani yang taffaqquh fiidin dan beramal sesuai pemahaman dan manhaj ulama Ahlussunnah wal Jamaah.
            </p>
        </div>
    </div>

    <!-- Misi -->
    <div class="card sejarah-card p-4">
        <h3 class="fw-bold mb-3 text-center">Misi</h3>
        <ul class="custom-list" style="text-align: justify;">
            <li>1.	Melaksanakan dan mengembangkan pengajaran dan pembelajaran yang profesional dan berkualitas dalam bidang al-Qur’an dan kitab kuning.</li>
            <li>2.	Mencetak para hufadz al-Qur’an dan memahami ilmu-ilmu syariah, yang berbasis pada kitab kuning.</li>
            <li>3.	Mengembangkan proses pendidikan pesantren yang berorientasi masa depan dan mampu bersaing dalam dunia global.</li>
        </ul>
    </div>

    <!-- Program unggulan -->
    <div class="row align-items-center mb-4 mt-5">
        <div class="col-md-6">
            <h3 class="fw-bold" style="text-align: left; margin-left: 20px;">Program Unggulan</h3>
            <ul class="custom-list" style="text-align: justify;">
                <li>1.	Tahfidz al-Quran</li>
                <li>2.	Kitab Kuning (Ilmu-ilmu syariah)</li>
                <li>3.	Pembiasaan Bahasa Arab & Bahasa Inggris</li>
                <li>4.	Pusat Studi Maqasyidul Qur’an</li>
        </ul>
        </div>
    </div>

</div>

</section>

@endsection