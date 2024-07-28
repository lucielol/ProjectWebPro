<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $response->header('Access-Control-Allow-Origin', 'http://localhost:3000');
        $response->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Accept, Authorization');

        return $response;
    }
}
