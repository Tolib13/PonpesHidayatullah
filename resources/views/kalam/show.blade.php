@extends('layouts.layouts')

@section('content')
<section class="mb-5" style="margin-top: 150px;">
    <div class="container col-lg-8">
        <span class="text-muted small">{{ $kalam->created_at->format('d M Y') }}</span>
        <span class="badge bg-primary ms-2">Kalam Hikmah</span>

        <h2 class="mt-3">{{ $kalam->judul }}</h2>

          @if($kalam->gambar)
                <img src="{{ asset('storage/'.$kalam->gambar) }}" 
                    class="img-fluid my-2" 
                    alt="{{ $kalam->judul }}"
                    style="max-width: 500px; height: auto;">
                @endif

        <div class="fst-italic mb-3 text-justify" style="font-size: 1.1rem;">
            {!! nl2br(e($kalam->deskripsi)) !!}
        </div>

          {{-- Tombol Share --}}
        <div class="mt-4">
            <h6 class="fw-bold">Bagikan:</h6>
            @php
                $url = urlencode(request()->fullUrl());
                $text = urlencode($kalam->judul);
            @endphp

            <a href="https://wa.me/?text={{ $text }}%20{{ $url }}" 
               target="_blank" 
               class="btn btn-success btn-sm me-2">
                <i class="bi bi-whatsapp"></i> WhatsApp
            </a>

        </div>
        <a href="{{ route('kalam') }}" class="btn btn-outline-secondary mt-4">← Kembali</a>
    </div>
</section>
@endsection
