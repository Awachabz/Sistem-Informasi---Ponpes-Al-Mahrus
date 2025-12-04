<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $roles)
    {
        // Ubah ke array jika banyak role (dipisah dengan "|")
        $roles= "user|admin";
        $allowedRoles = is_array($roles) ? $roles : explode('|', $roles);
        
        // Kalau belum login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }
        
        // Ambil role user yang login
        $userRole = Auth::user()->role;
        // dd($userRole);

        // Jika role user tidak termasuk dalam daftar yang diizinkan
        if (!in_array($userRole, $allowedRoles)) {
            abort(403, 'Anda tidak memiliki izin untuk mengakses halaman ini.');
        }

        return $next($request);
    }
}
