@extends('layouts.app')

@section('content')
<div class="container py-4">

    <h3 class="mb-4 fw-bold">Buat Notifikasi Baru</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan!</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form action="{{ route('notification.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Judul Notifikasi
                    </label>
                    <input
                        type="text"
                        name="title"
                        class="form-control"
                        value="{{ old('title') }}"
                        placeholder="Contoh: Pengumuman Penting"
                    >
                </div>

                {{-- PESAN --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Pesan
                    </label>
                    <textarea
                        name="message"
                        class="form-control"
                        rows="4"
                        placeholder="Isi pesan notifikasi..."
                    >{{ old('message') }}</textarea>
                </div>

                {{-- GAMBAR --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Upload Foto (Opsional)
                    </label>
                    <input
                        type="file"
                        name="image"
                        class="form-control"
                        accept="image/*"
                    >
                    <small class="text-muted">
                        Maksimal 2MB (jpg, png, jpeg)
                    </small>
                </div>

                {{-- SUBMIT --}}
                <div class="mt-4">
                    <button type="submit" class="btn btn-success px-4">
                        Kirim Notifikasi
                    </button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary ms-2">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
