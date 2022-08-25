<?php 

namespace App\CentralLogic;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Stevebauman\Location\Facades\Location;

class Helper 
{
    public static function check_location($ip) {
        if(array_key_exists(strtolower(Location::get($ip)->countryCode), Config::get('languages'))) {
            session()->put('applocale', strtolower(Location::get($ip)->countryCode));
            App::setLocale(strtolower(Location::get($ip)->countryCode));
        } else {
            session()->put('applocale', config('app.fallback_locale'));
            App::setLocale(strtolower(Location::get($ip)->countryCode));
        }
    }

    public static function check_session_timezone()
    {
        if (array_key_exists('timezone', session()->all())) {
            return true;
        }
        return false;
    }
}