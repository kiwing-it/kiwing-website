<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController
{
    public function home()
    {
        $alternativeLocale = app()->getLocale() !== 'es' ? 'es' : 'en';

        return view('landing.landing', compact('alternativeLocale'));
    }

    public function locale($locale)
    {
        if ($locale === 'es') {
            session(['locale' => $locale]);
        } elseif ($locale === 'en') {
            session(['locale' => $locale]);
        }

        return redirect()->route('home');
    }

    public function contactUs(Request $request)
    {
        return 'success';
    }
}
