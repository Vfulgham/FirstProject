<?php

namespace App\Http\Controllers;


use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        $name = 'Vicki';
        $firstName = 'Vicki';
        $lastName = 'Russo';
        $title = 'About Me';

        return view('pages.about', compact('name','firstName','lastName',
            'title'));
    }
}
