@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px;">
        <div class="container col-xxl-8 py-5">
            <h3 class="fw-bold mb-3">Dashboard Admin Ponpes Hidayatullah</h3>
            <p>selamat datang di halaman dashboard admin Ponpes Hidayatullah</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/il-berita-01.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Blog Artikel</h5>
                                    <p class="card-text">Atur dan kelola artikel kegiatan pondok pesantren</p>
                                <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/il-photo-01.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Photo Kegiatan</h5>
                                    <p class="card-text">Atur dan kelola Foto kegiatan pondok pesantren</p>
                                <a href="{{ route('photo') }}" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                </div>

                 <!-- <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/il-photo-03.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Video Kegiatan</h5>
                                    <p class="card-text">Atur dan kelola Video kegiatan pondok pesantren</p>
                                <a href="{{ route('video') }}" class="btn btn-primary">Detail</a>
                                </div>
                            </div> -->
                </div>
            </div>
        </div>
    </section>
@endsection