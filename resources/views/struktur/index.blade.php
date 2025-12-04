@extends('layouts.app')

@section('content')
<style>
  .struktur-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
  }

  .leader, .deputy, .divisions {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 25px;
    width: 100%;
  }

  .album-card {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: center;
    width: 220px;
    transition: transform 0.2s ease;
  }

  .album-card:hover {
    transform: translateY(-5px);
  }

  .album-photo img {
    width: 100%;
    height: 220px;
    object-fit: cover;
  }

  .album-info {
    padding: 12px;
  }

  .album-info .division {
    font-weight: 700;
    color: #198754;
    font-size: 15px;
  }

  .album-info .name {
    font-size: 16px;
  }

  .admin-controls {
    margin-top: 10px;
  }

  .add-card {
    border: 2px dashed #198754;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #198754;
    font-weight: bold;
    transition: 0.2s;
  }

  .add-card:hover {
    background: #198754;
    color: white;
    cursor: pointer;
  }

  .line {
    width: 2px;
    height: 30px;
    background: #198754;
  }
</style>

<div class="container py-5">
  <h3 class="fw-bold text-center mb-4 text-success">
    Struktur Kepengurusan<br>Ponpes Al-Mahrus
  </h3>

  <div class="struktur-container">
    @php
      $leader = $members->first();
      $deputy = $members->skip(1)->first();
      $others = $members->skip(2);
    @endphp

    {{-- ========================= --}}
    {{--        PIMPINAN           --}}
    {{-- ========================= --}}
    @if($leader)
    <div class="leader">
      <div class="album-card">
        <div class="album-photo">
          <img src="{{ $leader->photo ? asset('storage/' . $leader->photo) : asset('images/default-user.png') }}">
        </div>
        <div class="album-info">
          <div class="division">{{ $leader->division ?? 'Pemimpin Ponpes' }}</div>
          <div class="name">{{ $leader->name }}</div>

          @if(Auth::check() && Auth::user()->role === 'admin')
            <div class="admin-controls">

              {{-- UPDATE --}}
              <form action="{{ route('struktur.update', $leader->id) }}" method="POST" enctype="multipart/form-data" class="mb-2">
                @csrf @method('PUT')
                <input type="text" name="division" value="{{ $leader->division }}" class="form-control form-control-sm mb-1">
                <input type="text" name="name" value="{{ $leader->name }}" class="form-control form-control-sm mb-1">
                <input type="file" name="photo" class="form-control form-control-sm mb-1">
                <button class="btn btn-success btn-sm w-100">Update</button>
              </form>

              {{-- DELETE --}}
              <form action="{{ route('struktur.destroy', $leader->id) }}" method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus?')">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm w-100">Hapus</button>
              </form>

            </div>
          @endif
        </div>
      </div>
    </div>
    @endif

    @if($deputy)
      <div class="line"></div>
    @endif

    {{-- ========================= --}}
    {{--        WAKIL              --}}
    {{-- ========================= --}}
    @if($deputy)
    <div class="deputy">
      <div class="album-card">
        <div class="album-photo">
          <img src="{{ $deputy->photo ? asset('storage/' . $deputy->photo) : asset('images/default-user.png') }}">
        </div>
        <div class="album-info">
          <div class="division">{{ $deputy->division ?? 'Wakil Pemimpin' }}</div>
          <div class="name">{{ $deputy->name }}</div>

          @if(Auth::check() && Auth::user()->role === 'admin')
            <div class="admin-controls">

              <form action="{{ route('struktur.update', $deputy->id) }}" method="POST" enctype="multipart/form-data" class="mb-2">
                @csrf @method('PUT')
                <input type="text" name="division" value="{{ $deputy->division }}" class="form-control form-control-sm mb-1">
                <input type="text" name="name" value="{{ $deputy->name }}" class="form-control form-control-sm mb-1">
                <input type="file" name="photo" class="form-control form-control-sm mb-1">
                <button class="btn btn-success btn-sm w-100">Update</button>
              </form>

              <form action="{{ route('struktur.destroy', $deputy->id) }}" method="POST"
                    onsubmit="return confirm('Hapus anggota ini?')">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm w-100">Hapus</button>
              </form>

            </div>
          @endif
        </div>
      </div>
    </div>
    @endif

    @if(($others?->count() ?? 0) > 0)
      <div class="line"></div>
    @endif


    {{-- ========================= --}}
    {{--        DIVISI LAIN        --}}
    {{-- ========================= --}}
    <div class="divisions">

      @foreach($others as $member)
      <div class="album-card">
        <div class="album-photo">
          <img src="{{ $member->photo ? asset('storage/' . $member->photo) : asset('images/default-user.png') }}">
        </div>
        <div class="album-info">
          <div class="division">{{ $member->division }}</div>
          <div class="name">{{ $member->name }}</div>

          @if(Auth::check() && Auth::user()->role === 'admin')
            <div class="admin-controls">

              {{-- UPDATE --}}
              <form action="{{ route('struktur.update', $member->id) }}" method="POST" enctype="multipart/form-data" class="mb-2">
                @csrf @method('PUT')
                <input type="text" name="division" value="{{ $member->division }}" class="form-control form-control-sm mb-1">
                <input type="text" name="name" value="{{ $member->name }}" class="form-control form-control-sm mb-1">
                <input type="file" name="photo" class="form-control form-control-sm mb-1">
                <button class="btn btn-success btn-sm w-100">Update</button>
              </form>

              {{-- DELETE --}}
              <form action="{{ route('struktur.destroy', $member->id) }}" method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus anggota ini?')">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm w-100">Hapus</button>
              </form>

              {{-- BUTTON TAMBAH ANAK --}}
              <button class="btn btn-primary btn-sm w-100 mt-1"
                      data-bs-toggle="modal" data-bs-target="#addChildModal{{ $member->id }}">
                Tambah Anak Divisi
              </button>

            </div>
          @endif
        </div>
      </div>
      @endforeach


      {{-- CARD TAMBAH ANGGOTA --}}
      @if(Auth::check() && Auth::user()->role === 'admin')
      <div class="album-card add-card" data-bs-toggle="modal" data-bs-target="#addModal">
        + Tambah Anggota
      </div>
      @endif

    </div>
  </div>
</div>


{{-- =============================== --}}
{{--   MODAL TAMBAH ANAK DIVISI      --}}
{{-- =============================== --}}
@foreach($others as $member)
<div class="modal fade" id="addChildModal{{ $member->id }}" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="{{ route('struktur.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="modal-header">
          <h5 class="modal-title">Tambah Anak Divisi untuk {{ $member->division }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="parent_id" value="{{ $member->id }}">

          <div class="mb-3">
            <label class="form-label">Divisi</label>
            <input type="text" name="division" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" name="photo" class="form-control" accept="image/*">
          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-success">Simpan</button>
        </div>

      </form>

    </div>
  </div>
</div>
@endforeach


{{-- =============================== --}}
{{--     MODAL TAMBAH ANGGOTA       --}}
{{-- =============================== --}}
@if(Auth::check() && Auth::user()->role === 'admin')
<div class="modal fade" id="addModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="{{ route('struktur.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="modal-header">
          <h5 class="modal-title">Tambah Anggota Struktur</h5>
          <button class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Divisi</label>
            <input type="text" name="division" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" name="photo" class="form-control" accept="image/*">
          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-success">Simpan</button>
        </div>

      </form>

    </div>
  </div>
</div>
@endif

@endsection
