@extends('layouts.app')

@section('content')
<div class="container py-4">

    <h3 class="mb-4">Profil Saya</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="row">

        <!-- FOTO PROFIL -->
        <div class="col-md-4 text-center">

            <img src="{{ Auth::user()->profil_photo ? asset('profil/' . Auth::user()->profil_photo) : asset('images/default.png') }}"
                 class="rounded-circle mb-3"
                 style="width:150px; height:150px; object-fit:cover;">

            <!-- FORM UPDATE FOTO -->
            <form action="{{ route('profil.photo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="photo" class="form-control mb-2">
                <button class="btn btn-success w-100">Update Foto</button>
            </form>

        </div>

        <!-- EDIT NAMA -->
        <div class="col-md-8">

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5>Edit Profil</h5>

                    <!-- FORM UPDATE NAMA -->
                    <form action="{{ route('profil.update') }}" method="POST">
                        @csrf

                        <div class="mb-3 mt-3">
                            <label class="form-label">Nama Pengguna</label>
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                        </div>

                        <button class="btn btn-primary w-100">Simpan Perubahan</button>
                    </form>
                </div>
            </div>

            <!-- GANTI PASSWORD -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Ganti Password</h5>

                    <form action="{{ route('profil.password') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Password Lama</label>
                            <input type="password" name="current_password" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Password Baru</label>
                            <input type="password" name="new_password" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Konfirmasi Password Baru</label>
                            <input type="password" name="new_password_confirmation" class="form-control">
                        </div>

                        <button class="btn btn-warning w-100">Update Password</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
