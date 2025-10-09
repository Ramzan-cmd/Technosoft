<?php
// app/Http/Middleware/RoleMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // 1. Check if the user is authenticated
        if (!Auth::check()) {
            return redirect('/login'); // Redirect unauthenticated users
        }

        $user = Auth::user();

        // 2. Check if the authenticated user's role matches the required role
        if ($user->role !== $role) {
            // Role mismatch. Redirect or abort with a forbidden error.
            
            // Abort with 403 Forbidden
            abort(403, 'Unauthorized action. Your role does not have access to this resource.');
            
            /* OR, redirect to their own dashboard:
            if ($user->role === 'driver') {
                return redirect()->route('driver.dashboard');
            }
            return redirect()->route('passenger.dashboard');
            */
        }

        // 3. If roles match, proceed with the request
        return $next($request);
    }
}