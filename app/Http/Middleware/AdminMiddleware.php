<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user yang login memiliki role 'admin'
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // Jika bukan admin, logout dan redirect ke login
        auth()->logout();
        return redirect()->route('admin.login')
            ->with('error', 'Akses ditolak. Hanya admin yang diizinkan masuk.');
    }
}