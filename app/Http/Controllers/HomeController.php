<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('public.album');
    }

    public function rotinan()
    {
        return view('public.rotinan');
    }
}
