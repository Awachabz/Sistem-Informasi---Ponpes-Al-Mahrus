@extends('layouts.app')

@section('content')
<style>
  .struktur-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
    position: relative;
  }

  .leader, .deputy, .divisions {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 25px;
    width: 100%;
    position: relative;
  }

  .album-card {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 3px 10px rgba(0,0,0,.1);
    overflow: hidden;
    text-align: center;
    width: 220px;
    position: relative;
  }

  .album-photo img {
    width: 100%;
    height: 220px;
    object-fit: cover;
  }

  .album-info { padding: 12px; }

  .division {
    font-weight: 700;
    color: #198754;
  }

  .admin-controls { margin-top: 10px; }

  .add-card {
    border: 2px dashed #198754;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #198754;
    font-weight: bold;
    cursor: pointer;
    position: relative;
    z-index: 20;
  }

  .line {
    width: 2px;
    height: 30px;
    background: #198754;
    pointer-events: none;
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

    {{-- ================= PIMPINAN ================= --}}
    @if($leader)
    <div class="leader">
      <div class="album-card">
        <div class="album-photo">
          <img src="{{ $leader->photo ? asset('storage/'.$leader->photo) : asset('images/default-user.png') }}">
        </div>
        <div class="album-info">
          <div class="division">{{ $leader->division }}</div>
          <div class="name">{{ $leader->name }}</div>

          @if(Auth::check() && strtolower(Auth::user()->role)==='admin')
          <div class="admin-controls">
            <form method="POST" action="{{ route('struktur.update',$leader->id) }}" enctype="multipart/form-data">
              @csrf @method('PUT')
              <input class="form-control form-control-sm mb-1" name="division" value="{{ $leader->division }}">
              <input class="form-control form-control-sm mb-1" name="name" value="{{ $leader->name }}">
              <input class="form-control form-control-sm mb-2" type="file" name="photo">
              <button class="btn btn-success btn-sm w-100 mb-1">Update</button>
            </form>

            <form method="POST" action="{{ route('struktur.destroy',$leader->id) }}"
                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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

    {{-- ================= WAKIL ================= --}}
    @if($deputy)
    <div class="deputy">
      <div class="album-card">
        <div class="album-photo">
          <img src="{{ $deputy->photo ? asset('storage/'.$deputy->photo) : asset('images/default-user.png') }}">
        </div>
        <div class="album-info">
          <div class="division">{{ $deputy->division }}</div>
          <div class="name">{{ $deputy->name }}</div>

          @if(Auth::check() && strtolower(Auth::user()->role)==='admin')
          <div class="admin-controls">
            <form method="POST" action="{{ route('struktur.update',$deputy->id) }}" enctype="multipart/form-data">
              @csrf @method('PUT')
              <input class="form-control form-control-sm mb-1" name="division" value="{{ $deputy->division }}">
              <input class="form-control form-control-sm mb-1" name="name" value="{{ $deputy->name }}">
              <input class="form-control form-control-sm mb-2" type="file" name="photo">
              <button class="btn btn-success btn-sm w-100 mb-1">Update</button>
            </form>

            <form method="POST" action="{{ route('struktur.destroy',$deputy->id) }}"
                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
              @csrf @method('DELETE')
              <button class="btn btn-danger btn-sm w-100">Hapus</button>
            </form>
          </div>
          @endif
        </div>
      </div>
    </div>
    @endif

    {{-- ================= ANGGOTA ================= --}}
    <div class="divisions">
      @foreach($others as $member)
      <div class="album-card">
        <div class="album-photo">
          <img src="{{ $member->photo ? asset('storage/'.$member->photo) : asset('images/default-user.png') }}">
        </div>
        <div class="album-info">
          <div class="division">{{ $member->division }}</div>
          <div class="name">{{ $member->name }}</div>

          @if(Auth::check() && strtolower(Auth::user()->role)==='admin')
          <div class="admin-controls">
            <form method="POST" action="{{ route('struktur.update',$member->id) }}" enctype="multipart/form-data">
              @csrf @method('PUT')
              <input class="form-control form-control-sm mb-1" name="division" value="{{ $member->division }}">
              <input class="form-control form-control-sm mb-1" name="name" value="{{ $member->name }}">
              <input class="form-control form-control-sm mb-2" type="file" name="photo">
              <button class="btn btn-success btn-sm w-100 mb-1">Update</button>
            </form>

            <form method="POST" action="{{ route('struktur.destroy',$member->id) }}"
                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
              @csrf @method('DELETE')
              <button class="btn btn-danger btn-sm w-100">Hapus</button>
            </form>
          </div>
          @endif
        </div>
      </div>
      @endforeach

      @if(Auth::check() && strtolower(Auth::user()->role)==='admin')
      <div class="album-card add-card"
           data-bs-toggle="modal"
           data-bs-target="#addModal">
        + Tambah Anggota
      </div>
      @endif
    </div>
  </div>
</div>

{{-- ================= MODAL TAMBAH ================= --}}
<div class="modal fade" id="addModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="{{ route('struktur.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title">Tambah Anggota</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input class="form-control mb-2" name="division" placeholder="Jabatan" required>
          <input class="form-control mb-2" name="name" placeholder="Nama" required>
          <input class="form-control" type="file" name="photo">
        </div>
        <div class="modal-footer">
          <button class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
