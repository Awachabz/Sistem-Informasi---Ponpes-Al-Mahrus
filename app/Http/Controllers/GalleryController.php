<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Carbon\Carbon;

class GalleryController extends Controller
{
    public function index()
    {
        $photos = Album::whereNotNull('media')
            ->where('privacy', 'public')
            ->where('media_type', 'image') // PAKAI INI (lebih aman)
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy(function ($item) {
                return Carbon::parse($item->created_at)
                    ->translatedFormat('F Y');
            });

        // SESUAIKAN DENGAN FOLDER
        return view('album.galery', compact('photos'));
    }
}
