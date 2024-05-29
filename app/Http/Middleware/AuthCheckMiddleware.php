<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            return $next($request);
        }

        // Redirect or show error message for unauthorized access
        return redirect('/')->with('error', 'Maaf Hanya admin yang bisa mengakses Ini !!')->with('modal', 'error');
    }
}
