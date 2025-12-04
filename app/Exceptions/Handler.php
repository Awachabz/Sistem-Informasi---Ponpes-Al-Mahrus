<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function render($request, Throwable $e)
    {
        // Jika user login dan role-nya admin
        if (auth()->check() && auth()->user()->role === 'admin') {
            // Kalau ada error apa pun, arahkan ke dashboard
            return redirect('/admin/dashboard')
                ->with('warning', 'Terjadi kesalahan, Anda telah diarahkan ke dashboard admin.');
        }

        // Jalankan default handler untuk user biasa
        return parent::render($request, $e);
    }
}
