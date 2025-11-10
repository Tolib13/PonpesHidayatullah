@extends('layouts.layouts')

@section('content')
<section class=" mb-5" style="margin-top: 150px;">
    <div class="container col-lg-8">
        <h3 class="fw-bold mb-4 text-center">Kalam Pengasuh</h3>
        @foreach($kalams as $kalam)
            <div class="mb-5 pb-4 border-bottom">
                <span class="text-muted small">{{ $kalam->created_at->format('d M Y') }}</span>
                <span class="badge bg-success ms-2">Kalam Hikmah</span>

                <h4 class="mt-2">{{ $kalam->judul }}</h4>

               @if($kalam->gambar)
                <img src="{{ asset('storage/'.$kalam->gambar) }}" 
                    class="img-fluid my-2" 
                    alt="{{ $kalam->judul }}"
                    style="max-width: 350px; height: auto;">
                @endif

                <p>{{ Str::limit($kalam->deskripsi, 30) }}</p>

                <a href="{{ route('kalam.show', $kalam->id) }}" 
                    class="text-decoration-none fw-bold">
                    Read More →
                </a>
            </div>
        @endforeach

        <div class="d-flex justify-content-center">
            {{ $kalams->links() }}
        </div>
</section>
@endsection
