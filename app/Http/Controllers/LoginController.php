<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * 🔹 Tampilkan halaman login
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * 🔹 Proses login user
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->filled('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $user = Auth::user();

            // ✅ Pastikan user aktif
            if ($user->status !== 'active') {
                Auth::logout();
                return back()->with('error', 'Akun Anda belum disetujui oleh admin.');
            }

            // ✅ Redirect sesuai role
            if ($user->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            } elseif ($user->role === 'user') {
                return redirect()->intended('/dashboard');
            }

            // fallback
            return redirect()->intended('/');
        }

        return back()->with('error', 'Email atau password salah.')->onlyInput('email');
    }

    /**
     * 🔹 Logout user
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('message', 'Anda telah logout.');
    }
}
