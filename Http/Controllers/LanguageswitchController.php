<?php

namespace Modules\Languageswitch\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;

class LanguageswitchController extends Controller
{
   public function switchLang($lang) {
       if (array_key_exists($lang, config::get('languageswitch.languages'))) {
           session()->put('applocale', $lang);
       }

       return Redirect::back();
   }
}
