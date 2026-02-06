@extends('layouts.app')

@section('content')
<div class="container py-5">

  <h2 class="fw-bold text-success mb-4 text-center">
    Galeri Santri
  </h2>

  @forelse ($photos as $date => $items)
    <h6 class="fw-semibold text-muted mb-3">
      {{ $date }}
    </h6>

    <div class="row g-2 mb-4">
      @foreach ($items as $photo)
        <div class="col-4 col-md-3 col-lg-2">
<a href="{{ route('album.show', $photo->id) }}">
            <img
              src="{{ asset('storage/'.$photo->media) }}"
              class="img-fluid rounded shadow-sm gallery-img"
              loading="lazy"
            >
          </a>
        </div>
      @endforeach
    </div>
  @empty
    <div class="text-center text-muted py-5">
      <i class="bi bi-images display-6 d-block mb-3"></i>
      <p>Belum ada foto di galeri.</p>
    </div>
  @endforelse

</div>

<style>
.gallery-img{
  aspect-ratio:1/1;
  object-fit:cover;
  transition:.2s;
}
.gallery-img:hover{
  transform:scale(1.05);
}
</style>
@endsection
