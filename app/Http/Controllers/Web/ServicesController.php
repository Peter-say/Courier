<?php

namespace App\Http\Controllers\Web;

use App\Helpers\PageMetaData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $metaData = PageMetaData::services();
        return view('web.service.index', compact('metaData'));
    }
}
