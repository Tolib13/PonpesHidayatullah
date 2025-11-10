@extends('layouts.layouts')

@section('content')
<section class="py-5" style="margin-top: 50px;">
        <div class="container col-xxl-8">
        <div class="container mt-5">
    <h3 class="fw-bold" style="text-align: center;">Daftar Kalam Pengasuh</h3>
    <a href="{{ route('admin.kalam.create') }}" class="btn btn-success mb-3">Tambah Kalam</a>
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">← Kembali</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kalams as $kalam)
            <tr>
                <td>{{ $kalam->judul }}</td>
                <td>
                    @if($kalam->gambar)
                        <img src="{{ asset('storage/'.$kalam->gambar) }}" width="100">
                    @else
                        <span class="text-muted">Tidak ada gambar</span>
                    @endif
                </td>
                <td>{{ Str::limit($kalam->deskripsi, 50) }}</td>
                <td>
                    <a href="{{ route('admin.kalam.edit', $kalam->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.kalam.destroy', $kalam->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $kalams->links() }}
</div>
        </div>
</section>
@endsection
