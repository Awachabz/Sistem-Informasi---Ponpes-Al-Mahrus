<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class AlMulkController extends Controller
{
    public function index()
    {
        $ayat = Cache::remember('al_mulk', 86400, function () {
            return Http::get('https://equran.id/api/v2/surat/67')['data']['ayat'];
        });

        return view('rotinan.almulk', compact('ayat'));
    }
}
