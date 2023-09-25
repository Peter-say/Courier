<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $pageTitle = 'Logistics and Transportation Services - Makes Logistics Easy - SwiftlySend';
        $pageDescription = 'Discover how SwiftlySend makes logistics easy with our comprehensive logistics and transportation services. We offer a wide range of solutions to streamline your supply chain, from warehousing and distribution to freight management. Get started today!';
        return view('web.service.index', compact('pageTitle', 'pageDescription'));
    }
}
