<?php

namespace App\Http\Middleware;

use Closure;

class ApiLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->query("locale");
        if (!empty($locale))
            app()->setLocale($locale);
        return $next($request);
    }
}
