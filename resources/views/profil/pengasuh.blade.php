@extends('layouts.layouts')

@section('content')

<section id="berita" style="margin-top: 100px;" class="py-5">
    <div class="container ">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Profil Pengasuh Pondok Pesantren Moden Hidayatullah</h2>

                <div class="container mt-4">
    <h1>Profil Pengasuh</h1>
    <p style="margin-bottom: 50px;">Berikut adalah para Pengasuh kami:</p>

    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/pengasuh1.jpg') }}" class="card-img-top mx-auto" alt="Asatid 1">
                <div class="card-body">
                    <h5 class="card-title">KH. M ABD ROUF, Lc., Grad Dip., MA.</h5>
                    <p style="text-align: justify;" class="card-text">KH. M. Abd. Rouf, Lc, MA. selanjutnya disebut Ustadz Abd. Rouf adalah seorang Kiai Muda dan cendekiawan muslim yang lahir di Blitar pada tanggal 3 Juli 1987. </p>
                    <a href="{{ route('profilpengasuh.show', ['id' => 1]) }}" class="text-decoration-none text-success">Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
         <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/pengasuh2.jpg') }}" class="card-img-top mx-auto" alt="Asatid 1">
                <div class="card-body">
                    <h5 class="card-title">Nyai Hj. ULFA FIKRIA PUTRI, S. Ag., S. Farm., M. Farm. Klin., Apt.</h5>
                    <p class="card-text" style="text-align: justify;">Nyai Hj. Ulfa Fikria Putri, S. Ag., S. Farm., M. Farm. Klin., Apt. adalah seorang cendekiawan muslimah yang lahir di Kediri pada tanggal 12 Januari 1992. </p>
                    <a href="{{ route('profilpengasuh.show', ['id' => 2]) }}" class="text-decoration-none text-success">Selengkapnya</a>
                </div>
            </div>
        </div>

    </div>
</div>
            </div>
</section>

@endsection