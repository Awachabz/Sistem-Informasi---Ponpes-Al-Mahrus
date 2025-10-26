@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h3 class="mb-4">Daftar Pengguna Terdaftar</h3>

  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <table class="table table-striped table-bordered align-middle">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Tanggal Daftar</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as $index => $user)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <span class="badge bg-{{ $user->role === 'admin' ? 'primary' : 'secondary' }}">
              {{ ucfirst($user->role) }}
            </span>
          </td>
          <td>
            <span class="badge bg-{{ $user->status === 'active' ? 'success' : 'warning' }}">
              {{ ucfirst($user->status) }}
            </span>
          </td>
          <td>{{ $user->created_at->format('d M Y') }}</td>
          <td>
            @if ($user->status !== 'active')
              <form action="{{ route('admin.approve', $user->id) }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-success btn-sm">Aktifkan</button>
              </form>
            @endif

            <form action="{{ route('admin.delete', $user->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus user ini?')">Hapus</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="7" class="text-center">Belum ada pengguna terdaftar.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
