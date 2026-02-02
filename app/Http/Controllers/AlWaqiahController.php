<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class AlWaqiahController extends Controller
{
    public function index()
    {
        $ayat = Cache::remember('al_waqiah', 86400, function () {
            return Http::get('https://equran.id/api/v2/surat/56')['data']['ayat'];
        });

        return view('rotinan.alwakiah', compact('ayat'));
    }
}
