@extends('layouts.layouts')

@section('content')

<section id="detailasatid" style="margin-top: 100px;" class="py-5">
    <div class="container col-xxl-8">
        <div class="d-flex mb-3">
           <a href="/">Home</a> / <a href="/profil/pendiri">Pendiri</a> / Profile Pendiri
        </div>
        <img src="{{ asset('assets/images/' .$profilpendiri['gambar']) }}" class="img-fluid" alt="{{ $profilpendiri['nama'] }}">
                    <div class="konten-berita">
                        <h4 class="fw-bold mb-3 mt-3">{{ $profilpendiri['nama'] }}</h4>
                        <p class="text-secondary">Tempat Tanggal Lahir : {{ $profilpendiri['tanggal'] }}</p>
                        <p class="text-secondary">{!! $profilpendiri['deskripsi'] !!}</p>
                    </div>
    </div>
</section>

@endsection