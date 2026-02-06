@extends('layouts.app')

@section('content')

<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Inter', sans-serif;
        background: #fafafa;
        color: #222;
    }

    .wrap-yasin {
        padding: 40px 10%;
    }

    h2 {
        text-align: center;
        margin-bottom: 10px;
        color: #166534;
        font-weight: 600;
    }

    .bismillah {
        text-align: center;
        font-family: 'Scheherazade New', serif;
        font-size: 42px;
        margin-bottom: 40px;
        color: #111;
    }

    .ayat-box {
        margin-bottom: 35px;
        padding-bottom: 20px;
        border-bottom: 1px solid #ddd;
    }

    .arab {
        font-family: 'Scheherazade New', serif;
        font-size: 38px;
        direction: rtl;
        text-align: right;
        line-height: 1.9;
        color: #111;
    }

    .nomor {
        display: inline-block;
        background: #16a34a;
        color: white;
        border-radius: 50%;
        width: 28px;
        height: 28px;
        text-align: center;
        line-height: 28px;
        font-size: 14px;
        margin-left: 10px;
        font-family: 'Scheherazade New', serif;
    }

    .latin {
        font-style: italic;
        font-size: 16px;
        color: #555;
        margin-top: 6px;
    }

    .terjemahan {
        font-size: 17px;
        margin-top: 6px;
        color: #333;
    }

    audio {
        margin-top: 10px;
        width: 100%;
    }

    @media (max-width: 768px) {
        .wrap-yasin {
            padding: 20px;
        }

        .arab {
            font-size: 30px;
        }

        .bismillah {
            font-size: 34px;
        }
    }
</style>

<div class="wrap-yasin">

    <!-- JUDUL -->
    <h2>سُورَةُ یس</h2>

    <br>

    <!-- BISMILLAH -->
    <div class="bismillah">
        بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
    </div>

    <!-- AYAT -->
    @foreach ($ayat as $a)
        <div class="ayat-box">

            <!-- ARAB -->
            <div class="arab">
                {{ $a['teksArab'] }}
                <span class="nomor">{{ $a['nomorAyat'] }}</span>
            </div>

            <!-- LATIN -->
            <div class="latin">
                {{ $a['teksLatin'] }}
            </div>

            <!-- TERJEMAHAN -->
            <div class="terjemahan">
                {{ $a['teksIndonesia'] }}
            </div>

            <!-- AUDIO -->
            @if(isset($a['audio']['01']))
                <audio controls>
                    <source src="{{ $a['audio']['01'] }}" type="audio/mpeg">
                </audio>
            @endif

        </div>
    @endforeach

</div>

@endsection
