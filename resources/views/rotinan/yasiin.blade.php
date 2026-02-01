@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">📖 Surat Yasin</h2>

    @foreach ($ayat as $a)
        <div class="mb-4 p-3 border rounded shadow-sm">

            {{-- Nomor Ayat --}}
            <div class="text-muted mb-1">
                <strong>Ayat {{ $a['nomorAyat'] }}</strong>
            </div>

            {{-- Arab --}}
            <div style="font-size:28px; text-align:right; line-height:1.8;">
                {{ $a['teksArab'] }}
            </div>

            {{-- Latin --}}
            <div class="fst-italic text-muted mt-2">
                {{ $a['teksLatin'] }}
            </div>

            {{-- Terjemahan --}}
            <div class="mt-2">
                {{ $a['teksIndonesia'] }}
            </div>

            {{-- Audio --}}
            <div class="mt-3">
                <audio controls style="width:100%;">
                    <source src="{{ $a['audio']['01'] }}" type="audio/mpeg">
                </audio>
            </div>

        </div>
    @endforeach
</div>
@endsection
