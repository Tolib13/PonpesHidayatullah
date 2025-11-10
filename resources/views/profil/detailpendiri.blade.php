@extends('layouts.layouts')

@section('content')

<section id="detailasatid" style="margin-top: 100px;" class="py-5">
    <div class="container col-xxl-8">
        <div class="d-flex mb-3">
           <a href="/">Home</a> / <a href="/profil/pendiri">Pendiri</a> / Profile Pendiri
        </div>
        <div class="text-center">
            <img src="{{ asset('assets/images/' .$profilpendiri['gambar']) }}" class="img-fluid " style="height: 500px; width: 500px; object-fit: cover; object-position: 38% 20%;" alt="{{ $profilpendiri['nama'] }}">
            <h4 class="fw-bold mb-3 mt-3">{{ $profilpendiri['nama'] }}</h4>
        </div>
                    <div class="konten-berita">
                        
                        <p class="text-black">Tempat Tanggal Lahir : {{ $profilpendiri['tanggal'] }}</p>
                        <p class="text-black">{!! $profilpendiri['deskripsi'] !!}</p>
                    </div>
    </div>
</section>

@endsection