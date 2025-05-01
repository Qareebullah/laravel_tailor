<?php

namespace App\Http\Middleware;

use Closure;

class HandleCors
{
    public function handle($request, Closure $next)
    {
        // Allow cross-origin requests from your React Native app
        $response = $next($request);
        
        // Add CORS headers to the response
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:8081');  // React Native app's origin
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With, Authorization');
        
        return $response;
    }
}