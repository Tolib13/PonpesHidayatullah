@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px;" class="py-5">
    <div class="container">
        <!-- Judul Halaman -->
        <div class="text-center mb-4">
            <h1 class="fw-bold">Peserta Didik</h1>
            <p class="text-muted" style="max-width: 700px; margin: auto;">
                Pondok Pesantren Modern Hidayatullah menerima peserta didik dari berbagai partner pendidikan.
                Kami menjalin kerja sama dengan sekolah dan lembaga pendidikan di berbagai daerah untuk
                memberikan pendidikan yang berkualitas dan berakhlak mulia.
            </p>
        </div>

        <!-- Daftar -->
         <div class="row text-center mt-5">
    <div class="col-md-3">
        <h2 class="fw-bold text-success">50+</h2>
        <p>Peserta Didik Aktif</p>
    </div>
    <div class="col-md-3">
        <h2 class="fw-bold text-success">150+</h2>
        <p>Lulusan</p>
    </div>
    <div class="col-md-3">
        <h2 class="fw-bold text-success">10</h2>
        <p>Partner Pendidikan</p>
    </div>
    <div class="col-md-3">
        <h2 class="fw-bold text-success">10</h2>
        <p>Tahun Berdiri</p>
    </div>
</div>
<!--  -->
        <!-- Carousel Partner Pendidikan -->
        <div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">

                <!-- Item 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/smkn11.jpg') }}" class="d-block mx-auto" style="max-height: 450px;" alt="Sekolah 1">
                    <h5 class="mt-3">SMKN 1 Blitar</h5>
                </div>

                <!-- Item 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/smki1.jpeg') }}" class="d-block mx-auto" style="max-height: 450px;" alt="Sekolah 2">
                    <h5 class="mt-3">SMK islam 1 Blitar</h5>
                </div>

                <!-- Item 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/smkn1.jpeg') }}" class="d-block mx-auto" style="max-height: 450px;" alt="Sekolah 3">
                    <h5 class="mt-3">MTs 1 Kota Blitar</h5>
                </div>

            </div>

            <!-- Tombol Navigasi -->
            <button class="carousel-control-prev" type="button" data-bs-target="#partnerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#partnerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <!-- 4. Formulir Pendaftaran Cepat -->
<div class="mt-5 p-4 rounded shadow" style="background: linear-gradient(135deg, #1a4d2e, #1f8a4b); color: white;">
    <h3 class="text-center fw-bold mb-3">Formulir Pendaftaran Cepat</h3>
    <form id="waForm">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
        </div>
        <div class="mb-3">
            <label for="hp" class="form-label">Nomor HP / WhatsApp</label>
            <input type="tel" class="form-control" id="hp" name="hp" placeholder="Masukkan nomor HP" required>
        </div>
        <div class="mb-3">
            <label for="asal" class="form-label">Asal Sekolah</label>
            <input type="text" class="form-control" id="asal" name="asal" placeholder="Masukkan asal sekolah" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-light fw-bold">
                Kirim ke WhatsApp
            </button>
        </div>
    </form>
</div>

<script>
document.getElementById('waForm').addEventListener('submit', function(e) {
    e.preventDefault(); // supaya tidak reload halaman

    // Ambil data dari input
    let nama = document.getElementById('nama').value;
    let hp = document.getElementById('hp').value;
    let asal = document.getElementById('asal').value;

    // Format pesan untuk WA
    let pesan = `Assalamualaikum wr. wb., saya ingin mendaftar.%0A%0ANama Lengkap: ${nama}%0ANomor HP: ${hp}%0AAsal Sekolah: ${asal}`;

    // Nomor WA tujuan (format internasional tanpa +)
    let nomor = "6285764269170";

    // Buat link WhatsApp
    let url = `https://wa.me/${nomor}?text=${pesan}`;

    // Buka di tab baru
    window.open(url, '_blank');
});
</script>

    </div>

    
</section>
@endsection
