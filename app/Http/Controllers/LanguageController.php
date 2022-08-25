<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function languageToggle($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            if ($lang=='en') {
                session(['applocale' => $lang, 'timezone' => config('languages.en.timezone')]);
            } elseif ($lang=='fr') {
                session(['applocale' => $lang, 'timezone' => config('languages.fr.timezone')]);
            } elseif ($lang=='it') {
                session(['applocale' => $lang, 'timezone' => config('languages.it.timezone')]);
            } else {
                session()->put('applocale', config('app.fallback_locale'));
                session()->forget('timezone');
            }
        }
        return redirect()->route('home');
    }
}
