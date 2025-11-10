@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px; padding-bottom: 50px; padding-top: 50px;">
    <div class="container mt-4">
    <h3 class="mb-4" style="text-align: center;">Daftar Kritik & Saran</h3>
    <a href="{{ route('dashboard') }}" class="btn btn-success mb-3">Dashboard Admin</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->pesan }}</td>
                <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                <td>
                    <form action="{{ route('admin.kritik.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada kritik & saran</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $data->links() }}
</div>
    </section>

@endsection