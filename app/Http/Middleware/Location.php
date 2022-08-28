<?php

namespace App\Http\Middleware;

use App\CentralLogic\Helper;
use Closure;
use Illuminate\Http\Request;

class Location
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
        if (! Helper::check_session_timezone()) {
            if (env('APP_DEBUG')) {
                $ip = '80.207.161.250';
            } else {
                $ip = $request->ip();
            }
            
            Helper::check_location($ip);
        }

        return $next($request);
    }
}
