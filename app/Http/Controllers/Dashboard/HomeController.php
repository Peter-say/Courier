<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $usersCount = $users->count();
        $parcels = Shipment::all();
        $percelCount = $parcels->count();
        return view('dashboard.index', [
            'usersCount' => $usersCount,
            'percelCount' => $percelCount,
        ]);
    }
}
