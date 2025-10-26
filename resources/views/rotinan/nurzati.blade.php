@extends('layouts.app') {{-- sesuaikan dengan layout utama kamu --}}

@section('title', 'Sholawat Nurzati')

@section('content')
<div class="container mt-5 mb-5 text-center">

    <h3 class="fw-bold mb-4">Sholawat Nurzati</h3>

    <p dir="rtl" class="fs-2 lh-lg" style="font-family: 'Scheherazade New', serif; line-height: 2.3; font-size: 2rem;">
        اَللّٰهُمَّ صَلِّ وَسَلِّمْ وَبَارِكْ عَلَى سَيِّدِنَا مُحَمَّدٍ النُّورِ الذَّاتِي
        <br/> وَالسِّرِّ السَّارِي
        فِي سَائِرِ الأَسْمَاءِ وَالصِّفَاتِ وَعَلَى أَلِهِ وَصَحْبِهِ وَسَلِّمْ
    </p>

    {{-- Jarak lebih jauh ke bawah --}}
    <div class="text-start" style="max-width: 900px; margin: 100px auto 0;">
        <p class="fw-bold">Artinya:</p>
        <p>
            "Ya Allah berikanlah rahmat, keselamatan, dan berkah kepada junjungan kami Nabi Muhammad SAW
            yang merupakan cahaya Dzat (Allah) dan merupakan rahasia yang mengalir pada seluruh nama dan semua sifat,
            dan semoga salam juga selalu tercurahkan kepada keluarga serta sahabatnya."
        </p>
    </div>
</div>
    <div class="text-start" style="max-width: 900px; margin: 100px auto 0;">

@endsection
