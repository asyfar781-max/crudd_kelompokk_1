@extends('layouts.main')

@section('title', 'Edit Buku')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Buku</h4>
    </div>

    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('bukus.update', $buku) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" name="judul" class="form-control"
                       value="{{ old('judul', $buku->judul) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control"
                       value="{{ old('penulis', $buku->penulis) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Penerbit</label>
                <input type="text" name="penerbit" class="form-control"
                       value="{{ old('penerbit', $buku->penerbit) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" class="form-control"
                       value="{{ old('tahun_terbit', $buku->tahun_terbit) }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">ISBN</label>
                <input type="text" name="isbn" class="form-control"
                       value="{{ old('isbn', $buku->isbn) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control"
                       value="{{ old('stok', $buku->stok) }}"
                       min="0" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('bukus.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
</div>
@endsection
