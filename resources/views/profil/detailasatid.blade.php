@extends('layouts.layouts')

@section('content')

<section id="detailasatid" style="margin-top: 100px;" class="py-5">
    <div class="container col-xxl-8">
        <div class="d-flex mb-3">
           <a href="/">Home</a> / <a href="/profil/asatid">Asatid</a> / Profile Asatid
        </div>
        <img src="{{ asset('assets/images/' .$profil['gambar']) }}" class="img-fluid" alt="{{ $profil['nama'] }}">
                    <div class="konten-berita">
                        <h4 class="fw-bold mb-3 mt-3">{{ $profil['nama'] }}</h4>
                        <p class="text-black">Tempat Tanggal Lahir : {{ $profil['tanggal'] }}</p>
                        <p class="text-black" style=" text-align: justify;">{!! $profil['deskripsi'] !!}</p>
                    </div>
    </div>
</section>

@endsection