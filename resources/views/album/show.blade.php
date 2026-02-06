@extends('layouts.app')

@section('content')
<div class="container py-5">

  <a href="{{ route('album') }}" class="btn btn-outline-success mb-3">
    ← Kembali ke Postingan
  </a>

  @include('album._post', ['album' => $album])

</div>
@endsection
