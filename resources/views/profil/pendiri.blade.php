@extends('layouts.layouts')

@section('content')

<section id="berita" style="margin-top: 100px;" class="py-5">
    <div class="container ">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Profil Pendiri Pondok Pesantren Moden Hidayatullah</h2>

                <div class="container mt-4">
    <h1>Profil Pendiri</h1>
    <p style="margin-bottom: 50px;">Berikut adalah para Pendiri kami:</p>

    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/pendiri1.jpg') }}" class="card-img-top mx-auto" style=" object-fit: cover; object-position: 30% 20%;" alt="Asatid 1">
                <div class="card-body">
                    <h5 class="card-title">KH. Drs. SUKRI ALFI, MM.</h5>
                    <p class="card-text">Biodata KH. Drs. SUKRI ALFI, MM.</p>
                    <a href="{{ route('profilpendiri.show', ['id' => 1]) }}"
                    class="text-decoration-none text-success">Selengkapnya</a>
                </div>
            </div>
        </div>

    </div>
</div>
            </div>
</section>

@endsection