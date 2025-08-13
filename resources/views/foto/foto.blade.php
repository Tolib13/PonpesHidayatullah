@extends('layouts.layouts')

@section('content')
    <section id="foto" style="margin-top: 100px;" class="section-foto parallax" data-aos="zoom-in-up">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex align-items-center">
                <div class="stripe-putih me-2"></div>
                <h5 class="fw-bold text-white"> Foto Kegiatan</h5>
            </div>
            <div>
            </div>
        </div>

        <div class="row ">
        @foreach($photos as $photo)
            <div class="col-lg-3 col-md-6 col-6">
                <a class="image-link" href="{{ asset('storage/photo/' . $photo->image) }}">
                    <img src="{{ asset('storage/photo/' . $photo->image) }}" class="img-fluid" alt="">
                </a>
                <p>{{ $photo->judul }}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection