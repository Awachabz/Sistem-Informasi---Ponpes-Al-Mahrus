<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;



class HomeController extends Controller
{
    public function index()
    {
        return view('public.home');
    }

    public function struktur()
    {
        return view('public.struktur');
    }


public function album()
{
    // PUBLIC / GUEST
    if (!auth()->check()) {
        $albums = Album::where('privacy', 'public')
            ->with('user')
            ->latest()
            ->get();
    } 
    // USER & ADMIN
    else {
        $albums = Album::with('user')
            ->latest()
            ->get();
    }

    return view('album.album', compact('albums'));
}


    public function rotinan()
    {
        return view('public.rotinan');
    }
}
