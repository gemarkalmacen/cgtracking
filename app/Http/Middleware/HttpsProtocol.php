<?php

namespace App\Http\Middleware;

use Closure;

class HttpsProtocol {

    public function handle($request, Closure $next)
    {
        if (!$request->secure()) {
            $parts = parse_url(config('app.url'));
            $uri = $request->getRequestUri();            
            if (isset($parts['path'])) {
                $uri = str_replace($parts['path'], '', $uri);
            }                        
            // return redirect()->secure($uri);
        }
        return $next($request); 
    }
}