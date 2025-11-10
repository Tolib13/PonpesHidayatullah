@extends('layouts.layouts')

@section('content')
<section class="py-5" style="margin-top: 50px;">
        <div class="container col-xxl-8">
<div class="container mt-5">
    <h3 class="fw-bold" style="text-align: center;">Edit Kalam</h3>
    <form action="{{ route('admin.kalam.update', $kalam->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" value="{{ $kalam->judul }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gambar (opsional)</label>
            @if($kalam->gambar)
                <img src="{{ asset('storage/'.$kalam->gambar) }}" width="120" class="d-block mb-2">
            @endif
            <input type="file" name="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="5" required>{{ $kalam->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.kalam.index') }}" class="btn btn-secondary">← Kembali</a>
    </form>
</div>
        </div>
</section>
@endsection
