<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class YasinController extends Controller
{
    public function index()
    {
        $ayat = Cache::remember('yasin', 86400, function () {
            $response = Http::get('https://equran.id/api/v2/surat/36');
            return $response['data']['ayat'];
        });

        return view('rotinan.yasiin', compact('ayat'));
    }
}
