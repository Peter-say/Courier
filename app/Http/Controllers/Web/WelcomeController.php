<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('web.index');
    }

    public function contactUS()
    {
        return view('web.contact-us');
    }

    public function aboutUS()
    {
        return view('web.about-us');
    }
}
