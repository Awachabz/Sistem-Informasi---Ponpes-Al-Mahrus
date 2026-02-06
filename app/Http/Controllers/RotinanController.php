<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class RotinanController extends Controller
{
    // =========================
    // SURAT YASIN (36)
    // =========================
    public function yasiin()
    {
        $ayat = Cache::remember('yasin', 86400, function () {
            $response = Http::get('https://equran.id/api/v2/surat/36');

            return collect($response['data']['ayat'])->map(function ($a) {
                return [
                    'nomorAyat'     => $a['nomorAyat'],
                    'teksArab'      => $a['teksArab'],
                    'teksLatin'     => $a['teksLatin'],
                    'teksIndonesia' => $a['teksIndonesia'] ?? '-',
                    'audio'         => $a['audio'] ?? null,
                ];
            })->toArray();
        });

        return view('rotinan.yasiin', compact('ayat'));
    }

    // =========================
    // SURAT AL-WAQIAH (56)
    // =========================
    public function waqiah()
    {
        $ayat = Cache::remember('waqiah', 86400, function () {
            $response = Http::get('https://equran.id/api/v2/surat/56');

            return collect($response['data']['ayat'])->map(function ($a) {
                return [
                    'nomorAyat'     => $a['nomorAyat'],
                    'teksArab'      => $a['teksArab'],
                    'teksLatin'     => $a['teksLatin'],
                    'teksIndonesia' => $a['teksIndonesia'] ?? '-',
                    'audio'         => $a['audio'] ?? null,
                ];
            })->toArray();
        });

        return view('rotinan.alwakiah', compact('ayat'));
    }

    
    // ===============
    // Al-Mulk
    // ===============

    public function almulk()
    {
        $ayat = Cache::remember('almulk', 86400, function () {
            $response = Http::get('https://equran.id/api/v2/surat/67');
            return $response['data']['ayat'];
        });

        return view('rotinan.almulk', compact('ayat'));
    }


}
