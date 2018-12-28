<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function language(Request $request)
    {
        \Session::put('language', $request->get('locale', 'en'));
        \App::setLocale($request->get('locale', 'ar'));
        return \Redirect::back();
    }
}
