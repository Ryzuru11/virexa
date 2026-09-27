<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Symfony\Component\HttpFoundation\Response;

/**
 * Throttle Lead Submissions Middleware
 * 
 * Prevents spam by limiting the number of lead submissions per IP address
 * Allows 3 submissions per 10 minutes per IP
 */
class ThrottleLeadSubmissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $key = 'lead-submission:' . $request->ip();
        
        // Allow 3 attempts per 10 minutes
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            $minutes = ceil($seconds / 60);
            
            return response()->json([
                'success' => false,
                'message' => "Terlalu banyak percobaan. Silakan coba lagi dalam {$minutes} menit.",
                'retry_after' => $seconds,
            ], 429);
        }
        
        RateLimiter::hit($key, 600); // 600 seconds = 10 minutes
        
        return $next($request);
    }
}
