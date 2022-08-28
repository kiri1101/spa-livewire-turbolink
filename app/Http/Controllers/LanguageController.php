<?php

namespace App\Http\Controllers;

use App\CentralLogic\Helper;

class LanguageController extends Controller
{
    public function languageToggle($lang)
    {
        Helper::language_switch($lang);
        return redirect()->route('home');
    }
}
