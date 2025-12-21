@extends('layouts.app')

@section('content')
<div class="container py-4">

    <h3 class="mb-4 fw-bold">Buat Notifikasi Baru</h3>

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Error message --}}
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

                <div class="mb-3">
                    <label class="form-label fw-semibold">Judul Notifikasi (Opsional)</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Pesan (Opsional)</label>
                    <textarea name="message" class="form-control" rows="4">{{ old('message') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Upload Foto (Opsional)</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>

                <button type="submit" class="btn btn-success px-4">
                    Kirim Notifikasi
                </button>

            </form>

        </div>
    </div>

</div>
@endsection
