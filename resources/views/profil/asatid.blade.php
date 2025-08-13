@extends('layouts.layouts')

@section('content')

<section id="asatid" style="margin-top: 100px;" class="py-5">
    <div class="container ">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Profil Asatid Pondok Pesantren Moden Hidayatullah</h2>

                <div class="container mt-4">
    <h1>Profil Asatid </h1>
    <p style="margin-bottom: 50px;">Berikut adalah para Asatid kami:</p>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/il-berita-02.png') }}" class="card-img-top mx-auto" alt="Asatid 1">
                <div class="card-body">
                    <h5 class="card-title">MIFTAKUL HUDA, S.Pd.</h5>
                    <p class="card-text">Deskripsi singkat atau biodata singkat dari pendiri 1.</p>
                    <a href="{{ route('profil.show', ['id' => 1]) }}" class="text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/il-berita-01.png') }}" class="card-img-top" alt="Asatid 2">
                <div class="card-body">
                    <h5 class="card-title">ZAINAL QOMARI, S. Pd</h5>
                    <p class="card-text">Deskripsi singkat atau biodata singkat dari pendiri 2.</p>
                    <a href="{{ route('profil.show', ['id' => 2]) }}" class="text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/il-berita-01.png') }}" class="card-img-top" alt="Asatid 3">
                <div class="card-body">
                    <h5 class="card-title">Dr. MOH. BADRUL MUNIR, S. Pd., M. Pd.</h5>
                    <p class="card-text">Deskripsi singkat atau biodata singkat dari pendiri 3.</p>
                    <a href="{{ route('profil.show', ['id' => 3]) }}" class="text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/il-berita-01.png') }}" class="card-img-top" alt="asatid 4">
                <div class="card-body">
                    <h5 class="card-title">TASDIQ HASIM</h5>
                    <p class="card-text">Deskripsi singkat atau biodata singkat dari pendiri 3.</p>
                    <a href="{{ route('profil.show', ['id' => 4]) }}" class="text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/il-berita-01.png') }}" class="card-img-top" alt="asatid 5">
                <div class="card-body">
                    <h5 class="card-title">RISQY NASHIHUN AMIN</h5>
                    <p class="card-text">Deskripsi singkat atau biodata singkat dari pendiri 3.</p>
                    <a href="{{ route('profil.show', ['id' => 5]) }}" class="text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/il-berita-01.png') }}" class="card-img-top" alt="asatid 6">
                <div class="card-body">
                    <h5 class="card-title">MOH. FAHMI AWALUDIN, S.Pd., M.Pd. </h5>
                    <p class="card-text">Deskripsi singkat atau biodata singkat dari pendiri 3.</p>
                    <a href="{{ route('profil.show', ['id' => 6]) }}" class="text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/il-berita-01.png') }}" class="card-img-top" alt="asatid 7">
                <div class="card-body">
                    <h5 class="card-title">KHOIRUL ANWAR, S.Pd.</h5>
                    <p class="card-text">Deskripsi singkat atau biodata singkat dari pendiri 3.</p>
                    <a href="{{ route('profil.show', ['id' => 7]) }}" class="text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/il-berita-01.png') }}" class="card-img-top" alt="asatid 8">
                <div class="card-body">
                    <h5 class="card-title">BINTI NURIYAH</h5>
                    <p class="card-text">Deskripsi singkat atau biodata singkat dari pendiri 3.</p>
                    <a href="{{ route('profil.show', ['id' => 8]) }}" class="text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
</section>

@endsection