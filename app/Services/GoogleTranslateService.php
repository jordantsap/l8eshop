<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class GoogleTranslateService
{
    public function translationService(Request $request)
    {

        if (app()->getLocale() == 'en') {
            $title = GoogleTranslate::trans($request->title,'el');
            if ($title) {
                // dd($title);
                $category->title = $request->title;

                $category->translate('el')->title = $title;

            } else {
                dd('notitlefrom ' . '$src');
            };
        } else {

            $title = GoogleTranslate::trans($request->title,'en');
            if ($title) {
                // dd($title);
                $category->title = $request->title;

                $category->translate('en')->title = $title;
            } else {
                dd('notitlefrom ' . '$src');
            };
        }
    }
}
