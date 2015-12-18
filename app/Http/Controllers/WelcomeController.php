<?php

namespace App\Http\Controllers;


use App\Http\Requests;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
