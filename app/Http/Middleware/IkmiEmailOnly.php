<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IkmiEmailOnly
{
    /**
     * Handle an incoming request.
     * Hanya user dengan email @ikmi.ac.id yang bisa mengakses route ini.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        // Cek apakah email user mengandung @ikmi.ac.id
        if (!$user || !str_ends_with($user->email, '@ikmi.ac.id')) {
            abort(403, 'Akses ditolak. Hanya user dengan email @ikmi.ac.id yang dapat menghapus data mahasiswa.');
        }

        return $next($request);
    }
}
