@extends('layouts.app')

@section('content')
<div class="container py-4">

    <h3 class="fw-bold mb-4">✏️ Edit Acara</h3>

    <form action="{{ route('event.update', $event->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        {{-- JUDUL --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Judul Acara</label>
            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ old('title', $event->title) }}"
                   required>
        </div>

        {{-- KETERANGAN --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Keterangan</label>
            <textarea name="description"
                      class="form-control"
                      rows="4"
                      required>{{ old('description', $event->description) }}</textarea>
        </div>

        {{-- TANGGAL & JAM --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Tanggal & Jam Acara</label>
            <input type="datetime-local"
                   name="event_time"
                   class="form-control"
                   value="{{ \Carbon\Carbon::parse($event->event_time)->format('Y-m-d\TH:i') }}"
                   required>
        </div>

        {{-- GAMBAR --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Gambar Acara</label>
            <input type="file"
                   name="image"
                   class="form-control">

            @if($event->image)
                <img src="{{ asset('storage/'.$event->image) }}"
                     class="img-fluid rounded mt-2"
                     style="max-height:200px">
            @endif
        </div>

        {{-- BUTTON --}}
        <div class="d-flex gap-2">
            <button class="btn btn-success">
                💾 Simpan Perubahan
            </button>

            <a href="{{ route('event.index') }}"
               class="btn btn-secondary">
                ⬅️ Kembali
            </a>
        </div>

    </form>

</div>
@endsection
