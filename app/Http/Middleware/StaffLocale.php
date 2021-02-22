<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Cookie;
use Closure;

class StaffLocale
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
        $locale = session()->has('cgtracking_staff_language') ? ( (session()->get('cgtracking_staff_language')=='categories') ? 'en' : session()->get('cgtracking_staff_language') ) : 'en';
        Cookie::queue('cgtracking_staff_language', $locale, 30);
        session()->put('cgtracking_staff_language', $locale);
        app()->setLocale($locale);
        return $next($request);
    }
}
