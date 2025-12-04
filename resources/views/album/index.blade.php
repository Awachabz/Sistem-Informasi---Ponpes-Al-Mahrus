@extends('layouts.app')

@section('content')
<div class="container py-5">

  <h2 class="text-success fw-bold mb-4">Album Pondok</h2>

  {{-- ✅ Form Upload --}}
  <div class="card shadow-sm mb-4">
    <div class="card-body">
      <form action="{{ route('album.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea name="caption" class="form-control mb-2" rows="3" placeholder="Apa yang sedang kamu pikirkan?"></textarea>
        <input type="file" name="media" class="form-control mb-3" accept="image/*,video/*">
        <button type="submit" class="btn btn-success w-100">Unggah</button>
      </form>
    </div>
  </div>

  {{-- ✅ Timeline Album --}}
  @foreach($albums as $post)
  <div class="card mb-4 shadow-sm">
    <div class="card-body">
      <div class="d-flex align-items-center mb-2">
        <img src="{{ asset('images/default-user.png') }}" alt="User" class="rounded-circle me-3" width="45" height="45">
        <div>
          <strong>{{ $post->user->name }}</strong><br>
          <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
        </div>
      </div>

      @if($post->caption)
        <p>{{ $post->caption }}</p>
      @endif

      @if($post->media)
        @if($post->media_type === 'image')
          <img src="{{ asset('storage/'.$post->media) }}" class="img-fluid rounded mb-2">
        @elseif($post->media_type === 'video')
          <video controls class="w-100 rounded mb-2">
            <source src="{{ asset('storage/'.$post->media) }}" type="video/mp4">
          </video>
        @endif
      @endif
    </div>
  </div>
  @endforeach

</div>
@endsection
