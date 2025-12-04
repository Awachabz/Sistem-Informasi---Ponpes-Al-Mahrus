@extends('layouts.app')

@section('content')
<div class="container py-5" style="max-width: 700px;">
  <h3 class="fw-bold text-success mb-4 text-center">Edit Postingan</h3>

  <div class="card shadow-sm">
    <div class="card-body">
      <form action="{{ route('album.update', $album->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Caption -->
        <div class="mb-3">
          <label for="caption" class="form-label fw-bold">Teks / Status</label>
          <textarea name="caption" id="caption" class="form-control" rows="4" required>{{ old('caption', $album->caption) }}</textarea>
        </div>

        <!-- Media -->
        <div class="mb-3">
          <label class="form-label fw-bold">Media Saat Ini</label><br>
          @if($album->media)
            @if(Str::endsWith($album->media, ['.jpg', '.jpeg', '.png']))
              <img src="{{ asset('storage/'.$album->media) }}" class="img-fluid rounded mb-3" style="max-height: 250px;">
            @elseif(Str::endsWith($album->media, ['.mp4', '.mov', '.avi']))
              <video controls class="w-100 rounded mb-3" style="max-height: 250px;">
                <source src="{{ asset('storage/'.$album->media) }}">
              </video>
            @endif
          @else
            <p class="text-muted">Tidak ada media.</p>
          @endif
        </div>

        <!-- Upload baru -->
        <div class="mb-3">
          <label for="media" class="form-label fw-bold">Ganti Media (opsional)</label>
          <input type="file" name="media" id="media" class="form-control">
        </div>

        <div class="d-flex justify-content-between">
          <a href="{{ route('album.index') }}" class="btn btn-outline-secondary">Batal</a>
          <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
