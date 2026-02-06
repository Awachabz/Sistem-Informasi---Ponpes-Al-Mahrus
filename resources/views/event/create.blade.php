@extends('layouts.app')

@section('content')
<div class="container py-4">
<h4>Buat Acara</h4>

<form method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data">
@csrf

<div class="mb-3">
    <label>Judul Acara</label>
    <input type="text" name="title" class="form-control">
</div>

<div class="mb-3">
    <label>Keterangan</label>
    <textarea name="description" class="form-control"></textarea>
</div>

<div class="mb-3">
    <label>Tanggal & Jam</label>
    <input type="datetime-local" name="event_time" class="form-control">
</div>

<div class="mb-3">
    <label>Foto</label>
    <input type="file" name="image" class="form-control">
</div>

<button class="btn btn-success">Simpan</button>
</form>
</div>
@endsection
