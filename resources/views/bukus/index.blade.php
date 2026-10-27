@extends('layouts.main')

@section('title', 'Daftar Buku')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Daftar Buku</h2>
    <a href="{{ route('bukus.create') }}" class="btn btn-primary">Tambah Buku</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>ISBN</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($bukus as $buku)
                    <tr>
                        <td>{{ $bukus->firstItem() + $loop->index }}</td>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->penulis }}</td>
                        <td>{{ $buku->penerbit }}</td>
                        <td>{{ $buku->tahun_terbit }}</td>
                        <td>{{ $buku->isbn }}</td>
                        <td>{{ $buku->stok }}</td>
                        <td>
                            <a href="{{ route('bukus.show', $buku) }}" class="btn btn-info btn-sm">Detail</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Belum ada data buku.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $bukus->links() }}
    </div>
</div>
@endsection
