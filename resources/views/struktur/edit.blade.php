@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h3 class="fw-bold text-success mb-4">Edit Struktur: {{ $struktur->jabatan }}</h3>

    <form action="{{ route('struktur.update', $struktur->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $struktur->nama) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control">
            @if ($struktur->foto)
                <img src="{{ asset('storage/'.$struktur->foto) }}" class="mt-3 rounded" width="120">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
