@extends('layouts.layouts')

@section('content')

<section id="detailasatid" style="margin-top: 100px;" class="py-5">
    <div class="container col-xxl-8">
        <div class="d-flex mb-3">
           <a href="/">Home</a> / <a href="/profil/pengasuh">Pengasuh</a> / Profile Pengasuh
        </div>
        <img src="{{ asset('assets/images/' .$profilpengasuh['gambar']) }}" class="img-fluid" alt="{{ $profilpengasuh['nama'] }}">
                    <div class="konten-berita">
                        <h4 class="fw-bold mb-3 mt-3">{{ $profilpengasuh['nama'] }}</h4>
                        <p class="text-secondary">Tempat Tanggal Lahir : {{ $profilpengasuh['tanggal'] }}</p>
                        <p class="text-secondary">{!! $profilpengasuh['deskripsi'] !!}</p>
                    </div>
    </div>
</section>

@endsection