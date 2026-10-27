@extends('layouts.main')

@section('title', 'Detail Buku')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Detail Buku</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <tr>
                <th>Judul</th>
                <td>{{ $buku->judul }}</td>
            </tr>
            <tr>
                <th>Penulis</th>
                <td>{{ $buku->penulis }}</td>
            </tr>
            <tr>
                <th>Penerbit</th>
                <td>{{ $buku->penerbit }}</td>
            </tr>
            <tr>
                <th>Tahun Terbit</th>
                <td>{{ $buku->tahun_terbit }}</td>
            </tr>
            <tr>
                <th>ISBN</th>
                <td>{{ $buku->isbn }}</td>
            </tr>
            <tr>
                <th>Stok</th>
                <td>{{ $buku->stok }}</td>
            </tr>
        </table>

        <a href="{{ route('bukus.index') }}" class="btn btn-secondary">
            Kembali
        </a>

        <a href="{{ route('bukus.edit', $buku) }}" class="btn btn-warning">
            Edit
        </a>
    </div>
</div>
@endsection
