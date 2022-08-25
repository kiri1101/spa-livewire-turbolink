<?php

namespace App\Http\Middleware;

use App\CentralLogic\Helper;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location as UserLocation;

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
            $ip = '80.207.161.250';
            Helper::check_location($ip);
        }

        return $next($request);
    }
}
