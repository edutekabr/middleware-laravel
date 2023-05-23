<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Log;

class CheckUserLocation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //Executado antes de entrar
        // Log::warning("first");
        $location = $request->query('location') ?? 'BRA';

        $request->merge(['location' => $location]);

        $response = $next($request);

        //Executado depois de entrar
        // Log::warning("last");
        $response->setStatusCode(200);

        return $response;
    }
}
