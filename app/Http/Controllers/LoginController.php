<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    // dd($credentials); // hapus atau komentar

    $remember = $request->filled('remember');

    if (Auth::attempt($credentials, $remember)) {
        $request->session()->regenerate();

        $user = Auth::user();
        // dd($user); // hapus atau komentar

        // Cek status akun
        if ($user->status !== 'active') {
            Auth::logout();
            return back()->with('error', 'Akun Anda belum disetujui oleh admin.');
        }

        if ($user->role === 'admin') {
            return redirect()->route('admin/dashboard');
        }

        if ($user->role === 'user') {
            return redirect()->route('dashboard');
        }

        return redirect()->route('home');
    }

    return back()->with('error', 'Email atau password salah.')->onlyInput('email');
}


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('message', 'Anda telah logout.');
    }
}
