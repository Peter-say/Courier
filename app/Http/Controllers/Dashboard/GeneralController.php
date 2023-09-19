<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function allNotification()
    {
        $notifications = Notification::all();
        return view('dashboard.notification.index', compact('notifications'));
    }
}
