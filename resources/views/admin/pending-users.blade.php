@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h3>Verifikasi Akun Baru</h3>
  <table class="table table-bordered mt-3">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Tanggal Daftar</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at->format('d M Y') }}</td>
        <td>
          <form action="{{ route('admin.approve', $user->id) }}" method="POST" class="d-inline">
            @csrf
            <button class="btn btn-success btn-sm">Acc</button>
          </form>
          <form action="{{ route('admin.delete', $user->id) }}" method="POST" class="d-inline">
            @csrf @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
          </form>
        </td>
      </tr>
      @empty
      <tr><td colspan="4" class="text-center">Tidak ada akun menunggu persetujuan.</td></tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
