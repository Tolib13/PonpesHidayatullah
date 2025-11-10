@extends('layouts.layouts')

@section('content')
<section class="py-5" style="margin-top: 50px;">
        <div class="container col-xxl-8">
<div class="container mt-5">
    <h3 class="fw-bold" style="text-align: center;">Tambah Kalam</h3>
    <form action="{{ route('admin.kalam.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gambar (opsional)</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.kalam.index') }}" class="btn btn-secondary">← Kembali</a>
    </form>
</div>
        </div>
</section>
@endsection
