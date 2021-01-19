<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    /**
     * Staff panel Language
     *
     * @return \Illuminate\Http\Response
     */
     public function changeLanguage($language)
     {
         session()->put('winepromo_staff_language', $language);
         app()->setLocale($language);
         return redirect()->back();
     }


}
