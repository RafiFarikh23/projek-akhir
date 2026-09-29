<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PelangganMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (auth()->user()->role !== 'pelanggan') {
            abort(403, 'Anda tidak memiliki akses ke halaman pelanggan.');
        }

        return $next($request);
    }
}